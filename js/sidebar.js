// Get the toggle button and sidebar elements
const toggleButton = document.querySelector('.openbtn');
const sidebar = document.querySelector('.sidebar');

// Function to check screen width
function checkScreenSize() {
    if (window.innerWidth > 768) {
        // Ensure sidebar is open on large screens
        sidebar.classList.remove('closed');
        sidebar.classList.remove('open');
    } else {
        // Allow toggle functionality on smaller screens
        sidebar.classList.add('closed');
    }
}

// Add a click event listener to the toggle button
toggleButton.addEventListener('click', function() {
    // Toggle the 'open' class on the sidebar to show/hide it
    sidebar.classList.toggle('open');
    sidebar.classList.toggle('closed');
});

// Check screen size on load
checkScreenSize();

// Add an event listener for resize
window.addEventListener('resize', checkScreenSize);
