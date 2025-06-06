
<?php require 'partials/head.view.php'; ?>

    <?php require 'partials/nav.view.php'; ?>
    
    <div id="content" class="grow">
        <?php require 'partials/navtop.view.php'; ?>
        <div class="p-7">
            <div class="py-3 mb-8">
                <a href="/products?addnew=product" class="py-3 px-5 bg-theme-light-green text-white hover:bg-theme-green rounded-sm hover:cursor-pointer transition duration-300">Add New Product</a>
            </div>
            <div id="products-filter" class="mb-8 flex gap-3 items-center justify-between">
                <div id="form-search" class="w-1/2 flex items-center border-b-[1px] border-neutral-400">
                    <input type="text" name="productSearch" id="productSearch" class="w-full p-3 px-5 outline-0" placeholder="Search Product">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </span>
                </div>
                <div id="filter-type" class="">
                    <div id="change-view" class="">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                            </svg>
                        </button>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 0 1-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0 1 12 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div id="products" class="">
                
                <div id="productsContainer" class="flex flex-wrap">
                    <?php
                        $db = new Database();
                        $products = $db->get_products();

                        foreach($products as $product):
                    ?>
                    <div id="product" class="w-1/4 p-2">
                        <div id="productContainer" class="p-3 rounded-lg border-theme-light-green shadow-theme-green self-stretch">
                            <div id="productImage">
                                <div id="imagePlaceholder" class="m-auto mb-3 bg-neutral-400 w-full h-full max-w-[400px] max-h[300px] min-h-[200px] flex justify-center items-center"><strong>No Image</strong></div>
                            </div>
                            <div id="productName" class="mb-2">
                                <h3 class="text-center"><?php echo $product['product_name']; ?></h3>
                            </div>
                            <div id="productPrice" class="mb-3">
                                <p class="text-center">₱ <?php echo $product['product_price']; ?></p>
                            </div>
                            <div id="productCTA" class="flex flex-nowrap gap-3">
                                <button class="cursor-pointer transition duration-300 ease-in-out rounded-sm p-2 w-1/2 bg-red-400 hover:bg-red-900 text-white">Delete</button>
                                <button class="cursor-pointer transition duration-300 ease-in-out rounded-sm p-2 w-1/2 bg-blue-400 hover:bg-blue-900 text-white">Edit</button>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>

<?php require 'partials/footer.view.php'; ?>

