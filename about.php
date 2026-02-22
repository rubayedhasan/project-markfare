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
</head>

<body>
    <!-- section:: header  -->
    <?php include("./header.php") ?>

    <main class="w-4/5 mx-auto my-10 md:my-14 rounded-md">
        <!-- ABOUT HERO SECTION -->
        <section id="about-intro" class="relative py-10 lg:py-0 lg:min-h-screen flex items-center justify-center overflow-hidden rounded-md">

            <!-- Background Image -->
            <div class="absolute inset-0">
                <img src="./assets/cold_storage/cold_storage_warehouse.jpg"
                    alt="Markfare Cold Storage Facility"
                    class="w-full h-full object-cover">
            </div>

            <!-- Improved Overlay -->
            <div class="absolute inset-0 bg-gradient-to-b from-[#1e1e1e]/70 via-[#1e1e1e]/80 to-[#1e1e1e]/95"></div>

            <!-- Content -->
            <div class="relative z-10 max-w-5xl px-6 md:px-12 text-center text-white">

                <!-- About Label -->
                <p class="text-white/70 uppercase tracking-widest text-xs md:text-sm font-medium mb-3">
                    About Markfare
                </p>

                <!-- Subtitle with semi-transparent background -->
                <div class="mb-6 px-3 py-1 rounded-md bg-white/10">
                    <p class="text-[#54c1d4] uppercase tracking-[0.25em] text-xs md:text-sm font-semibold">
                        Empowering Agriculture Through Scientific Storage & Innovation
                    </p>
                </div>

                <!-- Title -->
                <h1 class="text-3xl md:text-5xl font-bold leading-tight mb-6">
                    <span class="font-extrabold tracking-tight text-white 
                text-shadow-[2px_0_0_#551a8b,-2px_0_0_#551a8b,0_2px_0_#551a8b,0_-2px_0_#551a8b]">
                        Markfare Cold Storage
                    </span>
                    <br>
                    <span class="block mt-3 font-medium text-white/90 text-lg md:text-2xl">
                        A Project of Palli Mongal Karmosuchi (PMK)
                    </span>
                </h1>

                <!-- About Us Description -->
                <div class="space-y-5 text-sm md:text-base leading-relaxed text-white/85 text-justify md:text-center max-w-3xl mx-auto">
                    <p>
                        Markfare Cold Storage is a specialized agro-based infrastructure project
                        operating under Palli Mongal Karmosuchi (PMK), a national-level development
                        organization based in Zirabo, Ashulia, just 20 kilometers from Dhaka.
                        Established in 1988, PMK has been committed to rural development and
                        agricultural empowerment under the leadership of Ms. Kamrun Nahar.
                    </p>

                    <p>
                        The project provides advanced cold storage, scientific seed processing,
                        and tissue culture solutions for potato, potato seed, paddy, and paddy seed
                        preservation — ensuring quality protection, reduced post-harvest loss,
                        and long-term agricultural sustainability.
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



    </main>

    <!-- section:: footer  -->
    <?php include("./footer.php") ?>

</body>

</html>