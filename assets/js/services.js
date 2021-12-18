function changeImageName(params) {
    const head = document.querySelectorAll("div.text-center");
    let arr = [];

    head.forEach(element => {
        let htm = element.innerHTML;
        arr.push(element.innerHTML);
    });

    let lower = [];
    arr.forEach(element => {
        let head = element.toLowerCase();

        let er = head.split(" ")

        let joi = er.join("_");

        lower.push(joi);
    });

    lower.forEach(e => {
        console.log(e);
    });

    for (let i = 0; i < lower.length; i++) {
        const element = lower[i];
        let img = document.querySelectorAll("img");
        img[i].src = "assets/services_img/" + lower[i] + '.jpg';
        img[i].alt = lower[i];
        img[i].className = "mb-4";
        console.log(img[i].outerHTML);
    }
}
// changeImageName();