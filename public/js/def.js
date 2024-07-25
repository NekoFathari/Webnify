// Store the current scroll position on refresh
window.addEventListener('beforeunload', function() {
    localStorage.setItem('scrollPosition', window.pageYOffset);
});

// Set the scroll position on load
window.scrollTo(0, 1);


setTimeout(function() {
    if (localStorage.getItem('scrollPosition')) {
        // Scroll to the stored position
        window.scrollTo(0, localStorage.getItem('scrollPosition'));
    } else {
        // Scroll to the top of the page
        window.scrollTo(0, 0);
    }
}, 1000);