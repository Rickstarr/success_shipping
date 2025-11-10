<footer class="w-full bg-[#050913] pb-20 absolute z-200">
    <div class="p-12">
        <div class="flex grid md:grid-cols-3 gap-20">
            <div class='text-white'>
                <a href="#" class=" font-bold">
                    <img src="{{asset('assets/images/footer-logo2.png')}}" alt="logo" class="mb-5 ">
                </a>    
                <p class='text-lg mt-3'>Our services offer worldwide transportation and logistics solutions. With offices in over 68 countries, we have a vast network of partners and agents to meet your diverse needs.</p>
            </div>
            <div class='text-white '>
                <h1 class='text-3xl mb-10'>Links</h1>
                <ul class='leading-loose space-y-4'>
                    <li>
                        <a href="{{ url ('/') }}" class="hover:text-gray-400 transition duration-300">Home</a>
                    </li>
                    <li>
                        <a href="{{ url ('/about') }}"class="hover:text-gray-400 transition duration-300">About Us</a>
                    </li>
                    <li>
                        <a href="#"class="hover:text-gray-400 transition duration-300">Our Services</a>
                    </li>
                    <li>
                        <a href="#"class="hover:text-gray-400 transition duration-300">Parcel</a>
                    </li>
                    <li>
                        <a href="{{ url ('/contact') }}"class="hover:text-gray-400 transition duration-300">Contact Us</a>
                    </li>
                    
                </ul>
            </div>
            <div>
                <h1 class='text-3xl text-white mb-10'>Get in Touch</h1>
                <ul class='leading-loose space-y-4'> 
                    <li>
                        <a href="#" class='text-[#ffd700]'>(Our Headquarters)</a>
                    </li>
                    <li>
                        <a href="#" class='text-white text-base'>430 Court Road, Eltham, London, SE9 4TU, United Kingdom</a>
                    </li>
                    <li>
                        <a href="#" class='text-[#ffd700]'>E-mail Us:</a>
                    </li>
                    <li>
                        <a href="#" class='text-white text-base hover:text-gray-400 transition duration-300'>freight@goldenexpresscourier.com</a>
                    </li>
                    <li>
                        <a href="#" class='text-[#ffd700]'>Call Us:</a>
                    </li>
                    <li>
                        <a href="#" class='text-white hover:text-gray-400 transition duration-300 text-base'>+44 74 93 44 6915</a>
                    </li>
                </ul>
            </div>
        </div>        
    </div>
    <div class="text-white grid lg:grid-cols-2 sm:grid-cols-1 border-t border-gray-700 lg:space-y-7 md:py-9 px-10">
        <div class="justify-start text-start align-start flex">
            <p class="text-lg leading-loose">&copy;2025 - 2026 | Success Shipping Ventures | All Rights Resereved.</p>
        </div>
        <div class="flex text-end lg:justify-end">
            <p class="text-lg mt-3">Privacy Policy | Terms & Conditions</p>
        </div>
    </div>
</footer>