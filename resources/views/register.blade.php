<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="bg-light">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="shadow-lg p-4 bg-white rounded col-md-8 col-lg-4">
            <form action="{{URL::to('register')}}" method="post">
            @csrf
                <h2 class="text-center mb-4">Register Here</h2>
               
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                </div>

                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                </div>

                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Register</button>
                    
                </div>
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
