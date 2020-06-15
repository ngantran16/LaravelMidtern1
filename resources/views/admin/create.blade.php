<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Form</title>
    <style>
        .insert{
            margin-left: 400px;
            margin-right: 400px;
        }
    </style>
</head>
<body>
    <div class = "insert">
    <form method="POST" action="/rooms" enctype="multipart/form-data" >
        @csrf
        <h1>Add a room</h1>

        <div class="form-group">
            <label>Name:</label>
            <input class="form-control" placeholder="Enter name" name = "name">
        </div>

        <div class="form-group">
            <label>Type Room:</label>
            <input class="form-control" placeholder="Enter type room" name = "typeroom">
        </div>

        <div class="form-group">
            <label>Number:</label>
            <input class="form-control" placeholder="Enter number" name = "number">
        </div>

        <div class="form-group">
            <label>Area:</label>
            <input class="form-control" placeholder="Enter area" name = "area">
        </div>

        <div class="form-group">
            <label>Price:</label>
            <input class="form-control" placeholder="Enter price" name = "price">
        </div>

        <div class="form-group">
            <label>Image:</label>
            <input type = "file" class="form-control" placeholder="Enter image" name = "image">
        </div>

        <button class="btn btn-primary" type = "submit">Submit</button>
    </form>
    </div>
</body>
</html>
