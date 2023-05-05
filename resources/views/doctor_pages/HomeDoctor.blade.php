<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="../css/DoctorCss/style.css">

    <title>AdminHub</title>

    <!--chartttttt-->
    <!--Donut Chart-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['case', 'number'],
                ['Stable', 50],
                ['Unstable', 20],
                ['Emergency', 30]
            ]);

            var options = {
                chartArea: {
                    left: 10,
                    top: 50,
                    width: '60%',
                    height: '60%'

                },
                title: 'TOTAL CASES',
                pieHole: 0.3,
                backgroundColor: 'transparent',
                colors: ['#3535f0', '#050596', '#05054d'],

            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }
    </script>
    <!--Column Chart-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['bar']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Day', 'Normal', 'Ubnormal', 'Emergency'],
                ['Last Week', 100, 20, 10],
                ['Yesterday', 200, 40, 20],
                ['Today', 150, 35, 14]
            ]);

            var options = {
                'width': 630,
                'height': 500,
                colors: ['#3535f0', '#050596', '#05054d'],
                backgroundColor: 'transparent',
                chart: {
                    title: 'TOTAL CASES',
                    subtitle: 'cases during last period',
                }

            };

            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>

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

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>

            </div>

            <ul class="box-info">
                <li>
                    <i class='bx bxs-badge-check'></i>

                    <span class="text">
						<h3>Stable Cases</h3>
						<p>{{ $stable_count }}</p>
					</span>
                </li>
                <li>
                    <i class='bx bxs-calendar-exclamation'></i>
                    <span class="text">
						<h3>Unstable Cases</h3>
						<p>{{ $unstable_count }}</p>
					</span>
                </li>

                <li>
                    <i class='bx bxs-alarm-exclamation'></i>
                    <span class="text">
						<h3> Emergency</h3>
						<p>{{ $emergancy_count }}</p>
					</span>
                </li>

            </ul>
            <!--chart-->
            <div class="charts">
                <div id="donutchart" style="width: 950px; height: 500px;"></div>
                <div id="columnchart_material" style="width: 750px; height: 500px;"></div>
            </div>
            <!--Table-->

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Unstable Cases</h3>
                        <i href="#" class='bx'>View All</i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Disease</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($table_show as $key => $value)


                            @php
                                $patient_name =\App\Models\Patient::where('MRN' , $value->MRN)->first();
                            @endphp
                            <tr>
                                <td>
                                    <img src="../asset/img/doctors/doctor-09.jpg">
                                    <p>{{ $patient_name->name  }}</p>
                                </td>
                                <td><span class="Disease">{{ $value->name }}</span></td>
                                <td><span class="status completed">{{ $value->status }}</span></td>
                                <td>
                                    <a href="/medicalrecord_Doctor/{{ $value->MRN }}">
                                        <button class="button button1">View</button></td>
                                </a>
                            </tr>
                            @endforeach
                             
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {!! $table_show->links() !!}
                    </div>
                </div>



        </main>
        <!-- MAIN -->
        <!-- </section> -->
        <!-- CONTENT -->


        <script src="../js/DoctorJS/script.js"></script>-->
</body>

</html>
