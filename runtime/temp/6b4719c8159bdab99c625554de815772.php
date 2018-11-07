<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:80:"D:\Code\PhpstormProjects\KingBlog-PHP\public/../application/index\view\blog.html";i:1540915238;s:79:"D:\Code\PhpstormProjects\KingBlog-PHP\application\index\view\layout\common.html";i:1540920971;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>东升映像 - Photography Blog </title>

    <!-- Favicon -->
    <link rel="icon" href="/front/img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="/front/style.css">
    <link rel="stylesheet" href="/front/dialog/css/dialog.css">

</head>

<!--    <script>
        if((navigator.userAgent.match(/(iPhone|Android|iPod)/i)))
        {
            var href = window.location.href;
            //从移动站进入
            if(!href.match(/#rdm/i))
            {
                window.location.href = '/wap/index';
            }
        }
    </script>-->

<body>
<!-- Preloader -->
<div id="preloader">
    <div class="preload-content">
        <div id="original-load"></div>
    </div>
</div>

<!-- Subscribe Modal -->
<div class="subscribe-newsletter-area">
    <div class="modal fade" id="subsModal" tabindex="-1" role="dialog" aria-labelledby="subsModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <h5 class="title">订阅我的博客</h5>
                    <form action="#" class="newsletterForm" method="post">
                        <input type="email" name="email" id="subscribesForm2" placeholder="请输入您的E-Mail">
                        <button type="submit" class="btn original-btn">订阅</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Breaking News Area -->
                <div class="col-12 col-sm-8">
                    <div class="breaking-news-area">
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <li><a href="#">Hello World!</a></li>
                                <li><a href="#">Hello Universe!</a></li>
                                <li><a href="#">Hello Original!</a></li>
                                <li><a href="#">Hello Earth!</a></li>
                                <li><a href="#">Hello Colorlib!</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Top Social Area -->
                <div class="col-12 col-sm-4">
                    <div class="top-social-area">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="微信"><i class="fa fa-wechat"
                                                                                                aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="微博"><i class="fa fa-weibo"
                                                                                                aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Ins"><i class="fa fa-instagram"
                                                                                                 aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="GitHub"><i class="fa fa-github"
                                                                                                    aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i
                                class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i
                                class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Logo Area -->
    <!--<div class="logo-area text-center">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <a href="/index/index" class="original-logo"><img src="/front/img/core-img/logo.png" alt=""></a>
                    &lt;!&ndash;<a href="/index/index" class="original-logo"><img src="/front/img/core-img/logo3.png" alt=""></a>&ndash;&gt;
                </div>
            </div>
        </div>
    </div>-->
    <!--<div class="tlinks">Collect from <a href="http://www.cssmoban.com/" >网页模板</a></div>-->

    <!-- Nav Area -->
    <div class="original-nav-area" id="stickyNav">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between">

                    <!-- Subscribe btn -->
                    <!--<div class="subscribe-btn">
                        <a href="#" class="btn subscribe-btn" data-toggle="modal" data-target="#subsModal">订阅</a>
                    </div>-->

                    <!-- header-logo -->
                    <div class="header-logo">
                        <a href="/front/index.html" class="original-logo" style="max-width: 60%;height: auto"><img src="/front/img/core-img/logo.png" alt=""></a>
                    </div>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu" id="originalNav">
                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <!--TODO Nav跳转-->
                                <li><a href="/index/index">Home 首页</a></li>
                                <li><a href="/index/bloglist">Blog 博客</a>
                                    <ul class="dropdown">
                                        <?php if(is_array($categories) || $categories instanceof \think\Collection || $categories instanceof \think\Paginator): if( count($categories)==0 ) : echo "" ;else: foreach($categories as $key=>$vo): ?>
                                        <li><a href="/index/bloglist"><?php echo $vo['name']; ?></a></li>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                                </li>
                                <li><a href="/index/reserve">Reserve 预约</a></li>
                                <!--<li><a href="/index/about">About 关于</a></li>-->
                                <li><a href="/index/contact">Contact 联系</a></li>
                            </ul>

                            <!-- Search Form  -->
                            <div id="search-wrapper">
                                <form action="#">
                                    <input type="text" id="search" placeholder="请输入要搜索的内容...">
                                    <div id="close-icon"></div>
                                    <input class="d-none" type="submit" value="">
                                </form>
                            </div>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

<main class="content">
    <!-- ##### Single Blog Area Start ##### -->
<div class="single-blog-wrapper section-padding-0-100">

    <!-- Single Blog Area  -->
    <div class="single-blog-area blog-style-2 mb-50">
        <div class="single-blog-thumbnail">
            <img src="<?php echo $articles['image']; ?>" alt="">
            <div class="post-tag-content">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="post-date">
                                <a href="#">12 <span>march</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- ##### Post Content Area ##### -->
            <div class="col-12 col-lg-9">
                <!-- Single Blog Area  -->
                <div class="single-blog-area blog-style-2 mb-50">
                    <!-- Blog Content -->
                    <div class="single-blog-content">
                        <div class="line"></div>
                        <a href="#" class="post-tag">Lifestyle</a>
                        <h4><a href="#" class="post-headline mb-0"><?php echo $articles['title']; ?></a></h4>
                        <div class="post-meta mb-50">
                            <p>By <a href="#"><?php echo $articles['author']; ?></a></p>
                            <p>评论：3 </p>&nbsp;&nbsp;<p>点赞：88 </p>&nbsp;&nbsp;<p>浏览：3067 </p><br>
                            <p>类别：<a href="#"><?php echo $category['name']; ?></a></p>&nbsp;&nbsp;
                            <p>标签：<a href="#"><?php echo $tag['name']; ?></a></p>
                        </div>
                        <?php echo $articles['content']; ?>
                    </div>
                </div>

                <!-- About Author -->
                <div class="blog-post-author mt-100 d-flex">
                    <div class="author-thumbnail">
                        <img src="/front/img/bg-img/b6.jpg" alt="">
                    </div>
                    <div class="author-info">
                        <div class="line"></div>
                        <span class="author-role">Author</span>
                        <h4><a href="#" class="author-name"><?php echo $articles['author']; ?></a></h4>
                        <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam
                            vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel
                            volutpat quam tincidunt. Nullam vestibulum convallis risus vel condimentum. Nullam auctor
                            lorem in libero.</p>
                    </div>
                </div>

                <!-- Comment Area Start -->
                <div class="comment_area clearfix mt-70">
                    <h5 class="title">Comments</h5>

                    <ol>
                        <!-- Single Comment Area -->
                        <li class="single_comment_area">
                            <!-- Comment Content -->
                            <div class="comment-content d-flex">
                                <!-- Comment Author -->
                                <div class="comment-author">
                                    <img src="/front/img/bg-img/b7.jpg" alt="author">
                                </div>
                                <!-- Comment Meta -->
                                <div class="comment-meta">
                                    <a href="#" class="post-date">March 12</a>
                                    <p><a href="#" class="post-author">William James</a></p>
                                    <p>Efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum
                                        convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel
                                        volutpat quam tincidunt.</p>
                                    <a href="#" class="comment-reply">Reply</a>
                                </div>
                            </div>
                            <ol class="children">
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="/front/img/bg-img/b7.jpg" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#" class="post-date">March 12</a>
                                            <p><a href="#" class="post-author">William James</a></p>
                                            <p>Efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam
                                                vestibulum convallis risus vel condimentum. Nullam auctor lorem in
                                                libero luctus, vel volutpat quam tincidunt.</p>
                                            <a href="#" class="comment-reply">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </li>

                        <!-- Single Comment Area -->
                        <li class="single_comment_area">
                            <!-- Comment Content -->
                            <div class="comment-content d-flex">
                                <!-- Comment Author -->
                                <div class="comment-author">
                                    <img src="/front/img/bg-img/b7.jpg" alt="author">
                                </div>
                                <!-- Comment Meta -->
                                <div class="comment-meta">
                                    <a href="#" class="post-date">March 12</a>
                                    <p><a href="#" class="post-author">William James</a></p>
                                    <p>Efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum
                                        convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel
                                        volutpat quam tincidunt.</p>
                                    <a href="#" class="comment-reply">Reply</a>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>

                <div class="post-a-comment-area mt-70">
                    <h5>Leave a reply</h5>
                    <!-- Reply Form -->
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="group">
                                    <input type="text" name="name" id="name" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Name</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="group">
                                    <input type="email" name="email" id="email" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="group">
                                    <input type="text" name="subject" id="subject" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="group">
                                    <textarea name="message" id="message" required></textarea>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Comment</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn original-btn">Reply</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- ##### Sidebar Area ##### -->
            <div class="col-12 col-md-4 col-lg-3">
                <div class="post-sidebar-area">

                    <!-- Widget Area -->
                    <!--<div class="sidebar-widget-area">
                        <form action="#" class="search-form">
                            <input type="search" name="search" id="searchForm" placeholder="Search">
                            <input type="submit" value="submit">
                        </form>
                    </div>-->

                    <!-- Widget Area 订阅-->
                    <div class="sidebar-widget-area">
                        <h5 class="title subscribe-title">Subscribe to my newsletter</h5>
                        <div class="widget-content">
                            <form action="#" class="newsletterForm">
                                <input type="email" name="email" id="subscribesForm" placeholder="Your e-mail here">
                                <button type="submit" class="btn original-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>

                    <!-- Widget Area 文章-->
                    <div class="sidebar-widget-area">
                        <h5 class="title">最新发布</h5>

                        <div class="widget-content">

                            <!-- Single Blog Post -->
                            <?php if(is_array($articless) || $articless instanceof \think\Collection || $articless instanceof \think\Paginator): if( count($articless)==0 ) : echo "" ;else: foreach($articless as $key=>$vo): ?>
                            <div class="single-blog-post d-flex align-items-center widget-post">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="<?php echo $vo['image']; ?>" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="post-tag">Lifestyle</a>
                                    <h4><a href="#" class="post-headline"><?php echo $vo['title']; ?></a></h4>
                                    <div class="post-meta">
                                        <p><a href="#"><?php echo $vo['createtime']; ?></a></p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>

                        </div>


                        <!-- Widget Area 广告-->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Advertisement</h5>
                            <a href="#"><img src="/front/img/bg-img/add.gif" alt=""></a>
                        </div>

                        <!-- Widget Area 标签-->
                        <div class="sidebar-widget-area">
                            <h5 class="title">标签</h5>
                            <div class="widget-content">
                                <ul class="tags">
                                    <?php if(is_array($tags) || $tags instanceof \think\Collection || $tags instanceof \think\Paginator): if( count($tags)==0 ) : echo "" ;else: foreach($tags as $key=>$vo): ?>
                                    <li><a href="#"><?php echo $vo['name']; ?></a></li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Single Blog Area End ##### -->
</main>

<!-- ##### Instagram Feed Area Start ##### -->
<div class="instagram-feed-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="insta-title">
                    <h5>关注我 @ Instagram</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Instagram Slides -->
    <div class="instagram-slides owl-carousel">
        <!-- Single Insta Feed -->
        <div class="single-insta-feed">
            <img style="border-radius: 10px;" src="/front/img/instagram-img/1.png" alt="">
            <!-- Hover Effects -->
            <div class="hover-effects">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- Single Insta Feed -->
        <div class="single-insta-feed">
            <img style="border-radius: 10px;" src="/front/img/instagram-img/2.png" alt="">
            <!-- Hover Effects -->
            <div class="hover-effects">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- Single Insta Feed -->
        <div class="single-insta-feed">
            <img style="border-radius: 10px;" src="/front/img/instagram-img/3.png" alt="">
            <!-- Hover Effects -->
            <div class="hover-effects">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- Single Insta Feed -->
        <div class="single-insta-feed">
            <img style="border-radius: 10px;" src="/front/img/instagram-img/4.png" alt="">
            <!-- Hover Effects -->
            <div class="hover-effects">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- Single Insta Feed -->
        <div class="single-insta-feed">
            <img style="border-radius: 10px;" src="/front/img/instagram-img/5.png" alt="">
            <!-- Hover Effects -->
            <div class="hover-effects">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- Single Insta Feed -->
        <div class="single-insta-feed">
            <img style="border-radius: 10px;" src="/front/img/instagram-img/6.png" alt="">
            <!-- Hover Effects -->
            <div class="hover-effects">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- Single Insta Feed -->
        <div class="single-insta-feed">
            <img style="border-radius: 10px;" src="/front/img/instagram-img/7.png" alt="">
            <!-- Hover Effects -->
            <div class="hover-effects">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- ##### Instagram Feed Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- Footer Nav Area -->
                <div class="classy-nav-container breakpoint-off">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-center">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="/index/index">Home 首页</a></li>
                                    <li><a href="/index/photo">Blog 博客</a></li>
                                    <li><a href="/index/reserve">Reserve 预约</a></li>
                                    <!--<li><a href="/index/about">About 关于</a></li>-->
                                    <li><a href="/index/contact">Contact 联系</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>

                <!-- Footer Social Area -->
                <div class="footer-social-area mt-30">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="微信"><i class="fa fa-wechat"
                                                                                         aria-hidden="true"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="微博"><i class="fa fa-weibo"
                                                                                         aria-hidden="true"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Ins"><i class="fa fa-instagram"
                                                                                          aria-hidden="true"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="GitHub"><i class="fa fa-github"
                                                                                             aria-hidden="true"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"
                                                                                               aria-hidden="true"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"
                                                                                              aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>


    Copyright &copy;2016-
    <script>document.write(new Date().getFullYear());</script> All Rights Reserved KevinWong<br>
    <a style="color: #b3b3b3">冀ICP备17012584号</a><br>
    <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cspan id='cnzz_stat_icon_1261891361'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/z_stat.php%3Fid%3D1261891361%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>

</footer>
<!-- ##### Footer Area End ##### -->

<!-- ##### Baidu HM ##### -->
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?c544ce2fd1285dff636c95c7698e116e";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>


<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="/front/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="/front/js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="/front/js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="/front/js/plugins.js"></script>
<!-- Active js -->
<script src="/front/js/active.js"></script>

<script src="/front/dialog/js/dialog.js"></script>

</body>

</html>
