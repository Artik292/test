<?PHP
require 'vendor/autoload.php';
$app=new \atk4\ui\App('Числа Фибоначчи!');
$app->initLayout('Centered');

if (isset($_GET['go'])) {
  $a = $_GET['a'];
  $b = $_GET['b'];
  $c = $a;
  $a = $a + $b;
  $b = $c;
} else {
  $a = 1;
  $b = 1;
}

$label = $app->add('Label');
$label->set(' '.$a);

sleep(10);

$button=$app->add(['Button','+1'])->on('click', new \atk4\ui\jsReload($label));
$button->link(['index','go'=>'TRUE','a'=>$a,'b'=>$b]);
