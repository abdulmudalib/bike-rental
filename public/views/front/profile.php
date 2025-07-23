<?php require_once view('includes/header'); ?>

<body>
    <main class="">
    <?php require_once view('front/topNav'); ?>
        <div class=" m-0-auto fx mt-5 pr-4">
            <div class="w-3/5 m-0-auto h-auto bgColor-">

                <!-- <div class="w-24 h-24 bgColor-pri m-0-auto mb- rounded-full">

                </div> -->

                <form id="profile_update" action="profile_update" method="post" class="rounded mt-">
                    
                        <div class="w-9/12 m-0-auto ">

                            <h3 class="pb-2"> Personal Info </h3>

                            <label for="fullname" class="block py-2 fs-md ">My Photo:</label>

                            <div class="fx fx-i-c">
                            <div class="bgColor-sec-200 py-2 px-2 mr-4">
                                <input class="w-full py-2 px-2  rounded b-color-sec-300 border-2
                                focus:b-color-sec outline-0" id="fileInput"
                                type="file" value="<?= $user->photo ?>" name="photo">
                            </div>
                            <div class="w-20 h-20 bgColor-pri rounded-full fx fx-i-c fx-j-c">
                                <img id="previewImg" src="<?= images_path('users/' . $user->photo ) ?>" alt="admin pic"
                                  class="w-full h-full rounded-full cover">
                            </div>
                           
                           </div>
                             
                          <label for="fullname" class="block py-2 fs-md ">Full Name:</label>

                            <input type="text" name="fullName" value="<?= $user->fullName  ?>"
                            class="w-full bg-transparent  border b-solid b-color-sec-300 rounded
                            focus:b-color-pri py-3 px-2 mb-5 " >

                            <label for="email" class="block py-2 fs-md ">Email Address:</label>

                            <input type="email" name="email"  value="<?= $user->email  ?>"
                            class="w-full bg-transparent  border b-solid b-color-sec-300 rounded
                            focus:b-color-pri py-3 px-2 " >

                        </div>
                            
                        <div class="w-9/12 m-0-auto py-4">
        
                            <h3 class="py-4"> Security Settings: Password Update.</h3>

                            <input type="password" name="password" placeholder="New Password"
                            class="w-full bg-transparent  border b-solid b-color-sec-300 rounded
                            focus:b-color-pri py-3 px-2 mb-3">
                             
                            <input type="password" name="confirmPassword" placeholder="Confirm New password"
                            class="w-full bg-transparent  border b-solid b-color-sec-300 rounded
                            focus:b-color-pri py-3 px-4">
        
                            <p id="response" class="w-full txt-h-c py-4"></p>
        
                            <button type="button" id="profile_update_btn" class="w-7/12 bgColor-pri border-0  fs-md fw-600 rounded
                            hover:bgColor-sec-100 py-3 px-2 pointer shadow-1 color-1" 
                            onclick="(new Ajax).form('profile_update')
                                    .loader('profile_update_btn')
                                    .flush('response')
                                    .send();">
                              Submit Changes
                            </button>
                        </div>
        
                    </form>
            </div>

            <div class="w-4/5 m-0-auto h-auto fs-xs mt-8">
            <table class="w-full table-auto border-collapse bgColor-trans m-0-auto mt-2 ">

                        <thead>

                            <tr>
                                <td class="py-2 px-2  color-pri"> MotorBike Photo </td>
                                <td class="py-2 px-2  color-pri "> MotorBike Name  </td>
                                <td class=" py-2 px-2  color-pri"> Pick UP Date </td>
                                <td class=" py-2 px-2  color-pri"> Return Date  </td>
                                <td class=" py-2 px-2  color-pri"> Total Day/s </td>
                                <td class=" py-2 px-2  color-pri"> Total Cost </td>
                                <td class=" py-2 px-2  color-pri"> transaction ID  </td>
                                <td class=" py-2 px-2  color-pri"> Status  </td>

                            </tr>

                        </thead>

                        <tbody class="t">

                            <?php foreach ($user->bookings as $booking): ?>

                                <tr class="bgColor-sec-200 border-0 shadow-2 hover:bgColor-sec-100">

                                    <td class="px-2 py-2  fx-j-c"> 
                                        <div class="w-16 h-16">
                                            <img class="contain w-full h-full contain rounded-1"
                                            src="<?= images_path("/bikes/{$booking->bike->photo}") ?>"
                                            alt="bike">
                                        </div>
                                    </td>

                                 
                                    <!-- <td class="px-2 py-4 fx fx-i-c"> 
                                       <a class="" href="profile/<?= $booking->user->id ?>">
                                            <div class="w-12 h-12  bgColor-pri rounded-full">
                                                <img src="<?= images_path('users/' . $booking->user->photo) ?>"
                                                 alt="admin pic" class="w-full h-full rounded-full cover">
                                            </div>
                                           
                                        </a>
                                    </td> -->
                                    <td class="px-2  py-4">  <?= $booking->bike->brand .  $booking->bike->bike_name ?> </td>
                                    <td class="px-2  py-4">  <?= date("Y-M-D", strtotime($booking->pick_up_date))?> </td>
                                    <td class="px-2  py-4">  <?= date("Y-M-D", strtotime($booking->return_date))?> </td>
                                    <td class="px-2  py-4">  <?= $booking->total_hours ?> day/s </td>
                                    <td class="px-2  py-4"> Ksh  <?= $booking->total_cost ?> </td>
                                    <td class="px-2  py-4">  <?= $booking->transaction_code ?> </td>

                                        <td class="px-2 py-4 fw-600  color-<?= $booking->color() ?> ">  
                                        
                                            <?php if($booking->status): ?>

                                            <span class=""> <?= $booking->status ?> </span>

                                            <?php endif; ?>

                                            <a href="bookings/<?= $booking->id ?>" 
                                            class=" py-2 px-3 pointer bgColor-<?= $booking->color() ?>
                                             ml-2 color-1-800 hover:bgColor-sec-800">
                                                Open 
                                            </a>

                                        </td>

                                </tr>
                            
                        </tbody>

                        <?php endforeach; ?>

                    </table>

            </div>
        </div>
    <?php require_once view('front/bottomNav'); ?>
    </main>
</body>

<?php require_once view('includes/footer'); ?>