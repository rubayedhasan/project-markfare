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

        <!-- section:: get-touch  -->
        <section id="get-touch" class="mt-10 md:mt-14 grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- address and contact information  -->
            <div class="contact-info-container space-y-6  lg:sticky lg:top-10 
            self-start">
                <!-- 1st:: card item  -->
                <div class=" info-card-item flex items-start gap-4 p-6 bg-white border border-[#054f73]/20 rounded-md hover:shadow-md group transition-all duration-300 lg:h-40">

                    <!-- icon  -->
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-[#054f73]/10 border border-[#054f73]/20 group-hover:bg-[#551a8b] group-hover:border-[#551a8b] transition-all duration-300">
                            <i class="fa-regular fa-envelope text-[#551a8b] text-xl group-hover:text-white transition-colors duration-300"></i>
                        </div>
                    </div>

                    <!-- info text  -->
                    <div>
                        <h4 class="text-lg font-semibold text-[#551a8b] mb-1">
                            Contact Information
                        </h4>
                        <p class="text-sm text-opacity-80 font-medium break-all">
                            makfarecoldstorageltd@gmail.com
                        </p>
                        <p class="text-sm text-opacity-80 font-medium">
                            +880 1335 101449
                        </p>
                    </div>

                </div>

                <!-- 2nd:: card item  -->
                <div class="info-card-item flex items-start gap-4 p-6 bg-white border border-[#054f73]/20 rounded-md hover:shadow-md group transition-all duration-300 lg:h-40">
                    <!-- icon  -->
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-[#054f73]/10 border border-[#054f73]/20 group-hover:bg-[#551a8b] group-hover:border-[#551a8b] transition-all duration-300">
                            <i class="fa-solid fa-map-location-dot text-lg text-[#551a8b] group-hover:text-white transition-colors duration-300"></i>
                        </div>
                    </div>

                    <!-- info text  -->
                    <div>
                        <h4 class="text-lg font-semibold text-[#551a8b] mb-1">Our Location</h4>
                        <p class="text-sm text-opacity-80 capitalize font-medium">Vill: mostofapur</p>
                        <p class="text-sm text-opacity-80 capitalize font-medium">Union: chamrul</p>
                        <p class="text-sm text-opacity-80 capitalize font-medium">Thana: Dupchachiya</p>
                        <p class="text-sm text-opacity-80 capitalize font-medium">District: Bagura</p>
                    </div>
                </div>

                <!-- 3rd:: card item  -->
                <div class="info-card-item flex items-start gap-4 p-6 bg-white border border-[#054f73]/20 rounded-md hover:shadow-md group transition-all duration-300 lg:h-40">
                    <!-- icon  -->
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 flex justify-center items-center rounded-full bg-[#054f73]/10 border border-[#054f73]/20 group-hover:bg-[#551a8b] group-hover:border-[#551a8b] transition-all duration-300">
                            <i class="fa-solid fa-business-time text-lg text-[#551a8b] group-hover:text-white transition-colors duration-300"></i>
                        </div>
                    </div>

                    <!-- info text  -->
                    <div>
                        <h4 class="text-lg text-[#551a8b] font-semibold">Working Hours</h4>
                        <p class="text-sm text-opacity-80 font-medium">
                            Mon - Fri: 8.00am - 18.00pm</p>
                        <p class="text-sm text-opacity-80 font-medium">
                            Sat: 9.00am - 17.00pm</p>
                    </div>
                </div>

            </div>

            <!-- newsletter / contact section -->
            <div class="newsletter bg-white p-6 md:p-10 rounded-md border border-[#054f73]/20 shadow-sm">

                <!-- section heading -->
                <div class="max-w-2xl">
                    <h3 class="text-2xl md:text-3xl font-bold text-[#1e1e1e]">
                        Get in Touch
                    </h3>

                    <!-- divider -->
                    <div class="w-16 h-1 bg-gradient-to-r from-[#551a8b] to-[#054f73] rounded-full my-4"></div>

                    <p class="text-sm md:text-base text-[#1e1e1e]/80 leading-relaxed">
                        Please complete the form below and our team will contact you promptly with the appropriate solutions and pricing tailored to your needs.
                    </p>
                </div>

                <!-- form -->
                <form action="" class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">

                    <!-- Name -->
                    <div class="flex flex-col">
                        <label class="text-sm font-semibold text-[#054f73] mb-2">Full Name</label>
                        <input type="text" required
                            placeholder="Enter your full name"
                            class="px-4 py-3 rounded-md border border-[#054f73]/30 focus:outline-none focus:ring-2 focus:ring-[#551a8b] focus:border-[#551a8b] transition-all duration-300 text-[#1e1e1e]">
                    </div>

                    <!-- Email -->
                    <div class="flex flex-col">
                        <label class="text-sm font-semibold text-[#054f73] mb-2">Email Address</label>
                        <input type="email" required
                            placeholder="mail@example.com"
                            class="px-4 py-3 rounded-md border border-[#054f73]/30 focus:outline-none focus:ring-2 focus:ring-[#551a8b] focus:border-[#551a8b] transition-all duration-300 text-[#1e1e1e]">
                    </div>

                    <!-- Company -->
                    <div class="flex flex-col">
                        <label class="text-sm font-semibold text-[#054f73] mb-2">Company Name</label>
                        <input type="text" required
                            placeholder="Enter company name"
                            class="px-4 py-3 rounded-md border border-[#054f73]/30 focus:outline-none focus:ring-2 focus:ring-[#551a8b] focus:border-[#551a8b] transition-all duration-300 text-[#1e1e1e]">
                    </div>

                    <!-- Phone -->
                    <div class="flex flex-col">
                        <label class="text-sm font-semibold text-[#054f73] mb-2">Phone Number</label>
                        <input type="tel" required
                            placeholder="Enter phone number"
                            class="px-4 py-3 rounded-md border border-[#054f73]/30 focus:outline-none focus:ring-2 focus:ring-[#551a8b] focus:border-[#551a8b] transition-all duration-300 text-[#1e1e1e]">
                    </div>

                    <!-- Message -->
                    <div class="md:col-span-2 flex flex-col">
                        <label class="text-sm font-semibold text-[#054f73] mb-2">Message</label>
                        <textarea rows="5"
                            placeholder="Write your message here..."
                            class="px-4 py-3 rounded-md border border-[#054f73]/30 focus:outline-none focus:ring-2 focus:ring-[#551a8b] focus:border-[#551a8b] transition-all duration-300 text-[#1e1e1e] resize-none"></textarea>
                    </div>

                    <!-- Submit -->
                    <div class="md:col-span-2">
                        <button type="submit"
                            class="w-full md:w-auto px-8 py-3 rounded-md bg-[#551a8b] text-white font-semibold hover:bg-[#054f73] transition-all duration-300 shadow-md hover:shadow-lg">
                            Submit Request
                            <span class="ml-2">
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </span>
                        </button>
                    </div>

                </form>
            </div>

        </section>
    </main>

    <!-- section:: footer  -->
    <?php include("./footer.php") ?>

</body>

</html>