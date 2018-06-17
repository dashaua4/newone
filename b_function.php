  <?php 

include('function.php');

?>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>!</title>
   <link href="style.css" rel="stylesheet" />         
 <style>
	 fieldset{display: none;}
</style>
<script type="text/javascript">
function toggleSet(rad)
{
var type = rad.value;
for(var k=0,elm;elm=rad.form.elements[k];k++)
if(elm.className=='item')
elm.style.display = elm.id==type? 'inline':'';
}
</script>
</head>
   
<body>
   <div class="header">
 <h1>Бізнес Ідея</h1>
    <div class="row">
            <label  >
                Шаблони (3)
            </label>
   <form method="post" action="b_function.php">
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
$SLT='SelectT';
$SLTM='SelectTMAX';
	if(isset($_POST['exampl'])){
$value = $_POST['exampl'];

	if($value==1){$wg='WG_system';}
	else if($value==2){$wg='WG_system';}
else{$wg='Office_comp';	}
	}
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
                <td><input class="min" name="data[comp]" value="<? $SLT($wg);?>" type="text"></td>
                 <td><input class="max" name="data[comp]" value="<? $SLTM($wg);?>" type="text"></td>
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
        <tr>
                <td><h3> Меблі </h3>
	<tr>
                <td>Стіл <span class="currency"></span></td>
                <td><input class="min" name="data[furniture]" value="<? $SLT('Tables');?>" type="text"></td>
             <td><input class="max" name="data[furniture]" value="<? $SLTM('Tables');?>" type="text"></td>
            </tr> 
	<tr>
                <td>Стілець <span class="currency"></span></td>
                <td><input class="min" name="data[furniture]" value="<? $SLT('Chairs');?>" type="text"></td>
             <td><input class="max" name="data[furniture]" value="<? $SLTM('Chairs');?>" type="text"></td>
            </tr>
	<tr>
                <td>Шафи <span class="currency"></span></td>
                <td><input class="min" name="data[furniture]" value="" type="text"></td>
             <td><input class="max" name="data[furniture]" type="text"></td>
            </tr>
	</td>   
        </tr>
	<form>
   	 <tr>
		 <td><input type="radio" name="place" value="my">Власне</td>
		 <td><input type="radio" name="itemtype" value="vehicle" onclick="toggleSet(this)">Оренда</td>
	</tr>
	
	<fieldset id="vehicle" class="item">
	<tr>
                <td><h3> Приміщення </h3>
	<tr>
             <td> <form method="post">
            <select name="area"  onchange="this.form.submit()" >
                <option value="-1">—</option>
                                <option value="1">Галицький</option>
                          	<option value="2">Залізничний</option>
		    		<option value="3">Личаківський</option>
                    </select>
		 </form></td>
		<td>  <form method="post">
            <select name="size"  onchange="this.form.submit()" >
                <option value="-1">—</option>
                                <option value="0">0-50</option>
                          	<option value="50">50-100</option>
		    		<option value="100">100-200</option>
		    		<option value="200">200-300</option>
		    		<option value="300">>300</option>
                    </select>
		 </form></td>
            </tr> 
	<tr>
              
                <td><input class="min" name="data[furniture]" value="" type="text"></td>
             <td><input class="max" name="data[furniture]" value="" type="text"></td>
            </tr>
	
	</td>   
        </tr>
	</fieldset>
	</form>
	
</table>
</div>
 </body>
</html>
