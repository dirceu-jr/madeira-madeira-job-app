@unless($actions->readonly())
    @if (isset($item))
        <div class="btn-group pull-right mt5">
            @if ($actions->authorize('view', $item))
                <a href="{{ route('scaffold.view', ['module' => $module, 'id' => $item->getKey()]) }}"
                   class="btn btn-primary btn-quirk">
                    <i class="fa fa-eye"></i>
                    {{ trans('administrator::buttons.view') }}
                </a>
            @endif
            @if ($actions->authorize('create'))
                <a href="{{ route('scaffold.create', ['module' => $module]) }}"
                   class="btn btn-success btn-quirk">
                    <i class="fa fa-plus"></i>
                    {{ trans('administrator::buttons.create') }}
                </a>
            @endif

            @if ($actions->authorize('delete', $item))
                <a href="{{ route('scaffold.delete', ['module' => $module, 'id' => $item->getKey()]) }}"
                   class="btn btn-danger btn-quirk"
                   onclick="return confirm('Are you sure?');">
                    <i class="fa fa-trash"></i>
                    {{ trans('administrator::buttons.delete') }}
                </a>
            @endif
        </div>
    @endif
@endunless