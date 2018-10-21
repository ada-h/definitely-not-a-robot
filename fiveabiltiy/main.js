$(function() {
    $(window).scroll(function () {
        if ($(this).scrollTop()> 400){
            $('show').addClass('scroll')    
        }
        if ($(this).scrollTop() < 400){
            $('show').removeClass('scroll')
        }
    });
});
$(function() {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 400){
            $('.scroll').addClass('show')    
        }
        if ($(this).scrollTop()< 400){
            $('.scroll').removeClass('show')
        }
    });
});

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
     
     var database = [ 
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