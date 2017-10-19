@extends('frontend.master')
@section('content')
    <!--Start Search Filter Section-->
    <section class="filter-area-one job">
        <div class="filter-area-one-ovrly"></div>
        <!--Start container-->
        <div class="container">
            <!--Start Search Filter Row-->
            <div class="row">
                <h2 class="text-center text-bold text-upper animated fadeInUp">Search Your Favourate Jobs Here</h2>

                <!--Start Search Filter-->
                <div class="search-filter">
                    <form action="#" method="POST">
                        <!--Start Search Keyword-->
                        <div class="keyword">
                            <input type="text" class="form-control" placeholder="Searching Job">
                        </div>
                        <!--End Search Keyword-->

                        <!--Start Search Category Options-->
                        <div class="category">
                            <select class="form-control bs-select">
                                <option value="Select Category" selected="selected">Select Category</option>
                                <option value="">Accounting</option>
                                <option value="">Data Entry</option>
                                <option value="">Executive</option>
                                <option value="">Finance</option>
                                <option value="">Management</option>
                                <option value="">Marketing</option>
                            </select>
                        </div>
                        <!--End Search Category Options-->

                        <!--Start Search Location Options-->
                        <div class="location">
                            <select class="form-control select-loc">
                                <option value="Location" selected="selected">All Location</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Canda">Canda</option>
                                <option value="Thailand">Thailand</option>
                                <option value="United Kingdom">United States</option>
                                <option value="United Kingdom">United Kingdom</option>
                            </select>
                        </div>
                        <!--End Search Location Options-->

                        <!--Start Search Button-->
                        <div class="search-btn">
                            <button>SEARCH</button>
                        </div>
                        <!--End Search Location-->
                    </form>
                </div>
                <!--End Search Filter-->
            </div>
            <!--End Search Filter Row-->
        </div>
        <!--End container-->
    </section>
    <!--End Search Filter Section-->

    <!--Start Category Section-->
    <section class="job-category">
        <!--Start container-->
        <div class="container">
            <!--Start Section Title-->
            <div class="section-title">
                <h2 class="text-center text-bold"><span>Categories</span></h2>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <!--End Section Title-->

            <!--Start Category Item Row-->
            <div class="row">
                <!--Start Category Item Col-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!--Start Category Item-->
                    <div class="cat-item">
                        <span><a href=""><i class="fa fa-laptop"></i></a></span>
                        <h3 class="text-center text-bold">Finance & Accounting</h3>
                        <h5 class="text-center text-bold">3245 Jobs Available</h5>
                        <div class="cat-item-overlay"></div>
                    </div>
                    <!--End Category Item-->
                </div>
                <!--End Category Item Col-->

                <!--Start Category Item Col-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!--Start Category Item-->
                    <div class="cat-item">
                        <span><a href=""><i class="fa fa-user-md"></i></a></span>
                        <h3 class="text-center text-bold">Medicine & Healthcare</h3>
                        <h5 class="text-center text-bold">2445 Jobs Available</h5>
                        <div class="cat-item-overlay"></div>
                    </div>
                    <!--End Category Item-->
                </div>
                <!--End Category Item Col-->

                <!--Start Category Item Col-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!--Start Category Item-->
                    <div class="cat-item">
                        <span><a href=""><i class="fa fa-code"></i></a></span>
                        <h3 class="text-center text-bold">IT & Software</h3>
                        <h5 class="text-center text-bold">9892 Jobs Available</h5>
                        <div class="cat-item-overlay"></div>
                    </div>
                    <!--End Category Item-->
                </div>
                <!--End Category Item Col-->

                <!--Start Category Item Col-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!--Start Category Item-->
                    <div class="cat-item">
                        <span><a href=""><i class="fa fa-glass"></i></a></span>
                        <h3 class="text-center text-bold">Food & Restaurant</h3>
                        <h5 class="text-center text-bold">12245 Jobs Available</h5>
                        <div class="cat-item-overlay"></div>
                    </div>
                    <!--End Category Item-->
                </div>
                <!--End Category Item Col-->

                <!--Start Category Item Col-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!--Start Category Item-->
                    <div class="cat-item">
                        <span><a href=""><i class="fa fa-paint-brush"></i></a></span>
                        <h3 class="text-center text-bold">Design, Art & Multimedia</h3>
                        <h5 class="text-center text-bold">7235 Jobs Available</h5>
                        <div class="cat-item-overlay"></div>
                    </div>
                    <!--End Category Item-->
                </div>
                <!--End Category Item Col-->

                <!--Start Category Item Col-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!--Start Category Item-->
                    <div class="cat-item">
                        <span><a href=""><i class="fa fa-truck"></i></a></span>
                        <h3 class="text-center text-bold">Transport & Vehicles</h3>
                        <h5 class="text-center text-bold">3245 Jobs Available</h5>
                        <div class="cat-item-overlay"></div>
                    </div>
                    <!--End Category Item-->
                </div>
                <!--End Category Item Col-->
            </div>
            <!--End Category Item Row-->
        </div>
        <!--End container-->
    </section>
    <!--End Category Section-->

    <!--Start Hottest Section-->
    <section class="job-hottest">
        <!--Start container-->
        <div class="container">
            <!--Start Section Title-->
            <div class="section-title two">
                <h2 class="text-center text-bold"> <span>Hottest</span> Jobs</h2>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <!--End Section Title-->

            <!--Start Hottest Item Row-->
            <div class="row">
                <!--Start Hottest Item Col-->
                <div class="col-md-12">
                    <!--Start Hottest Item-->
                    <div class="hottest-item">
                        <div class="left-item col-md-9 col-sm-8">
                            <h3><a class="text-bold" href="listing-single-left-sidebar.html">Senior Account Manager</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, maiores, nulla. Consequuntur fugit animi aliquam illo similique ratione impedit modi! Illum aspernatur, fugit ab numquam mollitia assumenda accusantium dolore nam.</p>
                            <p><span><i class="fa fa-bookmark"></i> Full Time</span><span><i class="fa fa-map-marker"></i> New Avenue, New York</span><span><i class="fa fa-calendar"></i> Mar 20, 2017 - Aug 25, 2017</span><span><a href=""><i class="fa fa-user"></i> Jhon Doe</a></span></p>

                        </div>
                        <div class="right-item col-md-3">
                            <h2 class="text-bold text-right">$2000 <small>/month</small></h2>
                            <p class="float-right"><a href="listing-single-left-sidebar.html">More Details</a></p>
                        </div>
                    </div>
                    <!--End Hottest Item-->

                    <!--Start Hottest Item-->
                    <div class="hottest-item">
                        <div class="left-item col-md-9 col-sm-8">
                            <h3><a class="text-bold" href="listing-single-left-sidebar.html">Sales Executive</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, maiores, nulla. Consequuntur fugit animi aliquam illo similique ratione impedit modi! Illum aspernatur, fugit ab numquam mollitia assumenda accusantium dolore nam.</p>
                            <p><span><i class="fa fa-bookmark"></i> Full Time</span><span><i class="fa fa-map-marker"></i> New Avenue, New York</span><span><i class="fa fa-calendar"></i> Mar 20, 2017 - Aug 25, 2017</span><span><a href=""><i class="fa fa-user"></i> Jhon Doe</a></span></p>

                        </div>
                        <div class="right-item col-md-3">
                            <h2 class="text-bold text-right">$5400 <small>/month</small></h2>
                            <p class="float-right"><a href="listing-single-left-sidebar.html">More Details</a></p>
                        </div>
                    </div>
                    <!--End Hottest Item-->

                    <!--Start Hottest Item-->
                    <div class="hottest-item">
                        <div class="left-item col-md-9 col-sm-8">
                            <h3><a class="text-bold" href="listing-single-left-sidebar.html">Computer Operator</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, maiores, nulla. Consequuntur fugit animi aliquam illo similique ratione impedit modi! Illum aspernatur, fugit ab numquam mollitia assumenda accusantium dolore nam.</p>
                            <p><span><i class="fa fa-bookmark"></i> Full Time</span><span><i class="fa fa-map-marker"></i> New Avenue, New York</span><span><i class="fa fa-calendar"></i> Mar 20, 2017 - Aug 25, 2017</span><span><a href=""><i class="fa fa-user"></i> Jhon Doe</a></span></p>

                        </div>
                        <div class="right-item col-md-3">
                            <h2 class="text-bold text-right">$3000 <small>/month</small></h2>
                            <p class="float-right"><a href="listing-single-left-sidebar.html">More Details</a></p>
                        </div>
                    </div>
                    <!--End Hottest Item-->

                    <!--Start Hottest Item-->
                    <div class="hottest-item">
                        <div class="left-item col-md-9 col-sm-8">
                            <h3><a class="text-bold" href="">Senior Account Manager</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, maiores, nulla. Consequuntur fugit animi aliquam illo similique ratione impedit modi! Illum aspernatur, fugit ab numquam mollitia assumenda accusantium dolore nam.</p>
                            <p><span><i class="fa fa-bookmark"></i> Full Time</span><span><i class="fa fa-map-marker"></i> New Avenue, New York</span><span><i class="fa fa-calendar"></i> Mar 20, 2017 - Aug 25, 2017</span><span><a href=""><i class="fa fa-user"></i> Jhon Doe</a></span></p>

                        </div>
                        <div class="right-item col-md-3">
                            <h2 class="text-bold text-right">$2000 <small>/month</small></h2>
                            <p class="float-right"><a href="">More Details</a></p>
                        </div>
                    </div>
                    <!--End Hottest Item-->

                    <!--Start Hottest Item-->
                    <div class="hottest-item">
                        <div class="left-item col-md-9 col-sm-8">
                            <h3><a class="text-bold" href="listing-single-left-sidebar.html">Marketing Officer</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, maiores, nulla. Consequuntur fugit animi aliquam illo similique ratione impedit modi! Illum aspernatur, fugit ab numquam mollitia assumenda accusantium dolore nam.</p>
                            <p><span><i class="fa fa-bookmark"></i> Full Time</span><span><i class="fa fa-map-marker"></i> New Avenue, New York</span><span><i class="fa fa-calendar"></i> Mar 20, 2017 - Aug 25, 2017</span><span><a href=""><i class="fa fa-user"></i> Jhon Doe</a></span></p>

                        </div>
                        <div class="right-item col-md-3">
                            <h2 class="text-bold text-right">$5000 <small>/month</small></h2>
                            <p class="float-right"><a href="listing-single-left-sidebar.html">More Details</a></p>
                        </div>
                    </div>
                    <!--End Hottest Item-->
                </div>
                <!--End Hottest Item Col-->
            </div>
            <!--End Hottest Item Row-->

            <!--Start Load More-->
            <div class="job-btn">
                <button>Browse More</button>
            </div>
            <!--End Load More-->
        </div>
        <!--End container-->
    </section>
    <!--End Hottest Section-->

    <!--Start Job Newsletter Section-->
    <section class="newsletter">
        <!--Start container-->
        <div class="container">
            <!--Start Row-->
            <div class="row">
                <!--Start Newsletter Content-->
                <div class="newsletter-content">
                    <div class="col-sm-5 col-xs-12">
                        <h3 class="text-left text-bold">Subscribe Our Newsletter</h3>
                    </div>
                    <div class="col-sm-5 col-xs-12">
                        <input type="email" class="form-control" placeholder="Input Your Email">
                    </div>
                    <div class="col-sm-2 col-xs-12">
                        <button>Subscribe</button>
                    </div>
                </div>
                <!--End Newsletter Content-->
            </div>
            <!--End Row-->
        </div>
        <!--End container-->
    </section>
    <!--End Job Newsletter Section-->

    <!--Start All Job Section-->
    <section class="job-all">
        <!--Start container-->
        <div class="container">
            <!--Start Section Title-->
            <div class="section-title two col-md-9">
                <h2 class="text-center text-bold">All <span>Jobs</span></h2>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <!--End Section Title-->

            <!--Start Recent Jobs Row-->
            <div class="row">
                <!--Start Recent Job Item Col-->
                <div class="col-md-9">
                    <!--Start Recent Job Item-->
                    <div class="job-item">
                        <div class="job-item-cont col-md-6 col-sm-12 col-xs-12">
                            <div class="job-cont-img float-left">
                                <img src="{{url('/')}}/assets/frontend/images/client/man-1.png" alt="">
                            </div>
                            <div class="job-item-details float-right">
                                <h3><a href="listing-single-left-sidebar.html">Senior Web Developer</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, ea.</p>
                                <h4><strong>Published Date:</strong> Apr 30, 2017</h4>
                                <h4><strong>Deadline:</strong> Jul 20, 2017</h4>
                            </div>
                        </div>
                        <div class="job-locaction col-md-3 col-sm-12 col-xs-12">
                            <h3>124 Green Road, Oval Street, UK</h3>
                        </div>

                        <div class="job-price col-md-3 col-sm-12 col-xs-12">
                            <h3><span>Part Time</span></h3>
                            <h4><span>$3,000 <small>/month</small></span></h4>
                            <span><a href="">More Details</a></span>
                        </div>
                        <div class="job-ovrly">
                            <span>Featured</span>
                        </div>
                    </div>
                    <!--End Recent Job Item-->

                    <!--Start Recent Job Item-->
                    <div class="job-item">
                        <div class="job-item-cont col-md-6 col-sm-12 col-xs-12">
                            <div class="job-cont-img float-left">
                                <img src="{{url('/')}}/assets/frontend/images/client/man-2.png" alt="">
                            </div>
                            <div class="job-item-details float-right">
                                <h3><a href="listing-single-left-sidebar.html">Executive Manager</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, ea.</p>
                                <h4><strong>Published Date:</strong> Apr 30, 2017</h4>
                                <h4><strong>Deadline:</strong> Jul 20, 2017</h4>
                            </div>
                        </div>
                        <div class="job-locaction col-md-3 col-sm-12 col-xs-12">
                            <h3>24 Asad Tower Street, New York, USA</h3>
                        </div>

                        <div class="job-price col-md-3 col-sm-12 col-xs-12">
                            <h3><span>Full Time</span></h3>
                            <h4><span>$4,000 <small>/month</small></span></h4>
                            <span><a href="">More Details</a></span>
                        </div>
                    </div>
                    <!--End Recent Job Item-->

                    <!--Start Recent Job Item-->
                    <div class="job-item">
                        <div class="job-item-cont col-md-6 col-sm-12 col-xs-12">
                            <div class="job-cont-img float-left">
                                <img src="{{url('/')}}/assets/frontend/images/client/man-3.png" alt="">
                            </div>
                            <div class="job-item-details float-right">
                                <h3><a href="listing-single-left-sidebar.html">Software Developer</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, ea.</p>
                                <h4><strong>Published Date:</strong> Apr 30, 2017</h4>
                                <h4><strong>Deadline:</strong> Jul 20, 2017</h4>
                            </div>
                        </div>
                        <div class="job-locaction col-md-3 col-sm-12 col-xs-12">
                            <h3>124 Mount View, Lake Street, UK</h3>
                        </div>

                        <div class="job-price col-md-3 col-sm-12 col-xs-12">
                            <h3><span>Full Time</span></h3>
                            <h4><span>$8,000 <small>/month</small></span></h4>
                            <span><a href="">More Details</a></span>
                        </div>
                        <div class="job-ovrly hot">
                            <span>Hottest</span>
                        </div>
                    </div>
                    <!--End Recent Job Item-->

                    <!--Start Recent Job Item-->
                    <div class="job-item">
                        <div class="job-item-cont col-md-6 col-sm-12 col-xs-12">
                            <div class="job-cont-img float-left">
                                <img src="{{url('/')}}/assets/frontend/images/client/man-1.png" alt="">
                            </div>
                            <div class="job-item-details float-right">
                                <h3><a href="listing-single-left-sidebar.html">Graphic Designer</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, ea.</p>
                                <h4><strong>Published Date:</strong> Apr 30, 2017</h4>
                                <h4><strong>Deadline:</strong> Jul 20, 2017</h4>
                            </div>
                        </div>
                        <div class="job-locaction col-md-3 col-sm-12 col-xs-12">
                            <h3>24 Asad Tower Street, New York, USA</h3>
                        </div>

                        <div class="job-price col-md-3 col-sm-12 col-xs-12">
                            <h3><span>Part Time</span></h3>
                            <h4><span>$5,000 <small>/month</small></span></h4>
                            <span><a href="">More Details</a></span>
                        </div>
                    </div>
                    <!--End Recent Job Item-->

                    <!--Start Recent Job Item-->
                    <div class="job-item">
                        <div class="job-item-cont col-md-6 col-sm-12 col-xs-12">
                            <div class="job-cont-img float-left">
                                <img src="{{url('/')}}/assets/frontend/images/client/man-2.png" alt="">
                            </div>
                            <div class="job-item-details float-right">
                                <h3><a href="listing-single-left-sidebar.html">Associate Executive Officer</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, ea.</p>
                                <h4><strong>Published Date:</strong> Apr 30, 2017</h4>
                                <h4><strong>Deadline:</strong> Jul 20, 2017</h4>
                            </div>
                        </div>
                        <div class="job-locaction col-md-3 col-sm-12 col-xs-12">
                            <h3> 246 Concord Tower, New Street, UK</h3>
                        </div>

                        <div class="job-price col-md-3 col-sm-12 col-xs-12">
                            <h3><span>Full Time</span></h3>
                            <h4><span>$3,000 <small>/month</small></span></h4>
                            <span><a href="">More Details</a></span>
                        </div>
                        <div class="job-ovrly">
                            <span>Featured</span>
                        </div>
                    </div>
                    <!--End Recent Job Item-->

                    <!--Start Load More-->
                    <div class="job-btn">
                        <button>Browse More</button>
                    </div>
                    <!--End Load More-->
                </div>
                <!--End Recent Job Item Col-->

                <!--Start Sidebar Col-->
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <!--Start Sidebar-->
                    <div class="job-sidebar">
                        <!--Start Ads Widget-->
                        <div class="advertise vertical-two">
                            <h4 class="text-left text-bold">Advertisement</h4>
                            <div class="advertise-cont">
                                <h1 class="text-center text-bold">40% to 8o%</h1>
                                <h1 class="text-center text-bold"><span>Discount</span></h1>
                                <h2 class="text-center">Amazing Discout On Every Product</h2>
                                <button>Check Now</button>
                            </div>
                        </div>
                        <!--End Ads Widget-->

                        <!--Start Ads Widget-->
                        <div class="advertise vertical-three">
                            <h4 class="text-left text-bold">Advertisement</h4>
                            <div class="advertise-cont">
                                <h3 class="text-center text-bold">Computer Operator Needed (Expert)</h3>
                                <h4><span>$2,000</span><span class="float-right">Full Time</span></h4>
                                <p><i class="fa fa-map-marker color-main"></i> 34 Mount View, New York</p>
                                <p><i class="fa fa-envelope color-main"></i> info@email.com</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam similique dolor ipsam maiores.</p>
                                <div class="ads-btn text-center">
                                    <button>Check Now</button>
                                </div>
                            </div>
                        </div>
                        <!--End Ads Widget-->
                    </div>
                    <!--End Sidebar-->
                </div>
                <!--End Sidebar Col-->
            </div>
            <!--End Recent Jobs Row-->
        </div>
        <!--End container-->
    </section>
    <!--End All Job Section-->

    <!--Start Testimonial Section-->
    <section class="job testimonial four">
        <!--Start container-->
        <div class="container">
            <!--Start Section Title-->
            <div class="section-title two">
                <h2 class="text-center text-bold">Our <span>Team</span></h2>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <!--End Section Title-->

            <!--Start Testimonial Item Row-->
            <div class="row">
                <!--Start Testimonial Item Col-->
                <div class="col-sm-4">
                    <!--Start Testimonial Item-->
                    <div class="testi-item">
                        <div class="client-details">
                            <img src="{{url('/')}}/assets/frontend/images/team/img-2.png" alt="">
                            <h3 class="text-bold text-center text-upper color-main">Jhon Doe</h3>
                            <h4 class="text-bold text-center">Glory Tech Valley</h4>
                        </div>
                        <div class="client-comment">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aspernatur repellat harum libero, voluptates asperiores magni alias eligendi nostrum quibusdam?</p>
                        </div>
                    </div>
                    <!--End Testimonial Item-->
                </div>
                <!--End Testimonial Item Col-->

                <!--Start Testimonial Item Col-->
                <div class="col-sm-4">
                    <!--Start Testimonial Item-->
                    <div class="testi-item">
                        <div class="client-details">
                            <img src="{{url('/')}}/assets/frontend/images/team/img-4.png" alt="">
                            <h3 class="text-bold text-center text-upper color-main">Jack Morkel</h3>
                            <h4 class="text-bold text-center">RootPointer IT</h4>
                        </div>
                        <div class="client-comment">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aspernatur repellat harum libero, voluptates asperiores magni alias eligendi nostrum quibusdam?</p>
                        </div>
                    </div>
                    <!--End Testimonial Item-->
                </div>
                <!--End Testimonial Item Col-->

                <!--Start Testimonial Item Col-->
                <div class="col-sm-4">
                    <!--Start Testimonial Item-->
                    <div class="testi-item">
                        <div class="client-details">
                            <img src="{{url('/')}}/assets/frontend/images/team/img-3.png" alt="">
                            <h3 class="text-bold text-center text-upper color-main">Shane Kyle</h3>
                            <h4 class="text-bold text-center">Orein Group</h4>
                        </div>
                        <div class="client-comment">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aspernatur repellat harum libero, voluptates asperiores magni alias eligendi nostrum quibusdam?</p>
                        </div>
                    </div>
                    <!--End Testimonial Item-->
                </div>
                <!--End Testimonial Item Col-->
            </div>
            <!--End Testimonial Item Row-->
        </div>
        <!--End container-->
    </section>
    <!--End Testimonial Section-->

    <!--Start Counter Section-->
    <section class="counter two job">
        <div class="counter-bg-ovelay"></div>
        <!--Start container-->
        <div class="container">
            <div class="row">
                <!--Start Item-->
                <div class="col-sm-3">
                    <div class="counter-item">
                        <i class="fa fa-file text-center"></i>
                        <h1 class="text-center extra integers">1593</h1>
                        <h4 class="text-center">Total Jobs</h4>
                    </div>
                </div>
                <!--End Item-->

                <!--Start Item-->
                <div class="col-sm-3">
                    <div class="counter-item">
                        <i class="fa fa-briefcase text-center"></i>
                        <h1 class="text-center extra integers">1251</h1>
                        <h4 class="text-center">Total Compnaies</h4>
                    </div>
                </div>
                <!--End Item-->

                <!--Start Item-->
                <div class="col-sm-3">
                    <div class="counter-item">
                        <i class="fa fa-users text-center"></i>
                        <h1 class="text-center extra integers">30,123</h1>
                        <h4 class="text-center">Total Applicant</h4>
                    </div>
                </div>
                <!--End Item-->

                <!--Start Item-->
                <div class="col-sm-3">
                    <div class="counter-item">
                        <i class="fa fa-pencil-square-o text-center"></i>
                        <h1 class="text-center extra integers">23,026</h1>
                        <h4 class="text-center">Total Resumes</h4>
                    </div>
                </div>
                <!--End Item-->
            </div>
        </div>
        <!--Start container-->
    </section>
    <!--End Counter Section-->

    <!--Start Latest News Section-->
    <section class="job latest-blog">
        <!--Start container-->
        <div class="container">
            <!--Start Section Title-->
            <div class="section-title">
                <h2 class="text-center text-bold">Latest <span>News</span></h2>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <!--End Section Title-->

            <div class="blog-post-wrap">
                <!--Start Blog Wrap-->
                <div class="row">
                    <!--Start Row-->
                    <div class="col-sm-4">
                        <!-- Start Blog Post Col -->
                        <article class="blog-post">
                            <!--Start Blog Post Article-->
                            <div class="post-media">
                                <a href="blog-single-left-sidebar.html">
                                    <img class="img-responsive" src="{{url('/')}}/assets/frontend/images/job/img-2.jpg" alt="image">
                                </a>
                            </div>
                            <div class="post-meta">
                                <h3 class="post-title text-left">
                                    <a href="blog-single-left-sidebar.html">How to Bulid Your Career?</a>
                                </h3>
                                <span> <a href=""><i class="fa fa-clock-o"></i> 30 March,2017</a></span>
                                <small class="xs-hidden">&#124;</small>
                                <span><a href=""><i class="fa fa-user"></i> John Doe</a></span>
                                <small class="xs-hidden">&#124;</small>
                                <span><a href=""><i class="fa fa-comments-o"></i> Comments: 23</a></span>
                            </div>
                            <div class="post-content-border"></div>
                            <div class="post-content">
                                <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                <a href="blog-single-left-sidebar.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </article>
                        <!-- End Blog Post Article -->
                    </div>
                    <!-- End Blog Post Col -->

                    <div class="col-sm-4">
                        <!-- Start Blog Post Col -->
                        <article class="blog-post">
                            <!--Start Blog Post Article-->
                            <div class="post-media">
                                <a href="blog-single-left-sidebar.html">
                                    <img class="img-responsive" src="{{url('/')}}/assets/frontend/images/job/img-1.jpg" alt="image">
                                </a>
                            </div>
                            <div class="post-meta">
                                <h3 class="post-title text-left">
                                    <a href="blog-single-left-sidebar.html">How to Get a Good Job?</a>
                                </h3>
                                <span> <a href=""><i class="fa fa-clock-o"></i> 30 March,2017</a></span>
                                <small class="xs-hidden">&#124;</small>
                                <span><a href=""><i class="fa fa-user"></i> John Doe</a></span>
                                <small class="xs-hidden">&#124;</small>
                                <span><a href=""><i class="fa fa-comments-o"></i> Comments: 23</a></span>
                            </div>
                            <div class="post-content-border"></div>
                            <div class="post-content">
                                <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                <a href="blog-single-left-sidebar.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </article>
                        <!-- End Blog Post Article -->
                    </div>
                    <!-- End Blog Post Col -->

                    <div class="col-sm-4">
                        <!-- Start Blog Post Col -->
                        <article class="blog-post">
                            <!--Start Blog Post Article-->
                            <div class="post-media">
                                <a href="blog-single-left-sidebar.html">
                                    <img class="img-responsive" src="{{url('/')}}/assets/frontend/images/job/img-3.jpg" alt="image">
                                </a>
                            </div>
                            <div class="post-meta">
                                <h3 class="post-title text-left">
                                    <a href="blog-single-left-sidebar.html">Awesome Tips For Career</a>
                                </h3>
                                <span> <a href=""><i class="fa fa-clock-o"></i> 30 March,2017</a></span>
                                <small class="xs-hidden">&#124;</small>
                                <span><a href=""><i class="fa fa-user"></i> John Doe</a></span>
                                <small class="xs-hidden">&#124;</small>
                                <span><a href=""><i class="fa fa-comments-o"></i> Comments: 23</a></span>
                            </div>
                            <div class="post-content-border"></div>
                            <div class="post-content">
                                <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                <a href="blog-single-left-sidebar.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </article>
                        <!-- End Blog Post Article -->
                    </div>
                    <!-- End Blog Post Col -->
                </div>
                <!--End Row-->
            </div>
            <!-- End Blog Wrap -->
        </div>
        <!--End Contaier-->
    </section>
    <!--End Latest News Section-->
@endsection