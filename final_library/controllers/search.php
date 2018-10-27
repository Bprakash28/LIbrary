<?php include_once('./connection.php');
clearstatcache();
$query = $_POST['query']; 
$query = htmlspecialchars($query);
$query = mysql_real_escape_string($query);
$raw_results = mysql_query("SELECT * FROM books
            WHERE (`bookname` LIKE '%".$query."%') OR (`bookname` LIKE '%".$query."%')") or die(mysql_error());

if(mysql_num_rows($raw_results) > 0){
             
    while($results = mysql_fetch_array($raw_results)){


        ?>
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Book Feed || Results </title><link rel="icon" href="../assets/favicon.ico">
    <link rel="stylesheet" href="../assets/library.css">
    
</head>

<body>
<Style type="text/stylesheet">
</style>
<script type="text/javascript">
</script>
    <div class="middle">
        <div class="ladder-top" style="font-size:15px;">
        Your search of the <?php echo $results['bookname'];?> Returned <br>
        Floor:<?php   echo $results['floor'];?></p><p>Shelf:<?php   echo $results['shelf'];?>
        edition:<?php   echo $results['edition'];?></p><p>author:<?php   echo $results['author'];?>        
        </div>
        <div class="table-top">Tables</div>
        <div class="table-top table-top-2">Tables</div>
        <div class="lift">
            <Span>LIFT</Span>
        </div>
        <div class="table-top lounge">Lounge</div>
        <div class="lift-2 lift">
            <Span>LIFT</Span>
        </div>
        <div class="table-top table-bottom">Tables</div>
        <div class="table-top table-bottom-2">Tables</div>
        <div class="ladder-bottom">Ladder</div>
    </div>
    <div class="right">
        <div class="top-shelf">
            <?php $var = "A" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>A</div>
            <div class="s1"> <?php $var = "B" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>B</div>
            <div class="s1"> <?php $var = "C" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>C</div>
            <div class="s1"> <?php $var = "D" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>D</div>
            <div class="s1"> <?php $var = "E" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>E</div>
        </div>
        <div class="study-area">study-area<h5><a href="../index.php">Search Again</a></h5></div>
        <div class="bottom-shelf">
            <div class="s1"> <?php $var = "F" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>F</div>
            <div class="s1"> <?php $var = "G" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>G</div>
            <div class="s1"> <?php $var = "H" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>H</div>
            <div class="s1"> <?php $var = "I" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>I</div>
            <div class="s1"> <?php $var = "J" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>J</div>
        </div>
    </div>
    <div class="extreme-right">
        <div class="s1"> <?php $var = "K" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>K</div>
        <div class="s1"> <?php $var = "L" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>L</div>
        <div class="s1"> <?php $var = "M" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>M</div>
        <div class="s1"> <?php $var = "N" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>O</div>
        <div class="s1"> <?php $var = "O" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>P</div>
        <div class="s1"> <?php $var = "Q" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>Q</div>
        <div class="s1"> <?php $var = "R" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>R</div>
        <div class="s1"> <?php $var = "S" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>S</div>
        <div class="s1"> <?php $var = "T" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>T</div>
        <div class="s1"> <?php $var = "U" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?> U </div>
        <div class="s1"> <?php $var = "V" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>V</div>
        <div class="s1"> <?php $var = "W" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>W</div>
        <div class="s1"> <?php $var = "X" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>X</div>
        <div class="s1"> <?php $var = "Y" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>Y</div>
        <div class="s1"> <?php $var = "Z" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>Z</div>
        <div class="s1"> <?php $var = "AA" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>AA</div>
        <div class="s1"> <?php $var = "AB" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?></div>
        <div class="s1"> <?php $var = "AC" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>AC</div>
        <div class="s1"> <?php $var = "AD" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>AD</div>
        <div class="s1"> <?php $var = "AE" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>AE</div>
    </div>
    <div class="left">
        <div class="top-shelf">
            <div class="s1"> <?php $var = "AF" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>AF</div>
            <div class="s1"> <?php $var = "AG" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>AG</div>
            <div class="s1"> <?php $var = "AH" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>AH</div>
            <div class="s1"> <?php $var = "AI" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>AI</div>
            <div class="s1"> <?php $var = "AJ" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>AJ</div>
        </div>
        <div class="study-area">study-area</div>
        <div class="bottom-shelf">
            <div class="s1"> <?php $var = "AK" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>AK</div>
            <div class="s1"> <?php $var = "AL" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>AL</div>
            <div class="s1"> <?php $var = "AM" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>AM</div>
            <div class="s1"> <?php $var = "AN" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>AN</div>
            <div class="s1"> <?php $var = "AO" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>AO</div>
        </div>
    </div>
    <div class="extreme-left">
        <div class="s1"> <?php $var = "AP" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>AP</div>
        <div class="s1"> <?php $var = "AQ" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>AQ</div>
        <div class="s1"> <?php $var = "AR" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>AR</div>
        <div class="s1"> <?php $var = "AS" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>AS</div>
        <div class="s1"> <?php $var = "AT" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>AT</div>
        <div class="s1"> <?php $var = "AU" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>AU</div>
        <div class="s1"> <?php $var = "AV" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>AV</div>
        <div class="s1"> <?php $var = "AW" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>AW</div>
        <div class="s1"> <?php $var = "AX" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>AX</div>
        <div class="s1"> <?php $var = "AY" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>AY</div>
        <div class="s1"> <?php $var = "AZ" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>AZ</div>
        <div class="s1"> <?php $var = "BA" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>BA</div>
        <div class="s1"> <?php $var = "BB" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>BB</div>
        <div class="s1"> <?php $var = "BC" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>BC</div>
        <div class="s1"> <?php $var = "BD" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>BD</div>
        <div class="s1"> <?php $var = "BE" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>BE</div>
        <div class="s1"> <?php $var = "BF" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>BF</div>
        <div class="s1"> <?php $var = "BG" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>BG</div>
        <div class="s1"> <?php $var = "BH" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>BH</div>
        <div class="s1"> <?php $var = "BG" ;
            if($results['shelf']==$var)
                echo "<div class='s1' style='background-color:red;'>";
                else
                echo"";    
            ?>BG</div>
    </div>
</body>

</html>
    
     
      <?php   
       
    }
     
}
else{ 
    header("Location: ../404.php");
die();
   
}
?>
