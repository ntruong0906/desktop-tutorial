<?php
require ('inc/essentials.php');
adminLogin();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Carousel</title>
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
            < class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">SETTINGS</h3>

                <!--Management team section -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">--Management Team</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#team-s">
                                <i class="bi bi-plus-square"></i> Add
                            </button>
                        </div>
                        <div class="row" id="team-data">
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


                <!--Management Team modal -->
                <div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="team_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5">ADD Team Member</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Name</label>
                                        <input type="text" name="member_name" id="member_name_inp"
                                            class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Picture</label>
                                        <input type="file" name="member_picture" id="member_picture_inp"
                                            accept=".jpg, .png , .webp , .jpeg" class="form-control shadow-none"
                                            required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="member_name.value='',member_picture.value=''"
                                        class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>

    <?php require ('inc/scripts.php'); ?>
    <script src="scripts/settings.js"> </script>
</body>

</html>