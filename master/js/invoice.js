/******************** invoice date and time *********************/
let dateNow = new Date();

// document.getElementById("").value = `${dateNow.getMonth() + 1}-${dateNow.getDate()}-${dateNow.getFullYear()}`;

let h = dateNow.getHours();

if(h > 12){
    document.getElementById("time").value = `${dateNow.getHours() - 12}:${dateNow.getMinutes()}:${dateNow.getSeconds()} pm`;
}

else{
    document.getElementById("time").value = `${dateNow.getHours()}:${dateNow.getMinutes()}:${dateNow.getSeconds()} am`;
}

// =======================================

// get 

function getBank(){
    let dataRequest = new XMLHttpRequest;
    let bankId = document.getElementById('bank').value;
    let tdResult = document.getElementById('rbank');
    if ( bankId == 0 ){
        tdResult.innerHTML = "";
    }
    else{
        dataRequest.onreadystatechange = function(){
            if( this.readyState == 4 && this.status == 200 ){
                tdResult.innerHTML = this.responseText;
            }
            
        }
        dataRequest.open("GET", "gettreat.php?q=" + bankId, true);
        dataRequest.send();
    }
}

document.getElementById("patient").addEventListener("change", getBank);
/******************************************************************/


let mysalary = document.getElementById('s1');
let myextra = document.getElementById('s2');
let myDiscount = document.getElementById('s3');
let myTotal = document.getElementById('s4');

for( let i = 0; i < mySelects.length; i++ ){
    mySelects[i].onchange = function(){
        let dataRequest = new XMLHttpRequest;
        let salaryId = mySelects[i].value;
        if ( salaryId == 0 ){
            mysalary[i].value = 0;
            myextra[i].value = 0;
            myDiscount[i].value = 0;
            myValue[i] = 0
        }
        else{
            dataRequest.onreadystatechange = function(){
                if( this.readyState == 4 && this.status == 200 ){
                    mysalary[i].value = this.responseText;
                    myextra[i].value = 0;
                    myDiscount[i].value = 0;
                    myValue[i].value = parseFloat(mysalary[i].value) + parseFloat(myextra[i].value) - parseFloat(myDiscount[i].value);
                    let total = 0;
                    for( let i = 0; i < myValue.length; i++ ){
                        total += parseFloat(myValue[i].value);
                    }
                    myTotal.value = total;
                }  
            }

            dataRequest.open("GET", "getprice.php?q=" + examId, true);
            dataRequest.send();
        }
    }
}

