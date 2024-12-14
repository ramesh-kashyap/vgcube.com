<html lang="en" class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>Help center</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-04a90ad1.aa2f317d.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-04a90ad1.28c21b1a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-2a0b1332.9f52f39a.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-2a0b1332.0436ba68.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-f8e2ce82.4965c1ba.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-f8e2ce82.8a913baf.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-273ce16e.debfb5de.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-273ce16e.6f3f099a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-67098c77.8b942857.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-67098c77.b8c94109.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-21a2b91c.0ed7b871.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-21a2b91c.12695023.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-f8870696.ba836efa.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-f8870696.d3c72f4a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-65aadf8b.a4cef8a6.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-65aadf8b.59fb6a2e.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-43a21247.c7b442a8.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-43a21247.bd486532.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-66c4c188.61a42d60.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-66c4c188.806de089.1717187934571.chunk.js"></script>
</head>

<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-cfc9a7fc="" data-v-0c0d492c="" class="page">
            <div data-v-cfc9a7fc="" class="headers">
                <div data-v-397da544="" data-v-0c0d492c="" class="head" data-v-cfc9a7fc="">
                    <div data-v-397da544="" class="container flex">
                        <div data-v-397da544="" class="back"><a href="{{route('user.dashboard')}}" style="color:#fff;"><i data-v-397da544="" class="van-icon van-icon-arrow-left">
                                <!----></i></a></div>
                        <!---->
                        <div data-v-397da544="" class="name tac"> @lang('Help center') </div>
                        <div data-v-397da544="" class="flex1"></div>
                        <!---->
                        <!---->
                        <!---->
                        <div data-v-397da544="" class="head_right"></div>
                    </div>
                </div>
                <div data-v-0c0d492c="" data-v-cfc9a7fc="" class="container">
                    <div data-v-83cbb658="" data-v-0c0d492c="" class="tabs-con" data-v-cfc9a7fc="">
                        <div data-v-83cbb658="" class="van-tabs van-tabs--line">
                            <div class="van-tabs__wrap van-tabs__wrap--scrollable">
                                <div role="tablist" class="van-tabs__nav van-tabs__nav--line van-tabs__nav--complete">
                                    <div role="tab" aria-selected="true" class="van-tab van-tab--active"><span
                                            class="van-tab__text">@lang('FAQ')</span></div>
                                   
                                    <div class="van-tabs__line"
                                        style="transform: translateX(76.5px) translateX(-50%); transition-duration: 0.3s;">
                                    </div>
                                </div>
                            </div>
                            <div class="van-tabs__content">
                                <!---->
                                <!---->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-v-cfc9a7fc="" id="scroll" class="content-container">
                <div data-v-cfc9a7fc="" id="content" class="content-scroll">
                    <div data-v-0c0d492c="" data-v-cfc9a7fc="" class="container">
                        <div data-v-0c0d492c="" data-v-cfc9a7fc="" class="item">
                            <div data-v-0c0d492c="" data-v-cfc9a7fc="" class="empty db" style="display: none;">
                                <div data-v-0c0d492c="" data-v-cfc9a7fc="" class="flexs">
                                    <div data-v-0c0d492c="" class="custom-image van-empty" data-v-cfc9a7fc="">
                                        <div class="van-empty__image"><img src="/static/img/none.fe897b1e.png"></div>
                                        <p class="van-empty__description">@lang('No record yet')</p>
                                    </div>
                                </div>
                            </div>
                            <div data-v-0c0d492c="" class="van-pull-refresh" data-v-cfc9a7fc="">
                                <div class="van-pull-refresh__track" style="transition-duration: 0ms;">
                                    <div class="van-pull-refresh__head" style="height: 50px;"></div>
                                    <div data-v-0c0d492c="" role="feed" class="van-list">
                                        <ul data-v-0c0d492c="" class="list">
                                            <li data-v-0c0d492c="" class="db">
                                                <div data-v-0c0d492c="" class="flexs">@lang('When your account triggers certain risk control measures due to non-human factors, how to release the risk control?')</div>
                                                <div data-v-0c0d492c="" class="s"><i data-v-0c0d492c=""
                                                        class="">
                                                        <!----></i></div>
                                            </li>
                                            <li data-v-0c0d492c="" class="db">
                                                <div data-v-0c0d492c="" class="flexs">@lang('The risk control of the account and why the risk control is triggered?')</div>
                                                <div data-v-0c0d492c="" class="s"><i data-v-0c0d492c=""
                                                        class="">
                                                        <!----></i></div>
                                            </li>
                                            <li data-v-0c0d492c="" class="db">
                                                <div data-v-0c0d492c="" class="flexs">@lang('Maximizing Synthetic Venture Income Diversified Income Strategy') </div>
                                                <div data-v-0c0d492c="" class="s"><i data-v-0c0d492c=""
                                                        class="">
                                                        <!----></i></div>
                                            </li>
                                            <li data-v-0c0d492c="" class="db">
                                                <div data-v-0c0d492c="" class="flexs">@lang('Synthetic strategy adopted by Synthetic Venture')
                                                </div>
                                                <div data-v-0c0d492c="" class="s"><i data-v-0c0d492c=""
                                                        class="">
                                                        <!----></i></div>
                                            </li>
                                            <li data-v-0c0d492c="" class="db">
                                                <div data-v-0c0d492c="" class="flexs">@lang('What are funds to be released?')'
                                                </div>
                                                <div data-v-0c0d492c="" class="s"><i data-v-0c0d492c=""
                                                        class="">
                                                        <!----></i></div>
                                            </li>
                                            <li data-v-0c0d492c="" class="db">
                                                <div data-v-0c0d492c="" class="flexs">@lang('Synthetic Venture Task Strategy Operation')
                                                    Guide </div>
                                                <div data-v-0c0d492c="" class="s"><i data-v-0c0d492c=""
                                                        class="">
                                                        <!----></i></div>
                                            </li>
                                            <li data-v-0c0d492c="" class="db">
                                                <div data-v-0c0d492c="" class="flexs">@lang('Benefits of executing Synthetic Venture strategies on a daily basis')</div>
                                                <div data-v-0c0d492c="" class="s"><i data-v-0c0d492c=""
                                                        class="">
                                                        <!----></i></div>
                                            </li>
                                            <li data-v-0c0d492c="" class="db">
                                                <div data-v-0c0d492c="" class="flexs">@lang('Benefits of using USDT for settlement by mainstream global cryptocurrency trading platforms')
                                                </div>
                                                <div data-v-0c0d492c="" class="s"><i data-v-0c0d492c=""
                                                        class="">
                                                        <!----></i></div>
                                            </li>
                                            <li data-v-0c0d492c="" class="db">
                                                <div data-v-0c0d492c="" class="flexs">@lang('Benefits of creating a Synthetic Ventur community') </div>
                                                <div data-v-0c0d492c="" class="s"><i data-v-0c0d492c=""
                                                        class="">
                                                        <!----></i></div>
                                            </li>
                                            <li data-v-0c0d492c="" class="db">
                                                <div data-v-0c0d492c="" class="flexs">@lang('How to activate and become a valid user of Synthetic Venture') </div>
                                                <div data-v-0c0d492c="" class="s"><i data-v-0c0d492c=""
                                                        class="">
                                                        <!----></i></div>
                                            </li>
                                            <li data-v-0c0d492c="" class="db">
                                                <div data-v-0c0d492c="" class="flexs">@lang('How Synthetic Venture earns income') </div>
                                                <div data-v-0c0d492c="" class="s"><i data-v-0c0d492c=""
                                                        class="">
                                                        <!----></i></div>
                                            </li>
                                           
                                          
                                            <li data-v-0c0d492c="" class="db">
                                                <div data-v-0c0d492c="" class="flexs">@lang('Synthetic Venture company establishment information') </div>
                                                <div data-v-0c0d492c="" class="s"><i data-v-0c0d492c=""
                                                        class="">
                                                        <!----></i></div>
                                            </li>
                                            <li data-v-0c0d492c="" class="db">
                                                <div data-v-0c0d492c="" class="flexs">@lang('Synthetic Venture Company Vision Future Planning') </div>
                                                <div data-v-0c0d492c="" class="s"><i data-v-0c0d492c=""
                                                        class="">
                                                        <!----></i></div>
                                            </li>
                                        </ul>
                                        <div class="van-list__finished-text">@lang('No more')</div>
                                        <div class="van-list__placeholder"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
        </div>
        <div data-v-a7d12cfc="" class="global-loading default" style="display: none;">
            <div data-v-a7d12cfc="" class="global-spinner"><img data-v-a7d12cfc=""
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAArCAMAAAA0X5qLAAAAh1BMVEUAAAAAv44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av46sPT54AAAALHRSTlMA+wXZ+J87JB7ux4lDNRQPCvLq39PNp5BpWRmxgnAvvrnlw5RhT0sqwHRxeP/zXbkAAAGcSURBVDjLjZTXcqtAEAVnyUGIJBAKKFqS7dv//30XsHFJxrD0C0XRxc45TCEDvFsdrvfhxnGWMk1S7c70nI+bZFxdXFC8YG5GVNemxTdte7+3yxUdq4MMMaocsMza6CeSqLRo2A3dffvguPh1WEiDcuWFeN24mSNDdjS85Exs4OLJX7wpyOWJT8A25G+iFMyn2za1jOIAV+kxIU9knDUQ9d8C/EimyH9OXgawNiblrepfXSn8WKax+4wnCEWDC6ptNk5RC9GxgqqNZ1EstXL1tSP/oBQtS1DN5Qp7vbz1sdwu30b0pNAkPIOrd4131E2kAEf0rDqtaJvTY3YDvM+aOS5IH91KrWdUl2LGIhsI9PIDLm2DFmmslT++FyiDu7a5ANV1FoKpkw/gfwUFddDIO7Cl4wqBMf1iRRZJxxb86d5OYCf9fyS/TaYrFcqVeYQK6nmqEQLFPNc7AuZ2lrtYAcEs936kdZdjE97rSAxDEvG8j8wC/E8Zo1Yo/CAv0oyOYKKzN55QWTm9B9WpyGiwyMvFnLbih+M5xjDWf6S2MlzIf04ZAAAAAElFTkSuQmCC"
                    alt=""></div>
        </div>
        <div data-v-e73e51fc="" class="start-page" style="display: none;"><img data-v-e73e51fc=""
                src="/static/img/start.0aabcda5.gif"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/echarts@4.6.0/dist/echarts.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-vue.2deea45a.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-echarts.eba990db.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-vant.9e1db231.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-vendors.24e8c7cc.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/app.83a7756d.1717187934571.js"></script>
</body>

</html>
