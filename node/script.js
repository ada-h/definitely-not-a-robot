const script2= require('./script2.js');
const a= script2.largeNumbers;
const b= 6;

//setTimeout decides when you want to execute your function
setTimeout(() =>{
    console.log(a+b); 
}, 1000);


