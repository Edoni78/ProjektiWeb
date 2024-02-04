document.addEventListener('DOMContentLoaded', function() {
    const textElement = document.getElementById('typewriter-text');
    const textContent = textElement.innerText;
    textElement.innerText = '';

    let charIndex = 0;
    function type() {
        const currentText = textContent.slice(0, charIndex);
        textElement.innerText = currentText;
        charIndex++;

        if (charIndex <= textContent.length) {
            setTimeout(type, 40); // Adjust typing speed as needed
        }
    }

    type(); // Start the typing animation
});