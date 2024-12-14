<html lang="en" class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>Team List</title>
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
        window.addEventListener("error", function (event) {
            if (event.message.indexOf("Unexpected token '<'") > -1) {
                location.reload();
            }
        });
        window.onload = function () {
            document.addEventListener("touchstart", function (event) {
                if (event.touches.length > 1) {
                    event.preventDefault();
                }
            });
            var lastTouchEnd = 0;
            document.addEventListener(
                "touchend",
                function (event) {
                    var now = new Date().getTime();
                    if (now - lastTouchEnd <= 300) {
                        event.preventDefault();
                    }
                    lastTouchEnd = now;
                },
                false
            );
            document.addEventListener("gesturestart", function (event) {
                event.preventDefault();
            });
        };

        if ("standalone" in window.navigator && window.navigator.standalone) {
            var noddy,
                remotes = false;
            document.addEventListener(
                "click",
                function (event) {
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
    <link href="{{asset('')}}assets/static/js/app.83a7756d.1717187934571.js" rel="preload" as="script">
    <link href="{{asset('')}}assets/static/js/chunk-echarts.eba990db.1717187934571.chunk.js" rel="preload" as="script">
    <link href="{{asset('')}}assets/static/js/chunk-vant.9e1db231.1717187934571.chunk.js" rel="preload" as="script">
    <link href="{{asset('')}}assets/static/js/chunk-vendors.24e8c7cc.1717187934571.chunk.js" rel="preload" as="script">
    <link href="{{asset('')}}assets/static/js/chunk-vue.2deea45a.1717187934571.chunk.js" rel="preload" as="script">
    <link href="{{asset('')}}assets/static/css/app.23ae5dc0.css" rel="preload" as="style">
    <link href="{{asset('')}}assets/static/css/chunk-vant.d14f5539.css" rel="preload" as="style">
    <link href="{{asset('')}}assets/static/css/chunk-vendors.794edbf9.css" rel="preload" as="style">
    <link href="{{asset('')}}assets/static/css/chunk-vant.d14f5539.css" rel="stylesheet">
    <link href="{{asset('')}}assets/static/css/chunk-vendors.794edbf9.css" rel="stylesheet">
    <link href="{{asset('')}}assets/static/css/app.23ae5dc0.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-64987b26.5bff7a5a.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-64987b26.1b0de86e.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-2a0b1332.9f52f39a.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-2a0b1332.0436ba68.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-f8e2ce82.4965c1ba.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-f8e2ce82.8a913baf.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-273ce16e.debfb5de.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-273ce16e.6f3f099a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-21a2b91c.0ed7b871.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-21a2b91c.12695023.1717187934571.chunk.js"></script>
</head>

<style>
       nav {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

 .pagination {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
}

 .pagination li {
    margin: 0 5px;
}

 .pagination li a,
 .pagination li span {
    display: block;
    padding: 5px 9px;
    color: #007bff;
    text-decoration: none;
    border: 1px solid #dee2e6;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
}

 .pagination li a:hover,
 .pagination li span:hover {
    background-color: #007bff;
    color: white;
}

 .pagination .active span {
      background-color: #55b2c2;
    color: black;
    border-color: #55b2c2;
}

 .pagination .disabled span {
    color: #6c757d;
    pointer-events: none;
    cursor: default;
}

a{
    color:#fff!important;
}

.pagination {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
    overflow-y: auto !important;
}
.list>li .n1 .n[data-v-a5a9abc4] {
    flex: 1;
    font-size: .22rem;
    font-weight: 600;
    line-height: .48rem;
    display: flex;
    align-items: center;
}
</style>
<body class="main_en">
    <div id="app" class="applang">
        <div data-v-a5a9abc4="" class="home">
            <div data-v-cfc9a7fc="" data-v-a5a9abc4="" class="page">
                <div data-v-cfc9a7fc="" class="headers">
                    <div data-v-397da544="" data-v-a5a9abc4="" class="head" data-v-cfc9a7fc="">
                        <div data-v-397da544="" class="container flex">
                            <div data-v-397da544="" class="back"><a href="{{route('user.team')}}" style="color:white"><i data-v-397da544=""
                                    class="van-icon van-icon-arrow-left">
                                    <!----></i>
                                </a>
                                </div>
                            <!---->
                            <div data-v-397da544="" class="name tac"> @lang('Team List') </div>
                            <div data-v-397da544="" class="flex1"></div>
                            <!---->
                            <!---->
                            <!---->
                            <div data-v-397da544="" class="head_right"></div>
                        </div>
                    </div>
                </div>
                <div data-v-cfc9a7fc="" id="scroll" class="content-container">
                    <div data-v-cfc9a7fc="" id="content" class="content-scroll">
                        <div data-v-a5a9abc4="" data-v-cfc9a7fc="" class="container">
                            <!-- <div data-v-a5a9abc4="" data-v-cfc9a7fc="" class="box1">
                                <div data-v-a5a9abc4="" data-v-cfc9a7fc="" class="totalBox">
                                    <div data-v-a5a9abc4="" data-v-cfc9a7fc="" class="n">Total：1</div>
                                    <div data-v-a5a9abc4="" data-v-cfc9a7fc="" class="lvSet"> First generation data <img
                                            data-v-a5a9abc4="" data-v-cfc9a7fc=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkAgMAAACcbnALAAAADFBMVEUAAAD///////////84wDuoAAAABHRSTlMAzGZMZ+vIJAAAAEdJREFUGNNjGDhgA8YgcA2Ip4NZVxsYmMLBLNUEBs4IEANIgTggwBTGMLUBonlqUxjUGNXMCCiLMzQBymIKbYDZMg3JvgEEAG9+C4cqfDR2AAAAAElFTkSuQmCC">
                                    </div>
                                </div>
                                <div data-v-a5a9abc4="" data-v-cfc9a7fc="" class="lvList">
                                    <div data-v-a5a9abc4="" data-v-cfc9a7fc="" _echarts_instance_="ec_1718361639824"
                                        style="width: 100%; height: 6rem; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;">
                                        <div
                                            style="position: relative; width: 353px; height: 300px; padding: 0px; margin: 0px; border-width: 0px; cursor: pointer;">
                                            <canvas data-zr-dom-id="zr_0" width="706" height="600"
                                                style="position: absolute; left: 0px; top: 0px; width: 353px; height: 300px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                                        </div>
                                        <div class=""
                                            style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; box-shadow: rgba(0, 0, 0, 0.2) 1px 2px 10px; background-color: rgb(255, 255, 255); border-width: 1px; border-radius: 4px; color: rgb(102, 102, 102); font: 14px / 21px sans-serif; padding: 10px; top: 0px; left: 0px; transform: translate3d(188px, 146px, 0px); border-color: rgb(249, 199, 79); pointer-events: none; visibility: hidden; opacity: 0;">
                                            <div style="margin: 0px 0 0;line-height:1;">
                                                <div style="margin: 0px 0 0;line-height:1;"><span
                                                        style="display:inline-block;margin-right:4px;border-radius:10px;width:10px;height:10px;background-color:#F9C74F;"></span><span
                                                        style="font-size:14px;color:#666;font-weight:400;margin-left:2px">LV0</span><span
                                                        style="float:right;margin-left:20px;font-size:14px;color:#666;font-weight:900">1</span>
                                                    <div style="clear:both"></div>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div data-v-a5a9abc4="" data-v-cfc9a7fc="" class="empty db" style="display: none;">
                                <div data-v-a5a9abc4="" data-v-cfc9a7fc="" class="flexs">
                                    <div data-v-a5a9abc4="" class="custom-image van-empty" data-v-cfc9a7fc="">
                                        <div class="van-empty__image"><img src="/static/img/none.66fca9cb.png"></div>
                                        <p class="van-empty__description">@lang('No record yet')</p>
                                    </div>
                                </div>
                            </div>
                            <div data-v-a5a9abc4="" class="van-pull-refresh" data-v-cfc9a7fc="">
                                <div class="van-pull-refresh__track" style="transition-duration: 0ms;">
                                    <div class="van-pull-refresh__head" style="height: 50px;"></div>
                                    <div data-v-a5a9abc4="" role="feed" class="van-list">
                                        <ul data-v-a5a9abc4="" class="list">

                                            <?php if(is_array($direct_team) || is_object($direct_team)){ ?>

                                                <?php $cnt = $direct_team->perPage() * ($direct_team->currentPage() - 1); ?>
                                                @foreach ($direct_team as $value)

                                            <li data-v-a5a9abc4="">
                                                <div data-v-a5a9abc4="" class="flex">
                                                  
                                                    <div data-v-a5a9abc4="" class="flex1">
                                                        <div data-v-a5a9abc4="" class="n1 flex">
                                                            <div data-v-a5a9abc4="" class="n">{{$value->name}} - {{$value->username}}  <span
                                                                    data-v-a5a9abc4="">LV {{$value->level-Auth::user()->level}}</span></div>
                                                            <div data-v-a5a9abc4="" class="s"><span
                                                                    data-v-a5a9abc4="">{{ $value->active_status }}</span></div>
                                                        </div>
                                                        <div data-v-a5a9abc4="" class="n2 flex">
                                                            <div data-v-a5a9abc4="" class="n"> Join in: {{ date('D, d M Y H:i:s', strtotime($value->created_at)) }} </div>
                                                            <div data-v-a5a9abc4="" class="s">{{ ($value->investment->sum('amount'))?$value->investment->sum('amount'):0 }} USDT </div>
                                                        </div>
                                                    </div>
                                                </div>
                                           
                                            </li>
                                            @endforeach
                                            <?php }?>
                                            
                                        
                                        </ul>
                                        {{ $direct_team->withQueryString()->links() }}
                                      
                                        <div class="van-list__placeholder"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-v-4c14e1cc="" data-v-a5a9abc4="" data-v-cfc9a7fc="">
                            <!---->
                        </div>
                    </div>
                </div>
                <script>
        $(".n").click(function()
        {
            // alert("hi");
        // $(".van-overlay").toggleClass("van-overlay-active");
        $('.u1').toggle().css('display','block');

        });
        $(".close-btn").click(function()
        {
            // alert("hi");
        // $(".van-overlay").toggleClass("van-overlay-active");
        $('.van-popup--bottom').toggle().css('display','none');

        });
        </script>
                @include('layouts.upnl.footer')