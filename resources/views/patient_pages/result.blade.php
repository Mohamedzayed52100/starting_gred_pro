<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Results</title>

    <!-- result -->

    <link rel="stylesheet" href="../css/Patientcss/master.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../PatientCSS/all.min.css" />
    <link rel="stylesheet" href="../css/Patientcss/framework.css" />
</head>

<body>
    <div class="page d-flex">
        @include('patient_pages.components.sidebar')

        {{-- <div class="sidebar bg-white p-20 p-relative">
            <h3 class="p-relative txt-c mt-0">Tele-Medicine </h3>
            <ul>
                <li>
                    <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="HomePatient.html">
                        <i class="fa-regular fa-chart-bar fa-fw"></i>
                        <span>Advices</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="settingsPatient.html">
                        <i class="fa-solid fa-gear fa-fw"></i>
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="Patientprofile.html">
                        <i class="fa-regular fa-user fa-fw"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="choose_disease.html">
                        <i class="fa-solid fa-stethoscope fa-fw"></i>
                        <span>Diseases</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="PatientRequestLab.html">
                        <i class="fa-solid fa-flask fa-fw"></i>
                        <span>Request Lab </span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="relative_list_patient.html">
                        <i class="fa-regular fa-circle-user fa-fw"></i>
                        <span>Relatives</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="vitalSigns.html">
                        <i class="fa fa-heartbeat fa-fw"></i>
                        <span>Measurements</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="patient_reports.html">
                        <i class="fa-regular fa-file-text fa-fw"></i>
                        <span>Reports</span>
                    </a>
                </li>
                <!-- <li>
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="testmessure.htm">
                        <i class="fa-regular fa-credit-card fa-fw"></i>
                        <span>Measures</span>
                    </a>
                </li> -->
                <li>
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="PatientLogin.html">
                        <i class="fa fa-sign-out fa-fw"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div> --}}
        <div class="content w-full">
            <!-- Start Head -->
            @include('patient_pages.components.head')

            <!-- End Head -->
            <!-- <p>result is .........</p> -->
            <h1 class="p-relative">Results</h1>
            <p style="font-size:40px; text-align:center;">result is ....</p>
            <div class="wrapper d-grid gap-20">


                <!-- End Welcome Widget -->
                <!-- Start Quick Draft Widget -->

                <!-- End Quick Draft Widget -->
                <!-- Start Targets Widget -->
                <div class="targets p-20 bg-white rad-10">
                    <h2 class="mt-0 mb-10">Sensors measures </h2>
                    <br>
                    <!-- <p class="mt-0 mb-20 c-grey fs-15"></p> -->
                    <div class="target-row mb-20 blue center-flex">
                        <div class="icon center-flex">
                            <i class="fa-solid fa-dollar-sign fa-lg c-blue"></i>
                        </div>
                        <div class="details">
                            <span class="fs-14 c-grey">temperature </span>
                            <span class="d-block mt-5 mb-10 fw-bold">37 percent</span>
                            <div class="progress p-relative">
                                <span class="bg-blue blue" style="width: 80%">
                    <span class="bg-blue">80%</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="target-row mb-20 center-flex orange">
                        <div class="icon center-flex">
                            <i class="fa-solid fa-code fa-lg c-orange"></i>
                        </div>
                        <div class="details">
                            <span class="fs-14 c-grey">Blood Suger</span>
                            <span class="d-block mt-5 mb-10 fw-bold">24 in blood </span>
                            <div class="progress p-relative">
                                <span class="bg-orange orange" style="width: 55%">
                    <span class="bg-orange">55%</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="target-row mb-20 center-flex green">
                        <div class="icon center-flex">
                            <i class="fa-solid fa-user fa-lg c-green"></i>
                        </div>
                        <div class="details">
                            <span class="fs-14 c-grey">Blood pressure</span>
                            <span class="d-block mt-5 mb-10 fw-bold">80 pressure</span>
                            <div class="progress p-relative">
                                <span class="bg-green green" style="width: 75%">
                    <span class="bg-green">75%</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Targets Widget -->
                <!-- Start Ticket Widget -->
                <div class="tickets p-20 bg-white rad-10">
                    <!-- <h2 class="mt-0 mb-10">value you have been submitted</h2> -->
                    <!-- <p class="mt-0 mb-20 c-grey fs-15">Everything About Support Tickets</p> -->
                    <div class="d-flex txt-c gap-20 f-wrap">
                        <div class="box p-20 rad-10 fs-13 c-grey">
                            <!-- <i class="fa-regular fa-rectangle-list fa-2x mb-10 c-orange"></i> -->
                            <span class="d-block c-black fw-bold fs-25 mb-5">weight</span>
                            <span class="d-block c-black fw-bold fs-20 mb-5">2500</span>
                            <span class="d-block c-black fw-bold fs-25 mb-5">Good</span>
                        </div>
                        <div class="box p-20 rad-10 fs-13 c-grey">
                            <!-- <i class="fa-solid fa-spinner fa-2x mb-10 c-blue"></i> -->
                            <!-- <span class="d-block c-black fw-bold fs-25 mb-5">500</span> Pending -->
                            <span class="d-block c-black fw-bold fs-25 mb-5">height</span>
                            <span class="d-block c-black fw-bold fs-20 mb-5">2500</span>
                            <span class="d-block c-black fw-bold fs-25 mb-5">Good</span>
                        </div>
                        <div class="box p-20 rad-10 fs-13 c-grey">
                            <!-- <i class="fa-regular fa-circle-check fa-2x mb-10 c-green"></i> -->
                            <span class="d-block c-black fw-bold fs-25 mb-5">A</span>
                            <span class="d-block c-black fw-bold fs-20 mb-5">2500</span>
                            <span class="d-block c-black fw-bold fs-25 mb-5">Good</span> </div>
                        <div class="box p-20 rad-10 fs-13 c-grey">
                            <!-- <i class="fa-regular fa-rectangle-xmark fa-2x mb-10 c-red"></i> -->
                            <span class="d-block c-black fw-bold fs-25 mb-5">B</span>
                            <span class="d-block c-black fw-bold fs-20 mb-5">2500</span>
                            <span class="d-block c-black fw-bold fs-25 mb-5">normal</span> </div>
                    </div>

                </div>
                <!-- <p>result is .........</p> -->

                <!-- End Ticket Widget -->

                <!-- Start Tasks Widget -->

                <!-- End Tasks -->




                <!-- End Reminders Widget -->

            </div>

        </div>
    </div>

</body>

</html>
