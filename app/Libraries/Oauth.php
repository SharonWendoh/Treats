<php namespace App\Libraries;

use \OAuth2\Storage\Pdo;

class Oauth2{
    var $server;

    function __construct(){
        $this->init();
    }

    public function init(){
        $dsn = getenv('database.default.DSN');
        $username = getenv('database.default.username');
        $password = getenv('database.default.password');

        $storage = new Pdo(['dsn' => $dsn, 'username' => $username, 'password' => $password]);
        $this->server = new\OAuth2\Server($storage);
        $this ->sever->addGrantType(new\OAuth2\GrantType\UserCredentials($storage));
    }
}

