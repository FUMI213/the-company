<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/dbc5b98639.js" crossorigin="anonymous"></script>

</head>
<body>
    <?php 
    include "../classes/User.php";
    include "nav.php";
    
    $obj = new User;
    $all_users = $obj->getAllUsers();

    ?>
    <div class="container my-5">
        <div class="w-75 mx-auto">
            <h2 class="display-6 mb-3">User List</h2>

            <table class="table">
                <thead class="table-secondary text-dark">
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($user = $all_users->fetch_assoc()) { ?>
                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['first_name'] ?></td>
                            <td><?= $user['last_name'] ?></td>
                            <td><?= $user['username'] ?></td>
                            <td>
                                <!-- edit -->
                                 <a href="edit-user.php?id=<?= $user['id'] ?>" class="btn btn-sm btn-outline-warning">
                                    <i class="fa-solid fa-pen"></i>
                                 </a>
                                <!-- delete -->
                                <?php if($_SESSION['id'] != $user['id']) { ?>
                                    <a href="confirm-delete.php?id=<?= $user['id'] ?>" class="btn btn-sm btn-outline-danger ms-1">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>