document.addEventListener('DOMContentLoaded', () => {

  // Get all the vars
  const backToTopButton = document.querySelector('.back-to-top');
  const scrollLinks = document.querySelectorAll('.scroll-link');
  // "navbar-burger" elements
  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any navbar burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach( el => {
      el.addEventListener('click', () => {

        // Get the target from the "data-target" attribute
        const target = el.dataset.target;
        const $target = document.getElementById(target);

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });
  }

  window.addEventListener('scroll', scrollFunction);

  function scrollFunction() {
    if(window.pageYOffset > 300) { // Show backToTopButton
     backToTopButton.style.display = 'block';
    }
    else { // Hide backToTopButton
     backToTopButton.style.display = 'none';
    }
  }

  backToTopButton.addEventListener('click', smoothScrollBackToTop);

  function smoothScrollBackToTop() {
    const targetPosition = 0;
    const startPosition = window.pageYOffset;
    const distance = targetPosition - startPosition;
    const duration = 750;
    let start = null;

    window.requestAnimationFrame(step);

    function step(timestamp) {
      if (!start) start = timestamp;
      const progress = timestamp - start;
      window.scrollTo(0, distance*(progress/duration) + startPosition);
      if (progress < duration) {
        window.requestAnimationFrame(step);
      }
    }

  }

  for(let i=0; i<scrollLinks.length; i++) {
    scrollLinks[i].addEventListener('click', smoothScroll);
  }

  // smooth scrolling
  function smoothScroll(event) {
    event.preventDefault();
    const targetId = event.currentTarget.getAttribute('href');
    const targetPosition = document.querySelector(targetId).offsetTop;
    const startPosition = window.pageYOffset;
    const distance = targetPosition - startPosition;
    const duration = 1000;
    let start = null;

    window.requestAnimationFrame(step);

    function step(timestamp) {
      if (!start) start = timestamp;
      const progress = timestamp - start;
      window.scrollTo(0, distance*(progress/duration) + startPosition);
      if (progress < duration) {
        window.requestAnimationFrame(step);
      }
    }
  }

});