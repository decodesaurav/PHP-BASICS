
  <!-- Header -->

  <?php require "views/partials/header.php"; ?>

  <!-- nav --> 
  
  <?php require ('views/partials/nav.php') ?>
  
  <!-- banner --> 
  
  <?php require ('views/partials/banners.php') ?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
          <a href="/notes" class="text-blue-500 underline">Go back...</a>
        </p>
        <?= htmlspecialchars($note["body"]) ?>
    </div>
  </main>
  
<!-- footer -->
<?php require "views/partials/footer.php"; ?>
