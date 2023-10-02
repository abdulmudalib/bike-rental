<?php require_once view('includes/header'); ?>

<body>

    <main class="w-full fx">
       <?php require_once view('back/sidebar'); ?>

        <div class="w-10/12">

            <?php require_once view('back/topNav'); ?>

            <div class="w-full  px-10 pt-8">
                 <div class="fs-lg fx fx-i-c color-pri pl-4">
                    <i class="fal fa-user fa-2x mr-2"></i>
                    <h2 class=''> User Profile Edit </h2>
                    <!-- <a href="/new_user" class=' py-4 px-4 pointer bgColor-pri-800 color-1 
                    rounded fw-600'> 
                        Add New user 
                    </a> -->
                 </div>
            </div>

            <form id="profile_update"  action="profile_update"  method="post" class="w-full h-auto fx mt-4">
                <div class="w-5/12 h-auto fx fx-j-btw fx-wrap pb-16 m-0-auto">

                <input type="hidden" name="id" value="<?= $user->id ?>">
                
                    <div class="w-11/12 fw-600 mb-2">
                    <label for="reg_no" class="block py-2 fs-sm "> IMAGE </label>
                      
                        <div class="fx fx-i-c">
                            <div class="bgColor-sec-200 py-4 px-4 mr-4">
                                <input class="w-full py-4 px-4  rounded b-color-sec-300 border-2
                                focus:b-color-sec outline-0" id="fileInput"
                                type="file" value="<?= $user->photo ?>" name="photo">
                            </div>
                            <div class="w-20 h-20 bgColor-pri rounded-full fx fx-i-c fx-j-c">
                                <img id="previewImg" src="<?= images_path('users/' . $user->photo ) ?>" alt="admin pic"
                                  class="w-full h-full rounded-full cover">
                            </div>
                           
                        </div>

                    </div>

                   <div class="w-11/12 fw-600 mb-2">

                        <label for="reg_no" class="block py-2 fs-sm ">FULL NAME</label>

                        <div class="bgColor-sec-200 py-4 px-4 ">
                            <input class="w-full py-4 px-4  rounded b-color-sec-300 border-2
                            focus:b-color-sec outline-0"
                            type="text" value="<?= $user->fullName ?>"   name="fullName">
                        </div>

                    </div>

                    <div class="w-11/12 fw-600 mb-2">

                        <label for="reg_no" class="block py-2 fs-sm "> EMAIL </label>

                        <div class="bgColor-sec-200 py-4 px-4 ">
                            <input class="w-full py-4 px-4  rounded b-color-sec-300 border-2
                            focus:b-color-sec outline-0"
                            type="text" value="<?= $user->email ?>"   name="email">
                        </div>

                    </div>
                    
                </div>

                <div class="w-5/12 h-auto pb-16 m-0-auto">

                    <div class="w-11/12 fw-600 ">

                        <label for="reg_no" class="block py-2 fs-sm ">  PHONE </label>

                        <div class="bgColor-sec-200 py-4 px-4 ">
                            <input class="w-full py-4 px-4  rounded b-color-sec-300 border-2
                            focus:b-color-sec outline-0"
                            type="text" name="phone" value="<?= $user->phone ?>" >
                        </div>

                    </div>

                    <div class="w-11/12 fw-600 ">

                        <label for="reg_no" class="block py-2 fs-sm ">  STATUS </label>

                        <div class="bgColor-sec-200 py-4 px-4 ">
                            <input class="w-full py-4 px-4  rounded b-color-sec-300 border-2
                            focus:b-color-sec outline-0"
                            type="text" name="status" value="<?= $user->status ?>" >
                        </div>

                    </div>

                    <div class="w-11/12 fw-600 mb-2">

                        <label for="reg_no" class="block py-2 fs-sm "> PASSWORD </label>

                        <div class="bgColor-sec-200 py-4 px-4 ">
                            <input class="w-full py-4 px-4  rounded b-color-sec-300 border-2
                            focus:b-color-sec outline-0"
                            type="password"   name="password">
                        </div>

                    </div>
                    <p id="response" class="w-full txt-h-c py-4"></p>
        
                    <button id="profile_update_btn" type="button" class="w-11/12 
                    bgColor-pri border-0 color-1 fs-md fw-600 rounded 
                    hover:bgColor-pri-500 py-3 px-4 pointer" 
                    onclick="(new Ajax).form('profile_update')
                            .loader('profile_update_btn')
                            .flush('response')
                            .send();">
                      Submit Changes
                    </button>
                </div>
            </form>

        </div>

            <?php require_once view('back/bottomNav'); ?>

        </div>
        
    </main>

</body>

<?php require_once view('includes/footer'); ?>