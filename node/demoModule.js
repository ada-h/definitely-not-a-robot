var http = require('http');
var dt = require('./myFirstmodule');

//create a server object:
http.createServer(function (req, res) { //The function passed throught the server is what the client sees when he loads the port
    res.writeHead(200, {'Content-Type': 'text/html'});
    res.write("The date and time are currently: " + dt.myDateTime());//write a response to a client
    res.end(); //end the response
}).listen(8080); //the server object listens on port 8080