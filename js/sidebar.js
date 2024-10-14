
function toggleSidebar() {
    var sidebar = document.getElementById("mySidebar");
    var content = document.querySelector(".content");

    if (sidebar.classList.contains("closed")) {
        sidebar.classList.remove("closed");
        content.classList.remove("collapsed");
    } else {
        sidebar.classList.add("closed");
        content.classList.add("collapsed");
    }
}
