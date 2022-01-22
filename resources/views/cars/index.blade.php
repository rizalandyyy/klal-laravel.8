@extends('cars.layouts.app')

@section('content')
    <div class="m-auto 1-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase-bold">
                Cars
            </h1>
        </div>
    </div>

    <div
     class="pt-10">
        <a href="cars/create" class="border-b-2 pb-2 border-dotted italic text-gray-500">
            Add a new Car &rarr;
        </a>
    </div>
    {{-- {{ $cars->name }} --}}
    <div class="w-5/6 py-10">
        @foreach ($cars as $car)
        <div class="m-auto">
            <div class="float-right">
                <a href="cars/{{ $car['id'] }}/edit">Edit</a>
                <form action="/klal-laravel.8/cars/{{ $car['id'] }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
            </div>
            <span class="uppercase text-blue-500 font-bold text-xs italic">
                founded: {{ $car['founded'] }}
            </span>
            <h2 class="text-gray-700 text-5xl"><a href="cars/{{ $car['id'] }}">{{ $car['name'] }}</a></h2>
            <p class="text-lg text-gray-700">{{ $car['description'] }}</p>
            <hr class="mt-4 mb-8">
        </div>
        @endforeach
    </div>
@endsection
