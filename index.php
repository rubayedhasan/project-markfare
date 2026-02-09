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
    <!-- section: header  -->
    <?php include("./header.php") ?>

    <!-- section:: main  -->
    <main class="w-4/5 mx-auto mb-10 md:mb-14 rounded-md">
        <!-- section:: banner  -->
        <section id="banner" class="relative mt-10 md:mt-14">

            <!-- slider container  -->
            <div class="carousel slider w-full h-[600px] rounded-lg">
                <!-- slider item  -->
                <div id="item1" class="carousel-item slider-item w-full">
                    <!-- hero container-->
                    <div
                        class="hero h-full bg-[url('./assets/cold_storage/cold_storage.jpg')] bg-cover bg-center bg-no-repeat">
                        <div class="hero-overlay"></div>
                        <div class="hero-content text-neutral-content text-center">
                            <div class="max-w-2xl">
                                <!-- slider title  -->
                                <h1 class="mb-4 text-3xl md:text-5xl font-extrabold tracking-tight text-white text-shadow-[2px_0_0_#551a8b,-2px_0_0_#551a8b,0_2px_0_#551a8b,0_-2px_0_#551a8b] slider-title">Makfare – Trusted Cold Storage Solutions</h1>
                                <!-- slider description text  -->
                                <p class="text-sm md:text-base text-justify md:text-center leading-relaxed text-white/90 slider-text">
                                    Cold Makfare delivers reliable, technology driven cold storage solutions designed to preserve potatoes, seed potatoes, and paddy seeds while maintaining freshness, quality, and safety throughout long term storage.
                                </p>
                                <!-- button container section  -->
                                <div class="cta-button-container inline-flex gap-2 md:gap-4 mt-4">
                                    <!-- btn:contact us  -->
                                    <button class="font-inter font-medium text-sm text-white px-5 py-2.5 rounded-lg bg-gradient-to-br from-[#551a8b] to-[#054f73] border border-white/10 shadow-[0_4px_14px_rgba(85,26,139,0.35)] transition-all hover:shadow-[0_6px_18px_rgba(85,26,139,0.45)] hover:from-[#6a25a6] hover:-translate-y-[1px] active:translate-y-0 active:shadow-[0_3px_10px_rgba(85,26,139,0.25)] focus:outline-none focus:ring-2 focus:ring-[#551a8b]/40"
                                        type="button">Contact Us</button>

                                    <!-- btn:get storage  -->
                                    <button class="font-inter font-medium text-sm text-white px-5 py-2.5 rounded-lg bg-gradient-to-br from-[#551a8b] to-[#054f73] border border-white/10 shadow-[0_4px_14px_rgba(85,26,139,0.35)] transition-all hover:shadow-[0_6px_18px_rgba(85,26,139,0.45)] hover:from-[#6a25a6] hover:-translate-y-[1px] active:translate-y-0 active:shadow-[0_3px_10px_rgba(85,26,139,0.25)] focus:outline-none focus:ring-2 focus:ring-[#551a8b]/40"
                                        type="button">Get Storage</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- slider item  -->
                <div id="item2" class="carousel-item w-full">
                    <!-- hero container-->
                    <div
                        class="hero h-full bg-[url('./assets/cold_storage/farmer_with_potato.avif')] bg-cover bg-center bg-no-repeat">
                        <div class="hero-overlay"></div>
                        <div class="hero-content text-neutral-content text-center">
                            <div class="max-w-2xl">
                                <!-- slider title  -->
                                <h1 class="mb-4 text-3xl md:text-5xl font-extrabold tracking-tight text-white text-shadow-[2px_0_0_#551a8b,-2px_0_0_#551a8b,0_2px_0_#551a8b,0_-2px_0_#551a8b] slider-title">Advanced Cold Storage for Potatoes</h1>
                                <!-- slider description text  -->
                                <p class="text-sm md:text-base text-justify md:text-center leading-relaxed text-white/90 slider-text">
                                    Makfare provides temperature controlled cold storage facilities that protect potatoes from spoilage, maintain natural freshness, and reduce post harvest losses, ensuring consistent quality from farm to market.
                                </p>
                                <!-- button container section  -->
                                <div class="cta-button-container inline-flex gap-2 md:gap-4 mt-4">
                                    <!-- btn:contact us  -->
                                    <button class="font-inter font-medium text-sm text-white px-5 py-2.5 rounded-lg bg-gradient-to-br from-[#551a8b] to-[#054f73] border border-white/10 shadow-[0_4px_14px_rgba(85,26,139,0.35)] transition-all hover:shadow-[0_6px_18px_rgba(85,26,139,0.45)] hover:from-[#6a25a6] hover:-translate-y-[1px] active:translate-y-0 active:shadow-[0_3px_10px_rgba(85,26,139,0.25)] focus:outline-none focus:ring-2 focus:ring-[#551a8b]/40"
                                        type="button">Contact Us</button>

                                    <!-- btn:get storage  -->
                                    <button class="font-inter font-medium text-sm text-white px-5 py-2.5 rounded-lg bg-gradient-to-br from-[#551a8b] to-[#054f73] border border-white/10 shadow-[0_4px_14px_rgba(85,26,139,0.35)] transition-all hover:shadow-[0_6px_18px_rgba(85,26,139,0.45)] hover:from-[#6a25a6] hover:-translate-y-[1px] active:translate-y-0 active:shadow-[0_3px_10px_rgba(85,26,139,0.25)] focus:outline-none focus:ring-2 focus:ring-[#551a8b]/40"
                                        type="button">Get Storage</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- slider item  -->
                <div id="item3" class="carousel-item w-full">
                    <!-- hero container-->
                    <div
                        class="hero h-full bg-[url('./assets/cold_storage/bages_of_goods.jpg')] bg-cover bg-center bg-no-repeat">
                        <div class="hero-overlay"></div>
                        <div class="hero-content text-neutral-content text-center">
                            <div class="max-w-2xl">
                                <!-- slider title  -->
                                <h1 class="mb-4 text-3xl md:text-5xl font-extrabold tracking-tight text-white text-shadow-[2px_0_0_#551a8b,-2px_0_0_#551a8b,0_2px_0_#551a8b,0_-2px_0_#551a8b] slider-title">Reliable Storage for Seed Potatoes & Paddy Seeds</h1>
                                <!-- slider description text  -->
                                <p class="text-sm md:text-base text-justify md:text-center leading-relaxed text-white/90 slider-text">
                                    Our specialized cold storage systems maintain ideal conditions for seed potatoes and paddy seeds, preserving germination strength, moisture balance, and seed vitality for dependable agricultural performance.
                                </p>
                                <!-- button container section  -->
                                <div class="cta-button-container inline-flex gap-2 md:gap-4 mt-4">
                                    <!-- btn:contact us  -->
                                    <button class="font-inter font-medium text-sm text-white px-5 py-2.5 rounded-lg bg-gradient-to-br from-[#551a8b] to-[#054f73] border border-white/10 shadow-[0_4px_14px_rgba(85,26,139,0.35)] transition-all hover:shadow-[0_6px_18px_rgba(85,26,139,0.45)] hover:from-[#6a25a6] hover:-translate-y-[1px] active:translate-y-0 active:shadow-[0_3px_10px_rgba(85,26,139,0.25)] focus:outline-none focus:ring-2 focus:ring-[#551a8b]/40"
                                        type="button">Contact Us</button>

                                    <!-- btn:get storage  -->
                                    <button class="font-inter font-medium text-sm text-white px-5 py-2.5 rounded-lg bg-gradient-to-br from-[#551a8b] to-[#054f73] border border-white/10 shadow-[0_4px_14px_rgba(85,26,139,0.35)] transition-all hover:shadow-[0_6px_18px_rgba(85,26,139,0.45)] hover:from-[#6a25a6] hover:-translate-y-[1px] active:translate-y-0 active:shadow-[0_3px_10px_rgba(85,26,139,0.25)] focus:outline-none focus:ring-2 focus:ring-[#551a8b]/40"
                                        type="button">Get Storage</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- slider item  -->
                <div id="item4" class="carousel-item w-full">
                    <!-- hero container-->
                    <div
                        class="hero h-full bg-[url('./assets/tissue_culture/4.jpg')] bg-cover bg-center bg-no-repeat">
                        <div class="hero-overlay"></div>
                        <div class="hero-content text-neutral-content text-center">
                            <div class="max-w-2xl">
                                <!-- slider title  -->
                                <h1 class="mb-4 text-3xl md:text-5xl font-extrabold tracking-tight text-white text-shadow-[2px_0_0_#551a8b,-2px_0_0_#551a8b,0_2px_0_#551a8b,0_-2px_0_#551a8b] slider-title">Tissue Culture for High-Quality Planting Material</h1>
                                <!-- slider description text  -->
                                <p class="text-sm md:text-base text-justify md:text-center leading-relaxed text-white/90 slider-text">
                                    Makfare’s tissue culture solutions produce disease free, uniform, and high yielding planting material, enabling faster multiplication and supporting sustainable, modern agriculture for potatoes and other crops.
                                </p>
                                <!-- button container section  -->
                                <div class="cta-button-container inline-flex gap-2 md:gap-4 mt-4">
                                    <!-- btn:contact us  -->
                                    <button class="font-inter font-medium text-sm text-white px-5 py-2.5 rounded-lg bg-gradient-to-br from-[#551a8b] to-[#054f73] border border-white/10 shadow-[0_4px_14px_rgba(85,26,139,0.35)] transition-all hover:shadow-[0_6px_18px_rgba(85,26,139,0.45)] hover:from-[#6a25a6] hover:-translate-y-[1px] active:translate-y-0 active:shadow-[0_3px_10px_rgba(85,26,139,0.25)] focus:outline-none focus:ring-2 focus:ring-[#551a8b]/40"
                                        type="button">Contact Us</button>

                                    <!-- btn:get storage  -->
                                    <button class="font-inter font-medium text-sm text-white px-5 py-2.5 rounded-lg bg-gradient-to-br from-[#551a8b] to-[#054f73] border border-white/10 shadow-[0_4px_14px_rgba(85,26,139,0.35)] transition-all hover:shadow-[0_6px_18px_rgba(85,26,139,0.45)] hover:from-[#6a25a6] hover:-translate-y-[1px] active:translate-y-0 active:shadow-[0_3px_10px_rgba(85,26,139,0.25)] focus:outline-none focus:ring-2 focus:ring-[#551a8b]/40"
                                        type="button">Get Storage</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- carousel controlling buttons  -->
            <div class="slider-control-btns flex w-full justify-center gap-2 py-2 absolute left-0 bottom-5">
                <a href="#item1" class="btn btn-xs">1</a>
                <a href="#item2" class="btn btn-xs">2</a>
                <a href="#item3" class="btn btn-xs">3</a>
                <a href="#item4" class="btn btn-xs">4</a>
            </div>
        </section>

        <!-- section:: service(our work ) -->
        <section id="service" class="mt-10 md:mt-14">
            <!-- section description container  -->
            <div class="max-w-5xl mx-auto text-center space-y-4">
                <!-- section label  -->
                <span class="section-label inline-block text-sm font-semibold tracking-wider text-[#551a8b] uppercase">Our Services</span>

                <!-- section title  -->
                <h3 class="text-2xl md:text-3xl font-bold">Comprehensive Agricultural & Cold Storage Solutions</h3>

                <!-- divider -->
                <div class="mx-auto w-16 h-1 bg-gradient-to-r from-[#551a8b] to-[#054f73] rounded-full"></div>

                <!-- section description  -->
                <p class="section-description text-sm md:text-base font-medium text-secondary leading-relaxed text-justify md:text-center lg:w-3/4 mx-auto">
                    Makfare delivers reliable, technology-driven cold storage and agricultural services designed
                    to protect crop quality, preserve seed viability, and reduce post-harvest losses. From potato
                    and seed storage to processing and tissue culture, we support sustainable farming and
                    long-term agricultural value.
                </p>
            </div>

            <!-- services cards container  -->
            <div class="service-cards-container grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 mt-8">
                <!-- service card -->
                <div class="group card bg-white border border-gray-200 rounded-xl transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <!-- icon -->
                    <figure class="pt-8">
                        <div class="w-20 h-20 flex items-center justify-center rounded-full bg-gradient-to-br from-[#551a8b]/10 to-[#054f73]/10 group-hover:from-[#551a8b]/20 group-hover:to-[#054f73]/20 transition-all duration-300">
                            <img
                                src="./assets/icons/potato.png"
                                alt="Potato Cold Storage"
                                class="w-10 h-10 object-contain" />
                        </div>
                    </figure>
                    <!-- card body -->
                    <div class="card-body text-center px-6 pb-8 space-y-2">
                        <!-- title -->
                        <h2 class="text-lg font-semibold text-[#1e1e1e]">
                            Potato Cold Storage
                        </h2>
                        <!-- subtitle -->
                        <h5 class="text-sm font-medium text-[#551a8b]">
                            Secure preservation for maximum yield
                        </h5>
                        <!-- description -->
                        <p class="text-sm leading-relaxed text-[#1e1e1e]/90">
                            We provide controlled cold storage solutions for potatoes, maintaining
                            optimal temperature and humidity to minimize spoilage, reduce weight loss,
                            and protect post-harvest quality.
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- section:: footer  -->
    <?php include("./footer.php") ?>

</body>

</html>