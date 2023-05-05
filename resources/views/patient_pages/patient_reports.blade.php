<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reports</title>
    <link rel="stylesheet" href="../PatientCSS/all.min.css" />
    <link rel="stylesheet" href="../css/Patientcss/framework.css" />
    <link rel="stylesheet" href="../css/Patientcss/master.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />

</head>


<!-- patient_reports -->

<body>
    <div class="page d-flex">
        @include('patient_pages.components.sidebar')

        {{-- <div class="sidebar bg-white p-20 p-relative">
            <h3 class="p-relative txt-c mt-0">Tele-Medicine </h3>
            <ul>
                <li>
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="HomePatient.html">
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
                    <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="patient_reports.html">
                        <i class="fa-regular fa-file-text fa-fw"></i>
                        <span>Reports</span>
                    </a>
                </li>

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
            <!-- Start Head -->

             <h1 class="p-relative">Reports</h1>
            <div class="plans-page d-grid m-20 gap-20">
                <div class="plan green bg-white p-20">
                    <div class="top bg-green txt-c p-20">
                        <h2 class="m-0 c-white">Last week</h2>
                     </div>
                    <ul>
                        <li>
                            <i class="fa-solid fa-check fa-fw yes"></i>
                            <span>An improvement in blood sugar 70 </span>
                            <i class="fa-solid fa-circle-info help"></i>
                        </li>
                        <li>
                            <i class="fa-solid fa-check fa-fw yes"></i>
                            <span>Access All Videos Lessons</span>
                            <i class="fa-solid fa-circle-info help"></i>
                        </li>
                        <li>
                            <i class="fa-solid fa-check fa-fw yes"></i>
                            <span>Appear On Leaderboard</span>
                            <i class="fa-solid fa-circle-info help"></i>
                        </li>
                        <li>
                            <i class="fa-solid fa-xmark fa-fw"></i>
                            <span>Browse Content Without Ads</span>
                            <i class="fa-solid fa-circle-info help"></i>
                        </li>
                        <li>
                            <i class="fa-solid fa-xmark fa-fw"></i>
                            <span>Access All Assignments</span>
                            <i class="fa-solid fa-circle-info help"></i>
                        </li>
                        <li>
                            <i class="fa-solid fa-xmark fa-fw"></i>
                            <span>Get Daily Prizes</span>
                            <i class="fa-solid fa-circle-info help"></i>
                        </li>
                        <li>
                            <i class="fa-solid fa-xmark fa-fw"></i>
                            <span>Earn Certificate</span>
                            <i class="fa-solid fa-circle-info help"></i>
                        </li>
                        <li>
                            <i class="fa-solid fa-xmark fa-fw"></i>
                            <span>1 GB Space For Hosting Files</span>
                            <i class="fa-solid fa-circle-info help"></i>
                        </li>
                        <li>
                            <i class="fa-solid fa-xmark fa-fw"></i>
                            <span>Access Badge System</span>
                            <i class="fa-solid fa-circle-info help"></i>
                        </li>
                    </ul>
                    <a href="/pdf" class="btn-shape bg-green c-white d-block w-fit">Download as a PDF</a>
                </div>
                <!-- Start Plan -->
                <div class="plan blue bg-white p-20">
                    <div class="top bg-blue txt-c p-20">
                        <h2 class="m-0 c-white">Last month</h2>
                        <!-- <div class="price c-white"><span>$</span>7.99</div> -->
                    </div>
                    <ul class="list-none p-0">
                        <li>
                            <i class="fa-solid fa-check fa-fw yes"></i>
                            <span>Access All Text Lessons</span>
                            <i class="fa-solid fa-circle-info help"></i>
                        </li>
                        <li>
                            <i class="fa-solid fa-check fa-fw yes"></i>
                            <span>Access All Videos Lessons</span>
                            <i class="fa-solid fa-circle-info help"></i>
                        </li>
                        <li>
                            <i class="fa-solid fa-check fa-fw yes"></i>
                            <span>Appear On Leaderboard</span>
                            <i class="fa-solid fa-circle-info help"></i>
                        </li>
                        <li>
                            <i class="fa-solid fa-check fa-fw yes"></i>
                            <span>Browse Content Without Ads</span>
                            <i class="fa-solid fa-circle-info help"></i>
                        </li>
                        <li>
                            <i class="fa-solid fa-check fa-fw yes"></i>
                            <span>Access All Assignments</span>
                            <i class="fa-solid fa-circle-info help"></i>
                        </li>
                        <li>
                            <i class="fa-solid fa-check fa-fw yes"></i>
                            <span>Get Daily Prizes</span>
                            <i class="fa-solid fa-circle-info help"></i>
                        </li>
                        <li>
                            <i class="fa-solid fa-check fa-fw yes"></i>
                            <span>Earn Certificate</span>
                            <i class="fa-solid fa-circle-info help"></i>
                        </li>
                        <li>
                            <i class="fa-solid fa-xmark fa-fw"></i>
                            <span>1 GB Space For Hosting Files</span>
                            <i class="fa-solid fa-circle-info help"></i>
                        </li>
                        <li>
                            <i class="fa-solid fa-xmark fa-fw"></i>
                            <span>Access Badge System</span>
                            <i class="fa-solid fa-circle-info help"></i>
                        </li>
                    </ul>
                    <a href="/pdf" class="btn-shape bg-blue c-white d-block w-fit">Download as a PDF</a>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
</body>

</html>

</html>
