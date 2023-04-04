const btn = document.getElementById("burger_btn");

btn.addEventListener("click", function() {
    this.classList.toggle("open");
});