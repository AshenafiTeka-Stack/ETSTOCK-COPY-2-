<x-layouts.app :title="__('Dashboard')">

  <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
    MicoAT TecSol Dashboard
  </h3>

  <!-- Card Section -->
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">


      <!-- User Card -->
      <div
        class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
        <div class="p-4 md:p-5 flex gap-x-4">
          <div class="shrink-0 flex justify-center items-center size-11 bg-gray-100 rounded-lg dark:bg-neutral-800">
            <svg class="shrink-0 size-5 text-gray-600 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
              <circle cx="9" cy="7" r="4" />
              <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
              <path d="M16 3.13a4 4 0 0 1 0 7.75" />
            </svg>
          </div>
          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                Users Registered
              </p>
              <div class="hs-tooltip">
                <div class="hs-tooltip">
                  <div x-data="{ show: false }" class="relative inline-block">
                    <span @mouseenter="show = true" @mouseleave="show = false" class="cursor-pointer text-gray-600">
                      ℹ️
                    </span>

                    <div x-show="show" x-transition
                      class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 text-xs text-white bg-gray-900 rounded-md shadow-md"
                      style="display: none;">
                      Total Number of users registered in the system
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                5
              </h3>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->



      <!-- Role Card -->
      <div
        class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
        <div class="p-4 md:p-5 flex gap-x-4">
          <div class="shrink-0 flex justify-center items-center size-11 bg-gray-100 rounded-lg dark:bg-neutral-800">

            <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 size-5 text-gray-600 dark:text-neutral-400"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M17 21v-2a4 4 0 0 0-3-3.87" />
              <path d="M7 21v-2a4 4 0 0 1 3-3.87" />
              <circle cx="12" cy="7" r="4" />
            </svg>

          </div>

          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                Roles Registered
              </p>

              <div class="hs-tooltip">
                <div class="hs-tooltip">
                  <div x-data="{ show: false }" class="relative inline-block">
                    <span @mouseenter="show = true" @mouseleave="show = false" class="cursor-pointer text-gray-600">
                      ℹ️
                    </span>

                    <div x-show="show" x-transition
                      class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 text-xs text-white bg-gray-900 rounded-md shadow-md"
                      style="display: none;">
                      Total roles registered in the system
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl font-medium text-gray-800 dark:text-neutral-200">
                18
              </h3>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->


      <!-- Products Card -->
      <div
        class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
        <div class="p-4 md:p-5 flex gap-x-4">
          <div class="shrink-0 flex justify-center items-center size-11 bg-gray-100 rounded-lg dark:bg-neutral-800">

            <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 size-5 text-gray-600 dark:text-neutral-400"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path
                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4a2 2 0 0 0 1-1.73z" />
              <polyline points="3.29 7 12 12 20.71 7" />
              <line x1="12" y1="22" x2="12" y2="12" />
            </svg>

          </div>

          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                Products Registered
              </p>

              <div class="hs-tooltip">
                <div class="hs-tooltip">
                  <div x-data="{ show: false }" class="relative inline-block">
                    <span @mouseenter="show = true" @mouseleave="show = false" class="cursor-pointer text-gray-600">
                      ℹ️
                    </span>

                    <div x-show="show" x-transition
                      class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 text-xs text-white bg-gray-900 rounded-md shadow-md"
                      style="display: none;">
                      Total products registered in the system
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl font-medium text-gray-800 dark:text-neutral-200">
                18
              </h3>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->



      <!-- Categories Card -->
      <div
        class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
        <div class="p-4 md:p-5 flex gap-x-4">
          <div class="shrink-0 flex justify-center items-center size-11 bg-gray-100 rounded-lg dark:bg-neutral-800">

            <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 size-5 text-gray-600 dark:text-neutral-400"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="3" width="7" height="7" />
              <rect x="14" y="3" width="7" height="7" />
              <rect x="14" y="14" width="7" height="7" />
              <rect x="3" y="14" width="7" height="7" />
            </svg>

          </div>

          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                Categories Registered
              </p>

              <div class="hs-tooltip">
                <div class="hs-tooltip">
                  <div x-data="{ show: false }" class="relative inline-block">
                    <span @mouseenter="show = true" @mouseleave="show = false" class="cursor-pointer text-gray-600">
                      ℹ️
                    </span>

                    <div x-show="show" x-transition
                      class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 text-xs text-white bg-gray-900 rounded-md shadow-md"
                      style="display: none;">
                      Total categories registered in the system
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl font-medium text-gray-800 dark:text-neutral-200">
                18
              </h3>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->



      <!-- WareHouse Card -->
      <div
        class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
        <div class="p-4 md:p-5 flex gap-x-4">
          <div class="shrink-0 flex justify-center items-center size-11 bg-gray-100 rounded-lg dark:bg-neutral-800">

            <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 size-5 text-gray-600 dark:text-neutral-400"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M3 9L12 3l9 6" />
              <path d="M9 22V12h6v10" />
              <path d="M3 22h18" />
            </svg>

          </div>

          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                Warehouses Registered
              </p>

              <div class="hs-tooltip">
                <div class="hs-tooltip">
                  <div x-data="{ show: false }" class="relative inline-block">
                    <span @mouseenter="show = true" @mouseleave="show = false" class="cursor-pointer text-gray-600">
                      ℹ️
                    </span>

                    <div x-show="show" x-transition
                      class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 text-xs text-white bg-gray-900 rounded-md shadow-md"
                      style="display: none;">
                      Total warehouses registered in the system
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl font-medium text-gray-800 dark:text-neutral-200">
                18
              </h3>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->



      <!-- Customers Card -->
      <div
        class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
        <div class="p-4 md:p-5 flex gap-x-4">
          <div class="shrink-0 flex justify-center items-center size-11 bg-gray-100 rounded-lg dark:bg-neutral-800">

            <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 size-5 text-gray-600 dark:text-neutral-400"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <circle cx="8" cy="7" r="4" />
              <path d="M16 11l2 2 4-4" />
              <path d="M6 21v-2a4 4 0 0 1 4-4h.5" />
            </svg>

          </div>

          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                Customers Registered
              </p>

              <div class="hs-tooltip">
                <div class="hs-tooltip">
                  <div x-data="{ show: false }" class="relative inline-block">
                    <span @mouseenter="show = true" @mouseleave="show = false" class="cursor-pointer text-gray-600">
                      ℹ️
                    </span>

                    <div x-show="show" x-transition
                      class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 text-xs text-white bg-gray-900 rounded-md shadow-md"
                      style="display: none;">
                      Total Customers registered in the system
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl font-medium text-gray-800 dark:text-neutral-200">
                18
              </h3>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->



      <!-- Suppliers Card -->
      <div
        class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
        <div class="p-4 md:p-5 flex gap-x-4">
          <div class="shrink-0 flex justify-center items-center size-11 bg-gray-100 rounded-lg dark:bg-neutral-800">

            <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 size-5 text-gray-600 dark:text-neutral-400"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <rect x="1" y="3" width="15" height="13" rx="2" ry="2" />
              <path d="M16 8h4l3 3v5a2 2 0 0 1-2 2h-1" />
              <circle cx="5.5" cy="18.5" r="2.5" />
              <circle cx="18.5" cy="18.5" r="2.5" />
            </svg>

          </div>

          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                Suppliers Registered
              </p>

              <div class="hs-tooltip">
                <div class="hs-tooltip">
                  <div x-data="{ show: false }" class="relative inline-block">
                    <span @mouseenter="show = true" @mouseleave="show = false" class="cursor-pointer text-gray-600">
                      ℹ️
                    </span>

                    <div x-show="show" x-transition
                      class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 text-xs text-white bg-gray-900 rounded-md shadow-md"
                      style="display: none;">
                      Total product suppliers registered in the system
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl font-medium text-gray-800 dark:text-neutral-200">
                18
              </h3>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->


      <!-- Purchase Orders Card -->
      <div
        class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
        <div class="p-4 md:p-5 flex gap-x-4">
          <div class="shrink-0 flex justify-center items-center size-11 bg-gray-100 rounded-lg dark:bg-neutral-800">

            <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 size-5 text-gray-600 dark:text-neutral-400"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M9 12l2 2l4 -4" />
              <path d="M12 22H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9l5 5v13a2 2 0 0 1-2 2h-2" />
              <polyline points="14 2 14 6 18 6" />
            </svg>

          </div>

          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                Purch. Orders Registered
              </p>

              <div class="hs-tooltip">
                <div class="hs-tooltip">
                  <div x-data="{ show: false }" class="relative inline-block">
                    <span @mouseenter="show = true" @mouseleave="show = false" class="cursor-pointer text-gray-600">
                      ℹ️
                    </span>

                    <div x-show="show" x-transition
                      class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 text-xs text-white bg-gray-900 rounded-md shadow-md"
                      style="display: none;">
                      Total purchase orders registered in the system
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl font-medium text-gray-800 dark:text-neutral-200">
                18
              </h3>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->


      <!-- Purchase order Items Card -->
      <div
        class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
        <div class="p-4 md:p-5 flex gap-x-4">
          <div class="shrink-0 flex justify-center items-center size-11 bg-gray-100 rounded-lg dark:bg-neutral-800">

            <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 size-5 text-gray-600 dark:text-neutral-400"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M9 6h11" />
              <path d="M9 12h11" />
              <path d="M9 18h11" />
              <path d="M4 6l.01 0" />
              <path d="M4 12l.01 0" />
              <path d="M4 18l.01 0" />
            </svg>

          </div>

          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                Pur. Ord. Items Registered
              </p>

              <div class="hs-tooltip">
                <div class="hs-tooltip">
                  <div x-data="{ show: false }" class="relative inline-block">
                    <span @mouseenter="show = true" @mouseleave="show = false" class="cursor-pointer text-gray-600">
                      ℹ️
                    </span>

                    <div x-show="show" x-transition
                      class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 text-xs text-white bg-gray-900 rounded-md shadow-md"
                      style="display: none;">
                      Total number of purchase orders registered in the system
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl font-medium text-gray-800 dark:text-neutral-200">
                18
              </h3>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->



      <!-- Sales Orders Card -->
      <div
        class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
        <div class="p-4 md:p-5 flex gap-x-4">
          <div class="shrink-0 flex justify-center items-center size-11 bg-gray-100 rounded-lg dark:bg-neutral-800">

            <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 size-5 text-gray-600 dark:text-neutral-400"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M9 14h6" />
              <path d="M9 10h6" />
              <path d="M5 20h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2z" />
            </svg>

          </div>

          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                Sales Orders Registered
              </p>

              <div class="hs-tooltip">
                <div class="hs-tooltip">
                  <div x-data="{ show: false }" class="relative inline-block">
                    <span @mouseenter="show = true" @mouseleave="show = false" class="cursor-pointer text-gray-600">
                      ℹ️
                    </span>

                    <div x-show="show" x-transition
                      class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 text-xs text-white bg-gray-900 rounded-md shadow-md"
                      style="display: none;">
                      Total sales orders registered in the system
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl font-medium text-gray-800 dark:text-neutral-200">
                18
              </h3>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->



      <!-- Sales Order Items Card -->
      <div
        class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
        <div class="p-4 md:p-5 flex gap-x-4">
          <div class="shrink-0 flex justify-center items-center size-11 bg-gray-100 rounded-lg dark:bg-neutral-800">

            <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 size-5 text-gray-600 dark:text-neutral-400"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <line x1="9" y1="11" x2="20" y2="11" />
              <line x1="9" y1="16" x2="20" y2="16" />
              <line x1="9" y1="6" x2="20" y2="6" />
              <polyline points="4 12 6 14 8 10" />
            </svg>

          </div>

          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                Sal. Ord. Items Registered
              </p>

              <div class="hs-tooltip">
                <div class="hs-tooltip">
                  <div x-data="{ show: false }" class="relative inline-block">
                    <span @mouseenter="show = true" @mouseleave="show = false" class="cursor-pointer text-gray-600">
                      ℹ️
                    </span>

                    <div x-show="show" x-transition
                      class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 text-xs text-white bg-gray-900 rounded-md shadow-md"
                      style="display: none;">
                      Total sales oreder items registered in the system
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl font-medium text-gray-800 dark:text-neutral-200">
                18
              </h3>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->




    </div>
    <!-- End Grid -->
  </div>
  <!-- End Card Section -->

  <!-- Card -->
  <div
    class="p-4 md:p-5 min-h-102.5 flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
    <!-- Header -->
    <div class="flex flex-wrap justify-between items-center gap-2">
      <div>
        <h2 class="text-sm text-gray-500 dark:text-neutral-500">
          Purchase order Items in Birr
        </h2>
        <p class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
          126,238 Birr
        </p>
      </div>
      <div>
        <span
          class="py-[5px] px-1.5 inline-flex items-center gap-x-1 text-xs font-medium rounded-md bg-teal-100 text-teal-800 dark:bg-teal-500/10 dark:text-teal-500">
          <svg class="inline-block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round">
            <path d="M12 5v14" />
            <path d="m19 12-7 7-7-7" />
          </svg>
          25%
        </span>
      </div>
    </div>
    <!-- End Header -->
  </div>
  <!-- End Card -->



</x-layouts.app>