<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Frank Diaz Test 3</title>
</head>
<body>
<h1>Frank Diaz Test 3</h1>
<h2>PHP Grade Input</h2>
<p>For this test, I will now recreate my previous PHP Grade website, only this time I will add the ability to input grades using text fields and then clicking a submit button to get the grade results. Let's go ahead and see how this goes...</p>
<p>Sadly, I still don't know how to properly style a PHP document, but luckily for this kind of project, it's not really important at all. ¯\_(ツ)_/¯</p>
<h3>My Grades</h3>

<?php
// Set up the array for the assignment names
$assignments = array("Discussion 1 ", "Discussion 2 ", "Homework 1", "Discussion 3", "Test 1", "Discussion 4", "Discussion 5", "Discussion 6", "Discussion 7", "Test 2", "Discussion 8", "Discussion 9", "Discussion 10", "Discussion 11");
    
// Set up the length of the array
$aLength = count($assignments);

// Set up a for loop to display the array onto the DOM
    echo "<h3>Assignments</h3>";
for($x = 0; $x < $aLength; $x++) {
    echo $assignments[$x];
    echo "<br>";
}
?>

<form action="index.php" method="post" id="grades">
<h3>Earned Points</h3>
<ul>
<li><input type="text" placeholder="Enter points here..." name="egrade[]"></li>
<li><input type="text" placeholder="Enter points here..." name="egrade[]"></li>
<li><input type="text" placeholder="Enter points here..." name="egrade[]"></li>
<li><input type="text" placeholder="Enter points here..." name="egrade[]"></li>
<li><input type="text" placeholder="Enter points here..." name="egrade[]"></li>
<li><input type="text" placeholder="Enter points here..." name="egrade[]"></li>
<li><input type="text" placeholder="Enter points here..." name="egrade[]"></li>  
<li><input type="text" placeholder="Enter points here..." name="egrade[]"></li>  
<li><input type="text" placeholder="Enter points here..." name="egrade[]"></li>  
<li><input type="text" placeholder="Enter points here..." name="egrade[]"></li>  
<li><input type="text" placeholder="Enter points here..." name="egrade[]"></li>  
<li><input type="text" placeholder="Enter points here..." name="egrade[]"></li>  
<li><input type="text" placeholder="Enter points here..." name="egrade[]"></li>
<li><input type="text" placeholder="Enter points here..." name="egrade[]"></li>
</ul>
<br>
<h3>Possible Points</h3>
<ul>
<li><input type="text" placeholder="Enter points here..." name="pgrade[]"></li>
<li><input type="text" placeholder="Enter points here..." name="pgrade[]"></li>
<li><input type="text" placeholder="Enter points here..." name="pgrade[]"></li>
<li><input type="text" placeholder="Enter points here..." name="pgrade[]"></li>
<li><input type="text" placeholder="Enter points here..." name="pgrade[]"></li>
<li><input type="text" placeholder="Enter points here..." name="pgrade[]"></li>
<li><input type="text" placeholder="Enter points here..." name="pgrade[]"></li>  
<li><input type="text" placeholder="Enter points here..." name="pgrade[]"></li>  
<li><input type="text" placeholder="Enter points here..." name="pgrade[]"></li>  
<li><input type="text" placeholder="Enter points here..." name="pgrade[]"></li>  
<li><input type="text" placeholder="Enter points here..." name="pgrade[]"></li>  
<li><input type="text" placeholder="Enter points here..." name="pgrade[]"></li>  
<li><input type="text" placeholder="Enter points here..." name="pgrade[]"></li>
<li><input type="text" placeholder="Enter points here..." name="pgrade[]"></li>
</ul>
<br>
<button type="submit" form="grades">Submit</button>
</form>
    
<?php
// Set up the arrays for the earned and possible points
$egrade = $_POST['egrade'];
$pgrade = $_POST['pgrade'];
    
$sort_array = sort($_POST['egrade']);
$sort_array = sort($_POST['pgrade']);

// Set up loops to get the seperate sums of earned and possible points
$esum = 0;
$psum = 0;

echo "<br>";
    
// Use foreach loops to get the sum of points
    foreach ($egrade as $e){
        $esum=$esum+$e;
    }
echo "Total Earned Points: ".$esum;

foreach ($pgrade as $p){
    $psum=$psum+$p;
}
echo "<br>";
echo "Total Possible Points: ".$psum;
echo "<br>";

// Divide $esum and $psum and multiply by 100 to get the total class grade
$gdiv = $esum / $psum * 100;

// Print the grade results onto the DOM
echo "<br>";
echo "Total Class Grade: ";
echo round($gdiv);
echo "% A";
?>    

</body>
</html>