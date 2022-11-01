function toggleMenu() {
    var menuItems = document.getElementsByClassName('menu-item');
    for (var i = 0; i < menuItems.length; i++) {
        var menuItem = menuItems[i];
        menuItem.classList.toggle("hidden");
    }
}

function togglePassword(){
    var passwordValue = document.getElementById("password");
    if(passwordValue.type === "password"){
        passwordValue.type = "text";
    }else{
        passwordValue.type = "password";
    }
}