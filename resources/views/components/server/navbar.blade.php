<div class="pb-6">
    <h1>Server</h1>
    <nav class="flex pt-2 pb-10 text-sm">
        <ol class="inline-flex items-center">
            <li class="inline-flex items-center">
                {{ data_get($server, 'name') }}
            </li>

        </ol>
    </nav>
    <nav class="flex items-center h-12 gap-4 py-2 border-b-2 border-solid border-coolgray-200">
        <a class="{{ request()->routeIs('server.show') ? 'text-white' : '' }}"
            href="{{ route('server.show', [
                'server_uuid' => Route::current()->parameters()['server_uuid'],
            ]) }}">
            <button>General</button>
        </a>
        <a class="{{ request()->routeIs('server.proxy') ? 'text-white' : '' }}"
            href="{{ route('server.proxy', [
                'server_uuid' => Route::current()->parameters()['server_uuid'],
            ]) }}">
            <button>Proxy</button>
        </a>
        @if (request()->routeIs('server.proxy'))
            <div class="flex-1"></div>
            <livewire:server.proxy.deploy :server="$server" />
        @endif
    </nav>
</div>
