function loadMaterials(){
    let body=""; 
    for(let x=0; x< MONTHS.length; x++){
        let crtMonth= CURMONTH.replace("MONTH", MONTHS[x]); 
        let crtBirthday= CURBIRTHDAY.replace("BIRTHDAY", BIRTHDAYS[x]);
        let  crtWeather= CURWEATHER.replace("WEATHER", WEATHER[x]);
        body= body+ crtMonth+ crtBirthday+ crtWeather; 

    }
    document.getElementById("main").innerHTML= body; 

}