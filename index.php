<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makfare Project</title>

    <!-- fav icon link  -->
    <link rel="shortcut icon" href="./assets/makfare_logo_new.png" type="image/x-icon">

    <!-- daisyui & tailwindcss cdn link  -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- font awesome link  -->
    <script src="https://kit.fontawesome.com/ff87b718c4.js" crossorigin="anonymous"></script>

    <!-- stylesheet link  -->
    <link rel="stylesheet" href="./styles/main.css">

</head>

<body>
    <!-- header section start  -->
    <header class="w-4/5 mx-auto my-10 md:my-14 rounded-md">
        <!-- section::branding  -->
        <section class="branding flex flex-col xl:flex-row items-center gap-3">
            <!-- logo -->
            <div class="brand xl:w-[280px]">
                <a href="">
                    <figure class="brand-logo w-[150px] h-[150px] flex items-center">
                        <img loading="lazy" src="./assets/makfare_logo_new.png" alt="makfare cold storage" class="w-full">
                    </figure>
                </a>
            </div>

            <!-- brand information section  -->
            <div class="brand-information flex-1 grid grid-col-1 md:grid-cols-12 gap-6 lg:gap-3 ">
                <!-- social media section  -->
                <ul class="social-media md:col-span-6 lg:col-span-3 flex justify-evenly lg:justify-center xl:justify-end items-center gap-2.5 xl:pr-5 order-last lg:order-first">
                    <li class="border border-[#054F731A] bg-[#054F731A] px-1.5 py-1.5 rounded-full flex items-center">
                        <a class="flex items-center" title="Facebook" href="https://www.facebook.com/PMKNGO" target="_blank">
                            <i class="fa-brands fa-facebook text-[#551A8B] text-lg"></i>
                        </a>
                    </li>
                    <li class="border border-[#054F731A] bg-[#054F731A] px-1.5 py-1.5 rounded-full flex items-center">
                        <a class="flex items-center" title="twitter" href="https://x.com/" target="_blank">
                            <i class="fa-brands fa-x-twitter text-[#551A8B] text-lg"></i>
                        </a>
                    </li>
                    <li class="border border-[#054F731A] bg-[#054F731A] px-1.5 py-1.5 rounded-full flex items-center">
                        <a class="flex items-center" title="Instagram" href="https://www.instagram.com/?hl=en" target="_blank">
                            <i class="fa-brands fa-instagram text-[#551A8B] text-lg"></i>
                        </a>
                    </li>
                    <li class="border border-[#054F731A] bg-[#054F731A] px-1.5 py-1.5 rounded-full flex items-center">
                        <a class="flex items-center" title="Linkedin" href="https://www.linkedin.com/home" target="_blank">
                            <i class="fa-brands fa-linkedin text-[#551A8B] text-lg"></i>
                        </a>
                    </li>
                </ul>

                <!-- info-box section:phone  -->
                <div class="info-box md:col-span-6 lg:col-span-3 flex gap-4 items-center border-l-2 border-[#551A8B] pl-3.5 h-14">
                    <figure class="flex justify-center items-center w-6">
                        <img loading="lazy" src="./assets/phone_icon.png" alt="phone icon" class="w-full object-cover">
                    </figure>

                    <!-- info  -->
                    <div class="flex-1">
                        <p class="font-semibold text-sm capitalize">call anytime</p>
                        <p class="font-bold text-sm">+8801335-101449</p>
                    </div>
                </div>

                <!-- info-box section:mail  -->
                <div class="info-box md:col-span-6 lg:col-span-3 flex gap-4 items-center border-l-2 border-[#551A8B] pl-3.5 h-14">
                    <figure class="flex justify-center items-center w-6">
                        <img loading="lazy" src="./assets/mail_icon.png" alt="mail icon" class="w-full object-cover">
                    </figure>

                    <!-- info  -->
                    <div class="flex-1">
                        <p class="font-semibold text-sm capitalize">send email</p>
                        <p class="font-bold text-sm break-all">makfarecoldstorageltd@gmail.com</p>
                    </div>
                </div>

                <!-- info-box section:location  -->
                <div class="info-box md:col-span-6 lg:col-span-3 flex gap-4 items-center border-l-2 border-[#551A8B] pl-3.5 h-14">
                    <figure class="flex justify-center items-center w-6">
                        <img loading="lazy" src="./assets/phone_icon.png" alt="phone icon" class="w-full object-cover">
                    </figure>

                    <!-- info  -->
                    <div class="flex-1">
                        <p class="font-semibold text-sm capitalize">mostofapur, chamrul</p>
                        <p class="font-bold text-sm">Dupchachiya, Bagura</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- section::navbar  -->
        <nav class="navbar bg-[#054F731A] border border-[#054F731A] rounded-md shadow-sm mt-8 xl:mt-0">
            <div class="navbar-start lg:hidden">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost border border-[#551a8b]/60 lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </div>
                    <ul
                        tabindex="-1"
                        class="menu menu-sm dropdown-content bg-base-100 border border-[#551a8b]/60 rounded-box z-1 w-52 p-2 shadow mt-[16px]">
                        <li>
                            <a class="font-semibold text-sm text-opacity-80 relative after:absolute after:left-0 after:-bottom-1 after:h-[1.5px] after:w-0 after:bg-[#551a8b] after:transition-all after:duration-300 hover:text-[#551a8b] hover:bg-transparent hover:after:w-full" href="">Home</a>
                        </li>
                        <li>
                            <a class="font-semibold text-sm text-opacity-80 relative after:absolute after:left-0 after:-bottom-1 after:h-[1.5px] after:w-0 after:bg-[#551a8b] after:transition-all after:duration-300 hover:text-[#551a8b] hover:bg-transparent hover:after:w-full" href="">Our Work</a>
                        </li>
                        <li>
                            <a class="font-semibold text-sm text-opacity-80 relative after:absolute after:left-0 after:-bottom-1 after:h-[1.5px] after:w-0 after:bg-[#551a8b] after:transition-all after:duration-300 hover:text-[#551a8b] hover:bg-transparent hover:after:w-full" href="">Tissue Culture</a>
                        </li>
                        <li>
                            <a class="font-semibold text-sm text-opacity-80 relative after:absolute after:left-0 after:-bottom-1 after:h-[1.5px] after:w-0 after:bg-[#551a8b] after:transition-all after:duration-300 hover:text-[#551a8b] hover:bg-transparent hover:after:w-full" href="">Blog</a>
                        </li>
                        <li>
                            <a class="font-semibold text-sm text-opacity-80 relative after:absolute after:left-0 after:-bottom-1 after:h-[1.5px] after:w-0 after:bg-[#551a8b] after:transition-all after:duration-300 hover:text-[#551a8b] hover:bg-transparent hover:after:w-full" href="">About</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="navbar-start hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                    <li>
                        <a class="font-semibold text-sm text-opacity-80 relative after:absolute after:left-0 after:-bottom-1 after:h-[1.5px] after:w-0 after:bg-[#551a8b] after:transition-all after:duration-300 hover:text-[#551a8b] hover:bg-transparent hover:after:w-full" href="">Home</a>
                    </li>
                    <li>
                        <a class="font-semibold text-sm text-opacity-80 relative after:absolute after:left-0 after:-bottom-1 after:h-[1.5px] after:w-0 after:bg-[#551a8b] after:transition-all after:duration-300 hover:text-[#551a8b] hover:bg-transparent hover:after:w-full" href="">Our Work</a>
                    </li>
                    <li>
                        <a class="font-semibold text-sm text-opacity-80 relative after:absolute after:left-0 after:-bottom-1 after:h-[1.5px] after:w-0 after:bg-[#551a8b] after:transition-all after:duration-300 hover:text-[#551a8b] hover:bg-transparent hover:after:w-full" href="">Tissue Culture</a>
                    </li>
                    <li>
                        <a class="font-semibold text-sm text-opacity-80 relative after:absolute after:left-0 after:-bottom-1 after:h-[1.5px] after:w-0 after:bg-[#551a8b] after:transition-all after:duration-300 hover:text-[#551a8b] hover:bg-transparent hover:after:w-full" href="">Blog</a>
                    </li>
                    <li>
                        <a class="font-semibold text-sm text-opacity-80 relative after:absolute after:left-0 after:-bottom-1 after:h-[1.5px] after:w-0 after:bg-[#551a8b] after:transition-all after:duration-300 hover:text-[#551a8b] hover:bg-transparent hover:after:w-full" href="">About</a>
                    </li>
                </ul>
            </div>

            <!-- section:: CTA button  -->
            <div class="navbar-end">
                <!-- button container section  -->
                <div class="cta-button-container inline-flex gap-4">
                    <!-- btn:contact us  -->
                    <button class="font-inter font-medium text-sm px-5 py-2.5 rounded-lg text-[#551a8b] border border-[#551a8b]/60 transition-all duration-200 hover:text-white hover:bg-gradient-to-br hover:from-[#551a8b] hover:to-[#054f73] hover:shadow-[0_4px_14px_rgba(85,26,139,0.35)] focus:outline-none focus:ring-2 focus:ring-[#551a8b]/40" type="button">Contact Us</button>

                    <!-- btn:get storage  -->
                    <button class="font inter font-medium text-sm px-5 py-2.5 rounded-lg text-[#551a8b] border border-[#551a8b]/60 transition-all duration-200 hover:text-white hover:bg-gradient-to-br hover:from-[#551a8b] hover:to-[#054f73] hover:shadow-[0_4px_14px_rgba(85,26,139,0.35)] focus:outline-none focus:ring-2 focus:ring-[#551a8b]/40" type="button">Get Storage</button>
                </div>
            </div>
        </nav>


    </header>
</body>

</html>