// concat total order price
function Order(orders) {
    let price = 25; // total order price

    return price;
}

// additional charges script
function additional() {
    const addCash = document.querySelectorAll('.add-cash'); // input selector

    const target = document.querySelector('#addCash'); // where to add cash

    let len = addCash.length; // input length

    let price = [1, 2, 3]; // additional 3 service price in dollar

    let total = 0; // default total for concat integer

    // input loop for listener 
    for (let i = 0; i < len; i++) {
        addCash[i].addEventListener("click", function () {
            addCash.innerHTML = i;
            if (addCash[i].checked) {
                total = total + price[i]; // increase amount
            } else {
                total = total - price[i]; // decrease amount
            }
            target.innerHTML = "$" + total; // append total cost

            totalCharge(total) // call total price function
        });
    }
}
additional(); // invocation

function totalCharge(additional) {
    additional = additional || 0;
    const cartPrice = document.querySelector("#cartPrice");

    // total price selector
    // this total will used for apppend total price
    const total = document.querySelector("#totalPrice");

    // String() to parseInt() function
    function trim(props) {
        let price = parseInt(props.replace("$", "")); // console.log(price.trim());
        return price;
    }

    // append total value
    total.innerHTML = `$${Order() + additional}`;
}
totalCharge(); // invocation