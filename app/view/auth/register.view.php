<?php
$pageTitle = "Register";

include '../header.php';
?>

<!-- Use Sweet Alert Message for Register, After register then display the Sweet Alert Modal and Display it. -->

<div>
    <div>
        Create Your Account
    </div>

    <form action="" method="POST" id="registerForm">

    <div>
        <label for="firstname" name="lbl_firstname" id="lbl_fname">First Name</label>
        <input type="text" name="firstname" id="firstname">
    </div>

    <div>
        <label for="middlename" name="lbl_middlename" id="lbl_mname">Middle Name</label>
        <input type="text" name="middlename" id="middlename">
    </div>
    
    <div>
        <label for="lastname" name="lbl_lastname" id="lbl_lname">Last Name</label> 
        <input type="text" name="lastname" id="lastname">
    </div>

    <div>
        <label for="address" name="lbl_address" id="lbl_address">Address</label>
        <input type="text" name="address" id="address">
    </div>

    <div>
        <label for="email" name="lbl_email" id="lbl_email">Email</label>
        <input type="email" name="email" id="email">
    </div>

    <div>
        <label for="phone" name="lbl_phone" id="lbl_phone">Phone Number</label>
        <input type="text" name="phone" id="phone">
    </div>

    <div>
        <label for="password" name="lbl_password" id="lbl_password">Password</label>
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="terms" id="terms">
        <label for="flexCheckDefault" id="lbl_terms">Accept the Terms.</label>

    </div>

    <div>
        <button type="submit">Register</button>
    </div>

    </form>

    <div>
        <a href="../view/auth/login.view.php">Already Have an Account? Click to Login.</a>
    </div>

</div>

<script>
    $(document).ready(function() {
        $('#registerForm').on('submit', function(event)
    {
        event.preventDefault(); // Prevent Form Submission

        let firstname = $('#firstname').val().trim();
        let middlename = $('#middlename').val().trim();
        let lastname = $('#lastname').val().trim();
        let address = $('#address').val().trim();
        let email = $('#email').val().trim();
        let phone = $('#phone').val().trim();
        let password = $('#password').val().trim();

        // Checking if the value is null
        if(firstname === '' || middlename === '' || lastname === '' || address === '' || email === '' || phone === '' || password === '')
        {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'All Fields are Required!'
            });
            return;
        }

        $.ajax({
            url: '/register',
            method: 'POST',
            data: {
                firstname: firstname,
                middlename: middlename,
                lastname: lastname,
                address: address,
                email: email,
                phone: phone,
                password: password
            },

            success: function(response){
                Swal.fire({
                    icon: 'success',
                    title: 'Registration Success',
                    text: 'You can now Proceed to Login'
                }).then(() =>{
                    windows.location.href = '../view/auth/login.view.php';
                });
            },
            error:function()
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Registration Failed',
                    text: 'Registration Failed. Please try again.'
                });
            }
        });
    });
    });
 
</script>
</body>
</html>