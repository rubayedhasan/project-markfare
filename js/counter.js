// get the counter number element
const counters = document.querySelectorAll(".count-number");

// duration and interval
const duration = 2000;
const delay = 20;

counters.forEach((counterElement) => {
  const targetValue = parseInt(counterElement.dataset.counttarget);
  let initialValue = 0;

  const speed = targetValue / (duration / delay);

  function updateTheCounter() {
    initialValue += speed;
    if (initialValue >= targetValue) {
      initialValue = targetValue;
      counterElement.innerText = Math.floor(initialValue);
    } else {
      counterElement.innerText = Math.floor(initialValue);
      setTimeout(updateTheCounter, delay);
    }
  }

  updateTheCounter();
});
