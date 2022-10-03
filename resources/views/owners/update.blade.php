<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owners</title>
</head>
<body>

@extends('layouts.main')
@section('content2')
    <form action="{{route('owners.update', $owner->id)}}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label class="form-label">Name:</label>
            <input type="text" name="name" value="{{$owner->name}}">
        </div>
        <div>
            <label class="form-label">Surname:</label>
            <input type="text" name="surname" value="{{$owner->surname}}">
        </div>
        <button class="btn btn-warning">Edit</button>
    </form>
@endsection

</body>
</html>
