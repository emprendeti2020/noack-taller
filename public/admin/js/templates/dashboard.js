const barChart = () => {

    const data = {
        labels: ["Ene", "Feb", "Mar", "Abr", "May", "Jun"],
        datasets: [
          {
            label: "OT Completadas",
            data: [65, 59, 80, 81, 56, 55, 40],
            backgroundColor: [
              "rgba(255, 99, 132, 0.2)",
              "rgba(255, 159, 64, 0.2)",
              "rgba(255, 205, 86, 0.2)",
              "rgba(75, 192, 192, 0.2)",
              "rgba(54, 162, 235, 0.2)",
              "rgba(153, 102, 255, 0.2)",
              "rgba(201, 203, 207, 0.2)",
            ],
            borderColor: [
              "rgb(255, 99, 132)",
              "rgb(255, 159, 64)",
              "rgb(255, 205, 86)",
              "rgb(75, 192, 192)",
              "rgb(54, 162, 235)",
              "rgb(153, 102, 255)",
              "rgb(201, 203, 207)",
            ],
            borderWidth: 1,
          },
        ],
      };
      
      const config = {
        type: "bar",
        data: data,
        options: {
          scales: {
            y: {
              beginAtZero: true,
            },
          },
        },
      };
      
      var ctx = document.getElementById("mybarChart").getContext("2d");
      new Chart(ctx, config);
}

const doughnutChart = () => {
    var ctx = document.getElementById("myDoughnutChart").getContext('2d');
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Cliente 1","Cliente 2","Cliente 3","Cliente 4"],
            datasets: [{    
                data: [320,120,115,412], // Specify the data values array
            
                borderColor: ['#2196f38c', '#f443368c', '#3f51b570', '#00968896'], // Add custom color border 
                backgroundColor: ['#2196f38c', '#f443368c', '#3f51b570', '#00968896'], // Add custom color background (Points and Fill)
                borderWidth: 1 // Specify bar border width
            }]},         
        options: {
        responsive: true, // Instruct chart js to respond nicely.
        maintainAspectRatio: true, // Add to prevent default behaviour of full-width/height 
        }
    });
}

barChart();
doughnutChart();