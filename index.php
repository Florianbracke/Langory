
<?php

?>

<!DOCTYPE html>

<html>
    <head>

        <title>Langory</title>
        <style>
            .sub-wrapper-one form{
                display: flex;
                flex-direction: column;
                margin: auto;
                width: 400px;
            }
        </style>

    </head>

    <body>

        <div class="wrapper">

            <div class="sub-wrapper-one">

                    <div class="new-traslation">

                        <form action="" method="post">  
                            
                            <input type="text" name='new-word'>
                            <input type="text" name='new-traslation'>
                            <input type="submit" name='new-submit'>
                        
                            <?php echo $_POST["new-traslation"]; ?>
                            <?php echo $_POST["new-word"]; ?>

                        </form>  

                    </div>



                </div>

                <div class="select">

                </div>

            </div>

            <div class="sub-wrapper-two">

                <div class="practice">

                </div>

            </div>

        </div>

    </body>

