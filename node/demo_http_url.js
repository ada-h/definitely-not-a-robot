//using express?... 
const express= require('express');
const app = express();

app.get('/', (req,res) => {
    res.send("Hellooo")
});
app.get('/profile', (req,res) => {
    res.send('Getting Profile');
});
app.listen(8080);

