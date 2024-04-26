<script>
$(document).ready(function() {
    // Name validation
    $('#name').blur(function() {
        if($(this).val().length < 2) {
            $('#nameMsg').html('Name should be at least 2 characters long');
            $(this).focus();
        } else {
            $('#nameMsg').html('');
        }
    });
    
    // Date of Birth validation
    $('#dob').blur(function() {
        var dob = new Date($(this).val());
        var today = new Date();
        var age = today.getFullYear() - dob.getFullYear();
        if(age < 18) {
            $('#dobMsg').html('You should be at least 18 years old');
            $(this).focus();
        } else {
            $('#dobMsg').html('');
        }
    });
    
    // Gender validation
    $('#gender').blur(function() {
        if($(this).val() == '') {
            $('#genderMsg').html('Please select your gender');
            $(this).focus();
        } else {
            $('#genderMsg').html('');
        }
    });
    
    // Mobile number validation
    $('#mobile').blur(function() {
        if(!(/^\d{10}$/.test($(this).val()))) {
            $('#mobileMsg').html('Mobile number should be 10 digits long');
            $(this).focus();
        } else {
            $('#mobileMsg').html('');
        }
    });
    
    // Email validation
    $('#email').blur(function() {
        if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($(this).val()))) {
            $('#emailMsg').html('Please enter a valid email address');
            $(this).focus();
        } else {
            $('#emailMsg').html('');
        }
    });
    
    // Academic year validation
    $('#acadyear').blur(function() {
        if($(this).val().length < 2) {
            $('#acadyearMsg').html('Academic year should be at least 2 characters long');
            $(this).focus();
        } else {
            $('#acadyearMsg').html('');
        }
    });
    
    // Department validation
    $('#department').blur(function() {
        if($(this).val().length < 2) {
            $('#departmentMsg').html('Department should be at least 2 characters long');
            $(this).focus();
        } else {
            $('#departmentMsg').html('');
        }
    });
    
    // UID validation
    $('#uid').blur(function() {
        if($(this).val().length < 4) {
            $('#uidMsg').html('UID should be at least 4 characters long');
            $(this).focus();
        } else {
            $('#uidMsg').html('');
        }
    });
    
    // Password validation
    $('#password').blur(function() {
        if($(this).val().length < 6) {
            $('#passwordMsg').html('Password should be at least 6 characters long');
            $(this).focus();
        } else {
            $('#passwordMsg').html('');
        }
    });
    
    // Form submission
    $('form').submit (function() {
        var valid = true;
        $('.form input, .form
