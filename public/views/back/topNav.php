<a href="/profile" ><div class="h-20">
<nav class="w-10/12 h-20 shadow-2 px-8 fx fx-i-c fx-j-btw fixed">
    <div class="fx fx-i-c h-16 ">
      <i class="fa-2x fa fa-tachometer"></i>
      <h1 class="ml-2"> Adminstrator Panel </h1>
    </div>
     
        <div class="fx fx-i-c ">
            <div class="fs-lg pr-3">
                <p class="fs-sm  pl-2 color-pri fw-bold">  
                    Adminstrator
                </p>
                <span class=""> <?= Auth()->user()->fullName ?> </span>
                <!-- <p class="fs-sm  pl-2"> 
                    <i class="fa fa-check-circle color-pri"></i> Adminstrator 
                </p> -->
            </div>

            <div class="w-12 h-12 bgColor-pri rounded-full">
                <img src="<?= images_path('users/' . auth()->user()->photo) ?>" alt="admin pic"
                class="w-full h-full rounded-full cover">
            </div>
        </div>

</nav>
</a></div>