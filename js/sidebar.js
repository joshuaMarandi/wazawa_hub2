// Get the toggle button and sidebar elements
const toggleButton = document.querySelector('.openbtn');
const sidebar = document.querySelector('.sidebar');

// Add a click event listener to the toggle button
toggleButton.addEventListener('click', function() {
    // Toggle the 'open' class on the sidebar to show/hide it
    sidebar.classList.toggle('open');
    sidebar.classList.toggle('closed');
});
