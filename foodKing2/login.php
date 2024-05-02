<?php require_once("navbar.php");?>
<!-- ========= -->
<?php 
session_start();
require_once("navbar.php");

$db = new mysqli("localhost", "root", "", "foodking");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

if(isset($_POST["btn"])) {
    $name = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Prepare and execute a prepared statement to prevent SQL injection
    $stmt = $db->prepare("SELECT email, password FROM users WHERE name = ?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_object();

        // Verify password using password_verify
        if (password_verify($password, $user->password)) {
            $_SESSION["email"] = $user->email;
            // Optionally, store other user details in the session if needed
            // $_SESSION["name"] = $user->name;
            header("location: home.php");
            exit;
        } else {
            echo "Incorrect username or password";
        }
    } else {
        echo "User not found";
    }

    $stmt->close();
}

?>
<!-- Your HTML content here -->



<!-- ========= -->

<p class="mb-5 bt-5 text-center">Welcome Back</p>
<div  class="flex justify-center items-center h-full">
    <form action="#" method="post">
        <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email </label>
            <div class="mt-2">
                <input id="email" name="email" type="email" autocomplete="email" class="block w-25 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
        
        <div >
            <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">password</label>
            <div class="mt-2">
                <input type="password" name="password" id="first-name" autocomplete="given-name" class="block w-25 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
        <input type="submit" name="btn" value="Login" />
        <!-- <button type="submit" name="loginBtn"   class="w-full btn bg-pink-600 py-2 px-5 rounded-xl mt-5 text-gray-200">Login</button> -->
    </form>
</div>
