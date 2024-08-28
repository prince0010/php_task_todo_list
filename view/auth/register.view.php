<?php

?>

<!-- Use Sweet Alert Message for Register, After register then display the Sweet Alert Modal and Display it. -->

<div>
    <div>
        Create Your Account
    </div>

    <form action="" method="POST">

    <div>
        <label for="firstname" name="lbl_firstname" id="lbl_fname">First Name</label>
        <input type="text" name="firstname" id="fname">
    </div>

    <div>
        <label for="middlename" name="lbl_middlename" id="lbl_mname">Middle Name</label>
        <input type="text" name="middlename" id="mname">
    </div>
    
    <div>
        <label for="lastname" name="lbl_lastname" id="lbl_lname">Last Name</label> 
        <input type="text" name="lastname" id="lname">
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
</div>