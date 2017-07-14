<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="utf-8">
        <title>Журнал вантажних перевезень</title>
        <link rel="stylesheet" href="../style.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <!-- Header (navbar) -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a id="blog" class="navbar-brand" href="../index.php">Журнал перевезень</a>
                    </div>
                </div>
            </nav> 
            <!-- END Header (navbar) -->
        
            <div id="addart" class="addtab">
                <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                    
                    <div class="form-group">
                       <label class="control-label"> </label>
                        <input type="text" name="title" value="<?=$article['title']?>" class="form-control" placeholder= "Назва вантажу" autofocus required>
                    </div>
                    <div class="form-group">
                       <label class="control-label"></label>
                        <input type="int" name="km_start" value="<?=$article['km_start']?>" class="form-control" placeholder="Км. на початку рейсу" autofocus required>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label"></label>
                    
                        <input type="int" name="km_end" value="<?=$article['km_end']?>" class="form-control" placeholder="Км. в кінці рейсу" autofocus required>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label"> </label>
                        <input type="date" name="date" value="<?=$article['km_end']?>"  class="form-control" placeholder= "Км. кінець рейсу" required>
                    </div>
                    <input type="submit" value="Зберегти" class="btn">
                </div>
             </form>
            
           
            <footer>
                <p>
                    Журнал вантажних перевезеннь<br>Copyright &copy; 2017
                </p>
            </footer>
        </div>
    </body>
</hmtl>