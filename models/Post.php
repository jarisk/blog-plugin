<?php namespace Plugins\October\Blog\Models;

use Model;

class Post extends Model
{
    public $table = 'october_blog_posts';

    /*
     * Validation
     */
    public $rules = [
        'title' => 'required',
        'excerpt' => 'required',
    ];

    protected $guarded = [];

    /*
     * Relations
     */
    public $morphMany = [
        'featured_images' => ['Modules\System\Models\File', 'name' => 'attachment']
    ];

}