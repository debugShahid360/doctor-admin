

    function changedata(){
    let name=document.querySelector('#frist_name').value;
   
    if(name.match(/^[A-Za-z]*$/)){
       var b= document.querySelector('#valid');
      b.style.color="green";
      b.innerHTML='Valid*';
        document.querySelector('#father_name').removeAttribute('disabled')
    }else{
        var b= document.querySelector('#valid');
      b.style.color="red";
      b.innerHTML='Not Valid*';
    }
    

}
function changedata1(){
    
    let fname=document.querySelector('#father_name').value;
    if(fname.match(/^[A-Za-z]*$/)){
        var b= document.querySelector('#valid');
      b.style.color="green";
      b.innerHTML='Valid*';
      
        document.querySelector('#email').removeAttribute('disabled')
    }else{
        var b= document.querySelector('#valid');
      b.style.color="red";
      b.innerHTML='Not Valid*';

    }
   

}
function changedata3(){
    let email=document.querySelector('#email').value;
   
    if(email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){
        var b= document.querySelector('#valid1');
      b.style.color="green";
      b.innerHTML='Valid*';
      
        document.querySelector('#mobile_number').removeAttribute('disabled')
    }else{
        var b= document.querySelector('#valid1');
      b.style.color="red";
      b.innerHTML='Not Valid*';

    }
}
function changedata4(){
    let number=document.querySelector('#mobile_number').value;
   
    if(number.match(/^((\+92)?(0092)?(92)?(0)?)(3)([0-9]{9})$/gm)){
        var b= document.querySelector('#valid2');
      b.style.color="green";
      b.innerHTML='Valid*';
      
        document.querySelector('#password').removeAttribute('disabled')
    }else{
        var b= document.querySelector('#valid2');
      b.style.color="red";
      b.innerHTML='Not Valid*';

    }
}
function changedata5(){
    let password=document.querySelector('#password').value;
   
    if(password.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/gm)){
        var b= document.querySelector('#valid3');
      b.style.color="green";
      b.innerHTML='Valid*';
      
        document.querySelector('#cpassword').removeAttribute('disabled')
    }else{
        var b= document.querySelector('#valid3');
      b.style.color="red";
      b.innerHTML='Not Valid*';

    }
}
function changedata6(){
    let password=document.querySelector('#password').value;
    let cpassword=document.querySelector('#cpassword').value;
   
    if(cpassword.match(password)){
        var b= document.querySelector('#valid3');
      b.style.color="green";
      b.innerHTML='Valid*';
      
        document.querySelector('#cdoctorname').removeAttribute('disabled')
    }else{
        var b= document.querySelector('#valid3');
      b.style.color="red";
      b.innerHTML='Not Valid*';

    }
}
    
function removespantext(){
    document.querySelector('#valid').innerHTML='';
    document.querySelector('#valid1').innerHTML='';
    document.querySelector('#valid2').innerHTML='';
    
}
