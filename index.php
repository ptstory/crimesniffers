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
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="./resources/js/typeahead-helper.js"></script>
        <script type="text/javascript" src="./resources/js/bootstrap3-typeahead.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css" />
        <link rel="stylesheet" href="./resources/css/index_style.css" />
    </head>
    
    <body background-color: #f5f6f7>
        </br>
        <div align="center">
            <h1 style="font-family:arial;">Atlanta Crime Sniffers</h1>
        </div>

        <div class="div-logo">
            <img src='./resources/images/logo.png'>
            <p class="h5 txtC">
            Crime Trends in 2017
          </p>
        </div>
<div class="crime-box-full-width-fixed crime-box crime-box-full-width backgroundLowlight pvl clearfix">
                          <div class="crime-box-col floatLeft txtC brs">
                             <p class="h1 mbn typeEmphasize crime-text-0"><a class="h1 mbn typeEmphasize crime-text-0" href="./resources/total-crimes-reported.html">26,759</a>
                            <p class="h7 mtn typeCaps typeEmphasize">TOTAL CRIMES REPORTED</p>
              </div>
                           <div class="crime-box-col floatLeft txtC brs ">
                            <p class="h1 mbn typeEmphasize crime-text-4"><a class="h1 mbn typeEmphasize crime-text-4" href="./resources/highest-crime-month.html">October</a>
</p>
                            <p class="h7 mtn typeCaps typeEmphasize">Highest Crime Month</p>
              </div>
                               <div class="crime-box-col floatLeft txtC brs ">
                            <p class="h1 mbn typeEmphasize crime-text-4"><a class="h1 mbn typeEmphasize crime-text-4" href="./resources/highest-crime-day.html">Monday</a>
                            <p class="h7 mtn typeCaps typeEmphasize">Highest Crime Day</p>
              </div>
                               <div class="crime-box-col floatLeft txtC brs ">
                            <p class="h1 mbn typeEmphasize crime-text-4"><a class="h1 mbn typeEmphasize crime-text-4" href="./resources/highest-crime-beat.html">211</a>
                            <p class="h7 mtn typeCaps typeEmphasize">Highest Crime Beat</p>
              </div>
                          <div class="crime-box-col floatLeft txtC ">
                             <p class="h1 mbn typeEmphasize crime-text-0"><a class="h1 mbn typeEmphasize crime-text-0" href="./resources/highest-crime-neighborhood.html">Downtown</a>
                            <p class="h7 mtn typeCaps typeEmphasize">Highest Crime Neighborhood</p>
              </div>
           <div class="crime-box-col floatLeft txtC brs">
            <p class="h1 mbn typeEmphasize crime-text-1"><a class="h1 mbn typeEmphasize crime-text-1" href="./resources/nonviolent-violent-ratio.html">6 : 1</a>
             <p class="h7 mtn typeCaps typeEmphasize">Non-Violent : Violent</p>
              </div>
           <div class="crime-box-col floatLeft txtC brs">
             <p class="h1 mbn typeEmphasize crime-text-5"><a class="h1 mbn typeEmphasize crime-text-5" href="./resources/lowest-crime-month.html">March</a>

                <p class="h7 mtn typeCaps typeEmphasize">Lowest Crime Month</p>
              </div>
           <div class="crime-box-col floatLeft txtC brs">
             <p class="h1 mbn typeEmphasize crime-text-5"><a class="h1 mbn typeEmphasize crime-text-5" href="./resources/lowest-crime-day.html">Friday</a>
                <p class="h7 mtn typeCaps typeEmphasize">Lowest Crime Day</p>
              </div>
           <div class="crime-box-col floatLeft txtC brs">
             <p class="h1 mbn typeEmphasize crime-text-5"><a class="h1 mbn typeEmphasize crime-text-5" href="./resources/lowest-crime-beat.html">707</a>
                <p class="h7 mtn typeCaps typeEmphasize">Lowest Crime Beat</p>
              </div>
           <div class="crime-box-col floatLeft txtC">
            <p class="h1 mbn typeEmphasize crime-text-1"><a class="h1 mbn typeEmphasize crime-text-1" href="./resources/larceny-gsu.html">Sunday</a>
             <p class="h7 mtn typeCaps typeEmphasize">Day Most Likely To Be A Victim of<br /> Larceny At GSU</p>
              </div>
                      </div>
</div>
        
        <!--<div class="container center_div" style="margin: 0 auto; width:50%; background-color:lightblue">-->
        <form action="results.php" class="form-control-search" method="post">

            
            <div class="row text-center">
                <div class="col-md-4">
                    <h1 class="text-center"><u>Date Range</u></h1>
                    <br>
                    <h4 class="text-center">Start Date:</h4>
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
            
            <h4>End Date:</h4>
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
            <br />
            <br />
            <br />

                <div class="text-center">
                
            <button class="btn btn-background btn-lg white" type="submit">Search </button>
            </div>
            
            </div>
            <hr>
            
            <div class="col-md-4">
            <h1><u>Location</u></h1>
            
            <h4>Street:</h4>
            <input class="typeahead form-control" type="text" name="street" autocomplete="off" placeholder="Street" size="20">
            <br>
            <br>
            <h4>Neigborhood:</h4>
            
            <div class="form-group">
                <input class="typeahead form-control" id="neighborhoods_search" type="text" autocomplete="off" placeholder="Neighborhood" name="neighborhood">
            </div>
            
            <h4>Beat:</h4>
            
            <div class="form-group">
                <input class="typeahead form-control" id="beats_search" type="text" autocomplete="off" name="beat" placeholder="Beat">
            </div>
            </div>
            
            <hr>
            
            <div class="col-md-4">
            <h1><u>Offense</u></h1>
            <h4>Crime:</h4>
            
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
            <h4>Crime Type:</h4>
            
            <div class="radio">
                <label><input type="radio" name="crimetype" value="violent">&nbsp;Violent</label>
            </div>
            
            <div class="radio">
                <label>
                    <input type="radio" name="crimetype" value="non-violent">&nbsp;Non-violent
                </label>
            </div>
            
            <div class="radio">
                <label>
                    <input type="radio" name="crimetype" value="" style="display: none" checked>
                </label>
            </div>
            
            <h4>Number of Victims:</h4>
            
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
            </div>
            
        </form>
        
    </body>
</html>