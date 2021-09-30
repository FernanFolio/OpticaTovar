require('./bootstrap')

window.addEventListener('DOMContentLoaded', async function () {
    // ----------------------------------------------------------
    //Chart JS
    // ---------------------------------------------------------
    if ($('#graphic-dashboard').length) {
        var data = await getSalesPerMonth()

        var salesChartData = {
            labels: [
                'Enero',
                'Febrero',
                'Marzo',
                'Abril',
                'Mayo',
                'Junio',
                'Julio',
                'Agosto',
                'Septiembre',
                'Octubre',
                'Noviembre',
                'Diciembre',
            ],
            datasets: [
                {
                    label: 'Ventas por mes',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: true,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data,
                },
            ],
        }

        var salesChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true,
            },
            scales: {
                xAxes: [
                    {
                        gridLines: {
                            display: true,
                        },
                    },
                ],
                yAxes: [
                    {
                        gridLines: {
                            display: true,
                        },
                        ticks: {
                            precision: 0,
                        },
                    },
                ],
            },
        }

        var salesChartCanvas = document.getElementById('revenue-chart-canvas').getContext('2d')

        var salesChart = new Chart(salesChartCanvas, {
            type: 'line',
            data: salesChartData,
            options: salesChartOptions,
        })

        // Donut Chart
        var data = await getSalesPerPlace()
        var pieData = {
            labels: ['En tienda', 'En la página'],
            datasets: [
                {
                    data,
                    backgroundColor: ['#f56954', '#f39c12'],
                },
            ],
        }
        var pieOptions = {
            legend: {
                display: true,
            },
            maintainAspectRatio: false,
            responsive: true,
        }

        var pieChartCanvas = $('#sales-chart-canvas').get(0).getContext('2d')

        // Create pie or douhnut chart
        var pieChart = new Chart(pieChartCanvas, {
            type: 'doughnut',
            data: pieData,
            options: pieOptions,
        })
    }

    // ----------------------------------------------------------
    //Calendar para el Dashboard
    // ----------------------------------------------------------
    if ($('#calendar').length) {
        $('#calendar').datetimepicker({
            format: 'L',
            inline: true,
        })
    }

    // ----------------------------------------------------------
    // Datatables
    // ----------------------------------------------------------
    if ($('#tabla').length) {
        $('#tabla')
            .DataTable({
                paging: true,
                lengthChange: true,
                searching: true,
                ordering: true,
                info: true,
                autoWidth: false,
                responsive: true,
                buttons: ['copy', 'csv', 'pdf', 'print'],
                language: {
                    paginate: {
                        next: 'Siguiente',
                        previous: 'Anterior',
                        last: 'Último',
                        first: 'Primero',
                    },
                    info: 'Mostrando _START_ - _END_ de _TOTAL_ resultados',
                    search: 'Buscar',
                    emptytable: 'No hay registros',
                    infoEmpty: '0 registros',
                },
            })
            .buttons()
            .container()
            .appendTo('#tabla_wrapper .col-md-6:eq(0)')
    }
})

async function getSalesPerMonth() {
    let response = await axios.get('/api/sales-per-month')
    const ventas = []

    response.data.forEach((mes) => {
        ventas.push(mes.ventas)
    })

    return ventas
}

async function getSalesPerPlace() {
    let response = await axios.get('/api/sales-per-place')
    let data = response.data
    return [data.sales_store, data.sales_page]
}
