

<?php $__env->startSection('container'); ?>
<section>
    <div class="px-4 py-3 my-10 bg-purple-500 text-center sm:px-6 sm:rounded-md">
        <h3 class="text-lg font-medium leading-3 text-white p-2">New Employee Form</h3>
    </div>
  <div>

      <div class="w-4/4 mt-5 md:mt-0 md:col-span-2">
        <form action="<?php echo e(route('employee.create')); ?>" method="POST" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <div class="shadow sm:rounded-md sm:overflow-hidden " >
            <div class="px-4 py-3 bg-gray-50 text-left sm:px-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900 p-2">Genarel Information</h3>
            </div>
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="first_name" class="block text-sm font-medium text-gray-700 ">First name</label>
                    <input type="text" name="firstname" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-2 border-black p-2 sm:text-sm border-gray-300 rounded-md">
                  </div>

                  <div class="col-span-6 sm:col-span-3">
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                    <input type="text" name="lastname" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full border-2 border-black p-2 shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>
                  <div class="col-span-6 sm:col-span-3">
                    <label for="first_name" class="block text-sm font-medium text-gray-700 ">Email</label>
                    <input type="text" name="email"  autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-2 border-black p-2 sm:text-sm border-gray-300 rounded-md">
                  </div>

                  <div class="col-span-6 sm:col-span-3">
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="text" name="phonenumber"  autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full border-2 border-black p-2 shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>
              </div>

            </div>
          </div>

        

          <div class="shadow overflow-hidden sm:rounded-md my-5">

            <h3 class="text-lg font-medium leading-6 text-gray-900 p-2">Personal Information</h3>
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">

                <div class="col-span-6 sm:col-span-3">
                  <label for="last_name" class="block text-sm font-medium text-gray-700">Father Name</label>
                  <input type="text" name="fathername" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-2 border-black p-2 sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="last_name" class="block text-sm font-medium text-gray-700">Mother Name</label>
                  <input type="text" name="mothername" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-2 border-black p-2 sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="last_name" class="block text-sm font-medium text-gray-700">Home Phone</label>
                  <input type="text" name="homephone" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-2 border-black p-2 sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="last_name" class="block text-sm font-medium text-gray-700">Merital Status</label>
                  <select id="country" name="meritalstatus" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>Select</option>  
                    <option value="Married">Married</option>
                    <option value="single">single</option>
                    </select>
              </div>            
                <div class="col-span-6 sm:col-span-3">
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Gender</label>
                    <select id="country" name="gender" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">other</option>
                      </select>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                    <input type="date" name="dob" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full border-2 border-black p-2 shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="last_name" class="block text-sm font-medium text-gray-700">NID</label>
                    <input type="text" name="nid" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full border-2 border-black p-2 shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-2 sm:col-span-6 lg:col-span-2">
                  <label for="postal_code" class="block text-sm font-medium text-gray-700">Nationality</label>
                  <input type="text" name="nationality" id="postal_code" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-2 border-black p-2 border-gray-300 rounded-md">
                </div>
                <div class="col-span-2 sm:col-span-6 lg:col-span-2">
                  <label for="postal_code" class="block text-sm font-medium text-gray-700">Language Known</label>
                  <input type="text" name="language" id="postal_code" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-2 border-black p-2 border-gray-300 rounded-md">
                </div>

                <div class="col-span-2 sm:col-span-6 lg:col-span-2">
                  <label for="postal_code" class="block text-sm font-medium text-gray-700">ZIP / Postal</label>
                  <input type="text" name="postal" id="postal_code" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-2 border-black p-2 border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                  <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                  <select  name="country" id="countyList"  class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="" selected="selected">Select Country</option>
                    <option value="bangladesh" selected="selected">Bangladesh</option>
                    
                  </select>
                </div>

                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                  <label for="city" class="block text-sm font-medium text-gray-700">State</label>
                  <select  name="state" id="stateList" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="" selected="selected">Select State</option>
                    <option value="dhaka" selected="selected">Dhaka</option>
                  </select>
                </div>

                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                  <label for="state" class="block text-sm font-medium text-gray-700">City</label>
                  <select  name="city" id="cityList"  class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="" selected="selected">Select City</option>
                    <option value="dhaka" selected="selected">Dhaka</option>
                  </select>
                </div>
                
                <div class="col-span-6">
                  <label for="street_address" class="block text-sm font-medium text-gray-700">Street Address</label>
                  <input type="text" name="street_address" id="street_address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 border-2 border-black p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6">
                  <label for="street_address" class="block text-sm font-medium text-gray-700">Current Address</label>
                  <input type="text" name="c_address" id="street_address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 border-2 border-black p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
              </div><!--End Grid-->
            </div><!--End Content Div-->
          </div><!--End-->

          <div class="shadow overflow-hidden sm:rounded-md my-5">
            
            <h3 class="text-lg font-medium leading-6 text-gray-900 p-2">Company Details</h3>
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">

                <div class="col-span-6 sm:col-span-3">
                  <label for="last_name" class="block text-sm font-medium text-gray-700">Employee Type</label>
                  <select id="country" name="employeetype" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-indigo-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-300 sm:text-sm">
                    <option >Select</option>  
                    <option value="hr">HR</option>
                    <option value="Software Engineer">Software Engineer</option>
                    </select>
                </div> <!---->           
                <div class="col-span-6 sm:col-span-3">
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Joing date</label>
                    <input type="date" name="joingdate" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-600 block w-full border-2 border-black p-2 shadow-sm sm:text-sm border-indigo-300 rounded-md">
                </div><!---->

                <input type="hidden" id="status" name="status" value="1">
              </div><!--End Grid-->
            </div><!--End Content Div-->
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" name="save" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Save
              </button>
            </div>

          </div><!--End-->

        </form>
      </div>
    </div>
  </div>

</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disasterhelp\resources\views/admin/employee/employeeform.blade.php ENDPATH**/ ?>