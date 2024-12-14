<html lang="en" class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>Switch language</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-aef56f2a.f587d975.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-aef56f2a.b3c068cc.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-2a0b1332.9f52f39a.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-2a0b1332.0436ba68.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-f8e2ce82.4965c1ba.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-f8e2ce82.8a913baf.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-21a2b91c.0ed7b871.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-21a2b91c.12695023.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-4d56d011.d2239d8d.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-4d56d011.55574f9a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-273ce16e.debfb5de.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-273ce16e.6f3f099a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-a46085d6.d2823003.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-a46085d6.6a4896cb.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-97c0768a.2ab4315e.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-97c0768a.b8196644.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-f31ad6d4.2882463c.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-f31ad6d4.836d485b.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-0830ec22.59462d6e.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-0830ec22.94ec9a30.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-73ab94aa.2e0ec155.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-73ab94aa.70e0e268.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-65aadf8b.a4cef8a6.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-65aadf8b.59fb6a2e.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-67098c77.8b942857.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-67098c77.b8c94109.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-529a9802.d4a866bb.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-529a9802.18a0309a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-2a326f81.d6e1e630.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-2a326f81.29676938.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-04a90ad1.aa2f317d.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-04a90ad1.28c21b1a.1717187934571.chunk.js"></script>
</head>

<body class="main_en">
    <div id="app" class="applang">
        <div data-v-03acef9e="" class="home">
            <div data-v-cfc9a7fc="" data-v-03acef9e="" class="page">
                <div data-v-cfc9a7fc="" class="headers">
                    <div data-v-397da544="" data-v-03acef9e="" class="head head_isModule" data-v-cfc9a7fc="">
                        <div data-v-397da544="" class="container flex">
                            <div data-v-397da544="" class="back"><a style="color:#fff"
                                href="{{ route('user.setting') }}"><i data-v-397da544=""
                                    class="van-icon van-icon-arrow-left">
                                    <!----></i></a></div>
                            <!---->
                            <div data-v-397da544="" class="name tac"> @lang('Switch Language') </div>
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
                        <div data-v-03acef9e="" data-v-cfc9a7fc="" class="container">
                            <div data-v-03acef9e="" data-v-cfc9a7fc="" class="list">
                                <ul data-v-03acef9e="" data-v-cfc9a7fc="">
                                    @foreach($language as $item)
                                    <li data-v-03acef9e="" data-v-cfc9a7fc="" class="db langSel" data-response="{{$item->code}}">
                                        <div data-v-03acef9e="" data-v-cfc9a7fc="" class="flexs">{{ __($item->name) }}
                                        </div>

                                        @if(session('lang') == $item->code)  
                                        <div data-v-03acef9e="" data-v-cfc9a7fc="" class="s"><img data-v-03acef9e=""
                                            data-v-cfc9a7fc=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAxCAMAAACrgNoQAAABd1BMVEUAAAB83oWx8Jt534Sc6ZN13YO48Z6u7pq78qB03IK28Z2K5IuE4YiM4oyG4oqx75yv75911YBXj1iw75uq7pmY6JF53oW98aGb6JK48Z+T5o+C4Iil65ah6pWP5Y2985+e6ZO58p9z24K98p+j6pR03YK58Z6A4YiQ54+o7Je+8qGt75q+86GM44xx2oBx24G78p+R5Y6d6ZO58Z6o7ZiH4oqm65Z+4Yh334Wh7JS//5+/758AAACt7pqj65aL44yI44uX55F+4IaN5I2r7ZmG4oqA4Iey75yV55CQ5Y5734WT5o+k65ea6JKF4Ymo7Jig6pW28Z6p7Zim7Je08J2b6JN13YOS5o+D4YiC4Yiw75t53oW686C48p953YSd6ZSv75tz3IKf6pSP5Y6d6ZN33oSM5Iyz8Jy886AJDgk8Vzg4VjZgkVuQ2olbkFkcKxuEv3qBvXeC1YRLc0g+ZD2SzoSIy4Brq2pqq2lpk19TdkwUHRMTHRJekgU/AAAAPHRSTlMAHyB//t/vgMCfcF/vkH9PEBD+7+/v7+Dg39/fzr+/kJCAcGBfX1AvEO/f18/Pz7+wsK+gn59wb29PEBDYflp6AAADCElEQVRIx6WQB1caURCFh1XA3nvvmt67NbsUQViBXaKALAIiakxR0/PjMzPvrS4ENOfke1PuDHfgKPw/rpnm++59xP2ged4FN9DdgF4n7pnrblzNSWafw5bNrrrfPpBMHiQpuR5gIigboBaL7myWDFls/NKYBAp3jR+ZH0hn0zZkoiJB8RKqaAhdkQ7VoKHa/5YIUYQ46MmCib3i4gXb/ZiVomLR6vh37vr/gbZFsBn17+765ZPQhjsnK/9oNwg6dqI7O5QcDqJRUanQ6wDGFSV8mEJwQUhipaSKrc0FxDMfs+5zEnXuWNJVO//Ael181Yu2JTxoXVtbW8fgQhUbdoL12ZlYM/RX3FNLYlAxpZSjWlJLPUfLFzyqVCcAXCpSKlFFDwp6KnVaFnqWke+qpKS6oLWgFgoFVcUmFVfslB+WiW88sqsV2jevQfgvHJt2mHhnE8bcpIeCsP0nm9JA/RGMhB0Ew06kv2I3AkFJGHPjciAt/Txe0g8bkiBG8Pz3yam9eG/7eeKvow6RjQh2TvZ8PGVt+zciNFKVQH/kivNlcYFIP6/NiAMYMhsbTYTK1yNxYZrCf9zInzkZgseWaRYtyzItq2h9lhfSX2SsoonJmNY4TOXzeStvceTlxS/h500xTwZKrlMwt10BXwj/di1ewdLq6uo2heTTkfTLDTYnCsC4UFt2iotjVBiYDEscxgDg+VYCn4AEXxzbI394xRwedN1KJHQ9geiyf/n5g3RCFFsyCiBeXY/rcQydQyhdNqFI0vwUiK4+La5pOmZci8e5UNJMey2OKXSfAoxX01ZWtBWslFQ0HmVyYbwgGVthNJk57gKnvAM2Si+6cjl0UsXGSgYll14FLulMBVKBQCCVymFBeJCgELoTHLTgAXHIj4LhrZy8UIE3YBiHhmFQOzTQJCaUWBGjBapY8MRihhHjR7DgHsPwdMJfKMMxB3sxJ00K1GJ6eK8mnhaog/LEk6lkL5PxTHdBfZTZpky5TIEPD8pNLW/gBpSFyaa7g+Xy4O2Hk7OvoZo/TgAXIMAz9SsAAAAASUVORK5CYII=">
                                    </div>
                                        @endif
                                        <!---->
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!---->
            </div>
        </div>

        <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>

        <script>
            'use strict';
            (function ($) {
                $(document).on("click", ".langSel", function () {
                    var res_area = $(this).attr('data-response');
                    window.location.href = "{{ url('/') }}/change/" + res_area;
                });

            })(jQuery)

        </script>


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
    <div class="van-toast van-toast--middle van-toast--success" style="z-index: 2004; display: none;"><i
            class="van-icon van-icon-success van-toast__icon">
            <!----></i>
        <div class="van-toast__text">Login successful</div>
    </div>
</body>

</html>
