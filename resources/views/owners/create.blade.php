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
    <form action="{{route('owners.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text" name="name">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Surname</label>
            <input type="text" name="surname">
        </div>
        <button class="btn btn-success">Add</button>
    </form>
@endsection
</body>
