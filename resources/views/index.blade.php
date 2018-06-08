<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My company</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
<header>
    <div class="header_logo">
        <p>Mycompany</p>
    </div>
    <nav>
        <div class="top-nav" id='myTopNav'>
            <a href="#">HOME</a>
            <a href="#about">ABOUT</a>
            <a href="#services">SERVICES</a>
            <a href="#">PORTFOLIO</a>
            <a href="#">TESTIMONIALS</a>
            <a href="#">CONTACT</a>
            <a href="#" id="menu" class="icon">&#9776;</a>
        </div>
    </nav>
</header>
<main>
    <section class="main-welcome">
        <h1>WELCOME ON <span class="my-company">MYCOMPANY</span></h1>
        <p>We are a digital agency with <span class="text-p-decor">years of experience</span> and with <span
                    class="text-p-decor">extraordinary people</span></p>
    </section>
    <section class="wrapper">
        <div class="main-about" id="about">
            <div class="about-left">
                <img class="mw-100" src="{{asset('/img/mac.png')}}" alt="mac">
            </div>
            <div class="about-right">
                <h1>Some words about us</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus ex quidem maiores ullam quis, at
                    asperiores minus ad eaque maxime possimus .</p>
                <ul>
                    <li>Mission - We deliver uniqueness and quality</li>
                    <li>Skills - Delivering fast and excellent results</li>
                    <li>Clients - Satisfied clients thanks to our experience</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="main-team">
        <div class="wrapper">
            <h1>OUR TEAM</h1>
            <div class="team-cards">
                <div class="card">
                    <div class="photo"></div>
                    <h4 class="name">Vlad Ivanov</h4>
                    <p class="position">Designer</p>
                    <p class="about-position">Do not seek to change what has come before.
                        Seek to create that which has not.</p>
                </div>
                <div class="card">
                    <div class="photo"></div>
                    <h4 class="name">Pavel Konov</h4>
                    <p class="position">Copywriter</p>
                    <p class="about-position">Do not seek to change what has come before.
                        Seek to create that which has not.</p>
                </div>
                <div class="card">
                    <div class="photo"></div>
                    <h4 class="name">Bogdan Makarov</h4>
                    <p class="position">Manager</p>
                    <p class="about-position">Do not seek to change what has come before.
                        Seek to create that which has not.</p>
                </div>
                <div class="card">
                    <div class="photo"></div>
                    <h4 class="name">Max Belov</h4>
                    <p class="position">SEO</p>
                    <p class="about-position">Do not seek to change what has come before.
                        Seek to create that which has not.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="main-services">
        <div class="wrapper" id="services">
            <h1>OUR SERVICES</h1>
            <p><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus ex quidem maiores ullam quis, at
                    asperiores minus ad eaque maxime possimus cum ab iusto assumenda velit excepturi porro ipsa
                    tenetur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus ex quidem maiores ullam
                    quis, at asperiores minus ad eaque maxime possimus cum ab iusto assumenda velit excepturi porro ipsa
                    tenetur.</i></p>
            <div class="services-cards">
                <div class="services-card">
                    <img src="{{asset('img/mobile-aps.png')}}" alt="mobile-aps">
                    <h4>MOBILE APPS</h4>
                    <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section
                        1.10.32.</p>
                </div>
                <div class="services-card">
                    <img src="{{asset('img/mobile-aps.png')}}" alt="mobile-aps">
                    <h4>MOBILE APPS</h4>
                    <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section
                        1.10.32.</p>
                </div>
                <div class="services-card">
                    <img src="{{asset('img/mobile-aps.png')}}" alt="mobile-aps">
                    <h4>MOBILE APPS</h4>
                    <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section
                        1.10.32.</p>
                </div>
                <div class="services-card">
                    <img src="{{asset('img/mobile-aps.png')}}" alt="mobile-aps">
                    <h4>MOBILE APPS</h4>
                    <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section
                        1.10.32.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="main-clients">
        <div class="wrapper">
            <h1>SOME OF OUR CLIENTS</h1>
            <div class="clients">
                <img src="{{asset('/img/chanel.png')}}" alt="">
                <img src="{{asset('/img/Guer.png')}}" alt="">
                <img src="{{asset('/img/Lacots.png')}}" alt="">
                <img src="{{asset('/img/Lancome.png')}}" alt="">
                <img src="{{asset('/img/Zara.png')}}" alt="">
            </div>
        </div>
    </section>

    <section class="main-work">
        <div class="wrapper">
            <h1>TAKE A LOOK AT OUR WORK</h1>
            <p><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus ex quidem maiores ullam quis, at
                    asperiores minus ad eaque maxime possimus cum ab iusto assumenda velit excepturi porro ipsa
                    tenetur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus ex quidem maiores ullam
                    quis, at asperiores minus ad eaque maxime possimus cum ab iusto assumenda velit excepturi porro ipsa
                    tenetur.</i></p>
            <div class="gallery">
                <div class="line1">
                    <img src="{{asset('/img/image1.jpg')}}" alt="">
                    <img src="{{asset('/img/image1.jpg')}}" alt="">
                    <img src="{{asset('/img/image1.jpg')}}" alt="">
                    <img src="{{asset('/img/image1.jpg')}}" alt="">
                </div>
                <div class="line2">
                    <img src="{{asset('img/image2.jpg')}}" alt="">
                    <img src="{{asset('img/image2.jpg')}}" alt="">
                    <img src="{{asset('img/image2.jpg')}}" alt="">
                    <img src="{{asset('img/image2.jpg')}}" alt="">
                </div>
                <div class="line3">
                    <img src="{{asset('/img/image3.jpg')}}" alt="">
                    <img src="{{asset('/img/image3.jpg')}}" alt="">
                    <img src="{{asset('/img/image3.jpg')}}" alt="">
                    <img src="{{asset('/img/image3.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="main-testimonials">
        <div class="wrapper">
            <h1>our clients’ testimonials</h1>
            <p class="testimonial">This book is a treatise on the theory of ethics, very popular during the Renaissance.
                The first line of
                Lorem
                Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
            <p>Dean Martin, CEO Acme Inc.</p>
        </div>
    </section>
    <section class="contact-form">
        <div class="contact-wrapper">
            <h1>CONTACT INFO</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus ex quidem maiores ullam quis, at
                asperiores minus ad eaque maxime possimus cum ab iusto assumenda velit excepturi porro ipsa
                tenetur.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit. </p>
            <form action="#">
                <div class="form-inputs">
                    <p>Name <span class="red">*</span> <input type="text"></p>
                    <p>Email address <span class="red">*</span> <input type="text"></p>
                </div>
                <p>Message <span class="red">*</span></p>
                <textarea name="text"></textarea>
                <div class="button-block">
                    <input type="submit" value="SEND">
                </div>
            </form>
        </div>
    </section>
</main>
<footer>
    <div class="wrapper">
        <div class="social">
            <a href="#"><img src="{{asset('img/dribbble.png')}}" alt=""></a>
            <a href="#"><img src="{{asset('img/facebook.png')}}" alt=""></a>
            <a href="#"><img src="{{asset('img/google.png')}}" alt=""></a>
            <a href="#"><img src="{{asset('img/linkedin.png')}}" alt=""></a>
            <a href="#"><img src="{{asset('img/twitter.png')}}" alt=""></a>
        </div>
    </div>
</footer>
<script src="{{asset('/js/script.js')}}"></script>
</body>
</html>