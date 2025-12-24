<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-[clamp(16px,1.26vw,24px)] flex justify-between items-center">
                    <div class="offcanvas__logo">
                        <a href="{{route('home')}}">
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
                        <a href="{{route('home')}}" class="header-logo">
                            <img src={{asset('assets/photo/logo-rare.png')}} alt="logo-img">
                        </a>
                    </div>
                </div>
                <div class="header-right flex justify-end items-center">
                    <div class="mean__menu-wrapper">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>

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





    <div id="auth-modal" class="fixed inset-0 z-[9999] hidden" aria-hidden="true">
        <div class="fixed inset-0 bg-black/70 transition-opacity"
             id="auth-modal-backdrop"></div>

        <div class="fixed inset-0 flex items-center justify-center p-4">
            <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full overflow-hidden relative"
                 id="auth-modal-content"
                 onclick="event.stopPropagation()">

                <button id="auth-modal-close"
                        class="flex absolute top-4 right-4 z-10 hover:text-gray-700 text-red-600 transition hover:scale-110" style="align-items: center">
                    Close
                    <x-heroicon-o-x-mark class="w-8 h-8" />
                </button>

                <div class="bg-gradient-to-r from-primary to-primary/90  px-8 py-8 text-center">
                        <img src="{{asset('assets/photo/logo-regular.png')}}" alt="logo-img" class="mx-auto">
                    <p class="opacity-90 text-lg">Get Jump on it</p>
                </div>

                <div class="p-8 bg-gray-50">
                    <div class="grid grid-cols-2 gap-5">
                        <a href="{{ route('login') }}"
                           class="flex items-center justify-center gap-3 bg-primary hover:bg-primary/90 text-white font-bold py-5 rounded-xl transition transform hover:scale-105 shadow-lg">
                            <x-heroicon-o-arrow-right-on-rectangle class="w-7 h-7" />
                            <span class="text-lg">Login</span>
                        </a>

                        <a href="{{ route('register') }}"
                           class="flex items-center justify-center gap-3 bg-gray-900 hover:bg-black text-white font-bold py-5 rounded-xl transition transform hover:scale-105 shadow-lg">
                            <x-heroicon-o-user-plus class="w-7 h-7" />
                            <span class="text-lg">Register</span>
                        </a>
                    </div>

                    <div class="mt-5 text-center">
                        <p class="text-gray-600">Or</p>
                        <button class="mt-1 text-primary font-semibold text-lg hover:underline">
                            Check The Demo →
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const authBtn     = document.querySelector('.et-btn.border-2.border-white');
            const modal       = document.getElementById('auth-modal');
            const backdrop    = document.getElementById('auth-modal-backdrop');
            const closeBtn    = document.getElementById('auth-modal-close');

            const openModal = (e) => {
                e.preventDefault();
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            };

            const closeModal = () => {
                console.log('close');
                modal.classList.add('hidden');
                document.body.style.overflow = '';
            };

            authBtn?.addEventListener('click', openModal);
            closeBtn?.addEventListener('click', closeModal);
            backdrop?.addEventListener('click', closeModal);

            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                    closeModal();
                }
            });
        });
    </script>






{{--    <script>--}}
{{--        document.addEventListener("DOMContentLoaded", () => {--}}
{{--            const trigger   = document.getElementById("mobile-menu-trigger");--}}
{{--            const offcanvas = document.getElementById("mobile-offcanvas");--}}
{{--            const overlay   = document.getElementById("mobile-overlay");--}}
{{--            const closeBtn  = document.getElementById("mobile-menu-close");--}}

{{--            const open = () => {--}}
{{--                offcanvas.classList.add("active");--}}
{{--                overlay.classList.add("active");--}}
{{--                document.body.style.overflow = "hidden";--}}
{{--            };--}}

{{--            const close = () => {--}}
{{--                offcanvas.classList.remove("active");--}}
{{--                overlay.classList.remove("active");--}}
{{--                document.body.style.overflow = "";--}}
{{--            };--}}

{{--            trigger?.addEventListener("click", open);--}}
{{--            closeBtn?.addEventListener("click", close);--}}
{{--            overlay?.addEventListener("click", close);--}}

{{--            document.addEventListener("keydown", e => {--}}
{{--                if (e.key === "Escape") close();--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}



</header>
