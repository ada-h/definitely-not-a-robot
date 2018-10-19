var http = require('http');
var fs = require('fs');
http.createServer(function (req, res) {
  fs.readFile('demo.html', function(err, data) {
    res.writeHead(200, {'Content-Type': 'text/html'});
    res.write(data);
    res.end();
  });
}).listen(8080);
var fs = require('fs');

fs.appendFile('demo.html', 'Try.', function (err) {
  if (err) throw err;
  console.log('Saved!');
});