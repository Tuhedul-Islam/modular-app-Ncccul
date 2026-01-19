$(function () {
	"use strict";

	// chart 6
    var options = {
        series: [{
            name: "Messages",
            data: [55, 25, 50, 75]
        }],
        chart: {
            foreColor: '#9a9797',
            type: "bar",
            //width: 130,
            height: 335,
            toolbar: {
                show: !1
            },
            zoom: {
                enabled: !1
            },
            dropShadow: {
                enabled: 0,
                top: 3,
                left: 14,
                blur: 4,
                opacity: .12,
                color: "#8932ff"
            },
            sparkline: {
                enabled: 0
            }
        },
        markers: {
            size: 0,
            colors: ["#8932ff"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
                size: 7
            }
        },
        grid: {
            show: true,
            borderColor: '#ededed',
            strokeDashArray: 4,
        },
        plotOptions: {
            bar: {
                horizontal: !1,
                columnWidth: "25%",
                distributed: true,
                endingShape: "rounded"
            }
        },
        dataLabels: {
            enabled: !1
        },
        legend: {
            show: false
        },
        stroke: {
            show: !0,
            width: 0,
            curve: "smooth"
        },
        colors: ["#3461ff"],
        xaxis: {
            categories: ["Sign up", "Account Open", "Loan Application", "Account Closing"],
            axisBorder: {
                show: true,
            },
        },
        tooltip: {
            theme: "dark",
            fixed: {
                enabled: !1
            },
            x: {
                show: !1
            },
            y: {
                title: {
                    formatter: function(e) {
                        return ""
                    }
                }
            },
            marker: {
                show: !1
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart6"), options);
    chart.render();
	
	// chart 9
	var options = {
		series: [44, 55],
		labels: ['Male', 'Female'],
		legend: {
			position: 'top',          // Move legend below the chart
			horizontalAlign: 'right',   // Arrange labels horizontally
			fontSize: '14px',
			labels: {
			colors: ['#000']           // Optional: legend text color
			}
		},
		chart: {
			foreColor: '#9ba7b2',
			height: 380,
			type: 'donut',
		},
		colors: ["#3461ff", "#32bfff"],
		plotOptions: {
			pie: {
			donut: {
				size: '75%', // default ~65% → smaller = thicker ring
			}
			}
		},
		responsive: [{
			breakpoint: 480,
			options: {
				chart: {
					height: 320
				},
				legend: {
					position: 'bottom'
				}
			}
		}]
	};
	var chart = new ApexCharts(document.querySelector("#chart9"), options);
	chart.render();

		
	// chart 19
	var options = {
		series: [44, 55],
		labels: ['Ccollection', 'Due'],
		legend: {
			position: 'top',          // Move legend below the chart
			horizontalAlign: 'right',   // Arrange labels horizontally
			fontSize: '14px',
			labels: {
			colors: ['#000']           // Optional: legend text color
			}
		},
		chart: {
			foreColor: '#9ba7b2',
			height: 380,
			type: 'donut',
		},
		colors: ["#12bf24", "#e72e2e"],
		plotOptions: {
			pie: {
				donut: {
					size: '75%', // default ~65% → smaller = thicker ring
				}
			}
		},
		responsive: [{
			breakpoint: 480,
			options: {
				chart: {
					height: 320
				},
				legend: {
					position: 'bottom'
				}
			}
		}]
	};
	var chart = new ApexCharts(document.querySelector("#chart19"), options);
	chart.render();
	
	
	
});