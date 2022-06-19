/* global Chart */

/**
 * --------------------------------------------------------------------------
 * CoreUI Boostrap Admin Template (v4.1.1): main.js
 * Licensed under MIT (https://coreui.io/license)
 * --------------------------------------------------------------------------
 */
// random Numbers
const random = () => Math.round(Math.random() * 100); // eslint-disable-next-line no-unused-vars

let polarAreaChart, pieChart, radarChart, doughnutChart, barChart, barChart2;

const xhttp = new XMLHttpRequest();
// Instantiating the request object
xhttp.open("GET", "http://localhost/ts/admin/getReports");
xhttp.onload = function () {
  const resp = JSON.parse(this.responseText);
  console.log(resp.message);
  const data = resp.report;

  //xhttp.open("GET", "ajax_info.txt", true);
  const pieData = data.activesPercentage;
  const dognutData = data.dognutStats;
  const barData = data.barStats;
  let barDataSet1 = [];
  let barDataSet2 = [];
  barData.pastMonth.forEach((el, i) => {
    if (i != 31) {
      barDataSet1[i] = el;
      barDataSet2[i] = (el / barData.pastMonth[31]) * 100;
    }
  });
  console.log("pieData", pieData);
  console.log("dognutData", dognutData);
  console.log("barData", barData);

  // lineChart = new Chart(document.getElementById("canvas-1"), {
  //   type: "line",
  //   data: {
  //     labels: ["January", "February", "March", "April", "May", "June", "July"],
  //     datasets: [
  //       {
  //         label: "My First dataset",
  //         backgroundColor: "rgba(220, 220, 220, 0.2)",
  //         borderColor: "rgba(220, 220, 220, 1)",
  //         pointBackgroundColor: "rgba(220, 220, 220, 1)",
  //         pointBorderColor: "#fff",
  //         data: [
  //           random(),
  //           random(),
  //           random(),
  //           random(),
  //           random(),
  //           random(),
  //           random(),
  //         ],
  //       },
  //       {
  //         label: "My Second dataset",
  //         backgroundColor: "rgba(151, 187, 205, 0.2)",
  //         borderColor: "rgba(151, 187, 205, 1)",
  //         pointBackgroundColor: "rgba(151, 187, 205, 1)",
  //         pointBorderColor: "#fff",
  //         data: [
  //           random(),
  //           random(),
  //           random(),
  //           random(),
  //           random(),
  //           random(),
  //           random(),
  //         ],
  //       },
  //     ],
  //   },
  //   options: {
  //     responsive: true,
  //   },
  // });
  // eslint-disable-next-line no-unused-vars

  barChart = new Chart(document.getElementById("canvas-2"), {
    type: "bar",
    data: {
      labels: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
      datasets: [
        {
          backgroundColor: "rgba(0, 0, 255, 0.8)",
          borderColor: "rgba(220, 220, 220, 0.8)",
          highlightFill: "rgba(220, 220, 220, 0.75)",
          highlightStroke: "rgba(220, 220, 220, 1)",
          label: "total tickets",
          data: [
            barData.pastWeek.sun,
            barData.pastWeek.mon,
            barData.pastWeek.tue,
            barData.pastWeek.wed,
            barData.pastWeek.thu,
            barData.pastWeek.fri,
            barData.pastWeek.sat,
          ],
        },
        {
          backgroundColor: "rgba(0, 0, 255, 0.4)",
          borderColor: "rgba(151, 187, 205, 0.8)",
          highlightFill: "rgba(151, 187, 205, 0.75)",
          highlightStroke: "rgba(151, 187, 205, 1)",
          label: "percentage %",
          data: [
            (barData.pastWeek.sun / barData.pastWeek.tot) * 100,
            (barData.pastWeek.mon / barData.pastWeek.tot) * 100,
            (barData.pastWeek.tue / barData.pastWeek.tot) * 100,
            (barData.pastWeek.wed / barData.pastWeek.tot) * 100,
            (barData.pastWeek.thu / barData.pastWeek.tot) * 100,
            (barData.pastWeek.fri / barData.pastWeek.tot) * 100,
            (barData.pastWeek.sat / barData.pastWeek.tot) * 100,
          ],
        },
      ],
    },
    options: {
      responsive: true,
    },
  }); // eslint-disable-next-line no-unused-vars

  barChart2 = new Chart(document.getElementById("canvas-1"), {
    type: "bar",
    data: {
      labels: [
        "1",
        "2",
        "3",
        "4",
        "5",
        "6",
        "7",
        "8",
        "9",
        "10",
        "11",
        "12",
        "13",
        "14",
        "15",
        "16",
        "17",
        "18",
        "19",
        "20",
        "21",
        "22",
        "23",
        "24",
        "25",
        "26",
        "27",
        "28",
        "29",
        "30",
        "31",
      ],
      datasets: [
        {
          backgroundColor: "rgba(0, 0, 255, 0.8)",
          borderColor: "rgba(220, 220, 220, 0.8)",
          highlightFill: "rgba(220, 220, 220, 0.75)",
          highlightStroke: "rgba(220, 220, 220, 1)",
          label: "total tickets",
          data: barDataSet1,
        },
        {
          backgroundColor: "rgba(0, 0, 255, 0.4)",
          borderColor: "rgba(151, 187, 205, 0.8)",
          highlightFill: "rgba(151, 187, 205, 0.75)",
          highlightStroke: "rgba(151, 187, 205, 1)",
          label: "percentage %",
          data: barDataSet2,
        },
      ],
    },
    options: {
      responsive: true,
    },
  });

  doughnutChart = new Chart(document.getElementById("canvas-3"), {
    type: "doughnut",
    data: {
      labels: [
        "level 1",
        "level 2",
        "level 3",
        "level 4",
        "level 5",
        "level 6",
        "level 7",
      ],
      datasets: [
        {
          data: [
            dognutData.levels[0],
            dognutData.levels[1],
            dognutData.levels[2],
            dognutData.levels[3],
            dognutData.levels[4],
            dognutData.levels[5],
            dognutData.levels[6],
          ],
          backgroundColor: [
            "#FF6384",
            "#36A2EB",
            "#FFCE56",
            "#ff0000",
            "#00FF00",
            "#6a0dad",
            "#663300",
          ],
          hoverBackgroundColor: [
            "#FF6384",
            "#36A2EB",
            "#FFCE56",
            "#ff0000",
            "#00FF00",
            "#6a0dad",
            "#663300",
          ],
        },
      ],
    },
    options: {
      responsive: true,
    },
  }); // eslint-disable-next-line no-unused-vars

  radarChart = new Chart(document.getElementById("canvas-4"), {
    type: "radar",
    data: {
      labels: [
        "Eating",
        "Drinking",
        "Sleeping",
        "Designing",
        "Coding",
        "Cycling",
        "Running",
      ],
      datasets: [
        {
          label: "My First dataset",
          backgroundColor: "rgba(220, 220, 220, 0.2)",
          borderColor: "rgba(220, 220, 220, 1)",
          pointBackgroundColor: "rgba(220, 220, 220, 1)",
          pointBorderColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220, 220, 220, 1)",
          data: [65, 59, 90, 81, 56, 55, 40],
        },
        {
          label: "My Second dataset",
          backgroundColor: "rgba(151, 187, 205, 0.2)",
          borderColor: "rgba(151, 187, 205, 1)",
          pointBackgroundColor: "rgba(151, 187, 205, 1)",
          pointBorderColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(151, 187, 205, 1)",
          data: [28, 48, 40, 19, 96, 27, 100],
        },
      ],
    },
    options: {
      responsive: true,
    },
  }); // eslint-disable-next-line no-unused-vars

  pieChart = new Chart(document.getElementById("canvas-5"), {
    type: "pie",
    data: {
      labels: ["active %", "inactivated %", "suspended %", "fined %"],
      datasets: [
        {
          data: [
            pieData.actives,
            pieData.inactives,
            pieData.suspendeds,
            pieData.fineds,
          ],
          backgroundColor: ["#FF6384", "#36A2EB", "#FFCE56", "#00FF00"],
          hoverBackgroundColor: ["#FF6384", "#36A2EB", "#FFCE56", "#00FF00"],
        },
      ],
    },
    options: {
      responsive: true,
    },
  }); // eslint-disable-next-line no-unused-vars

  polarAreaChart = new Chart(document.getElementById("canvas-6"), {
    type: "polarArea",
    data: {
      labels: ["Red", "Green", "Yellow", "Grey", "Blue"],
      datasets: [
        {
          data: [11, 16, 7, 3, 14],
          backgroundColor: [
            "#FF6384",
            "#4BC0C0",
            "#FFCE56",
            "#E7E9ED",
            "#36A2EB",
          ],
        },
      ],
    },
    options: {
      responsive: true,
    },
  });
  //# sourceMappingURL=charts.js.map
};
// document.getElementById("demo").innerHTML = this.message;

xhttp.send();
