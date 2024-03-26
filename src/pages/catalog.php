<!DOCTYPE html>
<html lang="en">
<?php include('../common/head.php'); ?>
<body>
  <div class="flex flex-col w-full min-h-screen">
    <?php include('../common/navbar.php'); ?>
    <div class="flex justify-center flex-grow">
      <div class="flex w-full max-w-6xl">
        <div class="flex flex-col w-full p-6">
          <div class="flex flex-col prose max-w-none pb-6">
            <h1>Catalog</h1>
            <span>Feel free to browse our various products using the tags to aid your search!</span>
            <h2 class="">Tags</h2>
            <div class="flex gap-6 flex-wrap">
              <a href="pages/catalog.php" class="category-tag">All</a>
              <?php include "../scripts/get_catalog.php" ?>
              <?php foreach ($categories as $category): ?>
              <a href="pages/catalog.php?category=<?= $category["cat_name"]?>" class="category-tag">
                <?= $category["cat_name"]?>
              </a>
              <?php endforeach; ?>
            </div>
            <h2>Products</h2>
          </div>
          <div class="columns-xs gap-4">
              <?php foreach($products as $product): ?>
              <div class="flex-col bg-stone-300 rounded-md overflow-hidden break-inside-avoid mb-4">
                <img class="w-full aspect-square object-cover" src="images/products/<?= $product["image"] ?>" alt="<?= $product["name"]?>">
                <div class="flex flex-col gap-2 p-4">
                  <div class="font-bold"><?= $product["name"]?></div>
                  <div>Price: $<?= $product["price"]?></div>
                  <div>Stock: <?= $product["stock"]?></div>
                  <a title="Add To Cart" href="pages/catalog.php" class="font-bold text-blue-600 hover:underline">
                    Add To Cart <i class="ph ph-shopping-cart"></i>
                  </a>
                </div>
              </div>
              <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
    <?php include('../common/footer.php'); ?>
  </div>
</body>
</html>