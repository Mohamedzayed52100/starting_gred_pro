<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Measurements</title>
    <link rel="stylesheet" href="../PatientCSS/all.min.css" />
    <link rel="stylesheet" href="../css/Patientcss/framework.css" />
    <link rel="stylesheet" href="../css/Patientcss/master.css" />
    <!-- /////////////////////////////// -->

    <!-- viital_signs -->

    <link rel="stylesheet" type="text/css" href="css/Patientcss/opensans-font.css">
    <link rel="stylesheet" type="text/css"
        href="Patientfonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- datepicker -->
    <link rel="stylesheet" type="text/css" href="css/Patientcss/jquery-ui.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="../css/Patientcss/style.css" />

    <!-- ///////////////////////////////// -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
</head>

<body>
    <div class="page d-flex">
        @include('patient_pages.components.sidebar')


        <div class="page-content">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- <div class="wizard-heading"></div> -->
            <div class="wizard-v6-content">
                <div  style="background-color: #152238"  class="wizard-form">

                    <div class="card-body">

                        <form action="/vitalSigns_submit" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{ session('id') }}">
                                <label style="color: #fff" for="title">Heart Rate </label>
                                <input type="text" name="heart_rate" id="heart_rate" value="{{ old('heart_rate') }}" class="form-control"  >
                            </div>

                            <div class="form-group">
                                <label style="color: #fff" for="title">Respiratory Rate </label>
                                <input type="text" name="oxygen_rate" value="{{ old('oxygen_rate') }}" id="oxygen_rate" class="form-control">
                            </div>

                            <div class="form-group">
                                <label style="color: #fff" for="title">Blood Pressure </label>
                                <input type="text" name="pressure"  value="{{ old('pressure') }}" id="pressure" class="form-control">
                            </div>
                            <div class="form-group">
                                <label style="color: #fff" for="title">Glucose </label>
                                <input type="text" name="glucose"  value="{{ old('glucose') }}" id="glucose" class="form-control">
                            </div>
                            <div class="form-group">
                                <label style="color: #fff" for="title">Report </label>
                                <input type="text" name="report"  value="{{ old('report') }}" id="report" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-light">Submit</button>
                        </form>

                    </div>









                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous"></script>
    <script>
        // <script src="../js/Patientjs/jquery-3.3.1.min.js">
    </script>
    {{-- // <script src="../js/Patientjs/jquery.steps.js"> --}}
    {{-- //  <script src="../js/Patientjs/main.js"></script> --}}
</body>

</html>




{{--

<h2>
    <p class="step-icon"><span>2</span></p>
    <span class="step-text">Enter</span>
</h2>
<section>
    <div class="inner">
        <div class="form-heading">
            <h3>Enter data</h3>
            <span>2/3</span>
        </div>
        <div class="form-row">
            <div class="form-holder">
                <label class="form-row-inner">
                <input type="text" class="form-control" id="first_name" name="first_name"  required>
                <span class="label">weight  </span>
            </label>
            </div>
            <div class="form-holder" style="display:hidden;">
                <label class="form-row-inner">
                <input type="text" class="form-control" id="last_name" name="last_name" required>
                <span class="label">height </span>
            </label>
            </div>
        </div>
        <div class="form-row">
            <div class="form-holder">
                <label class="form-row-inner">
                <input type="text" class="form-control" id="first_name" name="first_name"  required>
                <span class="label">age  </span>
            </label>
            </div>
            <div class="form-holder" style="display:hidden;">
                <label class="form-row-inner">
                <input type="text" class="form-control" id="last_name" name="last_name" required>
                <span class="label">A</span>
            </label>
            </div>
        </div>

    </div>
</section>
 <h2>
    <p class="step-icon"><span>3</span></p>
    <span class="step-text">Confirm</span>
 </h2>
<section>
    <div class="inner">
        <div class="form-heading">
            <h3>Comfirm Details</h3>
            <span>3/3</span>
        </div>
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr class="space-row">
                        <th>Temperature:</th>
                        <td id="fullname-val"></td>
                    </tr>
                    <tr class="space-row">
                        <th>Blood Pressure:</th>
                        <td id="room-val"></td>
                    </tr>
                    <tr class="space-row">
                        <th>Blood Suger :</th>
                        <td id="day-val"></td>
                    </tr>
                    <tr class="space-row">
                        <th>Weigth:</th>
                        <td id="time-val"></td>
                    </tr>
                    <tr class="space-row">
                        <th>Height:</th>
                      <td id="price-val"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
</div>
</form> --}}
