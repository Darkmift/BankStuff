<?php
//set caller for page
$GLOBALS['caller_page'] = basename(__FILE__, '.php');
include 'HTML_Page_frame/header.php';
include 'Classes/Class_Bank.php';
include 'Classes/Class_users.php';
?>
<div class="main">
    <div style="border-radius: 15px;" class="main-div">
        <div class="main">
            <div class="main-div">
                <h1>
                    <b>Bank test stuff and things</b>
                </h1>
                <hr style="text-align: left;">
                <?php
                $name = $_POST['userName'];
                $madBank = new Bank('madBank', 3);
                echo $madBank->get_Name() . '<br>';
                echo $madBank->allow_users_to_admin() . '<br>';
                echo $madBank->get_bank_policy();
                echo '<hr>';
                $joe = new User($name, 0, $madBank->get_bank_type());
                echo $joe->getName() . ',';
                echo $joe->getAmount() . ',';
                echo $joe->inBank() . '<br>';
                ?>
                <hr>
                <form name="DaForm" action="TestSite.php" method="POST">
                    <input type="hidden" name="userName">
                </form>
            </div>
        </div>
    </div>
</div>

