function validateform(){  
    var name=document.myform.name.value;  
    var password=document.myform.password.value;  
      
    if(name==null || name==" " || name.length<5){  
      alert("Invalid username or email");  
      return false;  
    }
    else if(password.length<6){  
      alert("Password must be at least 6 characters long.");  
      return false;  
      }  
    else if(name=="abcd123" && password=="abcd123" ||name=="efgh1234" && password=="efgh1234" ||name=="abcd456" && password=="abcd456"){  
    alert("Successfully login."); 
    return ;  
    } 
    else{
        alert("Invalid Login details");  
        return false; 
    }
}  

function inputform(){  
    var name=document.inform.name.value;  
    var username=document.inform.username.value; 
    var email=document.inform.email.value; 
    var password=document.inform.password.value; 
    var cpassword=document.inform.cpassword.value;  
      
    if(name==null || name==" " || name.length<5 ||name=="."){  
      alert("Invalid Name or E-mail");  
      return false;  
    }
    else if(username.length<6){  
        alert("Username must be at least 6 characters long.");  
        return false;  
    }  
    else if(password.length<6){  
      alert("Password must be at least 6 characters long.");  
      return false;  
      }  
    else if(cpassword!=password){  
        alert("Different Passwords.");  
        return false;  
    }  
    else{
        alert("Successfully signup");  
        return false; 
    }
}  



