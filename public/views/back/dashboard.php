<?php require_once view('includes/header'); ?>

<body>

    <main class="w-full fx">
        
       <?php require_once view('back/sidebar'); ?>

        <div class="w-10/12">

            <?php require_once view('back/topNav'); ?>

            <div class="w-full  px-10 pt-4">

                <div class="fx fx-j-btw">

                <div class="w-full fx fx-i-c color-pri txt-h-c py-3">
                    <h2> Hello <?= auth()->user()->fullName ?>
                    ! Welcome to adminstration Area.</h2>
                </div>
                    <!-- <a href="/new_user" class='py-2 px-4 pointer bgColor-pri-800 color-1 
                    rounded fw-600'> 
                        Add New user 
                    </a> -->
                 </div>
            </div>

            <div class="w-full h-auto fx fx-j-btw fx-wrap pb-16">

            <div class="w-11/12 sec-theme-colorm-0-auto h-64 fx fx-j-btw">
                 <div class="w-full py-4">
                     <img class="w-full h-full "
                         src="<?= images_path('static/static2.svg'); ?>"
                     alt="admin image">
                 </div>
            </div>

            <div class="w-11/12  m-0-auto h-auto mt-8 pb-10 fx fs-xl">
                <div class="w-3/12 h-40 fx fx-j-c fx-i-c sec-theme-colorpx-4 
                shadow-2 mr-5 bgColor-sec-200 ">
                    <div class="w-1/2 txt-h-c border-t-0 border-b-0 border-l-0
                     b-solid b-color-sec border-r fw-500">
                      <i class="fa-2x fa fa-users color-pri"></i>
                      <p>Users</p>
                    </div>

                    <div class="w-1/2 txt-h-c fw-600">
                       <?= $users_count ?>
                    </div>
                </div>

                <div class="w-3/12 h-40 fx fx-j-c fx-i-c sec-theme-colorpx-4 
                shadow-2 mr-5 bgColor-sec-200  ">
                    <div class="w-1/2 txt-h-c border-t-0 border-b-0 border-l-0
                     b-solid b-color-sec border-r fw-500">
                      <i class="fa-2x fa fa-ticket color-pri"></i>
                      <p>Bookings</p>
                    </div>

                    <div class="w-1/2 txt-h-c fw-600">
                       <?= $bookings_count ?>
                    </div>
                </div>

                <div class="w-3/12 h-40 fx fx-j-c fx-i-c sec-theme-colorpx-4 
                shadow-2 mr-5 bgColor-sec-200  ">
                    <div class="w-1/2 txt-h-c border-t-0 border-b-0 border-l-0
                     b-solid b-color-sec border-r fw-500">
                      <i class="fa-2x fa fa-motorcycle color-pri"></i>
                      <p>Motorbikes </p>
                    </div>

                    <div class="w-1/2 txt-h-c fw-600">
                       <?= $bikes_count ?>
                    </div>
                </div>

                <div class="w-3/12 h-40 fx fx-j-c fx-i-c sec-theme-colorpx-4 
                shadow-2 mr-5 bgColor-sec-200  ">
                    <div class="w-1/2 txt-h-c border-t-0 border-b-0 border-l-0
                     b-solid b-color-sec border-r fw-500">
                      <i class="fa-2x fa fa-money-bill-alt color-pri"></i>
                      <p> Sales </p>
                    </div>

                    <div class="w-1/2 txt-h-c fw-600">
                       Ksh <?= $sales ?>
                    </div>
                </div>

            </div>
        </div>

            </div>

        </div>

            <?php require_once view('back/bottomNav'); ?>

        </div>
        
    </main>

</body>

<?php require_once view('includes/footer'); ?>