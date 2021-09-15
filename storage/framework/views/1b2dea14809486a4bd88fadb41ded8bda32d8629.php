

<?php $__env->startSection('container'); ?>
    <div class="rounded rounded-t-lg overflow-hidden shadow  min-w-screen my-3">
        <img src="<?php echo e(asset('admin/assets/img/perfil.jpg')); ?>" class="w-full max-h-48 " />
        <?php $__currentLoopData = $img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eimg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                      
        <div class="flex justify-center -mt-8 ">
            <img src="<?php echo e(asset('employeimage')); ?>/<?php echo e($eimg->profileImage); ?>" class="rounded-full border-solid border-white border-2 -mt-3 w-32 h-32">		
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="text-center px-3 pb-6 pt-2">
            <h3 class="text-black text-sm bold font-sans"><?php echo e($singleemployee->firstname); ?> <?php echo e($singleemployee->lastname); ?></h3>
            <p class="mt-2 font-sans font-light text-grey-dark">Hello, i'm from another the other side!

                <div class="" x-data="{ open: false }" id="divitionModel"><!--Model Start-->
                    <button class="bg-gray-800 hover:bg-gray-900 text-white text-xs px-6 py-2 rounded-lg border-0"@click="open = true"> Upload Image</button>
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
                                    <!--Profile Image-->
                                    <form action="<?php echo e(route('employee.empimg')); ?>" method="POST" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?> 
                                        <label for="file-upload" class="relative cursor-pointer flex justify-center bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <span>Select Profile Image</span>
                                            <input type="hidden" value="<?php echo e($singleemployee->id); ?>" name="id" >
                                            <input id="file-upload" name="file" type="file" class="sr-only" onchange="previewFile(this)" />
                                        </label>
                                        <div class="flex justify-center">
                                            <img id="previewImg" class="rounded-full  w-32 h-32">		
                                        </div>
                                        <div class="px-4 py-3 text-center sm:px-6">
                                            <button type="submit" name="save" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Save
                                            </button>
                                        </div>
                    
                                    </form>
                                </div><!-- End Div Body part-->
                            </div>                             
                      
                        </div>
                    </div>       
                </div><!--City Model End-->

            </p>
            </div>
                <div class="flex justify-center pb-3 text-grey-dark">
                <div class="text-center mr-3 border-r pr-3">

                <h2>34  
                </h2>
                <span>Photos</span>
                </div>
                <div class="text-center">
                <h2>42</h2>
                <span>Friends</span>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-4 my-2 ">
        <div>
            <div class=" widget w-full p-4 rounded-lg bg-white border-l-4 mb-2 shadow border-purple-400">
              <!-- modal div -->
              <div class="mt-1 " x-data="{ open: false }">
                <!-- Button (blue), duh! -->
                <button class="px-2 py-1 float-right text-white bg-blue-500 rounded select-none no-outline focus:shadow-outline" @click="open = true">Edit</button>
                <!-- Dialog (full screen) -->
                <div class="absolute top-20 left-0 flex items-center justify-center w-full h-full"x-show="open">
                <!-- A basic modal dialog with title, body and one button to close -->
                <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0" @click.away="open = false">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg font-medium leading-6 text-gray-900"></h3>
                        <div class="mt-3"><!--Body part-->
                            <div class="w-4/4 mt-5 md:mt-0 md:col-span-2">
                                <form action="<?php echo e(route('employee.update2')); ?>" method="POST" enctype="multipart/form-data">
                                  <?php echo csrf_field(); ?>                                                                                                            
                                <div class="shadow overflow-hidden sm:rounded-md my-5">
                        
                                    <h3 class="text-lg font-medium leading-6 text-gray-900 p-2">Personal Information</h3>
                                    <div class="px-4 py-5 bg-white sm:p-6">
                                      <div class="grid grid-cols-6 gap-6">
                                        <input type="hidden" value="<?php echo e($singleemployee->id); ?>" name="id">
                                        <div class="col-span-6 sm:col-span-3">
                                          <label for="last_name" class="block text-sm font-medium text-gray-700">First Name</label>
                                          <input type="text" value="<?php echo e($singleemployee->firstname); ?>" name="firstname" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-2 border-black p-2 sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                          <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                                          <input type="text"value="<?php echo e($singleemployee->lastname); ?>" name="lastname" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-2 border-black p-2 sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                          <label for="last_name" class="block text-sm font-medium text-gray-700">Email</label>
                                          <input type="text"value="<?php echo e($singleemployee->email); ?>" name="email" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-2 border-black p-2 sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                          <label for="last_name" class="block text-sm font-medium text-gray-700">Employee Type</label>
                                          <select id="country" name="employeetype" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="<?php echo e($singleemployee->employeeType); ?>"><?php echo e($singleemployee->employeeType); ?></option>  
                                            <option value="hr">HR</option>
                                            <option value="Software Engineer">Software Engineer</option>
                                            </select>
                                      </div>            
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="last_name" class="block text-sm font-medium text-gray-700">Gender</label>
                                            <select id="country" name="gender" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option value="<?php echo e($singleemployee->gender); ?>"><?php echo e($singleemployee->gender); ?></option>  
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">other</option>
                                              </select>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="last_name" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                                            <input type="date" value="<?php echo e($singleemployee->dob); ?>" name="dob" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full border-2 border-black p-2 shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                          <label for="last_name" class="block text-sm font-medium text-gray-700">Phone Number</label>
                                          <input type="text" value="<?php echo e($singleemployee->phonenumber); ?>" name="phonenumber" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full border-2 border-black p-2 shadow-sm sm:text-sm border-gray-300 rounded-md">
                                      </div>
                        
                                        
                                      </div><!--End Grid-->
                                    </div><!--End Content Div-->
                                </div><!--End-->
                        
                                  
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                      <button type="submit" name="save" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Save
                                      </button>
                                    </div>                                                                                                 
                                </form>
                              </div>
                        </div><!-- End Div Body part-->
                    </div>
            
                    <!-- One big close button.  --->
                    <div class="mt-5 sm:mt-6">
                        <span class="flex w-full rounded-md shadow-sm">
                        <button @click="open = false" class="inline-flex justify-center w-full px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">
                            Close
                        </button>
                        </span>
                    </div>
            
                </div>
                </div>
            </div><!--End Model-->
                <div class="grid grid-cols-3 gap-2 mb-2 ">
                    <div class="bg-white-100 p-1 rounded-lg border-l-4"><p class="mx-2">Employee Code </p> </div>
                    <div class="col-span-2 bg-white-100 p-1 rounded-lg"><p class="mx-2"><?php echo e($singleemployee->eployeeid); ?></p> </div>
                </div>
                <div class="grid grid-cols-3 gap-2 mb-2">
                    <div class="bg-white-100 p-1 rounded-lg border-l-4"><p class="mx-2">Employee Type</p> </div>
                    <div class="col-span-2 bg-white-100 p-1 rounded-lg "><p class="mx-2"><?php echo e($singleemployee->employeeType); ?></p> </div>
                </div>
                <div class="grid grid-cols-3 gap-2 mb-2">
                    <div class="bg-white-100 p-1 rounded-lg border-l-4"><p class="mx-2">Email</p> </div>
                    <div class="col-span-2 bg-white-100 p-1 rounded-lg"><p class="mx-2"><?php echo e($singleemployee->email); ?></p> </div>
                </div>
                <div class="grid grid-cols-3 gap-2 mb-2">
                    <div class="bg-white-100 p-1 rounded-lg border-l-4"><p class="mx-2">Date of birth</p> </div>
                    <div class="col-span-2 bg-white-100 p-1 rounded-lg"><p class="mx-2"><?php echo e($singleemployee->dob); ?></p> </div>
                </div>
                <div class="grid grid-cols-3 gap-2 mb-2">
                    <div class="bg-white-100 p-1 rounded-lg border-l-4"><p class="mx-2">Phone Number</p> </div>
                    <div class="col-span-2 bg-white-100 p-1 rounded-lg"><p class="mx-2"><?php echo e($singleemployee->phonenumber); ?></p> </div>
                </div>
    
            </div>

            

            <div class=" widget w-full p-4 rounded-lg bg-white border-l-4 mb-1 shadow border-green-400">
                <div class="grid grid-cols-2 gap-4 my-2">
                    <h3 class="text-lg font-medium leading-6 text-gray-900 p-2 mb-3">Personal Information</h3>
                    <!-- modal div -->
                    <div class="mt-1 " x-data="{ open: false }">
                        <!-- Button (blue), duh! -->
                        <button class="px-2 py-1 float-right text-white bg-blue-500 rounded select-none no-outline focus:shadow-outline" @click="open = true">Edit</button>
                        <!-- Dialog (full screen) -->
                        <div class="absolute top-20 left-0 flex items-center justify-center w-full h-full"x-show="open">
                        <!-- A basic modal dialog with title, body and one button to close -->
                        <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0" @click.away="open = false">
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                <h3 class="text-lg font-medium leading-6 text-gray-900"></h3>
                                <div class="mt-3"><!--Body part-->
                                    <div class="w-4/4 mt-5 md:mt-0 md:col-span-2">
                                        <form action="<?php echo e(route('employee.update')); ?>" method="POST" enctype="multipart/form-data">
                                          <?php echo csrf_field(); ?>                                                                                                            
                                        <div class="shadow overflow-hidden sm:rounded-md my-5">
                                
                                            <h3 class="text-lg font-medium leading-6 text-gray-900 p-2">Personal Information</h3>
                                            <div class="px-4 py-5 bg-white sm:p-6">
                                              <div class="grid grid-cols-6 gap-6">
                                                <input type="hidden" value="<?php echo e($singleemployee->id); ?>" name="id">
                                                <div class="col-span-6 sm:col-span-3">
                                                  <label for="last_name" class="block text-sm font-medium text-gray-700">Father Name</label>
                                                  <input type="text" value="<?php echo e($singleemployee->fathername); ?>" name="fathername" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-2 border-black p-2 sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                  <label for="last_name" class="block text-sm font-medium text-gray-700">Mother Name</label>
                                                  <input type="text"value="<?php echo e($singleemployee->mothername); ?>" name="mothername" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-2 border-black p-2 sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                  <label for="last_name" class="block text-sm font-medium text-gray-700">Home Phone</label>
                                                  <input type="text"value="<?php echo e($singleemployee->homenumber); ?>" name="homephone" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-2 border-black p-2 sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                  <label for="last_name" class="block text-sm font-medium text-gray-700">Merital Status</label>
                                                  <select id="country" name="meritalstatus" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option value="<?php echo e($singleemployee->meritalstatus); ?>"><?php echo e($singleemployee->meritalstatus); ?></option>  
                                                    <option value="Married">Married</option>
                                                    <option value="single">single</option>
                                                    </select>
                                                </div>            
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Gender</label>
                                                    <select id="country" name="gender" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                        <option value="<?php echo e($singleemployee->gender); ?>"><?php echo e($singleemployee->gender); ?></option>  
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="other">other</option>
                                                      </select>
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                                                    <input type="date" value="<?php echo e($singleemployee->dob); ?>" name="dob" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full border-2 border-black p-2 shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="last_name" class="block text-sm font-medium text-gray-700">NID</label>
                                                    <input type="text" value="<?php echo e($singleemployee->nidNumber); ?>"name="nid" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full border-2 border-black p-2 shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                                <div class="col-span-2 sm:col-span-6 lg:col-span-2">
                                                  <label for="postal_code" class="block text-sm font-medium text-gray-700">Nationality</label>
                                                  <input type="text"value="<?php echo e($singleemployee->nationality); ?>" name="nationality" id="postal_code" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-2 border-black p-2 border-gray-300 rounded-md">
                                                </div>
                                                <div class="col-span-2 sm:col-span-6 lg:col-span-2">
                                                  <label for="postal_code" class="block text-sm font-medium text-gray-700">Language Known</label>
                                                  <input type="text"value="<?php echo e($singleemployee->languageknown); ?>" name="language" id="postal_code" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-2 border-black p-2 border-gray-300 rounded-md">
                                                </div>
                                
                                                
                                              </div><!--End Grid-->
                                            </div><!--End Content Div-->
                                        </div><!--End-->
                                
                                          
                                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                              <button type="submit" name="save" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Save
                                              </button>
                                            </div>                                                                                                 
                                        </form>
                                      </div>
                                </div><!-- End Div Body part-->
                            </div>
                    
                            <!-- One big close button.  --->
                            <div class="mt-5 sm:mt-6">
                                <span class="flex w-full rounded-md shadow-sm">
                                <button @click="open = false" class="inline-flex justify-center w-full px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">
                                    Close
                                </button>
                                </span>
                            </div>
                    
                        </div>
                        </div>
                    </div><!--End Model-->
                </div>
                
                <div class="grid grid-cols-3 gap-2 mb-2">
                    <div class=" p-1 rounded-lg border-l-4"><p class="mx-2">Father Name</p> </div>
                    <div class="col-span-2  p-1 rounded-lg"><p class="mx-2"><?php echo e($singleemployee->fathername); ?></p> </div>
                </div>
                <div class="grid grid-cols-3 gap-2 mb-2">
                    <div class="p-1 rounded-lg border-l-4"><p class="mx-2">Mother Name</p> </div>
                    <div class="col-span-2  p-1 rounded-lg"><p class="mx-2"><?php echo e($singleemployee->mothername); ?></p> </div>
                </div>
                <div class="grid grid-cols-3 gap-2 mb-2">
                    <div class=" p-1 rounded-lg border-l-4"><p class="mx-2">Merital Status</p> </div>
                    <div class="col-span-2  p-1 rounded-lg"><p class="mx-2"><?php echo e($singleemployee->meritalstatus); ?></p> </div>
                </div>
                <div class="grid grid-cols-3 gap-2 mb-2">
                    <div class=" p-1 rounded-lg border-l-4"><p class="mx-2">Gender</p> </div>
                    <div class="col-span-2  p-1 rounded-lg"><p class="mx-2"><?php echo e($singleemployee->gender); ?></p> </div>
                </div> 
                <div class="grid grid-cols-3 gap-2 mb-2">
                    <div class=" p-1 rounded-lg border-l-4"><p class="mx-2">NID</p> </div>
                    <div class="col-span-2  p-1 rounded-lg"><p class="mx-2"><?php echo e($singleemployee->nidNumber); ?></p> </div>
                </div> 
                <div class="grid grid-cols-3 gap-2 mb-2">
                    <div class=" p-1 rounded-lg border-l-4"><p class="mx-2">Nationality</p> </div>
                    <div class="col-span-2  p-1 rounded-lg"><p class="mx-2"><?php echo e($singleemployee->nationality); ?></p> </div>
                </div> 
                <div class="grid grid-cols-3 gap-2 mb-2">
                    <div class=" p-1 rounded-lg border-l-4"><p class="mx-2">Known Language</p> </div>
                    <div class="col-span-2  p-1 rounded-lg"><p class="mx-2"><?php echo e($singleemployee->languageknown); ?></p> </div>
                </div> 
                <div class="grid grid-cols-3 gap-2 mb-2">
                    <div class=" p-1 rounded-lg border-l-4"><p class="mx-2">Family Number</p> </div>
                    <div class="col-span-2  p-1 rounded-lg"><p class="mx-2"><?php echo e($singleemployee->homenumber); ?></p> </div>
                </div> 
    
            </div>
            <!---->
            <div class=" widget w-full p-4 rounded-lg bg-white border-l-4 mb-2 shadow border-yellow-300">
                <div class="grid grid-cols-3 gap-2 mb-2">
                    <div class=" p-1 rounded-lg border-l-4"><p class="mx-2">Country</p> </div>
                    <div class="col-span-2  p-1 rounded-lg"><p class="mx-2"><?php echo e($singleemployee->country); ?></p> </div>
                </div>
                <div class="grid grid-cols-3 gap-2 mb-2">
                    <div class=" p-1 rounded-lg border-l-4"><p class="mx-2">State</p> </div>
                    <div class="col-span-2  p-1 rounded-lg"><p class="mx-2"><?php echo e($singleemployee->state); ?></p> </div>
                </div>
                <div class="grid grid-cols-3 gap-2 mb-2">
                    <div class=" p-1 rounded-lg border-l-4"><p class="mx-2">Citye</p> </div>
                    <div class="col-span-2  p-1 rounded-lg"><p class="mx-2"><?php echo e($singleemployee->city); ?></p> </div>
                </div>
                <div class="grid grid-cols-3 gap-2 mb-2">
                    <div class=" p-1 rounded-lg border-l-4"><p class="mx-2">Permanent address</p> </div>
                    <div class="col-span-2  p-1 rounded-lg"><p class="mx-2"><?php echo e($singleemployee->Paddress); ?></p> </div>
                </div>
                <div class="grid grid-cols-3 gap-2 mb-2">
                    <div class=" p-1 rounded-lg border-l-4"><p class="mx-2">Current Address</p> </div>
                    <div class="col-span-2  p-1 rounded-lg"><p class="mx-2"><?php echo e($singleemployee->currentaddress); ?></p> </div>
                </div>
                <div class="grid grid-cols-3 gap-2 mb-2">
                    <div class=" p-1 rounded-lg border-l-4"><p class="mx-2">Joing date</p> </div>
                    <div class="col-span-2  p-1 rounded-lg"><p class="mx-2"><?php echo e($singleemployee->joingdate); ?></p> </div>
                </div>
                <div class="grid grid-cols-3 gap-2 mb-2">
                    <div class=" p-1 rounded-lg border-l-4"><p class="mx-2">Publish </p> </div>
                    <div class="col-span-2  p-1 rounded-lg"><p class="mx-2"><?php echo e($singleemployee->publish); ?></p> </div>
                </div>
            </div><!--End-->
        </div><!--End First Conatainer-->

        <div><!--Start 2nd Conatainer-->

            <div><!--Project Box-->
                <div class=" widget w-full p-4 rounded-lg bg-white border-l-4 mb-2 shadow border-gray-300">
                    <div class="container my-2 mx-auto px-4 md:px-2">
                        <div class="flex flex-wrap -mx-1 lg:-mx-4">
                            <?php $__currentLoopData = $getproject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $project; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $projects): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($projects->id===$item->projectid): ?>

                                            <div class="my-1 px-1 w-full md:w-1/2 lg:my-2 lg:px-4 lg:w-1/2">
                                                <!-- Article -->
                                                <article class="overflow-hidden rounded-lg shadow">
                                                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                                        <h1 class="text-lg">
                                                            <a class="no-underline hover:underline text-black" href="#">
                                                                <?php echo e($projects->projectTitle); ?>

                                                            </a>
                                                        </h1>
                                                        <p class="text-grey-darker text-sm">
                                                           <?php echo e($projects->startdate); ?>

                                                        </p>
                                                    </header>

                                                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                                                        <a class="flex items-center no-underline hover:underline text-black" href="#">
                                                            <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                                                            <p class="ml-2 text-sm">
                                                                Author Name
                                                            </p>
                                                        </a>
                                                        <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                                                            <span class="hidden">Like</span>
                                                            <i class="fa fa-heart"></i>
                                                        </a>
                                                    </footer>

                                                </article>
                                                <!-- END Article -->                                       
                                            </div>    

                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

        </div><!--End-->

    </div><!--End grid Container-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disasterhelp\resources\views/admin/employee/employeedetails.blade.php ENDPATH**/ ?>