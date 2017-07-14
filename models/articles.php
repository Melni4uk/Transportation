<?php
    function articles_all($link){
    // Формируем запрос
        $query = "SELECT * FROM articles ORDER BY id DESC";
        $result = mysqli_query($link, $query);
        
        if(!$result)
            die(mysqli_error($link));
        
    // Извлекаем данные
        $n = mysqli_num_rows($result);
        $articles = array();
        
        for ($i = 0; $i < $n; $i++)
        {
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row;
        }
        
        return $articles;
    }

    function article_get($link, $id_article){
        $query = sprintf("SELECT * FROM articles WHERE id=%d", (int)$id_article);
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        $article = mysqli_fetch_assoc($result);
        
        return $article;
    }

    function articles_new($link, $title, $km_start, $km_end, $date){
        // Подготовка
        $title = trim($title);
        $km_start = trim($km_start);
        $km_end = trim($km_end);
        
            
        // Проверка
        if ($title == '')
            return false;
        
        // Запрос
        $template_add = "INSERT INTO articles (title, km_start, km_end, date) VALUES ('%s', '%s', '%s', '%s')";
        
        $query = sprintf($template_add, 
                         mysqli_real_escape_string($link, $title),
                         mysqli_real_escape_string($link, $km_start),
                         mysqli_real_escape_string($link, $km_end),
                         mysqli_real_escape_string($link, $date));
        
        echo $query;
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        return true;
    }

    function articles_edit($link, $title, $km_start, $km_end, $date){
        // Подготовка
        $title = trim($title);
        $km_start = trim($km_start);
        $km_end = trim($km_end);
        $date = trim($date);
        $id = (int)$id;
            
        // Проверка
        if ($title == '')
            return false;
        
        // Запрос
        $template_update = "UPDATE articles SET title='%s', km_start='%s', km_end='%s', date='%s' WHERE id='%d'";
            
        $query = sprintf($template_update, 
                         mysqli_real_escape_string($link, $title),
                         mysqli_real_escape_string($link, $km_start),
                         mysqli_real_escape_string($link, $km_end),
                         mysqli_real_escape_string($link, $date),
                         $id);
        
        $result = mysqli_query($link, $query);
        
        if (!result)
            die(mysqli_error($link));
        
        return mysqli_affected_rows($link);
    }

    function articles_delete($link, $id){
        $id = (int)$id;
        // Проверка
        if ($id == 0)
            return false;
        
        // Запрос
        $query = sprintf("DELETE FROM articles WHERE id='%d'", $id);
        $result = mysqli_query($link, $query);
        
        if (!result)
            die(mysqli_error($link));
        
        return mysqli_affected_rows($link);
    }

    function articles_intro($text, $len = 500)
    {
        return mb_substr($text, 0, $len);        
    }
?>






































