  <?php 

include('function.php');

?>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>!</title>
   <link href="style.css" rel="stylesheet" />         


</head>
   
<body>
	<?php 
	?>
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
	if($value==1){$wg='WG_system';if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;
$_SESSION['counter']++;}
	else if($value==2){ $wg='WG_system';if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;
$_SESSION['counter']++;}
else{$wg='Office_comp';if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;
$_SESSION['counter']++;}
	}
	$SLT=SelectT($wg);
$SLTM=SelectTMAX($wg);

	if($_SESSION['counter']>=1)
	{unset($_SESSION['mas']); $_SESSION['counter']=0;
	$_SESSION['mas'][]=array('compmin'=>$SLT, 'compmax'=> $SLTM);
	}		
	
	session_write_close($_SESSION['mas']);	
?>
<div class="main">
<table>
<tr>
	<th>Що купуємо</th>
        <th>Мінімальна вартість</th>
        <th>Максимальна вартість</th>
</tr>        
		<tr>
                <td>                  
                    <h3>Обладнання</h3>
			
	    <tr>
                <td>Комп'ютери <span class="currency"></span></td>
                <td><input class="min" name="comp" value="<? if(isset($_SESSION['mas']))
		{foreach ($_SESSION['mas'] as $mas){
	echo  $mas['compmin']; }} ?>" type="text" placeholder="0.0"></td>
                 <td><input class="max" name="data[comp]" value="<? if(isset($_SESSION['mas']))
		{foreach ($_SESSION['mas'] as $mas){
	echo  $mas['compmax']; }} ?>" type="text" placeholder="0.0"></td>
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
	if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;
$_SESSION['counter']++;
	}
	$SMT=SMT($mon,$diagonal);
	$SMTM=SMTM($mon,$diagonal);
			    if($_SESSION['counter']>=1)
	{unset($_SESSION['tn']); $_SESSION['counter']=0;
	$_SESSION['tn'][]=array('monmin'=>$SMT, 'monmax'=> $SMTM);}
		    
	//unset($_SESSION['mas']);
	//unset($_SESSION['counter']);	    
	 ?>
	    </td>
	    </tr>
	     <tr>
                <td>Монітори <span class="currency"></span></td>
                <td><input class="min" name="data[comp]"  value="<? if(isset($_SESSION['tn']))
		{foreach ($_SESSION['tn'] as $mas){
	echo  $mas['monmin']; }} ?>"  type="text"></td>
                 <td><input class="max" name="data[comp]" value="<? if(isset($_SESSION['tn']))
		{foreach ($_SESSION['tn'] as $mas){
	echo  $mas['monmax']; }} ?>" type="text"></td>
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
                <td><h3> Приміщення </h3>
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
	$value = $_POST['area'];
	if($value==1){$area='Галицький';if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;
	$_SESSION['counter']++;}
	else if($value==2){ $area='Залізничний';if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;
	$_SESSION['counter']++;}
	else{$area='Личаківський';if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;
	$_SESSION['counter']++;}
	}
	echo $area;
	if(isset($_POST['size']))
	{
	$val = $_POST['size'];
	$size=$val;
	if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;
	$_SESSION['counter']++;
	}
		echo $size;	
	$W_PSMin=W_PSMin('Workplace','Галицький',50);
$W_PSMax=W_PSMax('Workplace','Галицький',50);
echo $W_PSMin.'   '.$W_PSMax;
	if($_SESSION['counter']>=1)
	{unset($_SESSION['wp']); $_SESSION['counter']=0;
	$_SESSION['wp'][]=array('wpmin'=>$W_PSMin, 'wpmax'=> $W_PSMin);
	}		
	
	session_write_close($_SESSION['mas']);	
?>
 	<tr>
	      
		<td><input class="min" name="data[comp]"  value="<? echo $W_PSMin;?>"  type="text"></td>
                 <td><input class="max" name="data[comp]" value="<? echo $W_PSMax;?>" type="text"></td>
            </tr>
	
	 </td>   
        </tr>
 	</tr>

	
</table>
<?php
$sum=$_SESSION['mas']['compmin']+$_SESSION['tn']['monmin]+$SLTT+$SLTC;
$sum2=$sum*1.6;
echo "<h1>Постійні витрати складають ".$sum." тис. грн.</h1>";
echo  "<h1> В день повинна бути виручка не менше ". $sum2/365 ."тис. грн. 
Річний дохід не менше ". $sum2 ." тис. грн.</h1>";
?>
</div>
 </body>
</html>
