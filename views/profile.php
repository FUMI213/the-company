<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/dbc5b98639.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include "../classes/User.php";
        include "nav.php";

        $obj = new User;
        $user = $obj->findUser($_SESSION['id']);
    ?>
    <div class="container my-5">
        <div class="card w-50 mx-auto">
            <div class="card-header">
                <div class="row">
                    <div class="col-4">
                        <!-- image -->
                        <?php if($user['photo']) { ?>
                            <img src="../assets/images/<?= $user['photo'] ?>" alt="<?= $user['username'] ?>" class="img-thumbnail">
                        <?php }else{ ?>
                            <i class="fa-solid fa-user text-secondary fa-8x"></i>
                        <?php } ?>
                    </div>
                    <div class="col align-self-center">
                        <form action="../actions/uploadPhoto.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="image" id="" class="form-control form-control-sm d-block mb-1">
                            <button type="submit" class="btn btn-sm btn-outline-secondary">Upload Photo</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h2 class="h3 mb-2"><?= $_SESSION['full_name'] ?></h2>
                <h3 class="h5"><?= $_SESSION['username'] ?></h3>
            </div>
        </div>
    </div>
</body>
</html>