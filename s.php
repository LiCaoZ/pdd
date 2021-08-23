<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>提交成功 - 迫真服务器砍价</title>
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
    <div class="container">
       <div class="card">
  <div class="card-header">
    迫真服务器砍价 - <?php
$t=date("H");

if ($t<"10") {
  echo "早安";
} elseif ($t<"20") {
  echo "Have a good day!";
} else {
  echo "晚安";
}
?>
  </div>
  <div class="card-body">
    <h3 class="card-title">我们已经收到您提交的砍价请求 <span class="badge badge-primary">请核对您的订单信息</span></h3>
    <p class="card-text">
        邮箱：<?php echo $_POST["mail"]; ?>
        机型：<?php 
            if ($_POST["Select"] == '0') {
                echo ("0C/0G/0M");
            } elseif ($_POST["Select"] == '1') {
                echo ("0.25C/0.25G/0.25M");
            } elseif ($_POST["Select"] == '2') {
                echo ("0.5C/0.5G/0.5M");
            } elseif ($_POST["Select"] == '3') {
                echo ("0.75C/0.75G/0.75M");
            }
        ;?>
    </p>
    <h5><span class="badge badge-secondary">分享您的砍价链接给好友</span></h5><?php 
    $url = "pdd.shiertx.com/share.php?m=".rawurlencode($_POST["mail"])."&t=".$_POST["Select"];
    echo $url;
     ;?></p>
    <p class="card-text">您的砍价订单进度：<br><div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>
</div></p>
    <p></p>
  </div>
</div>
    </div>
</body>
</html>