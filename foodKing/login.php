<?php require_once("navbar.php");?>



<p class="mb-5 bt-5 text-center">Welcome Back</p>
<div  class="flex justify-center items-center h-full">
    <form action="dasebord.php" method="post">
        <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email </label>
            <div class="mt-2">
                <input id="email" name="email" type="email" autocomplete="email" class="block w-25 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
        
        <div >
            <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">password</label>
            <div class="mt-2">
                <input type="password" name="first-name" id="first-name" autocomplete="given-name" class="block w-25 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
        
        <button  class="w-full btn bg-pink-600 py-2 px-5 rounded-xl mt-5 text-gray-200">Login</button>
    </form>
</div>