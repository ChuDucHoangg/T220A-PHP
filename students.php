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
    <?php
    $list = [
        [
            "id" => 1,
            "name" => "Nguyen Van Nam",
            "age" => 18,
            "mark" => 9
        ],
        [
            "id" => 2,
            "name" => "Nguyen Duy Anh",
            "age" => 20,
            "mark" => 7
        ]
    ];
    ?>
    <!-- dung table cua bootstrap in ra danh sach sinh vien -->

    <?php include("header.php"); ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Mark</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list as $l) { ?>
                <tr>
                    <th scope="row"><?php echo $l["id"]; ?></th>
                    <td><?php echo $l["name"]; ?></td>
                    <td><?php echo $l["age"]; ?></td>
                    <td><?php echo $l["mark"]; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        thead {
            background-color: rgb(208, 226, 255);
        }

        tbody {
            background-color: rgb(209, 231, 222);
        }
    </style>
</body>

</html>