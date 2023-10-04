<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>The law legal consultant</title>
    <link rel="stylesheet" href="{{asset('front/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('front/resources/font.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('front/resources/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('front/resources/Magnific-Popup-master/dist/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front/resources/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('front/resources/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <div class="alert alert-success text-success hero-div center container">
        <p style="color:black;">{{ session('success') }}</p>
    </div>
</head>

<body>
        <nav class="navbar" >
            <div class="container">
            <div class="brand-and-toggler">
                <img src="{{asset('front/assets/logo.png')}}" alt="logo"
                            style = "width:60px; transform: translate(-25%);">
                    <a href="/" class="navbar-brand" style="color:#0d3349;">
                        The law legal Consultant
                    </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav" >
                        <li class="nav-item">
                            <a href="/#intro" class="nav-link" style="color:#0d3349;">home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/#about" class="nav-link" style="color:#0d3349;">about</a>
                        </li>
                        <li class="nav-item">
                            <a href="/CEO" class="nav-link" style="color:#0d3349;">CEO</a>
                        </li>
                        <li class="nav-item">
                            <a href="/#team" class="nav-link" style="color:#0d3349;">team</a>
                        </li>
                        <li class="nav-item">
                            <a href="/#service" class="nav-link" style="color:#0d3349;">services</a>
                        </li>
                        <li class="nav-item">
                            <a href="/#contact" class="nav-link" style="color:#0d3349;">contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="detail" id="CEO">
        <div class="container">
            <div class="team">
                <div>
                    <img src="{{asset('front/assets/Haitham.jpeg')}}" style="height:500px;"
                         alt="Haitham Soliman">
                </div>
                <div class="line"></div>
                <div class="text">
                <h2 style="color:black;">CEO & Founder</h2>
                <h3 style="color:black;">Haitham Soliman</h3>
                    <span style="color:black;"> Mr. Haitham Soliman established "The Law Legal Consultant" –
                    Sole proprietorship LLC and has been at the helm since its inception, demonstrating
                    extensive experience and remarkable growth that remains in step with the ever-evolving
                    landscape of law work within the United Arab Emirates. The firm has delivered numerous
                    legal consultations encompassing all aspects falling under the federal law of the United
                    Arab Emirates.Recognized as a leading legal expert in family law in the UAE, Haitham
                    has successfully handled countless complex and high-stakes family law cases with multiple
                    jurisdictional dimensions. His approach is characterized by a seamless blend of
                    professionalism, care, and expertise. Haitham is widely regarded as the go-to
                    authority on family law in the country and frequently provides expert opinions
                    to foreign courts upon request.With an in-depth understanding of the intricate
                    and multifaceted family, criminal justice, and civil law matters, coupled with
                    Haitham's exceptional advisory skills, he has emerged as one of the most sought-after
                    legal experts in the country. His specialization extends to the drafting of statements
                    of claims, memoranda, and other legal documents, offering comprehensive legal
                    consultations for all types of litigation.Having graduated from Al Mansoura University
                    in 1999 with a degree in Law, Haitham Soliman is a visionary individual known for his
                    unwavering passion and enthusiasm in always seeking new avenues of exploration. He possesses
                    profound insights into various disciplines of law on both domestic and international levels.
                    Haitham embraces risk-taking, which has contributed to his standing as one of the finest
                    legal advisors in Abu Dhabi. Continually generating fresh ideas within the legal firm, he
                    has earned the trust of clients over the years, resulting not only in successful outcomes
                    but also in the development of an impeccable reputation. </span>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="/#about">about us</a></li>
                        <li><a href="/#service">our services</a></li>
                        <li><a href="/#contact">Send a message</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/thelawlegal"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/thelawlegalconsultant/"><i class="fab fa-instagram"></i></a>
                        <br>
                        <a href="https://twitter.com/thelawlegal"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/company/thelawlegalconsultant/"><i class="fab fa-linkedin"></i></a>
                        <br>
                        <a href="https://wa.me/+971508270409"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="footer-col" style="color:white;">
                    <h4>Contact us UAE</h4>
                    <ul>
                        <li>M02- Al Zaabi Tower, Sheik Zayed Street Abu Dhabi – United Arab Emirates. </li>
                        <li>Telephone – 00971 2 555 8166.</li>
                        <li>Mobile – 00971 50 8270409.</li>
                        <li>Email- info@thelawlegal.com</li>
                        <li><a href="https://goo.gl/maps/QucVy8ZGfs6K2egJA">Location on google map</a></li>
                    </ul>
                </div>
                <div class="footer-col" style="color:white;">
                    <h4>Contact us EG</h4>
                    <ul>
                        <li>Safwat Center Building Suiz Canal Taryel Egypt – Mansoura.</li>
                        <li>Mobile: 0110 024 3444</li>
                        <li>Email- ceo@thelawlegal.com</li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('front/resources/Magnific-Popup-master/dist/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('front/resources/jquery-3.7.0.js')}}"></script>
    <script src="{{asset('front/js/script.js')}}"></script>
    <script src="{{asset('front/resources/OwlCarousel2-2.3.4/dist/owl.carousel.js')}}"></script>
</body>

</html>
