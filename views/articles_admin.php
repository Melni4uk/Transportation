

<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="utf-8">
        <title>Журнал вантажних перевезень</title>
        <link rel="stylesheet" href="../style.css">
        <link href="../bootstrap.css" rel="stylesheet">
    
        <!-- Latest compiled and minified CSS -->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">-->
    </head>
   
    <body >
        
        <div class="container">
             
            <!-- Header (navbar) -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a id="blog" class="navbar-brand" href="../index.php">Журнал перевезень</a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php?action=add">Додати запис в базу</a></li>
                        <li><a href="#">Вихід</a></li>
                    </ul>
                </div>
            </nav> 
        </div>
            <!-- END Header (navbar) -->
            <div class="container">
            <div class="tbl">
                <!--<style>
                tbl{background: url(../images/bg1.jpg);}
            </style>-->
            <table id="admin_table" class="table">
                <tr>
                    <th>Дата</th>
                    <th>Км/початок</th>
                    <th>Км/кінець</th>
                    <th>Замітки</th>
                </tr>
                <?php foreach($articles as $article): ?>
                    <tr>
                        <td><?=$article['date']?></td>
                        <td><?=$article['km_start']?></td>
                        <td><?=$article['km_end']?></td>
                        <td><?=articles_intro($article['title'], 80)?></td>
                        <td>
                            <a href="index.php?action=edit&id=<?=$article['id']?>">Редагувати</a>
                        </td>
                        <td>
                            <a href="index.php?action=delete&id=<?=$article['id']?>">Видалити</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
                </div>
            <footer>
                <p>
                    Журнал вантажних перевезеннь<br>Copyright &copy; 2017
                </p>
            </footer>
          
        </div>
    </body>
</hmtl>

