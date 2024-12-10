<?php session_start() ?>
<div class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a href="dashboard.php" class="navbar-brand text-light">The Company</a>
        <div class="ms-auto">
            <span class="navbar-text text-light">
                <a href="profile.php" class="text-secondary text-decoration-none"><?= $_SESSION['username'] ?></a>
                <a href="../actions/logout.php" class="text-danger text-decoration-none ms-2">Log out</a>
            </span>
        </div>
    </div>
</div>