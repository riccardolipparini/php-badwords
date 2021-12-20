<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php

        $p="ciao ciao ciao wow lorem ipus ok bla bla bla blallalalal bala bla bla";
        
        $word = $_GET["name"];

        $censored = str_replace($word, "***", $p);
    ?>
</head>
<body>
    <p>

        <p><?php echo '>la frase censorizzata è: ' . $censored; ?></p>

        <?php

            echo $p . '<br>';
            echo $word;
        
        ?>
    </p>
    <p>
        <?php

            echo strlen($p);
        
        ?>
    </p>
    
</body>
</html>