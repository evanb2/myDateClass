<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/MyDateClass.php";

    Class MyDateClassTest extends PHPUnit_Framework_TestCase
    {
        //Num = 0
        function test0_prettyDate()
        {
            //Arrange
            $mm = 02;
            $dd = 01;
            $yyyy = 2001;
            $test_date = new MyDateClass($mm, $dd, $yyyy);
            $num = 0;

            //Act
            $result = $test_date->prettyDate($num);

            //Assert
            $this->assertEquals("2001-02-01", $result);
        }

        //Num = 1
        function test1_prettyDate()
        {
            //Arrange
            $mm = 02;
            $dd = 01;
            $yyyy = 2001;
            $test_date = new MyDateClass($mm, $dd, $yyyy);
            $num = 1;

            //Act
            $result = $test_date->prettyDate($num);

            //Assert
            $this->assertEquals("02/01/2001", $result);
        }

        //Num = 2
        function test2_prettyDate()
        {
            //Arrange
            $mm = 02;
            $dd = 01;
            $yyyy = 2001;
            $test_date = new MyDateClass($mm, $dd, $yyyy);
            $num = 2;

            //Act
            $result = $test_date->prettyDate($num);

            //Assert
            $this->assertEquals("February 01, 2001", $result);
        }

        //Num = 3
        function test3_prettyDate()
        {
            //Arrange
            $mm = 02;
            $dd = 01;
            $yyyy = 2001;
            $test_date = new MyDateClass($mm, $dd, $yyyy);
            $num = 3;

            //Act
            $result = $test_date->prettyDate($num);

            //Assert
            $this->assertEquals("The 1st day of the month of February, in the year 2001", $result);
        }

        //Num = 4
        function test4_prettyDate()
        {
            //Arrange
            $mm = 02;
            $dd = 01;
            $yyyy = 2001;
            $test_date = new MyDateClass($mm, $dd, $yyyy);
            $num = 4;

            //Act
            $result = $test_date->prettyDate($num);

            //Assert
            $this->assertEquals("Not a valid input", $result);
        }

        function test_today()
        {
            //Act
            $result = MyDateClass::today();

            //Assert
            $this->assertEquals("2015-05-18", $result);
        }
    }
?>
