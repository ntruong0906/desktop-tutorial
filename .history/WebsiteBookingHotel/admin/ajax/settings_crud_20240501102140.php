<?php

    require('../inc/essentials.php');
    require('../inc/db_config.php');

    adminLogin();

    if(isset($_POST['get_general']))
    {
        $q = "SELECT * FROM `settings` WHERE `sr_no` =?";
        $values = [1];
        $res = select($q,$values,"i");
        $data = mysqli_fetch_assoc($res);
        $json_data = json_encode($data);
        echo $json_data;
    }

    if(isset($_POST['upd_general']))
    {
        $frm_data = filteration($_POST);

        $q = "UPDATE `settings` SET `site_title` =?, `site_about` =? WHERE `sr_no` =?";
        $values = [$frm_data['site_title'],$frm_data['site_about'],1];
        $res = update($q,$values,'ssi');
        echo $res;
    }

    if(isset($_POST['upd_shutdown']))
    {
        $frm_data = ($_POST['upd_shutdown'] == 0) ? 1 : 0;

        $q = "UPDATE `settings` SET `shutdown` =? WHERE `sr_no` =?";
        $values = [$frm_data,1];
        $res = update($q,$values,'ii');
        echo $res;
    }
    
    if(isset($_POST['get_contacts']))
    {
        $q = "SELECT * FROM `contact_details` WHERE `sr_no` =?";
        $values = [1];
        $res = select($q,$values,"i");
        $data = mysqli_fetch_assoc($res);
        $json_data = json_encode($data);
        echo $json_data;
    }

    if(isset($_POST['upd_contacts']))
    {
        $frm_data = filteration($_POST);

        $q = "UPDATE `contact_details` SET `address` =?, `google_map` = ?,`pn1` = ?,`pn2` = ?,`email` = ? ,`fb`= ?,`ytb` = ? ,`ins` =?,`iframe` =? WHERE `sr_no` =?";
        $values = [$frm_data['address'],$frm_data['google_map'],$frm_data['pn1'],$frm_data['pn2'],$frm_data['email'],$frm_data['fb'],$frm_data['ytb'],$frm_data['ins'],$frm_data['iframe'],1];
        $res = update($q,$values,'sssssssssi');
        echo $res;
    }

    if(isset($POST['add_member'])){
        $frm_data = filteration($_POST);

        $img_r = uploadImage($_FILES['picture'],ABOUT_FOLDER);
        if($img_r == 'inv_img'){
            echo $img_r;
        }else if($img_r == 'inv_size'){
            echo $img_r;
        }else if($img_r == 'udp_failed'){
            echo $img_r;
        }else{
            $q = "INSERT INTO `team_details`(`name`,`picture`) VALUES (?,?)";
            $values = [$frm_data['name'],$img_r];
            $res = insert($q,$values,'ss');
            echo $res;
        }
    }


    if(isset($_POST['get_members'])){
        $res = selectAll('team_details');

        while($row = mysqli_fetch_assoc($res)){
            echo <<<data
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
        data;
        }
    }
?>