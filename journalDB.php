<html>
<head>
<?php header('Access-Control-Allow-Origin: *'); ?>
</head>
<title>Keyes</title>

<link rel="stylesheet" type="text/css" href="css/itempages.css" />
<?php $keyesDB = new PDO('sqlite:keyes.db');
	$result = "SELECT titleInfo_title, extension, recordInfo_recordIdentifier, subject_topic4  FROM JOURNAL";
	$id = $_GET['item'];
	$date = '';
	$output ='';
	$imageURL ='';
	  foreach($keyesDB->query($result) as $row)
    {	
		
        if ($row['recordInfo_recordIdentifier']== $id)
		{	$date = $row['titleInfo_title'];		
			$output =$row['extension'];
			$imageURL = $row['subject_topic4'];

		}
    }
	$keyesDB =null;
	$prev = $id;
$next = $id;
	if( $id == 1)
	{
	
		$prev = 47;
		$next = 0;
	}
	elseif( $id == 47)
	{
	
		$next =1;
		$prev = 46;
	}
	elseif( $id == 0)
	{
		$prev =1;
		$next=2;
	}
	else
	{
		$next = ++$next;
		$prev = --$prev;
	}

$nextString = 'journalDB.php?item='.$next;
$prevString = 'journalDB.php?item='.$prev;
	

?>
</script>

<body>
<h1 style = " text-align: center;"><?php echo $date; ?></h1>
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
<div class="row">
  <div class="column">
<img src = 'images/<?php echo $imageURL ?>' alt = 'Keyes Photograph' class="center"> 

  </div>
  <div class="column" style ="background:#f9f6eb;" >
    
<?php 
   
  echo $output."<br>";


?>

  </div>
</div>
<div class = "column" style = "width:2%">

</div>
<div class = "column" style = "width:96%">
<hr>
</div>
<div class = "column" style = "width:2%">
</div>

<div class = "row">
<div class = "column" style = "width:2%"></div>
<div class = "column" style = "width:96%">
	<a href = <?php echo $prevString; ?> > previous entry </a>
<a href = "keyesIndex.php">Back to contents page			</a>
<a href =<?php echo $nextString; ?> > next entry			</a> 
</div>
</div>
</section>

</body>
</html>
