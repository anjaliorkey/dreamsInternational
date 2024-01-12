@extends('layouts.app')
@section('content')
@include('include.navbar')
<section id="home">
    <div class="bg-holder" style="background-image:url(public/assets/img/gallery/hero.png);background-position:center;background-size:cover; height: 20px;"></div>
</section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
           
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="form-box">
                                    <h1>Resitration <span>Form</span></h1>
                                    <form role="form" id="contact-form" method="post" action="/save" enctype="multipart/form-data">

                                        @csrf

                                        <!-- Name field -->
                                        <div class="form-group">
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                </div>
                                                <input class="form-control" type="text" id="firstName" name="firstName" placeholder="First Name" oninput="validateFirstName()">
                                            </div>
                                            <div id="first-name-err" class="text-danger"><span style="color: red;">{{ $errors->first('firstName') }}</span></div>
                                        </div>


                                       
                                        <!-- Email field -->
                                        <div class="form-group">
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                </div>
                                                <input class="form-control" type="email" id="emailAddress" name="emailAddress" placeholder="Email Address" oninput="validateEmail()" >
                                            </div>
                                            <div id="email-err" class="text-danger"><span style="color: red;">{{ $errors->first('emailAddress') }}</span></div>
                                        </div>

                                        <!-- Mobile Number field -->
                                        <div class="form-group">
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                                                </div>
                                                <input type="tel" class="form-control" id="mobileNumber" name="mobileNumber" placeholder="Mobile Number" pattern="\d{10}" title="Please enter a valid 10-digit mobile number" oninput="validateMobileNumber()">
                                            </div>
                                            <div id="mobile-number-err" class="text-danger"><span style="color: red;">{{ $errors->first('mobileNumber') }}</span></div>
                                        </div>

                                        <!-- Address field -->
                                        <div class="form-group">
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                                                </div>
                                                <textarea class="form-control" id="form-address-field" name="address" rows="3" placeholder="Address" oninput="validateAddress()" ></textarea>
                                            </div>
                                            <div id="address-error" class="text-danger"><span style="color: red;">{{ $errors->first('address') }}</span></div>
                                        </div>



                                        <!-- City field -->
                                        <div class="form-group">
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-building" aria-hidden="true"></i></span>
                                                </div>
                                                <select class="custom-select form-control" id="form-city-field" name="city" onchange="validateCity()" >
                                                    <option value="">Select City...</option>
                                                    <option value="Nagpur">Nagpur</option>
                                                    <option value="Pune">Pune</option>
                                                    <option value="Mumbai">Mumbai</option>
                                                </select>
                                            </div>
                                            <div id="city-error" class="text-danger"><span style="color: red;">{{ $errors->first('city') }}</span></div>
                                        </div>


                                        <!-- Gender field -->
                                        <div class="form-group">
                                            <label>Gender:</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="male" value="male" onclick="validateGender()" >
                                                <label class="form-check-label" for="male">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="female" value="female" onclick="validateGender()"  >
                                                <label class="form-check-label" for="female">Female</label>
                                            </div>
                                            <div id="gender-error" class="text-danger"><span style="color: red;">{{ $errors->first('gender') }}</span></div>
                                        </div>


                                        <!-- Photo field -->
                                        <div class="form-group">
                                            <div class="input-group input-group-sm mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-camera" aria-hidden="true"></i></span>
                                                </div>
                                                <input type="file" class="form-control" name="img" accept="image/*" placeholder="Image" onchange="validatePhoto()">
                                            </div>
                                             <div id="photoError" class="sr-only" role="alert"><span style="color: red;">{{ $errors->first('img') }}</span></div>
                                        </div>

                                        <!-- captcha field -->
                                        <div class="form-group">
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                                                </div>
                                                <input class="form-control" type="text" id="captcha" name="captcha"  value="<?php echo bin2hex(random_bytes(3));?>" >
                                            </div>
                                            <div id="captcha-number-err" class="text-danger"><span style="color: red;">{{ $errors->first('captcha') }}</span></div>
                                        </div>
                                        
                                        <!-- Recaptcha field -->
                                        <div class="form-group">
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                                                </div>
                                                <input class="form-control" type="text" id="Repeatcaptcha" name="Repeatcaptcha"  placeholder="Repeatcaptcha">
                                            </div>
                                            <div id="captcha-number-err" class="text-danger"><span style="color: red;">{{ $errors->first('Repeatcaptcha') }}</span></div>
                                        </div>

                                         <div class="text-center">
                                            <button type="submit" class="btn btn-primary" onclick="validateForm()">Submit</button>
                                        </div>
                                    </form>   
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

      @include('include.footer')


<script>

       function validateFirstName() {
        var firstName = document.getElementById('firstName').value;
        var errorElement = document.getElementById('first-name-err');

        if (firstName.trim() === '') {
            errorElement.textContent = 'First Name is required';
        } 
        else if (/[^a-zA-Z]/.test(firstName)) {
            errorElement.textContent = 'Special characters and numeric values are not allowed';
        } 
        else {
            errorElement.textContent = ''; 
        }
    }



    function validateEmail() {
        var email = document.getElementById('emailAddress').value;
        var emailErrorElement = document.getElementById('email-err');

        if (email.trim() === '') {
            emailErrorElement.textContent = 'Email Address is required';
        } 
        else if (!isValidEmail(email)) {
            emailErrorElement.textContent = 'Please enter a valid email address';
        } 
        else {
            emailErrorElement.textContent = ''; 
        }
    }

    function isValidEmail(email) {
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }




     function validateMobileNumber() {
        var mobileNumber = document.getElementById('mobileNumber');
        var mobileNumberErrorElement = document.getElementById('mobile-number-err');

        if (mobileNumber.validity.patternMismatch) {
            mobileNumberErrorElement.textContent = 'Please enter a valid 10-digit mobile number';
        } else {
            mobileNumberErrorElement.textContent = ''; 
        }
    }



    function validateAddress() {
        var address = document.getElementById('form-address-field');
        var addressErrorElement = document.getElementById('address-error');

        // Check if the address is empty
        if (address.value.trim() === '') {
            addressErrorElement.textContent = 'Address is required';
        } else {
            addressErrorElement.textContent = ''; // Clear the error message
        }
    }


      function validateCity() {
        var citySelect = document.getElementById('form-city-field');
        var cityErrorElement = document.getElementById('city-error');

        // Check if a city is selected
        if (citySelect.value === '') {
            cityErrorElement.textContent = 'Please select a city';
        } else {
            cityErrorElement.textContent = ''; 
        }
    }


     function validateGender() {
        var maleRadio = document.getElementById('male');
        var femaleRadio = document.getElementById('female');
        var genderErrorElement = document.getElementById('gender-error');

        if (!maleRadio.checked && !femaleRadio.checked) {
            genderErrorElement.textContent = 'Please select a gender';
        } else {
            genderErrorElement.textContent = ''; 
        }
    }


      function validatePhoto() {
        var photoInput = document.querySelector('input[type="file"]');
        var photoErrorElement = document.getElementById('photoError');

      
        if (!photoInput.files.length) {
            photoErrorElement.textContent = 'Please select a photo';
            photoErrorElement.classList.remove('sr-only'); 
        } else {
            photoErrorElement.textContent = ''; 
            photoErrorElement.classList.add('sr-only'); 
        }
    }


</script>


 <script>
    document.getElementById('refreshCaptcha').addEventListener('click', function () {
        fetch('/generate-captcha')
            .then(response => response.json())
            .then(data => {
                document.querySelector('label[for="captcha"]').innerText = `CAPTCHA: ${data.question} = ?`;
            });
    });
</script>

@endsection
