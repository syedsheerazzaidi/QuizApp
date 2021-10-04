function checkData() {
    

            var name=document.getElementById("fname").value;
            
            var email2=document.getElementById("email2").value;
            var password2=document.getElementById("password2").value;
            var dob=document.getElementById("dob").value;
            var ele = document.getElementsByName("optradio");
                    
            for(i = 0; i < ele.length; i++) {
                if(ele[i].checked)
                {
                
                    console.log(name,email2,ele[i].value,password2,dob);
                }
                
            }
            if(name.length === 0)
            {
                console.log("Name is blank");
                var element= document.getElementById("fnerror");
                element.classList.remove("hide");
            }
            if(email2.length === 0)
            {
                console.log("Email is blank");
                var element= document.getElementById("emerror");
                element.classList.remove("hide");
            }
            if(password2.length <= 8)
            {
                console.log("Password must be 8 character long");
                var element= document.getElementById("passerror");
                element.classList.remove("hide");
            }
            if(dob.length === 0)
            {
                console.log("Enter Enter your DOB");
                var element= document.getElementById("doberror");
                element.classList.remove("hide");
            }
     
}

jQuery(function () {
    $("#btnSubmit").on("click",function (e) {
        e.preventDefault();
        checkData();
        var formData=
        {
            fname:$("#fname").val(),
            email2:$("#email2").val(),
            password2:$("#password2").val(),
            dob:$("#dob").val(),
            role:$(".form-check-input:checked").val()
        };
        $.ajax({
            method:"POST",
            url: "register.php",
            data:formData,
            success: function(response)
                        {
                            alert(response);
                            // Use below code to redirect the page 
                           // $(location).prop('href', 'http://stackoverflow.com')

                        },
                        error: function()
                        {
                            alert("Failure");
                        }
        });
    });
    
});