<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
</head>

<body>

@extends('layouts.mainCars')
@section('content')
    <form action="{{route('cars.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Registration No.</label>
            <input type="text" name="reg_number">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Brand</label>
            <input type="text" name="brand">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Model</label>
            <input type="text" name="model">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Owner</label>
            <select class="form-control" name="owner_id">
                <option selected>Please select...</option>
                @foreach(App\Models\Owner::get() as $owner)
                    <option value="{{$owner->id}}">{{$owner->name}} {{$owner->surname}}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success">Add</button>
    </form>
@endsection
</body>




