<head>
        <meta charset="utf-8" />
</head>
<?php
include 'connect.php';
include 'latlng.php';
mysqli_set_charset($connection,"utf8");
 //Check about update1
      if(isset($_POST[update1]))
      {
     echo   $id = $_POST['id'];
     echo $suxnothta = $_POST["suxnothta"];
     echo   $shm_metr = $_POST["shm_m"];
    echo    $penothta = $_POST["penothta"];
    echo    $dtitlos = $_POST["dtitlos"];
    echo    $nomikh_k = $_POST["nom_k"];
      echo   $hm_metr = $_POST["hm_m"];
        //------change to latlng----
        
        $string=$shm_metr;
        $latlng = explode("-", $string);
        $latlng[0];
        $latlng[1];
        
        $latlng0=explode(" ", $latlng[0]);
        $deg0=$latlng0[0];
        $min0=$latlng0[1];
        $sec0=$latlng0[2];
        
        $latlng1=explode(" ", $latlng[1]);
        $deg1=$latlng1[0];
        $min1=$latlng1[1];
        $sec1=$latlng1[2];
        $test0=DMStoDEC($deg0,$min0,$sec0);
        $test1= DMStoDEC($deg1,$min1,$sec1);
     echo   $shm_metr  = $test0.",".$test1;
          preg_replace('/\s+/S', " ", $g_sud);
        //-----latlng convertion end------
        $query = "UPDATE texnika_stoixeia 
        SET shmeio_m='$shm_metr',
        penothta='$penothta',dtitlos='$dtitlos',
        nomikh_k='$nomikh_k',hm_metr='$hm_metr' 
        WHERE id='$id'
        ";
        $result = mysqli_query($connection, $query);
         if(! $result )
            {
              die('Η ενημέρωση απέτυχε!: ' . mysql_error());
            }
            echo "Τα δεδομένα ενημερώθηκαν με επιτυχία!\n";
            mysqli_close($connection);
        
          
      }//end update 1
        if(isset($_POST[update2]))
      {
               echo   $id = $_POST['id'];
     echo $suxnothta = $_POST["suxnothta"];
     echo   $shm_metr = $_POST["shm_m"];
    echo    $penothta = $_POST["penothta"];
    echo    $dtitlos = $_POST["dtitlos"];
    echo    $nomikh_k = $_POST["nom_k"];
      echo   $hm_metr = $_POST["hm_m"];
        //------change to latlng----
        
        $string=$shm_metr;
        $latlng = explode("-", $string);
        $latlng[0];
        $latlng[1];
        
        $latlng0=explode(" ", $latlng[0]);
        $deg0=$latlng0[0];
        $min0=$latlng0[1];
        $sec0=$latlng0[2];
        
        $latlng1=explode(" ", $latlng[1]);
        $deg1=$latlng1[0];
        $min1=$latlng1[1];
        $sec1=$latlng1[2];
        $test0=DMStoDEC($deg0,$min0,$sec0);
        $test1= DMStoDEC($deg1,$min1,$sec1);
     echo   $shm_metr  = $test0.",".$test1;
          preg_replace('/\s+/S', " ", $g_sud);
        //-----latlng convertion end------
          
      }///End update 2
?>
<br>
Ανακατεύθυνση στην προηγούμενη σελίδα σε 3 δευτερόλεπτα.
<!---<meta http-equiv="refresh" content="3; URL='texnikes_anafores.php'" />