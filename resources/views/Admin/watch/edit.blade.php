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
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<br><br>
    <form id="formAdd" name="formAdd" method="post" action="">
        @csrf
        <div class="row">
            <div class="col-6">
                <input type="text" class="form-control" name="color" placeholder="Car Color" value="{{$watch->color}}">
            </div>
            <div class="col-6">
                <input type="number" class="form-control" name="weight" placeholder="Car Weight" value="{{$watch->weight}}">
            </div>
            <br><br><br><br>
            <div class="col-6">
                <input type="text" class="form-control" name="brand" placeholder="Car Brand" value="{{$watch->brand}}">
            </div>
            <div class="col-6">
                <input type="text" class="form-control" name="material" placeholder="Car Material" value="{{$watch->material}}">
            </div>
        </div>
        <button class="btn btn-primary mt-3">Submit</button>
    </form>
</div>

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
</body>
</html>
