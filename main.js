document.addEventListener("DOMContentLoaded", function () {
    // ✅ LOCATIONS DROPDOWN LOGIC
    const locationToggle = document.getElementById("locationToggle");
    const locationMenu = document.getElementById("locationMenu");
  
    if (locationToggle && locationMenu) {
      locationToggle.addEventListener("click", function (e) {
        e.preventDefault();
        locationMenu.style.display = locationMenu.style.display === "block" ? "none" : "block";
      });
  
      document.addEventListener("click", function (e) {
        if (!e.target.closest(".dropdown")) {
          locationMenu.style.display = "none";
        }
      });
    }
  
    // ✅ TESTIMONIAL SLIDER (2 testimonials at a time)
    const track = document.querySelector('.testimonial-slider-track');
    const pairs = document.querySelectorAll('.testimonial-slide-pair');
    let current = 0;
  
    function showNextPair() {
      track.style.transform = `translateX(-${current * 100}%)`;
      current = (current + 1) % pairs.length;
    }
  
    if (pairs.length > 1) {
      setInterval(showNextPair, 4000);
    }
  });
  