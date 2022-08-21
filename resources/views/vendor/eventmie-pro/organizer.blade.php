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
                    <banner-slider :banners="{{ json_encode($banners, JSON_HEX_APOS) }}" :is_logged="{{ 0 }}" :is_customer="{{ 0 }}" :is_organiser="{{ 0 }}" :is_admin="{{ 0 }}" :is_multi_vendor="{{ setting('multi-vendor.multi_vendor') ? 1 : 0 }}" :demo_mode="{{ config('voyager.demo_mode') }}" :check_session="{{ json_encode(session('verify'), JSON_HEX_TAG) }}" :s_host="{{ json_encode($_SERVER['REMOTE_ADDR'], JSON_HEX_TAG) }}"></banner-slider>
                    @else
                    <banner-slider :banners="{{ json_encode($banners, JSON_HEX_APOS) }}" :is_logged="{{ 1 }}" :is_customer="{{ Auth::user()->hasRole('customer') ? 1 : 0 }}" :is_organiser="{{ Auth::user()->hasRole('organiser') ? 1 : 0 }}" :is_admin="{{ Auth::user()->hasRole('admin') ? 1 : 0 }}" :is_multi_vendor="{{ setting('multi-vendor.multi_vendor') ? 1 : 0 }}" :demo_mode="{{ config('voyager.demo_mode') }}" :check_session="{{ json_encode(session('verify'), JSON_HEX_TAG) }}" :s_host="{{ json_encode($_SERVER['REMOTE_ADDR'], JSON_HEX_TAG) }}"></banner-slider>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</section>



<section class="organizer-page-wrapper">
    <div class="banner-bg">
        <div class="container">
            <div class="banner-content-wrapper">
                <div class="b-logo-image">
                    <img src="https://c1.10times.com/images/event/716271/eventlogo-10-1649116521.jpg" alt="b-logo" class="img-fluid">
                </div>
                <div class="banner-content">
                    <div class="bc-label-wrapper">
                        <div class="tages-wrapper">
                            <span class="bg-blue">1st Edition</span>
                            <span class="bg-green">Trade Show</span>

                        </div>
                        <div class="rating-wrapper">
                            <span class="bg-green rating-number">4.1/5 </span>
                            8 ratings
                        </div>
                    </div>
                    <label class="label-style"> Pocono Canna Fest </label>

                    <div class="date-filed"><i class="fas fa-clock"></i>30 - 31 Jul 2022 <a href="#" class="new-date-link"> New Date Reminder</a></div>
                    <div class="location"><i class="fas fa-map-marker-alt"></i>West End Fair Association, Gilbert, USA
                        <a href="#" class="get-directions-link">Get Directions <i class="fas fa-directions"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="fix-header-cta">
            <div class="btn-filter-wrapper">
                <button class="filter-btn-style">Attended</button>
                <button class="filter-btn-style"><i class="fas fa-calendar-alt"></i> Request a Booth</button>
                <button class="filter-btn-style"><i class="fas fa-star"></i> Add a Review</button>
                <button class="filter-btn-style"><i class="fas fa-share-alt-square"></i> Share & Invite</button>
                <button class="filter-btn-style"><i class="fas fa-plus"></i> Follow</button>
            </div>
            <div>
                <button class="btn btn-save-style">Save</button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="product-card-slider">
            <div class="cards-wrapper">
                <div class="card product-card-wrapper">
                    <div class="card-img-wrapper">
                        <img class="card-img-top" src="https://static-01.daraz.pk/p/cd19198b1ae594462600fc378690c5df.jpg" alt="Card image cap">
                        <span class="d-tage-style">-20%</span>
                        <span class="f-icon-style"><i class="fas fa-heart"></i></span>
                    </div>
                    <div class="card-body">
                        <div class="ct-wrapper">
                            <h5 class="card-title">Long sleeve denim jacket</h5>
                            <div class="price-wrapper">
                                <span class="d-price">$3.99</span>
                                <span class="p-price">$5.99</span>
                            </div>
                        </div>
                        <div class="product-colors-and-sizes">
                            <div class="p-colors">
                                <span class="c-red"></span>
                                <span class="c-blue"></span>
                                <span class="c-green"></span>
                            </div>
                            <div class="p-sizes">
                                <span class="small">S</span>
                                <span class="medium">M</span>
                                <span class="large">L</span>
                            </div>
                        </div>
                        <div class="rating-and-buy-button">
                            <span class="p-rating"><i class="fas fa-star"></i>4.8</span>
                            <a href="#" class="p-buy-btn">BUY</a>
                        </div>
                    </div>
                </div>
                <div class="card coupon-code-card">
                    <div class="coupon-code">
                        <span class="category">Payday Surprise</span>
                        <span class="coupon">#SRPSPYDY</span>
                    </div>
                    <div class="discount-percentage">
                        <span class="percentage">20%</span>
                        <span class="off">Off</span>
                    </div>
                </div>
            </div>
            <div class="cards-wrapper">
                <div class="card product-card-wrapper">
                    <div class="card-img-wrapper">
                        <img class="card-img-top" src="https://static-01.daraz.pk/p/cd19198b1ae594462600fc378690c5df.jpg" alt="Card image cap">
                        <span class="d-tage-style">-20%</span>
                        <span class="f-icon-style"><i class="fas fa-heart"></i></span>
                    </div>
                    <div class="card-body">
                        <div class="ct-wrapper">
                            <h5 class="card-title">Long sleeve denim jacket</h5>
                            <div class="price-wrapper">
                                <span class="d-price">$3.99</span>
                                <span class="p-price">$5.99</span>
                            </div>
                        </div>
                        <div class="product-colors-and-sizes">
                            <div class="p-colors">
                                <span class="c-red"></span>
                                <span class="c-blue"></span>
                                <span class="c-green"></span>
                            </div>
                            <div class="p-sizes">
                                <span class="small">S</span>
                                <span class="medium">M</span>
                                <span class="large">L</span>
                            </div>
                        </div>
                        <div class="rating-and-buy-button">
                            <span class="p-rating"><i class="fas fa-star"></i>4.8</span>
                            <a href="#" class="p-buy-btn">BUY</a>
                        </div>
                    </div>
                </div>
                <div class="card coupon-code-card">
                    <div class="coupon-code">
                        <span class="category">Payday Surprise</span>
                        <span class="coupon">#SRPSPYDY</span>
                    </div>
                    <div class="discount-percentage">
                        <span class="percentage">20%</span>
                        <span class="off">Off</span>
                    </div>
                </div>
            </div>
            <div class="cards-wrapper">
                <div class="card product-card-wrapper">
                    <div class="card-img-wrapper">
                        <img class="card-img-top" src="https://static-01.daraz.pk/p/cd19198b1ae594462600fc378690c5df.jpg" alt="Card image cap">
                        <span class="d-tage-style">-20%</span>
                        <span class="f-icon-style"><i class="fas fa-heart"></i></span>
                    </div>
                    <div class="card-body">
                        <div class="ct-wrapper">
                            <h5 class="card-title">Long sleeve denim jacket</h5>
                            <div class="price-wrapper">
                                <span class="d-price">$3.99</span>
                                <span class="p-price">$5.99</span>
                            </div>
                        </div>
                        <div class="product-colors-and-sizes">
                            <div class="p-colors">
                                <span class="c-red"></span>
                                <span class="c-blue"></span>
                                <span class="c-green"></span>
                            </div>
                            <div class="p-sizes">
                                <span class="small">S</span>
                                <span class="medium">M</span>
                                <span class="large">L</span>
                            </div>
                        </div>
                        <div class="rating-and-buy-button">
                            <span class="p-rating"><i class="fas fa-star"></i>4.8</span>
                            <a href="#" class="p-buy-btn">BUY</a>
                        </div>
                    </div>
                </div>
                <div class="card coupon-code-card">
                    <div class="coupon-code">
                        <span class="category">Payday Surprise</span>
                        <span class="coupon">#SRPSPYDY</span>
                    </div>
                    <div class="discount-percentage">
                        <span class="percentage">20%</span>
                        <span class="off">Off</span>
                    </div>
                </div>
            </div>
            <div class="cards-wrapper">
                <div class="card product-card-wrapper">
                    <div class="card-img-wrapper">
                        <img class="card-img-top" src="https://static-01.daraz.pk/p/cd19198b1ae594462600fc378690c5df.jpg" alt="Card image cap">
                        <span class="d-tage-style">-20%</span>
                        <span class="f-icon-style"><i class="fas fa-heart"></i></span>
                    </div>
                    <div class="card-body">
                        <div class="ct-wrapper">
                            <h5 class="card-title">Long sleeve denim jacket</h5>
                            <div class="price-wrapper">
                                <span class="d-price">$3.99</span>
                                <span class="p-price">$5.99</span>
                            </div>
                        </div>
                        <div class="product-colors-and-sizes">
                            <div class="p-colors">
                                <span class="c-red"></span>
                                <span class="c-blue"></span>
                                <span class="c-green"></span>
                            </div>
                            <div class="p-sizes">
                                <span class="small">S</span>
                                <span class="medium">M</span>
                                <span class="large">L</span>
                            </div>
                        </div>
                        <div class="rating-and-buy-button">
                            <span class="p-rating"><i class="fas fa-star"></i>4.8</span>
                            <a href="#" class="p-buy-btn">BUY</a>
                        </div>
                    </div>
                </div>
                <div class="card coupon-code-card">
                    <div class="coupon-code">
                        <span class="category">Payday Surprise</span>
                        <span class="coupon">#SRPSPYDY</span>
                    </div>
                    <div class="discount-percentage">
                        <span class="percentage">20%</span>
                        <span class="off">Off</span>
                    </div>
                </div>
            </div>
            <div class="cards-wrapper">
                <div class="card product-card-wrapper">
                    <div class="card-img-wrapper">
                        <img class="card-img-top" src="https://static-01.daraz.pk/p/cd19198b1ae594462600fc378690c5df.jpg" alt="Card image cap">
                        <span class="d-tage-style">-20%</span>
                        <span class="f-icon-style"><i class="fas fa-heart"></i></span>
                    </div>
                    <div class="card-body">
                        <div class="ct-wrapper">
                            <h5 class="card-title">Long sleeve denim jacket</h5>
                            <div class="price-wrapper">
                                <span class="d-price">$3.99</span>
                                <span class="p-price">$5.99</span>
                            </div>
                        </div>
                        <div class="product-colors-and-sizes">
                            <div class="p-colors">
                                <span class="c-red"></span>
                                <span class="c-blue"></span>
                                <span class="c-green"></span>
                            </div>
                            <div class="p-sizes">
                                <span class="small">S</span>
                                <span class="medium">M</span>
                                <span class="large">L</span>
                            </div>
                        </div>
                        <div class="rating-and-buy-button">
                            <span class="p-rating"><i class="fas fa-star"></i>4.8</span>
                            <a href="#" class="p-buy-btn">BUY</a>
                        </div>
                    </div>
                </div>
                <div class="card coupon-code-card">
                    <div class="coupon-code">
                        <span class="category">Payday Surprise</span>
                        <span class="coupon">#SRPSPYDY</span>
                    </div>
                    <div class="discount-percentage">
                        <span class="percentage">20%</span>
                        <span class="off">Off</span>
                    </div>
                </div>
            </div>
            <div class="cards-wrapper">
                <div class="card product-card-wrapper">
                    <div class="card-img-wrapper">
                        <img class="card-img-top" src="https://static-01.daraz.pk/p/cd19198b1ae594462600fc378690c5df.jpg" alt="Card image cap">
                        <span class="d-tage-style">-20%</span>
                        <span class="f-icon-style"><i class="fas fa-heart"></i></span>
                    </div>
                    <div class="card-body">
                        <div class="ct-wrapper">
                            <h5 class="card-title">Long sleeve denim jacket</h5>
                            <div class="price-wrapper">
                                <span class="d-price">$3.99</span>
                                <span class="p-price">$5.99</span>
                            </div>
                        </div>
                        <div class="product-colors-and-sizes">
                            <div class="p-colors">
                                <span class="c-red"></span>
                                <span class="c-blue"></span>
                                <span class="c-green"></span>
                            </div>
                            <div class="p-sizes">
                                <span class="small">S</span>
                                <span class="medium">M</span>
                                <span class="large">L</span>
                            </div>
                        </div>
                        <div class="rating-and-buy-button">
                            <span class="p-rating"><i class="fas fa-star"></i>4.8</span>
                            <a href="#" class="p-buy-btn">BUY</a>
                        </div>
                    </div>
                </div>
                <div class="card coupon-code-card">
                    <div class="coupon-code">
                        <span class="category">Payday Surprise</span>
                        <span class="coupon">#SRPSPYDY</span>
                    </div>
                    <div class="discount-percentage">
                        <span class="percentage">20%</span>
                        <span class="off">Off</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="layout-with-sider-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="nav nav-tabs nav-tabs-link-wrapper" id="myTab" role="tablist">
                        <li class="nav-item active" role="presentation">
                            <a class="nav-link active" id="about-tab" data-toggle="tab" data-target="#aboutTab" role="tab" aria-controls="aboutTab" aria-selected="true">About</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="followers-tab" data-toggle="tab" data-target="#followers" role="tab" aria-controls="followers" aria-selected="false">Followers
                                <span class="tabs-span-style">233</span></a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="exhibitors-tab" data-toggle="tab" data-target="#exhibitors" role="tab" aria-controls="exhibitors" aria-selected="false">Exhibitors</a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="speakers-tab" data-toggle="tab" data-target="#speakers" role="tab" aria-controls="speakers" aria-selected="false">
                                speakers <span class="tabs-span-style">2</span></a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="reviews-tab" data-toggle="tab" data-target="#reviews" role="tab" aria-controls="reviews" aria-selected="false">
                                reviews </a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="photos-tab" data-toggle="tab" data-target="#photos" role="tab" aria-controls="photos" aria-selected="false">
                                photos <span class="tabs-span-style">2</span></a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="travel-deals-tab" data-toggle="tab" data-target="#travel-deals" role="tab" aria-controls="travel-deals" aria-selected="false">
                                Travel Deals </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active in" id="aboutTab" role="tabpanel" aria-labelledby="about-tab">
                            <div class="organizer-content-card">
                                <h3 class="tabs-heading">"CBD and Alternative Health Celebration"</h3>
                                <p class="tabs-text">
                                    Celebration of CBD and Alternative Health! Mind, Body, Spirit, and Soul. Canna Fest joins 100's of top-rated vendors to bring you the very best in Alternative Health. Shop with leaders in the Cannabis Industry offering the latest trends and products. Enjoy Free Parking, Food Vendors and Live Glass Blowing at this Canna Fest Celebration! Get PRE-SALE Tickets now and save! $5.00 Pre-sale and $10.00 at the Gate. Don't miss our Legendary Performers Cody Templeton Band, Cramer Brothers Band and the Brian Dean Moore Band! For more information and for Vendor application visit CannaMedShow dot com.
                                </p>
                                <h3 class="tabs-heading">Highlights</h3>
                                <ul class="tabs-list-wrapper">
                                    <li>CBD Specialist</li>
                                    <li> Mind, Body, Soul Healing</li>
                                    <li> Cannabis Culture</li>
                                    <li>Cannabiz Health</li>
                                    <li> Fitness and health</li>
                                </ul>

                                <ul class="tabs-tage-list">
                                    <li><a href="#"> Schedule & Agenda </a></li>
                                    <li><a href="#"> Entry Fee </a></li>
                                    <li><a href="#"> Organizer </a></li>
                                    <li><a href="#"> Venue </a></li>
                                </ul>
                            </div>
                            <div class="organizer-content-card">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Timings</h3>
                                        <p>10:00 AM - 6:00 PM (Jul 30) (Public)</p>
                                        <p>10:00 AM - 4:00 PM (Jul 31) (General)</p>
                                    </div>

                                    <div class="col-md-6">
                                        <h3>Entry Fees</h3>
                                        <p>Paid Ticket Starts from 5 USD</p>
                                        <p>Exhibit Booth Cost Starts from 25 USD</p>
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Estimated Turnout</h3>
                                        <p>3000 Visitors</p>
                                        <p>150 Exhibitors</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h3>Category & Type</h3>
                                        <p><i class="fas fa-check"></i>Trade Show</p>
                                        <p><i class="fas fa-leaf"></i><a href="#"> Agriculture & Forestry </a></p>
                                        <p><i class="fas fa-heartbeat"></i>Wellness, Health & Fitness</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Editions</h3>
                                        <p>Jul 2022 1st Edition</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h3>Official Links</h3>
                                        <div class="official-links">
                                            <a href="#">Website</a>
                                            <a href="#">Contacts </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><span>Frequency</span></p>
                                        <p><span>Annual</span></p>
                                        <p><span>Next edition likely in Jul 2023</span></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><span>Report Error</span></p>
                                        <p><span>Claim this event</span></p>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-12">
                                        <div class="organizer-profile-card">
                                            <div class="organizer-profile">
                                                <img src="https://seeklogo.com/images/I/igo-organizer-hatyai-logo-D767855BD3-seeklogo.com.png" alt="">
                                                <div class="organizer-info">
                                                    <h3> <a href="#">Canna Med Show</a><span class="tage-style">Top Rated</span></h3>
                                                    <p class="location">USA</p>
                                                    <p class="organizer-total-events">5 Total Events</p>
                                                </div>
                                            </div>
                                            <div class="follow-company">
                                                <a href="#"> Follow Company </a>
                                                <p>Queries about the event? Ask Organizer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="organizer-content-card popular-visitors">
                                <h3>Why to Attend?</h3>
                                <h5 class="small-heading">Popular among visitors for</h5>
                                <div class="visitors-tages">
                                    <a href="#">Top 100 in Agriculture & Forestry in United States</a>
                                    <a href="#">Exhibitors & Vendors</a>
                                    <a href="#">Cleanliness</a>
                                </div>
                            </div>
                            <div class="organizer-content-card">
                                <div class="heading-wrapper">
                                    <h3>Followers <span>[ Users who have shown interest for this Event ]</span> </h3>
                                    <div class="join-community-wrapper">
                                        <a href="#" class="join-community">Join Community</a>
                                        <a href="#" class="invite-link"><i class="fas fa-user-plus"></i>Invite</a>
                                    </div>
                                </div>
                                <div class="followers-filters-wrapper">
                                    <div class="filters-dropdown">
                                        <div class="dropdown">
                                            <button class="btn followers-filters-dropdown dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropdown <i class="fas fa-chevron-down down-icon-style"></i>
                                            </button>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn followers-filters-dropdown dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropdown <i class="fas fa-chevron-down down-icon-style"></i>
                                            </button>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sort-option">
                                        <span>Sort By</span>
                                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="followers-card-wrapper">
                                    <div class="followers-card">
                                        <span class="visited">Visited <i class="fas fa-user-check"></i> </span>
                                        <i class="fas fa-heart favorite-icon"></i>
                                        <a href="#" class="name-frist-letter">M</a>
                                        <a href="#" class="profile-name-link">Michael Felan</a>
                                        <p class="designation">DSM at Sunoptics</p>
                                        <p class="location"><i class="fas fa-map-marker-alt"></i> Irving, United States</p>
                                        <a href="#" class="connect-btn">Connect</a>
                                    </div>
                                    <div class="followers-card">
                                        <span class="visited">Visited <i class="fas fa-user-check"></i> </span>
                                        <i class="fas fa-heart favorite-icon"></i>
                                        <a href="#" class="name-frist-letter">M</a>
                                        <a href="#" class="profile-name-link">Michael Felan</a>
                                        <p class="designation">DSM at Sunoptics</p>
                                        <p class="location"><i class="fas fa-map-marker-alt"></i> Irving, United States</p>
                                        <a href="#" class="connect-btn">Connect</a>
                                    </div>
                                    <div class="followers-card">
                                        <span class="visited">Visited <i class="fas fa-user-check"></i> </span>
                                        <i class="fas fa-heart favorite-icon"></i>
                                        <a href="#" class="name-frist-letter">M</a>
                                        <a href="#" class="profile-name-link">Michael Felan</a>
                                        <p class="designation">DSM at Sunoptics</p>
                                        <p class="location"><i class="fas fa-map-marker-alt"></i> Irving, United States</p>
                                        <a href="#" class="connect-btn">Connect</a>
                                    </div>
                                    <div class="followers-card">
                                        <span class="visited">Visited <i class="fas fa-user-check"></i> </span>
                                        <i class="fas fa-heart favorite-icon"></i>
                                        <a href="#" class="name-frist-letter">M</a>
                                        <a href="#" class="profile-name-link">Michael Felan</a>
                                        <p class="designation">DSM at Sunoptics</p>
                                        <p class="location"><i class="fas fa-map-marker-alt"></i> Irving, United States</p>
                                        <a href="#" class="connect-btn">Connect</a>
                                    </div>
                                    <div class="followers-card">
                                        <span class="visited">Visited <i class="fas fa-user-check"></i> </span>
                                        <i class="fas fa-heart favorite-icon"></i>
                                        <a href="#" class="name-frist-letter">M</a>
                                        <a href="#" class="profile-name-link">Michael Felan</a>
                                        <p class="designation">DSM at Sunoptics</p>
                                        <p class="location"><i class="fas fa-map-marker-alt"></i> Irving, United States</p>
                                        <a href="#" class="connect-btn">Connect</a>
                                    </div>
                                </div>
                            </div>
                            <div class="map-directions-list-wrapper">
                                <div class="organizer-content-card map-directions">
                                    <h3>Venue Map & Directions</h3>
                                    <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure area map</a></iframe></div>
                                    <p>Fort Worth Convention Center</p>
                                    <p>Fort Worth, TX 76107</p>
                                    <p>USA</p>
                                    <a href="#" class="get-directions-btn"> Get Directions</a>
                                </div>
                                <div class="location-list-wrapper">
                                    <h3>Featured Hotels in Fort Worth</h3>
                                    <ul class="featured-hotels-list-wrapper">
                                        <li class="list-item">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQup98lQdmqF-6HkVeqWj2lbIHPkmID9TKy4V5zDShJL80XtIJCMW9JTDZaby9BzEqletw&usqp=CAU" alt="">
                                            <div class="hotels-content-card">
                                                <a href="#" class="location-link">Hampton Inn & Suites Fort Worth Hampton</a>
                                                <p class="hotel-ratting"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> from USD 101</p>
                                            </div>
                                        </li>
                                        <li class="list-item active">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQup98lQdmqF-6HkVeqWj2lbIHPkmID9TKy4V5zDShJL80XtIJCMW9JTDZaby9BzEqletw&usqp=CAU" alt="">
                                            <div class="hotels-content-card">
                                                <a href="#" class="location-link">Hampton Inn & Suites Fort Worth Hampton</a>
                                                <p class="hotel-ratting"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> from USD 101</p>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQup98lQdmqF-6HkVeqWj2lbIHPkmID9TKy4V5zDShJL80XtIJCMW9JTDZaby9BzEqletw&usqp=CAU" alt="">
                                            <div class="hotels-content-card">
                                                <a href="#" class="location-link">Hampton Inn & Suites Fort Worth Hampton</a>
                                                <p class="hotel-ratting"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> from USD 101</p>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQup98lQdmqF-6HkVeqWj2lbIHPkmID9TKy4V5zDShJL80XtIJCMW9JTDZaby9BzEqletw&usqp=CAU" alt="">
                                            <div class="hotels-content-card">
                                                <a href="#" class="location-link">Hampton Inn & Suites Fort Worth Hampton</a>
                                                <p class="hotel-ratting"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> from USD 101</p>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQup98lQdmqF-6HkVeqWj2lbIHPkmID9TKy4V5zDShJL80XtIJCMW9JTDZaby9BzEqletw&usqp=CAU" alt="">
                                            <div class="hotels-content-card">
                                                <a href="#" class="location-link">Hampton Inn & Suites Fort Worth Hampton</a>
                                                <p class="hotel-ratting"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> from USD 101</p>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQup98lQdmqF-6HkVeqWj2lbIHPkmID9TKy4V5zDShJL80XtIJCMW9JTDZaby9BzEqletw&usqp=CAU" alt="">
                                            <div class="hotels-content-card">
                                                <a href="#" class="location-link">Hampton Inn & Suites Fort Worth Hampton</a>
                                                <p class="hotel-ratting"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> from USD 101</p>
                                            </div>
                                        </li>
                                        <a href="#" class="more-hotels-btn"> More Hotels</a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="followers" role="tabpanel" aria-labelledby="followers-tab">
                            followers
                        </div>
                        <div class="tab-pane fade" id="exhibitors" role="tabpanel" aria-labelledby="exhibitors-tab">
                            exhibitors
                        </div>

                        <div class="tab-pane fade" id="speakers" role="tabpanel" aria-labelledby="speakers-tab">
                            speakers
                        </div>

                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            reviews
                        </div>

                        <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="photos-tab">
                            Photos
                        </div>

                        <div class="tab-pane fade" id="travel-deals" role="tabpanel" aria-labelledby="travel-deals-tab">
                            Travel Deals
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card followers-card">
                        <div class="followers-img">
                            <ul class="f-img-wrapper">
                                <li><img src="https://www.unigreet.com/wp-content/uploads/2020/04/Sweet-girl-dp.jpg" alt=""> </li>
                                <li>M</li>
                            </ul>
                            <h4 class="followers-count">223 Followers</h4>
                        </div>
                        <div class="fc-content">
                            <p class="fc-text">Connect, Meet and Build a Strong Network</p>
                        </div>
                    </div>
                    <div class="sider-card-list-wrapper">
                        <h3 class="re-heading">Related Events</h3>
                        <ul class="re-list-wrapper">
                            <li>
                                <p class="date-style">Sep 30 2022</p>
                                <div class="location-and-link">
                                    <a href="#" class="events-link"> IARF Educational Conference & Expo </a>
                                    <p class="location">Houston, USA</p>
                                    <i class="fa fa-bookmark location-bookmark-icon"></i>
                                </div>
                            </li>
                            <li>
                                <p class="date-style">Sep 30 2022</p>
                                <div class="location-and-link">
                                    <a href="#" class="events-link"> IARF Educational Conference & Expo </a>
                                    <p class="location">Houston, USA</p>
                                    <i class="fa fa-bookmark location-bookmark-icon"></i>
                                </div>
                            </li>
                            <li>
                                <p class="date-style">Sep 30 2022</p>
                                <div class="location-and-link">
                                    <a href="#" class="events-link"> IARF Educational Conference & Expo </a>
                                    <p class="location">Houston, USA</p>
                                    <i class="fa fa-bookmark location-bookmark-icon"></i>
                                </div>
                            </li>
                            <li>
                                <p class="date-style">Sep 30 2022</p>
                                <div class="location-and-link">
                                    <a href="#" class="events-link"> IARF Educational Conference & Expo </a>
                                    <p class="location">Houston, USA</p>
                                    <i class="fa fa-bookmark location-bookmark-icon"></i>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>





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
<script type="text/javascript" src="{{ eventmie_asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/slick.min.js') }}"> </script>
<script type="text/javascript" src="{{ asset('js/slider-scripts.js') }}"> </script>
<!-- <script type="text/javascript" src="{{ eventmie_asset('js/jquery.min.js') }}"></script> -->

<!--  events home page js end -->
@stop