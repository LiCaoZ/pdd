<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>[好友助力]我正在砍价竞选美国总统!帮我砍一刀，福利免费拿!</title>
    <meta name="description" content="我正在参加竞选，马上就可以当总统，帮我砍一下吧">
    <link rel="icon" href="https://z3.ax1x.com/2021/08/23/hP7e3j.png" type="image/png">
    <!-- 内建Style开始 -->
    <style>
      body {
        background-color: #f0f0f0;
      }
      .container {
          width: 60%;
          margin: 5% auto 0;
          
          padding: 2% 5%;
          border-radius: 10px
      }

      ul {
          padding-left: 20px;
      }

          ul li {
              line-height: 2.3
          }
    </style>
    <!-- 内建Style结束 -->

    <!-- 外部资源引用开始 -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.geekzu.org/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    <!-- MDB JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    <!-- 外部资源引用结束 -->
  </head>
  <body>
    <?php $piao = rand(1,999) ;?>
    <div class="container">
      <div class="card">
        <div class="card-header">
          [好友助力]我离美国总统还差<?php echo $piao ;?>票!帮我砍一刀，福利免费拿!
        </div>
        <div class="card-body">
          <h3 class="card-title">我正在参加竞选，还差<?php echo $piao ;?>票就可以当总统，帮我砍一下吧</h3>
          <p class="card-text">
            Hi!我正在参加美国总统竞选，马上就可以当总统了，快来帮我砍一下吧
          </p>

          <!-- 按钮组 -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bang">
            帮他砍一刀！
          </button>
          <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#down">
            砍他一刀
          </button>

          <!-- 响应帮砍 -->
          <div class="modal fade" id="bang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">砍价成功</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  砍价成功啦，快通知他吧~
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="down" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">你砍了他一刀</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  你砍了他一刀，他的民意将会下跌。
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>