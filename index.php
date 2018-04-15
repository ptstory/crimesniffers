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
        <script type="text/javascript" src="typeahead-helper.js"></script>
        <script type="text/javascript" src="bootstrap3-typeahead.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css" />
        <link rel="stylesheet" href="index_style.css" />
    </head>
    
    <body>
        </br>
        <div align="center">
            <h1 style="font-family:arial;">Atlanta Crime Sniffers</h1>
            <img src='logo.png'>
        </div>

          <div class="crime-summary-box mvxl">
          <p class="h5 txtC">
            Crime Trends in 2017
          </p>
<div class="crime-box crime-box-full-width backgroundLowlight pvl clearfix">
                          <div class="crime-box-col floatLeft txtC brs">
                <p class="h1 mbn typeEmphasize crime-text-0">22,948</p>
                <p class="h7 mtn typeCaps typeEmphasize">TOTAL CRIMES REPORTED</p>
              </div>
                           <div class="crime-box-col floatLeft txtC brs ">
                            <p class="h1 mbn typeEmphasize crime-text-4">September</p>
                            <p class="h7 mtn typeCaps typeEmphasize">Highest Crime Month</p>
              </div>
                               <div class="crime-box-col floatLeft txtC brs ">
                            <p class="h1 mbn typeEmphasize crime-text-4">Monday</p>
                            <p class="h7 mtn typeCaps typeEmphasize">Highest Crime Day</p>
              </div>
                               <div class="crime-box-col floatLeft txtC brs ">
                            <p class="h1 mbn typeEmphasize crime-text-4">705</p>
                            <p class="h7 mtn typeCaps typeEmphasize">Highest Crime Beat</p>
              </div>
                          <div class="crime-box-col floatLeft txtC ">
                            <p class="h1 mbn typeEmphasize crime-text-0">Downtown</p>
                            <p class="h7 mtn typeCaps typeEmphasize">Highest Crime Neighborhood</p>
              </div>
           <div class="crime-box-col floatLeft txtC brs">
             <p class="h1 mbn typeEmphasize crime-text-1">6 : 1</p>
             <p class="h7 mtn typeCaps typeEmphasize">Non-Violent : Violent</p>
              </div>
           <div class="crime-box-col floatLeft txtC brs">
                <p class="h1 mbn typeEmphasize crime-text-5">November</p>
                <p class="h7 mtn typeCaps typeEmphasize">Lowest Crime Month</p>
              </div>
           <div class="crime-box-col floatLeft txtC brs">
                <p class="h1 mbn typeEmphasize crime-text-5">Thursday</p>
                <p class="h7 mtn typeCaps typeEmphasize">Lowest Crime Day</p>
              </div>
           <div class="crime-box-col floatLeft txtC brs">
                <p class="h1 mbn typeEmphasize crime-text-5">612</p>
                <p class="h7 mtn typeCaps typeEmphasize">Lowest Crime Beat</p>
              </div>
           <div class="crime-box-col floatLeft txtC brs">
                <p class="h1 mbn typeEmphasize crime-text-1">Monday</p>
             <p class="h7 mtn typeCaps typeEmphasize">Day Most Likely To Be A Victim of Larceny At GSU</p>
              </div>
                      </div>
</div>

        
        </br>
        
        <div class="container center_div" style="margin: 0 auto; width:50%; background-color:lightblue">
        <form action="results.php" class="form-control" method="post">
            
            <div class="row text-center">
                <div class="col-md-4">
                    <h3 class="text-center"><u>Date Range</u></h3>
                    <h5 class="text-center">Start Date:</h5>
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
            
            </br>
            </br>
            
            <h5>End Date:</h5>
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
            
            </div>
            <hr>
            
            <div class="col-md-4">
            <h3><u>Location</u></h3>
            
            <h5>Street:</h5>
            <input class="typeahead form-control" type="text" name="street" size="20">
            <br>
            <br>
            <h5>Neigborhood:</h5>
            
            <div class="form-group">
                <input class="typeahead form-control" id="neighborhoods_search" type="text" autocomplete="off" placeholder="Neighborhood" name="neighborhood">
            </div>
            
            <h5>Beat:</h5>
            
            <div class="form-group">
                <input class="typeahead form-control" id="beats_search" type="text" autocomplete="off" name="beat" placeholder="Beat">
            </div>
            </div>
            
            <hr>
            
            <div class="col-md-4">
            <h3><u>Offense</u></h3>
            <h5>Crime:</h5>
            
            <select name="crime" style="width: 130px;">
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
            
            </br>
            </br>
            <h5>Crime Type:</h5>
            
            <div class="radio">
                <label><input type="radio" name="crimetype" value="violent">Violent</label>
            </div>
            
            <div class="radio">
                <label>
                    <input type="radio" name="crimetype" value="non-violent">Non-violent
                </label>
            </div>
            
            <div class="radio">
                <label>
                    <input type="radio" name="crimetype" value="" style="display: none" checked>
                </label>
            </div>
            
            <h5>Number of Victims:</h5>
            
            <select name="numberofvict">
                <option value="">Any</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            
            </br>
            </br>
            </br>
            
            </div>
            </div>
            <div class="text-center">
                
            <input type="submit" value="Search">
            </div>
            </div>
            
        </form>
        
    </body>
</html>