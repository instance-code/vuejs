<template>
 <center>
       <div class="main">
    <div class="display"> <button class="dark_mode_btn"></button>
        <div><center>calculator</center></div>
        <br>
        <h2 id="result">{{current || 0}}</h2>
    </div>
    
    <div class="buttons"> 
    <button @click="append('7')" id="Normal_btn">7</button> 
    <button @click="append('8')" id="Normal_btn">8</button> 
    <button @click="append('9')" id="Normal_btn">9</button>
     <button @click="minus" id="Normal_btn">-</button> 
     </div>
    <div class="buttons"> 
     <button @click="append('4')" id="Normal_btn">4</button>
     <button @click="append('5')" id="Normal_btn">5</button> 
     <button @click="append('6')" id="Normal_btn">6</button>
     <button @click="add" id="Normal_btn">+</button>
      </div>
    <div class="buttons"> 
        <button @click="append('1')" id="Normal_btn">1</button>
        <button @click="append('2')" id="Normal_btn">2</button>
         <button @click="append('3')" id="Normal_btn">3</button> 
         <button @click="divide" id="Normal_btn">/</button>
    </div>
    <div class="buttons"> 
        <button @click="clear" id="clear">C</button> 
        <button @click="append('0')" id="Normal_btn">0</button>  
        <button @click="equal" id="equalTo">=</button>
         <button @click="times" id="Normal_btn">*</button> 
     </div>
</div>
 </center>
   
</template>

<script>
    export default {
        data()
   {
       return{
           previous:null,
            operator:null,
           current:'',
           operatorClicked:false,
       }
   },
   methods:{
       clear()
       {
           this.current='';
       },
       append(number)
       {
           if(this.operatorClicked)
           {
               this.current='';
               this.operatorClicked=false;
           }
           this.current=`${this.current}${number}`;
       },
       setPreviuos()
       {
           this.operatorClicked=true;
           this.previous=this.current;
       },
       divide()
       {
           this.operator=(a,b)=>a/b;
           this.setPreviuos();
           
       },
       times()
       {
           this.operator=(a,b)=>a*b;
           this.setPreviuos();
           
       },
       minus()
       {
           this.operator=(a,b)=>a-b;
           this.setPreviuos();
           
       },
       add()
       {
           this.operator=(a,b)=>a+b;
           this.setPreviuos();
           
       },
        equal()
        {
            this.current=`
                ${this.operator(
                    parseFloat(this.current),
                    parseFloat(this.previous),
                )}`;
                this.previous=null;
        }
   }
    }
</script>

<style scoped>
   * {
    margin: 0;
    padding: 0;
    font-family: 'poppins', sans-serif
}

body {
    min-height: 100vh;
    display: grid;
    place-items: center;
    background:white;
}

.main {
    margin-top:30px;
    width: 300px;
    position: relative;
    display: flex;
    align-items: center;
    flex-direction: column;
    min-width: 300px;
    padding: 15px 10px;
    box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.18);
    background: rgba(82, 79, 79, 0.05);
    border-radius: 10px
}

.display {
    position: relative;
    width: 80%;
    height: 80px;
    margin-bottom: 10px
}

.display #result {
    font-size: 2em
}

.buttons {
    margin-top: 20px;
    width: 100%
}

.buttons button {
    height: 50px;
    width: 50px;
    padding: 10px;
    border-radius: 10px;
    background: none;
    border: none;
    outline: none;
    margin: 0 10px;
    cursor: pointer;
    font-size: 1.3em;
    box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.2), inset -5px -5px 15px rgba(255, 255, 255, 0.1), 5px 5px 15px rgba(0, 0, 0, 0.3), -5px -5px 15px rgba(255, 255, 255, 0.1)
}

.buttons button:hover {
    background: rgba(0, 0, 0, 0.2)
}

#equalTo {
    width: 50px;
    background: #58D68D
}

#clear {
    background: #FF8A65
}

.dark_mode_btn {
    position: absolute;
    top: 0;
    right: 0;
    font-size: 1.5em;
    cursor: pointer;
    background: none;
    border: none;
    outline: none
}

.dark_mode_active {
    background: #1c1c25
}

.dark_mode_active button {
    color: #ddd
}

.dark_mode_active #clear,
#equalTo {
    color: #000
}

.dark_mode_active #result {
    color: #ddd
}

.dark_mode_active #history {
    color: #ddd
}

#history {
    position: absolute;
    bottom: 5px;
    right: 0
}
</style>