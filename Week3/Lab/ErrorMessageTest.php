<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">


    </head>
    <body>
        <?php
        
         include './models/IMessasge.php';
         include './models/Messasge.php';
         include './models/ErrorMessasge.php';
        
        $message = new Message();
        
        $message->getAllMessages('test', 'my test message');
        
        var_dump($message->getAllMessages());
        echo '<br />';
        var_dump($message instanceof IMessage);
        echo '<br />';
        var_dump($message->removeMessages('test'));
        echo '<br />';
        var_dump($message->getAllMessages());
        echo '<br />';
        ?>
    </body>
</html>
