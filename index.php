 <?php
include('curl_query.php');
include('simple_html_dom.php');

	require 'vendor/autoload.php';

	use PHPStamp\Templator;
	use PHPStamp\Document\WordDocument;

	$cachePath = 'path/to/writable/directory/';
	$templator = new Templator($cachePath); // опционально можно задать свой формат скобочек
	// Для того чтобы каждый раз шаблон генерировался заново: 
	// $templator->debug = true;

	$documentPath = 'path/to/document.docx';
	$document = new WordDocument($documentPath);

	$values = array(
		'library' => 'PHPStamp 0.1',
		'simpleValue' => 'I am simple value',
		'nested' => array(
			'firstValue' => 'First child value',
			'secondValue' => 'Second child value'
		),
		'header' => 'test of a table row',
		'students' => array(
			array('id' => 1, 'name' => 'Student 1', 'mark' => '10'),
			array('id' => 2, 'name' => 'Student 2', 'mark' => '4'),
			array('id' => 3, 'name' => 'Student 3', 'mark' => '7')
		),
		'maxMark' => 10,
		'todo' => array(
			'TODO 1',
			'TODO 2',
			'TODO 3'
		)
	);
	$result = $templator->render($document, $values);
	$result->download();

/*include('main.php');
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
