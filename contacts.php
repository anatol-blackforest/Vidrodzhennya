<?
//ПРОВЕРЯЕМ АНТИСПАМ
//$verification = $_POST["verification"];

if($file == "contacts" && $deistvie == "mailing")
{
//секция данных===================================================================================
	$mailing = $_POST;
	$empty_fields = Array(
  
	);

//секция логики===================================================================================
	  //проверка правильности ввода в поля
	foreach($mailing as $imia_polia => $znachenie_polia)
	{
		//Если у поля есть формат И значение поля не соответствует своему формату
		if ($formats_contacts[$imia_polia] && !preg_match($formats_contacts[$imia_polia],$znachenie_polia))
		{
		//Запишем имя этого поля в массив пустых полей
		$empty_fields [$imia_polia] = true;
		//поле с именем $imia_polia пустое? да.
		}
	}

	//Если есть пустые поля...
	if($empty_fields)
        {
		//1. На экране будет показано сообщение об ошибке доб./ред. данных об человеке
		$error = "contacts";
	       //2. На экране будет показан файл с формой доб./ред. данных об человеке
		$file = "contacts";
	}
	else
        {       
                $mailing['textarea'] = strip_tags($mailing['fio']);               
                $mailing['textarea'] = strip_tags($mailing['textarea']);
                $fielsyes = true;
		$idea_thanks = "Спасибо за вашу гениальную идею. В ближайшем времени мы ее прочтем и постараемся реализовать в наилучшем виде :)";
		mail("anatolblackforest@gmail.com", "Cagbe", "{$mailing['fio']}\n{$mailing['mail']}\n{$mailing['textarea']}");
	 }

$file	= "contacts" ;
}

?>
