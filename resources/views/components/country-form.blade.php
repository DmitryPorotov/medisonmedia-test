<div class="bg-gray-100 p-4 border-b">
    Add New Country
</div>
@php
//if(isset($errors))ddd($errors);
@endphp
<div>
    <div class="m-6">
        <label for="name">Name</label>
        <div class="mt-2">
            <input id="name" name="name" value="{{$name}}" class="block
                                w-full rounded-md border-0 py-1.5
                                text-gray-900 shadow-sm ring-1
                                ring-inset ring-gray-300 placeholder:text-gray-400
                                focus:ring-2 focus:ring-inset focus:ring-indigo-600
                                sm:text-sm sm:leading-6">
        </div>
        @if($errors && $name_errors = $errors->get('name'))
            <ul>
                @foreach($name_errors as $name_error)
                    <li class="text-red-600">
                        {{$name_error}}
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
    <div class="m-6">
        <label for="iso">ISO</label>
        <div class="mt-2">
            <input id="iso" name="iso" value="{{$iso}}" class="block
                                w-full rounded-md border-0 py-1.5
                                text-gray-900 shadow-sm ring-1
                                ring-inset ring-gray-300 placeholder:text-gray-400
                                focus:ring-2 focus:ring-inset focus:ring-indigo-600
                                sm:text-sm sm:leading-6">
        </div>
        @if($errors && $iso_errors = $errors->get('iso'))
            <ul>
                @foreach($iso_errors as $iso_error)
                    <li class="text-red-600">
                        {{$iso_error}}
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
<div class="bg-gray-100 p-4 border-t justify-end flex">
    <x-button>SAVE</x-button>
</div>
