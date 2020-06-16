   <head>
        <title>Πληροφοριακό Σύστημα Ραδιοφωνικών Σταθμών</title>
        <meta charset="utf-8" />
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
      <li ><a href="texnika_st.php">Τεχνικά στοιχεία ραδιοφωνικών σταθμών</a></li>
      <li ><a href="r_zeuxeis.php">Ραδιοηλεκτρικές ζεύξεις</a></li>
      <li class="active"><a href="egrafa.php">Εξερχόμενα/εισερχόμενα εγγράφων</a></li>
      <li><a href="texnikes_anafores.php">Τεχνικές αναφορές</a></li>
    </ul>
  </div>
</nav>
</nav>
 <div class="container">
<form action="egrafa.php" method="POST"  enctype="multipart/form-data" accept-charset="utf-8">
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
    <label for="dtitlos">Διακριτικός τίτλος</label>
    <input type="text"  class="form-control" name="dtitlos" placeholder="Διακριτικός τίτλος">
  </div>     
       <div class="form-group col-xs-7">
      <label for="tupos_egrafou">Τύπος εγγράφου</label>
      <select class="form-control" name="tupos_egrafou">
        <option value="εισερχόμενα">Εισερχόμενα</option>
        <option value="εξερχόμενα">Εξερχόμενα</option>
        <option value="εσωτερικά">Εσωτερικά</option>
      </select>
  </div>  
     <div class="form-group col-xs-7">
      <label for="kathgoria_e">Κατηγορία εγγράφου</label>
      <select class="form-control" name="kathgoria_e">
        <option value="ΑΠ">ΑΠ</option>
        <option value="ΥΑ">ΥΑ</option>
        <option value="ΤΕ">ΤΕ</option>
        <option value="ΥΣ">ΥΣ</option>
        <option value="ΣΠ">ΣΠ</option>
      </select>
  </div>  
     <div class="form-group col-xs-7">
    <label for="hm_eg">Ημερομηνία εγγράφου</label>
    <input type="date" class="form-control" name="hm_eg" placeholder="Ημερομηνία εγγράφου">
  </div>    
  
     <div class="form-group col-xs-7">
      <label for="tupos_ekpobhs">Τύπος εκπομπής</label>
      <select class="form-control" name="tupos_ekpobhs">
        <option value="ραδιοφωνική εκπομπή">Ραδιοφωνική εκπομπή</option>
        <option value="ραδιοηλεκτρική εκπομπή">Ραδιοηλεκτρική εκπομπή</option>
      </select>
  </div>  
      <div class="form-group col-xs-7">  
<label for="egrafo">Έγγραφο</label>
<input type="file" name="egrafo[]" multiple="multiple">
 </div>   
 
      <div class="col-xs-7">
  <button type="submit" name="submit" class="btn btn-primary">Καταχώρηση</button>
  </div>
  
  
</form>

</div>
</body>
<?php
include 'connect.php';

mysqli_set_charset($connection, "utf8");

if (isset($_POST[submit])) {
    $penothta      = $_POST["penothta"];
    $dtitlos       = $_POST["dtitlos"];
    $tupos_egrafou = $_POST["tupos_egrafou"];
    $kathgoria_e   = $_POST["kathgoria_e"];
    $hm_eg         = $_POST["hm_eg"];
    $tupos_ekpobhs = $_POST["tupos_ekpobhs"];
    
    
    
    ///-------------file handling------------------
    $total = count($_FILES['egrafo']['name']);
    // Loop through each file
    for ($i = 0; $i < $total; $i++) {
        //Get the temp file path
        $tmpFilePath = $_FILES['egrafo']['tmp_name'][$i];
        
        //Make sure we have a filepath
        if ($tmpFilePath != "") {
            //Setup our new file path
            $newFilePath = "uploads/" . $_FILES['egrafo']['name'][$i];
            
            //Upload the file into the temp dir
            if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                $fname = $_FILES['egrafo']['name'][$i];
                $fname = str_replace(' ', '', $fname);
                $query = "INSERT INTO egrafa(dtitlos,fname,hm_eg,kathgoria_e,pathname,penothta,tupos_egrafou,tupos_ekpobhs)
  VALUES ('$dtitlos','$fname',' $hm_eg','$kathgoria_e','$newFilePath','$penothta','$tupos_egrafou','$tupos_ekpobhs')";
                if ($connection->query($query) === TRUE) {
                    echo "Η εγγραφή καταχωρήθηκε με επιτυχία" . "<br>";
                    /* header("Refresh:0");*/
                    
                } else {
                    echo "Error: " . $query . "<br>" . $connection->error;
                }
                
                
                
                
            }
        }
    }
} //end isset
?>