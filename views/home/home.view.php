<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>

<main class="grid grid-cols-4 gap-8 m-20">
  <?php foreach($shows as $show): ?>
  <div id="card-shows" class=" max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
    <a href="#">
        <img class="rounded-t-lg" src= <?php echo $show['image']?> alt="" />
    </a>
    <div class="p-5" id ="card">
      <div>
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-white" ><?php echo $show['name']?></h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 text-gray-400 " ><?php echo $show['date']?></p>
      </div>
        <div>
          <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Detail
              <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </a>
        </div>
    </div>
  </div>
  <?php endforeach; ?>
</main>

<?php require "views/partials/footer.php" ?>