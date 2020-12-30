<?php

/**
 * ## ルール
 *
 * - プロジェクト単位で変わる値は .env への移行を検討し、 env ヘルパで取得する
 * - 通常の配列、連想配列のみを利用し、Collection などを返さない
 * - ID などに integer 型を使用する場合、0 は使わない（NULL を int キャストすると 0 になり混同するため）
 */

return [
    // domain
    'domain' => env('APP_DOMAIN'),

    // サイト名
    'site_name' => "Mohu's Kitchen",

    // ファイルストレージディスク
    'storage_disk' => env('STORAGE_DISK', 'local'),
];
