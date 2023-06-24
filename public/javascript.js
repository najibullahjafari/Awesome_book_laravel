function loginValidate(){
    const loginUsername=document.querySelector("#loginUsername").value;
    const loginPassword=document.querySelector("#loginPassword").value;
    const loginError=document.querySelector("#loginError");
    if (loginUsername.indexOf("=")>-1 || loginUsername.indexOf("&")>-1 || loginUsername.indexOf("|")>-1 || loginPassword.indexOf("=")>-1 || loginPassword.indexOf("&")>-1 || loginPassword.indexOf("|")>-1){
        loginError.textContent="Invalidate username or password.";
        return false;
    }
    else{
        return true;
    }
}

function contactValidate(){
    const contactEmail=document.querySelector("#contactEmail").value;
    const contactSuggest=document.querySelector("#contactArticle").value;
    if (contactEmail.lastIndexOf("@")<3 || contactEmail.lastIndexOf(".")<8 || contactEmail=="" || contactSuggest==""){
        document.querySelector("#contactError").textContent="Invalidate Email Or Suggestion";
        return false;
    }
    else{
        return true;
    }
}
i=0;
let arrayErr=[];
function signInNameValidate(c,er,l){
    const name=document.querySelector(c).value;
    let nameErr=document.querySelector(er);
    const check=name.length-1;
    if (name.toLowerCase().charCodeAt(check)>122 || name.toLowerCase().charCodeAt(check)<65){
        nameErr.textContent="Please give real value!!!";
        nameErr.style.color="red";
        arrayErr[i]=name[check];
        i+=1;
    }
    else if(i!=0){
        for (let k=0;k<=i;k++){
            if (name.search(arrayErr[k])>-1){
                nameErr.textContent="Please give real value!!!";
                nameErr.style.color="red";
                break
            }
            else{
                delete arrayErr[k];
                i-=1;
                nameErr.textContent=l;
                nameErr.style.color="black";
            }
        }
    }
}
function signInUsernameValidate(){
    const username=document.querySelector("#signInUsername").value;
    let usernameError=document.querySelector("#signInUsernameError");
    if (username.indexOf("=")>-1 || username.indexOf("|")>-1 || username.indexOf("&")>-1){
        usernameError.textContent="give three or more and do not use =.||,&&";
        usernameError.style.color="red";
    }
    else{
        usernameError.textContent="Username:";
        usernameError.style.color="black"; 
    }
}
function signInPasswordValidate(i,errs){
    const password=document.querySelector(i).value;
    let passwordError=document.querySelector(errs);
    if (password.indexOf("=")>-1 || password.indexOf("|")>-1 || password.indexOf("&")>-1 ||password.length<8){
        passwordError.textContent="give eight or more and do not use =.||,&&";
        passwordError.style.color="red";
    }
    else{
        passwordError.textContent="Username:";
        passwordError.style.color="black"; 
    }
}

let k=0;
let phoneErrArray=[];
function signInPhoneValidate(){
    const phone=document.querySelector("#signInPhone").value;
    let phoneErr=document.querySelector("#signInPhoneError");
    if (phone==""){
        phoneErr.textContent="Please give real value!!!";
        phoneErr.style.color="red";
    }
    const check=name.length-1;
    if (phone.charCodeAt(check)>57 || phone.charCodeAt(check)<48){
        phoneErr.textContent="Please give real value!!!";
        phoneErr.style.color="red";
        phoneErrArray[k]=name[check];
        k+=1;
    }
    else if(k!=0){
        for (let s=0;s<=k;s++){
            if (name.search(arrayErr[s])>-1){
                phoneErr.textContent="Please give real value!!!";
                phoneErr.style.color="red";
                break
            }
            else{
                delete phoneErrArray[s];
                k-=1;
                phoneErr.textContent=l;
                phoneErr.style.color="black";
            }
        }
    }
}
function signInValidate(){
    const nameError=document.querySelector("#signInNameError").style.color;
    const lastNameError=document.querySelector("#signInLastNameError").style.color;
    const usernameError=document.querySelector("#signInUsernameError").style.color;
    const passwordError=document.querySelector("#signInPasswordError").style.color;
    const confirmError=document.querySelector("#signInConfirmError").style.color;
    const password=document.querySelector("#signInPassword").value;
    const confirm=document.querySelector("#signInConfirm").value;
    let signInError=document.querySelector("#signInError");

    if(password!=confirm){
        signInError.textContent="Password and Confirm does not match!!!";
        return false;
    }
    if(nameError=="red" || lastNameError=="red" || usernameError=="red" || passwordError=="red" ||confirmError=="red"){
        signInError.textContent="Invalid Value is given please correct!!!";
        return false;
    }
    else{
        return true;
    }
}

// Edit Info
function editInfoUsernameValidate(){
    const username=document.querySelector("#editInfoUsername").value;
    let usernameError=document.querySelector("#editInfoUsernameError");
    if (username.indexOf("=")>-1 || username.indexOf("|")>-1 || username.indexOf("&")>-1){
        usernameError.textContent="give three or more and do not use =.||,&&";
        usernameError.style.color="red";
    }
    else{
        usernameError.textContent="Username:";
        usernameError.style.color="black"; 
    }
}


let s=0;
let editPhoneErrArray=[];
function editInfoPhoneValidate(){
    const phone=document.querySelector("#editInfoPhone").value;
    let phoneErr=document.querySelector("#editInfoPhoneError");
    if (phone==""){
        phoneErr.textContent="Please give real value!!!";
        phoneErr.style.color="red";
    }
    const check=phone.length-1;
    if (phone.charCodeAt(check)>57 || phone.charCodeAt(check)<48){
        phoneErr.textContent="Please give real value!!!";
        phoneErr.style.color="red";
        editPhoneErrArray[k]=phone[check];
        s+=1;
    }
    else if(s!=0){
        for (let index=0;index<=s;index++){
            if (phone.search(editPhoneErrArray[index])>-1){
                phoneErr.textContent="Please give real value!!!";
                phoneErr.style.color="red";
                break
            }
            else{
                delete editPhoneErrArray[s];
                s-=1;
                phoneErr.textContent=l;
                phoneErr.style.color="black";
            }
        }
    }
}
