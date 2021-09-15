<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/styles.css')); ?>">

        <title>Dashbord</title>
        <style media="screen">

          section{
            margin-top: 15px;
          }
            .mt-3{
                width: 500px;
            }
        </style>
    </head>
    <body>
        <!--========== HEADER ==========-->
        <header class="header">
            <div class="header__container">
                <img src="<?php echo e(asset('admin/assets/img/perfil.jpg')); ?>" alt="" class="header__img">

                <a href="#" class="header__logo">RifatZone</a>

                <div class="header__search">
                    <input type="search" placeholder="Search" class="header__input">
                    <i class='bx bx-search header__icon'></i>
                </div>

                <div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>
            </div>
        </header>

        <!--========== NAV ==========-->
        <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="/dashboard" class="nav__link nav__logo">
                        <i class='bx bxs-disc nav__icon' ></i>
                        <span class="nav__logo-name">RifatZone</span>
                    </a>

                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Profile</h3>

                            <a href="/dashboard" class="nav__link active">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">Home</span>
                            </a>

                            <div class="nav__dropdown">
                                <a href="" class="nav__link">
                                    <i class='bx bx-user nav__icon' ></i>
                                    <span class="nav__name">Profile</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="#" class="nav__dropdown-item">Passwords</a>
                                        <a href="#" class="nav__dropdown-item">Mail</a>
                                        <a href="#" class="nav__dropdown-item">Accounts</a>
                                    </div>
                                </div>
                            </div>

                            <a href="#" class="nav__link">
                                <i class='bx bx-message-rounded nav__icon' ></i>
                                <span class="nav__name">Messages</span>
                            </a>
                        </div>

                        <div class="nav__items">
                            <h3 class="nav__subtitle">Menu</h3>

                            <div class="nav__dropdown">
                                <a href="/employee" class="nav__link">
                                  <i class='bx bxs-user-detail nav__icon' ></i>
                                    <span class="nav__name">Employees</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="#" class="nav__dropdown-item">Employee List</a>
                                        <a href="/employee-form" class="nav__dropdown-item">Create New</a>
                                        <a href="/employee-report" class="nav__dropdown-item">Reports</a>                                  
                                    </div>
                                </div>

                            </div>
                            <div class="nav__dropdown">
                              <a href="#" class="nav__link">
                                  <i class='bx bx-bookmark-alt-plus nav__icon' ></i>
                                  <span class="nav__name">Projects</span>
                                  <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                              </a>

                              <div class="nav__dropdown-collapse">
                                  <div class="nav__dropdown-content">
                                      <a href="/newproject" class="nav__dropdown-item">New Project</a>
                                      <a href="/project" class="nav__dropdown-item">Project List</a>                                    
                                      <a href="#" class="nav__dropdown-item">Reports</a>                                  
                                  </div>
                              </div>

                          </div>
                          <a href="#" class="nav__link">
                            <i class='bx bx-task nav__icon' ></i>
                            <span class="nav__name">Tasks</span>
                          </a>
                          <div class="nav__dropdown">
                            <a href="#" class="nav__link">
                              <i class='bx bx-group nav__icon' ></i>
                                <span class="nav__name">People Data</span>
                                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                            </a>

                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="#" class="nav__dropdown-item">List People</a>                                   
                                    <a href="#" class="nav__dropdown-item">Reports</a>                                  
                                </div>
                            </div>

                        </div>
                        <a href="/volunteer" class="nav__link">
                          <i class='bx bx-network-chart nav__icon' ></i>
                          <span class="nav__name">Workers</span>
                        </a>
                            <a href="/explore" class="nav__link">
                                <i class='bx bx-compass nav__icon' ></i>
                                <span class="nav__name">Explore</span>
                            </a>
                            <a href="#" class="nav__link">
                                <i class='bx bx-bookmark nav__icon' ></i>
                                <span class="nav__name">Analytics</span>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="admin/logout" class="nav__link nav__logout">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>

        <!--========== CONTENTS ==========-->
        <main>
            <?php $__env->startSection('container'); ?>

            <?php echo $__env->yieldSection(); ?>

        </main>
            <!-- All Script  File Here !-->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>

            <!--========== MAIN JS ==========-->
            <script src="<?php echo e(asset('admin/assets/js/main.js')); ?>"></script>
                <!--Data Set -->
        <script>
            $(document).ready( function () {
                $('#example').DataTable({
                    "order": [[ 3, "desc" ]],
                    responsive: {
                        breakpoints: [
                        {name: 'bigdesktop', width: Infinity},
                        {name: 'meddesktop', width: 1480},
                        {name: 'smalldesktop', width: 1280},
                        {name: 'medium', width: 1188},
                        {name: 'tabletl', width: 1024},
                        {name: 'btwtabllandp', width: 848},
                        {name: 'tabletp', width: 768},
                        {name: 'mobilel', width: 480},
                        {name: 'mobilep', width: 320}
                        ]
                    }
                });
            } );

        </script>
        <script>
            $(document).ready(function() {			
			var table = $('#example2').DataTable( {
					responsive: true
				} )
				.columns.adjust()
				.responsive.recalc();
		} );
        </script>

        <script>
            function previewFile(input){
                var file=$("input[type=file]").get(0).files[0];
                if(file){
                    var reader= new FileReader();
                    reader.onload= function(){
                        $('#previewImg').attr("src",reader.result);
                    }
                    reader.readAsDataURL(file);
                }
            }
        </script>


        
 <!--Chart-->
 

   
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\disasterhelp\resources\views/admin/layout/layout.blade.php ENDPATH**/ ?>