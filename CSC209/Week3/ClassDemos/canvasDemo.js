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


