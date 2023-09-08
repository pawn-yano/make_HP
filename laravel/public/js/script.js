function toggleDialog() {
    let dialog = document.getElementById("dialog");
    if (dialog.style.display === "none") {
        dialog.style.display = "block";
    } else {
        dialog.style.display = "none";
    }
}

function switchOrder(order) {
    let sorted = document.getElementsByClassName("sorted");
    for (let each of sorted) {
        each.style.display = "none";
    }
    document.getElementById(order).style.display = "block";
}
