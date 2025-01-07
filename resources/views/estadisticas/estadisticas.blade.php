@extends('layouts.master')

@section('title', 'Estadisticas - Hospital Isidro Ayora')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadísticas de Citas</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Estadísticas de Citas por Doctor</h1>
    <canvas id="appointmentChart" width="400" height="200"></canvas>
    <script>
        const labels = <?php echo json_encode(array_column($data, 'doctor_name')); ?>;
        const data = <?php echo json_encode(array_column($data, 'total_appointments')); ?>;

        const ctx = document.getElementById('appointmentChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Citas por Doctor',
                    data: data,
                    backgroundColor: 'rgba(75, 192, 192, 0.5)',
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