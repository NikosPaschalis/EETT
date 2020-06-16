<head>
    	<meta charset="utf-8" />
</head>
<?php
    include 'connect.php';
    mysqli_set_charset($connection,"utf8");
    
        $id = $_GET["id"];
        $flag = $_GET["flag"];
        if($flag==1)
        {
            $query = "DELETE FROM texnika_stoixeia WHERE id='$id'";
            $result = mysqli_query($connection, $query);
            if(! $result )
            {
              die('Η διαγραφή απέτυχε!: ' . mysql_error());
            }
            echo "Τα δεδομένα διαγράφτηκαν με επιτυχία!\n";
            mysqli_close($connection);
        }
        if($flag==2)
        {
            $query = "DELETE FROM zeuxeis WHERE id='$id'";
            $result = mysqli_query($connection, $query);
            if(! $result )
            {
              die('Η διαγραφή απέτυχε!: ' . mysql_error());
            }
            echo "Τα δεδομένα διαγράφτηκαν με επιτυχία!\n";
            mysqli_close($connection);   
        }
        if($flag==3)
        {
            $query = "DELETE FROM egrafa WHERE id='$id'";
            $result = mysqli_query($connection, $query);
            if(! $result )
            {
              die('Η διαγραφή απέτυχε!: ' . mysql_error());
            }
            echo "Τα δεδομένα διαγράφτηκαν με επιτυχία!\n";
            mysqli_close($connection);   
        }

?>
<br>
Ανακατεύθυνση στην προηγούμενη σελίδα σε <p id="demo"></p>.
<meta http-equiv="refresh" content="3; URL='texnikes_anafores.php'" />

