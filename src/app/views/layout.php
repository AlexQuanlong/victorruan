<head>
    <title><?=$_title?></title>
    <script src="//cdn.bootcss.com/jquery/3.1.0/jquery.js"></script>
    <script src="//cdn.bootcss.com/vue/1.0.26/vue.min.js"></script>
    <script src="//cdn.bootcss.com/vue-resource/0.9.3/vue-resource.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container-fluid clearfix col-md-12 column" >
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/"><img src="https://avatars1.githubusercontent.com/u/6701576?v=3&s=460" alt="victorruan logo" width="50px"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/">victorruan的小站</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/">首页</a>
                </li>
                <li>
                    <a href="/p/2">帮助</a>
                </li>
            </ul>
        </div>
    </nav>
<?php /* @var string $_file */?>
<?php include VIEWS_PATH.$_file.".php";?>
<div>
    <div class="col-xs-12 col-md-6">
        <script src='//w.segmentfault.com/card/1030000005907459.js?w=0&3rd=1&bg=0&bd=DDDDDD&cl=2e232e&btn=141210&noBtn=0'></script>        </div>
    <div class="col-xs-12 col-md-6" >
        <!-- 多说评论框 start -->
        <div class="ds-thread" data-thread-key="<?=$_thread_key?>" data-title="<?=$_title?>" data-url="<?=$_SERVER['REQUEST_URI']?>"></div>
        <!-- 多说评论框 end -->
    </div>
</div>
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
    var duoshuoQuery = {short_name:"victorruan1990"};
    (function() {
        var ds = document.createElement('script');
        ds.type = 'text/javascript';ds.async = true;
        ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.unstable.js';
        ds.charset = 'UTF-8';
        (document.getElementsByTagName('head')[0]
        || document.getElementsByTagName('body')[0]).appendChild(ds);
    })();
</script>
<!-- 多说公共JS代码 end -->
<!--统计代码 start-->
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?db56094e1a7efb1579933847b95cdcaf";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<!--统计代码 end-->
<script src='http://cdn.bootcss.com/socket.io/1.3.7/socket.io.js'></script>
</div>
</body>
<style>
    .navbar-default {
        background-color: #6e9fc8;
        border-color: #104979;
    }
    .navbar-default .navbar-nav>li>a {
        color: #fff;
    }
    .ds-thread{border: 1px solid #DDDDDD;border-radius: 3px;padding: 10px;}
    .container{padding-bottom:50px;}
    body{padding:7px;}
    .enabled{font-weight:bold;}
    .disabled{color:#909090;}
    .ds-powered-by{display: none}
    .sf-usercard{
        margin-bottom: 20px;
    }
    pre code {
        background: none;
        font-size: 1em;
        overflow-wrap: normal;
        white-space: inherit;
    }
    img{    max-width: 100%;  }
</style>