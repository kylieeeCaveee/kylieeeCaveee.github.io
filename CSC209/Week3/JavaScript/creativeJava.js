const PHOEBESONGS=["Smoke Signals", "Motion Sickness", "Funeral", "Demi Moore", "Scott Street", "Killer", "Georgia", "Chelsea", "Would You Rather", "You Missed My Heart", "DVD Menu", "Garden Song", "Kyoto", "Punisher", "Halloween", "Chinese Satellite", "Moon Song", "Savior Complex", "ICU", "Graceland Too", "I Know The End", "The Outside", "Lost Boys", "Kill Me", "The Governor's Waltz", "Bobby"]; 
const JULIENSONGS=["Hardline", "Heatwave", "Faith Healer", "Relative Ficiton", "Crying Wolf", "Bloodshot", "Ringside", "Favor", "Song in E", "Repeat", "Highlight Reel", "Ziptie", "Over", "Appointments", "Turn Out the Lights", "Shadowboxing", "Sour Breath", "Televangelist", "Everything to Help You Sleep", "Happy to Be Here", "Hurt Less", "Even", "Claws in Your Back", "Blacktop", "Sprained Ankle", "Brittle Boned"];
const LUCYSONGS= ["Calliope Prelude", "Big Deal", "Ankles", "Limerence", "Modigliani", "Talk", "For Keeps", "Forever is a Feeling", "Come Out", "Best Guess", "Bullseye(with Hozier)", "Most Wanted Man", "Lost Time", "Hot & Heavy", "Christine", "First Time", "VBS", "Cartwheel", "Thumbs", "Going Going Gone", "Partner in Crime", "Brando", "Please Stay", "Triple Dog Dare", "Night Shift", "Addictions"];
const BOYGENIUSSONGS=["Without You Without Them", "$20", "Emily I'm Sorry", "True Blue", "Cool About It", "Not Strong Enough", "Revolution Zero", "Leonard Cohen", "Satanist", "We're in Love", "Anti-Curse", "Letter To An Old Poet", "Black Hole", "Afraid of Heights", "Voyager", "Powers", "Bite The Hand", "Me & My Dog", "Souvenir", "Stay Down", "Salt in The Wound", "Ketchum, ID", "The Parting Glass"]; 
let userPhoebeSong="";
let userBoygeniusSong="";
let userJulienSong="";
let userLucySong="";
let userName=""; 
let userNameAvg=0;
let moreTextShown=false;

function displayMoreInfo(){
    if(moreTextShown==true){
        document.getElementById("readMore").innerHTML="";
        document.getElementById("readMoreButton").innerHTML= "Read More"; 
        moreTextShown=false; 

    }else{
        document.getElementById("readMore").innerHTML="This website uses an average of your name converted to numbers (base 0, a=0) to calculate your representative boygenius song. Boygenius is a band comprised of three members, Phoebe Bridgers, Julien Baker, Lucy Dacus. Please refresh to try another name."
        document.getElementById("readMoreButton").innerHTML= "Read Less"; 
        moreTextShown=true; 
    }
    
}
function getUserInput(){
    userName=document.getElementById("name").value;
    document.getElementById("displayName").innerHTML= "Name: "+userName;
    let userNameTotal=0; 
    userName=userName.toLowerCase();
    userName=userName.trim();
    userName=userName.replaceAll(" ", "");
    let userNameLength= userName.length;
  
    for(let i=0; i<userNameLength; i++){
        userNameTotal= userNameTotal+ (userName.charCodeAt(i)-97); 
    }

    userNameAvg=userNameTotal/userNameLength
    userNameAvg= Math.floor(userNameAvg);
    document.getElementById("name").value="";
    
}

function getPhoebeSong(){
    if(userName===""){
        window.alert("Please enter your name first!");
        return;
    }
    userPhoebeSong= PHOEBESONGS[userNameAvg];
    document.getElementById("phoebeSong").innerHTML= "Your Phoebe Bridgers Song is: <br>"+userPhoebeSong;
    document.getElementById("phoebeButton").style.display= "none"; 
}

function getJulienSong(){
    if(userName===""){
        window.alert("Please enter your name first!");
        return;
    }
    userJulienSong= JULIENSONGS[userNameAvg];
    document.getElementById("julienSong").innerHTML= "Your Julien Baker Song is: <br>"+userJulienSong;
    document.getElementById("julienButton").style.display= "none"; 
}

function getLucySong(){
    if(userName===""){
        window.alert("Please enter your name first!");
        return;
    }
    userLucySong= LUCYSONGS[userNameAvg]; 
    document.getElementById("lucySong").innerHTML= "Your Lucy Dacus Song is: <br>"+ userLucySong;
    document.getElementById("lucyButton").style.display= "none"; 
}

function getBoygeniusSong(){
    if(userName===""){
        window.alert("Please enter your name first!");
        return;
    }
    if(userNameAvg<24){
        userBoygeniusSong= BOYGENIUSSONGS[userNameAvg];
    }else{
        userBoygeniusSong=BOYGENIUSSONGS[userNameAvg-23];
    }
    document.getElementById("boygeniusSong").innerHTML= "Your Boygenius Song is: <br>"+ userBoygeniusSong;
    document.getElementById("boygeniusButton").style.display= "none"; 
}