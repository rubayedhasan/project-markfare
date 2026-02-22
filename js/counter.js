// Counter Section
const counterSection = document.querySelector("#countdown");
const counters = document.querySelectorAll(".count-number");

// animation settings
const duration = 2000; // total animation time
const interval = 20;

let hasStarted = false;

// function to start counter
function startCounter() {
  counters.forEach((counter) => {
    const targetValue = parseInt(counter.dataset.counttarget);
    let currentValue = 0;

    const increment = targetValue / (duration / interval);

    function updateCounter() {
      currentValue += increment;

      if (currentValue >= targetValue) {
        counter.innerText = targetValue;
      } else {
        counter.innerText = Math.floor(currentValue);
        setTimeout(updateCounter, interval);
      }
    }

    updateCounter();
  });
}

// function to reset counter
function resetCounter() {
  counters.forEach((counter) => {
    counter.innerText = 0;
  });
}

// Intersection Observer
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        if (!hasStarted) {
          startCounter();
          hasStarted = true;
        }
      } else {
        resetCounter();
        hasStarted = false;
      }
    });
  },
  {
    threshold: 0.5, // triggers when 50% visible
  },
);

observer.observe(counterSection);
