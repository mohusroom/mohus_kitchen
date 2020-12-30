<?php

namespace App\Services\RouteSupport;

use \App\Services\RouteSupport\RouteSupport;

class AssetRenderPerRouteService extends RenderPerRouteAbstract
{
    public $tagDefinition = [
        'link' => [
            'rel', 'href', 'type'
        ],
        'script' => [
            '__contain', 'src', '__single'
        ],
        '__comment' => [
            '__single'
        ]
    ];
}
