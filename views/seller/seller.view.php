<?php 
    require 'views/partials/head.php'; 
    require 'views/partials/nav.seller.php'; 
    require 'views/partials/aside.seller.php'; 
?>

<section class="w-full">
    <div id="main" class="w-full main-content flex1 mt-12 md:mt-2 pb-24 md:pb-5">
        <div class="flex justify-between items-center w-full pl-6 pt-6 pr-6">
            <span class="text-slate-700 rounded-md text-lg font-medium">List of Shows</span>
            <a class="text-center flex items-center text-white-600 rounded-full px-6 py-2 bg-blue-600" href="">
                <i class="fa-regular fa-video-plus fa-2x fa-inverse"></i>
            </a>
        </div>

        <div class="w-full gap-4">
            
            <span class="text-red-600 px-6 py-3"><?= isset($errors['delete_show'])? $errors['delete_show'] : "" ?></span>

            <?php foreach($shows as $show) :?>
            <div class="w-full px-6 py-3">
                <div class="bg-gray-800 from-blue-200 to-blue-100 border-b-4 border-blue-600 shadow-xl p-5">
                    <div class="text-slate-400 flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded-full p-5 bg-blue-600"><i class="fa-solid fa-film fa-2x fa-inverse"></i></div>
                        </div>
                        <div class="w-1/4 flex flex-col">
                            <span>Title: </span>
                            <span class="font-bold"><?= $show['title']; ?></span>
                        </div>
                        <div class="w-1/3 flex flex-col">
                            <span>Venue: </span>
                            <span class="font-bold"><?= $show['name']; ?></span>
                        </div>
                        <div class="flex-1 flex flex-col">
                            <span>Tickets: </span>
                            <span class="font-bold"><?= $show['number_tickets']; ?></span>
                        </div>
                        <div class="flex-1 flex flex-col">
                            <span>Price: </span>
                            <span class="font-bold">$<?= $show['price']; ?></span>
                        </div>
                        <div>
                            <div class="p-3">
                                <a href="">
                                    <i class="text-green-600 fa-solid fa-pen-to-square fa-2x fa-inverse"></i>
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="p-3">
                                <button id="btn-delete-show" type="button">
                                    <i class="text-red-600 fa-solid fa-trash-can-xmark fa-2x fa-inverse"></i>
                                    <input type="hidden" value="<?= $show['show_id']; ?>">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            
        </div>
    </div>
</section>

<div class="delete-dailog justify-center items-center">
    <div class="dailog-delete-show bg-gray-200 flex flex-col justify-center items-center">
        <img src="assets/deleteshow.png" width="80px" class="mb-8">
        <div class="question">
            <p>Are you sure you want delete your show?</p>
        </div>    
        <div class="delete-show-btns">
            <button type="button" id="btn-cancel" class="bg-green-500 hover:bg-green-700 text-white py-2 px-5 rounded-full mt-9 m-4 shadow-lg">Cancel</button>
            <button id="delete-btn"><a class="bg-red-600 hover:bg-red-700 text-white py-2 py-2 px-5 rounded-full mt-9 m-4 shadow-lg">Delete</a></button>
        </div>  
    </div>  
</div> 

<script src="views/seller/js/seller.js"></script>
<?php require 'views/partials/footer.seller.php'; ?>