<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas UTS</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="min-h-screen bg-gray-50/50">
        @include('admin.layouts.sidebar')
        <div class="p-4 xl:ml-80">
          @include('admin.layouts.navbar')
          <div class="mt-12">
            @yield('content')
            
            {{-- <div class="mb-4 grid grid-cols-1 gap-6 xl:grid-cols-3">
              <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md overflow-hidden xl:col-span-2">
                <div class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none m-0 flex items-center justify-between p-6">
                  <div>
                    <h6 class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900 mb-1">Projects</h6>
                    <p class="antialiased font-sans text-sm leading-normal flex items-center gap-1 font-normal text-blue-gray-600">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      <strong>30 done</strong> this month
                    </p>
                  </div>
                  <button aria-expanded="false" aria-haspopup="menu" id=":r5:" class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30" type="button">
                    <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currenColor" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z"></path>
                      </svg>
                    </span>
                  </button>
                </div>
                <div class="p-6 overflow-x-scroll px-0 pt-0 pb-2">
                  <table class="w-full min-w-[640px] table-auto">
                    <thead>
                      <tr>
                        <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                          <p class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">companies</p>
                        </th>
                        <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                          <p class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">budget</p>
                        </th>
                        <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                          <p class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">completion</p>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="py-3 px-5 border-b border-blue-gray-50">
                          <div class="flex items-center gap-4">
                            <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Material XD Version</p>
                          </div>
                        </td>
                        
                        <td class="py-3 px-5 border-b border-blue-gray-50">
                          <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">$14,000</p>
                        </td>
                        <td class="py-3 px-5 border-b border-blue-gray-50">
                          <div class="w-10/12">
                            <p class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">60%</p>
                            <div class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                              <div class="flex justify-center items-center h-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white" style="width: 60%;"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-3 px-5 border-b border-blue-gray-50">
                          <div class="flex items-center gap-4">
                            <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Add Progress Track</p>
                          </div>
                        </td>
                        <td class="py-3 px-5 border-b border-blue-gray-50">
                          <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">$3,000</p>
                        </td>
                        <td class="py-3 px-5 border-b border-blue-gray-50">
                          <div class="w-10/12">
                            <p class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">10%</p>
                            <div class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                              <div class="flex justify-center items-center h-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white" style="width: 10%;"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-3 px-5 border-b border-blue-gray-50">
                          <div class="flex items-center gap-4">
                            <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Fix Platform Errors</p>
                          </div>
                        </td>
                        <td class="py-3 px-5 border-b border-blue-gray-50">
                          <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">Not set</p>
                        </td>
                        <td class="py-3 px-5 border-b border-blue-gray-50">
                          <div class="w-10/12">
                            <p class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">100%</p>
                            <div class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                              <div class="flex justify-center items-center h-full bg-gradient-to-tr from-green-600 to-green-400 text-white" style="width: 100%;"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-3 px-5 border-b border-blue-gray-50">
                          <div class="flex items-center gap-4">
                            <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Launch our Mobile App</p>
                          </div>
                        </td>
                        <td class="py-3 px-5 border-b border-blue-gray-50">
                          <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">$20,500</p>
                        </td>
                        <td class="py-3 px-5 border-b border-blue-gray-50">
                          <div class="w-10/12">
                            <p class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">100%</p>
                            <div class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                              <div class="flex justify-center items-center h-full bg-gradient-to-tr from-green-600 to-green-400 text-white" style="width: 100%;"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-3 px-5 border-b border-blue-gray-50">
                          <div class="flex items-center gap-4">
                            <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Add the New Pricing Page</p>
                          </div>
                        </td>
                        <td class="py-3 px-5 border-b border-blue-gray-50">
                          <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">$500</p>
                        </td>
                        <td class="py-3 px-5 border-b border-blue-gray-50">
                          <div class="w-10/12">
                            <p class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">25%</p>
                            <div class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                              <div class="flex justify-center items-center h-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white" style="width: 25%;"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div> --}}
          </div>
          <div class="text-blue-gray-600">
            {{-- <footer class="py-2">
              <div class="flex w-full flex-wrap items-center justify-center gap-6 px-2 md:justify-between">
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">© 2023, made with <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="-mt-0.5 inline-block h-3.5 w-3.5">
                    <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z"></path>
                  </svg> by <a href="https://www.creative-tim.com" target="_blank" class="transition-colors hover:text-blue-500">Creative Tim</a> for a better web. </p>
                <ul class="flex items-center gap-4">
                  <li>
                    <a href="https://www.creative-tim.com" target="_blank" class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">Creative Tim</a>
                  </li>
                  <li>
                    <a href="https://www.creative-tim.com/presentation" target="_blank" class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">About Us</a>
                  </li>
                  <li>
                    <a href="https://www.creative-tim.com/blog" target="_blank" class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">Blog</a>
                  </li>
                  <li>
                    <a href="https://www.creative-tim.com/license" target="_blank" class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">License</a>
                  </li>
                </ul>
              </div>
            </footer> --}}
          </div>
        </div>
      </div>
</body>
</html>