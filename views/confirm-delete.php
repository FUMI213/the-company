<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/dbc5b98639.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
        include "../classes/User.php";
        $obj = new User;
        $user = $obj->findUser($_GET['id']);
    ?>
    <div class="my-5">
        <div class="w-25 mx-auto text-center">
            <i class="fa-solid fa-triangle-exclamation text-warning display-1"></i>
            <h2 class="text-danger text-uppercase h4 mb-5">Delete User</h2>

            <p>Are you sure you want to delete user <span class="fw-bold"><?= $user['username'] ?></span>?</p>

            <form action="../actions/deleteUser.php" method="post" class="text-center">
                <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                <a href="dashboard.php" class="btn btn-secondary me-3">Cancel</a>
                <button type="submit" class="btn btn-outline-danger">Delete</button>
            </form>
        </div>
    </div>
</body>
</html>