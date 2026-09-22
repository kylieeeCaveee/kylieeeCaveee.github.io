
let moreTextShown=false
let purpleDisplay= true;
function displayMoreInfo(){
    if(moreTextShown==true){
        document.getElementById("readMore").innerHTML="";
        document.getElementById("readMoreButton").innerHTML= "Read More"; 
        moreTextShown=false; 

    }else{
        document.getElementById("readMore").innerHTML="This chart tracks all of the concerts I have been to! Live Music is always my favorite way to listen to music! Not to mention that the experience of a concert can bring you closer to your friends, and also introduce you to a community of people who have similar interests. The chart below includes some basic information about some recent concerts I have attended. If you click on the song titles it will take you to seperate html pages with more information about the songs."
        document.getElementById("readMoreButton").innerHTML= "Read Less"; 
        moreTextShown=true; 
    }
    
}
function switchDisplay(){
    if(purpleDisplay==true){
        document.getElementById("colorStyle").setAttribute("href", "CssSheets/technicalCssDark.css"); 
        document.getElementById("displayButton").innerHTML="Purple Display";
        purpleDisplay=false;
    }else{
        document.getElementById("colorStyle").setAttribute("href", "CssSheets/technicalCssLight.css"); 
        document.getElementById("displayButton").innerHTML="Blue Display";
        purpleDisplay=true;
    }
}