<h2>Привет!</h2>
<h6>Я использовал этот репозиторий во время прохождения курса "PHP. Быстрый старт" от GeekBrains.ru</h6>
<p>
  Возможно ты застрял или просто интересно посмотреть на результат прохождения этого курса таким же новичком.<br>
  Ниже я попробую описать алгоритм, следуя которому ты сможешь развернуть этот проект на своем компьютере.<br>
  P.S. А еще у меня завалялся ненужный домен и ты можешь посмотреть пример проекта тут <b>http://lizkiss.ru</b><br>
  Напомню, что все было сделано как в курсе и некоторые подходы не стоит использовать в реальных проектах, начнем:</p>
  <ul>
    <li><p>
      1. Если ты не используешь Git клиент, то просто нажми на зеленую кнопку "Clone or download" (чуть выше и правее) 
      и выбери "Download ZIP", чтобы загрузить архив проекта.</p>
    </li>
    <li><p>
      2. Распакуй архив в текущую директорию и ты увидишь папку "LearningPHP-master", содержащую 
      наверняка уже знакомые тебе файлы и каталоги.</p>
    </li>
    <li><p>
      3. Далее я буду отталкиваться от того, что у тебя уже установлен XAMPP и запущены Apache и MySQL (первый урок). 
      В моем случае путь до папки htdocs будет таким "C:\xampp\htdocs" и именно тут нам нужно разместить папку 
      "LearningPHP-master" из архива. 
      Обрати внимание, что итоговый путь до файла index.php должен быть таким "C:\xampp\htdocs\LearningPHP-master\index.php",
      если ты так же как и я установил XAMPP по умолчанию.</p>
    </li>
    <li><div><p>
      4. Теперь, чтобы реализовать авторизацию на уровне web сервера, нужно создать два файла, а именно .htaccess и .htpasswd
      в директории "C:\xampp\htdocs\LearningPHP-master\admin". Обрати внимание, что имен у этих файлов нет, 
      после точки идет лишь расширение файла, поэтому лучше создавать их через текстовый редактор. 
      Этот процесс подробно рассматривается в девятом уроке, но даже если ты еще не добрался до него - не стоит отчаиваться,
      просто воспользуйся примерами ниже:
      </p>
        <b>Это содержимое файла .htaccess</b><p>
        AuthType Basic<br>
        AuthName "Admin panel"<br>
        AuthUserFile C:/xampp/htdocs/LearningPHP/admin/.htpasswd<br>
        Require valid-user
      </p>
        <b>А это содержимое файла .htpasswd</b><p>
        admin:$apr1$aV403fGB$2ufnDbYpbcduTBZbSqj7A.
      </p>
      <p>
        Если у тебя отличается путь до файла .htpasswd, то не забудь изменить его в третьей строке файла .htaccess,
        получить доступ к панели администратора можно будет воспользовавшись<br> <b><i>логином:</i> admin</b> и <b><i>паролем:</i> admin</b>
      </p>
      </div>
    </li>
    <li>
      <p>
      5. Отлично! Осталось лишь прикрутить базу данных, поехали:</p>
      <p>
        Если ты уже создал базу данных blog и таблицу articles, как это предлагается в седьмом уроке и
        ты используешь root и пустой пароль для соединения, то скорее всего тебе можно пропустить этот пункт (проверь database.php).
      </p>
      <p>
        Наша задача перейти в http://localhost/phpmyadmin/ и создать новую базу данных, назвав её blog и выбрав кодировку utf8_general_ci.
        Теперь, когда база создана, мы можем выбрать её в sidebar'е слева и нажать на кнопку "импорт" на панели навигации сверху.
        А сейчас выберем файл "C:\xampp\htdocs\LearningPHP-master\blog.sql", убедимся, что выбрана кодировка utf-8 и смело нажмем "вперед".
        Должна появиться строчка с зеленой галкой и надписью:</p>
        <p>Импорт успешно завершён, выполнено 13 запросов. (blog.sql)</p>
        <p>А если у тебя уже была база, то можешь попробовать сначала удалить её при помощи SQL запроса:</p>
        <p>DROP DATABASE blog</p>
    </li>
    <li>
      <p>Теперь, если ты зайдешь на:</p>
      <p>http://localhost/LearningPHP-master/index.php</p>
      <p>Должен открыться блог. Очень надеюсь, что у тебя все получилось и я ничего не упустил.</p>
      <p>А еще ты можешь задать вопрос в лс на GeekBrains.ru, надеюсь этот пример тебе чем то поможет, удачи!</p>
    </li>
  </ul>