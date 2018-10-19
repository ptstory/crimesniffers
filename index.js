require("dotenv").config({ path: "../.env" });
var mysql = require("mysql");

var con = mysql.createConnection({
  host: process.env.DB_HOST,
  user: process.env.DB_USERNAME,
  password: process.env.DB_PASSWORD,
  database: process.env.DB_NAME
});

con.connect(function(err) {
  if (err) throw err;
  con.query("SELECT * FROM crime", function(err, result, fields) {
    if (err) throw err;
    console.log(result);
  });
});
