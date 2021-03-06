<?php
session_start();

//Создать массив из названий 5 стран мира. Вывести массив на экран при помощи print_r внутри тегов <pre></pre>

echo "<hr>";
echo "<b>Создать массив из названий 5 стран мира. Вывести массив на экран при помощи print_r внутри тегов &lt;pre&gt;&lt;/pre&gt;</b><br />";

echo "<blockquote>";
	echo "<code>";
	
		$contry = array('Украина', 'Канада', 'Австралия', 'Америка', 'Индия'); // Создаем массив
		
		echo '<pre>';
		print_r($contry); // Выводим его при помощи print_r
		echo '</pre>';

	echo "</code>";
echo "</blockquote>";

//Создать ассоциативный массив из 5 элементов, в котором ключи - это названия стран, а значения элементов - это столицы стран. Вывести массив на экран

echo "<hr>";
echo "<b>Создать ассоциативный массив из 5 элементов, в котором ключи - это названия стран, а значения элементов - это столицы стран. Вывести массив на экран</b><br />";

echo "<blockquote>";
	echo "<code>";
	
		$contry = array('Украина' => 'Киев', 'Канада' => 'Торонто', 'Австралия' => 'Сидней', 'Америка' => 'Вашингтон', 'Индия' => 'Дейли'); // Создаем массив
		
		echo '<pre>';
		print_r($contry); // Выводим его при помощи print_r
		echo '</pre>';

	echo "</code>";
echo "</blockquote>";

//Создать многомерный массив, который иллюстрирует список товаров. Каждый товар - это книга (художественная литература). Каждая книга имеет стиль, автора, название и цену. В списке товаров должно быть не менее 3 книг.

echo "<hr>";
echo "<b>Создать многомерный массив, который иллюстрирует список товаров. Каждый товар - это книга (художественная литература). Каждая книга имеет стиль, автора, название и цену. В списке товаров должно быть не менее 3 книг.</b><br />";

echo "<blockquote>";
	echo "<code>";
							// Создаем многомерный массив
		$books = array(
		  array(
		    'genre' => 'художественная литература',
		    'author' => 'Лю Цысинь',
		    'title' => 'Шаровая молния',
		    'price' => 200
		  ),
		  array(
		    'genre' => 'художественная литература',
		    'author' => 'Atticus',
		    'title' => 'Темнота между звездами',
		    'price' => 100
		  ),
		  array(
		    'genre' => 'художественная литература',
		    'author' => 'Фрэнсис Скотт Фицджеральд',
		    'title' => 'Загадочная история Бенджамина Баттона',
		    'price' => 100
		  )
		);
		
		echo '<pre>';
		print_r($books); // Выводим его при помощи print_r
		echo '</pre>';
		
	echo "</code>";
echo "</blockquote>";

//Определить константы, которые соответствуют названиям нескольких стран мира. Используя эти константы, сформировать массив из соответствующих значений

echo "<hr>";
echo "<b>Определить константы, которые соответствуют названиям нескольких стран мира. Используя эти константы, сформировать массив из соответствующих значений</b><br />";

echo "<blockquote>";
	echo "<code>";
	
		define('CANADA', 'Торонто'); // Определяем константы
		define('UKRAINE', 'Киев');
		define('AUSTRALIA', 'Сидней');
		$newCountry[] = CANADA; // Создаем массив из определенных констант
		$newCountry[] = UKRAINE;
		$newCountry[] = AUSTRALIA;
		echo CANADA . "<br />"; // Выводим константы
		echo UKRAINE . "<br />";
		echo AUSTRALIA . "<br />";
		
		var_dump($newCountry); // Выводим массив при помощи var_dump
	
	echo "</code>";
echo "</blockquote>";

//Создать скрипт, который бы вывел на экран значение переменной $$$$$hello. Значение может быть любым.

echo "<hr>";
echo "<b>Создать скрипт, который бы вывел на экран значение переменной $$$$\$hello. Значение может быть любым.</b><br />";

echo "<blockquote>";
	echo "<code>";
	
		$hello = 'y'; // Создаем переменные переменных
		$y = 'q';
		$q = 'w';
		$w = 'z';
		$z = 'Ну приветик :)';
		
		echo $$$$$hello . "<br />"; // Выводим значение $$$$$hello
	
	echo "</code>";
echo "</blockquote>";

//Создать форму, которая содержит поля name, email, phone. Задать скрипт, который выведет на экран отправленные данные - $_POST или $_GET (в зависимости от свойств формы)

echo "<hr>";
echo "<b>Создать форму, которая содержит поля name, email, phone. Задать скрипт, который выведет на экран отправленные данные - \$_POST или \$_GET (в зависимости от свойств формы)</b><br />";

echo "<blockquote>";
	echo "<code>";
	
		echo "<form action='' method='post'>"; // Создаем форму, которая отправляет введенные в нее данные сама себе
			echo "<input type='text' name='name' placeholder='Имя' /> ";
			echo "<input type='text' name='email' placeholder='email' /> ";
			echo "<input type='text' name='phone' placeholder='Телефон' /> ";
			echo "<input type='submit'/>";
		echo "</form>";
		
		echo "<b>Имя: </b>" . $_POST['name'] . "<br />"; // Выводим данные формы
		echo "<b>email: </b>" .  $_POST['email'] . "<br />";
		echo "<b>Телефон: </b>" .  $_POST['phone'] . "<br />";
		
	echo "</code>";
echo "</blockquote>";

//Создать форму с полями username, email, message. Сериализовать данные, полученные при отправке формы и вывести полученную строку на экран.

echo "<hr>";
echo "<b>Создать форму с полями username, email, message. Сериализовать данные, полученные при отправке формы и вывести полученную строку на экран.</b><br />";

echo "<blockquote>";
	echo "<code>";
	
			echo "<form action='' method='post'>"; // Создаем форму, которая отправляет введенные в нее данные сама себе
				echo "<input type='text' name='username' placeholder='Имя пользователя' /> ";
				echo "<input type='text' name='useremail' placeholder='email' /> ";
				echo "<input type='text' name='message' placeholder='Сообщение' /> ";
				echo "<input type='submit'/>";
			echo "</form>";

			echo "<b>Данныe:</b><br />";
			echo $_POST['username'] . "<br />"; // Выводим полученные из формы данные
			echo $_POST['useremail'] . "<br />";
			echo $_POST['message'] . "<br />";
			echo "<b>Сериализация данных:</b><br />";
			echo $_SESSION['username'] = serialize($_POST['username'])  . "<br />"; // Сериализуем данные и сохраняем их в текущей сессии
			echo $_SESSION['useremail'] = serialize($_POST['useremail'])  . "<br />";
			echo $_SESSION['message'] = serialize($_POST['message'])  . "<br />";
			echo "<b>ДеСериализация данных:</b><br />";
			echo unserialize($_SESSION['username'])  . "<br />"; // Десереализуем сериализованные данные и выводим их
			echo unserialize($_SESSION['useremail'])  . "<br />";
			echo unserialize($_SESSION['message'])  . "<br />";
			
	echo "</code>";
echo "</blockquote>";

//Вычислить количество секунд в году и присвоить это значение переменной. Вычислить остаток от деления этого значения на 2

echo "<hr>";
echo "<b>Вычислить количество секунд в году и присвоить это значение переменной. Вычислить остаток от деления этого значения на 2</b><br />";

echo "<blockquote>";
	echo "<code>";
	
		$yearSecond = (((60 * 60) * 24) * 365); // Вычисляем количество секунд в году
		$rest = $yearSecond % 2;                // Вычисляем остатк от деления на 2
		echo "В году " . $yearSecond . " секунд<br />"; // Выводим кол-во секунд
		echo "Остаток от деления " . $yearSecond . " на 2, равен " . $rest . " секунд"; // Выводим результат деления на 2
	
	echo "</code>";
echo "</blockquote>";

//Создать строку, содержащую число 12345 используя лишь отдельные цифры 1,2,3,4,5 и операцию конкатенации

echo "<hr>";
echo "<b>Создать строку, содержащую число 12345 используя лишь отдельные цифры 1,2,3,4,5 и операцию конкатенации</b><br />";

echo "<blockquote>";
	echo "<code>";

		echo "1" . "2" . "3" . "4" . "5"; // Выводим строку 12345 используя конкатенацию

	echo "</code>";
echo "</blockquote>";


//Вычислить значение выражения: false && true || false && true || !false && true
//Вывести на экран true/false в зависимости о того, делится переменная $x на 2 или нет.

echo "<hr>";
echo "<b>Вычислить значение выражения: false && true || false && true || !false && true</b><br />";
echo "<b>Вывести на экран true/false в зависимости о того, делится переменная \$x на 2 или нет.</b><br />";

echo "<blockquote>";
	echo "<code>";

		echo "false && true || false && true || !false && true = " . (false && true || false && true || !false && true) . "<br />"; // Вычисляем значение выражения
		echo "Делится (10 % 2 = 5 (Остаток 0) " . var_dump((10 % 2) && true) . "<br />"; // Выводим результат деления на 2
		echo "Не делится (11 % 2 = 5 (Остаток 1) " . var_dump((11 % 2) && true); // Выводим результат деления на 2

	echo "</code>";
echo "</blockquote>";

//Создать алгоритм обмена значениями двух переменных не используя третьей.

echo "<hr>";
echo "<b>Создать алгоритм обмена значениями двух переменных не используя третьей.</b><br />";

echo "<blockquote>";
	echo "<code>";
	
		$x = 4; // Переменные x и y получают значения
		$y = 3;
		$x = $x + $y; // Начало алгоритма слогаем x и y и присваеваем результат переменной x
		$y = $x - $y; // Вычитаем y из х и присваеваем результат y
		$x = $x - $y; // Вычитаем y из х и присваеваем результат х, обмен значениями состоялся
		
		echo $x . "<br />"; // Выводим результат обмена
		echo $y;
		
	echo "</code>";
echo "</blockquote>";


//Создать алгоритм вычисления максимального значения двух заданных переменных

echo "<hr>";
echo "<b>Создать алгоритм вычисления максимального значения двух заданных переменных</b><br />";

echo "<blockquote>";
	echo "<code>";
	
		$x = 7; // Присваеваем значения переменным
		$y = 9;
		
		echo '$x = 7 <br />'; // Выводим эти значения
		echo '$y = 9 <br />';
		
		if ($x > $y){         // Вычисляем максимальное значение
			echo '$x > $y';   // Если х больше выводим этот результат
		} else {
			echo '$y > $x';   // Если больше у выводим этот результат
		}
	
	echo "</code>";
echo "</blockquote>";	
	
//Создать алгоритм вычисления максимального значения двух заданных переменных при помощи тернарного оператора

echo "<hr>";
echo "<b>Создать алгоритм вычисления максимального значения двух заданных переменных при помощи тернарного оператора</b><br />";

echo "<blockquote>";
	echo "<code>";
	
		$x = 7; // Присваеваем значения переменным
		$y = 9;
		
		echo '$x = 7 <br />'; // Выводим эти значения
		echo '$y = 9 <br />';
		
		echo $x > $y ? '$x > $y' : '$y > $x'; // Вычисляем максимальное значение при помощи тернарного оператора, результат выводим
		
	echo "</code>";
echo "</blockquote>";	

//Создать алгоритм вычисления максимального значения двух переменных при помощи switch

echo "<hr>";
echo "<b>Создать алгоритм вычисления максимального значения двух переменных при помощи switch</b><br />";

echo "<blockquote>";
	echo "<code>";
	
		$x = 7; // Присваеваем значения переменным
		$y = 9;
		
		echo '$x = 7 <br />'; // Выводим эти значения
		echo '$y = 9 <br />';
		
		switch ($x > $y) {    // Вычисляем максимальное значение
		    case true: echo '$x > $y'; // Если х больше выводим этот результат
		    break;                     // В случае успеха в первом case прерываем работу switch
		    case false: echo '$y > $x'; // Если больше у выводим этот результат
		}

	echo "</code>";
echo "</blockquote>";

//Создать алгоритм определения всех простых чисел в промежутке от 1 до 100 при помощи for. Простое число - это число которое делится только на себя и на 1

echo "<hr>";
echo "<b>Создать алгоритм определения всех простых чисел в промежутке от 1 до 100 при помощи for. Простое число - это число которое делится только на себя и на 1</b><br />";

echo "<blockquote>";
	echo "<code>";
	
		for($num = 1; $num <= 100; $num++) // При помощи цикла for пройдем от 1 до 100
		{
			if ($num % 2 != 0) // Вычисляем принадлежность числа к простым числам
			{
				echo "Простое число - " . $num . "<br />"; // В случае определения принадлежности выводим этот результат
			}
		}
	
	echo "</code>";
echo "</blockquote>";	

//Создать алгоритм определения всех простых чисел в промежутке от 1 до 100 при помощи while. Простое число - это число которое делится только на себя и на 1

echo "<hr>";
echo "<b>Создать алгоритм определения всех простых чисел в промежутке от 1 до 100 при помощи while. Простое число - это число которое делится только на себя и на 1</b><br />";

echo "<blockquote>";
	echo "<code>";
	
		$num = 1; // Определим число с которого стартует цикл
		
		while ( $num <= 100 ) // При помощи цикла while пройдем от 1 до 100
		{
			if ($num % 2 != 0) // Вычисляем принадлежность числа к простым числам
			{
				echo "Простое число - " . $num . "<br />"; // В случае определения принадлежности выводим этот результат
			}
		    $num++; // Увеличиваем на 1 значение переменной выражения контролирующего кол-во итераций цикла
		}
		
	echo "</code>";
echo "</blockquote>";

//Создать массив из 10 любых числовых значений. При помощи foreach вывести на экран те значения, которые делятся на 3

echo "<hr>";
echo "<b>Создать массив из 10 любых числовых значений. При помощи foreach вывести на экран те значения, которые делятся на 3</b><br />";

echo "<blockquote>";
	echo "<code>";

		$arr = array(56, 17, 49, 25, 67, 33, 99, 78, 14, 999); // Создаем массив
		
		foreach ($arr as $item) // Проходим циклом по массиву почередно присваивая его значения переменной $item
		{                      
    		if ($item % 3 == 0) // Вычисляем делится ли текущее значение на 3
			{
				echo $item . " делится на 3 <br />"; // Если значение переменной $item делится на 3 выводим результат
			}
		}

	echo "</code>";
echo "</blockquote>";

//Выполнить предыдущие задания при помощи альтернативного синтаксиса

echo "<hr>";
echo "<b>Выполнить предыдущие задания при помощи альтернативного синтаксиса</b><br />";

echo "<blockquote>";
	echo "<code>";
	
// for
		echo "<b>for: </b><br />";
		
		for($num = 1; $num <= 100; $num++)
		:
			if ($num % 2 != 0)
			{
				echo "Простое число - " . $num . "<br />";
			}
		endfor;

// while
		echo "<b>while: </b><br />";
		
		$num = 0;
		
		while ( $num <= 100 ) 
		:
			if ($num % 2 != 0)
			{
				echo "Простое число - " . $num . "<br />";
			}
		    $num++;
		endwhile;

// foreach
		echo "<b>foreach: </b><br />";
				
		$arr = array(56, 17, 49, 25, 67, 33, 99, 78, 14, 999);
		
		foreach ($arr as $item) 
		:	
    		if ($item % 3 == 0)
			{
				echo $item . " делится на 3 <br />";
			}
		endforeach;		
		
	echo "</code>";
echo "</blockquote>";

//Создать алгоритм для определения первого найденного простого числа в промежутке от 200 до 400.

echo "<hr>";
echo "<b>Создать алгоритм для определения первого найденного простого числа в промежутке от 200 до 400.</b><br />";

echo "<blockquote>";
	echo "<code>";

		for($num = 200; $num <= 400; $num++) // При помощи цикла for пройдем от 200 до 400
		{
			if ($num % 2 != 0) // Вычисляем принадлежность числа к простым числам
			{
				echo "Простое число - " . $num . "<br />"; // В случае определения принадлежности выводим этот результат
				break; // Прекращаем цикл т.к. первое простое число найдено
			}
		}

	echo "</code>";
echo "</blockquote>";

//Создать текстовый файл, в котором будет 10 строк. В первой строке записать 1, во второй 22, в третьей 33, ..., в десятой - десять десяток

echo "<hr>";
echo "<b>Создать текстовый файл, в котором будет 10 строк. В первой строке записать 1, во второй 22, в третьей 33, ..., в десятой - десять десяток</b><br />";

echo "<blockquote>";
	echo "<code>";
	
		$myStr = array(1, 22, 33, 44, 55, 66, 77, 88, 99, 10); // Создаем массив данных
		
		$myFile = fopen('mytest.txt', 'w'); // Открываем файл для записи (подразумевается, что права на это у нас есть)
		
			foreach($myStr as $str) // Проходим циклом по массиву почередно присваивая его значения переменной $str
			{
				($str != 10) ? fwrite($myFile, $str . " <br />" . PHP_EOL) : fwrite($myFile, $str . ", "); // Проверяем текущее значение, если оно не равно 10, записываем в файл с переходом на новую строку, если значение 10 пишем в строку через запятую
			}
			
			for($i=1; $i < 10; $i++) // При помощи цикла for добавляем через запятую еще девять десяток
			{
			($i < 9) ? fwrite($myFile, $str . ", ") : fwrite($myFile, $str);
			}
		
		fclose($myFile); // Закрываем файл
		
		include "mytest.txt"; // Показываем что получилось

	echo "</code>";
echo "</blockquote>";

//Создать функцию, которая будет выводить на экран массив внутри тегов <pre></pre>

echo "<hr>";
echo "<b>Создать функцию, которая будет выводить на экран массив внутри тегов &lt;pre&gt;&lt;/pre&gt;</b><br />";

echo "<blockquote>";
	echo "<code>";
	
		function myFunction(array $m) // Создаем функцию которая принимает аргументом массив
		{
			echo "<pre>";
				foreach($m as $str) // Проходим по массиву присваивая его значения переменной
				{
					echo $str . "<br />"; // Выводим значения 
				}
			echo "</pre>";
			
		}

		$m = array('Первый', 'Второй', 'Третий', 'Четвертый',  'Пятый'); // Создаем массив
		
		myFunction($m); // Вызываем функцию

	echo "</code>";
echo "</blockquote>";

//Создать функцию, которая будет выводить на экран массив внутри тегов <pre></pre> В зависимости от значения второго аргумента функции, выводить используя var_dump или print_r. По умолчанию использовать print_r

echo "<hr>";
echo "<b>Создать функцию, которая будет выводить на экран массив внутри тегов &lt;pre&gt;&lt;/pre&gt; В зависимости от значения второго аргумента функции, выводить используя var_dump или print_r. По умолчанию использовать print_r</b><br />";

echo "<blockquote>";
	echo "<code>";

		function myNewFunction($m, $fr=1) // Создаем функцию, ей передаются два аргумента, второй имеет значение по умолчанию, потому не обязательный. Первый это сам массив, второй регулирует вывод - print_r или var_dump (по умолчанию print_r)
		{
			echo "<pre>";
			
			if($fr == 1) // Проверяем значение $fr, если 1, то вывод делает print_r, в противном случае это будет делать var_dump
			{
				echo "<b>print_r:</b><br />";
				print_r($m); // Собственно сам вывод print_r
			} else {
				echo "<b>var_dump:</b><br />";
				var_dump($m); // Собственно сам вывод var_dump
			}

			echo "</pre>";
			
		}

		$m = array('Первый', 'Второй', 'Третий', 'Четвертый',  'Пятый'); // Создаем массив

		myNewFunction($m); // Вызываем функцию, и передаем параметром массив, второй параметр опускаем что значит, что вывод делает print_r (по умолчанию). Если хотим var_dump, указываем вторым параметром число отличное от 1

	echo "</code>";
echo "</blockquote>";

//Создать функцию, которая принимает один аргумент в виде массива и дописывает в него последним элементом количество значений массива

echo "<hr>";
echo "<b>Создать функцию, которая принимает один аргумент в виде массива и дописывает в него последним элементом количество значений массива</b><br />";

echo "<blockquote>";
	echo "<code>";

		function myNewArrayFunction(&$newArray) // Создаем функцию, по ссылке передаем ей массив
		{
			array_push($newArray, count($newArray)); // Добавляем новый элемент массива (это кол-во его значений, без последнего)
			print_r($newArray); // Выводим результат
		}

		$m = array('Первый', 'Второй', 'Третий', 'Четвертый',  'Пятый'); // Создаем массив
		
		myNewArrayFunction($m); // Вызываем функцию, передаем ей массив

	echo "</code>";
echo "</blockquote>";

//Реализовать функцию, которая определяет, будет ли число простым числом

echo "<hr>";
echo "<b>Реализовать функцию, которая определяет, будет ли число простым числом</b><br />";

echo "<blockquote>";
	echo "<code>";
	
		echo "<form action='' method='post'>"; // Создаем форму которая отправляет значения сама себе
			echo "<input type='text' name='mynumb' placeholder='Введите число'> ";
			echo "<input type='submit'/>";
		echo "</form>";	

		function simple_number($n) // Функция для обработки формы, принимает один аргумент
		{

			if (is_numeric($n))    // Проверяем содержит ли переменная число
			{
				(($n % 2) != 0) ? print "$n - простое число" : print "$n - не простое число"; // Определяем простое число или нет и выводим результат
			} else {
				echo "Вы ввели не число"; // Выводит в случае отсутствия значения или если в переменной не число
			}
		}
		
		simple_number($_POST['mynumb']); // Вызов функции

	echo "</code>";
echo "</blockquote>";

//Определить рекурсивную функцию - аналог функции print_r

echo "<hr>";
echo "<b>Определить рекурсивную функцию - аналог функции print_r</b><br />";

echo "<blockquote>";
	echo "<code>";

		function myprint_r($value) // Определяем функцию, она принимает параметром переменную для определения ее типа и значений
		{
		
				if (is_array($value)) // Проверяем тип данных переменной если массив раскладываем его
				{
					echo "Array:( ";
					foreach($value as $key => $value) 
					{
						echo " [$key]=>";
						$value = myprint_r($value);
					} 
					echo " ) ";
				} elseif (is_object($value)) // Проверяем тип данных переменной если обьект выводим его класс, свойства и методы
				{
					echo  "Object is class " . get_class($value) . "( [ "; // Выводим имя класса
					$classvar = get_class_vars(get_class($value)); // Получаем массив свойств класса
					foreach ($classvar as $key => $val) // При помощи цикла выводим элементы массива
					{
						echo get_class($value) . "->" . $key . "=" . $val . "; "; // Сам вывод, оформил как хотел :)
					}
					echo " ][";
					$classvar = get_class_methods(get_class($value)); // Получаем массив методов класса
					foreach ($classvar as $val) // При помощи цикла выводим элементы массива
					{
						echo get_class($value) . "->" . $val . "(); "; // Сам вывод, про оформление уже писал :)
					}
					echo " ] )";
					
				} else {
					echo gettype($value) . "(" . $value . ")"; // В случае если переменная содержит скалярный тип или null, оформляем и выводим
				}
			
		}

		class TestClass // Создаем класс для теста, со свойствами и методами
		{
			public $value1 = "value1";
			public $value2 = "value2";
			public $value3 = "value3";
			
			public function myTestFunction()
		{
			echo "test";
		}
		}
		
		$obj = new TestClass; // Создаем обьект класса TestClass
		
		$testarray = array("первый массив", 89, array("второй массив", 7777.23), array("третий массив", "еще одна строка", 9045)); // Создаем массив для теста
		
		echo "<br />";
		myprint_r($obj); // Вызываем функцию передаем в параметрах обьект класса
		echo "<br />";
		myprint_r($testarray); // Вызываем функцию передаем в параметрах массив
		echo "<br />";
		myprint_r(null); // Вызываем функцию передаем в параметрах null
		echo "<br />";
		myprint_r(10); // Вызываем функцию передаем в параметрах целое число

	echo "</code>";
echo "</blockquote>";

?>
