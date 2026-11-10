
function getTimeOn(){
    currDate= new Date();
    TIMEON=[currDate.getHours(), currDate.getMinutes()];
}
function getTimeOff(){
    currDate= new Date(); 
    return [currDate.getHours(), currDate.getMinutes()]; 
}

function timeLoggedIn(timeIn){
    timeOut=getTimeOff(); 
    let minutesIn= timeIn[0]*60 + timeIn[1]; 
    let minutesOut= timeOut[0]*60 + timeOut[1]; 
    let minutesLogged= minutesOut - minutesIn; 
    document.getElementById("minutesLogged").value= minutesLogged; 
    return true;

}