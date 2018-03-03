
<!DOCTYPE html>
<?php
include 'Class_Bank.php';

function randomOfThree() {
    $randomizer = rand(1, 3);
    switch ($randomizer) {
        case 1:
            return $randomizer . 'is 1';
        case 2:
            return $randomizer . 'is 2';
        case 3:
            return $randomizer . 'is 3';
    }
}
?>
<html>

    <head>
        <title>Default</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="http://pre11.deviantart.net/3944/th/pre/i/2012/122/6/9/cookie_monster_by_neorame-d4yb0b5.png" />
        <!--        <link href="YOURCSSHERE.css" type="text/css" rel="stylesheet" />-->
        <!-- Latest bootstrap compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
        <!-- Optional bootstrap theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
        <!--Jquery(Bootstrap dependency)-->
        <script src="https://code.jquery.com/jquery-latest.min.js"></script>
        <style>
            ::-webkit-scrollbar {
                display: none;
            }

            .main {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            .main .main-div {
                position: absolute;
                top: 50%;
                left: 50%;
                padding: 2%;
                transform: translate(-50%, -50%);
                background-color: grey;
                font-family: 'Roboto Slab', serif;
                font-size: 24px;
                text-align: center;
            }

            h1 {
                background-color: lightblue;
                color: green;
            }
        </style>
    </head>

    <body>
        <script>
            function capitalizeFirstLetter(string) {
                return string.charAt(0).toUpperCase() + string.slice(1);
            }

            var randName = "";
            $.ajax({
                url: 'https://randomuser.me/api/',
                dataType: 'json',
                success: function (data) {
                    console.log(data.results[0].name);
                    randName =
                            capitalizeFirstLetter(data.results[0].name.title) + ' ' +
                            capitalizeFirstLetter(data.results[0].name.first) + ' ' +
                            capitalizeFirstLetter(data.results[0].name.last);
                    console.log(randName);
                }
            });
        </script>
        <div class="main">
            <div class="main-div">
                <h1 style="text-align: left;padding: 10px;">&nbsp;<br>
                    <?php
                    for ($x = 0; $x <= 10; $x++) {
                        echo $x . ": " . randomOfThree() . "<hr>";
                    }
                    ?>
                </h1>
            </div>
        </div>

        <!--END OF HTML HERE-->
        <!--Bootstrap Plugins-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
<!--        <script src="YOURJSHERE.js"></script>-->

    </body>

</html>