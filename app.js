var express = require('express');
var bodyParser = require("body-parser");
var path = require('path');
var mysql = require("mysql");
var ejs = require("ejs");

require("dotenv").config({ path: "./.env" });

var app = express();
app.set('view engine', 'ejs');


app.use(express.static(path.join(__dirname, 'resources')));
app.use('/resources', express.static(__dirname + "/resources"));
app.use(bodyParser.urlencoded({ extended: false })); 
app.use(bodyParser.json());

// console.log(process.env.DB_HOST);

var con = mysql.createConnection({
    host: process.env.DB_HOST,
    user: process.env.DB_USERNAME,
    password: process.env.DB_PASSWORD,
    database: process.env.DB_NAME
  });


// viewed at http://localhost:8080
app.get('/', function(req, res) {
    res.sendFile(path.join(__dirname + '../../resources/index.html'));

});

app.get('/results', function(req, res) {
    res.sendFile(path.join(__dirname + '/results.html'));

});



app.get('/ejs', function(req, res) {
    res.sendFile(path.join(__dirname + '/resources/ejs.html'));

});

app.post('/data', (request, response) => {
    let data = [];
    const postBody = request.body;
    //console.log(request.body.syear);
    console.log(postBody);
    data.push(postBody.syear);
    console.log(data);
  });

  var sql = `SELECT crime.offense_id,category.type,type.description,crime.num_of_victims,timeframe.datetime,area.street_address, area.neighborhood, area.beat, coordinates.latitude, coordinates.longitude 
  From crime
  JOIN type ON type.fk_type_crime_offense_id = crime.offense_id
  JOIN timeframe ON timeframe.fk_timeframe_crime_offense_id = crime.offense_id
  JOIN location ON location.location_crime_offense_id = crime.offense_id
  JOIN category ON category.fk_category_crime_offense_id = crime.offense_id
  JOIN area ON area.fk_area_location_location_id = location.location_id
  JOIN coordinates ON coordinates.fk_coordinates_location_location_id = location.location_id`;

//   con.query(`SELECT * FROM arrivals WHERE flight = ${flightNo}`, function(err, rows, fields) {

// con.query(sql, (err,rows) => {
//     if(err) throw err;
  
//     console.log('Data received from Db:\n');
//     console.log(rows);
//   });


app.listen(8080);