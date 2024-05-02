<?php 
require_once("navbar.php");
// require_once("db_connects.php");

$db = new mysqli("localhost","root","","foodking");

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $role = $_POST["role"];
    $dob = $_POST["dob"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    $query = "INSERT INTO users (name, email, role, dob, phone, password) VALUES ('$name', '$email', '$role', '$dob', '$phone', '$password')";
    header("login:view.php");
    if ($db->query($query) === TRUE) {
        echo "New record created successfully";
        
    } else {
        echo "Error: " . $query . "<br>" . $db->error;
    }
}


?>






<p class="mb-5 bt-5 text-center">Registaration</p>
<div  class="flex justify-center items-center h-full">
    <form method="post">
        <div>
            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name </label>
            <div class="mt-2">
                <input name="name" type="text" autocomplete="text" class="block w-50 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
<!-- =======Email======= -->
        <div >
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email </label>
            <div class="mt-2">
                <input name="email" type="email" autocomplete="email" class="block w-50 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
<!-- =======Role======= -->
        <div>
          <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Role</label>
          <div class="mt-2">
            <select id="country" name="role" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
              <option value="admin">Admin</option>
              <option value="user">User</option>
            </select>
          </div>
        </div>
<!-- =======Date of Birth======= -->
    <div class="mt-2">
        <label for="dob" class="block text-sm font-medium leading-6 text-gray-900">Date of Birth</label>
        <div class="mt-2">
            <input id="dob" name="dob" type="date" autocomplete="dob" class="block w-50 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
    </div>
<!-- =======Phone======= -->
        <div>
            <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Email </label>
            <div class="mt-2">
                <input  name="phone" type="number" autocomplete="phone" class="block w-50 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
<!-- =======Password======= -->
        <div >
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">password</label>
            <div class="mt-2">
                <input name="password" type="password"  autocomplete="given-name" class="block w-50 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
<!-- =======Button======= -->
        <button type="submit" name="submit"  class="w-full btn bg-pink-600 py-2 px-5 rounded-xl mt-5 text-gray-200">Registration</button>
    </form>
</div>