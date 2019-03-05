<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Tag;
use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\PostRequest as StoreRequest;
use App\Http\Requests\PostRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class PostCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class PostCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Post');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/post');
        $this->crud->setEntityNameStrings('post', 'posts');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        //$this->crud->setFromDb();

        // ------ CRUD COLUMNS

        $this->crud->orderBy('updated_at', 'desc');

        $this->crud->addColumns([
            [
                'name' => 'name',
                'label' => 'Title',
            ],
            [
                'name' => 'image',
                'label' => 'Image',
                'type' => 'image',
            ],
            [
                'label' => 'Category',
                'type' => 'select',
                'name' => 'category_id',
                'entity' => 'category',
                'attribute' => 'name',
                'model' => "App\Models\Category",
            ],
            [
                'label' => 'Time',
                'name' => 'updated_at',
                'type' => "datetime",
                'format' => 'd/m/Y',
            ],
            [
                'name' => 'is_home',
                'label' => 'IsHome',
                'type' => 'select_from_array',
                'options' => [1 => 'Yes', 0 => 'No']
            ],
            [
                'name' => 'status',
                'label' => 'Status',
                'type' => 'select_from_array',
                'options' => [1 => 'Active', 0 => 'Inactive']
            ]
        ]);



        // ------ CRUD FIELDS
        $this->crud->addFields([
            [
                'name' => 'name',
                'label' => 'Name',
                'type' => 'text',
                'placeholder' => 'Your title here',
            ],
            [
                'name' => 'desc',
                'label' => 'Description',
                'type' => 'textarea'
            ],
            [
                'label' => 'Content',
                'type' => 'ckeditor',
                'name' => 'content',
                'placeholder' => 'Your textarea text here',
            ],
            [
                'name' => 'image',
                'label' => 'Image',
                'type' => 'browse',
            ],
            [
                'label' => 'Category',
                'type' => 'select2',
                'name' => 'category_id',
                'entity' => 'category',
                'attribute' => 'name',
                'model' => "App\Models\Category",
            ],
            [
                'label' => 'Tags',
                'type' => 'select2_multiple',
                'name' => 'tags', // the method that defines the relationship in your Model
                'entity' => 'tags', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'model' => "App\Models\Tag", // foreign key model
                'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
            ],
            [
                'name' => 'status',
                'label' => 'Status',
                'type' => 'select2_from_array',
                'options' => [1 => 'Active', 0 => 'Inactive'],
                'allows_null' => false,
                'default' => 1,
            ],
            [
                'name' => 'is_home',
                'label' => 'IsHome',
                'type' => 'select2_from_array',
                'options' => [1 => 'Yes', 0 => 'No'],
                'allows_null' => false,
                'default' => 1,
            ]
        ]);


        // add asterisk for fields that are required in PostRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');


        $this->crud->addButtonFromView('line', 'switch_is_home', 'switch_is_home', 'beginning');

        $this->crud->addButtonFromModelFunction('line', 'view_in_site', 'viewInSite', 'beginning');
    }

    public function store(StoreRequest $request)
    {

        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);


        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function switch_is_home($id)
    {
        $content = Post::find($id);

        if ($content) {
            $update_status = ($content->is_home)? false : true;
            $content->update(['is_home' => $update_status]);
        }

        return redirect(url($this->crud->route));
    }

}
