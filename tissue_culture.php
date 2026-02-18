<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tissue Calture Page</title>
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
                <input type="radio" name="my_tabs_2" class="tab text-sm font-semibold text-opacity-90" aria-label="Cold Storage" />
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
                <input type="radio" name="my_tabs_2" class="tab text-sm font-semibold text-opacity-90" aria-label="Tissue Culture" checked />
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
    </main>

    <!-- section:: footer  -->
    <?php include("./footer.php") ?>
</body>

</html>