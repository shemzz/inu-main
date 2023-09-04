// Countdown Timer
function startCountdown() {
    const targetDate = new Date(); // Get the current date and time
    targetDate.setHours(0, 0, 0, 0); // Set the target time to midnight
  
    function updateCountdown() {
      const currentDate = new Date();
      const timeRemaining = targetDate - currentDate;
  
      if (timeRemaining <= 0) {
        // Reset the countdown when the target time is reached (every 24 hours)
        targetDate.setDate(targetDate.getDate() + 1);
        updateCountdown(); // Restart the countdown
      } else {
        const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);
  
          document.getElementById("days").innerHTML = days;
          document.getElementById("hours").innerHTML = hours;
          document.getElementById("mins").innerHTML = minutes;
          document.getElementById("secs").innerHTML = seconds;
      }
    }
  
    // Call updateCountdown to start the countdown
    updateCountdown();
    setInterval(updateCountdown, 1000); // Update every second
  }
  
  // Value Incrementer
  function startIncrementer() {
    let currentValue = 600000; // Initial value
    const maxValue = 850000; // Maximum value
    const incrementAmount = 1; // Increment amount
  
    function incrementValue() {
      currentValue += incrementAmount;
  
      if (currentValue >= maxValue) {
        // Reset the value when it reaches the maximum (every 24 hours)
        document.getElementById("amountraised").innerHTML = currentValue;
        currentValue = 600000;
        // Update your HTML element with the new value
        // For example, you can use document.getElementById or another method to update your DOM element.
      }
    }
    
    // Call incrementValue to start the incrementer
    incrementValue();
    setInterval(incrementValue, 86400000); // Update every 24 hours (24 hours * 60 minutes * 60 seconds * 1000 milliseconds)
  }
  
  // Call both functions to start the countdown and incrementer
  startCountdown();
  startIncrementer();
  