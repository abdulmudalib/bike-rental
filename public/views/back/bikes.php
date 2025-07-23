<?php require_once view('includes/header'); ?>

<body>

    <main class="w-full fx">
       <?php require_once view('back/sidebar'); ?>

        <div class="w-10/12">

            <?php require_once view('back/topNav'); ?>

            <div class="w-full  px-10 pt-4">
                 <div class="fx fx-j-btw">
                    <h2 class='fs-xl fx fx-i-c color-pri'> 
                        <i class="fa fa-motorcycle mr-2"></i> Bikes Listing
                    </h2>
                    <a href="/new_bike" class=' py-2 px-4 pointer bgColor-pri-800 color-1 
                    rounded fw-600'> 
                        Add New Bike 
                    </a>
                 </div>
            </div>

            <div class="w-full h-auto fx fx-j-btw fx-wrap pb-16">

                    
                <div class="w-11/12 m-0-auto h-auto fs-md">

                <table class="w-full table-auto border-collapse bgColor-trans m-0-auto mt-2 ">

                        <thead>

                            <tr>
                                <th class="px-2  py-2 color-pri "> Photo </th>
                                <th class="px-2  py-2 color-pri">Name</th>
                                <th class="px-2  py-2 color-pri">Brand</th>
                                <th class="px-2  py-2 color-pri">Model</th>
                                <th class="px-2  py-2 color-pri">Price </th>
                                <th class="px-2  py-2 color-pri">Action </th>

                            </tr>

                        </thead>

                        <tbody class="txt-h-c">

                            <?php foreach ($bikes as $bike): ?>

                                <tr class="bgColor-sec-200 border-0 shadow-2 hover:bgColor-sec-100">

                                    <td class="fx fx-j-c"> 
                                        <div class="w-16 h-16 py-1">
                                            <img class="w-full h-full contain rounded-1"
                                            src="<?= images_path("/bikes/{$bike->photo}") ?>"
                                            alt="bike">
                                        </div>
                                    </td>

                                    <td class="px-2 py-2"> <?= $bike->bike_name ?> </td>
                                    <td class="px-2  py-2">  <?= $bike->brand ?> </td>
                                    <td class="px-2  py-2">  <?= $bike->model ?> </td>
                                    <td class="px-2  py-2"> ksh <?= $bike->price ?> </td>
                                    
                                    <td class="px-2  py-2 fw-600">  
                                        <a href="/edit_bike/<?= $bike->id ?>" 
                                        class=" py-2 px-3 bgColor-pri pointer 
                                         mr-2 color-1-800 hover:bgColor-pri-800">
                                            <i class="fa fa-edit"> </i> Edit
                                        </a>
                                        <a href="/delete_bike/<?= $bike->id ?>" 
                                        class=" py-2 px-3 bgColor-danger pointer 
                                         color-1-800 hover:bgColor-3">
                                            <i class="fa fa-trash"> </i> Delete
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