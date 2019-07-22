<?php
session_start();

// Функция автозагрузки.
function autoloadFunc($className) 
{
    // Статический массив карты классов.
    static $classMap = [
        'Car' => 'classes/Car.php',
        'User' => 'classes/User.php',
        'WaterCar' => 'classes/WaterCar.php',
        'Manager' => 'classes/Manager.php',
        'Admin' => 'classes/Admin.php',
        'ContactForm' => 'classes/ContactForm.php',
        'MyStaticClass' => 'classes/MyStaticClass.php',
        'Fraction' => 'classes/Fraction.php'
    ];

    // Проверяем, находится ли такое имя класса в карте классов.
    if(isset($classMap[$className])) {
        $fileName = $classMap[$className];
  
        // Проверяем, существует ли файл и возможно ли его прочитать.
        if (is_readable($fileName)) {
            // Подлючаем файл.
            require $fileName;
        }
    }
}

// Регистрируем нашу функцию автозагрузки.
spl_autoload_register("autoloadFunc");



//Свойства классов
//Создать класс User со свойствами login, password, email, rating. По умолчанию значение рейтинга задать нулевым.
// Класс создан и находится в classes/User.php

echo "<hr>";
echo "<b>Свойства классов</b><br />";
echo "<b>Создать класс User со свойствами login, password, email, rating. По умолчанию значение рейтинга задать нулевым.</b><br />";
echo "Класс создан и находится в classes/User.php<br />";


//Обращение к свойствам объекта
//Создать класс Car. Записать в этот класс свойства brand, model, year, driver. Создать экземпляры машин Toyota Corolla (2000), Mazda 6 (2015), Ford Taurus (1995) . В рамках предыдущего задания создать экземпляры класса User для нескольких пользователей системы. В свойство driver объектов класса Car записать объекты класса User. Вывести объекты класса Car на экран при помощи var_dump(), print_r()
// Класс создан и находится в classes/Car.php

echo "<hr>";
echo "<b>Обращение к свойствам объекта</b><br />";
echo "<b>Создать класс Car. Записать в этот класс свойства brand, model, year, driver. Создать экземпляры машин Toyota Corolla (2000), Mazda 6 (2015), Ford Taurus (1995) . В рамках предыдущего задания создать экземпляры класса User для нескольких пользователей системы. В свойство driver объектов класса Car записать объекты класса User. Вывести объекты класса Car на экран при помощи var_dump(), print_r()</b><br />";
echo "Класс создан и находится в classes/Car.php<br />";

echo "<blockquote>";
	echo "<code>";

		$mike = new User;
		$mike->login = 'mike';
		$mike->password = '12345';
		$mike->email = 'mike@email.com';
		$mike->rating;
		
		$alex = new User;
		$alex->login = 'alex';
		$alex->password = '12345';
		$alex->email = 'alex@email.com';
		$alex->rating = '2';
		
		$nik = new User;
		$nik->login = 'nik';
		$nik->password = '12345';
		$nik->email = 'nik@email.com';
		$nik->rating = '1';
		
		$john = new User;
		$john->login = 'john';
		$john->password = '12345';
		$john->email = 'nik@email.com';
		$john->rating = '1';
		
		$toyota_corolla = new Car;
		$toyota_corolla->brand = 'Toyota';
		$toyota_corolla->model = 'Corolla';
		$toyota_corolla->year = '2000';
		$toyota_corolla->driver = $mike;
		
		$mazda_6 = new Car;
		$mazda_6->brand = 'Mazda';
		$mazda_6->model = '6';
		$mazda_6->year = '2015';
		$mazda_6->driver = $alex;
		
		$ford_taurus = new Car;
		$ford_taurus->brand = 'Ford';
		$ford_taurus->model = 'Taurus';
		$ford_taurus->year = '1995';
		$ford_taurus->driver = $john;
		
		echo "<b>var_dump:</b><br />";
		var_dump($ford_taurus);
		echo "<br />";
		echo "<b>print_r:</b><br />";
		print_r($ford_taurus);

	echo "</code>";
echo "</blockquote>";

//Методы классов / объектов
//Для класса User из предыдущего занятия создать методы login(), logout(), которые просто выводят на экран соответствующее сообщение. Создать экземпляр класса, вызвать созданные методы.

echo "<hr>";
echo "<b>Методы классов / объектов</b><br />";
echo "<b>Для класса User из предыдущего занятия создать методы login(), logout(), которые просто выводят на экран соответствующее сообщение. Создать экземпляр класса, вызвать созданные методы.</b>";

echo "<blockquote>";
	echo "<code>";
	
		$luka = new User();
		$luka->login = 'luka';
		$luka->password = '12345';
		$luka->email = 'luka@email.com';
		$luka->rating = '5';
		$luka->login();
		echo "<br />";
		$mike->logout();

	echo "</code>";
echo "</blockquote>";

//Приведение типов
//Создать массив, который описывает сообщение ключами name, email, message с соответствующими значениями. Привести массив к объекту. Проанализировать результат при помощи var_dump.

echo "<hr>";
echo "<b>Приведение типов</b><br />";
echo "<b>Создать массив, который описывает сообщение ключами name, email, message с соответствующими значениями. Привести массив к объекту. Проанализировать результат при помощи var_dump.</b>";

echo "<blockquote>";
	echo "<code>";
	
		$a = array('name' => 'Mike', 'email' => 'mike@email.com', 'message' => 'Hello!');
		echo "<b>var_dump приводим массив к объекту:</b><br />";
		$obj = (object)$a;
		var_dump($obj);
		echo "<br />";
		echo "<b>var_dump приводим объект к массиву:</b><br />";
		var_dump((array)$luka);

	echo "</code>";
echo "</blockquote>";

//Переменная $this
//В класс Car из предыдущих заданий добавить методы showBrand(), showModel() которые выводят на экран значения свойств brand, model соответственно. В класс User из предыдущих заданий добавить свойство isLogged, которое принимает true, если пользователь успешно авторизировался, и false при выходе из системы. Задать значения для этого свойства в методах login(), logout().

echo "<hr>";
echo "<b>Переменная \$this</b><br />";
echo "<b>В класс Car из предыдущих заданий добавить методы showBrand(), showModel() которые выводят на экран значения свойств brand, model соответственно. В класс User из предыдущих заданий добавить свойство isLogged, которое принимает true, если пользователь успешно авторизировался, и false при выходе из системы. Задать значения для этого свойства в методах login(), logout().</b>";

echo "<blockquote>";
	echo "<code>";
	
		$zaz = new Car;
		$zaz->brand = 'Zaparozec';
		$zaz->model = 'Ushasty';
		echo $zaz->showBrand() . "<br />";
		echo $zaz->showModel();
		
		echo "<br /><br />";
		
		$vasya = new User;
		$vasya->login = 'vasya';
		$vasya->password = '12345';
		$vasya->email = 'vasya@email.com';
		$vasya->rating = '4';
		$vasya->login();
		echo $vasya->isLogged;
		echo "<br />";
		$vasya->logout();
		echo $vasya->isLogged;

	echo "</code>";
echo "</blockquote>";

//Public и private
//В класс Car из предыдущих заданий добавить private свойство price, а также публичные геттер и сеттер для него. Геттер должен зависеть от одного параметра. В зависимости от того, было ли в функцию геттера передано true, выводить отформатированную цену, либо же в обычном виде (использовать функцию number_format). Сеттер должен приводить входящий параметр к числу, у которого не более 2 знаков после запятой (использовать round).

echo "<hr>";
echo "<b>Public и private</b><br />";
echo "<b>В класс Car из предыдущих заданий добавить private свойство price, а также публичные геттер и сеттер для него. Геттер должен зависеть от одного параметра. В зависимости от того, было ли в функцию геттера передано true, выводить отформатированную цену, либо же в обычном виде (использовать функцию number_format). Сеттер должен приводить входящий параметр к числу, у которого не более 2 знаков после запятой (использовать round).</b>";


echo "<blockquote>";
	echo "<code>";
	
		$zaz->setPrice(1400.85484);
		echo $zaz->getPrice(true) . "<br />";
		echo $zaz->getPrice();

	echo "</code>";
echo "</blockquote>";

//Наследование классов
//Унаследовать от класса Car из предыдущих занятий класс WaterCar со свойством waterSpeed.
//Класс WaterCar создан и унаследаван от класса Car, он находится в classes/WaterCar.php
echo "<hr>";
echo "<b>Наследование классов</b><br />";
echo "<b>Унаследовать от класса Car из предыдущих занятий класс WaterCar со свойством waterSpeed.</b><br />";
echo "Класс WaterCar создан и унаследаван от класса Car, он находится в classes/WaterCar.php";

echo "<blockquote>";
	echo "<code>";
	
		$newwatercar = new WaterCar;
		print_r($newwatercar);

	echo "</code>";
echo "</blockquote>";

//Protected - защищенные свойства и методы
//Изменить область видимости свойств класса User на protected. Унаследовать от класса User классы Manager, Admin. Создать объекты менеджера и админа, задать значения для свойств объектов.

echo "<hr>";
echo "<b>Protected - защищенные свойства и методы</b><br />";
echo "<b>Изменить область видимости свойств класса User на protected. Унаследовать от класса User классы Manager, Admin. Создать объекты менеджера и админа, задать значения для свойств объектов.</b>";

echo "<blockquote>";
	echo "<code>";
	
		$managerPasha = new Manager;
		$managerPasha->setManager('pasha', '12345', 'pasha@email.com', '6');
		echo $managerPasha->getManager() . "<br />";
		echo "<b>var_dump:</b><br />";
		var_dump($managerPasha);
		echo "<br /><br />";
		 
		$adminLesha = new Admin;
		$adminLesha->setAdmin('lesha', '12345', 'lesha@email.com', '10');
		echo $adminLesha->getAdmin() . "<br />";
		echo "<b>var_dump:</b><br />";
		var_dump($adminLesha);

	echo "</code>";
echo "</blockquote>";

//Клонирование объектов
//Создать экземпляр класса User с конкретными значениями свойств и клонировать его в новую переменную. Свойствам нового экземпляра присвоить новые значения. Сравнить полученные экземпляры класса.

echo "<hr>";
echo "<b>Клонирование объектов</b><br />";
echo "<b>Создать экземпляр класса User с конкретными значениями свойств и клонировать его в новую переменную. Свойствам нового экземпляра присвоить новые значения. Сравнить полученные экземпляры класса.</b>";


echo "<blockquote>";
	echo "<code>";
	
		$dasha = new User();
		$dasha->login = 'dasha';
		$dasha->password = '12345';
		$dasha->email = 'dasha@email.com';
		$dasha->rating = '5';
		echo "<b>var_dump:</b><br />";
		var_dump($dasha);
		echo "<br />";
		
		$sveta = clone $dasha;
		echo "<b>var_dump:</b><br />";
		var_dump($sveta);
		echo "<br />";
		
		$sveta->login = 'sveta';
		$sveta->password = '12345';
		$sveta->email = 'sveta@email.com';
		$sveta->rating = '7';
		echo "<b>var_dump:</b><br />";
		var_dump($sveta);

	echo "</code>";
echo "</blockquote>";

//Магические методы: конструктор и деструктор
//В класс Car из предыдущих заданий добавить конструктор, который выводит сообщение Car created при создании нового экземпляра класса. Создать контактную форму. Создать скрипт обработчик контактной формы. Создать класс ContactForm со свойствами, значения которых совпадают с названиями полей формы. Создать экземпляр класса ContactForm по массиву $_POST при отправке формы.

echo "<hr>";
echo "<b>Магические методы: конструктор и деструктор</b><br />";
echo "<b>В класс Car из предыдущих заданий добавить конструктор, который выводит сообщение Car created при создании нового экземпляра класса. Создать контактную форму. Создать скрипт обработчик контактной формы. Создать класс ContactForm со свойствами, значения которых совпадают с названиями полей формы. Создать экземпляр класса ContactForm по массиву $_POST при отправке формы.</b>";

echo "<blockquote>";
	echo "<code>";
	
		echo "<br />";
		echo "<form name='myform' action='' method='post'>";
		echo "Name: <input type=text name='name'> ";
		echo "email: <input type=text name='email'> ";
		echo "Subject: <input type=text name='subject'> ";
		echo "<input type=submit value='Send'>";
		echo "</form>";
		echo "<br />";
		$formSubject = new ContactForm;
		
		if (filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS))
		{
			$_SESSION['name'] = $_POST['name'];
		} else {
			$_SESSION['name'] = "Anonimous";
		    echo $_POST['name'] = "Вы пожелали быть анонимом ";
		}
		
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
			$_SESSION['email'] = $_POST['email'];
		} else {
		    echo "E-mail адрес -- " .  $_POST['email'] . " -- указан неверно или не указан вовсе. ";
		}
		
		if (filter_var($_POST['subject'], FILTER_SANITIZE_FULL_SPECIAL_CHARS))
		{
			$_SESSION['subject'] = $_POST['subject'];
		} else {
		    echo $_POST['subject'] = "Сообщение отсутствует";
		}
		
		$formSubject = new ContactForm;
		$formSubject->name = $_SESSION['name'];
		$formSubject->email = $_SESSION['email'];
		$formSubject->subject = $_SESSION['subject'];
		
		echo "<br />";
		echo "<b>var_dump:</b><br />";
		var_dump($formSubject);

	echo "</code>";
echo "</blockquote>";

//Статические свойства
//Создать класс со статическим свойством, которое будет содержать значение количества созданных экземпляров.

echo "<hr>";
echo "<b>Статические свойства</b><br />";
echo "<b>Создать класс со статическим свойством, которое будет содержать значение количества созданных экземпляров.</b>";

echo "<blockquote>";
	echo "<code>";
	
		$newStaticVar = new MyStaticClass;
		echo MyStaticClass::$x;

	echo "</code>";
echo "</blockquote>";

//Статические методы
//Создать класс Fraction, который моделирует простую дробь с числителем и знаменателем. Определить методы конструктор, сокращения дроби и представления дроби в десятичном виде. Определить статические методы для арифметических операций с двумя дробями.
// Класс создан и находится в classes/Fraction.php

echo "<hr>";
echo "<b>Статические методы</b><br />";
echo "<b>Создать класс Fraction, который моделирует простую дробь с числителем и знаменателем. Определить методы конструктор, сокращения дроби и представления дроби в десятичном виде. Определить статические методы для арифметических операций с двумя дробями.</b><br />";
echo "Kласс создан и находится в classes/Fraction.php";

echo "<blockquote>";
	echo "<code>";
	
		$frRes = new Fraction;
		Fraction::numAdd(1.2, 3.2);
		echo " (Сложение 1.2 + 3.2)<br />";
		Fraction::numSub(1.2, 3.2);
		echo " (Вычитание 1.2 - 3.2)<br />";
		Fraction::numMult(1.2, 3.2);
		echo " (Умножение 1.2 * 3.2)<br />";
		Fraction::numDiv(1.2, 3.2);
		echo " (Деление 1.2 / 3.2)";

	echo "</code>";
echo "</blockquote>";

//Обращение к классу при помощи self
//Создать класс со статическим свойством, которое будет содержать значение количества созданных экземпляров (использовать self)
// Класс уже создан это - MyStaticClass.php

echo "<hr>";
echo "<b>Обращение к классу при помощи self</b><br />";
echo "<b>Создать класс со статическим свойством, которое будет содержать значение количества созданных экземпляров (использовать self)</b><br />";
echo "Класс уже создан это - MyStaticClass.php";

//Магические методы __clone, __get, __set
//В класс User из предыдущих заданий добавить магические методы __get, __set для закрытых свойств, которые будут возвращать / присваивать соответствующие значения.

echo "<hr>";
echo "<b>Магические методы __clone, __get, __set</b><br />";
echo "<b>В класс User из предыдущих заданий добавить магические методы __get, __set для закрытых свойств, которые будут возвращать / присваивать соответствующие значения.</b>";

echo "<blockquote>";
	echo "<code>";
	
		$kolyan = new User;
		$kolyan->login = 'kolyan';
		$kolyan->password = '123456';
		$kolyan->email = 'kolyan@email.com';
		$kolyan->rating = '3';
		echo $kolyan->login;
		echo "<br />";
		echo $kolyan->password;
		echo "<br />";
		echo $kolyan->email;
		echo "<br />";
		echo $kolyan->rating;

	echo "</code>";
echo "</blockquote>";

//Интерфейсы
//Создать интерфейс для класса User из предыдущих заданий
//Интерфейс UserInterface создан

echo "<hr>";
echo "<b>Интерфейсы</b><br />";
echo "<b>Создать интерфейс для класса User из предыдущих заданий</b><br />";
echo "Интерфейс UserInterface создан";

//Реализация интерфейсов
//Реализовать интерфейс из предыдущего задания классом User
// Интерфейс реализован

echo "<hr>";
echo "<b>Реализация интерфейсов</b><br />";
echo "<b>Реализовать интерфейс из предыдущего задания классом User</b><br />";
echo "Интерфейс реализован";

//Исключения в PHP. Ловим исключения
//В класс Fraction из предыдущих занятий (урок Статические Методы) добавить использование исключений при попытке деления на 0

echo "<hr>";
echo "<b>Исключения в PHP. Ловим исключения</b><br />";
echo "<b>В класс Fraction из предыдущих занятий (урок Статические Методы) добавить использование исключений при попытке деления на 0</b>";

echo "<blockquote>";
	echo "<code>";
	
		Fraction::numAdd(1.2, 3.2);
		echo " (Сложение 1.2 + 3.2)<br />";
		Fraction::numSub(1.2, 3.2);
		echo " (Вычитание 1.2 - 3.2)<br />";
		Fraction::numMult(1.2, 0);
		echo " (Умножение 1.2 * 0)<br />";
		Fraction::numDiv(1.2, 3.2);
		echo " (Деление 1.2 / 3.2)";

	echo "</code>";
echo "</blockquote>";

echo "<hr><br />";

?>
