<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Halaman Home</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
</head>
<body class="h-full">
  <header class="block text-center font-bold text-xl">
    <marquee behavior="" direction="right">WELCOME TO MIWOO PET HOTEL</marquee>
  </header>
    <div class="min-h-full">
        <nav id="navbar" class="sticky top-0 bg-opacity-10 backdrop-blur-lg backdrop-filter shadow-md z-50" x-data="{ isOpen: false }">
          <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
              <div class="flex items-center gap-20 lg:gap-10 xl:gap-20">
                <div class="flex gap-2 items-center">
                  <h1 class="font-medium text-xl text-black">MiWoo</h1>
                  <img class="h-12 w-12" src="img/pawblack.png" alt="Your Company">
                </div>
                <div class="hidden md:block">
                  <div class="ml-10  flex items-baseline space-x-4 text-black">
                    <a href="/" class="rounded-md outline px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
                    <a href="/about" class="rounded-md px-3 py-2 text-sm font-medium hover:outline ">About</a>
                    <a href="/booking" class="rounded-md px-3 py-2 text-sm font-medium hover:outline ">Booking</a>
                    <a href="/contact" class="rounded-md px-3 py-2 text-sm font-medium hover:outline ">Contact</a>
                  </div>
                </div>
              </div>
              <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                  <div class="relative ml-3">
                    <div>
                      <button type="button" @click="isOpen = !isOpen" class="  relative flex max-w-xs items-center rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full" src="img/Rei_Ayanami.jpg" alt="rei">
                      </button>
                    </div>

                    <div x-show="isOpen"
                    x-transition:enter="transition ease-out duration-100 transform"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75 transform"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                     class="bg-white bg-opacity-70 text-black absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                      <a href="/#" class="block px-4 py-2 text-sm text-black" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                      <a href="#" class="block px-4 py-2 text-sm text-black" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                      <a href="#" class="block px-4 py-2 text-sm text-black" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="-mr-2 flex md:hidden">
                <button type="button"  @click="isOpen = !isOpen"
                 class=" relative inline-flex items-center justify-center rounded-md p-2 text-black hover:bg-gray-700  focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                  <span class="absolute -inset-0.5"></span>
                  <span class="sr-only">Open main menu</span>
                  <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                  </svg>
                  <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
      
          <div x-show="isOpen" class="md:hidden" id="mobile-menu">
            <div class=" space-y-1 px-2 pb-3 pt-2 sm:px-3 text-black">
              <a href="/" class="block rounded-md outline px-3 py-2 text-base font-medium" aria-current="page">Home</a>
              <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium hover:outline">About</a>
              <a href="/booking" class="block rounded-md px-3 py-2 text-base font-medium hover:outline">Booking</a>
              <a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium hover:outline ">Contact</a>
            </div>
            <div class="border-t border-gray-700 pb-3 pt-4">
              <div class="flex items-center px-5">
                <div class="flex-shrink-0">
                  <img class="h-10 w-10 rounded-full" src="img/Rei_Ayanami.jpg" alt="">
                </div>
                <div class="ml-3 ">
                  <div class="text-base font-medium leading-none text-black">Rei Ayanami</div>
                  <div class="text-sm font-medium leading-none text-black">reiayanami12@gmail.com</div>
                </div>
                <button type="button" class=" relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-black  focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">View notifications</span>
                  <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                  </svg>
                </button>
              </div>
              <div class="mt-3 space-y-1 px-2">
                <a href="/#" class=" block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-gray-700 ">Your Profile</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-gray-700 ">Settings</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-gray-700 ">Sign out</a>
              </div>
            </div>
          </div>
        </nav>
      
        <section class="mainsection pb-10 bg-white">
          <div class="container mx-auto px-5 lg:px-8">
            <div class="flex-col lg:flex lg:flex-row justify-between items-center">
              <div class="lg:w-[65%] lg:order-2" id="img-miawoo" >
                <img src="img/miawoogallery.png" alt="" class="mx-auto mb-10 md:scale-95 transition-transform duration-300 ease-in-out transform hover:scale-105">
              </div>
              <div class="lg:w-1/2 xl:w-[46%] lg:order-1" id="tittle-miawoo">
                <h1 class=" text-2xl tracking-wide md:max-w-[40rem] xl:max-w-2xl xl:leading-snug xl:text-5xl lg:max-w-sm lg:leading-normal leading-relaxed md:text-4xl text-gray-900 font-semibold mb-4">
                  "MiWoo Pet Hotel"
                  <i class="fa-solid fa-paw text-2xl xl:text-3xl rotate-45 text-gray-800 ml-1">
                  <p>"When Paw Feels At Home"</p>
                  </i>
                </h1>
                <p id="desc-miawoo" class=" text-gray-700 text-base max-w-lg lg:max-w-[22rem] xl:text-xl xl:max-w-sm xl:leading-relaxed leading-loose md:leading-relaxed md:text-lg mb-6">
                  "Pet hotel ini menawarkan suasana yang hangat dan nyaman,
                  sehingga hewan peliharaan Anda merasa seperti di rumah sendiri."
                </p>
                <div class="flex gap-4 mb-7" id="button" >
                  <a id="booknow" href="/booking" class="font-montserrat px-4 xs:px-6 md:px-8 py-3 bg-blue-800 block text-white rounded transition duration-300 ease-in-out hover:bg-slate-500">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="secondsection">
          <div class="container mx-auto px-5 lg:px-8 pt-16 pb-24">
            <div class="flex-col lg:flex lg:flex-row gap-12 justify-between items-center mb-14 lg:mb-28">
              <div class="mb-5 lg:mb-0 lg:w-1/2" id="aboutus" >
                <h5 class="text-lightBlue tracking-wider mb-3 md:text-base lg:text-lg font-semibold text-sm ">MiWoo Pet Hotel</h5>
                <h1 id="aboutus" class="text-gray-900 text-2xl font-semibold md:text-3xl lg:text-4xl">
                  About Us
                </h1>
              </div>
              <div class="lg:w-1/2" id="desc-aboutus" >
                <article class="text-gray-700  text-base md:max-w-lg md:text-lg lg:text-xl">
                  <p>
                    Di MiWoo Pet Hotel, kami percaya bahwa setiap hewan peliharaan layak mendapatkan perawatan yang penuh kasih dan perhatian.
                  </p>
                  <p>
                    Kami berkomitmen untuk memberikan pengalaman yang nyaman dan menyenangkan untuk hewan peliharaan Anda.
                  </p>
                </article>
              </div>
            </div>
          </div>
          <div class="container mx-auto bg-white flex-col lg:flex lg:flex-row gap-12 justify-between items-center">
            <div class="mb-8 lg:mb-0 lg:w-1/2" id="img-miawoo2" >
              <img src="img/miawoogallery2.png" alt="" class="mx-auto transition-transform duration-300 ease-in-out transform hover:scale-105">
            </div>
            <div class="lg:w-1/2" id="ourservices" >
              <h1 class="text-gray-900 text-2xl font-semibold md:text-3xl lg:text-4xl  mb-5">
                Our Services
              </h1>
              <div id="desc-ourservices" class="text-gray-700  text-base md:max-w-lg lg:text-xl md:text-lg mb-8">
                <article>
                  <p><b>Penitipan Hewan:</b> Kami menyediakan ruang nyaman dan aman untuk anjing dan kucing dengan pengawasan penuh 24 jam dan area bermain yang luas.</p>
                  <p><b>Perawatan & Grooming:</b> Layanan perawatan lengkap agar hewan peliharaan selalu bersih dan segar.</p>
                  <p><b>Pick-Up & Drop-Off:</b> Layanan jemput dan antar hewan peliharaan dari dan ke rumah Anda, aman dan nyaman.</p>
                  <p><b>Holiday Packages:</b> Paket khusus untuk memberikan pengalaman liburan menyenangkan dengan aktivitas ekstra dan perhatian khusus.</p>
                  <p><b>Daily Play Sessions:</b> Sesi bermain interaktif dan sosialisasi untuk menjaga kebugaran fisik dan mental hewan selama menginap.</p>
                </article>
              </div>
            </div>
          </div>
          <div id="whychooseus">
            <div class="container mx-auto px-5 lg:px-8 pb-10">
              <div class="mb-7" >
                <h1 class="text-gray-900 text-2xl font-semibold md:text-3xl leading-normal lg:leading-normal lg:max-w-md lg:text-4xl  mb-7">
                  Why Choose Us
                </h1>
              </div>
              <article id="desc-whychooseus" class="text-gray-700  text-base md:max-w-lg lg:text-xl md:text-lg mb-10">
                <p><b>Penginapan Nyaman:</b> Kamar ber-AC dan tempat tidur yang nyaman untuk kenyamanan maksimal.</p>
                <p><b>Perawatan & Grooming:</b> Layanan perawatan lengkap agar hewan peliharaan selalu bersih dan segar.</p>
                <p><b>Area Bermain:</b> Ruang luas untuk bermain dan bersosialisasi.</p>
                <p><b>24/7:</b> Tim kami selalu siap memberikan perhatian penuh setiap saat.</p>
                <p><b>Konsultasi Kesehatan:</b> Didukung oleh dokter hewan terpercaya untuk memastikan kesehatan peliharaan Anda.</p>
              </article>
            </div>
          </div>
          <div class="container mx-auto px-5 lg:px-8 pt-16 pb-24">
            <div class="flex-col lg:flex lg:flex-row items-center justify-between gap-12">
              <div id="img-miawoo3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d448.43077122179653!2d107.03105096739606!3d-6.191544495270003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1729659220290!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div id="desc-miawoo" class="lg:w-1/2" id="sponsoring" >
                <h5 class="text-lightBlue tracking-wider mb-3 md:text-base lg:text-lg font-semibold text-sm ">
                  MiWoo Pet Hotel
                </h5>
                <h1 class="text-gray-900 text-2xl font-semibold md:text-3xl xl:max-w-md xl:leading-relaxed lg:text-4xl  mb-5">
                  Contact Us
                </h1>
                <p class="text-gray-700  text-base md:max-w-lg lg:text-xl md:text-lg mb-8">
                  Terima kasih telah mengunjungi MiWoo Pet Hotel! Kami senang bisa menjadi pilihan Anda untuk perawatan dan kenyamanan hewan peliharaan tercinta. Jika Anda memiliki pertanyaan mengenai layanan kami, ketersediaan tempat, atau ingin melakukan reservasi, tim kami siap membantu. Kami berdedikasi untuk memberikan pengalaman terbaik bagi hewan peliharaan Anda, mulai dari penginapan yang nyaman hingga perawatan yang penuh perhatian.
                </p>
                <div class="flex gap-4 mb-7" id="button" >
                  <a id="booknow" href="/booking" class="font-montserrat px-4 xs:px-6 md:px-8 py-3 bg-blue-800 block text-white rounded transition duration-300 ease-in-out hover:bg-slate-500">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </section>  

        <section class="thirdsection bg-white">
          <div class="container mx-auto px-5 lg:px-8 pt-16 pb-24">
            <div id="faq" class="text-center" >
              <h5 class="text-lightBlue tracking-wider mb-3 md:text-base lg:text-lg font-semibold text-sm ">
                FORUM ANSWER AND QUESTION 
              </h5>
              <h1 class="text-gray-900 text-2xl font-semibold md:text-3xl xl:max-w-md mx-auto xl:leading-relaxed lg:text-4xl  mb-5">
                MiWoo Pet Hotel 
              </h1>
              <p class="text-gray-700  text-base md:max-w-md mx-auto lg:text-xl md:text-lg mb-8">
                Temukan jawaban untuk pertanyaan seputar layanan dan perawatan hewan peliharaan di MiWoo Pet Hotel! Anda bisa mencari info dari topik yang sering ditanyakan atau langsung ajukan pertanyaan baru. Forum ini juga tempat berbagi pengalaman dan tips bersama komunitas pencinta hewan. Mari bantu satu sama lain untuk memberikan yang terbaik bagi hewan peliharaan kita!
              </p>
            </div>
            <div id="desc-faq" class="grid grid-cols-1 max-w-4xl cursor-pointer mx-auto">
              <div class="p-5 border-[1px] border-gray-700">
                <div class="flex items-center justify-between mb-0">
                  <div class="flex items-center gap-3">
                    <p class="text-gray-900 md:text-lg text-base font-semibold ">
                      How to book?
                    </p>
                    <i class="fa-solid fa-chevron-down text-gray-900" id="chevron-icon"></i>
                  </div>
                </div>
                <div id="" class="hidden mt-2">
                  <p>Here is the detailed information about how to adopt a pet...</p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <script>
        // Navbar animation: move down
          gsap.from("#navbar", {
            y: -100, // Moving down from above
            opacity: 0,
            duration: 1.2,
            ease: "power2.inOut"
          });

          // Slide animations for images
          const MiawooAnimation = (selector) => {
            gsap.from(selector, {
              scrollTrigger: {
                trigger: selector,
                start: "top 80%",
                toggleActions: "play none none none",
              },
              x: -400,
              opacity: 0,
              duration: 1.5,
              delay: 2.5
            });
          };

          const TittleMiawooAnimation = (selector) => {
            gsap.from(selector, {
              scrollTrigger: {
                trigger: selector,
                start: "top 82%",
                toggleActions: "play none none none",
              },
              y: -150,
              opacity: 0,
              duration: 1.2,
              delay: 1.2
            });
          };

          const BooknowAnimation = (selector) => {
            gsap.from(selector, {
              scrollTrigger: {
                trigger: selector,
                start: "top 82%",
                toggleActions: "play none none none",
              },
              y: 200,
              opacity: 0,
              duration: 1.2,
              delay: 1.2
            });
          };

          BooknowAnimation("#booknow")
          TittleMiawooAnimation("#tittle-miawoo");
          MiawooAnimation("#img-miawoo");

          function typingAnimation(selector, text, speed, delay) {
            let element = document.querySelector(selector);
            let i = 0;

            function type() {
              if (i < text.length) {
                element.innerHTML += text.charAt(i);
                i++;
                setTimeout(type, speed); // Mengatur kecepatan mengetik
              }
            }

            element.innerHTML = ""; // Menghapus konten sebelumnya
            
            // Menambahkan delay sebelum mulai mengetik
            setTimeout(() => {
              type();
            }, delay);
          }

          // Menggunakan gsap untuk mengatur delay dan trigger
          gsap.from("#desc-miawoo", {
            opacity: 0,
            duration: 1,
            scrollTrigger: {
              trigger: "#desc-miawoo",
              start: "top 80%",
              toggleActions: "play none none none",
              onEnter: function() {
                typingAnimation(
                  "#desc-miawoo", 
                  "Pet hotel ini menawarkan suasana yang hangat dan nyaman, sehingga hewan peliharaan Anda merasa seperti di rumah sendiri.", 
                  15, // kecepatan mengetik (50 ms)
                  3000 // delay sebelum mulai mengetik (1000 ms = 1 detik)
                );
              }
            }
          });

          const slideLeftAnimation = (selector) => {
            gsap.from(selector, {
              scrollTrigger: {
                trigger: selector,
                start: "top 80%",
                toggleActions: "play none none none",
              },
              x: 100,
              opacity: 0,
              duration: 1.5,
            });
          };

          gsap.from("#booknow", {
            x: -100, // Moving down from above
            opacity: 0,
            duration: 1.2,
            ease: "power2.inOut"
          });

          const slideRightAnimation = (selector) => {
            gsap.from(selector, {
              scrollTrigger: {
                trigger: selector,
                start: "top 80%",
                toggleActions: "play none none none",
              },
              x: 100,
              opacity: 0,
              duration: 1.5,
            });
          };
          
          slideRightAnimation("#img-miawoo2");
          slideLeftAnimation("#gallery-list");
          slideRightAnimation("#img-miawoo3");

          // Fade up animations for titles and sections
          const fadeUpAnimation = (selector) => {
            gsap.from(selector, {
              scrollTrigger: {
                trigger: selector,
                start: "top 82%",
                toggleActions: "play none none none",
              },
              y: 50,
              opacity: 0,
              duration: 1.2,
            });
          };

          fadeUpAnimation("#aboutus");
          fadeUpAnimation("#ourservices");
          fadeUpAnimation("#whychooseus");

          // Fade up animations for other descriptions
          fadeUpAnimation("#desc-aboutus");
          fadeUpAnimation("#desc-ourservices");
          fadeUpAnimation("#desc-whychooseus");
      </script>
</body>
</html>