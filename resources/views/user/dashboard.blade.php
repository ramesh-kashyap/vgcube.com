<html lang="en" class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>{{siteName()}}</title>
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

    .Progress {
            margin-top: .32rem;
        }
     .Progress .van-slider {
        background: hsla(0, 0%, 100%, .1) !important;
    }

    .icon-custom{
        
    width: 25px;
    height: 25px !important;

    }
    
    .van-slider {
        position: relative;
        width: 100%;
        height: .03448rem;
        background-color: #ebedf0;
        border-radius: 17.22414rem;
        cursor: pointer;
    }
    .van-slider:before {
        position: absolute;
        top: -.13793rem;
        right: 0;
        bottom: -.13793rem;
        left: 0;
        content: "";
    }
    .Progress .van-slider__bar {
        background: #55b2c2 !important;
    }
    
    .van-slider__bar {
        position: relative;
        width: 100%;
        height: 100%;
        background-color: #1989fa;
        border-radius: inherit;
        -webkit-transition: all .2s;
        transition: all .2s;
    }
    .van-slider__button-wrapper, .van-slider__button-wrapper-right {
        position: absolute;
        top: 50%;
        right: 0;
        -webkit-transform: translate3d(50%, -50%, 0);
        transform: translate3d(50%, -50%, 0);
        cursor: grab;
    }
    .Progress .van-slider__button {
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAgCAMAAABabbp1AAAAtFBMVEUAAAD///////////////////////////////////////////+f6pSP5Y2H44qB4Yic6pOs7pqV55Cq7pmF4ol734Wo7ZiR5o6a6ZKD4YmJ5IuT549+4Iez8Z2x8JyY6JGM5Iy28p6l7Jav75um7Zeh65Wj7Jbz/fJ43oSu75rG8cnu++/f+dT4/vbw+/Ha+NDK9bm68qO978LA8rOk6aea5qO08KKI4pDT9seu67TA86qa6ZT+kNadAAAAC3RSTlMA3yDvkBDQYKCfMLC2wLEAAAHvSURBVDjLlZTZWsJADEYrZYA6Uugi2EUFpVRBlE0Wff/3MssYmKrwmQuuznf4M03iHEo1vYarK+U2vKZyflatbqFWebUKrOr6ZNVt9YU+UxdHf3DJ9Gyy/kwH7X4/C8P7m+7VVTF+CFZvJfOXtnu6ThI/BbwN+L3Bx6NeFMxLy0/0ZJskcewTHpK9i/ZeFAXPmxfiFdHU5TLPO4nP9naWkR3xEfKPd2/Sb43c13mnA3YJI3YIA/gt+TFOC3MngEMY3x8IfsN2gy9K1isNtb9GO2V/fYWnCcsSw5Ql4L3gGfDhHDBXOU2UPxEeY3it8SG1xjBao53x4QzAJmWZME5htG4TDmFsHLv1nAb8vguepoJ3Ce8ZnNM0HBys3IQBO+Eh47b9A8M7GuqJcPpMnD2j7IXWY3p3wodICo52n+2VViMOs0CSwmxPZI8YHxLu2q3GVXwk2blVesgl4jnZB3arPAQUBsfAo880E7u8u7wM46Av6TMpF9N8Z6chyLKjIYiMfaehFM/vNDFhrIksCnjH4xHzZIARj2UiZT3G3KoMsKwHhkkMLvNecKt3sh5Qyiwftyo40mwPzPLZq72nVg9hZD1WstrW4ZhO1v0U9GxnfLPazeRw/PcsSZ07eqp6Ult/sm5d1NbBbv12sFvHB/sLfD5h+WOezsEAAAAASUVORK5CYII=) no-repeat;
        background-size: 100% 100%;
        width: .38rem;
        height: .24rem;
        border-radius: .1rem;
    }
    
    .van-slider__button {
        width: .41379rem;
        height: .41379rem;
        background-color: #fff;
        border-radius: 50%;
        box-shadow: 0 .01724rem .03448rem rgba(0, 0, 0, .5);
    }
    .Progress .ul {
        margin-top: .16rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        color: #6b7285;
        font-size: .26rem;
        font-weight: 500;
    }

    .partner {
    width: 100%;
    display: flex;
    flex-direction: column;
    text-align: left;
}

.partner .pcon {
    padding-bottom: .625rem;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    flex-wrap: wrap;
}

.partner .pcon img {
    width: calc(33.3% - .39375rem);
    margin-bottom: .625rem;
}
.page[data-v-cfc9a7fc] {
    position: absolute;
    top: 0;
    left: 50%;
    max-width: 8.5rem;
    width: 100%;
    height: 100%;
    transform: translateX(-50%);
    background: linear-gradient(92deg, #55B2AC -155.64%, #090909 103.37%);
    display: flex;
    flex-direction: column;
}


    
    </style>


    <link href="{{ asset('') }}assets/static/js/app.83a7756d.1717187934571.js" rel="preload"
        as="script">
    <link href="{{ asset('') }}assets/static/js/chunk-echarts.eba990db.1717187934571.chunk.js"
        rel="preload" as="script">
    <link href="{{ asset('') }}assets/static/js/chunk-vant.9e1db231.1717187934571.chunk.js"
        rel="preload" as="script">
    <link href="{{ asset('') }}assets/static/js/chunk-vendors.24e8c7cc.1717187934571.chunk.js"
        rel="preload" as="script">
    <link href="{{ asset('') }}assets/static/js/chunk-vue.2deea45a.1717187934571.chunk.js"
        rel="preload" as="script">
    <link href="{{ asset('') }}assets/static/css/app.23ae5dc0.css" rel="preload" as="style">
    <link href="{{ asset('') }}assets/static/css/chunk-vant.d14f5539.css" rel="preload" as="style">
    <link href="{{ asset('') }}assets/static/css/chunk-vendors.794edbf9.css" rel="preload" as="style">
    <link href="{{ asset('') }}assets/static/css/chunk-vant.d14f5539.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/static/css/chunk-vendors.794edbf9.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/static/css/app.23ae5dc0.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('') }}assets/static/css/chunk-73ab94aa.2e0ec155.css">
    <script charset="utf-8"
        src="{{ asset('') }}assets/static/js/chunk-73ab94aa.70e0e268.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('') }}assets/static/css/chunk-2a0b1332.9f52f39a.css">
    <script charset="utf-8"
        src="{{ asset('') }}assets/static/js/chunk-2a0b1332.0436ba68.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('') }}assets/static/css/chunk-f8e2ce82.4965c1ba.css">
    <script charset="utf-8"
        src="{{ asset('') }}assets/static/js/chunk-f8e2ce82.8a913baf.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('') }}assets/static/css/chunk-65aadf8b.a4cef8a6.css">
    <script charset="utf-8"
        src="{{ asset('') }}assets/static/js/chunk-65aadf8b.59fb6a2e.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('') }}assets/static/css/chunk-21a2b91c.0ed7b871.css">
    <script charset="utf-8"
        src="{{ asset('') }}assets/static/js/chunk-21a2b91c.12695023.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('') }}assets/static/css/chunk-67098c77.8b942857.css">
    <script charset="utf-8"
        src="{{ asset('') }}assets/static/js/chunk-67098c77.b8c94109.1717187934571.chunk.js"></script>
        <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-8c0c3ac6.27e1c228.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-8c0c3ac6.576dd3c7.1717187934571.chunk.js"></script>

    <!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</head>

<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-cfc9a7fc="" data-v-6df716d9="" class="page">
            <div data-v-cfc9a7fc="" class="headers">
                <div data-v-6df716d9="" data-v-cfc9a7fc="" class="userHead flex">
                    <div data-v-6df716d9="" data-v-cfc9a7fc="" class="photo"><img data-v-6df716d9="" data-v-cfc9a7fc=""
                            src="{{ asset('') }}assets/static/img/logo1.png">
                    </div>
                    <div data-v-6df716d9="" data-v-cfc9a7fc="" class="flex1">
                    <!-- <div data-v-6df716d9="" data-v-cfc9a7fc="" class="n">Welcom to </div>
                    <div data-v-6df716d9="" data-v-cfc9a7fc="" class="nickname"> riteshkk </div>
                       
                        -->
                    </div>
                    <div data-v-6df716d9="" data-v-cfc9a7fc="" class="ico"><a href="{{route('user.meassage')}}"><img
                                                data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                                                src="{{asset('')}}assets/static/img/bell.png" style="
    height: 30px;
"></a>
                    </div>
                    <!--<div data-v-6df716d9="" data-v-cfc9a7fc="" class="ico"><a href="{{route('user.lang')}}"><img data-v-6df716d9="" data-v-cfc9a7fc=""-->
                    <!--        src="{{ asset('') }}assets/static/img/earth.png"></a> </div>-->
                </div>
            </div>
            <div data-v-cfc9a7fc="" id="scroll" class="content-container">
                <div data-v-cfc9a7fc="" id="content" class="content-scroll">
                    <!---->
                    <div data-v-6df716d9="" data-v-cfc9a7fc="" class="home">
                        <div data-v-45836ea7="" data-v-6df716d9="" class="banner" data-v-cfc9a7fc=""  style="margin:0 10px;border-radius:15px">
                            <div data-v-45836ea7=""
                                class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-autoheight" style="border-radius:15px">
                                <div class="swiper-wrapper"
                                    style="transition-duration: 0ms; transform: translate3d(-850px, 0px, 0px); height: 239px;">
                                    <div data-v-45836ea7=""
                                        class="swiper-slide swiper-slide-active"
                                        data-swiper-slide-index="2" style="width: 425px;">
                                        <div data-v-45836ea7="" class="item"><img data-v-45836ea7=""
                                                src="{{asset('')}}assets/static/image/dashboard.png">
                                        </div>
                                    </div>
                                    <div data-v-45836ea7="" class="swiper-slide swiper-slide-prev"
                                        data-swiper-slide-index="0" style="width: 425px;">
                                        <div data-v-45836ea7="" class="item"><img data-v-45836ea7=""
                                                src="{{asset('')}}assets/static/img/dashboard2.png">
                                        </div>
                                    </div>
                                    <div data-v-45836ea7="" class="swiper-slide swiper-slide-active"
                                        data-swiper-slide-index="1" style="width: 425px;">
                                          <div data-v-45836ea7="" class="item"><img data-v-45836ea7="" style="    border-radius: 15px;"
                                                src="{{asset('')}}assets/static/image/dashboard.png">
                                        </div>
                                    </div>
                                    <div data-v-45836ea7="" class="swiper-slide swiper-slide-next"
                                        data-swiper-slide-index="2" style="width: 425px;">
                                        <div data-v-45836ea7="" class="item"><img data-v-45836ea7=""
                                                src="{{asset('')}}assets/static/img/dashboard2.png">
                                        </div>
                                    </div>
                                    <div data-v-45836ea7=""
                                        class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                        data-swiper-slide-index="0" style="width: 425px;">
                                        <div data-v-45836ea7="" class="item"><img data-v-45836ea7=""
                                            src="{{asset('')}}assets/static/image/dashboard.png">
                                        </div>
                                    </div>
                                </div> <span class="swiper-notification" aria-live="assertive"
                                    aria-atomic="true"></span>
                            </div>
                            <div data-v-45836ea7="" class="navigation_dot">
                                <div data-v-45836ea7="" class="dot"></div>
                                <div data-v-45836ea7="" class="dot"></div>
                                <div data-v-45836ea7="" class="dot on"></div>
                            </div>
                        </div>
                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="container">
                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="notice_bar" style="background:none">
                                <div data-v-6df716d9="" role="alert" class="van-notice-bar" data-v-cfc9a7fc=""
                                    style="color: rgba(255, 255, 255, 0.7); background: none;"><i
                                        class="van-icon van-notice-bar__left-icon"><img
                                            src="{{asset('')}}assets/static/img/raj.png"
                                            class="van-icon__image">
                                        <!----></i>
                                    <div role="marquee" class="van-notice-bar__wrap">

                                    <marquee direction="left" scrollamount="5" behavior="scroll">@lang('Welcome to VG CUBE – Your Ultimate Hub for AI-Powered Growth!')
        </marquee>
                                      
                                    </div>
                                </div>
                            </div>
                            <ul data-v-6df716d9="" data-v-cfc9a7fc="" class="nav1">
                                
                                <li data-v-6df716d9="" data-v-cfc9a7fc="">
                                    <div data-v-6df716d9="" data-v-cfc9a7fc="">
                                        <a href="{{route('user.strategy')}}" style="color:white;">
                                        <img data-v-6df716d9=""
                                            data-v-cfc9a7fc=""
                                            src="{{asset('')}}assets/static/img/13.png" class="icon-custom">
                                       <p data-v-6df716d9="" data-v-cfc9a7fc="" >@lang('Task center')</a></p>
                                    </div>
                                </li>
                                <li data-v-6df716d9="" data-v-cfc9a7fc="">
                                    <div data-v-6df716d9="" data-v-cfc9a7fc=""><a href="{{route('user.team')}}" style="color:white;">
                                        <img data-v-6df716d9=""
                                            data-v-cfc9a7fc=""
                                            src="{{asset('')}}assets/static/img/15.png" class="icon-custom">
                                        <p data-v-6df716d9="" data-v-cfc9a7fc="">@lang('Team')</a></p>
                                    </div>
                                </li>
                                <li data-v-6df716d9="" data-v-cfc9a7fc="">
                                    <div data-v-6df716d9="" data-v-cfc9a7fc=""><a href="{{route('user.tutorial')}}" style="color:white;"><img data-v-6df716d9=""
                                            data-v-cfc9a7fc=""
                                            src="{{asset('')}}assets/static/img/14.png" class="icon-custom">
                                             <p data-v-6df716d9="" data-v-cfc9a7fc="">@lang('Tutorial')</a></p>
                                    </div>
                                </li>
                                <li data-v-6df716d9="" data-v-cfc9a7fc="">
                                    <div data-v-6df716d9="" data-v-cfc9a7fc=""><a href="{{route('user.invite')}}" style="color:white;"><img data-v-6df716d9=""
                                            data-v-cfc9a7fc=""
                                            src="{{asset('')}}assets/static/img/5b0695f769089437fccc9fd7b5f0ff47.png" class="icon-custom">
                                        <p data-v-6df716d9="" data-v-cfc9a7fc="">@lang('Invitation')</a></p>
                                    </div>
                                </li>
                               
                            </ul>
                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="incomeBox" style="background:none;border:none;">
                                <ul data-v-6df716d9="" data-v-cfc9a7fc="">
                                    <li data-v-6df716d9="" data-v-cfc9a7fc="">
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="ico"><img data-v-6df716d9=""
                                                data-v-cfc9a7fc=""
                                                src="{{asset('')}}assets/static/img/today2.png" style="height:.6rem;width:.6rem;">  </div>
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" style="margin-right:35px">
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="amount" style="font-size: 0.40rem;"> {{currency()}} {{number_format(Auth::user()->available_balance(),2)}} </div>
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="name">@lang('Total Node Power')</div>
                                        </div>
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="ico"><img data-v-6df716d9="" 
                                            data-v-cfc9a7fc=""
                                            src="{{asset('')}}assets/static/img/total1.png" style="height:.6rem;width:.6rem;">  </div>
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="">
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="amount" style="font-size: 0.40rem;"> {{currency()}} {{number_format($todaysIncome,2)}} </div>
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="name">@lang('Today Node Power')</div>
                                        </div>
                                    </li>
                                    <!-- <li data-v-6df716d9="" data-v-cfc9a7fc="" class="x">
                                        <div data-v-1fa86597="" data-v-cfc9a7fc="" class="Progress" style="width:100%"><div data-v-1fa86597="" data-v-cfc9a7fc="" class="cons"><div data-v-1fa86597="" class="van-slider" data-v-cfc9a7fc="" style="height: 10px;"><div class="van-slider__bar" style="background: rgb(0, 0, 0); width: 50%;"><div role="slider" tabindex="0" aria-valuemin="0" aria-valuenow="50" aria-valuemax="50" aria-orientation="horizontal" class="van-slider__button-wrapper"><div class="van-slider__button"></div></div></div></div></div><div data-v-1fa86597="" data-v-cfc9a7fc="" class="ul"><div data-v-1fa86597="" data-v-cfc9a7fc="" class="li"> 0% </div><div data-v-1fa86597="" data-v-cfc9a7fc="" class="li"> 25% </div><div data-v-1fa86597="" data-v-cfc9a7fc="" class="li"> 50% </div><div data-v-1fa86597="" data-v-cfc9a7fc="" class="li"> 75% </div><div data-v-1fa86597="" data-v-cfc9a7fc="" class="li active"> 100% </div></div></div>

                                    </li> -->
                                    <li data-v-6df716d9="" data-v-cfc9a7fc="">
                                       
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="flex1">
                                          
                                           
                                           
                                        </div>
                                    </li>
                                </ul>
                            </div> 

                           
                            <div data-v-6df100a6="" data-v-cfc9a7fc="" class="com-1" style="padding:0">

                                <div data-v-6df100a6="" data-v-cfc9a7fc="" class="balance-con" style="margin-top:0">
                                    <div data-v-6df100a6="" data-v-cfc9a7fc="" class="balance-item">

                                        <div data-v-6df100a6="" data-v-cfc9a7fc="" class="name">@lang('Assets')</div>
                                        <div data-v-6df100a6="" data-v-cfc9a7fc="" class="val"><span>
                                            <img data-v-6df716d9="" 
                                            data-v-cfc9a7fc=""
                                            src="{{asset('')}}assets/static/img/pie.png" style="height: .5rem;width: .5rem;margin-right: 20px;">
                                        </span> 
                                            
                                           <a href="{{route('user.recharge')}}"><span style="padding-top: 35px;">{{currency()}}  {{number_format(Auth::user()->available_balance(),2)}}</span> </a> </div>
                                    </div>
                                    <div data-v-6df100a6="" data-v-cfc9a7fc="" class="balance-item">
                                        <div data-v-6df100a6="" data-v-cfc9a7fc="" class="name">@lang('Subscription Server')</div>
                                        <div data-v-6df100a6="" data-v-cfc9a7fc="" class="val">
                                            <span>
                                                <img data-v-6df716d9="" 
                                                data-v-cfc9a7fc=""
                                                src="{{asset('')}}assets/static/img/node.png" style="height: .5rem;width: .5rem;margin-right: 20px;">
                                            </span> 
                                            
                                            
                                          <span style="padding-top: 35px;">  {{currency()}}  {{number_format(Auth::user()->investment->sum('amount'),2)}} </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                            <div data-v-83cbb658="" data-v-6df716d9="" class="tabs-con" data-v-cfc9a7fc="">
                                <div data-v-83cbb658="" class="van-tabs van-tabs--line">
                                    <div class="van-tabs__wrap van-tabs__wrap--scrollable">
                                        <div role="tablist"
                                            class="van-tabs__nav van-tabs__nav--line van-tabs__nav--complete">
                                            <div role="tab" aria-selected="true" class="van-tab van-tab--active"><span
                                                    class="van-tab__text"></span></div>
                                            <div role="tab" class="van-tab"><span
                                                    class="van-tab__text"></span></div>
                                            <div role="tab" class="van-tab"><span class="van-tab__text"></span>
                                            </div>
                                            <div role="tab" class="van-tab"><span class="van-tab__text"></span>
                                            </div>
                                            <div class="van-tabs__line"
                                                style="transform: translateX(52.5px) translateX(-50%); transition-duration: 0.3s;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="van-tabs__content">
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                    </div>
                                </div>
                            </div>
                         
                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="quotes">
                                <div data-v-6df716d9="" data-v-cfc9a7fc="" class="name">
                                    <div data-v-6df716d9="" data-v-cfc9a7fc="" class="flex1">@lang('Partners')</div>
                                </div>
                               <div data-v-48b8b747="" class="partner">
                                    <div data-v-48b8b747="" class="pcon"><img data-v-48b8b747=""
                                            src="{{asset('assets/static/openAi.png')}}"><img
                                            data-v-48b8b747=""
                                            src="{{asset('assets/static/meta.png')}}"><img
                                            data-v-48b8b747=""
                                            src="{{asset('assets/static/nvidia.png')}}"><img
                                            data-v-48b8b747=""
                                            src="{{asset('assets/static/amazon.png')}}"><img
                                            data-v-48b8b747=""
                                            src="{{asset('assets/static/bybit_303e7734d1.png')}}"><img
                                            data-v-48b8b747=""
                                            src="{{asset('assets/static/siww-logo-dark.png')}}"><img
                                            data-v-48b8b747=""
                                            src="{{asset('assets/static/signzy.png')}}"><img
                                            data-v-48b8b747=""
                                            src="{{asset('assets/static/kraken-logo-removebg-preview.png')}}"><img
                                            data-v-48b8b747="" src="{{asset('assets/static/kucoin-logo.png')}}">
                                    </div>
                                </div>
                            </div>
                            <!---->
                        </div>
                    </div>
                </div>
            </div>

            <script>
                var swiper = new Swiper('.swiper-container', {
                  loop: true, // Enables continuous loop mode
                  navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                  },
                  pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                  },
                  autoplay: {
                    delay: 3000, // Slide changes every 3 seconds
                    disableOnInteraction: false,
                  },
                  effect: 'slide', // You can change it to 'fade', 'cube', 'coverflow', etc.
                  speed: 600, // Transition speed in milliseconds
                });
              </script>
              
  
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="{{asset('')}}assets/js/dashboard.js"></script>
            {{-- <script src="{{asset('')}}assets/js/crypto.js"></script> --}}

            @include('layouts.upnl.footer')