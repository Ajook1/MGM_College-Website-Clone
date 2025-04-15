document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.slideshow-container img');
    let currentSlide = 0;
  
    function showSlide(index) {
      slides.forEach(function(slide) {
        slide.style.display = 'none';
      });
  
      slides[index].style.display = 'block';
    }
  
    function nextSlide() {
      currentSlide++;
      if (currentSlide >= slides.length) {
        currentSlide = 0;
      }
      showSlide(currentSlide);
    }
  
    // Change slide every 5 seconds
    setInterval(nextSlide, 2500);
  });
  


  /*-----------------------------------------------------------------------------*/
