

<?php $__env->startSection('container'); ?>
<?php if(Session::has('save')): ?>
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

                <div class="w-full lg:w-1/5  lg:w-6/6">
                    <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-purple-600">
                        <div class="flex items-center">
                            <div class="icon w-14 p-3.5 bg-purple-600 text-white rounded-full mr-3">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-lg"></div>
                                <div class="text-sm text-gray-400">Total Task</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/5 ">
                    <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-blue-400">
                        <div class="flex items-center">
                            <div class="icon w-14 p-3.5 bg-blue-400 text-white rounded-full mr-3">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-lg"></div>
                                <div class="text-sm text-gray-400">New Task</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/5 ">
                    <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-yellow-400">
                        <div class="flex items-center">
                            <div class="icon w-14 p-3.5 bg-yellow-400 text-white rounded-full mr-3">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                </svg>
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-lg"></div>
                                <div class="text-sm text-gray-400">This Week</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/5 ">
                    <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-red-400">
                        <div class="flex items-center">
                            <div class="icon w-14 p-3.5 bg-red-400 text-white rounded-full mr-3">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-lg">12658</div>
                                <div class="text-sm text-gray-400">This Month</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/5 ">
                    <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-green-400">
                        <div class="flex items-center">
                            <div class="icon w-14 p-3.5 bg-green-400 text-white rounded-full mr-3">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-lg">$948'560</div>
                                <div class="text-sm text-gray-400">This Year</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section>
           <!-- Header -->
        <div class="flex justify-between items-center bg-white border-b px-4 py-4">
            <p class="text-xl text-gray-800 font-semibold">Task </p>
            <div class="" x-data="{ open: false }">
                <button class="bg-gray-800 hover:bg-gray-900 text-white text-xs px-6 py-2 rounded-lg border-0" @click="open = true"> Create Task</button>
                            <!-- Dialog (full screen) -->
                            <div class="absolute top-0 left-0 z-50 flex items-center justify-center w-full h-full"x-show="open">
                                <!-- A basic modal dialog with title, body and one button to close -->
                                <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0" @click.away="open = false">
                                    <!-- One big close button.  --->                                 
                                    <span class="flex w-full rounded-md  justify-center -mt-12">
                                      <i @click="open = false"  class="bx bx-x flex items-center justify-center px-4 py-4 text-white bg-red-500 rounded-full hover:bg-blue-700 cursor-pointer"></i>
                                    </span>                                                                   
                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg font-medium leading-6 text-gray-900"></h3>
                                        <div class="mt-3 "><!--Body part-->
                                        <form action="<?php echo e(route('task.create')); ?>" method="POST" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?> 
                                            <div class="shadow overflow-hidden sm:rounded-md my-5">

                                                <div class="grid grid-cols-6 gap-2 p-1">
                                                    <div class="col-span-6">
                                                        <label for="first_name" class="block text-sm font-medium text-gray-700 ">Task Title</label>
                                                        <input type="text" name="tasktitle" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-2 border-black p-2 sm:text-sm border-gray-300 rounded-md">
                                                    </div>
                                                    <div class="col-span-6">
                                                        <label for="about" class="block text-sm font-medium text-gray-700">
                                                            Description
                                                        </label>
                                                        <div class="mt-1">
                                                            <textarea id="about" name="description" rows="3" class="border-2 border-black p-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="you@example.com"></textarea>
                                                        </div>
                                                        <p class="mt-2 text-sm text-gray-500">
                                                            Brief description for The Task. URLs are hyperlinked.
                                                        </p>
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="country" class="block text-sm font-medium text-gray-700">Project </label>
                                                        <select id="country" name="projectId" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                          <option value="">select project</option>
                                                          <?php $__currentLoopData = $project; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($plist->id); ?>"><?php echo e($plist->projectTitle); ?></option>
                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                         
                                                        </select>
                                                    </div>
                                                    <input type="hidden" name="status" value="1">
                                                    <input type="hidden" name="createBy" value="<?php echo e(session()->get('ADMIN_ID')); ?>">
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
            </div><!--End Model Section-->
        </div>   
</section>
<section>
    <div class="grid gap-4 md:grid-cols-3   min-w-full md:min-w-0 mb-2">

        <div class="bg-white rounded-lg p-3 md:max-h-screen co">
            <div class="border-b py-2 ">New task</div>
            <div class=" flex flex-col mt-2 "><!-- -->
                <?php $__currentLoopData = $taskpcs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Tlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="" x-data="{ open: false }">
                    <div class="min-w-full bg-white rounded-lg mb-2 shadow border-l-4 border-red-300 p-2  flex flex-col cursor-pointer"  @click="open = true">
                        <div class="mb-2">
                            <h5 class="text-gray-600 text-xl leading-none ">
                                <?php echo e($Tlist->taskTitle); ?> <?php echo e($Tlist->id); ?>

                            </h5>
                        </div>                   
                        <div class="py-1 mt-2 flex relative items-center">                                             
                            <i class='bx bx-align-left '></i>
                            <i class='bx bx-comment-detail mx-3' ></i>
                            <i class='bx bx-link-alt mx-2' ></i>
                            <span class="text-sm text-red-400 leading-none mx-1">Processing</span>
                            <div class="absolute right-1 ">                          
                                    <span class="text-sm text-gray-400 leading-none " @click="open = true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(59, 130, 246, 0.5);transform:;-ms-filter:"><path d="M12,9c-1.642,0-3,1.359-3,3c0,1.642,1.358,3,3,3c1.641,0,3-1.358,3-3C15,10.359,13.641,9,12,9z"></path><path d="M12,5c-7.633,0-9.927,6.617-9.948,6.684L1.946,12l0.105,0.316C2.073,12.383,4.367,19,12,19s9.927-6.617,9.948-6.684 L22.054,12l-0.105-0.316C21.927,11.617,19.633,5,12,5z M12,17c-5.351,0-7.424-3.846-7.926-5C4.578,10.842,6.652,7,12,7 c5.351,0,7.424,3.846,7.926,5C19.422,13.158,17.348,17,12,17z"></path></svg></span>                                                          
                            </div>                        
                        </div>
                    </div><!--Card box-->
                    <!-- Dialog (full screen) -->
                    <div class="absolute top-0 left-0 overflow-hidden flex items-center justify-center w-full h-full"x-show="open">
                        <!-- A basic modal dialog with title, body and one button to close -->
                        <div class="h-auto p-2 mx-2 z-50 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0" @click.away="open = false">
                            <span class="flex w-full rounded-md  justify-center -mt-12">
                                <i @click="open = false"  class="bx bx-x flex items-center justify-center px-4 py-4 text-white bg-red-500 rounded-full hover:bg-blue-700 cursor-pointer"></i>
                            </span>
                            <div class="mt-3 sm:mt-0 sm:ml-2 sm:text-left">
                                <div class="flex items-center mt-3 justify-center">
                                    <img src="<?php echo e(asset('admin/assets/img/perfil.jpg')); ?>" class=" max-h-48 " />
                                </div>                               
                                <div class="mt-3"><!--Body part-->
                                    <div class="flex flex-col mb-2 ">
                                        <div class="mb-3 flex"><!--Title-->
                                            <i class='bx bx-movie' ></i>
                                            <h5 class="text-gray-600 text-xl leading-none ">
                                                <?php echo e($Tlist->taskTitle); ?> 
                                            </h5>
                                        </div> 
                                        <div class="flex items-center w-screen mb-3"><!--Add member-->
                                            <i class='bx bx-box' ></i>
                                            <span class="px-2 py-1 bg-green-300 rounded shadow cursor-pointer text-sm">Add Member</span>
                                        </div>
                                        <div class="flex mb-3"><!--Description-->
                                            <i class='bx bx-menu-alt-right'></i>
                                            <h2>Description</h2>
                                        </div>
                                        <div class="flex mb-6">
                                            <p class="mx-8 text-xs"><?php echo e($Tlist->description); ?></p>
                                        </div>
                                        <div class="flex mb-3"><!--Activity-->
                                            <i class='bx bxs-face-mask'></i>
                                            <h2>
                                                <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($Tlist->createBy===$emp->id): ?> 
                                                    <?php echo e($emp->firstname); ?> <?php echo e($emp->lastname); ?>

                                                <?php endif; ?> 
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </h2>
                                        </div>
                                        <div class="flex mb-3"><!--Activity-->
                                            <i class='bx bx-list-minus'></i>
                                            <h2>Activity 
                                                <?php if($Tlist->status===1): ?> 
                                                    <p class="text-xs font-bold">Processing</p>
                                                <?php endif; ?> 
                                            </h2>
                                        </div>
                                        <!--Write Comment-->
                                        <form action="<?php echo e(route('comment.create')); ?>" method="POST" enctype="multipart/form-data"> 
                                            <?php echo csrf_field(); ?>
                                        <div class="flex mb-3 bg-gray-100 px-1 py-2 items-center rounded ">
                                            <span class="h-8 w-10 bg-black  rounded-full flex items-center justify-center mx-1">
                                                <p class="font-bold text-white uppercase ">R</p>                              
                                            </span>
                                            <span></span>                                                                                      
                                                <input type="text"name="comment" id="cmt" autocomplete="given-name" class="mx-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-2 border-black p-1 sm:text-sm border-gray-300 rounded-md">                                              
                                                <input type="hidden" name="taskid"value="<?php echo e($Tlist->id); ?>">
                                                <input type="hidden" name="empid"value="<?php echo e(session()->get('ADMIN_ID')); ?>">
                                                <input type="submit" value="Post" class="inline-flex  justify-center py-1 px-3 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            </form>
                                        </div>
                                        <!--Comment Section-->
                                        <?php $__currentLoopData = $Comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($Tlist->id===$cmt->taskid): ?> 
                                            <div class="flex flex-col mb-3 bg-gray-100 px-1 py-2  rounded ">
                                                <div class="flex">
                                                    <span class="h-8 w-8  bg-black  rounded-full flex items-center justify-center mx-1">
                                                        <p class="font-bold text-white uppercase ">R</p>                                                
                                                    </span>
                                                    <p class="text-sm font-bold">
                                                        <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($cmt->empid===$emp->id): ?> 
                                                            <?php echo e($emp->firstname); ?> <?php echo e($emp->lastname); ?>

                                                        <?php endif; ?> 
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="mx-10 text-sm"><?php echo e($cmt->comment); ?></p>
                                                </div>
                                                <div class="flex mx-10 mt-2">
                                                    <button class="inline-flex  justify-center  px-1 border border-transparent shadow-sm text-xs font-medium rounded-md text-white bg-indigo-100 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Edit</button>
                                                    <button class="inline-flex mx-1 justify-center  px-1 border border-transparent shadow-sm text-xs font-medium rounded-md text-white bg-indigo-100 hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Delete</button>
                                                </div>
                                            </div>
                                            <?php endif; ?> 
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <!--End Comment-->
                                        
                                    </div>
                                </div><!-- End Div Body part-->
                            </div>

                        </div><!--End Task Card-->
                    </div>                    
                </div><!--End Model-->    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div><!--task col -->
        <div class="bg-white rounded-lg p-3 md:max-h-screen  mb-2">
            <div class="border-b py-2 ">Review task</div>
            <div class=" flex flex-col mt-2 ">
                <?php $__currentLoopData = $taskpcs2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Tlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="" x-data="{ open: false }">
                    <div class="min-w-full bg-white rounded-lg mb-2 shadow border-l-4 border-purple-300 p-2  flex flex-col cursor-pointer"  @click="open = true">
                        <div class="mb-2">
                            <h5 class="text-gray-600 text-xl leading-none ">
                                <?php echo e($Tlist->taskTitle); ?> <?php echo e($Tlist->id); ?>

                            </h5>
                        </div>                   
                        <div class="py-1 mt-2 flex relative items-center">                                             
                            <i class='bx bx-align-left '></i>
                            <i class='bx bx-comment-detail mx-3' ></i>
                            <i class='bx bx-link-alt mx-2' ></i>
                            <span class="text-sm text-blue-400 leading-none mx-1">Reviewing</span>
                            <div class="absolute right-1 ">                          
                                    <span class="text-sm text-gray-400 leading-none " @click="open = true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(59, 130, 246, 0.5);transform:;-ms-filter:"><path d="M12,9c-1.642,0-3,1.359-3,3c0,1.642,1.358,3,3,3c1.641,0,3-1.358,3-3C15,10.359,13.641,9,12,9z"></path><path d="M12,5c-7.633,0-9.927,6.617-9.948,6.684L1.946,12l0.105,0.316C2.073,12.383,4.367,19,12,19s9.927-6.617,9.948-6.684 L22.054,12l-0.105-0.316C21.927,11.617,19.633,5,12,5z M12,17c-5.351,0-7.424-3.846-7.926-5C4.578,10.842,6.652,7,12,7 c5.351,0,7.424,3.846,7.926,5C19.422,13.158,17.348,17,12,17z"></path></svg></span>                                                          
                            </div>                        
                        </div>
                    </div><!--Card box-->
                    <!-- Dialog (full screen) -->
                    <div class="absolute top-0 left-0 z-50 overflow-hidden flex items-center justify-center w-full h-full"x-show="open">
                        <!-- A basic modal dialog with title, body and one button to close -->
                        <div class="h-auto p-2 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0" @click.away="open = false">
                            <span class="flex w-full rounded-md  justify-center -mt-12">
                                <i @click="open = false"  class="bx bx-x flex items-center justify-center px-4 py-4 text-white bg-red-500 rounded-full hover:bg-blue-700 cursor-pointer"></i>
                            </span>
                            <div class="mt-3 sm:mt-0 sm:ml-2 sm:text-left">
                                <div class="flex items-center mt-3 justify-center">
                                    <img src="<?php echo e(asset('admin/assets/img/perfil.jpg')); ?>" class=" max-h-48 " />
                                </div>                               
                                <div class="mt-3"><!--Body part-->
                                    <div class="flex flex-col mb-2 ">
                                        <div class="mb-3 flex"><!--Title-->
                                            <i class='bx bx-movie' ></i>
                                            <h5 class="text-gray-600 text-xl leading-none ">
                                                <?php echo e($Tlist->taskTitle); ?> 
                                            </h5>
                                        </div> 
                                        <div class="flex items-center w-screen mb-3"><!--Add member-->
                                            <i class='bx bx-box' ></i>
                                            <span class="px-2 py-1 bg-green-300 rounded shadow cursor-pointer text-sm">Add Member</span>
                                        </div>
                                        <div class="flex mb-3"><!--Description-->
                                            <i class='bx bx-menu-alt-right'></i>
                                            <h2>Description</h2>
                                        </div>
                                        <div class="flex mb-6">
                                            <p class="mx-8 text-xs"><?php echo e($Tlist->description); ?></p>
                                        </div>
                                        <div class="flex mb-3"><!--Activity-->
                                            <i class='bx bxs-face-mask'></i>
                                            <h2>
                                                <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($Tlist->createBy===$emp->id): ?> 
                                                    <?php echo e($emp->firstname); ?> <?php echo e($emp->lastname); ?>

                                                <?php endif; ?> 
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </h2>
                                        </div>
                                        <div class="flex mb-3"><!--Activity-->
                                            <i class='bx bx-list-minus'></i>
                                            <h2>Activity 
                                                <?php if($Tlist->status===1): ?> 
                                                    <p class="text-xs font-bold">Processing</p>
                                                <?php endif; ?> 
                                            </h2>
                                        </div>
                                        <!--Write Comment-->
                                        <form action="<?php echo e(route('comment.create')); ?>" method="POST" enctype="multipart/form-data"> 
                                            <?php echo csrf_field(); ?>
                                        <div class="flex mb-3 bg-gray-100 px-1 py-2 items-center rounded ">
                                            <span class="h-8 w-10 bg-black  rounded-full flex items-center justify-center mx-1">
                                                <p class="font-bold text-white uppercase ">R</p>                              
                                            </span>
                                            <span></span>                                                                                      
                                                <input type="text"name="comment" id="cmt" autocomplete="given-name" class="mx-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-2 border-black p-1 sm:text-sm border-gray-300 rounded-md">                                              
                                                <input type="hidden" name="taskid"value="<?php echo e($Tlist->id); ?>">
                                                <input type="hidden" name="empid"value="<?php echo e(session()->get('ADMIN_ID')); ?>">
                                                <input type="submit" value="Post" class="inline-flex  justify-center py-1 px-3 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            </form>
                                        </div>
                                        <!--Comment Section-->
                                        <?php $__currentLoopData = $Comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($Tlist->id===$cmt->taskid): ?> 
                                            <div class="flex flex-col mb-3 bg-gray-100 px-1 py-2  rounded ">
                                                <div class="flex">
                                                    <span class="h-8 w-8  bg-black  rounded-full flex items-center justify-center mx-1">
                                                        <p class="font-bold text-white uppercase ">R</p>                                                
                                                    </span>
                                                    <p class="text-sm font-bold">
                                                        <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($cmt->empid===$emp->id): ?> 
                                                            <?php echo e($emp->firstname); ?> <?php echo e($emp->lastname); ?>

                                                        <?php endif; ?> 
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="mx-10 text-sm"><?php echo e($cmt->comment); ?></p>
                                                </div>
                                                <div class="flex mx-10 mt-2">
                                                    <button class="inline-flex  justify-center  px-1 border border-transparent shadow-sm text-xs font-medium rounded-md text-white bg-indigo-100 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Edit</button>
                                                    <button class="inline-flex mx-1 justify-center  px-1 border border-transparent shadow-sm text-xs font-medium rounded-md text-white bg-indigo-100 hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Delete</button>
                                                </div>
                                            </div>
                                            <?php endif; ?> 
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <!--End Comment-->
                                        
                                    </div>
                                </div><!-- End Div Body part-->
                            </div>

                        </div><!--End Task Card-->
                    </div>                    
                </div><!--End Model-->    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div><!--task col -->
        <div class="bg-white rounded-lg p-3 md:max-h-screen  mb-2">
            <div class="border-b py-2 ">Complate task</div>
            <div class=" flex flex-col mt-2 ">
          
            </div>
        </div><!--task col -->
    </div><!--Main Grid Div-->

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disasterhelp\resources\views/admin/task/index.blade.php ENDPATH**/ ?>