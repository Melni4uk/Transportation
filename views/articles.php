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
        <div class="container">
            <!-- Header (navbar) -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a id="blog" class="navbar-brand" href="index.php">Журнал перевезеннь</a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="admin">Панель администратора</a></li>
                    </ul>
                </div>
            </nav> 
            <!-- END Header (navbar) -->
            <?php foreach($articles as $article): ?>
            <div class="article panel panel-default" >
                <h3><a href="article.php?id=<?=$article['id']?>"><?=$article['title']?></a></h3>
                <em>Дата перевезення вантажу: <?=$article['date']?></em>
                <p class="txt"><?=articles_intro($article['km_start'])?></p>
                <p><?=articles_intro($article['km_end'])?></p>
            </div>
            <?php endforeach ?>
            <footer>
                <p>
                    Журнал вантажних перевезеннь<br>Copyright &copy; 2017
                </p>
            </footer>
        </div>
    </body>
</hmtl>