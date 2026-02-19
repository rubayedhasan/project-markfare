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
    <!-- newsletter / contact section -->
    <section class="newsletter bg-white p-6 md:p-10 rounded-md border border-[#054f73]/20 shadow-sm">

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
    </section>
</body>

</html>