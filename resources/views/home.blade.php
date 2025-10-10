@extends('layouts.app')
<title>Home Shipping Ventures</title>
@push('styles')

@endpush
@section('content')
<section>
    <div class="relative pt-8 text-center text-justify w-full h-[500px] overflow-hidden">
        <video class=" absolute w-full h-full object-cover" autoplay muted loop src="{{asset('assets/videos/advert-video.mp4')}}" type="video/mp4"></video>
        <div class=" relative">
            <h1 class="text-[#2e0077] py-20 px-10 lg:text-8xl text-5xl font-bold text-center ">Reliable RoRo and Container Shipping Solutions. </h1>
        </div>
    </div>
</section>
<section class="bg-white grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 p-8 sm:p-20 gap-10">
    <div class=""><img src="{{asset('assets/images/shipping-1.jpeg')}}" alt="" class="object-cover object-contain h-full"></div>
    <div class="leading-normal mt-4">
        <h2 class="text-[#8f8b8b] font-semibold sm:text-lg lg:text-xl">SUCCESS SHIPPING VENTURES, UK</h2>
        <h1 class="md:text-2xl lg:text-3xl sm:text-2xl font-bold mt-3">WE ARE SUPPORTED BY A VAST GLOBAL NETWORK</h1>
        <p class="text-[#2e0077] font-semibold mt-3 text-justify">"We are a global logistics provider, capable of reaching nearly every corner of the world. Driven by a commitment to excellence, we specialize in freight forwarding and shipping cargo across the globe."</p>
        <P class="text-[#8f8b8b] font-semibold mt-3 text-justify">At Success Shipping Ventures, we are your trusted partner for worldwide courier and cargo services. With over a decade of industry expertise, we have built a reputation for reliability, efficiency, and a commitment to delivering your shipments safely and on time. Our vast network and specialized knowledge allow us to handle all types of cargo, from small parcels to large freight, reaching destinations across the globe.</P>
        <p class="text-[#8f8b8b] font-semibold mt-3 text-justify">Whether you need express delivery, cost-effective shipping options, or specific logistics solutions, Golden Express Services is here to meet your needs. Our unwavering focus on quality, customer satisfaction, and meticulous attention to detail has established us as a leader in the shipping industry. Trust Golden Express Services to manage your cargo with care and precision, and let us connect you to the world.</p>
        <div class ="grid grid-cols-1 md:grid-cols-2 mt-5">
            <div class="my-4">
                <div><img src="{{asset('assets/images/shipping.png')}}" alt="" class="object-cover"></div>
                <h1 class="font-semi-bold text-lg md:text-2xl  mt-3">Secured Services</h1>
                <p class="text-[#8f8b8b] font-semibold leading-light mt-3">Secure and safeguard delivery of valuable cargos</p>
            </div>
            <div class="my-4">
                <div><img src="{{asset('assets/images/speed.png')}}" alt="" class="object-cover"></div>
                <h1 class="font-semi-bold text-lg md:text-2xl my-3">Speedy delivery</h1>
                <p class="text-[#8f8b8b] font-semibold leading-light my-3">Relaible and quick delivery services for all packages and parcels</p>
            </div>
        </div>
    </div>
</section>
<section class="mx-auto p-12 bg-[#f3f8fb] sm:p-20 p-8">
    <h1 class="text-[#8b8e9d] mb-5 font-bold text-center">OUR SERVICES</h1>
    <h2 class="text:3xl lg:text-6xl font-semibold text-center mb-10">Flexible Shipping Choices To Meet Your Requirements</h2>

    <!-- Swiper Slider -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper mb-10">
            <div class="swiper-slide rounded-lg bg-white shadow-lg">
                <div class="border-b border-bg-[#efefef]"><img src="{{asset('assets/images/speed.png')}}" alt="Slide 1" class="p-5 object-cover"></div>
                <div class="p-5">
                    <h1 class="text-2xl">Warehousing</h1>
                    <p class="text-[#8f8b8b] font-semibold leading-loose mt-3">Worldwide shipping services that deliver packages and documents with speed, security, and reliability.</p>
                </div>
                <button type="button" class="w-full border-t border-bg-[#efefef] text-left p-5 hover:text-[#2e0077]">LEARN MORE</button>
            </div>
            <div class="swiper-slide rounded-lg bg-white shadow-lg">
                <div class="border-b border-bg-[#efefef]"><img src="{{asset('assets/images/speed.png')}}" alt="Slide 1" class="p-5 object-cover"></div>
                <div class="p-5">
                    <h1 class="text-2xl">Warehousing</h1>
                    <p class="text-[#8f8b8b] font-semibold leading-loose mt-3">Worldwide shipping services that deliver packages and documents with speed, security, and reliability.</p>
                </div>
                <button type="button" class="w-full border-t border-bg-[#efefef] text-left p-5 hover:text-[#2e0077]">LEARN MORE</button>
            </div>
            <div class="swiper-slide rounded-lg bg-white shadow-lg">
                <div class="border-b border-bg-[#efefef]"><img src="{{asset('assets/images/speed.png')}}" alt="Slide 1" class="p-5 object-cover"></div>
                <div class="p-5">
                    <h1 class="text-2xl">Warehousing</h1>
                    <p class="text-[#8f8b8b] font-semibold leading-loose mt-3">Worldwide shipping services that deliver packages and documents with speed, security, and reliability.</p>
                </div>
                <button type="button" class="w-full border-t border-bg-[#efefef] text-left p-5 hover:text-[#2e0077]">LEARN MORE</button>
            </div>
            <div class="swiper-slide rounded-lg bg-white shadow-lg">
                <div class="border-b border-bg-[#efefef]"><img src="{{asset('assets/images/speed.png')}}" alt="Slide 1" class="p-5 object-cover"></div>
                <div class="p-5">
                    <h1 class="text-2xl">Warehousing</h1>
                    <p class="text-[#8f8b8b] font-semibold leading-loose mt-3">Worldwide shipping services that deliver packages and documents with speed, security, and reliability.</p>
                </div>
                <button type="button" class="w-full border-t border-bg-[#efefef] text-left p-5 hover:text-[#2e0077]">LEARN MORE</button>
            </div>
            <div class="swiper-slide rounded-lg bg-white shadow-lg">
                <div class="border-b border-bg-[#efefef]"><img src="{{asset('assets/images/speed.png')}}" alt="Slide 1" class="p-5 object-cover"></div>
                <div class="p-5">
                    <h1 class="text-2xl">Warehousing</h1>
                    <p class="text-[#8f8b8b] font-semibold leading-loose mt-3">Worldwide shipping services that deliver packages and documents with speed, security, and reliability.</p>
                </div>
                <button type="button" class="w-full border-t border-bg-[#efefef] text-left p-5 hover:text-[#2e0077]">LEARN MORE</button>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<section>
   <div class="background-image">
    <div class="absolute w-full h-full opacity-0.5 text-center z-[-1] bg-transparent p-8">
        <div class="counters grid lg:grid-cols-4 sm:grid-cols-2 md:grid-cols-2 lg:py-20">
            <div class="counter-box">
                <div class="counter text-black lg:text-7xl text-4xl font-semibold" data-target="1498767">0</div>
                <div class="label text-[#2e0077] mt-3 font-semibold text-xl lg:text-lg">Satisfied Client</div>
            </div>

            <div class="counter-box">
                <div class="counter text-black lg:text-7xl text-4xl font-semibold" data-target="132">0</div>
                <div class="label text-[#2e0077] mt-3 font-semibold text-xl lg:text-lg">Worldwide Branches</div>
            </div>

            <div class="counter-box">
                <div class="counter text-black lg:text-7xl text-4xl font-semibold" data-target="353">0</div>
                <div class="label text-[#2e0077] mt-3 font-semibold text-xl lg:text-lg">Countries Covered</div>
            </div>

            <div class="counter-box">
                <div class="counter text-black lg:text-7xl text-4xl font-semibold" data-target="9.7">0</div>
                <div class="label text-[#2e0077] mt-3 font-semibold text-xl lg:text-lg">Review</div>
            </div>
        </div>
    </div>
   </div>
</section>
<section class="sm:p-20 p-8">
    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 text-white gap-4">
        <div class="relative">
            <div><img src="{{asset('assets/images/01.jpg')}}" alt="" srcset="" class="absolute w-full h-full object-cover"></div>
            <div class="relative p-8">
                <i class="fas fa-plane fa-4x fa-rotate-320 py-8"></i>
                <h1 class="text-3xl">Air Parcel</h1>
                <hr class="border-white border-t-15 my-6 w-1/3 border border-2">
                <button type="button" class="relative before:absolute pl-5 before:top-1/2 before:left-0 before:w-0 before:h-0.5 before:bg-white before:transition-width before:duration-300 hover:before:w-4 text-left mt-8 text-[#2e0077] font-semibold">READ MORE</button>
            </div>
        </div>
        <div class="relative">
            <div><img src="{{asset('assets/images/02.jpg')}}" alt="" srcset="" class="absolute w-full h-full object-cover"></div>
            <div class="relative p-8">
                <i class="fas fa-ship fa-4x py-8"></i>
                <h1 class="text-3xl">Sea Parcel</h1>
                <hr class="border-white border-t-15 my-6 w-1/3 border border-2">
                <button type="button" class="relative before:absolute pl-5 before:top-1/2 before:left-0 before:w-0 before:h-0.5 before:bg-white before:transition-width before:duration-300 hover:before:w-4 text-left mt-8 text-[#2e0077] font-semibold">READ MORE</button>
            </div>
        </div>
        <div class="relative">
            <div><img src="{{asset('assets/images/03.jpg')}}" alt="" srcset="" class="absolute w-full h-full object-cover"></div>
            <div class="relative p-8">
                <i class="fas fa-truck fa-4x py-8"></i>
                <h1 class="text-3xl">Ground Parcel</h1>
                <hr class="border-white border-t-15 my-6 w-1/3 border border-2">
                <button type="button" class="relative before:absolute pl-5 before:top-1/2 before:left-0 before:w-0 before:h-0.5 before:bg-white before:transition-width before:duration-300 hover:before:w-4 text-left mt-8 text-[#2e0077] font-semibold">READ MORE</button>
            </div>
        </div>
        <div class="relative">
            <div><img src="{{asset('assets/images/04.jpg')}}" alt="" srcset="" class="absolute w-full h-full object-cover"></div>
            <div class="relative p-8">
                <i class="fas fa-pallet fa-4x py-8"></i>
                <h1 class="text-3xl">Rail Parcel</h1>
                <hr class="border-white border-t-15 my-6 w-1/3 border border-2">
                <button type="button" class="relative before:absolute pl-5 before:top-1/2 before:left-0 before:w-0 before:h-0.5 before:bg-white before:transition-width before:duration-300 hover:before:w-4 text-left mt-8 text-[#2e0077] font-semibold">READ MORE</button>
            </div>
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
                // COUNTER

   const counters = document.querySelectorAll(".counter");

    // Function to animate counting
    function animateCounter(counter) {
      const target = +counter.getAttribute("data-target");
      let count = 0;
      const increment = Math.ceil(target / 100); // adjust speed

      const updateCounter = () => {
        count += increment;
        counter.textContent = count;

        if (count < target) {
          requestAnimationFrame(updateCounter);
        } else {
          counter.textContent = target; // make sure it ends at the exact target
        }
      };

      updateCounter();
    }

    // Observe when counters enter viewport
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const counter = entry.target;
          animateCounter(counter);
          observer.unobserve(counter); // only run once
        }
      });
    }, { threshold: 0.5 }); // triggers when 50% visible

    counters.forEach(counter => observer.observe(counter));
</script>
@endpush

