<?php
if (!isset($_SESSION)) session_start(); 
if ( !isset($_POST['answ'])||(!isset($_SESSION['ans'])) ) // проверяем есть ли в посте answ - ответ или не существует ли ответ в сессии, если нету значит его уничтожили, либо первый запуск
{
	//тут ничего особенного просто генерируем ответ
	$one=rand(0,20);
	$two=rand(0,20);
	
	if (rand(0,1)>0)
	{
		$_SESSION['ans']=$one+$two;
		echo '<div dat-role="collapsible"><h3>'.$_SESSION['ans'].'</h3>';
	}
	else
	{
		$_SESSION['ans']=$one-$two;
		echo "$one-$two=";
	}
	//и записываем его в сессию
}
else
{
	//если в посте есть данные значит он нажал на ответ
	if (is_numeric($_POST['answ'])) //проверяем число ли, если не делать то 0+0='' будет истинно
	{
		if ((intval($_POST['answ']))===(intval($_SESSION['ans']))) //проверяем эквивалентностью опять же из-за возможного нуля в ответе
		{
		//	дальше код понятен и не требует комментариев
			echo 'ок';
			unset($_SESSION['ans']);
		}
		else 
		{
			header("Location: index.php"); //возвращаемся на страницу формы "GET" методом
exit; 
			unset($_SESSION['ans']);
			unset($_POST['answ']);

		}
	}
	else
	{
		header("Location: index.php"); //возвращаемся на страницу формы "GET" методом
		exit; 
	}
}
//ниже штмл форма
?>
 <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
 <input type="text" name="answ"><br />
 <input type="submit" class="form-submit" value="ок" />
 </form>