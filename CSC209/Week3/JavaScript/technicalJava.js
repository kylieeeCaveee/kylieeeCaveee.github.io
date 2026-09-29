
let moreTextShown=false;
let purpleDisplay= true;
let creditsShown= false; 
let dateShown= false; 
let tableShown= true;
let displayRow=false;
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

function displayCredits(){
    if(creditsShown==true){
        document.getElementById("credits").innerHTML= ""; 
        document.getElementById("displayCreditsButton").innerHTML= "Credits"; 
        creditsShown= false; 
    }else{
        document.getElementById("credits").innerHTML= "There were no outside websites used for inspiration or that I took pieces of code from outside of information learned from doing tutorials. Some of those tutorials are linked below. <br> <a href=\"https://www.w3schools.com/html/html_tables.asp\"> Table Tutorials </a> <br>  <a href=\"https://www.w3schools.com/Js/js_date_methods.asp\"> Date Methods </a>" ;
        document.getElementById("displayCreditsButton").innerHTML= "Hide Credits"; 
        creditsShown= true; 
    }
}

function displayDate(){
    if(dateShown==false){
        const DATE= new Date();
        const DAYOFTHEWEEK =["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        const MONTH =["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        let currDay= DATE.getDate(); 
        let currYear= DATE.getFullYear();
        let currDayOfWeek= DAYOFTHEWEEK[DATE.getDay()];
        let currMonth= MONTH[DATE.getMonth()];
        let dateStatement= currDayOfWeek+ " "+ currMonth+ " "+currDay+ ", "+currYear; 
        document.getElementById('date').innerHTML = dateStatement;
        document.getElementById('displayDateButton').innerHTML="Hide Date"; 
        dateShown= true; 
    }else{
        document.getElementById('date').innerHTML = "";
        document.getElementById('displayDateButton').innerHTML="Today's Date is:"; 
        dateShown= false; 
    }
}

function displayTable(){
    if(tableShown==true){
        document.getElementById("table").style.display="none"; 
        document.getElementById('displayTableButton').innerHTML="Show Table"; 
        tableShown=false; 
    }else{
        document.getElementById("table").style.display="block"; 
        document.getElementById('displayTableButton').innerHTML="Hide Table"; 
        tableShown=true;
    }
}

function moveDisplay(){
    if(displayRow==true){
        document.getElementById("sectionWrap").style.flexDirection="column"; 
        displayRow=false;
    }else{
        document.getElementById("sectionWrap").style.flexDirection="row"; 
        displayRow=true;
    }

}

function hideMarchTwo(){
    document.getElementById("marchTwo").style.display="none";
    document.getElementById("marchTwoDisplay").style.display="block";

}
function showMarchTwo(){
    document.getElementById("marchTwo").style.display="table-row";
    document.getElementById("marchTwoDisplay").style.display="none";

}
function hideOctoberNine(){
    document.getElementById("octoberNine").style.display="none";
    document.getElementById("octoberNineDisplay").style.display="block";

}
function showOctoberNine(){
    document.getElementById("octoberNine").style.display="table-row";
    document.getElementById("octoberNineDisplay").style.display="none";

}
function hideOctoberTwelve(){
    document.getElementById("octoberTwelve").style.display="none";
    document.getElementById("octoberTwelveDisplay").style.display="block";

}
function showOctoberTwelve(){
    document.getElementById("octoberTwelve").style.display="table-row";
    document.getElementById("octoberTwelveDisplay").style.display="none";

}
function hideMarch31(){
    document.getElementById("march31").style.display="none";
    document.getElementById("march31Display").style.display="block";

}
function showMarch31(){
    document.getElementById("march31").style.display="table-row";
    document.getElementById("march31Display").style.display="none";

}
function hideJune28(){
    document.getElementById("june28").style.display="none";
    document.getElementById("june28Display").style.display="block";

}
function showJune28(){
    document.getElementById("june28").style.display="table-row";
    document.getElementById("june28Display").style.display="none";

}
function hideFeb28(){
    document.getElementById("feb28").style.display="none";
    document.getElementById("feb28Display").style.display="block";

}
function showFeb28(){
    document.getElementById("feb28").style.display="table-row";
    document.getElementById("feb28Display").style.display="none";

}
function formatButtons(){
    document.getElementById("marchTwoDisplay").style.display="none";
    document.getElementById("octoberNineDisplay").style.display="none";
    document.getElementById("octoberTwelveDisplay").style.display="none";
    document.getElementById("march31Display").style.display="none";
    document.getElementById("june28Display").style.display="none";
    document.getElementById("feb28Display").style.display="none";
}
