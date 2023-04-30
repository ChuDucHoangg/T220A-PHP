<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form action="addstudents.php" method="post">
        <input type="text" name="name" class="input-name" placeholder="Name">
        <input type="number" name="age" class="input-age" placeholder="Age">
        <input type="number" name="mark" class="input-mark" placeholder="Mark">
        <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </form>

    <style>
        * {
            padding: 0;
            margin: 0;
        }

        form {
            width: 300px;
            height: 300px;
            background: linear-gradient(to right, #12c2e9, #c471ed, #f64f59);
            border-radius: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .input-name,
        .input-age,
        .input-mark {
            border-radius: 10px;
            margin-top: 40px;
            margin-left: 58px;
            padding-left: 10px;
            height: 30px;
        }

        button {
            margin-top: 10px;
            margin-left: 120px;
        }
    </style>
</body>

</html>