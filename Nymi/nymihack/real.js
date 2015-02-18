fs = require('fs')
    fs.readFile('C:/Users/Danielle/Documents/Visual Studio 2013/Projects/nymihack/nymihack/example.txt', 'utf8', function (err,data) {
    if (err) {
        return console.log(err);
    }
    console.log(data);
    var userData = data;

var express = require('express')
var app = express()

app.get('/', function (req, res) {
  res.send(data)
})

var server = app.listen(3000, function () {

  var host = server.address().address
  var port = server.address().port

  console.log('Example app listening at http://%s:%s', host, port)

})
});