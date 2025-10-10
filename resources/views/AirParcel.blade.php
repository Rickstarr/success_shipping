@extends('layouts.app')
<title>AirParcel</title>
@push('styles')

@endpush
@section('content')
<section>
    <div class="relative w-full h-[500px] bg-cover bg-center bg-[url('{{asset('assets/images/air2.jpg')}}')] pt-8">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 h-full pl-10 mt-[60%] md:mt-[30%] lg:mt-[20%] pt-10">
            <h1 class="text-white lg:text-5xl text-3xl font-bold">Air Parcel</h1>
            <div class="flex gap-2">
                <a href="" class="text-white lg:text-2xl sm:text-lg md:text-xl font-bold">Home /</a>
                <a href="" class="text-white lg:text-2xl sm:text-lg md:text-xl font-bold">Single</a>
            </div>
        </div>
    </div>
</section>
<section class="mx-auto sm:p-20 p-8">
    <div class="grid grid-cols-2">
        <div>
           <div class="bg-[#f6f6f6] py-5 px-8">
                <h1>Parcel Selection</h1>
                <button type="button" class="w-full flex bg-[#2e0077] text-white text-left justify-between my-3 p-2">Air Parcel <i class="fa-solid fa-arrow-right"></i></button>
                <button type="button" class="w-full flex bg-[#2e0077] text-white text-left justify-between my-3 p-2">Sea Parcel <i class="fa-solid fa-arrow-right"></i></button>
                <button type="button" class="w-full flex bg-[#2e0077] text-white text-left justify-between my-3 p-2">Road Parcel <i class="fa-solid fa-arrow-right"></i></button>
                <button type="button" class="w-full flex bg-[#2e0077] text-white text-left justify-between my-3 p-2">Rail Parcel <i class="fa-solid fa-arrow-right"></i></button>
           </div> 
           <div class="bg-[#2e0077] text-center justify-center p-6">
            <h2>Need For Shipment ?</h2>
            <p>Contact Our Customer Care</p>
            <button type="button">Contact Us</button>
           </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')