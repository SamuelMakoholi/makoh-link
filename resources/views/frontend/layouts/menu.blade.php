<!--============================
    MAIN MENU START
==============================-->
<nav class="wsus__main_menu d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="relative_contect d-flex justify-content-between align-items-center">

                    <!-- Left Menu -->
                    <ul class="wsus__menu_item">
                        <li><a class="active" href="index.html">Home</a></li>
                        <li><a href="daily_deals.html">Browse Providers</a></li>
                        <li><a href="daily_deals.html">Daily Deals</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="privacy.html">Privacy Policy</a></li>
                    </ul>

                    <!-- Right Menu -->
                    <ul class="wsus__menu_item wsus__menu_item_right d-flex align-items-center">
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="dashboard.html">My Account</a></li>
                        <li>
                            <a href="{{ route('login')}}" class="btn login-btn">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<!--============================
    MAIN MENU END
==============================-->

<!--============================
    MOBILE MENU START
==============================-->
<section id="wsus__mobile_menu">
    <span class="wsus__mobile_menu_close"><i class="fal fa-times"></i></span>
    <form>
        <input type="text" placeholder="Search">
        <button type="submit"><i class="far fa-search"></i></button>
    </form>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="vendor.html">Vendor</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="daily_deals.html">Campaign</a></li>
        <li><a href="track_order.html">Track Order</a></li>
        <li><a href="daily_deals.html">Daily Deals</a></li>
    </ul>
</section>
<!--============================
    MOBILE MENU END
==============================-->
