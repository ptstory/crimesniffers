var express = require('express');
var app = express();
var path = require('path');

app.use(express.static(path.join(__dirname, 'resources')));
app.use('/resources', express.static(__dirname + "/resources"));


// viewed at http://localhost:8080
app.get('/', function(req, res) {
    res.sendFile(path.join(__dirname + '../../resources/index.html'));

});

app.listen(8080);