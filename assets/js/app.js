class Subscribe {
    constructor() {
        this.input = document.getElementById('subscribeEmail');
        this.form = document.getElementById('subscribeForm');
        this.btn = document.getElementById('subscribeBtn');
    }

    thanks() {
        document.getElementById('subscribeStatus').innerHTML = 'SUBSCRIBED';
        this.btn.innerHTML = 'Subscribed';
    }

    sendEmail() {
        this.form.addEventListener("submit", (e) => {
            e.preventDefault();
            const api = "https://bongoapparelltd.com/admin/subscribe.php";
            const input = document.getElementById('subscribeEmail').value;
            // const mail = JSON.stringify({ mail: input });

            const method = {
                method: "post",
                body: { "mail": input },
                mode: "no-cors",
                referrerPolicy: "no-referrer",
                headers: { "Content-Type": "text/html; charset=utf-8" }
            }

            const data = fetch('https://bongoapparelltd.com/admin/subscribe.php', method).then(data => data);

            console.log(method);
            this.thanks();
        })
    }
}


const subscribeObj = new Subscribe();
// subscribeObj.sendEmail()



class Product {
    constructor() { }
    product(params) { }
    link() { }
    details() { }
    reviews() { }
    name() { }
    sprice() { }
    img() { }
}

const P_Obj = new Product();


/** API request in JS */
async function data() {
    let info;
    await fetch('https://bongoapparelltd.com/admin/product.php').then(res => res.json()).then(data => info = data);
    console.log(JSON.stringify(info));
}
// data()

