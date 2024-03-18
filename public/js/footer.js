/*
document.addEventListener('DOMContentLoaded', function() {
    const footerHeight = document.querySelector('.footer').offsetHeight;
    document.querySelector('.container').style.paddingBottom = footerHeight + 'px';
});
*/

// Get the footer element
const footer = document.getElementById('footer');

// Add a scroll event listener to the window
window.addEventListener('scroll', function() {
    // Calculate the scroll position
    const scrollPosition = window.innerHeight + window.pageYOffset;
    const documentHeight = document.body.offsetHeight;

    // Show or hide the footer based on the scroll position
    if (scrollPosition >= documentHeight - 50) {
        footer.style.display = 'block';
    } else {
        footer.style.display = 'none';
    }
});
