function ProjectsButtons(btn){
    var children = document.getElementById("btnsfancy").children;
    for (let i = 0; i < children.length; i++) {
        children[i].style.borderBottom = "none";
        document.getElementById(children[i].name).style.display = "none";
    }

    btn.style.borderBottom = "2px solid #FF4B5B";
    document.getElementById(btn.name).style.display = "block";
}