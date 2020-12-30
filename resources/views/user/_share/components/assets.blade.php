@if (isset($exception))
    {{ Assets::render('errors.404') }}
@else
    {{ Assets::render() }}
@endif
