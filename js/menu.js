var y = 1;

function opennew(){
    if(y === 1){
        menuAction(0);
        y--;
    }
    else {
        menuAction(1);
        y++;
    }
}


function menuAction(x){
    if(x === 0){
        x++;
        menuOpen();
    } else if(x === 1){
        x--;
        menuClose();
    }
}


function menuOpen(){
    var sidebar_wrapper = document.getElementById("sidebar-wrapper").style;
    var sidebar_hidden = document.getElementById("sidebar-hidden").style;
//    var imgOpen = document.getElementById("imgOpen").style;
//    var imgClose = document.getElementById("imgClose").style;
//    imgOpen.visibility = "hidden";
//    imgClose.visibility = "visible";
    sidebar_hidden.left = '253px';
    sidebar_wrapper.left = '250px';
}


function menuClose(){
    var sidebar_wrapper = document.getElementById("sidebar-wrapper").style;
    var sidebar_hidden = document.getElementById("sidebar-hidden").style;
//    var imgOpen = document.getElementById("imgOpen").style;
//    var imgClose = document.getElementById("imgClose").style;
//    imgClose.visibility = "hidden";
//    imgOpen.visibility = "visible";
    sidebar_hidden.left = '5px';
    sidebar_wrapper.left = '-250px';
}