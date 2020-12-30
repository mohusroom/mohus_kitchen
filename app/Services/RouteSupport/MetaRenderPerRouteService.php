<?php

namespace App\Services\RouteSupport;

use \App\Services\RouteSupport\RouteSupport;

class MetaRenderPerRouteService extends RenderPerRouteAbstract
{
    public $tagDefinition = [
        'title' => [
            '__contain',
        ],
        'meta' => [
            'name', 'charset', 'content',
        ],
        'link' => [
            'rel', 'href',
        ],
        '__comment' => [
            '__single'
        ]
    ];
}
