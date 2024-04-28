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
              <?php include("../scripts/get_catalog.php") ?>
              <?php include("../scripts/get_cart.php") ?>
              <?php foreach ($categories as $category): ?>
              <a href="pages/catalog.php?category=<?= $category["code"]?>" class="category-tag">
                <?= $category["name"]?>
              </a>
              <?php endforeach; ?>
            </div>
            <h2>Products</h2>
          </div>
          <div class="columns-xs gap-4">
              <?php foreach($products as $product): ?>
              <?php
                $in_cart = false;
                foreach($cart_products as $cart_product) {
                  if ($cart_product["p_id"] == $product["p_id"]) {
                    $in_cart = true;
                  }
                }
              ?>
              <form class="flex-col bg-stone-300 rounded-md overflow-hidden break-inside-avoid mb-4" action="scripts/add_to_cart.php" method="post">
                <img class="w-full aspect-square object-cover" src="images/products/<?= $product["image"] ?>" alt="<?= $product["name"]?>">
                <div class="flex flex-col gap-2 p-4">
                  <div class="font-bold"><?= $product["name"]?></div>
                  <div>Price: $<?= $product["price"]?></div>
                  <div>Stock: <?= $product["stock"]?></div>
                  <?php if ($product["stock"] != 0 && !$in_cart): ?> 
                  <div class="flex w-full justify-between">
                    <div class="flex items-center gap-2">
                      <span>Quantity:&nbsp;</span>
                      <?php
                      $numberOfOptions = $product["stock"];
                      echo "<input type='number' class='rounded w-16 text-md py-0.5 px-1 font-light' required max=$numberOfOptions min=1 id='qty' name='qty' />";
                      ?>
                    </div>
                    <input type="hidden" id="product" name="product" value="<?= $product["p_id"] ?>" >
                    <button title="Add To Cart" class="font-bold text-blue-600 hover:underline">
                      Add To Cart <i class="ph ph-shopping-cart"></i>
                    </button>
                  </div>
                  <?php elseif ($in_cart): ?>
                  <div class="w-full pb-1.5">Item is already in cart.</div>
                  <?php else: ?>
                  <div class="w-full pb-1.5">Item out of stock, please check again later.</div>
                  <?php endif; ?>
                </div>
              </form>
              <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
    <?php include('../common/footer.php'); ?>
  </div>
</body>
</html>