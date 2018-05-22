var selectedType = "PF";
function projectsType(type) {
    selectedType = type;
    getProjects(selectedType);
} 

function loadFunction(){
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("data").innerHTML = this.responseText;
        }
    };
    xmlHttp.open("GET", "project.php?i=" + selectedType, true);
    xmlHttp.send();
}


function getProjects(selectedType) {
    if (selectedType == 0) {
        return;
    } else {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("data").innerHTML = this.responseText;
            }
        };
        xmlHttp.open("GET", "project.php?i=" + selectedType, true);
        xmlHttp.send();
    }
}