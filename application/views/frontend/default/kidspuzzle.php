<div id="puzzle_container">

<style>

:root{
    --bgcol:#37474F;
    --mcol0:#29B6F6;
    --mcol1:#2196F3;
    --mcol2:#1976D2;
    --txtcol0:#90A4AE;
    --txtcol1:#607D8B;
    --whitecol:#ECEFF1;
    --darkcol:#263238;
}




#puzzle_container{
    position: relative;
    width: 50vh;
    height:50vh;
    background-color:#7c4a69 ;
    border-radius:8px;
    border:1px solid rgba(242, 228, 235, 0.8);
    box-shadow:rgba(242, 228, 235, 0.8);
    margin-left:500px;
    margin-top:30px;
}

.puzzle_block{
    position:absolute;
    left:0;
    top:0;
    width:33.4%;
    height:33.4%;
    background-color:white ;
    color:rgba(255, 255, 255, 0.8);
    font-size:10vh;
    font-weight:bold;
    text-align:center;
    padding-top:;
    cursor: pointer;
    user-select:none;
    transition:left 0.3s,top 0.3s;
}

/*difficulty container*/
#difficulty_container{
    display:flex;
    flex-direction:row;
    width:50vh;
    height:10vh;
    background-color:rgba(72, 20, 47, 0.8);
    border-radius:8px;
    margin-top:40px;
    margin-left:500px;
    margin-Bottom:40px;
}
.difficulty_button{
    flex-grow:1;
    background-color:rgba(232, 220, 226, 0.8);
    color:#4e0742 ;
    text-align:center;
    font-size:3vh;
    font-weight:bold;
    padding-top:5%;
    margin:4px;
    cursor: pointer;
    transition:font-size 0.3s;
}
.difficulty_button:hover{
    opacity:0.8;
    font-size:3.5vh;
}
.difficulty_button.active{
    background-color:rgba(255, 250, 253, 0.8);
    color:rgba(10, 10, 10, 0.8);
}

</style>

        <div class="puzzle_block"><img src="../uploads/system/puzzle/one.jpg" style="width:80%;
    height:80%;"></div>
        <div class="puzzle_block"><img src="../uploads/system/puzzle/two.jpg" style="width:80%;
    height:80%;"></div>
        <div class="puzzle_block"><img src="../uploads/system/puzzle/three.jpg" style="width:80%;
    height:80%;"></div>
        <div class="puzzle_block"><img src="../uploads/system/puzzle/four.jpg" style="width:80%;
    height:80%;"></div>
        <div class="puzzle_block"><img src="../uploads/system/puzzle/five.jpg" style="width:80%;
    height:80%;"></div>
        <div class="puzzle_block"><img src="../uploads/system/puzzle/six.jpg" style="width:80%;
    height:80%;"></div>
        <div class="puzzle_block"><img src="../uploads/system/puzzle/seven.jpg" style="width:80%;
    height:80%;"></div>
        <div class="puzzle_block"><img src="../uploads/system/puzzle/eight.jpg" style="width:80%;
    height:80%;"></div>
    </div>
    <div id="difficulty_container">
        <div class="difficulty_button active" style="color:#4e0742">EASY</div>
        <div class="difficulty_button">MEDIUM</div>
        <div class="difficulty_button">HARD</div>

    </div>


<script>
const GameDifficulty=[20,50,70];
class Game{
    difficulty;
    cols=3;
    rows=3;
    count;
    blocks;
    emptyBlockCoords=[2,2];
    indexes=[];//keeps track of the order of the blocks

    constructor(difficultyLevel=1){
        this.difficulty=GameDifficulty[difficultyLevel-1];
        this.count=this.cols*this.rows;
        this.blocks=document.getElementsByClassName("puzzle_block");//grab the blocks
        this.init();
    }

    init(){//position each block in its proper position
        for(let y=0;y<this.rows;y++){
            for(let x=0;x<this.cols;x++){
                let blockIdx=x+y*this.cols;
                if(blockIdx+1>=this.count)break;
                let block=this.blocks[blockIdx];
                this.positionBlockAtCoord(blockIdx,x,y);
                block.addEventListener('click',(e)=>this.onClickOnBlock(blockIdx));
                this.indexes.push(blockIdx);
            }
        }
        this.indexes.push(this.count-1);
        this.randomize(this.difficulty);
    }

    randomize(iterationCount){//move a random block (x iterationCount)
        for(let i=0;i<iterationCount;i++){
            let randomBlockIdx=Math.floor(Math.random()*(this.count-1));
            let moved=this.moveBlock(randomBlockIdx);
            if(!moved)i--;
        }
    }

    moveBlock(blockIdx){//moves a block and return true if the block has moved
        let block=this.blocks[blockIdx];
        let blockCoords=this.canMoveBlock(block);
        if(blockCoords!=null){
            this.positionBlockAtCoord(blockIdx,this.emptyBlockCoords[0],this.emptyBlockCoords[1]);
            this.indexes[this.emptyBlockCoords[0]+this.emptyBlockCoords[1]*this.cols]=this.indexes[blockCoords[0]+blockCoords[1]*this.cols];
            this.emptyBlockCoords[0]=blockCoords[0];
            this.emptyBlockCoords[1]=blockCoords[1];
            return true;
        }
        return false;
    }
    canMoveBlock(block){//return the block coordinates if he can move else return null
        let blockPos=[parseInt(block.style.left),parseInt(block.style.top)];
        let blockWidth=block.clientWidth;
        let blockCoords=[blockPos[0]/blockWidth,blockPos[1]/blockWidth];
        let diff=[Math.abs(blockCoords[0]-this.emptyBlockCoords[0]),Math.abs(blockCoords[1]-this.emptyBlockCoords[1])];
        let canMove=(diff[0]==1&&diff[1]==0)||(diff[0]==0&&diff[1]==1);
        if(canMove)return blockCoords;
        else return null;
    }

    positionBlockAtCoord(blockIdx,x,y){//position the block at a certain coordinates
        let block=this.blocks[blockIdx];
        block.style.left=(x*block.clientWidth)+"px";
        block.style.top=(y*block.clientWidth)+"px";
    }

    onClickOnBlock(blockIdx){//try move block and check if puzzle was solved
        if(this.moveBlock(blockIdx)){
            if(this.checkPuzzleSolved()){
                setTimeout(()=>alert("Puzzle Solved!!"),600);
            }
        }
    }

    checkPuzzleSolved(){//return if puzzle was solved
        for(let i=0;i<this.indexes.length;i++){
            //console.log(this.indexes[i],i);
            if(i==this.emptyBlockCoords[0]+this.emptyBlockCoords[1]*this.cols)continue;
            if(this.indexes[i]!=i)return false;
        }
        return true;
    }

    setDifficulty(difficultyLevel){//set difficulty
        this.difficulty=GameDifficulty[difficultyLevel-1];
        this.randomize(this.difficulty);
    }

}

var game=new Game(1);//instantiate a new Game


//taking care of the difficulty buttons
var difficulty_buttons=Array.from(document.getElementsByClassName("difficulty_button"));
difficulty_buttons.forEach((elem,idx)=>{
    elem.addEventListener('click',(e)=>{
        difficulty_buttons[GameDifficulty.indexOf(game.difficulty)].classList.remove("active");
        elem.classList.add("active");
        game.setDifficulty(idx+1);
    });
});
</script>