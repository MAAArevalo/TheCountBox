
<?php require 'partials/head.view.php'; ?>

    <?php require 'partials/nav.view.php'; ?>
    
    <div id="content" class="grow">
        <?php require 'partials/navtop.view.php'; ?>
        <div class="p-7">
            <div id="dashSales" class="flex flex-wrap gap-5 mb-8">
                <h3 class="w-full">Sales</h3>
                <div id="salesSummary" class="w-1/4">
                    <div id="salesDaily" class="p-5 border-l-[20px] rounded-lg border-theme-light-green shadow-theme-green mb-3">
                        <h4 class="text-theme-light-green">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 inline text-theme-light-green">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                            </svg>
                            Total Daily Sales
                        </h4>
                        <span class="font-bold text-[40px]">₱ 100</span>
                    </div>
                    <div id="salesMonthly" class="p-5 border-l-[20px] rounded-lg border-theme-light-green shadow-theme-green mb-3">
                    <h4 class="text-theme-light-green">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 inline text-theme-light-green">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                            </svg>
                            Total Monthly Sales
                        </h4>
                        <span class="font-bold text-[40px]">₱ 100</span>
                    </div>
                    <div id="salesYearly" class="p-5 border-l-[20px] rounded-lg border-theme-light-green shadow-theme-green mb-3">
                    <h4 class="text-theme-light-green">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 inline text-theme-light-green">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                            </svg>
                            Total Yearly Sales
                        </h4>
                        <span class="font-bold text-[40px]">₱ 100</span>
                    </div>
                </div>
                <div id="salesTable" class="grow shadow-theme-green rounded-lg p-8">
                    <div id="dashSalesFilter">
                        <input type="text" placeholder="Search">
                        <div class="dateFilter"></div>
                    </div>
                </div>
            </div>
            <div class="flex gap-4">
                <div id="products" class="w-1/2">
                    <h3 class="mb-4">Products</h3>
                    <div class="shadow-theme-green p-4 rounded-lg mb-4">
                        <h4>Most Popular Product</h4>
                        <div class="productImage">
                            <img src="" alt="">
                        </div>
                        <div class="productDetails">
                            <p class="font-semibold">Product Sample</p>
                            <p><span class="font-semibold">Price: </span>100</p>
                            <p><span class="font-semibold">Total sold today: </span>100</p>
                            <p><span class="font-semibold">Total sold this month: </span>100</p>
                            <p><span class="font-semibold">Total sold this year: </span>100</p>
                        </div>
                    </div>
                    <div class="shadow-theme-green p-4 rounded-lg">
                        <h4>Least Popular Product</h4>
                        <div class="productImage">
                            <img src="" alt="">
                        </div>
                        <div class="productDetails">
                            <p class="font-semibold">Product Sample</p>
                            <p><span class="font-semibold">Price: </span>100</p>
                            <p><span class="font-semibold">Total sold today: </span>100</p>
                            <p><span class="font-semibold">Total sold this month: </span>100</p>
                            <p><span class="font-semibold">Total sold this year: </span>100</p>
                        </div>
                    </div>
                </div>
                <div id="recentActivites" class="grow">
                    <h3 class="mb-4">Recent Activites</h3>
                </div>
            </div>
        </div>


    </div>

<?php require 'partials/footer.view.php'; ?>

