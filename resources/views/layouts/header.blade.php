<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-[clamp(16px,1.26vw,24px)] flex justify-between items-center">
                    <div class="offcanvas__logo">
                        <a href="index.html">
                            <img src="https://rudra-tailwind.vercel.app/assets/img/logo/logo.png" alt="logo-img">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <div class="mobile-menu fix mb-[clamp(10px,0.84vw,16px)]"></div>


                here is everything


            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>

<!-- HEADER SECTION START -->
<header id="header-sticky" class="header-section style1 header-white w-full">
    <div class="container !max-w-[clamp(0px,92.75vw,1765px)] mx-auto">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <div class="header-left">
                    <div class="logo">
                        <a href="index.html" class="header-logo">
                            <img src={{asset('assets/photo/logo-rare.png')}} alt="logo-img">
                        </a>
                    </div>
                </div>
                <div class="header-right flex justify-end items-center">
                    <div class="mean__menu-wrapper">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-dropdown active menu-thumb"><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="services.html">Pricing</a></li>
                                    <li><a href="case-details.html">Contact</a></li>
                                    <li><a href="contact.html">Case Study</a></li>
                                    <li><a href="contact.html">Career</a></li>



{{--                                    <li>--}}
{{--                                        <a href="blog.html">Blog</a>--}}
{{--                                        <ul class="submenu">--}}
{{--                                            <li><a href="blog.html">Blog</a></li>--}}
{{--                                            <li><a href="blog-details.html">Blog Details</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}



                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="flex items-center gap-[12px]">
                        <button class="et-btn px-4 border-2 border-white et-2-btn wow fadeInDown" data-wow-delay=".3s">
                            Login / Register
                        </button>
                    </div>

                </div>


                <div class="lg:hidden">
                    <div class="sidebar__toggle" id="mobile-menu-trigger">
                        <x-heroicon-o-bars-4 class="w-7 h-7 text-white" />
                    </div>
                </div>



            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const trigger   = document.getElementById("mobile-menu-trigger");
            const offcanvas = document.getElementById("mobile-offcanvas");
            const overlay   = document.getElementById("mobile-overlay");
            const closeBtn  = document.getElementById("mobile-menu-close");

            const open = () => {
                offcanvas.classList.add("active");
                overlay.classList.add("active");
                document.body.style.overflow = "hidden";
            };

            const close = () => {
                offcanvas.classList.remove("active");
                overlay.classList.remove("active");
                document.body.style.overflow = "";
            };

            trigger?.addEventListener("click", open);
            closeBtn?.addEventListener("click", close);
            overlay?.addEventListener("click", close);

            document.addEventListener("keydown", e => {
                if (e.key === "Escape") close();
            });
        });
    </script>
</header>
