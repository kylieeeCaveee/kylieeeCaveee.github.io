
function establishConstants(){
    CTX.font=FONT;
    CTX.strokeStyle= COLOR

}
function drawLine(){
    CTX.moveTo(0,0);
    CTX.lineTo(600,500);
    CTX.stroke(); 
}
function drawCircle(x,y,r){
    CTX.beginPath();
    CTX.arc(x,y,r,0,2*Math.PI);
    CTX.stroke();

}
function drawSquare(x,y,h,w){
    CTX.moveTo(x,y);
    CTX.lineTo(x+w,y);
    CTX.lineTo(x+w,y+h);
    CTX.lineTo(x,y+h);
    CTX.lineTo(x,y);
    CTX.stroke();
}
function saveCanvas(){
    //saves the canvas and converts to a url
    let canvasDataUrl= CANVAS.toDataURL(); 
    //create new link element with download attribute set to desired
    var link= document.createElement('a');
    link.setAttribute('download', "currentCanvas");
    //set links href atttribute to temp url
    link.href=canvasDataUrl;
    //simulate click on link to trigger download
    document.body.appendChild(link); 
    link.click();
    //clean up temp url and link element
    document.body.removeChild(link);
  


}