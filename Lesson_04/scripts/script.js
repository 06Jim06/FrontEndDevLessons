document.addEventListener('DOMContentLoaded', ()=> {

    let navLinks = document.querySelectorAll('.redirect-links li a');

    function setCurrentPage() {
        let currentPage = window.location.href;
        navLinks.forEach(function(link) {
            if (link.href === currentPage) {
                link.classList.add('activePage');
            } else {
                link.classList.remove('activePage');
            }
        });
    }

    setCurrentPage();

    navLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            setCurrentPage();
        });
    });
});