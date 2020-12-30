<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('user._share.components.metas')
        @include('user._share.components.assets')
    </head>
    <body>
        <!-- -------------------- header -------------------- -->
        @include('user._share.layouts.header')

        <!-- -------------------- main -------------------- -->
        <main>
            @yield('main')
        </main>

        <!-- -------------------- footer -------------------- -->
        @include('user._share.layouts.footer')
    </body>
</html>
