<?php

class User{
    public static $usercount=0;

    public function __construct()
    {
        self::$usercount++;
    }
    public static function getUserCount(){
        return self::$usercount;
}
}


$user1=new User();
$user2=new User();
echo User::getUserCount();

?>