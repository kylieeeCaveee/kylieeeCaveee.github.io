function switchDog(x){
    var pic; 
    if (x==0){
        pic= "Imgs/cash.JPG"; 
    }else{
        pic= "Imgs/ollie.JPG"; 
    }
    document.getElementById("dogPicture").src=pic; 
}
       