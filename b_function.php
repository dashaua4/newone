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
session_start();

     $_SESSION['min'] = $SLT;
?>
 <?php 

$value=3;

	if(isset($_POST['exampl'])){
$value = $_POST['exampl'];
	if($value==1){$wg='WG_system';}
	else if($value==2){$wg='WG_system';}
else{$wg='Office_comp';	}
	}
	$SLT=SelectT($wg);
$SLTM=SelectTMAX($wg);
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
			
<? echo "<H1>";
print_r ($_SESSION['min']);
echo "</H1>"; 
?> 

	    <tr>
                <td>Комп'ютери <span class="currency"></span></td>
                <td><input class="min" name="comp" value="<? echo $SLT;?>" type="text"></td>
                 <td><input class="max" name="data[comp]" value="<? echo $SLTM;?>" type="text"></td>
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
$SMT='SMT';
$SMTM='SMTM';
	if(isset($_POST['monitor']))
	{
	$val = $_POST['monitor'];
	$diagonal=$val;
	}
	 ?>
	    </td>
	    </tr>
	     <tr>
                <td>Монітори <span class="currency"></span></td>
                <td><input class="min" name="data[comp]" value="<? $SMT($mon,$diagonal);?>"  type="text"></td>
                 <td><input class="max" name="data[comp]" value="<? $SMTM($mon,$diagonal);?>" type="text"></td>
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
		 <td><input  type="radio" id='r2' onclick='foo(this.id);'  value='2'>Оренда</td>
	</tr>
	<script> 
function foo(id) { 
document.getElementById("txt").disabled = id=='r2' ? false : true; 
	document.getElementById("txt1").disabled = id=='r2' ? false : true;
	document.getElementById("txt2").disabled = id=='r2' ? false : true;
	document.getElementById("txt3").disabled = id=='r2' ? false : true;
	} 
 
</script>
	<tr>
	
 <tr>
                <td><h3> Приміщення </h3>
 <tr>
             <td> <form method="post"> 
            <select name="area" disabled id="txt3" onchange="this.form.submit()"  >
                <option value="-1">—</option>
                                <option value="1">Галицький</option>
                           <option value="2">Залізничний</option>
        <option value="3">Личаківський</option>
                    </select>
   </form></td>
  <td>  
	  <form method="post">
            <select name="size"  disabled id="txt2" onchange="this.form.submit()" >
                <option value="-1">—</option>
                                <option value="0">0-50</option>
                           <option value="50">50-100</option>
        <option value="100">100-200</option>
        <option value="200">200-300</option>
        <option value="300">>300</option>
                    </select>
   		</form>
	 </td>
            </tr> 
 	<tr>
	      <td><input type='text' name='txt' id='txt1' disabled value='disabled'></td>
             <td><input type='text' name='txt' id='txt' disabled value='disabled'></td>
            </tr>
	
	 </td>   
        </tr>
 	</tr>

	
</table>
</div>
 </body>
</html>
