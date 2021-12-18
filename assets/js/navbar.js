function toggler() {
    const toggler = document.querySelector('#navToggler');
    const navs = document.querySelector('#navBar');

    // set a default status false
    let istoggle = false;

    toggler.addEventListener("click", listener);

    function listener() {
        if (!istoggle) {
            navs.style.display = 'block';

            // toggler.style.transform = "rotate(45deg)";

            // when navbar is expand
            // hide navbar onclick outside of navbar
            window.addEventListener('click', blank);

            //set true when navbar expended
            istoggle = true;
        } else {
            navs.style.display = 'none';

            // toggler.style.transform = "rotate(0deg)";
            //set true when navbar collapse
            istoggle = false;
        }
    }

    function blank(e) {
        // id of navToggler
        let filter = e.target.id;

        // id validation onclick window
        if (filter != "navToggler") {
            navs.style.display = 'none';

            //set true when navbar collapse
            istoggle = false;
        }
    }
}

toggler();