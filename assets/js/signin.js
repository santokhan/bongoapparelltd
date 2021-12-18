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
// formClick();



/** Inteligent Idea and best use of Object{} */
(function () {
    /** Lexical this */
    let san = {
        name: "Bob",
        friends: ["Santo", "Robin", "Rakib"],
        logFriends: function () {
            this.friends.forEach(x => {
                this.friends.forEach(e => {
                    if (x !== e) {
                        console.log(x + " knows " + e + ".");
                    }
                });
                console.log("\n");
            });
        }
    }
    san.logFriends();


    /** Lexical this */
    let bob = {
        name: "Bob",
        friends: ["Santo", "Robin", "Rakib"],
        logFriends: function () {
            this.friends.forEach(x => { console.log(this.name + " knows " + x + ".") })
        }
    }
    bob.logFriends();
})();


(function () {
    let m = 0;
    function recur() {
        if (m < 10) {
            m = m + 1;
            console.log(m);
            recur();
        }
    }
    // recur();
})();