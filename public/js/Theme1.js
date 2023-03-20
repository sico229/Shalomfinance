window.addEventListener("scroll", () => {
    let Y = window.scrollY;
    if (window.pageYOffset > 110) {
        document.querySelector("nav").classList.add("glisse");
    } else {
        document.querySelector("nav").classList.remove("glisse");
    }
});
