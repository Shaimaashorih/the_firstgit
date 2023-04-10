function fname(event){
    let empnames= document.getElementById("projectinput1").value;
    if( empnames == ""){
        event.preventDefault();
        document.getElementById('res1').innerHTML = "This field is required ";
    }
   
}
document.getElementById('go').addEventListener("click", fname);

// ///////////////////////////////////
function address(event){
    let empadd = document.getElementById("projectinput2").value;
    if( empadd == ""){
        event.preventDefault();
        document.getElementById('res2').innerHTML = "This field is required";
    }

}

document.getElementById('go').addEventListener("click", address);


// ///////////////////////////////////

function email(event){
    let empemail = document.getElementById("projectinput3").value;
    if( empemail == ""){
        event.preventDefault();
        document.getElementById('res3').innerHTML = "This field is required";
    }

}

document.getElementById('go').addEventListener("click", email);


// ///////////////////////////////////


function cnum(event){
    let contact = document.getElementById("projectinput4").value;
    // var mob= /^\+(?:[0-9] ?){6,14}[0-9]$/;
    if( contact == ""){
        event.preventDefault();
        document.getElementById('res4').innerHTML = "This field is required";
    }
    // else if( event.lenght !=11 ){
    //     event.preventDefault();
    //     document.getElementById('res4').innerHTML = "must be 11 number";
    // }

    // else if(mob.test(event)){
    //     document.getElementById('res4').innerHTML ="invalid phone number";
    // }

}
    // if(event.value.match(mob)){
    //     return true;
    // }
    // else{
    //     alert( "Please enter a valid phone number.");
    //     return false;
    // }

// }

document.getElementById('go').addEventListener("click", cnum);


// ///////////////////////////////////
function edate(event){
    let empdate = document.getElementById('timesheetinput3').value;
    if(empdate == ""){
        event.preventDefault();
        document.getElementById('res5').innerHTML= "This field is required";
    }
}

document.getElementById('go').addEventListener("click" , edate );

// ///////////////////////////////////
function etype(event){
    let emptype = document.getElementById("projectinput9").value;
    if( emptype == ""){
        event.preventDefault();
        document.getElementById('res6').innerHTML = "This field is required";
    }

}

document.getElementById('go').addEventListener("click", etype);


// ///////////////////////////////////
function dcon(event){
    let empcon= document.getElementById("projectinput10").value;
    if( empcon == ""){
        event.preventDefault();
        document.getElementById('res7').innerHTML = "This field is required";
    }

}

document.getElementById('go').addEventListener("click", dcon);


// ///////////////////////////////////
function starttime(event){
    let empstime = document.getElementById("timesheetinput5").value;
    if( empstime == ""){
        event.preventDefault();
        document.getElementById('res8').innerHTML = "This field is required";
    }

}

document.getElementById('go').addEventListener("click", starttime);


// ///////////////////////////////////
function endtime(event){
    let empetime = document.getElementById("timesheetinput6").value;
    if( empetime == ""){
        event.preventDefault();
        document.getElementById('res9').innerHTML = "This field is required";
    }

}

document.getElementById('go').addEventListener("click", endtime);


// // ///////////////////////////////////

var select=document.getElementById("projectinput7");

document.getElementById("go").onclick = function(){
    var value = select.value
    if(value == "0"){
        document.getElementById('res10').innerHTML =(" select salary");
    }

};

// //////////////////////////////////
function nid(event){
    let empnid = document.getElementById("projectinput11").value;
    if( empnid == ""){
        event.preventDefault();
        document.getElementById('res11').innerHTML = "This field is required";
    }
    // else if(event.lenght !=14){
    //     event.preventDefault();
    //     document.getElementById('res11').innerHTML = "This field must be 14 number";
    // }

}

document.getElementById('go').addEventListener("click", nid);


// ///////////////////////////////////
function na(event){
    let empna = document.getElementById("projectinput12").value;
    if( empna == ""){
        event.preventDefault();
        document.getElementById('res12').innerHTML = "This field is required";
    }

}

document.getElementById('go').addEventListener("click", na);




// ///////////////////////////////////
var style =document.createElement('style');
style.innerHTML= `
    #res1 ,#res2 ,#res3 ,#res4 ,#res5 ,#res6 ,#res7 ,#res8 ,#res9 ,#res10 ,#res11 ,#res12 ,#s1 {
        color: red;
        margin-left: 70%;
    }
`;
document.head.appendChild(style);
 
////////////////////////////// user val //////////////////////////
function unames(event){
    let unames= document.getElementById("projectinput1").value;
    // let pnames= document.getElementById("projectinput1").value;
    // let gnames= document.getElementById("projectinput1").value;
    if( unames == ""){
        event.preventDefault();
        document.getElementById('s1').innerHTML = "This field is required ";
    }
   
}
document.getElementById('save').addEventListener("click", unames);



// ////////////////////////////////////////////////////////////







// hover evenet
let allLinks = document.querySelectorAll("li a");
let myTitle = document.getElementsByClassName('menu-title')[0];
let allTitles = ["Dashboard", "Employees", "Add Employee", " General Settings", "Attendance", "Salary report", "Users", "Permissions", "Chat", "Login Page "];

for( let i = 0; i < allTitles.length; i++ ){
    if(  myTitle.innerHTML.includes(allTitles[i]) ){
        for( let a = 0; a < allLinks.length; a++ ){
            allLinks[a].classList.remove('icon-home');
            allLinks[i].classList.add("icon-home");
        }
    }
}