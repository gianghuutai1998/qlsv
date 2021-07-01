window.addEventListener('load', function(){
    let controller = window.location.pathname.split("/")[1];

    if(controller != ""){
        nav_link = controller+"-item";
        document.getElementById(nav_link).classList.toggle("active");
    }
});