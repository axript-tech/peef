<?php
    include('import/middleware.php');
    $pageTitle= "About us"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('import/headscripts.php');?>
</head>
<body>
    <?php include('components/header.php');?> 

    <main>
        <!-- BREADCRUMB SECTION START -->
        <?php include('components/breadcrumbs-section.php');?>
        
        <!-- BREADCRUMB SECTION END -->



        <!-- ABOUT SECTION START -->
        <?php include('components/about-about.php');?>
        <!-- ABOUT SECTION END -->


        <!-- HISTORY SECTION START -->
        <?php include('components/gbee-history.php');?>
        
        <!-- HISTORY SECTION END -->


        <!-- SPEAKERS SECTION START -->
        <?php include('components/speakers.php');?>
        <!-- SPEAKERS SECTION END -->


        <!-- CTA SECTION START -->
        <?php include('components/CTA.php');?>
        <!-- CTA SECTION END -->


        <!-- FEATURES SECTION START -->
        <?php include('components/features.php');?>
        <!-- FEATURES SECTION END -->


        <!-- PRICING SECTION START -->
        <?php include('components/pricing.php');?>
        <!-- PRICING SECTION END -->


        <!-- GALLERY SECTION START -->
        <?php include('components/gallery.php');?>
        <!-- GALLERY SECTION END -->


        <!-- TESTIMONIAL SECTION START -->
        <?php //include('components/testimonial.php');?>
        <!-- TESTIMONIAL SECTION END -->


        <!-- SPONSORS SECTION START -->
        <?php include('components/sponsors.php');?>
        <!-- SPONSORS SECTION END -->


        <!-- BLOG/NEWS SECTION START -->
        <?php //include('components/blog.php');?>
        <!-- BLOG/NEWS SECTION END -->
    </main>

    <?php include('components/footer.php');?> 
    
    <?php include('import/footscripts.php');?> 
</body>
</html>