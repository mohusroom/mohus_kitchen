<?php

use App\Facades\Metas;

Metas::for('user.home', function ($tag) {
    // $tag->title(['__contain' => 'キャバクラの口コミ・人気ランキングは【' . config('myapp.site_name') . '】']);
    // $tag->meta(['name' => 'description', 'content' => 'キャバクラをお探しなら【' . config('myapp.site_name') . '】にお任せください！美女が揃う有名店や評判の良い穴場店など各地にある人気のキャバクラがひと目で分かるランキング形式でご紹介♪口コミ情報からお店の雰囲気もわかるので貴方にピッタリなキャバクラ店がきっと見つかります！']);
    // $tag->link(['rel' => 'canonical', 'href' => config('app.url')]);
});
