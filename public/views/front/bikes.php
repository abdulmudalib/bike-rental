<?php require_once view('includes/header'); ?>

<body>
    <main class="">
    <?php require_once view('front/topNav'); ?>
    <div class="w-10/12 m-0-auto">
            <div class="w-10/12 m-0-auto h-auto">
                <div class="w-8/12">
                    <h1 class="pt-5 pb-2 px-4 fw-black">
                    Best Trips With Our Best Bikes. Make Your Choice.
                    </h>
                </div>
                <input type="text" name="fullName" class="w-full bg-transparent 
                border b-solid b-color-sec-300 rounded focus:b-color-pri py-3 
                px-2 mb-5" placeholder="Search by Bike Model or Name" 
                onkeyup="(new Ajax).route('search_bikes').data({search_key: this.value})
                                   .container('bikes')
                                   .send();">

                <div id="bikes" class="w-full h-auto fx fx-j-btw fx-wrap pb-16">

                    <?php require_once view('front/includes/bikes'); ?>

                </div>
            </div>

        </div>
            
    <div class="b-solid border border-r-0 b-color-sec-200 mt-10">

       <?php require_once view('front/landing/footer'); ?>

    </div>

    <?php require_once view('front/bottomNav'); ?>
    </main>
</body>

<?php require_once view('includes/footer'); ?>