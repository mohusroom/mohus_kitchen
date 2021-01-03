<?php

use App\Facades\Assets;

Assets::for('user.*', function ($tag) {
    $tag->link(['type' => 'text/css', 'rel' => 'stylesheet', 'href' => mix('css/user/base.css')]);
    // $tag->link(['type' => 'text/css', 'rel' => 'stylesheet', 'href' => mix('css/app.css')]);
});

Assets::for('user.home', function ($tag) {
    $tag->link(['type' => 'text/css', 'rel' => 'stylesheet', 'href' => mix('css/user/home/show.css')]);

    // $tag->script(['src' => mix('js/user/home/show.js'), '__single' => 'defer', '__contain' => '']);
});

Assets::for('agent.*', function ($tag) {
    // $tag->link(['type' => 'text/css', 'rel' => 'stylesheet', 'href' => mix('css/agent/base.css')]);

    // $tag->script(['src' => mix('js/user/home/show.js'), '__single' => 'defer', '__contain' => '']);
});
