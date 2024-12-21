<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Timer</title>
    <style>
        .text {
            display: none; /* Hide all texts by default */
            opacity: 0;
            transition: opacity 0.5s ease-in-out; /* Smooth fade-in/out */
        }

        .text.active {
            display: block; /* Make visible only when active */
            opacity: 1;     /* Fade in */
        }
    </style>
</head>
<body>
    <div class="text">Text 1</div>
    <div class="text">Text 2</div>
    <div class="text">Text 3</div>

    <script>
        const texts = document.querySelectorAll('.text');
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
    </script>
</body>
</html>
