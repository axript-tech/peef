<div class="py-[120px] xl:py-[80px] md:py-[60px]">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
        <div class="grid grid-cols-1 md:grid-cols-1 gap-[60px] xl:gap-[40px] items-center">
            <!-- left side contact infos -->
           <div>
                <h2 class="text-[40px] md:text-[35px] sm:text-[30px] xxs:text-[28px] font-medium text-etBlack mb-[7px] text-center">Membership Registration</h2>
                <p class="text-etGray font-light text-[16px] mb-[38px]"></p>
                <form id="reg" method="POST" enctype="multipart/form-data"  class="grid grid-cols-2 xxs:grid-cols-1 gap-[30px] xs:gap-[20px] text-[16px]">
                    <div class="bg-etBlue p-[40px] sm:p-[30px] space-y-[24px] text-[16px] col-span-2 xxs:col-span-1 text-center">
                        <!-- single contact info -->
                        <div class=" items-center text-white border-b border-white/30 last:border-0 last:pb-0 text-center">
                            <div class="txt">
                                <span class="font-light text-center">Already registered?</span>
                                <h4 class="font-semibold text-[24px] text-center py-[5px]">
                                    <a href="login.php" class="bg-white h-[45px]  px-[24px] py-[14px] rounded-[10px] text-[16px] font-medium text-etBlue hover:bg-etBlack">
                                        Login <span class="icon pl-[10px]"><i class="fa-solid fa-arrow-right-long"></i></span>
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="">
                       
                        <select name="title" class="text-center border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" id="title" required>
                            <option selected value="">Select Title</option>
                            <option value="Prof">Prof</option>
                            <option value="Dr">Dr</option>
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Miss">Miss</option>
                        </select>
                    </div>
                    <div class="">
                        <select name="usergroup" class="text-center border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" id="usergroup" required>
                            <option selected value="">Select Your Status</option>
                            <option value="Regular Participant">Regular Participant</option>
                            <option value="International Participant">International Participant</option>
                            <option value="Postgraduate Student">Postgraduate Student</option>
                            <option value="Undergraduate Student">Undergraduate Student</option>
                        </select>
                    </div>
                    <div class=""><input placeholder="Enter First Name" type="text" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" name="fname" id="fname" required></div>
                    <div class=""><input  placeholder="Enter Last Name" type="text" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" name="lname" id="lname" required></div>
                    <div class=""><input  placeholder="Enter Middle Name (Optional)" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" type="text" name="mname" id="mname"></div>
                    <div class=""><input  type="text" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" placeholder="Your Email" name="email" id="email" required></div>
                    <div class=""><input  type="password" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" placeholder="Enter Your Password" name="upass" id="upass" required></div>
                    <div class=""><input  type="password" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" placeholder="Confirm Your Password" name="cpass" id="cpass" required></div>
                    <div class="">
                        <select name="gender" id="gender" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" required>
                            <option selected value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class=""><input  type="text" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" placeholder="Phone Number" name="phone" id="phone" required></div>
                    <div class=""><?php include("components/country-options.php");?></div>
                    <div class="">
                        <select name="field" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none"  required="">
                            <option value="">Select Most Related Field</option>
                            <option value="Biological Science">Biological Science</option>
                            <option value="Physical Science">Physical Science</option>
                            <option value="Chemical Science">Chemical Science</option>
                            <option value="Interdisciplinary">Interdisciplinary</option>
                        </select>
                    </div>
                    <div class="col-span-2 xxs:col-span-1"><textarea rows="3"  class="border border-[#ECECEC] h-[145px] p-[20px] rounded-[4px] w-full focus:outline-none" name="org" placeholder="Affiliation: Organization/Institution e.g Department of Computer Science, Faculty of Science, Lagos State University, Ojo, Lagos" required></textarea></div>
                    <div class="text-center form-btn btn-block red-btn col-span-2 xxs:col-span-1">
                        <div class="error my-3"></div>
                        <button id="reg-btn" class="bg-etBlue h-[55px] w-full px-[24px] rounded-[10px] text-[16px] font-medium text-white hover:bg-etBlack">Register <i class="fas fa-angle-right"></i></button>
                    </div>
                </form>
                
           </div>
            <!-- right side contact form -->
          
        </div>
    </div>
</div>