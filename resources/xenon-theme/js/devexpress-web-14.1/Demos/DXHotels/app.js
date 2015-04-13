var express = require('express'),
    bodyParser = require('body-parser');

var app = express();

app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

app.use("/api", require("./routes/api"));
app.use(express.static(__dirname + '/Client'));

app.listen(3000, function () {
    console.log("DXHotel demo started at http://localhost:3000/");
});