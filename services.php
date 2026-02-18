<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makfare Our Work Page</title>
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
    </main>

    <!-- section:: footer  -->
    <?php include("./footer.php") ?>
</body>

</html>