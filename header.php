<div class="header-line page-width">
    <p>Mon – Sun: 9.00 am – 8.00pm</p>
    <div class="contact-info">
        <p class="line"> <img src="./imgs/mail.svg" alt=""> info@lexiconlegal.in</p>
        <p> <img src="./imgs/call.svg" alt=""> +91-9106701061</p>
    </div>
</div>

<header>
    <nav class='navbar page-width'>
        <img class="main-logo" src="./imgs/nav-logo.png" alt="" width="247">
        <img class='burger-btn' src="https://www.svgrepo.com/show/322481/hamburger-menu.svg" alt="burger-manu">
        <ul class='nav-list '>
            <li><a href=""> Home</a></li>
            <li><a href=""> About</a></li>
            <li><a href=""> services</a></li>
            <li><a href=""> Our Team</a></li>
            <li><a href=""> Reviews</a></li>
            <li><a href=""> Contact Us</a></li>
        </ul>
        <p> <a class="get-consult" href="#">Get consultation <img src="./imgs/right-arrowsvg.svg" alt=""></a></p>

    </nav>
    <div class="menu hidden page-width">
        <ul>
            <li><a href=""> Home</a></li>
            <li><a href=""> About</a></li>
            <li><a href=""> services</a></li>
            <li><a href=""> Our Team</a></li>
            <li><a href=""> Reviews</a></li>
            <li><a href=""> Contact Us</a></li>
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