

<?php $__env->startSection('container'); ?>
    
<section>
    <div class="px-4 py-3 my-10 bg-purple-500 text-center sm:px-6 sm:rounded-md">
        <h3 class="text-lg font-medium leading-3 text-white p-2">New Project Form</h3>
    </div>
  <div>

      <div class="w-4/4 mt-5 md:mt-0 md:col-span-2">
        <form action="<?php echo e(route('project.create')); ?>" method="POST" enctype="multipart/form-data">                                      
          <?php echo csrf_field(); ?>
          <div class="shadow overflow-hidden sm:rounded-md my-5">
            <h3 class="text-lg font-medium leading-6 text-gray-900 p-2">Project</h3>
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6">
                    <label for="first_name" class="block text-sm font-medium text-gray-700 ">Project name</label>
                    <input type="text" name="projectname" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-2 border-black p-2 sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6">
                    <label for="about" class="block text-sm font-medium text-gray-700">
                    About
                    </label>
                    <div class="mt-1">
                    <textarea id="about" name="about" rows="3" class="border-2 border-black p-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="you@example.com"></textarea>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">
                    Brief description for The Project. URLs are hyperlinked.
                    </p>
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Start Date</label>
                    <input type="date" name="sd" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full border-2 border-black p-2 shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>  
                <div class="col-span-6 sm:col-span-3">
                    <label for="last_name" class="block text-sm font-medium text-gray-700">End Date</label>
                    <input type="date" name="ed" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full border-2 border-black p-2 shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="country" class="block text-sm font-medium text-gray-700">Piority Level</label>
                    <select id="country" name="piority" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                      <option value="High">High</option>
                      <option value="Normal">Normal</option>
                      <option value="Easy">Easy</option>
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="country" class="block text-sm font-medium text-gray-700">disaster </label>
                  <select id="country" name="selectdisaster" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="corona">Corona</option>
                    <option value="Road Accident">Road Accident</option>
                    <option value="Earthquake">Earthquake</option>
                    <option value="corona">Cyclone</option>
                  </select>
                </div>
                
                <input type="hidden" name="proccesstype" value="1">
                <input type="hidden" name="status" value="1">

              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <input type="submit" value="Save" name="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">

            </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>

</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disasterhelp\resources\views/admin/project/form.blade.php ENDPATH**/ ?>