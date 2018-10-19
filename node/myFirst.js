
//my first node js file.Traditional 'Hello World'//
var http = require('http');

http.createServer(function (req, res) { 
    res.writeHead(200, {'Content-Type': 'text/html'}); //The first argument of the writeHead '200' says that everything is ok
    res.end('Hello World!');
}).listen(8080);
