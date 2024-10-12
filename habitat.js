function toggleDescription() {
    var desc = document.getElementById("descc");
    if (desc.style.display === "none" || desc.style.display === "") {
        desc.style.display = "block";
    } else {
        desc.style.display = "none";
    }
}
