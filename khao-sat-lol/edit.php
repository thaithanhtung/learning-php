<?php

@include 'connecteddb.php';

function addUser(
    $name,
    $name_ingame,
    $main_position,
    $position,
    $expert,
    $description
) {
    global $conn;
    $sql = "INSERT INTO user (name, name_ingame, main_position,position, expert,description) VALUES ($name,
        $name_ingame,
        $main_position,
        $position,
        $expert,
        $description)";

    if ($conn->query($sql) === true) {
        echo 'New record created successfully';
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }

    $conn->close();
}

// if (isset($_POST['submit'])) {
//     print 'hello';
//     $name = $_POST['name'];
//     $name_ingame = $_POST['name_ingame'];
//     $main_position = $_POST['main_position'];
//     $position = $_POST['position'];
//     $expert = $_POST['expert'];
//     $description = $_POST['description'];

//     print 'Hello world!<br>';
//     addUser(
//         $name,
//         $name_ingame,
//         $main_position,
//         $position,
//         $expert,
//         $description
//     );
// }

// pre_r($_POST);

if (isset($_POST['submit'])) {
    echo 'run';
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Khảo sát lol</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <div class="content-wrapper-form-survey">
            <div class="card" style="width: 28rem;">
                <div class="card-body">
                    <h4 class="card-title title-survey">Khảo sát lol</h4>
                    <form method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Họ và tên</label>
                            <input type="text" class="form-control" id="name" value="">
                        </div>
                        <div class="mb-3">
                            <label for="nameInGame" class="form-label">Tên ingame</label>
                            <input type="text" class="form-control" id="nameInGame" value="">
                        </div>

                        <div class="mb-3">
                            <label for="mainPosition" class="form-label">Vị trí chính</label>
                            <select type="text" class="form-control" id="mainPosition" value=""> 
                                <option value="Top">Top</option>
                                <option value="Mid">Mid</option> 
                                <option value="Jungle">Jungle</option>
                                <option value="Bottom">Bottom</option> 
                                <option value="Support">Support</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Vị trí phụ</label>
                            <select type="text" class="form-control" id="position" value=""> 
                                <option value="Top">Top</option>
                                <option value="Mid">Mid</option> 
                                <option value="Jungle">Jungle</option>
                                <option value="Bottom">Bottom</option> 
                                <option value="Support">Support</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="expert" class="form-label">Tướng thông thạo nhất</label>
                            <input type="text" class="form-control" id="expert" value="">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Mô tả thêm về bản thân</label>
                            <input type="text" class="form-control" id="description" value="">
                        </div>
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary"></input>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
