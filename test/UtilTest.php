<?php
//indicamos la ruta del-> verificamos si tenemos el test vendor/bin/phpunit
use PHPUnit\Framework\TestCase;

class UtilTest extends TestCase
{
    public function test_convertToSlug()
    {
        require_once "app/Util.php";

        $util = new Util("PHPUnit-Test-Rocks");
        //revisamos 
        $expected ="phpunit-test-rocks";
        //afirmamos que es igual
        $this->assertEquals($util->convertToSlug(), $expected);
        // echo $util->convertToSlug();
    }
}
