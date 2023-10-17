<header class="site-header header-one">
    <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky original">
        <div class="container clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="logo-box clearfix">
                <a class="navbar-brand" href="#">
                    <img src="images/logo.jpg" class="main-logo img-fluid d-none d-md-block d-xl-block d-lg-block" alt="AKASH GROUP OF INSTITUTIONS (AGI)" style="">
                    <img src="images/akashgroup-logo.PNG" class="main-logo img-fluid d-md-none d-xl-none d-lg-none" alt="AKASH GROUP OF INSTITUTIONS (AGI)" style="">
                </a>

                <button class="menu-toggler" data-target=".header-one .main-navigation">
                    <span class="fa fa-bars"></span>
                </button>
            </div><!-- /.logo-box -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="main-navigation">
                <ul class="navigation-box one-page-scroll-menu">
                    <li class="scrollToLink current">
                        <a href="#home">Home</a>
                    </li>
                    <li class="scrollToLink">
                        <a href="#aboutus">About Us</a>
                    </li>
                    <li class="scrollToLink">
                        <a href="#programmes">Programmes</a>
                    </li>
                    <li class="scrollToLink">
                        <a href="#placement">Placement</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</header>
<style>
/* Initially hide the main-logo.png */
.main-logo.img-fluid.d-md-none.d-xl-none.d-lg-none {
    display: none;
}

/* Show main-logo.png when screen size is reduced */
@media (max-width: 991px) {
    .main-logo.img-fluid.d-md-none.d-xl-none.d-lg-none {
        display: block;
    }
    .main-logo.img-fluid.d-none.d-md-block.d-xl-block.d-lg-block {
        display: none;
    }
}
</style>
