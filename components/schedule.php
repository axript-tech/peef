<section class="et-2-schedules bg-[#EEF4FF] bg-[url('../assets/img/schedule-bg.png')] bg-cover bg-no-repeat bg-center relative py-[130px] xl:py-[80px] md:py-[60px] before:absolute before:inset-0 before:bg-[url('../assets/img/')]">
    <div class="container mx-auto max-w-[calc(100%-37.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full rev-slide-up">
        <!-- heading -->
        <div class="et-schedule-heading flex sm:flex-col justify-between items-center pb-[31px] mb-[40px] gap-[15px] border-b border-[#D9D9D9]">
            <div class="left xs:text-center max-w-[50%] sm:max-w-full">
                <h6 class="et-section-sub-title anim-text">Event Timetable</h6>
                <h2 class="et-section-title anim-text">Information Of Event Schedule</h2>
            </div>

            <div class="right">
                <div class="et-schedules-tab-navs bg-[#D0E1FF] px-[12px] py-[14px] flex flex-w gap-[16px] sm:gap-[12px] rounded-full">
                    <button data-tab="tab1" class="tab-nav bg-etBlack rounded-full px-[20px] py-[3px] text-[16px] font-medium text-white hover:bg-etBlue active">Day 01</button>

                    <button data-tab="tab2" class="tab-nav bg-etBlack rounded-full px-[20px] py-[3px] text-[16px] font-medium text-white hover:bg-etBlue">Day 02</button>

                    <button data-tab="tab3" class="tab-nav bg-etBlack rounded-full px-[20px] py-[3px] text-[16px] font-medium text-white hover:bg-etBlue">Day 03</button>
                </div>
            </div>
        </div>

        <!-- events -->
        <div class="et-schedules-tab-container">
            <div id="tab1" class="et-tab active">
                <div class="all-scheduled-events flex flex-col gap-[30px]">
                    <!-- single schedule -->
                    <div class="et-2-schedule bg-white mt-[57px] p-[12px] pt-0 rounded-[20px] inline-flex md:flex-col w-full gap-y-[20px] justify-between relative z-[2] rev-slide-up">
                        <!-- img -->
                        <div class="w-[240px] shrink-0 relative">
                            <div class="et-2-schedule-img absolute md:static md:-mt-[45px] bottom-0 md:before:content-none before:absolute before:top-0 before:left-[100%] before:w-full before:h-full before:bg-gradient-to-br before:from-etBlue before:to-[#0B3998] before:-z-[1]">
                                <img src="assets/img/evenet-sched-1.jpg" alt="scehduled-event-cover" class="rounded-[20px] rounded-tr-none object-cover aspect-[8/9]">
                            </div>
                        </div>

                        <!-- text -->
                        <div class="px-[30px] sm:px-[12px] py-[25px] sm:pb-[15px] pt-[37px] md:pt-0 w-full flex xs:flex-col gap-y-[15px] items-center bg-white">
                            <!-- single schedule heading -->
                            <div class="pr-[46px] sm:pr-0 mr-[54px] sm:mr-0 border-r sm:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] xxs:border-0 py-[7px] px-[15px] xxs:p-0 rounded-full inline-flex xxs:w-full items-center justify-center xxs:justify-start gap-x-[24px] gap-y-[10px] mb-[10px]">
                                    <div class="date flex items-center gap-[10px]">
                                        <span class="icon sm:hidden">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_2043_1443)">
                                                    <path d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z" fill="var(--et-blue)" />
                                                    <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z" fill="var(--et-blue)" />
                                                </g>
                                            </svg>
                                        </span>

                                        <span class="text-etGray font-normal text-[16px]">19, Nov - 2025</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]  xxs:hidden">
                                        <span class="icon sm:hidden">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.8505 9.91291L8.61967 8.23979V4.8316C8.61967 4.48891 8.34266 4.21191 7.99998 4.21191C7.65729 4.21191 7.38029 4.48891 7.38029 4.8316V8.54966C7.38029 8.74485 7.47201 8.92892 7.62817 9.04541L10.1069 10.9044C10.2138 10.985 10.3441 11.0285 10.478 11.0284C10.667 11.0284 10.8529 10.9435 10.9744 10.7799C11.1802 10.5066 11.1244 10.118 10.8505 9.91291Z" fill="var(--et-blue)" />
                                                <path d="M8 0.5C3.58853 0.5 0 4.08853 0 8.5C0 12.9115 3.58853 16.5 8 16.5C12.4115 16.5 16 12.9115 16 8.5C16 4.08853 12.4115 0.5 8 0.5ZM8 15.2607C4.27266 15.2607 1.23934 12.2273 1.23934 8.5C1.23934 4.77266 4.27266 1.73934 8 1.73934C11.728 1.73934 14.7607 4.77266 14.7607 8.5C14.7607 12.2273 11.7273 15.2607 8 15.2607Z" fill="var(--et-blue)" />
                                            </svg>
                                        </span>

                                        <span class="text-etGray font-normal text-[16px]">8:30 AM – 9:30 AM</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack mb-[16px] anim-text"><a href="#" class="hover:text-etBlue">Registration & Welcome Breakfast – Networking over light</a></h3>

                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z" fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[16px] text-etGray">Lagos State University</h6>
                                </div>
                            </div>

                            <div class="flex shrink-0 xxl:flex-col xs:flex-row flex-wrap items-center xxl:items-start xs:items-center gap-x-[54px] gap-y-[16px]">
                                <div class="flex items-center">
                                    <div class="flex *:-ml-[20px]">
                                        <img src="assets/img/reviewer-1.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                        <img src="assets/img/reviewer-2.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                        <img src="assets/img/reviewer-3.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                        <div class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0 text-white bg-etBlue font-semibold flex items-center justify-center text-[16px]"></div>
                                    </div>
                                    <span class="font-normal text-etBlue text-[16px] -ml-[29px]"><span class="text-white">Spe</span>akers</span>
                                </div>

                                <div class="flex shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                    <a href="#" class="et-btn border bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a>
                                    <a href="#" class="et-btn border bg-etBlack text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlue hover:!text-white">Buy Tickets</a>
                                </div>
                            </div>
                        </div>
                    </div>

                   <!-- single schedule -->
                    <div class="et-2-schedule bg-white mt-[57px] p-[12px] pt-0 rounded-[20px] inline-flex md:flex-col w-full gap-y-[20px] justify-between relative z-[2] rev-slide-up">
                        <!-- img -->
                        <div class="w-[240px] shrink-0 relative">
                            <div class="et-2-schedule-img absolute md:static md:-mt-[45px] bottom-0 md:before:content-none before:absolute before:top-0 before:left-[100%] before:w-full before:h-full before:bg-gradient-to-br before:from-etBlue before:to-[#0B3998] before:-z-[1]">
                                <img src="assets/img/evenet-sched-2.jpg" alt="scehduled-event-cover" class="rounded-[20px] rounded-tr-none object-cover aspect-[8/9]">
                            </div>
                        </div>

                        <!-- text -->
                        <div class="px-[30px] sm:px-[12px] py-[25px] sm:pb-[15px] pt-[37px] md:pt-0 w-full flex xs:flex-col gap-y-[15px] items-center bg-white">
                            <!-- single schedule heading -->
                            <div class="pr-[46px] sm:pr-0 mr-[54px] sm:mr-0 border-r sm:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] xxs:border-0 py-[7px] px-[15px] xxs:p-0 rounded-full inline-flex xxs:w-full items-center justify-center xxs:justify-start gap-x-[24px] gap-y-[10px] mb-[10px]">
                                    <div class="date flex items-center gap-[10px]">
                                        <span class="icon sm:hidden">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_2043_1443)">
                                                    <path d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z" fill="var(--et-blue)" />
                                                    <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z" fill="var(--et-blue)" />
                                                </g>
                                            </svg>
                                        </span>

                                        <span class="text-etGray font-normal text-[16px]">19, Nov - 2025</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]  xxs:hidden">
                                        <span class="icon sm:hidden">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.8505 9.91291L8.61967 8.23979V4.8316C8.61967 4.48891 8.34266 4.21191 7.99998 4.21191C7.65729 4.21191 7.38029 4.48891 7.38029 4.8316V8.54966C7.38029 8.74485 7.47201 8.92892 7.62817 9.04541L10.1069 10.9044C10.2138 10.985 10.3441 11.0285 10.478 11.0284C10.667 11.0284 10.8529 10.9435 10.9744 10.7799C11.1802 10.5066 11.1244 10.118 10.8505 9.91291Z" fill="var(--et-blue)" />
                                                <path d="M8 0.5C3.58853 0.5 0 4.08853 0 8.5C0 12.9115 3.58853 16.5 8 16.5C12.4115 16.5 16 12.9115 16 8.5C16 4.08853 12.4115 0.5 8 0.5ZM8 15.2607C4.27266 15.2607 1.23934 12.2273 1.23934 8.5C1.23934 4.77266 4.27266 1.73934 8 1.73934C11.728 1.73934 14.7607 4.77266 14.7607 8.5C14.7607 12.2273 11.7273 15.2607 8 15.2607Z" fill="var(--et-blue)" />
                                            </svg>
                                        </span>

                                        <span class="text-etGray font-normal text-[16px]">9:30 AM – 10:00 AM</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack mb-[16px] anim-text"><a href="#" class="hover:text-etBlue">Opening Address – Conference Chair’s welcome speech</a></h3>

                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z" fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[16px] text-etGray">Lagos State University</h6>
                                </div>
                            </div>

                            <div class="flex shrink-0 xxl:flex-col xs:flex-row flex-wrap items-center xxl:items-start xs:items-center gap-x-[54px] gap-y-[16px]">
                                <div class="flex items-center">
                                    <div class="flex *:-ml-[20px]">
                                        <img src="assets/img/reviewer-1.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                        <img src="assets/img/reviewer-2.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                        <img src="assets/img/reviewer-3.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                        <div class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0 text-white bg-etBlue font-semibold flex items-center justify-center text-[16px]"></div>
                                    </div>
                                    <span class="font-normal text-etBlue text-[16px] -ml-[29px]"><span class="text-white">Spe</span>akers</span>
                                </div>

                                <div class="flex shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                    <a href="#" class="et-btn border bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a>
                                    <a href="#" class="et-btn border bg-etBlack text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlue hover:!text-white">Buy Tickets</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>

            <div id="tab2" class="et-tab">
                <div class="all-scheduled-events flex flex-col gap-[30px]">
                    <!-- single schedule -->
                    <div class="et-2-schedule bg-white mt-[57px] p-[12px] pt-0 rounded-[20px] inline-flex md:flex-col w-full gap-y-[20px] justify-between relative z-[2] rev-slide-up">
                        <!-- img -->
                        <div class="w-[240px] shrink-0 relative">
                            <div class="et-2-schedule-img absolute md:static md:-mt-[45px] bottom-0 md:before:content-none before:absolute before:top-0 before:left-[100%] before:w-full before:h-full before:bg-gradient-to-br before:from-etBlue before:to-[#0B3998] before:-z-[1]">
                                <img src="assets/img/evenet-sched-2.jpg" alt="scehduled-event-cover" class="rounded-[20px] rounded-tr-none object-cover aspect-[8/9]">
                            </div>
                        </div>

                        <!-- text -->
                        <div class="px-[30px] sm:px-[12px] py-[25px] sm:pb-[15px] pt-[37px] md:pt-0 w-full flex xs:flex-col gap-y-[15px] items-center bg-white">
                            <!-- single schedule heading -->
                            <div class="pr-[46px] sm:pr-0 mr-[54px] sm:mr-0 border-r sm:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] xxs:border-0 py-[7px] px-[15px] xxs:p-0 rounded-full inline-flex xxs:w-full items-center justify-center xxs:justify-start gap-x-[24px] gap-y-[10px] mb-[10px]">
                                    <div class="date flex items-center gap-[10px]">
                                        <span class="icon sm:hidden">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_2043_1443)">
                                                    <path d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z" fill="var(--et-blue)" />
                                                    <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z" fill="var(--et-blue)" />
                                                </g>
                                            </svg>
                                        </span>

                                        <span class="text-etGray font-normal text-[16px]">24, Jan - 2024</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px] xxs:hidden">
                                        <span class="icon sm:hidden">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.8505 9.91291L8.61967 8.23979V4.8316C8.61967 4.48891 8.34266 4.21191 7.99998 4.21191C7.65729 4.21191 7.38029 4.48891 7.38029 4.8316V8.54966C7.38029 8.74485 7.47201 8.92892 7.62817 9.04541L10.1069 10.9044C10.2138 10.985 10.3441 11.0285 10.478 11.0284C10.667 11.0284 10.8529 10.9435 10.9744 10.7799C11.1802 10.5066 11.1244 10.118 10.8505 9.91291Z" fill="var(--et-blue)" />
                                                <path d="M8 0.5C3.58853 0.5 0 4.08853 0 8.5C0 12.9115 3.58853 16.5 8 16.5C12.4115 16.5 16 12.9115 16 8.5C16 4.08853 12.4115 0.5 8 0.5ZM8 15.2607C4.27266 15.2607 1.23934 12.2273 1.23934 8.5C1.23934 4.77266 4.27266 1.73934 8 1.73934C11.728 1.73934 14.7607 4.77266 14.7607 8.5C14.7607 12.2273 11.7273 15.2607 8 15.2607Z" fill="var(--et-blue)" />
                                            </svg>
                                        </span>

                                        <span class="text-etGray font-normal text-[16px]">10:00 AM – 2.00 PM</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack mb-[16px] anim-text"><a href="#" class="hover:text-etBlue">Siempre Son Flores" Musica Cubana Salsa Jazz adipi scing elit.</a></h3>

                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z" fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[16px] text-etGray">135 W, 46nd Street, New York</h6>
                                </div>
                            </div>

                            <div class="flex shrink-0 xxl:flex-col xs:flex-row flex-wrap items-center xxl:items-start xs:items-center gap-x-[54px] gap-y-[16px]">
                                <div class="flex items-center">
                                    <div class="flex *:-ml-[20px]">
                                        <img src="assets/img/reviewer-1.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                        <img src="assets/img/reviewer-2.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                        <img src="assets/img/reviewer-3.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                        <div class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0 text-white bg-etBlue font-semibold flex items-center justify-center text-[16px]"></div>
                                    </div>
                                    <span class="font-normal text-etBlue text-[16px] -ml-[29px]"><span class="text-white">Spe</span>akers</span>
                                </div>

                                <div class="flex shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                    <a href="#" class="et-btn border bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a>
                                    <a href="#" class="et-btn border bg-etBlack text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlue hover:!text-white">Buy Tickets</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- single schedule -->
                    <div class="et-2-schedule bg-white mt-[57px] p-[12px] pt-0 rounded-[20px] inline-flex md:flex-col w-full gap-y-[20px] justify-between relative z-[2] rev-slide-up">
                        <!-- img -->
                        <div class="w-[240px] shrink-0 relative">
                            <div class="et-2-schedule-img absolute md:static md:-mt-[45px] bottom-0 md:before:content-none before:absolute before:top-0 before:left-[100%] before:w-full before:h-full before:bg-gradient-to-br before:from-etBlue before:to-[#0B3998] before:-z-[1]">
                                <img src="assets/img/evenet-sched-3.jpg" alt="scehduled-event-cover" class="rounded-[20px] rounded-tr-none object-cover aspect-[8/9]">
                            </div>
                        </div>

                        <!-- text -->
                        <div class="px-[30px] sm:px-[12px] py-[25px] sm:pb-[15px] pt-[37px] md:pt-0 w-full flex xs:flex-col gap-y-[15px] items-center bg-white">
                            <!-- single schedule heading -->
                            <div class="pr-[46px] sm:pr-0 mr-[54px] sm:mr-0 border-r sm:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] xxs:border-0 py-[7px] px-[15px] xxs:p-0 rounded-full inline-flex xxs:w-full items-center justify-center xxs:justify-start gap-x-[24px] gap-y-[10px] mb-[10px]">
                                    <div class="date flex items-center gap-[10px]">
                                        <span class="icon sm:hidden">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_2043_1443)">
                                                    <path d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z" fill="var(--et-blue)" />
                                                    <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z" fill="var(--et-blue)" />
                                                </g>
                                            </svg>
                                        </span>

                                        <span class="text-etGray font-normal text-[16px]">24, Jan - 2024</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px] xxs:hidden">
                                        <span class="icon sm:hidden">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.8505 9.91291L8.61967 8.23979V4.8316C8.61967 4.48891 8.34266 4.21191 7.99998 4.21191C7.65729 4.21191 7.38029 4.48891 7.38029 4.8316V8.54966C7.38029 8.74485 7.47201 8.92892 7.62817 9.04541L10.1069 10.9044C10.2138 10.985 10.3441 11.0285 10.478 11.0284C10.667 11.0284 10.8529 10.9435 10.9744 10.7799C11.1802 10.5066 11.1244 10.118 10.8505 9.91291Z" fill="var(--et-blue)" />
                                                <path d="M8 0.5C3.58853 0.5 0 4.08853 0 8.5C0 12.9115 3.58853 16.5 8 16.5C12.4115 16.5 16 12.9115 16 8.5C16 4.08853 12.4115 0.5 8 0.5ZM8 15.2607C4.27266 15.2607 1.23934 12.2273 1.23934 8.5C1.23934 4.77266 4.27266 1.73934 8 1.73934C11.728 1.73934 14.7607 4.77266 14.7607 8.5C14.7607 12.2273 11.7273 15.2607 8 15.2607Z" fill="var(--et-blue)" />
                                            </svg>
                                        </span>

                                        <span class="text-etGray font-normal text-[16px]">10:00 AM – 2.00 PM</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack mb-[16px] anim-text"><a href="#" class="hover:text-etBlue">Siempre Son Flores" Musica Cubana Salsa Jazz adipi scing elit.</a></h3>

                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z" fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[16px] text-etGray">135 W, 46nd Street, New York</h6>
                                </div>
                            </div>

                            <div class="flex shrink-0 xxl:flex-col xs:flex-row flex-wrap items-center xxl:items-start xs:items-center gap-x-[54px] gap-y-[16px]">
                                <div class="flex items-center">
                                    <div class="flex *:-ml-[20px]">
                                        <img src="assets/img/reviewer-1.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                        <img src="assets/img/reviewer-2.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                        <img src="assets/img/reviewer-3.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                        <div class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0 text-white bg-etBlue font-semibold flex items-center justify-center text-[16px]"></div>
                                    </div>
                                    <span class="font-normal text-etBlue text-[16px] -ml-[29px]"><span class="text-white">Spe</span>akers</span>
                                </div>

                                <div class="flex shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                    <a href="#" class="et-btn border bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a>
                                    <a href="#" class="et-btn border bg-etBlack text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlue hover:!text-white">Buy Tickets</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- single schedule -->
                    <div class="et-2-schedule bg-white mt-[57px] p-[12px] pt-0 rounded-[20px] inline-flex md:flex-col w-full gap-y-[20px] justify-between relative z-[2] rev-slide-up">
                        <!-- img -->
                        <div class="w-[240px] shrink-0 relative">
                            <div class="et-2-schedule-img absolute md:static md:-mt-[45px] bottom-0 md:before:content-none before:absolute before:top-0 before:left-[100%] before:w-full before:h-full before:bg-gradient-to-br before:from-etBlue before:to-[#0B3998] before:-z-[1]">
                                <img src="assets/img/evenet-sched-1.jpg" alt="scehduled-event-cover" class="rounded-[20px] rounded-tr-none object-cover aspect-[8/9]">
                            </div>
                        </div>

                        <!-- text -->
                        <div class="px-[30px] sm:px-[12px] py-[25px] sm:pb-[15px] pt-[37px] md:pt-0 w-full flex xs:flex-col gap-y-[15px] items-center bg-white">
                            <!-- single schedule heading -->
                            <div class="pr-[46px] sm:pr-0 mr-[54px] sm:mr-0 border-r sm:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] xxs:border-0 py-[7px] px-[15px] xxs:p-0 rounded-full inline-flex xxs:w-full items-center justify-center xxs:justify-start gap-x-[24px] gap-y-[10px] mb-[10px]">
                                    <div class="date flex items-center gap-[10px]">
                                        <span class="icon sm:hidden">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_2043_1443)">
                                                    <path d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z" fill="var(--et-blue)" />
                                                    <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z" fill="var(--et-blue)" />
                                                </g>
                                            </svg>
                                        </span>

                                        <span class="text-etGray font-normal text-[16px]">24, Jan - 2024</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px] xxs:hidden">
                                        <span class="icon sm:hidden">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.8505 9.91291L8.61967 8.23979V4.8316C8.61967 4.48891 8.34266 4.21191 7.99998 4.21191C7.65729 4.21191 7.38029 4.48891 7.38029 4.8316V8.54966C7.38029 8.74485 7.47201 8.92892 7.62817 9.04541L10.1069 10.9044C10.2138 10.985 10.3441 11.0285 10.478 11.0284C10.667 11.0284 10.8529 10.9435 10.9744 10.7799C11.1802 10.5066 11.1244 10.118 10.8505 9.91291Z" fill="var(--et-blue)" />
                                                <path d="M8 0.5C3.58853 0.5 0 4.08853 0 8.5C0 12.9115 3.58853 16.5 8 16.5C12.4115 16.5 16 12.9115 16 8.5C16 4.08853 12.4115 0.5 8 0.5ZM8 15.2607C4.27266 15.2607 1.23934 12.2273 1.23934 8.5C1.23934 4.77266 4.27266 1.73934 8 1.73934C11.728 1.73934 14.7607 4.77266 14.7607 8.5C14.7607 12.2273 11.7273 15.2607 8 15.2607Z" fill="var(--et-blue)" />
                                            </svg>
                                        </span>

                                        <span class="text-etGray font-normal text-[16px]">10:00 AM – 2.00 PM</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack mb-[16px] anim-text"><a href="#" class="hover:text-etBlue">Siempre Son Flores" Musica Cubana Salsa Jazz adipi scing elit.</a></h3>

                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z" fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[16px] text-etGray">135 W, 46nd Street, New York</h6>
                                </div>
                            </div>

                            <div class="flex shrink-0 xxl:flex-col xs:flex-row flex-wrap items-center xxl:items-start xs:items-center gap-x-[54px] gap-y-[16px]">
                                <div class="flex items-center">
                                    <div class="flex *:-ml-[20px]">
                                        <img src="assets/img/reviewer-1.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                        <img src="assets/img/reviewer-2.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                        <img src="assets/img/reviewer-3.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                        <div class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0 text-white bg-etBlue font-semibold flex items-center justify-center text-[16px]"></div>
                                    </div>
                                    <span class="font-normal text-etBlue text-[16px] -ml-[29px]"><span class="text-white">Spe</span>akers</span>
                                </div>

                                <div class="flex shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                    <a href="#" class="et-btn border bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a>
                                    <a href="#" class="et-btn border bg-etBlack text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlue hover:!text-white">Buy Tickets</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tab3" class="et-tab">
                <div class="all-scheduled-events flex flex-col gap-[30px]">
                    <!-- single schedule -->
                    <div class="et-2-schedule bg-white mt-[57px] p-[12px] pt-0 rounded-[20px] inline-flex md:flex-col w-full gap-y-[20px] justify-between relative z-[2] rev-slide-up">
                        <!-- img -->
                        <div class="w-[240px] shrink-0 relative">
                            <div class="et-2-schedule-img absolute md:static md:-mt-[45px] bottom-0 md:before:content-none before:absolute before:top-0 before:left-[100%] before:w-full before:h-full before:bg-gradient-to-br before:from-etBlue before:to-[#0B3998] before:-z-[1]">
                                <img src="assets/img/evenet-sched-3.jpg" alt="scehduled-event-cover" class="rounded-[20px] rounded-tr-none object-cover aspect-[8/9]">
                            </div>
                        </div>

                        <!-- text -->
                        <div class="px-[30px] sm:px-[12px] py-[25px] sm:pb-[15px] pt-[37px] md:pt-0 w-full flex xs:flex-col gap-y-[15px] items-center bg-white">
                            <!-- single schedule heading -->
                            <div class="pr-[46px] sm:pr-0 mr-[54px] sm:mr-0 border-r sm:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] xxs:border-0 py-[7px] px-[15px] xxs:p-0 rounded-full inline-flex xxs:w-full items-center justify-center xxs:justify-start gap-x-[24px] gap-y-[10px] mb-[10px]">
                                    <div class="date flex items-center gap-[10px]">
                                        <span class="icon sm:hidden">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_2043_1443)">
                                                    <path d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z" fill="var(--et-blue)" />
                                                    <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z" fill="var(--et-blue)" />
                                                </g>
                                            </svg>
                                        </span>

                                        <span class="text-etGray font-normal text-[16px]">24, Jan - 2024</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px] xxs:hidden">
                                        <span class="icon sm:hidden">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.8505 9.91291L8.61967 8.23979V4.8316C8.61967 4.48891 8.34266 4.21191 7.99998 4.21191C7.65729 4.21191 7.38029 4.48891 7.38029 4.8316V8.54966C7.38029 8.74485 7.47201 8.92892 7.62817 9.04541L10.1069 10.9044C10.2138 10.985 10.3441 11.0285 10.478 11.0284C10.667 11.0284 10.8529 10.9435 10.9744 10.7799C11.1802 10.5066 11.1244 10.118 10.8505 9.91291Z" fill="var(--et-blue)" />
                                                <path d="M8 0.5C3.58853 0.5 0 4.08853 0 8.5C0 12.9115 3.58853 16.5 8 16.5C12.4115 16.5 16 12.9115 16 8.5C16 4.08853 12.4115 0.5 8 0.5ZM8 15.2607C4.27266 15.2607 1.23934 12.2273 1.23934 8.5C1.23934 4.77266 4.27266 1.73934 8 1.73934C11.728 1.73934 14.7607 4.77266 14.7607 8.5C14.7607 12.2273 11.7273 15.2607 8 15.2607Z" fill="var(--et-blue)" />
                                            </svg>
                                        </span>

                                        <span class="text-etGray font-normal text-[16px]">10:00 AM – 2.00 PM</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack mb-[16px] anim-text"><a href="#" class="hover:text-etBlue">Siempre Son Flores" Musica Cubana Salsa Jazz adipi scing elit.</a></h3>

                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z" fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[16px] text-etGray">135 W, 46nd Street, New York</h6>
                                </div>
                            </div>

                            <div class="flex shrink-0 xxl:flex-col xs:flex-row flex-wrap items-center xxl:items-start xs:items-center gap-x-[54px] gap-y-[16px]">
                                <div class="flex items-center">
                                    <div class="flex *:-ml-[20px]">
                                        <img src="assets/img/reviewer-1.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                        <img src="assets/img/reviewer-2.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                        <img src="assets/img/reviewer-3.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                        <div class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0 text-white bg-etBlue font-semibold flex items-center justify-center text-[16px]"></div>
                                    </div>
                                    <span class="font-normal text-etBlue text-[16px] -ml-[29px]"><span class="text-white">Spe</span>akers</span>
                                </div>

                                <div class="flex shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                    <a href="#" class="et-btn border bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a>
                                    <a href="#" class="et-btn border bg-etBlack text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlue hover:!text-white">Buy Tickets</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- single schedule -->
                    <div class="et-2-schedule bg-white mt-[57px] p-[12px] pt-0 rounded-[20px] inline-flex md:flex-col w-full gap-y-[20px] justify-between relative z-[2] rev-slide-up">
                        <!-- img -->
                        <div class="w-[240px] shrink-0 relative">
                            <div class="et-2-schedule-img absolute md:static md:-mt-[45px] bottom-0 md:before:content-none before:absolute before:top-0 before:left-[100%] before:w-full before:h-full before:bg-gradient-to-br before:from-etBlue before:to-[#0B3998] before:-z-[1]">
                                <img src="assets/img/evenet-sched-2.jpg" alt="scehduled-event-cover" class="rounded-[20px] rounded-tr-none object-cover aspect-[8/9]">
                            </div>
                        </div>

                        <!-- text -->
                        <div class="px-[30px] sm:px-[12px] py-[25px] sm:pb-[15px] pt-[37px] md:pt-0 w-full flex xs:flex-col gap-y-[15px] items-center bg-white">
                            <!-- single schedule heading -->
                            <div class="pr-[46px] sm:pr-0 mr-[54px] sm:mr-0 border-r sm:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] xxs:border-0 py-[7px] px-[15px] xxs:p-0 rounded-full inline-flex xxs:w-full items-center justify-center xxs:justify-start gap-x-[24px] gap-y-[10px] mb-[10px]">
                                    <div class="date flex items-center gap-[10px]">
                                        <span class="icon sm:hidden">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_2043_1443)">
                                                    <path d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z" fill="var(--et-blue)" />
                                                    <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z" fill="var(--et-blue)" />
                                                </g>
                                            </svg>
                                        </span>

                                        <span class="text-etGray font-normal text-[16px]">24, Jan - 2024</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px] xxs:hidden">
                                        <span class="icon sm:hidden">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.8505 9.91291L8.61967 8.23979V4.8316C8.61967 4.48891 8.34266 4.21191 7.99998 4.21191C7.65729 4.21191 7.38029 4.48891 7.38029 4.8316V8.54966C7.38029 8.74485 7.47201 8.92892 7.62817 9.04541L10.1069 10.9044C10.2138 10.985 10.3441 11.0285 10.478 11.0284C10.667 11.0284 10.8529 10.9435 10.9744 10.7799C11.1802 10.5066 11.1244 10.118 10.8505 9.91291Z" fill="var(--et-blue)" />
                                                <path d="M8 0.5C3.58853 0.5 0 4.08853 0 8.5C0 12.9115 3.58853 16.5 8 16.5C12.4115 16.5 16 12.9115 16 8.5C16 4.08853 12.4115 0.5 8 0.5ZM8 15.2607C4.27266 15.2607 1.23934 12.2273 1.23934 8.5C1.23934 4.77266 4.27266 1.73934 8 1.73934C11.728 1.73934 14.7607 4.77266 14.7607 8.5C14.7607 12.2273 11.7273 15.2607 8 15.2607Z" fill="var(--et-blue)" />
                                            </svg>
                                        </span>

                                        <span class="text-etGray font-normal text-[16px]">10:00 AM – 2.00 PM</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack mb-[16px] anim-text"><a href="#" class="hover:text-etBlue">Siempre Son Flores" Musica Cubana Salsa Jazz adipi scing elit.</a></h3>

                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z" fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[16px] text-etGray">135 W, 46nd Street, New York</h6>
                                </div>
                            </div>

                            <div class="flex shrink-0 xxl:flex-col xs:flex-row flex-wrap items-center xxl:items-start xs:items-center gap-x-[54px] gap-y-[16px]">
                                <div class="flex items-center">
                                    <div class="flex *:-ml-[20px]">
                                        <img src="assets/img/reviewer-1.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                        <img src="assets/img/reviewer-2.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                        <img src="assets/img/reviewer-3.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                        <div class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0 text-white bg-etBlue font-semibold flex items-center justify-center text-[16px]"></div>
                                    </div>
                                    <span class="font-normal text-etBlue text-[16px] -ml-[29px]"><span class="text-white">Spe</span>akers</span>
                                </div>

                                <div class="flex shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                    <a href="#" class="et-btn border bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a>
                                    <a href="#" class="et-btn border bg-etBlack text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlue hover:!text-white">Buy Tickets</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- single schedule -->
                    <div class="et-2-schedule bg-white mt-[57px] p-[12px] pt-0 rounded-[20px] inline-flex md:flex-col w-full gap-y-[20px] justify-between relative z-[2] rev-slide-up">
                        <!-- img -->
                        <div class="w-[240px] shrink-0 relative">
                            <div class="et-2-schedule-img absolute md:static md:-mt-[45px] bottom-0 md:before:content-none before:absolute before:top-0 before:left-[100%] before:w-full before:h-full before:bg-gradient-to-br before:from-etBlue before:to-[#0B3998] before:-z-[1]">
                                <img src="assets/img/evenet-sched-1.jpg" alt="scehduled-event-cover" class="rounded-[20px] rounded-tr-none object-cover aspect-[8/9]">
                            </div>
                        </div>

                        <!-- text -->
                        <div class="px-[30px] sm:px-[12px] py-[25px] sm:pb-[15px] pt-[37px] md:pt-0 w-full flex xs:flex-col gap-y-[15px] items-center bg-white">
                            <!-- single schedule heading -->
                            <div class="pr-[46px] sm:pr-0 mr-[54px] sm:mr-0 border-r sm:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] xxs:border-0 py-[7px] px-[15px] xxs:p-0 rounded-full inline-flex xxs:w-full items-center justify-center xxs:justify-start gap-x-[24px] gap-y-[10px] mb-[10px]">
                                    <div class="date flex items-center gap-[10px]">
                                        <span class="icon sm:hidden">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_2043_1443)">
                                                    <path d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z" fill="var(--et-blue)" />
                                                    <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z" fill="var(--et-blue)" />
                                                    <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z" fill="var(--et-blue)" />
                                                    <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z" fill="var(--et-blue)" />
                                                    <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z" fill="var(--et-blue)" />
                                                </g>
                                            </svg>
                                        </span>

                                        <span class="text-etGray font-normal text-[16px]">24, Jan - 2024</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px] xxs:hidden">
                                        <span class="icon sm:hidden">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.8505 9.91291L8.61967 8.23979V4.8316C8.61967 4.48891 8.34266 4.21191 7.99998 4.21191C7.65729 4.21191 7.38029 4.48891 7.38029 4.8316V8.54966C7.38029 8.74485 7.47201 8.92892 7.62817 9.04541L10.1069 10.9044C10.2138 10.985 10.3441 11.0285 10.478 11.0284C10.667 11.0284 10.8529 10.9435 10.9744 10.7799C11.1802 10.5066 11.1244 10.118 10.8505 9.91291Z" fill="var(--et-blue)" />
                                                <path d="M8 0.5C3.58853 0.5 0 4.08853 0 8.5C0 12.9115 3.58853 16.5 8 16.5C12.4115 16.5 16 12.9115 16 8.5C16 4.08853 12.4115 0.5 8 0.5ZM8 15.2607C4.27266 15.2607 1.23934 12.2273 1.23934 8.5C1.23934 4.77266 4.27266 1.73934 8 1.73934C11.728 1.73934 14.7607 4.77266 14.7607 8.5C14.7607 12.2273 11.7273 15.2607 8 15.2607Z" fill="var(--et-blue)" />
                                            </svg>
                                        </span>

                                        <span class="text-etGray font-normal text-[16px]">10:00 AM – 2.00 PM</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack mb-[16px] anim-text"><a href="#" class="hover:text-etBlue">Siempre Son Flores" Musica Cubana Salsa Jazz adipi scing elit.</a></h3>

                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z" fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[16px] text-etGray">135 W, 46nd Street, New York</h6>
                                </div>
                            </div>

                            <div class="flex shrink-0 xxl:flex-col xs:flex-row flex-wrap items-center xxl:items-start xs:items-center gap-x-[54px] gap-y-[16px]">
                                <div class="flex items-center">
                                    <div class="flex *:-ml-[20px]">
                                        <img src="assets/img/reviewer-1.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                        <img src="assets/img/reviewer-2.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                        <img src="assets/img/reviewer-3.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                        <div class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0 text-white bg-etBlue font-semibold flex items-center justify-center text-[16px]"></div>
                                    </div>
                                    <span class="font-normal text-etBlue text-[16px] -ml-[29px]"><span class="text-white">Spe</span>akers</span>
                                </div>

                                <div class="flex shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                    <a href="#" class="et-btn border bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a>
                                    <a href="#" class="et-btn border bg-etBlack text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlue hover:!text-white">Buy Tickets</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- vectors -->
    <div class="md:hidden">
        <img src="assets/img/features-vector-1.png" alt="vector" class="pointer-events-none absolute top-[254px] left-[93px] -z-[1]">
        <img src="assets/img/schedule-vector.png" alt="vector" class="pointer-events-none absolute bottom-[270px] left-[125px] -z-[1]">
        <img src="assets/img/features-vector-2.png" alt="vector" class="pointer-events-none absolute top-[184px] right-[151px] -z-[1]">
        <img src="assets/img/features-vector-3.png" alt="vector" class="pointer-events-none absolute bottom-[455px] right-[93px] -z-[1]">
    </div>
</section>