@extends("layouts.app")

@section("name") Analizar @endsection

@section("content")

    <div class="row">
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

        <div class="col-lg-6 col-md-12" id="result_header">
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
                    <h4> Resultado de análisis</h4>

                    <p class="small">
                        Big Five es uno de los modelos de personalidad más estudiados que fueron desarrollados por
                        psicólogos. Es el modelo de personalidad más utilizado para describir cómo una persona
                        generalmente se relaciona con el mundo.
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
                            <th>Project</th>
                            <th>Company</th>
                            <th>Task</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Adventurousness
                            </td>
                            <td>Inceptos Hymenaeos Ltd</td>
                            <td>20%</td>
                            <td>Jul 14, 2016</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Artistic interests</td>
                            <td>Nec Euismod In Company</td>
                            <td>40%</td>
                            <td>Jul 16, 2016</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Emotionality</td>
                            <td>Erat Volutpat</td>
                            <td>75%</td>
                            <td>Jul 18, 2016</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Imagination</td>
                            <td>Intellect</td>
                            <td>18%</td>
                            <td>Jul 22, 2016</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Authority-challenging</td>
                            <td>Nec Euismod In Company</td>
                            <td>40%</td>
                            <td>Jul 16, 2016</td>
                        </tr>


                        </tbody>
                    </table>

                    <h4> Resultado de análisis - Necesidades</h4>

                    <p class="small">
                        Las necesidades son un aspecto importante del comportamiento humano. La literatura de
                        investigación sugiere que varios tipos de necesidades humanas son universales e influyen
                        directamente en el comportamiento del consumidor. Las doce categorías de necesidades reportadas
                        por el servicio se describen en la literatura de marketing como deseos que las personas esperan
                        cumplir cuando consideran un producto o servicio.
                    </p>

                    <div class="panel-body">
                        <div>
                            <canvas id="barOptions" height="180"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-6 col-md-12" id="result_timeline">
            <div class="panel">
                <div class="panel-body">
                    <h4> Resultado de análisis - Valores</h4>

                    <p class="small">
                        Los valores transmiten lo que es más importante para un individuo. Son “objetivos deseables,
                        trans-situacionales, que varían en importancia, que sirven como principios rectores en la vida
                        de las personas”.
                    </p>

                    <div class="panel-body">
                        <div>
                            <canvas id="barOptions1" height="180"></canvas>
                        </div>
                    </div>


                    <h4> Actividad reciente</h4>
                    <div class="v-timeline vertical-container" id="timeline">
                        {{--@php $i = 0; @endphp--}}
                        {{--@while($i < 5)--}}
                            {{--<div class="vertical-timeline-block">--}}
                                {{--<div class="vertical-timeline-icon">--}}
                                    {{--<i class="fa fa-user"></i>--}}
                                {{--</div>--}}
                                {{--<div class="vertical-timeline-content">--}}
                                    {{--<div class="p-sm">--}}
                                        {{--<span class="vertical-date pull-right"> <small>1 day ago</small> </span>--}}

                                        {{--<h2>Update profile</h2>--}}

                                        {{--<p>Change profile name and set new profile description</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--@php $i ++; @endphp--}}
                        {{--@endwhile--}}
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
    <script>
        var globalOptions = {
            responsive: true,
            legend: {
                labels: {
                    fontColor: "#90969D"
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

            var data = [
                {
                    data: [[1, 4], [2, 5], [3, 7], [4, 4], [5, 8], [6, 9], [7, 11], [8, 10], [9, 8], [10, 5], [11, 4], [12, 3]]
                }
            ];

            var chartUsersOptions2 = {
                series: {
                    splines: {
                        show: true,
                        tension: 0.4,
                        lineWidth: 2,
                        fill: false
                    },
                },
                legend: {
                    show: false
                },
                grid: {
                    borderWidth: 0
                }
            };

            $.plot($("#flotProfile"), data, chartUsersOptions2);

            // $('#panel1').toggleClass('ld-loading');
        });


        $('#analyzeButton').on('click', function (e) {
            $('#result_header').hide();
            $('#result_timeline').hide();
            $('#anotherRow').hide();


            $('#panel1').toggleClass('ld-loading');

            {{--let account = document.getElementById("account").value;--}}

                // console.log(info);
                let content = JSON.parse(info);

                // console.log(content.insights);

                /* ACTIVIDAD RECIENTE */

                let tweets = content.tweets.contentItems;
                console.log(tweets);
                let str = "";

                for (let i = 0; i < 6; i++) {
                    str += '                            <div class="vertical-timeline-block">\n' +
                        '                                <div class="vertical-timeline-icon">\n' +
                        '                                    <i class="fa fa-user"></i>\n' +
                        '                                </div>\n' +
                        '                                <div class="vertical-timeline-content">\n' +
                        '                                    <div class="p-sm">\n' +
                        '                                        <span class="vertical-date pull-right"> <small>' + tweets[i].date + '</small> </span>\n' +
                        '                                        <h2>' + tweets[i].usuario + '</h2>\n' +
                        '                                        <p>' + tweets[i].content + '</p>\n' +
                        '                                    </div>\n' +
                        '                                </div>\n' +
                        '                            </div>';
                }

                console.log("miau: " + str);
                $("#timeline").append(str);

                content = content.insights;

                {{--console.log(info);--}}

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

                let necesidades = [];
                let needs = content.needs;

                for (let i = 0; i < needs.length; i++) {
                    necesidades.push(needs[i].percentile);
                }

                let barData = {
                    labels: ["Dasafío", "Cercanía", "Curiosidad", "Emoción", "Armonía", "Ideal", "Libertad", "Amor", "Practicidad", "Autoexpresión", "Estabilidad", "Estructura"],
                    datasets: [
                        {
                            label: "Necesidades",
                            backgroundColor: 'transparent',
                            borderColor: "#f6a821",
                            borderWidth: 1,
                            data: necesidades
                        }
                    ]
                };

                let c3 = document.getElementById("barOptions").getContext("2d");
                new Chart(c3, {type: 'bar', data: barData, options: globalOptions});

                /* RESULTADOS DE VALORES */

                let valores = [];
                let values = content.values;

                for (let i = 0; i < values.length; i++) {
                    valores.push(values[i].percentile);
                }

                barData = {
                    labels: ["Conservación", "Apertura al cambio", "Hedonismo", "Auto-mejora", "Autotrascendencia"],
                    datasets: [
                        {
                            label: "Valores",
                            backgroundColor: 'transparent',
                            borderColor: "#f6a821",
                            borderWidth: 1,
                            data: valores
                        }
                    ]
                };

                let c4 = document.getElementById("barOptions1").getContext("2d");
                new Chart(c4, {type: 'bar', data: barData, options: globalOptions});


            // $('#panel2').toggleClass('ld-loading');
            setTimeout(function() {
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