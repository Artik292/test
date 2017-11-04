<?PHP
require 'vendor/autoload.php';
$app=new \atk4\ui\App('Login form testing!');
$app->initLayout('Centered');

$db = new \atk4\data\Persistence_SQL('mysql:dbname=login;host=localhost','root','');

class User extends \atk4\data\Model {
  public $table = 'login-table';
function init() {
  parent::init();
  $this->addField('nick_name');
  $this->addField('password',['type'=>'password']);
}
}

$g = $app->add(['CRUD']);
$g->setModel(new User($db));
