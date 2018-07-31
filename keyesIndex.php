<html>
<head>

<title  >Keyes</title>
<link rel="stylesheet" type="text/css" href="css/itempages.css" />

					</head>
<?php $keyesDB = new PDO('sqlite:keyes.db');
	$result = "SELECT  name_namePart, originInfo_dateCreated, subject_topic1, genre, abstract, recordInfo_recordIdentifier  FROM JOURNAL ";
	$author = '';
	$genre ='';
	$date ='';
	$abstract='';
	$subject='';
	  foreach($keyesDB->query($result) as $row)
    {	
		
        if ($row['recordInfo_recordIdentifier']==0)
		{		
			$genre = $row['genre'];
			$author = $row['name_namePart'];
			$date = $row['originInfo_dateCreated'];
			$abstract = $row['abstract'];
			$subject = $row['subject_topic1'];

		}
    } ?>
<body>


<h1 style = "text-align: center;">Keyes Journal</h1>

<section style = "background: #f9f6eb; width: 100%; ">
<br>
<div class ="row">
<div class = "column" style = "width:2%">

</div>
<div class = "column" style = "width:96%">
<hr>
</div>
<div class = "column" style = "width:2%">

</div>

</div>
<div class ="row">
<div class = "column" style = "width:60%">
<img src = 'images/keyesOnRailroad.PNG' alt = 'Keyes Photograph' class="center"> 
</div>
<div class = "column" style = "width:36%">
Author: <p style = "text-align: center"><?php echo $author; ?></p>
<hr>
Date written: <p style = "text-align: center"><?php echo $date; ?></p>
<hr>
Summary: <p style = "text-align: center"> <?php echo $abstract; ?></p>
<hr>
Genre: <p style = "text-align: center"><?php echo $genre; ?></p>
<hr>
Subject: <p style = "text-align: center"><?php echo $subject; ?> </p>


</div>



</div>
<div class ="row">
<div class = "column" style = "width:2%">

</div>
<div class = "column" style = "width:96%">
<hr>
</div>
<div class = "column" style = "width:2%">

</div>

</div>

    <div class = "row">
	<h2 style= "text-align: center;"> Journal contents</h2>
	<div class = "column" style ="width:14%">
<a href = 'journalDB.php?item=1'>July 3, 1899</a> <br> <br>
<a href = 'journalDB.php?item=0'>July 4, 1899</a> <br> <br>
<a href = 'journalDB.php?item=2'>July 5, 1899</a> <br> <br> 
<a href = 'journalDB.php?item=3'>July 6, 1899</a> <br> <br>
<a href = 'journalDB.php?item=4'>July 7, 1899</a> <br> <br>
<a href = 'journalDB.php?item=5'>July 8, 1899</a> <br> <br>
<a href = 'journalDB.php?item=6'>July 9, 1899</a> <br> <br>

</div>
<div class = "column" style ="width:14%">
<a href = 'journalDB.php?item=7'>July 10, 1899</a> <br> <br>
<a href = 'journalDB.php?item=8'>July 11, 1899</a> <br> <br>
<a href = 'journalDB.php?item=9'>July 12, 1899</a> <br> <br>
<a href = 'journalDB.php?item=10'>July 13, 1899</a> <br> <br>
<a href = 'journalDB.php?item=11'>July 14, 1899</a> <br> <br>
<a href = 'journalDB.php?item=12'>July 15, 1899</a> <br> <br>
<a href = 'journalDB.php?item=13'>July 16, 1899</a> <br> <br>

</div>
<div class = "column" style ="width:14%">
<a href = 'journalDB.php?item=14'>July 17, 1899</a> <br> <br>
<a href = 'journalDB.php?item=15'>July 18, 1899</a> <br> <br>
<a href = 'journalDB.php?item=16'>July 19, 1899</a> <br> <br>
<a href = 'journalDB.php?item=17'>July 20, 1899</a> <br> <br>
<a href = 'journalDB.php?item=18'>July 21, 1899</a> <br> <br>
<a href = 'journalDB.php?item=19'>July 22, 1899</a> <br> <br>
<a href = 'journalDB.php?item=20'>July 23, 1899</a> <br> <br>

</div> <div class = "column" style ="width:14%">
<a href = 'journalDB.php?item=21'>July 24, 1899</a> <br> <br>
<a href = 'journalDB.php?item=22'>July 25, 1899</a> <br> <br>
<a href = 'journalDB.php?item=23'>July 26, 1899</a> <br> <br>
<a href = 'journalDB.php?item=24'>July 27, 1899</a> <br> <br>
<a href = 'journalDB.php?item=25'>July 28, 1899</a> <br> <br>
<a href = 'journalDB.php?item=26'>July 29, 1899</a> <br> <br>
<a href = 'journalDB.php?item=27'>July 30, 1899</a> <br> <br>
 </div>
    <div class= "column"style ="width:14%">
<a href = 'journalDB.php?item=28'>July 31, 1899</a> <br> <br>
<a href = 'journalDB.php?item=29'>August 1, 1899</a> <br> <br>
<a href = 'journalDB.php?item=30'>August 2, 1899</a> <br> <br>
<a href = 'journalDB.php?item=31'>August 3, 1899</a> <br> <br>
<a href = 'journalDB.php?item=32'>August 4, 1899</a> <br> <br>
<a href = 'journalDB.php?item=33'>August 5, 1899</a> <br> <br>
<a href = 'journalDB.php?item=34'>August 6, 1899</a> <br> <br>

</div>
<div class = "column" style ="width:14%">
<a href = 'journalDB.php?item=35'>August 7, 1899</a> <br> <br>
<a href = 'journalDB.php?item=36'>August 8, 1899</a> <br> <br>
<a href = 'journalDB.php?item=37'>August 9, 1899</a> <br> <br> 
<a href = 'journalDB.php?item=38'>August 10, 1899</a> <br> <br>
<a href = 'journalDB.php?item=39'>August 11, 1899</a> <br> <br>
<a href = 'journalDB.php?item=40'>August 12, 1899</a> <br> <br>
<a href = 'journalDB.php?item=41'>August 13, 1899</a> <br> <br>

</div>
<div class = "column" style ="width:14%">
<a href = 'journalDB.php?item=42'>August 14, 1899</a> <br> <br>
<a href = 'journalDB.php?item=43'>August 15, 1899</a> <br> <br>
<a href = 'journalDB.php?item=44'>August 16, 1899</a> <br> <br>
<a href = 'journalDB.php?item=45'>August 17, 1899</a> <br> <br>
<a href = 'journalDB.php?item=46'>August 18, 1899</a> <br> <br>
<a href = 'journalDB.php?item=47'>August 19, 1899</a> <br> <br>
</div></div></section>
<hr>

<form  method="post" action="search.php?go"  id="searchform"> 
<input  type="text" name="name"> 
<input  type="submit" name="submit" value="Search"> 
</form> 
<hr>
 <a href = 'http://www.lib.montana.edu/digital/objects/coll2577/2577-B01-F02.pdf'> the original manuscripts </a> 
  <a href = 'http://www.lib.montana.edu/digital/objects/coll2577/2577-B01-F01.pdf'> Photo album </a>  <br> <br>
<a href ='index.html'> return to map </a>


</body>

</html>