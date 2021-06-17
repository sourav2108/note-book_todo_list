<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
                {{ Auth::user()->name }}
                For TODO Page <a href="/todo">Click Here</a>
            </div>
        </div>
    </div> --}}

    <div class="container mt-5">
        <div class="row">
            <div class="col-4 offset-2">
                <div class="card bg-warning">
                    <div class="card-body">
                        <h5> For TODO Page <a href="/todo" class="text-danger">Click Here</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card bg-warning">
                    <div class="card-body">
                        <h5> For NoteBook Page <a href="/notebook" class="text-danger">Click Here</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
