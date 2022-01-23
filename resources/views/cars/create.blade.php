@extends('cars.layouts.app')

@section('content')
    <div class="m-auto 1-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase-bold">
                Create Cars
            </h1>
        </div>
    </div>

    <div class="flex justify-center pt-20">
<form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image">
    <input type="text" name="name" placeholder="Name" id="">
    <input type="text" name="founded" placeholder="Found" id="">
    <input type="text" name="description" placeholder="Deskripsi" id="">
    <button type="submit">Submit</button>
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    {{-- {{ $cars->name }} --}}

@endsection
