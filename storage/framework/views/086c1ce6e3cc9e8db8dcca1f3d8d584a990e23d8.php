


<?php $__env->startSection('container'); ?>
    
  <div class="  min-w-full  my-4 md:max-w-lg rounded overflow-hidden shadow">
    <div class="py-4 px-8">
      <div  class="flex flex-row justify-between">
        <p class="mb-2 text-sm text-gray-600">Staring Date : <?php echo e($singleproject->startdate); ?></p>
        <p class="mb-2 text-sm text-gray-600">End Date : <?php echo e($singleproject->enddate); ?></p>
      </div>
      <hr class="mt-6">

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <h4 class="text-lg mb-3"> Title : <?php echo e($singleproject->projectTitle); ?></h4>
          <p class="mb-2 text-sm text-gray-600">About : <?php echo e($singleproject->about); ?></p>
          <p class="mb-2 text-sm text-gray-600">Piority level : <?php echo e($singleproject->piority); ?></p>
          <p class="mb-2 text-sm text-gray-600">Disaster Name: <span class="bg-indigo-200 text-indigo-500 text-xs font-semibold rounded-md py-1 px-2"><?php echo e($singleproject->disastername); ?> </span></p>
          
            <p class="mb-2 text-sm text-gray-600">Project code: <?php echo e($singleproject->projectcode); ?></p>
         
        </div> <!-- Right Side Content -->
         
        <div class="">
          <h4 class="text-lg mb-3">Project Member list</h4>
          <div class="container w-full container  flex flex-wrap flex-col md:flex-row  justify-start">
            <?php $__currentLoopData = $getmember; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $memberlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>             
                <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($memberlist->employeeid===$emp->id): ?>  
                    
                    <div class="w-full lg:w-1/2 p-1">
                      <div class="flex flex-col lg:flex-row rounded overflow-hidden h-auto lg:h-24 border shadow shadow-lg">
                        <img class="block h-auto w-full lg:w-32 flex-none bg-cover h-24" src="https://pbs.twimg.com/media/DrM0nIdU0AEhG5b.jpg">
                        <div class=" rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                          <div class="text-black capitalize text-xl mb-2 leading-tight"><?php echo e($emp->firstname); ?> <?php echo e($emp->lastname); ?></div>
                          <p class="text-grey-darker text-base">
                            <a href="/employee/<?php echo e($emp->id); ?>" class="bg-indigo-200 text-indigo-500 text-xs font-semibold rounded-md py-1 px-2">
                              View Profile
                              </a>
                          </p>
                        </div>
                      </div>
                    </div>                             
                      <!--<p></p>-->
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


          </div><!--End -->

        </div><!-- Employee List Content -->

      </div><!--Grid end-->
  
      <hr class="mt-6">
      <!-- modal div -->
        <div class="mt-1 " x-data="{ open: false }">
            <div class=" py-3 text-left sm:px-0">
              <!-- Button (blue), duh! -->   
              <button class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" @click="open = true">Add Member</button>
            </div>       
                              <!-- Dialog (full screen) -->
                              <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full"x-show="open">
                                <!-- A basic modal dialog with title, body and one button to close -->
                                <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0" @click.away="open = false">
                                                                          <!-- One big close button.  --->
                                  
                                    <span class="flex w-full rounded-md  justify-center -mt-12">
                                      <i @click="open = false"  class="bx bx-x flex items-center justify-center px-4 py-4 text-white bg-red-500 rounded-full hover:bg-blue-700 cursor-pointer"></i>
                                    </span>
                                  
                                  
                                  <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg font-medium leading-6 text-gray-900"></h3>
                                        <div class="mt-3 "><!--Body part-->
                                          <form action="<?php echo e(route('project.assign')); ?>" method="POST" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?> 
                                            <div class="w-96  max-w-sm md:max-w-lg ">

                                              <div class="col-span-6">
                                                <input type="hidden" name="projectid" value="<?php echo e($singleproject->id); ?>">
                                                <label for="street_address" class="block text-sm font-medium text-gray-700">Member List</label>                
                                                <select id="employee" name="employeeid" autocomplete="employee" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                  <option value="">Select Member</option>  
                                                  <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  <option value="<?php echo e($elist->id); ?>"><?php echo e($elist->firstname); ?> <?php echo e($elist->lastname); ?></option>
                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>                                             
                                              </div>
                                              <hr class="mt-6">
                                              <div class="px-4 py-3  text-right sm:px-1">
                                                <button type="submit" name="save" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                  Assign
                                                </button>
                                              </div>  
                                            </div>
                                          </form>
                                        </div><!-- End Div Body part-->
                                    </div>                             
                              
                                </div>
                              </div>
        </div><!--End Model-->
    </div>
  </div>

  <div class="  min-w-full  my-4 md:max-w-lg rounded overflow-hidden shadow">
    <div class="col-span-6 p-4">
      <label for="about" class="block text-sm font-medium text-gray-700 mb-2">
        Comment Section
      </label>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="mt-1">
          <textarea id="about" name="about" rows="3" class="border-2 border-black p-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Comments here .. "></textarea>
        </div>
        <div class="px-4 py-1 text-right sm:px-0">
          <input type="submit" value="Post" name="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-300 hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        </div>
      </form>
    </div>
  </div>

  <div class="  min-w-full  my-4 md:max-w-lg rounded overflow-hidden shadow">
    <div class="py-4 px-8">
      <h4 class=" mt-2 text-sm text-gray-600">this is comment !</h4>
      <hr class="mt-2">
      <p class=" mt-2 text-sm text-gray-600">Date : <?php echo e($singleproject->startdate); ?></p>
    </div>
  </div>


  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disasterhelp\resources\views/admin/project/project-details.blade.php ENDPATH**/ ?>