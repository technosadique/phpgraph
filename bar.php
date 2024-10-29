<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Bar Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        canvas {
            max-width: 600px;
            margin: auto;
        }
    </style>
</head>
<body>

<h2>Employee Salary Bar Chart</h2>
<canvas id="employeeChart"></canvas>

<script>
    // PHP to define data
    const names = <?php echo json_encode(['Alice', 'Bob', 'Charlie', 'David', 'Eva']); ?>;
    const salaries = <?php echo json_encode([60000, 75000, 55000, 70000, 80000]); ?>;

    const ctx = document.getElementById('employeeChart').getContext('2d');
    const employeeChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: names,
            datasets: [{
                label: 'Salary',
                data: salaries,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

</body>
</html>
