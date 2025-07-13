<?php
    include('import/middleware.php');
    include('import/login-guard.php');
    $pageTitle= "Register"
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
        <?php include('components/register-section.php');?>
        <!-- CONTACT SECTION END -->


    


        <!-- SPEAKERS SECTION START -->
   
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
     <script>
      window.onload = function () {
         var txtPassword = document.getElementById("upass");
         var txtConfirmPassword = document.getElementById("cpass");
         txtPassword.onchange = ConfirmPassword;
         txtConfirmPassword.onkeyup = ConfirmPassword;
         function ConfirmPassword() {
            txtConfirmPassword.setCustomValidity("");
            if (txtPassword.value != txtConfirmPassword.value) {
               txtConfirmPassword.setCustomValidity("Passwords do not match.");
            }
        }
      }
      $(".error").fadeOut();
      //Submission Module
      $(document).on('submit', '#reg', function(event){
         event.preventDefault();
         var uemail = $("#email").val();
         var data = $("#reg").serialize();

         $.ajax({
            type : 'POST',
            url  : 'apis/process-reg.php',
            data : data,
            beforeSend: function()
            {
               $(".error").fadeOut();
               $("#reg-btn").html(`
               <svg aria-hidden="true" role="status" width="15px" class="inline-block w-4 h-4 me-3 text-white animate-spin text-center" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                  <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
               </svg> 
                REGISTERING... <i class="fas fa-angle-right"></i>
               `
            );
            },
            success :  function(response)
            {
               if(response=="successful"){
                  $("#reg-btn").html('REGISTER <i class="fas fa-angle-right"></i>');
                  $("#contact").html('<section class="content"><div class="pad margin no-print"><div class="callout callout-primary" style="background-color: white; margin-bottom: 0!important;"><h4><i class="fa fa-check-circle-o"></i> Account Application Received</h4><h4>We received your application. A mail with further instructions has been sent to the email address <b style="color:blue">'+uemail+'</b>. Please check your email to activate your account.  </h4>   </div></div><div class="box box-warning"><div class="box-header with-border text-center" ><h3 class="box-title"> <i class="fa fa-ban"></i> <br>If You Do not Receive the Instructions </h3></div><div class="box-body"><h4 class="" style="text-align: justify; padding: 20px 50px">If you do not receive our mail with instruction on how to create an account, please read the following information.Our mail server normally sends all mail within a few seconds. The following is an incomplete list of possible reasons for the problem.<br><br><b class="text-red">Incorrectly typed email address</b><br>This is still the most likely cause of delays.<br><br><b class="text-red">Slow mail processing</b><br>Some mail servers process mail for a long time. For example, your mail server may spend a lot of time checking incoming mail for spam.<br><br><b class="text-red">Reply-me" mail protection.</b><br>Some mailers, when receiving a mail from an unknown sender, ask the sender to send a mail with specific content to ensure that it has been sent by a human. Account-related emails in CESAR are sent by a computer program, so if your email address uses such a protection, you will never get our mail. If you have such a protection and it is configurable, configure it to accept mail from the domain sargassumresearch.org.<br><br><b class="text-red">Mail box problems and quotas</b><br>Some mail sent by CESAR bounces back because the mail box of the receiver is over quota.<br><br><b class="text-red">Anti-spam filters</b><br>It is possible that your spam filters will classify our mail as spam. Please check your spam mail boxes.<br><br><b class="text-red">General connection problems</b><br>There might be general connection problems, for example your mail server may be unreachable for a long time.Unfortunately, we have no resources to cope with all possible kinds of mail server (mis)behavior. If you believe you have a problem related to your mail server and want to solve it quickly, try to get and use an email address from one of major mail hosts, such as a Google Mail, Yahoo Mail, or Hotmail. You will be able to change your email adress in CESAR or have multiple email addresses associated with your account later.You can repeat your application at any time. Another email will be sent to you.</h4><a href="./login.php"><button class="btn btn-primary">< Goto Login Page</button></a></div></div> </div></div></section>');
                  setTimeout(' window.location.href = "registration-success.php?uemail='+uemail+'"; ',1000);
                  
               }
               else{
                  $(".error").fadeIn(1000, function(){
                  $(".error").html(`<b style="color:red; background:white; padding:3px;"><i class="fa fa-warning" style="color:red"></i></b> <br>${response}`);
                     $("#reg-btn").html('REGISTER <i class="fas fa-angle-right"></i>');
                  });
               }
            }
         });
      });








      new WOW().init();
   </script>
</body>
</html>