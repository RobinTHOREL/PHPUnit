<?php
/**
 * Created by PhpStorm.
 * User: Kush
 * Date: 01/02/2017
 * Time: 11:53
 */

namespace tests\Lib;

    use Lib\StringFormatter;

    class stringFormatterTest extends \PHPUnit_Framework_TestCase{

        /*public function testPrefix($prefix, $string, $camelCase = false){



        }*/

        public function concatStringTest()
        {
            //mettre en place un contexte
            $string = new StringFormatter();

            //lancer un programme
            $response = $string->concatString("c un", "test");

            //vérifier le resultat
            $this-> assertEquals($response, "c un test");

        }



}