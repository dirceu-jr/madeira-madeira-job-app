@inject('template', 'scaffold.template')
@inject('config', 'scaffold.config')

@extends($template->layout($popup ? 'popup' : 'app'))

@push('scaffold.headjs')
    @include('administrator::media.scripts')
@endpush

@section('scaffold.content')
    <h4>{{ trans('administrator::media.title') }}</h4>

    {!! $breadcrumbs !!}

    <div id="app">
        <media-manager></media-manager>
    </div>
@append
