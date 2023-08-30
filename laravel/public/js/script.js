function toggleDialog() {
    let dialog = document.getElementById("dialog");
    if (dialog.style.display === "none") {
        dialog.style.display = "block";
    } else {
        dialog.style.display = "none";
    }
}

function switchOrder(k) {
    const N = document.getElementById('sort').getAttribute("data-count-orders");
    for (let i = 0; i < N; i++) {
        let order = document.getElementById("order_" + i);
        if (i == k) {
            order.style.display = "block";
        } else {
            order.style.display = "none";
        }
    }
}
