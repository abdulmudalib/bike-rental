<?php require_once view('includes/header'); ?>

<body>

    <main class="w-full fx">
       <?php require_once view('back/sidebar'); ?>

        <div class="w-10/12">

            <?php require_once view('back/topNav'); ?>

            <div class="w-full  px-10 pt-4">
                 <div class="fs-md fx fx-i-c color-pri">
                    <i class="fal fa-2x fa-users mr-2"></i>
                    <h2 class=''> Customers Listing</h2>
                    <!-- <a href="/new_user" class='py-2 h-16 px-4 pointer bgColor-pri-800 color-1 
                    rounded fw-600'> 
                        Add New user 
                    </a> -->
                 </div>
            </div>

            <div class="w-full h-auto fx fx-j-btw fx-wrap pb-16">

                    
                <div class="w-11/12 m-0-auto h-auto fs-md">

                    <table class="w-full table-auto border-collapse bgColor-trans m-0-auto mt-2 ">

                        <thead>

                            <tr>
                                <th class="px-2 py-2 h-16 color-pri"> Photo </th>
                                <th class="px-2 py-2 h-16 color-pri"> Full Name </th>
                                <th class="px-2 py-2 h-16 color-pri "> Email </th>
                                <th class="px-2 py-2 h-16 color-pri"> Type </th>
                                <th class="px-2 py-2 h-16 color-pri"> Status </th>
                                <th class="px-2 py-2 h-16 color-pri"> Joined </th>
                                <th class="px-2 py-2 h-16 color-pri"> Action </th>

                            </tr>

                        </thead>

                        <tbody class="txt-h-c">

                            <?php foreach ($users as $user): ?>
                                <tr class="bgColor-sec-200 border-0 shadow-2 hover:bgColor-sec-100">
                                    <td class="px-2 py-2 fx fx-j-c">
                                        <div class="w-12 h-12 bgColor-pri rounded-full">
                                            <img src="<?= images_path('users/' . $user->photo) ?>" alt="admin pic"
                                              class="w-full h-full rounded-full cover">
                                        </div>
                                    </td>
                                    <td class="px-2 py-2"> <?= $user->fullName ?> </td>
                                    <td class="px-2 py-2"> <?= $user->email ?> </td>
                                    <td class="px-2 py-2"> <?= $user->type ?> </td>
                                    <td class="px-2 py-2"> <?= $user->status ?> </td>
                                    <td class="px-2 py-2"> <?= $user->created_at ?> </td>

                                    <td class="px-2 h-16 fw-600">  
                                            <a href="profile/<?= $user->id ?>" 
                                            class="py-2 h-16 px-3 bgColor-pri pointer 
                                             mr-2 color-1-800 hover:bgColor-pri-800">
                                                profile 
                                            </a>
                                 
                                        </td>
                                </tr>

                            <?php endforeach; ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

            <?php require_once view('back/bottomNav'); ?>

        </div>
        
    </main>

</body>

<?php require_once view('includes/footer'); ?>