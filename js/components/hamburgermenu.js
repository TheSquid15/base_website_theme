const btn = document.getElementById("burger_btn");
const link_container = document.getElementById("links_container");
const cssObj = window.getComputedStyle(link_container, null);

btn.addEventListener("click", function() {
    this.classList.toggle("open");

    console.log(cssObj.getPropertyValue("max-height"));
    link_container.style.maxHeight = cssObj.getPropertyValue("max-height") == "0px" ? "1000px" : "0px";
});

let window_x = window;

window_x.addEventListener("resize", function() {
    if(this.innerWidth >= 768) {
        link_container.style.maxHeight = "fit-content";
    }
});