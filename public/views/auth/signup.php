<?php require_once view('includes/header'); ?>
    <body>
        <main class="bg-img  ls-wide">
            <div class="w-full h-screen glass_1">
                <div class="w-10/12 m-0-auto ">
        
                <?php require_once view('auth/nav'); ?>
        
                    <form id="signup" action="signup" method="post" class="w-5/12  m-0-auto 
                    py-8 glass_2  shadow-2">
                        <div class="txt-h-c">
                            <h3 class="py-2">Create Account</h3>
                            <p class="fw-500">Hey, enter your details to create an account</p>
                        </div>
        
                        <div class="w-9/12 m-0-auto py-6">
                            <input type="text" name="fullName" placeholder="Enter your full name"
                            class="w-full bg-transparent  border b-solid b-color-3-300 ounded
                            focus:b-color-pri py-3 px-4 mb-5">
        
                            <input type="email" name="email" placeholder="Enter email address "
                            class="w-full bg-transparent  border b-solid b-color-3-300 ounded
                            focus:b-color-pri py-3 px-4 mb-5">
                            
                            <input type="phone" name="phone" placeholder="Enter phone number "
                            class="w-full bg-transparent border b-solid b-color-3-300 ounded
                            focus:b-color-pri py-3 px-4 mb-5">
        
                            <input type="password" name="password" placeholder="Enter password"
                            class="w-full bg-transparent  border b-solid b-color-3-300 ounded
                            focus:b-color-pri py-3 px-4 mb-3">
                             
                            <input type="password" name="confirmPassword" placeholder="Confirm password"
                            class="w-full bg-transparent  border b-solid b-color-3-300 ounded
                            focus:b-color-pri py-3 px-4">
        
                            <p id="response" class="w-full txt-h-c py-4"></p>
        
                            <button type="button" id="signup_btn" class="w-full bgColor-pri border-0 color-1 fs-md fw-600 rounded
                            hover:bgColor-pri-500 py-3 px-4 pointer" 
                            onclick="(new Ajax).form('signup')
                                    .loader('signup_btn')
                                    .flush('response')
                                    .send();">
                              Sign Up
                            </button>
                        </div>
        
                        <div class="w-full txt-h-c"> 
                            Already a member? <a href="/signin" class="color-pri"> Login </a>
                        </div>
        
                    </form>
                </div>

            <div>
        </main>
    </body>
<?php require_once view('includes/footer'); ?>
