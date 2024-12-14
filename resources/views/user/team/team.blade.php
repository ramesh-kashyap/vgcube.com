<html lang="en" class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>@lang('Team')</title>
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
    <style>
blockquote, body, dd, del, div, dl, dt, fieldset, form, h1, h2, h3, h4, h5, h6, input, li, menu, ol, p, pre, td, textarea, th, ul {
    margin: 0;
    padding: 0;
}
* {
    border: none;
    background: none;
    box-sizing: border-box;
    vertical-align: top;
}
#app {
    max-width: 8.5rem;
    width: 100%;
    min-height: 100%;
    word-wrap: break-word;
    word-break: normal;
    font-family: Poppins, PingFang SC, Microsoft Yahei, sans-serif;
}
.tame .tab[data-v-273cf854] {
    padding: 0 0 .24rem 0;
    font-size: .32rem;
    font-weight: 600;
}
.tame .it[data-v-273cf854] {
    margin-bottom: 1.24rem;
}
.tame .name[data-v-273cf854] {
    border-bottom: .02rem solid hsla(0, 0%, 100%, .1);
    margin-bottom: .24rem;
    padding-bottom: .24rem;
}
.tame .name img[data-v-273cf854] {
    height: .32rem;
    vertical-align: middle;
    margin-left: .14rem;
}
.tame .it .db[data-v-273cf854] {
    text-align: center;
}
.tame .it .db li[data-v-273cf854] {
    padding: 0 .1rem;
}
.tame .it .db .s[data-v-273cf854] {
    font-size: .28rem;
    margin-bottom: .16rem;
    font-weight: 600;
}
.tame .it .db li[data-v-273cf854] {
    padding: 0 .1rem;
}
.tame .it .db .s[data-v-273cf854] {
    font-size: .28rem;
    margin-bottom: .16rem;
    font-weight: 600;
}
.tame .it .db .n[data-v-273cf854] {
    color: #929292;
    font-size: .22rem;
}
.tame .it .db li[data-v-273cf854] {
    padding: 0 .1rem;
}
.tame .it[data-v-273cf854] {
    margin-bottom: 1.24rem;
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
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-55f99183.7fd6d71d.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-55f99183.e36ebbe6.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-2a0b1332.9f52f39a.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-2a0b1332.0436ba68.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-f8e2ce82.4965c1ba.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-f8e2ce82.8a913baf.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-273ce16e.debfb5de.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-273ce16e.6f3f099a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-aef56f2a.f587d975.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-aef56f2a.b3c068cc.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-21a2b91c.0ed7b871.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-21a2b91c.12695023.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-73ab94aa.2e0ec155.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-73ab94aa.70e0e268.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-65aadf8b.a4cef8a6.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-65aadf8b.59fb6a2e.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-67098c77.8b942857.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-67098c77.b8c94109.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-3cbe2e96.30f94eac.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-3cbe2e96.e797acf7.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-17b291de.e7b989c3.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-17b291de.8772eeeb.1717187934571.chunk.js"></script>
</head>

<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-757d6f7f="" class="home">
            <div data-v-cfc9a7fc="" data-v-757d6f7f="" class="page">
                <div data-v-cfc9a7fc="" class="headers">
                    <div data-v-397da544="" data-v-757d6f7f="" class="head" data-v-cfc9a7fc="">
                        <div data-v-397da544="" class="container flex">
                            <div data-v-397da544="" class="back"><a href="{{route('user.account')}}" style="color:#fff;"><i data-v-397da544=""
                                    class="van-icon van-icon-arrow-left">
                                    <!----></i></a></div>
                            <!---->
                            <div data-v-397da544="" class="name tac">@lang('My team') </div>
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
                        <div data-v-757d6f7f="" data-v-cfc9a7fc="" class="container">
                            <div data-v-757d6f7f="" data-v-cfc9a7fc="" class="totalBox">
                                <div data-v-757d6f7f="" data-v-cfc9a7fc="" class="n">@lang('Total Yield')</div>
                                <div data-v-757d6f7f="" data-v-cfc9a7fc="" class="s"> {{number_format($totalLevelIncome,2)}} USDT </div>
                            </div>
                            <div data-v-757d6f7f="" data-v-cfc9a7fc="" class="sjfxBox">
                                <!-- <div data-v-757d6f7f="" data-v-cfc9a7fc="" class="cname">
                                    <div data-v-757d6f7f="" data-v-cfc9a7fc="" class="n">Data Analysis</div>
                                    <div data-v-757d6f7f="" data-v-cfc9a7fc="" class="s"> Daily Earning: <span
                                            data-v-757d6f7f="" data-v-cfc9a7fc="">0</span></div>
                                </div> -->
                                <!-- <div data-v-757d6f7f="" data-v-cfc9a7fc="" class="com-1">
                                    <ul data-v-757d6f7f="" data-v-cfc9a7fc="" class="col-1">
                                        <li data-v-757d6f7f="" data-v-cfc9a7fc=""><img data-v-757d6f7f=""
                                                data-v-cfc9a7fc=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgBAMAAACBVGfHAAAAMFBMVEUAAAAAw8cAxMkAw8cAxMkAxMoAxMYAxMgAxMgAw88AxMkAxMkAxcgAxMkAwskAxMlKOZAbAAAAD3RSTlMAgO8g4MBwv3AQ97ifoKDWAa9OAAAAk0lEQVQoz2OgGuAU9/9UZoDgM9f/B4I/CJGk/2CgBuMz/ocCAahAPkzgG9QEfZjAJ4gpfP/hIAAsYI8Q+AnkCgruRwh8FxQECvgjBL6ABdYjBD6BBf4jAewC+gj+L+yGxiMEfgMFGBjmIwQ+g13KihA4gN1zDP0wgR+4AoihCcLXQATyfRD/K3Kwp+p/CZxAtVgFAJoc3L76oBkgAAAAAElFTkSuQmCC">New
                                            member </li>
                                    </ul>
                                    <div data-v-757d6f7f="" data-v-cfc9a7fc="" class="days"> Today <img
                                            data-v-757d6f7f="" data-v-cfc9a7fc=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkAgMAAACcbnALAAAADFBMVEUAAAD///////////84wDuoAAAABHRSTlMAzGZMZ+vIJAAAAEdJREFUGNNjGDhgA8YgcA2Ip4NZVxsYmMLBLNUEBs4IEANIgTggwBTGMLUBonlqUxjUGNXMCCiLMzQBymIKbYDZMg3JvgEEAG9+C4cqfDR2AAAAAElFTkSuQmCC">
                                    </div>
                                </div> -->
                                <!-- <div data-v-757d6f7f="" data-v-cfc9a7fc="" class="tuBiao">
                                    <div data-v-757d6f7f="" data-v-cfc9a7fc="" _echarts_instance_="ec_1718094184764"
                                        style="width: 100%; height: 5rem; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;">
                                        <div
                                            style="position: relative; width: 385px; height: 250px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;">
                                            <canvas data-zr-dom-id="zr_0" width="770" height="500"
                                                style="position: absolute; left: 0px; top: 0px; width: 385px; height: 250px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                                            <div
                                                style="position: absolute !important; visibility: hidden !important; padding: 0px !important; margin: 0px !important; border-width: 0px !important; user-select: none !important; width: 0px !important; height: 0px !important; inset: 0px auto auto 0px !important;">
                                            </div>
                                            <div
                                                style="position: absolute !important; visibility: hidden !important; padding: 0px !important; margin: 0px !important; border-width: 0px !important; user-select: none !important; width: 0px !important; height: 0px !important; inset: 0px 0px auto auto !important;">
                                            </div>
                                            <div
                                                style="position: absolute !important; visibility: hidden !important; padding: 0px !important; margin: 0px !important; border-width: 0px !important; user-select: none !important; width: 0px !important; height: 0px !important; inset: auto auto 0px 0px !important;">
                                            </div>
                                            <div
                                                style="position: absolute !important; visibility: hidden !important; padding: 0px !important; margin: 0px !important; border-width: 0px !important; user-select: none !important; width: 0px !important; height: 0px !important; inset: auto 0px 0px auto !important;">
                                            </div>
                                        </div>
                                        <div class=""
                                            style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; box-shadow: rgba(0, 0, 0, 0.2) 1px 2px 10px; transition: opacity 0.2s cubic-bezier(0.23, 1, 0.32, 1) 0s, visibility 0.2s cubic-bezier(0.23, 1, 0.32, 1) 0s, transform 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s; background-color: rgb(0, 0, 0); border-width: 1px; border-radius: 4px; color: rgb(102, 102, 102); font: 14px / 21px sans-serif; padding: 10px; top: 0px; left: 0px; transform: translate3d(196px, 139px, 0px); border-color: rgb(0, 0, 0); pointer-events: none; visibility: hidden; opacity: 0;">
                                            <span style="color:#fff;">
                                                New member</span>
                                            <p style="color:#fff">0 People</p>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <ul data-v-757d6f7f="" data-v-cfc9a7fc="" class="com-2">
                                    <li data-v-757d6f7f="" data-v-cfc9a7fc="">
                                        <div data-v-757d6f7f="" data-v-cfc9a7fc="" class="n">New revenue </div>
                                        <div data-v-757d6f7f="" data-v-cfc9a7fc="" class="s">0 U</div>
                                    </li>
                                    <li data-v-757d6f7f="" data-v-cfc9a7fc="">
                                        <div data-v-757d6f7f="" data-v-cfc9a7fc="" class="n">New member</div>
                                        <div data-v-757d6f7f="" data-v-cfc9a7fc="" class="s"> 0<a href="{{route('user.list')}}"><img data-v-757d6f7f=""
                                                data-v-cfc9a7fc=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAhCAMAAACP+FljAAAAM1BMVEWl/30AAACn/32k/32m/36m/36d/3al/3+n/4Cn/3ym/32m/36n/4CZ/4Cl/32q/46m/325gAPAAAAAEHRSTlMzAJks5U0GMCAc8lkTCrMJhzE5swAAALVJREFUOMuNk1EOhCAMBR8LtEVx1/ufdvtBUlsNOL8zShMK0oJr0CUzwFn6U0CNYQjFoCHQXEAZNzJZcAwfimME9n0saATmY6ESYb76qX5SJMKVcm47DNJAQuCKpgEc1Rec0DEtOgTTQpAxLTLGFe0f43tawTZ9YIPxGBTA/aOGI0od+nFI86pl6lX34Pft6lUnnnkkhG0s3sv9up0HrRZmtXLLpV2s/W/9cN4/PYUEBjd6/fz/ZucIv4aUi7oAAAAASUVORK5CYII="></a>
                                        </div>
                                    </li>
                                    <li data-v-757d6f7f="" data-v-cfc9a7fc="">
                                        <div data-v-757d6f7f="" data-v-cfc9a7fc="" class="n">Vaild</div>
                                        <div data-v-757d6f7f="" data-v-cfc9a7fc="" class="s"> 0 </div>
                                    </li>
                                </ul> -->
                            </div>
                            <div data-v-757d6f7f="" data-v-cfc9a7fc="" class="teamData">
                                <div data-v-757d6f7f="" data-v-cfc9a7fc="" class="cname">
                                    <div data-v-757d6f7f="" data-v-cfc9a7fc="" class="n">@lang('Team data')</div>
                                    <div data-v-757d6f7f="" data-v-cfc9a7fc="" class="s"><span data-v-757d6f7f=""
                                            data-v-cfc9a7fc=""><a href="{{route('user.list')}}" style="color:#fff;">@lang('Team List')</a></span></div>
                                </div>
                                <ul data-v-757d6f7f="" data-v-cfc9a7fc="" class="com-2" style="background: linear-gradient(92deg, #55B2C2 1.36%, #fff 103.37%);">
                                    <li data-v-757d6f7f="" data-v-cfc9a7fc="">
                                        <div data-v-757d6f7f="" data-v-cfc9a7fc="" class="n">@lang('Total member')</div>
                                        <div data-v-757d6f7f="" data-v-cfc9a7fc="" class="s"> {{$totalTeam}}<a href="{{route('user.list')}}" style="color:#fff;"><img data-v-757d6f7f=""
                                                data-v-cfc9a7fc=""
                                                src="{{asset('assets/static/img/icons8-back-arrow-50.png')}}"></a>
                                        </div>
                                    </li>
                                    <li data-v-757d6f7f="" data-v-cfc9a7fc="">
                                        <div data-v-757d6f7f="" data-v-cfc9a7fc="" class="n">@lang('Total vaild')</div>
                                        <div data-v-757d6f7f="" data-v-cfc9a7fc="" class="s"> {{$ActivetotalTeam}}<a href="{{route('user.list')}}?search=Active" style="color:#fff;"><img data-v-757d6f7f=""
                                                data-v-cfc9a7fc=""
                                                src="{{asset('assets/static/img/icons8-back-arrow-50.png')}}"></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="tame">
                                <div data-v-273cf854="" data-v-cfc9a7fc="" class="tab"> @lang('Five generations data') </div>
                                <div data-v-273cf854="" data-v-cfc9a7fc="" class="it">
                                    
                                    <a href="{{route('user.list')}}?selected_level=1" style="color:#fff;">
                                    <div data-v-273cf854="" data-v-cfc9a7fc="" class="name">@lang('First generation data')<img
                                            data-v-273cf854="" data-v-cfc9a7fc=""
                                            src="{{asset('assets/static/img/icons8-back-arrow-50.png')}}">
                                    </div>
                                    </a>
                                    <!---->
                                    <!---->
                                    <ul data-v-273cf854="" data-v-cfc9a7fc="" class="db">
                                        <li data-v-273cf854="" data-v-cfc9a7fc="">
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="s">{{$active_gen_team1total}}/{{$gen_team1total}}</div>
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="n">@lang('Number of users')</div>
                                        </li>
                                        <li data-v-273cf854="" data-v-cfc9a7fc="">
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="s">{{number_format($gen_team1Recharge,1)}}</div>
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="n">@lang('Cumulative recharge')
                                            </div>
                                        </li>
                                        <li data-v-273cf854="" data-v-cfc9a7fc="">
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="s"> {{number_format($gen_team1Withdraw,2)}} </div>
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="n">@lang('Cumulative withdrawal')
                                            </div>
                                        </li>
                                        <li data-v-273cf854="" data-v-cfc9a7fc="">
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="s"> {{number_format($gen_team1Earning,2)}}</div>
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="n">@lang('Cumulative Yield')
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div data-v-273cf854="" data-v-cfc9a7fc="" class="it">
                                    <!---->
                                       <a href="{{route('user.list')}}?selected_level=2" style="color:#fff;">
                                    <div data-v-273cf854="" data-v-cfc9a7fc="" class="name"> @lang('Second generation data')<img
                                            data-v-273cf854="" data-v-cfc9a7fc=""
                                            src="{{asset('assets/static/img/icons8-back-arrow-50.png')}}">
                                    </div>
                                    </a>
                                    <!---->
                                    <ul data-v-273cf854="" data-v-cfc9a7fc="" class="db">
                                        <li data-v-273cf854="" data-v-cfc9a7fc="">
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="s">{{$active_gen_team2total}}/{{$gen_team2total}}</div>
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="n">@lang('Number of users')</div>
                                        </li>
                                        <li data-v-273cf854="" data-v-cfc9a7fc="">
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="s">{{number_format($gen_team2Recharge,1)}}</div>
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="n">@lang('Cumulative recharge')
                                            </div>
                                        </li>
                                        <li data-v-273cf854="" data-v-cfc9a7fc="">
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="s">  {{number_format($gen_team2Withdraw,2)}}  </div>
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="n">@lang('Cumulative withdrawal')
                                            </div>
                                        </li>
                                        <li data-v-273cf854="" data-v-cfc9a7fc="">
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="s">{{number_format($gen_team2Earning,2)}}</div>
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="n">@lang('Cumulative Yield')
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div data-v-273cf854="" data-v-cfc9a7fc="" class="it">
                                    <!---->
                                    <!---->
                                       <a href="{{route('user.list')}}?selected_level=3" style="color:#fff;">
                                    <div data-v-273cf854="" data-v-cfc9a7fc="" class="name">@lang('Third generation data')<img
                                            data-v-273cf854="" data-v-cfc9a7fc=""
                                            src="{{asset('assets/static/img/icons8-back-arrow-50.png')}}">
                                    </div>
                                    </a>
                                    <ul data-v-273cf854="" data-v-cfc9a7fc="" class="db">
                                        <li data-v-273cf854="" data-v-cfc9a7fc="">
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="s">{{$active_gen_team3total}}/{{$gen_team3total}}</div>
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="n">@lang('Number of users')</div>
                                        </li>
                                        <li data-v-273cf854="" data-v-cfc9a7fc="">
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="s">{{number_format($gen_team3Recharge,1)}}</div>
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="n">@lang('Cumulative recharge')
                                            </div>
                                        </li>
                                        <li data-v-273cf854="" data-v-cfc9a7fc="">
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="s"> {{number_format($gen_team3Withdraw,2)}}  </div>
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="n">@lang('Cumulative withdrawal')
                                            </div>
                                        </li>
                                        <li data-v-273cf854="" data-v-cfc9a7fc="">
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="s">{{number_format($gen_team3Earning,2)}}</div>
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="n">@lang('Cumulative Yield')
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div data-v-273cf854="" data-v-cfc9a7fc="" class="it">
                                    <!---->
                                    <!---->
                                       <a href="{{route('user.list')}}?selected_level=4" style="color:#fff;">
                                    <div data-v-273cf854="" data-v-cfc9a7fc="" class="name">@lang('Fourth generation data')<img
                                            data-v-273cf854="" data-v-cfc9a7fc=""
                                            src="{{asset('assets/static/img/icons8-back-arrow-50.png')}}">
                                    </div>
                                    </a>
                                    <ul data-v-273cf854="" data-v-cfc9a7fc="" class="db">
                                        <li data-v-273cf854="" data-v-cfc9a7fc="">
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="s">{{$active_gen_team4total}}/{{$gen_team4total}}</div>
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="n">@lang('Number of users')</div>
                                        </li>
                                        <li data-v-273cf854="" data-v-cfc9a7fc="">
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="s">{{number_format($gen_team4Recharge,1)}}</div>
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="n">@lang('Cumulative recharge')
                                            </div>
                                        </li>
                                        <li data-v-273cf854="" data-v-cfc9a7fc="">
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="s"> {{number_format($gen_team4Withdraw,2)}}  </div>
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="n">@lang('Cumulative withdrawal')
                                            </div>
                                        </li>
                                        <li data-v-273cf854="" data-v-cfc9a7fc="">
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="s">{{number_format($gen_team4Earning,2)}}</div>
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="n">@lang('Cumulative Yield')
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                  
                                <div data-v-273cf854="" data-v-cfc9a7fc="" class="it">
                                    <!---->
                                    <!---->
                                    <a href="{{route('user.list')}}?selected_level=4" style="color:#fff;">
                                    <div data-v-273cf854="" data-v-cfc9a7fc="" class="name">@lang('Fifth generation data')<img
                                            data-v-273cf854="" data-v-cfc9a7fc=""
                                            src="{{asset('assets/static/img/icons8-back-arrow-50.png')}}">
                                    </div>
                                    </a>
                                    <ul data-v-273cf854="" data-v-cfc9a7fc="" class="db">
                                        <li data-v-273cf854="" data-v-cfc9a7fc="">
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="s">{{$active_gen_team5total}}/{{$gen_team5total}}</div>
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="n">@lang('Number of users')</div>
                                        </li>
                                        <li data-v-273cf854="" data-v-cfc9a7fc="">
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="s">{{number_format($gen_team5Recharge,1)}}</div>
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="n">@lang('Cumulative recharge')
                                            </div>
                                        </li>
                                        <li data-v-273cf854="" data-v-cfc9a7fc="">
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="s"> {{number_format($gen_team5Withdraw,2)}}  </div>
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="n">@lang('Cumulative withdrawal')
                                            </div>
                                        </li>
                                        <li data-v-273cf854="" data-v-cfc9a7fc="">
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="s">{{number_format($gen_team5Earning,2)}}</div>
                                            <div data-v-273cf854="" data-v-cfc9a7fc="" class="n">@lang('Cumulative Yield')
                                            </div>
                                        </li>
                                    </ul>
                                </div>



                            </div>
                        </div>
                        <div data-v-4c14e1cc="" data-v-757d6f7f="" data-v-cfc9a7fc="">
                            <!---->
                        </div>
                    </div>
                </div>
            @include('layouts.upnl.footer')