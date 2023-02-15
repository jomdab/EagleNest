
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Create Room button -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg my-5">
            <div class="container mx-auto my-5">
                <div class="flex justify-center">
                    <button onclick="location.href='/{{ Auth::user()->id }}/admin'" class="bg-blue-500 hover:bg-blue-700  font-bold py-2 px-5 rounded text-xl btn btn-outline-secondary my-2">
                        <h3>
                            {{ __('Create Room') }}
                        </h3>
                    </button>
                </div>
            </div>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <!-- Join Room button -->
            <div class="container mx-auto my-5">
                <div class="flex justify-center">
                <form action="{{ url('/join-room') }}" method="GET">
                    @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" id="roomId" name="roomId" placeholder="Enter Room ID" required>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700  font-bold py-2 px-5 rounded text-xl btn btn-outline-secondary my-2">
                            <h3>
                                {{ __('Join Room') }}
                            </h3>
                            </button>
                        </div>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>

