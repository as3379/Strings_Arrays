<?php 

//$string = "this is the general string";

$obj = new main();

$string = " Hello world welcome to my php website ";


$array = array("one","two","three","four","five","six","seven");
$test = array('a'=>'Cat','B'=>'Dog', 'c'=>'Horse','b'=>'Bird');
$array2 = array("a","b","c","d","e","f","g"); 
$multi =array(

	array(
	'firsname' => 'Ashi',
	'lastname' => 'Gowda',
	'country' => 'USA',
	
	
	),

	array (
	'firstname'=>'Gagan',
	'lastname'=>'Deep',
	'country' =>'India',

	),


	array(
	'firstname'=>'Diwakar',
	'lastname'=>'Mandya',
	'country'=>'England',

	)	

);

$obj->stringStrupper($string);
//$obj->stringChunk_split($string);


$obj->stringExplode($string);
$obj->stringRtrim($string);
$obj->stringStrRepeat($string);
$obj->stringStrSplit($string);
$obj->stringStrLen($string);
$obj->stringChr($string);
$obj->stringEcho($string);
$obj->stringltrim($string);
$obj->stringStrlower($string);

$obj->array_pop($array);
$obj->arraychangekeycase($test);

$obj->arraysum();
$obj->arraycombine($array,$array2);

$obj->arraycolumn($multi);
//$obj->arraychunk($array);
$obj->countarray($array);
$obj->arrayfill();
$obj->arrayflip($array);
$obj->multisortarray($array,$array2);
$obj->arraypush($array);


class main

{

	function __construct()
	{
		$string = "Hello world welcome to my php website";
		echo '<h1>Find 10 Strings Functions and 10 Array fucntions Below </h1>';
	        
		echo '<h3>The string used in this excercise is: ' . $string .  '</h3>' ;
		
		

	//	echo '<h3>three sets of arrays were used in this excercise: the
	//	indexed array, the associative array and the multidimentional
	//	array</h3>';
		}

	function __destruct()
	{
	 echo "<h2>This is the end</h2>";

	 }




	function stringChr($string)
	{

		echo '<h1> This is the Chr string </h1>';
		$str = chr(61);
		echo 'the char function returns: '.$str;
	        echo '<hr>';       
	}
	function stringltrim($string)
	{
		echo '<h1> This is the ltrim function</h1>';
		echo ltrim($string, "Hello");
		echo '<hr>';


	}

	function stringChunk_split($string)
	{
     	echo '<h1> This is the chunk_split string </h1>';
 		
 		echo chunk_split($string,3,".");

		echo '<hr>';
	}

	function stringEcho($string)
	{
      echo '<h1> this is the echo string</h1>';
      echo $string;
      echo '<hr>';
  	}
	function stringExplode($string)
    {
 		echo '<h1>this is the explode string</h1>';

 		print_r (explode(" ", $string));

 		echo '<hr>';
 	}

    function stringRtrim($string)

    {

      echo '<h1>this is the rtrim string</h1>';

       echo rtrim($string, "website");
	
	echo '<hr>';
	}

    function stringStrRepeat($string)
	{
	echo '<h1>this is the str_repeat string string</h1>';

	echo str_repeat($string, 3);
	echo '<hr>';
	 }

    function stringStrSplit($string)

    {

       echo '<h1>this is the str_split string</h1>';

       print_r(str_split($string, 5));

       echo '<hr>';

    }

    function stringStrLen($string)

    {
    		echo '<h1>this is the strlen string</h1>';

    		echo "the length of the string is: ".strlen($string);

    		echo '<hr>';


    }


    function stringStrlower($string)

    {

		echo '<h1>this is the strlower string</h1>';    
		
	echo "the lower case of the string is ".strtolower($string);

			echo '<hr>';		


    }

    function stringStrupper($string)
    {
    	echo '<h1>this is the strupper string</h1>';

    	echo "the upper case of the string is: ".strtoupper($string);

    	echo '<hr>';

    }
      function arraychangekeycase($test)
      {

      echo '<h1>This is the array change key case function</h1>';
      



      print_r(array_change_key_case($test,CASE_UPPER));

      echo '<hr>';


      }

      function arraychunk($array)
      {
       
       echo '<h1>This is the array_chunk function</h1>';
       echo '<br>';
       
       print_r(array_chunk($array,"2"));
       echo '<hr>';

    
      }

      function arraycolumn($multi)
	{
       
       echo '<h1>This is an array_column function </h1>';

       print_r(array_column($multi,'country')); 

       echo '<hr>';

        }

	function arraycombine($array,$array2)
	{
	
	
	echo '<h1>This is an array_combine function </h1>';
        $array3 = array_combine($array,$array2);
	print_r($array3);
	echo '<br>';
	
        echo '<hr>';
	}
 	function arrayfill()
	{
	echo '<h1>This is the array fill function</h1>';
	$a = array_fill(0,7,'Ashi');
	print_r($a);
	echo '<hr>';
	}
	function arrayflip($array)
	{
	echo '<h1>This is the array flip function</h1>';
	
	
	print_r(array_flip($array));
	echo '<hr>';
	
	}
 
      function multisortarray($array,$array2)
      {
	echo '<h1>This is a multisort array function </h1>';
	echo '<br>';
	array_multisort($array, $array2);
	var_dump($array);
	var_dump($array2);
	
	echo '<hr>';


      }
      function arraypush($array)
      {
	echo '<h1>This is the array_push function </h1>';
	array_push($array, "eight", "nine");
	print_r($array);
	echo '<hr>';
      }
	function arraysum()
	{
	  echo '<h1>This is the array sum function </h1>';
	  
	  $a = array(2,3,4,5);

	 echo array_sum($a);

	 echo '<hr>';
	}
	function countarray($array)
	{
	echo '<h1>This is the count array</h1>';

	echo "the count of the array is ".count($array);

	echo '<hr>';
	
	
	
	}

	function array_pop($array)
	{

		echo '<h1>This is the count array</h1>';
		$array4 = array_pop($array);

		print_r($array4);

		echo '<hr>';


	}

}
?>
