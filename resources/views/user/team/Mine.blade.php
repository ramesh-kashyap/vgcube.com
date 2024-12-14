<html lang="en" class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>Mine</title>
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="expires" content="0">
    <meta name="viewport"
        content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,viewport-fit=cover">
    <link rel="icon" href="/logo1.ico" type="image/x-icon">
    <link rel="manifest" href="/manifest.json">
    <meta name="renderer" content="webkit">
    <meta name="robots" content="noindex, nofollow">
    <meta name="google" content="notranslate">
    <script>
        window.addEventListener("error", function(event) {
            if (event.message.indexOf("Unexpected token '<'") > -1) {
                location.reload();
            }
        });
        window.onload = function() {
            document.addEventListener("touchstart", function(event) {
                if (event.touches.length > 1) {
                    event.preventDefault();
                }
            });
            var lastTouchEnd = 0;
            document.addEventListener(
                "touchend",
                function(event) {
                    var now = new Date().getTime();
                    if (now - lastTouchEnd <= 300) {
                        event.preventDefault();
                    }
                    lastTouchEnd = now;
                },
                false
            );
            document.addEventListener("gesturestart", function(event) {
                event.preventDefault();
            });
        };

        if ("standalone" in window.navigator && window.navigator.standalone) {
            var noddy,
                remotes = false;
            document.addEventListener(
                "click",
                function(event) {
                    noddy = event.target;
                    while (noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
                        noddy = noddy.parentNode;
                    }
                    if (
                        "href" in noddy &&
                        noddy.href.indexOf("http") !== -1 &&
                        (noddy.href.indexOf(document.location.host) !== -1 || remotes)
                    ) {
                        event.preventDefault();
                        document.location.href = noddy.href;
                    }
                },
                false
            );
        }
    </script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            background-color: #000;
        }
    </style>
    <link href="{{ asset('') }}assets/static/js/app.83a7756d.1717187934571.js" rel="preload" as="script">
    <link href="{{ asset('') }}assets/static/js/chunk-echarts.eba990db.1717187934571.chunk.js" rel="preload"
        as="script">
    <link href="{{ asset('') }}assets/static/js/chunk-vant.9e1db231.1717187934571.chunk.js" rel="preload"
        as="script">
    <link href="{{ asset('') }}assets/static/js/chunk-vendors.24e8c7cc.1717187934571.chunk.js" rel="preload"
        as="script">
    <link href="{{ asset('') }}assets/static/js/chunk-vue.2deea45a.1717187934571.chunk.js" rel="preload"
        as="script">
    <link href="{{ asset('') }}assets/static/css/app.23ae5dc0.css" rel="preload" as="style">
    <link href="{{ asset('') }}assets/static/css/chunk-vant.d14f5539.css" rel="preload" as="style">
    <link href="{{ asset('') }}assets/static/css/chunk-vendors.794edbf9.css" rel="preload" as="style">
    <link href="{{ asset('') }}assets/static/css/chunk-vant.d14f5539.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/static/css/chunk-vendors.794edbf9.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/static/css/app.23ae5dc0.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-aef56f2a.f587d975.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-aef56f2a.b3c068cc.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-2a0b1332.9f52f39a.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-2a0b1332.0436ba68.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-f8e2ce82.4965c1ba.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-f8e2ce82.8a913baf.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-21a2b91c.0ed7b871.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-21a2b91c.12695023.1717187934571.chunk.js">
    </script>
</head>

<style>
    .line[data-v-3d4e4f5e] {
        border-radius: .1rem;
        background: transparent;
        padding: 10px .32rem
    }

    .btn_list .go button[data-v-3d4e4f5e] {
        width: 100%;
        border-radius: .24rem;
        background: none;
        border: .02rem solid #222;
        height: .88rem;
        font-size: .28rem;
        color: #121313;
        background: #54b2c2;
    }

    .btn_list .go button img[data-v-3d4e4f5e] {
        height: .33rem;
        margin-right: .2rem;
        vertical-align: middle;
        filter: brightness(7) saturate(94%) invert(89%) sepia(0%) saturate(7500%) hue-rotate(343deg) brightness(104%) contrast(104%);
    }

    .profile-container {
        display: flex;
        align-items: center;
        background-color: #000;
        padding: 10px;
        border-radius: 10px;
        margin-top: -21px;
    }

    .profile-image {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .profile-info {
        display: flex;
        flex-direction: column;
    }

    .profile-info .span1 {
        margin-bottom: 5px;
    }

    .badges {
        display: flex;
        align-items: center;
    }

    .badge {
        display: flex;
        align-items: center;
        background-color: #e0e0e0;
        color: #000;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 12px;
        margin-right: 5px;
    }

    .badge i {
        margin-right: 5px;
    }

    .level {
        display: flex;
        align-items: center;
        background-color: #55B2C2;
        color: #fff;
        padding: 2px 2px;
        border-radius: 20px;
            width: 76px;
        font-size: 10px;
    }

    .level i {
        margin-right: 5px;

    }

    .arrow {
        margin-left: 10px;
        color: #ffffff;
    }

    .invite-card {
        background-color: #0d1117;
        color: white;
        border-radius: 10px;
        margin-top: 8px;
        padding: 20px;
        display: flex;
        align-items: center;
        width: 100%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        /* background-image: url("{{ asset('') }}assets/static/img/banner_i.jpg"); */
        background-size: cover;
        background-position: center;
        padding-top: 11px;
        padding-bottom: 12px;
    }

    .invite-card .text {
        flex: 1;
    }

    .invite-card h2 {
        margin: 0;
        font-size: 12px;
        font-weight: bold;
        font-family: Bai Jamjuree;
    }

    .invite-card p {
        margin: 5px 0 0;
        font-family: Bai Jamjuree;
        font-size: 12px;
    }

    .invite-card .icons {
        display: flex;
        align-items: center;
    }

    .invite-card .icons img {
        width: 40px;
        height: 40px;
        margin-left: 10px;
    }

    .invite-card .go-button {
        background-color: #00bfa5;
        color: white;
        border: none;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        margin-left: 10px;
        cursor: pointer;
    }
</style>

<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-cfc9a7fc="" data-v-3d4e4f5e="" class="page">
            <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="head_bg"><img data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                    src="{{ asset('') }}assets/static/img/bg_my.f757132b.png"></div>
            <!---->
            <div data-v-cfc9a7fc="" id="scroll" class="content-container">
                <div data-v-cfc9a7fc="" id="content" class="content-scroll">
                    <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="profile">
                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="container">
                            <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="head">
                                <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex">
                                    <div data-v-6df716d9="" data-v-cfc9a7fc=""><img data-v-6df716d9=""
                                            data-v-cfc9a7fc="" src="{{ asset('') }}assets/static/img/logo1.png"
                                            style="width:195px;">
                                    </div>
                                    <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex1">
                                        <!-- <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="n"> <img
                                                data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                                                src=""></div> -->
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="cid"> <span
                                                data-v-3d4e4f5e="" data-v-cfc9a7fc=""></span></div>
                                    </div>
                                    <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico">
                                        <!-- <a href="{{ route('user.setting') }}"><img data-v-3d4e4f5e=""
                                            data-v-cfc9a7fc=""
                                            src="{{ asset('') }}assets/static/img/setting.png"></a> -->
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="notice"><a
                                                href="{{ route('user.meassage') }}"><img data-v-3d4e4f5e=""
                                                    data-v-cfc9a7fc=""
                                                    src="{{ asset('') }}assets/static/img/bell.png"></a>
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="profile-container">

                                <img alt="Profile image of a person wearing a hat" class="profile-image"
                                    height="50"
                                    src="{{asset('')}}slip/usericon.png"
                                    width="50" />
                                <div class="profile-info" onclick="location.href='{{ route('user.profile') }}'">
                                    <span class="span1">
                                        {{ Auth::user()->name ? Auth::user()->name : 'User' }}
                                    </span>
                                    <div class="badges">
                                    <?php 
                                     $plan = \DB::table('investments')->where('user_id',Auth::user()->id)->where('status','Active')->orderBy('amount','DESC')->limit(1)->first();
                                     $plan = $plan?$plan->plan:0;     
                                    ?>
                                        <div class="level">
                                            <i class="fas fa-star">
                                            </i>
                                           <?php if($plan==1){echo "Core";}elseif ($plan==4) {echo "Core Prime";}elseif ($plan==10) {echo "Core Plus";}elseif ($plan==40) {echo "Core Max";}elseif ($plan==120) {echo "Core Pro";}elseif ($plan==200) {echo "Core Hub";}elseif ($plan==500) {echo "Core Turbo";}else {echo "Member";}?>
                                        </div>

                                    </div>
                                </div>
                               <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="right"  onclick="location.href='{{ route('user.profile') }}'">                                            
                                            <i data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="van-icon van-icon-arrow" style="margin-left:200px">
                                                </i>
                                            </div>
                            </div>
                            <a href="{{ route('user.invite') }}">
                                <div class="invite-card">
                                    <div class="text">
                                        <h2>
                                           @lang('Invite friends') 
                                        </h2>
                                        <p>
                                            @lang('Explore the wonderful world of artificial intelligence')
                                        </p>
                                    </div>
                                     <div class="icons">
    <!--<button class="go-button">-->
    <!-- Go-->
    <!--</button>-->
    <i data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="van-icon van-icon-arrow">
                                                </i>
   </div> 
                                </div>
                            </a>
                            <!-- <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="com-wallet flex">
                                <ul data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex1">
                                    <li data-v-3d4e4f5e="" data-v-cfc9a7fc="">
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico"><img data-v-3d4e4f5e=""
                                                data-v-cfc9a7fc=""
                                                src="{{ asset('') }}assets/static/img/dollar.png">
                                        </div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex">
                                            <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="n">@lang('Withdraw Fund'):</div>
                                            <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="s">{{ number_format(Auth::user()->available_balance() + Auth::user()->investment->where('roiCandition', 0)->sum('amount'), 2) }} USDT</div>
                                        </div>
                                    </li>
                                    <li data-v-3d4e4f5e="" data-v-cfc9a7fc="">
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico"><img data-v-3d4e4f5e=""
                                                data-v-cfc9a7fc=""
                                                src="{{ asset('') }}assets/static/img/wallet_i.png">
                                        </div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex">
                                            <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="n">@lang('Subscribe Amount'):</div>
                                            <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="s">{{ number_format(Auth::user()->investment->sum('amount'), 2) }} USDT</div>
                                        </div>
                                    </li>
                                </ul>
                                <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="str"><a href="{{ route('user.profile') }}" style="color:#fff;"><img data-v-3d4e4f5e=""
                                        data-v-cfc9a7fc=""
                                        src="{{ asset('') }}assets/static/img/profile_i.png"></a><span
                                        data-v-3d4e4f5e="" data-v-cfc9a7fc="" style="color:#fff;">@lang('Profile')</span></div>
                            </div> -->



                        </div>

                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="container">
                            <!-- <ul data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="nav1 flex">
                                <li data-v-3d4e4f5e="" data-v-cfc9a7fc="">
                                    <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico"><a href="{{ route('user.strategy') }}" style="color:#fff;"><img data-v-3d4e4f5e=""
                                            data-v-cfc9a7fc=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAAwCAYAAAC4wJK5AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAEPSURBVHgB7ZnhDYIwEIWfxgE6Qjezm8gmuglugBt0BNygNhESQKnXWu0B9yXvH5e+1x4QDkAQBGGJKK+TV+3lCqnxMkhEe1kAjols5ykKTgGGQRSIGAClDc+pApFmUniJ2YGM6G7toZeaWjxNr1EOhVc/I3YzhY543b8I+tljBUgILhyI1zkwRtqJC5u6J7i9J0ZIO3FBQnBBQnBBQnBh0yGOXi3CU4ljxrokgt+0oI1z2ox1QT+pJ0GZfNwz1iXx6SQMwrva4v3oMbVOph2LgBqixPSvRyORGuMePKPMFFB1aw+9NNTiCt8Pfn8lg4gdsEBxw1NZRKKxgp8sPcbrBqCU+Sue7V3y4SIIgpDAA7aaiV7MDIgbAAAAAElFTkSuQmCC"></a>
                                    </div>
                                    <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="n">@lang('My Strategy')</div>
                                </li>
                                <li data-v-3d4e4f5e="" data-v-cfc9a7fc="">
                                    <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico"><a href="{{ route('user.reward-bonus') }}" style="color:#fff;"><img data-v-3d4e4f5e=""
                                            data-v-cfc9a7fc=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADUAAAA0CAYAAAAqunDVAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAE9SURBVHgB7dlvrcIwFAXw817e94eEOgAH4AAJ4AAJ4AAcgAUUAA5wQB2AA+iSkUDH+mfdml1yfslNYLtbdkhLBwOIqE0/aG7i2X8zdfb0jEwNPD3n8lydU6buAXUxtS77n4oQS1PXwHMoZKIQdkGv4UZlXSKPVYj0hzyUqUP52jfckrUVSps6vbwvLnyI6rCzFXNlb22bIkPwTxTeh8ixpm+F+mG1qjlGoydz6ujo3aAaaOvo1xAQyu71XahGYqhfdE8HbmuN64tCRez7R9wn2mavtje47ijukKGSIcfwy+4rQ8Usvif0wxgJ7Hu3vrCXhwrOKSkYSgouvlIw1DeZI+wXq4t3wfTYWcfPXc0cflIwlBQMJQVDScFQUjCUFE2eTy1MzZAm9t+pqOdVTUINkP5QTKFDnFNERESU7gFgPHq2yCjE7QAAAABJRU5ErkJggg=="></a>
                                    </div>
                                    <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="n">@lang('Bonus')</div>
                                </li>
                                <li data-v-3d4e4f5e="" data-v-cfc9a7fc="">
                                    <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico"><a href="{{ route('user.team') }}" style="color:#fff;"><img data-v-3d4e4f5e=""
                                            data-v-cfc9a7fc=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAA0CAYAAADFeBvrAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAK1SURBVHgB7ZiLkdMwEIZ/0sC5A9TBXQkuASpAVICpwO4g6SDpIEcFDhXcUYHdQdJBsJANQt7VywmXMPpmdmJb0kq/tHoFyGQymUzm7XiHt0cY1g92GuwVd0YxWD1YN9iZsONgW2iRN08F3eBzoClhBW6UNcKFmKZGUuDGSBVjilo8UsqBCpE9/o73F+hQ+BDoR4Ju5GH0L4z6ysF2TP49FiARFuvd2AgXHVGu8ZQpmfpLJFAjPiRqxpdEvJiJkijbIpIUMZNVhL8W8xGNYUPUEzyXJPh9YTOmK9uBDiOVT1g+Q0S7EISP0LlLNlIJKZiK9nCHBNWYEvHYcymoU0rQYny04ENCEGkC8fQInIMr49keRnWmChH0lfgmHfmfEM+D9X7iMpqCHq2079A94+MV88OkGH97ovJYQQLzkO+5zKYgu1DMifeH9f7g8PMFcTt+Q3xj27YCT0yl7x1p3wi/NcJQo/nJ+hYaObPjRotw7FWoMdIK0Du+T1SJhSeFKrFwSDkJ/tik0sSYz3eW2yKCgqlQOMqokDgSZSg2SD+BhLQluNKpF805Nc0DKiRkpP8Yaz3+ZxTgr8WTOFf6i8d/jWWCzHYEH3+eEiuhznETYhR7vrCt7Yrsf32U6i3Sb4b9YJ+hL24TqoNah0+18ap9zN6gVX4BvUg8gkeV+QhiKV96RTatNsRwl8QDdAeGdJ6Ann8d+BD87Uc9tHCH0gF6KW1G243ffOFwZPxVSEOAX9LbKdPaobqCuwcF9KrD9RzlU2A5FeO/UYlUL3J3IA4BvucuLWaiBD36s3CTSKfBvxEzYY/Ur21DQPfuMyLWdgfPmAuSuB4N/ohJuWt5sedThzuG2pQl7hgVsrag1E06iRUuix3DPRz3/2twaUEnz/vdYZ/WJf4DBPRcusoSmslkMpnMLfMTAhsoDtsZ22AAAAAASUVORK5CYII="></a>
                                    </div>
                                    <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="n">@lang('My team')</div>
                                </li>
                                <li data-v-3d4e4f5e="" data-v-cfc9a7fc="">
                                    <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico"><a href="{{ route('user.helpcenter') }}" style="color:#fff;"><img data-v-3d4e4f5e=""
                                            data-v-cfc9a7fc=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAuCAYAAABXuSs3AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAJGSURBVHgB1ZnhkdowEEZfMvkfl7Al0EHUQeggLoEOQgl0AB2EDnAqoAToICUQ6WzuuLUtS7KFzZvZAcFa+mzvrtYAL8oXXo/C2uorr4ETu7F2svbP2ooFI9Z+U4u9KRMWhrG2s3ahLfZuZ+f4jXl5i1dra2u/mvEQf5kJJ660tqeO11ukGZ6ITq4Qgc5Ph8yFJyD0J5dP7IH6jhTN+8fv92TCNGIvxIndNcfqGNfzGCYWuyMuXq/WtviFGNon+E5KVXFXxVWBH81rSCVwuGpQUd/+a4D/Wo2PJJCSXLdG6Ibwk3tEh8k69EB5EJuaXKmsOub2zmeok+tMnNi+5Eplo9Y4+hxjk+suNgf6wpV9jsJwCauoK4GQF+lYW4YO6BLvPpsqBEIoaV+wQYRu8XumoWD4jp3U2hsCEaYVf2+q/lDnUYl/7agw6ZpgjHhD2kNAqXzPJCCEiy8I2/or/ByV/45ExCM+ZTcdilc9z6hnSyGu2/OZT8iadjUbjRDfql4ihRxIy6fR4q983voPkUL03IYJEbVARR23qwAhvu7OkCFMNMJw9xfb3R3IFCax6O6uGvCPuTtZOSkhpcc3uvfORUHcbrlVvkmPaFNQErdtB/fej+T4tdaose8nM6FdkSoCyCH8pxp/9/gaNXYneWUGXHx3bVJ95S0mibMjhIkX4pL4KQjD4kvikvhpCH7xuvfesiCEfvH6s8X9ryMMt8RZmqopEPzi9ywYoV+8YeEIM/09MgXCZ/GLDhON8CF+tt47FWFEmPwHFfDgYXzA3PsAAAAASUVORK5CYII="></a>
                                    </div>
                                    <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="n">@lang('Help Center')</div>
                                </li>
                            </ul> -->
                            <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="line">
                                <ul data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ul1">
                                    <!-- <li data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex">
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico"><img data-v-3d4e4f5e=""
                                                data-v-cfc9a7fc=""
                                                src="data:image/png;base64,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">
                                        </div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex1"> <a href="{{ route('user.level-team') }}" style="color:#fff;">My Level</a></div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="right">
                                            <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="vip"> V 0 </div>
                                            
                                                
                                        </div>
                                    </li> -->
                                    <li data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex">
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico"><img
                                                data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                                                src="{{ asset('') }}assets/static/img/team_i.png">
                                        </div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex1"><a
                                                href="{{ route('user.team') }}" style="color:#fff;">@lang('My Team')
                                            </a></div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="right">
                                            <!---->
                                            <!----><i data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                                                class="van-icon van-icon-arrow">
                                                <!----></i>
                                        </div>
                                    </li>
                                    <li data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex">
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico"><img
                                                data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                                                src="{{ asset('') }}assets/static/img/support.png">
                                        </div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex1"><a
                                                href="https://t.me/Adam_Vgcube" target="_blank"
                                                style="color:#fff;">@lang('support')
                                                @lang('Team')</a></div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="right">
                                            <!---->
                                            <!----><i data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                                                class="van-icon van-icon-arrow">
                                                <!----></i>
                                        </div>
                                    </li>

                                    <li data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex">
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico">
                                            <a href="https://x.com/VGCUBEOFFICIAL" target="_blank"
                                                style="color:#fff;">
                                                <img data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                                                    src="{{ asset('') }}assets/static/img/twitter.png">
                                        </div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex1">
                                            @lang('Twitter')</a></div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="right">
                                            <!---->
                                            <a href="https://x.com/VGCUBEOFFICIAL" target="_blank"
                                                style="color:#fff;">
                                                <!----><i data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                                                    class="van-icon van-icon-arrow">
                                                    <!----></i>
                                            </a>

                                        </div>
                                    </li>

                                    <li data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex">
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico">
                                            <a href="https://t.me/Vgcubeofficial" target="_blank"
                                                style="color:#fff;">
                                                <img data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                                                    src="{{ asset('') }}assets/static/img/teelgram.png">
                                        </div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex1">
                                            @lang('Telegram Channel')</a></div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="right">
                                            <!---->
                                            <a href="https://t.me/vgcubeofficial" target="_blank"
                                                style="color:#fff;">
                                                <!----><i data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                                                    class="van-icon van-icon-arrow">
                                                    <!----></i>
                                            </a>

                                        </div>
                                    </li>

                                    <li data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex">
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico">
                                            <a href="{{ route('user.setting') }}" style="color:#fff;">
                                                <img data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                                                    src="{{ asset('') }}assets/static/img/secure.png">
                                        </div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex1">
                                            @lang('Security')</a></div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="right">
                                            <!---->
                                            <a href="{{ route('user.setting') }}" 
                                                style="color:#fff;">
                                                <!----><i data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                                                    class="van-icon van-icon-arrow">
                                                    <!----></i>
                                            </a>

                                        </div>
                                    </li>

                                    <li data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex">
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico"><img
                                                data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                                                src="{{ asset('') }}assets/static/img/language.png">
                                        </div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex1"><a
                                                href="{{ route('user.lang') }}"
                                                style="color:#fff;">@lang('Switch Language')</a></div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="right">
                                            <!---->
                                            <!----><i data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                                                class="van-icon van-icon-arrow">
                                                <!----></i>
                                        </div>
                                    </li>
                                    <li data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex">
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico"><img
                                                data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                                                src="{{ asset('') }}assets/static/img/about.png">
                                        </div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex1"><a
                                                href="{{ route('user.about') }}"
                                                style="color:#fff;">@lang('About us')</a></div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="right">
                                            <!---->
                                            <!----><i data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                                                class="van-icon van-icon-arrow">
                                                <!----></i>
                                        </div>
                                    </li>

                                    <!---->
                                     <li data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex">
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico">
                                            <img data-v-3d4e4f5e="" data-v-cfc9a7fc="" style="   "
                                                src="{{ asset('') }}assets/static/img/download_i.png">



                                        </div>

                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex1"> <a download
                                                href="{{asset('')}}vgcube.apk" 
                                                style="color:#fff;    margin-left: 8px;"> @lang('Downlaod App')</a></div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="right">
                                            <!---->
                                            <a href="#" 
                                                style="color:#fff;">
                                                <!----><i data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                                                    class="van-icon van-icon-arrow">
                                                    <!----></i>
                                            </a>

                                        </div>
                                    </li>
                                    



                                    <!--<li data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex">-->
                                    <!--    <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico"><img data-v-3d4e4f5e=""-->
                                    <!--            data-v-cfc9a7fc=""-->
                                    <!--            src="{{ asset('') }}assets/static/img/clear.png">-->
                                    <!--    </div>-->
                                    <!--    <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex1"><a href="{{ url('/clear') }}" style="color:#fff;">@lang('Clear cache')</a></div>-->
                                    <!--    <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="right">-->
                                    <!--        <i data-v-3d4e4f5e="" data-v-cfc9a7fc=""-->
                                    <!--            class="van-icon van-icon-arrow">-->
                                    <!--            </i></div>-->
                                    <!--</li>-->


                                </ul>
                            </div>
                            <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="btn_list">
                                <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="go"><button
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                                        data-v-3d4e4f5e="" data-v-cfc9a7fc=""><img data-v-3d4e4f5e=""
                                            data-v-cfc9a7fc=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAANlBMVEUAAACUmp+Tl5+VmZ+Tmp+TmZ+VmJ+Vmp+Pn5+Ump+UmZ6VlZ+PlZ+fn5+UmZ+TmZ+Ump+Ump9V2x+yAAAAEXRSTlMA7yB/74Bi3xDAsDAwEN+gnxjKr0gAAAC/SURBVEjH7ZVLDoMwDAVtB0KSlo/vf9l29xTASSxV6obZMiNkYoAeHEietEWRkw/dgOuiaJdcBdqHL8G+mgPu+uUSCJmk24Aa/D6Q5AuCamgHrLqdrodmEBeOBBYUYzO+GAUCT4GgXyDwFNehrfUORrCoRTLOwRtE6xbz8NDvCT6CAR+Bw0fQ9+1z2Krlg2+fA5+e8ux5gSL8ZgDWlSr+9NVIti+3wSGWnw7HtoIqyH2/VIGw84dCUtp6FnoY5wNKBCglvweqdgAAAABJRU5ErkJggg==">@lang('Log out')
                                    </button>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('layouts.upnl.footer')
