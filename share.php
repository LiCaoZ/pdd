<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>为好友砍价 - 迫真服务器砍价</title>
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
    <div class="container">
      <div class="card">
        <div class="card-header">
          迫真服务器砍价 - <?php $t=date("H"); if ($t<"10") { echo "早安"; } elseif ($t<"20") { echo "Have a good day!"; } else { echo "晚安";} ;?>
        </div>
        <div class="card-body">
          <h3 class="card-title">您邮箱为
          <span class="badge badge-primary"><?php echo $_GET["m"]; ?></span> 的好友邀请你为他砍价</h3>
          <p class="card-text">
            Hi!我的
              <?php 
                if ($_GET["t"] == '0') {
                  echo ("0C/0G/0M");
                } elseif ($_GET["t"] == '1') {
                  echo ("0.25C/0.25G/0.25M");
                } elseif ($_GET["t"] == '2') {
                  echo ("0.5C/0.5G/0.5M");
                } elseif ($_GET["t"] == '3') {
                  echo ("0.75C/0.75G/0.75M");
                } else {
                  echo ("不存在的参数");
                }
              ;?>
            型服务器马上就要到手了，快来帮我砍一刀！
          </p>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bang">
            帮他砍一刀！
          </button>
          <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#down">
            砍他一刀
          </button>
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
                  你砍了他一刀，他的砍价进度将会减少。
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