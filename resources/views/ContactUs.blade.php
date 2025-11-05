@extends('layouts.app')
<title>Contact Us | Success Shipping Ventures</title>
@push('styles')

@endpush
@section('content')
  <section>
    <div class="relative w-full h-[500px] bg-cover bg-center bg-[url('{{asset('assets/images/contact1.jpg')}}')] pt-8">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 h-full pl-10 mt-[60%] md:mt-[30%] lg:mt-[20%] pt-10">
            <div class="flex">
                <span class='text-[#2e0077] bg-[#2e0077] border border-r border-2 border-[#2e0077] w-[6px] mr-5'></span>
                <h1 class="text-white lg:text-5xl text-3xl font-bold">Contact Us</h1>
            </div>
            <div class="flex gap-2 mt-4">
                <a href="{{ url('/') }}" class="text-white lg:text-2xl sm:text-lg md:text-xl font-bold">Home /</a>
                <p class="text-white lg:text-2xl sm:text-lg md:text-xl font-bold">Single</p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="text-center bg-[#f6f6f6] p-20 ">
        <h1 class="text-gray-400 my-9 sm:text-xl text-lg">CONTACT US</h1>
        <h2 class="text-black font-semibold sm:text-4xl text-2xl mb-20">We are always available...</h2>
    </div>
    <div class=" text-center mx-10 -mt-20 z-10 bg-white shadow-lg space-y-9">
        <div class="grid lg:grid-cols-3 sm:grid-cols-1 mb-8">
            <div class="py-5 bg-white">
                <i class="fa-solid fa-location-dot my-2 text-4xl text-[#2e0077]"></i>
                <h1 class="text-3xl font-semibold">Headquaters</h1>
                <p class="my-2 text-[#878787]">430 Court Road, Eltham, SE9 4TU</p>
                <p class="my-2 text-[#878787]">London, United Kingdom</p>
                <a href="#" class="uppercase">find us on map</a>
            </div>
            <div class="border-l-0 border-r-0 md:border-r md:border-l lg:border-r lg:border-l border-[#878787] py-5 bg-white">
                <i class="fa-solid fa-phone my-2 text-4xl text-[#2e0077]"></i>
                <h1 class="text-3xl font-semibold">+234 8167842001</h1>
                <p class="my-2 text-[#878787]">Monday-Friday</p>
                <p class="my-2 text-[#878787]">08.00-20.00</p>
                <a href="#" class="uppercase">call us</a>
            </div>
            <div class=" py-5 bg-white">
                <i class="fa-solid fa-envelope my-2 text-4xl text-[#2e0077]"></i>
                <h1 class="text-3xl font-semibold">E-mail Address</h1>
                <p class="my-2 text-[#878787]">cyprianrichard582@gmail.com</p>
                <a href="#" class="uppercase">mail us</a>
            </div>
        </div>
        <div>
            <h2 class="uppercase text-3xl py-8 text-[#878787] font-semibold">Other locations:</h2>
            <div class="swiper mySwiper px-5 pt-5 h-[350px]">
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-white">
                        <i class="fa-solid fa-location-dot my-6 text-4xl text-[#2e0077]"></i>
                        <div class="p-5 border-t border-bg-[#efefef] text-center border-b">
                            <h1 class="text-2xl text-[#1d2143] font-semibold">ASIAN</h1>
                        </div>
                        <button type="button" class="w-full text-center p-5 hover:text-[#2e0077]">Find us on map</button>
                    </div>
                    <div class="swiper-slide bg-white">
                        <i class="fa-solid fa-location-dot my-6 text-4xl text-[#2e0077]"></i>
                        <div class="p-5 border-t border-bg-[#efefef] text-center border-b">
                            <h1 class="text-2xl text-[#1d2143] font-semibold">SOUTH AMERICA</h1>
                        </div>
                        <button type="button" class="w-full text-center  p-5 hover:text-[#2e0077]">Find us on map</button>
                    </div>
                    <div class="swiper-slide bg-white">
                        <i class="fa-solid fa-location-dot my-6 text-4xl text-[#2e0077]"></i>
                        <div class="p-5 border-t border-bg-[#efefef] text-center border-b">
                            <h1 class="text-2xl text-[#1d2143] font-semibold">AFRICA</h1>
                        </div>
                        <button type="button" class="w-full text-center  p-5 hover:text-[#2e0077]">Find us on map</button>
                    </div>
                    <div class="swiper-slide bg-white">
                        <i class="fa-solid fa-location-dot my-6 text-4xl text-[#2e0077]"></i>
                        <div class="p-5 border-t border-bg-[#efefef] text-center border-b">
                            <h1 class="text-2xl text-[#1d2143] font-semibold">NORTH AMERICA</h1>
                        </div>
                        <button type="button" class="w-full text-center  p-5 hover:text-[#2e0077]">Find us on map</button>
                    </div>
                    <div class="swiper-slide bg-white">
                        <i class="fa-solid fa-location-dot my-6 text-4xl text-[#2e0077]"></i>
                        <div class="p-5 border-t border-bg-[#efefef] text-center border-b">
                            <h1 class="text-2xl text-[#1d2143] font-semibold">EUROPE</h1>
                        </div>
                        <button type="button" class="w-full text-center  p-5 hover:text-[#2e0077]">Find us on map</button>
                    </div>
                    <div class="swiper-slide bg-white">
                        <i class="fa-solid fa-location-dot my-6 text-4xl text-[#2e0077]"></i>
                        <div class="p-5 border-t border-bg-[#efefef] text-center border-b">
                            <h1 class="text-2xl text-[#1d2143] font-semibold">OCEANIA</h1>
                        </div>
                        <button type="button" class="w-full text-center  p-5 hover:text-[#2e0077]">Find us on map</button>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
<section class="bg-[#182d3e] p-20 my-10">
    <div class="text-center">
        <h1 class="text-white mt-9 mb-3 text-lg font-semibold">STAY WITH US</h1>
        <h2 class="text-white font-semibold text-4xl mb-5 ">Get In Touch</h2>
    </div>
    <div class="flex justify-center items-center">
        <div class="w-full h-[500px] overflow-hidden shadow-lg border border-gray-300">
            <iframe
            class="w-full h-full"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.990999723309!2d7.497605114765294!3d4.867800396483201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069cdff2cb12345%3A0xf7b63b3a56fdbd83!2sPort%20Harcourt!5e0!3m2!1sen!2sng!4v1697078900000!5m2!1sen!2sng"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section> 
@endsection

@push('scripts')
<script>
                 // SWIPER

  document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".mySwiper", {
      loop: true,
      autoplay: {
        delay: 3000,
      },
      spaceBetween: 20, // gap between slides
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

      // 👇 Responsive settings
      breakpoints: {
        0: {            // Mobile devices
          slidesPerView: 1
        },
        640: {          // Tablets (>=640px)
          slidesPerView: 2
        },
        1024: {         // Desktops (>=1024px)
          slidesPerView: 3
        }
      }
    });
  });
</script>