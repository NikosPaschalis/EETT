	<head>
	    <title>Πληροφοριακό Σύστημα Ραδιοφωνικών Σταθμών</title>
		<meta charset="utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Πληροφοριακό Σύστημα Ραδιοφωνικών Σταθμών</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="index.php">Αρχική</a></li>
      <li ><a href="stoixeia_i.php">Στοιχεία ιδιοκτησίας</a></li>
      <li class="active"><a href="texnika_st.php">Τεχνικά στοιχεία ραδιοφωνικών σταθμών</a></li>
      <li ><a href="r_zeuxeis.php">Ραδιοηλεκτρικές ζεύξεις</a></li>
      <li><a href="egrafa.php">Εξερχόμενα/εισερχόμενα εγγράφων</a></li>
      <li><a href="texnikes_anafores.php">Τεχνικές αναφορές</a></li>
    </ul>
  </div>
</nav>
</nav>
 <div class="container">
<form action="texnika_st.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
    
  <div class="form-group col-xs-7">
    <label for="suxnothta">Συχνότητα (MHz)</label>
    <input type="number" min="87.5" max="108" step="0.1" class="form-control" name="suxnothta" placeholder="Συχνότητα (MHz)">
  </div>

  <div class="form-group col-xs-7">
    <label for="shm_metr">Σημείο μέτρησης</label>
    <input type="text" class="form-control" name="shm_metr" placeholder="Γεωγραφικές συντεταγμένες">
  </div>  
    <div class="form-group col-xs-7">
  <label for="">Κέντρο εκπομπής:</label>
  </div> 
  <div class="form-group col-xs-7">
    <label for="toponumio">Τοπονύμιο</label>
    <input type="text"   class="form-control" name="toponumio" placeholder="Τοπονύμιο">
  </div> 
  
  
  
   <div class="form-group col-xs-7">
      <label for="xarakthrismos">Χαρακτηρισμός</label>
      <select class="form-control" name="xarakthrismos">
        <option value="πρωτεύον">Πρωτεύον</option>
        <option value="δευτερεύον">Δευτερεύον</option>
        
      </select>
  </div>  
  
  
     <div class="form-group col-xs-7">
    <label for="penothta">Περιεφεριακή ενότητα</label>
      <select class="form-control"  name="penothta" />
 
  <option value="ΑΧΑΙΑΣ">ΑΧΑΙΑΣ</option>
  <option value="ΑΙΤΩΛ/ΝΙΑΣ">ΑΙΤΩΛ/ΝΙΑΣ</option>
  <option value="ΗΛΕΙΑΣ">ΗΛΕΙΑΣ</option>
  <option value="ΑΡΤΑΣ">ΑΡΤΑΣ</option>
  <option value="ΠΡΕΒΕΖΗΣ">ΠΡΕΒΕΖΗΣ</option>
  <option value="ΙΩΑΝΝΙΝΩΝ">ΙΩΑΝΝΙΝΩΝ</option>
  <option value="ΘΕΣΠΡΩΤΙΑΣ">ΘΕΣΠΡΩΤΙΑΣ</option>
  <option value="ΚΕΡΚΥΡΑΣ">ΚΕΡΚΥΡΑΣ</option>
  <option value="ΛΕΥΚΑΔΑΣ">ΛΕΥΚΑΔΑΣ</option>
  <option value="ΚΕΦΑΛΛΗΝΙΑΣ">ΚΕΦΑΛΛΗΝΙΑΣ</option>
  <option value="ΖΑΚΥΝΘΟΥ">ΖΑΚΥΝΘΟΥ</option>
</select>
  </div>  

 
   <div class="form-group col-xs-7">
    <label for="g_sud">Γεωγραφικές συντεταγμένες</label>
    <input type="text" class="form-control" name="g_sud" placeholder="Γεωγραφικές συντεταγμένες">
  </div> 
  
     <div class="form-group col-xs-7">
      <label for="status">Κατάσταση</label>
      <select class="form-control" name="status">
        <option value="ενεργό">Ενεργό</option>
        <option value="ανενεργό">Μη ενεργό</option>
        
      </select>
  </div> 
  
  
     <div class="form-group col-xs-7">
    <label for="dtitlos">Διακριτικός τίλος</label>
    <input type="text"   class="form-control" name="dtitlos" placeholder="Διακριτικός τίλος">
  </div> 
 
      <div class="form-group col-xs-7">
      <label for="nomikh_k">Νομική κατάσταση</label>
      <select class="form-control" name="nomikh_k">
        <option value="νόμιμος">Νόμιμος</option>
        <option value="παράνομος">Παράνομος</option>
        
      </select>
  </div> 
  
         <div class="form-group col-xs-7">
<label for="photo">ΦΩΤΟΓΡΑΦΙΕΣ ΕΓΚΑΤΑΣΤΑΣΕΩΝ:</label>
 <input type="file" name="photo[]"  accept="image/*" multiple="multiple">
  </div> 
       <div class="form-group col-xs-7">
    <label for="hm_metr">Ημερομηνία μέτρησης</label>
    <input type="date" class="form-control" name="hm_metr" placeholder="Ημερομηνία μέτρησης">
  </div> 
  
  
   <div class="col-xs-7">
  <button type="submit" name="submit" class="btn btn-primary">Καταχώρηση</button>
  </div>
  
  
</form>

</div>
</body>

<?php
include 'connect.php';
include 'latlng.php';
mysqli_set_charset($connection,"utf8");

if(isset($_POST[submit])){
$suxnothta = $_POST["suxnothta"];
$shm_metr = $_POST["shm_metr"];
$toponumio = $_POST["toponumio"];
$xarakthrismos = $_POST["xarakthrismos"];
$penothta = $_POST["penothta"];
$g_sud = $_POST["g_sud"];
$status = $_POST["status"];
$dtitlos = $_POST["dtitlos"];
$nomikh_k = $_POST["nomikh_k"];
$hm_metr = $_POST["hm_metr"];
//------change to latlng----

$string=$g_sud ;
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
$g_sud = $test0.",".$test1;
  preg_replace('/\s+/S', " ", $g_sud);
//-----latlng convertion end------

$query="INSERT INTO texnika_stoixeia(suxnothta,shmeio_m,toponumio,xarakthrimos,penothta,gewgrafikes_sud,status,dtitlos,nomikh_k,hm_metr)
VALUES ('$suxnothta','$shm_metr','$toponumio','$xarakthrismos','$penothta','$g_sud','$status','$dtitlos','$nomikh_k','$hm_metr')";

if ($connection->query($query) === TRUE) {
    echo "Η εγγραφή καταχωρήθηκε με επιτυχία"."<br>";
   /* header("Refresh:0");*/
   
} else {
 echo "Error: " . $query . "<br>" . $connection->error;
}

///-------------file handling------------------
$total = count($_FILES['photo']['name']);
// Loop through each file
for($i=0; $i<$total; $i++) {
  //Get the temp file path
  $tmpFilePath = $_FILES['photo']['tmp_name'][$i];

  //Make sure we have a filepath
  if ($tmpFilePath != ""){
    //Setup our new file path
    $newFilePath = "./uploads/" . $_FILES['photo']['name'][$i];

    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {
        $fname= $_FILES['photo']['name'][$i];
 $query="INSERT INTO photos(dtitlos,fname,pathname,penothta)
  VALUES ('$dtitlos','$fname',' $newFilePath','$penothta')";
if ($connection->query($query) === TRUE) {
    echo "Η εγγραφή καταχωρήθηκε με επιτυχία"."<br>";
   /* header("Refresh:0");*/
   
} else {
 echo "Error: " . $query . "<br>" . $connection->error;
}




    }
  }}
}//end isset
?>