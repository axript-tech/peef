<?php
    include('import/middleware.php');
    $pageTitle= "Contact Us"
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



        <!-- CONTACT SECTION START -->
        <?php include('components/contact-section.php');?>
        <!-- CONTACT SECTION END -->


    


        <!-- SPEAKERS SECTION START -->
        <?php include('components/map.php');?>
        <!-- SPEAKERS SECTION END -->


       


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