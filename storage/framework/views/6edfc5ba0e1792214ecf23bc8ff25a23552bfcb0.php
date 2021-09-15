


<?php $__env->startSection('container'); ?>
<h2>Employee</h2>
<section>
    <div class="min-w-screen flex">
        <div class="flex flex-col max-w-full  w-full lg:w-6/6">
            <div class="flex flex-col lg:flex-row w-full lg:space-x-5 space-y-4 lg:space-y-0 mb-2 lg:mb-4">

                <div class="w-full lg:w-1/5    lg:w-6/6">
                    <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-purple-600">
                        <div class="flex items-center">
                            <div class="icon w-14 p-3.5 bg-purple-600 text-white rounded-full mr-3">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-lg"><?php echo e($totalEmp); ?></div>
                                <div class="text-sm text-gray-400">Total Employee</div>
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
                                <div class="text-lg"><?php echo e($todayadd); ?></div>
                                <div class="text-sm text-gray-400">New Employee</div>
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
                                <div class="text-lg"><?php echo e($month); ?></div>
                                <div class="text-sm text-gray-400">This Month</div>
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
                                <div class="text-sm text-gray-400">Orders</div>
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
     <!--Container-->
    <div class=" w-full">
        <!--Card-->
    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            
    <table id="example2" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">   

    <thead>
        <tr class="text-left">
            <th >Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Employee Id</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="text-left">
            <td ><?php echo e($elist->firstname); ?> <?php echo e($elist->lastname); ?></td>
            <td><?php echo e($elist->email); ?></td>
            <td><?php echo e($elist->phonenumber); ?></td>
            <td><?php echo e($elist->eployeeid); ?></td>
            <td><?php echo e($elist->status); ?></td>
            <td>
                <div class="flex justify-center space-x-1">
                    <button class="border-2 border-indigo-200 rounded-md p-1">
                      <a href="/employee/<?php echo e($elist->id); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-green-500">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12,9c-1.642,0-3,1.359-3,3c0,1.642,1.358,3,3,3c1.641,0,3-1.358,3-3C15,10.359,13.641,9,12,9z">
                          </path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12,5c-7.633,0-9.927,6.617-9.948,6.684L1.946,12l0.105,0.316C2.073,12.383,4.367,19,12,19s9.927-6.617,9.948-6.684 L22.054,12l-0.105-0.316C21.927,11.617,19.633,5,12,5z M12,17c-5.351,0-7.424-3.846-7.926-5C4.578,10.842,6.652,7,12,7 c5.351,0,7.424,3.846,7.926,5C19.422,13.158,17.348,17,12,17z"></path>
                      </svg>
                      </a>
                      </button>
                    
                    <button class="border-2 border-indigo-200 rounded-md p-1">
                    <a href="/project-details/<?php echo e($elist->id); ?>">
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
</div>
<!--/Card-->
</div>
<!--/container-->
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disasterhelp\resources\views/admin/employee/index.blade.php ENDPATH**/ ?>