<?php
// PHP code to demonstrate printing
// pattern of alphabets

// Function to demonstrate
// printing pattern
function alphapat($n)
{
	
	// initializing value
	// corresponding to 'A'
	// ASCII value
	$num = 65;

	// outer loop to handle
	// number of rows
	// n in this case
	for ($i = 0; $i < $n; $i++)
	{
		
		// inner loop to handle
		// number of columns
		// values changing acc.
		// to outer loop
		for ($j = 0; $j <= $i; $j++ )
		{
			
			// explicitly converting
			// to char
			$ch = chr($num);

			// printing char value
			echo $ch." ";
		}

		// incrementing number
		$num = $num + 1;

		// ending line after
		// each row
		echo "<br>";
	}
}

	// Driver Code
	$n = 5;
	alphapat($n);
	
?>
