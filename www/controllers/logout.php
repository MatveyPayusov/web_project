<?php

/*
* Описание: Данный файл содержит код, который позволяет пользователю
* выйти из своей учетной записи на главную страницу приложения
*
* Разработал: Матвей Калин.
*
* Дата разработки: 28.03.2015.
* 
* Дата последнего изменения: .
*/
	// Запускаем сессию
	session_start();
	
	// Подключаем модули
	require_once('../configuration_files/include_modules.php');

	// Если пользователь вошел в приложение и нажал на ссылку
	// "Выйти из приложения", то ...
	if (isset($_SESSION['user_id'])) {
		
		// ... удаляем переменные сессии, присваивая суперглобальному массиву
		// пустой массив
		$_SESSION = array();
		
		// Удаление сессии
		session_destroy();
		
		// Вызываем функцию, которая переадресует на страницу, имя которой написано в параметре
		teleportation('../index.php');
		
	}
		
?>