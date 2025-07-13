<?php
    include('import/middleware.php');
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
        <?php include('components/registration-success.php');?>
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
               $("#reg-btn").html('<img src="spinner.gif" style="width:20px" /> REGISTERING... <i class="fas fa-angle-right"></i>');
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