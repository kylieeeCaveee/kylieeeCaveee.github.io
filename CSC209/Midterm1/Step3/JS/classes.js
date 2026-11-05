//Point Class
class Point{

    constructor(x,y){
        this.x=x;
        this.y=y;
        this.r=10;
    }

    drawPoint(ctx){
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
                
            }
        }
        this.createPairedEdges(tempArr); 

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
            this.draw(ctx);
            this.drawLabels(ctx);
        }
    }

    generateRandom(numPoints){
        for(let z=0; z<numPoints; z++){
            this[z]= new Point((Math.random()*CANVAS.width), Math.random()*CANVAS.height); 
        }
    }

    printCoords(){
        let returnString= "Coordinates for Points: <br>"; 
        for(let r=0; r<this.length; r++){
            returnString= returnString+ "Point "+r+": ("+ Math.floor(this[r].x)+ ", "+Math.floor(this[r].y)+")<br>"; 
            
        }
        return returnString; 
    }

    


}
