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
                <p class="section-description text-sm md:text-base font-medium text-opacity-90 leading-relaxed text-justify md:text-center lg:w-3/4 mx-auto">
                    Makfare delivers reliable, technology-driven cold storage and agricultural services designed
                    to protect crop quality, preserve seed viability, and reduce post-harvest losses. From potato
                    and seed storage to processing and tissue culture, we support sustainable farming and
                    long-term agricultural value.
                </p>
            </div>

            <!-- services cards container  -->
            <div class="service-cards-container grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 mt-8">
                <!-- 1st: service card -->
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
                        <h4 class="text-lg font-semibold">
                            Potato Cold Storage
                        </h4>
                        <!-- subtitle -->
                        <h5 class="text-sm font-medium text-[#551a8b]">
                            Secure preservation for maximum yield
                        </h5>
                        <!-- description -->
                        <p class="text-sm text-justify md:text-center leading-relaxed text-opacity-90">
                            We provide controlled cold storage solutions for potatoes, maintaining
                            optimal temperature and humidity to minimize spoilage, reduce weight loss,
                            and protect post-harvest quality.
                        </p>
                    </div>
                </div>

                <!-- 2nd: service card -->
                <div class="group card bg-white border border-gray-200 rounded-xl transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <!-- icon -->
                    <figure class="pt-8">
                        <div class="w-20 h-20 flex items-center justify-center rounded-full bg-gradient-to-br from-[#551a8b]/10 to-[#054f73]/10 group-hover:from-[#551a8b]/20 group-hover:to-[#054f73]/20 transition-all duration-300">
                            <img
                                src="./assets/icons/farming.png"
                                alt="Potato Seed Storage"
                                class="w-10 h-10 object-contain" />
                        </div>
                    </figure>
                    <!-- card body -->
                    <div class="card-body text-center px-6 pb-8 space-y-2">
                        <!-- title -->
                        <h4 class="text-lg font-semibold">
                            Potato Seed Storage
                        </h4>
                        <!-- subtitle -->
                        <h5 class="text-sm font-medium text-[#551a8b]">
                            Protecting seed vitality and performance
                        </h5>
                        <!-- description -->
                        <p class="text-sm text-justify md:text-center leading-relaxed text-opacity-90">
                            Our specialized seed storage ensures high germination rates and strong crop performance by preserving seed quality throughout the storage period.
                        </p>
                    </div>
                </div>

                <!-- 3rd: service card -->
                <div class="group card bg-white border border-gray-200 rounded-xl transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <!-- icon -->
                    <figure class="pt-8">
                        <div class="w-20 h-20 flex items-center justify-center rounded-full bg-gradient-to-br from-[#551a8b]/10 to-[#054f73]/10 group-hover:from-[#551a8b]/20 group-hover:to-[#054f73]/20 transition-all duration-300">
                            <img
                                src="./assets/icons/wheat.png"
                                alt="Paddy Seed Preservation"
                                class="w-10 h-10 object-contain" />
                        </div>
                    </figure>
                    <!-- card body -->
                    <div class="card-body text-center px-6 pb-8 space-y-2">
                        <!-- title -->
                        <h4 class="text-lg font-semibold">
                            Paddy Seed Preservation
                        </h4>
                        <!-- subtitle -->
                        <h5 class="text-sm font-medium text-[#551a8b]">
                            Ensuring strong starts for future harvests
                        </h5>
                        <!-- description -->
                        <p class="text-sm text-justify md:text-center leading-relaxed text-opacity-90">
                            We store paddy seeds under precise conditions to maintain purity, viability, and consistency for the next cultivation cycle.
                        </p>
                    </div>
                </div>

                <!-- 4th: service card -->
                <div class="group card bg-white border border-gray-200 rounded-xl transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <!-- icon -->
                    <figure class="pt-8">
                        <div class="w-20 h-20 flex items-center justify-center rounded-full bg-gradient-to-br from-[#551a8b]/10 to-[#054f73]/10 group-hover:from-[#551a8b]/20 group-hover:to-[#054f73]/20 transition-all duration-300">
                            <img
                                src="./assets/icons/planting.png"
                                alt="Agricultural Growth Support"
                                class="w-10 h-10 object-contain" />
                        </div>
                    </figure>
                    <!-- card body -->
                    <div class="card-body text-center px-6 pb-8 space-y-2">
                        <!-- title -->
                        <h4 class="text-lg font-semibold">
                            Agricultural Growth Support
                        </h4>
                        <!-- subtitle -->
                        <h5 class="text-sm font-medium text-[#551a8b]">
                            From storage to sustainable production
                        </h5>
                        <!-- description -->
                        <p class="text-sm text-justify md:text-center leading-relaxed text-opacity-90">
                            Makfare supports agricultural growth by integrating storage, preservation, and handling practices that reduce loss and improve overall productivity.
                        </p>
                    </div>
                </div>

                <!-- 5th: service card -->
                <div class="group card bg-white border border-gray-200 rounded-xl transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <!-- icon -->
                    <figure class="pt-8">
                        <div class="w-20 h-20 flex items-center justify-center rounded-full bg-gradient-to-br from-[#551a8b]/10 to-[#054f73]/10 group-hover:from-[#551a8b]/20 group-hover:to-[#054f73]/20 transition-all duration-300">
                            <img
                                src="./assets/icons/cold-storage.png"
                                alt=" Preserve & Store Solutions"
                                class="w-10 h-10 object-contain" />
                        </div>
                    </figure>
                    <!-- card body -->
                    <div class="card-body text-center px-6 pb-8 space-y-2">
                        <!-- title -->
                        <h4 class="text-lg font-semibold">
                            Preserve & Store Solutions
                        </h4>
                        <!-- subtitle -->
                        <h5 class="text-sm font-medium text-[#551a8b]">
                            Advanced cold chain management
                        </h5>
                        <!-- description -->
                        <p class="text-sm text-justify md:text-center leading-relaxed text-opacity-90">
                            Our preservation systems are designed to handle agricultural produce with care, extending shelf life while maintaining nutritional and commercial value.
                        </p>
                    </div>
                </div>

                <!-- 6th: service card -->
                <div class="group card bg-white border border-gray-200 rounded-xl transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <!-- icon -->
                    <figure class="pt-8">
                        <div class="w-20 h-20 flex items-center justify-center rounded-full bg-gradient-to-br from-[#551a8b]/10 to-[#054f73]/10 group-hover:from-[#551a8b]/20 group-hover:to-[#054f73]/20 transition-all duration-300">
                            <img
                                src="./assets/icons/tissues.png"
                                alt="Processing & Tissue Culture"
                                class="w-10 h-10 object-contain" />
                        </div>
                    </figure>
                    <!-- card body -->
                    <div class="card-body text-center px-6 pb-8 space-y-2">
                        <!-- title -->
                        <h4 class="text-lg font-semibold">
                            Processing & Tissue Culture
                        </h4>
                        <!-- subtitle -->
                        <h5 class="text-sm font-medium text-[#551a8b]">
                            Innovation-driven plant development
                        </h5>
                        <!-- description -->
                        <p class="text-sm text-justify md:text-center leading-relaxed text-opacity-90">
                            We offer modern processing and tissue culture solutions to support disease-free planting material, rapid multiplication, and advanced agricultural research.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- section:: gallery  -->
        <section id="gallery" class="mt-10 md:mt-14">
            <!-- section description container  -->
            <div class="max-w-5xl mx-auto text-center space-y-4">
                <!-- section label  -->
                <span class="section-label inline-block text-sm font-semibold tracking-wider text-[#551a8b] uppercase">Inside Makfare</span>

                <!-- section title  -->
                <h3 class="text-2xl md:text-3xl font-bold">Our Facilities, Fields & Freshness in Action</h3>

                <!-- divider -->
                <div class="mx-auto w-16 h-1 bg-gradient-to-r from-[#551a8b] to-[#054f73] rounded-full"></div>

                <!-- section description  -->
                <p class="section-description text-sm md:text-base font-medium text-opacity-90 leading-relaxed text-justify md:text-center lg:w-3/4 mx-auto">
                    A visual journey through Makfare’s cold storage facilities, agricultural goods, seed preservation, and processing operations—showcasing our commitment to quality, freshness, and sustainable agricultural solutions.
                </p>
            </div>

            <!-- gallery  -->
            <div class="tabs tabs-border border-[#551a8b] justify-center mt-6">
                <!-- Cold Storage Tab Gallery  -->
                <input type="radio" name="my_tabs_2" class="tab text-sm font-semibold text-opacity-90" aria-label="Cold Storage" checked />
                <div class="tab-content bg-base-100 pt-8 lg:pt-10">
                    <!-- Photos Grid  -->
                    <div class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

                        <!-- 1st: Photo Item -->
                        <figure class="group relative overflow-hidden rounded-2xl shadow-md hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 cursor-pointer">

                            <!-- Image -->
                            <img src="./assets/cold_storage/cold_storage_wideview.jpg"
                                alt="Cold Storage"
                                class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110">

                            <!-- Overlay -->
                            <figcaption class="absolute inset-0 bg-gradient-to-t from-[#1e1e1e]/70 via-[#1e1e1e]/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end justify-center pb-6">

                                <p class="text-white font-semibold tracking-wide text-sm">
                                    Cold Storage
                                </p>
                            </figcaption>
                        </figure>

                        <!-- 2nd: Photo Item -->
                        <figure class="group relative overflow-hidden rounded-2xl shadow-md hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 cursor-pointer">

                            <!-- Image -->
                            <img src="./assets/cold_storage/cold_storage_warehouse.jpg"
                                alt="Cold Storage"
                                class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110">

                            <!-- Overlay -->
                            <figcaption class="absolute inset-0 bg-gradient-to-t from-[#1e1e1e]/70 via-[#1e1e1e]/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end justify-center pb-6">

                                <p class="text-white font-semibold tracking-wide text-sm">
                                    Cold Storage
                                </p>
                            </figcaption>
                        </figure>

                        <!-- 3rd: Photo Item -->
                        <figure class="group relative overflow-hidden rounded-2xl shadow-md hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 cursor-pointer">

                            <!-- Image -->
                            <img src="./assets/cold_storage/farmer_with_potato.avif"
                                alt="Cold Storage"
                                class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110">

                            <!-- Overlay -->
                            <figcaption class="absolute inset-0 bg-gradient-to-t from-[#1e1e1e]/70 via-[#1e1e1e]/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end justify-center pb-6">

                                <p class="text-white font-semibold tracking-wide text-sm">
                                    Cold Storage
                                </p>
                            </figcaption>
                        </figure>

                        <!-- 4th: Photo Item -->
                        <figure class="group relative overflow-hidden rounded-2xl shadow-md hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 cursor-pointer">

                            <!-- Image -->
                            <img src="./assets/cold_storage/cold-room_foods.jpg"
                                alt="Cold Storage"
                                class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110">

                            <!-- Overlay -->
                            <figcaption class="absolute inset-0 bg-gradient-to-t from-[#1e1e1e]/70 via-[#1e1e1e]/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end justify-center pb-6">

                                <p class="text-white font-semibold tracking-wide text-sm">
                                    Cold Storage
                                </p>
                            </figcaption>
                        </figure>

                        <!-- 5th: Photo Item -->
                        <figure class="group relative overflow-hidden rounded-2xl shadow-md hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 cursor-pointer">

                            <!-- Image -->
                            <img src="./assets/cold_storage/bages_of_goods.jpg"
                                alt="Cold Storage"
                                class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110">

                            <!-- Overlay -->
                            <figcaption class="absolute inset-0 bg-gradient-to-t from-[#1e1e1e]/70 via-[#1e1e1e]/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end justify-center pb-6">

                                <p class="text-white font-semibold tracking-wide text-sm">
                                    Cold Storage
                                </p>
                            </figcaption>
                        </figure>

                        <!-- 6th: Photo Item -->
                        <figure class="group relative overflow-hidden rounded-2xl shadow-md hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 cursor-pointer">

                            <!-- Image -->
                            <img src="./assets/cold_storage/stock_of_bags.jpeg"
                                alt="Cold Storage"
                                class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110">

                            <!-- Overlay -->
                            <figcaption class="absolute inset-0 bg-gradient-to-t from-[#1e1e1e]/70 via-[#1e1e1e]/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end justify-center pb-6">

                                <p class="text-white font-semibold tracking-wide text-sm">
                                    Cold Storage
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Tissue Culture Tab Gallery  -->
                <input type="radio" name="my_tabs_2" class="tab text-sm font-semibold text-opacity-90" aria-label="Tissue Culture" />
                <div class="tab-content bg-base-100 pt-8 lg:pt-10">
                    <!-- Photos Grid  -->
                    <div class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

                        <!-- 1st: Photo Item -->
                        <figure class="group relative overflow-hidden rounded-2xl shadow-md hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 cursor-pointer">

                            <!-- Image -->
                            <img src="./assets/tissue_culture/1.png"
                                alt="Lab"
                                class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110">

                            <!-- Overlay -->
                            <figcaption class="absolute inset-0 bg-gradient-to-t from-[#1e1e1e]/70 via-[#1e1e1e]/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end justify-center pb-6">

                                <p class="text-white font-semibold tracking-wide text-sm">
                                    Tissue Culture Lab
                                </p>
                            </figcaption>
                        </figure>

                        <!-- 2nd: Photo Item  -->
                        <figure class="group relative overflow-hidden rounded-2xl shadow-md hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 cursor-pointer">
                            <!-- Image  -->
                            <img src="./assets/tissue_culture/2.png" alt="lab" class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110">

                            <!-- Overlay  -->
                            <figcaption class="absolute inset-0 bg-gradient-to-t from-[#1e1e1e]/70 vai-[#1e1e1e]/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex justify-center items-end pb-6">
                                <p class="text-white font-semibold tracking-tighter text-sm">Tissue Culture Lab</p>
                            </figcaption>
                        </figure>

                        <!-- 3rd: Photo Item  -->
                        <figure class="group relative overflow-hidden rounded-2xl shadow-md hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 cursor-pointer">
                            <!-- Image  -->
                            <img src="./assets/tissue_culture/3.jpg" alt="lab" class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110">

                            <!-- Overlay  -->
                            <figcaption class="absolute inset-0 bg-gradient-to-t from-[#1e1e1e]/70 vai-[#1e1e1e]/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex justify-center items-end pb-6">
                                <p class="text-white font-semibold tracking-tighter text-sm">
                                    Tissue Culture Lab
                                </p>
                            </figcaption>
                        </figure>

                        <!-- 4th: Photo Item  -->
                        <figure class="group relative overflow-hidden rounded-2xl shadow-md hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 cursor-pointer">
                            <!-- Image  -->
                            <img src="./assets/tissue_culture/6.jpg" alt="lab" class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110">

                            <!-- Overlay  -->
                            <figcaption class="absolute inset-0 bg-gradient-to-t from-[#1e1e1e]/70 vai-[#1e1e1e]/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex justify-center items-end pb-6">
                                <p class="text-white font-semibold tracking-tighter text-sm">
                                    Tissue Culture Lab
                                </p>
                            </figcaption>
                        </figure>

                        <!-- 5th:Photo Item  -->
                        <figure class="group relative overflow-hidden rounded-2xl shadow-md hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 cursor-pointer">
                            <!-- Image  -->
                            <img src="./assets/tissue_culture/9.jpg" alt="lab" class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110">

                            <!-- Overlay  -->
                            <figcaption class="absolute inset-0 bg-gradient-to-t from-[#1e1e1e]/70 vai-[#1e1e1e]/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex justify-center items-end pb-6">
                                <p class="text-white font-semibold tracking-tighter text-sm">
                                    Tissue Culture Lab
                                </p>
                            </figcaption>
                        </figure>

                        <!-- 6th:Photo Item  -->
                        <figure class="group relative overflow-hidden rounded-2xl shadow-md hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 cursor-pointer">
                            <!-- Image  -->
                            <img src="./assets/tissue_culture/10.jpg" alt="lab" class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110">

                            <!-- Overlay  -->
                            <figcaption class="absolute inset-0 bg-gradient-to-t from-[#1e1e1e]/70 vai-[#1e1e1e]/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex justify-center items-end pb-6">
                                <p class="text-white font-semibold tracking-tighter text-sm">
                                    Tissue Culture Lab
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <!-- section:: FAQ  -->
        <section id="faq" class="mt-10 md:mt-14">
            <!-- section description container  -->
            <div class="max-w-5xl mx-auto text-center space-y-4">
                <!-- section label  -->
                <span class="section-label inline-block text-sm font-semibold tracking-wider text-[#551a8b] uppercase">Your Questions, Our Expertise</span>

                <!-- section title  -->
                <h3 class="text-2xl md:text-3xl font-bold">Everything You Need to Know About Makfare</h3>

                <!-- divider -->
                <div class="mx-auto w-16 h-1 bg-gradient-to-r from-[#551a8b] to-[#054f73] rounded-full"></div>
            </div>

            <!-- sub-section:: faq-container -->
            <div class=" grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
                <!-- faq question & answer  -->
                <div></div>

                <!-- image  -->
                <figure class="relative">
                    <img src="./assets/PEB-Cold-Storage.png" alt="cold storage ">
                    <figcaption class="absolute left-0 -bottom-5 bg-[#054f73] text-center w-full py-2">
                        <p class="text-sm text-white font-semibold">Cold Storage | Seed Processing | Tissue Culture</p>
                    </figcaption>
                </figure>
            </div>

        </section>
    </main>

    <!-- section:: footer  -->
    <?php include("./footer.php") ?>

</body>

</html>