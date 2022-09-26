<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <script src="./validateREG.js"></script>

    <div class="jumbotron">
        <h1 class="display-3"></h1>
        <p class="lead"></p>
        <hr class="my-2">
        <p></p>
        <p class="lead">
        </p>
    </div>
    <main class="form-signup">
        <div class="container">

            <form action='./signupform.php' method=POST>
                <h1 class="h3 mb-3 fw-normal">Sign Up</h1>

                <div class="form-floating">
                    <input type="email" class="form-control" name='email' id="emailAddress" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="phone" name='mobNumber' class="form-control" id="mobileNumber" placeholder="Password">
                    <label for="floatingInput">Mobile number</label>
                </div>
                <div class="row t-4">
                    <div class="form-floating col-3">
                        <input type="text" name='firstName' class="form-control" id="floatingInput" placeholder="">
                        <label for="floatingInput">First Name</label>
                    </div>
                    <div class="form-floating col-3">
                        <input type="text" name='middleName' class="form-control" id="floatingInput" placeholder="">
                        <label for="floatingInput">Middle Name</label>
                    </div>
                    <div class="form-floating col-3">
                        <input type="text" name='lastName' class="form-control" id="floatingInput" placeholder="">
                        <label for="floatingInput">Last Name</label>
                    </div>
                    <div class="form-floating col-3">
                        <input type="text" name='familyName' class="form-control" id="floatingInput" placeholder="">
                        <label for="floatingInput">Family Name</label>
                    </div>
                </div>
                <div class="form-floating">
                    <input type="password" name='pass' class="form-control" id="floatingPassword" placeholder="">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingInput" placeholder="">
                    <label for="floatingInput">retype-Password</label>
                </div>
                <div class="form-floating">
                    <input type="date" name='DOB' class="form-control" id="floatingInput" placeholder="">
                    <label for="floatingInput">Date of birth</label>
                </div>
                <div class="row">
                    <div class="col-3">
                        <button class="w-100 btn btn-lg btn-primary" name="signupform" type="submit">Sign Up</button>
                    </div>
                    <div class="col-6"></div>
                    <div class="col-3">
                        <a href="./index.php" class=" w-100 btn btn-danger">back</a>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>