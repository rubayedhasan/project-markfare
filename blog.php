<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makfare Blog Page</title>
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
    <!-- section:: header  -->
    <?php include("./header.php") ?>

    <!-- section:: main  -->
    <main class="w-4/5 mx-auto my-10 md:my-14 rounded-md">
        <!-- section::testimonial  -->
        <section id="testimonial" class="mt-10 md:mt-14 bg-[url('./assets/review_bg.png')] bg-cover bg-center bg-no-repeat px-5 md:px-0 py-10 lg:py-16 rounded shadow">
            <!-- section description container  -->
            <div class="max-w-5xl mx-auto text-center space-y-4">
                <!-- section label  -->
                <span class="section-label inline-block text-sm font-semibold tracking-wider text-[#551a8b] uppercase">Tetsimonials</span>

                <!-- section title  -->
                <h3 class="text-2xl md:text-3xl font-bold">What people say?</h3>

                <!-- divider -->
                <div class="mx-auto w-16 h-1 bg-gradient-to-r from-[#551a8b] to-[#054f73] rounded-full"></div>
            </div>

            <!-- customer review container -->
            <div class="customer-review-container mt-10">
                <div class="carousel overflow-y-visible w-full pb-10">
                    <!-- 1st: testimonial -->
                    <div id="testimonial1" class="carousel-item w-full justify-center">
                        <!-- customer review  -->
                        <div
                            class="customer-review max-w-[300px] md:max-w-lg lg:max-w-2xl bg-[#054F731A] backdrop-blur-lg border border-white/10 rounded-2xl shadow-lg p-6 md:p-10 text-center transition-all duration-300 hover:shadow-xl hover:-translate-y-1 relative">
                            <!-- review rating  -->
                            <div
                                class="review-rating flex justify-center gap-1 text-[#551a8b] text-lg mb-4">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                                <!-- <i class="fa-regular fa-star"></i> -->
                            </div>

                            <!-- review message  -->
                            <div class="review-message space-y-4">
                                <h6 class="text-lg md:text-xl font-semibold">
                                    Outstanding Storage & Temperature Control
                                </h6>
                                <p
                                    class="text-sm md:text-base text-justify md:text-center text-opacity-80 leading-relaxed before:content-['“'] after:content-['”']">
                                    Makfare has helped us preserve our potato stock in excellent condition for extended periods. Their temperature control system is consistent and professionally managed. Because of this, we were able to sell at the right market time and secure better profits. Highly dependable service.
                                </p>
                            </div>

                            <!-- profile  -->
                            <div class="mt-10 flex flex-col items-center space-y-2">
                                <!-- profile picture  -->
                                <figure class="absolute left-1/2 -translate-x-1/2 -bottom-10 pt-8">
                                    <div
                                        class="w-16 h-16 flex items-center justify-center rounded-full bg-white/80 border-2 border-[#054f73]/20 shadow-lg">
                                        <img
                                            src="./assets/farmer.png"
                                            alt="Potato Cold Storage"
                                            class="w-10 h-10 object-contain" />
                                    </div>
                                </figure>

                                <!-- profile information  -->
                                <div class="text-sm">
                                    <p class="font-semibold text-[#1e1e1e]">Abdul Karim</p>
                                    <p class="text-gray-500">Commercial Potato Farmer</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2nd: testimonial -->
                    <div id="testimonial2" class="carousel-item w-full justify-center">
                        <!-- customer review  -->
                        <div
                            class="customer-review max-w-[300px] md:max-w-lg lg:max-w-2xl bg-[#054F731A] backdrop-blur-lg border border-white/10 rounded-2xl shadow-lg p-6 md:p-10 text-center transition-all duration-300 hover:shadow-xl hover:-translate-y-1 relative">
                            <!-- review rating  -->
                            <div
                                class="review-rating flex justify-center gap-1 text-[#551a8b] text-lg mb-4">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>

                            <!-- review message  -->
                            <div class="review-message space-y-4">
                                <h6 class="text-lg md:text-xl font-semibold">
                                    Reliable Seed Preservation Facility
                                </h6>
                                <p
                                    class="text-sm md:text-base text-opacity-80 leading-relaxed before:content-['“'] after:content-['”']">
                                    We store our certified potato seeds at Makfare, and the quality remains intact throughout the storage cycle. The environment is clean, organized, and scientifically maintained. It has significantly reduced our losses and improved germination performance.
                                </p>
                            </div>

                            <!-- profile  -->
                            <div class="mt-10 flex flex-col items-center space-y-2">
                                <!-- profile picture -->
                                <figure class="absolute left-1/2 -translate-x-1/2 -bottom-10 pt-8">
                                    <div
                                        class="w-16 h-16 flex items-center justify-center rounded-full bg-white/80 border-2 border-[#054f73]/20 shadow-lg">
                                        <img
                                            src="./assets/farmer.png"
                                            alt="Potato Cold Storage"
                                            class="w-10 h-10 object-contain" />
                                    </div>
                                </figure>
                                <!-- profile information  -->
                                <div class="text-sm">
                                    <p class="font-semibold text-[#1e1e1e]">Rahima Begum</p>
                                    <p class="text-gray-500">Seed Producer & Supplier</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 3rd: testimonial -->
                    <div id="testimonial3" class="carousel-item w-full justify-center">
                        <!-- customer review  -->
                        <div
                            class="customer-review max-w-[300px] md:max-w-lg lg:max-w-2xl bg-[#054F731A] backdrop-blur-lg border border-white/10 rounded-2xl shadow-lg p-6 md:p-10 text-center transition-all duration-300 hover:shadow-xl hover:-translate-y-1 relative">
                            <!-- review rating  -->
                            <div
                                class="review-rating flex justify-center gap-1 text-[#551a8b] text-lg mb-4">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>

                            <!-- review message  -->
                            <div class="review-message space-y-4">
                                <h6 class="text-lg md:text-xl font-semibold">
                                    Improved Paddy Storage Efficiency
                                </h6>
                                <p
                                    class="text-sm md:text-base text-opacity-80 leading-relaxed before:content-['“'] after:content-['”']">
                                    Makfare’s paddy storage system ensures proper ventilation and controlled conditions, which maintain grain quality and prevent spoilage. Their management team is professional and transparent. It gives us confidence to store large volumes without worry.
                                </p>
                            </div>

                            <!-- profile  -->
                            <div class="mt-10 flex flex-col items-center space-y-2">
                                <!-- profile picture -->
                                <figure class="absolute left-1/2 -translate-x-1/2 -bottom-10 pt-8">
                                    <div
                                        class="w-16 h-16 flex items-center justify-center rounded-full bg-white/80 border-2 border-[#054f73]/20 shadow-lg">
                                        <img
                                            src="./assets/farmer.png"
                                            alt="Potato Cold Storage"
                                            class="w-10 h-10 object-contain" />
                                    </div>
                                </figure>
                                <!-- profile information  -->
                                <div class="text-sm">
                                    <p class="font-semibold text-[#1e1e1e]">Harun Rashid</p>
                                    <p class="text-gray-500">Paddy Cultivator</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 4th: testimonial -->
                    <div id="testimonial4" class="carousel-item w-full justify-center">
                        <!-- customer review  -->
                        <div
                            class="customer-review max-w-[300px] md:max-w-lg lg:max-w-2xl bg-[#054F731A] backdrop-blur-lg border border-white/10 rounded-2xl shadow-lg p-6 md:p-10 text-center transition-all duration-300 hover:shadow-xl hover:-translate-y-1 relative">
                            <!-- review rating  -->
                            <div
                                class="review-rating flex justify-center gap-1 text-[#551a8b] text-lg mb-4">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>

                            <!-- review message  -->
                            <div class="review-message space-y-4">
                                <h6 class="text-lg md:text-xl font-semibold">
                                    Advanced Facility with Modern Technology
                                </h6>
                                <p
                                    class="text-sm md:text-base text-opacity-80 leading-relaxed before:content-['“'] after:content-['”']">
                                    The integration of scientific storage methods and tissue culture support makes Makfare stand out. Their facility is modern, hygienic, and efficiently managed. We have experienced reduced post-harvest loss and improved product quality consistently.
                                </p>
                            </div>

                            <!-- profile  -->
                            <div class="mt-10 flex flex-col items-center space-y-2">
                                <!-- profile picture -->
                                <figure class="absolute left-1/2 -translate-x-1/2 -bottom-10 pt-8">
                                    <div
                                        class="w-16 h-16 flex items-center justify-center rounded-full bg-white/80 border-2 border-[#054f73]/20 shadow-lg">
                                        <img
                                            src="./assets/farmer.png"
                                            alt="Potato Cold Storage"
                                            class="w-10 h-10 object-contain" />
                                    </div>
                                </figure>
                                <!-- profile information  -->
                                <div class="text-sm">
                                    <p class="font-semibold text-[#1e1e1e]">Shafiqul Islam</p>
                                    <p class="text-gray-500">Agribusiness Entrepreneur</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- slider controlling container  -->
                <div class="flex w-full justify-center gap-2 py-2 mt-10 md:mt-16">
                    <a href="#testimonial1" class="btn btn-xs btn-ghost text-[#551a8b] hover:bg-none hover:border-none">
                        <i class="fa-regular fa-circle-dot"></i>
                    </a>
                    <a href="#testimonial2" class="btn btn-xs btn-ghost text-[#551a8b] hover:bg-none hover:border-none">
                        <i class="fa-regular fa-circle-dot"></i>
                    </a>
                    <a href="#testimonial3" class="btn btn-xs btn-ghost text-[#551a8b] hover:bg-none hover:border-none">
                        <i class="fa-regular fa-circle-dot"></i>
                    </a>
                    <a href="#testimonial4" class="btn btn-xs btn-ghost text-[#551a8b] hover:bg-none hover:border-none">
                        <i class="fa-regular fa-circle-dot"></i>
                    </a>
                </div>
            </div>


        </section>
    </main>

    <!-- section:: footer  -->
    <?php include("./footer.php") ?>
</body>

</html>