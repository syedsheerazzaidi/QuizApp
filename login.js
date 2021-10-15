jQuery(function () {
    $("#btnLogin").on("click",function (e) {
   
        e.preventDefault();
        
        var formData={
            email2:$("#email").val(),
            password2:$("#password").val()
        };

        $.ajax({
            method:"POST",
            url: "login.php",
            data:formData,
            success: function(response)
                        {
                            alert(response);
                            // Use below code to redirect the page 
                            $(location).prop('href', 'index.php')

                        },
                        error: function()
                        {
                            alert("Failure");
                        }
        });

    });
});