
<?php if (!empty($bikes)): ?>

    <?php foreach ($bikes as $bike): ?>
    
    <a href="/rent_bike/<?= $bike->id ?>" class="no-line">
        <div class="w-64 rounded-1 mt-4 ml-2 shadow-2 pt-1">
            <div class="w-10/12 h-40 m-0-auto">
                <img class="w-full h-full contain rounded-1"
                src="<?= images_path("/bikes/{$bike->photo}") ?>"
                alt="bike">
            </div>
            <div class="w-full txt-h-c pb-6">
                <div class="w-10/12 m-0-auto ">
                <h3 class="pt- fs-md color-pri-800 py-2"> <?= $bike->bike_name ?> </h3>
                <h3 class="fs-sm pt-1 fw-400">Model: <?= $bike->model ?>  </h3>
                <h3 class="fs-sm pt-1 fw-400">Plate No: <?= $bike->bike_number ?>  </h3>
                </div>
                <div class="w-10/12 m-0-auto ">
                    <h3 class="py-2 fs-md pt-1">Ksh <?= $bike->price ?>/day</h3>
                </div>
                <button class="bgColor-pri rounded-full px-5 py-3 color-1
                mt-2 border-0 fw-500  outline-0 pointer
                rounded fs-sm hover:bgColor-pri-700" type="button" name="button">
                    Rent now
                </button>
            </div>
        </div>
    </a>
    <?php endforeach; ?>

<?php else: ?>

    <p>No search result found</p>

<?php endif; ?>
