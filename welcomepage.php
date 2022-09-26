<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <?php require_once './Connection.php';
    //Query to select all records in table carInfo
    if ($_GET['email']) {
        $email = $_GET['email'];
        $sql = " SELECT `firstName`, `middleName`, `lastName`, `familyName`
      from `usercreate` where email=$email";
        //make query and store result in result
        $result = $con->query($sql);
        //fetch the result rows into an array
        $userArray = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //free result from memory( best practice)

        mysqli_free_result($result);
        //Terminate connection
        mysqli_close($con);
    } else {
        echo "Somthing went wrong";
    }
    ?>
    <header></header>
    <main>
        <div class="px-4 py-5 my-5 text-center">
            <img class="d-block mx-auto mb-4" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Commons-emblem-success.svg/2048px-Commons-emblem-success.svg.png" alt="" width="200">
            <h1 class="display-5 fw-bold">Registration completed</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">
                    Welcome
                    <?php
                    foreach ($userArray as $array)
                        echo $array['firstName'] . $array['middleName'] . $array['lastName'] . $array['familyName'];
                    ?>
                </p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a type="button" href="./index.php" class="btn btn-primary btn-lg px-4 gap-3">Back to index</a>
                </div>
            </div>
        </div>



    </main>
</body>

</html>