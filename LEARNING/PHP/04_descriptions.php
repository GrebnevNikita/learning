<?php
/*


Со́кет (англ. socket — разъём)
https://ru.wikipedia.org/wiki/%D0%A1%D0%BE%D0%BA%D0%B5%D1%82_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D1%8B%D0%B9_%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D1%84%D0%B5%D0%B9%D1%81)
https://www.youtube.com/watch?v=19d4AXt3dSI&ab_channel=MerionAcademy
https://ru.wikipedia.org/wiki/WebSocket


Адрес представляет собой 32-битную структуру для протокола IPv4, 128-битную для IPv6.
Номер порта — целое число в диапазоне от 0 до 65535 (для протокола TCP).
194.106.118.30:80


https://ru.wikipedia.org/wiki/%D0%A1%D0%BF%D0%B8%D1%81%D0%BE%D0%BA_%D0%BF%D0%BE%D1%80%D1%82%D0%BE%D0%B2_TCP_%D0%B8_UDP




"PHP: Hypertext Preprocessor" - «PHP: Препроцессор Гипертекста»,
 — распространённый интерпретируемый язык общего назначения с открытым исходным кодом,
 который создавался специально для ведения веб-разработок,
 и код на нём встраивается непосредственно в HTML-код.
 Синтаксис языка берёт начало из языков C, Java и Perl и лёгок для изучения.
 Основная цель языка — помочь веб-разработчикам создавать динамически генерируемые веб-страницы быстро,
 но с PHP можно сделать существенно больше.

PHP – динамически типизированный язык, что означает, что по умолчанию нет необходимости указывать тип переменной, так как он будет определён во время выполнения.



SAPI = Server Application Programming Interface

CGI = Common Gateway Interface
https://ru.wikipedia.org/wiki/Common_Gateway_Interface

Интерпретируемый язык программирования — язык программирования, исходный код на котором выполняется методом интерпретации
https://ru.wikipedia.org/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D0%BF%D1%80%D0%B5%D1%82%D0%B8%D1%80%D1%83%D0%B5%D0%BC%D1%8B%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F


Объе́ктный мо́дуль (также — объектный файл, англ. object file) — файл с промежуточным представлением отдельного модуля программы,
https://ru.wikipedia.org/wiki/%D0%9E%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D0%BD%D1%8B%D0%B9_%D0%BC%D0%BE%D0%B4%D1%83%D0%BB%D1%8C


cron (на платформах *nix или Linux) или с помощью планировщика задач (Task Scheduler) на платформах Windows

$_SERVER - специальная зарезервированная переменная PHP, которая содержит всю информацию, полученную от Web-сервера. Её также называют суперглобальной. Для более подробной информации смотрите раздел Суперглобальные переменные.


Отдельные атомарные типы — это встроенные типы, которые тесно интегрированы с языком и
!которые невозможно воспроизвести пользовательским определением типов!.




Строка (string) — это набор символов, в котором символ — это то же, что и байт. То есть PHP поддерживает набор только из 256 символов и поэтому не предлагает встроенную поддержку кодировки Unicode.

Переменные и управляющие последовательности служебных символов в одинарных кавычках не обрабатываются, в отличие от синтаксиса двойных кавычек и heredoc.
Выводит: Переменные $expand и $either также не разворачиваются
echo 'Переменные $expand и $either также не разворачиваются';

scalaris — ступенчатый) — величина, полностью определяемая в любой координатной системе одним числом или функцией, которое не изменяется при изменении пространственной системы координат.



https://ru.wikipedia.org/wiki/%D0%A1%D0%B5%D1%80%D0%B8%D0%B0%D0%BB%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F
https://www.php.net/manual/ru/refs.database.php

https://www.php.net/manual/ru/refs.basic.text.php
https://www.hongkiat.com/blog/how-to-upgrade-php/
https://www.forevolve.com/en/articles/2016/10/27/how-to-add-your-php-runtime-directory-to-your-windows-10-path-environment-variable/




Принципы для разработки: KISS, DRY, YAGNI, BDUF, SOLID, APO и бритва Оккама

1. YAGNI
You Aren’t Gonna Need It / Вам это не понадобится
Этот принцип прост и очевиден, но ему далеко не все следуют. Если пишете код, то будьте уверены, что он вам понадобится. Не пишите код, если думаете, что он пригодится позже.
Этот принцип применим при рефакторинге. Если вы занимаетесь рефакторингом метода, класса или файла, не бойтесь удалять лишние методы. Даже если раньше они были полезны – теперь они не нужны.
Может наступить день, когда они снова понадобятся – тогда вы сможете воспользоваться git-репозиторием, чтобы воскресить их из мертвых.

2. DRY
Don’t Repeat Yourself / Не повторяйтесь
Дублирование кода – пустая трата времени и ресурсов. Вам придется поддерживать одну и ту же логику и тестировать код сразу в двух местах, причем если вы измените код в одном месте, его нужно будет изменить и в другом.

В большинстве случаев дублирование кода происходит из-за незнания системы. Прежде чем что-либо писать, проявите прагматизм: осмотритесь. Возможно, эта функция где-то реализована. Возможно, эта бизнес-логика существует в другом месте. Повторное использование кода – всегда разумное решение.

3. KISS
Keep It Simple, Stupid / Будь проще

Этот принцип был разработан ВМС США в 1960 году. Этот принцип гласит, что простые системы будут работать лучше и надежнее.
Одна из самых распространенных ошибок нашего времени – использование новых инструментов исключительно из-за того, что они блестят. Разработчиков следует мотивировать использовать новейшие технологии не потому, что они новые, а потому что они подходят для работы.

4.BDUF Big Design Up Front
Глобальное проектирование прежде всего

Этот подход к разработке программного обеспечения очень важен, и его часто игнорируют. Прежде чем переходить к реализации, убедитесь, что все хорошо продумано.
важность проектирования перед реализацией


5. SOLID

Это наиболее известный принцип разработки ПО. Solid — это аббревиатура от:

S) Single-responsibility principle /Принцип единственной ответственности

Его важность невозможно переоценить. Каждый объект, класс и метод должны отвечать только за что-то одно. Если ваш объект/класс/метод делает слишком много, вы получите спагетти-код. Вот пример:

O) Open–closed principle / Принцип открытости-закрытости

Ннельзя переопределять методы или классы, просто добавляя дополнительные функции по мере необходимости.

L) Liskov substitution principle / Принцип подстановки Лисков

Этот принцип гласит, что объекты старших классов должны быть заменимы объектами подклассов, и приложение при такой замене должно работать так, как ожидается.
stating that an object (such as a class) may be replaced by a sub-object (such as a class that extends the first class) without breaking the program.

I) Interface segregation principle / Принцип разделения интерфейсов

Объекты не должны зависеть от интерфейсов, которые они не используют
ПО должно разделяться на независимые части. Побочные эффекты необходимо сводить к минимуму, чтобы обеспечивать независимость.
Убедитесь, что вы не заставляете объекты реализовывать методы, которые им никогда не понадобятся. Вот пример:

interface Animal {
  eat: () => void;
  walk: () => void;
  fly: () => void;
  swim: () => void;
}

Не все животные могут fly, walk или swim, поэтому эти методы не должны быть частью интерфейса или должны быть необязательными.

D) Dependency inversion principle / Принцип инверсии зависимостей

Простой пример – использование дат в JavaScript. Вы можете написать для них свой слой абстракции. Тогда если у вас сменится источник получения дат, вам нужно будет внести изменения в одном месте, а не в тысяче.

6. Avoid Premature Optimization
Избегайте преждевременной оптимизации

Эта практика побуждает разработчиков оптимизировать код до того, как необходимость этой оптимизации будет доказана. Думаю, что если вы следуете KISS или YAGNI, вы не попадетесь на этот крючок.

Очень простой пример – масштабирование. Вы не станете покупать 40 серверов из предположения, что ваше новое приложение станет очень популярным. Вы будете добавлять серверы по мере необходимости.

7. Бритва Оккама
«Не следует множить сущее без необходимости»


Scrum — это методика гибкого управления проектами, помогающая командам структурировать работу и управлять ею на основе определенного набора ценностей, принципов и практик. Как спортивная команда готовится к решающей игре (к слову, scrum — англ. «схватка», элемент игры в регби), так и команда сотрудников компании должна извлекать уроки из полученного опыта, осваивать принципы самоорганизации, работая над решением проблемы, и анализировать свои успехи и провалы, чтобы постоянно совершенствоваться. Scrum содействует этому.

Межпроцессное взаимодействие (англ. inter-process communication, IPC) — обмен данными между потоками одного или разных процессов. Реализуется посредством механизмов, предоставляемых ядром ОС или процессом, использующим механизмы ОС и реализующим новые возможности IPC.


//Операторы исполнения ¶
//PHP поддерживает один оператор исполнения: обратные машинописные апострофы или обратные кавычки (``). Обратите внимание, что это не одинарные кавычки! PHP попытается выполнить строку, заключённую в обратные апострофы, как консольную команду, и вернёт полученный вывод (то есть он не просто будет сброшен в вывод; его можно присвоить переменной). Использовать оператор обратных апострофов — то же, что вызывать функцию shell_exec().
$output = `php -f ./test_2.php`;
echo "<pre>$output</pre>";



Атомарные типы в Java представляют собой специальные классы из пакета java.util.concurrent.atomic, которые обеспечивают атомарность операций чтения и записи для определенных типов данных. Это означает, что операции с атомарными типами выполняются как неделимые и непрерываемые операции, гарантирующие целостность данных.
Скалярный тип данных (scalar data type) содержит одно значение и не имеет внутренних компонентов.
Скаля́р (от лат. scalaris — ступенчатый) — величина, полностью определяемая в любой координатной системе одним числом или функцией, которое не изменяется при изменении пространственной системы координат.


Declaring class properties or methods as static makes them accessible without needing an instantiation of the class


Classes defined as abstract cannot be instantiated, and any class that contains at least one abstract method must also be abstract.


MVC расшифровывается как «модель-представление-контроллер» (от англ. model-view-controller). Это способ организации кода, который предполагает выделение блоков, отвечающих за решение разных задач.
Один блок отвечает за данные приложения, другой отвечает за внешний вид, а третий контролирует работу приложения.


Модель — этот компонент отвечает за данные, а также определяет структуру приложения. Например, если вы создаете To-Do приложение, код компонента model будет определять список задач и отдельные задачи.
Представление — этот компонент отвечает за взаимодействие с пользователем. То есть код компонента view определяет внешний вид приложения и способы его использования.
Контроллер — этот компонент отвечает за связь между model и view. Код компонента controller определяет, как сайт реагирует на действия пользователя. По сути, это мозг MVC-приложения.



URL - Uniform Resource Locator, сокр. URL «единообразный указатель местонахождения ресурса») — адрес ресурса в сети Интернет.
https://ru.wikipedia.org/wiki/URL


REST (Representational state transfer) – это стиль архитектуры программного обеспечения для распределенных систем,
 таких как World Wide Web, который, как правило, используется для построения веб-служб.
 Системы, поддерживающие REST, называются RESTful-системами.
https://www.youtube.com/watch?v=08-RlaLgWx4&ab_channel=MerionAcademy


HTTP (англ. HyperText Transfer Protocol — «протокол передачи гипертекста») — сетевой протокол прикладного уровня,
который изначально предназначался для получения с серверов гипертекстовых документов в формате HTML,
а с течением времени стал универсальным средством взаимодействия между узлами как Всемирной паутины,так и изолированных веб-инфраструктур.


No, REST is the way HTTP should be used.

Today we only use a tiny bit of the HTTP protocol's methods – namely GET and POST. The REST way to do it is to use all of the protocol's methods.

For example, REST dictates the usage of DELETE to erase a document (be it a file, state, etc.) behind a URI,
 whereas, with HTTP, you would misuse a GET or POST query like ...product/?delete_id=22.



CRUD (сокр. от англ. create, read, update, delete — «создать, прочесть, обновить, удалить»)




https://www.youtube.com/watch?v=z0wDQc_UE2M&ab_channel=MerionAcademy
https://www.youtube.com/watch?v=19d4AXt3dSI&ab_channel=MerionAcademy
https://www.youtube.com/watch?v=08-RlaLgWx4&ab_channel=MerionAcademy
https://www.youtube.com/watch?v=liirXTlmmRY&ab_channel=MerionAcademy
https://www.youtube.com/watch?v=19d4AXt3dSI&ab_channel=MerionAcademy
https://www.youtube.com/watch?v=C9T_7D12URI&ab_channel=MerionAcademy
https://www.youtube.com/watch?v=EeARyFrZsnU&ab_channel=MerionAcademy
https://www.youtube.com/watch?v=OmlkEhRHRTA&ab_channel=MerionAcademy
https://www.youtube.com/watch?v=ChEdFh7Q-Vw&ab_channel=MerionAcademy
https://www.youtube.com/watch?v=yO3Ep_bQYgw&ab_channel=MerionAcademy
https://www.youtube.com/watch?v=bv5UqdWm-5k&ab_channel=MerionAcademy
https://www.youtube.com/watch?v=klmpiHLSuXA&ab_channel=MerionAcademy
https://www.youtube.com/watch?v=aZTL2zRmOnA&ab_channel=MerionAcademy
https://www.youtube.com/watch?v=rCbdQc42eCw&ab_channel=MerionAcademy


https://www.youtube.com/watch?v=aZTL2zRmOnA&ab_channel=MerionAcademy
https://www.youtube.com/watch?v=klmpiHLSuXA&ab_channel=MerionAcademy
https://www.youtube.com/watch?v=IBzTDkYNB7I&ab_channel=MerionAcademy
https://www.youtube.com/watch?v=6Pmn93H2az8&ab_channel=MerionAcademy
https://www.youtube.com/watch?v=e0U6-vhWX3s&ab_channel=MerionAcademy
https://www.youtube.com/watch?v=NtGN7Nz6I0c&ab_channel=MerionAcademy
https://www.youtube.com/watch?v=yMSJKBQINAc&ab_channel=MerionAcademy




Объе́ктно ориенти́рованное программи́рование (сокр. ООП) — методология или стиль программирования на
основе описания типов/моделей предметной области и их взаимодействия, представленных порождением из прототипов или как экземпляры классов, которые образуют иерархию наследования[1].

Идеологически, ООП — подход к программированию как к моделированию информационных объектов,
решающий на более высоком абстрактном уровне основную задачу структурного программирования — структурирование информации с точки зрения управляемости[2]. Это позволяет управлять самим процессом моделирования и реализовывать крупные программные проекты.

Управляемость для иерархических систем предполагает минимизацию избыточности данных
(аналогичную нормализации) и их целостность, поэтому созданное удобно управляемым — будет и удобно пониматься.
 Таким образом, через тактическую задачу управляемости решается стратегическая задача —
транслировать понимание задачи программистом в наиболее удобную для дальнейшего использования форму.




TLS (англ. transport layer security — Протокол защиты транспортного уровня[1]),
как и его предшественник SSL (англ. secure sockets layer — слой защищённых сокетов),
 — криптографические протоколы, обеспечивающие защищённую передачу данных между узлами в сети Интернет[2].
 TLS и SSL используют асимметричное шифрование для аутентификации,
симметричное шифрование для конфиденциальности и коды аутентичности сообщений для сохранения целостности сообщений.



Какие основные принципы ООП?
Четыре основных принципа объектно-ориентированного программирования следующие.
Абстракция. Моделирование требуемых атрибутов и взаимодействий сущностей в виде классов для определения абстрактного представления системы.
Инкапсуляция. ...
Наследование. ...
Полиморфизм.





$file = 'people.txt';
$current = file_get_contents($file);
$current .= "John Smith\n";
file_put_contents($file, $current);







 */