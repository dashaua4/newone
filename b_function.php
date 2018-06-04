  <?php 

include('function.php');

?>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Farfalla</title>
   <link href="css/style.css" rel="stylesheet" />         
 
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
                                   <option value="1">
                        Дизайн та Реклама 
                    </option>
                                    <option value="2">
                       IT Компанія
                    </option>
                                    <option value="3">
                       Офіс
                    </option>
                    </select>
     </form>
    </div>
	
</div>
 <?php 

$value=3;
$name='SelectT';
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
                <td>
                    Комп'ютери <span class="currency"></span>
                </td>
                <td>
                    <input class="min" name="data[comp]" value="<? $name($wg);?>" type="text">
                </td>
                 <td>
                    <input class="max" name="data[comp]" value="<? SelectTMAX($wg);?>" type="text">
                </td>
            </tr>
					
					 <tr>
                <td>
                    Монітори <span class="currency"></span>
                </td>
                <td>
                    <input class="min" name="data[comp]" value="" type="text">
                </td>
                 <td>
                    <input class="max" name="data[comp]" type="text">
                </td>
            </tr>
					 <tr>
                <td>
                    Переферія <span class="currency"></span>
                </td>
                <td>
                    <input class="min" name="data[comp]" value="" type="text">
                </td>
                 <td>
                    <input class="max" name="data[comp]" type="text">
                </td>
            </tr>
                </td>
                
                
        </tr>
        <tr>
                <td>
                    <h3> Меблі </h3>
					<tr>

                <td>
                     Стіл <span class="currency"></span>
                </td>
                <td>
                    <input class="min" name="data[furniture]" value="<? $name('Tables');?>" type="text">
                </td>
             <td>
                    <input class="max" name="data[furniture]" value="<? SelectTMAX('Tables');?>" type="text">
                </td>
            </tr> 
					<tr>
                <td>
                     Стілець <span class="currency"></span>
                </td>
                <td>
                    <input class="min" name="data[furniture]" value="<? SelectT('Chairs');?>" type="text">
                </td>
             <td>
                    <input class="max" name="data[furniture]" value="<? SelectTMAX('Chairs');?>" type="text">
                </td>
            </tr>
					<tr>
                <td>
                     Шафи <span class="currency"></span>
                </td>
                <td>
                    <input class="min" name="data[furniture]" value="" type="text">
                </td>
             <td>
                    <input class="max" name="data[furniture]" type="text">
                </td>
            </tr>
				</td>
              
        </tr>
           
           
          
</table>
</div>
 </body>
</html>
