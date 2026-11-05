function displayPointAndEdge(){
    document.getElementById("pointDisplay").innerHTML="Number of Points: "+ NUMPOINTS;
    document.getElementById("edgeDisplay").innerHTML="Number of Edges: "+ NUMEDGES;

}
function displayCoords(pointArr){
    document.getElementById("coordDisplay").innerHTML= pointArr.printCoords(); 
}

