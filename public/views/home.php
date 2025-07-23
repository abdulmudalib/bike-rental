<?php require_once view('includes/header'); ?>

<body>

    <?php require_once view('nav'); ?>

    <main class="w-9/12 m-0-auto">

        <div class="fx">

            <div class="w-1/2 mt-8" >

                <h1 style="font-size:42px;" class="w-10/12 pt-5 pb-2 
                px-4 fw-700">
                    Make Your Ride Easy & Affordable
                </h1>

                <p class="px-4  fs-md lh-loose"> 
                    <?= app_name() ?> Are you looking for an easy and affordable 
                    way to rent a motorbike? Look no further! Our system 
                    allows you to browse and book a wide range of motorbikes 
                    at competitive prices, all from the comfort of your own home.
                </p>
                
                <div class="px-4 pt-8">
                    <a href="/bikes">
                    <button class="bgColor-pri px-4 py-3 color-1 rounded-full 
                    fw-600 pointer hover:bgColor-pri-800"> 
                        Find Your Bike
                    </button>
                    </a>

                    <?php if (!auth()->check()) :?>
                        <a href="/signin">
                        <button class="bgColor-1 px-8 py-3 color-pri rounded-full 
                        fw-600 pointer hover:bgColor-sec-100 ml-3 shadow-1"> 
                        Sign in
                       </button>
                        </a>
                    <?php else: ?>
                        <a href="/logout">
                        <button class="bgColor-danger px-8 py-3 color-1 rounded-full 
                        fw-600 pointer hover:bgColor-sec-100 ml-3 shadow-1"> 
                        Sign Out
                       </button>
                        </a>
                    <?php endif; ?>

                </div> 

            </div>

            <div class="w-1/2">
                                   
                <div class="w-full h-auto m-0-auto">
                    <img class="w-full h-full contain rounded-1"
                    src="<?= images_path("/static/s01.png") ?>"
                    alt="bike">
                </div>

            </div> 

        </div>
        
        <?php require_once view('front/landing/how_it_works'); ?>

        <?php require_once view('front/landing/about_us'); ?>

        <!-- <?php require_once view('front/landing/contact_us'); ?> -->

    </main> 
    
    <div class="b-solid border border-r-0 b-color-sec-200 mt-10">

       <?php require_once view('front/landing/footer'); ?>

    </div>

    <?php require_once view('front/bottomNav'); ?>

</body>

<?php require_once view('includes/footer'); ?>