<?php

$path = './csv/user.csv';

$fp = fopen($path, 'a');
fputcsv($fp, array($_POST['name'], $_POST['time'], $_POST['num']));
fclose($fp);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Restaurant-web</title>
        <link rel="stylesheet" href="css/out.css">
    </head>
    <body>
        <div class="photo-overlay cover"></div>
        
        <h1>Ritz Carlton</h1>
        <p>ご予約ありがとうございます。<br><?php echo $_POST['name']; ?>様のご来店お待ちしております。</p>
        <div class="col-md-4 p-3">
            <form action="index.html">
                <button type="submit" class="btn mt-4 btn-block p-2 btn-outline-primary"><b>トップページへ</b></button>
            </form>
        </div>
    </body>
</html>
