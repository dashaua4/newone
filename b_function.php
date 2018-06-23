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
	    <tr>
		    <td>
                    <form method="post">
			    <p>Виберіть діагональ
            <select name="monitor"  onchange="this.form.submit()" >
                <option value="-1">—</option>
                                <option value="15">15</option>
                          	<option value="17">17</option>
		    		<option value="18">18</option>
		    		<option value="19">19</option>
		    		<option value="20">20</option>
		    		<option value="21">21</option>
		    		<option value="23">23</option>
		    		
                    </select></p>
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
                <td><input class="min" name="data[comp]" placeholder="0.0"  value="<? if(isset($_SESSION['tn']))
		{foreach ($_SESSION['tn'] as $mas){echo  $mas['monmin']; }} ?>"  type="text"></td>
                 <td><input class="max" name="data[comp]" placeholder="0.0" value="<? if(isset($_SESSION['tn']))
		{foreach ($_SESSION['tn'] as $mas){echo  $mas['monmax']; }}?>" type="text"></td>
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
                <td><input class="min" name="data[furniture]" placeholder="0.0" value="<? echo $SLTT;?>" type="text"></td>
                <td><input class="max" name="data[furniture]"  placeholder="0.0" value="<? echo $SLTMT;?>" type="text"></td>
           	 </tr> 
<?php
			$SLTC=SelectT('Chairs');
	$SLTMC=SelectTMAX('Chairs');			
?>
		<tr>
                <td>Стілець <span class="currency"></span></td>
                <td><input class="min" name="data[furniture]" placeholder="0.0" value="<? echo $SLTC;>" type="text"></td>
             <td><input class="max" name="data[furniture]"  placeholder="0.0" value="<?echo $SLTMC;>" type="text"></td>
            	</tr>
			<?php
	 $SLM=SelectT('Locker');
	$SLMN=SelectTMAX('Locker');				
		?>
		<tr>
                <td>Шафи <span class="currency"></span></td>
                <td><input class="min" name="data[furniture]" placeholder="0.0" value="<? echo $SLM;?>" type="text"></td>
             <td><input class="max" name="data[furniture]" placeholder="0.0" value="<? echo $SLMN;?>" type="text"></td>
           	 </tr>
	</td>   
     </tr>
	
	
	 <tr>
                <td><h3> Витрати на оплату праці </h3>
			<form method="post">
 				  <p>Введіть кількість співробітників*<input name="chet" value="" type="text" onblur="this.form.submit()"></td>
			</p></form>
	    <?php 
	
	if(isset($_POST['chet']))
	{
	$kol=$_POST['chet'];
	$_SESSION['kolvo']=$kol;
	if(isset($_SESSION['per'])){
	$v=$_SESSION['per'];}
	if($v==1){$emp="'Дизайнер'";if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;$_SESSION['counter']++;}
	else if($v==2){$emp="'ІТ Розробник'";if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;$_SESSION['counter']++;}
	else if($v==3){$emp="'Робітник'";if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;$_SESSION['counter']++;}}
	
	$PSL=PerMin('Employees',(int)$kol,$emp);
	$PSLM=PerMax('Employees',(int)$kol,$emp);
	 if($_SESSION['counter']>=1)
	{unset($_SESSION['empl']); $_SESSION['counter']=0;
	$_SESSION['empl'][]=array('emplmin'=>$PSL, 'emplmax'=> $PSLM);}
	
	?>
	
		<tr>
                <td>Персонал </td>
                <td><input class="min" name="data[furniture]" placeholder="0.0" value="<?if(isset($_SESSION['empl']))
		{foreach ($_SESSION['empl'] as $mas){echo  $mas['emplmin']; }} ?>" type="text"></td>
             <td><input class="max" name="data[furniture]" placeholder="0.0" value="<? if(isset($_SESSION['empl']))
		{foreach ($_SESSION['empl'] as $mas){echo  $mas['emplmax']; }} ?>" type="text">
		<img src="info.png"  width="18" height="18" title="Мінімальний набір працівників:Директор,менеджер,бухгалтер,робітик."/></td>
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
                <td><h3> Оренда приміщення </h3>

			     <tr><td> <form method="post"> 
				       <p>Виберіть район
					 <select name="area"  id="txt3"  >
						<option value="-1">—</option>
						<option value="1">Галицький</option>
						<option value="2">Залізничний</option>
						<option value="3">Личаківський</option>
						 </select></p>
			      </td>

				<td>  
					<p>Виберіть квадратуру
					 <select name="size"   id="txt2" onchange="this.form.submit()" >
						<option value="-1">—</option>
						<option value="50">0-50</option>
						<option value="100">50-100</option>
						<option value="200">100-200</option>
						<option value="300">200-300</option>
						<option value="400">>300</option>
					 </select></p>
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
			  <td>Приміщення </td>
	      	<td><input class="min"  placeholder="0.0"  value="<? if(isset($_SESSION['wp']))
		{foreach ($_SESSION['wp'] as $mas){echo  $mas['wpmin']; }} ?>"  type="text"></td>
                 <td><input class="max"  placeholder="0.0" value="<? if(isset($_SESSION['wp']))
		{foreach ($_SESSION['wp'] as $mas){echo  $mas['wpmax']; }} ?>" type="text"></td>
            	</tr>

	 </td>   
</tr>	
</table>
<div>	
	<?php
	 if(isset($_SESSION['wp']))
		{foreach ($_SESSION['wp'] as $mas){$wp= $mas['wpmin'];}} 
	 if(isset($_SESSION['mas']))
		{foreach ($_SESSION['mas'] as $mas){$comp= $mas['compmin'];}} 
	 if(isset($_SESSION['tn']))
		{foreach ($_SESSION['tn'] as $mas){$monitor=$mas['monmin']; }} 
	 if(isset($_SESSION['empl']))
		{foreach ($_SESSION['empl'] as $mas){$empl= $mas['emplmin'];}} 
	if(isset($_SESSION['kolvo'])){
	$s=$_SESSION['kolvo']+3;}
$sum=$s*($comp+$monitor+$SLTT+$SLTC+$SLM)+$wp+$empl;
$sum2=$sum*1.6;
	
echo "<h1>Постійні витрати складають ".$sum." грн.</h1>";
echo  "<h1> В день повинна бути виручка не менше ". (int)$sum2/365 ." грн. 
<p>Річний дохід не менше ". $sum2 ."  грн.</p></h1>";
?></div>
</div>
 </div>
 </body>
</html>
