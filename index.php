<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>


    <header>


    </header>

    <section class='container-charts'>
        <section class='chart-top'>
            <div class='container-chartTraffic'>
                <canvas id='chart-traffic'></canvas>
            </div>
            <div class='container-traffic-content'>
                <canvas id='chart-traffic-content'></canvas>
            </div>
        </section>
        <section class='chart-bottom'>
            <div class='container-proxy-state'>
                
            </div>
            <div class='container-sitePop'>
                <canvas id='chart-sitePop'></canvas>
            </div>
            <div class='container-proxy-charge'>
                <canvas id='chart-proxyCharge'></canvas>
            </div>
        </section>
    </section>
    

    <script src="./js/chart.js-4.4.2/package/dist/chart.umd.js"></script>
    <script src="./js/app.js"></script>
</body>
</html>