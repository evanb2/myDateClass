<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/MyDateClass.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        date_default_timezone_set("UTC");

        //Jan 01, 2001
    	$test1 = new MyDateClass(01, 01, 2001);

    	//Feb 02, 2002
    	$test2 = new MyDateClass(02, 02, 2002);

    	//March 03, 2003
    	$test3 = new MyDateClass(03, 03, 2003);

    	//April 04, 2004
    	$test4 = new MyDateClass(04, 04, 2004);

    	//Dec 05, 2015
    	$test5 = new MyDateClass(12, 05, 2015);

    	$tests = array($test1, $test2, $test3, $test4, $test5);

        $output = "";
        foreach ($tests as $test) {
            $output = $output . "<div class='row'>
                <div class='col-md-6'>
                    <ul>
                        <li>" . $test->prettyDate(0) . "</li>
                        <li>" . $test->prettyDate(1) . "</li>
                        <li>" . $test->prettyDate(2) . "</li>
                        <li>" . $test->prettyDate(3) . "</li>
                        <li>" . $test->prettyDate(4) . "</li>
                    </ul>
                </div>
            ";
        }
        return $output . MyDateClass::today();
    });

    return $app;
?>
