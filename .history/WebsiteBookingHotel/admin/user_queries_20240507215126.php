<?php
require ('inc/essentials.php');
require ('inc/db_config.php');
adminLogin();
if(isset($_GET['seen']))
{
    $frm_data = filteration($_GET);

    if($frm_data['seen'] == 'all'){

    }else{
        $q = "UPDATE `user_queries` SET `seen`= ? WHERE `sr_no` = ?";
        $values = [1,$frm_data['seen']];
        if(update($q,$values,'ii')){
            alert('success','Marked as read');
        }else{
            alert('error','Operation Failed');
        }
    }
}

if(isset($_GET['del']))
{
    $frm_data = filteration($_GET);

    if($frm_data['del'] == 'all'){

    }else{
        $q = "DELETE FROM `user_queries` WHERE `sr_no` = ?";
        $values = [$frm_data['del']];
        if(delete($q,$values,'i')){
            alert('success','Data delete!');
        }else{
            alert('error','Operation Failed');
        }
    }
}
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
                <div class="text-end mb-4">
                    <a href="?seen=all" class="btn btn-dark rounded-pill shadow-none btn-sm">Mark all read</a>
                    <a href="?del=all" class="btn btn-danger rounded-pill shadow-none btn-sm">Mark all read</a>
                </div>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="table-responsive-md " style="height: 450px; overflow-y: scroll; ">
                            <table class="table table-hover border">
                                <thead class="sticky-top">
                                    <tr class="bg-dark text-light">
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col" width="20%">Subject</th>
                                        <th scope="col" width="30%">Message</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                   $q = "SELECT * FROM `user_queries` ORDER BY `sr_no` DESC";
                                   $data = mysqli_query($con,$q);
                                   $i= 1;
                                   while($row = mysqli_fetch_assoc($data)){
                                    $seen = '';
                                    if($row['seen']!= 1){
                                        $seen = "<a href='?seen=$row[sr_no]' class='btn btn-sm rounded-pill btn-primary'>Mark as read</a>";
                                    }
                                    $seen.="<a href='?del=$row[sr_no]' class='btn btn-sm rounded-pill btn-danger'>Delete</a>";
                                    echo <<< query
                                    <tr>
                                    <td>$i</td>
                                    <td>$row[name]</td>
                                    <td>$row[email]</td>
                                    <td>$row[subject]</td>
                                    <td>$row[message]</td>
                                    <td>$row[date]</td>
                                    <td>$seen</td>
                                    </tr>
                                    query;
                                    $i++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require ('inc/scripts.php'); ?>
</body>

</html>