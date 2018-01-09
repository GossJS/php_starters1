# 19-12-2017

**https://kodaktor.ru/75ef02a**

**http://j.mp/phpkurs2017**

Задания.
---

*Повторение z4a* Работая в своей папке, создайте сценарий, который по переданным ему двум числам a и b возвращает их **сумму**. Он должен быть доступен по адресу вида https://php-study1-gossoudarev.c9users.io/kurs/Ivanova/4a_adder.php?a=5&b=3
* Убедившись, что сценарий правильно работает, сделайте пулл-реквест в этот репозиторий, который содержит файл  вида Ivanova1.txt где находится ссылка на сценарий и его текст.

z5. Напишите сценарий, который заменяет в строке, переданной с помощью параметра txt, все буквы a на звёздочки. Например по входу ananda должно получаться ∗n∗nd∗ и это должно быть в тегах h2. 
Если сценарию не передаётся ничего, он должен возвращать три звёздочки. Используйте функцию str_replace для замены, а функцию header для задания заголовков CORS и Content-Type text/plain https://kodaktor.ru/headers 

z6a. Напишите PHP-сценарий, который выдаёт список валют вида:
![alt scheme](currencies.png "Список валют в формате JSON")


и напишите JavaScript сценарий по образцу https://kodaktor.ru/logins09012018
который выводит список названий валют извлечённый из указанного выше списка.


Сценарий-образец, который формирует пример простого JSON-документа
называется json1.php и располагается в нашем проекте в папке demo_files


Он доступен по адресу https://php-study1-gossoudarev.c9users.io/demo_files/json1.php
а информацию из него извлекает пример JavaScript-сценария по адресу https://kodaktor.ru/jsonfetch09012018


z6. Напишите  сценарий вида https://php-study1-gossoudarev.c9users.io/kurs/Ivanova/6.php, который выдаёт с заголовком CORS документ  JSON с вашими именем и фамилией в виде {firstname: …, lastname: …} и убедитесь, что JSON отображается правильно при использовании инструментов типа JSON Formatter и что кодировка верная. Используйте функцию json_encode для выдачи  JSON, а  функцию header для задания заголовков CORS и Content-Type application/json https://kodaktor.ru/headers 

z7. Напишите клиентский сценарий, который обращается к этому адресу и распределяет имя и фамилию по двум «полям» в документе, как показано на скетче:

![alt scheme](images/php2.png "Начало работы")

z8. Создайте форму для обращения к сценарию 4a_adder и снабдите её простейшей валидацией.

![alt scheme](images/z8-form.png "Форма")

z9. Создайте клиентскую часть к заданию z5, так чтобы замена выдавалась по мере набора строки в текстовом поле ввода. Используйте событие keyup и метод fetch для обращения к серверному сценарию.
![alt scheme](images/a_off.gif "Форма")


z10. Напишите сценарий, который извлекает имя и пароль записи n из адреса https://kodaktor.ru/j/users

и размещает его как в задании z6

т.е. для адреса https://php-study1-gossoudarev.c9users.io/kurs2017/goss/10.php?n=3

результат должен быть
{"login":"myking","password":"myqueen"}



z11. Напишите сценарий
который генерирует таблицу
по
https://kodaktor.ru/j/rates

вида

![alt scheme](images/table.png "Таблица")
