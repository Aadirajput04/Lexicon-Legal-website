<div class="header-line page-width side-padding">
    <p>Mon – Sun: 9.00 am – 8.00pm</p>
    <div class="contact-info">
        <p class="line"> <img src="./imgs/mail.svg" alt=""> info@lexiconlegal.in</p>
        <p class="line"> <img src="./imgs/call.svg" alt=""> +91-9106701061</p>



        <a href=""> <img src="./imgs/mail.svg" alt=""> </a>
        <a href=""> <img src="./imgs/call.svg" alt=""> </a>
    </div>
</div>

<header>
    <nav class='navbar page-width side-padding'>
        <a href="./index.php">
            <img class="main-logo" src="./imgs/nav-logo.png" alt=""></a>
        <img class='burger-btn' src="./imgs/menu-icon-aaa.svg" alt="burger-manu">
        <ul class='nav-list '>
            <li><a href="./index.php"> Home</a></li>
            <li><a href="./About-us.php"> About us</a></li>
            <li><a href="./services.php"> services</a></li>
            <li><a href="./Our-team.php"> Our Team</a></li>
            <li><a href="./Reviews.php"> Reviews</a></li>
            <li><a href="./contact-us.php"> Contact Us</a></li>
        </ul>
        <p> <a class="get-consult" href="#">Get consultation <img src="./imgs/right-arrowsvg.svg" alt=""></a></p>

    </nav>
    <div class="menu hidden page-width">
        <ul>
            <li><a href="./index.php"> Home</a></li>
            <li><a href="./About-us.php"> About us</a></li>
            <li><a href="./services.php"> services</a></li>
            <li><a href="./Our-team.php"> Our Team</a></li>
            <li><a href="./Reviews.php"> Reviews</a></li>
            <li><a href="./contact-us.php"> Contact Us</a></li>
        </ul>
    </div>
</header>
<script>
    const btn = document.querySelector('.burger-btn');
    const menu = document.querySelector('.menu');
    const navbar = document.querySelector('.navbar');

    if (window.innerWidth > 740) {
        menu.style.height = 0;
        menu.style.opacity = 0;
    };

    btn.addEventListener('click', function () {
        if (menu.style.height == '0px') {
            menu.style.height = '200px';
            navbar.style.boxShadow = 'none';
            menu.style.opacity = 1;
        } else {
            menu.style.height = 0;
            menu.style.opacity = 0;

        }
    })


</script>