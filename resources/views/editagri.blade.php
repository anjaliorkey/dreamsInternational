@extends('layouts.app')
@section('content')
@include('include.navbar')
<section id="home">
  <div class="bg-holder" style="background-image:url(public/assets/img/gallery/hero.png);background-position:center;background-size:cover; height: 20px;"></div>
</section>
<!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
  <div class="row justify-content-center mt-0">
    <div class="col-lg-9 text-center p-0 mt-3 mb-2">
      <div class="card px-0 pt-2 pb-0 mt-3 mb-3">
        <h2><strong>Sign Up Your User Account</strong></h2>
        <p>Fill all form field to go to next step</p>
        <div class="row">
          <div class="col-md-12 mx-0">
            <form id="msform" method="post" action="/UpdateDemo">
              @csrf
               <input type="hidden" name="hiddID" value="{{$blogType->id}}">
              <!-- progressbar -->
              <ul id="progressbar">
                <li class="active" id="account"><strong>Requester Details</strong></li>
                <li id="personal"><strong>Rented Property</strong></li>
                <li id="payment"><strong>Tenant Details</strong></li>
                <li id="confirm"><strong>Finish</strong></li>
              </ul>
              <!-- fieldsets -->
              <fieldset>
                <div class="form-card">
                  <h2 class="fs-title">Requester Information</h2>
                  <input type="text" id="firstName" name="ufname" placeholder="First Name" value="{{$blogType->firstname}}" />
                  <input type="text" id="lastName" name="ulname" placeholder="Last Name" value="{{$blogType->lastname}}" />
                  <input type="text" id="phone" name="phone" placeholder="Phone" value="{{$blogType->phone}}"/>
                  <input type="email" id="email" name="email" placeholder="Email Id" value="{{$blogType->email}}"/>
                </div>
                <input type="button" id="nextBtn" name="next" class="next action-button" value="Next Step"/>
              </fieldset>

              <fieldset>
                <!-- MultiStep Form -->
                <div class="container-fluid" id="grad1">
                  <div class="row justify-content-center mt-0">
                    <div class="col-12 col-sm-9 col-md-7 col-lg-12"> <!-- Increase col-lg-6 to col-lg-8 --><div class="card px-4 py-3 mt-3 mb-3">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group mb-3">
                            <label for="oldAgreementRef">Old Agreement Reference</label>
                            <select class="form-control" id="oldAgreementRef" name="oldAgreementRef">
                              <!-- Options for Old Agreement Reference dropdown -->
                              <option value="Old Agreement {{ $blogType->oldagrement == 'Old Agreement' ? 'selected' : '' }} ">Old Agreement</option>
                              <option value="Old Agreement With New Tenantes {{ $blogType->oldagrement == 'Old Agreement With New Tenantes ' ? 'selected' : '' }} ">Old Agreement With New Tenantes</option>
                              <option value="Old Agreement With Same Tenantes {{ $blogType->oldagrement == 'Old Agreement With Same Tenantes ' ? 'selected' : '' }} ">Old Agreement With Same Tenantes</option>
                              <!-- Add more options as needed -->
                            </select>
                          </div>

                          <!-- <div class="form-group mb-3">
                            <label for="propertyAddressProof">Upload Old Agriment</label>
                            <input type="file" class="form-control-file" id="propertyAddressProof" name="propertyAddressProof">
                          </div> -->

                          <div class="form-group mb-3">
                            <label for="agreementTenure">Agreement Tenure in Months*</label>
                            <input type="text" class="form-control" id="agreementTenure" name="agreementTenure" value="{{$blogType->tenorMonth}}" required>
                          </div>

                          <div class="form-group mb-3">
                            <label for="rentAmount">Rent Amount*</label>
                            <input type="text" class="form-control" id="rentAmount" name="rentAmount" value="{{$blogType->rentamt}}" required>
                          </div>

                          <div class="form-group mb-3">
                            <label for="maintenancePaidBy">Society Maintenance will be paid by*</label>
                            <select class="form-control" id="maintenancePaidBy" name="maintenancePaidBy" required>
                              <!-- Options for Society Maintenance dropdown -->
                              <option value="Owner {{ $blogType->socityMaintenance == 'Owner' ? 'selected' : '' }}  ">Owner</option>
                              <option value="Tenant {{ $blogType->socityMaintenance == 'Tenant' ? 'selected' : '' }}">Tenant</option>
                              <!-- Add more options as needed -->
                            </select>
                          </div>

                          <div class="form-group mb-3">
                            <label for="furnitureAppliances">Furniture and Appliances*</label>
                            <select class="form-control" id="furnitureAppliances" name="furnitureAppliances" required>
                              <!-- Options for Furniture and Appliances dropdown -->
                              <option value="Yes {{ $blogType->FurnitureandAppliances == 'Yes' ? 'selected' : '' }}  ">Yes</option>
                              <option value="No {{ $blogType->FurnitureandAppliances == 'No' ? 'selected' : '' }}  ">No</option>
                              <!-- Add more options as needed -->
                            </select>
                          </div>
                        </div> 
                        <div class="col-md-6">
                          <div class="form-group mb-3">
                            <label for="miscellaneous">Miscellaneous</label>
                            <input type="text" class="form-control" id="miscellaneous" name="miscellaneous" value="{{$blogType->Miscellaneous}}">
                          </div>

                          <div class="form-group mb-3">
                            <label for="startDate">Agreement Start Date</label>
                            <input type="date" class="form-control" id="startDate" name="startDate" value="{{$blogType->AgreementStartDate}}">
                          </div>


                          <div class="form-group mb-3">
                            <label for="depositAmount">Deposit Amount</label>
                            <input type="text" class="form-control" id="depositAmount" name="depositAmount" value="{{$blogType->DepositAmount}}"  >
                          </div>

                          <div class="form-group mb-3">
                            <label for="costBearer">Agreement Cost shall be born by</label>
                            <select class="form-control" id="costBearer" name="costBearer">
                              <!-- Options for Cost Bearer dropdown -->
                              <option value="landlord {{ $blogType->Agreementcost == 'Landlord' ? 'selected' : '' }}">Landlord</option>
                              <option value="tenant {{ $blogType->Agreementcost == 'Tenant' ? 'selected' : '' }}">Tenant</option>
                              <option value="Both {{ $blogType->Agreementcost == 'Both' ? 'selected' : '' }}">Both</option>
                              <!-- Add more options as needed -->
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
              <input type="button" id="nextBtnRentedProperty" name="next" class="next action-button" value="Next Step"/>
            </fieldset>

            <fieldset>
              <div class="container-fluid" id="grad1">
                <div class="row justify-content-center mt-0">
                  <div class="col-12 col-sm-9 col-md-7 col-lg-12"> 
                    <div class="card px-4 py-3 mt-3 mb-3">
                      <div class="form-group mb-3">
                        <label for="tenantType">Tenant Type</label>
                        <select class="form-control" id="tenantType" name="tenantType">
                          <option value="Individual {{ $blogType->tenantType == 'Individual' ? 'selected' : '' }}">Individual</option>
                          <option value="Family {{ $blogType->tenantType == 'Family' ? 'selected' : '' }}">Family</option>
                          <!-- Add more options as needed -->
                        </select>
                      </div>

                      <div class="form-group mb-3">
                        <label for="totalTenant">Total Tenant</label>
                        <select class="form-control" id="totalTenant" name="totalTenant">
                          <option value="1  {{ $blogType->totalTenant == '1' ? 'selected' : '' }}">1</option>
                          <option value="2  {{ $blogType->totalTenant == '2' ? 'selected' : '' }}">2</option>
                          <option value="3  {{ $blogType->totalTenant == '3' ? 'selected' : '' }}">3</option>
                          <!-- Add more options as needed -->
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
              <input type="submit" id="confirmBtn" name="next" class="next action-button" value="Update"/>
            </fieldset>
            <fieldset>
              <div class="form-card">
                <h2 class="fs-title text-center">Updated !</h2>
                <br><br>
                <div class="row justify-content-center">
                  <div class="col-3">
                    <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                  </div>
                </div>
                <br><br>
                <div class="row justify-content-center">
                  <div class="col-7 text-center">
                    <h5>Document Updated Sucessfully</h5>
                  </div>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@include('include.footer')

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"></script>


<script type="text/javascript">
  $(document).ready(function () {
    var current_fs, next_fs, previous_fs; // fieldsets
    var opacity;

    // Click event for "Next" button
    $("#nextBtn").click(function () {
        // Perform individual form field validation
        var firstName = $("#firstName").val();
        var lastName = $("#lastName").val();
        var phone = $("#phone").val();
        var email = $("#email").val();

        // Validate the fields
        if (firstName === '') {
            alert("Please enter your First Name.");
            return;
        }

        if (lastName === '') {
            alert("Please enter your Last Name.");
            return;
        }

        // Validate phone number to contain only numbers
        if (!/^\d+$/.test(phone)) {
            alert("Please enter a valid Phone Number (only numerical digits).");
            return;
        }

        if (email === '') {
            alert("Please enter your Email Address.");
            return;
        }

        // You can use a regular expression to validate email format
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            alert("Please enter a valid Email Address.");
            return;
        }

        // Proceed to the next step if validation passes
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        // Add Class Active
        $("#progressbar li").eq($("fieldset").index(current_fs)).addClass("active");

        // Show the next fieldset
        next_fs.show();

        // Hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function (now) {
                // For making fieldset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({
                    'opacity': opacity
                });
            },
            duration: 600
        });
    });

    // Click event for "Next" button on the Rented Property step
    $("#nextBtnRentedProperty").click(function () {
        // Perform validation for the Rented Property step
        var oldAgreementRef = $("#oldAgreementRef").val();
        var propertyAddressProof = $("#propertyAddressProof").val();
        var agreementTenure = $("#agreementTenure").val();
        var rentAmount = $("#rentAmount").val();
        var maintenancePaidBy = $("#maintenancePaidBy").val();
        var furnitureAppliances = $("#furnitureAppliances").val();

        // Add more validations as needed based on your requirements

        if (oldAgreementRef === '' || propertyAddressProof === '' || agreementTenure === '' || rentAmount === '' || maintenancePaidBy === '' || furnitureAppliances === '') {
            alert("Please fill out all the required fields.");
            return;
        }

        // Proceed to the next step if validation passes
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        // Add Class Active
        $("#progressbar li").eq($("fieldset").index(current_fs)).addClass("active");

        // Show the next fieldset
        next_fs.show();

        // Hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function (now) {
                opacity = 1 - now;
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({
                    'opacity': opacity
                });
            },
            duration: 600
        });
    });

    // Click event for "Confirm" button on the third fieldset (Tenant Details)
    $("#confirmBtn").click(function () {
        // Perform validation for the third step if needed

        // Proceed to the next step if validation passes
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        // Add Class Active
        $("#progressbar li").eq($("fieldset").index(current_fs)).addClass("active");

        // Show the next fieldset
        next_fs.show();

        // Hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function (now) {
                opacity = 1 - now;
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({
                    'opacity': opacity
                });
            },
            duration: 600
        });
    });

    // Click event for "Previous" button
    $(".previous").click(function () {
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        // Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        // Show the previous fieldset
        previous_fs.show();

        // Hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function (now) {
                // For making fieldset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({
                    'opacity': opacity
                });
            },
            duration: 600
        });
    });
});

</script>


@endsection
