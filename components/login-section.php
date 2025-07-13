<div class="py-[120px] xl:py-[80px] md:py-[60px]">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
        <div class="grid grid-cols-2 md:grid-cols-1 gap-[60px] xl:gap-[40px] items-center">
            <!-- left side contact infos -->
            <div>
                <div class="bg-etBlue p-[40px] sm:p-[30px] space-y-[24px] text-[16px]">
                    <!-- single contact info -->
                    <div class=" items-center text-white border-b border-white/30 last:border-0 last:pb-0 text-center">
                            <div class="txt">
                                <span class="font-light text-center">Not registered?</span>
                                <h4 class="font-semibold text-[24px] text-center py-[5px]">
                                    <a href="register.php" class="bg-white h-[45px]  px-[24px] py-[14px] rounded-[10px] text-[16px] font-medium text-etBlue hover:bg-etBlack">
                                        Register <span class="icon pl-[10px]"><i class="fa-solid fa-arrow-right-long"></i></span>
                                    </a>
                                </h4>
                            </div>
                        </div>

                    <!-- single contact info -->
               
                </div>

                <!-- video cover -->
                <div class="relative">
                    <img src="assets/img/contact-video-cover.jpg" alt="video cover" class="w-full">
                   
                </div>
            </div>

            <!-- right side contact form -->
            <div>
                <h2 class="text-[40px] md:text-[35px] sm:text-[30px] xxs:text-[28px] font-medium text-etBlack mb-[7px] text-center">Login</h2>
                <p class="text-etGray font-light text-[16px] mb-[38px]"></p>
                <div class="error text-center text-[16px]" style="background:red; color:white;padding:5px;">
                                    
                </div>
                <form id="login-form" class="grid grid-cols-2 xxs:grid-cols-1 gap-[30px] xs:gap-[20px] text-[16px]">
                    <div class="col-span-2 xxs:col-span-1">
                        <label for="et-contact-name" class="text-center font-lato font-semibold text-etBlack block mb-[12px]">Email</label>
                        <input type="email" name="uemail" id="et-contact-email" placeholder="Your Email" class="text-center border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none">
                    </div>
                    <div class="col-span-2 xxs:col-span-1">
                        <label for="et-contact-email" class="text-center font-lato font-semibold text-etBlack block mb-[12px]">Password</label>
                        <input type="password" name="upassword" id="et-contact-name" placeholder="Your Password" class="text-center border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none ">
                    </div>
                  
                    <div class="col-span-2 xxs:col-span-1 text-center">
                        <button id="login-btn" type="submit"  class="bg-etBlue w-full h-[55px] px-[24px] rounded-[10px] text-[16px] font-medium text-white hover:bg-etBlack">Login <span class="icon pl-[10px]"><i class="fa-solid fa-arrow-right-long"></i></span></button>
                        <br>
                        <a href="fpass.php" style="color: red;">Forgotten Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>