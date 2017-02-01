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

        public function testPrefix(){

            //mettre en place un contexte
            $string = new StringFormatter();

            //lancer un programme
            $response = $string->prefix("pref", "robin");

            //verifier le resultat
            $this-> assertEquals($response, "prefrobin");

            //lancer un programme
            $response1 = $string->prefix("pref", "robin", true);

            //verifier le resultat
            $this-> assertEquals($response1, "prefRobin");
        }

        public function testSuffix()
        {
            //mettre en place un contexte
            $string = new StringFormatter();

            //lancer un programme
            $response = $string->suffix("suff", "robin");

            //verifier le resultat
            $this->assertEquals($response, "robinsuff");

            $response1 = $string->suffix("suff", "Robin", true);

            $this->assertEquals($response1, "robinSuff");

        }

        public function testToCamelCase()
        {
            //mettre en place un contexte
            $string = new StringFormatter();

            //lancer un programme
            $response = $string->toCamelCase("robin", "thorel");

            //verifier le resultat
            $this-> assertEquals($response, "robinThorel");
        }

        public function testConcatString()
        {
            //mettre en place un contexte
            $string = new StringFormatter();

            //lancer un programme
            $response = $string->concatString("c un", "test");

            //vérifier le resultat
            $this-> assertEquals($response, "c untest");

        }

}