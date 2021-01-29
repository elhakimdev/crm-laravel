<div class="w-1/5 bg-indigo-800 min-h-screen px-4 py-3">
    <div class="mb-6">
        <!-- Logo -->
        <div class="flex-shrink-0 flex items-center">
            <a href="{{ route('dashboard') }}">
                <x-application-logo class="block h-10 w-auto fill-current text-white ml-1" />
            </a>
            <span class="text-white font-medium ml-3"><strong>Laravel-CRM</strong></span>
        </div>
    </div>
    <div class="mb-6">
        <header class="font-small text-indigo-300 px-2">
            Main
        </header>
        <a href="{{route('dashboard')}}" class="block font-medium text-white px-2 py-2">Dashboard</a>
        <a href="#" class="block font-medium text-white px-2 py-2">Main</a>
    </div>
    <div class="mb-6">
        <header class="font-small text-indigo-300 px-2">
            Master Data
        </header>
        <a href="#" class="block font-medium text-white px-2 py-2">User</a>
    </div>
    <div class="mb-6">
        <header class="font-small text-indigo-300 px-2">
            Policies
        </header>
        <a href="{{ route('roles') }}" class="block font-medium text-white px-2 py-2">Roles</a>
        <a href="{{ route('permissions') }}" class="block font-medium text-white px-2 py-2">Permisssions</a>
    </div>
</div>