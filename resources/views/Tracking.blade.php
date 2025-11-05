<title>Monitor Parcel | Success Shipping Ventures</title>
<link rel="icon" href="/favicon.jpg.jpg" type="image/jpg"sizeof="48x48">
<!-- TailwindCSS -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Your custom CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

<!-- <--- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="..." crossorigin="anonymous" referrerpolicy="no-referrer" />

<section>
    <header class="fixed w-full bg-white text-black shadow-md z-30" id="main-header">
        <div class="container flex justify-between lg:px-8">
            <!-- Brand / Logo -->
            <a href="#" class=" font-bold">
                <img src="{{asset('assets/images/logo-shipping.png')}}" alt="logo" class="lg:w-[200px] lg:h-[100px] w-[300px] h-[140px] ">
            </a>

            <div>
                <h1 class="text-[#2e0077] font-semibold text-4xl lg:text-xl mt-7"><a href="{{ url('/') }}">HOME</a></h1>
            </div>
        </div>
    </header>

    <section>
        <div class="relative w-full h-[600px] bg-cover bg-center bg-[url('{{asset('assets/images/trackingpic.jpg')}}')] pt-8">
            <div class="absolute inset-0 bg-white/40"></div>
            <div class="relative z-10 h-full pl-10 mt-[60%] md:mt-[20%] lg:mt-[15%]">
                <div class="flex text-center">
                    <p class="text-[#2e0077] text-3xl lg:text-md px-6 font-bold">Monitoring your shipments until pick-up is easy with us. Upon registering a package, cargo, or consignment, a tracking identification number <span class="text-red-600">(i.e NG5QUK09087)</span> will be issued to your shipment. To determine the precise status and location of your shipment, enter this unique numbers into the box below.</p>
                </div>
                <div class="flex gap-2 mt-9 items-center justify-center">
                    <input type="alphabet" name="Tracking ID" id="" placeholder="ENTER TRACKING ID" class=" py-3 rounded border border-[#2e0077] border-2px px-9 text-center">
                    <button type="button" class="bg-[#2e0077] text-white font-semibold py-3 rounded border border-[#2e0077] border-2px px-9 text-2xl lg:text-lg">FIND MY SHIPMENT</button>
                </div>
            </div>
        </div>  
    </section>
    <footer class="w-full h-full bg-[#2e0077] absolute z-200">
        <div class="mx-12">
            <div class="grid sm:grid-cols-1 lg:grid-cols-2 gap-3 text-white border-b-4 pb-8 m-9 border-white">
                <div class="">
                    <h1 class="text-4xl lg:text-2xl font-semibold py-4"><i class="fa-solid fa-circle-xmark px-2 text-blue-500 text-5xl lg:text-4xl mr-6"></i>PARCEL NOT YET COLLECTED?</h1>
                    <p class="text-2xl lg:text-[15px] leading-relaxed text-align">Sorry, this doesn’t happen often, we’re sure there’s a good reason. If it’s after 6pm on the booked collection day, then reschedule a collection by sending an instant message using our Instant Online Chat Services.’s after 6pm on the booked collection dat, then reschedule a collection by sendinf an instant message using our Instant Online Chat Services</p>
                </div>
                <div class="">
                    <h1 class="text-4xl lg:text-2xl font-semibold py-4"><i class="fa-solid fa-clock-rotate-left px-2 text-red-500 text-5xl lg:text-4xl mr-6"></i>NEED A FAST ANSWER?</h1>
                    <p class="text-2xl lg:text-[15px] leading-relaxed text-align">If you’ve any questions at all about your delivery, then don’t hesitate to get in touch with our customer services team by sending an instant message using our Instant Online Chat Services.</p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-3 text-white border-b-2 pt-5 pb-10 m-9 border-white">
                <div class="">
                    <img src="{{asset('assets/images/try-footer.jpg')}}" alt="logo" class="h-[100px] w-[300px]">
                </div>
                <div class="">
                    <h1 class="text-4xl lg:text-2xl font-semibold py-4">NEED HELP WITH LOGISTICS?</h1>
                    <p class="text-2xl lg:text-[15px] leading-relaxed text-align">We take pride in serving our customers safety. Contact Us Today!</p>
                </div>
            </div>
        </div>
        <div class="text-center text-white py-2">
            <div>
                <p class="text-md">&copy;2025 - 2026 | Success Shipping Ventures | All Rights Resereved.</p>
            </div>
        </div>
    </footer>
</section>