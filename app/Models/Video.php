<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Video extends Model
{
    use CrudTrait;
    use Sluggable, SluggableScopeHelpers;
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'videos';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'slug',
        'desc',
        'status',
        'code',
        'is_home'
    ];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'slug_or_name',
            ],
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */
    public function getSlugOrNameAttribute()
    {
        if ($this->slug != '') {
            return $this->slug;
        }

        return $this->name;
    }

    public function getYoutubeEmbedIdAttribute()
    {
        // Extract video url from embed code
        $youtubeVideoId = preg_replace_callback('/<iframe\s+.*?\s+src=(".*?").*?<\/iframe>/', function ($matches) {
            // Remove quotes
            $youtubeUrl = $matches[1];
            $youtubeUrl = trim($youtubeUrl, '"');
            $youtubeUrl = trim($youtubeUrl, "'");
            // Extract id
            preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $youtubeUrl, $videoId);
            return $youtubeVideoId = isset($videoId[1]) ? $videoId[1] : "";
        }, $this->code);

        return $youtubeVideoId;
    }

    public function getCodeByValues($w='auto', $h = 'auto')
    {
        $dom = new \DOMDocument;
        $dom->loadHTML($this->code);
        $iframes = $dom->getElementsByTagName('iframe');
        if (isset($iframes[0])) {
            $iframes[0]->setAttribute('height', $h);
            $iframes[0]->setAttribute('width', $w);
            //$iframes[0]->setAttribute('scrolling', 'no');
            return $dom->saveHTML($iframes[0]);
        } else {
            return '';
        }
    }
    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
