function RequestData() {
    const xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = (req, res) => {
        if (this.readyState === 4 && this.status === 200) {
            console.log(this.responseText);
            console.log("Data");
        }
    }

    xhttp.open("GET", "https://bongoapparelltd.com/admin/product.php", true)

    xhttp.send();
}
RequestData();



function reviews() {
    const reviews = document.querySelectorAll(".details .review");
    // const star = reviews[0].children;

    reviews.forEach(review => {
        faStar(review);
    });
}
reviews();

function faStar(params = []) {
    const stars = params.children;

    for (let i = 0; i < 5; i++) {
        stars[i].addEventListener("mouseover", function () {
            starStyle(stars, i, "#ffd27d");
        });

        stars[i].addEventListener("mouseout", function () {
            starStyle(stars, i, "#888888");
        });
    }
}

function starStyle(star, int, color) {
    for (let i = 0; i <= int; i++) {
        star[i].style.color = color;
    }
}
