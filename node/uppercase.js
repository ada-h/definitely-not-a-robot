var http = require('http');
//used the uppercase module
var uc = require('upper-case');
 http.createServer(function(req,res){
     res.writeHead(200, {'Content-Type': 'text/html'});
     res.write(uc("rise"));
     res.end();
}).listen(8080);


