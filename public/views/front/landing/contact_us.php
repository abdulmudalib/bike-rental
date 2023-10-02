<div class="fx shadow-2 mb-10 rounded ">

    <div class="w-1/2">
                       
        <div class="w-full h-full m-0-auto">
            <img class="w-full h-full cover rounded-1"
            src="<?= images_path("/static/s02.webp") ?>"
            alt="bike">
        </div>
               
    </div> 

    <div class="w-1/2 m-0-auto mb-10">

        <form id="signin" action="/signin" class="w-11/12 m-0-auto 
        py-8 glass_2">
            <div class="txt-h-c">
                <h1 class="py-2"> Contact Us </h1>
            </div>
            
            <div class="w-9/12 m-0-auto">

            <label for="fullname" class="block py-2 fs-md ">Your Full Name:</label>

                <input type="text" name="fullName" value=""
                class="w-full bg-transparent  border b-solid b-color-sec-300 rounded
                focus:b-color-pri py-3 px-2 mb-5 " >

                <label for="email" class="block py-2 fs-md ">Enter Email Address:</label>

                <input type="email" name="email"  value=""
                class="w-full bg-transparent  border b-solid b-color-sec-300 rounded
                focus:b-color-pri py-3 px-2 " >

                <label for="email" class="block py-2 fs-md ">Message:</label>

                <textarea type="email" name="email"  placeholder="Write here"
                class="w-full bg-transparent  border b-solid b-color-sec-300 rounded
                focus:b-color-pri py-3 px-2 " > </textarea>
                            
                <p id="response" class="w-full txt-h-c py-4"></p>
        
                <button id="signin_btn" type="button" class="w-full bgColor-pri 
                border-0 color-1 fs-md fw-600 rounded hover:bgColor-pri-500 py-3
                 px-4 pointer" 
                onclick="(new Ajax).form('signin')
                                   .loader('signin_btn')
                                   .flush('response')
                                   .send();">
                            Send Now
                </button>
            </div>
        
        </form>
        
    </div>

</div>