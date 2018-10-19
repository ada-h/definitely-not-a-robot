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