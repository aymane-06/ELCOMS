@extends('layouts.app')
@section('content')
<section class="slider-section">
            <h2 class="hidden">title</h2>

            <div class="rev_slider_wrapper">
                <div id="rev_slider_1" class="rev_slider" style="display:none">
                    <ul>
                        <li data-transition="random" data-title="Slide Title" data-param1="Additional Text" data-thumb="{{ asset('assets/images/heroSection/hero1.jpeg') }}">
                            <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                            <img src="{{ asset('assets/images/heroSection/hero1.jpeg') }}" alt="Sky" class="rev-slidebg">
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4" 
                                data-x="left" data-hoffset="0" 
                                data-y="top" data-voffset="300" 
                                data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>Drive your projects with expertise
                            </div>
                            
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4" 
                                data-x="left" data-hoffset="0" 
                                data-y="top" data-voffset="360" 
                                data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>& performance
                            </div>
                            
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption font-medium sfb tp-resizeme letter-space-5" 
                                data-x="left" data-hoffset="0" 
                                data-y="center" data-voffset="90" 
                                data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>ELCOMS supports you in managing, optimizing and ensuring <br> the success of your projects in AMO, OPC, MOE and Project Management.
                            </div>
                            
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption sfr tp-resizeme letter-space-4" 
                                data-x="left" data-hoffset="0" 
                                data-y="center" data-voffset="180" 
                                data-frames='[{"delay":2200,"speed":2000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'><a href="#services" class="el-btn-regular slider-btn-left btn btn-primary">Discover our services</a> <a href="#about-Company" class="el-btn-regular btn btn-primary color-bg">Contact us</a>
                            </div>
                        </li>

                        <li data-transition="random" data-title="Slide Title" data-param1="Additional Text" data-thumb="{{ asset('assets/images/heroSection/hero2.jpeg') }}">
                            <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                            <img src="{{ asset('assets/images/heroSection/hero2.jpeg') }}" alt="Sky" class="rev-slidebg">
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4" 
                                data-x="center" data-hoffset="0" 
                                data-y="top" data-voffset="300" 
                                data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>Your strategic partner in project management
                            </div>
                            
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4" 
                                data-x="center" data-hoffset="0" 
                                data-y="top" data-voffset="360" 
                                data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>and construction supervision
                            </div>
                            
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption font-medium text-center sfb tp-resizeme letter-space-5" 
                                data-x="center" data-hoffset="0" 
                                data-y="center" data-voffset="90" 
                                data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>ELCOMS supports you in managing, optimizing and ensuring <br> the success of your projects in AMO, OPC, MOE and Project Management.
                            </div>
                            
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption lfb tp-resizeme" 
                                data-x="center" data-hoffset="0" 
                                data-y="center" data-voffset="180" 
                                data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'><a href="#services" class="el-btn-regular slider-btn-left btn btn-primary">Discover our services</a> <a href="#about-Company" class="el-btn-regular btn btn-primary color-bg">Contact us</a>
                            </div>
                        </li>
                        <li data-transition="random" data-title="Slide Title" data-param1="Additional Text" data-thumb="{{ asset('assets/images/heroSection/hero3.jpeg') }}">
                            <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                            <img src="{{ asset('assets/images/heroSection/hero3.jpeg') }}" alt="Sky" class="rev-slidebg">
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4" 
                                data-x="center" data-hoffset="0" 
                                data-y="top" data-voffset="300" 
                                data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>Drive your projects with expertise
                            </div>
                            
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4" 
                                data-x="center" data-hoffset="0" 
                                data-y="top" data-voffset="360" 
                                data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>& performance
                            </div>
                            
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption font-medium text-center sfb tp-resizeme letter-space-5" 
                                data-x="center" data-hoffset="0" 
                                data-y="center" data-voffset="90" 
                                data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>ELCOMS supports you in managing, optimizing and ensuring <br> the success of your projects in AMO, OPC, MOE and Project Management.
                            </div>
                            
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption lfb tp-resizeme" 
                                data-x="center" data-hoffset="0" 
                                data-y="center" data-voffset="180" 
                                data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'><a href="#services" class="el-btn-regular slider-btn-left btn btn-primary">Discover our services</a> <a href="#about-Company" class="el-btn-regular btn btn-primary color-bg">Contact us</a>
                            </div>
                        </li>
                        <li data-transition="random" data-title="Slide Title" data-param1="Additional Text" data-thumb="{{ asset('assets/images/heroSection/hero4.jpeg') }}">
                            <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                            <img src="{{ asset('assets/images/heroSection/hero4.jpeg') }}" alt="Sky" class="rev-slidebg">
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4" 
                                data-x="center" data-hoffset="0" 
                                data-y="top" data-voffset="300" 
                                data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>Your strategic partner in project management
                            </div>
                            
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4" 
                                data-x="center" data-hoffset="0" 
                                data-y="top" data-voffset="360" 
                                data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>and construction supervision
                            </div>
                            
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption font-medium text-center sfb tp-resizeme letter-space-5" 
                                data-x="center" data-hoffset="0" 
                                data-y="center" data-voffset="90" 
                                data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>ELCOMS supports you in managing, optimizing and ensuring <br> the success of your projects in AMO, OPC, MOE and Project Management.
                            </div>
                            
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption lfb tp-resizeme" 
                                data-x="center" data-hoffset="0" 
                                data-y="center" data-voffset="180" 
                                data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'><a href="#services" class="el-btn-regular slider-btn-left btn btn-primary">Discover our services</a> <a href="#about-Company" class="el-btn-regular btn btn-primary color-bg">Contact us</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>



        <section class="right-choice-section section-padding">
            <div class="container text-center">
            <div class="section-title">
                <h2>Why Choose ELCOMS</h2>
                <div class="border-3"></div>
                <p>We deliver excellence in project management through our expertise, <br> strategic approach, and commitment to client satisfaction.</p>
            </div> <!-- section-title -->

            <div class="row">
                <div class="col-sm-4">
                <div class="section-wrapper">
                    <div class="caption">
                    <img src="assets/images/choice/1.jpg" alt="">

                    <a href="#" class="hover-view">Read More</a>

                    <div class="hover">
                        <span class="hover-one"></span>
                        <span class="hover-two"></span>
                        <span class="hover-three"></span>
                        <span class="hover-four"></span>
                    </div>
                    </div>

                    <div class="content">
                    <img src="assets/images/icon/c1.png" alt="">
                    <h4>Project Management Expertise</h4>
                    <p>Our seasoned professionals bring extensive experience in complex project coordination and delivery</p>
                    </div>
                </div>
                </div>

                <div class="col-sm-4">
                <div class="section-wrapper">
                    <div class="caption">
                    <img src="assets/images/choice/2.jpg" alt="">

                    <a href="#" class="hover-view">Read More</a>

                    <div class="hover">
                        <span class="hover-one"></span>
                        <span class="hover-two"></span>
                        <span class="hover-three"></span>
                        <span class="hover-four"></span>
                    </div>
                    </div>

                    <div class="content">
                    <img src="assets/images/icon/c2.png" alt="">
                    <h4>Cost Optimization</h4>
                    <p>We implement strategic solutions to maximize resource efficiency and minimize project expenses</p>
                    </div>
                </div>
                </div>

                <div class="col-sm-4">
                <div class="section-wrapper">
                    <div class="caption">
                    <img src="assets/images/choice/3.jpg" alt="">

                    <a href="#" class="hover-view">Read More</a>

                    <div class="hover">
                        <span class="hover-one"></span>
                        <span class="hover-two"></span>
                        <span class="hover-three"></span>
                        <span class="hover-four"></span>
                    </div>
                    </div>

                    <div class="content">
                    <img src="assets/images/icon/c3.png" alt="">
                    <h4>Client-Centered Approach</h4>
                    <p>We develop customized solutions tailored to your specific project requirements and objectives</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section> <!-- right-choice-section -->



        <section class="counting-section section-padding">
            <div class="container">
                <h2 class="hidden">counting-title</h2>

                <div class="counting-pusher">
                    <div class="counting-wrapper">
                        <span class="icon pull-left"><img src="assets/images/counter/1.png" alt=""></span>

                        <div class="content">
                            <div class="count-description">
                                <span class="timer">25</span>
                            </div>
                            <p>Team Members</p>
                        </div>
                    </div>  

                    <div class="counting-wrapper">
                        <span class="icon pull-left"><img src="assets/images/counter/2.png" alt=""></span>

                        <div class="content">
                            <div class="count-description">
                                <span class="timer">20</span>
                            </div>
                            <p>Satisfied Clients</p>
                        </div>
                    </div>  

                    <div class="counting-wrapper">
                        <span class="icon pull-left"><img src="assets/images/counter/3.png" alt=""></span>

                        <div class="content">
                            <div class="count-description">
                                <span class="timer">5</span>
                            </div>
                            <p>Languages Support</p>
                        </div>
                    </div> 

                    <div class="counting-wrapper">
                        <span class="icon pull-left"><img src="assets/images/counter/4.png" alt=""></span>

                        <div class="content">
                            <div class="count-description">
                                <span class="timer">20</span>
                            </div>
                            <p>Successful Projects</p>
                        </div>
                    </div>  
                </div> 
            </div>
        </section> <!-- counting-section -->



        <section id="services" class="finance-service-section section-padding">
            <div class="container text-center">
            <div class="section-title">
                <h2>Our Services</h2>
                <div class="border-3"></div>
                <p>We provide comprehensive project management solutions tailored to your specific needs, <br> ensuring successful delivery from inception to completion.</p>
                <a href="service.html" class="link">All Services</a>
            </div> <!-- section-title -->

            <style>
                .finance-wrapper .wrapper-content {
                    min-height: 180px; /* Fixed height for all content boxes */
                }
                .finance-wrapper .wrapper-content p {
                    min-height: 110px; /* Fixed height for paragraphs to ensure alignment */
                    display: -webkit-box;
                    -webkit-line-clamp: 4;
                    -webkit-box-orient: vertical;
                    overflow: hidden;
                }
            </style>

            <div class="finance-carousel owl-carousel owl-theme">
                <div class="finance-wrapper item">
                <div class="icon"><img src="assets/images/icon/i1.png" alt=""></div>

                <div class="wrapper-content">
                    <h4><a href="#">MANAGEMENT</a></h4>
                    <p>Management of construction projects, including planning, monitoring deadlines and optimizing resources. Coordination of teams and communication with stakeholders to ensure successful project completion.</p>
                </div>

                <div class="hover">
                    <span class="hover-one"></span>
                    <span class="hover-two"></span>
                    <span class="hover-three"></span>
                    <span class="hover-four"></span>
                </div>
                </div>

                <div class="finance-wrapper item">
                <div class="icon"><img src="assets/images/icon/i2.png" alt=""></div>

                <div class="wrapper-content">
                    <h4><a href="#">SCHEDULING</a></h4>
                    <p>Development and monitoring of construction schedules, ensuring efficient allocation of resources and compliance with deadlines. Implementation of timeline management solutions for project success.</p>
                </div>

                <div class="hover">
                    <span class="hover-one"></span>
                    <span class="hover-two"></span>
                    <span class="hover-three"></span>
                    <span class="hover-four"></span>
                </div>
                </div>

                <div class="finance-wrapper item">
                <div class="icon"><img src="assets/images/icon/i3.png" alt=""></div>

                <div class="wrapper-content">
                    <h4><a href="#">QUALITY</a></h4>
                    <p>Quality assurance of project processes and deliverables, ensuring they meet established standards and specifications. Regular audits and checks to maintain high quality throughout the project lifecycle.</p>
                </div>

                <div class="hover">
                    <span class="hover-one"></span>
                    <span class="hover-two"></span>
                    <span class="hover-three"></span>
                    <span class="hover-four"></span>
                </div>
                </div>

                <div class="finance-wrapper item">
                <div class="icon"><img src="assets/images/icon/i4.png" alt=""></div>

                <div class="wrapper-content">
                    <h4><a href="#">CONSTRUCTION</a></h4>
                    <p>Supervision of construction activities to ensure compliance with plans, deadlines and safety standards. Coordination of on-site teams and management of subcontractor relationships for project efficiency.</p>
                </div>

                <div class="hover">
                    <span class="hover-one"></span>
                    <span class="hover-two"></span>
                    <span class="hover-three"></span>
                    <span class="hover-four"></span>
                </div>
                </div>

                <div class="finance-wrapper item">
                <div class="icon"><img src="assets/images/icon/i2.png" alt=""></div>

                <div class="wrapper-content">
                    <h4><a href="#">COST</a></h4>
                    <p>Development and monitoring of project budgets, ensuring cost optimization while respecting quality standards. Analysis of financial performance and implementation of strategies to maximize project value.</p>
                </div>

                <div class="hover">
                    <span class="hover-one"></span>
                    <span class="hover-two"></span>
                    <span class="hover-three"></span>
                    <span class="hover-four"></span>
                </div>
                </div>
            </div>
            </div>
        </section> <!-- finance-service-section -->



        <section id="about-Company" class="about-Company-Section section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <h2>About ELCOMS</h2>
                    <div class="border-3"></div>
                </div> <!-- section-title -->

                <div class="row">
                    <div class="col-md-7">
                        <div class="content-wrapper">
                            <h3>Your partner in project management <br> and optimization</h3>

                            <p>ELCOMS is a company specializing in Owner's Representative Services, Scheduling, Coordination and Control (OPC), Construction Management (MOE) and Project Management. We support owners and construction companies in managing and optimizing their projects with a strategic and operational approach.</p>

                            <ul class="content">
                                <li>
                                    <img src="assets/images/icon/a4.png" alt="">

                                    <div class="single-content">
                                        Expertise in construction project management
                                    </div>
                                </li>

                                <li>
                                    <img src="assets/images/icon/a5.png" alt="">

                                    <div class="single-content">
                                        Optimization of timelines and resources
                                    </div>
                                </li>

                                <li>
                                    <img src="assets/images/icon/a6.png" alt="">

                                    <div class="single-content">
                                        Tailored solutions adapted to your needs
                                    </div>
                                </li>
                            </ul>

                            <p>Our team of experts combines technical skills and strategic vision to ensure the success of your projects, from design to final delivery. We are committed to providing high-quality services that exceed your expectations.</p>
                            
                            <div class="link">
                                <a href="about.html" class="btn btn-primary">Learn more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="quote-section">
                            <h3>Request a free quote</h3>

                            <form class="contact-form">
                                <div class="form-group">
                                    <i class="fa fa-user" aria-hidden="true"></i>

                                    <input id="name" name="name" type="text" class="form-control" required="" placeholder="Name">
                                </div>

                                <div class="form-group">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>

                                    <input class="domainSearchBar form-control" id="email" name="email" type="email" required="" placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <i class="fa fa-phone" aria-hidden="true"></i>

                                    <input id="phone" name="phone" type="text" class="form-control" required="" placeholder="Phone">
                                </div>

                                <div class="form-group">
                                    <i class="fa fa-building" aria-hidden="true"></i>

                                    <input id="company" name="company" type="text" class="form-control" required="" placeholder="Company">
                                </div>

                                <div class="form-group">
                                    <i class="fa fa-comment-o" aria-hidden="true"></i>

                                    <textarea id="message" name="message" class="form-control form-message" rows="3" required="" placeholder="Message"></textarea>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- about-Company-Section -->



        <section id="projects" class="project-section section-padding">
            <div class="container text-center">
                <div class="section-title">
                    <h2>Our Projects</h2>
                    <div class="border-3"></div>
                    <p>Discover our portfolio of successful projects across different sectors, <br> showcasing our expertise in project management and delivery.</p>
                </div> <!-- section-title -->

                <style>
                    .project-wrapper {
                        height: 300px;
                        margin-bottom: 30px;
                        overflow: hidden;
                        position: relative;
                    }
                    .project-wrapper img {
                        width: 100%;
                        height: 300px;
                        object-fit: cover;
                        object-position: center;
                    }
                    .hover-view {
                        display: flex;
                        flex-direction: column;
                        justify-content: center;
                        align-items: center;
                        text-align: center;
                        padding: 15px;
                    }
                    .hover-view h4 {
                        margin-top: 0;
                        margin-bottom: 10px;
                    }
                </style>

                <div class="portfolio gallery-grid">
                    <!-- <ul class="portfolio-sorting gallery-button list-inline">
                        <li><a href="#" data-group="all" class="filter-btn active">All</a></li>
                        <li><a class="filter-btn" href="#" data-group="industrial">Industrial</a></li>
                        <li><a class="filter-btn" href="#" data-group="infrastructure">Infrastructure</a></li>
                        <li><a class="filter-btn" href="#" data-group="energy">Energy</a></li>
                        <li><a class="filter-btn" href="#" data-group="commercial">Commercial</a></li>
                    </ul>  -->

                    <div class="row">
                        <div class="gallery-wrapper">
                            <ul class="portfolio-items list-unstyled" id="grid">
                                <li class="col-sm-4" data-groups='["industrial"]'>
                                    <div class="project-wrapper">
                                        <img src="{{ asset('assets/images/project/storagehallsonP1andP3inJorfLASFER.jfif') }}" alt="">
                                        <div class="hover-view">
                                            <a href="#" class="pull-right"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            <h4>Di Ammonium Phosphate Storage</h4>
                                            <p>Jorf Lasfar, Morocco</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-sm-4" data-groups='["industrial"]'>
                                    <div class="project-wrapper">
                                        <img src="{{ asset('assets/images/project/IndustrialStorageFactory.jpg') }}" alt="">
                                        <div class="hover-view">
                                            <a href="#" class="pull-right"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            <h4>Industrial Storage Factory</h4>
                                            <p>Munich, Germany</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-sm-4" data-groups='["energy"]'>
                                    <div class="project-wrapper">
                                        <img src="{{ asset('assets/images/project/step.jpg') }}" alt="">
                                        <div class="hover-view">
                                            <a href="#" class="pull-right"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            <h4>STEP Energy Transfer Station</h4>
                                            <p>Argana/Agadir, Morocco</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-sm-4" data-groups='["industrial"]'>
                                    <div class="project-wrapper">
                                        <img src="{{ asset('assets/images/project/DAPProductionLines.jpg') }}" alt="">
                                        <div class="hover-view">
                                            <a href="#" class="pull-right"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            <h4>DAP Production Lines</h4>
                                            <p>OCP Jorf Lasfar</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-sm-4" data-groups='["energy"]'>
                                    <div class="project-wrapper">
                                        <img src="{{ asset('assets/images/project/ThermalPowerPlant.jpg') }}" alt="">
                                        <div class="hover-view">
                                            <a href="#" class="pull-right"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            <h4>Jlec 5&6 Thermal Power Plant</h4>
                                            <p>Jorf Lasfar, Morocco</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-sm-4" data-groups='["commercial"]'>
                                    <div class="project-wrapper">
                                        <img src="{{ asset('assets/images/project/MohammedVIPolytechnicUniversity.jpg') }}" alt="">
                                        <div class="hover-view">
                                            <a href="#" class="pull-right"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            <h4>Mohammed VI Polytechnic University</h4>
                                            <p>Budget: 10 Billion €</p>
                                        </div>
                                    </div>
                                </li>
                            </ul> 
                        </div> 
                    </div>
                </div>

                <div class="link text-center">
                    <a href="#" class="btn btn-primary">View All Projects</a>
                </div>
            </div> 
        </section> <!-- project-section -->



        <section class="testimonial-section section-padding">
            <div class="container text-center">
                <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="carousel-wrapper">
                                <p>" Ut enim ad minima veniam, quis nostrum exercitationem ullam cor poris suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure <br> reprehenderit qui. "</p>

                                <div class="reviewer">
                                    <h5>Jora'h El Mormont</h5>
                                    <span class="position">Mormont Inc.</span>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="carousel-wrapper">
                                <p>" Ut enim ad minima veniam, quis nostrum exercitationem ullam cor poris suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure <br> reprehenderit qui. "</p>

                                <div class="reviewer">
                                    <h5>Jora'h El Mormont</h5>
                                    <span class="position">Mormont Inc.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="left carousel-control" href="#testimonial-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>

                    <a class="right carousel-control" href="#testimonial-carousel" role="button" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </section> <!-- testimonial-section -->



        <section class="vision-section section-padding">
            <div class="container">
            <div class="section-title text-center">
                <h2>Our Vision</h2>
                <div class="border-3"></div>
                <p>Building the future through excellence in project management and sustainable construction practices</p>
            </div> <!-- section-title -->

            <div class="row">
                <div class="col-md-6 col-sm-6">
                <div class="vision-wrapper">
                    <div class="vision-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                    </svg>
                    </div>
                    <div class="vision-content">
                    <h4>Our Vision</h4>
                    <p>Our vision for the Construction Project Management Office is to be a leader in delivering innovative and sustainable construction solutions that exceed client expectations and drive industry excellence.</p>
                    </div>
                </div>
                </div>

                <div class="col-md-6 col-sm-6">
                <div class="vision-wrapper">
                    <div class="vision-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-bullseye" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10m0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12"/>
                        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6m0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8"/>
                        <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                    </svg>
                    </div>
                    <div class="vision-content">
                    <h4>Our Goals</h4>
                    <p>Our goals for the Construction Project Management Office are to enhance project efficiency, foster collaboration, ensure stakeholder satisfaction, and promote sustainable practices in every construction endeavor.</p>
                    </div>
                </div>
                </div>

                <div class="col-md-6 col-sm-6">
                <div class="vision-wrapper">
                    <div class="vision-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-rocket" viewBox="0 0 16 16">
                        <path d="M8 8c.828 0 1.5-.895 1.5-2S8.828 4 8 4s-1.5.895-1.5 2 .672 2 1.5 2Z"/>
                        <path d="M11.953 8.81c-.195-3.388-.968-5.507-1.777-6.819C9.707 1.233 9.23.751 8.857.454a3.495 3.495 0 0 0-.463-.315A2.19 2.19 0 0 0 8.25.064.546.546 0 0 0 8 0a.549.549 0 0 0-.266.073 2.312 2.312 0 0 0-.142.08 3.67 3.67 0 0 0-.459.33c-.37.308-.844.803-1.31 1.57-.805 1.322-1.577 3.433-1.774 6.756l-1.497 1.826-.004.005A2.5 2.5 0 0 0 2 12.202V15.5a.5.5 0 0 0 .9.3l1.125-1.5c.166-.222.42-.4.752-.57.214-.108.414-.192.625-.281l.198-.084c.7.428 1.55.635 2.4.635.85 0 1.7-.207 2.4-.635.067.03.132.056.196.083.213.09.413.174.627.282.332.17.586.348.752.57l1.125 1.5a.5.5 0 0 0 .9-.3v-3.298a2.5 2.5 0 0 0-.548-1.562l-1.499-1.83ZM12 10.445v.055c0 .866-.284 1.585-.75 2.14.146.064.292.13.425.199.39.207.896.56 1.325 1.011.281.293.506.646.66 1.045.154.399.23.843.23 1.305v1.642L12 15.8V10.445Zm-8 0v5.354l-1.89 2.52V14.8c0-.462.077-.906.23-1.305.154-.399.38-.752.66-1.045.429-.45.935-.804 1.325-1.01a6.985 6.985 0 0 1 .425-.2c-.466-.555-.75-1.274-.75-2.14v-.055ZM6.029 2.816c.28-.466.652-.894 1.11-1.237a8.522 8.522 0 0 1 .86-.55 8.172 8.172 0 0 1 .86.55c.458.344.83.771 1.11 1.237.704 1.167 1.288 2.95 1.471 5.576l-5.882.001c.183-2.626.767-4.409 1.471-5.577Z"/>
                    </svg>
                    </div>
                    <div class="vision-content">
                    <h4>Our Mission</h4>
                    <p>Our mission for the Construction Project Management Office is to effectively manage and coordinate projects, ensuring timely delivery, budget adherence, and high-quality outcomes.</p>
                    </div>
                </div>
                </div>

                <div class="col-md-6 col-sm-6">
                <div class="vision-wrapper">
                    <div class="vision-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-gem" viewBox="0 0 16 16">
                        <path d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6zm11.386 3.785-1.806-2.41-.776 2.413zm-3.633.004.961-2.989H4.186l.963 2.995zM5.47 5.495 8 13.366l2.532-7.876zm-1.371-.999-.78-2.422-1.818 2.425zM1.499 5.5l5.113 6.817-2.192-6.82zm7.889 6.817 5.123-6.83-2.928.002z"/>
                    </svg>
                    </div>
                    <div class="vision-content">
                    <h4>Our Values</h4>
                    <p>Our values in the Construction Project Management Office are integrity, collaboration, innovation, sustainability, and excellence in service delivery.</p>
                    </div>
                </div>
                </div>
            </div>

            <div class="vision-summary text-center mt-4">
                <p class="lead">Our mission is to manage construction projects efficiently, our vision is to lead in innovative solutions, our goals focus on enhancing collaboration and sustainability, and our values emphasize integrity and excellence.</p>
                <div class="link mt-4">
                <a href="#" class="btn btn-primary">Learn More About Us</a>
                </div>
            </div>
            </div>
        </section> <!-- vision-section -->



        <section class="signup-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7">
                        <div class="contact-wrapper">
                            <h3>Signup for free <span>newsletter</span> and <span>business tips</span></h3>

                            <form class="signupForm">
                                <div class="form-wrapper">
                                    <input class="searchBar" required="" placeholder="email address...">

                                    <button type="submit" class="subscribeBtn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-5 hidden-xs">
                        <div class="caption text-right wow slideInRight">
                            <img src="assets/images/girl.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="multi-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="faq-content">
                            <h2>Frequently Asked Question</h2>

                            <div id="accordion" class="accordion-content">
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <div>
                                    <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                </div>

                                <h3>Dolor sit amet, consectetuer adipiscing elit</h3>
                                <div>
                                    <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                </div>

                                <h3>Sed diam nonummy nibh euismod</h3>
                                <div>
                                    <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div> <!-- research-content -->
                    </div>

                    <div class="col-md-6">
                        <div class="client-section">
                            <h3>Our Clients</h3>

                            <div class="client-logo-carousel">
                                <div class="flex-carousel-container">
                                    <?php
                                    $partners = [
                                        asset('assets/images/partner/AUTOROUTESDUMAROC.png') => 'Autoroutes du Maroc',
                                        asset('assets/images/partner/BURHAN.png') => 'Burhan',
                                        asset('assets/images/partner/DAEWOOEC.png') => 'Daewoo E&C',
                                        asset('assets/images/partner/FAIRMONT.jpg') => 'Fairmont',
                                        asset('assets/images/partner/JLEC.png') => 'JLEC',
                                        asset('assets/images/partner/OCP.png') => 'OCP',
                                        asset('assets/images/partner/ONCF.png') => 'ONCF',
                                        asset('assets/images/partner/ROYALMANSOUR.jpg') => 'Royal Mansour',
                                        asset('assets/images/partner/SOGEA.png') => 'Sogea',
                                        asset('assets/images/partner/STELLANTIS.png') => 'Stellantis',
                                        asset('assets/images/partner/TAQA.png') => 'Taqa',
                                        asset('assets/images/partner/TEKFEN.png') => 'Tekfen',
                                        asset('assets/images/partner/UM6P.png') => 'UM6P',
                                        asset('assets/images/partner/VINCI.png') => 'Vinci',
                                        asset('assets/images/partner/WIEMERTRACHTE.png') => 'Wiemer Trachte'
                                    ];
                                    ?>
                                    
                                    <div class="flex-logos-track">
                                        <?php foreach($partners as $image => $name): ?>
                                            <div class="flex-logo-item">
                                                <img src="{{ $image }}" alt="<?= $name ?>">
                                            </div>
                                        <?php endforeach; ?>
                                        
                                        <?php foreach($partners as $image => $name): ?>
                                            <div class="flex-logo-item">
                                                <img src="{{ $image }}" alt="<?= $name ?>">
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>

                            <style>
                                .client-logo-carousel {
                                    width: 100%;
                                    overflow: hidden;
                                    position: relative;
                                }
                                
                                .flex-carousel-container {
                                    width: 100%;
                                    overflow: hidden;
                                    position: relative;
                                    margin: 20px 0;
                                }
                                
                                .flex-logos-track {
                                    display: flex;
                                    animation: scrollX 30s linear infinite;
                                    width: fit-content;
                                }
                                
                                .flex-logo-item {
                                    flex: 0 0 auto;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    margin: 0 20px;
                                }
                                
                                .flex-logo-item img {
                                    max-height: 50px;
                                    width: auto;
                                    object-fit: contain;
                                }
                                
                                @keyframes scrollX {
                                    0% { transform: translateX(0); }
                                    100% { transform: translateX(-50%); }
                                }
                                
                                /* Add gradient fade effect on the sides */
                                .flex-carousel-container::before,
                                .flex-carousel-container::after {
                                    content: "";
                                    position: absolute;
                                    top: 0;
                                    width: 100px;
                                    height: 100%;
                                    z-index: 2;
                                }
                                
                                .flex-carousel-container::before {
                                    left: 0;
                                    background: linear-gradient(to right, white, transparent);
                                }
                                
                                .flex-carousel-container::after {
                                    right: 0;
                                    background: linear-gradient(to left, white, transparent);
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- multi-section -->

@endsection