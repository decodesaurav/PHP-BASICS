
  <!-- Header -->

  <?php require "views/partials/header.php"; ?>

  <!-- nav --> 
  
  <?php require ('views/partials/nav.php') ?>
  
  <!-- banner --> 
  
  <?php require ('views/partials/banners.php') ?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <ul>
        <?php foreach($notes as $note) : ?>
          <li>
            <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
              <?= htmlspecialchars($note["body"]) ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
      <p class="mt-6">
          <a href="/notes/create" class="text-blue-500 hover:underline">Create Note</a>
      </p>
    </div>
  </main>
  
<!-- footer -->
<?php require "views/partials/footer.php"; ?>
