<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Salary Doughnut Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        canvas {
            max-width: 600px;
            margin: auto;
        }
    </style>
</head>
<body>

<h2>Employee Salary Distribution</h2>
<canvas id="employeeDoughnutChart"></canvas>

<script>
    // PHP to define data
    const names = <?php echo json_encode(['Alice', 'Bob', 'Charlie', 'David', 'Eva']); ?>;
    const salaries = <?php echo json_encode([60000, 75000, 55000, 70000, 80000]); ?>;

    const ctx = document.getElementById('employeeDoughnutChart').getContext('2d');
    const employeeDoughnutChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: names,
            datasets: [{
                label: 'Salary Distribution',
                data: salaries,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(153, 102, 255, 0.6)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.label + ': $' + tooltipItem.raw;
                        }
                    }
                }
            }
        }
    });
</script>

</body>
</html>
