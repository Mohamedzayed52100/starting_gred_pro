<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="../all.min/all.min.css">
    <link rel="stylesheet" href="../css/DoctorCss/style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <title>Emergent Cases</title>
</head>

<body>

    <!-- SIDEBAR -->
    @include('doctor_pages.component.sidebar')




    <!-- SIDEBAR -->
    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->

        @include('doctor_pages.component.navbar')
        <!-- NAVBAR -->
        <main>
            <div class="head-title">
                <div class="left">
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Emergency List</a>
                        </li>
                    </ul>
                </div>

            </div>
            <!---->
            <div class="container">
                @foreach ($data as $key => $value)
                    <div class="box">
                        <h2>{{ $value->name }}</h2>
                        <p>Medical Record Number is {{ $value->MRN }}</p>
                        <span
                            style="font-size: 20px; ">{{ \App\Models\Disease::where('disease_id', $value->disease_id)->first()->name }}
                            /Patient</span>
                        <ul class="features">

 
                            <li>
                                @if($value->heart_rate > 50)
                                <i class="fa-solid fa-check"></i>

                                @else

                                <i class="fa-solid fa-xmark"></i>
                                @endif
                                {{-- <i class="fa-solid fa-check"></i> --}}
                                
                                Heart Rate: {{ $value->heart_rate }} bph
                            </li>
                            <li>
                                @if($value->pressure > 50)
                                <i class="fa-solid fa-check"></i>

                                @else

                                <i class="fa-solid fa-xmark"></i>
                                @endif
                                {{-- <i class="fa-solid fa-check"></i> --}}
                                
                                Blood Pressure: {{ $value->pressure }} bph
                            </li>
                            <li>
                                @if($value->oxygen_rate > 50)
                                <i class="fa-solid fa-check"></i>

                                @else

                                <i class="fa-solid fa-xmark"></i>
                                @endif
                                {{-- <i class="fa-solid fa-check"></i> --}}
                                
                                Respiratory Rate:  {{ $value->oxygen_rate }} bph
                            </li>
                            <li>
                                @if($value->glucose > 50)
                                <i class="fa-solid fa-check"></i>

                                @else

                                <i class="fa-solid fa-xmark"></i>
                                @endif
                                {{-- <i class="fa-solid fa-check"></i> --}}
                                
                                Blood Glucose:  {{ $value->glucose }} bph
                            </li>
                            {{-- <li><i class="fa-solid fa-check"></i>Blood Pressure: {{ $value->pressure }} mmHg</li> --}}
                            {{-- <li><i class="fa-solid fa-xmark"></i>Respiratory Rate: {{ $value->oxygen_rate }} bpm</li> --}}
                            {{-- <li><i class="fa-solid fa-xmark"></i>Blood Glucose: {{ $value->glucose }} mg/dL</li> --}}
                            {{-- First Relative !! --}}
                            {{-- <li><i class="fa-solid fa-check"></i> --}}
                                <li>
                                <i class="fa-solid fa-user"></i> Relatives:
                                {{ \App\Models\Relative::where('relative_id', $value->relative_id)->first()->name }}
                            </li>
                        </ul>
                        <a href="medicalrecord_Doctor/{{ $value->MRN }}">
                            <button>View Medical Record</button>
                        </a>
                    </div>
                @endforeach
                {{-- <div class="box">
                    <h2>Ahmed Osama</h2>
                    <p>Medical Record Number is 1111</p>
                    <span>CHD<span>/Patient</span></span>
                    <ul class="features">
                        <li><i class="fa-solid fa-check"></i>Heart Rate: 79.72 bph</li>
                        <li><i class="fa-solid fa-check"></i>Blood Pressure: 119.55 mmHg</li>
                        <li><i class="fa-solid fa-xmark"></i>Respiratory Rate: 15 bpm</li>
                        <li><i class="fa-solid fa-xmark"></i>Blood Glucose: 170 mg/dL</li>
                        <li><i class="fa-solid fa-check"></i>Relatives: Ahmed Ali</li>
                    </ul>
                    <a href="medicalrecord_Doctor.html">
                        <button>View Medical Record</button>
                    </a>
                </div> --}}
                {{-- <div class="box">
                    <h2>Ahmed Osama</h2>
                    <p>Medical Record Number is 1111</p>
                    <span>CHD<span>/Patient</span></span>
                    <ul class="features">
                        <li><i class="fa-solid fa-check"></i>Heart Rate: 79.72 bph</li>
                        <li><i class="fa-solid fa-check"></i>Blood Pressure: 119.55 mmHg</li>
                        <li><i class="fa-solid fa-xmark"></i>Respiratory Rate: 15 bpm</li>
                        <li><i class="fa-solid fa-xmark"></i>Blood Glucose: 170 mg/dL</li>
                        <li><i class="fa-solid fa-check"></i>Relatives: Ahmed Ali</li>
                    </ul>
                    <a href="medicalrecord_Doctor.html">
                        <button>View Medical Record</button>
                    </a>
                </div> --}}
                {{-- <div class="box">
                    <h2>Ahmed Osama</h2>
                    <p>Medical Record Number is 1111</p>
                    <span>CHD<span>/Patient</span></span>
                    <ul class="features">
                        <li><i class="fa-solid fa-check"></i>Heart Rate: 79.72 bph</li>
                        <li><i class="fa-solid fa-check"></i>Blood Pressure: 119.55 mmHg</li>
                        <li><i class="fa-solid fa-xmark"></i>Respiratory Rate: 15 bpm</li>
                        <li><i class="fa-solid fa-xmark"></i>Blood Glucose: 170 mg/dL</li>
                        <li><i class="fa-solid fa-check"></i>Relatives: Ahmed Ali</li>
                    </ul>
                    <a href="medicalrecord_Doctor.html">
                        <button>View Medical Record</button>
                    </a>
                </div> --}}
                {{-- <div class="box">
                    <h2>Ahmed Osama</h2>
                    <p>Medical Record Number is 1111</p>
                    <span>CHD<span>/Patient</span></span>
                    <ul class="features">
                        <li><i class="fa-solid fa-check"></i>Heart Rate: 79.72 bph</li>
                        <li><i class="fa-solid fa-check"></i>Blood Pressure: 119.55 mmHg</li>
                        <li><i class="fa-solid fa-xmark"></i>Respiratory Rate: 15 bpm</li>
                        <li><i class="fa-solid fa-xmark"></i>Blood Glucose: 170 mg/dL</li>
                        <li><i class="fa-solid fa-check"></i>Relatives: Ahmed Ali</li>
                    </ul>
                    <a href="medicalrecord_Doctor.html">
                        <button>View Medical Record</button>
                    </a>
                </div> --}}
                {{-- <div class="box">
                    <h2>Ahmed Osama</h2>
                    <p>Medical Record Number is 1111</p>
                    <span>CHD<span>/Patient</span></span>
                    <ul class="features">
                        <li><i class="fa-solid fa-check"></i>Heart Rate: 79.72 bph</li>
                        <li><i class="fa-solid fa-check"></i>Blood Pressure: 119.55 mmHg</li>
                        <li><i class="fa-solid fa-xmark"></i>Respiratory Rate: 15 bpm</li>
                        <li><i class="fa-solid fa-xmark"></i>Blood Glucose: 170 mg/dL</li>
                        <li><i class="fa-solid fa-check"></i>Relatives: Ahmed Ali</li>
                    </ul>
                    <a href="medicalrecord_Doctor.html">
                        <button>View Medical Record</button>
                    </a>
                </div> --}}
            </div>

        </main>

        <script src="../js/DoctorJS/script.js"></script>
</body>

</html>
