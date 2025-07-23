<?php require_once view('includes/header'); ?>

<body>

    <main class="w-full fx">
       <?php require_once view('back/sidebar'); ?>

        <div class="w-10/12">

            <?php require_once view('back/topNav'); ?>

            <div class="w-full  px-10 pt-4">
                 <div class="fs-lg fx fx-i-c color-pri">
                    <i class="fal fa-ticket fa-2x mr-2"></i>
                    <h2 class=''> Bookings Listing</h2>
                    <!-- <a href="/new_bike" class=' py-4 px-4 pointer bgColor-pri-800 color-1 
                    rounded fw-600'> 
                        Add New Bike 
                    </a> -->
                 </div>
            </div>

            <div class="w-full h-auto fx fx-j-btw fx-wrap pb-16">

                    
                <div class="w-11/12 m-0-auto h-auto fs-md">

                    <table class="w-full table-auto border-collapse bgColor-trans m-0-auto mt-2 ">

                        <thead>

                            <tr>
                                <td class="py-2 color-pri"> MotorBike </td>
                                <td class="py-2 px-2  color-pri "> Client </td>
                                <td class=" py-2 px-2  color-pri"> Pick UP Date </td>
                                <td class=" py-2 px-2  color-pri"> Return Date  </td>
                                <td class=" py-2 px-2  color-pri"> Day/s </td>
                                <td class=" py-2 px-2  color-pri"> Total Cost </td>
                                <td class=" py-2 px-2  color-pri"> transaction ID  </td>
                                <td class=" py-2 px-2  color-pri"> Phone No  </td>
                                <td class=" py-2 px-2  color-pri"> Status  </td>

                            </tr>

                        </thead>

                        <tbody class="t">

                            <?php foreach ($bookings as $booking): ?>

                                <tr class="bgColor-sec-200 border-0 shadow-2 hover:bgColor-sec-100">

                                    <td class="px-2 py-2  fx-j-c"> 
                                        <div class="w-16 h-16">
                                            <img class="contain w-full h-full contain rounded-1"
                                            src="<?= images_path("/bikes/{$booking->bike->photo}") ?>"
                                            alt="bike">
                                        </div>
                                    </td>

                                 
                                    <td class="px-2 py-4 fx fx-i-c"> 
                                       <a class="" href="profile/<?= $booking->user->id ?>">
                                            <div class="w-12 h-12  bgColor-pri rounded-full">
                                                <img src="<?= images_path('users/' . $booking->user->photo) ?>"
                                                 alt="admin pic" class="w-full h-full rounded-full cover">
                                            </div>
                                           
                                        </a>
                                    </td>
                                    <td class="px-2  py-4">  <?= date("Y-M-D", strtotime($booking->pick_up_date))?> </td>
                                    <td class="px-2  py-4">  <?= date("Y-M-D", strtotime($booking->return_date))?> </td>
                                    <td class="px-2  py-4">  <?= $booking->total_hours ?> day/s </td>
                                    <td class="px-2  py-4"> Ksh <?= $booking->total_cost ?> </td>
                                    <td class="px-2  py-4">  <?= $booking->transaction_code ?> </td>
                                    <td class="px-2  py-4">  <?= $booking->phone_no ?> </td>
                                        <td class="px-2 py-4 fw-600  color-<?= $booking->color() ?> ">  
                                        
                                            <?php if($booking->status): ?>

                                            <span class=""> <?= $booking->status ?> </span>

                                            <?php endif; ?>

                                            <a href="bookings/<?= $booking->id ?>" 
                                            class=" py-2 px-3 pointer bgColor-<?= $booking->color() ?>
                                             ml-2 color-1-800 hover:bgColor-sec-800">
                                                Change 
                                            </a>

                                        </td>

                                </tr>
                            
                        </tbody>

                        <?php endforeach; ?>

                    </table>

                </div>

            </div>

        </div>

            <?php require_once view('back/bottomNav'); ?>

        </div>
        
    </main>

</body>

<?php require_once view('includes/footer'); ?>



   <!-- <div id="myModal" class="modal fixed hide w-full h-screen bgColor-2-800">
                                                <div class="bgColor-2 shadow-2 modal-content relative h-56 w-4/12">
                                                    <span onclick="closeModal();" class="close fr w-bold fa-2x hover:bgColor-pri"> 
                                                    &times;
                                                    </span>
                                                    hello
                                                </div>
                                            </div> -->