<?php namespace Plugins\October\Blog;

use Backend;
use Modules\System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name' => 'Blog Plugin',
            'description' => 'A robust blogging platform.',
            'author' => 'Alexey Bobkov, Samuel Georges'
        ];
    }

    public function registerComponents()
    {
        return [
            'Plugins\October\Blog\Components\Post' => 'blogPost'
        ];
    }

    public function registerNavigation()
    {
        return [
            'blog' => [
                'label' => 'Blog',
                'url' => Backend::url('october/blog/posts'),
                'icon' => 'icon-pencil',
                'permissions' => ['blog:*'],
                'order' => 500,
                'subMenu' => [
                    'posts' => [
                        'label' => 'Posts',
                        'icon' => 'icon-copy',
                        'url' => Backend::url('october/blog/posts'),
                        'permissions' => ['blog:access_posts'],
                    ],
                    'categories' => [
                        'label' => 'Categories',
                        'icon' => 'icon-copy',
                        'url' => Backend::url('october/blog/categories'),
                        'permissions' => ['blog:access_categories'],
                    ],
                ]
            ]
        ];
    }

}