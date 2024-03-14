document.addEventListener('DOMContentLoaded', () => {
    const navbarHeight = document.querySelector('.navbar').offsetHeight;
    const contentContainer = document.querySelector('.content-container');
    contentContainer.style.paddingTop = `${navbarHeight}px`;
});