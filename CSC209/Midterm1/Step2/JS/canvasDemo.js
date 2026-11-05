//Global Variables
let NUMPOINTS=6; 
let NUMEDGES=5; 
var CANVAS= document.getElementById("myCanvas");
var CTX = CANVAS.getContext("2d");
const POINTCOLOR= "blue";
const POINTLABELFONT= "16px Arial";

//Point Class
class Point{

    constructor(x,y){
        this.x=x;
        this.y=y;
        this.r=10;
    }

    drawPoint(ctx){
        ctx.strokeStyle= POINTCOLOR;
        ctx.beginPath();
        ctx.arc(this.x,this.y,this.r,0,2*Math.PI);
        ctx.stroke();
    }

    drawPointLabel(ctx, lab){
        ctx.strokeText(lab, this.x-this.r/3, this.y+this.r/3);
    }

    drawAndLabel(ctx, lab){
        this.drawPoint(ctx);
        this.drawPointLabel(ctx, lab);
    }

}

class Edge{
    constructor(pointOne, pointTwo){
        this.pointOne=pointOne;
        this.pointTwo=pointTwo;
    }

    drawEdge(ctx){
        ctx.beginPath();
        ctx.moveTo(this.pointOne.x, this.pointOne.y);
        ctx.lineTo(this.pointTwo.x, this.pointTwo.y);
        ctx.stroke();
    }

    drawLabel(ctx, lab){
        ctx.strokeText(lab, (this.pointOne.x +this.pointTwo.x)/2, (this.pointOne.y+this.pointTwo.y)/2);
    }


}

class Edges extends Array{

    constructor(){
        super();
    }
    
    createPairedEdges(pointArr){
        if(pointArr.length%2==0){
            for(let r=0; r<pointArr.length; r=r+2){
                this[r/2]= new Edge(pointArr[r], pointArr[r+1]); 
            }
            
        }else{
            for(let r=0; r<pointArr.length-1; r=r+2){
                this[r/2]= new Edge(pointArr[r], pointArr[r+1]); 
            }
        }
    }

    drawEdges(ctx){
        for(let z=0; z<this.length; z++){
            this[z].drawEdge(ctx);
        }

    }

    labelEdges(ctx){
        for(let z=0; z<this.length; z++){
            this[z].drawLabel(ctx, ""+z);
        }
    }

    createRandomEdges(pointArr){
        let tempArr= new Array(pointArr.length); 
        for(let r=0; r<pointArr.length; r++){
            let idealPos= Math.floor(Math.random()*(pointArr.length-1));
            console.log("Ideal position"+idealPos);
            if(tempArr[idealPos]== null){
                tempArr[idealPos]=pointArr[r];
                console.log("Point entered at"+idealPos)
            }else{
                while(tempArr[idealPos]!=null){
                    idealPos++; 
                    if(idealPos>=pointArr.length){
                        idealPos=0; 
                    }
                }
                tempArr[idealPos]=pointArr[r]; 
                console.log("Point entered at"+ idealPos); 
            }
        }

    }

}


class Points extends Array{

    constructor(numPoints){
        super();
         
    }

    draw(ctx){
        for(let r=0; r<this.length; r++){
            this[r].drawPoint(ctx); 
        }

    }

    drawLabels(ctx){
        for(let r=0; r<this.length; r++){
            this[r].drawPointLabel(ctx, r);

        }

    }

    drawAndLabel(ctx){
        for(let r=0; r<this.length; r++){
            draw(ctx);
            drawLabels(ctx);
        }
    }

    generateRandom(numPoints){
        for(let z=0; z<numPoints; z++){
            this[z]= new Point((Math.random()*CANVAS.width), Math.random()*CANVAS.height);
            console.log(this[z].x); 
            console.log(this[z].y); 
        }
    }

    


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

function displayPointAndEdge(){
    document.getElementById("pointDisplay").innerHTML="Number of Points: "+numPoints;
    document.getElementById("edgeDisplay").innerHTML="Number of Edges: "+ numEdges;

}



