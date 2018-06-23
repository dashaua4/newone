  <?php 

include('function.php');

?>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Business Plan</title>
   <link href="style.css" rel="stylesheet" />         
</head>
   
<body>
	
	
   <div class="header">
 	<h1>Бізнес Ідея</h1>
    <div class="row">
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
                <td><input class="min" name="comp" value="<? if(isset($_SESSION['mas']))
		{foreach ($_SESSION['mas'] as $mas){echo $mas['compmin'];}}?>" type="text" placeholder="0.0"></td>
                 <td><input class="max" name="data[comp]" value="<? if(isset($_SESSION['mas']))
		{foreach ($_SESSION['mas'] as $mas){echo $mas['compmax'];}} ?>" type="text" placeholder="0.0"></td>
            </tr>
	    <tr>
		    <td>
                    <form method="post">
            <select name="monitor"  onchange="this.form.submit()" >
                <option value="-1">—</option>
                                <option value="15">15</option>
                          	<option value="17">17</option>
		    		<option value="18">18</option>
		    		<option value="19">19</option>
		    		<option value="20">20</option>
		    		<option value="21">21</option>
		    		<option value="23">23</option>
		    		
                    </select>
		 </form>
 <?php 
	 $mon='Monitor';
	if(isset($_POST['monitor']))
	{
	$val = $_POST['monitor'];
	$diagonal=$val;
	if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;$_SESSION['counter']++;}
	$SMT=SMT($mon,$diagonal);
	$SMTM=SMTM($mon,$diagonal);
	 if($_SESSION['counter']>=1)
	{unset($_SESSION['tn']); $_SESSION['counter']=0;
	$_SESSION['tn'][]=array('monmin'=>$SMT, 'monmax'=> $SMTM);}
 ?>
	    </td>
	    </tr>
	     <tr>
                <td>Монітори <span class="currency"></span></td>
                <td><input class="min" name="data[comp]"  value="<? if(isset($_SESSION['tn']))
		{foreach ($_SESSION['tn'] as $mas){echo  $mas['monmin']; }} ?>"  type="text"></td>
                 <td><input class="max" name="data[comp]" value="<? if(isset($_SESSION['tn']))
		{foreach ($_SESSION['tn'] as $mas){echo  $mas['monmax']; }} ?>" type="text"></td>
            </tr>	
			
	     <tr>
                <td>Переферія <span class="currency"></span></td>
                <td><input class="min" name="data[comp]" value="" type="text"></td>
                 <td><input class="max" name="data[comp]" type="text"></td>
             </tr>
           </td>
        </tr>
<?php
	$SLTT=SelectT('Tables');
	$SLTMT=SelectTMAX('Tables');
?>
        <tr>
                <td><h3> Меблі </h3>
	    <tr>
                <td>Стіл <span class="currency"></span></td>
                <td><input class="min" name="data[furniture]" value="<? echo $SLTT;?>" type="text"></td>
                <td><input class="max" name="data[furniture]" value="<? echo $SLTMT;?>" type="text"></td>
            </tr> 
<?php
	$SLTC=SelectT('Chairs');
	$SLTMC=SelectTMAX('Chairs');				
?>
	<tr>
                <td>Стілець <span class="currency"></span></td>
                <td><input class="min" name="data[furniture]" value="<? echo $SLTC;?>" type="text"></td>
             <td><input class="max" name="data[furniture]" value="<? echo $SLTMC;?>" type="text"></td>
            </tr>
	<tr>
                <td>Шафи <span class="currency"></span></td>
                <td><input class="min" name="data[furniture]" value="" type="text"></td>
             <td><input class="max" name="data[furniture]" type="text"></td>
            </tr>
	</td>   
        </tr>
	
	
	 <tr>
                <td><h3> Витрати на оплату праці </h3>
			<form method="post">
 				<input class="min" name="chet" value="" type="text" onblur="this.form.submit()"></td>
			</form>
	    <?php 
	
	if(isset($_POST['chet']))
	{
	$kol=$_POST['chet'];
	if(isset($_SESSION['per'])){
	$v=$_SESSION['per'];}
	echo $v;
	if($v==1){$emp="'Дизайнер'";}
	else if($v==2){$emp="'ІТ Розробник'";}
	else if($v==3){$emp="'Робітник'";}
	echo $emp.'---'.(int)$kol;}
	$PSL=PerMin('Employees',(int)$kol,$emp);
	$PSLM=PerMax('Employees',(int)$kol,$emp);				
	?>
	
	<tr>
                <td>Персонал <span class="currency"></span></td>
                <td><input class="min" name="data[furniture]" value="<? echo $PSL;?>" type="text"></td>
             <td><input class="max" name="data[furniture]" value="<? echo $PSLM;?>" type="text"></td>
            </tr>
	</td>   
        </tr>
	
		
	<tr>
		 <td><input  type="radio" id='r1' onclick='foo(this.id);'  value='1' >Власне</td>
		 <td><input  type="radio" id='r2' onclick='foo(this.id);'  value='2' >Оренда</td>
	</tr>
	<script> 
	//function foo(id) { 
	//document.getElementById("txt").disabled = id=='r2' ? false : true; 
	//document.getElementById("txt1").disabled = id=='r2' ? false : true;
	//document.getElementById("txt2").disabled = id=='r2' ? false : true;
	//document.getElementById("txt3").disabled = id=='r2' ? false : true;
	//} 
 	</script>
<tr>
	
 <tr>
                <td><h3> Оренда приміщення </h3>
 <tr>
             <td> <form method="post"> 
           		 <select name="area"  id="txt3"  >
                		<option value="-1">—</option>
                                <option value="1">Галицький</option>
                          	<option value="2">Залізничний</option>
       				<option value="3">Личаківський</option>
            			 </select>
   	      </td>
	
  		<td>  
	
           		 <select name="size"   id="txt2" onchange="this.form.submit()" >
              	  		<option value="-1">—</option>
                                <option value="50">0-50</option>
                           	<option value="100">50-100</option>
        		 	<option value="200">100-200</option>
       	 			<option value="300">200-300</option>
        			<option value="400">>300</option>
                   	 </select>
   		   </form>
   		</td>
</tr>  
<?php 
	$table='Workplace';
	$value=3;
	if(isset($_POST['area'])){
	$val1 = $_POST['area'];
	if($val1==1){$area='Галицький';if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;
	$_SESSION['counter']++;}
	else if($val1==2){ $area='Залізничний';if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;
	$_SESSION['counter']++;}
	else{$area='Личаківський';if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;
	$_SESSION['counter']++;}}
	$area="'".$area."'";
	if(isset($_POST['size']))
	{
	$val2 = $_POST['size'];
	$size=$val2;
	if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;
	$_SESSION['counter']++;
	}
	$W_PSMin=W_PSMin($table,$area,(int)$size);
	$W_PSMax=W_PSMax($table,$area,(int)$size);
	if($_SESSION['counter']>=1)
	{unset($_SESSION['wp']); $_SESSION['counter']=0;
	$_SESSION['wp'][]=array('wpmin'=>$W_PSMin, 'wpmax'=> $W_PSMax);
	}?>
 		<tr>
	      	<td><input class="min" name="data[comp]"  value="<? echo $W_PSMin;?>"  type="text"></td>
                 <td><input class="max" name="data[comp]" value="<? echo $W_PSMax;?>" type="text"></td>
            	</tr>

	 </td>   
     </tr>
 </tr>
	
	
	
	
	
</table>

<img src="info.jpg" title="Мінімальний набір працівників:Директор,менеджер,бухгалтер,робітик."/>





<div>	
	<?php
	 if(isset($_SESSION['wp']))
		{foreach ($_SESSION['wp'] as $mas){$w= $mas['wpmin'];}} 
	 if(isset($_SESSION['mas']))
		{foreach ($_SESSION['mas'] as $mas){$m= $mas['compmin'];}} 
	 if(isset($_SESSION['tn']))
		{foreach ($_SESSION['tn'] as $mas){$n=$mas['monmin']; }} 
$sum=$m+$n+$SLTT+$SLTC+$w;
$sum2=$sum*1.6;
	
echo "<h1>Постійні витрати складають ".$sum." грн.</h1>";
echo  "<h1> В день повинна бути виручка не менше ". (int)$sum2/365 ." грн. 
Річний дохід не менше ". $sum2 ."  грн.</h1>";
?></div>
</div>

 </body>
</html>
