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
            <div class="w-full border-b border-slate-300 pb-4 text-xl text-center font-bold">Order Complete</div>
            <div class="flex flex-col gap-4 border-b items-stretch text-center border-slate-300 pb-4">
              <div class="w-full text-center font-semibold text-lg">Summary</div>
              <?php include "../scripts/process_checkout.php" ?>
              <div class="grid text-xs sm:text-lg grid-cols-3">
                <div class="grid-item font-bold border-r ">Name</div>
                <div class="grid-item font-bold border-x">Quantity</div>
                <div class="grid-item font-bold border-l">Price</div>
                <?php foreach($cart_products as $product): ?>
                <div class="grid-item border-r"><?= $product["name"] ?></div>
                <div class="grid-item border-x"><?= $product["quantity"] ?></div>
                <div class="grid-item border-l">$<?= sprintf("%0.2f", $product["price"] * $product["quantity"]) ?></div>
                <?php endforeach; ?>
              </div>
              <div class="flex flex-col text-sm sm:text-lg  ">
                <div class="text-end">Subtotal: <span class="font-bold">$<?= sprintf("%0.2f", $subtotal) ?></span></div>
                <div class="text-end">HST (15%): <span class="font-bold">$<?= sprintf("%0.2f", $subtotal * 0.15) ?></span></div>
                <div class="text-end py-2">Total: <span class="font-bold">$<?= sprintf("%0.2f", $subtotal * 1.15) ?></span></div>
              </div>
            </div>
            <div class="flex flex-col items-center w-full text-sm md:text-lg gap-2">
              <div class="font-semibold">Your order has been submitted</div>
              <div>Order #<?= $order_id ?></div>
              <div>Order Date: <?= $order_date ?></div>
              <div>Customer: <?= $_SESSION["first_name"] . " " . $_SESSION["last_name"] ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include('../common/footer.php'); ?>
  </div>
</body>
</html>