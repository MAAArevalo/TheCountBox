
<?php require 'partials/head.view.php'; ?>

<section id="welcomePage" class="flex bg-[url(/assets/img/pexels-artempodrez-5025503.webp)] bg-center bg-cover h-screen">
    <div id="welcomeForm" class="w-1/3 bg-white rounded-r-lg p-12">
        <div id="welcomeFormContainer">
            <h2 class="text-center mb-3">Welcome</h2>
            <div id="logRegToggle" class="mb-5 flex relative bg-theme-green m-auto rounded-full w-max">
                <div id="togglePoint" class="absolute top-0 left-0 w-1/2 rounded-full h-full bg-theme-light-green transition duration-3000 ease-in-out"></div>
                <span id="loginToggle" class="p-4 py-2 cursor-pointer w-[100px] relative text-center font-semibold text-white">Login</span>
                <span id="registerToggle"class="p-4 py-2 cursor-pointer w-[100px] relative text-center font-semibold text-white">Register</span>
            </div>
            <div id="form-login">
                <form action="">
                    <input class="bg-neutral-100 rounded-sm w-full p-4 mb-4 focus:outline border-1 border-neutral-300 focus:border-theme-light-green focus:outline-theme-light-green" type="text" placeholder="Username" name="username" id="">
                    <input class="bg-neutral-100 rounded-sm w-full p-4 focus:outline border-1 border-neutral-300 focus:border-theme-light-green focus:outline-theme-light-green mb-2" type="password" placeholder="Password" name="password" id="">
                    <span id="forgot-pass" class="text-right flex w-full justify-end mb-4">Forgot Password?</span>
                    <input type="submit" value="Log In" class="bg-theme-light-green rounded-md cursor-pointer p-2 px-4 transition duration-500 ease-in-out text-white hover:bg-theme-green m-auto flex">
                </form>
            </div>
            <div id="form-register" class="hidden">
                <form action="">
                    <div class="flex flex-nowrap gap-4">
                        <input class="bg-neutral-100 rounded-sm w-full p-4 mb-4 focus:outline border-1 border-neutral-300 focus:border-theme-light-green focus:outline-theme-light-green w-1/2" type="text" placeholder="First Name" name="firstname" id="">
                        <input class="bg-neutral-100 rounded-sm w-full p-4 mb-4 focus:outline border-1 border-neutral-300 focus:border-theme-light-green focus:outline-theme-light-green w-1/2" type="text" placeholder="Last Name" name="lastname" id="">                        
                    </div>
                    <input class="bg-neutral-100 rounded-sm w-full p-4 mb-4 focus:outline border-1 border-neutral-300 focus:border-theme-light-green focus:outline-theme-light-green" type="email" placeholder="Email Address" name="username" id="">
                    <input class="bg-neutral-100 rounded-sm w-full p-4 focus:outline border-1 border-neutral-300 focus:border-theme-light-green focus:outline-theme-light-green mb-4" type="password" placeholder="Password" name="password" id="">
                    <input class="bg-neutral-100 rounded-sm w-full p-4 mb-4 focus:outline border-1 border-neutral-300 focus:border-theme-light-green focus:outline-theme-light-green" type="text" placeholder="Company Name" name="company" id="">
                    <input type="submit" value="Register" class="bg-theme-light-green rounded-md cursor-pointer p-2 px-4 transition duration-500 ease-in-out text-white hover:bg-theme-green m-auto flex">
                </form>
            </div>
        </div>
    </div>
    <div id="welcome-desc" class="w-2/3 h-full p-12 flex flex-col justify-center">
        <div class="welcomeContent">
            <img src="/assets/img/TheCountBox.webp" width="100" height="100" alt="Unbox Logo">
            <h1 class="">The<br>CountBox</h1>
            <p>Remake of college project e-Tinda inventory system. New inventory with sales system.</p>
        </div>
    </div>
</section>




<?php require 'partials/footer.view.php'; ?>
