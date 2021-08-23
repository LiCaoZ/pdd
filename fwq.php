<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>迫真服务器砍价</title>
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
    <h5 class="card-title">邀请好友砍价0元得服务器</h5>
    <p class="card-text"><form action="s.php" method="post">
         <div class="form-group">
    <label for="exampleInputEmail1">请输入邮箱地址作为唯一凭证</label>
    <input type="email" name="mail" class="form-control" id="mail" aria-describedby="mail" placeholder="输入您的电子邮箱">
    <small id="emailHelp" class="form-text text-muted">我们不会共享您的电子邮箱给任何人。</small>
  </div>
  <div class="form-group">
    <label for="Select">选择您想要的服务器类型 <a href="/list.html">点击查看数字代表机型</a></label>
    <select class="form-control" name="Select" id="Select">
      <option>0</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
    </select>
  </div>
   <button type="submit" class="btn btn-primary">提交</button>
    </form></p>
  </div>
</div>
    </div>
</body>
</html>