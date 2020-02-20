<?php

use PHPUnit\Framework\TestCase;
use app\Util;
class ExampleTest extends TestCase
{
    // Aserciones test Equals valores numericos
    public function testEquals(){
        $result = 5 + 5;
        $this->assertEquals($result, 10); // verificar con ==
    }
    //Assercion verificar cadena de texto
    public function testSame()
    {
        $result = "texto";
        $this->assertSame($result, "texto"); //verifica con ===
    }
    //assercion array
    public function testArray()
    {
        $this->assertIsArray([]);
    }
    public function testBool()
    {
        $this->assertIsBool(true);
    }
    public function testString()
    {
        $this->assertIsString("este texto");
    }
    //test class
    public function testClassAttributeExiste()
    {
        // $this->assertClassHasAttribute('foo', stdClass::class);
        // $util = new Util();
        $this->assertClassNotHasStaticAttribute('text', stdClass::class);
    }
    public function testDirectorioExiste()
    {
        $this->assertDirectoryNotExists('/vendor/phpdocumentor/type-resolver/');
    }

    public function JsonFileTest()
    {
        $this->assertJsonStringEqualsJsonFile(
            '/file.json', json_encode(['Mascot' => 'ux'])
        );
    }
}