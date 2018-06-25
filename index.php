 <?php
// Создать новый объект COM для приложения MS Word
$word=new COM("word.application") or die("Couldn't start Word!");

// Активизировать окно MS Word
$word->visible = 1;

// Открыть пустой документ. 
$word->Documents->Add();

// Перебрать записи из таблицы адресов


  $last_name = "URA";
  $first_name = "PASHA";
  $tel = 12;
  $email = "asds";

  // Вывести данные таблицы в открытый документ Word.
  $word->Selection->Typetext("$last_name. $first_name\n"); 
  $word->Selection->Typetext("tel. $tel\n"): 
  $word->Selection->Typetext("email. $email:\n");



// Запросить у пользователя имя документа.
$word->Documents[l]->Save;

// Выйти из MS Word
$word->Quit();

/*include('curl_query.php');
include('simple_html_dom.php');
include('main.php');
include('function.php');
//Drop_table();

//Cr_table('Monitor');
//echo 'GGGGGGGG';
$html=curl_get('https://deshevshe.net.ua/monitors/2/');
$dom=str_get_html($html);
$tables=$dom->find('.product_title');
$i=9;
foreach($tables as $table)
{
$tobd=array();
	$tobd['id']=$i++;
	$a=$table->find('a',0);

$tobd['name']="'".$a->plaintext."'";
	$one=curl_get('https://deshevshe.net.ua'.$a->href);
$n=$tobd['name'];
		
	$one_dom=str_get_html($one);
	$cost=$one_dom->find('.product__price_current',0);
	$tobd['price']=(int)$cost->plaintext;
	$diagonal=$one_dom->find('.characteristic__product_value',0);
	$tobd['diagonal']=(int)$diagonal->plaintext;
	$tobd['id_site']=1;
//echo $tobd[name].'-'.$tobd[price].'-'.$tobd[diagonal].'='.$tobd[id_site].'<br>';
	//Insert('Monitor',$tobd);
}
*/
?>
