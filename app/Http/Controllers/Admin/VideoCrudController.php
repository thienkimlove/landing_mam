<?php

namespace App\Http\Controllers\Admin;

use App\Models\Video;
use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\VideoRequest as StoreRequest;
use App\Http\Requests\VideoRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class VideoCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class VideoCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Video');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/video');
        $this->crud->setEntityNameStrings('video', 'videos');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        //$this->crud->setFromDb();
        $this->crud->addColumns(
            [
                'name' => 'name',
                'label' => 'Title',
            ],
            [
                'name' => 'status',
                'label' => 'Status',
                'type' => 'select_from_array',
                'options' => [1 => 'Active', 0 => 'Inactive']
            ]
        );



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
                'name' => 'code',
                'label' => 'YouTube Iframe Code',
                'type' => 'textarea'
            ],
            [
                'name' => 'status',
                'label' => 'Status',
                'type' => 'select2_from_array',
                'options' => [1 => 'Active', 0 => 'Inactive'],
                'allows_null' => false,
                'default' => 1,
            ]
        ]);

        $this->crud->addButtonFromView('line', 'switch_is_home', 'switch_is_home', 'beginning');

        // add asterisk for fields that are required in VideoRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
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
        $content = Video::find($id);

        if ($content) {
            $update_status = ($content->is_home)? false : true;
            $content->update(['is_home' => $update_status]);
        }

        return redirect(url($this->crud->route));
    }
}
