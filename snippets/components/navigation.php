<!-- Header Upper -->
<div class="header-upper">
    <div class="auto-container">
        <div class="inner-container clearfix">

            <div class="pull-left logo-box">
                <div class="logo"><a href="index.html"><img src="/resources/images/logo.png" alt="" title=""></a></div>
            </div>

            <div class="nav-outer pull-left clearfix">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse show collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li class="<?= checkNav('home', $page); ?>"><a href="/">Home</a></li>
                            <li class="<?= checkNav('about', $page); ?>"><a href="about">About</a></li>
                            <li class="<?= checkNav('service', $page); ?> "><a href="service">Service</a></li>
                            <li class="<?= checkNav('project', $page); ?>"><a href="project">Projects</a></li>
                            <li class="<?= checkNav('blog', $page); ?>"><a href="blog">Blog</a></li>
                            <li class="<?= checkNav('contact', $page); ?>"><a href="contact">Contact</a></li>
                        </ul>
                    </div>

                </nav>

            </div>

            <!-- Outer Box -->
            <div class="outer-box">
                <!-- Search Btn -->
                <div class="search-box-btn search-box-outer"><span class="icon icofont-search"></span></div>
                <!-- Mobile Navigation Toggler -->
                <div class="mobile-nav-toggler"><span class="icon ti-menu"></span></div>
            </div>

        </div>
    </div>
</div>
<!--End Header Upper-->

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><span class="icon lnr lnr-cross"></span></div>

    <nav class="menu-box">
        <div class="nav-logo"><a href="/"><img src="/resources/images/logo.png" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
    </nav>
</div><!-- End Mobile Menu -->
