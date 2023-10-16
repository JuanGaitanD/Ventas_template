function control_login(n){
    switch (n){
        case 1:
            document.querySelector("#login").style.display = "none";
            document.querySelector("#register").style.display = "block";
            break;
        case 2:
            document.querySelector("#login").style.display = "block";
            document.querySelector("#register").style.display = "none";
            break;
    }
}