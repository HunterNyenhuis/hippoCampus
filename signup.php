<?php
    require("header.php");
?>

<main>
    <div class="section-wrapper">
        <section class="section-default">
            <h1>Signup</h1>

            <?php
            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyfields"){
                    echo '<p class = "signupError">Fill in all fields</p>';
                }else if ($_GET['error'] == "invalidusername"){
                    echo '<p class = "signupError">Invalid user name. Choose another one</p>';
                }else if ($_GET['error'] == "invalidemail"){
                    echo '<p class = "signupError">Invalid email. Choose another one</p>';
                }else if ($_GET['error'] == "passwordfailure"){
                    echo '<p class = "signupError">Invalid password. Choose another one</p>';
                }else if ($_GET['error'] == "sqlerror"){
                    echo '<p class = "signupError">There is an error in the database</p>';
                }else if ($_GET['error'] == "usernametaken"){
                    echo '<p class = "signupError">User name already taken. Choose another one</p>';
                }
            }
            ?>
            <form action="signup.inc.php" method="post">
                <input type="text" name="uid" id="" placeholder=" Enter user ID">
                <input type="text" name="mailuid" id="" placeholder = "Enter email">
                <input type="text" name="pwd" id="" placeholder= "Enter password">
                <input type="text" name="pwdRepeat" id="" placeholder="Repeat password">
                <button type="submit" name="signup-submit">Signup</button>
        </form>
        </section>
    </div>
</main>

<?php
    require("footer.php");
?>
