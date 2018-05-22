--TEST--
Test strcspn() function : usage variations - with varying start and len args
--FILE--
<?php
/* Prototype  : proto int strcspn(string str, string mask [,int start [,int len]])
 * Description: Finds length of initial segment consisting entirely of characters not found in mask.
                If start or/and length is provided works like strcspn(substr($s,$start,$len),$bad_chars) 
 * Source code: ext/standard/string.c
 * Alias to functions: none
*/

/*
* Testing strcspn() : with varying start and len arguments
*/

echo "*** Testing strcspn() : with different start and len values ***\n";

// initialing required variables
// initialing required variables
$strings = array(
                   "",
                   '',
                   "\n",
                   '\n',
                   "hello\tworld\nhello\nworld\n",
                   "1234hello45world\t123",
                   "hello\0world\012",
                   chr(0).chr(0),
                   chr(0)."hello\0world".chr(0),
                   "hello".chr(0)."world",
                   "hello\0\100\xaworld",
                   );

// defining array of mask strings
$mask_array = array(
                    "",
                    '',
                    "\n\trsti \l",
                    "\t",
                    "t\ ",
                    "\t\i\100\xa"
                   );

//defining array of start values
$start_array = array(
		    0,
		    1,
		    2,
		    -1,
		    2147483647,  // max positive integer
		    -2147483648  // min negative integer
                   );
		
//defining array of len values
$len_array = array(
		    0,
		    1,
		    2,
		    -1,
		    2147483647,  // max positive integer
		    -2147483648  // min negative integer
                   );
		

// loop through each element of the arrays for str,mask,start and len arguments

$count = 1;
foreach($strings as $str) {
  echo "\n-- Iteration $count --\n";
  foreach($mask_array as $mask) {
    foreach($start_array as $start) {
      foreach($len_array as $len) {
        var_dump( strcspn($str,$mask,$start,$len) );
      }
    }
  }
  $count++;
}

echo "Done"
?>
--EXPECT--
*** Testing strcspn() : with different start and len values ***

-- Iteration 1 --
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)

-- Iteration 2 --
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)

-- Iteration 3 --
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)

-- Iteration 4 --
int(0)
int(1)
int(2)
int(1)
int(2)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(1)
int(2)
int(0)
int(0)
int(1)
int(2)
int(1)
int(2)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(1)
int(2)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(1)
int(2)
int(1)
int(2)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(1)
int(2)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)

-- Iteration 5 --
int(0)
int(1)
int(2)
int(23)
int(24)
int(0)
int(0)
int(1)
int(2)
int(22)
int(23)
int(0)
int(0)
int(1)
int(2)
int(21)
int(22)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(23)
int(24)
int(0)
int(0)
int(1)
int(2)
int(23)
int(24)
int(0)
int(0)
int(1)
int(2)
int(22)
int(23)
int(0)
int(0)
int(1)
int(2)
int(21)
int(22)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(23)
int(24)
int(0)
int(0)
int(1)
int(2)
int(2)
int(2)
int(0)
int(0)
int(1)
int(1)
int(1)
int(1)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(2)
int(2)
int(0)
int(0)
int(1)
int(2)
int(5)
int(5)
int(0)
int(0)
int(1)
int(2)
int(4)
int(4)
int(0)
int(0)
int(1)
int(2)
int(3)
int(3)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(5)
int(5)
int(0)
int(0)
int(1)
int(2)
int(23)
int(24)
int(0)
int(0)
int(1)
int(2)
int(22)
int(23)
int(0)
int(0)
int(1)
int(2)
int(21)
int(22)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(23)
int(24)
int(0)
int(0)
int(1)
int(2)
int(5)
int(5)
int(0)
int(0)
int(1)
int(2)
int(4)
int(4)
int(0)
int(0)
int(1)
int(2)
int(3)
int(3)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(5)
int(5)
int(0)

-- Iteration 6 --
int(0)
int(1)
int(2)
int(19)
int(20)
int(0)
int(0)
int(1)
int(2)
int(18)
int(19)
int(0)
int(0)
int(1)
int(2)
int(17)
int(18)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(19)
int(20)
int(0)
int(0)
int(1)
int(2)
int(19)
int(20)
int(0)
int(0)
int(1)
int(2)
int(18)
int(19)
int(0)
int(0)
int(1)
int(2)
int(17)
int(18)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(19)
int(20)
int(0)
int(0)
int(1)
int(2)
int(6)
int(6)
int(0)
int(0)
int(1)
int(2)
int(5)
int(5)
int(0)
int(0)
int(1)
int(2)
int(4)
int(4)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(6)
int(6)
int(0)
int(0)
int(1)
int(2)
int(16)
int(16)
int(0)
int(0)
int(1)
int(2)
int(15)
int(15)
int(0)
int(0)
int(1)
int(2)
int(14)
int(14)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(16)
int(16)
int(0)
int(0)
int(1)
int(2)
int(19)
int(20)
int(0)
int(0)
int(1)
int(2)
int(18)
int(19)
int(0)
int(0)
int(1)
int(2)
int(17)
int(18)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(19)
int(20)
int(0)
int(0)
int(1)
int(2)
int(16)
int(16)
int(0)
int(0)
int(1)
int(2)
int(15)
int(15)
int(0)
int(0)
int(1)
int(2)
int(14)
int(14)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(16)
int(16)
int(0)

-- Iteration 7 --
int(0)
int(1)
int(2)
int(5)
int(5)
int(0)
int(0)
int(1)
int(2)
int(4)
int(4)
int(0)
int(0)
int(1)
int(2)
int(3)
int(3)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(5)
int(5)
int(0)
int(0)
int(1)
int(2)
int(5)
int(5)
int(0)
int(0)
int(1)
int(2)
int(4)
int(4)
int(0)
int(0)
int(1)
int(2)
int(3)
int(3)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(5)
int(5)
int(0)
int(0)
int(1)
int(2)
int(2)
int(2)
int(0)
int(0)
int(1)
int(1)
int(1)
int(1)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(2)
int(2)
int(0)
int(0)
int(1)
int(2)
int(11)
int(12)
int(0)
int(0)
int(1)
int(2)
int(10)
int(11)
int(0)
int(0)
int(1)
int(2)
int(9)
int(10)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(11)
int(12)
int(0)
int(0)
int(1)
int(2)
int(11)
int(12)
int(0)
int(0)
int(1)
int(2)
int(10)
int(11)
int(0)
int(0)
int(1)
int(2)
int(9)
int(10)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(11)
int(12)
int(0)
int(0)
int(1)
int(2)
int(11)
int(11)
int(0)
int(0)
int(1)
int(2)
int(10)
int(10)
int(0)
int(0)
int(1)
int(2)
int(9)
int(9)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(11)
int(11)
int(0)

-- Iteration 8 --
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(1)
int(2)
int(1)
int(2)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(1)
int(2)
int(0)
int(0)
int(1)
int(2)
int(1)
int(2)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(1)
int(2)
int(0)
int(0)
int(1)
int(2)
int(1)
int(2)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(1)
int(2)
int(0)
int(0)
int(1)
int(2)
int(1)
int(2)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(1)
int(2)
int(0)

-- Iteration 9 --
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(1)
int(2)
int(5)
int(5)
int(0)
int(0)
int(1)
int(2)
int(4)
int(4)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(1)
int(2)
int(5)
int(5)
int(0)
int(0)
int(1)
int(2)
int(4)
int(4)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(1)
int(2)
int(3)
int(3)
int(0)
int(0)
int(1)
int(2)
int(2)
int(2)
int(0)
int(0)
int(1)
int(1)
int(1)
int(1)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(3)
int(3)
int(0)
int(0)
int(1)
int(2)
int(12)
int(13)
int(0)
int(0)
int(1)
int(2)
int(11)
int(12)
int(0)
int(0)
int(1)
int(2)
int(10)
int(11)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(12)
int(13)
int(0)
int(0)
int(1)
int(2)
int(12)
int(13)
int(0)
int(0)
int(1)
int(2)
int(11)
int(12)
int(0)
int(0)
int(1)
int(2)
int(10)
int(11)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(12)
int(13)
int(0)
int(0)
int(1)
int(2)
int(12)
int(13)
int(0)
int(0)
int(1)
int(2)
int(11)
int(12)
int(0)
int(0)
int(1)
int(2)
int(10)
int(11)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(12)
int(13)
int(0)

-- Iteration 10 --
int(0)
int(1)
int(2)
int(5)
int(5)
int(0)
int(0)
int(1)
int(2)
int(4)
int(4)
int(0)
int(0)
int(1)
int(2)
int(3)
int(3)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(5)
int(5)
int(0)
int(0)
int(1)
int(2)
int(5)
int(5)
int(0)
int(0)
int(1)
int(2)
int(4)
int(4)
int(0)
int(0)
int(1)
int(2)
int(3)
int(3)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(5)
int(5)
int(0)
int(0)
int(1)
int(2)
int(2)
int(2)
int(0)
int(0)
int(1)
int(1)
int(1)
int(1)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(2)
int(2)
int(0)
int(0)
int(1)
int(2)
int(10)
int(11)
int(0)
int(0)
int(1)
int(2)
int(9)
int(10)
int(0)
int(0)
int(1)
int(2)
int(8)
int(9)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(10)
int(11)
int(0)
int(0)
int(1)
int(2)
int(10)
int(11)
int(0)
int(0)
int(1)
int(2)
int(9)
int(10)
int(0)
int(0)
int(1)
int(2)
int(8)
int(9)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(10)
int(11)
int(0)
int(0)
int(1)
int(2)
int(10)
int(11)
int(0)
int(0)
int(1)
int(2)
int(9)
int(10)
int(0)
int(0)
int(1)
int(2)
int(8)
int(9)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(10)
int(11)
int(0)

-- Iteration 11 --
int(0)
int(1)
int(2)
int(5)
int(5)
int(0)
int(0)
int(1)
int(2)
int(4)
int(4)
int(0)
int(0)
int(1)
int(2)
int(3)
int(3)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(5)
int(5)
int(0)
int(0)
int(1)
int(2)
int(5)
int(5)
int(0)
int(0)
int(1)
int(2)
int(4)
int(4)
int(0)
int(0)
int(1)
int(2)
int(3)
int(3)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(5)
int(5)
int(0)
int(0)
int(1)
int(2)
int(2)
int(2)
int(0)
int(0)
int(1)
int(1)
int(1)
int(1)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(2)
int(2)
int(0)
int(0)
int(1)
int(2)
int(12)
int(13)
int(0)
int(0)
int(1)
int(2)
int(11)
int(12)
int(0)
int(0)
int(1)
int(2)
int(10)
int(11)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(12)
int(13)
int(0)
int(0)
int(1)
int(2)
int(12)
int(13)
int(0)
int(0)
int(1)
int(2)
int(11)
int(12)
int(0)
int(0)
int(1)
int(2)
int(10)
int(11)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(12)
int(13)
int(0)
int(0)
int(1)
int(2)
int(6)
int(6)
int(0)
int(0)
int(1)
int(2)
int(5)
int(5)
int(0)
int(0)
int(1)
int(2)
int(4)
int(4)
int(0)
int(0)
int(1)
int(1)
int(0)
int(1)
int(0)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(0)
int(1)
int(2)
int(6)
int(6)
int(0)
Done