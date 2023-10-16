function show(n){
    switch (n) {
        case 1: 
            document.location.href = "index.html";
            break;
        case 2:
            document.location.href = "about.html";
            break;
        case 3:
            document.location.href = "contact.html";
            break;
        default:
            document.location.href = "404.html";
            break;
    }
}