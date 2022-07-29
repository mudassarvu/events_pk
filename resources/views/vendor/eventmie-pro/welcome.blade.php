@extends('eventmie::layouts.app')

@section('title') @lang('eventmie-pro::em.home') @endsection

@section('content')



<!--Banner slider start-->

<section>
    <div class="lgx-slider welcome-slider">
        <div class="lgx-banner-style">
            <div class="lgx-inner">
                <div id="lgx-main-slider" class="owl-carousel lgx-slider-navbottom">
                    <!--Vue slider-->
                    @guest
                    <banner-slider :banners="{{ json_encode($banners, JSON_HEX_APOS) }}" :is_logged="{{ 0 }}"
                        :is_customer="{{ 0 }}" :is_organiser="{{ 0 }}" :is_admin="{{ 0 }}"
                        :is_multi_vendor="{{ setting('multi-vendor.multi_vendor') ? 1 : 0 }}"
                        :demo_mode="{{ config('voyager.demo_mode') }}"
                        :check_session="{{ json_encode(session('verify'), JSON_HEX_TAG) }}"
                        :s_host="{{ json_encode($_SERVER['REMOTE_ADDR'], JSON_HEX_TAG) }}"></banner-slider>
                    @else
                    <banner-slider :banners="{{ json_encode($banners, JSON_HEX_APOS) }}" :is_logged="{{ 1 }}"
                        :is_customer="{{ Auth::user()->hasRole('customer') ? 1 : 0 }}"
                        :is_organiser="{{ Auth::user()->hasRole('organiser') ? 1 : 0 }}"
                        :is_admin="{{ Auth::user()->hasRole('admin') ? 1 : 0 }}"
                        :is_multi_vendor="{{ setting('multi-vendor.multi_vendor') ? 1 : 0 }}"
                        :demo_mode="{{ config('voyager.demo_mode') }}"
                        :check_session="{{ json_encode(session('verify'), JSON_HEX_TAG) }}"
                        :s_host="{{ json_encode($_SERVER['REMOTE_ADDR'], JSON_HEX_TAG) }}"></banner-slider>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</section>
<!--Banner slider end-->




<!--  Browse by Category start-->

<section>
    <div class="container-fluid bg-white browse-category">
        <div class="container">
            <h3 class="heading-style">Browse by Category</h3>
            <div class="bc-items-wrapper">
                <div>
                    <div class="card bc-card">
                        <div class="bc-avatar">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="bc-card-text">
                            <h3 class="c-heading">Education & Training</h3>
                            <p class="c-text">20455 Events</p>
                        </div>
                    </div> 
                </div>
                <div>
                    <div class="card bc-card">
                        <div class="bc-avatar">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="bc-card-text">
                            <h3 class="c-heading">Education & Training</h3>
                            <p class="c-text">20455 Events</p>
                        </div>
                    </div> 
                </div>
                <div>
                    <div class="card bc-card">
                        <div class="bc-avatar">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="bc-card-text">
                            <h3 class="c-heading">Education & Training</h3>
                            <p class="c-text">20455 Events</p>
                        </div>
                    </div> 
                </div>
                <div>
                    <div class="card bc-card">
                        <div class="bc-avatar">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="bc-card-text">
                            <h3 class="c-heading">Education & Training</h3>
                            <p class="c-text">20455 Events</p>
                        </div>
                    </div> 
                </div>
                <div>
                    <div class="card bc-card">
                        <div class="bc-avatar">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="bc-card-text">
                            <h3 class="c-heading">Education & Training</h3>
                            <p class="c-text">20455 Events</p>
                        </div>
                    </div> 
                </div>
                <div>
                    <div class="card bc-card">
                        <div class="bc-avatar">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="bc-card-text">
                            <h3 class="c-heading">Education & Training</h3>
                            <p class="c-text">20455 Events</p>
                        </div>
                    </div> 
                </div>
                <div>
                    <div class="card bc-card">
                        <div class="bc-avatar">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="bc-card-text">
                            <h3 class="c-heading">Education & Training</h3>
                            <p class="c-text">20455 Events</p>
                        </div>
                    </div> 
                </div>
                <div>
                    <div class="card bc-card">
                        <div class="bc-avatar">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="bc-card-text">
                            <h3 class="c-heading">Education & Training</h3>
                            <p class="c-text">20455 Events</p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Browse by Category end-->





<!--  Featured Events start-->

<section>
    <div class="container-fluid bg-white featured-events">
        <div class="container">
            <h3 class="heading-style">Featured Events <span class="small">handpicked popular events</span></h3>
            <div class="featured-events-slider">
                <div class="featured-events-item">
                    <div class="fe-items-wrapper">
                        <div class="fe-card-wrapper"> 
                            <div class="fe-card-image-wrapper">
                                <div class="bc-card-text">
                                    <div class="bc-date">
                                        <p class="event-date">Fri, 29 - Sun, 31 Jul 2022</p>
                                        <a class="bc-category" href="#">Science &amp; Research</a>
                                    </div>
                                    <h3 class="c-heading">Waste Conversion Technology Conference And Trade Show</h3>
                                    <p class="event-location">Bangkok, Thailand • Online</p>
                                </div>
                                <div class="bc-avatar">
                                    <img
                                        src="https://img.10times.com/images/event/720548/eventlogo-70-1650700114.jpg?imgeng=/w_120/h_120/m_stretch/cmpr_60">
                                </div>
                            </div>
                        </div>

                        <div class="fe-card-wrapper">
                            <div class="fe-card-image-wrapper">
                                <div class="bc-card-text">
                                    <div class="bc-date">
                                        <p class="event-date">Fri, 29 - Sun, 31 Jul 2022</p>
                                        <a class="bc-category" href="#">Science &amp; Research</a>
                                    </div>
                                    <h3 class="c-heading">Waste Conversion Technology Conference And Trade Show</h3>
                                    <p class="event-location">Bangkok, Thailand • Online</p>
                                </div>
                                <div class="bc-avatar">
                                    <img
                                        src="https://img.10times.com/images/event/720548/eventlogo-70-1650700114.jpg?imgeng=/w_120/h_120/m_stretch/cmpr_60">
                                </div>
                            </div>
                        </div>

                        <div class="fe-card-wrapper">
                            <div class="fe-card-image-wrapper">
                                <div class="bc-card-text">
                                    <div class="bc-date">
                                        <p class="event-date">Fri, 29 - Sun, 31 Jul 2022</p>
                                        <a class="bc-category" href="#">Science &amp; Research</a>
                                    </div>
                                    <h3 class="c-heading">Waste Conversion Technology Conference And Trade Show</h3>
                                    <p class="event-location">Bangkok, Thailand • Online</p>
                                </div>
                                <div class="bc-avatar">
                                    <img
                                        src="https://img.10times.com/images/event/720548/eventlogo-70-1650700114.jpg?imgeng=/w_120/h_120/m_stretch/cmpr_60">
                                </div>
                            </div>
                        </div>

                        <div class="fe-card-wrapper">
                            <div class="fe-card-image-wrapper">
                                <div class="bc-card-text">
                                    <div class="bc-date">
                                        <p class="event-date">Fri, 29 - Sun, 31 Jul 2022</p>
                                        <a class="bc-category" href="#">Science &amp; Research</a>
                                    </div>
                                    <h3 class="c-heading">Waste Conversion Technology Conference And Trade Show</h3>
                                    <p class="event-location">Bangkok, Thailand • Online</p>
                                </div>
                                <div class="bc-avatar">
                                    <img
                                        src="https://img.10times.com/images/event/720548/eventlogo-70-1650700114.jpg?imgeng=/w_120/h_120/m_stretch/cmpr_60">
                                </div>
                            </div>
                        </div>

                        <div class="fe-card-wrapper">
                            <div class="fe-card-image-wrapper">
                                <div class="bc-card-text">
                                    <div class="bc-date">
                                        <p class="event-date">Fri, 29 - Sun, 31 Jul 2022</p>
                                        <a class="bc-category" href="#">Science &amp; Research</a>
                                    </div>
                                    <h3 class="c-heading">Waste Conversion Technology Conference And Trade Show</h3>
                                    <p class="event-location">Bangkok, Thailand • Online</p>
                                </div>
                                <div class="bc-avatar">
                                    <img
                                        src="https://img.10times.com/images/event/720548/eventlogo-70-1650700114.jpg?imgeng=/w_120/h_120/m_stretch/cmpr_60">
                                </div>
                            </div>
                        </div>

                        <div class="fe-card-wrapper">
                            <div class="fe-card-image-wrapper">
                                <div class="bc-card-text">
                                    <div class="bc-date">
                                        <p class="event-date">Fri, 29 - Sun, 31 Jul 2022</p>
                                        <a class="bc-category" href="#">Science &amp; Research</a>
                                    </div>
                                    <h3 class="c-heading">Waste Conversion Technology Conference And Trade Show</h3>
                                    <p class="event-location">Bangkok, Thailand • Online</p>
                                </div>
                                <div class="bc-avatar">
                                    <img
                                        src="https://img.10times.com/images/event/720548/eventlogo-70-1650700114.jpg?imgeng=/w_120/h_120/m_stretch/cmpr_60">
                                </div>
                            </div>
                        </div>

                        <div class="fe-card-wrapper">
                            <div class="fe-card-image-wrapper">
                                <div class="bc-card-text">
                                    <div class="bc-date">
                                        <p class="event-date">Fri, 29 - Sun, 31 Jul 2022</p>
                                        <a class="bc-category" href="#">Science &amp; Research</a>
                                    </div>
                                    <h3 class="c-heading">Waste Conversion Technology Conference And Trade Show</h3>
                                    <p class="event-location">Bangkok, Thailand • Online</p>
                                </div>
                                <div class="bc-avatar">
                                    <img
                                        src="https://img.10times.com/images/event/720548/eventlogo-70-1650700114.jpg?imgeng=/w_120/h_120/m_stretch/cmpr_60">
                                </div>
                            </div>
                        </div>

                        <div class="fe-card-wrapper">
                            <div class="fe-card-image-wrapper">
                                <div class="bc-card-text">
                                    <div class="bc-date">
                                        <p class="event-date">Fri, 29 - Sun, 31 Jul 2022</p>
                                        <a class="bc-category" href="#">Science &amp; Research</a>
                                    </div>
                                    <h3 class="c-heading">Waste Conversion Technology Conference And Trade Show</h3>
                                    <p class="event-location">Bangkok, Thailand • Online</p>
                                </div>
                                <div class="bc-avatar">
                                    <img
                                        src="https://img.10times.com/images/event/720548/eventlogo-70-1650700114.jpg?imgeng=/w_120/h_120/m_stretch/cmpr_60">
                                </div>
                            </div>
                        </div>

                        <div class="fe-card-wrapper">
                            <div class="fe-card-image-wrapper">
                                <div class="bc-card-text">
                                    <div class="bc-date">
                                        <p class="event-date">Fri, 29 - Sun, 31 Jul 2022</p>
                                        <a class="bc-category" href="#">Science &amp; Research</a>
                                    </div>
                                    <h3 class="c-heading">Waste Conversion Technology Conference And Trade Show</h3>
                                    <p class="event-location">Bangkok, Thailand • Online</p>
                                </div>
                                <div class="bc-avatar">
                                    <img
                                        src="https://img.10times.com/images/event/720548/eventlogo-70-1650700114.jpg?imgeng=/w_120/h_120/m_stretch/cmpr_60">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="featured-events-item">
                    <div class="fe-items-wrapper">
                        <div class="fe-card-wrapper"> 
                            <div class="fe-card-image-wrapper">
                                <div class="bc-card-text">
                                    <div class="bc-date">
                                        <p class="event-date">Fri, 29 - Sun, 31 Jul 2022</p>
                                        <a class="bc-category" href="#">Science &amp; Research</a>
                                    </div>
                                    <h3 class="c-heading">Waste Conversion Technology Conference And Trade Show</h3>
                                    <p class="event-location">Bangkok, Thailand • Online</p>
                                </div>
                                <div class="bc-avatar">
                                    <img
                                        src="https://img.10times.com/images/event/720548/eventlogo-70-1650700114.jpg?imgeng=/w_120/h_120/m_stretch/cmpr_60">
                                </div>
                            </div>
                        </div>

                        <div class="fe-card-wrapper">
                            <div class="fe-card-image-wrapper">
                                <div class="bc-card-text">
                                    <div class="bc-date">
                                        <p class="event-date">Fri, 29 - Sun, 31 Jul 2022</p>
                                        <a class="bc-category" href="#">Science &amp; Research</a>
                                    </div>
                                    <h3 class="c-heading">Waste Conversion Technology Conference And Trade Show</h3>
                                    <p class="event-location">Bangkok, Thailand • Online</p>
                                </div>
                                <div class="bc-avatar">
                                    <img
                                        src="https://img.10times.com/images/event/720548/eventlogo-70-1650700114.jpg?imgeng=/w_120/h_120/m_stretch/cmpr_60">
                                </div>
                            </div>
                        </div>

                        <div class="fe-card-wrapper">
                            <div class="fe-card-image-wrapper">
                                <div class="bc-card-text">
                                    <div class="bc-date">
                                        <p class="event-date">Fri, 29 - Sun, 31 Jul 2022</p>
                                        <a class="bc-category" href="#">Science &amp; Research</a>
                                    </div>
                                    <h3 class="c-heading">Waste Conversion Technology Conference And Trade Show</h3>
                                    <p class="event-location">Bangkok, Thailand • Online</p>
                                </div>
                                <div class="bc-avatar">
                                    <img
                                        src="https://img.10times.com/images/event/720548/eventlogo-70-1650700114.jpg?imgeng=/w_120/h_120/m_stretch/cmpr_60">
                                </div>
                            </div>
                        </div>

                        <div class="fe-card-wrapper">
                            <div class="fe-card-image-wrapper">
                                <div class="bc-card-text">
                                    <div class="bc-date">
                                        <p class="event-date">Fri, 29 - Sun, 31 Jul 2022</p>
                                        <a class="bc-category" href="#">Science &amp; Research</a>
                                    </div>
                                    <h3 class="c-heading">Waste Conversion Technology Conference And Trade Show</h3>
                                    <p class="event-location">Bangkok, Thailand • Online</p>
                                </div>
                                <div class="bc-avatar">
                                    <img
                                        src="https://img.10times.com/images/event/720548/eventlogo-70-1650700114.jpg?imgeng=/w_120/h_120/m_stretch/cmpr_60">
                                </div>
                            </div>
                        </div>

                        <div class="fe-card-wrapper">
                            <div class="fe-card-image-wrapper">
                                <div class="bc-card-text">
                                    <div class="bc-date">
                                        <p class="event-date">Fri, 29 - Sun, 31 Jul 2022</p>
                                        <a class="bc-category" href="#">Science &amp; Research</a>
                                    </div>
                                    <h3 class="c-heading">Waste Conversion Technology Conference And Trade Show</h3>
                                    <p class="event-location">Bangkok, Thailand • Online</p>
                                </div>
                                <div class="bc-avatar">
                                    <img
                                        src="https://img.10times.com/images/event/720548/eventlogo-70-1650700114.jpg?imgeng=/w_120/h_120/m_stretch/cmpr_60">
                                </div>
                            </div>
                        </div>

                        <div class="fe-card-wrapper">
                            <div class="fe-card-image-wrapper">
                                <div class="bc-card-text">
                                    <div class="bc-date">
                                        <p class="event-date">Fri, 29 - Sun, 31 Jul 2022</p>
                                        <a class="bc-category" href="#">Science &amp; Research</a>
                                    </div>
                                    <h3 class="c-heading">Waste Conversion Technology Conference And Trade Show</h3>
                                    <p class="event-location">Bangkok, Thailand • Online</p>
                                </div>
                                <div class="bc-avatar">
                                    <img
                                        src="https://img.10times.com/images/event/720548/eventlogo-70-1650700114.jpg?imgeng=/w_120/h_120/m_stretch/cmpr_60">
                                </div>
                            </div>
                        </div>

                        <div class="fe-card-wrapper">
                            <div class="fe-card-image-wrapper">
                                <div class="bc-card-text">
                                    <div class="bc-date">
                                        <p class="event-date">Fri, 29 - Sun, 31 Jul 2022</p>
                                        <a class="bc-category" href="#">Science &amp; Research</a>
                                    </div>
                                    <h3 class="c-heading">Waste Conversion Technology Conference And Trade Show</h3>
                                    <p class="event-location">Bangkok, Thailand • Online</p>
                                </div>
                                <div class="bc-avatar">
                                    <img
                                        src="https://img.10times.com/images/event/720548/eventlogo-70-1650700114.jpg?imgeng=/w_120/h_120/m_stretch/cmpr_60">
                                </div>
                            </div>
                        </div>

                        <div class="fe-card-wrapper">
                            <div class="fe-card-image-wrapper">
                                <div class="bc-card-text">
                                    <div class="bc-date">
                                        <p class="event-date">Fri, 29 - Sun, 31 Jul 2022</p>
                                        <a class="bc-category" href="#">Science &amp; Research</a>
                                    </div>
                                    <h3 class="c-heading">Waste Conversion Technology Conference And Trade Show</h3>
                                    <p class="event-location">Bangkok, Thailand • Online</p>
                                </div>
                                <div class="bc-avatar">
                                    <img
                                        src="https://img.10times.com/images/event/720548/eventlogo-70-1650700114.jpg?imgeng=/w_120/h_120/m_stretch/cmpr_60">
                                </div>
                            </div>
                        </div>

                        <div class="fe-card-wrapper">
                            <div class="fe-card-image-wrapper">
                                <div class="bc-card-text">
                                    <div class="bc-date">
                                        <p class="event-date">Fri, 29 - Sun, 31 Jul 2022</p>
                                        <a class="bc-category" href="#">Science &amp; Research</a>
                                    </div>
                                    <h3 class="c-heading">Waste Conversion Technology Conference And Trade Show</h3>
                                    <p class="event-location">Bangkok, Thailand • Online</p>
                                </div>
                                <div class="bc-avatar">
                                    <img
                                        src="https://img.10times.com/images/event/720548/eventlogo-70-1650700114.jpg?imgeng=/w_120/h_120/m_stretch/cmpr_60">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Featured Events end-->




<!--  Live Webinars start -->

<section class="live-webinars-section container-fluid">
    <div class="container">
        <h3 class="heading-style">Live Webinars <i class="fas fa-satellite-dish"></i></h3>
        <div class="live-webinars-card-wrapper">
            <div class="card lw-card-style">
                <div class="img-wrapper">
                    <img src="https://eventmie-pro.classiebit.com/storage/events/September2019/1568624835yrp78wkI5y.jpg"
                        class="card-img" alt="">
                    <span class="lw-name">Mentor Health</span>
                    <span class="live-badge">live</span>
                    <span class="lw-bookmark-btn"><i class="fa fa-bookmark"></i></span>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Sat, 23 - Sun, 24 Jul 2022 • 06:30 AM</h5>
                    <p class="card-text">Education & Training</p>
                    <a href="#" class="stretched-link title-full-link">Business Writing and Grammar Skills Made Easy and Fun</a>
                </div>
            </div>

            <div class="card lw-card-style">
                <div class="img-wrapper">
                    <img src="https://eventmie-pro.classiebit.com/storage/events/September2019/1568624835yrp78wkI5y.jpg"
                        class="card-img" alt="">
                    <span class="lw-name">Mentor Health</span>
                    <span class="live-badge">live</span>
                    <span class="lw-bookmark-btn"><i class="fa fa-bookmark"></i></span>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Sat, 23 - Sun, 24 Jul 2022 • 06:30 AM</h5>
                    <p class="card-text">Education & Training</p>
                    <a href="#" class="stretched-link title-full-link">Business Writing and Grammar Skills Made Easy and Fun</a>
                </div>
            </div>

            <div class="card lw-card-style">
                <div class="img-wrapper">
                    <img src="https://eventmie-pro.classiebit.com/storage/events/September2019/1568624835yrp78wkI5y.jpg"
                        class="card-img" alt="">
                    <span class="lw-name">Mentor Health</span>
                    <span class="live-badge">live</span>
                    <span class="lw-bookmark-btn"><i class="fa fa-bookmark"></i></span>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Sat, 23 - Sun, 24 Jul 2022 • 06:30 AM</h5>
                    <p class="card-text">Education & Training</p>
                    <a href="#" class="stretched-link title-full-link">Business Writing and Grammar Skills Made Easy and Fun</a>
                </div>
            </div>
        </div>
        <a id="live-btn" class="btn lw-view-all-btn" href="https://10times.com/online">View All</a>
    </div>
</section>

<!-- Live Webinars end-->




<!-- Browse Events by City start -->


<section class="events-by-city">
    <div class="container">
        <h3 class="heading-style">Browse Events by City</h3>
        <div class="events-by-city-card-wrapper">
            <div class="card ebc-card-style">
                <h5 class="city-name">London</h5>
                <img class="city-logo" src="https://img.10times.com/img/cities/81795.jpg?imgeng=/w_35/h_35/cmpr_80" alt="">
                <p class="city-events-number">2103 Events</p>
            </div>
            <div class="card ebc-card-style">
                <h5 class="city-name">London</h5>
                <img class="city-logo" src="https://img.10times.com/img/cities/81795.jpg?imgeng=/w_35/h_35/cmpr_80" alt="">
                <p class="city-events-number">2103 Events</p>
            </div>
            <div class="card ebc-card-style">
                <h5 class="city-name">London</h5>
                <img class="city-logo" src="https://img.10times.com/img/cities/81795.jpg?imgeng=/w_35/h_35/cmpr_80" alt="">
                <p class="city-events-number">2103 Events</p>
            </div>
            <div class="card ebc-card-style">
                <h5 class="city-name">London</h5>
                <img class="city-logo" src="https://img.10times.com/img/cities/81795.jpg?imgeng=/w_35/h_35/cmpr_80" alt="">
                <p class="city-events-number">2103 Events</p>
            </div>
            <div class="card ebc-card-style">
                <h5 class="city-name">London</h5>
                <img class="city-logo" src="https://img.10times.com/img/cities/81795.jpg?imgeng=/w_35/h_35/cmpr_80" alt="">
                <p class="city-events-number">2103 Events</p>
            </div>
            <div class="card ebc-card-style">
                <h5 class="city-name">London</h5>
                <img class="city-logo" src="https://img.10times.com/img/cities/81795.jpg?imgeng=/w_35/h_35/cmpr_80" alt="">
                <p class="city-events-number">2103 Events</p>
            </div>
        </div>
    </div>
</section>

<!-- Browse Events by City end -->



<!-- Explore Venues start -->

<section class="explore-venues-section">
    <div class="container">
        <h3 class="heading-style">Explore Venues</h3>
        <div class="explore-venues-card-wrapper">
            <a href="#" class="ev-card-style">
                <div class="card"> 
                    <h5 class="events-title">Tokyo Big Sight</h5>
                    <p class="location">Koto • Japan</p>
                    <p class="total-events">1030 Total Events • 612 Upcoming Events</p>
                </div>
            </a>
            <a href="#" class="ev-card-style">
                <div class="card"> 
                    <h5 class="events-title">Tokyo Big Sight</h5>
                    <p class="location">Koto • Japan</p>
                    <p class="total-events">1030 Total Events • 612 Upcoming Events</p>
                </div>
            </a>
            <a href="#" class="ev-card-style">
                <div class="card"> 
                    <h5 class="events-title">Tokyo Big Sight</h5>
                    <p class="location">Koto • Japan</p>
                    <p class="total-events">1030 Total Events • 612 Upcoming Events</p>
                </div>
            </a>
            <a href="#" class="ev-card-style">
                <div class="card"> 
                    <h5 class="events-title">Tokyo Big Sight</h5>
                    <p class="location">Koto • Japan</p>
                    <p class="total-events">1030 Total Events • 612 Upcoming Events</p>
                </div>
            </a>
            <a href="#" class="ev-card-style">
                <div class="card"> 
                    <h5 class="events-title">Tokyo Big Sight</h5>
                    <p class="location">Koto • Japan</p>
                    <p class="total-events">1030 Total Events • 612 Upcoming Events</p>
                </div>
            </a>
            <a href="#" class="ev-card-style">
                <div class="card"> 
                    <h5 class="events-title">Tokyo Big Sight</h5>
                    <p class="location">Koto • Japan</p>
                    <p class="total-events">1030 Total Events • 612 Upcoming Events</p>
                </div>
            </a>
        </div>
        <a class="btn ev-view-all-btn" href="#">View All</a>
    </div>
</section>


<!--  Explore Venues end -->




<!-- Featured Organizers start -->

<section class="featured-organizers-section">
    <div class="container">
        <h3 class="heading-style">Featured Organizers 
            <span class="small">worldwide leading event organisers</span></h3>
        <div class="featured-organizers-card-wrapper">
            <a href="#" class="fo-card-style">
                <div class="card"> 
                    <img src="https://img.10times.com/event/kinetic-events-capetown/1543374717394/logo1543307539.jpg?imgeng=/w_100/h_100/m_stretch/cmpr_60" alt="" class="card-image"/>
                </div>
            </a>
            <a href="#" class="fo-card-style">
                <div class="card"> 
                    <img src="https://img.10times.com/event/kinetic-events-capetown/1543374717394/logo1543307539.jpg?imgeng=/w_100/h_100/m_stretch/cmpr_60" alt="" class="card-image"/>
                </div>
            </a>
            <a href="#" class="fo-card-style">
                <div class="card"> 
                    <img src="https://img.10times.com/event/kinetic-events-capetown/1543374717394/logo1543307539.jpg?imgeng=/w_100/h_100/m_stretch/cmpr_60" alt="" class="card-image"/>
                </div>
            </a>
            <a href="#" class="fo-card-style">
                <div class="card"> 
                    <img src="https://img.10times.com/event/kinetic-events-capetown/1543374717394/logo1543307539.jpg?imgeng=/w_100/h_100/m_stretch/cmpr_60" alt="" class="card-image"/>
                </div>
            </a>
            <a href="#" class="fo-card-style">
                <div class="card"> 
                    <img src="https://img.10times.com/event/kinetic-events-capetown/1543374717394/logo1543307539.jpg?imgeng=/w_100/h_100/m_stretch/cmpr_60" alt="" class="card-image"/>
                </div>
            </a>
            <a href="#" class="fo-card-style">
                <div class="card"> 
                    <img src="https://img.10times.com/event/kinetic-events-capetown/1543374717394/logo1543307539.jpg?imgeng=/w_100/h_100/m_stretch/cmpr_60" alt="" class="card-image"/>
                </div>
            </a>
        </div>
    </div>
</section>


<!--  Featured Organizers end -->





<!-- Popular Speakers start -->

<section class="popular-speakers-section">
    <div class="container">
        <h3 class="heading-style">Popular Speakers  <span class="small">to follow</span></h3>
        <div class="popular-speakers-card-wrapper">
            <div class="card ps-card-style"> 
                <img src="https://img.10times.com/user/images/7/5/1/15098751.jpg?imgeng=/w_80/h_80/m_stretch/cmpr_60" class="ps-card-img">
                <div class="card-content">
                    <h5 class="ps-name">Sandra Aamodt</h5>
                    <p class="ps-detials">Neuroscientist and science writer </p>
                    <p class="ps-followers"> 29 Events • 214 Followers</p>
                    <span class="heart-icon-style"><i class="fa fa-heart"></i></span>
                </div>
            </div>

            <div class="card ps-card-style"> 
                <img src="https://img.10times.com/user/images/7/5/6/15098756.jpg?imgeng=/w_80/h_80/m_stretch/cmpr_60" class="ps-card-img">
                <div class="card-content">
                    <h5 class="ps-name">Leyla Acaroglu</h5>
                    <p class="ps-detials">Chief Disrupter at Un-School of Disruptive Design </p>
                    <p class="ps-followers"> 27 Events • 138 Followers</p>
                    <span class="heart-icon-style"><i class="fa fa-heart"></i></span>
                </div>
            </div>

            <div class="card ps-card-style"> 
                <img src="https://img.10times.com/user/images/5/1/6/15101516.jpg?imgeng=/w_80/h_80/m_stretch/cmpr_60" class="ps-card-img">
                <div class="card-content">
                    <h5 class="ps-name">Lemon Andersen</h5>
                    <p class="ps-detials">Writer/Actor </p>
                    <p class="ps-followers"> 25 Events • 86 Followers</p>
                    <span class="heart-icon-style"><i class="fa fa-heart"></i></span>
                </div>
            </div>

            <div class="card ps-card-style"> 
                <img src="https://img.10times.com/user/images/7/5/1/15098751.jpg?imgeng=/w_80/h_80/m_stretch/cmpr_60" class="ps-card-img">
                <div class="card-content">
                    <h5 class="ps-name">Sandra Aamodt</h5>
                    <p class="ps-detials">Neuroscientist and science writer </p>
                    <p class="ps-followers"> 29 Events • 214 Followers</p>
                    <span class="heart-icon-style"><i class="fa fa-heart"></i></span>
                </div>
            </div>

            <div class="card ps-card-style"> 
                <img src="https://img.10times.com/user/images/7/5/6/15098756.jpg?imgeng=/w_80/h_80/m_stretch/cmpr_60" class="ps-card-img">
                <div class="card-content">
                    <h5 class="ps-name">Leyla Acaroglu</h5>
                    <p class="ps-detials">Chief Disrupter at Un-School of Disruptive Design </p>
                    <p class="ps-followers"> 27 Events • 138 Followers</p>
                    <span class="heart-icon-style"><i class="fa fa-heart"></i></span>
                </div>
            </div>

            <div class="card ps-card-style"> 
                <img src="https://img.10times.com/user/images/5/1/6/15101516.jpg?imgeng=/w_80/h_80/m_stretch/cmpr_60" class="ps-card-img">
                <div class="card-content">
                    <h5 class="ps-name">Lemon Andersen</h5>
                    <p class="ps-detials">Writer/Actor </p>
                    <p class="ps-followers"> 25 Events • 86 Followers</p>
                    <span class="heart-icon-style"><i class="fa fa-heart"></i></span>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Popular Speakers end -->

<!-- Top Networker start -->

<section class="popular-speakers-section">
    <div class="container">
        <h3 class="heading-style">Top Networker   <span class="small">to connect</span></h3>
        <div class="popular-speakers-card-wrapper">
            <div class="card ps-card-style"> 
                <img src="https://img.10times.com/user/images/7/5/6/15098756.jpg?imgeng=/w_80/h_80/m_stretch/cmpr_60" class="ps-card-img">
                <div class="card-content">
                    <h5 class="ps-name">Leyla Acaroglu</h5>
                    <p class="ps-detials">Chief Disrupter at Un-School of Disruptive Design </p>
                    <p class="ps-followers"> 27 Events • 138 Followers</p>
                    <span class="heart-icon-style"><i class="fa fa-heart"></i></span>
                </div>
            </div>

            <div class="card ps-card-style"> 
                <img src="https://img.10times.com/user/images/7/5/1/15098751.jpg?imgeng=/w_80/h_80/m_stretch/cmpr_60" class="ps-card-img">
                <div class="card-content">
                    <h5 class="ps-name">Sandra Aamodt</h5>
                    <p class="ps-detials">Neuroscientist and science writer </p>
                    <p class="ps-followers"> 29 Events • 214 Followers</p>
                    <span class="heart-icon-style"><i class="fa fa-heart"></i></span>
                </div>
            </div>

            

            <div class="card ps-card-style"> 
                <img src="https://img.10times.com/user/images/5/1/6/15101516.jpg?imgeng=/w_80/h_80/m_stretch/cmpr_60" class="ps-card-img">
                <div class="card-content">
                    <h5 class="ps-name">Lemon Andersen</h5>
                    <p class="ps-detials">Writer/Actor </p>
                    <p class="ps-followers"> 25 Events • 86 Followers</p>
                    <span class="heart-icon-style"><i class="fa fa-heart"></i></span>
                </div>
            </div>
            <div class="card ps-card-style"> 
                <img src="https://img.10times.com/user/images/7/5/6/15098756.jpg?imgeng=/w_80/h_80/m_stretch/cmpr_60" class="ps-card-img">
                <div class="card-content">
                    <h5 class="ps-name">Leyla Acaroglu</h5>
                    <p class="ps-detials">Chief Disrupter at Un-School of Disruptive Design </p>
                    <p class="ps-followers"> 27 Events • 138 Followers</p>
                    <span class="heart-icon-style"><i class="fa fa-heart"></i></span>
                </div>
            </div>

            <div class="card ps-card-style"> 
                <img src="https://img.10times.com/user/images/7/5/1/15098751.jpg?imgeng=/w_80/h_80/m_stretch/cmpr_60" class="ps-card-img">
                <div class="card-content">
                    <h5 class="ps-name">Sandra Aamodt</h5>
                    <p class="ps-detials">Neuroscientist and science writer </p>
                    <p class="ps-followers"> 29 Events • 214 Followers</p>
                    <span class="heart-icon-style"><i class="fa fa-heart"></i></span>
                </div>
            </div>

            

            <div class="card ps-card-style"> 
                <img src="https://img.10times.com/user/images/5/1/6/15101516.jpg?imgeng=/w_80/h_80/m_stretch/cmpr_60" class="ps-card-img">
                <div class="card-content">
                    <h5 class="ps-name">Lemon Andersen</h5>
                    <p class="ps-detials">Writer/Actor </p>
                    <p class="ps-followers"> 25 Events • 86 Followers</p>
                    <span class="heart-icon-style"><i class="fa fa-heart"></i></span>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Top Networker end -->






<!--Event Search start-->
<section class="main-search-container">
    <div>
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="main-search">
                            <form class="form-inline" type="GET" action="{{route('eventmie.events_index')}}">
                                <div class="form-group input-group event-search">
                                    <span class="input-group-addon"><i class="fas fa-calendar-day"></i></span>
                                    <input type="text" class="form-control" name="search"
                                        placeholder="@lang('eventmie-pro::em.search_event_by')">
                                </div>
                                <button type="submit" class="lgx-btn lgx-btn-black"><i class="fas fa-search"></i>
                                    @lang('eventmie-pro::em.search_event')</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Event Search end-->





<!--Event Featured Start-->
@if(!empty($featured_events))
<section>
    <h1>Event Featured Start</h1>
    <div>
        <div class="lgx-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="lgx-heading">
                            <h2 class="heading"><i class="fas fa-star"></i> @lang('eventmie-pro::em.featured_events')
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-1 col-10 col-lg-offset-1 col-lg-10">
                        <event-listing :events="{{ json_encode($featured_events, JSON_HEX_APOS) }}"
                            :currency="{{ json_encode($currency, JSON_HEX_APOS) }}" :date_format="{{ json_encode([
                                            'vue_date_format' => format_js_date(),
                                            'vue_time_format' => format_js_time()
                                        ], JSON_HEX_APOS) }}">
                        </event-listing>
                    </div>
                </div>

                <div class="section-btn-area">
                    <a class="lgx-btn lgx-btn-red" href="{{ route('eventmie.events_index') }}"><i
                            class="fas fa-calendar-day"></i> @lang('eventmie-pro::em.view_all_events')</a>
                </div>

            </div><!-- //.CONTAINER -->
        </div><!-- //.INNER -->
    </div>
</section>
@endif
<!--Event Featured END-->

<!--Categories-->
@if(!empty($categories))
<section>
    <div id="lgx-schedule" class="lgx-schedule lgx-schedule-dark">
        <div class="lgx-inner" style="background-image: url({{ eventmie_asset('img/bg-pattern.png') }});">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="lgx-heading lgx-heading-white">
                            <h2 class="heading">@lang('eventmie-pro::em.event_categories')</h2>
                        </div>
                    </div>
                </div>
                <!--//main row-->
                <div class="row">
                    <div class="col-12">
                        <div class="sponsors-area sponsors-area-border sponsors-area-col3">
                            @foreach($categories as $key => $item)
                            <div class="single">
                                <a href="{{route('eventmie.events_index', ['category' => urlencode($item['name'])])}}">
                                    <img src="/storage/{{ $item['thumb'] }}" alt="{{ $item['slug'] }}" />
                                    <span class="single-name">{{ $item['name'] }}</span>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!--//col-->
                </div>
            </div>
            <!--//container-->
        </div>
    </div>
</section>
@endif
<!--Categories END-->

<!--Event Upcoming Start-->
@if(!empty($upcomming_events))
<section>
    <div>
        <div class="lgx-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="lgx-heading">
                            <h2 class="heading"><i class="fas fa-hourglass-half"></i>
                                @lang('eventmie-pro::em.upcoming_events')</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-1 col-10 col-lg-offset-1 col-lg-10">
                        <event-listing :events="{{ json_encode($upcomming_events, JSON_HEX_APOS) }}"
                            :currency="{{ json_encode($currency, JSON_HEX_APOS) }}" :date_format="{{ json_encode([
                                'vue_date_format' => format_js_date(),
                                'vue_time_format' => format_js_time()
                            ], JSON_HEX_APOS) }}">
                        </event-listing>
                    </div>
                </div>

                <div class="section-btn-area">
                    <a class="lgx-btn lgx-btn-red" href="{{ route('eventmie.events_index') }}"><i
                            class="fas fa-calendar-day"></i> @lang('eventmie-pro::em.view_all_events')</a>
                </div>

            </div><!-- //.CONTAINER -->
        </div><!-- //.INNER -->
    </div>
</section>
@endif
<!--Event Upcoming END-->

<!--Event Top-selling Start-->
@if(!empty($top_selling_events))
<section>
    <div id="lgx-schedule" class="lgx-schedule lgx-schedule-dark">
        <div class="lgx-inner" style="background-image: url({{ eventmie_asset('img/bg-pattern.png') }});">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="lgx-heading lgx-heading-white">
                            <h2 class="heading"><i class="fas fa-bolt"></i> @lang('eventmie-pro::em.top_selling_events')
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-1 col-10 col-lg-offset-1 col-lg-10">
                        <event-listing :events="{{ json_encode($top_selling_events, JSON_HEX_APOS) }}"
                            :currency="{{ json_encode($currency, JSON_HEX_APOS) }}" :date_format="{{ json_encode([
                                'vue_date_format' => format_js_date(),
                                'vue_time_format' => format_js_time()
                            ], JSON_HEX_APOS) }}">
                        </event-listing>
                    </div>
                </div>

                <div class="section-btn-area">
                    <a class="lgx-btn lgx-btn-red" href="{{ route('eventmie.events_index') }}"><i
                            class="fas fa-calendar-day"></i> @lang('eventmie-pro::em.view_all_events')</a>
                </div>

            </div><!-- //.CONTAINER -->
        </div><!-- //.INNER -->
    </div>
</section>
@endif
<!--Event Top-selling END-->


<!--cities_events-->
@if(!empty($cities_events))
<section>
    <div id="lgx-schedule" class="lgx-schedule lgx-schedule-light">
        <div class="lgx-inner" style="background-image: url({{ eventmie_asset('img/bg-pattern.png') }});">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="lgx-heading">
                            <h2 class="heading">@lang('eventmie-pro::em.cities_events')</h2>
                        </div>
                    </div>
                </div>
                <!--//main row-->
                <div class="row">
                    <div class="col-12">
                        <div class="sponsors-area sponsors-area-border sponsors-area-col3">
                            @foreach($cities_events as $key => $item)
                            <div class="single">
                                <a href="{{route('eventmie.events_index', ['search' => urlencode($item->city)])}}">
                                    <img src="/storage/{{ $item->poster }}" alt="{{ $item->city }}" />
                                    <span class="single-name">{{ $item->city }}</span>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!--//col-->
                </div>
            </div>
            <!--//container-->
        </div>
    </div>
</section>
@endif
<!--cities_events END-->


<!--Blogs-->
@if(!empty($posts))
<section>
    <div>
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading">
                            <h2 class="heading"><i class="fas fa-blog"></i> @lang('eventmie-pro::em.blogs')</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($posts as $item)
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="lgx-single-news">
                            <figure>
                                <a href="{{route('eventmie.post_view', $item['slug'])}}">
                                    <img src="/storage/{{ $item['image'] }}" alt="">
                                </a>
                            </figure>

                            <div class="single-news-info">
                                <div class="meta-wrapper hidden">
                                    <span>{{\Carbon\Carbon::parse($item['updated_at'])->translatedFormat(format_carbon_date())}}</span>
                                </div>
                                <h3 class="title"><a
                                        href="{{route('eventmie.post_view', $item['slug'])}}">{{$item['title']}}</a>
                                </h3>
                                <div class="meta-wrapper">
                                    <span>{{ $item['excerpt'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="section-btn-area">
                    <a class="lgx-btn" href="{{route('eventmie.get_posts')}}"><i class="fas fa-blog"></i>
                        @lang('eventmie-pro::em.view_all_blogs')</a>
                </div>
            </div><!-- //.CONTAINER -->
        </div><!-- //.INNER -->
    </div>
</section>
@endif
<!--Blogs END-->

<!--Organiser section-->
<section>
    <div id="lgx-schedule" class="lgx-schedule lgx-schedule-dark">
        <div class="lgx-inner" style="background-image: url({{ eventmie_asset('img/bg-pattern.png') }});">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading lgx-heading-white">
                            <h3 class="subheading">@lang('eventmie-pro::em.how_it_works')</h3>
                            <h2 class="heading"><i class="fas fa-person-booth"></i>
                                @lang('eventmie-pro::em.for_event_organisers')</h2>
                        </div>
                    </div>
                    <!--//main COL-->
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-travelinfo-content lgx-content-white">
                            <div class="lgx-travelinfo-single">
                                <i class="fas fa-calendar-plus fa-4x"></i>
                                <h3 class="title">1. @lang('eventmie-pro::em.organiser_1')</h3>
                                <p class="info">@lang('eventmie-pro::em.organiser_1_info')</p>
                            </div>
                            <div class="lgx-travelinfo-single">
                                <i class="fas fa-calendar-check fa-4x"></i>
                                <h3 class="title">2. @lang('eventmie-pro::em.organiser_2')</h3>
                                <p class="info">@lang('eventmie-pro::em.organiser_2_info')</p>
                            </div>
                            <div class="lgx-travelinfo-single">
                                <i class="fas fa-money-check-alt fa-4x"></i>
                                <h3 class="title">3. @lang('eventmie-pro::em.organiser_3')</h3>
                                <p class="info">@lang('eventmie-pro::em.organiser_3_info')</p>
                            </div>

                        </div>
                    </div>
                </div>
                <!--//.ROW-->
            </div>
            <!-- //.CONTAINER -->
        </div>
    </div>
</section>
<!--TRAVEL INFO END-->

<!--TRAVEL INFO-->
<section>
    <div id="lgx-travelinfo" class="lgx-travelinfo">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading">
                            <h3 class="subheading">@lang('eventmie-pro::em.how_it_works')</h3>
                            <h2 class="heading">@lang('eventmie-pro::em.for_customers')</h2>
                        </div>
                    </div>
                    <!--//main COL-->
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-travelinfo-content">
                            <div class="lgx-travelinfo-single">
                                <i class="fas fa-calendar-alt fa-4x"></i>
                                <h3 class="title">1. @lang('eventmie-pro::em.customer_1')</h3>
                                <p class="info">@lang('eventmie-pro::em.customer_1_info')</p>
                            </div>
                            <div class="lgx-travelinfo-single">
                                <i class="fas fa-ticket-alt fa-4x"></i>
                                <h3 class="title">2. @lang('eventmie-pro::em.customer_2')</h3>
                                <p class="info">@lang('eventmie-pro::em.customer_2_info')</p>
                            </div>
                            <div class="lgx-travelinfo-single">
                                <i class="fas fa-walking fa-4x"></i>
                                <h3 class="title">3. @lang('eventmie-pro::em.customer_3')</h3>
                                <p class="info">@lang('eventmie-pro::em.customer_3_info')</p>
                            </div>

                        </div>
                    </div>
                </div>
                <!--//.ROW-->
            </div>
            <!-- //.CONTAINER -->
        </div>
    </div>
</section>
<!--TRAVEL INFO END-->


@endsection

@section('javascript')
<script type="text/javascript">
var google_map_key = {
    !!json_encode(setting('apps.google_map_key')) !!
};
</script>
<script type="text/javascript" src="{{ asset('js/welcome_v1.7.js') }}"></script>

<!-- events home page js start  -->
<!-- <script src="{{ asset('js/jquery-3.6.0.min.js') }}"> </script> -->
<script type="text/javascript" src="{{ asset('js/slick.min.js') }}"> </script>
<script type="text/javascript" src="{{ asset('js/slider-scripts.js') }}"> </script>
<!--  events home page js end -->
@stop