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
    <section class='container'>
        <section class="container-btn-previous">
            <div>
                <a href=""></a>
                <p>Précèdent</p>
            </div>
        </section>
        <section class='container-charts'>
            <section class='chart-top'>
                <div class='chart-top-left'>
                    <div class='container-chart-traffic'>
                        <canvas id='chart-traffic' width="720" height="300"></canvas>
                    </div>
                </div>
                <div class='chart-top-right'>
                    <div class="container-chart-traffic-content">
                        <canvas id='chart-traffic-content' width='100'></canvas>
                    </div>
                </div>
            </section>
            <section class='chart-bottom'>
                <div class='chart-bottom-left'>
                    <div class='proxy-state'>
                    </div>
                </div>
                <div class='chart-bottom-center'>
                    <div class='container-chart-sitePop'>
                        <canvas id='chart-sitePop'></canvas
                    </div>
                </div>
                <div class='chart-bottom-right'>
                    <div class="container-chart-proxyCharge">
                        <canvas id='chart-proxyCharge'></canvas>
                    </div>
                </div>
            </section>
        </section>
        <section class="container-btn-next">
            <div>
                <a href=""></a>
                <p>Suivant</p>
            </div>
        </section> 
    </section>
    

    <script src="./js/chart.js-4.4.2/package/dist/chart.umd.js"></script>
    <script src="./js/app.js"></script>
</body>
</html>