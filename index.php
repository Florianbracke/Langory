<?php
$user = 'root';
$password = 'root';
$db = 'goodplant';
$host = 'localhost';
$port = 3307;

try {
  $conn = new PDO("mysql:host=$host;port=3307;dbname=$db", $user, $password);

  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo "Connected successfully";

} catch(PDOException $e) {

  echo "Connection failed: " . $e->getMessage();

}

$sql = '';

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

                    <div class="new-translation">

                        <form method="post" action="">
                            <input type="text" class='primary_text_input' name="word">
                            <input type="text" class='primary_text_input' name="translation">
                            <input type="submit" class='primary_submit_input' name="submit">
                        </form>

                        <div class="word_1">
                            <?php
                                $word = $_POST['word'];
                                array_push( $_SESSION['words'], $word);

                                $translation = $_POST['translation'];
                                array_push( $_SESSION['word_translation'], $translation);

                                foreach($_SESSION['words'] as $value){
                                    echo '<br>' . $value;
                                }
                                foreach($_SESSION['word_translation'] as $value2){
                                    echo '<br>' . $value2;
                                }
                            ?>

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
