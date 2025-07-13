<?php
    include('import/middleware.php');
    include('import/login-guard.php');
    $pageTitle= "Login"
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
        <?php include('components/login-section.php');?>
        <!-- CONTACT SECTION END -->


    





       


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
    <script>
         $(".error").fadeOut();
        //Login Module
        $(document).on('submit', '#login-form', function(event){
            event.preventDefault();
            var data = $("#login-form").serialize();
            $.ajax({
                type : 'POST',
                url  : 'apis/process-login.php',
                data : data,
                beforeSend: function()
                {
                    $(".error").fadeOut();
                    $("#login-btn").html(`
                       
                        <svg aria-hidden="true" role="status" width="15px" class="inline-block w-4 h-4 me-3 text-white animate-spin text-center" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                        </svg> 
                        LOGGING IN... <span class="icon pl-[10px]"></span> 
                    
                    `);
                },
                success :  function(response)
                {
                    //alert(response)
                    if(response=="success")
                    {
                        $("#login-btn").html('<img src="spinner.gif" style="width:20px" /> LOGGING IN... <i class="fas fa-angle-right"></i>');
                        setTimeout(' window.location.href = "welcome.php"; ',2000);
                    }
                    else
                    {
                         $(".error").fadeIn(1000, function(){
                            $(".error").html(`<b style="color:red; background:white; padding:3px;"><i class="fa fa-warning" style="color:red"></i></b> <br>${response}`);
                             $("#login-btn").html('LOGIN <i class="fas fa-angle-right"></i>');
                        });
                    }
                },error:function(response){
                    //alert(response)
                }
                
            
            });

        });






        new WOW().init();
   </script>
</body>
</html>