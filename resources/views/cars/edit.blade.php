@extends('cars.layouts.app')

@section('content')
    <div class="m-auto 1-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase-bold">
                Cars
            </h1>
        </div>
    </div>


    {{-- {{ $cars->name }} --}}
    <div class="w-5/6 py-10">

        <div class="m-auto">
            <form action="/klal-laravel.8/cars/{{ $car->id }}" method="POST">
                @csrf
                @method('PUT')
                <input type="text" name="name" placeholder="{{ $car->name }}" value="{{ $car->name }}" id="">
                <input type="text" name="founded" placeholder="{{ $car->founded }}" value="{{ $car->founded }}" id="">
                <input type="text" name="description" placeholder="{{ $car->description }}" value="{{ $car->description }}" id="">
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
