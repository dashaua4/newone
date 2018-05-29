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
	
      

        <div class="large-3 columns">
		<img class="header-img" src="idea.jpg" >
            <label for="data-name" class="middle">
                Шаблони (5)
            </label>

            <select name="data[activity_id]">
                <option value="-1">—</option>
                                    <option value="2">
                        IT Академія
                    </option>
                                    <option value="5">
                       IT Компанія
                    </option>
                                    <option value="8">
                       Офіс
                    </option>
                    </select>
        </div>
    </div>
	
</div>

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
                    Комп\'ютери <span class="currency"></span>
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
                    <input class="min" name="data[furniture]" value="" type="text">
                </td>
             <td>
                    <input class="max" name="data[furniture]" type="text">
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
                    <input class="max" name="data[furniture]" type="text">
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
