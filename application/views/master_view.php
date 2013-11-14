<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title?></title>
    <meta name="description" content="<?php echo $des?>"/>
    <style type="text/css">
        * {margin: 0; padding: 0}
        #container{
            width: 1000px; min-height: 500px;
            margin: auto;
            border: 1px solid #D0D0D0;
            -webkit-box-shadow: 0 0 8px #D0D0D0;
            margin-top: 20px;
        }
        header {
            width: 1000px;
            height: 100px;
            background-color: #ccc;
        }
        footer
        {
            width: 1000px;
            height: 100px;
            background-color: #bbb;
        }
        .main {
            width: 1000px;
            min-height: 400px;
            background-color: #eee;
        }
    </style>
</head>
<body>

<div id="container">
    <header>
        <h3>This is header</h3>
    </header>
    <div class="main">
        <?php
            if(isset($myval)){
                echo "<pre>";
                print_r($myval);
                echo "</pre>";
            }
        ?>

        <h3>
            <?php
                if(isset($title) && isset($des))
                {
                    print_r($title);
                    print_r($des);
                }
            ?>
        </h3>
    </div>
    <footer>
        <h3>This is header</h3>
    </footer>
</div>

</body>
</html>