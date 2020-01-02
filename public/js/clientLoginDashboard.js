var home = document.getElementById('vpnHome');
var access = document.getElementById('vpnAccess');
var password = document.getElementById('vpnPassword');
function showHome(){
    home.style.display = "block";
    access.style.display = "none";
    password.style.display = "none";
}
function showAccess(){
    home.style.display = "none";
    access.style.display = "block";
    password.style.display = "none";
}
function showPassword(){
    home.style.display = "none";
    access.style.display = "none";
    password.style.display = "block";
}