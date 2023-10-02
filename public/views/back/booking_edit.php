<?php require_once view('includes/header'); ?>

<body>

    <main class="w-full fx">
       <?php require_once view('back/sidebar'); ?>

        <div class="w-10/12">

            <?php require_once view('back/topNav'); ?>

            <div class="w-full  px-10 pt-8">
                 <div class="fs-lg fx fx-i-c color-pri pl-4">
                    <i class="fal fa-ticket fa-2x mr-2"></i>
                    <h2 class=''>Booking Edit </h2>
                    <!-- <a href="/new_user" class=' py-4 px-4 pointer bgColor-pri-800 color-1 
                    rounded fw-600'> 
                        Add New user 
                    </a> -->
                 </div>
            </div>

            <form id="booking_edit"  action="booking_edit"  method="post" class="w-full h-auto fx mt-4">
                <div class="w-5/12 h-auto fx fx-j-btw fx-wrap pb-16 m-0-auto">

                <input type="hidden" name="id" value="<?= $booking->id ?>">
                
                    <div class="w-11/12 fw-600 mb-2">
                    <label for="reg_no" class="block py-2 fs-sm "> MotorBike </label>
                      
                        <div class="fx fx-i-c">
                            <div class="bgColor-sec-200 py-4 px-4 mr-4">
                                <input class="w-full py-4 px-4  rounded b-color-sec-300 border-2
                                focus:b-color-sec outline-0" id="fileInput"
                                type="text" value="<?= $booking->bike->bike_name ?>" name="" disabled>
                            </div>
                            <div class="w-40 h-20 rounded fx fx-i-c fx-j-c">
                                <img id="previewImg" src="<?= images_path('bikes/' . $booking->bike->photo ) ?>" alt="admin pic"
                                  class="w-full h-full rounded contain">
                            </div>
                           
                        </div>

                    </div>

                   <div class="w-11/12 fw-600 mb-2">

                        <label for="reg_no" class="block py-2 fs-sm ">Client Name </label>

                        <div class="bgColor-sec-200 py-4 px-4 ">
                            <input class="w-full py-4 px-4  rounded b-color-sec-300 border-2
                            focus:b-color-sec outline-0"
                            type="text" value="<?= $booking->user->fullName ?>"   name="" disabled>
                        </div>

                    </div>

                    <div class="w-11/12 fw-600 mb-2">

                        <label for="reg_no" class="block py-2 fs-sm "> Pick UP Date	 </label>

                        <div class="bgColor-sec-200 py-4 px-4 ">
                            <input class="w-full py-4 px-4  rounded b-color-sec-300 border-2
                            focus:b-color-sec outline-0"
                            type="text" value="<?= $booking->pick_up_date ?>"   name="" disabled>
                        </div>

                    </div>
                    
                </div>

                <div class="w-5/12 h-auto pb-16 m-0-auto">

                    <div class="w-11/12 fw-600 ">

                        <label for="reg_no" class="block py-2 fs-sm ">  Return Date </label>

                        <div class="bgColor-sec-200 py-4 px-4 ">
                            <input class="w-full py-4 px-4  rounded b-color-sec-300 border-2
                            focus:b-color-sec outline-0"
                            type="text" name="phone" value="<?= $booking->return_date ?>" >
                        </div>

                    </div>

                    <div class="w-11/12 fw-600 ">

                        <label for="reg_no" class="block py-2 fs-sm ">  STATUS </label>

                        <div class="bgColor-sec-200 py-4 px-4 ">
                            <select class="w-full py-4 px-4  rounded b-color-sec-300 border-2
                            focus:b-color-sec outline-0 bgColor-inherit color-1"
                            type="text" name="status" value="<?= $booking->status ?>" >
                                <option value="<?= $booking->status ?>"> CURRENT: <?= $booking->status ?> </option>
                                <option class="bgColor-2 color-warning" value="pending"> pending </option>
                                <option class="bgColor-2 color-success" value="accepted"> accepted </option>
                                <option class="bgColor-2 color-danger" value="rejected"> rejected </option>
                            </select>
                        </div>

                    </div>

                    
                    <div class="w-11/12 fw-600 ">

                        <label for="reg_no" class="block py-2 fs-sm ">  REMARKS </label>

                        <div class="bgColor-sec-200 py-4 px-4 ">
                            <textarea class="w-full h-24 py-4 px-4  rounded b-color-sec-300 border-2
                            focus:b-color-sec outline-0 bgColor-inherit color-1" 
                            name="remarks" value="<?= $booking->remarks ?>" required> <?= $booking->remarks ?? 'Your Comments' ?></textarea>
                        </div>

                    </div>

                    <p id="response" class="w-full txt-h-c py-4"></p>
        
                    <button id="booking_edit_btn" type="button" class="w-11/12 
                    bgColor-pri border-0 color-1 fs-md fw-600 rounded 
                    hover:bgColor-pri-500 py-3 px-4 pointer" 
                    onclick="(new Ajax).form('booking_edit')
                            .loader('booking_edit_btn')
                            .flush('response')
                            .send();">
                      Submit 
                    </button>
                </div>
            </form>

        </div>

            <?php require_once view('back/bottomNav'); ?>

        </div>
        
    </main>

</body>

<?php require_once view('includes/footer'); ?>