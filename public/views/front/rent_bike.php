<?php require_once view('includes/header'); ?>

<body>
    <main class="">
    <?php require_once view('front/topNav'); ?>
    <div class="w-10/12 m-0-auto">
            <div class="w-10/12 m-0-auto h-auto">
                <div class="w-full h-auto fx fx-wrap">

                     <div class="w-1/2 ">
                        <form id="rent_form" action="/rent_bike" class="w-10/12 m-0-auto shadow-2 mt-5">
                           
                            <div class="w-10/12 m-0-auto py-6 ">
                                <h1 class="fw-black">
                                    Make Your Ride.
                                </h1>
                                <p class="fs-md pb-4"> Rent a bike today with awesome rental fees.</p>
                                <div id="dates" class="">
                                    <input type="hidden" name="bike_id" value="<?= $bike->id ?>">
                                    <input type="hidden" name="user_id" value="<?= auth()->id() ?>">
                                    <input type="hidden" name="status" value="pending">

                                    <label for="bike_name" class="fw-800" > Bike Model </label> 
                                    <input type="text" name="bike_name" value="<?= $bike->bike_name ?>"
                                    class="w-full bg-transparent border b-solid b--300 rounded
                                    focus:b-color-pri py-3 px-4 mt-2 mb-5" disabled>
    
                                    <label for="price" class="fw-800" > Price/day </label> 
                                    <input id="price" type="text" name="price" value="Ksh <?= $bike->price ?>"
                                    class="w-full bg-transparent border b-solid b--300 rounded
                                    focus:b-color-pri py-3 px-4 mt-2 mb-5" disabled>
    
                                    <div class="fx">
                                        <div class="w-1/2 px-1">
                                            <label for="pick_up_date" class="fw-800"> Pick Up Date </label> 
                                            <input id="Date" type="date"  min="<?= date("Y-m-d") ?>" name="pick_up_date" 
                                            class="w-full bg-transparent border b-solid b--300 rounded
                                            focus:b-color-pri py-3 px-4 mt-2 mb-5" >
                                        </div>
                                        <div class="w-1/2 px-1">
                                            <label for="return_date" class="fw-800"> Return Date </label> 
                                            <input id="Date1" type="date" min="<?= date("Y-m-d") ?>" name="return_date"
                                            class="w-full bg-transparent border b-solid b--300 rounded
                                            focus:b-color-pri py-3 px-4 mt-2 mb-5">
                                        </div>
                                        
                                    </div>

                                    <p id="response" class="w-full txt-h-c"></p>

                                    <button id="Continue_to_checkout" type="button" class="w-full bgColor-pri border-0 color-1 fs-md fw-600 rounded
                                    hover:bgColor-pri-800 py-4 px-4 pointer mt-4 mb-4" 
                                    onclick="">
                                    Continue to checkout
                                    </button>

                                </div>

                                <div id="payment" class="hide">
                                    <label for="total_hrs" class="fw-800" > <span> Day/s </span> </label>
                                    
                                    <input id="total_hrs01" type="hidden" name="total_hours" value="">

                                    <input id="total_hrs" type="text" name="" value=" 6 days "
                                    class="w-full bg-transparent border b-solid b--300 rounded
                                    focus:b-color-pri py-3 px-4 mt-2 mb-5" disabled>

                                    <label for="total_cost" class="fw-800" > Total Amount (KSH)</label> 

                                    <input id="total_cost01" type="hidden" name="total_cost" value="">

                                    <input id="total_cost" type="text" name="" value=" Ksh 650 "
                                    class="w-full bg-transparent border b-solid b--300 rounded
                                    focus:b-color-pri py-3 px-4 mt-2 mb-5" disabled>

                                    <label for="transaction_code" class="fw-800" > Phone Number </label> 
                                    <input type="number" name="phone_no" 
                                    class="w-full bg-transparent border b-solid b--300 rounded
                                    focus:b-color-pri py-3 px-4 mt-2 mb-5" placeholder ="eg: 0701564753">

                                    <label for="transaction_code" class="fw-800" > Transaction Code </label> 
                                    <input type="text" name="transaction_code" 
                                    class="w-full bg-transparent border b-solid b--300 rounded
                                    focus:b-color-pri py-3 px-4 mt-2 mb-5" placeholder ="eg: MJE091GGDA">

                                    <p id="response1" class="w-full txt-h-c"></p>

                                    <div class="fx">
                                        <div class="w-1/2 px-1">
                                            <button id="Go_back" type="button" class="w-full bgColor-danger border-0 color-1 fs-md fw-600 rounded
                                            hover:bgColor-pri-800 py-4 px-4 pointer mt-4 mb-4" 
                                            onclick="">
                                            Go Back
                                            </button>
                                        </div>
                                        <div class="w-1/2 px-1">
                                            <button id="rent_form_btn" type="button" class="w-full bgColor-pri border-0 color-1 fs-md fw-600 rounded
                                            hover:bgColor-pri-800 py-4 px-4 pointer mt-4 mb-4" 
                                                onclick="(new Ajax).form('rent_form')
                                               .loader('rent_form_btn')
                                               .flush('response1')
                                               .send();">
                                            Checkout
                                            </button>   
                                        </div>
                                        
                                    </div>

                                </div>
                      
                            </div>
            
                        </form>
        
                     </div>
                      <div class="w-1/2 mt-5">
                           <div class="w-full h-auto m-0-auto">
                                <img class="w-full h-full contain rounded-1"
                                src="<?= images_path("/bikes/{$bike->photo}") ?>"
                                alt="bike">
                            </div>
                      </div>
                </div>

            </div>
        </div>
    <?php require_once view('front/bottomNav'); ?>
    </main>
    
    <script>
    $("#Go_back").click(function()
    {
        $("#dates").show('slow');
        $("#payment").hide('slow');
        $("#response1").html('');

    });

    $("#Continue_to_checkout").click(function()
    {
        if ($("#Date").val() && $("#Date1").val())
        {
            if (new Date($("#Date").val()).getTime() < new Date($("#Date1").val()).getTime())
            {
                // var diff = Math.abs(new Date($("#Date").val()).getTime()- new Date($("#Date1").val()).getTime());
                const date1 = new Date($("#Date").val());
                const date2 = new Date($("#Date1").val());
                const diffTime = Math.abs(date2 - date1);
                const diff = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

                // var hrs =  msToTime(diff);
                 var hrs =  diff;

                // if (hrs == 0) 
                // {
                //     $("#response").html(
                //         `<div class='w-full bg-200 color-danger p-2'>
                //         Error: Minimum time allowed is 1hr.
                //        </div>`
                //     );  

                // } else {
                    $("#total_hrs").val(hrs);
                    $("#total_cost").val(hrs *  $("#price").val().replace('Ksh ',''));
                
                    $("#total_hrs01").val(hrs);
                    $("#total_cost01").val(hrs *  $("#price").val().replace('Ksh ',''));

                    $("#dates").hide('slow');
                    $("#payment").show('slow');
                // }

            } else {

                $("#response").html(`
                    <div class='w-full bg-200 color-danger p-2'>
                    Invalid date: Pick up date should be less than
                    return date
                    </div> `);

            }

        } else {

            $("#response").html(
                `<div class='w-full bg-200 color-danger p-2'>
                   Error: Booking date is required
                </div>`);

        }

    });

    function msToTime(duration) 
    {
        minutes = Math.floor((duration / (1000 * 60)) % 60),
        hours = Math.floor((duration / (1000 * 60 * 60)) % 24);
    
        hours = (hours < 10) ? "0" + hours : hours;
        // minutes = (minutes < 10) ? "0" + minutes : minutes;
        
        return hours;

        // return hours + ":" + minutes;
   }

    </script>
</body>

<?php require_once view('includes/footer'); ?>