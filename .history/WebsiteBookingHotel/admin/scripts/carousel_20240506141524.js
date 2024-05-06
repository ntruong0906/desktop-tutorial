let team_s_form = document.getElementById('team_s_form');
let member_name_inp = document.getElementById('member_name_inp');
let member_picture_inp = document.getElementById('member_picture_inp')


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
            get_members();
        }
    }

    xhr.send(data);
}

function get_members() {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {

    }

    xhr.send('get_members');
}

function rem_member(val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
        if (this.responseText == 1) {
            alert('success', 'Member removed!');
            get_members();
        } else {
            alert('error', 'Server down!');
        }
    }

    xhr.send('rem_member=' + val);
}
window.onload = function() {
    get_general();
    get_contacts();
    get_members();
}