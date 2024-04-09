<!DOCTYPE html>
<html lang="en">
<?php include('../common/head.php'); ?>
<body>
  <div class="flex flex-col w-full min-h-screen">
    <?php include('../common/navbar.php'); ?>
    <div class="flex justify-center flex-grow">
      <div class="flex w-full max-w-6xl">
        <div class="flex flex-col w-full prose max-w-none text-neutral-600 p-6">
          <h1></h1>
          <div class="flex flex-col w-full bg-slate-200 rounded-lg p-4 gap-4">
            <div class="w-full border-b border-slate-300 pb-4 text-xl text-center font-extrabold">Your Shopping Cart</div>
            <div class="flex flex-col gap-4 border-b border-slate-300 pb-4">
              <?php include "../scripts/get_cart.php" ?>
              <?php foreach($products as $product): ?>
              <div class="flex w-full justify-between">
                <div class="flex max-h-32 items-center gap-4">
                  <img class="h-full rounded-md aspect-square object-cover" src="images/products/<?= $product["image"] ?>" alt="<?= $product["name"] ?>">
                  <div class="flex flex-col h-full">
                    <div class="flex gap-1">
                      <span class="font-bold text-lg"><?= $product["name"]?></span>
                      <?php if ($product["quantity"] > 1): ?>
                      <span>x <?= $product["quantity"]?></span>
                      <?php endif ?>
                    </div>
                    <span>Price: $<?= sprintf("%0.2f", $product["price"] * $product["quantity"]) ?></span>
                    <a class="text-blue-600" href="scripts/rm_from_cart.php">Remove</a>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
            <div class="flex flex-col">
              <div class="text-lg text-end">Subtotal: <span class="font-bold">$<?= sprintf("%0.2f", $subtotal) ?></span></div>
              <div class="text-lg text-end">HST (15%): <span class="font-bold">$<?= sprintf("%0.2f", $subtotal * 0.15) ?></span></div>
              <div class="text-lg text-end py-2">Total: <span class="font-bold">$<?= sprintf("%0.2f", $subtotal * 1.15) ?></span></div>
              <div class="flex justify-end">
                <button class="rounded-md bg-tblue2 text-twhite py-1 px-3">Proceed to checkout</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include('../common/footer.php'); ?>
  </div>
</body>
</html>