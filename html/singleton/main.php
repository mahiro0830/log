<?php
class SingletonTest
{
    private static $singleton;

    private function __construct()
    {
        echo 'インスタンスが生成されました。<br>';
    }

    public static function getInstance()
    {
        if ( !isset( self::$singleton ) ) {
            self::$singleton = new SingletonTest();
        }

        return self::$singleton;
    }
}

$instance1 = SingletonTest::getInstance();
$instance2 = SingletonTest::getInstance();

echo 'インスタンスは一度しか生成できないため、$instance1 と $instance2 は同じ';
var_dump( $instance1 === $instance2 );
