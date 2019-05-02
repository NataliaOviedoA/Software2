@extends("layouts.app")

@section("name") Analizar @endsection

@section("content")

    <div class="row" >
        <div class="col-lg-12">
            <div class="view-header">
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-search"></i>
                </div>
                <div class="header-title">
                    <h3>Analizar cuenta</h3>
                    <small>
                        Utiliza Tweets Analyzer para analizar cuentas de Twitter.
                    </small>
                </div>
            </div>
            <hr>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12" id="search_row">
            <div id="panel1" class="panel panel-filled">
                <div class="loader">
                    <div class="loader-bar"></div>
                </div>
                <div class="panel-heading">
                    Introduzca una cuenta
                </div>
                <div class="panel-body">

                    <p>Ingrese la cuenta de Twitter a analizar. Copie el nick de la cuenta (por ejemplo, <code>@boliviadijono_</code>)
                        y hazle clic al botón "Analizar".</p>

                    {{--<form>--}}
                        <div class="form-group">
                            <label for="account">Cuenta</label>
                            <input type="text" class="form-control" id="account" name="account"
                                   placeholder="Cuenta">
                        </div>
                        <button type="button" id="analyzeButton" class="btn btn-default">Analizar</button>
                    {{--</form>--}}

                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12" id="result_header" >
            <div class="panel panel-filled">
                <div class="panel-body">
                    <div>
                        <i class="pe pe-7s-user c-accent fa-3x"></i>
                        <h2 class="m-t-xs m-b-none">
                            Cuenta del usuario analizada
                        </h2>
                        <small>
                            Los resultados de la cuenta analizada se mostrarán abajo.
                        </small>
                    </div>
                </div>
            </div>
            <div class="panel">

                <div class="panel-body">
                    <h4> Resultado de análisis - Personalidad</h4>

                    <p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                        took a galley of type and scrambled it to
                    </p>

                    {{--<div class="flot-chart  m-t-md m-b-xl" style="height: 200px">--}}
                        {{--<div class="flot-chart-content" id="flotProfile"></div>--}}
                    {{--</div>--}}

                    <div class="panel-body">
                        <div>
                            <canvas id="lineOptions" height="180"></canvas>
                        </div>
                    </div>

                    <table class="table table-striped">
                        <thead>
                        <tr>

                            <th>#</th>
                            <th>Nombre</th>
                            <th>Percentil</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Apertura al cambio (Openness to experience)</td>
                            <td id="td0">Inceptos Hymenaeos Ltd</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Responsabilidad (Conscientiousness)</td>
                            <td id="td1">Nec Euismod In Company</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Extraversión (Extraversion)</td>
                            <td id="td2">Erat Volutpat</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Coordialidad (Agreebleness)</td>
                            <td id="td3">Intellect</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Inestabilidad emocional (Rango emocional)</td>
                            <td id="td4">Nec Euismod In Company</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>

        <div class="col-lg-6 col-md-12" id="result_timeline" >
            <div class="panel">
                <div class="panel-body">
                    <h4> Actividad reciente</h4>
                    <div class="v-timeline vertical-container">
                        @php $i = 0; @endphp
                        @while($i < 5)
                            <div class="vertical-timeline-block">
                                <div class="vertical-timeline-icon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="vertical-timeline-content">
                                    <div class="p-sm">
                                        <span class="vertical-date pull-right"> <small>1 day ago</small> </span>

                                        <h2>Update profile</h2>

                                        <p>Change profile name and set new profile description</p>
                                    </div>
                                </div>
                            </div>
                            @php $i ++; @endphp
                        @endwhile
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12" id="anotherRow">
            <button id="anotherButton" class="btn btn-default"> Realizar otro análisis</button>
        </div>


    </div>
@endsection

@section("onready")
    <script src="{{ asset('vendor/chart.js/dist/Chart.min.js')}}"></script>
    <script>
        var globalOptions = {
            responsive: true,
            legend: {
                labels:{
                    fontColor:"#90969D"
                }
            },
            scales: {
                xAxes: [{
                    ticks: {
                        fontColor: "#90969D"
                    },
                    gridLines: {
                        color: "#37393F"
                    }
                }],
                yAxes: [{
                    ticks: {
                        fontColor: "#90969D"
                    },
                    gridLines: {
                        color: "#37393F"
                    }
                }]
            }
        };

        $(document).ready(function () {

            $('#result_header').hide();
            $('#result_timeline').hide();
            $('#anotherRow').hide();
        });

        $('#analyzeButton').on('click', function (e) {
            $('#result_header').hide();
            $('#result_timeline').hide();
            $('#anotherRow').hide();


            $('#panel1').toggleClass('ld-loading');

            let account = document.getElementById("account").value;

            let parametros = {
                account: account
            };

            $.ajax({
                type: "GET",
                url: "{{ route('analizarCuenta') }}",
                data: parametros,
            }).done(function (info) {

                console.log(info);
                let content = JSON.parse(info);

                console.log(content);

                /* RESULTADOS DE LA PERSONALIDAD */
                let personality = content.personality;

                let percentiles = [
                    personality[0].percentile,
                    personality[1].percentile,
                    personality[2].percentile,
                    personality[3].percentile,
                    personality[4].percentile,
                ];

                for (let i = 0; i < 5; i++) {
                    document.getElementById("td" + i).innerText = personality[i].percentile;
                }

                var lineData = {
                    labels: ["Apertura al cambio", "Responsabilidad", "Extraversión", "Coordialidad", "Inestabilidad emocional"],
                    datasets: [
                        {
                            label: "Personalidad",
                            backgroundColor: 'transparent',
                            borderColor: "#f6a821",
                            pointBorderWidth: 0,
                            pointRadius: 2,
                            pointBorderColor: '#f6a821',
                            borderWidth: 1,
                            data: percentiles
                        }
                    ]
                };

                let c1 = document.getElementById("lineOptions").getContext("2d");
                new Chart(c1, {type: 'line', data: lineData, options: globalOptions});

                /* RESULTADOS DE NECESECIDADES */

                // let
                //
                //
                //
                // var barData = {
                //     labels: ["January", "February", "March", "April", "May", "June", "July", "asd" ,"asdf", "asdf", "Asdf", "Asdf"],
                //     datasets: [
                //         {
                //             label: "Necesidade",
                //             backgroundColor: 'transparent',
                //             borderColor: "#f6a821",
                //             borderWidth: 1,
                //             data: [9, 8, 5, 6, 3, 2, 16]
                //         }
                //     ]
                // };
                //
                // var c3 = document.getElementById("barOptions").getContext("2d");
                // new Chart(c3, {type: 'bar', data: barData, options: globalOptions});

                $('#panel1').toggleClass('ld-loading');
                $('#search_row').hide(1000);
                $('#result_header').show(1000);
                $('#result_timeline').show(1000);
                $('#anotherRow').show(1000);
            });

            // $('#panel2').toggleClass('ld-loading');
            // setTimeout(function() {
            //     $('#panel1').toggleClass('ld-loading');
            //     $('#search_row').hide(1000);
            //     $('#result_header').show(1000);
            //     $('#result_timeline').show(1000);
            //     $('#anotherRow').show(1000);
            // }, (3 * 1000));

        });

        $('#anotherButton').on('click', function () {
            $('#search_row').show(1000);
            $('#result_header').hide(1000);
            $('#result_timeline').hide(1000);
            $('#anotherRow').hide();
            $('#account').val("");
        })
    </script>
@endsection
