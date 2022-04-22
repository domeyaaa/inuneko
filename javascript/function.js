function logout() {
    window.location = './backend/logout.php';
}

function sendNewOtp() {
    window.location = './backend/send_otp.php'
}


function sendNewOtpReg() {
    window.location = './backend/send_signup_otp.php'
}

function goToPost(p) {
    window.location = './see_post.php?Post_ID=' + p;
}

function goToMyPost(p) {
    window.location = './see_my_post.php?Post_ID=' + p;
}

function linkTo(x) {
    if (x == 'create') {
        window.location = "create.php";
    } else if (x == 'feeds') {
        window.location = "feeds.php";
    } else if (x == 'manage-account') {
        window.location = "./manage-account.php";
    } else if (x == "manage-post") {
        window.location = "./managepost.php"
    } 
      else {
        window.location = "mypost.php";
    }
}

function pop() {
    document.getElementById('pop-up').style.display = 'flex';
}

function closepop() {
    document.getElementById('pop-up').style.display = 'none';
}


function openNav() {
    document.getElementById('myNav').style.width = '600px';
}

function closeNav() {
    document.getElementById('myNav').style.width = '0';
}


function checkNewPassword() {
    let npw1 = document.getElementById('npw1').value;
    let npw2 = document.getElementById('npw2').value;
    if (npw1 != npw2) {
        document.getElementById('error').innerHTML = 'New Password confirmation does not match!!';
        return false;
    }
}

function togglePopup() {
    document.getElementById("popup-1").classList.toggle("active");
}

function checkForm(regName) {
    pw1 = document.getElementById('pw1').value;
    pw2 = document.getElementById('pw2').value;
    username = document.getElementById('username').value;
    email = document.getElementById('email').value;
    gender1 = document.getElementById('male').checked;
    gender2 = document.getElementById('female').checked;
    if (username == '') {
        document.getElementById('error').innerHTML = 'Please enter your username!!';
    }
    else if (email == '') {
        document.getElementById('error').innerHTML = 'Please enter your E-mail!!';
    }
    else if (pw1 == '') {
        document.getElementById('error').innerHTML = 'Please enter your password!!';
    }
    else if (pw2 == '') {
        document.getElementById('error').innerHTML = 'Please confirm your password!!';
    }
    else if (pw1 != pw2) {
        document.getElementById('error').innerHTML = 'Password confirmation does not match!!';
    }
    else if (gender1 == false && gender2 == false) {
        document.getElementById('error').innerHTML = 'Please select your gender!!';
    }
    else {
        let i;
        let x = document.getElementsByClassName("reg");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(regName).style.display = "flex";
    }
}

function backNav(regName) {
    let i;
    let x = document.getElementsByClassName("reg");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    document.getElementById(regName).style.display = "flex";
}

function checkLogin() {
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    if (username == '' || password == '') {
        document.getElementById('error').innerHTML = 'Please enter all field !!';
        return false;
    }
}

function checkInputPic() {

    let pic1 = document.getElementById('pic1').value;
    let pic2 = document.getElementById('pic2').value;
    let pic3 = document.getElementById('pic3').value;

    if (pic1 != '') {
        document.getElementById('picL1').style.backgroundColor = '#55a4a5';
    }

    if (pic2 != '') {
        document.getElementById('picL2').style.backgroundColor = '#55a4a5';
    }

    if (pic3 != '') {
        document.getElementById('picL3').style.backgroundColor = '#55a4a5';
    }
}


function checkPop() {

    let topic = document.getElementById('topic').value;
    let animalType = document.getElementById('animalType').value;
    let pic1 = document.getElementById('pic1').value;
    let breed = document.getElementById('breed').value;
    let color = document.getElementById('color').value;
    let age = document.getElementById('age').value;
    let province = document.getElementById('province').value;
    let district = document.getElementById('district').value;
    let detail = document.getElementById('detail').value;

    if (topic != '' && animalType != '' && pic1 != '' && breed != '' && color != '' && age != '' && province != '' && district != '' && detail != '' && checkGender()) {
        document.getElementById('pop-up').style.display = 'flex';
    } else {
        document.getElementById('error').innerHTML =
            'Please enter all fields';
    }
}

function checkGender() {
    let gender1 = document.getElementById('male').checked;
    let gender2 = document.getElementById('female').checked;
    if (gender1 == false && gender2 == false) {
        return false;
    } else {
        return true;
    }
}


function goToHome() {
    window.location = "./home.php";
}

function cancelpop() {
    document.getElementById('overay-confirm').style.display = 'none';
    document.getElementById('box-pop-up').style.display = 'none';
}

function openpop() {
    document.getElementById('overay-confirm').style.display = 'flex';
    document.getElementById('box-pop-up').style.display = 'flex';

}

