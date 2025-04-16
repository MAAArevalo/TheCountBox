
<?php require 'partials/head.view.php'; ?>

    <?php require 'partials/nav.view.php'; ?>
    
    <div id="content" class="grow">
        <?php require 'partials/navtop.view.php'; ?>
        <div class="flex flex-col gap-6 p-7">
            <div id="sales" class="flex gap-3">
                <div id="daily" class="shadow-lg bg-white rounded-md w-1/3 p-5 flex justify-center flex-col lg:justify-between lg:flex-row">
                    <div id="sales-desc" class="flex gap-2 items-center m-auto lg:m-0">
                        <span class="icon flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-teal-700">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                            </svg>
                        </span>
                        <h3 class="font-medium text-teal-700"><span class="text-2xl font-semibold">Daily</span><br>Total Sales</h3>
                    </div>
                    <div id="sales-num" class="text-2xl font-semibold text-slate-700 m-auto lg:m-0">₱ 80</div>
                </div>
                <div id="weekly" class="shadow-lg bg-white rounded-md w-1/3 p-5 flex justify-center flex-col lg:justify-between lg:flex-row">
                    <div id="sales-desc" class="flex gap-2 items-center m-auto lg:m-0">
                        <span class="icon flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-teal-700">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                            </svg>
                        </span>
                        <h3 class="font-medium text-teal-700"><span class="text-2xl font-semibold">Weekly</span><br>Total Sales</h3>
                    </div>
                    <div id="sales-num" class="text-2xl font-semibold text-slate-700 m-auto lg:m-0">₱ 80</div>
                </div>
                <div id="yearly" class="shadow-lg bg-white rounded-md w-1/3 p-5 flex justify-center flex-col lg:justify-between lg:flex-row">
                    <div id="sales-desc" class="flex gap-2 items-center m-auto lg:m-0">
                        <span class="icon flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-teal-700">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                            </svg>
                        </span>
                        <h3 class="font-medium text-teal-700"><span class="text-2xl font-semibold">Yearly</span><br>Total Sales</h3>
                    </div>
                    <div id="sales-num" class="text-2xl font-semibold text-slate-700 m-auto lg:m-0">₱ 80</div>
                </div>
            </div>

            <div class="flex gap-3 flex-wrap lg:flex-nowrap">
                <div id="most-popular" class="bg-white p-5 rounded-md shadow-lg w-full lg:w-1/2">
                    <h3 class="text-2xl font-semibold mb-4 border-b-[1px] border-stone-200 pb-4 text-teal-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 inline mr-[5px]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                        </svg>
                        <span>Popular Product</span>
                    </h3>
                    <div id="popularchart">
                        div
                    </div>
                </div>
                <div id="sales" class="bg-white p-5 rounded-md shadow-lg w-full lg:w-1/2">
                    <h3 class="text-2xl font-semibold mb-4 border-b-[1px] border-stone-200 pb-4 text-teal-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 inline mr-[5px]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                        </svg>
                        <span>Sales</span>
                    </h3>
                    <div id="table" class=" relative w-full">
                        <table class="table-auto w-full">
                            <thead>
                                <tr class="border-b-[1px] border-stone-200">
                                    <th class="p-4 text-start">Product Name</th>
                                    <th class="p-4 text-start">Total Sold</th>
                                    <th class="p-4 text-start">Sold By Cashier</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b-[1px] border-stone-200 bg-white hover:bg-teal-50">
                                    <td class="p-4">Product Sample</td>
                                    <td class="p-4">200</td>
                                    <td class="p-4">
                                        <span id="cashier-img">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 inline">
                                            <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                        <span class="cashier-name">John Doe</span>
                                    </td>
                                </tr>
                                <tr class="border-b-[1px] border-stone-200 bg-white hover:bg-teal-50">
                                    <td class="p-4">Product Sample</td>
                                    <td class="p-4">200</td>
                                    <td class="p-4">
                                        <span id="cashier-img">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 inline">
                                            <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                        <span class="cashier-name">John Doe</span>
                                    </td>
                                </tr>
                                <tr class="border-b-[1px] border-stone-200 bg-white hover:bg-teal-50">
                                    <td class="p-4">Product Sample</td>
                                    <td class="p-4">200</td>
                                    <td class="p-4">
                                        <span id="cashier-img">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 inline">
                                            <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                        <span class="cashier-name">John Doe</span>
                                    </td>
                                </tr>
                                <tr class="border-b-[1px] border-stone-200 bg-white hover:bg-teal-50">
                                    <td class="p-4">Product Sample</td>
                                    <td class="p-4">200</td>
                                    <td class="p-4">
                                        <span id="cashier-img">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 inline">
                                            <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                        <span class="cashier-name">John Doe</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php require 'partials/footer.view.php'; ?>

