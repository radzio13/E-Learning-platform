<?php
session_start();

require_once "laczenie.php";

$mysqli=@new mysqli($servername, $username, $password,$dbname);

if($mysqli->mysqliect_errno!=0)
{
	echo"Blad:".$mysqli->mysqliect_errno."Opis:".$mysqli->mysqliect_error;
}
else
{ 
	$Login=$_POST['Login'];
	$Haslo=$_POST['Haslo'];
	$sql = "SELECT * FROM uzytkownicy WHERE login='$Login' AND haslo='$Haslo'";
	
	if($rezultat = @$mysqli->query($sql))
	{
		$ilu_uzytkownikow=$rezultat->num_rows;
		if($ilu_uzytkownikow>0)
		{
			$_SESSION['zalogowani']=true;
			
			$wiersz=$rezultat->fetch_assoc();
			$_SESSION['id_uzytkownika']=$wiersz['id_uzytkownika'];
			$_SESSION['login']=$wiersz['login'];
			$_SESSION['stanowisko']=$wiersz['stanowisko'];
			$_SESSION['sposob_uczenia']=$wiersz['sposob_uczenia'];
			
			unset($_SESSION['blad']);
			$rezultat->free_result();
			$login = $_SESSION['login'];
			$styl_uczenia = $mysqli->query("SELECT sposob_uczenia FROM uzytkownicy WHERE login = '$Login' AND sposob_uczenia = 'brak'");
			//$styl_uczenia2 = mysqli_query($mysqli, $styl_uczenia);
			
			if($styl_uczenia -> num_rows == 0)
			{
				header('Location: kategorie.php');
			}
			else
			{
				
				header('Location: testquiz.php');
			}
			
			die();
		}
		else
		{
			
			$_SESSION['blad']='<span style="color:red"> Nieprawidłowy login lub hasło!</span>';
			header('Location:logowanie.php#log');
			die();
		}
	}
	$mysqli->close();
}
?>