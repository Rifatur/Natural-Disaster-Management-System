

<?php $__env->startSection('container'); ?>


    <section>
    <div class="grid gap-4 md:grid-cols-3   min-w-full md:min-w-0 mb-2">   
        <div>
            <div class="flex flex-col max-w-full shadow-md w-full lg:w-6/6">
            <!-- Header -->
            <div class="flex justify-between items-center bg-gray-50 border-b px-6 py-4">
                <p class="text-xl text-gray-800 font-semibold">Divition Lists</p>
                <div class="" x-data="{ open: false }" id="divitionModel">
                    <button class="bg-gray-800 hover:bg-gray-900 text-white text-xs px-6 py-2 rounded-lg border-0" @click="open = true"> Create New</button>
                     <!-- Dialog (full screen) -->
                    <div class="absolute top-0 left-0 z-40 flex items-center justify-center w-full h-full"x-show="open">
                        <!-- A basic modal dialog with title, body and one button to close -->
                        <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0" @click.away="open = false">
                            <!-- One big close button.  --->                                 
                            <span class="flex w-full rounded-md  justify-center -mt-12">
                              <i @click="open = false"  class="bx bx-x flex items-center justify-center px-4 py-4 text-white bg-red-500 rounded-full hover:bg-blue-700 cursor-pointer"></i>
                            </span>                                                                   
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                <h3 class="text-lg font-medium leading-6 text-gray-900"></h3>
                                <div class="mt-3 "><!--Body part-->
                                <form action="<?php echo e(route('divition.create')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?> 
                                    <div class="shadow overflow-hidden sm:rounded-md my-5">

                                        <div class="grid grid-cols-6 gap-2 p-1">
                                            <div class="col-span-6">
                                                <label for="first_name" class="block text-sm font-medium text-gray-700 ">Divition Name</label>
                                                <input type="text" name="divitionname" id="divitionname" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-2 border-black p-2 sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                            <input type="hidden" id="status" name="status" value="1">
                                        </div>    
                                      <hr class="mt-6">
                                      <div class="px-4 py-3  text-right sm:px-1">
                                        <button type="submit" name="save" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                          Save
                                        </button>
                                      </div>  
                                    </div>
                                </form>
                                </div><!-- End Div Body part-->
                            </div>                             
                      
                        </div>
                    </div>                
                </div><!--End Create Model-->

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
                    <table class="overflow-x-auto w-full bg-white divide-y divide-gray-200" id="divtiontable">
                        <thead class="bg-gray-50 text-gray-500 text-sm ">
                        <tr class="divide-x divide-gray-300 ">
                            <th class="px-3 py-2 flex justify-center text-left text-xs text-gray-500 uppercase">
                            <div class="bg-white border-2 rounded border-gray-400 w-5 h-5 flex flex-shrink-0 justify-center items-center focus-within:border-blue-500">
                                <input type="checkbox" class="opacity-0 absolute" />
                                <svg class="fill-current hidden w-3 h-3 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z" /></svg>
                            </div>
                            </th>
                            <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase text-center">Name</th>
                            <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase text-center">Status</th>
                            <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase text-center">Actions</th>
                        </tr>
                        </thead>

                        <tbody class="text-gray-500 text-xs divide-y divide-gray-200">
                        <?php $__currentLoopData = $divition; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $divitions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                        <tr class="text-center">
                            <td class="py-3 flex justify-center">
                            <div class="bg-white border-2 rounded border-gray-400 w-5 h-5 flex flex-shrink-0 justify-center items-center focus-within:border-blue-500">
                                <input type="checkbox" class="opacity-0 absolute" />
                                <svg class="fill-current hidden w-3 h-3 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z" /></svg>
                            </div>
                            </td>
                            <td class="py-3"><?php echo e($divitions->name); ?></td>
                            <td class="py-3"><?php echo e($divitions->status); ?></td>
                            <td class="py-3">
                            <div class="flex justify-center space-x-1">
                                <button class="border-2 border-indigo-200 rounded-md p-1">
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-green-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12,9c-1.642,0-3,1.359-3,3c0,1.642,1.358,3,3,3c1.641,0,3-1.358,3-3C15,10.359,13.641,9,12,9z">
                                    </path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12,5c-7.633,0-9.927,6.617-9.948,6.684L1.946,12l0.105,0.316C2.073,12.383,4.367,19,12,19s9.927-6.617,9.948-6.684 L22.054,12l-0.105-0.316C21.927,11.617,19.633,5,12,5z M12,17c-5.351,0-7.424-3.846-7.926-5C4.578,10.842,6.652,7,12,7 c5.351,0,7.424,3.846,7.926,5C19.422,13.158,17.348,17,12,17z"></path>
                                </svg>
                                </a>
                                </button>
                                
                                <button class="border-2 border-indigo-200 rounded-md p-1">
                                <a href="">
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
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <!-- End Table -->
            </div>

        </div><!--Box End-->
        <div>
            <div class="flex flex-col max-w-full shadow-md w-full lg:w-6/6">
                    <!-- Header -->
                    <div class="flex justify-between items-center bg-gray-50 border-b px-6 py-4">
                        <p class="text-xl text-gray-800 font-semibold">City Lists</p>
                        <div class="" x-data="{ open: false }" id="divitionModel"><!--Model Start-->
                            <button class="bg-gray-800 hover:bg-gray-900 text-white text-xs px-6 py-2 rounded-lg border-0"@click="open = true"> Create New</button>
                            <!-- Dialog (full screen) -->
                            <div class="absolute top-0 left-0 z-40 flex items-center justify-center w-full h-full"x-show="open">
                                <!-- A basic modal dialog with title, body and one button to close -->
                                <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0" @click.away="open = false">
                                    <!-- One big close button.  --->                                 
                                    <span class="flex w-full rounded-md  justify-center -mt-12">
                                      <i @click="open = false"  class="bx bx-x flex items-center justify-center px-4 py-4 text-white bg-red-500 rounded-full hover:bg-blue-700 cursor-pointer"></i>
                                    </span>                                                                   
                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg font-medium leading-6 text-gray-900"></h3>
                                        <div class="mt-3 "><!--Body part-->
                                        <form action="<?php echo e(route('city.create')); ?>" method="POST" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?> 
                                            <div class="shadow overflow-hidden sm:rounded-md my-5">

                                                <div class="grid grid-cols-6 gap-2 p-1">
                                                    <div class="col-span-6">
                                                        <label for="first_name" class="block text-sm font-medium text-gray-700 ">City Name</label>
                                                        <input type="text" name="cityname" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-2 border-black p-2 sm:text-sm border-gray-300 rounded-md">
                                                    </div>

                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="country" class="block text-sm font-medium text-gray-700">Divition</label>
                                                        <select id="country" name="name" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                          <option value="">select divition</option>
                                                          <?php $__currentLoopData = $divition; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $divitions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($divitions->id); ?>"><?php echo e($divitions->name); ?></option>
                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                         
                                                        </select>
                                                    </div>
                                                    <input type="hidden" name="status" value="1">
                                                </div>    
                                              <hr class="mt-6">
                                              <div class="px-4 py-3  text-right sm:px-1">
                                                <button type="submit" name="save" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                  Save
                                                </button>
                                              </div>  
                                            </div>
                                        </form>
                                        </div><!-- End Div Body part-->
                                    </div>                             
                              
                                </div>
                            </div>       
                        </div><!--City Model End-->
                    </div><!-- End Header -->
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
                                <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase text-center">Name</th>
                                <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase text-center">Status</th>
                                <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase text-center">Actions</th>
                            </tr>
                            </thead>

                            <tbody class="text-gray-500 text-xs divide-y divide-gray-200">
                            <?php $__currentLoopData = $City; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Citys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
                            <tr class="text-center">
                                <td class="py-3 flex justify-center">
                                <div class="bg-white border-2 rounded border-gray-400 w-5 h-5 flex flex-shrink-0 justify-center items-center focus-within:border-blue-500">
                                    <input type="checkbox" class="opacity-0 absolute" />
                                    <svg class="fill-current hidden w-3 h-3 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z" /></svg>
                                </div>
                                </td>
                                <td class="py-3"><?php echo e($Citys->name); ?></td>
                                <td class="py-3"><?php echo e($Citys->status); ?></td>
                                <td class="py-3">
                                <div class="flex justify-center space-x-1">
                                    <button class="border-2 border-indigo-200 rounded-md p-1">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-green-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12,9c-1.642,0-3,1.359-3,3c0,1.642,1.358,3,3,3c1.641,0,3-1.358,3-3C15,10.359,13.641,9,12,9z">
                                        </path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12,5c-7.633,0-9.927,6.617-9.948,6.684L1.946,12l0.105,0.316C2.073,12.383,4.367,19,12,19s9.927-6.617,9.948-6.684 L22.054,12l-0.105-0.316C21.927,11.617,19.633,5,12,5z M12,17c-5.351,0-7.424-3.846-7.926-5C4.578,10.842,6.652,7,12,7 c5.351,0,7.424,3.846,7.926,5C19.422,13.158,17.348,17,12,17z"></path>
                                    </svg>
                                    </a>
                                    </button>
                                    
                                    <button class="border-2 border-indigo-200 rounded-md p-1">
                                    <a href="">
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
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <!-- End Table -->
            </div>

        </div><!--Box End-->
        <div><!---->
            <div class="flex flex-col max-w-full shadow-md w-full lg:w-6/6">
                    <!-- Header -->
                    <div class="flex justify-between items-center bg-gray-50 border-b px-6 py-4">
                        <p class="text-xl text-gray-800 font-semibold">Upzila Lists</p>
                        <div class="" x-data="{ open: false }" id="divitionModel"><!--Model Start-->
                            <button class="bg-gray-800 hover:bg-gray-900 text-white text-xs px-6 py-2 rounded-lg border-0"@click="open = true"> Create New</button>
                            <!-- Dialog (full screen) -->
                            <div class="absolute top-0 left-0 flex items-center z-40 justify-center w-full h-full"x-show="open">
                                <!-- A basic modal dialog with title, body and one button to close -->
                                <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0" @click.away="open = false">
                                    <!-- One big close button.  --->                                 
                                    <span class="flex w-full rounded-md  justify-center -mt-12">
                                      <i @click="open = false"  class="bx bx-x flex items-center justify-center px-4 py-4 text-white bg-red-500 rounded-full hover:bg-blue-700 cursor-pointer"></i>
                                    </span>                                                                   
                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg font-medium leading-6 text-gray-900"></h3>
                                        <div class="mt-3 "><!--Body part-->
                                        <form action="<?php echo e(route('upazila.create')); ?>" method="POST" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?> 
                                            <div class="shadow overflow-hidden sm:rounded-md my-5">

                                                <div class="grid grid-cols-6 gap-2 p-1">
                                                    <div class="col-span-6">
                                                        <label for="first_name" class="block text-sm font-medium text-gray-700 ">Upazilas Name</label>
                                                        <input type="text" name="upzilaname" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-2 border-black p-2 sm:text-sm border-gray-300 rounded-md">
                                                    </div>

                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="country" class="block text-sm font-medium text-gray-700">Divition</label>
                                                        <select id="country" name="name" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                          <option value="">select District</option>
                                                          <?php $__currentLoopData = $City; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Citys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($Citys->id); ?>"><?php echo e($Citys->name); ?></option>
                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                         
                                                        </select>
                                                    </div>
                                                    <input type="hidden" name="status" value="1">
                                                </div>    
                                              <hr class="mt-6">
                                              <div class="px-4 py-3  text-right sm:px-1">
                                                <button type="submit" name="save" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                  Save
                                                </button>
                                              </div>  
                                            </div>
                                        </form>
                                        </div><!-- End Div Body part-->
                                    </div>                             
                              
                                </div>
                            </div>       
                        </div><!--City Model End-->
                    </div><!-- End Header -->
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
                                <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase text-center">Name</th>
                                <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase text-center">Status</th>
                                <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase text-center">Actions</th>
                            </tr>
                            </thead>

                            <tbody class="text-gray-500 text-xs divide-y divide-gray-200">
                            <?php $__currentLoopData = $upazila; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upazilas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
                            <tr class="text-center">
                                <td class="py-3 flex justify-center">
                                <div class="bg-white border-2 rounded border-gray-400 w-5 h-5 flex flex-shrink-0 justify-center items-center focus-within:border-blue-500">
                                    <input type="checkbox" class="opacity-0 absolute" />
                                    <svg class="fill-current hidden w-3 h-3 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z" /></svg>
                                </div>
                                </td>
                                <td class="py-3"><?php echo e($upazilas->name); ?></td>
                                <td class="py-3"><?php echo e($upazilas->status); ?></td>
                                <td class="py-3">
                                <div class="flex justify-center space-x-1">
                                    <button class="border-2 border-indigo-200 rounded-md p-1">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-green-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12,9c-1.642,0-3,1.359-3,3c0,1.642,1.358,3,3,3c1.641,0,3-1.358,3-3C15,10.359,13.641,9,12,9z">
                                        </path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12,5c-7.633,0-9.927,6.617-9.948,6.684L1.946,12l0.105,0.316C2.073,12.383,4.367,19,12,19s9.927-6.617,9.948-6.684 L22.054,12l-0.105-0.316C21.927,11.617,19.633,5,12,5z M12,17c-5.351,0-7.424-3.846-7.926-5C4.578,10.842,6.652,7,12,7 c5.351,0,7.424,3.846,7.926,5C19.422,13.158,17.348,17,12,17z"></path>
                                    </svg>
                                    </a>
                                    </button>
                                    
                                    <button class="border-2 border-indigo-200 rounded-md p-1">
                                    <a href="">
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
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <!-- End Table -->
            </div>

        </div><!--Box End-->

    </div>  <!-- End Col -->  

    <div class="grid gap-4 md:grid-cols-2   min-w-full md:min-w-0 mb-2">  <!--New Box -->
        <div><!---->
            <div class="flex flex-col max-w-full shadow-md w-full lg:w-6/6">
                    <!-- Header -->
                    <div class="flex justify-between items-center bg-gray-50 border-b px-6 py-4">
                        <p class="text-xl text-gray-800 font-semibold">Union Lists</p>
                        <div class="" x-data="{ open: false }" id="divitionModel"><!--Model Start-->
                            <button class="bg-gray-800 hover:bg-gray-900 text-white text-xs px-6 py-2 rounded-lg border-0"@click="open = true"> Create New</button>
                            <!-- Dialog (full screen) -->
                            <div class="absolute top-0 left-0 flex z-40 items-center justify-center w-full  h-full"x-show="open">
                                <!-- A basic modal dialog with title, body and one button to close -->
                                <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0" @click.away="open = false">
                                    <!-- One big close button.  --->                                 
                                    <span class="flex w-full rounded-md  justify-center -mt-12">
                                      <i @click="open = false"  class="bx bx-x flex items-center justify-center px-4 py-4 text-white bg-red-500 rounded-full hover:bg-blue-700 cursor-pointer"></i>
                                    </span>                                                                   
                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg font-medium leading-6 text-gray-900"></h3>
                                        <div class="mt-3 "><!--Body part-->
                                        <form action="<?php echo e(route('union.create')); ?>" method="POST" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?> 
                                            <div class="shadow overflow-hidden sm:rounded-md my-5">

                                                <div class="grid grid-cols-6 gap-2 p-1">
                                                    <div class="col-span-6">
                                                        <label for="first_name" class="block text-sm font-medium text-gray-700 ">Union Name</label>
                                                        <input type="text" name="unionname" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-2 border-black p-2 sm:text-sm border-gray-300 rounded-md">
                                                    </div>

                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="country" class="block text-sm font-medium text-gray-700">Upazila List</label>
                                                        <select id="country" name="unioncode" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                          <option value="">Select Upazila</option>
                                                          <?php $__currentLoopData = $upazila; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upazilas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($upazilas->id); ?>"><?php echo e($upazilas->name); ?></option>
                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                         
                                                        </select>
                                                    </div>
                                                    <input type="hidden" name="status" value="1">
                                                </div>    
                                              <hr class="mt-6">
                                              <div class="px-4 py-3  text-right sm:px-1">
                                                <button type="submit" name="save" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                  Save
                                                </button>
                                              </div>  
                                            </div>
                                        </form>
                                        </div><!-- End Div Body part-->
                                    </div>                             
                              
                                </div>
                            </div>       
                        </div><!--City Model End-->
                    </div><!-- End Header -->
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
                                <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase text-center">Name</th>
                                <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase text-center">Status</th>
                                <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase text-center">Actions</th>
                            </tr>
                            </thead>

                            <tbody class="text-gray-500 text-xs divide-y divide-gray-200">
                            <?php $__currentLoopData = $union; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
                            <tr class="text-center">
                                <td class="py-3 flex justify-center">
                                <div class="bg-white border-2 rounded border-gray-400 w-5 h-5 flex flex-shrink-0 justify-center items-center focus-within:border-blue-500">
                                    <input type="checkbox" class="opacity-0 absolute" />
                                    <svg class="fill-current hidden w-3 h-3 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z" /></svg>
                                </div>
                                </td>
                                <td class="py-3"><?php echo e($unions->name); ?></td>
                                <td class="py-3"><?php echo e($unions->status); ?></td>
                                <td class="py-3">
                                <div class="flex justify-center space-x-1">
                                    <button class="border-2 border-indigo-200 rounded-md p-1">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-green-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12,9c-1.642,0-3,1.359-3,3c0,1.642,1.358,3,3,3c1.641,0,3-1.358,3-3C15,10.359,13.641,9,12,9z">
                                        </path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12,5c-7.633,0-9.927,6.617-9.948,6.684L1.946,12l0.105,0.316C2.073,12.383,4.367,19,12,19s9.927-6.617,9.948-6.684 L22.054,12l-0.105-0.316C21.927,11.617,19.633,5,12,5z M12,17c-5.351,0-7.424-3.846-7.926-5C4.578,10.842,6.652,7,12,7 c5.351,0,7.424,3.846,7.926,5C19.422,13.158,17.348,17,12,17z"></path>
                                    </svg>
                                    </a>
                                    </button>
                                    
                                    <button class="border-2 border-indigo-200 rounded-md p-1">
                                    <a href="">
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
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <!-- End Table -->
            </div>

        </div><!--Box End-->
        <div><!---->
            <div class="flex flex-col max-w-full shadow-md w-full lg:w-6/6">
                    <!-- Header -->
                    <div class="flex justify-between items-center bg-gray-50 border-b px-6 py-4">
                        <p class="text-xl text-gray-800 font-semibold">Village Lists</p>
                        <div class="" x-data="{ open: false }" id="divitionModel"><!--Model Start-->
                            <button class="bg-gray-800 hover:bg-gray-900 text-white text-xs px-6 py-2 rounded-lg border-0"@click="open = true"> Create New</button>
                            <!-- Dialog (full screen) -->
                            <div class="absolute top-0 left-0 flex z-40 items-center justify-center w-full  h-full"x-show="open">
                                <!-- A basic modal dialog with title, body and one button to close -->
                                <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0" @click.away="open = false">
                                    <!-- One big close button.  --->                                 
                                    <span class="flex w-full rounded-md  justify-center -mt-12">
                                      <i @click="open = false"  class="bx bx-x flex items-center justify-center px-4 py-4 text-white bg-red-500 rounded-full hover:bg-blue-700 cursor-pointer"></i>
                                    </span>                                                                   
                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg font-medium leading-6 text-gray-900"></h3>
                                        <div class="mt-3 "><!--Body part-->
                                        <form action="<?php echo e(route('village.create')); ?>" method="POST" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?> 
                                            <div class="shadow overflow-hidden sm:rounded-md my-5">

                                                <div class="grid grid-cols-6 gap-2 p-1">
                                                    <div class="col-span-6">
                                                        <label for="first_name" class="block text-sm font-medium text-gray-700 ">Village Name</label>
                                                        <input type="text" name="villagename" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-2 border-black p-2 sm:text-sm border-gray-300 rounded-md">
                                                    </div>

                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="country" class="block text-sm font-medium text-gray-700">Union List</label>
                                                        <select id="country" name="villagecode" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                          <option value="">Select Union</option>
                                                          <?php $__currentLoopData = $union; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($unions->id); ?>"><?php echo e($unions->name); ?></option>
                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                         
                                                        </select>
                                                    </div>
                                                    <input type="hidden" name="status" value="1">
                                                </div>    
                                              <hr class="mt-6">
                                              <div class="px-4 py-3  text-right sm:px-1">
                                                <button type="submit" name="save" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                  Save
                                                </button>
                                              </div>  
                                            </div>
                                        </form>
                                        </div><!-- End Div Body part-->
                                    </div>                             
                              
                                </div>
                            </div>       
                        </div><!--City Model End-->
                    </div><!-- End Header -->
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
                                <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase text-center">Name</th>
                                <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase text-center">Status</th>
                                <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase text-center">Actions</th>
                            </tr>
                            </thead>

                            <tbody class="text-gray-500 text-xs divide-y divide-gray-200">
                            <?php $__currentLoopData = $Village; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Villages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
                            <tr class="text-center">
                                <td class="py-3 flex justify-center">
                                <div class="bg-white border-2 rounded border-gray-400 w-5 h-5 flex flex-shrink-0 justify-center items-center focus-within:border-blue-500">
                                    <input type="checkbox" class="opacity-0 absolute" />
                                    <svg class="fill-current hidden w-3 h-3 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z" /></svg>
                                </div>
                                </td>
                                <td class="py-3"><?php echo e($Villages->name); ?></td>
                                <td class="py-3"><?php echo e($Villages->status); ?></td>
                                <td class="py-3">
                                <div class="flex justify-center space-x-1">
                                    <button class="border-2 border-indigo-200 rounded-md p-1">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-green-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12,9c-1.642,0-3,1.359-3,3c0,1.642,1.358,3,3,3c1.641,0,3-1.358,3-3C15,10.359,13.641,9,12,9z">
                                        </path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12,5c-7.633,0-9.927,6.617-9.948,6.684L1.946,12l0.105,0.316C2.073,12.383,4.367,19,12,19s9.927-6.617,9.948-6.684 L22.054,12l-0.105-0.316C21.927,11.617,19.633,5,12,5z M12,17c-5.351,0-7.424-3.846-7.926-5C4.578,10.842,6.652,7,12,7 c5.351,0,7.424,3.846,7.926,5C19.422,13.158,17.348,17,12,17z"></path>
                                    </svg>
                                    </a>
                                    </button>
                                    
                                    <button class="border-2 border-indigo-200 rounded-md p-1">
                                    <a href="">
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
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <!-- End Table -->
            </div>
        </div><!--Box End-->

    </div> <!--End Col-->  
 
    </section> <!-- End Table -->
  



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disasterhelp\resources\views/admin/divitions/index.blade.php ENDPATH**/ ?>