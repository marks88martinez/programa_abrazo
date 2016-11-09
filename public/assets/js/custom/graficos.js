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