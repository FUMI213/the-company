<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container px-5 my-5">
        <form action="../actions/login.php" method="post" class="w-50 mx-auto border rounded-3 p-4">
            <h1 class="display-6 text-uppercase text-center mb-3">Login</h1>

            <input type="text" name="username" required placeholder="USERNAME" id="" class="form-control mb-3">

            <input type="password" name="password" required placeholder="PASSWORD" id="" class="form-control mb-4">

            <button type="submit" class="btn btn-primary w-100 mb-3">Submit</button>

            <div class="text-center">
                <a href="register.php" class="text-decoration-none">Create account</a>
            </div>
        </form>
    </div>
</body>
</html>