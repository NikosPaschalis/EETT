
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
    <script type="text/javascript" src="empdata.json"></script>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Πληροφοριακό Σύστημα Ραδιοφωνικών Σταθμών</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Αρχική</a></li>
                <li><a href="stoixeia_i.php">Στοιχεία ιδιοκτησίας</a></li>
                <li><a href="texnika_st.php">Τεχνικά στοιχεία ραδιοφωνικών σταθμών</a></li>
                <li ><a href="r_zeuxeis.php">Ραδιοηλεκτρικές ζεύξεις</a></li>
                <li><a href="egrafa.php">Εξερχόμενα/εισερχόμενα εγγράφων</a></li>
                <li><a href="texnikes_anafores.php">Τεχνικές αναφορές</a></li>
            </ul>
        </div>
    </nav>
    <?php
    include 'connect.php';

    mysqli_set_charset($connection, "utf8");
    $query = "SELECT DISTINCT dtitlos,toponumio,gewgrafikes_sud FROM texnika_stoixeia";
    $result = mysqli_query($connection, $query);
    $rows = array();
    while ($r = mysqli_fetch_assoc($result))
    {
        preg_replace('/\s+/S', " ", $r);
        $rows[] = $r;
    }
    $fp = fopen('empdata.json', 'w');
    fwrite($fp, json_encode($rows, JSON_UNESCAPED_UNICODE));
    fclose($fp);
    ?>
    <div class="row">
        <div class=".col-md-4"></div>


        <div class=".col-md-4" id="map" style="width:100%;height:100%"></div>

        <script type="text/javascript">

        //AIzaSyDZXoIdhuX1ALJPRUQWVk9u0mNJoihIQXc my key
            function myMap() {

                var location = [[3]];
                var markers = [];
               // markers.push({name: "", info: ""});//unique toponumia

                $.getJSON("empdata.json", function (json)
                {
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 7,
                        center: new google.maps.LatLng(38.296529, 21.810672),
                        mapTypeId: google.maps.MapTypeId.HYBRID
                    });//end var map
                    var infowindow = new google.maps.InfoWindow();
                    var marker;

                    var i = 0;
                    while (i < json.length) {
                        var flag = 0, takis = {name: " ", info: " ",sud: " "};
                        var dtitlos = json[i].dtitlos;
                        var toponumio = json[i].toponumio;
                        takis.name = toponumio;
                        takis.sud=json[i].gewgrafikes_sud;
                        var gewgrafikes_sud = json[i].gewgrafikes_sud;
                        location.push([toponumio, gewgrafikes_sud, dtitlos]);
                        for (var test = 0; test < markers.length; test++)
                        {
                            

                            if (takis.name == markers[test].name)
                            {
                              
                                flag = 1;
                                
                            }

                        }
                        if (flag != 1)
                        {
                            markers.push({name: takis.name,info:" ",sud:takis.sud});//unique toponumia
                            
                          
                        }
                        i++;
                    }
                    i=0
                     while (i < json.length) {
                          
                          for (var test = 0; test < markers.length; test++)
                         {
                              
                             if (json[i].toponumio == markers[test].name){
                                 
                                  markers[test].info += "<br/>" + json[i].dtitlos; 
                                 
                                      
                                  
                             }
                            
                         }
                         
                      i++   
                     }

                   /* for (var z = 0; z < markers.length; z++)
                    {

                        console.log(markers[z].name);
                        console.log(markers[z].info);
                        console.log(markers[z].sud);
                        console.log(z);
                    }*/

                    /////google map  

                    for (var z = 0; z < markers.length; z++)
                    {
                        var latlng=markers[z].sud.split(",");
                         marker = new google.maps.Marker({
                            position: new google.maps.LatLng(latlng[0], latlng[1]),
                            map: map
                        });
                        
                        google.maps.event.addListener(marker, 'click', (function (marker, z) {
                            return function () {
                                infowindow.setContent("<div style='width:100%;border-bottom:1px solid black;text-align:center;'><span style='color:Red'>" + markers[z].name + "</span></div>" + "<br/>" + markers[z].info);
                                infowindow.open(map, marker);
                            }
                        })(marker, z));
                        
                    }

                    
                    ///end google map

                });//end json
            }//end my map
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZXoIdhuX1ALJPRUQWVk9u0mNJoihIQXc&callback=myMap">
        </script>
</body>
<!-----console[0]={"dtitlos":"Πρώτο ΠΡΟΓΡΑΜΜΑ ΕΡΤ","toponumio":"ΠΑΝΑΧΑΪΚΟ","gewgrafikes_sud":"38.255833333333,21.851944444444"}