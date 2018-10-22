
//Recap Js 
function song(song){
    console.log(song);
}
song("yayy!");

//i hate arrays!
var namesOfstuff = ["tiger", "frodo", "shoram"];
namesOfstuff.shift(); //shifts the first elemnt (--)
namesOfstuff.pop(); //legit pops off the last element on the array
namesOfstuff.push("Adah");//adds a new element to the array
namesOfstuff.concat(['sheamy', 'run']);//adds a new array to ours
 //i hate objects too
 var data = {
     name:"John",
     age: 14,
     hobby: "Soccer",
     isMarried: true,
 };
 data.Favoritefood = "Spinach";
 dataisMarried = false;
 
 var List = {
    spells: ["Shazam","imprombuz","Abracadabra"],
    name: "Wizard of Oz",

 }
 var aliens = [
    { song: "Hater Love"},
    "Joanne",
 ]
  //Loops
  var todo =[
    'Clean rooms',
    'Eat Right',
    'Work like a horse',
    'Die',
]
todo.forEach(function(i) {
    console.log(i);
 })

 for (i=0; i<todo.length; i++){
     console.log(todo[i] + "!")
 }

 var counter = 0;
 while (counter < 10){
     console.log(counter)
     counter++;
 }
 //Simple Facebook page
     
   /*  var database = [ 
        {
            username: "Bobby",
            password: "famished",
            },

            {
                username: "Frodo",
                password: "happy",
                },
                {
                    username: "Sheamy",
                    password: "123",
                    }
    

      ]
     var newsfeed = [
         {username: "", timeline:""},
         {username: "", timeline:""},
         {username: "", timeline:""},
     ]
     function isuserValid(username, password){
        for (i=0; i < database.length; i++){
            if (database[i].username === username && database[i].password === password){
                return true;
            }else {
                return false;
            }
        }
     }
     function signIn(username, password){
         if(isuserValid(username, password)){
            console.log(newsfeed)
         }else{
             alert("Wrong Username or Password")
         }
        
       
     }
    
    var userNameprompt = prompt("What is your username?");
    var passwordPrompt = prompt("What is your password");
    
   signIn(userNameprompt, passwordPrompt)
   */
    
   var button = document.getElementById("enter");
   var userInput = document.getElementById("userInput");
   var ul= document.querySelector("ul");

   button.addEventListener("click", function (){
      var li= document.createElement("li");
      if (userInput.value.length > 0){
        li.appendChild(document.createTextNode(userInput.value));
      ul.appendChild(li);
      userInput.value="";
      } else{
          alert("Please enter a food you hate!")
      }
      
   })
   //creating a background generator
   var text = document.getElementsByTagName("h3");
   var color1 = document.querySelector(".color1");
   var color2 = document.querySelector(".color2");
   var background = document.getElementById("gradient");

   // DRY
   function colorGenerator() {
    background.style.background = "linear-gradient(to right, " + color1.value + ", " + color2.value + ")";
    text.textContent = background.style.background + ";";
   }

   color1.addEventListener("input", colorGenerator)

   color2.addEventListener("input", colorGenerator)

//teneary operators
function isUservalid(bool){
    return bool;
}

var answer= isUservalid(true) ? "Proceed":"Go back whence you came!";

const first = () =>{
    const greet = 'Hi';
    const second = () =>{
        alert(greet);
    }
    return second;
} 
const newFunc = first();
newFunc();

//Advanced arrays

const array = [1,2,3,10,5];
const double = [];
const newArray = array.forEach((num) => {
   double.push(num * 2);
})
console.log(double);
//map 
const mapArray = array.map((num) => {
    return num * 3;
})
console.log(mapArray) // choose map over foreach anytime you want to look through a array

//filter
const filterArray = array.filter((num)=>{
    return num > 5;
})
console.log(filterArray);

//reduce
const reduceArray = array.reduce((accumulator, num) =>{
    return accumulator + num
}, 4)
console.log(reduceArray)

const dragons = ['Tim', 'Johnathan', 'Sandy', 'Sarah'];
dragons.includes("John")// includes can be used with arrays,they check if something is a part of something. basically.

// #2) Check if this array includes any name that has "John" inside of it. If it does, return that
// name or names in an array.
const dragons = ['Tim', 'Johnathan', 'Sandy', 'Sarah'];
dragons.filter(name => name.includes('John')) 

//Create a function that calulates the power of 100 of a number entered as a parameter
const tothe100 = (a) => {
    return a **100
}
tothe100(10000);

// #1) Line up the Turtle and the Rabbit at the start line:
const startLine = '     ||<- Start line';
let turtle = '🐢';
let rabbit = '🐇';

// it should look like this:
'     ||<- Start line'
'       🐢'
'       🐇'
turtle= turtle.padStart(8);
rabbit = rabbit.padStart(8);

console.log(startLine);
console.log(turtle);
console.log(rabbit);
