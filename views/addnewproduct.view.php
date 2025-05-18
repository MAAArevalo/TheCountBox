
<?php require 'partials/head.view.php'; ?>

    <?php require 'partials/nav.view.php'; ?>
    
    <div id="content" class="grow">
        <?php require 'partials/navtop.view.php'; ?>
        <div class="p-7">
            <div class="flex justify-between pb-2 border-b-1 border-neutral-400 items-center">
                <a href="/products" class="py-3 px-5 bg-theme-light-green text-white hover:bg-theme-green rounded-sm hover:cursor-pointer transition duration-300">Back to Products</a>
                <div id="breadcrumb" class="">
                    <p><a href="/products"><u>Products</u></a> > Add New Product</p>
                </div>
            </div>

            <div id="addnewproduct" class="mt-7">
                <form action="/products?addnew=product" method="POST">
                    <div class="flex gap-8 flex-row-reverse">
                        <div class="w-1/2">
                            <h3 class="mb-3">Add Product Image</h3>
                            <div class="w-full relative border-2 border-gray-300 border-dashed rounded-lg p-6 hover:cursor-pointer" id="dropzone">
                                <input type="file" class="absolute inset-0 w-full h-full opacity-0 z-50 cursor-pointer" />
                                <img src="" class="mt-4 mx-auto max-h-40 hidden" id="preview">                                                        
                                <div class="text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-full">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                    </svg>
                                    <h5 class="mt-2 font-medium text-gray-900">
                                        <label for="file-upload" class="relative cursor-pointer">
                                            <span>Drag and drop</span>
                                            <span class="text-blue-500"> or browse</span>
                                            <span>to upload</span>
                                            <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                        </label>
                                    </h5>
                                    <p class="mt-1 text-xs text-gray-500">
                                        PNG, JPG, GIF up to 10MB
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2 flex flex-col gap-3">
                            <h3 class="mb-2">Add Product Details</h3>
                            <input type="text" placeholder="Product Name" name="productname" id="productName" class="w-full p-3 rounded-sm bg-stone-100 border-1 border-stone-200 outline-0">
                            <input type="text" placeholder="SKU" name="productsku" id="productsku" class="w-full p-3 rounded-sm bg-stone-100 border-1 border-stone-200 outline-0">
                            <input type="number" min="1" placeholder="Product Quantity" name="productquantity" id="productQuantity" class="w-full p-3 rounded-sm bg-stone-100 border-1 border-stone-200 outline-0">
                            <input type="number" min="1" placeholder="Product Price" name="productprice" id="productPrice" class="w-full p-3 rounded-sm bg-stone-100 border-1 border-stone-200 outline-0">
                            <input type="submit" value="Add Product" class="py-3 px-5 bg-theme-light-green text-white hover:bg-theme-green rounded-sm hover:cursor-pointer transition duration-300">
                        </div>

                    </div>


                </form>
            </div>
        </div>

    </div>

<?php require 'partials/footer.view.php'; ?>

