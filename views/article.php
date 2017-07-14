<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="utf-8">
        <title>Журнал вантажних перевезень</title>
        <link rel="stylesheet" href="style.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <!-- Page div -->
        <div class="container">
            <!-- Header -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a id="blog" class="navbar-brand" href="index.php">Журнал перевезень</a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="admin">Панель администратора</a></li>
                    </ul>
                </div>
            </nav> 
            <!-- END Header -->
            <!-- Content -->
            <div class="article">
                <h3><?=$article['title']?></h3>
                <em>Опубликованно: <?=$article['date']?></em>
                <p><?=$article['km_start']?></p>
                <p><?=$article['km_end']?></p>
            </div>
            <!-- END Content -->
            <!-- Footer -->
            <footer>
                <p>
                    Журнал вантажних перевезень<br>Copyright &copy; 2017
                </p>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page div -->
    </body>
</hmtl>