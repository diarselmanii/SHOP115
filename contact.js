function submit(){
    var regex = /^[a-z]{4,10}$/;
    var name = document.getElementById('fname').value;
    var nm = regex.test(name);
    var join=0;

    if(nm==true){
        fname.style.backgroundColor=" rgb(143, 212, 143)";
        join++;
    }
    else{
        fname.style.backgroundColor="rgb(100, 51, 51)";
        join--;
    }

    var regex = /^[a-z]{5,40}\d{1,10}[@]{1}[a-z]{4,10}[.]{1}[a-z]{3}$/;
    var emailc=document.getElementById('email').value;
    var em = regex.test(emailc);
   
    if(em==true){
        email.style.backgroundColor="rgb(143, 212, 143)";
        join++;
    }
    else{
        email.style.backgroundColor="rgb(100, 51, 51)";
        join--;
    }
    

    
// function getlogin(){
    var regex = /^[a-z]{5,40}$/;
    var textbox= document.getElementById('textarea').value;
    var txt = regex.test(textbox);
    if(txt==true){
        textarea.style.backgroundColor="rgb(143, 212, 143)";
        join++;
    }
    else{
        textarea.style.backgroundColor="rgb(100, 51, 51)";
        join--;
    }
    if(join==3){
       submitt.style.backgroundColor="rgb(143, 212, 143)";
       textcontact.style.padding="48% 40%"; 
       textcontact.style.fontSize="30px";    
       document.querySelector('body').style.backgroundColor='black';  
       document.getElementById('contactname').innerHTML=name; 
        

    }
    else if(join<3){
        submitt.style.backgroundColor="rgb(100, 51, 51)";
    }
}