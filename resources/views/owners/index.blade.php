<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owners</title>
</head>
<body>

@extends('layouts.mainOwners')
@section('content2')
    <a class="btn btn-success mb-3" href="{{route('owners.create')}}">Add owner</a>
    <a class="btn btn-success mb-3 ms-3" href="{{route('cars.index')}}">Cars</a>
    <table class="table table-success table-striped">
        <tr>

            <th>Name</th>
            <th>Surname</th>
            <th></th>
            <th></th>
        </tr>

        @foreach($owners as $owner)
            <tr>

                <td>{{$owner->name}}</td>
                <td>{{$owner->surname}}</td>
                <td>
                    <a class="btn btn-warning" href="{{route('owners.edit', $owner->id)}}">Edit</a>
                </td>
                <td>
                    <form action="{{route('owners.destroy', $owner->id)}}" method="post">
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
