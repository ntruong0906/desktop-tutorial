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
    <title>Admin Panel - Dashboard</title>
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

                <!--General settings section -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">--General Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#general-s">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">About us</h6>
                        <p class="card-text" id="site_about"></p>
                    </div>
                </div>

                <!--General settings modal -->
                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="general_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5">General Settings</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Site Title</label>
                                        <input type="text" name="site_title" id="site_title_inp"
                                            class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">About us</label>
                                        <textarea type="text" name="site_about" id="site_about_inp"
                                            class="form-control shadow-none" rows="6" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button"
                                        onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about"
                                        class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Shutdown section -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">--Shutdown Website</h5>
                            <div class="form-check form-switch">
                                <form>
                                    <input onclick="upd_shutdown(this.value)" class="form-check-input" type="checkbox">

                                </form>

                            </div>
                        </div>
                        <p class="card-text border-0 shadow-sm">
                            No customers will be allowed to book hotel room, when shutdowm mode is turned on.
                        </p>
                    </div>

                </div>
                <!--Contact details section -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">--Contacts Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#contacts-s">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                                    <p class="card-text" id="address"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                                    <p class="card-text" id="google_map"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Phone Numbers</h6>
                                    <p class="card-text mb-1"><i class="bi bi-telephone-fill"></i>
                                        <span id="pn1"></span>
                                    </p>
                                    <p class="card-text mb-1"><i class="bi bi-telephone-fill"></i>
                                        <span id="pn2"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">E-Mail</h6>
                                    <p class="card-text" id="email"></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-facebook me-1"></i>
                                        <span id="fb"></span>
                                    </p>
                                    <p class="card-text ">
                                        <i class="bi bi-youtube me-1"></i>
                                        <span id="ytb"></span>
                                    </p>
                                    <p class="card-text ">
                                        <i class="bi bi-instagram me-1"></i>
                                        <span id="ins"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Iframe</h6>
                                    <iframe id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Contacts details modal -->
                <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form id="contacts_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5">Contacts Settings</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid p-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Address</label>
                                                    <input type="text" name="address" id="address_inp"
                                                        class="form-control shadow-none" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Google Map Link</label>
                                                    <input type="text" name="google_map" id="google_map_inp"
                                                        class="form-control shadow-none" rows="6" required></input>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Phone Number (with country code)
                                                    </label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i
                                                                class="bi bi-telephone-fill"></i></span>
                                                        <input type="text" name="pn1" id="pn1_inp"
                                                            class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i
                                                                class="bi bi-telephone-fill"></i></span>
                                                        <input type="text" name="pn2" id="pn2_inp"
                                                            class="form-control shadow-none">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Email</label>
                                                    <input type="text" name="email" id="email_inp"
                                                        class="form-control shadow-none" rows="6" required></input>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Social Links</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">
                                                            <i class="bi bi-facebook"></i></span>
                                                        <input type="text" name="fb" id="fb_inp"
                                                            class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i
                                                                class="bi bi-youtube"></i></span>
                                                        <input type="text" name="ytb" id="ytb_inp"
                                                            class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">
                                                            <i class="bi bi-instagram"></i></span>
                                                        <input type="text" name="ins" id="ins_inp"
                                                            class="form-control shadow-none" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Iframe Src</label>
                                                    <input type="text" name="iframe" id="iframe_inp"
                                                        class="form-control shadow-none" required>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="contacts_inp(contacts_data)"
                                        class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

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
                                    <p class="card-text text-center ">Last updated 3 min ago</p>
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
                                    <button type="button" onclick="" class="btn text-secondary shadow-none"
                                        data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>

    <?php require ('inc/scripts.php'); ?>
    <script>
    let general_data, contacts_data;
    let general_s_form = document.getElementById('general_s_form');
    let site_title_inp = document.getElementById('site_title_inp');
    let site_about_inp = document.getElementById('site_about_inp');
    let contacts_s_form = document.getElementById('contacts_s_form');
    let team_s_form = document.getElementById('team_s_form');
    let member_name_inp = document.getElementById('member_name_inp');
    let member_picture_inp = document.getElementById('member_picture_inp')


    function get_general() {
        let site_title = document.getElementById('site_title');
        let site_about = document.getElementById('site_about');
        let shutdown_toggle = document.getElementById('shutdown_toggle');

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function() {
            general_data = JSON.parse(this.responseText);

            site_title.innerText = general_data.site_title;
            site_about.innerText = general_data.site_about;

            site_title_inp.value = general_data.site_title;
            site_about_inp.value = general_data.site_about;

            if (general_data.shutdown == 0) {
                shutdown_toggle.checked = false;
                shutdown_toggle.value = 0;
            } else {
                shutdown_toggle.checked = true;
                shutdown_toggle.value = 1;
            }
        }

        xhr.send('get_general');
    }

    general_s_form.addEventListener('submit', function(e) {
        e.preventDefault();
        upd_general(site_title_inp.value, site_about_inp.value)
    });

    function upd_general(site_title_val, site_about_val) {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function() {

            var myModal = document.getElementById('general-s');
            var modal = bootstrap.Modal.getInstance(myModal)
            modal.hide();

            if (this.responseText == 1) {
                alert('success', 'Changes saved!')
                get_general();
            } else {
                alert('error', 'No changes saved!')
            }
        }

        xhr.send('site_title =' + site_title_val + 'site_about=' + site_about_val + '&upd_general');
    }

    function upd_shutdown(val) {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function() {
            if (this.responseText == 1 && general_data.shutdown == 0) {
                alert('success', 'Site has been shutdown!');
            } else {
                alert('success', 'Shutdown mode changes off!');
            }
            get_general();

        }

        xhr.send('upd_shutdown=' + val);
    }



    function get_contacts() {
        let contacts_p_id = ['address', 'google_map', 'pn1', 'pn2', 'email', 'fb', 'ytb', 'ins']
        let iframe = document.getElementById('iframe');
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            contacts_data = JSON.parse(this.responseText);
            contacts_data = Object.values(contacts_data);
            console.log(contacts_data);

            for (i = 0; i < contacts_p_id.length; i++) {
                document.getElementById(contacts_p_id[i]).innerText = contacts_data[i + 1];
            }
            iframe.src = contacts_data[9];
            contacts_inp(contacts_data)
        }

        xhr.send('get_contacts');
    }

    function contacts_inp(contacts_data) {
        let contacts_inp_id = ['address_inp', 'google_map_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp',
            'ytb_inp', 'ins_inp', 'iframe_inp'
        ]
        for (i = 0; i < contacts_inp_id.length; i++) {
            document.getElementById(contacts_inp_id[i]).value = data[i + 1];
        }
    }

    contacts_s_form.addEventListener('submit', function(e) {
        e.preventDefault();
        udp_contacts();
    });

    function udp_contacts() {
        let index = ['address', 'google_map', 'pn1', 'pn2', 'email', 'fb', 'ytb', 'ins', 'iframe'];
        let contacts_inp_id = ['address_inp', 'google_map_inp', 'pn1-inp', 'pn2_inp', 'email_inp', 'fb_inp',
            'ytb_inp', 'ins_inp', 'iframe_inp'
        ];
        let data_str = "";
        for (i = 0; i < index.length; i++) {
            data_str += index[i] + "=" + document.getElementById(contacts_inp_id[i]).value + '&';
        }
        data_str += "udp_contacts";

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            var myModal = document.getElementById('contacts-s');
            var modal = bootstrap.Modal.getInstance(myModal)
            modal.hide();
            if (this.responseText == 1) {
                alert('success', 'Changes Saved!');
                get_contacts();
            } else {
                alert('error', 'No Changes Made!');
            }
            get_general();
        }
        xhr.send(data_str);

    }

    team_s_form.addEventListener('submit', function(e) {
        e.preventDefault();
        add_member();
    });

    function add_member() {
        let data = new FormData();
        data.append('name', member_name_inp.value);
        data.append('picture', member_picture_inp.file[0]);
        data.append('add_member', '');


        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);

        xhr.onload = function() {
            var myModal = document.getElementById('team-s');
            var modal = bootstrap.Modal.getInstance(myModal)
            modal.hide();

            if (this.responseText == 'inv_img') {
                alert('error', 'Only JPG and PNG images are allowed!');
            } else if (this.responseText == 'inv_size') {
                alert('error', 'Image should be less 2MB!');
            } else if (this.responseText == 'udp_failed') {
                alert('error', 'Image Upload Failed . Server Down');
            } else {
                alert('success', 'New Member Added!');
                member_name_inp.value = '';
                member_picture_inp.value = '';
            }
        }

        xhr.send(data);
    }

    window.onload = function() {
        get_general();
        get_contacts();
    }
    </script>
</body>

</html>