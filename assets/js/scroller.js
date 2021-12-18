// scroll to top function
function scroller() {
    const scrollBtn = document.querySelector('#scrollToTop');

    let screenH = window.innerHeight; // viewport height

    window.addEventListener("scroll", scrolling);

    function scrolling() {
        if (window.scrollY < (screenH * 2)) {
            scrollBtn.style.display = "none";
        } else {
            scrollBtn.style.display = "flex"; // flex for css style
            scrollBtn.addEventListener('click', () => {
                window.scrollTo(0, 0);
            });
        }
    }
}
scroller(); // invocation