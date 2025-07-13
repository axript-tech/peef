<div class="py-[120px] xl:py-[80px] md:py-[60px]">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
        <div class="grid grid-cols-1 md:grid-cols-1 gap-[60px] xl:gap-[40px] items-center">
            <!-- left side contact infos -->
            <div>
                <div class="text-center p-5 m-5 text-[20px]" style="background-color: rgb(0 35 159); margin-bottom: 0; color:white; padding:5px;">
                    <h4><i class="fa fa-check-circle-o"></i> Account Regisration Successful!</h4>
                    <h4>
                        We received your application. A mail with further instructions has been sent to the email address 
                        <b style="color:yellow"><?php echo $_GET['uemail'];?></b>. 
                        <br><br><div class="p-1 px-5" style="background: white; color: text; border-radius:20px;"><b style="color:black">If you don't receive the instruction<b>: <b style="color:red">please check your spam<b></div>
                        <br><br><a href="login.php" style="background:white;color:blue; padding:3px; margin-bottom:5px; border-radius:20px" class="p-2">Go to Login Page</a><br>
                    </h4>   
                </div>
            </div>
            <!-- right side contact form -->
        </div>
    </div>
</div>