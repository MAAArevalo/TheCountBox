
<?php require 'partials/head.view.php'; ?>

    <?php require 'partials/nav.view.php'; ?>
    
    <div id="content" class="grow relative">
        <?php require 'partials/navtop.view.php'; ?>
        <div class="flex justify-center items-center p-6 flex-col align-middle">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-[100px] h-[100px] text-amber-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
            </svg>

            <h2 class="text-4xl text-red-800 text-center mb-2">404 Page Not Found.</h2>
            <p class="text-center">The page you are looking for does not exist.</p>
        </div>
    </div>

<?php require 'partials/footer.view.php'; ?>

