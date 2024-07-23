/**dynamicaly handle the active for side menu */
document.addEventListener("DOMContentLoaded", function() {
    var urlPath = window.location.pathname.split('/'); // Split the URL by '/'
    var mngrIndex = urlPath.indexOf('mngr'); // Find the index of 'mngr'
    var activePage = (mngrIndex !== -1 && mngrIndex + 1 < urlPath.length) ? urlPath[mngrIndex + 1] : ''; // Get the first value after 'mngr'
    activePage = activePage.toLowerCase(); // Convert to lowercase

    var navItems = document.querySelectorAll('.nav-link');

    navItems.forEach(function(navItem) {
        var navText = navItem.textContent.trim().toLowerCase(); // Convert nav text to lowercase for comparison
        if (navText === activePage) {
            navItem.classList.add('active');
        } else {
            navItem.classList.remove('active');
        }
    });
});
