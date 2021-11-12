<template>
    <div class="hello">
        <h1>{{ msg }}</h1>
    </div>
    <div class="col-md-4 m-3">
        <table class="table table-bordered">
            <tbody>
                <tr class="output">
                    <td colspan="4">
                        {{ output || 0 }}
                    </td>
                </tr>
                <tr>
                    <td v-on:click="clearField">C</td>
                    <td v-on:click="amduong">+/-</td>
                    <td @click="eraseLast">Xóa</td>
                    <td class="lastColumn" @click="processOutput('chia')">/</td>
                </tr>
                <tr>
                    <td v-on:click="getNumber('7')">7</td>
                    <td v-on:click="getNumber('8')">8</td>
                    <td v-on:click="getNumber('9')">9</td>
                    <td class="lastColumn" @click="processOutput('nhan')">x</td>
                </tr>
                <tr>
                    <td v-on:click="getNumber('4')">4</td>
                    <td v-on:click="getNumber('5')">5</td>
                    <td v-on:click="getNumber('6')">6</td>
                    <td class="lastColumn" @click="processOutput('tru')">-</td>
                </tr>
                <tr>
                    <td v-on:click="getNumber('1')">1</td>
                    <td v-on:click="getNumber('2')">2</td>
                    <td v-on:click="getNumber('3')">3</td>
                    <td class="lastColumn" @click="processOutput('cong')">+</td>
                </tr>
                <tr>
                    <td colspan="2" v-on:click="getNumber('0')">0</td>
                    <td v-on:click="getDot()">.</td>
                    <td class="lastColumn" @click="updateOuput">=</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    props:{
        msg: String
    },
    data(){
        return{
            output:'',
            previousValue: null,
            operationFired: false,
        }
    },
    methods:{
        clearField(){
            this.output= '';
        },
        amduong(){
            this.output =this.output[0] === '-' ? this.output.spice(1): `-${this.output}`
        },
        getNumber(number){
            if(this.operationFired){
                this.output='';
                this.operationFired= false;
            }
            this.output= `${this.output}${number}`
        },
        getDot(){
            if(this.output.indexOf('.') === -1){
                this.output = this.output+'.';
            }
        },
        processOutput(value){
            if(value=='cong')
            {
                this.operation= (a,b) => {
                return parseFloat(a)+ parseFloat(b);
                }
            }else if(value=='tru')
            {
                this.operation= (a,b) => {
                return parseFloat(a)- parseFloat(b);
                }
            }else if(value=='nhan')
            {
                this.operation= (a,b) => {
                return parseFloat(a)* parseFloat(b);
                }
            }else if(value=='chia')
            {
                this.operation= (a,b) => {
                return parseFloat(a)/ parseFloat(b);
                }
            }
            
            this.previousValue = this.output;
            this.operationFired= true;
        },
        updateOuput(){
            this.output= `${this.operation(this.previousValue, this.output)}`;
            //this.previousValue= null;
        },
        eraseLast(){
            this.output = this.output.slice(0, -1);
        }
    }
}
</script>

<style scoped>
.table {
    text-align: center;
}
h3{
    margin: 40px 0 0;
}
ul{
    list-style-type:none;
    padding:0;
}
li{
    display: inline-block;
    margin: 0 10px;
}
a{
    color: #42b983;
}
.output{
    background-color: #333;
    color: #fff;
}
.lastColumn{
    background-color: orange;
    color: #fff;
}
.lastColumn:active{
    background-color: #333;
    color: #fff;
}
</style>