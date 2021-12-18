function formClick() {
    const username = document.getElementById("userName");
    const pass = document.getElementById("userPass");
    const btn = document.getElementById("submitSignin");

    function listener(params) {
        let target = params;
        target.addEventListener("click", function () {
            alert("Input is disabled for construction.");
        });
    }

    listener(username);
    listener(pass);
    listener(btn);
}
formClick();