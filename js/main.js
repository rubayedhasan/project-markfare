// handler function:: banner auto sliding
let slidersIndex = 0;
function autoSlidingBanner() {
  setTimeout(autoSlidingBanner, 3000);

  const sliders = document.querySelectorAll(".slider-item");
  for (const slider of sliders) {
    slider.style.display = "none";
  }

  slidersIndex++;
  if (slidersIndex > sliders.length) {
    slidersIndex = 1;
  }
  sliders[slidersIndex - 1].style.display = "flex";
}

// calling the functions
autoSlidingBanner();
