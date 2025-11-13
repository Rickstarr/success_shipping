@extends('layouts.app')
<title>Our Services | Success Shipping Ventures</title>
@section('content')
<section>
    <div class="md:w-full h-[450px] relative">
        <img src="{{asset ('assets/images/aboutus.jpg')}}" alt="" class="object-cover absolute w-full h-full">
        <div class="relative pt-[16em] mx-10">
            <div class="flex mb-5">
                <div class="flex">
                    <div class='md:text-6xl text-white pl-4 text-[1.5em] font-bold border-l-8 border-[#2e0077] leading-snul mb-5'>Our Services</div>
                </div>
            </div>
            <div class="flex">
                <h6 class="text-white text-xl">Home /</h6>
                <h6 class="text-[#a69f91] text-xl">Our Services</h6>
            </div>
        </div>
    </div>
</section>

<section class="md:px-10 px-4 pt-20 bg-white">
    <div class="text-center items-center px-1 justify-center">
        <h1 class="text-[#9A8B8B] mb-4">WHAT WE DO</h1>
        <h1 class="md:text-5xl text-[1.7em] text-black font-bold">Consistent Outstanding Delivery Performance.</h1>
    </div>
    <div class="pt-5">
        <div class="grid md:grid-cols-3 gap-5 mb-10">
            <div class="rounded-lg bg-white border border-bg-[#EEEEEE]">
                <div class="border-b border-bg-[#EEEEEE]"><img src="{{asset('assets/images/speed.png')}}" alt="Slide 1" class="p-5 object-cover"></div>
                <div class="p-5">
                    <h1 class="text-2xl font-semibold">Standard Courier</h1>
                    <p class="text-[#8f8b8b] text-justify leading-loose mt-3">Dependable pickup and delivery within 1-7 business days, offering cost-effective shipping for regular deliveries.</p>
                </div>
                <button type="button" class="w-full border-t border-bg-[#efefef] text-left p-5 hover:text-[#2e0077]">LEARN MORE</button>
            </div>
            <div class="rounded-lg bg-white border border-bg-[#EEEEEE]">
                <div class="border-b border-bg-[#EEEEEE]"><img src="{{asset('assets/images/speed.png')}}" alt="Slide 1" class="p-5 object-cover"></div>
                <div class="p-5">
                    <h1 class="text-2xl font-semibold">Express Courier</h1>
                    <p class="text-[#8f8b8b] leading-loose mt-3">Priority delivery in 1-3 business days, featuring fast and secure service with real-time tracking and confirmation.</p>
                </div>
                <button type="button" class="w-full border-t border-bg-[#efefef] text-left p-5 hover:text-[#2e0077]">LEARN MORE</button>
            </div>
            <div class="rounded-lg bg-white border border-bg-[#EEEEEE]">
                <div class="border-b border-bg-[#EEEEEE]"><img src="{{asset('assets/images/speed.png')}}" alt="Slide 1" class="p-5 object-cover"></div>
                <div class="p-5">
                    <h1 class="text-2xl font-semibold">Over Night Courier</h1>
                    <p class="text-[#8f8b8b] leading-loose mt-3">Sensitive packages are handled with highest level of discretion, and ensure next-business-day delivery service.</p>
                </div>
                <button type="button" class="w-full border-t border-bg-[#efefef] text-left p-5 hover:text-[#2e0077]">LEARN MORE</button>
            </div>
            <div class="rounded-lg bg-white border border-bg-[#EEEEEE]">
                <div class="border-b border-bg-[#EEEEEE]"><img src="{{asset('assets/images/speed.png')}}" alt="Slide 1" class="p-5 object-cover"></div>
                <div class="p-5">
                    <h1 class="text-2xl font-semibold">Pallet Courier</h1>
                    <p class="text-[#8f8b8b] leading-loose mt-3">This service ensures efficient and secure transportation for large, heavy, or bulk items.</p>
                </div>
                <button type="button" class="w-full border-t border-bg-[#efefef] text-left p-5 hover:text-[#2e0077]">LEARN MORE</button>
            </div>
            <div class="rounded-lg bg-white border border-bg-[#EEEEEE]">
                <div class="border-b border-bg-[#EEEEEE]"><img src="{{asset('assets/images/speed.png')}}" alt="Slide 1" class="p-5 object-cover"></div>
                <div class="p-5">
                    <h1 class="text-2xl font-semibold">International Courier</h1>
                    <p class="text-[#8f8b8b] leading-loose mt-3">We offer fast and reliable delivery of packages and documents worldwide, simplifying global trade with ease.</p>
                </div>
                <button type="button" class="w-full border-t border-bg-[#efefef] text-left p-5 hover:text-[#2e0077]">LEARN MORE</button>
            </div>
            <div class="rounded-lg bg-white border border-bg-[#EEEEEE]">
                <div class="border-b border-bg-[#EEEEEE]"><img src="{{asset('assets/images/speed.png')}}" alt="Slide 1" class="p-5 object-cover"></div>
                <div class="p-5">
                    <h1 class="text-2xl font-semibold">Warehousing</h1>
                    <p class="text-[#8f8b8b] leading-loose mt-3">We offer secure, efficient, and flexible storage options, managing inventory with precision.</p>
                </div>
                <button type="button" class="w-full border-t border-bg-[#efefef] text-left p-5 hover:text-[#2e0077]">LEARN MORE</button>
            </div>
        </div>
    </div>
</section>
<section class="mb-5">
    <div class="bg-[#03223C] md:pb-10 pb-4 w-full">
        <div class="md:justify-between sm:justify-center md:flex">
            <div class="md:p-10 md:text-start text-center pt-8">
                <h3 class="text-[#2E0076] text-lg mb-4">AVAILABLE 24/7</h3>
                <div class="leading-relaxed">
                    <h1 class="text-white md:font-bold font-extrabold text-[1.9em] md:text-5xl">Get A Free Quotation </h1>
                    <h1 class="text-white md:mt-4 -mt-2 font-extrabold md:font-bold text-[1.9em] md:text-5xl">Contact Our Customer Care</h1>
                </div>
            </div>
            <div class="md:p-20 p-1 md:mt-0 mt-4 md:text-start text-center ">
                <button type="button" class="bg-[#2E0175] px-10 text-xl py-3 rounded-lg border-none text-white">Contact Us</button>
            </div>
        </div>
    </div>
</section>
<section class="md:px-10 pb-5 px-4 mb-20 md:pt-20 pt-5 bg-white">
    <div class="text-center items-center mb-20 px-1 justify-center">
        <h1 class="text-[#9A8B8B] mb-4">FAVOURITE CONSIGNMEN    </h1>
        <h1 class="md:text-5xl text-[1.7em] text-black font-bold">Secured, Affordable & Reliable Logistics Support</h1>
    </div>
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
<section class="md:px-10 pb-20 px-4 md:pt-20 pt-5 bg-[#01273E]">
    <div class="text-center items-center mb-20 px-10 justify-center">
        <h1 class="text-white mb-4">SERVICE CHARGES</h1>
        <h1 class="md:text-5xl text-[1.7em] text-white font-bold">Affordable Plans For Package Deliveries Worldwide</h1>
    </div>
    <div class="grid md:grid-cols-3 gap-4">
        <div class="p-5 hover:text-white text-[#80939F] rounded-md border hover:border-[#2E0077] border-[#092E4F] border-4 pb-7">
            <div class="text-center mb-5 pt-10">
                <h1 class="text-xl font-semibold mb-4">BASIC</h1>
                <p class="text-4xl font-bold mb-1">$1,350.00</p>
                <p class="text-base">for single product</p>
            </div>
            <div class="text-start pt-10">
                <ul class="px-10 space-y-6">
                    <li class="text-[1em] font-semibold">Product Weight: <span class="font-normal">1KG-4.4KG</span></li>
                    <li class="text-[1em] font-semibold">Country: <span class="font-normal">All</span></li>
                    <li class="text-[1em] font-semibold">Duration: <span class="font-normal">3-14 days</span></li>
                    <li class="text-[1em] font-semibold">Support: <span class="font-normal">Yes</span></li>
                    <li class="text-[1em] font-semibold">Tracking: <span class="font-normal">Yes</span></li>                
                </ul>
            </div>
        </div>
        <div class="p-5 hover:text-white text-[#80939F] rounded-md border hover:border-[#2E0077] border-[#092E4F] border-4 pb-7">
           <div class="text-center mb-5 pt-10">
                <h1 class="text-xl font-semibold mb-4">PLATINUM</h1>
                <p class="text-4xl font-bold mb-1">$3,430.00</p>
                <p class="text-base">for single product</p>
            </div>
            <div class="text-start pt-10">
                <ul class="px-10 space-y-6">
                    <li class="text-[1em] font-semibold">Product Weight: <span class="font-normal">1KG-5KG</span></li>
                    <li class="text-[1em] font-semibold">Country: <span class="font-normal">All</span></li>
                    <li class="text-[1em] font-semibold">Duration: <span class="font-normal">2-5 days</span></li>
                    <li class="text-[1em] font-semibold">Support: <span class="font-normal">Yes</span></li>
                    <li class="text-[1em] font-semibold">Tracking: <span class="font-normal">Yes</span></li>                
                </ul>
            </div>         
        </div>
        <div class="p-5 hover:text-white text-[#80939F] rounded-md border hover:border-[#2E0077] border-[#092E4F] border-4 pb-7">
            <div class="text-center mb-5 pt-10">
                <h1 class="text-xl font-semibold mb-4">GOLD</h1>
                <p class="text-4xl font-bold mb-1">$9,320.00</p>
                <p class="text-base">for single product</p>
            </div>
            <div class="text-start pt-10">
                <ul class="px-10 space-y-6">
                    <li class="text-[1em] font-semibold">Product Weight: <span class="font-normal">1KG-7KG</span></li>
                    <li class="text-[1em] font-semibold">Country: <span class="font-normal">All</span></li>
                    <li class="text-[1em] font-semibold">Duration: <span class="font-normal">1-3 days</span></li>
                    <li class="text-[1em] font-semibold">Support: <span class="font-normal">Yes</span></li>
                    <li class="text-[1em] font-semibold">Tracking: <span class="font-normal">Yes</span></li>                
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection