var side_naver = document.getElementById("side-naver");

var count = "onClose";  
function sid_nav_opn() {
    if(count == "onClose"){
        side_naver.style.right="82px";
        count = "onOpen";
    } else{
        side_naver.style.right="-402px";
        count = "onClose";
    }
}