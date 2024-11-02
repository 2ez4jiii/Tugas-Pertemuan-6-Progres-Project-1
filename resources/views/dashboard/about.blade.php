<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Halaman Home</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full">
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
                <a href="/" class="rounded-md px-3 py-2 text-sm font-medium hover:outline">Home</a>
                <a href="/about" class="rounded-md outline px-3 py-2 text-sm font-medium" aria-current="page">About</a>
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
          <a href="/" class="block rounded-md px-3 py-2 text-base font-medium hover:outline">Home</a>
          <a href="/about" class="block rounded-md outline px-3 py-2 text-base font-medium" aria-current="page">About</a>
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
    
    <header class="shadow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900 text-center">Our Profile</h1>
      </div>
    </header>
      <main>
        <div class="bg-gray-100">
          <div class="container mx-auto py-8">
              <div class="grid grid-cols-4 sm:grid-cols-12 gap-6 px-4">
                  <div class="col-span-4 sm:col-span-3">
                      <div class="bg-white shadow rounded-lg p-6">
                          <div class="flex flex-col items-center">
                              <img src="img/rei_ayanami.jpg" class="w-32 h-32 bg-gray-300 rounded-full mb-4 shrink-0">
      
                              </img>
                              <h1 class="text-xl font-bold">Ahmad Aji Saputra</h1>
                              <p class="text-gray-700">Front-end Developer</p>
                          </div>
                          <hr class="my-6 border-t border-gray-300">
                          <div class="flex flex-col">
                              <span class="text-gray-700 uppercase font-bold tracking-wider mb-2">Skills</span>
                              <ul>
                                  <li class="mb-2">Scroll Fesbuk 24/7</li>
                                  <li class="mb-2">HTML/CSS</li>
                                  <li class="mb-2">Tailwind</li>
                                  <li class="mb-2">Javascript</li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-span-4 sm:col-span-9">
                      <div class="bg-white shadow rounded-lg p-6">
                          <h2 class="text-xl font-bold mb-4">About Me</h2>
                          <p class="text-gray-700">Aku adalah member grub fesbuk IMPHNEN "Ingin Menjadi Programmer Handal Namun Enggan Ngoding".
                          </p>
                          <p class="text-gray-700">
                            Ngoding dikit,error,buka epbi
                          </p>
      
                          <h3 class="font-semibold text-center mt-3 -mb-2">
                              Find me on
                          </h3>
                          <div class="flex justify-center items-center gap-6 my-6">
                              <a class="text-gray-700 hover:text-orange-600" aria-label="Visit TrendyMinds Facebook" href="https://www.facebook.com/ahmadaji32"
                                  target="_blank">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="h-6">
                                      <path fill="currentColor"
                                          d="m279.14 288 14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                      </path>
                                  </svg>
                              </a>
                              <a class="text-gray-700 hover:text-orange-600" aria-label="Visit TrendyMinds Instagram" href="https://www.instagram.com/2ez4jiii._"
                                  target="_blank">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-6">
                                      <path fill="currentColor"
                                          d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                      </path>
                                  </svg>
                              </a>
                          </div>
      
      
                          <h2 class="text-xl font-bold mt-6 mb-4">Experience</h2>
                          <div class="mb-6">
                              <div class="flex justify-between flex-wrap gap-2 w-full">
                                  <span class="text-gray-700 font-bold">Candi Builder</span>
                                  <p>
                                      <span class="text-gray-700 mr-2">at Dongeng Company</span>
                                      <span class="text-gray-700">2023-2024</span>
                                  </p>
                              </div>
                              <p class="mt-2">
                                  Membangun 1000 candi dalam kurun waktu sampai ayam jantat berkokok ketika matahari terbit.
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>

        <div class="bg-gray-100">
            <div class="container mx-auto py-8">
                <div class="grid grid-cols-4 sm:grid-cols-12 gap-6 px-4">
                    <div class="col-span-4 sm:col-span-3">
                        <div class="bg-white shadow rounded-lg p-6">
                            <div class="flex flex-col items-center">
                                <img src="img/#" class="w-32 h-32 bg-gray-300 rounded-full mb-4 shrink-0">
        
                                </img>
                                <h1 class="text-xl font-bold">M. Tauhid</h1>
                                <p class="text-gray-700">lorem ipsum</p>
                            </div>
                            <hr class="my-6 border-t border-gray-300">
                            <div class="flex flex-col">
                                <span class="text-gray-700 uppercase font-bold tracking-wider mb-2">Skills</span>
                                <ul>
                                    <li class="mb-2">///</li>
                                    <li class="mb-2">///</li>
                                    <li class="mb-2">///</li>
                                    <li class="mb-2">///</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4 sm:col-span-9">
                        <div class="bg-white shadow rounded-lg p-6">
                            <h2 class="text-xl font-bold mb-4">About Me</h2>
                            <p class="text-gray-700">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, ab sed? Doloremque ad praesentium, repellat voluptatem, dolorum blanditiis omnis sapiente quo voluptate incidunt veniam dolores, assumenda nemo! Dolorem, quidem nostrum!
                            </p>
                            <p class="text-gray-700">
                              ///
                            </p>
        
                            <h3 class="font-semibold text-center mt-3 -mb-2">
                                Find me on
                            </h3>
                            <div class="flex justify-center items-center gap-6 my-6">
                                <a class="text-gray-700 hover:text-orange-600" aria-label="Visit TrendyMinds Facebook" href="#"
                                    target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="h-6">
                                        <path fill="currentColor"
                                            d="m279.14 288 14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                        </path>
                                    </svg>
                                </a>
                                <a class="text-gray-700 hover:text-orange-600" aria-label="Visit TrendyMinds Instagram" href="#"
                                    target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-6">
                                        <path fill="currentColor"
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
        
        
                            <h2 class="text-xl font-bold mt-6 mb-4">Experience</h2>
                            <div class="mb-6">
                                <div class="flex justify-between flex-wrap gap-2 w-full">
                                    <span class="text-gray-700 font-bold">///</span>
                                    <p>
                                        <span class="text-gray-700 mr-2">///</span>
                                        <span class="text-gray-700">2023-2024</span>
                                    </p>
                                </div>
                                <p class="mt-2">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat nemo, distinctio earum expedita vero nisi, reprehenderit dolor esse veritatis harum ratione, inventore aliquid? Sequi iusto voluptate accusamus veritatis itaque id.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>

          <div class="bg-gray-100">
            <div class="container mx-auto py-8">
                <div class="grid grid-cols-4 sm:grid-cols-12 gap-6 px-4">
                    <div class="col-span-4 sm:col-span-3">
                        <div class="bg-white shadow rounded-lg p-6">
                            <div class="flex flex-col items-center">
                                <img src="img/#" class="w-32 h-32 bg-gray-300 rounded-full mb-4 shrink-0">
        
                                </img>
                                <h1 class="text-xl font-bold">Primatama Zidane</h1>
                                <p class="text-gray-700">lorem ipsum</p>
                            </div>
                            <hr class="my-6 border-t border-gray-300">
                            <div class="flex flex-col">
                                <span class="text-gray-700 uppercase font-bold tracking-wider mb-2">Skills</span>
                                <ul>
                                    <li class="mb-2">///</li>
                                    <li class="mb-2">///</li>
                                    <li class="mb-2">///</li>
                                    <li class="mb-2">///</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4 sm:col-span-9">
                        <div class="bg-white shadow rounded-lg p-6">
                            <h2 class="text-xl font-bold mb-4">About Me</h2>
                            <p class="text-gray-700">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, ab sed? Doloremque ad praesentium, repellat voluptatem, dolorum blanditiis omnis sapiente quo voluptate incidunt veniam dolores, assumenda nemo! Dolorem, quidem nostrum!
                            </p>
                            <p class="text-gray-700">
                              ///
                            </p>
        
                            <h3 class="font-semibold text-center mt-3 -mb-2">
                                Find me on
                            </h3>
                            <div class="flex justify-center items-center gap-6 my-6">
                                <a class="text-gray-700 hover:text-orange-600" aria-label="Visit TrendyMinds Facebook" href="#"
                                    target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="h-6">
                                        <path fill="currentColor"
                                            d="m279.14 288 14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                        </path>
                                    </svg>
                                </a>
                                <a class="text-gray-700 hover:text-orange-600" aria-label="Visit TrendyMinds Instagram" href="#"
                                    target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-6">
                                        <path fill="currentColor"
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
        
        
                            <h2 class="text-xl font-bold mt-6 mb-4">Experience</h2>
                            <div class="mb-6">
                                <div class="flex justify-between flex-wrap gap-2 w-full">
                                    <span class="text-gray-700 font-bold">///</span>
                                    <p>
                                        <span class="text-gray-700 mr-2">///</span>
                                        <span class="text-gray-700">2023-2024</span>
                                    </p>
                                </div>
                                <p class="mt-2">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat nemo, distinctio earum expedita vero nisi, reprehenderit dolor esse veritatis harum ratione, inventore aliquid? Sequi iusto voluptate accusamus veritatis itaque id.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>

          <div class="bg-gray-100">
            <div class="container mx-auto py-8">
                <div class="grid grid-cols-4 sm:grid-cols-12 gap-6 px-4">
                    <div class="col-span-4 sm:col-span-3">
                        <div class="bg-white shadow rounded-lg p-6">
                            <div class="flex flex-col items-center">
                                <img src="img/#" class="w-32 h-32 bg-gray-300 rounded-full mb-4 shrink-0">
        
                                </img>
                                <h1 class="text-xl font-bold">Imam Dzaki</h1>
                                <p class="text-gray-700">lorem ipsum</p>
                            </div>
                            <hr class="my-6 border-t border-gray-300">
                            <div class="flex flex-col">
                                <span class="text-gray-700 uppercase font-bold tracking-wider mb-2">Skills</span>
                                <ul>
                                    <li class="mb-2">///</li>
                                    <li class="mb-2">///</li>
                                    <li class="mb-2">///</li>
                                    <li class="mb-2">///</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4 sm:col-span-9">
                        <div class="bg-white shadow rounded-lg p-6">
                            <h2 class="text-xl font-bold mb-4">About Me</h2>
                            <p class="text-gray-700">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, ab sed? Doloremque ad praesentium, repellat voluptatem, dolorum blanditiis omnis sapiente quo voluptate incidunt veniam dolores, assumenda nemo! Dolorem, quidem nostrum!
                            </p>
                            <p class="text-gray-700">
                              ///
                            </p>
        
                            <h3 class="font-semibold text-center mt-3 -mb-2">
                                Find me on
                            </h3>
                            <div class="flex justify-center items-center gap-6 my-6">
                                <a class="text-gray-700 hover:text-orange-600" aria-label="Visit TrendyMinds Facebook" href="#"
                                    target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="h-6">
                                        <path fill="currentColor"
                                            d="m279.14 288 14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                        </path>
                                    </svg>
                                </a>
                                <a class="text-gray-700 hover:text-orange-600" aria-label="Visit TrendyMinds Instagram" href="#"
                                    target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-6">
                                        <path fill="currentColor"
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
        
        
                            <h2 class="text-xl font-bold mt-6 mb-4">Experience</h2>
                            <div class="mb-6">
                                <div class="flex justify-between flex-wrap gap-2 w-full">
                                    <span class="text-gray-700 font-bold">///</span>
                                    <p>
                                        <span class="text-gray-700 mr-2">///</span>
                                        <span class="text-gray-700">2023-2024</span>
                                    </p>
                                </div>
                                <p class="mt-2">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat nemo, distinctio earum expedita vero nisi, reprehenderit dolor esse veritatis harum ratione, inventore aliquid? Sequi iusto voluptate accusamus veritatis itaque id.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>

          <div class="bg-gray-100">
            <div class="container mx-auto py-8">
                <div class="grid grid-cols-4 sm:grid-cols-12 gap-6 px-4">
                    <div class="col-span-4 sm:col-span-3">
                        <div class="bg-white shadow rounded-lg p-6">
                            <div class="flex flex-col items-center">
                                <img src="img/#" class="w-32 h-32 bg-gray-300 rounded-full mb-4 shrink-0">
        
                                </img>
                                <h1 class="text-xl font-bold">Hendrika</h1>
                                <p class="text-gray-700">lorem ipsum</p>
                            </div>
                            <hr class="my-6 border-t border-gray-300">
                            <div class="flex flex-col">
                                <span class="text-gray-700 uppercase font-bold tracking-wider mb-2">Skills</span>
                                <ul>
                                    <li class="mb-2">///</li>
                                    <li class="mb-2">///</li>
                                    <li class="mb-2">///</li>
                                    <li class="mb-2">///</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4 sm:col-span-9">
                        <div class="bg-white shadow rounded-lg p-6">
                            <h2 class="text-xl font-bold mb-4">About Me</h2>
                            <p class="text-gray-700">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, ab sed? Doloremque ad praesentium, repellat voluptatem, dolorum blanditiis omnis sapiente quo voluptate incidunt veniam dolores, assumenda nemo! Dolorem, quidem nostrum!
                            </p>
                            <p class="text-gray-700">
                              ///
                            </p>
        
                            <h3 class="font-semibold text-center mt-3 -mb-2">
                                Find me on
                            </h3>
                            <div class="flex justify-center items-center gap-6 my-6">
                                <a class="text-gray-700 hover:text-orange-600" aria-label="Visit TrendyMinds Facebook" href="#"
                                    target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="h-6">
                                        <path fill="currentColor"
                                            d="m279.14 288 14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                        </path>
                                    </svg>
                                </a>
                                <a class="text-gray-700 hover:text-orange-600" aria-label="Visit TrendyMinds Instagram" href="#"
                                    target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-6">
                                        <path fill="currentColor"
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
        
        
                            <h2 class="text-xl font-bold mt-6 mb-4">Experience</h2>
                            <div class="mb-6">
                                <div class="flex justify-between flex-wrap gap-2 w-full">
                                    <span class="text-gray-700 font-bold">///</span>
                                    <p>
                                        <span class="text-gray-700 mr-2">///</span>
                                        <span class="text-gray-700">2023-2024</span>
                                    </p>
                                </div>
                                <p class="mt-2">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat nemo, distinctio earum expedita vero nisi, reprehenderit dolor esse veritatis harum ratione, inventore aliquid? Sequi iusto voluptate accusamus veritatis itaque id.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>

          
    </main>
</body>
</html>