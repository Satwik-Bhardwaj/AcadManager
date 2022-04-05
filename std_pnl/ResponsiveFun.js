window.onresize = CheckDimensions;
window.onload = CheckDimensions;

let WindowHeight = window.innerHeight;
let WindowWidth = window.innerWidth;

if(WindowWidth <= 960){
    // console.log(WindowWidth);
    ForResponsive(WindowHeight, WindowWidth);
}

function CheckDimensions() {
    WindowHeight = window.innerHeight;
    WindowWidth = window.innerWidth;

    ForResponsive(WindowHeight, WindowWidth);
    // console.log(WindowHeight + " and " +WindowWidth);
}
function ForResponsive(Height, Width) {
    if(Width <= 960){
        SideBarToNavBar();
    }else{
        NavBarToSideBar();
    }
}
function SideBarToNavBar() {
    // console.log("Function has been called");
    document.getElementById("sideBar").style.display = "none";
    document.getElementById("navBar").style.display = "block";
}
function NavBarToSideBar(){
    // console.log("Nav to side called");
    document.getElementById("sideBar").style.display = "block";
    document.getElementById("navBar").style.display = "none";
}