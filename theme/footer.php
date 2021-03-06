<?php
$f_link = array(
    array(
        "title" => "get to know us",
        "link" => array("careers", "blog", "about bongo apparel", "investor relations", "FAQ")
    ),
    array(
        "title" => "buy with us",
        "link" => array("services", "contact Us", "privacy policy", "cookie policy", "terms and conditions")
    ),
    array(
        "title" => "categories",
        "link" => array("women", "men", "accessories", "new arrivals", "clearance")
    )
);



/** Loop for unordered list
 * Pass items array as a parameter
 * Call this function inside of your target <ul></ul>
 */
function nav_box(array $arr)
{
?>
    <div class="nav_title"><?= strtoupper($arr["title"]) ?></div>
    <ul class="list-unstyled">
        <?php foreach ($arr["link"] as $link) : ?>
            <li class="py-2"><a class="link text-decoration-none" href="<?= strtok($link, " ") ?>.php"><?= ucwords($link) ?></a></li>
        <?php endforeach ?>
    </ul>
<?php
}
?>


<footer class="footer pt-3 pt-md-5">
    <div class="container-fluid">
        <div class="row bg-white">
            <div class="col d-flex justify-content-between align-items-center py-1">
                <div>
                    <a href="https://bongoapparelltd.com" class="logo" aria-label="Logo" data-name="Logo">
                        <img src="assets/svg/bongo.svg" alt="Logo" height="100%">
                    </a>
                </div>

                <div class="social">
                    <div class="media">
                        <a class="icon" target="_blank" rel="noreferrer" aria-label="Facebook" href="https://www.facebook.com/shahan.shah.520">
                            <img src="assets/social_icon/facebook.svg" alt="Facebook">
                        </a>
                        <a class="icon" target="_blank" rel="noreferrer" aria-label="Twitter" href="https://twitter.com/shahan.shah.520">
                            <img src="assets/social_icon/twitter.svg" alt="Twitter">
                        </a>
                        <a class="icon" target="_blank" rel="noreferrer" aria-label="Linkedin" href="https://www.linkedin.com/company/76264642/admin/">
                            <img src="assets/social_icon/linkedin.svg" alt="Linkedin">
                        </a>
                        <a class="icon" target="_blank" rel="noreferrer" aria-label="Instagram" href="https://www.instagram.com/santokhan1999/?hl=en">
                            <img src="assets/social_icon/instagram.svg" alt="Instagram">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row py-3 pt-md-5 pb-md-4">
                <div class="col-12 col-sm-6 col-xl-3"><?php nav_box($f_link[0]) ?></div>

                <div class="col-12 col-sm-6 col-xl-3"><?php nav_box($f_link[1]) ?></div>

                <div class="col-12 col-sm-6 col-xl-3"><?php nav_box($f_link[2]) ?></div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <h4 class="nav_title">Let Us Help You</h4>
                    <address class="address">
                        <ul class="list-unstyled">
                            <li class="py-2">Phone: <a href="tel:+8801711327764" class="link-secondary">+8801711327764</a></li>
                            <li class="py-2">Email: <a href="mailto:shahanshahkabir@gmail.com" class="link-secondary">info@mydomain.com</a></li>
                            <li class="py-2">Hours: From 9 am to 9 pm</li>
                            <li class="py-2">Address: Haji Camp, Bottola, Airport, Dhaka 1230</li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
    </div>

    <hr class="hr p-0 m-0">
    <div class="container-fluid py-2">
        <div class="row align-items-center">
            <div class="col-12 col-xl-6 d-flex justify-content-center justify-content-xl-start">
                <div class="copyright">
                    <span>Copyright @2010-21 All Right Reserved. Developer</span>
                    <a class="developer" href="https://santokhan.github.io" target="_blank" rel="noreferrer">
                        <span>Santo</span><span class="d-none d-xl-inline"> >></span>
                    </a>
                </div>
            </div>
            <div class="col-12 col-xl-6 d-flex justify-content-center justify-content-xl-end">
                <div class="row">
                    <div class="col p-0">
                        <img class="p-1" src="assets/payment_method/google_pay_5_x40.webp" alt="google-pay" width="62">
                    </div>
                    <div class="col p-0">
                        <img class="p-1" src="assets/payment_method/apple_pay_4_x40.webp" alt="apple-pay" width="62">
                    </div>
                    <div class="col p-0">
                        <img class="p-1" src="assets/payment_method/paypal_new_x40.webp" alt="paypal" width="62">
                    </div>
                    <div class="col p-0">
                        <img class="p-1" src="assets/payment_method/visa_2_x40.webp" alt="visa" width="62">
                    </div>
                    <div class="col p-0">
                        <img class="p-1" src="assets/payment_method/master_3_x40.webp" alt="mastercard" width="62">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<button class="scroll-to-top" id="scrollToTop">
    <svg width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M7.27942 0.748845C7.67282 0.340012 8.32718 0.340012 8.72058 0.748845L15.0308 7.30662C15.6421 7.94193 15.1919 9 14.3102 9H1.68977C0.808114 9 0.357875 7.94193 0.969197 7.30662L7.27942 0.748845Z" fill="#555555" />
    </svg>
</button>

<script async src="assets/js/navbar.js"></script>
<script async src="assets/js/app.js"></script>
<script async src="assets/js/scroller.js"></script>
<script async src="assets/js/drag.js"></script>
<script async src="assets/js/scrollreveal.js"></script>
</body>

</html>