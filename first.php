
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Business Plan</title>
   <link href="style.css" rel="stylesheet" />
 
 </head>

<body>
	<div class="slideshow">
 <div class="slides">
   <label><img class="slide" src="img1.jpg"><input id='s1' type=radio /></label>
   <label><img class="slide" src="info.pnp"><input id='s2' type=radio /></label>
   <label><img class="slide" src="путь_к_картинке3"><input id='s3' type=radio /></label>
 </div>
 <div class="labels">
  <label for="s1"><img src="img1.jpg" class='label'></label>
  <label for="s2"><img src="info.pnp" class='label'></label>
  <label for="s3"><img src="путь_к_картинке3" class='label'></label>
 </div>
</div>
	<script>
	var idArray = ["s1", "s2", "s3"];
var i = 0;
setInterval(function(){
  document.getElementById(idArray[i]).click();
  i = (i+1)%idArray.length;
}, 10000);</script>
<div class="test">

    Бізнес план - план створення або розвитку підприємства.

    <p>Метою складання бізнес-плану є планування господарської діяльності підприємства на найближчий та віддалений періоди. Бізнес-план відповідає на багато питань щодо майбутнього існування фірми, як:
</p>
<ul>
	<li>Визначення виду діяльності фірми, цільових ринків і місця підприємства на цих ринках;</li>

<li> Формулювання стратегії та тактики підприємства;</li>

 <li>Вибір конкретного виду послуг, які будуть надаватись фірмою;</li>

<li> Оцінка виробничих та невиробничих затрат;</li>

<li> Розробка маркетингових заходів по вивченню ринку, рекламі, стимулюванню попиту та ін.</li>

<li> Оцінка фінансових затрат фірми для передбачених завдань;</li>

<li> Підбір кадрів для підприємства;</li>

 <li>Передбачення труднощів на шляху до виконання планів.</li>
	</ul>

</div>
</div>
</body>
</html>


