$(document).on('ready', function() {

    var diasAtras = 9;
    var d = new Date(Date.now() - (86400000 * diasAtras));
    var month = d.getMonth() + 1;
    var day = d.getDate();
    var ayer = d.getFullYear() + '-' + (('' + month).length < 2 ? '0' : '') + month + '-' + (('' + day).length < 2 ? '0' : '') + day;

    $('#dateInput').val(ayer);

    // let datos = { 'fecha' : ayer }
    // $.post( "tabla.php", datos)
    //     .done(function( data ) 
    //       {
    //         $("#tableBody").html(data);
    //       }
    //     );
    tablaExiste = 0;


    function tablaJson() {
        //  $('#tablaJson').DataTable().fnDestroy();		 
        tablaExiste = 1;
        oTableJson = $('#tablaJson').DataTable({
            // fixedHeader:    true,
            // autoWidth: true,
            scrollY: 500,
            scrollX: true,
            scrollCollapse: true,
            // paging:         false,

            fixedColumns: {
                leftColumns: 2
            },
            // responsive: true,
            dom: '   rftp  <"clear"B> ',
            buttons: [{
                extend: 'collection',
                text: 'Exportar',
                buttons: [{
                        extend: 'copyHtml5',
                        exportOptions: {
                            columns: [0]
                        }
                    },
                    'excel',
                    'csv',
                    'pdf',
                    'print'
                ],

            }],
            'ajax': {
                'url': 'php/tablaJson.php',
                'type': 'post'
            },
            "columns": [
                { "data": "DNI" },
                { "data": "AGENTE" },
                { "data": "SUPERVISOR" },
                { "data": "Atendidas" },
                { "data": "Atendidas_30" },
                { "data": "Abandonada" },
                { "data": "Llamada_Salida" },
                { "data": "AHT" },
                { "data": "AHT_CHAT" },
                { "data": "AHT_PHONE" },
                { "data": "AHT_EMAIL" },
                { "data": "AHT_MESSAGING" },
                { "data": "Recontacto" },
                { "data": "Paymentlink" },
                { "data": "Revenue" },
                { "data": "NPS" },
                { "data": "CSAT" },
                { "data": "FCR" }
            ],
            "initComplete": function(settings, json) {
                /**Inicio - Funcion para Sumar Dentro de la tabla */
                $.fn.DataTable.Api.register('sum()', function() {
                    var sum = 0;
                    for (var i = 0, ien = this.length; i < ien; i++) {
                        sum += parseInt(this[i]);
                    }
                    return sum;
                });

                $.fn.DataTable.Api.register('avg()', function() {
                    var sum = 0;
                    var cantidad = 0;
                    for (var i = 0, ien = this.length; i < ien; i++) {
                        cantidad += 1;
                        var myRegexp = /\w+$/;
                        var match = myRegexp.exec(this[i]);
                        sum += parseInt(match);
                    }
                    var avgApi = sum / cantidad;
                    return avgApi.toFixed(0);
                });

                /** Fin - Funcion para Sumar Dentro de la tabla */
                let totalAtendidas = oTableJson.column(3).data().sum();
                $('#casosAtendidos').html('');
                $('#casosAtendidos').html(totalAtendidas);

                let totalAtendidasAvg = oTableJson.column(7).data().avg();
                $('#avgAht').html('');
                $('#avgAht').html(totalAtendidasAvg + ' Segs');

                let totalAtendidasRecontacto = oTableJson.column(12).data().sum();
                $('#recontacto').html('');
                $('#recontacto').html(totalAtendidasRecontacto);

                let totalAtendidasAbandonadas = oTableJson.column(5).data().sum();
                $('#abandonadas').html('');
                $('#abandonadas').html(totalAtendidasAbandonadas);


            }
        });
    }


    function cargarTabla() {
        // let fechaInput = $('#dateInput').val();
        // let fecha = fechaInput;
        // let datos = { 'fecha': fecha }

        // $.post("tabla.php", datos)
        //     .done(function(data) {
        //         // $("#tableBody").html('');
        //         $("#tableBody").html(data);
        //     });

        // jQuery.noConflict();
        // tablaJson(datos);

        if (tablaExiste == 0) {
            jQuery.noConflict();
            tablaJson();
        } else {
            jQuery.noConflict();
            console.log('destruir 1 ');
            oTableJson.destroy();
            console.log('destruir 2 ');
            tablaJson();
        }
    };

    tablaJson();

    $('#btn-ok').click(function() {
        cargarTabla();
    });



    // GRAFICOS INICIO
    promAHT = 0;
    promAtendidas = 0;

    $.ajax({
        url: './php/funciones/grafico_json.php',
        type: 'GET',
        cache: false,
        dataType: 'json',
        success: function(data) {
            console.log(data);

            let dashGrafico_1 = [];

            let valuesAtendidas = [];
            $.each(data, function(i, v) {
                valuesAtendidas.push({ 'x': v.DIA, 'y': v.Atendidas });
                promAtendidas += v.Atendidas;
            });

            updPromAtendidas(promAtendidas);

            dashGrafico_1.push({
                "key": "Atendidas",
                "bar": true,
                "values": valuesAtendidas
            })

            let valuesAtendidas30 = [];
            $.each(data, function(i, v) {
                valuesAtendidas30.push({ 'x': v.DIA, 'y': v.Atendidas_30 })
            });
            dashGrafico_1.push({
                "key": "Atendidas < 30",
                "values": valuesAtendidas30
            })

            let valuesAbandonada = [];
            $.each(data, function(i, v) {
                valuesAbandonada.push({ 'x': v.DIA, 'y': v.Abandonada })
            });
            dashGrafico_1.push({
                "key": "Abandonadas",
                "values": valuesAbandonada
            })

            let valuesLlamada_Salida = [];
            $.each(data, function(i, v) {
                valuesLlamada_Salida.push({ 'x': v.DIA, 'y': v.Llamada_Salida })
            });
            dashGrafico_1.push({
                "key": "Salidas",
                "area": true,
                "color": '#e31414',
                "values": valuesLlamada_Salida
            })

            data_grafico1 = dashGrafico_1;

            xLabel = 'Grafico de Llamadas';
            yLabel = 'Llamadas (c)';

            nv.addGraph(function() {
                var chart = nv.models.linePlusBarChart() // Initialise the lineChart object.
                    .margin({ top: 30, right: 60, bottom: 50, left: 70 })
                ""
                chart.xAxis
                    .axisLabel(xLabel) // Set the label of the xAxis (Vertical)
                    .tickFormat(function(d) { return ' Dia:' + d; });

                chart.y1Axis
                    .tickFormat(function(d) { return 'Atendidas: ' + d; });
                chart.y2Axis
                    .tickFormat(function(d) { return d });

                chart.bars.forceY([0]);

                d3.select('#averageDegreesLineChart svg') // Select the ID of the html element we defined earlier.
                    .datum(data_grafico1) // Pass in the JSON
                    .transition().duration(500) // Set transition speed
                    .call(chart) // Call & Render the chart
                ;
                nv.utils.windowResize(chart.update); // Intitiate listener for window resize so the chart responds and changes width.
                return;
            });



            let dashGrafico_2 = [];

            GaugeAHTSuma = 0;

            let valuesAHT = [];

            $.each(data, function(i, v) {
                valuesAHT.push({ 'x': v.DIA, 'y': v.AHT });
                GaugeAHTSuma += parseInt(v.AHT);
            });

            promAHT = GaugeAHTSuma / valuesAHT.length;

            updPromAHT(promAHT);

            dashGrafico_2.push({
                "key": "AHT",
                "bar": true,
                "values": valuesAHT
            })

            let valuesAHT_CHAT = [];
            $.each(data, function(i, v) {
                valuesAHT_CHAT.push({ 'x': v.DIA, 'y': v.AHT_CHAT })
            });
            dashGrafico_2.push({
                "key": "AHT_CHAT",
                // "bar": true,
                "values": valuesAHT_CHAT
            })

            let valuesAHT_PHONE = [];
            $.each(data, function(i, v) {
                valuesAHT_PHONE.push({ 'x': v.DIA, 'y': v.AHT_PHONE })
            });
            dashGrafico_2.push({
                "key": "AHT_PHONE",
                // "bar": true,
                "values": valuesAHT_PHONE
            })

            let valuesAHT_EMAIL = [];
            $.each(data, function(i, v) {
                valuesAHT_EMAIL.push({ 'x': v.DIA, 'y': v.AHT_EMAIL })
            });
            dashGrafico_2.push({
                "key": "AHT_EMAIL",
                // "bar": true,
                "values": valuesAHT_EMAIL
            })

            let valuesAHT_MESSAGING = [];
            $.each(data, function(i, v) {
                valuesAHT_MESSAGING.push({ 'x': v.DIA, 'y': v.AHT_MESSAGING })
            });
            dashGrafico_2.push({
                "key": "AHT_MESSAGING",
                // "bar": true,
                "values": valuesAHT_MESSAGING
            })

            data_grafico2 = dashGrafico_2;

            xLabel = 'Grafico de Tiempos';
            yLabel = 'Segundos (c)';

            nv.addGraph(function() {
                var chart = nv.models.linePlusBarChart() // Initialise the lineChart object.
                    .margin({ top: 30, right: 60, bottom: 50, left: 70 })
                ""
                chart.xAxis
                    .axisLabel(xLabel) // Set the label of the xAxis (Vertical)
                    .tickFormat(function(d) { return ' Dia:' + d; });

                chart.y1Axis
                    .tickFormat(function(d) { return 'Segundos: ' + d; });
                chart.y2Axis
                    .tickFormat(function(d) { return d });

                chart.bars.forceY([0]);

                d3.select('#grafico2 svg') // Select the ID of the html element we defined earlier.
                    .datum(data_grafico2) // Pass in the JSON
                    .transition().duration(500) // Set transition speed
                    .call(chart) // Call & Render the chart
                ;
                nv.utils.windowResize(chart.update); // Intitiate listener for window resize so the chart responds and changes width.
                return;
            });


        }
    });


    function updPromAHT(data) {
        promAHT = data;

        var chartDom = document.getElementById('main');
        var myChart = echarts.init(chartDom);
        var option;

        option = {
            series: [{
                type: 'gauge',
                startAngle: 180,
                endAngle: 0,
                min: 0,
                max: 700,
                splitNumber: 8,
                axisLine: {
                    lineStyle: {
                        width: 6,
                        color: [
                            [0.25, '#7CFFB2'],
                            [0.5, '#58D9F9'],
                            [0.75, '#FDDD60'],
                            [1, '#FF6E76']
                        ]
                    }
                },
                pointer: {
                    icon: 'path://M12.8,0.7l12,40.1H0.7L12.8,0.7z',
                    length: '12%',
                    width: 20,
                    offsetCenter: [0, '-60%'],
                    itemStyle: {
                        color: 'auto'
                    }
                },
                axisTick: {
                    length: 12,
                    lineStyle: {
                        color: 'auto',
                        width: 2
                    }
                },
                splitLine: {
                    length: 20,
                    lineStyle: {
                        color: 'auto',
                        width: 5
                    }
                },
                axisLabel: {
                    color: '#fff',
                    fontSize: 10,
                    distance: -70,
                    formatter: function(value) {
                        if (value === 600) {
                            return 'Malo';
                        } else if (value === 500) {
                            return 'Regular';
                        } else if (value === 300) {
                            return 'Bueno';
                        } else if (value === 1) {
                            return 'Excelente';
                        }
                    }
                },
                title: {
                    color: '#fff',
                    offsetCenter: [0, '-35%'],
                    fontSize: 30
                },
                detail: {
                    fontSize: 50,
                    offsetCenter: [0, '-10%'],
                    valueAnimation: true,
                    formatter: function(value) {
                        return Math.round(value);
                    },
                    color: 'auto'
                },
                data: [{
                    value: promAHT,
                    name: 'AHT'
                }]
            }]
        };
        option && myChart.setOption(option);

    }

    function updPromAtendidas(data) {
        promAtendidas = data;
        console.log(promAtendidas);

        var chartDom = document.getElementById('mainAtendidas');
        var myChart = echarts.init(chartDom);
        var option;

        option = {
            series: [{
                type: 'gauge',
                startAngle: 180,
                endAngle: 0,
                min: 0,
                max: 300,
                splitNumber: 8,
                axisLine: {
                    lineStyle: {
                        width: 6,
                        color: [
                            [0.25, '#7CFFB2'],
                            [0.5, '#58D9F9'],
                            [0.75, '#FDDD60'],
                            [1, '#FF6E76']
                        ]
                    }
                },
                pointer: {
                    icon: 'path://M12.8,0.7l12,40.1H0.7L12.8,0.7z',
                    length: '12%',
                    width: 20,
                    offsetCenter: [0, '-60%'],
                    itemStyle: {
                        color: 'auto'
                    }
                },
                axisTick: {
                    length: 12,
                    lineStyle: {
                        color: 'auto',
                        width: 2
                    }
                },
                splitLine: {
                    length: 20,
                    lineStyle: {
                        color: 'auto',
                        width: 5
                    }
                },
                axisLabel: {
                    color: '#fff',
                    fontSize: 10,
                    distance: -70,
                    formatter: function(value) {
                        if (value === 600) {
                            return 'Malo';
                        } else if (value === 500) {
                            return 'Regular';
                        } else if (value === 300) {
                            return 'Bueno';
                        } else if (value === 1) {
                            return 'Excelente';
                        }
                    }
                },
                title: {
                    color: '#fff',
                    offsetCenter: [0, '-35%'],
                    fontSize: 30
                },
                detail: {
                    fontSize: 50,
                    offsetCenter: [0, '-10%'],
                    valueAnimation: true,
                    formatter: function(value) {
                        return Math.round(value);
                    },
                    color: 'auto'
                },
                data: [{
                    value: promAtendidas,
                    name: 'Atendidas'
                }]
            }]
        };
        option && myChart.setOption(option);

    }
    // GRAFICOS FIN

});