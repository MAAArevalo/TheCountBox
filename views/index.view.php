
<?php require 'partials/head.view.php'; ?>

<section id="welcomepage" class="bg-neutral-100 h-auto md:h-screen flex align-middle p-8">
    <div id="container" class="shadow-2xl shadow-teal-100 w-full max-w-[900px] m-auto h-auto md:h-[80%] flex flex-col-reverse md:flex-row rounded-3xl overflow-hidden">
        <div class="w-full md:w-1/2 bg-white p-7 md:p-10 flex flex-col justify-center">
            <h1 class="text-center font-bold uppercase text-4xl mb-4 md:mb-6 text-teal-800">welcome</h1>
            <form action="" class="mb-3">
                <input type="text" class="border-b w-full mb-4 p-3 outline-teal-600" placeholder="Username">
                <input type="password" name="" id="" class="border-b w-full mb-6 p-3 outline-teal-600" placeholder="Password">
                <input type="submit" value="Sign In" class="bg-teal-400 text-white font-medium w-full rounded-sm p-2.5 cursor-pointer transition ease-in-out duration-300 hover:bg-teal-900">
            </form>
            <p class="text-center text-[12px] mb-2.5 text-slate-700 font-normal">Don't have an account? <span class="cursor-pointer text-teal-700">Register Now!</span></p>
            <p class="text-center text-[12px] text-slate-700 font-normal text-teal-700"><a href="">Forgot Password</a></p>
        </div>
        <div class="w-full md:w-1/2 p-7 bg-slate-500 bg-blend-multiply">
            <h1 class="text-7xl font-bold text-white uppercase">The<br>Count<br>Box</h1>
            <p class="text-white">e-Tinda's new inventory system.</p>
        </div>
    </div>
</section>




<?php require 'partials/footer.view.php'; ?>
