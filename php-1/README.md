# GeekUniversity PHP-1

Тестовые задания / Обучение

## Урок 1. Введение в PHP.

Принципы работы динамических сайтов Принципы работы веб-серверов Подготовка рабочей среды Hello, world! [Практика] Базовые. конструкции языка – дескрипторы, переменные, типы данных Версии языка и их различия на базовом уровне.

```
$title = "<title>Главная страница - страница обо мне</title>";
$h1 = "<h1>Информация обо мне</h1>";
$year = 2019;

$content = file_get_contents("site.php");

$content = str_replace("{{TITLE}}", $title, $content);
$content = str_replace("{{H1}}", $h1, $content);
$content = str_replace("{{YEAR}}", $year, $content);

echo $content;
```

## Урок 2. Условные блоки, ветвление функции.

Принципы ветвления, визуализация, блок-схемы Операторы if, if-else Оператор switch Тернарный оператор Реализация схем логики. ветвления Тернарный оператор Функции, рекурсия Использование функций и рекурсии для решения задач Области видимости. переменных.

```
<?
$val = random_int(0,10);
$pow = random_int(0,10);
echo " Входные данные: <br> a = {$val} <br>  b = {$pow} <br>";

echo "<br> Число: {$val} в степени {$pow} =  ";
echo Recursion($val, $pow);

function Recursion($val, $pow) {
    if ($pow == 0) {
        return 1;
    }
    if ($pow < 0) {
        return Recursion(1/$val, -$pow);
    }
    return $val * Recursion($val, $pow-1);
}

var_dump(Recursion(5, -5));
```

## Урок 3. Циклы и массивы.

Понятие цикла, типы циклов в PHP While, do…while For Бесконечный цикл и выход из шагов, цикла Понятие массива, типы массивов. в PHP Применение циклов для работы с массивами [Практика] Многомерные массивы Основные функции работы с массивами Применение. функции для работы с массивами [Практика] Предопределённые массивы.

## Урок 4. Работа с файлами.
Файловая система и адресация, примеры на базе разных ОС Подключение файлов с кодом Базовые операции работы с файлами –. чтение, запись. Использование базовых операций для решения повседневных задач – логирование, чтение данных, кэширование .[Практика] Типовые форматы хранения данных.

## Урок 5. Базы данных MySQL и работа с ними на уровне PHP.
Создание БД, пользователей Создание таблиц Синтаксис базовых запросов. Создаем, редактируем и удаляем таблицы, Изучаем 4. главных команды: INSERT, UPDATE, DELETE, SELECT Выборка из БД и вывод на экран.

## Урок 6. Интерактивность: Методы передачи данных GET и POST, работа с формами и пользовательскими данными.
Основные методы передачи данных на сервер Методы GET и POST Передача данных из формы в скрипт Обработка и сохранение данных. в БД, обеспечение безопасности. Реализация CRUD-пакета действий [Практика] Загрузка файлов на сервер.

## Урок 7. Авторизация и аутентификация.
Знакомство с понятиями авторизации и аутентификации Сессии и Cookies Шифрование пользовательских данных Реализации. аутентификации пользователя на сайте.

## Урок 8. Практика.
Написание недостающей логики страниц Создание тестовых заказов Тестирование.

## Used:

* [php](https://www.php.net/manual/en/) - php manual

## Authors

* **Sam Golovchenko** - [Website](https://ifrosta.ru)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details