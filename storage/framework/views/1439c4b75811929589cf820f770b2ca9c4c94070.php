

<?php $__env->startSection('container'); ?>
    <h2>Hi project</h2>
    <?php if(Session::has('post_save')): ?>
        <script>
        swal({
                icon: "success",
                text: "Project Created !!",
            });
        </script>
    <?php endif; ?>

    <section>
        <div class="min-w-screen flex">
            <div class="flex flex-col max-w-full  w-full lg:w-6/6">
                <div class="flex flex-col lg:flex-row w-full lg:space-x-5 space-y-4 lg:space-y-0 mb-2 lg:mb-4">

                    <div class="w-full lg:w-1/5  shadow  lg:w-6/6">
                        <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-purple-400">
                            <div class="flex items-center">
                                <div class="icon w-14 p-3.5 bg-purple-400 text-white rounded-full mr-3">
                                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                    </svg>
                                </div>
                                <div class="flex flex-col justify-center">
                                    <div class="text-lg"><?php echo e($totalcount); ?></div>
                                    <div class="text-sm text-gray-400">Active project</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full lg:w-1/5 shadow">
                        <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-blue-400">
                            <div class="flex items-center">
                                <div class="icon w-14 p-3.5 bg-blue-400 text-white rounded-full mr-3">
                                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </div>
                                <div class="flex flex-col justify-center">
                                    <div class="text-lg"><?php echo e($totalproject); ?></div>
                                    <div class="text-sm text-gray-400">total project</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full lg:w-1/5 shadow">
                        <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-yellow-400">
                            <div class="flex items-center">
                                <div class="icon w-14 p-3.5 bg-yellow-400 text-white rounded-full mr-3">
                                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                    </svg>
                                </div>
                                <div class="flex flex-col justify-center">
                                    <div class="text-lg"><?php echo e($projecttd); ?></div>
                                    <div class="text-sm text-gray-400">Products</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full lg:w-1/5 shadow">
                        <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-red-400">
                            <div class="flex items-center">
                                <div class="icon w-14 p-3.5 bg-red-400 text-white rounded-full mr-3">
                                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <div class="flex flex-col justify-center">
                                    <div class="text-lg">12658</div>
                                    <div class="text-sm text-gray-400">Orders</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full lg:w-1/5 shadow">
                        <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-green-400">
                            <div class="flex items-center">
                                <div class="icon w-14 p-3.5 bg-green-400 text-white rounded-full mr-3">
                                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div class="flex flex-col justify-center">
                                    <div class="text-lg">$948'560</div>
                                    <div class="text-sm text-gray-400">Revenue</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div>
            <div class="flex flex-col max-w-full shadow-md w-full lg:w-6/6">
          <!-- Header -->
          <div class="flex justify-between items-center bg-gray-50 border-b px-6 py-4">
            <p class="text-xl text-gray-800 font-semibold">Project Lists</p>
            <a href="/newproject">
                <button class="bg-gray-800 hover:bg-gray-900 text-white text-xs px-6 py-2 rounded-lg border-0"> Create New</button>
            </a>
          </div>
          <!-- End Header -->

          <!-- Tools -->
          <div class="flex flex-wrap justify-between items-center bg-white border-b p-2 space-y-2 md:space-y-0">
            <div class="space-x-1 mb-1 sm:mb-0">
              <button class="border border-gray-300 shadow-sm rounded-md p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-gray-500">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
              </button>
              <button class="border border-gray-300 shadow-sm rounded-md p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-gray-500">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                </svg>
              </button>
            </div>

            <div class="flex flex-wrap justify-start md:justify-end items-center space-x-0 space-y-2 sm:space-x-2 sm:space-y-0">
              <div class="divide-x-2 border border-gray-300 shadow-sm rounded-md">
                <button class="p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-gray-500">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                  </svg>
                </button>

                <button class="p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-gray-500">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                  </svg>
                </button>

                <button class="p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-gray-500">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                  </svg>
                </button>
              </div>

              <div class="relative">
                <input type="text" placeholder="Search by" class="appearance-none relative block w-full px-8 py-2 border border-gray-300 placeholder-gray-500 text-gray-800 shadow-sm rounded-md focus:outline-none focus:ring-gray-500 focus:border-gray-500 focus:z-10 text-xs" />

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="absolute left-3 bottom-2 h-4 w-4 text-gray-500">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </div>

              <button class="flex items-center space-x-1 text-xs text-gray-500 font-semibold border border-gray-300 shadow-sm rounded-md p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-gray-500">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                </svg>
                <span>Filter</span>
              </button>
            </div>
          </div>
          <!-- End Tools -->

          <!-- Table -->
          <table class="overflow-x-auto w-full bg-white divide-y divide-gray-200">
            <thead class="bg-gray-50 text-gray-500 text-sm ">
              <tr class="divide-x divide-gray-300 ">
                <th class="px-3 py-2 flex justify-center text-left text-xs text-gray-500 uppercase">
                  <div class="bg-white border-2 rounded border-gray-400 w-5 h-5 flex flex-shrink-0 justify-center items-center focus-within:border-blue-500">
                    <input type="checkbox" class="opacity-0 absolute" />
                    <svg class="fill-current hidden w-3 h-3 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z" /></svg>
                  </div>
                </th>
                <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase text-center">Project</th>
                <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase text-center">Type</th>
                <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase text-center">Status</th>
                <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase text-center">Priority</th>
                <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase text-center">start date</th>
                <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase text-center">End date</th>
                <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase text-center">Actions</th>
              </tr>
            </thead>
            <?php $__currentLoopData = $project; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody class="text-gray-500 text-xs divide-y divide-gray-200">
              <tr class="text-center">
                <td class="py-3 flex justify-center">
                  <div class="bg-white border-2 rounded border-gray-400 w-5 h-5 flex flex-shrink-0 justify-center items-center focus-within:border-blue-500">
                    <input type="checkbox" class="opacity-0 absolute" />
                    <svg class="fill-current hidden w-3 h-3 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z" /></svg>
                  </div>
                </td>
                <td class="py-3"><?php echo e($plist->projectTitle); ?></td>
                <td class="py-3"><?php echo e($plist->disaster); ?></td>
                <td class="py-3">
                  <span class="bg-indigo-200 text-indigo-500 text-xs font-semibold rounded-md py-1 px-2">
                   
                        Assigned
                   
                  </span>
                </td>
                <td class="py-3"><?php echo e($plist->piority); ?></td>
                <td class="py-3"><?php echo e($plist->startdate); ?></td>
                <td class="py-3"><?php echo e($plist->enddate); ?></td>
                <td class="py-3">
                  <div class="flex justify-center space-x-1">
                    <button class="border-2 border-indigo-200 rounded-md p-1">
                      <a href="/p-details/<?php echo e($plist->id); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-green-500">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12,9c-1.642,0-3,1.359-3,3c0,1.642,1.358,3,3,3c1.641,0,3-1.358,3-3C15,10.359,13.641,9,12,9z">
                          </path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12,5c-7.633,0-9.927,6.617-9.948,6.684L1.946,12l0.105,0.316C2.073,12.383,4.367,19,12,19s9.927-6.617,9.948-6.684 L22.054,12l-0.105-0.316C21.927,11.617,19.633,5,12,5z M12,17c-5.351,0-7.424-3.846-7.926-5C4.578,10.842,6.652,7,12,7 c5.351,0,7.424,3.846,7.926,5C19.422,13.158,17.348,17,12,17z"></path>
                      </svg>
                      </a>
                      </button>
                    
                    <button class="border-2 border-indigo-200 rounded-md p-1">
                    <a href="/project-details/<?php echo e($plist->id); ?>">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-indigo-500">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                      </svg>
                    </a>
                    </button>
                    <button class="border-2 border-red-200 rounded-md p-1">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-red-500">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </a>
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </table>
          <!-- End Table -->
        </div>

        </div>
      </section> <!-- End Table -->
     
      


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disasterhelp\resources\views/admin/project/project.blade.php ENDPATH**/ ?>