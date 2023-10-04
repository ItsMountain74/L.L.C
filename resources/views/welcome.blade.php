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
    <header class="header" id="intro">
        <nav class="navbar">
            <div class="container">
            <div class="brand-and-toggler">
                <img src="{{asset('front/assets/logo.png')}}" alt="logo"
                            style = "width:60px; transform: translate(-25%);">
                    <a href="/" class="navbar-brand">
                        The law legal Consultant
                    </a>

                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#intro" class="nav-link">home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link">about</a>
                        </li>
                        <li class="nav-item">
                            <a href="/CEO" class="nav-link">CEO</a>
                        </li>
                        <li class="nav-item">
                            <a href="#team" class="nav-link">team</a>
                        </li>
                        <li class="nav-item">
                            <a href="#service" class="nav-link">services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link">contact</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="hero-div center container">
            @if (session('success'))
            @endif
            <h1>we make your first legal move.</h1>
            <p>
                At THE LAW LEGAL CONSULTANT, our team of professional and extensively experienced
                legal advisors are amongst the very best in UAE.
            </p>
            <div class="hero-btns">
                <button type="button" onclick="window.location.href='#about';" class="btn-trans">learn more</button>
                <button type="button" onclick="window.location.href='#team';" class="btn-white">meet our people</button>
            </div>
        </div>
    </header>
    <section class="" id="about">
        <div class="container">
            <div class="row">
{{--                <div class="detail-item">--}}
{{--                    <h2>Who are we ?!</h2>--}}
{{--                    <div class="line"></div>--}}
{{--                    <p class="text">--}}
{{--                        The Law Legal Consultants--}}
{{--                        founded by Haitham Soliman, a--}}
{{--                        renowned legal expert with vast--}}
{{--                        experience in law.--}}
{{--                        A full service Law firm based in Abu Dhabi, with local--}}
{{--                        and regional branches. Our dedicated team provides--}}
{{--                        exemplary senice in both pre and post litigation induding--}}
{{--                        but not limited to cases and consultandes related to--}}
{{--                        Banking & Finance, Corporate & Commercial, Employment,--}}
{{--                        Engineering & Construction, Insurance, Intellectual--}}
{{--                        Property Rights, Property Law, Transportation, Medical--}}
{{--                        Liability, Trade & Marine Law, Energy and Fintech.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="detail-item">--}}
{{--                    <h2>What Is a Legal Consultant?</h2>--}}
{{--                    <div class="line"></div>--}}
{{--                    <p class="text">--}}
{{--                        Legal consultants are attorneys hired by law firms to assist with a particular case or legal--}}
{{--                        matter.--}}
{{--                        They are often experts in a specific field of law, such as real estate, business, or health--}}
{{--                        care.--}}
{{--                        This qualifies them to be a consultant for firms that may not have a lot of experience in a--}}
{{--                        particular kind of law.--}}
{{--                        Legal consultants are responsible for advising clients on complex legal issues,--}}
{{--                        clarifying the case and making suggestions for moving forward.--}}
{{--                        Legal consultants generally only provide counsel privately, and not in the courtroom.--}}
{{--                    </p>--}}
{{--                </div>--}}
                <div class="detail-item">
                    <h2>Our Mission & Vision</h2>
                    <div class="line"></div>
                    <p class="text">
                        Our mission is to offer the best legal consultancy for our clients in UAE and
                        all over the world in an efficient cost-effective and practical manner
                        meanwhile preserving the elements of a personalized traditional
                        legal advisor-client relationship.
                        <br>
                        Our vision is to be the leading law firm consistently providing services
                        reflecting the highest international standards in the legal profession.
                        We strive to maintain dient relationship and have stayed with
                        success in client satisfaction. We are conscious of client demands
                        and are proactive to their needs. We also provide quick and practical
                        responses, take ‘ownership’ of assignments to facilitate smooth and
                        efficient completion and constantly strive to assist clients in achieving
                        their goal.
                    </p>
                </div>
{{--                <div class="detail-item">--}}
{{--                    <h2>How to Become a Legal Consultant</h2>--}}
{{--                    <div class="line"></div>--}}
{{--                    <p class="text">--}}
{{--                        Legal consultants are experienced attorneys. To become a legal consultant,--}}
{{--                        practice law for several years, focusing on a specific kind industry.--}}
{{--                        Keep current on the laws and regulations surrounding your specialty.--}}
{{--                        Network with a variety of administrators and companies who--}}
{{--                        may need legal counsel in your area of expertise and offer your services when issues arise.--}}
{{--                    </p>--}}
{{--                </div>--}}
                <!-- <div class="detail-item">
                    <h2>Our vision</h2>
                    <div class="line"></div>
                    <p class="text">
                        Our vision is to be the leading law firm consistently providing services
                        reflecting the highest international standards in the legal profession.
                        We strive to maintain dient relationship and have stayed with
                        success in client satisfaction. We are conscious of client demands
                        and are proactive to their needs. We also provide quick and practical
                        responses, take ‘ownership’ of assignments to facilitate smooth and
                        efficient completion and constantly strive to assist clients in achieving
                        their goal.
                    </p>
                </div> -->
                <div class="detail-item">
                    <h2>Why us ?</h2>
                    <div class="line"></div>
                    <p class="text">
                        Our firm gathers a sophisticated array of Eastern and western educated
                        layers and legal experts who are senior professionals with years of experience
                        behind them. They bring the highest level of professional service to
                        clients along with the traditions of the profession, integrity, and
                        sound ethical practices. The firm is in tune with the work culture of
                        international law firms as well as the expectations of larger corporate clients.
                    </p>
                </div>
                <div class="detail-item">
                    <h2>Strategic Partnerships</h2>
                    <div class="line"></div>
                    <p class="text">
                        The Firm realizes that expansion and
                        partnerships are the way towards
                        establishing a reputed office,
                        To that end, the Firm partnered with
                        regional and international institutions.
                        Several MoUs are signed and the Firm is
                        constantly seeking similar partnerships.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="video">
        <div class="container">
            <h2>You can also download our<a href="https://www.youtube.com/watch?v=3huIk8EbGMk"><u>Company Profile</u></a>!</h2>

        </div>
    </section>
    <section class="detail" id="team" style="background-color:#F0F0F0;">
            <div class="container">
                <div class = "team">
                    <h1>CEO & Founder</h1>
                    <div>
                    <img src="{{asset('front/assets/Haitham.jpeg')}}" style="height:500px;max: weight 200px;"
                    alt="Haitham Soliman">
                    </div>
                    <br>
                    <h3>HAITHAM SOLIMAN</h3>
                    <br>
                    <p class="text">
                        For more info about the CEO <a href="/CEO" style="color:#0d3349;"><b>Click Here</b></a>
                    </p>
                </div>
            </div>


    </section>
    <section class="detail" id="team" style="background-color:#F0F0F0;">
            <div class="title">
                <h2>Get in touch with the best lawyers and legal advisors!</h2>
                <br>
                <p class="text">
                    Do you want some guide through your
                    legal complexities of the market – corporate
                    law, labour law, litigations & nagotiations, trade
                    law, mining law, or liquidation services ?
                    <br>
                <h3>Here you are!</h3>
                </p>
            </div>
            <div class="container">
                <div class="row">
                <!-- <div class="row Owl-Carousel-theme"> -->
                    @foreach ($members as $member)
                    <div class="team">
                        <div>
                            <img src="/storage/images/members/{{ $member->image }}"
                                alt="{{ $member->name }}">
                        </div>
                        <div class="line"></div>
                        <div class="text">
                            <h2>{{ $member->name }}</h2>
                            <h3>{{ $member->job_title }}</h3>
                            <span>{{$member->about}}</span>
                        </div>
                    </div>
{{--                <!-- <div class="col-md-3 col-lg-3 col-sm-12">--}}
{{--                    <div class="team-item">--}}
{{--                        <div class="team-img text-center">--}}
{{--                            <img src="/storage/images/members/{{ $member->image }}" style="max-width: 160px"--}}
{{--                                alt="{{ $member->name }}">--}}
{{--                        </div>--}}
{{--                        <div class="team-info">--}}
{{--                            <h2>{{ $member->name }}</h2>--}}
{{--                            <span>{{ $member->job_title }}</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div> -->--}}
                @endforeach
                </div>
            </div>
            <!-- </div> -->
    </section>
    <section class="detail" id="service">
        <h2 class="header-services">Services</h2>
        <div class="container">
            <div class="row">
                @foreach ($services as $serv)
                <div class="team">
                    <div>
                        <img src="/storage/images/services/{{ $serv->image }}"
                             alt="{{ $serv->name }}">
                    </div>
                    <div class="line"></div>
                    <h2>{{ $serv->title }}</h2>
                    <p class="text">
                        {{ $serv->desc }}
                    </p>
                </div>
                @endforeach

            </div>
        </div>

    </section>
    <form action="{{route('contact.store')}}" method="POST" class="contact" id="contact">
        @csrf
        <div class="title">
            <h2 style="color: aliceblue;">CONTACT</h2>
        </div>
        <div class="half">
            <div class="item">
                <label for="name" style="color: aliceblue;">NAME</label>
                <input type="text" name="name" id="name" style="color: aliceblue;">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="item">
                <label for="email" style="color: aliceblue;">EMAIL</label>
                <input type="text" name="email" id="email" style="color: aliceblue;">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="full">
            <label for="message" style="color: aliceblue;">MESSAGE</label>

            <textarea name="message" id="message" style="color: aliceblue;"></textarea>
            @error('message')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="action">
            <input type="submit" value="SEND MESSAGE">
            <input type="reset" value="RESET" style="color: aliceblue;">
        </div>
    </form>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#about">about us</a></li>
                        <li><a href="#service">our services</a></li>
                        <li><a href="#contact">Send a message</a></li>
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
