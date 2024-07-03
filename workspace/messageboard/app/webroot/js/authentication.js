$(document).ready(function() { 

    //this is register ajax form submit
    $('#registerForm').submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        var actionUrl = $(this).attr('action'); 
        ajax_request('POST', actionUrl, formData, 'registerForm');
    });


    //this is login ajax form submit
    $('#loginForm').submit(function(event) {
        event.preventDefault(); 
        var formData = $(this).serialize();
        var actionUrl = $(this).attr('action'); 
        ajax_request('POST', actionUrl, formData, 'loginForm');
    
    })


    //this is ajax form submit
    function ajax_request(type, url, payload, id){
        $.ajax({
            type: type,
            url: url, 
            dataType: 'json',
            data: payload,
            success: function(response) {

                if (response.success) {
                    alert(response.message);

                    if(id === "registerForm"){
                        window.location.href = '/users/thankyou';
                        return;
                    }

                    window.location.href = "/users/dashboard";

                } else {


                    var messages = '<div id="validation-alert" class="alert alert-danger"><ul style="list-style-type: none;">';
                    if (id === "registerForm") {
                        $.each(response.message, function(index, error) {
                            messages += '<li>' + error + '</li>';
                        });
                    } else {
                        messages += '<li>' + response.message + '</li>';
                    }
                    messages += '</ul></div>';
                    
                    $('#validation-messages').html(messages);
                    
                    setTimeout(() => {
                        $('#validation-alert').fadeOut('slow', function() {
                            $(this).remove();
                        });
                    }, 3000);
                    
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error); 
                alert('An error occurred. Please try again.'); 
            }
        });
    }


  //this is for change email ajax request
    $('#changeEmailForm').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: '/users/change_email',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#changeEmailMessage').html('<div class="alert alert-success">Email changed successfully.</div>');
                $('#changeEmailForm')[0].reset();
            },
            error: function(xhr, status, error) {
                var errorMessage = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'An error occurred while changing the email.';
                $('#changeEmailMessage').html('<div class="alert alert-danger">' + errorMessage + '</div>');
            }
        });
    });


    //this is for change password ajax request
    $('#changePasswordForm').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: '/users/change_password', 
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
             
                const { success, message , errors} = JSON.parse(response);
                console.log(errors);
                if(success === true) {
                    $('#changePasswordMessage').html('<div class="alert alert-success">Password changed successfully.</div>');
                }else{
                    $('#changePasswordMessage').html('<div class="alert alert-danger">' + message + '</div>');
                }
                $('#changePasswordForm')[0].reset();
            },
            error: function(xhr, status, error) {
                var errorMessage = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'An error occurred while changing the password.';
                $('#changePasswordMessage').html('<div class="alert alert-danger">' + errorMessage + '</div>');
            }
        });
    });


})