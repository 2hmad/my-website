<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="{{ asset('images/favicon.png') }}" rel="icon"/>
    <title>Ahmed M. Ibrahim</title>
    <meta name="description" content="">
    @include('layout.links')
</head>

<body class="side-header" data-spy="scroll" data-target=".navbar" data-offset="1">

<!-- Preloader -->
<div class="preloader preloader-dark">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- Preloader End -->

<!-- Document Wrapper
=============================== -->
<div id="main-wrapper">
@include('layout.header')
<!-- Content
        ============================================= -->
    <div id="content" role="main">

        <!-- Intro
        ============================================= -->
        <section id="home">
            <div class="hero-wrap">
                <div class="hero-mask opacity-8 bg-dark"></div>
                <div class="hero-bg parallax" style="background-image:url('images/intro-bg.jpg');"></div>
                <div class="hero-content section d-flex fullscreen">
                    <div class="container my-auto">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="typed-strings">
                                    <p>I'm Ahmed Mohamed Ibrahim</p>
                                    <p>I'm a Full-Stack developer.</p>
                                    <p>I'm a Grahpic Designer.</p>
                                </div>
                                <p class="text-7 font-weight-500 text-white mb-2 mb-md-3">Welcome</p>
                                <h2 class="text-16 font-weight-600 text-white mb-2 mb-md-3"><span class="typed"></span>
                                </h2>
                                <p class="text-5 text-light mb-4">Live in Alexandria, Egypt.</p>
                                <a href="#contact"
                                   class="btn btn-outline-primary rounded-pill shadow-none smooth-scroll mt-2">Hire
                                    Me</a>
                            </div>
                        </div>
                    </div>
                    <a href="#about" class="scroll-down-arrow text-white smooth-scroll"><span class="animated"><i
                                class="fa fa-chevron-down"></i></span></a></div>
            </div>
        </section>
        <!-- Intro end -->

        <!-- About
        ============================================= -->
        <section id="about" class="section bg-dark-1">
            <div class="container px-lg-5">
                <!-- Heading -->
                <div class="position-relative d-flex text-center mb-5">
                    <h2 class="text-24 text-muted opacity-1 text-uppercase font-weight-600 w-100 mb-0">About Me</h2>
                    <p class="text-9 text-white font-weight-600 position-absolute w-100 align-self-center line-height-4 mb-0">
                        Know Me More<span
                            class="heading-separator-line border-bottom border-3 border-primary position-abolute d-block mx-auto"></span>
                    </p>
                </div>
                <!-- Heading end-->

                <div class="row">
                    <div class="col-lg-8 text-center text-lg-left">
                        <h2 class="text-7 text-white font-weight-600 mb-3">I'm <span
                                class="text-primary">Ahmed Ibrahim,</span> Full-Stack developer</h2>
                        <p class="text-white-50">I help you build website for your business, Many clients have procured
                            exceptional results while working with me.</p>
                        <p class="text-white-50">Delivering work within time and budget which meets client’s
                            requirements is our moto.</p>
                    </div>
                    <div class="col-lg-4 mt-5 mt-lg-0">
                        <div class="pl-4">
                            <ul class="list-style-2 list-style-light text-light">
                                <li><span class="font-weight-600 mr-2">Name:</span>Ahmed Mohamed Ibrahim</li>
                                <li><span class="font-weight-600 mr-2">Email:</span><a
                                        href="mailto:eng.ahmedmohamed.2002@gmail.com">eng.ahmedmohamed.2002@gmail.com</a>
                                </li>
                                <li><span class="font-weight-600 mr-2">Birthdate:</span>11/9/2002</li>
                                <li class="border-0"><span class="font-weight-600 mr-2">From:</span>Alexandria, Egypt
                                </li>
                            </ul>
                            <a href="{{('Ahmed Mohamed Ibrahim.pdf')}}"
                               class="btn btn-primary rounded-pill">Download CV</a></div>
                    </div>
                </div>
                <div class="brands-grid separator-border separator-border-light mt-5">
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <div class="featured-box text-center">
                                <h4 class="text-12 text-white-50 mb-0"><span class="counter" data-from="0"
                                                                             data-to="4">4</span></h4>
                                <p class="text-light mb-0">Years Experiance</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="featured-box text-center">
                                <h4 class="text-12 text-white-50 mb-0"><span class="counter" data-from="0" data-to="20">20</span>
                                </h4>
                                <p class="text-light mb-0">Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="featured-box text-center">
                                <h4 class="text-12 text-white-50 mb-0"><span class="counter" data-from="0" data-to="20">20</span>
                                </h4>
                                <p class="text-light mb-0">Projects Done</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="featured-box text-center">
                                <h4 class="text-12 text-white-50 mb-0"><span class="counter" data-from="0"
                                                                             data-to="4">4</span></h4>
                                <p class="text-light mb-0">Certificates</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About end -->

        <!-- Services
        ============================================= -->
        <section id="services" class="section bg-dark-2">
            <div class="container px-lg-5">
                <!-- Heading -->
                <div class="position-relative d-flex text-center mb-5">
                    <h2 class="text-24 text-muted opacity-1 text-uppercase font-weight-600 w-100 mb-0">Services</h2>
                    <p class="text-9 text-white font-weight-600 position-absolute w-100 align-self-center line-height-4 mb-0">
                        What I Do?<span
                            class="heading-separator-line border-bottom border-3 border-primary position-abolute d-block mx-auto"></span>
                    </p>
                </div>
                <!-- Heading end-->

                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="featured-box style-3 mb-5">
                                    <div class="featured-box-icon text-primary bg-dark-1 shadow-sm rounded"><i
                                            class="fas fa-desktop"></i></div>
                                    <h3 class="text-white">Front-end Development</h3>
                                    <p class="text-white-50 mb-0">I develop front end of websites using Html, Css,
                                        JavaScript and Vue.js</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="featured-box style-3 mb-5">
                                    <div class="featured-box-icon text-primary bg-dark-1 shadow-sm rounded"><i
                                            class="fas fa-pencil-ruler"></i></div>
                                    <h3 class="text-white">UI/UX Design</h3>
                                    <p class="text-white-50 mb-0">I have a little experience in designing UI & UX for
                                        websites and applications, I using Adobe XD and Figma</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="featured-box style-3 mb-5">
                                    <div class="featured-box-icon text-primary bg-dark-1 shadow-sm rounded"><i
                                            class="fas fa-server"></i></div>
                                    <h3 class="text-white">Back-end Development</h3>
                                    <p class="text-white-50 mb-0">I am developing a backend for websites and
                                        applications using PHP and Laravel with Restful APIs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services end -->

        <!-- Resume
        ============================================= -->
        <section id="resume" class="section bg-dark-1">
            <div class="container px-lg-5">
                <!-- Heading -->
                <div class="position-relative d-flex text-center mb-5">
                    <h2 class="text-24 text-muted opacity-1 text-uppercase font-weight-600 w-100 mb-0">Summary</h2>
                    <p class="text-9 text-white font-weight-600 position-absolute w-100 align-self-center line-height-4 mb-0">
                        Resume<span
                            class="heading-separator-line border-bottom border-3 border-primary position-abolute d-block mx-auto"></span>
                    </p>
                </div>
                <!-- Heading end-->

                <div class="row">
                    <!-- My Education -->
                    <div class="col-md-6">
                        <h2 class="text-6 text-white font-weight-600 mb-4">My Education</h2>
                        <div class="border border-dark rounded p-4 mb-4">
                            <h3 class="text-5 text-white">College</h3>
                            <p class="text-primary">Faculty of Commerce, Alexandria University</p>
                            <p class="text-white-50 mb-0">Studying at Faculty of Commerce in Alexandria University.</p>
                        </div>
                    </div>

                    <!-- My Experience -->
                    <div class="col-md-6">
                        <h2 class="text-6 text-white font-weight-600 mb-4">My Experience</h2>
                        <div class="border border-dark rounded p-4 mb-4">
                            <p class="badge badge-danger text-2 font-weight-400">Feb 2019 - Jan 2020</p>
                            <h3 class="text-5 text-white">Full-stack Developer</h3>
                            <p class="text-primary">Codux company - Alexandria, Egypt</p>
                        </div>
                        <div class="border border-dark rounded p-4 mb-4">
                            <p class="badge badge-danger text-2 font-weight-400">Jan 2020 - Sep 2020</p>
                            <h3 class="text-5 text-white">Full-stack Developer</h3>
                            <p class="text-primary">Scitecs - Alexandria, Egypt</p>
                        </div>
                        <div class="border border-dark rounded p-4 mb-4">
                            <p class="badge badge-danger text-2 font-weight-400">Aug 2020 - Feb 2021</p>
                            <h3 class="text-5 text-white">Back-end Instructor</h3>
                            <p class="text-primary">Fire Academy - Alexandria, Egypt</p>
                        </div>
                        <div class="border border-dark rounded p-4 mb-4">
                            <p class="badge badge-danger text-2 font-weight-400"></p>
                            <h3 class="text-5 text-white">PHP Developer (Outsourcing)</h3>
                            <p class="text-primary">NewsArea Middle East</p>
                        </div>
                        <div class="border border-dark rounded p-4 mb-4">
                            <p class="badge badge-danger text-2 font-weight-400">March 2021 - Jul 2021</p>
                            <h3 class="text-5 text-white">PHP Devloper (Freelancer)</h3>
                            <p class="text-primary">AQTAR Design Solutions</p>
                        </div>
                        <div class="border border-dark rounded p-4 mb-4">
                            <p class="badge badge-danger text-2 font-weight-400">Jan 2021 - Sep 2021</p>
                            <h3 class="text-5 text-white">Back-end Devloper</h3>
                            <p class="text-primary">ITGO Digital Solutions</p>
                        </div>
                    </div>
                </div>
                <!-- My Skills -->
                <h2 class="text-6 text-white font-weight-600 mt-4 mb-4">My Skills</h2>
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-light font-weight-500 text-left mb-2">UI/UX Designer <span class="float-right">50%</span>
                        </p>
                        <div class="progress progress-sm bg-dark-2 mb-4">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-light font-weight-500 text-left mb-2">HTML/CSS/Bootstrap <span
                                class="float-right">100%</span></p>
                        <div class="progress progress-sm bg-dark-2 mb-4">
                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-light font-weight-500 text-left mb-2">JavaScript & Vue.js<span
                                class="float-right">70%</span></p>
                        <div class="progress progress-sm bg-dark-2 mb-4">
                            <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="text-light font-weight-500 text-left mb-2">PHP<span class="float-right">95%</span></p>
                        <div class="progress progress-sm bg-dark-2 mb-4">
                            <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-light font-weight-500 text-left mb-2">Laravel <span
                                class="float-right">85%</span></p>
                        <div class="progress progress-sm bg-dark-2 mb-4">
                            <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-light font-weight-500 text-left mb-2">SQL <span class="float-right">90%</span>
                        </p>
                        <div class="progress progress-sm bg-dark-2 mb-4">
                            <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5"><a href="{{asset('Ahmed Mohamed Ibrahim.pdf')}}"
                                                 class="btn btn-outline-secondary rounded-pill shadow-none">Download CV
                        <span class="ml-1"><i class="fas fa-download"></i></span></a></div>
            </div>
        </section>
        <!-- Resume end -->

        <!-- Portfolio
        ============================================= -->
        <section id="portfolio" class="section bg-dark-2">
            <div class="container px-lg-5">
                <!-- Heading -->
                <div class="position-relative d-flex text-center mb-5">
                    <h2 class="text-24 text-muted opacity-1 text-uppercase font-weight-600 w-100 mb-0">Portfolio</h2>
                    <p class="text-9 text-white font-weight-600 position-absolute w-100 align-self-center line-height-4 mb-0">
                        Some Work<span
                            class="heading-separator-line border-bottom border-3 border-primary position-abolute d-block mx-auto"></span>
                    </p>
                </div>
                <!-- Heading end-->
                <div class="projects">
                    @foreach($projects as $project)
                        <div class="work">
                            <a href="work/{{ $project->id }}">
                                <img src="{{ asset('images/projects/' . $project->pic_one) }}"
                                     alt="{{ $project->title }}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <br><br><br><br>
            <a href="portfolio" style="display: block;text-align: center;">
                <button class="btn btn-primary rounded-pill">All projects</button>
            </a>
        </section>
        <!-- Portfolio end -->

        <!-- Contact Me
        ============================================= -->
        <section id="contact" class="section bg-dark-1">
            <div class="container px-lg-5">
                <!-- Heading -->
                <div class="position-relative d-flex text-center mb-5">
                    <h2 class="text-24 text-muted opacity-1 text-uppercase font-weight-600 w-100 mb-0">Contact</h2>
                    <p class="text-9 text-white font-weight-600 position-absolute w-100 align-self-center line-height-4 mb-0">
                        Get in Touch<span
                            class="heading-separator-line border-bottom border-3 border-primary position-abolute d-block mx-auto"></span>
                    </p>
                </div>
                <!-- Heading end-->
                <div class="row">
                    <div class="col-md-5 col-xl-4 order-1 order-md-1 text-center text-md-left mt-6 mt-md-1">
                        <h2 class="mb-3 text-5 text-white text-uppercase">Address</h2>
                        <p class="text-3 text-white-50 mb-4">Moharram Bey<br>
                            Alexandria Governorate.<br>
                            Egypt</p>
                        <p class="text-3 text-white-50 mb-1"><span class="text-primary text-4 mr-2"><i
                                    class="fas fa-phone"></i></span><a href="tel:+201275457924">(+20)1275457924</a></p>
                        <p class="text-3 text-white-50 mb-4"><span class="text-primary text-4 mr-2"><i
                                    class="fas fa-envelope"></i></span><a href="mailto:eng.ahmedmohamed.2002@gmail.com">eng.ahmedmohamed.2002@gmail.com</a>
                        </p>
                        <h2 class="mb-3 text-5 text-white text-uppercase">Follow Me</h2>
                        <ul class="social-icons social-icons-muted ml-md-n2 justify-content-center justify-content-md-start">
                            <li class="social-icons-dribbble"><a data-toggle="tooltip"
                                                                 href="https://www.facebook.com/Mr.AhmedMohammd"
                                                                 target="_blank" title=""
                                                                 data-original-title="Facebook"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li class="social-icons-linkedin"><a data-toggle="tooltip"
                                                                 href="https://linkedin.com/in/mr-ahmedmohamed/"
                                                                 target="_blank" title=""
                                                                 data-original-title="Linkedin"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                            <li class="social-icons-google"><a data-toggle="tooltip"
                                                               href="http://www.instagram.com/mr.ahmedmohammd"
                                                               target="_blank" title="" data-original-title="Instagram"><i
                                        class="fab fa-instagram"></i></a></li>
                            <li class="social-icons-github"><a data-toggle="tooltip" href="https://wa.me/+201275457924"
                                                               target="_blank" title=""
                                                               data-original-title="Whatsapp"><i
                                        class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-7 col-xl-8 order-0 order-md-0">
                        <h2 class="mb-3 text-5 text-white text-uppercase text-center text-md-left">Send a note</h2>
                        <form id="contact-form" class="form-dark" action="{{ route('sendmail') }}" method="post">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <input name="name" type="text" class="form-control" required placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" required
                                               placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" rows="5" required
                                          placeholder="Tell us more about you need"></textarea>
                            </div>
                            <p class="text-center mt-4 mb-0">
                                <button id="submit-btn" class="btn btn-primary rounded-pill d-inline-flex"
                                        type="submit">Send Message
                                </button>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </section>
        <!-- Contact Me end -->

    </div>
    <!-- Content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="section footer-text-light bg-dark-1">
        <div class="container px-lg-5">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <p class="mb-3 mb-lg-0">Copyright © 2021 <a href="#">Ahmed Mohamed Ibrahim</a>. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer end -->

</div>
<!-- Document Wrapper end -->

<!-- Back to Top
============================================= -->
<a id="back-to-top" class="rounded-circle" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i
        class="fa fa-chevron-up"></i></a>


@include('layout.scripts')
<script>
    // Sections Scroll
    if ($("body").hasClass("side-header")) {
        $('.smooth-scroll').on('click', function () {
            event.preventDefault();
            var sectionTo = $(this).attr('href');
            $('html, body').stop().animate({
                scrollTop: $(sectionTo).offset().top
            }, 1500, 'easeInOutExpo');
        });
    } else {
        $('.smooth-scroll').on('click', function () {
            event.preventDefault();
            var sectionTo = $(this).attr('href');
            $('html, body').stop().animate({
                scrollTop: $(sectionTo).offset().top - 50
            }, 1500, 'easeInOutExpo');
        });
    }

</script>
</body>
</html>
