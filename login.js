
function compare()
{
        const car1 = {email:"shreya.cs21@gmail.com", password:"green123"};
        const car2 = {
            email:"priya.cs21@bmsce.ac.in",password:"red123"
        };
        const car3 = {email:"rachana.cs21@gmail.com",password:"blue123"};
		let x = document.getElementById('email_id');
        let z = document.getElementById('pwd');
        let y = document.getElementById('butn');


		if((x.value== "shreya.cs21@gmail.com" && z.value == car1["password"]) || (x.value== "priya.cs21@bmsce.ac.in" && z.value == car2["password"])
        ||(x.value == car3["email"] && z.value == car3["password"]))
        {
            window.location.href = "./Admin/adminhome.html";
        }
        else{
            alert("Admin with this Details does not exists!!!");}
            // window.location.href ="./User/userhome.html";        }
}

// function loginvalidate(){  
//     var name=document.forms["myform"]["email"].value;  
//     var password=document.myform.password.value;  
    
//   if (name==null || name==""){  
//     alert("Email id can't be blank"); 
//     return false;  
//   }if(password.length<6){  
//     alert("Password must be at least 6 characters long.");  
//     return false;  
//     }  
//     else{
//         return true;
//     }
//   }  