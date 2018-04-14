<html>

<head>
    <link rel="stylesheet" href="results_style.css" />
</head>

<body>

    <div style="text-align:center" class="container">
        
        <h1> Query Result </h1> 
        <input type="button" onclick="location.href = 'index.php';" value="Back">
        <br>
    </div>
    <table>
        <tr>
            <th> Offense Id </th>
            <th> Type </th>
            <th> Description </th>
            <th> Number of Victims</th>
            <th> Date Time</th>
            <th> Street Address </th>
            <th> Neighborhood </th>
            <th> Beat </th>
            <th> Latitude </th>
            <th> Longitude </th>
        </tr>
        <?php
include("config.php");

$smonth = $_POST["smonth"];
$emonth = $_POST["emonth"];
$street = $_POST["street"];
$neighborhood = $_POST["neighborhood"];
$beat = $_POST["beat"];
$crime = $_POST["crime"];
$crimetype = $_POST["crimetype"];
$victims = $_POST["numberofvict"];


if($smonth > $emonth) {
    echo "<script>";
    echo "alert('End date cannot be before start date');";
    echo "window.location = 'home.php'";
    echo "</script>";
}

$sql = "SELECT crime.offense_id, category.type , type.description,crime.num_of_victims,timeframe.datetime, area.street_address, area.neighborhood, area.beat, coordinates.latitude, coordinates.longitude
From crime
JOIN type ON type.fk_type_crime_offense_id = crime.offense_id
JOIN timeframe ON timeframe.fk_timeframe_crime_offense_id = crime.offense_id
JOIN location ON location.location_crime_offense_id = crime.offense_id
JOIN category ON category.fk_category_crime_offense_id = crime.offense_id
JOIN area ON area.fk_area_location_location_id = location.location_id
JOIN coordinates ON coordinates.fk_coordinates_location_location_id = location.location_id";

if ( (!empty($smonth)) && (!empty($emonth)) ) {
    if(strpos($sql,'WHERE') == false) {
    $sql = $sql." WHERE (timeframe.datetime between '2017-$smonth-01' and '2017-$emonth-31')";
    } else {
    $sql = $sql." AND (timeframe.datetime between '2017-$smonth-01' and '2017-$emonth-31')";
    }
}

if ( (!empty($street)) ) {
    if(strpos($sql,'WHERE') == false) {
    $sql = $sql." WHERE (street_address like '%$street%')";
    } else {
    $sql = $sql." AND (street_address like '%$street%')";
    }
}

if ( (!empty($neighborhood)) ) {
    if(strpos($sql,'WHERE') == false) {
    $sql = $sql." WHERE (neighborhood like '%$neighborhood%')";
    } else {
    $sql = $sql." AND (neighborhood like '%$neighborhood%')";
    }
}

if ( (!empty($beat)) ) {
    if(strpos($sql,'WHERE') == false) {
    $sql = $sql." WHERE (beat = '$beat')";
    } else {
    $sql = $sql." AND (beat = '$beat')";
    }
}


if ( (!empty($crimetype)) ) {
    if(strpos($sql,'WHERE') == false) {
    $sql = $sql." WHERE (type = '$crimetype')";
    } else {
    $sql = $sql." AND (type = '$crimetype')";
    }
}

if ( (!empty($crime)) ) {
    if(strpos($sql,'WHERE') == false) {
    $sql = $sql." WHERE (description like '%$crime%')";
    } else {
    $sql = $sql." AND (description like '%$crime%')";
    }
}

if ( (!empty($victims)) ) {
    if(strpos($sql,'WHERE') == false) {
    $sql = $sql." WHERE (num_of_victims = '$victims')";
    } else {
    $sql = $sql." AND (num_of_victims = '$victims')";
    }
}

$sql = $sql." ORDER BY timeframe.datetime;";

if( (empty($smonth)) && (empty($emonth)) && (empty($street))&& (empty($neighborhood)) && (empty($crime)) && (empty($beat))
&& (empty($crimetype))&& (empty($victims)) ) {
    $sql = "SELECT crime.offense_id, category.type , type.description,crime.num_of_victims,timeframe.datetime, area.street_address, area.neighborhood, area.beat, coordinates.latitude, coordinates.longitude
        From crime
        JOIN type ON type.fk_type_crime_offense_id = crime.offense_id
        JOIN timeframe ON timeframe.fk_timeframe_crime_offense_id = crime.offense_id
        JOIN location ON location.location_crime_offense_id = crime.offense_id
        JOIN category ON category.fk_category_crime_offense_id = crime.offense_id
        JOIN area ON area.fk_area_location_location_id = location.location_id
        JOIN coordinates ON coordinates.fk_coordinates_location_location_id = location.location_id
        ORDER BY timeframe.datetime;";
}

$result = mysql_query($sql);
$num_rows = mysql_num_rows($result);
$googlearray = array();

if ($num_rows == 0) {
    echo "<h1> No results found for query </h1>";
} else {
    echo "<h1> Number of Results: $num_rows";
}

if(mysql_num_rows($result)>0) {
    while($row = mysql_fetch_assoc($result))
    {
    $offid = $row["offense_id"];
    $type = $row["type"];
    $desc = $row["description"];
    $numvict = $row["num_of_victims"];
    $datetime = $row["datetime"];
    $address = $row["street_address"];
    $neigh = $row["neighborhood"];
    $beat = $row["beat"];
    $lati = $row["latitude"];
    $long = $row["longitude"];

$desc_datetime = $desc.' @ '.$datetime;

  if ( ($long != 0) && ($long != 0) ) { 
 $a = array($desc_datetime,$lati,$long);
    array_push($googlearray,$a);
}
    
    echo "<tr>";
    echo "<td align='center'> $offid </td>";
    echo "<td align='center'> $type </td>";
    echo "<td align='center'> $desc </td>";
    echo "<td align='center'> $numvict </td>";
    echo "<td align='center'> $datetime </td>";
    echo "<td align='center'> $address </td>";
    echo "<td align='center'> $neigh </td>";
    echo "<td align='center'> $beat </td>";
    echo "<td align='center'> $lati </td>";
    echo "<td align='center'> $long </td>";
    echo "</tr>";
    }
}
?>
            <p id="whereToPrint"></p>
            <script>
                var locations = <?php echo json_encode($googlearray); ?>;
            </script>
            <div id="map" style="width: 500px; height: 400px; margin: 0 auto 0 auto;"></div>

            <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAA4uxcbtLPte397r8rAHzo_PKe4w5rF4M"></script>

            <script type="text/javascript">
                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 16,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
                });
            
                var infowindow = new google.maps.InfoWindow();
            
                var marker, i;
            
                for (i = 0; i < locations.length; i++) {  
                  marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map
                  });
            
                  google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                      infowindow.setContent(locations[i][0]);
                      infowindow.open(map, marker);
                    }
                  })(marker, i));
                }
            
                var bounds = new google.maps.LatLngBounds();
            var infowindow = new google.maps.InfoWindow();    
            
            for (i = 0; i < locations.length; i++) {  
              var marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
              });
            
              //extend the bounds to include each marker's position
              bounds.extend(marker.position);
            
              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                  infowindow.setContent(locations[i][0]);
                  infowindow.open(map, marker);
                }
              })(marker, i));
            }
            
            //now fit the map to the newly inclusive bounds
            map.fitBounds(bounds);
            
            //(optional) restore the zoom level after the map is done scaling
            var listener = google.maps.event.addListener(map, "idle", function () {
                map.fitBounds(bounds);
                // map.setZoom(16);
                google.maps.event.removeListener(listener);
            });
            </script>