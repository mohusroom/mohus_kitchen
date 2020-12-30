@if (isset($exception))
    {{ Metas::render('errors.404') }}
@else
    {{ Metas::render() }}
@endif
