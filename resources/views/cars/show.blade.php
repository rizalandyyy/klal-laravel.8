@extends('cars.layouts.app')

@section('content')
    {{ $car->name }} <br>
    {{ $car->founded }} <br>
    {{ $car->description }} <br><br><br>

    Model <br>
    @forelse ($car->carModels as $model)
        {{ $model['model_name'] }}


    <br>
    <br>
    <br>

    Engine <br>
    @foreach ($car->engines as $engine)
        @if ($model['id'] == $engine->model_id)
            {{ $engine->engine_name }} <br>
        @endif
    @endforeach

    {{ date('d-m-Y', strtotime($car->productionDate->created_at)) }} <br>

    @empty
        <p>no model found</p>
    @endforelse

    <br><br><br>
    <p>Product Types</p>
    @forelse ($car->products as $product)
        {{ $product->name }}
    @empty
        <p>No car product description</p>
    @endforelse

@endsection
