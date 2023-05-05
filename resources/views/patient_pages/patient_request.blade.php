<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Request Lab</title>
    <link rel="stylesheet" href="../PatientCSS/all.min.css" />
    <link rel="stylesheet" href="../css/Patientcss/framework.css" />
    <link rel="stylesheet" href="../css/Patientcss/master.css" />
    <link rel="stylesheet" href="../css/Patientcss/requestlab.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="../css/Patientcss/font-awesome.min.css">
    <link rel="stylesheet" href="../css/Patientcss/feathericon.min.css">
    {{-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" /> --}}


</head>

<!-- patient_request -->

<body>
    <div class="page d-flex">
                @include('patient_pages.components.sidebar')


        <div class="content w-full">
            <!-- Start Head -->
            @include('patient_pages.components.head')

            @if ($errors->any())
    <div class="alert alert-danger">
        <ul style="text-align: center; color :rgb(159, 55, 55)" >
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <!-- End Head -->
            <h1 class="p-relative">Request Lab</h1>
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <form action="/PatientRequestLab_submit" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input class="mrn" type="hidden" id="mrn" name="mrn"  readonly value="{{ session('patient_login')->id }}" >

                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>

                            <input class="fname" type="text" id="fname" name="firstname" value="{{ session('patient_login')->name }}" readonly style="font-size: medium;">
                            <label for="adr" style="display :block"><i class="fa fa-address-card-o"></i> Address <span style="color: red;">*</span></label>
                            <input class="adr" type="text" id="adr" name="address" placeholder="Benha , Egypt" style="font-size: medium;">
                            <input type="submit" value="Live Location" class="btnLocation">
                            <label for="type"><i class="fa fa-flask" aria-hidden="true"></i> Select Test Type <span style="color: red;">*</span></label>
                            <select class="form-control" name="labtest" required>
                                        <option value="">-- No Select --</option>
                                        <option value="Blood Test">Blood Test</option>
                                        <option value="Blood Test">Blood Test</option>
                                    </select>
                            <label for="date"><i class="fa fa-calendar" aria-hidden="true"></i> Select Date <span style="color: red;">*</span></label>
                            <input class="date" type="date" id="date" name="date" required style="font-size: medium;"><br><br>
                            <p style="display: inline; margin-right:100px;"><b> Taking Any Medications Currently ? </b><span style="color: red;">*</span></p>
                            <input type="radio" id="yes" name="take" value="yes">
                            <label for="yes" style="margin-right: 100px;">Yes</label>
                            <input type="radio" id="no" name="take" value="no">
                            <label for="no">No</label>
                            <p><b> If YES , Please List it :</b></p>
                            <textarea rows="5" cols="100" autofocus placeholder="Write Here .." style=" resize: none;"></textarea>


                            <label for="icon-container"><i class="fa fa-check" aria-hidden="true"></i> <b>Accepted Cards</b> </label>
                            <i class="fa fa-cc-visa" style="color:navy; font-size: 24px; padding: 7px 0;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;font-size: 24px; padding: 7px 0;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;font-size: 24px; padding: 7px 0;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;font-size: 24px; padding: 7px 0;"></i><br>
                            <select name="payment" class="form-control"  required>
                                        <option>-- Select the Way to Pay --</option>
                                        <option value="Cache">Cache</option>
                                        <option value="Credit Card">Credit Card</option>
                                    </select>
                            <input type="submit" value="Book Now" class="btnsubmit">
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>

</body>

</html>
