<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
</head>
<body>


@extends('layouts.app')
@section('content')
    <a class="btn btn-success mb-3" href="{{route('cars.create')}}">Add car</a>
    <a class="btn btn-success mb-3 ms-3" href="{{route('owners.index')}}">Owners</a>
    <table class="table table-success table-striped">
        <tr>

            <th>Registration No.</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Owner</th>
            <th></th>
            <th></th>
        </tr>

        @foreach($cars as $car)
            <tr>

                <td>{{$car->reg_number}}</td>
                <td>{{$car->brand}}</td>
                <td>{{$car->model}}</td>
                <td>
                    {{$car->owner->name}}
                    {{$car->owner->surname}}
                </td>
                <td>
                    <a class="btn btn-warning" href="{{route('cars.edit', $car->id)}}">Edit</a>
                </td>
                <td>
                    <form action="{{route('cars.destroy', $car->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

</body>

