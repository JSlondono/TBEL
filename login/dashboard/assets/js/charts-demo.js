'use strict';



window.chartColors = {
    green: '#D2B4DE', 
    blue: '#BCEEEB', 
    gray: '#a9b5c9',
    text: '#252930',
    border: '#e7e9ed'
};

/* Random number generator for demo purpose */
var randomDataPoint = function() { return Math.round(Math.random() * 100) };


//Area line Chart Demo

var lineChartConfig = {
    type: 'line',

    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'],

        datasets: [{
            label: 'Ventas totales',
            backgroundColor: "#FCF1FF",
            borderColor: "#D2B4DE",
            data: [
                randomDataPoint(),
                randomDataPoint(),
                randomDataPoint(),
                randomDataPoint(),
                randomDataPoint(),
                randomDataPoint(),
                randomDataPoint()
            ],
        }]
    },
    options: {
        responsive: true,

        legend: {
            display: true,
            position: 'bottom',
            align: 'end',
        },

        tooltips: {
            mode: 'index',
            intersect: false,
            titleMarginBottom: 10,
            bodySpacing: 10,
            xPadding: 16,
            yPadding: 16,
            borderColor: window.chartColors.border,
            borderWidth: 1,
            backgroundColor: '#fff',
            bodyFontColor: window.chartColors.text,
            titleFontColor: window.chartColors.text,
            callbacks: {
                label: function(tooltipItem, data) {
                    return tooltipItem.value + '%';
                }
            },


        },
        hover: {
            mode: 'nearest',
            intersect: true
        },
        scales: {
            xAxes: [{
                display: true,
                gridLines: {
                    drawBorder: false,
                    color: window.chartColors.border,
                },
                scaleLabel: {
                    display: false,

                }
            }],
            yAxes: [{
                display: true,
                gridLines: {
                    drawBorder: false,
                    color: window.chartColors.border,
                },
                scaleLabel: {
                    display: false,
                },
                ticks: {
                    beginAtZero: true,
                    userCallback: function(value, index, values) {
                        return value.toLocaleString() + '%';
                    }
                },
            }]
        }
    }
};



//Bar Chart Demo

var barChartConfig = {
    type: 'bar',

    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'],
        datasets: [{
                label: 'Me gustas',
                backgroundColor: "#CCBCEE", //color morado
                hoverBackgroundColor: "#A276FF",


                data: [
                    randomDataPoint(),
                    randomDataPoint(),
                    randomDataPoint(),
                    randomDataPoint(),
                    randomDataPoint(),
                    randomDataPoint(),
                    randomDataPoint()
                ]
            },
            {
                label: 'Añadir al carrito',
                backgroundColor: "#BCEEEB", //Color azul claro semi oscuro
                hoverBackgroundColor: "#76F3FF",


                data: [
                    randomDataPoint(),
                    randomDataPoint(),
                    randomDataPoint(),
                    randomDataPoint(),
                    randomDataPoint(),
                    randomDataPoint(),
                    randomDataPoint()
                ]
            }
        ]
    },
    options: {
        responsive: true,
        legend: {
            position: 'bottom',
            align: 'end',
        },

        tooltips: {
            mode: 'index',
            intersect: false,
            titleMarginBottom: 10,
            bodySpacing: 10,
            xPadding: 16,
            yPadding: 16,
            borderColor: window.chartColors.border,
            borderWidth: 1,
            backgroundColor: '#fff',
            bodyFontColor: window.chartColors.text,
            titleFontColor: window.chartColors.text,
            callbacks: {
                label: function(tooltipItem, data) {
                    return tooltipItem.value + '%';
                }
            },


        },
        scales: {
            xAxes: [{
                display: true,
                gridLines: {
                    drawBorder: false,
                    color: window.chartColors.border,
                },

            }],
            yAxes: [{
                display: true,
                gridLines: {
                    drawBorder: false,
                    color: window.chartColors.borders,
                },
                ticks: {
                    beginAtZero: true,
                    userCallback: function(value, index, values) {
                        return value + '%';
                    }
                },


            }]
        }

    }
}



// Pie Chart Demo

var pieChartConfig = {
    type: 'pie',
    data: {
        datasets: [{
            data: [
                randomDataPoint(),
                randomDataPoint(),
                randomDataPoint(),
            ],
            backgroundColor: [
                window.chartColors.green,
                window.chartColors.blue,
                window.chartColors.gray,

            ],
            label: 'Dataset 1'
        }],
        labels: [
            '1° Trimestre',
            '2° Trimestre',
            '3° Trimestre',
        ]
    },
    options: {
        responsive: true,
        legend: {
            display: true,
            position: 'bottom',
            align: 'center',
        },

        tooltips: {
            titleMarginBottom: 10,
            bodySpacing: 10,
            xPadding: 16,
            yPadding: 16,
            borderColor: window.chartColors.border,
            borderWidth: 1,
            backgroundColor: '#fff',
            bodyFontColor: window.chartColors.text,
            titleFontColor: window.chartColors.text,

            
            callbacks: {
                label: function(tooltipItem, data) {
                    //get the concerned dataset
                    var dataset = data.datasets[tooltipItem.datasetIndex];
                    //calculate the total of this data set
                    var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                        return previousValue + currentValue;
                    });
                    //get the current items value
                    var currentValue = dataset.data[tooltipItem.index];
                    //calculate the precentage based on the total and current item, also this does a rough rounding to give a whole number
                    var percentage = Math.floor(((currentValue / total) * 100) + 0.5);

                    return percentage + "%";
                },
            },


        },
    }
};


// Doughnut Chart Demo


var doughnutChartConfig = {
    type: 'doughnut',
    data: {
        datasets: [{
            data: [
                randomDataPoint(),
                randomDataPoint(),
                randomDataPoint(),
            ],
            backgroundColor: [
                window.chartColors.green,
                window.chartColors.blue,
                window.chartColors.gray,

            ],
            label: 'Dataset 1'
        }],
        labels: [
            '$55.800',
            '$14.600',
            '$6.800',
        ]
    },
    options: {
        responsive: true,
        legend: {
            display: true,
            position: 'bottom',
            align: 'center',
        },

        tooltips: {
            titleMarginBottom: 10,
            bodySpacing: 10,
            xPadding: 16,
            yPadding: 16,
            borderColor: window.chartColors.border,
            borderWidth: 1,
            backgroundColor: '#fff',
            bodyFontColor: window.chartColors.text,
            titleFontColor: window.chartColors.text,

            animation: {
                animateScale: true,
                animateRotate: true
            },

            /* Display % in tooltip - https://stackoverflow.com/questions/37257034/chart-js-2-0-doughnut-tooltip-percentages */
            callbacks: {
                label: function(tooltipItem, data) {
                    //get the concerned dataset
                    var dataset = data.datasets[tooltipItem.datasetIndex];
                    //calculate the total of this data set
                    var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                        return previousValue + currentValue;
                    });
                    //get the current items value
                    var currentValue = dataset.data[tooltipItem.index];
                    //calculate the precentage based on the total and current item, also this does a rough rounding to give a whole number
                    var percentage = Math.floor(((currentValue / total) * 100) + 0.5);

                    return percentage + "%";
                },
            },


        },
    }
};



// Generate charts on load
window.addEventListener('load', function() {

    var lineChart = document.getElementById('chart-line').getContext('2d');
    window.myLine = new Chart(lineChart, lineChartConfig);

    var barChart = document.getElementById('chart-bar').getContext('2d');
    window.myBar = new Chart(barChart, barChartConfig);

    var pieChart = document.getElementById('chart-pie').getContext('2d');
    window.myPie = new Chart(pieChart, pieChartConfig);

    var doughnutChart = document.getElementById('chart-doughnut').getContext('2d');
    window.myDoughnut = new Chart(doughnutChart, doughnutChartConfig);


});