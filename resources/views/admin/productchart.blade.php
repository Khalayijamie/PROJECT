<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Charts</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
</head>
<body>
    <h1 style="text-align: center; color: skyblue;">Charts</h1>
    <div style="width: 900px; margin: auto;">
        <canvas id="chart"></canvas>
    </div>

    <script>
        var ctx = document.getElementById('chart').getContext('2d');
        var userChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($labels) !!},
                datasets: {!! json_encode($datasets) !!}
            },
        });
    </script>

<li><a href="{{url('order')}}">Orders</a></li>
</body>
</html>
