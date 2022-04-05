let sideBarBtn = document.querySelector("#SideBarBtn");
let sideBar = document.getElementById("sideBar");
sideBarBtn.onclick = function NavBtn() {
    if(sideBar.className == "SideBar"){
        sideBar.className = "SideBarActive";
    }else if(sideBar.className == "SideBarActive"){
        sideBar.className = "SideBar";
    }
}