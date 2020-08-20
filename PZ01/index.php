<?php
    require 'processing_data.php';
    $mess=processingData();
?>
<!Doctype HTML>
<html>
    <head>
        <title>Feedback</title>
        <link rel="stylesheet" type="text/css" href="stili.css"/>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <div class="container">
            <?php
                formGeneration($mess);
                echo "<hr/>";
                showData($mess);
            ?>
        </div>
    </body>
</html>