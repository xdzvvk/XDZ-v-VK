<?php
 
// Вывод заголовка с данными о кодировке страницы
header('Content-Type: text/html; charset=windows-1251');
 
 
session_start();
  if(!empty($_POST['paswd'])){ 
     $pass = "somePasswordHere"; // password here
    if($_POST['paswd']==$pass){
      $_SESSION['access']=true;
      header("Location: index2.php") ;// Redirecting if correct password
    }
    else {
       header("Location: error.php") ;//Redirecting if not correct password
    }
  }
  else if( empty($_POST['paswd']) ) 
  { 
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Language" content="en-us; charset=windows-1251" />
<meta http-equiv="Content-Type" content="text/html;">
<title>Enter Password</title>
<style type="text/css">
a {
        color: #FFFF00;
}
</style>
 
 
 
</head>
 
<body style="color: #FF0000; background-image: url('http://www..../.../....jpg')">
<br><br><br><br><br><br><br><br>
<h3 align="center">Please Enter Password</h3>
<h2 align="center">(Some hint here...)</h2>
<table width="100%">
          <tr>
          <td>
 <!-- В action ничего не пишем, форма должна передавать данные на эту же страницу -->
    <form action="" method="POST" align="center">
      <input type="text" name="paswd">
      <input type="submit" value="Отправить">
    </form>
<?php
  }
?>