// Function to toggle the mobile menu
function toggleMenu() {
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.classList.toggle('active');
}

document.addEventListener("DOMContentLoaded", function () {
    // Get all navigation links
    const navLinks = document.querySelectorAll(".nav-item");

    // Get the current page URL
    const currentPage = window.location.pathname.split("/").pop();

    // Loop through links and set the active class
    navLinks.forEach(link => {
        if (link.getAttribute("href") === currentPage) {
            link.classList.add("active");
        } else {
            link.classList.remove("active");
        }
    });
});


