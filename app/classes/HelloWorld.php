<?php

namespace App\classes;
class HelloWorld
{
    public  $firstNumber,$middleNumber,$lastNumber;

    public  function index()
    {

//        echo 'Hello World';
//        echo '<br/>';

        /*
         * Assignment operator ()
         *
         */
        $this->firstNumber = 10;
        $this->lastNumber = 15;
        $this->middleNumber=20;

//        echo '<br/>';
//        echo $this->firstNumber += $this->lastNumber;
//
//        echo '<br/>';
//        echo $this->firstNumber -= $this->lastNumber;
//
//        echo '<br/>';
//        echo $this->firstNumber *= $this->lastNumber;
//
//        echo '<br/>';
//        echo $this->firstNumber /= $this->lastNumber;
//
//        echo '<br/>';
//        echo $this->firstNumber %= $this->lastNumber;
//
//        echo '<br/>';
//        echo $this->firstNumber .= $this->lastNumber;

        /*
         *
         * Conditional operator (>,<,<=,>=,==)
         */
//

        /*
         * logical operatgor (&&,||,)
         *
         *
         */

//        echo '<br/>';
//        echo ($this->firstNumber < $this->lastNumber) && ($this->middleNumber < $this->lastNumber);
//
//        echo '<br/>';
//        echo ($this->firstNumber < $this->lastNumber) && ($this->middleNumber > $this->lastNumber);
//
//        echo '<br/>';
//        echo ($this->firstNumber > $this->lastNumber) && ($this->middleNumber < $this->lastNumber);
//
//        echo '<br/>';
//        echo ($this->firstNumber > $this->lastNumber) && ($this->middleNumber > $this->lastNumber);
//
//
//
//
//        echo '<br/>';
//        echo ($this->firstNumber < $this->lastNumber) || ($this->middleNumber < $this->lastNumber);
//
//        echo '<br/>';
//        echo ($this->firstNumber < $this->lastNumber) || ($this->middleNumber > $this->lastNumber);
//
//        echo '<br/>';
//        echo ($this->firstNumber > $this->lastNumber) || ($this->middleNumber < $this->lastNumber);
//
//        echo '<br/>';
//        echo ($this->firstNumber > $this->lastNumber) || ($this->middleNumber > $this->lastNumber);
//

//        $a = false;
//        echo !$a;
//

        /*Statement
         * syntax
         * keyword
         * value(fixed value,variable value )
         * operator
         * expression
         *3 types(Single line ,Conditional statement(is,else,if else if ,switch),repeated( for,while,do while,foreach) )
         *
         */

        $this->firstNumber = 10;

//        if($this->firstNumber==10)
//        {
//            echo 'The statement is true  ';
//        }
//        else{
//            echo 'Condition break ';
//        }


        switch ($this->firstNumber)
        {
            case 5 : echo 'hello world';
                    break;

            case 10 : echo 'hello World';
                     break;

            default : echo 'Hello nayem ' ;
            
        }






    }
}