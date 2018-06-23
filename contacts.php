<?php
include('function.php');?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Business Plan</title>
 <link href="style.css" rel="stylesheet" />

</head>

<body >
 <div class="row">
   <div class="header">
 	<h1>Бізнес Ідея</h1>

            <label  >
                Шаблони (3)
            </label>

  	 <form method="post" action="#">
          	   <select name="exampl"  onchange="this.form.submit()" >
                  	<option value="-1">—</option>
    			<option value="1">Дизайн та Реклама  </option>
                        <option value="2">IT Компанія</option>
                        <option value="3">Офіс</option>            
              		</select>
  
    	 </form> 
   
</div>
	
 <?php 
	$value=3;
	session_start(); 
	if(isset($_POST['exampl'])){
	$value = $_POST['exampl'];
	$_SESSION['per']=$value;
	if($value==1){$wg='WG_system';if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;	$_SESSION['counter']++;}
	else if($value==2){ $wg='WG_system';if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;$_SESSION['counter']++;}
	else{$wg='Office_comp';if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;$_SESSION['counter']++;}}
	$SLT=SelectT($wg);
	$SLTM=SelectTMAX($wg);

	if($_SESSION['counter']>=1)
	{unset($_SESSION['mas']); $_SESSION['counter']=0;
	$_SESSION['mas'][]=array('compmin'=>$SLT, 'compmax'=> $SLTM);	} 
	?>

<div class="main">
	
<table>
	<h3>Стартовий капітал</h3>
	<tr>
		<th></th>
		<th>Мінімальна вартість</th>
		<th>Максимальна вартість</th>
	</tr>  
		<tr>
                <td>                  
                    <h3>Обладнання</h3>
 	    <tr>
                <td>Комп'ютери <span class="currency"></span></td>
                <td><input class="min" name="comp" value=" <? if(isset($_SESSION['mas']))
		{foreach ($_SESSION['mas'] as $mas){echo $mas['compmin'];}}?>" type="text" placeholder="0.0"></td>
                 <td><input class="max" name="data[comp]" value="<? if(isset($_SESSION['mas']))
		{foreach ($_SESSION['mas'] as $mas){echo $mas['compmax'];}} ?>" type="text" placeholder="0.0"></td>
            </tr>
                 </td>
 </tr>
 </table>
 </div>
  </div>
</body>
</html> 
