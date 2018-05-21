var selectedType;
function projectsType(type) {
    selectedType = type;
    getProjects(selectedType);
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
        xmlHttp.open("GET", "db.php?i=" + selectedType, true);
        xmlHttp.send();
    }
}