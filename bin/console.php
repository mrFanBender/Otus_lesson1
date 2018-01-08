#!/usr/bin/env php

<?php

require_once __DIR__."/../vendor/autoload.php";

$skobka = new habibullinrustam\skobka_library\Skobka();

echo "Введите путь к файлу, содержащему строку для проверки:";
$file_path = fgets(STDIN);

if(!file_exists($file_path)){
	echo "Файл не существует";
	exit;
}

$file = file_get_contents($file_path);

try{
	if($skobka->compare($file)){
		echo "Все открытые скобки закрыты";
	}else{
		echo "Есть незакрытые скобки";
	}
}catch(InvalidArgumentException $e){
	echo $e->getMessage();
}

