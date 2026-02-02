<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makfare Project</title>

    <!-- fav icon link  -->
    <link rel="shortcut icon" href="./assets/makfare_logo_new.png" type="image/x-icon">

    <!-- daisyui cdn link  -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <!-- tailwind css cdn link -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- font awesome link  -->
    <script src="https://kit.fontawesome.com/ff87b718c4.js" crossorigin="anonymous"></script>

    <!-- stylesheet link  -->
    <link rel="stylesheet" href="./styles/main.css">

</head>

<body>
    <!-- header section start  -->
    <header class="w-4/5 mx-auto my-14">
        <!-- branding section  -->
        <section class="branding flex flex-col lg:flex-row items-center gap-3">
            <!-- logo -->
            <div class="brand w-[280px]">
                <a href="">
                    <figure class="brand-logo w-[150px] h-[150px] flex items-center">
                        <img loading="lazy" src="./assets/makfare_logo_new.png" alt="makfare cold storage" class="w-full">
                    </figure>
                </a>
            </div>

            <!-- brand information section  -->
            <div class="brand-information flex-1 grid grid-cols-12 gap-6">
                <!-- social media section  -->
                <ul class="social-media col-span-2 flex justify-end items-center gap-2.5">
                    <li class="border border-[#1e1e1e14] bg-[#1e1e1e14] px-1.5 py-1.5 rounded-full flex items-center">
                        <a class="flex items-center" title="Facebook" href="https://www.facebook.com/PMKNGO" target="_blank">
                            <i class="fa-brands fa-facebook text-[#551A8B] text-lg"></i>
                        </a>
                    </li>
                    <li class="border border-[#1e1e1e14] bg-[#1e1e1e14] px-1.5 py-1.5 rounded-full flex items-center">
                        <a class="flex items-center" title="twitter" href="https://x.com/" target="_blank">
                            <i class="fa-brands fa-x-twitter text-[#551A8B] text-lg"></i>
                        </a>
                    </li>
                    <li class="border border-[#1e1e1e14] bg-[#1e1e1e14] px-1.5 py-1.5 rounded-full flex items-center">
                        <a class="flex items-center" title="Instagram" href="https://www.instagram.com/?hl=en" target="_blank">
                            <i class="fa-brands fa-instagram text-[#551A8B] text-lg"></i>
                        </a>
                    </li>
                    <li class="border border-[#1e1e1e14] bg-[#1e1e1e14] px-1.5 py-1.5 rounded-full flex items-center">
                        <a class="flex items-center" title="Linkedin" href="https://www.linkedin.com/home" target="_blank">
                            <i class="fa-brands fa-linkedin text-[#551A8B] text-lg"></i>
                        </a>
                    </li>
                </ul>

                <!-- info-box section:phone  -->
                <div class="info-box col-span-3 flex gap-4 items-center">
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
                <div class="info-box col-span-4 flex gap-4 items-center border-l border-[#551A8B] pl-3">
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
                <div class="info-box col-span-3 flex gap-4 items-center border-l border-[#551A8B] pl-3">
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
    </header>
</body>

</html>