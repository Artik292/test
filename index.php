<?PHP
require 'vendor/autoload.php';
$app=new \atk4\ui\App('Login form testing!');
$app->initLayout('Centered');


//$db = new \atk4\data\Persistence_SQL('mysql:dbname=login;host=localhost','root','');

class User extends \atk4\data\Model {
    public $table = 'login-table';

    public $login_field = 'nick_name';
    public $password_field = 'password';

    function init() {
    	parent::init();

        $this->addField('nick_name');
        $this->addField('password', ['type'=>'password']);
    }
}

/*$form = $app->layout->add('Form');
$form->setModel(new User($db));
$form->onSubmit(function($form) {
	$c=$form->model->nick_name;
if (isset($c)) {
 return $form->success('Record updated');
}


});
*/
/*
$form = $app->layout->add('Form');
$form->setModel(new User($db));
$form->onSubmit(function($form) {
	$form->model->save();

});
*/
$button = $app->layout->add(['Button','CRUD']);
$button->addClass('massive green');
$button->link(['help']);



/*require 'vendor/autoload.php';
$app = new \atk4\ui\App('Registration');
$app->initLayout('Centered');*/
$db = new
\atk4\data\Persistence_SQL('mysql:dbname=login;host=localhost','root','');
/*class Client extends \atk4\data\Model {
	public $table = 'login-table';
function init() {
	parent::init();
	$this->addField('nick_name');
	$this->addField('password');
}
} */
$form = $app->layout->add('Form');
$form->setModel(new User($db));
$form->onSubmit(function($form) {
	$form->model->save();
	return $form->success('Record updated');

});
