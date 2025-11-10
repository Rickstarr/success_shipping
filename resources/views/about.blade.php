@extends('layouts.app')
<title>About | Success Shipping Ventures</title>
@section('content')
<section>
    <div>

        <!-------------- about start ------------>
        <div class="w-full h-[450px] relative">
            <img src="{{asset ('assets/images/image1.jpg')}}" alt="" class="object-cover absolute w-full h-full">
            <div class="relative pt-[16em] mx-10">
                <div class="flex mb-5">
                    <div class='text-[#2e0077] bg-[#2e0077] border border-r border-2 border-[#2e0077] w-[6px] mr-5'>i</div>
                    <h1 class="text-white font-bold flex md:whitespace-nowrap text-6xl">About Us</h1>
                </div>
                <div class="flex">
                    <h6 class="text-white text-xl">Home /</h6>
                    <h6 class="text-[#a69f91] text-xl">About Us</h6>
                </div>
            </div>
        </div>

        <!------------- about services ----------->
        <div class='w-full pb-10 bg-white lg:px-10 px-4'>
            <div>
                <p class="text-[#8b8b8b] pt-20 mb-8">WE OFFER</p>
                <div class="grid md:grid-cols-2">
                    <div>
                        <div class="flex">
                            <div class='text-[#2e0077] bg-[#2e0077] border border-r border-2 border-[#2e0077] w-[6px] md:h-[7em] h-[5em] mr-5'>i</div>
                            <h1 class="text-black font-bold md:text-5xl text-[1.7em] leading-tight mb-10">Extensive Services To Meet All Your Needs.</h1>
                        </div>
                        <p class='text-[#8b8b8b] text-justify mb-10'>The global shipping experts. In today’s fast-paced world, reliable shipping is essential. We harness advanced technology, a comprehensive logistics network, and a dedication to excellence to provide innovative solutions. With over a decade of experience and offices around the globe, we understand the importance of timely and secure deliveries. Trust us to ensure your shipments reach their destination efficiently and intact.</p> 
                        <div class="text-[#8d8d8d]">
                            <div class="flex gap-5">
                                <p class="bg-gray-200 w-5 h-5"></p><p class="-mt-1">Has a reputation for reliability and consistency.</p><br>
                            </div><br>
                            <div class="flex gap-5">
                                <p class="bg-gray-200 w-5 h-5"></p><p class="-mt-1">Offers secure and timely parcel delivery.</p><br>
                            </div><br>
                            <div class="flex gap-5">
                                <p class="bg-gray-200 w-5 h-5"></p><p class="-mt-1">Provides accurate tracking and updates.</p><br>
                            </div><br>
                            <div class="flex gap-5">
                                <p class="bg-gray-200 w-5 h-5"></p><p class="-mt-1">Has a strong commitment to customer satisfaction.</p><br> 
                            </div> <br>                          
                            <div class="flex gap-5">
                                <p class="bg-gray-200 w-5 h-5"></p><p class="-mt-1">Has a proven track record of successful deliveries.</p><br>
                            </div><br>
                        </div>
                        <div class='grid md:grid-cols-2 gap-0'>
                            <div class='w-50'>
                                <p class='text-2xl'>OVER</p>
                                <h1 class="text-[#01666c] text-9xl font-bold bg-[url('{{asset ('assets/images/about-3.png')}}')] bg-cover bg-center bg-clip-text text-transparent ">2</h1>
                                <P class='font-semibold'>DECADES OF SUCCESS</P>
                            </div>
                            <div class='flex'>
                                <div class='text-[#eeeeee] bg-[#eeeeee] border border-r border-2 border-[#eeeeee] w-[6px] md:h-[11em] h-[12em] mr-5'>i</div>                                
                                <p class='text-[#01666c] text-xl w-130'><i>With over 20 years of experience, we consistently achieve exceptional results, pushing industry boundaries and setting new standards for excellence and innovation.</i></p>
                            </div>
                        </div>
                    </div>
                    <div>
                       <img src="{{asset ('assets/images/about-men.png')}}" alt="" class="w-90 h-70"> 
                    </div>                    
                </div>
            </div>
        </div>

        <!-- about processes -->
        <div class='bg-[#030f27] mt-10 p-10 lg:p-20'>
            <div class='text-white text-center mb-10 justify-center'>
                <h1 class='text-lg mb-5'>OUR PROCESSES</h1>
                <h1 class='md:text-5xl text-3xl font-bold'>How We Handle Our Services.</h1>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 items-center gap-10 mx-auto text-center justify-center p-10">
                <div>
                    <div>
                        <div class="items-center justify-center flex mb-5"><img src="{{asset ('assets/images/web.png')}}" alt=""></div>
                        <h1 class='text-white text-xl text-center mb-5'>Contact Us To Apply</h1>
                        <p class="text-[#c4cdcc] text-md text-center">To Apply, Contact Us To Begin The Application Process.</p>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="items-center justify-center flex mb-5"><img src="{{asset ('assets/images/document.png')}}" alt=""></div>
                        <h1 class='text-white text-xl text-center mb-5'>Documentation</h1>
                        <p class="text-[#c4cdcc] text-md text-center">Our Experts Review All Submitted Documentation In Accordance With Our Policy.</p>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="items-center justify-center flex mb-5"><img src="{{asset ('assets/images/call-center.png')}}" alt=""></div>
                        <h1 class='text-white text-xl text-center mb-5'>Processing</h1>
                        <p class="text-[#c4cdcc] text-md text-center">After Reviewing Your Documents, We Will Get In Touch With You To Outline The Next Steps.</p>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="items-center justify-center flex mb-5"><img src="{{asset ('assets/images/package.png')}}" alt=""></div>
                        <h1 class='text-white text-xl text-center mb-5'>Final Destination</h1>
                        <p class="text-[#c4cdcc] text-md text-center">We Are Ready To Deliver Or Provide Your Package.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- about why -->
        <div class='bg-white lg:p-20 p-5 pt-20'>
            <div class="grid md:grid-cols-2 gap-10">
                <div>
                    <div>
                        <h3 class='text-[#988d8b] mb-3'>WHY CHOOSE US</h3>
                        <p class='text-black text-2xl lg:text-5xl font-bold leading-snug mb-3'>Outstanding Delivery Services, Every Time</p>
                        <p class='text-[#939eb1] text-xl leading-normal mb-3'>Trusted by many, we are the leading courier and delivery service provider, offering reliable and efficient services worldwide, both domestically and internationally.</p>                        
                    </div>
                    <div class='flex border-b pb-5 mb-3 border-[#939eb1]'>
                        <div class='p-5 h-10 w-10 rounded bg-[#2e0077]'></div>
                        <div class='mx-5'>
                            <p class='text-xl font-semibold mb-3'>Safety and Security</p>
                            <p class='text-[#939eb1] text-justify'>We understand the value and importance of your cargo and goods. That's why we provide expert advice on the best logistics and freight options, whether for local or distant destinations, tailored to your specific requirements.</p>
                        </div>
                    </div>
                    <div class='flex border-b pb-5 mb-5 border-[#939eb1]'>
                        <div class='p-5 h-10 w-10 rounded bg-[#2e0077]'></div>
                        <div class='mx-5'>
                            <p class='text-xl font-semibold mb-3'>Flexibility & 24/7 Services</p>
                            <p class='text-[#939eb1] text-justify'>Today's business environment demands 24/7 transportation services that are both versatile and adaptable, delivering efficiency and cost savings that meet the needs of the executive suite.
                        </div>
                    </div>
                    <div class='flex border-b pb-5 mb-5 border-[#939eb1]'>
                        <div class='p-5 h-10 w-10 rounded bg-[#2e0077]'></div>
                        <div class='mx-5'>
                            <p class='text-xl font-semibold mb-3'>Flat Rate Fees</p>
                            <p class='text-[#939eb1] text-justify'>Clear and straightforward shipping pricing, with no surprises or hidden fees guaranteed.</p>
                        </div>
                    </div>
                    <div class='flex border-b pb-5 mb-5 border-[#939eb1]'>
                        <div class='p-5 h-10 w-10 rounded bg-[#2e0077]'></div>
                        <div class='mx-5'>
                            <p class='text-xl font-semibold mb-3'>Collaborative Customer Relationships</p>
                            <p class='text-[#939eb1] text-justify'>Our success is measured by how well we meet and exceed our customers' expectations.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <img src="{{asset ('assets/images/feature_1.jpg')}}" alt="" class='mb-5'>
                    </div>
                    <div class='flex border-b pb-5 mb-5 border-[#939eb1]'>
                        <div class='p-5 h-10 w-10 rounded bg-[#2e0077]'></div>
                        <div class='mx-5'>
                            <p class='text-xl font-semibold mb-3'>Innovation</p>
                            <p class='text-[#939eb1] text-justify'>Our decades in the industry have been driven by continuous innovation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- about depend -->
        <div class='bg-[#f3f8fb] pt-20 lg:px-20 px-5 pb-10'>
            <div class='grid lg:grid-cols-2 gap-10'>
                <div>
                    <p class='text-[#958787] mb-3'>SHIPPING ALLY</p>
                    <div class='md:text-5xl pl-4 text-[1.5em] font-bold border-l-4 border-[#2e0077] leading-snul mb-5'>Dependable and Trusted Global Shipping Partner</div>
                    <p class='text-[#958787] mb-3'>In today’s fast-paced global marketplace, having a reliable and efficient shipping partner is more crucial than ever.</p>
                    <div>
                        <div class='lg:text-lg text-md mb-2 flex justify-between '>
                            <p class='whitespace-nowrap'>Freight Management & Partnership</p>
                            <p>97%</p>
                        </div>
                        <div class='cover mb-5'><div class="cover1"></div></div>

                        <div class='lg:text-lg text-md mb-2 flex justify-between '>
                            <p>Packaging Storage</p>
                            <p>94%</p>
                        </div>
                        <div class='cover mb-5'><div class="cover2"></div></div>

                        <div class='lg:text-lg text-md mb-2 flex justify-between '>
                            <p>Delivery Services</p>
                            <p>98%</p>
                        </div>
                        <div class='cover'><div class="cover3"></div></div>
                    </div>
                </div>
                <div>
                    <div>
                        <img src="{{asset ('assets/images/about-3.png')}}" alt="" class='image'>
                    </div>
                </div>
            </div>             
        </div>
    </div>
</section>
@endsection
