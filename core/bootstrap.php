<?php
require 'core/helpers.php';
use App\Core\App;
App::bind('config', require 'config/database.php');
App::bind('database', new QueryBuilder(
	Connection::connect(App::get('config'))
));




