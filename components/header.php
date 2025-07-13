<!-- overlay -->
<div class="et-overlay group">
    <div class="opacity-0 pointer-events-none group-[.active]:opacity-100 group-[.active]:pointer-events-auto transition ease-linear duration-300  bg-etBlack/80 fixed inset-0 z-[60]"></div>
</div>
<!-- overlay -->

<!-- sidebar -->
<div class="et-sidebar group">
    <div class=" group-[.active]:translate-x-0 translate-x-[100%] transition-transform ease-linear duration-300 fixed right-0 w-full max-w-[25%] xl:max-w-[30%] lg:max-w-[40%] md:max-w-[50%] sm:max-w-[60%] xxs:max-w-full bg-[#18377e] h-full z-[100] overflow-auto p-[50px] lg:p-[30px] space-y-[40px]">
        <!-- heading -->
        <div class="et-sidebar-heading">
            <div class="logo flex justify-between items-center">
                <a href="index.php"><img src="assets/img/gg.png" alt="logo"></a>

                <button type="button" class="et-sidebar-close-btn border border-white/50 w-[45px] aspect-square shrink-0 text-white text-[22px] rounded-full hover:text-etBlue hover:bg-white"><i class="fa-solid fa-xmark"></i></button>
            </div>
        </div>

        <!-- mobile menu -->
        <div class="et-header-nav-in-mobile"></div>
    </div>
</div>

<!-- HEADER SECTION START -->
<header class="et-header to-be-fixed py-[30px] xxs:py-[20px] fixed top-0 w-full px-[155px] xxxl:px-[100px] xxl:px-[40px] xs:px-[20px] z-50">
    <div class="flex justify-between items-center">
        <!-- logo -->
        <div class="logo shrink-0">
            <a href="index.php">
                <img src="assets/img/gg.png" width="200" style="box-shadow: 40px" alt="logo">
            </a>
        </div>

        <div class="et-header-right flex items-center gap-[60px] xl:gap-[30px]">
            <div class="to-go-to-sidebar-in-mobile flex md:flex-col md:items-start items-center gap-[100px] xl:gap-[30px] md:gap-y-[15px]">
                <!-- nav -->
                <ul class="et-header-nav flex md:flex-col gap-x-[43px] xl:gap-x-[33px] font-kanit text-[17px] font-normal">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About us</a></li>
                   <!-- <li class="has-sub-menu relative">
                        <a role="button">Events</a>

                        <ul class="et-header-submenu">
                            <li><a href="events.php">All Events</a></li>
                            <li><a href="event-details.php">Events Details</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu relative">
                        <a role="button">Pages</a>

                        <ul class="et-header-submenu">
                            <li><a href="pricing.php">Pricing Plan</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="faq.php">FAQ</a></li>
                            <li><a href="sponsor.php">Sponsors</a></li>
                            <li><a href="venue.php">Venue</a></li>
                            <li><a href="404.php">Error 404</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu relative">
                        <a role="button">Team</a>

                        <ul class="et-header-submenu">
                            <li><a href="team.php">Team Members</a></li>
                            <li><a href="team-member-details.php">Team Details</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu relative">
                        <a role="button">News</a>

                        <ul class="et-header-submenu">
                            <li><a href="news.php">All News</a></li>
                            <li><a href="news-details.php">News Details</a></li>
                        </ul>
                    </li>-->
                    <li><a href="contact.php">Contact</a></li>
                </ul>

                <!-- button -->
                <?php include('login-status.php');?>
               
            </div>

            <!-- mobile menu button -->
            <button type="button" class="et-mobile-menu-open-btn hidden md:inline-block bg-etBlue rounded-full w-[50px] aspect-square text-white text-[18px] hover:bg-etBlue"><i class="fa-solid fa-bars"></i></button>
        </div>
    </div>
</header>
<!-- HEADER SECTION END -->
