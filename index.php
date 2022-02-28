<!DOCTYPE HTML>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>きまたま日誌</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">
    </head>

    <body>

        <div class="top-menu-bar">
            <div class="top-menu-bar-icon">
                <a href="#">
                    <ion-icon name="person-circle-outline"></ion-icon>
                </a>
            </div>
            <h1 class="top-menu-bar-title">
                きまたま日誌<small class="text-muted">ホーム</small>
            </h1>
            <div class="top-menu-bar-icon">
                <a href="#">
                    <ion-icon name="settings-outline"></ion-icon>
                </a>
            </div>
        </div>

        <div class="content-area">
            <div class="container">
                <div class="row">
                    <section id="target" class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="mb-3">Target<small class="text-muted">今週の目標</small></h3>
                                <div class="row target align-items-center">
                                    <div class="col-6">
                                        <div class="target-graph">
                                            <div class="target-percent">
                                                <div class="target-percent-num">50</div>
                                                <div class="target-percent-symbol">
                                                    %
                                                </div>
                                            </div>
                                            <canvas id="graph-target" width="175" height="175"></canvas>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row target-time m-1">
                                            <div class="col-auto target-time-total">
                                                <div class="target-time-total-num">
                                                    15
                                                </div>
                                                <div class="target-time-total-symbol">
                                                    時間
                                                </div>
                                            </div>
                                            <div class="col-auto target-time-goal">30時間</div>
                                        </div>
                                        <hr>
                                        <div class="row target-text m-1">
                                            <h5>目標</h5>
                                            <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
                                            <div class="text-end">
                                                <a href="#" class="btn btn-secondary">編集する</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="time" class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h3>Time<small class="text-muted">学習時間</small></h3>
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center" style="table-layout: fixed;">
                                        <thead>
                                            <tr class="bg-secondary text-white">
                                                <th scope="col">今日</th>
                                                <th scope="col">今月</th>
                                                <th scope="col">総計</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>3時間</td>
                                                <td>15時間</td>
                                                <td>121時間</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="row">
                    <section id="menu" class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="mb-3">Menu<small class="text-muted">メニュー</small></h3>
                            </div>
                            <div class="list-group list-group-flush">
                                <div class="list-group-item list-group-item-action">
                                    <a href="#" class="home-menu-list">
                                        <div class="home-menu-list-content home-menu-list-text">
                                            勉強を記録する
                                        </div>
                                        <div class="home-menu-list-content home-menu-list-arrow">
                                            <ion-icon name="chevron-forward-outline"></ion-icon>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-group-item list-group-item-action">
                                    <a href="#" class="home-menu-list">
                                        <div class="home-menu-list-content home-menu-list-text">
                                            タイマーを使用する
                                        </div>
                                        <div class="home-menu-list-content home-menu-list-arrow">
                                            <ion-icon name="chevron-forward-outline"></ion-icon>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-group-item list-group-item-action">
                                    <a href="#" class="home-menu-list">
                                        <div class="home-menu-list-content home-menu-list-text">
                                            今週の目標
                                        </div>
                                        <div class="home-menu-list-content home-menu-list-arrow">
                                            <ion-icon name="chevron-forward-outline"></ion-icon>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-group-item list-group-item-action">
                                    <a href="#" class="home-menu-list">
                                        <div class="home-menu-list-content home-menu-list-text">
                                            100ページチャレンジ
                                        </div>
                                        <div class="home-menu-list-content home-menu-list-arrow">
                                            <ion-icon name="chevron-forward-outline"></ion-icon>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-group-item list-group-item-action">
                                    <a href="#" class="home-menu-list">
                                        <div class="home-menu-list-content home-menu-list-text">
                                            本棚を見る
                                        </div>
                                        <div class="home-menu-list-content home-menu-list-arrow">
                                            <ion-icon name="chevron-forward-outline"></ion-icon>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="history" class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="mb-3">History<small class="text-muted">最近の記録</small></h3>
                                <p>最近の記録はありません。</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="bottom-menu-bar">
            <div class="bottom-menu-bar-icon">
                <a href="#" class="active">
                    <ion-icon name="home"></ion-icon>
                </a>
            </div>
            <div class="bottom-menu-bar-icon">
                <a href="#">
                    <ion-icon name="bar-chart-outline"></ion-icon>
                </a>
            </div>
            <div class="bottom-menu-bar-icon">
                <a href="#">
                    <ion-icon name="book-outline"></ion-icon>
                </a>
            </div>
            <div class="bottom-menu-bar-icon">
                <a href="#">
                    <ion-icon name="library-outline"></ion-icon>
                </a>
            </div>
            <div class="bottom-menu-bar-icon">
                <a href="#">
                    <ion-icon name="stopwatch-outline"></ion-icon>
                </a>
            </div>
        </div>

        <!-- script -->
        <!-- Bootstrap -->
        <script src="/js/bootstrap.min.js"></script>

        <!-- Ionicons -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <!-- Chart.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>

        <script>
            var ctx = document.getElementById("graph-target");
            var graphTarget = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        backgroundColor: [
                            "#47b39d",
                            "#eeeeee",
                        ],
                        data: [15, 15]
                    }]
                },
                options: {
                    legend: {
                        display: false
                    },
                    tooltips: { enabled: false },
                    hover: { mode: null },
                },
            });
        </script>

    </body>



</html>