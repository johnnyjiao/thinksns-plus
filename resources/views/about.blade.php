<!DOCTYPE html>
<html>
    <head>
      <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
        <title>关于我们</title>
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                /*font-weight: 100;*/
                font-family: 'Lato';
                color: #333;
            }

            .container {
                text-align: center;
                margin-top: 20px;
                vertical-align: middle;
            }

            .content {
                max-width:90%;
                display: inline-block;
            }
            .content p{
              text-align: left;
              word-wrap: break-word;
              font-size: 16px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <img src="{{ asset('plus.png') }}" width="30%" alt="ThinkSNS+">
                <p>如果在出国前认识个学长</p>
                <p>你就可以</p>
				<p>深入了解学校的学风</p>
				<p>提前进入留学生圈子</p>
				<p>入学前就做好选课计划</p>
				<p>借鉴选宿舍和室友之道</p>
				<p>有目的性的做职业规划</p>
            </div>
        </div>
    </body>
</html>
