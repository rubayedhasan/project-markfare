<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MakFare About Page</title>
    <!-- fav icon link  -->
    <link rel="shortcut icon" href="./assets/makfare_logo_new.png" type="image/x-icon">

    <!-- daisyui & tailwindcss cdn link  -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- font awesome link  -->
    <script src="https://kit.fontawesome.com/ff87b718c4.js" crossorigin="anonymous"></script>

    <!-- stylesheet link  -->
    <link rel="stylesheet" href="./styles/main.css">

    <!-- js link  -->
    <script defer src="./js/counter.js"></script>
</head>

<body>
    <!-- section:: header  -->
    <?php include("./header.php") ?>

    <main class="w-4/5 mx-auto my-10 md:my-14 rounded-md">
        <!-- section:: about us intro -->
        <section id="about-intro" class="relative py-10 lg:py-0 lg:min-h-screen flex items-center justify-center overflow-hidden rounded-md">

            <!-- Background Image -->
            <div class="absolute inset-0">
                <img src="./assets/cold_storage/cold_storage_warehouse.jpg"
                    alt="Markfare Cold Storage Facility"
                    class="w-full h-full object-cover">
            </div>

            <!-- Overlay -->
            <div class="absolute inset-0 bg-gradient-to-b from-[#1e1e1e]/70 via-[#1e1e1e]/80 to-[#1e1e1e]/95"></div>

            <!-- Content -->
            <div class="relative z-10 max-w-5xl px-6 md:px-12 text-center text-white">

                <!-- About Label -->
                <p class="text-white/70 uppercase tracking-widest text-xs md:text-sm font-medium mb-3">
                    About Markfare
                </p>

                <!-- Title -->
                <h1 class="text-3xl md:text-5xl font-bold leading-tight mb-6">
                    <span class="font-extrabold tracking-tight text-white 
                  text-shadow-[2px_0_0_#551a8b,-2px_0_0_#551a8b,0_2px_0_#551a8b,0_-2px_0_#551a8b]">
                        Markfare Cold Storage
                    </span>
                </h1>

                <!-- About Cold Storage Short Description -->
                <div class="space-y-5 text-sm md:text-base leading-relaxed text-white/85 text-justify md:text-center max-w-3xl mx-auto">
                    <p>
                        Markfare Cold Storage provides advanced temperature-controlled storage for crops and seeds,
                        ensuring quality preservation, reduced post-harvest loss, and sustainable agricultural growth.
                        Our modern facilities support seed processing and tissue culture to help farmers maximize yield.
                    </p>
                </div>

                <!-- CTA Button -->
                <div class="mt-10">
                    <a href="./services.php"
                        class="inline-flex items-center justify-center px-10 py-3 text-sm md:text-base font-semibold 
                      bg-[#551a8b] hover:bg-[#054f73] 
                      rounded-md 
                      transition-all duration-300 
                      shadow-[0_8px_25px_rgba(85,26,139,0.35)] 
                      hover:shadow-[0_10px_30px_rgba(85,26,139,0.45)] 
                      hover:-translate-y-[2px]">
                        Explore Our Services
                    </a>
                </div>

            </div>
        </section>

        <!-- section :: who we are  -->
        <section id="who-we-are" class="mt-14 md:mt-16 bg-gradient-to-b from-white via-white/95 to-white">
            <div class="max-w-6xl mx-auto px-6 md:px-12 flex flex-col lg:flex-row items-center gap-12">

                <!-- Image -->
                <div class="lg:w-1/2">
                    <img src="./assets/farming.jpg"
                        alt="Markfare Cold Storage & Seed Processing"
                        class="rounded-xl shadow-2xl object-cover w-full h-[350px] md:h-[450px] transition-transform duration-300 hover:scale-105">
                </div>

                <!-- Content -->
                <div class="lg:w-1/2 flex flex-col justify-center">

                    <!-- Section Label -->
                    <p class="text-[#551a8b] uppercase tracking-[0.2em] text-xs md:text-sm font-semibold mb-3">
                        Who We Are
                    </p>

                    <!-- Title -->
                    <h2 class="text-3xl md:text-4xl font-extrabold  mb-5 leading-snug">
                        Markfare: Driving Cold Storage & Seed Innovation
                    </h2>

                    <!-- Highlight Block -->
                    <div class="hidden md:flex flex-wrap gap-3 mb-6 justify-start">
                        <span class="px-3 py-1 rounded-md bg-[#551a8b]/10 text-[#551a8b] font-semibold text-sm">Cold Storage</span>
                        <span class="px-3 py-1 rounded-md bg-[#054f73]/10 text-[#054f73] font-semibold text-sm">Seed Processing</span>
                        <span class="px-3 py-1 rounded-md bg-[#551a8b]/10 text-[#551a8b] font-semibold text-sm">Tissue Culture</span>
                    </div>

                    <!-- Description -->
                    <p class="text-[#1e1e1e]/90 text-base md:text-lg leading-relaxed mb-4 text-justify md:text-left">
                        Markfare Cold Storage, a project of <span class="font-semibold">Palli Mongal Karmosuchi (PMK)</span>,
                        provides advanced storage and seed processing solutions to protect crops and seeds, ensuring quality and sustainability.
                        With expertise in cold storage, tissue culture, and seed preservation, we support farmers and agro-entrepreneurs in maximizing yield and reducing post-harvest loss.
                    </p>

                    <p class="text-[#1e1e1e]/90 text-base md:text-lg leading-relaxed text-justify md:text-left">
                        Our mission is to integrate scientific innovation with sustainable agricultural practices. Markfare empowers communities by safeguarding potato, potato seed, paddy, and paddy seed, contributing to long-term agricultural growth and food security.
                    </p>

                </div>
            </div>
        </section>

        <!-- section :: Vision & Mission -->
        <section class="mt-10 md:mt-14 bg-gradient-to-b from-white via-white/95 to-white">
            <div class="max-w-6xl mx-auto">

                <!-- Section Title -->
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-extrabold mb-4">
                        Our Vision & Mission
                    </h2>
                    <div class="w-24 h-1 bg-[#551a8b] mx-auto rounded-full"></div>
                </div>

                <!-- Vision & Mission Grid -->
                <div class="grid lg:grid-cols-2 gap-12">

                    <!-- Vision Card -->
                    <div class="bg-white border-l-4 border-[#551a8b] p-8 rounded-xl shadow-lg hover:shadow-2xl transition-transform duration-300 hover:-translate-y-1">
                        <div class="flex items-center mb-4 gap-3">

                            <!-- Vision Icon -->
                            <figure class="h-10 w-10">
                                <img src="./assets/bar-chart.png" alt="vision" class="w-full h-full">
                            </figure>
                            <h3 class="text-2xl font-semibold text-[#551a8b]">
                                Our Vision
                            </h3>
                        </div>
                        <p class="text-[#1e1e1e] leading-relaxed text-justify md:text-left">
                            To become a trusted agri-infrastructure partner that enhances farmer income,
                            ensures national food security, and promotes sustainable agriculture through
                            advanced cold storage, seed preservation, and tissue culture technologies.
                        </p>
                    </div>

                    <!-- Mission Card -->
                    <div class="bg-white border-l-4 border-[#054f73] p-8 rounded-xl shadow-lg hover:shadow-2xl transition-transform duration-300 hover:-translate-y-1">
                        <div class="flex items-center mb-4 gap-3">

                            <!-- Vision Icon -->
                            <figure class="h-10 w-10">
                                <img src="./assets/target.png" alt="mission" class="w-full h-full">
                            </figure>
                            <h3 class="text-2xl font-semibold text-[#054f73]">
                                Our Mission
                            </h3>
                        </div>
                        <p class="text-[#1e1e1e] leading-relaxed text-justify md:text-left">
                            To reduce post-harvest losses and improve seed quality by providing reliable
                            cold storage, scientific seed processing, and tissue culture solutions.
                            Markfare empowers farmers, agro-entrepreneurs, and communities with innovative
                            infrastructure and sustainable practices.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <!-- section:: our-impact -->
        <section id="our-impact" class="mt-10 md:mt-14 bg-white">
            <div class="max-w-6xl mx-auto px-6 md:px-12 text-center">

                <!-- Section Title -->
                <div class="mb-12">
                    <h2 class="text-3xl md:text-4xl font-extrabold mb-4">
                        Our Achievements
                    </h2>
                    <div class="w-24 h-1 bg-[#551a8b] mx-auto rounded-full"></div>
                </div>

                <!-- Impact Grid -->
                <div id="countdown" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                    <!-- Potato Cold Storage -->
                    <div class="bg-[#f9f9f9] rounded-xl shadow-lg p-8 hover:shadow-2xl transition-transform duration-300 hover:-translate-y-1">
                        <div class="text-[#551a8b] text-4xl mb-4">
                            <i class="fa-solid fa-warehouse"></i>
                        </div>
                        <p class="text-3xl md:text-4xl font-extrabold text-[#551a8b] mb-2">
                            <span class="count-number" data-countTarget="7500">0</span>+
                        </p>
                        <p class="text-[#1e1e1e]/90 font-medium">Tons Potato Storage</p>
                    </div>

                    <!-- Paddy Storage -->
                    <div class="bg-[#f9f9f9] rounded-xl shadow-lg p-8 hover:shadow-2xl transition-transform duration-300 hover:-translate-y-1">
                        <div class="text-[#054f73] text-4xl mb-4">
                            <i class="fa-solid fa-seedling"></i>
                        </div>
                        <p class="text-3xl md:text-4xl font-extrabold text-[#054f73] mb-2">
                            <span class="count-number" data-countTarget="7500">0</span>+
                        </p>
                        <p class="text-[#1e1e1e]/90 font-medium">Tons Paddy Storage</p>
                    </div>

                    <!-- Seed Processing -->
                    <div class="bg-[#f9f9f9] rounded-xl shadow-lg p-8 hover:shadow-2xl transition-transform duration-300 hover:-translate-y-1">
                        <div class="text-[#551a8b] text-4xl mb-4">
                            <i class="fa-solid fa-cogs"></i>
                        </div>
                        <p class="text-3xl md:text-4xl font-extrabold text-[#551a8b] mb-2">
                            <span class="count-number" data-countTarget="1000">0</span>+
                        </p>
                        <p class="text-[#1e1e1e]/90 font-medium">Seeds Processed</p>
                    </div>

                    <!-- Tissue Culture -->
                    <div class="bg-[#f9f9f9] rounded-xl shadow-lg p-8 hover:shadow-2xl transition-transform duration-300 hover:-translate-y-1">
                        <div class="text-[#054f73] text-4xl mb-4">
                            <i class="fa-solid fa-flask"></i>
                        </div>
                        <p class="text-3xl md:text-4xl font-extrabold text-[#054f73] mb-2">
                            <span class="count-number" data-countTarget="82">0</span>%
                        </p>
                        <p class="text-[#1e1e1e]/90 font-medium">Quality Retention</p>
                    </div>

                </div>
            </div>
        </section>


    </main>

    <!-- section:: footer  -->
    <?php include("./footer.php") ?>

</body>

</html>