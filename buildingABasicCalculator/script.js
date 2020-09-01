const form = document.querySelector('form');
const submitBtn = document.querySelector('.submitBtn');
const calcPut = document.querySelector("#calculatorOutput");
//form -> get button -> add hover event

submitBtn.addEventListener('mouseover',() =>{submitBtn.value = "=";})
submitBtn.addEventListener('mouseout',() =>{submitBtn.value = "Get Result";})
if(calcPut.textContent != ""){
    setTimeout(function(){
        calcPut.textContent =""
    },10000)
}

