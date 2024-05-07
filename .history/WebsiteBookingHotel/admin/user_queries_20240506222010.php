<?php
require ('inc/essentials.php');
require ('inc/db_config.php');
adminLogin();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - User Queries</title>
    <?php require ('inc/links.php'); ?>
</head>
<style>
.custom-alert {
    position: fixed;
    top: 80px;
    right: 25px;
}

#dashboard-menu {
    position: fixed;
    height: 100%;
}
</style>

<body class="bg-light">

    <?php require ('inc/header.php'); ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">USER QUERIES</h3>

                <!--Carousel section -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="row" id="carousel-data">
                            <div class="col-md-2 mb-3">
                                <div class="card bg-dark text white">
                                    <img src="../images/about/staff.svg" class="card-img">
                                    <div class="card-img-overlay text-end">
                                        <button type="button" class="btn btn-danger btn-sm shadow-none">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </div>
                                    <p class="card-text text-center px-3 py-2">Random Name</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require ('inc/scripts.php'); ?>
</body>

</html>