@extends('layouts.master')

@section('title', 'AdMeter Pro - Real-Time Ad Tracking & Analytics')

@push('styles')
    <!-- Add homepage-specific CSS if needed -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

@section('content')
    <!-- Hero Section -->
    <main>
        <!-- BANNER SECTION START -->
        <div class="banner-section relative overflow-hidden  bg-[position:50%_0%] bg-no-repeat bg-cover rounded-[20px] m-[11px] px-0 pt-[clamp(180px,12.61vw,240px)] xxs:pt-[130px] pb-[clamp(240px,14.71vw,280px)] xxs:pb-[180px]"
             style="background-image: url('https://rudra-tailwind.vercel.app/assets/img/banner/hero-thumb2.png');"
        >
            <div class="et-container relative">
                <div class="banner-content2">
                    <h1 class="text-white text-[clamp(40px,3.78vw,72px)] xxs:text-[35px] font-bold leading-[1.1] mb-[24px] pb-[8px] wow fadeInDown" data-wow-delay=".2s">
                        Elevate Your
                        <span class="fw-300 font-light">Life & <br> Career Success</span>
                    </h1>
                    <a href="contact.html" class="et-btn et-2-btn wow fadeInDown" data-wow-delay=".3s">
                        <span class="icon">
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>
                        Get Started Today
                    </a>
                </div>
                <img src="https://rudra-tailwind.vercel.app/assets/img/banner/collapse-thumb2.png" alt="img" class="absolute -bottom-[clamp(125px,12.61vw,240px)] right-0 lg:right-[15px] z-[1] xxs:hidden">
            </div>
            <!-- Sponsor -->
            <div class="sponsor-section absolute bottom-0 left-0 right-0 backdrop-blur-[25px] bg-white/17 rounded-b-[16px] px-0 py-[12px]">
                <div class="et-container">
                    <div class="grid grid-cols-12 g-2">
                        <div class="col-span-10 lg:col-span-12">
                            <div class="sponsor-wrapper swiper">
                                <div class="swiper-wrapper items-center">
                                    <div class="swiper-slide">
                                        <div class="sponsor-item">
                                            <img src="https://rudra-tailwind.vercel.app/assets/img/banner/sponsor3.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="sponsor-item">
                                            <img src="https://rudra-tailwind.vercel.app/assets/img/banner/sponsor4.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="sponsor-item">
                                            <img src="https://rudra-tailwind.vercel.app/assets/img/banner/sponsor1.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="sponsor-item">
                                            <img src="https://rudra-tailwind.vercel.app/assets/img/banner/sponsor2.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="sponsor-item">
                                            <img src="https://rudra-tailwind.vercel.app/assets/img/banner/sponsor5.png" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BANNER SECTION END -->


        <!-- About-section Start -->
        <section class="about-section bg-etWhite py-[clamp(60px,5.25vw,100px)] overflow-hidden">
            <div class="et-container">
                <div class="grid !grid-cols-12 gap-y-[10px] items-end">
                    <div class="!col-span-5 md:col-span-12">
                        <div class="about-thumb2 relative">
                            <div class="absolute w-[clamp(161px,8.62vw,164px)] aspect-square -right-[60px] -top-[clamp(80px,5.78vw,110px)] md:right-[15px] md:top-[15px] z-[1] xs:hidden backdrop-blur-[12.9474px] bg-white/65 rounded-full fill-white/65">
                                <img src="https://rudra-tailwind.vercel.app/assets/img/service/text-circle.png" alt="img" class="circle360 absolute rounded-full fill-white/65 animate-[circle360_10s_linear_infinite] [transform:translate(-50%,-50%)] top-1/2 left-1/2">
                                <img src="https://rudra-tailwind.vercel.app/assets/img/service/txt-tumb.png" alt="img" class="shapee absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            </div>

                            <div class="about-image wow img-custom-anim-right w-full animated" data-wow-duration="1.3s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 1.3s; animation-delay: 0.3s;">
                                <img src="https://rudra-tailwind.vercel.app/assets/img/about/about-thumb2.png" alt="img" class="w-full">
                            </div>
                            <img src="https://rudra-tailwind.vercel.app/assets/img/about/signature.png" alt="img" class="absolute bottom-0 left-0 m-[clamp(16px,1.26vw,24px)]">
                        </div>
                    </div>

                    <div></div>

                    <div class="!col-span-6 !md:col-span-12">
                        <div class="about-content">
                            <div class="flex flex-nowrap xs:flex-wrap gap-[clamp(5px,0.42vw,8px)] gap-y-[15px] justify-between mb-[clamp(24px,2.52vw,48px)]">
                                <div class="boxes max-w-[clamp(327px,17.34vw,330px)]">
                                    <div class="section-title">
                                        <span class="et-2-section-sub-title">ABOUT US</span>
                                        <h2 class="et-section-title wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                            Empowering you to
                                            <span class="fw-300">achieve a life you love</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="counter-area shrink-0">
                                    <div class="flex flex-col gap-[clamp(16px,1.26vw,24px)]">
                                        <div class="wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                            <h2 class="border-b border-[#DEE2E6] text-primary text-[clamp(25px,2.52vw,48px)] font-light leading-[1.1] mb-[clamp(9px,0.84vw,16px)] pb-2"><span class="count fw-300">10</span>+</h2>
                                            <p class="text-[15px] leading-[1.5] text-primary">
                                                01. Years of Experience
                                            </p>
                                        </div>
                                        <div class="wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                            <h2 class="border-b border-[#DEE2E6] text-primary text-[clamp(25px,2.52vw,48px)] font-light leading-[1.1] mb-[clamp(9px,0.84vw,16px)] pb-2"><span class="count fw-300">240</span>+</h2>
                                            <p class="text-[15px] leading-[1.5] text-primary">
                                                02. Successful projects
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-nowrap xs:flex-wrap gap-[clamp(5px,0.42vw,8px)] gap-y-[15px] justify-between items-end">
                                <div class="boxes max-w-[clamp(327px,17.34vw,330px)]">
                                    <p class="text-primary text-[15px] leading-[1.5] mb-2 wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                        Hi, I’m Michel jhon, and I'm passionate about helping people break free from
                                        self-doubt
                                        and step into the life they
                                        were
                                        meant to live
                                    </p>
                                    <p class="text-primary text-[15px] leading-[1.5] mb-[clamp(24px,2.52vw,48px)]">
                                        Let’s create the life you’ve been dreaming
                                    </p>
                                    <a href="about.html" class="et-btn et-2-btn wow fadeIn" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                                        <span class="icon"><i class="fa-solid fa-arrow-right"></i></span> Starting Now </a>
                                </div>
                                <div class="counter-area min-w-[clamp(168px,8.99vw,171px)]">
                                    <div class="flex satisfied mb-[clamp(10px,0.84vw,16px)] *:-ml-[clamp(8px,0.74vw,14px)] *:first:ml-0 *:rounded-full">
                                        <img src="https://rudra-tailwind.vercel.app/assets/img/about/satisfied-member1.png" alt="img" class="rounded-circle">
                                        <img src="https://rudra-tailwind.vercel.app/assets/img/about/satisfied-member2.png" alt="img" class="rounded-circle">
                                        <img src="https://rudra-tailwind.vercel.app/assets/img/about/satisfied-member3.png" alt="img" class="rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-primary text-[clamp(16px,0.95vw,18px)] font-bold leading-[1.2] mb-1">Join 5,000+</h5>
                                        <p class="text-primary text-[15px] leading-[1.5]">satisfied members</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ABOUT SECTION END -->


        <!-- SERVICES SECTION START -->
        <section class="service-section py-[clamp(60px,5.25vw,100px)]">
            <div class="et-container">
                <div class="grid grid-cols-12 gap-[clamp(16px,1.26vw,24px)] items-end mb-[clamp(20px,2.10vw,40px)]">
                    <div class="col-span-7 sm:col-span-12">
                        <div class="section-header">
                            <span class="et-2-section-sub-title">Services</span>
                            <h2 class="et-section-title wow fadeInUp" data-wow-delay=".3s">
                                Tailored Services to
                                <span class="fw-300">Grow & Protect Your Wealth</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-span-4 col-start-9 sm:col-span-12">
                        <div class="wow fadeInUp" data-wow-delay=".4s">
                            <p class="text-primary text-[15px] leading-[1.5] mb-[clamp(16px,1.26vw,24px)]">
                                No matter where you are today, our coaching programs are designed to meet you there — and
                                guide you to where you truly
                                want to be.
                            </p>
                            <a href="services.html" class="et-btn et-2-btn wow fadeIn" data-wow-delay=".4s">
                                <span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
                                Check All Services
                            </a>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-4 md:grid-cols-3 sm:grid-cols-2 xxs:grid-cols-1 gap-[clamp(18px,1.26vw,24px)]">
                    <div class="col">
                        <div class="service-items2 block rounded-[16px] bg-etWhite relative text-primary px-[clamp(16px,1.89vw,36px)] py-[clamp(32px,3.36vw,64px)] overflow-hidden group duration-300 hover:bg-et2primary">
                            <img src="https://rudra-tailwind.vercel.app/assets/img/element/hover-ele.png" alt="img" class="-right-[100%] absolute bottom-0 z-n1 opacity-0 group-hover:right-0 group-hover:opacity-100 transition-all duration-300">
                            <div class="content">
                                <div class="flex items-center justify-center bg-white rounded-full mb-[48px] icons w-[clamp(46px,2.94vw,56px)] aspect-square">
                                    <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 6.44434C15 6.70674 14.9832 6.9652 14.9505 7.21871C16.7712 8.24891 18 10.2031 18 12.4443C18 15.758 15.3137 18.4443 12 18.4443C11.2987 18.4443 10.6256 18.324 10 18.1029V21.4443H8V17.8446C7.2499 18.228 6.40022 18.4443 5.5 18.4443C2.46243 18.4443 0 15.9819 0 12.9443C0 11.4917 0.56312 10.1706 1.48297 9.18752C1.87725 10.2675 2.49744 11.2387 3.28576 12.0432L4.71424 10.6434C3.99071 9.90504 3.45705 8.98201 3.1906 7.95122C3.06607 7.46975 3 6.96474 3 6.44434C3 3.13063 5.68629 0.444336 9 0.444336C12.3137 0.444336 15 3.13063 15 6.44434Z" fill="#2ECC71" class="fill-et2primary group-hover:fill-primary" />
                                    </svg>
                                </div>
                                <h4 class="mb-[clamp(10px,0.84vw,16px)] wow fadeInUp" data-wow-delay=".3s">
                                    <a href="services-details.html" class="inline text-primary text-[clamp(17px,1.05vw,20px)] font-semibold leading-[1.1]">
                                        Personal Growth
                                    </a>
                                </h4>
                                <p class="text-[#2D2D2D] text-[15px] leading-[1.5] mb-[clamp(10px,0.84vw,16px)]">
                                    Unlock your highest potential and cultivate habits aligned with your true self
                                </p>
                                <a href="services-details.html" class="link-btn flex items-center gap-[clamp(10px,0.84vw,16px)] text-primary text-[15px] font-semibold leading-[1.5]">
                                    Learn More<i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="service-items2 block rounded-[16px] bg-etWhite relative text-primary px-[clamp(16px,1.89vw,36px)] py-[clamp(32px,3.36vw,64px)] overflow-hidden group duration-300 hover:bg-et2primary">
                            <img src="https://rudra-tailwind.vercel.app/assets/img/element/hover-ele.png" alt="img" class="-right-[100%] absolute bottom-0 z-n1 opacity-0 group-hover:right-0 group-hover:opacity-100 transition-all duration-300">
                            <div class="content">
                                <div class="flex items-center justify-center bg-white rounded-full mb-[48px] icons w-[clamp(46px,2.94vw,56px)] aspect-square">
                                    <svg width="16" height="23" viewBox="0 0 16 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.49816 19.4491H11.5018C10.8432 21.0285 9.5794 22.2923 8 22.9509C6.4206 22.2923 5.15679 21.0285 4.49816 19.4491ZM14 14.2538L16 16.5221V18.4491H0V16.5221L2 14.2538V8.44909C2 4.96584 4.50442 2.00253 8 0.904297C11.4956 2.00253 14 4.96584 14 8.44909V14.2538ZM8 10.4491C9.1046 10.4491 10 9.55368 10 8.44909C10 7.34452 9.1046 6.44909 8 6.44909C6.8954 6.44909 6 7.34452 6 8.44909C6 9.55368 6.8954 10.4491 8 10.4491Z" fill="#2ECC71" class="fill-et2primary group-hover:fill-primary" />
                                    </svg>
                                </div>
                                <h4 class="mb-[clamp(10px,0.84vw,16px)] wow fadeInUp" data-wow-delay=".3s">
                                    <a href="services-details.html" class="inline text-primary text-[clamp(17px,1.05vw,20px)] font-semibold leading-[1.1]">
                                        Career Coaching
                                    </a>
                                </h4>
                                <p class="text-[#2D2D2D] text-[15px] leading-[1.5] mb-[clamp(10px,0.84vw,16px)]">
                                    Find clarity, direction, and confidence to thrive in your career journey.
                                </p>
                                <a href="services-details.html" class="link-btn flex items-center gap-[clamp(10px,0.84vw,16px)] text-primary text-[15px] font-semibold leading-[1.5]">
                                    Learn More<i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="service-items2 block rounded-[16px] bg-etWhite relative text-primary px-[clamp(16px,1.89vw,36px)] py-[clamp(32px,3.36vw,64px)] overflow-hidden group duration-300 hover:bg-et2primary">
                            <img src="https://rudra-tailwind.vercel.app/assets/img/element/hover-ele.png" alt="img" class="-right-[100%] absolute bottom-0 z-n1 opacity-0 group-hover:right-0 group-hover:opacity-100 transition-all duration-300">
                            <div class="content">
                                <div class="flex items-center justify-center bg-white rounded-full mb-[48px] icons w-[clamp(46px,2.94vw,56px)] aspect-square">
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 2.97947C10.4117 2.63913 9.72857 2.44434 9 2.44434C6.79086 2.44434 5 4.2352 5 6.44434V8.21856C4.14895 8.56078 3.45143 9.09219 2.94126 9.79367C2.29239 10.6858 2 11.779 2 12.9443C2 14.5057 2.79529 15.8799 4 16.6863V17.9443C4 20.4296 6.01472 22.4443 8.5 22.4443C9.42507 22.4443 10.285 22.1652 11 21.6865V17.9443C11 16.6113 10.67 15.759 10.1402 15.1851C9.59743 14.5971 8.71622 14.1608 7.3356 13.9307L7.6644 11.9579C8.96602 12.1748 10.1058 12.5816 11 13.2714V2.97947ZM13 2.97947V13.2714C13.8942 12.5816 15.034 12.1748 16.3356 11.9579L16.6644 13.9307C15.2838 14.1608 14.4026 14.5971 13.8598 15.1851C13.33 15.759 13 16.6113 13 17.9443V21.6865C13.715 22.1652 14.5749 22.4443 15.5 22.4443C17.9853 22.4443 20 20.4296 20 17.9443V16.6863C21.2047 15.8799 22 14.5057 22 12.9443C22 11.779 21.7076 10.6858 21.0587 9.79367C20.5486 9.09219 19.8511 8.56078 19 8.21856V6.44434C19 4.2352 17.2091 2.44434 15 2.44434C14.2714 2.44434 13.5883 2.63913 13 2.97947Z" fill="#2ECC71" class="fill-et2primary group-hover:fill-primary" />
                                    </svg>
                                </div>
                                <h4 class="mb-[clamp(10px,0.84vw,16px)] wow fadeInUp" data-wow-delay=".3s">
                                    <a href="services-details.html" class="inline text-primary text-[clamp(17px,1.05vw,20px)] font-semibold leading-[1.1]">
                                        Mindset Mastery
                                    </a>
                                </h4>
                                <p class="text-[#2D2D2D] text-[15px] leading-[1.5] mb-[clamp(10px,0.84vw,16px)]">
                                    Break free from limiting beliefs and adopt a powerful, growth-focused mindset
                                </p>
                                <a href="services-details.html" class="link-btn flex items-center gap-[clamp(10px,0.84vw,16px)] text-primary text-[15px] font-semibold leading-[1.5]">
                                    Learn More<i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="service-items2 block rounded-[16px] bg-etWhite relative text-primary px-[clamp(16px,1.89vw,36px)] py-[clamp(32px,3.36vw,64px)] overflow-hidden group duration-300 hover:bg-et2primary">
                            <img src="https://rudra-tailwind.vercel.app/assets/img/element/hover-ele.png" alt="img" class="-right-[100%] absolute bottom-0 z-n1 opacity-0 group-hover:right-0 group-hover:opacity-100 transition-all duration-300">
                            <div class="content">
                                <div class="flex items-center justify-center bg-white rounded-full mb-[48px] icons w-[clamp(46px,2.94vw,56px)] aspect-square">
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.1213 10.9235C13.7308 10.5329 13.0976 10.5329 12.7071 10.9235L12 11.6306C11.2189 12.4116 9.95259 12.4116 9.17154 11.6306C8.39049 10.8495 8.39049 9.58322 9.17154 8.80217L14.8022 3.17002C16.9061 2.69407 19.2008 3.27509 20.8388 4.91309C23.2582 7.33245 23.3716 11.1845 21.1792 13.7382L19.071 15.8732L14.1213 10.9235ZM3.16113 4.91309C5.33452 2.7397 8.66411 2.42717 11.17 3.9755L7.75732 7.38796C6.19523 8.95006 6.19523 11.4827 7.75732 13.0448C9.27209 14.5595 11.6995 14.6054 13.2695 13.1825L13.4142 13.0448L17.6568 17.2874L13.4142 21.5301C12.6331 22.3111 11.3668 22.3111 10.5858 21.5301L3.16113 14.1054C0.622722 11.567 0.622722 7.45149 3.16113 4.91309Z" fill="#2ECC71" class="fill-et2primary group-hover:fill-primary" />
                                    </svg>
                                </div>
                                <h4 class="mb-[clamp(10px,0.84vw,16px)] wow fadeInUp" data-wow-delay=".3s">
                                    <a href="services-details.html" class="inline text-primary text-[clamp(17px,1.05vw,20px)] font-semibold leading-[1.1]">
                                        Relationship
                                    </a>
                                </h4>
                                <p class="text-[#2D2D2D] text-[15px] leading-[1.5] mb-[clamp(10px,0.84vw,16px)]">
                                    Strengthen your relationships by nurturing connection, communication, and self-love
                                </p>
                                <a href="services-details.html" class="link-btn flex items-center gap-[clamp(10px,0.84vw,16px)] text-primary text-[15px] font-semibold leading-[1.5]">
                                    Learn More<i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SERVICES SECTION END -->


        <!--- WORK SECTION START -->
        <section class="work-section fix bg-etWhite py-[clamp(60px,5.25vw,100px)] overflow-hidden">
            <div class="et-container">
                <div class="grid grid-cols-2 md:grid-cols-1 gap-[clamp(16px,1.26vw,24px)]">
                    <div class="col-lg-6">
                        <div class="section-header mb-[clamp(20px,2.10vw,40px)]">
                            <span class="et-2-section-sub-title">Why wrok with me</span>
                            <h2 class="et-section-title wow fadeInUp mb-[clamp(16px,1.26vw,24px)]" data-wow-delay=".3s">A Holistic Approach <span class="fw-300">Focused Entirely on You</span></h2>
                            <p class="text-[15px] text-primary font-normal leading-[1.5]">Choosing the right coach is a big decision. That’s why we go beyond traditional coaching methods — offering you a supportive, personalized, and empowering experience designed to spark real, lasting change.</p>
                        </div>
                        <div class="nano-project-image relative w-full">
                            <img src="https://rudra-tailwind.vercel.app/assets/img/about/about-thumb2.png" alt="img" class="rounded-lg w-full">
                            <div class="video w-[clamp(65px,4.20vw,80px)] aspect-square flex items-center justify-center absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-white rounded-full">
                                <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-btn video-popup">
                                    <svg width="26" height="31" viewBox="0 0 26 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M25.7461 2.28906L2.84277 14.5781L23.9609 29.0273V11.208H25.4502V30.832H23.9609V30.8311L1.36523 15.3711L0.661133 14.0586L25.042 0.976562L25.7461 2.28906Z" fill="#234345" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="work-wrapper flex flex-col gap-[clamp(10px,0.84vw,16px)] ml-auto max-w-[clamp(460px,29.43vw,560px)] md:max-w-full">
                            <div class="work-list-item items-start flex gap-[clamp(16px,1.26vw,24px)] rounded-[8px] bg-white p-[clamp(20px,2.10vw,40px)] wow fadeInUp" data-wow-delay=".2s">
                                <div class="icon flex items-center justify-center aspect-square min-w-[clamp(46px,2.94vw,56px)] rounded-full bg-[#2ECC71]/10">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.0049 16.9408V19.0026H18.0049V21.0026H6.00488V19.0026H11.0049V16.9408C7.05857 16.4487 4.00488 13.0823 4.00488 9.00269V3.00269H20.0049V9.00269C20.0049 13.0823 16.9512 16.4487 13.0049 16.9408ZM1.00488 5.00269H3.00488V9.00269H1.00488V5.00269ZM21.0049 5.00269H23.0049V9.00269H21.0049V5.00269Z" fill="#2ECC71" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="mb-[clamp(5px,0.42vw,8px)]">
                                        <a href="#0" class="inline text-primary text-[clamp(17px,1.05vw,20px)] font-semibold leading-[1.5]">Certified Expert Coaching</a>
                                    </h4>
                                    <p class="text-[#2D2D2D] text-[15px] leading-[1.5]">
                                        Work with a professionally certified coach committed to your personal growth success
                                    </p>
                                </div>
                            </div>
                            <div class="work-list-item items-start ms-[clamp(24px,2.52vw,48px)] xxs:ms-0 flex gap-[clamp(16px,1.26vw,24px)] rounded-[8px] bg-white p-[clamp(20px,2.10vw,40px)] wow fadeInUp" data-wow-delay=".3s">
                                <div class="icon flex items-center justify-center aspect-square min-w-[clamp(46px,2.94vw,56px)] rounded-full bg-[#2ECC71]/10">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.78307 2.82598L12 1L20.2169 2.82598C20.6745 2.92766 21 3.33347 21 3.80217V13.7889C21 15.795 19.9974 17.6684 18.3282 18.7812L12 23L5.6718 18.7812C4.00261 17.6684 3 15.795 3 13.7889V3.80217C3 3.33347 3.32553 2.92766 3.78307 2.82598ZM12 13.5L14.9389 15.0451L14.3776 11.7725L16.7553 9.45492L13.4695 8.97746L12 6L10.5305 8.97746L7.24472 9.45492L9.62236 11.7725L9.06107 15.0451L12 13.5Z" fill="#2ECC71" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="mb-[clamp(5px,0.42vw,8px)]">
                                        <a href="#0" class="inline text-primary text-[clamp(17px,1.05vw,20px)] font-semibold leading-[1.5]">Proven Success Stories</a>
                                    </h4>
                                    <p class="text-[#2D2D2D] text-[15px] leading-[1.5]">
                                        Join hundreds who have unlocked their potential, transformed their lives
                                    </p>
                                </div>
                            </div>
                            <div class="work-list-item items-start flex gap-[clamp(16px,1.26vw,24px)] rounded-[8px] bg-white p-[clamp(20px,2.10vw,40px)] wow fadeInUp" data-wow-delay=".4s">
                                <div class="icon flex items-center justify-center aspect-square min-w-[clamp(46px,2.94vw,56px)] rounded-full bg-[#2ECC71]/10">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 13C20.0929 13 21.1175 13.2922 22 13.8027V6C22 5.44772 21.5523 5 21 5H12.4142L10.4142 3H3C2.44772 3 2 3.44772 2 4V20C2 20.5523 2.44772 21 3 21H13.3414C13.1203 20.3744 13 19.7013 13 19C13 15.6863 15.6863 13 19 13ZM15.4645 18.4647L19 22.0002L23.9497 17.0505L22.5355 15.6362L19 19.1718L16.8787 17.0505L15.4645 18.4647Z" fill="#2ECC71" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="mb-[clamp(5px,0.42vw,8px)]">
                                        <a href="#0" class="inline text-primary text-[clamp(17px,1.05vw,20px)] font-semibold leading-[1.5]">Customized Action Plans</a>
                                    </h4>
                                    <p class="text-[#2D2D2D] text-[15px] leading-[1.5]">
                                        Get coaching tailored to your unique goals — with clear steps to move you forward
                                        with confidence
                                    </p>
                                </div>
                            </div>
                            <div class="work-list-item items-start ms-[clamp(24px,2.52vw,48px)] xxs:ms-0 flex gap-[clamp(16px,1.26vw,24px)] rounded-[8px] bg-white p-[clamp(20px,2.10vw,40px)] wow fadeInUp" data-wow-delay=".5s">
                                <div class="icon flex items-center justify-center aspect-square min-w-[clamp(46px,2.94vw,56px)] rounded-full bg-[#2ECC71]/10">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.2914 5.99994H20.0002C20.5525 5.99994 21.0002 6.44766 21.0002 6.99994V13.9999C21.0002 14.5522 20.5525 14.9999 20.0002 14.9999H18.0002L13.8319 9.16427C13.3345 8.46797 12.4493 8.16522 11.6297 8.41109L9.14444 9.15668C8.43971 9.3681 7.6758 9.17551 7.15553 8.65524L6.86277 8.36247C6.41655 7.91626 6.49011 7.17336 7.01517 6.82332L12.4162 3.22262C13.0752 2.78333 13.9312 2.77422 14.5994 3.1994L18.7546 5.8436C18.915 5.94571 19.1013 5.99994 19.2914 5.99994ZM5.02708 14.2947L3.41132 15.7085C2.93991 16.1209 2.95945 16.8603 3.45201 17.2474L8.59277 21.2865C9.07284 21.6637 9.77592 21.5264 10.0788 20.9963L10.7827 19.7645C11.2127 19.012 11.1091 18.0682 10.5261 17.4269L7.82397 14.4545C7.09091 13.6481 5.84722 13.5771 5.02708 14.2947ZM7.04557 5H3C2.44772 5 2 5.44772 2 6V13.5158C2 13.9242 2.12475 14.3173 2.35019 14.6464C2.3741 14.6238 2.39856 14.6015 2.42357 14.5796L4.03933 13.1658C5.47457 11.91 7.65103 12.0343 8.93388 13.4455L11.6361 16.4179C12.6563 17.5401 12.8376 19.1918 12.0851 20.5087L11.4308 21.6538C11.9937 21.8671 12.635 21.819 13.169 21.4986L17.5782 18.8531C18.0786 18.5528 18.2166 17.8896 17.8776 17.4146L12.6109 10.0361C12.4865 9.86205 12.2652 9.78636 12.0603 9.84783L9.57505 10.5934C8.34176 10.9634 7.00492 10.6264 6.09446 9.7159L5.80169 9.42313C4.68615 8.30759 4.87005 6.45035 6.18271 5.57524L7.04557 5Z" fill="#2ECC71" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="mb-[clamp(5px,0.42vw,8px)]">
                                        <a href="#0" class="inline text-primary text-[clamp(17px,1.05vw,20px)] font-semibold leading-[1.5]">Supportive, Judgment-Free Space</a>
                                    </h4>
                                    <p class="text-[#2D2D2D] text-[15px] leading-[1.5]">
                                        Get coaching tailored to your unique goals — with clear steps to move you forward
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- WORK SECTION END -->


        <!-- DOWNLOAD SECTION START -->
        <section class="download-section bg-[url('assets/img/about/download-bg.png')] bg-center bg-no-repeat bg-cover rounded-[24px] m-[clamp(8px,0.58vw,11px)] overflow-hidden px-[clamp(12px,0.89vw,17px)] py-[clamp(95px,8.93vw,170px)]"
                 style="background-image: url('https://rudra-tailwind.vercel.app/assets/img/about/download-bg.png');"
        >
            <div class="et-container">
                <div class="download-content max-w-[clamp(447px,23.65vw,450px)] xxs:max-w-full">
                    <div class="section-header">
                        <h2 class="et-section-title text-white mb-[clamp(16px,1.26vw,24px)] wow fadeInUp relative before:absolute before:right-[105%] before:top-[20px] before:h-[1px] before:w-[95px] before:bg-white/41" data-wow-delay=".3s">
                            Download your
                            <span class="fw-300">free self discovery workbook</span>
                        </h2>
                        <p class="italic text-white text-[15px] leading-[1.5] mb-[clamp(20px,2.10vw,40px)]">
                            Start your journey today — no spam, ever
                        </p>
                        <a href="contact.html" class="et-btn et-2-btn bg-white text-black hover:text-white">
                            <span class="icon bg-et2primary"><i class="fa-solid fa-arrow-right"></i></span>
                            Get My Free Workbook
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- DOWNLOAD SECTION END -->


        <!-- TESTIMONIAL 2.0 SECTION START -->
        <section class="testimonial-section2 overflow-hidden py-[clamp(40px,5.25vw,100px)]">
            <div class="et-container">
                <div class="grid grid-cols-12 gap-[clamp(24px,2.52vw,48px)]">
                    <div class="col-span-4 md:col-span-6 xxs:col-span-12">
                        <div class="section-header">
                            <span class="et-2-section-sub-title">Testimonials</span>
                            <h2 class="et-section-title wow fadeInUp mb-[clamp(16px,1.26vw,24px)]" data-wow-delay=".3s">
                                Life-Changing Journeys,
                                <span class="fw-300">Told by Our Clients</span>
                            </h2>
                            <img src="https://rudra-tailwind.vercel.app/assets/img/testimonial/quote2.png" alt="img">
                        </div>
                    </div>

                    <div class="col-span-3 md:col-span-6 xxs:col-span-12">
                        <div class="thumb w-full rounded-lg img-custom-anim-right overflow-hidden">
                            <img src="https://rudra-tailwind.vercel.app/assets/img/testimonial/testimonial-big1.png" alt="img" class="rounded-lg w-full">
                        </div>
                    </div>

                    <div class="col-span-5 md:col-span-12 relative">
                        <div class="swiper testimonial-slider1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-content2 relative">
                                        <h4 class="text-primary text-[clamp(17px,1.05vw,20px)] italic leading-[1.47] mb-[clamp(20px,2.10vw,40px)]">
                                            Before working with this team, I felt lost. Now I feel confident in my financial
                                            roadmap and I’m finally saving
                                            consistently I didn’t know where to start with my finances. They made everything
                                            simple and actionable saving
                                            consistently
                                        </h4>
                                        <div>
                                            <h4 class="text-[#2D2D2D] text-[clamp(17px,1.05vw,20px)] font-bold leading-[1.47] mb-[4px]">
                                                Daniel K.
                                            </h4>
                                            <span class="text-[#2d2d2d] text-[15px] leading-[2.13]">
                                                Senior Executive
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="array-button flex items-center mt-[clamp(16px,1.26vw,24px)] gap-[clamp(10px,0.84vw,16px)] position-absolute">
                            <button type="button" class="array-prev rounded-full w-[clamp(40px,2.36vw,45px)] aspect-square flex items-center justify-center hover:bg-primary p-[clamp(5px,0.42vw,8px)] group">
                                <svg width="28" height="18" viewBox="0 0 28 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.3337 10.3334L27.3338 7.66685H5.77123L11.0375 2.40051L9.15191 0.514893L0.666626 9.00019L9.15191 17.4855L11.0375 15.5998L5.77116 10.3335L27.3337 10.3334Z" fill="#1C4B42" class="group-hover:fill-white" />
                                </svg>
                            </button>
                            <button type="button" class="array-next rounded-full w-[clamp(40px,2.36vw,45px)] aspect-square flex items-center justify-center hover:bg-primary p-[clamp(5px,0.42vw,8px)] group">
                                <svg width="28" height="18" viewBox="0 0 28 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.666324 10.3334L0.666138 7.66685H22.2287L16.9624 2.40051L18.848 0.514893L27.3333 9.00019L18.848 17.4855L16.9624 15.5998L22.2288 10.3335L0.666324 10.3334Z" fill="#1C4B42" class="group-hover:fill-white" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- TESTIMONIAL 2.0 SECTION END -->


        <!-- PRICING SECTION START -->
        <section class="pricing-section2 overflow-hidden bg-primary rounded-lg m-[clamp(10px,0.84vw,16px)] py-[clamp(60px,5.25vw,100px)]">
            <div class="et-container">
                <div class="grid grid-cols-12 gap-[clamp(16px,1.26vw,24px)] items-end mb-[clamp(20px,2.10vw,40px)]">
                    <div class="col-span-7 md:col-span-12">
                        <div class="section-header">
                            <span class="et-2-section-sub-title text-white border-white">Pricing</span>
                            <h2 class="et-section-title text-white wow fadeInUp" data-wow-delay=".3s">
                                Flexible Coaching <br> Packages
                                <span class="fw-300">to Fit Your Journey</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-span-5 md:col-span-12">
                        <div class="wow fadeInUp" data-wow-delay=".4s">
                            <p class="text-white opacity-75 text-[15px] leading-[1.5]">
                                We understand that every journey is unique. That’s why we offer tailored coaching packages
                                designed to fit your personal
                                goals and needs.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-3 md:grid-cols-2 xs:grid-cols-1 gap-[clamp(16px,1.26vw,24px)]">
                    <div class="col">
                        <div class="pricing-plan-items pricing-plan-items2 relative rounded-[8px] bg-white/5 border border-white/16 overflow-hidden px-[clamp(20px,2.10vw,40px)] py-[clamp(28px,2.94vw,56px)] wow fadeInUp" data-wow-delay=".2s">
                            <div class="mb-[clamp(16px,1.26vw,24px)]">
                                <h4 class="text-white text-[clamp(17px,1.05vw,20px)] font-bold leading-[1.25] mb-[4px]">Starter Plan</h4>
                                <p class="opacity-75 text-[15px] leading-[1.5] text-white">Basic task & project management</p>
                            </div>
                            <div class="flex items-end gap-[clamp(5px,0.42vw,8px)] mb-[clamp(16px,1.26vw,24px)]">
                                <h2 class="text-white text-[clamp(24px,2.52vw,48px)] font-extrabold leading-[1.1]">$199</h2>
                                <span class="text-white text-[15px] italic leading-[1.5] opacity-[0.75]">/One-time</span>
                            </div>
                            <a href="contact.html" class="et-btn bg-white text-primary w-full justify-center mb-[clamp(20px,2.10vw,40px)] h-[clamp(43px,2.52vw,48px)] hover:text-white">
                                Get Started Today
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <ul class="flex flex-col gap-[16px] border-t border-white/15 pt-[clamp(24px,2.52vw,48px)] *:flex *:items-center *:gap-[16px] *:text-white *:text-[15px] *:leading-[1.5] *:list-none *:text-left">
                                <li class="d-flex align-items-center gap-xl-3 gap-2 text-white fz-15">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.31859 5.47358C6.60166 4.44722 8.22916 3.8335 10 3.8335C11.7708 3.8335 13.3983 4.44722 14.6814 5.47358L15.8926 4.26243L17.0711 5.44094L15.8599 6.65209C16.8863 7.93515 17.5 9.56266 17.5 11.3335C17.5 15.4757 14.1422 18.8335 10 18.8335C5.85787 18.8335 2.5 15.4757 2.5 11.3335C2.5 9.56266 3.11373 7.93515 4.14008 6.65209L2.92893 5.44094L4.10744 4.26243L5.31859 5.47358ZM10.8333 10.5002V6.74616L6.66667 12.1668H9.16667V15.9168L13.3333 10.5002H10.8333ZM6.66667 1.3335H13.3333V3.00016H6.66667V1.3335Z" fill="white" fill-opacity="0.5" />
                                    </svg>
                                    1 Strategy Session
                                </li>
                                <li class="d-flex align-items-center gap-xl-3 gap-2 text-white fz-15">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.86911 6.21182L9.57467 1.59036C9.83858 1.43207 10.1683 1.43212 10.4322 1.59051L18.1312 6.2118C18.2567 6.28711 18.3334 6.42272 18.3334 6.56905V17.1665C18.3334 17.6268 17.9603 17.9999 17.5001 17.9999H2.50008C2.03985 17.9999 1.66675 17.6268 1.66675 17.1665V6.56915C1.66675 6.42276 1.74356 6.28712 1.86911 6.21182ZM15.2881 7.36972L10.0506 11.9023L4.7061 7.3646L3.6274 8.63511L10.061 14.0974L16.3787 8.62998L15.2881 7.36972Z" fill="white" fill-opacity="0.5" />
                                    </svg>
                                    Email Support
                                </li>
                                <li class="d-flex align-items-center gap-xl-3 gap-2 text-white fz-15">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.66675 2.1665V18.8332H3.33341V15.4998H1.66675V13.8332H3.33341V11.3332H1.66675V9.6665H3.33341V7.1665H1.66675V5.49984H3.33341V2.1665H6.66675ZM16.6708 2.1665C17.5891 2.1665 18.3334 2.91501 18.3334 3.8255V17.1742C18.3334 18.0904 17.5896 18.8332 16.6708 18.8332H8.33342V2.1665H16.6708Z" fill="white" fill-opacity="0.5" />
                                    </svg>
                                    Budget Planning
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="pricing-plan-items pricing-plan-items2 priicng-growth2 bg-et2primary relative rounded-[8px] border border-white/16 overflow-hidden px-[clamp(20px,2.10vw,40px)] py-[clamp(28px,2.94vw,56px)] wow fadeInUp" data-wow-delay=".4s">
                            <div class="mb-[clamp(16px,1.26vw,24px)]">
                                <h4 class="text-primary text-[clamp(17px,1.05vw,20px)] font-bold leading-[1.25] mb-[4px]">Growth Plan</h4>
                                <p class="opacity-75 text-[15px] leading-[1.5] text-primary">Advanced features integrations</p>
                            </div>
                            <div class="flex items-end gap-[clamp(5px,0.42vw,8px)] mb-[clamp(16px,1.26vw,24px)]">
                                <h2 class="text-primary text-[clamp(24px,2.52vw,48px)] font-extrabold leading-[1.1]">$299</h2>
                                <span class="text-primary text-[15px] italic leading-[1.5] opacity-[0.75]">/One-time</span>
                            </div>
                            <a href="contact.html" class="et-btn h-[clamp(43px,2.52vw,48px)] w-full justify-center mb-[clamp(20px,2.10vw,40px)]">
                                Start Scaling
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <ul class="flex flex-col gap-[16px] border-t border-white/15 pt-[clamp(24px,2.52vw,48px)] *:flex *:items-center *:gap-[16px] *:text-primary *:text-[15px] *:leading-[1.5] *:list-none *:text-left">
                                <li class="d-flex align-items-center gap-xl-3 gap-2 theme-clr4 fw-500 fz-15">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.66675 18.8335C1.66675 15.1516 4.65151 12.1668 8.33341 12.1668C12.0153 12.1668 15.0001 15.1516 15.0001 18.8335H1.66675ZM8.33341 11.3335C5.57091 11.3335 3.33341 9.096 3.33341 6.3335C3.33341 3.571 5.57091 1.3335 8.33341 1.3335C11.0959 1.3335 13.3334 3.571 13.3334 6.3335C13.3334 9.096 11.0959 11.3335 8.33341 11.3335ZM14.4691 13.1945C17.0402 13.8516 18.9733 16.1031 19.1531 18.8335H16.6667C16.6667 16.6587 15.8336 14.6784 14.4691 13.1945ZM12.7835 11.2976C14.1441 10.077 15.0001 8.30522 15.0001 6.3335C15.0001 5.15238 14.6929 4.043 14.1542 3.08089C16.0628 3.4618 17.5001 5.1457 17.5001 7.16683C17.5001 9.46891 15.6355 11.3335 13.3334 11.3335C13.147 11.3335 12.9634 11.3212 12.7835 11.2976Z" fill="#064635" />
                                    </svg>
                                    Custom Pricing
                                </li>
                                <li class="d-flex align-items-center gap-xl-3 gap-2 theme-clr4 fw-500 fz-15">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.1707 13.8356H15.8373V3.83561H7.50398V5.50228H14.1707V13.8356ZM14.1707 15.5023V18.0015C14.1707 18.4622 13.7957 18.8356 13.3316 18.8356H3.34303C2.87965 18.8356 2.50415 18.4651 2.50415 18.0015L2.50632 6.33634C2.50641 5.8757 2.88135 5.50228 3.34533 5.50228H5.83732V3.00228C5.83732 2.54204 6.21042 2.16895 6.67065 2.16895H16.6707C17.1309 2.16895 17.504 2.54204 17.504 3.00228V14.6689C17.504 15.1292 17.1309 15.5023 16.6707 15.5023H14.1707ZM5.83732 13.8356V15.5023H7.50398V16.3356H9.17067V15.5023H9.58733C10.7379 15.5023 11.6707 14.5695 11.6707 13.4189C11.6707 12.2684 10.7379 11.3356 9.58733 11.3356H7.08732C6.8572 11.3356 6.67065 11.149 6.67065 10.9189C6.67065 10.6889 6.8572 10.5023 7.08732 10.5023H10.8373V8.8356H9.17067V8.00228H7.50398V8.8356H7.08732C5.93673 8.8356 5.00398 9.76835 5.00398 10.9189C5.00398 12.0695 5.93673 13.0023 7.08732 13.0023H9.58733C9.81742 13.0023 10.004 13.1889 10.004 13.4189C10.004 13.649 9.81742 13.8356 9.58733 13.8356H5.83732Z" fill="#064635" />
                                    </svg>
                                    KPI Dashboards
                                </li>
                                <li class="d-flex align-items-center gap-xl-3 gap-2 theme-clr4 fw-500 fz-15">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.5 8.88583V3.83333C17.5 3.3731 17.1269 3 16.6667 3H15.8333C14.1845 4.64887 11.0856 5.57273 9.16667 6.01068V14.9893C11.0856 15.4273 14.1845 16.3512 15.8333 18H16.6667C17.1269 18 17.5 17.6269 17.5 17.1667V12.1142C18.2188 11.9292 18.75 11.2766 18.75 10.5C18.75 9.72342 18.2188 9.07083 17.5 8.88583ZM4.16667 6.33333C3.24619 6.33333 2.5 7.07953 2.5 8V13C2.5 13.9205 3.24619 14.6667 4.16667 14.6667H5L5.83333 18.8333H7.5V6.33333H4.16667Z" fill="#064635" />
                                    </svg>
                                    Full Email + Call Support
                                </li>
                            </ul>
                            <img src="https://rudra-tailwind.vercel.app/assets/img/element/popular-badge.png" alt="img" class="popular-badge absolute top-0 right-0">
                        </div>
                    </div>
                    <div class="col">
                        <div class="pricing-plan-items pricing-plan-items2 relative rounded-[8px] bg-white/5 border border-white/16 overflow-hidden px-[clamp(20px,2.10vw,40px)] py-[clamp(28px,2.94vw,56px)] wow fadeInUp" data-wow-delay=".5s">
                            <div class="mb-[clamp(16px,1.26vw,24px)]">
                                <h4 class="text-white text-[clamp(17px,1.05vw,20px)] font-bold leading-[1.25] mb-[4px]">Enterprise Plan</h4>
                                <p class="opacity-75 text-[15px] leading-[1.5] text-white">Custom solutions for large teams</p>
                            </div>
                            <div class="flex items-end gap-[clamp(5px,0.42vw,8px)] mb-[clamp(16px,1.26vw,24px)]">
                                <h2 class="text-white text-[clamp(24px,2.52vw,48px)] font-extrabold leading-[1.1]">$499</h2>
                                <span class="text-white text-[15px] italic leading-[1.5] opacity-[0.75]">/month</span>
                            </div>
                            <a href="contact.html" class="et-btn bg-white text-primary w-full justify-center mb-[clamp(20px,2.10vw,40px)] h-[clamp(43px,2.52vw,48px)] hover:text-white">
                                Book a Free Consultation
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <ul class="flex flex-col gap-[16px] border-t border-white/15 pt-[clamp(24px,2.52vw,48px)] *:flex *:items-center *:gap-[16px] *:text-white *:text-[15px] *:leading-[1.5] *:list-none *:text-left">
                                <li class="d-flex align-items-center gap-xl-3 gap-2 text-white fz-15">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.31859 5.47358C6.60166 4.44722 8.22916 3.8335 10 3.8335C11.7708 3.8335 13.3983 4.44722 14.6814 5.47358L15.8926 4.26243L17.0711 5.44094L15.8599 6.65209C16.8863 7.93515 17.5 9.56266 17.5 11.3335C17.5 15.4757 14.1422 18.8335 10 18.8335C5.85787 18.8335 2.5 15.4757 2.5 11.3335C2.5 9.56266 3.11373 7.93515 4.14008 6.65209L2.92893 5.44094L4.10744 4.26243L5.31859 5.47358ZM10.8333 10.5002V6.74616L6.66667 12.1668H9.16667V15.9168L13.3333 10.5002H10.8333ZM6.66667 1.3335H13.3333V3.00016H6.66667V1.3335Z" fill="white" fill-opacity="0.5" />
                                    </svg>
                                    Custom Pricing
                                </li>
                                <li class="d-flex align-items-center gap-xl-3 gap-2 text-white fz-15">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.86911 6.21182L9.57467 1.59036C9.83858 1.43207 10.1683 1.43212 10.4322 1.59051L18.1312 6.2118C18.2567 6.28711 18.3334 6.42272 18.3334 6.56905V17.1665C18.3334 17.6268 17.9603 17.9999 17.5001 17.9999H2.50008C2.03985 17.9999 1.66675 17.6268 1.66675 17.1665V6.56915C1.66675 6.42276 1.74356 6.28712 1.86911 6.21182ZM15.2881 7.36972L10.0506 11.9023L4.7061 7.3646L3.6274 8.63511L10.061 14.0974L16.3787 8.62998L15.2881 7.36972Z" fill="white" fill-opacity="0.5" />
                                    </svg>
                                    KPI Dashboards
                                </li>
                                <li class="d-flex align-items-center gap-xl-3 gap-2 text-white fz-15">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.66675 2.1665V18.8332H3.33341V15.4998H1.66675V13.8332H3.33341V11.3332H1.66675V9.6665H3.33341V7.1665H1.66675V5.49984H3.33341V2.1665H6.66675ZM16.6708 2.1665C17.5891 2.1665 18.3334 2.91501 18.3334 3.8255V17.1742C18.3334 18.0904 17.5896 18.8332 16.6708 18.8332H8.33342V2.1665H16.6708Z" fill="white" fill-opacity="0.5" />
                                    </svg>
                                    Full Email + Call Support
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- PRICING SECTION END -->


        <!-- FAQ 02 START -->
        <section class="faq-section02 overflow-hidden bg-etWhite py-[clamp(60px,5.25vw,100px)]">
            <div class="et-container">
                <div class="grid grid-cols-12 gap-[clamp(16px,1.26vw,24px)]">
                    <div class="col-span-5 md:col-span-12">
                        <div class="faq-content2">
                            <div class="section-title">
                                <span class="et-2-section-sub-title">FAQ</span>
                                <h2 class="et-section-title mb-[clamp(10px,0.84vw,16px)] wow fadeInUp" data-wow-delay=".3s">
                                    Frequently Asked Questions
                                    <span class="fw-300">About Life Coaching</span>
                                </h2>
                                <p class="text-[15px] text-primary font-normal leading-[1.5] mb-[clamp(20px,2.10vw,40px)] wow fadeInUp" data-wow-delay=".3s">
                                    Life coaching is a personal and unique experience. To help you understand more about how
                                    coaching works and how it can
                                    benefit you, we've answered some of the most common questions below. If you still have
                                    questions, feel free to reach out
                                    — we're here to help.
                                </p>
                                <h5 class="text-primary text-[clamp(16px,0.95vw,18px)] font-bold leading-[1.2] mb-[clamp(16px,1.26vw,24px)]">Still have questions? <br>
                                    Don't worries we have answers!</h5>
                                <a href="contact.html" class="et-btn et-2-btn wow fadeIn" data-wow-delay=".4s">
                                    <span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    Contact Us Now
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-7 md:col-span-12">
                        <div class="accordion accordion-style1 accordion-style2 backdrop-blur-sm bg-white/80 rounded-2xl shadow-[8px_8px_32px_0px_#240C8714] overflow-hidden p-3" id="accordionExample">
                            <div class="accordion-item group grid grid-rows-[max-content_0fr] [&[class~='open']]:grid-rows-[max-content_1fr] duration-300 backdrop-blur-sm bg-white/60 shadow-[8px_0px_32px_0px_#240C8714] wow fadeInUp open" data-wow-delay=".2s">
                                <h2 class="accordion-header">
                                    <button class="accordion-button w-full flex items-center justify-between rounded-t-[5px] text-[#1C4B42] font-semibold gap-[8px] leading-[1.1] px-[20px] py-[clamp(16px,1.10vw,21px)] relative text-left transition-colors z-[3]" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        1. What industries do you specialize in?
                                        <span class="cus-icon shrink-0 w-[clamp(30px,1.79vw,34px)] aspect-square flex items-center justify-center bg-white rounded-full transform transition-[all_0.4s_ease-in-out] before::bg-et2primary before:text-white group-[.open]:bg-et2primary group-[.open]:text-primary group-[.open]:rotate-180"><i class="fa-solid fa-chevron-down"></i></span>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse overflow-hidden show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body px-[clamp(15px,1.05vw,20px)] pb-[clamp(16px,1.26vw,24px)]">
                                        <p class="text-primary text-[15px] leading-[1.5]">
                                            We work with clients across a wide range of industries including real estate,
                                            healthcare, SaaS, legal, e-commerce, and
                                            more. Our financial strategies are tailored to each sector's unique needs.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item group grid grid-rows-[max-content_0fr] [&[class~='open']]:grid-rows-[max-content_1fr] duration-300 backdrop-blur-sm bg-white/60 shadow-[8px_0px_32px_0px_#240C8714] wow fadeInUp" data-wow-delay=".3s">
                                <h2 class="accordion-header">
                                    <button class="accordion-button w-full flex items-center justify-between rounded-t-[5px] text-[#1C4B42] font-semibold gap-[8px] leading-[1.1] px-[20px] py-[clamp(16px,1.10vw,21px)] relative text-left transition-colors z-[3] collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        2. Do you offer one-time consultations or ongoing support?
                                        <span class="cus-icon shrink-0 w-[clamp(30px,1.79vw,34px)] aspect-square flex items-center justify-center bg-white rounded-full transform transition-[all_0.4s_ease-in-out] before::bg-et2primary before:text-white group-[.open]:bg-et2primary group-[.open]:text-primary group-[.open]:rotate-180"><i class="fa-solid fa-chevron-down"></i></span>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse overflow-hidden" data-bs-parent="#accordionExample">
                                    <div class="accordion-body px-[clamp(15px,1.05vw,20px)] pb-[clamp(16px,1.26vw,24px)]">
                                        <p class="text-primary text-[15px] leading-[1.5]">
                                            We work with clients across a wide range of industries including real estate,
                                            healthcare, SaaS, legal,
                                            e-commerce, and
                                            more. Our financial strategies are tailored to each sector’s unique needs.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item group grid grid-rows-[max-content_0fr] [&[class~='open']]:grid-rows-[max-content_1fr] duration-300 backdrop-blur-sm bg-white/60 shadow-[8px_0px_32px_0px_#240C8714] wow fadeInUp" data-wow-delay=".4s">
                                <h2 class="accordion-header">
                                    <button class="accordion-button w-full flex items-center justify-between rounded-t-[5px] text-[#1C4B42] font-semibold gap-[8px] leading-[1.1] px-[20px] py-[clamp(16px,1.10vw,21px)] relative text-left transition-colors z-[3] collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        3. Can I customize a plan based on my business size & budget?
                                        <span class="cus-icon shrink-0 w-[clamp(30px,1.79vw,34px)] aspect-square flex items-center justify-center bg-white rounded-full transform transition-[all_0.4s_ease-in-out] before::bg-et2primary before:text-white group-[.open]:bg-et2primary group-[.open]:text-primary group-[.open]:rotate-180"><i class="fa-solid fa-chevron-down"></i></span>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse overflow-hidden" data-bs-parent="#accordionExample">
                                    <div class="accordion-body px-[clamp(15px,1.05vw,20px)] pb-[clamp(16px,1.26vw,24px)]">
                                        <p class="text-primary text-[15px] leading-[1.5]">
                                            We work with clients across a wide range of industries including real estate,
                                            healthcare, SaaS, legal,
                                            e-commerce, and
                                            more. Our financial strategies are tailored to each sector’s unique needs.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item group grid grid-rows-[max-content_0fr] [&[class~='open']]:grid-rows-[max-content_1fr] duration-300 backdrop-blur-sm bg-white/60 shadow-[8px_0px_32px_0px_#240C8714] wow fadeInUp" data-wow-delay=".5s">
                                <h2 class="accordion-header">
                                    <button class="accordion-button w-full flex items-center justify-between rounded-t-[5px] text-[#1C4B42] font-semibold gap-[8px] leading-[1.1] px-[20px] py-[clamp(16px,1.10vw,21px)] relative text-left transition-colors z-[3] collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree01" aria-expanded="false" aria-controls="collapseThree01">
                                        5. Is my financial data kept confidential?
                                        <span class="cus-icon shrink-0 w-[clamp(30px,1.79vw,34px)] aspect-square flex items-center justify-center bg-white rounded-full transform transition-[all_0.4s_ease-in-out] before::bg-et2primary before:text-white group-[.open]:bg-et2primary group-[.open]:text-primary group-[.open]:rotate-180"><i class="fa-solid fa-chevron-down"></i></span>
                                    </button>
                                </h2>
                                <div id="collapseThree01" class="accordion-collapse overflow-hidden" data-bs-parent="#accordionExample">
                                    <div class="accordion-body px-[clamp(15px,1.05vw,20px)] pb-[clamp(16px,1.26vw,24px)]">
                                        <p class="text-primary text-[15px] leading-[1.5]">
                                            We work with clients across a wide range of industries including real estate,
                                            healthcare, SaaS, legal,
                                            e-commerce, and
                                            more. Our financial strategies are tailored to each sector’s unique needs.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item group grid grid-rows-[max-content_0fr] [&[class~='open']]:grid-rows-[max-content_1fr] duration-300 backdrop-blur-sm bg-white/60 shadow-[8px_0px_32px_0px_#240C8714] wow fadeInUp" data-wow-delay=".6s">
                                <h2 class="accordion-header">
                                    <button class="accordion-button w-full flex items-center justify-between rounded-t-[5px] text-[#1C4B42] font-semibold gap-[8px] leading-[1.1] px-[20px] py-[clamp(16px,1.10vw,21px)] relative text-left transition-colors z-[3] collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree02" aria-expanded="false" aria-controls="collapseThree02">
                                        6. How do I know which package is right for me?
                                        <span class="cus-icon shrink-0 w-[clamp(30px,1.79vw,34px)] aspect-square flex items-center justify-center bg-white rounded-full transform transition-[all_0.4s_ease-in-out] before::bg-et2primary before:text-white group-[.open]:bg-et2primary group-[.open]:text-primary group-[.open]:rotate-180"><i class="fa-solid fa-chevron-down"></i></span>
                                    </button>
                                </h2>
                                <div id="collapseThree02" class="accordion-collapse overflow-hidden" data-bs-parent="#accordionExample">
                                    <div class="accordion-body px-[clamp(15px,1.05vw,20px)] pb-[clamp(16px,1.26vw,24px)]">
                                        <p class="text-primary text-[15px] leading-[1.5]">
                                            We work with clients across a wide range of industries including real estate,
                                            healthcare, SaaS, legal,
                                            e-commerce, and
                                            more. Our financial strategies are tailored to each sector’s unique needs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ SECTION END -->


        <!-- BLOG SECTION START -->
        <section class="blog-section1 overflow-hidden py-[clamp(60px,5.25vw,100px)]">
            <div class="et-container">
                <div class="grid grid-cols-12 gap-[clamp(16px,1.26vw,24px)] items-end mb-[clamp(20px,2.10vw,40px)]">
                    <div class="col-span-7 md:col-span-12">
                        <div class="section-header">
                            <span class="et-2-section-sub-title">Insights</span>
                            <h2 class="et-section-title wow fadeInUp" data-wow-delay=".3s">
                                Insights for Your
                                <span class="fw-300">Personal <br> Growth Journey</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-span-5 md:col-span-12">
                        <div class="wow fadeInUp" data-wow-delay=".2s">
                            <p class="text-primary text-[15px] leading-[1.5] mb-[clamp(16px,1.26vw,24px)]">
                                Explore our blog for valuable insights, tips, and inspiration to help you on your path to
                                self-discovery and personal
                                transformation. Whether you're seeking advice on mindset, career, or relationships.
                            </p>
                            <a href="blog.html" class="et-btn et-2-btn wow fadeIn" data-wow-delay=".4s">
                                <span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
                                Check All Insights
                            </a>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-3 sm:grid-cols-2 xs:grid-cols-1 gap-[clamp(16px,1.26vw,24px)]">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-items2 bg-etWhite rounded-2xl p-[clamp(15px,1.26vw,24px)] relative duration-300 z-[1] hover:bg-[#2e8c57] group">
                            <a href="blog-details.html" class="thumb rounded-2xl mb-[clamp(15px,1.26vw,24px)] overflow-hidden block">
                                <img src="https://rudra-tailwind.vercel.app/assets/img/blog/blog-grid1.png" class="w-full group-hover:scale-110 duration-300" alt="img">
                            </a>
                            <div class="content">
                                <span class="inline-block border border-primary group-hover:border-white rounded-[32px] text-primary group-hover:text-white text-[14px] font-medium tracking-[1px] leading-[1.5] mb-[clamp(10px,0.84vw,16px)] px-[clamp(10px,0.84vw,16px)] uppercase transition-[all_0.4s_ease-in-out]">Financial</span>
                                <h4 class="wow fadeInUp" data-wow-delay=".3s">
                                    <a href="blog-details.html" class="text-primary group-hover:text-white text-[clamp(17px,1.05vw,20px)] font-semibold leading-[1.1]  duration-300">
                                        5 simple daily habits you can start today to boost your productivity and achieve
                                        more
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-items2 bg-etWhite rounded-2xl p-[clamp(15px,1.26vw,24px)] relative duration-300 z-[1] hover:bg-[#2e8c57] group">
                            <a href="blog-details.html" class="thumb rounded-2xl mb-[clamp(15px,1.26vw,24px)] overflow-hidden block">
                                <img src="https://rudra-tailwind.vercel.app/assets/img/blog/blog-grid2.png" class="w-full group-hover:scale-110 duration-300" alt="img">
                            </a>
                            <div class="content">
                                <span class="inline-block border border-primary group-hover:border-white rounded-[32px] text-primary group-hover:text-white text-[14px] font-medium tracking-[1px] leading-[1.5] mb-[clamp(10px,0.84vw,16px)] px-[clamp(10px,0.84vw,16px)] uppercase transition-[all_0.4s_ease-in-out]">Financial</span>
                                <h4 class="wow fadeInUp" data-wow-delay=".3s">
                                    <a href="blog-details.html" class="text-primary group-hover:text-white text-[clamp(17px,1.05vw,20px)] font-semibold leading-[1.1]  duration-300">
                                        How to build a growth mindset that will propel you toward success in all areas of
                                        Life
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-items2 bg-etWhite rounded-2xl p-[clamp(15px,1.26vw,24px)] relative duration-300 z-[1] hover:bg-[#2e8c57] group">
                            <a href="blog-details.html" class="thumb rounded-2xl mb-[clamp(15px,1.26vw,24px)] overflow-hidden block">
                                <img src="https://rudra-tailwind.vercel.app/assets/img/blog/blog-grid3.png" class="w-full group-hover:scale-110 duration-300" alt="img">
                            </a>
                            <div class="content">
                                <span class="inline-block border border-primary group-hover:border-white rounded-[32px] text-primary group-hover:text-white text-[14px] font-medium tracking-[1px] leading-[1.5] mb-[clamp(10px,0.84vw,16px)] px-[clamp(10px,0.84vw,16px)] uppercase transition-[all_0.4s_ease-in-out]">Financial</span>
                                <h4 class="wow fadeInUp" data-wow-delay=".3s">
                                    <a href="blog-details.html" class="text-primary group-hover:text-white text-[clamp(17px,1.05vw,20px)] font-semibold leading-[1.1]  duration-300">
                                        5 simple daily habits you can start today to boost your productivity and achieve
                                        more
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- BLOG SECTION END -->


        <!-- CTA SECTION START -->
        <section class="deserve-create-section bg-[url('https://rudra-tailwind.vercel.app/assets/img/footer/deserve-bg.png')] bg-center bg-no-repeat bg-cover mt-[11px] mx-[11px] overflow-hidden pt-[clamp(50px,4.73vw,90px)] px-[5px] pb-[clamp(230px,19.44vw,370px)] sm:pb-[320px] xxs:pb-[350px] relative"
                 style="background-image: url('https://rudra-tailwind.vercel.app/assets/img/footer/deserve-bg.png');"
        >
            <div class="et-container">
                <div class="deserve-content text-center max-w-[clamp(747px,39.41vw,750px)] mx-auto">
                    <div class="section-header">
                        <h2 class="et-section-title text-white mb-[clamp(20px,2.10vw,40px)] wow fadeInUp" data-wow-delay=".3s">
                            Ready to create the
                            <span class="fw-300">Life you deserve?</span>
                        </h2>
                        <a href="contact.html" class="et-btn et-2-btn">
                            <span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
                            Schedule Your Free Consultation
                        </a>
                    </div>
                </div>
            </div>
            <div class="subscribe-wrapper backdrop-blur-[10px] bg-[#044524] inset-0 top-auto absolute py-[clamp(40px,4.20vw,80px)]">
                <div class="et-container">
                    <div class="grid grid-cols-12 g-4 justify-content-center gap-y-[25px] sm:text-center">
                        <div class="col-span-4 sm:col-span-12">
                            <div>
                                <div class="footer-logo max-w-[clamp(160px,9.46vw,180px)] mb-[clamp(16px,1.26vw,24px)] sm:mx-auto">
                                    <img src="https://rudra-tailwind.vercel.app/assets/img/logo/logo-theme2.png" alt="img">
                                </div>
                                <p class="text-white text-[14px] leading-[1.1]">&copy; 2025 Rudra, Inc.</p>
                            </div>
                        </div>

                        <div class="col-span-8 sm:col-span-12">
                            <div class="subscribe-inner flex items-center gap-[clamp(25px,2.63vw,50px)] md:flex-col md:items-start sm:items-center">
                                <h3 class="text-white text-[clamp(20px,1.26vw,24px)] font-bold leading-[1.15]">Subscribe to our newsletter!</h3>
                                <form action="#0" class="form-grp2 flex items-center justify-between bg-white/20 border border-white/20 rounded-[100px] p-[4px] w-full">
                                    <input type="text" placeholder="Type your email address" class="w-full italic outline-none px-[clamp(16px,1.26vw,24px)] py-[clamp(7px,0.53vw,10px)] text-white">
                                    <button class="w-[clamp(46px,2.94vw,56px)] aspect-square rounded-full flex items-center justify-center bg-et2primary text-primary shrink-0" type="button">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_2290_2646)">
                                                <path d="M17.9603 0.771532C18.0013 0.66931 18.0113 0.557327 17.9892 0.449466C17.967 0.341605 17.9137 0.24261 17.8359 0.164753C17.758 0.0868953 17.659 0.0336002 17.5512 0.0114743C17.4433 -0.0106516 17.3313 -0.000635168 17.2291 0.0402818L0.863719 6.58666H0.862594L0.354094 6.78916C0.257783 6.82757 0.173965 6.89186 0.111899 6.97493C0.0498325 7.05799 0.0119337 7.15659 0.00238862 7.25984C-0.00715649 7.36309 0.0120236 7.46697 0.0578101 7.56001C0.103597 7.65304 0.174208 7.73161 0.261844 7.78703L0.723094 8.07953L0.724219 8.08178L6.34359 11.657L9.91884 17.2764L9.92109 17.2787L10.2136 17.7399C10.2692 17.8272 10.3478 17.8975 10.4408 17.943C10.5337 17.9885 10.6375 18.0074 10.7405 17.9978C10.8436 17.9881 10.9419 17.9502 11.0248 17.8882C11.1077 17.8263 11.1719 17.7426 11.2103 17.6465L17.9603 0.771532ZM15.8982 2.89778L7.46747 11.3285L7.22559 10.9483C7.18128 10.8785 7.12212 10.8193 7.05234 10.775L6.67209 10.5332L15.1028 2.10241L16.4281 1.57253L15.8993 2.89778H15.8982Z" fill="#064635" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_2290_2646">
                                                    <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA SECTION END -->
    </main>

@endsection

@push('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });
    </script>
@endpush
