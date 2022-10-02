<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
</head>
<body>
<a class="btn btn-success" href="{{route('cars.create')}}">Add car</a>
<div class="col-md-6">
    <table class="table table-success table-striped">
        <tr>

            <th>Registration No.</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Owner ID</th>
            <th></th>
        </tr>

        @foreach($cars as $car)
        <tr>

            <td>{{$car->reg_number}}</td>
            <td>{{$car->brand}}</td>
            <td>{{$car->model}}</td>
            <td>{{$car->owner_id}}</td>
            <td>
                <a class="btn btn-success" href="{{route('cars.edit', $car->id)}}">Edit</a>
            </td>
            <td>
                <form action="{{route('cars.destroy', $car->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</body>

