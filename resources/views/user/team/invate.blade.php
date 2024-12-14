<html lang="en" class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>Invite friends</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-aef56f2a.f587d975.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-aef56f2a.b3c068cc.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-73ab94aa.2e0ec155.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-73ab94aa.70e0e268.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-65aadf8b.a4cef8a6.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-65aadf8b.59fb6a2e.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-55f99183.7fd6d71d.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-55f99183.e36ebbe6.1717187934571.chunk.js"></script>
</head>

<style>
.link
{
text-transform: lowercase !important;
}
/* .home[data-v-422886cf], [data-v-422886cf] .head{
    background: linear-gradient(92deg, #55B2AC -155.64%, #090909 103.37%);
} */
.head[data-v-397da544] {
    background-color: #000;
    background: linear-gradient(92deg, #55B2AC -155.64%, #090909 103.37%);
}
.head_right[data-v-397da544] {
    margin-left: auto;
    font-size: 12px;
    position: absolute;
    align-items: center;
    justify-content: center;
    display: flex;
    left: 50%;
    width: 5rem;
    margin-left: -2.5rem;
}
.head[data-v-397da544] {
    
    background: linear-gradient(92deg, #55B2AC -155.64%, #090909 103.37%)
}

.page .content-container[data-v-cfc9a7fc] {
    width: 100%;
    flex: 1;
    overflow-y: auto;
    background: linear-gradient(92deg, #55B2AC -155.64%, #090909 103.37%)
}

.link_list[data-v-422886cf] {
    margin: -7px 0 0;
    padding: 0 .28rem;
    border-radius: .24rem;
    border: .01724rem solid hsla(0, 0%, 100%, .2);
    background: #000;
}
.link_list .link_box .title[data-v-422886cf] {
    margin-bottom: 1px;
    color: #fff;
    font-size: 12px;
    font-weight: 900;
    line-height: 1em;
}

.link_list .link_box .link_content .link[data-v-422886cf] {
    color: #e0e0e0;
    font-size: 10px;
    line-height: .32rem;
    font-style: normal;
    font-weight: 400;
    flex: 1;
    min-width: 0;
}

.link_list .link_box[data-v-422886cf] {
    padding: 8px 5px;
}

.link_list .link_box1[data-v-422886cf] {
    padding: 8px 5px;
    padding-bottom: 1px;

}
[data-v-422886cf] .head:after{
    content: "";
    display: block;
    background: linear-gradient(92deg, #55B2AC -155.64%, #090909 103.37%)
    height: 1rem;
    width: 100%;
    position: absolute;
    top: 0;
}

.head .flex[data-v-397da544] {
    align-items: center;
    position: relative;
    background: linear-gradient(92deg, #55B2AC -155.64%, #090909 103.37%);
}
</style>

<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-422886cf="" class="home">
            <div data-v-cfc9a7fc="" data-v-422886cf="" class="page" style="background: transparent;">
            <div data-v-cfc9a7fc="" class="headers">
                <div data-v-397da544="" data-v-6df100a6="" class="head" data-v-cfc9a7fc="">
                    <div data-v-397da544="" class="container flex">
                        <!---->
                        <div data-v-397da544="" class="left_title"><a href="{{route('user.dashboard')}}" style="color:#fff;"><i data-v-397da544="" class="van-icon van-icon-arrow-left">
                        <!----></i></a></div>
                        <!---->
                        <div data-v-397da544="" class="flex1"></div>
                        <!---->
                        <!---->
                        <!---->
                        <div data-v-397da544="" class="head_right">@lang('Invite friends') </div>
                    </div>
                </div>
            </div>
                
                <div data-v-cfc9a7fc="" id="scroll" class="content-container">
                    <div data-v-cfc9a7fc="" id="content" class="content-scroll">
                        <div data-v-422886cf="" data-v-cfc9a7fc="" class="container">
                            <div data-v-422886cf="" data-v-cfc9a7fc="" class="text_box">
                                <div data-v-422886cf="" data-v-cfc9a7fc="" class="flex">
                                    <div data-v-422886cf="" data-v-cfc9a7fc="" ><img data-v-422886cf=""
                                            data-v-cfc9a7fc=""
                                            src="{{ asset('assets/static/img/homef.png') }}" style="width:60px;"> 
                                    </div>
                                    <div data-v-422886cf="" data-v-cfc9a7fc="" class="info">
                                        <div data-v-422886cf="" data-v-cfc9a7fc="" class="n"> {{Auth::user()->name}} <img
                                                data-v-422886cf="" data-v-cfc9a7fc=""
                                                src="{{asset('')}}assets/static/img/lv1.0c323966.png"></div>
                                        <div data-v-422886cf="" data-v-cfc9a7fc="" class="cid"> @lang('UID'): <span
                                                data-v-422886cf="" data-v-cfc9a7fc="">{{Auth::user()->username}}</span></div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-422886cf="" data-v-cfc9a7fc="" class="income">
                                <div data-v-422886cf="" data-v-cfc9a7fc="">@lang('Total Team Earning')：<span data-v-422886cf=""
                                        data-v-cfc9a7fc="">{{number_format($teamCommission,2)}} USDT</span></div>
                            </div>
                            <div data-v-422886cf="" data-v-cfc9a7fc="" class="box">
                                <div data-v-422886cf="" data-v-cfc9a7fc="" class="m">
                                    <div data-v-422886cf="" data-v-cfc9a7fc="" class="qrcode"
                                        title="{{ asset('') }}register?ref={{ Auth::user()->username }}"><canvas
                                            width="180" height="180" style="display: none;"></canvas><img alt="Scan me!" style="width: 100%;"
                                            src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ asset('') }}register?ref={{ Auth::user()->username }}&format=png"
                                            style="display: block;"></div>
                                </div>
                                <div data-v-422886cf="" data-v-cfc9a7fc="" class="link_list">
                                    <div data-v-422886cf="" data-v-cfc9a7fc="" class="link_box">
                                        <div data-v-422886cf="" data-v-cfc9a7fc="" class="title">@lang('Invitation link')</div>
                                        <div data-v-422886cf="" data-v-cfc9a7fc="" class="link_content " >
                                            <div data-v-422886cf="" data-v-cfc9a7fc="" class="link" id="clipboardright2" >{{ asset('') }}register?ref={{ Auth::user()->username }}</div>
                                            <div data-v-422886cf="" data-v-cfc9a7fc="" class="copy" id="copy-button2"><img
                                                    data-v-422886cf="" data-v-cfc9a7fc=""
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAQlBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////8IX9KGAAAAFXRSTlMAkSNtB1L04di+eKyTzs2acl4VC6s3epBYAAAAkUlEQVQoz53R2QoDIQyFYZe423Zm2vP+r9pQjAvYm/mvAh8RUSXZgFF0SspYEyEPJN2qD95pYICiRiwD7AT1H+gfkLm2kD3gNmDBHRsIwOekDQCJpy3ou/CaIHV4g8VKBQgNeHnNCtAiPisBPs2MSAlIdMgPMdQJTuDq8JygAKaNkUVLCfDUwGGN7yMSMQr9Yb79PxCb2V0yIwAAAABJRU5ErkJggg==">
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-422886cf="" data-v-cfc9a7fc="" class="link_box">
                                        <div data-v-422886cf="" data-v-cfc9a7fc="" class="title">@lang('Invitation code')</div>
                                        <div data-v-422886cf="" data-v-cfc9a7fc="" class="link_content">
                                            <div data-v-422886cf="" data-v-cfc9a7fc="" class="link" id="clipboardright">{{Auth::user()->username}}</div>
                                            <div data-v-422886cf="" data-v-cfc9a7fc="" class="copy " id="copy-button"><img
                                                    data-v-422886cf="" data-v-cfc9a7fc=""
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAQlBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////8IX9KGAAAAFXRSTlMAkSNtB1L04di+eKyTzs2acl4VC6s3epBYAAAAkUlEQVQoz53R2QoDIQyFYZe423Zm2vP+r9pQjAvYm/mvAh8RUSXZgFF0SspYEyEPJN2qD95pYICiRiwD7AT1H+gfkLm2kD3gNmDBHRsIwOekDQCJpy3ou/CaIHV4g8VKBQgNeHnNCtAiPisBPs2MSAlIdMgPMdQJTuDq8JygAKaNkUVLCfDUwGGN7yMSMQr9Yb79PxCb2V0yIwAAAABJRU5ErkJggg==">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---->
            </div>
        </div>


     @include('partials.notify')
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   
       <script>
           $(document).ready(function() {
           $('#copy-button').click(function() {
               var textToCopy = $('#clipboardright').text();
               var tempTextarea = $('<textarea>');
               $('body').append(tempTextarea);
               tempTextarea.val(textToCopy).select();
               document.execCommand('copy');
               tempTextarea.remove();
               iziToast.success({
                       message: 'Copied Successfully',
                       position: "center"
                   });
   
           });


           $('#copy-button2').click(function() {
            var textToCopy = $('#clipboardright2').text(); // Convert text to lowercase
          
               var tempTextarea = $('<textarea>');
               $('body').append(tempTextarea);
               tempTextarea.val(textToCopy.toLowerCase()).select();
               document.execCommand('copy');
               tempTextarea.remove();
               iziToast.success({
                       message: 'Copied Successfully',
                       position: "center"
                   });
   
           });

           });
       </script>

        <div data-v-a7d12cfc="" class="global-loading default" style="display: none;">
            <div data-v-a7d12cfc="" class="global-spinner"><img data-v-a7d12cfc=""
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAArCAMAAAA0X5qLAAAAh1BMVEUAAAAAv44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av46sPT54AAAALHRSTlMA+wXZ+J87JB7ux4lDNRQPCvLq39PNp5BpWRmxgnAvvrnlw5RhT0sqwHRxeP/zXbkAAAGcSURBVDjLjZTXcqtAEAVnyUGIJBAKKFqS7dv//30XsHFJxrD0C0XRxc45TCEDvFsdrvfhxnGWMk1S7c70nI+bZFxdXFC8YG5GVNemxTdte7+3yxUdq4MMMaocsMza6CeSqLRo2A3dffvguPh1WEiDcuWFeN24mSNDdjS85Exs4OLJX7wpyOWJT8A25G+iFMyn2za1jOIAV+kxIU9knDUQ9d8C/EimyH9OXgawNiblrepfXSn8WKax+4wnCEWDC6ptNk5RC9GxgqqNZ1EstXL1tSP/oBQtS1DN5Qp7vbz1sdwu30b0pNAkPIOrd4131E2kAEf0rDqtaJvTY3YDvM+aOS5IH91KrWdUl2LGIhsI9PIDLm2DFmmslT++FyiDu7a5ANV1FoKpkw/gfwUFddDIO7Cl4wqBMf1iRRZJxxb86d5OYCf9fyS/TaYrFcqVeYQK6nmqEQLFPNc7AuZ2lrtYAcEs936kdZdjE97rSAxDEvG8j8wC/E8Zo1Yo/CAv0oyOYKKzN55QWTm9B9WpyGiwyMvFnLbih+M5xjDWf6S2MlzIf04ZAAAAAElFTkSuQmCC"
                    alt=""></div>
        </div>
        <div data-v-e73e51fc="" class="start-page" style="display: none;"><img data-v-e73e51fc=""
                src="{{asset('')}}assets/static/img/start.0aabcda5.gif"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/echarts@4.6.0/dist/echarts.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-vue.2deea45a.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-echarts.eba990db.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-vant.9e1db231.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-vendors.24e8c7cc.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/app.83a7756d.1717187934571.js"></script>
    <div class="van-toast van-toast--middle van-toast--success" style="z-index: 2006; display: none;"><i
            class="van-icon van-icon-success van-toast__icon">
            <!----></i>
        <div class="van-toast__text">Login successful</div>
    </div>
</body>

</html>
