<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
</head>
<body>
    <form action="{{route('cars.update', $car->id)}}" method="post">
        @csrf
        @method('PUT')
        <label class="form-label">Registration number:</label>
        <input type="text" name="reg_number" value="{{$car->reg_number}}">
        <label class="form-label">Brand:</label>
        <input type="text" name="brand" value="{{$car->brand}}">
        <label class="form-label">Model:</label>
        <input type="text" name="model" value="{{$car->model}}">
        <label class="form-label">Owner ID</label>
        <input type="number" name="owner_id"  value="{{$car->owner_id}}"><br>
        <button>Edit</button>
    </form>
</body>

