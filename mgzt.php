<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>[好友助力]我正在砍价竞选美国总统!帮我砍一刀，福利免费拿!</title>
    <meta name="description" content="我正在参加竞选，还差<?php echo $piao ;?>票就可以当总统，帮我砍一下吧">
    <link rel="icon" href="https://z3.ax1x.com/2021/08/23/hP7e3j.png" type="image/png">
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

        a {
            color: #20a53a
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
    $piao = rand(1,999);
    ;?>
    <div class="container">
       <div class="card">
  <div class="card-header">
    [好友助力]我离美国总统还差<?php echo $piao ;?>票!帮我砍一刀，福利免费拿!
  </div>
  <div class="card-body">
    <h3 class="card-title">我正在参加竞选，还差<?php echo $piao ;?>票就可以当总统，帮我砍一下吧</h3>
    <p class="card-text">
       
    </p>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bang">
  帮他砍一刀！
</button>
<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#down">
  砍他一刀
</button>

<!-- Modal -->
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
    <p></p>
  </div>
</div>
    </div>
</body>
</html>