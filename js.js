function validation(){

      emaill=document.getElementById("email").value;
      pass=document.getElementById("password").value;
       
    if (validationemail(emaill)){
        
    }
   if(validationpassword(pass)){
         
    }
   
alert("Thank You for registration")
document.myform.submit();
}   

function validationpassword(pass){
      
      if(pass=='' || (!pass.match(/[A-Z]/)) || (!pass.match(/[a-z]/)) || (!pass.match(/[0-9]/)) ||(!pass.match(/[!@#$%^&*()]/)) ){
          alert("Password should have lowercase,uppercase and one special char");
          
          
          document.myform.password.focus();
          document.myform.password.value();
          return false;
          
      
     }
     return true;
         
  }
function validationemail(emaill){
       
      var address=(/^[a-zA-Z0-9_\-\.]+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/)
       if(emaill==''|| address.test(emaill)==false){
          alert("Please Enter valid Mailid");
          
          document.myform.Email.focus();
          document.myform.Email.value();
          return (false);      

      }
   return true;

  }    
    
  

          
              

