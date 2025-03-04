@extends('layouts.app')

@section('content')

<!-- Home Banner Area -->
<section class="home_banner_area">
    <div class="container">
        <div class="row home_banner_inner">
            <!-- Slicer col -->
            <div class="carousel slide banner_slider col-12" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/banner-slider.jpg" alt="First slide">
                        <ul class="special_share">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <div class="slider_caption">
                            <h6 class="wow fadeInUp animated">February 21, 2018 , Updated 3 hours ago</h6>
                            <a href="news-details.html" class="wow fadeInUp animated heding" data-wow-delay="0.2s">Lorem Ipsum is simply dummy text of the printing.</a>
                            <p class="wow fadeInUp animated" data-wow-delay="0.4s">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <a href="#" class="wow fadeInUp animated tag_btn" data-wow-delay="0.6s">Investing</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/banner-slider-2.jpg" alt="Second slide">
                        <ul class="special_share">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <div class="slider_caption">
                            <h6 class="wow fadeInUp animated">February 21, 2018 , Updated 3 hours ago</h6>
                            <a href="news-details.html" class="wow fadeInUp animated heding" data-wow-delay="0.2s">Contrary to popular belief, Lorem Ipsum is not simply random text. </a>
                            <p class="wow fadeInUp animated" data-wow-delay="0.4s">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <a href="#" class="wow fadeInUp animated tag_btn" data-wow-delay="0.6s">Investing</a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href=".html" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href=".html" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
            <!-- belarus_items -->
            <div class="col-md-6">
                <div class="belarus_items">
                    <img src="images/banner-item-1.jpg" alt="">
                    <div class="belarus_content">
                        <h6 class="wow fadeInUp">March 15, 2018</h6>
                        <a href="news-details.html" class="heding wow fadeInUp" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipiscing elit,</a>
                        <a href="#" class="wow fadeInUp tag_btn" data-wow-delay="0.4s">Finance</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="belarus_items">
                    <img src="images/banner-item-2.jpg" alt="">
                    <div class="belarus_content">
                        <h6 class="wow fadeInUp">March 15, 2018</h6>
                        <a href="news-details.html" class="heding wow fadeInUp" data-wow-delay="0.2s">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</a>
                        <a href="#" class="wow fadeInUp tag_btn" data-wow-delay="0.4s">Business</a>
                    </div>
                </div>
            </div>
            <!-- End belarus_items -->
        </div>
        <ul class="row magazine">
            <li class="col-md-4 col-sm-6"><a href="news-details.html">Earned $9,000,000 per Year with a Magazine Wesbite</a></li>
            <li class="col-md-4 col-sm-6"><a href="news-details.html">The man who builds up private libraries - book by rare book</a></li>
            <li class="col-md-4 col-sm-6"><a href="news-details.html">Futures Firm Cboe Filed for 6 Bitcoin ETFs This Week</a></li>
        </ul>
    </div>
</section>
<!-- End Home Banner Area -->

<!-- Post section -->
<section class="post_section">
    <div class="container">
        <div class="row post_section_inner">
            <!-- Left_sidebar -->
            <div class="col-lg-8 left_sidebar">
                <!-- Tranding Area Post -->
                <div class="row tranding_post_area">
                    <div class="col-12 tranding_tittle">
                        <h2>BUSINESS Post</h2>
                        <a href="news.html">View More <i class="fa fa-arrow-right"></i></a>
                    </div>
                    <!-- Tranding_post -->
                    <div class="col-md-6">
                        <div class="tranding_post">
                            <a href="news-details.html" class="post_img">
                                <img src="images/post/business-post-1.jpg" alt="">
                                <span class="tag_btn">Finance</span>
                            </a>
                            <div class="post_content">
                                <a href="news-details.html" class="t_heding">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</a>
                                <h6>Dec 22, 2018 at 19:35 <span>|</span><a href="#">Mahfuz Riad</a></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Tranding_post -->
                    <div class="col-md-6">
                        <div class="tranding_post">
                            <a href="news-details.html" class="post_img">
                                <img src="images/post/business-post-2.jpg" alt="">
                                <span class="tag_btn">Trading</span>
                            </a>
                            <div class="post_content">
                                <a href="news-details.html" class="t_heding">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                <h6>Dec 22, 2018 at 19:35 <span>|</span><a href="http://emran-khan.com/">Emran Khan</a></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Tranding_post no img -->
                    <div class="col-md-6">
                        <div class="tranding_post post_bg">
                            <a href="news-details.html" class="t_heding">A Love Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                            <h6>Dec 22, 2018 at 19:35 <span>|</span><a href="http://emran-khan.com/">Emran Khan</a></h6>
                            <span class="tag_btn">Travel</span>
                        </div>
                    </div>
                    <!-- Tranding_post no img -->
                    <div class="col-md-6">
                        <div class="tranding_post post_bg">
                            <a href="news-details.html" class="t_heding">Inside Sports Building a Magazine for the Digital Eye Strain</a>
                            <h6>Dec 22, 2018 at 19:35 <span>|</span><a href="http://emran-khan.com/">Emran Khan</a></h6>
                            <span class="tag_btn">Tech</span>
                        </div>
                    </div>
                </div>
                <!-- Feature Post Area-->
                <div class="row feature_post_area">
                    <div class="col-12">
                        <div class="feature_tittle">
                            <h2>Travel Post</h2>
                            <a href="news-2.html">View More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="media feature_post">
                            <div class="feture_img">
                                <a href="news-details.html"><img src="images/post/travel-post-1.jpg" alt=""></a>
                                <ul class="special_share">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="media-body feture_content">
                                <a href="news-details.html" class="f_heding">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                <h6>Dec 10, 2018 at 19:35 <span>|</span><a href="http://emran-khan.com/">Emran Khan</a></h6>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="media feature_post">
                            <div class="feture_img">
                                <a href="news-details.html"><img src="images/post/travel-post-2.jpg" alt=""></a>
                                <ul class="special_share">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="media-body feture_content">
                                <a href="news-details.html" class="f_heding">Bitcoin ETFs seek approval of skeptical <br> regulator</a>
                                <h6>Jan 10, 2018 at 19:35 <span>|</span><a href="http://emran-khan.com/">Emran Khan</a></h6>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="media feature_post border-0">
                            <div class="feture_img">
                                <a href="news-details.html"><img src="images/post/travel-post-3.jpg" alt=""></a>
                                <ul class="special_share">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="media-body feture_content">
                                <a href="news-details.html" class="f_heding">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                <h6>Jan 10, 2018 at 19:35 <span>|</span><a href="http://emran-khan.com/">Emran Khan</a></h6>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Watch It Area-->
                <div class="row watch_it_area">
                    <!-- font_load_post -->
                    <div class="col-12">
                        <div class="font_load_post">
                            <img src="images/post/font-load-1.jpg" alt="">
                            <div class="post_caption">
                                <a href="#" class="wow fadeInUp tag_btn">Travel</a>
                                <a href="news-details.html" class="wow fadeInUp heding" data-wow-delay="0.2s">Why It Pays to Front-Load Your 529 Plan</a>
                            </div>
                        </div>
                    </div>

                    <!--ethereum_price_posts -->
                    <div class="col-12">
                        <div class="ethereum_price_posts">
                            <a href="#" class="tag_btn">Travel</a>
                            <a href="news-details.html" class="ep_heding">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent placerat turpis nec lectus congue, sed varius ligula iaculis. Orci varius natoque penatibus.</p>
                            <img src="images/post/font-load-2.jpg" alt="">
                        </div>
                    </div>

                    <!-- Subscribe Area -->
                    <div class="col-12">
                        <div class="subscribe_area">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email address">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Subscribe</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="feature_tittle">
                            <h2>Watch It</h2>
                            <a href="video-details.html">View More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="watch_video">
                            <a href="video-details.html" class="video_thumbnail">
                                <img src="images/post/wathc-1.jpg" alt="">
                                <span class="play_btn"><i class="flaticon-play-button">3.16</i></span>
                            </a>
                            <a href="video-details.html" class="video_heding">Nullam neque leo, placerat eu ante vitae, vehicula rhoncus quam.</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="watch_video">
                            <a href="video-details.html" class="video_thumbnail">
                                <img src="images/post/wathc-2.jpg" alt="">
                                <span class="play_btn"><i class="flaticon-play-button">5.16</i></span>
                            </a>
                            <a href="video-details.html" class="video_heding">Nullam neque leo, placerat eu ante vitae.</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="watch_video">
                            <a href="video-details.html" class="video_thumbnail">
                                <img src="images/post/wathc-3.jpg" alt="">
                                <span class="play_btn"><i class="flaticon-play-button">2.56</i></span>
                            </a>
                            <a href="video-details.html" class="video_heding">Kristin Addis, our solo female travel expert,</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="watch_video">
                            <a href="video-details.html" class="video_thumbnail">
                                <img src="images/post/wathc-4.jpg" alt="">
                                <span class="play_btn"><i class="flaticon-play-button">4.56</i></span>
                            </a>
                            <a href="video-details.html" class="video_heding">Nullam neque leo, placerat eu ante vitae, vehicula.</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tranding_post wathc_text">
                            <a href="news-details.html" class="t_heding">Stocks Climb as Yields Hold Dollar Falls: Markets Wrap</a>
                            <h6><span class="tag_btn">Technology</span> january 21, 2018</h6>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tranding_post wathc_text">
                            <a href="news-details.html" class="t_heding">Nullam neque leo, placerat eu ante vitae, vehicula.</a>
                            <h6><span class="tag_btn">Trending</span> April 25, 2018</h6>
                        </div>
                    </div>
                </div>

                <!-- Our Latest  Articles -->
                <div class="row tranding_post_area fashion_post">
                    <div class="col-12">
                        <div class="feature_tittle">
                            <h2>Fashion</h2>
                            <a href="news-2.html">View More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Tranding_post -->
                    <div class="col-md-6">
                        <div class="tranding_post">
                            <a href="news-details.html" class="post_img">
                                <img src="images/post/fashion-1.jpg" alt="">
                                <span class="tag_btn">Fashion</span>
                            </a>
                            <div class="post_content">
                                <a href="news-details.html" class="t_heding">Nam convallis lacus volutpat risus luctus, et consectetur massa pharetra.</a>
                                <h6>Dec 22, 2018 at 19:35 <span>|</span><a href="#">Mahfuz Riad</a></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Tranding_post -->
                    <div class="col-md-6">
                        <div class="tranding_post">
                            <a href="news-details.html" class="post_img">
                                <img src="images/post/fashion-2.jpg" alt="">
                                <span class="tag_btn">Trading</span>
                            </a>
                            <div class="post_content">
                                <a href="news-details.html" class="t_heding">Trine Kjer has been running her blog for approximately ten years</a>
                                <h6>Feb 22, 2018 at 19:35 <span>|</span><a href="http://emran-khan.com/">Emran Khan</a></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Tranding_post no img -->
                    <div class="col-md-6">
                        <div class="tranding_post text_post">
                            <span class="tag_btn">Fashion</span>
                            <a href="news-details.html" class="t_heding">Nam convallis lacus volutpat risus luctus, et consectetur</a>
                            <h6>Jan 10, 2018 at 19:35 <span>|</span><a href="http://emran-khan.com/">Emran Khan</a></h6>
                        </div>
                    </div>
                    <!-- Tranding_post no img -->
                    <div class="col-md-6">
                        <div class="tranding_post text_post">
                            <span class="tag_btn">Tech</span>
                            <a href="news-details.html" class="t_heding">Maecenas convallis ante nisi, et finibus ante porta in. </a>
                            <h6>Jan 12, 2018 at 19:35 <span>|</span><a href="http://emran-khan.com/">Emran Khan</a></h6>
                        </div>
                    </div>

                    <!-- font_load_post -->
                    <div class="col-12">
                        <div class="font_load_post m-0 ">
                            <img src="images/post/font-load-3.jpg" alt="">
                            <div class="post_caption">
                                <a href="#" class="wow fadeInUp tag_btn">Travel</a>
                                <a href="news-details.html" class="wow fadeInUp heding heding_bg" data-wow-delay="0.2s">Neque porro quisquam est qui dolorem</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End left_sidebar -->
            <div class="col-lg-4 right_sidebar">
                <div class="btc_accordion">
                    <div class="item">
                        <a href="#" data-toggle="collapse" data-target="#collapseOne">Bitcoin(24h)</a>
                        <div id="collapseOne" class="collapse show" data-parent=".btc_accordion">
                            <div class="accordion_content">
                                <h2>$15212.35</h2>
                                <h4>EUR: €12632.32 <br>GBP: £11213.76</h4>
                                <ul class="btc_list">
                                    <li>$15212</li>
                                    <li>$14212</li>
                                    <li>$13212</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseTwo">Etherume <span>$740.34</span></a>
                        <div id="collapseTwo" class="collapse" data-parent=".btc_accordion">
                            <div class="accordion_content">
                                <h2>$15212.35</h2>
                                <h4>EUR: €12632.32 <br>GBP: £11213.76</h4>
                                <ul class="btc_list">
                                    <li>$15212</li>
                                    <li>$14212</li>
                                    <li>$13212</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree">Zcash <span>$546.83</span></a>
                        <div id="collapseThree" class="collapse" data-parent=".btc_accordion">
                            <div class="accordion_content">
                                <h2>$15212.35</h2>
                                <h4>EUR: €12632.32 <br>GBP: £11213.76</h4>
                                <ul class="btc_list">
                                    <li>$15212</li>
                                    <li>$14212</li>
                                    <li>$13212</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Latest Bitcoin News -->
                <div class="latest_news_widget">
                    <h2>Trending News</h2>
                    <div class="widget">
                        <a href="news-details.html"><img src="images/post/lnw-1.jpg" alt=""></a>
                        <a href="news-details.html" class="w_heding">Envion – Digital Currency Mint in Exploits World’s Lowest Cost Power</a>
                    </div>
                    <div class="widget">
                        <a href="news-details.html"><img src="images/post/lnw-2.jpg" alt=""></a>
                        <a href="news-details.html" class="w_heding">Bitcoin Cash Price Hits Record $2,500 to pierce $300 billion for the first time</a>
                    </div>
                    <div class="widget border-0">
                        <a href="news-details.html"><img src="images/post/lnw-3.jpg" alt=""></a>
                        <a href="news-details.html" class="w_heding">HOLD the Kitten! New Year Gift for Every Crypto Cuttie</a>
                    </div>
                    <a href="news.html" class="load_more_btn">Load more..</a>
                </div>
                <!-- Text widget -->
                <div class="text_widget_area">
                    <div class="text_widget">
                        <a href="news-details.html">Nam ornare ultricies dui in finibus. Vivamus in neque vel ipsum accumsan pharetra. </a>
                        <h6>10:29, Press Releases</h6>
                    </div>
                    <div class="text_widget">
                        <a href="news-details.html">Phasellus mauris tellus, suscipit ac lectus vitae, faucibus vehicula diam. </a>
                        <h6>12:59, Press Releases</h6>
                    </div>
                    <div class="text_widget">
                        <a href="news-details.html">Buffett Warns Investors That Safe-Looking Bonds Can Be Risky</a>
                        <h6>2:37, Press Releases</h6>
                    </div>
                    <div class="text_widget m-0">
                        <a href="news-details.html">Nam ornare ultricies dui in finibus. Vivamus in neque vel ipsum accumsan pharetra. </a>
                        <h6 class="padding-bottom-0">11:38, Press Releases</h6>
                    </div>
                </div>
                <!-- Advertisement -->
                <div class="advertisement">
                    <a href="#"><img src="images/advertisement-1.jpg" alt=""></a>
                </div>
                <!-- Video widget -->
                <div class="video_widget">
                    <div class="watch_video">
                        <a href="video-details.html" class="video_thumbnail">
                            <img src="images/post/wathc-5.jpg" alt="">
                            <span class="play_btn"><i class="flaticon-play-button">5.16</i></span>
                        </a>
                        <a href="video-details.html" class="video_heding">The easiest way to buy Bitcoin and Ethereum</a>
                    </div>
                </div>
                <!-- Advertisement -->
                <div class="advertisement_2">
                    <a href="#">
                        <img src="images/advertisement-2.jpg" alt="">
                    </a>
                </div>
                <!-- Social Sidget -->
                <ul class="social_widget">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                </ul>
                <!-- Tabs Widget -->
                <div class="tabs_widge">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="active" id="nav-home-tab" data-toggle="tab" href="#technology" role="tab">Technology</a>
                        <a id="nav-profile-tab" data-toggle="tab" href="#gaming" role="tab">Gaming</a>
                    </div>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active text_widget_area" id="technology" role="tabpanel">
                            <!-- Text widget -->
                            <div class="text_widget">
                                <a href="news-details.html">How to secure peace of mind and income that beats banks</a>
                                <h6>10:29, Press Releases <span class="tech">Technology</span></h6>
                            </div>
                            <div class="text_widget">
                                <a href="news-details.html">Token Launch Date Announced for Dether, World’s First Peer-To-Peer Ecosystem of Crypto Buyers, Sellers, and Shops</a>
                                <h6>12:59, Press Releases <span class="hot">Hot</span></h6>
                            </div>
                            <div class="text_widget">
                                <a href="news-details.html">Buffett Warns Investors That Safe-Looking Bonds Can Be Risky</a>
                                <h6>2:37, Press Releases <span class="gaming">Gaming</span></h6>
                            </div>
                            <div class="text_widget m-0">
                                <a href="news-details.html">Falls Below $16,400, Loses Nearly 15% in Major Correction</a>
                                <h6 class="padding-bottom-0">11:38, Press Releases <span>Fashion</span></h6>
                            </div>
                        </div>
                        <div class="tab-pane fade text_widget_area" id="gaming" role="tabpanel">
                            <!-- Text widget -->
                            <div class="text_widget">
                                <a href="news-details.html">Buffett Warns Investors That Safe-Looking Bonds Can Be Risky</a>
                                <h6>2:37, Press Releases <span class="gaming">Gaming</span></h6>
                            </div>
                            <div class="text_widget m-0">
                                <a href="news-details.html">Falls Below $16,400, Loses Nearly 15% in Major Correction</a>
                                <h6 class="padding-bottom-0">11:38, Press Releases <span>Fashion</span></h6>
                            </div>
                            <div class="text_widget">
                                <a href="news-details.html">How to secure peace of mind and income that beats banks</a>
                                <h6>10:29, Press Releases <span class="tech">Technology</span></h6>
                            </div>
                            <div class="text_widget">
                                <a href="news-details.html">Token Launch Date Announced for Dether, World’s First Peer-To-Peer Ecosystem of Crypto Buyers, Sellers, and Shops</a>
                                <h6>12:59, Press Releases <span class="hot">Hot</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Post section -->

@endsection