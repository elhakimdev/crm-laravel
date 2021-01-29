<x-app-layout>
    <div class="container sm mx-auto px-8">
        <div class="flex flex-row">
            <div class="py-4">
                <h1 class="text-3xl font-bold leading-tight text-gray-900">
                Roles
            </h1>
            </div>
        </div>
        {{-- content at here --}}
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
            Roles Information
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Roles details and application.
            </p>
        </div>
        <div class="border-t border-gray-200">
            <dl>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                Role name
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $data->name}}
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                Guard 
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $data->guard_name }}
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                Role Created
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{$data->created_at}} -  {{$data->created_at->diffForHumans()}}
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                Role Updated
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{$data->updated_at}} - {{$data->updated_at->diffForHumans()}}
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                User has Roles
                </dt>
                @forelse ($data->users as $item)
                    <dd class="mt-1 text-sm sm:mt-0 sm:col-span-2 text-green-800">
                    {{$item->name}}
                    </dd>
                @empty
                    <dd class="mt-1 text-sm sm:mt-0 sm:col-span-2 text-red-800">
                    {{ 'No Attached User' }}
                    </dd>
                @endforelse
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                Ability
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <ul class="border border-gray-200 rounded-md divide-y divide-gray-200">

                    @forelse ($data->permissions as $permission)
                    <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                        <div class="w-0 flex-1 flex items-center">
                            <!-- Heroicon name: paper-clip -->
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-2 flex-1 w-0 truncate">
                            {{$permission->name}}
                            </span>
                        </div>
                        <div class="ml-4 flex-shrink-0">
                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                            Detail
                            </a>
                        </div>
                    </li>
                    @empty
                    <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                        <div class="w-0 flex-1 flex items-center">
                        <span class="text-red-800">{{ 'No Attached Permissions' }}</span>
                        </div>
                    </li>
                    @endforelse
                </ul>
                </dd>
            </div>
            </dl>
        </div>
        </div>

    </div>
</x-app-layout>