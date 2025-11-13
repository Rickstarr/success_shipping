@extends('layouts.app')
<title>SeaParcel | Success Shipping Ventures</title>
@push('styles')

@endpush
@section('content')
<section>
    <div class="relative w-full h-[500px] bg-cover bg-center bg-[url('{{asset('assets/images/sea-parcel.jpg')}}')] pt-8">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 h-full pl-10 mt-[60%] md:mt-[30%] lg:mt-[20%] pt-10">
            <div class="flex">
                <span class='text-[#2e0077] bg-[#2e0077] border border-r border-2 border-[#2e0077] w-[6px] mr-5'></span>
                <h1 class="text-white lg:text-5xl text-3xl font-bold">Sea Parcel</h1>
            </div>
            <div class="flex gap-2 mt-4">
                <a href="" class="text-white lg:text-2xl sm:text-lg md:text-xl font-bold">Home /</a>
                <a href="" class="text-white lg:text-2xl sm:text-lg md:text-xl font-bold">Single</a>
            </div>
        </div>
    </div>
</section>
<section class="mx-auto sm:p-20 p-8">
    <div class="sm:grid-cols-1 grid md:grid-cols-1 lg:grid-cols-[1fr_2fr]  gap-9">
        <div class="">
            <div class="bg-[#f6f6f6] py-8 space-y-9 px-8">
                <h1 class="font-semibold text-2xl">Parcel Selection</h1>
                <button type="button" class="w-full flex bg-white text-black text-left justify-between my-3 p-2">
                    <a href="{{ url('/airparcel') }}" class="w-full">Air Parcel </a>
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
                <button type="button" class="w-full flex bg-[#2e0077] text-white text-left justify-between my-3 p-2">
                    <a href="{{ url('/seaparcel') }}" class="w-full">Sea Parcel </a>
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
                <button type="button" class="w-full flex bg-white text-black text-left justify-between my-3 p-2">
                    <a href="{{ url('/roadparcel') }}" class="w-full">Road Parcel </a>
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
                <button type="button" class="w-full flex bg-white text-black text-left justify-between my-3 p-2">
                    <a href="{{ url('/railparcel') }}" class="w-full">Rail Parcel </a>
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div> 
            <div class="bg-[#020e28] text-white text-center justify-center px-6 py-10 my-5 space-y-10">
                <h2 class="text-2xl font-semibold">Need For Shipment ?</h2>
                <p>Contact Our Customer Care</p>
                <button type="button" class="bg-[#2e0077] px-4 py-2">Contact Us</button>
            </div>

        </div>
        <div>
            <div><img src="{{asset('assets/images/sea-freight.jpg')}}" alt="" srcset="" class="xl:h-[380px] object-cover xl:w-full"></div>
            <div>
                <h1 class="sm:text-4xl md:text-3xl lg:text-4xl uppercase my-7">Sea Parcel</h1>
                <p class="text-justify text-[#a69c8f] leading-loose">Our services provide a comprehensive suite of solutions, including priority transportation for urgent shipments, door-to-door delivery, real-time tracking, expert customs clearance, secure warehousing, and specialized handling for sensitive, oversized, or hazardous cargo, all designed to ensure fast, reliable, and flexible transportation of goods via air to destinations worldwide, making us a trusted partner for businesses requiring efficient and organized logistics management. If the package weighs more than 100 pounds and is tightly packed, air freight shipping can be more cost-effective than LTL freight methods.</p>
            </div>
            <div class="my-6 space-y-5 text-lg text-[#2f2829]">
                <h1 class="font-semibold text-2xl mt-10">The services offered under Sea Parcel include:</h1>
                <ul>
                    <li class="hover:text-[#2e0077] my-6 text-justify"><b>Real-time tracking: </b>Shippers can monitor their shipments throughout transit, ensuring visibility and control.</li>
                    <li class="hover:text-[#2e0077] my-6 text-justify"><b>Urgent shipments: </b>Priority transportation for critical shipments that require expedited delivery.</li>
                    <li class="hover:text-[#2e0077] my-6 text-justify"><b>Door-to-door delivery: </b>Packages are picked up from the shipper's location and delivered directly to the recipient's doorstep.</li>
                    <li class="hover:text-[#2e0077] my-6 text-justify"><b>Specialized handling: </b>Expert care for sensitive, oversized, or hazardous parcel.</li>
                    <li class="hover:text-[#2e0077] my-6 text-justify"><b>Customs clearance: </b>Assistance with customs procedures, ensuring smooth and compliant clearance.</li>
                    <li class="hover:text-[#2e0077] my-6 text-justify"><b>Warehousing and storage: </b>Secure storage facilities for cargo, managing inventory and streamlining logistics.</li>
                </ul>
            </div>
            <div class ="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div class="my-4">
                    <div><img src="{{asset('assets/images/shipping.png')}}" alt="" class="object-cover"></div>
                    <h1 class="font-semi-bold text-lg md:text-2xl  mt-3">Secured Services</h1>
                    <p class="text-[#8f8b8b] text-justify leading-light mt-3">We offer fast delivery, ensuring rapid transportation of goods by air, with prompt pickup, swift transit times, and timely arrival at destinations, guaranteeing speedy delivery to meet urgent business needs.</p>
                </div>
                <div class="my-4">
                    <div><img src="{{asset('assets/images/speed.png')}}" alt="" class="object-cover"></div>
                    <h1 class="font-semi-bold text-lg md:text-2xl my-3">Speedy delivery</h1>
                    <p class="text-[#8f8b8b] text-justify leading-light my-3">We provide secured services, ensuring the safe and secure transportation of valuable, sensitive, and confidential parcel, utilizing advanced security measures, to guarantee the integrity of shipments.</p>
                </div>
            </div>
            <div class ="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div><img src="{{asset('assets/images/sea.jpg')}}" alt="feature" srcset="" class="object-cover"></div>
                <div><img src="{{asset('assets/images/shipping-2.jpeg')}}" alt="shipping-2" srcset=""></div>
            </div>
        <div>
    </div>
</section>
<section class="mb-5">
    <div class="relative w-full h-[300px] bg-cover bg-center bg-[url('{{asset('assets/images/02.jpg')}}')] pt-8">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 p-10 text-white lg:flex justify-between">
            <div>
                <h1 class="lg:text-xl my-3 sm:text-3xl">AVAILABLE 24/7</h1>
                <p class="lg:text-5xl my-3 sm:text-3xl">Get A Free Quotation</p>
                <p class="lg:text-5xl sm:text-3xl">Contact Our Customer Care</p>
            </div>
            <div><button type="button" class="bg-[#2e0077] px-4 py-2 text-xl my-4">Contact Us</button></div>
        </div>
    </div>
</section>
@endsection

@push('scripts')