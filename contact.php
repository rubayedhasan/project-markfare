<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makfare Contact Page</title>
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
    <script defer src="./js/main.js"></script>
</head>

<body>
    <!-- section:: header  -->
    <?php include("./header.php") ?>

    <!-- section:main  -->
    <main class="w-4/5 mx-auto my-10 md:my-14 rounded-md">
        <!-- section:: intro  -->
        <section id="section-intro" class="px-8 py-40 bg-[#054f7380] bg-[url('./assets/section-bg-1.webp')] bg-blend-overlay bg-cover bg-center bg-no-repeat border border-[#054f7380] rounded-sm text-center relative">

            <!-- section title  -->
            <h1 class="mb-4 text-3xl md:text-5xl font-extrabold tracking-tight text-white text-shadow-[2px_0_0_#551a8b,-2px_0_0_#551a8b,0_2px_0_#551a8b,0_-2px_0_#551a8b]">
                Get in Touch With Our Team
            </h1>

            <!-- section description  -->
            <p class="text-sm md:text-base text-center leading-relaxed text-white/90 max-w-2xl mx-auto">
                We are here to assist you. Whether you have a question, need support, or would like more information about our services, our team is ready to help.
            </p>

            <!-- path indicator  -->
            <nav class="absolute left-8 bottom-6" aria-label="Breadcrumb">
                <ul class="text-white flex gap-4 font-semibold text-shadow-[2px_0_0_#551a8b,-2px_0_0_#551a8b,0_2px_0_#551a8b,0_-2px_0_#551a8b]">
                    <li><a href="./index.php" class="hover:underline">Home</a></li>
                    <li><i class="fa-solid fa-arrow-right-long" aria-hidden="true"></i></li>
                    <li aria-current="page">Contact</li>
                </ul>
            </nav>

        </section>
    </main>

    <!-- section:: footer  -->
    <?php include("./footer.php") ?>

</body>

</html>