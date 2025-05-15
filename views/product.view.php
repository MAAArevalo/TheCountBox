
<?php require 'partials/head.view.php'; ?>

    <?php require 'partials/nav.view.php'; ?>
    
    <div id="content" class="grow">
        <?php require 'partials/navtop.view.php'; ?>
        <div class="flex flex-row gap-6 p-7">
            <div id="products" class="w-4/6">
                <div id="products-filter"></div>
                <div id="productsContainer" class="flex gap-5 flex-wrap justify-center">
                    <?php
                        $db = new Database();
                        $products = $db->get_products();

                        foreach($products as $product):
                    ?>
                    <div id="product" class="p-3 rounded-lg border-theme-light-green shadow-theme-green w-full max-w-[300px]">
                        <div id="productImage">
                            <div id="imagePlaceholder" class="m-auto mb-3 bg-neutral-400 w-full h-full max-w-[400px] max-h[300px] min-h-[200px] flex justify-center items-center"><strong>No Image</strong></div>
                        </div>
                        <div id="productName">
                            <h3 class="text-center"><?php echo $product['product_name']; ?></h3>
                        </div>
                        <div id="productPrice">
                            <p class="text-center"><?php echo $product['product_price']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div id="addProductForm">
                <form action="">
                    <input type="text" name="productname" id="product_name">
                    <input type="number" name="productprice" id="product_price">
                    <input type="text" name="productname" id="product_name">
                </form>
            </div>
        </div>

    </div>

<?php require 'partials/footer.view.php'; ?>

