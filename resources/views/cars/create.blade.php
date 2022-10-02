<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
</head>

<body>
    <form action="{{route('cars.store')}}" method="post">
        @csrf

        <input type="text" name="reg_number"><br>
        <input type="text" name="brand"><br>
        <input type="text" name="model"><br>
        <input type="number" name="owner_id"><br>
        <button>Add</button>
    </form>
</body>




