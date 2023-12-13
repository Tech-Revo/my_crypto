<header class="header">
    <!-- header top blue -->
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="full">
                        <div class="country_blog">
                            <span>Country language</span>
                            <span>
                                <select>
                                    <option> --Language-- </option>
                                    <option> English (Uk) </option>
                                    <option> Nepali </option>
                                </select>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-3 left_logo_design">
                    <div class="full">
                        <div class="logo">
                            <a href="index.html"><img class="img-responsive" src="{{ url('assets/img/logo_transparent.png') }}"
                                    alt="#" style="width: 40%" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <ul class="crypto_update">
                            <li>
                                <span class="head_cy">BTC</span>
                                <span class="cont_cy">$ 54,220.9 <span class="update green_up"><i
                                            class="fa fa-arrow-up"></i> 7.76%</span></span>
                            </li>
                            <li>
                                <span class="head_cy">ETH</span>
                                <span class="cont_cy">$ 1,836.5 <span class="update green_up"><i
                                            class="fa fa-arrow-up"></i> 8.05%</span></span>
                            </li>
                            <li>
                                <span class="head_cy">LTC</span>
                                <span class="cont_cy">$ 199.80 <span class="update green_up"><i
                                            class="fa fa-arrow-up"></i> 5.14%</span></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="main_menu_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="main_menu float-left">
                        <div class="menu">
                            <ul class="clearfix">
                                <li class="active"><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Services</a></li>
                                <li>
                                    <a href="#">Pages</a>
                                    <ul>
                                        <li><a href="#">- Team</a></li>
                                        <li><a href="#">- Wallets</a></li>
                                        <li><a href="#">- Overview</a></li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                    <ul>
                                        <li><a href="#">- Blog list</a></li>

                                    </ul>
                                </li>
                                <li><a href="#">Contact</a></li>

                                <li><a href="{{url('/login')}}" class="btn-danger text-light px-2 justify-content-end">login</a></li>

                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
