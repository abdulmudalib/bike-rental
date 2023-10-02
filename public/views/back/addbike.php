<?php require_once view('includes/header'); ?>

<body>

    <main class="w-full fx">
       <?php require_once view('back/sidebar'); ?>

        <div class="w-10/12">
            <?php require_once view('back/topNav'); ?>

                <div class="w-full px-10 pt-4">
                <h2 class='fs-xl fx fx-i-c color-pri ml-12'> 
                        <i class="fa fa-motorcycle mr-2"></i> Add new Bike
                    </h2>
                    <form id="add_bike" action="add_bike"
                    method="post" class="w-full h-auto fx mt-4">
                  <div class="w-5/12 h-auto fx fx-j-btw fx-wrap pb-16 m-0-auto">
                
                    <div class="w-11/12 fw-600 mb-2">
                    <label for="reg_no" class="block py-2 fs-sm "> IMAGE </label>
                      
                        <div class="fx fx-i-c">
                            <div class="bgColor-sec-200 py-4 px-4 mr-4">
                                <input class="w-full py-4 px-4  rounded b-color-sec-300 border-2
                                focus:b-color-sec outline-0" id="fileInput"
                                type="file"  name="photo" >
                            </div>
                            <div class="w-40 h-20 rounded fx fx-i-c fx-j-c">
                                <img id="previewImg" src="" 
                                  class="w-full h-full rounded contain">
                            </div>
                           
                        </div>

                    </div>

                   <div class="w-11/12 fw-600 mb-2">

                        <label for="reg_no" class="block py-2 fs-sm "> MOTORBIKE NAME </label>

                        <div class="bgColor-sec-200 py-4 px-4 ">
                            <input class="w-full py-4 px-4  rounded b-color-sec-300 border-2
                            focus:b-color-sec outline-0"
                            type="text"   name="bike_name" >
                        </div>

                    </div>

                    <div class="w-11/12 fw-600 mb-2">

                        <label for="reg_no" class="block py-2 fs-sm "> Number Plate </label>

                        <div class="bgColor-sec-200 py-4 px-4 ">
                            <input class="w-full py-4 px-4  rounded b-color-sec-300 border-2
                            focus:b-color-sec outline-0"
                            type="text"    name="bike_number" >
                        </div>

                    </div>
                    
                </div>

                <div class="w-5/12 h-auto pb-16 m-0-auto">
                    <div class="w-11/12 fw-600 ">

                        <label for="reg_no" class="block py-2 fs-sm ">  BRAND </label>

                        <div class="bgColor-sec-200 py-4 px-4 ">
                            <input class="w-full py-4 px-4  rounded b-color-sec-300 border-2
                            focus:b-color-sec outline-0"
                            type="text" name="brand"  >
                        </div>

                    </div>
                    <div class="w-11/12 fw-600 ">

                        <label for="reg_no" class="block py-2 fs-sm ">  MODEL </label>

                        <div class="bgColor-sec-200 py-4 px-4 ">
                            <input class="w-full py-4 px-4  rounded b-color-sec-300 border-2
                            focus:b-color-sec outline-0"
                            type="text" name="model"  >
                        </div>

                    </div>
                    
                   <div class="w-11/12 fw-600 ">

                        <label for="reg_no" class="block py-2 fs-sm ">  PRICE </label>

                        <div class="bgColor-sec-200 py-4 px-4 ">
                            <input class="w-full py-4 px-4  rounded b-color-sec-300 border-2
                            focus:b-color-sec outline-0"
                            type="number" name="price"  >
                        </div>

                    </div>

                    <p id="response" class="w-full txt-h-c py-4"></p>
        
                    <button id="add_bike_btn" class="bgColor-pri
                    rounded-full px-5 py-3 color-1 mt-5 border-0 fw-500
                    hover:bgColor-pri-700 outline-0 pointer rounded fs-sm"
                    type="button" name="button"
                    onclick="(new Ajax).form('add_bike')
                                    .loader('add_bike_btn')
                                    .flush('response')
                                    .send();">
                     Submit Bike
                    </button>
                    
                </div>
     
                    </form>    

                </div>

            <?php require_once view('back/bottomNav'); ?>
        </div>
    </main>

</body>

<?php require_once view('includes/footer'); ?>