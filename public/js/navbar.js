document.addEventListener('DOMContentLoaded', function() {
    const navbarHeight = document.querySelector('.navbar').offsetHeight;
    const contentContainer = document.querySelector('.container');
    if (contentContainer) {
        contentContainer.style.paddingTop = `${navbarHeight}px`;
    } else {
        console.error('.container element not found');
    }
});