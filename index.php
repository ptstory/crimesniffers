<!DOCTYPE html>
<html>

<head>

    <!--i dont know if these are safe to delete : -->
    <!--<script type="text/javascript" src="https://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>-->
    <!--<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />-->
    <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.0/moment.min.js"></script>-->
    <!--<script type="text/javascript" src="cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.10.4/typeahead.bundle.min.js"></script>-->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/resources/js/typeahead-helper.js"></script>
    <script type="text/javascript" src="/resources/js/bootstrap3-typeahead.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/resources/css/index_style.css" />

</head>

<body>
    <div align="center" class="container">
        <h1 style="font-family:arial;"> Atlanta Crime Sniffers</h1>
        <img src='/resources/images/logo.png'>
    </div>
    <br>
    <h2> Date Range </h2>

    <h3> Start Date: </h3>
    <form action="results.php" class="form-control" method="post">
        <select name="smonth">
                <option value="">All</option>
                <option value="01">Jan</option>
                <option value="02">Feb</option>
                <option value="03">Mar</option>
                <option value="04">Apr</option>
                <option value="05">May</option>
                <option value="06">Jun</option>
                <option value="07">Jul</option>
                <option value="08">Aug</option>
                <option value="09">Sep</option>
                <option value="10">Oct</option>
                <option value="11">Nov</option>
                <option value="12">Dec</option>
            </select>

        <select name="syear">
            <option value="2017">2017</option>
        </select>


        <br>

        <h3> End Date: </h3>

        <select name="emonth">
                <option value="">All </option>
                <option value="01">Jan</option>
                <option value="02">Feb</option>
                <option value="03">Mar</option>
                <option value="04">Apr</option>
                <option value="05">May</option>
                <option value="06">Jun</option>
                <option value="07">Jul</option>
                <option value="08">Aug</option>
                <option value="09">Sep</option>
                <option value="10">Oct</option>
                <option value="11">Nov</option>
                <option value="12">Dec</option>
            </select>

        <select name="eyear">
            <option value="2017">2017</option>
        </select>

        <h2> Location </h2>

        <h3>Street:</h3>
        <input type="text" name="street" size="50">
        <br>

        <h3> Neigborhood: </h3>

        <div class="form-group">
            <input class="typeahead form-control" id="neighborhoods_search" type="text" autocomplete="off" placeholder="Neighborhood" name="neighborhood">
        </div>

        <br>

        <h3> Beat: </h3>

        <div class="form-group">
            <input class="typeahead form-control" id="beats_search" type="text" autocomplete="off" name="beat" placeholder="Beat">
        </div>

        <h2> Offense </h2>

        <h3> Crime: </h3>

        <select name="crime">
                <option value=""> </option>
                <option value="Larceny-Non-Vehicle">Larceny-Non-Vehicle</option>
                <option value="Larceny-From-Vehicle">Larceny-From-Vehicle</option>
                <option value="Burglary-Residence">Burglary-Residence</option>
                <option value="Burglary-Nonres">Burglary-Non-Residence</option>
                <option value="Auto-Theft">Auto-Theft</option>
                <option value="Aggravated-Assault">Aggravated-Assault</option>
                <option value="Robbery-Pedestrian">Robbery-Pedestrian</option>
                <option value="Rape">Rape</option>
                <option value="Homicide">Homicide</option>
            </select>

        <h3> Crime Type: </h3>

        <div class="radio">
            <label><input type="radio" name="crimetype" value="violent">Violent</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="crimetype" value="non-violent">Non-violent</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="crimetype" value="" style="display: none" checked></label>
        </div>


        <h3> Number of Victims: </h3>

        <select name="numberofvict">
                <option value="">Any</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>

        <br>
        <br>
        <br>
        <input type="submit" value="Search">
    </form>
</body>

</html>