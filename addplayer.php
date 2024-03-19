<?php

    session_start();
    // Session starts
    //$con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));
    $con = new mysqli("localhost", "root", "", "cricket");


    $capno=$_POST['cap_no'];
    $playername=$_POST['playername'];
    $name=$_POST['name'];
    
    $age=$_POST['age'];
    $dob=$_POST['dob'];
    $runs=$_POST['runs'];
    $wickets=$_POST['wickets'];
    $type=$_POST['type'];
    $num=$_POST['no_of_matches'];
    $rank=$_POST['rank'];
    $batting=$_POST['batting_best'];
    $bowling=$_POST['bowling_best'];
    $image=$_POST['image'];

    //$query="insert into player(cap_no,playername,name,age,dob,runs,wickets,type,no_of_matches,rank,batting_best,bowling_best) values('$capno','$playername','$name','$age','$dob','$runs','$wickets','$type','$num','$rank','$batting','$bowling')";
    $query="insert into player values('$capno','$age','$dob','$runs','$wickets','$type','$num','$rank','$batting','$bowling','$playername','$image','$name')";
    

   
 
    if ($con->query($query) === TRUE) 
    {
      echo "record inserted successfully";
    }
     else 
    {
      echo "Error: " . $query . "<br>" . $con->error;
    }

    /*if(mysqli_query($con,$query))
    {
        echo "<script type='text/javascript'>alert('NEW RECORD CREATED SUCCESSFULLY!!');</script>";
      header("refresh: 5; url=addplayer.html");
    }
    else
    {
    	echo "<script type='text/javascript'>alert('ERROR');</script>";
        header("refresh: 5; url=addplayer.html");
    	mysqli_error($con);
    }*/
    ?>

    