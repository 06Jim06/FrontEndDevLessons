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



function displayHamburg() {
    let hamburg = document.getElementById("hamburg");
  
    if (hamburg.style.display === "block") {
      hamburg.style.display = "none";
    } else {
      hamburg.style.display = "block";
    }
  }

  function displayTours(){
    let tours = document.getElementById("tours");
    let arrow = document.getElementById("arrow");

    if (tours.style.display === "block") {
        tours.style.display = "none";
        arrow.setAttribute("src", "icons/right-arrow.png");

    } else {
        tours.style.display = "block";
        arrow.setAttribute("src", "icons/down-arrow.png");
        ;
    }
  }