<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
                <div class="flex items-start">
                <form method="POST" action="/countries" class="border border-gray-200 m-8 mr-4 w-auto rounded-lg">
                    @csrf
                    <x-country-form></x-country-form>
                </form>
                <div class="border border-gray-200 m-8 ml-4 w-auto rounded-lg flex-grow">
                    <div class="bg-gray-100 p-4">
                        List of countries
                    </div>
                    <div class="p-6">
                        <table class="w-full">
                        <thead>
                        <tr class="border-b-2 border-b-gray-400 border-t text-left">
                            <th class="py-2">#</th>
                            <th class="py-2">Name</th>
                            <th class="py-2">ISO</th>
                            <th class="py-2">Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($countries as $country)
                            <tr class="border-t">
                                <td class="py-2 font-bold">{{$country->id}}</td>
                                <td class="py-2">{{$country->name}} </td>
                                <td class="py-2">{{$country->iso}}</td>
                                <td class="py-2">
                                    <a href="/countries/{{$country->id}}/edit" class="px-4 py-2 text-sm leading-5
                                    text-white hover:bg-blue-400 focus:outline-none
                                    focus:bg-blue-400 transition duration-150
                                    ease-in-out bg-blue-500 rounded">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
