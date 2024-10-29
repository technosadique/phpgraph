<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Salary Line Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        canvas {
            max-width: 600px;
            margin: auto;
        }
    </style>
</head>
<body>

<h2>Employee Salary Line Chart</h2>
<canvas id="employeeLineChart"></canvas>

<script>
    // PHP to define data
    const names = <?php echo json_encode(['Alice', 'Bob', 'Charlie', 'David', 'Eva']); ?>;
    const salaries = <?php echo json_encode([60000, 75000, 55000, 70000, 80000]); ?>;

    const ctx = document.getElementById('employeeLineChart').getContext('2d');
    const employeeLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: names,
            datasets: [{
                label: 'Salary',
                data: salaries,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2,
                fill: true, // To fill the area under the line
                tension: 0.1 // Smooth the line
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Salary'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Employees'
                    }
                }
            }
        }
    });
</script>

</body>
</html>
