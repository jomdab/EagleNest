<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="container mx-auto my-5">
                <div class="flex justify-center">
                    <button onclick="location.href='/{{ Auth::user()->name }}/admin'" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded text-xl">
                        <h3>
                            {{ __('Create Room') }}
                        </h3>
                    </button>
                </div>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
