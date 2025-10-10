<!-- ===================== HEADER ===================== -->
<header class="fixed w-full bg-white text-black shadow-md z-30" id="main-header">
  <div class="container mx-auto flex justify-between items-center px-8">
    <!-- Brand / Logo -->
    <a href="#" class=" font-bold">
      <img src="{{asset('assets/images/logo-shipping.png')}}" alt="logo" class="w-[200px] h-[100px] ">
    </a>

    <!-- Mobile menu button -->
    <button id="menu-btn" class="lg:hidden block text-black focus:outline-none">
      <!-- Hamburger icon -->
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

    <!-- Nav Links -->
    <nav id="menu" class="hidden lg:flex lg:items-center space-x-8 text-xl">
      <a href="#" class="hover:text-[#2e0077]">Home</a>
      <a href="/about" class="hover:text-[#2e0077]">About Us</a>
      <a href="#" class="hover:text-[#2e0077]">Our Services</a>

      <!-- ======= Services Dropdown ======= -->
      <div class="relative group">
        <button class="flex items-center hover:text-[#2e0077]">
          Parcel
          <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <!-- Dropdown menu -->
        <div
          class="absolute z-30 mr-8 mt-8 w-50 bg-[#2e0077] text-white text-sm px-6 py-2 shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-2000">
          <a href="#" class="block px-4 py-1 hover:bg-gray-100 whitespace-nowrap">Air Parcel</a>
          <a href="#" class="block px-4 py-1 hover:bg-gray-100 whitespace-nowrap">Sea Parcel</a>
          <a href="#" class="block px-4 py-1 hover:bg-gray-100 whitespace-nowrap">Rail Parcel</a>
          <a href="#" class="block px-4 py-1 hover:bg-gray-100 whitespace-nowrap">Ground Parcel</a>
        </div>
      </div>
      <!-- =================================== -->

      <a href="#" class="hover:text-[#2e0077]">Contact</a>
      
    </nav>
    <button type="button" class="bg-[#2e0077] text-xl px-5 py-2 rounded text-white hidden lg:flex lg:items-center">Track Your Parcel</button>
  </div>

  <!-- Mobile Dropdown (collapsible) -->
<div id="mobile-menu"
     class="fixed top-0 z-30 left-0 h-screen w-2/3 pt-10 bg-[#2e0077] text-white transform -translate-x-full transition-transform duration-300 ease-in-out lg:hidden shadow-lg">
  
  <!-- Nav Links -->
  <a href="#"
     class="block px-6 py-4 hover:bg-blue-800 border-b border-blue-600">Home</a>

  <a href="#"
     class="block px-6 py-4 hover:bg-blue-800 border-b border-blue-600">About Us</a>

  <a href="#"
     class="block px-6 py-4 hover:bg-blue-800 border-b border-blue-600">Our Services</a>

  <!-- Services Dropdown -->
  <div class="border-b border-blue-600">
    <button id="mobile-dropdown-btn"
            class="w-full text-left px-6 py-4 hover:bg-black flex justify-between items-center">
      Parcel
      <svg id="mobile-arrow"
           class="w-4 h-4 transform transition-transform duration-300"
           fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M19 9l-7 7-7-7" />
      </svg>
    </button>

    <div id="mobile-dropdown" class="hidden bg-[#2e0077]">
      <a href="#" class="block px-10 py-3 list-disc text-white border-b border-blue-600">Air Parcel</a>
      <a href="#" class="block px-10 py-3 list-disc text-white border-b border-blue-600">Sea Parcel</a>
      <a href="#" class="block px-10 py-3 list-disc text-white border-b border-blue-600">Rail Parcel</a>
      <a href="#" class="block px-10 py-3 list-disc text-white border-b border-blue-600">Ground Parcel</a>
    </div>
  </div>

  <a href="#"
     class="block px-6 py-4 hover:bg-blue-800 border-b border-blue-600">Track Your Parcel</a>

  <a href="#"
     class="block px-6 py-4 hover:bg-blue-800 border-b border-blue-600">Contact Us</a>
  <div class="px-6 py-4">
    <p class="py-3">Contact Us On</p>
    <p>cyprianrichard@gmail.com</p>
  </div>

</div>
</header>
<!-- =================== END HEADER =================== -->

<!-- JavaScript for mobile toggles -->
@push ('scripts')
<script>
  // Toggle main mobile menu
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');

  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('-translate-x-full');
  });

  // Toggle Services dropdown
  const dropdownBtn = document.getElementById('mobile-dropdown-btn');
  const dropdownMenu = document.getElementById('mobile-dropdown');
  const arrowIcon = document.getElementById('mobile-arrow');

  dropdownBtn.addEventListener('click', () => {
    dropdownMenu.classList.toggle('hidden');
    arrowIcon.classList.toggle('rotate-180');
  });

  // window.addEventListener("scroll", function () {
  //   const header = document.getElementById ("main-header");
  //   if (window.scrollY > 280) {
  //     header.classList.add("fixed-header");
  //   } else {
  //     header.classList.remove("fixed-header")
  //   }
  // })
</script>
@endpush