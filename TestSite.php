<?php
//set caller for page
$GLOBALS['caller_page'] = basename(__FILE__, '.php');
include 'HTML_Page_frame/header.php';
include 'Classes/Class_Bank.php';
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
                $madBank = new Bank('madBank', 3);
                echo $madBank->get_Name() . '<br>';
                echo $madBank->allow_users_to_admin() . '<br>';
                echo $madBank->get_bank_policy();
                ?>
                <hr>
            </div>
        </div>
    </div>
</div>

