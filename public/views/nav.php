<nav class="w-full h-auto ">
    <div class="w-10/12 m-0-auto fx fx-j-btw fx-i-c color-pri-800 h-20 fs-md fw-600 ">
        <h1 class=""> <i class="fa fa-motorcycle"></i>  <?= app_name(); ?></h1>
    
        <ul class="list-none fx fx-j-btw w-5/12">

        <li class="pointer">
              <a href="/" class="color-pri"> 
                <i class="fa fa-home"></i>  Home 
            </a>
          </li>

          <li class="pointer">
              <a href="/bikes" class="color-pri"> 
                <i class="fa fa-motorcycle"></i> Motorcycle Listing
            </a>
          </li>

            <li class="pointer">
              <a href="/" class="color-pri"> 
                <i class="fa fa-info-circle"></i> About Us
            </a>
          </li>
<!-- 
          <li class="pointer">
              <a href="/bikes" class="color-pri"> 
                <i class="fa fa-users"></i>  Our Team
            </a>
          </li> -->

          <!-- <li class="pointer">
              <a href="/" class="color-pri"> 
                <i class="fa fa-phone"></i>  Contact Us
            </a>
          </li> -->

        </ul>
    
        <?php if (!auth()->check()): ?>
    
        <div class="fs-md ">
            <a href="/signin" class="pr-6"> 
                Sign In
            </a>
            <a href="/signup"  class="bgColor-pri color-1 py-2 
            px-3 rounded fs-sm">
                Create Account
            </a>
        </div>
    
        <?php else: ?>
    
            <div class="fs-md fx">
            <a href="/profile" class="pr-6 fx"> 
              <div class="w-8 h-8 bgColor-pri rounded-full mr-2 p-1">
               <img src="<?= images_path('users/' . auth()->user()->photo) ?>" alt="admin pic"
               class="w-full h-full rounded-full cover">
              </div> 
              <h3> <?= auth()->user()->fullName ?> </h3>
            </a>
            <a href="/logout"  class="bgColor-pri color-1 py-2 
            px-3 rounded fs-sm">
               <i class="fa fa-sign-out"> </i> Sign Out
            </a>
         </div>
    
        <?php endif; ?>
    </div>
</nav>