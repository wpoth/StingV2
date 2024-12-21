console.log("main.js werkt.");

document.addEventListener("DOMContentLoaded", () => {
    const texts = document.querySelectorAll('.h-text');
    let currentIndex = 0;

    function showText() {
        // Hide all text elements
        texts.forEach((text) => text.classList.remove('active'));

        // Show the current text element
        texts[currentIndex].classList.add('active');

        // Move to the next text, or loop back to the first
        currentIndex = (currentIndex + 1) % texts.length;
    }

    // Start the timer
    showText(); // Show the first text immediately
    setInterval(showText, 2000); // Change text every 2 seconds
});
