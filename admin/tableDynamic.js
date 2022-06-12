insertDetBtn = false;
var dataFeedBlock = document.getElementById("dataFeedBlock");
var insertStudent = document.getElementById("insertStudent");
function insertDetails(){
    if (insertDetBtn) {
        dataFeedBlock.style.display = "none";
        insertStudent.style  = "transform: rotateZ(0deg)";
        insertDetBtn = false;
    }else{
        dataFeedBlock.style.display = "block";
        insertStudent.style  = "transform: rotateZ(405deg)";
        insertDetBtn = true;
    }
}