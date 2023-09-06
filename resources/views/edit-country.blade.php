<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="/countries/{{$country->id}}" class="border border-gray-200 m-8 mr-4 w-auto rounded-lg">
                    @method("PATCH")
                    @csrf
                    <x-country-form :name="$country->name" :iso="$country->iso"></x-country-form>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
