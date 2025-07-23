<div class="w-2/12">
<div class="w-2/12 shadow-2 fixed" style="min-height:100vh;">
    
    <h1 class="py-3 color-pri fs- txt-h-c mt-8"> 
        <i class="fa fa-motorcycle"></i> <?= app_name() ?> 
    </h1>
    <div class="fx fx-j-c">

        <ul id="nav-list"  class="list-none fw-600 fs-lg mt-8">
    
            <a class="hover:color-pri nav-item " href="/dashborad">
                <li class="h-16 pointer  fs-xl"> 
                <i class="mr-2 fal fa-home"> </i>
                    Dashborad 
                </li>
            </a>
          
            <a class="nav-item hover:color-pri "href="/customers">
                <li class="h-16 pointer  fs-xl"> 
                <i class="mr-2 fal fa-users"> </i>
                    Customers 
                </li>
            </a>
            
            <a class="nav-item hover:color-pri "href="/bookings">
                <li class="h-16 pointer  fs-xl">
                <i class="mr-2 fal fa-ticket"> </i>
                    Bookings 
                </li>
            </a>
               
            <a class="nav-item hover:color-pri "href="/bikes">
                <li class="h-16 pointer  fs-xl"> 
                <i class="mr-2 fal fa-motorcycle"> </i>
                    Bikes 
                </li>
            </a>
            
            <!-- <a class="nav-item hover:color-pri "href="/transactions">
                <li class="h-16 pointer  fs-xl"> 
                <i class="mr-2 fal fa-exchange"></i>
                    Transactions
                 </li>
            </a> -->
             
             
            <ul class="mt-20">
            <li class="h-16 pointer  fs-xl"> 
            <a href="/profile" class="fx">
                <div class="w-8 h-8 bgColor-pri rounded-full mr-2 p-1">
                   <img src="<?= images_path('users/' . auth()->user()->photo) ?>" alt="admin pic"
                   class="w-full h-full rounded-full cover">
                </div>
                    Account 
            </a></li>

            <li class="h-16 pointer  fs-xl"> 
            <a href="/logout" class="fx color-danger">
                <div class="w-8 h-8 rounded-full mr-2 p-1">
                   <i class="fa fa-sign-out"></i>
                </div>
                    Logout 
            </a>
            </li>
            </ul>
        
        </ul>
    </div>
</div>
</div>