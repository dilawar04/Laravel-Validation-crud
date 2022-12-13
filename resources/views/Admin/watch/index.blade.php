<!DOCTYPE html>
<html lang="en">
<head>
    <title>Demo Tutorial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

</head>
<body>
<div class="container">
    <br>
    <a href="/admin/watch/create"><button class="btn btn-primary">Insert Record</button></a>
    <br><br>
<table id="example" class="table table-hover table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>Car Color</th>
        <th>Car Weight</th>
        <th>Car Brand</th>
        <th>Car Material</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($watches as $watch)
    <tr>
        <td>{{$watch->color}}</td>
        <td>{{$watch->weight}}</td>
        <td>{{$watch->brand}}</td>
        <td>{{$watch->material}}</td>
        <td><a href="/admin/watch/edit/{{$watch->id}}"><button class="btn btn-primary">Update</button></a></td>
        <td><a href="/admin/watch/delete/{{$watch->id}}"><button class="btn btn-danger">Delete</button></a></td>
    </tr>
        @endforeach
    </tbody>
</table>
</div>

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
</body>
</html>
