var a = "#c3_chart_donut";
if ($(a).length) {
    var n = c3.generate({
        bindto: a,
        data: {
            columns: donutChart.columns,
            type: "donut",
            onclick: function(t, e) {
                console.log("onclick", t, e)
            },
            onmouseover: function(t, e) {
                console.log("onmouseover", t, e)
            },
            onmouseout: function(t, e) {
                console.log("onmouseout", t, e)
            }
        },
        donut: {
            title: donutChart.title,
            width: 40
        },
        color: {
            pattern: ["#1f77b4", "#ff7f0e", "#2ca02c", "#d62728", "#9467bd", "#8c564b", "#e377c2", "#7f7f7f", "#bcbd22", "#17becf"]
        }
    });
}

var t = "#c3_chart_bar_stacked";
if ($(t).length) {
    var e = c3.generate({
        bindto: t,
        data: {
            columns: stackChart.columns,
            type: "bar",
            groups: [
                ["data1", "data2"]
            ]
        },
        grid: {
            y: {
                lines: [{
                    value: 0
                }]
            }
        },
        color: {
            pattern: ["#1f77b4", "#ff7f0e", "#2ca02c", "#d62728", "#9467bd", "#8c564b", "#e377c2", "#7f7f7f", "#bcbd22", "#17becf"]
        }
    });
    $(t).waypoint({
        handler: function() {
            setTimeout(function() {
                e.groups([
                    ["data1", "data2", "data3"]
                ])
            }, 1e3), setTimeout(function() {
                e.load({
                    columns: [
                        ["data4", 100, -50, 150, 200, -300, -100]
                    ]
                })
            }, 1500), setTimeout(function() {
                e.groups([
                    ["data1", "data2", "data3", "data4"]
                ])
            }, 2e3), this.destroy()
        },
        context: "#page_content",
        offset: "80%"
    }), $window.on("debouncedresize", function() {
        e.resize()
    })


    }