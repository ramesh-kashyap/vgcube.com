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

    <meta itemprop="name" content="{{siteName()}}">
    <meta itemprop="description" content="Welcome to {{siteName()}} ">
    <meta itemprop="image" content="{{asset('assets/static/image/fav.png')}}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{siteName()}}">
    <meta property="og:description" content="Welcome to {{siteName()}} ">
    <meta property="og:image" content="{{asset('assets/static/image/fav.png')}}" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:url" content="{{asset('')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script>
    <script>
        window.addEventListener("er7ror", function (event) {
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
        .iti__country-list {
            position: absolute;
            z-index: 2;
            list-style: none;
            text-align: left;
            padding: 0;
            margin: 0 0 0 -1px;
            box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
            background-color: #131118;
            border: 1px solid #CCC;
            white-space: nowrap;
            max-height: 200px;
            overflow-y: scroll;
            -webkit-overflow-scrolling: touch;
        }

        .go p[data-v-607a0cfb] {
            margin-top: .4rem;
            color: var(--COcolor3);
            font-size: .26rem;
            text-align: left;
            margin-bottom: .4em;
        }

        body {
            background: none;
            width: 100%;
            position: relative;
            top: 0;
            left: 50%;
            bottom: 0;
            background: #000;
            margin: 0 auto;
            transform: translateX(-50%);
            font-family: Poppins, PingFang SC, Microsoft Yahei, sans-serif
        }

        .agreement {
            color: var(--COcolor3);
            ;
        }
        .van-checkbox {
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    align-items: center;
    overflow: inherit;
    cursor: pointer;
    -webkit-user-select: none;
    user-select: none;
}
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-73ab94aa.2e0ec155.css">
    <script charset="utf-8"
        src="{{asset('')}}assets/static/js/chunk-73ab94aa.70e0e268.1717187934571.chunk.js "></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-2a0b1332.9f52f39a.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-2a0b1332.0436ba68.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-f8e2ce82.4965c1ba.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icons/6.6.6/css/flag-icons.min.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-f8e2ce82.8a913baf.1717187934571.chunk.js"></script>
    <style>
        .go .wrap[data-v-a34da882] {
            margin-top: .4rem;
            color: var(--COcolor3);
            font-size: .26rem;
            display: flex;
            justify-content: left;
            margin-bottom: .4em;
        }

        .go .wrap .wr[data-v-a34da882] {

            color: var(--COcolor3);
            font-size: .26rem;
            display: flex;
            justify-content: left;
            margin-bottom: .4em;
        }

        .van-popup--bottom[data-v-a84105cc] {
            max-width: 8.5rem;
        }

        .van-popup--bottom.van-popup--round {
            border-radius: 0.32rem 0.32rem 0 0;
        }

        .van-popup {
            position: fixed;
            max-height: 100%;
            overflow-y: auto;
            background-color: #0d0f13;
            transition: transform 0.3s;
            -webkit-overflow-scrolling: touch;
        }

        .area_pop[data-v-a84105cc] {
            color: #fff;
        }

        .area_pop .title[data-v-a84105cc] {
            font-size: 0.32rem;
            text-align: center;
            padding: 0.3rem;
        }

        .rel {
            position: relative;
        }

        .area_pop .so[data-v-a84105cc] {
            height: 0.8rem;
            background: #15181f;
            margin: 0 0.3rem;
            border-radius: 0.12rem;
            padding: 0 0.1rem;
        }

        .db {
            display: flex;
            display: -webkit-box;
            box-align: center;
            -webkit-box-align: center;
        }

        .area_pop ul[data-v-a84105cc] {
            height: 7rem;
            overflow: auto;
            margin: 0.2rem 0.3rem;
        }

        ol,
        ul,
        li {
            list-style: none;
        }

        .area_pop .title .abs[data-v-a84105cc] {
            right: 0.3rem;
            top: 0.35rem;
        }

        .abs {
            position: absolute;
        }

        .area_pop .title .abs i[data-v-a84105cc] {
            font-size: 0.32rem;
        }

        .van-icon {
            position: relative;
            display: inline-block;
            font: normal normal normal 0.28rem / 1 'vant-icon';
            font: normal normal normal 0.28rem / 1 var(--van-icon-font-family, 'vant-icon');
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
        }

        .area_pop .so .ico[data-v-a84105cc] {
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAqCAYAAAAnH9IiAAAACXBIWXMAACE4AAAhOAFFljFgAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAANYSURBVHgB1VmLcdswDIU0gTcoO0HdCapMkHSCphNYnqDKBLYn6HUCOxOYmSDuBFU38AR2ARlSKBKkPqdP8+50EimJfARAEgAj6InNZrPA2xKvhyiKPvDzgi/CGa+c7tfr9QXver1eaxgAEXQEkk3gRvSbQbAtaCAHHMQOB3CCnmhNmsgi0R/4mMAw0Ej+O5LPoSMaSZMZMNkUxsEWyT8h+XPbH4KkkbBCwkd8VBBGjtcJO/8LNxMgLAxbb/wf/71rK3UvaSS8ZMI+u9X4/nC5XJ6bOqPB4600L+X5jIh/bWPrUQ/COduihh7Ath8D5M8s8SDxSGjUaxI86wexbewnY/I2iPjnkPYiqyGyw1dwCZ9ZdRoGBPZHS+dPcDWaM3FxcsZmwaO2UmUaBga2SWv2HbxN3hLKo4UClaTZLP7YH7CEDzAieA84Cn2LwqokzWqyf3oamzCBiNF8set90i4kzavFq/UuT9P0I0yI7XZLmlZmnSTtUtLOioCDyGBi0FIqVD/YFQVpJHhv1eer1eoXTAyWqDbryDFjj7JCzF7bwvowg5mA0n62qkoXuAJJOrF/xK35BeaDNPFrJhKjVL9YH+R93MWhwH3nVrUyCyTpmmmgen7D/Kj5HijYT2aZSCvrhxxmBru4JuoTEdx9v7UzPiJsDg7pdwciHRzVTAhqXyKtYGZwmGYiNwtEOjhTZ8LSKtclLcxUxTHdLOC+lVnHyZ4KJOnGHWhiJEKdNguledTELzhQk0Hwoc+Oa0pxGIrf9ugSdqQmBUXq4C4EjiXEvhdSJDM2pEhFimgK0pIfi1AYSWxgIux2Oymo1lIOpNoRKR4U2kqnMBNKJWD/mV3viWTeSAeCyz3FkDASOD6VTJEWB3F3tn2PDFwvjxI4R5IGDAwjdSCRK/t1BFYjzSuJlDyhBvZsd4OA5ktDgrPs1yHeKwFJMWTfwJelS+aghNdVmtiuNxOTTanePQRSs0Se4sk2qd44ju+xYzKxxPNZqWXwCKwi/l8m1QOaLjKqrY4v8EZp2RWMAF6xMjtD6iOO36+7HBQptsUEhoHmXKEGf58OcSw/9jmSI3Wn7FR1PpJjP+fQNnVszq0yqd+ZtNVgArezFMqd0AAU1A8/6SptnfybU5dTLB/+AYy7xNVzTTGdAAAAAElFTkSuQmCC) no-repeat center center;
            width: 0.5rem;
            height: 0.8rem;
            background-size: 0.3rem auto;
        }

        .area_pop .so input[data-v-a84105cc] {
            width: 100%;
            background: none;
            border: 0;
        }

        input[type='text'],
        textarea {
            -webkit-appearance: none;
            appearance: none;
            outline: 0;
        }

        .area_pop ul li[data-v-a84105cc] {
            border-bottom: 0.02rem solid rgba(255, 255, 255, 0.1);
            padding: 0.28rem 0;
        }

        .db {
            display: flex;
            display: -webkit-box;
            box-align: center;
            -webkit-box-align: center;
        }

        .area_pop ul li .ico[data-v-a84105cc] {
            margin-right: 0.2rem;
        }

        .area_pop ul li .ico img[data-v-a84105cc] {
            height: 0.32rem;
        }

        img {
            max-width: 100%;
            max-height: 100%;
            vertical-align: top;
        }

        .db>li,
        .flexs {
            -moz-box-flex: 1;
            -webkit-box-flex: 1;
            box-flex: 1;
        }

        .phone_code[data-v-fa37b51c] {
            color: #fff;
            font-size: 0.28rem;
            display: flex;
            align-items: center;
            margin-right: 0.12rem;
        }

        .inp_content_box {
            display: flex;
        }
        .custom[data-v-a34da882] {
    position: fixed;
    top: .24rem;
    right: 0.3rem;
    margin-top: constant(safe-area-inset-top);
    margin-top: env(safe-area-inset-top);
    width: .72rem;
    height: .72rem;
    background: #171717;
    border-radius: .2rem;
    text-align: center;
}

 .van-checkbox__icon--checked {
    border-color: rgb(113, 219, 129);
    background-color: rgb(113, 219, 129);
}
.van-checkbox__icon--unchecked {
    border-color: #ddd; /* Set an alternative color for the unchecked state */
    background-color: transparent;
}
.van-checkbox {
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    align-items: center;
    overflow: visible;
    cursor: pointer;
    -webkit-user-select: none;
    user-select: none;
}
    </style>
</head>

<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-cfc9a7fc="" data-v-a34da882="" class="page">
            <div data-v-cfc9a7fc="" class="headers">
                <div data-v-a34da882="" data-v-cfc9a7fc="" class="custom"><a href="https://t.me/Adam_Vgcube"
                        target="_blank"><img data-v-a34da882="" data-v-cfc9a7fc=""
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAASFBMVEUAAACUmp+Tm5+Vmp+TmZ6Ul5+UmZ+Pn5+UmZ+Tl52Ump+UmZ2Tmp+Ump+SmZ6UlZ+VmJ6Tmp6Ump+UmZ+Vmp+fn5+Vmp+Ump+ZwjL7AAAAF3RSTlMAv0DfgCCgEI9A73DvsGAwYFDPcDAQz3vS0vQAAAE5SURBVEjH7VVbbsQgDAxvCIXddHfL/W/aOKkKjjFIlfpTdb4S22PDYMPyNxFiUm+lFCX85qbRTkNshQ3jcF8IhOHjI2Sn0Fz8V/rV5udr/31uVp0W1S3ixOmMr8YoBc84XOvjar4rhuG5TCYdnqvAGawffUE0+Pwljar5KSwwAjWxgrt3SIcKILkpbuDPqADO0JVENP+wg/uwZ/AuApwACSKnpJFudkzIaE2JrIjAoEWAardljLXVff3u/dyRVJxN3yYd9f7WzIikBNAOwUD8kCAwIRaOUKUg+j/OD0qoH5gg/wm/QdgIQcE8aK07k3qYdpdHJ61LhcWE0G0NByWYe1cQAsAo9jFwlhIAUu+IsjudEXwKEeYwBY3xHB4JOEVIZXrViYIwLZBpvBkSIvP6snAJZU9y+Sk+AbtVNBMW8XUdAAAAAElFTkSuQmCC"></a>
                </div>
              
            </div>

            <div data-v-cfc9a7fc="" id="scroll" class="content-container">
                <div data-v-cfc9a7fc="" id="content" class="content-scroll">
                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="logo"><img data-v-a34da882="" <div
                            data-v-a34da882="" data-v-cfc9a7fc="" class="logo"><img data-v-a34da882=""
                            data-v-cfc9a7fc="" src="{{asset('')}}assets/static/image/loginbg.png">
                        <div data-v-a34da882="" data-v-cfc9a7fc="" class="s"></div>
                    </div>
                    {{-- <div data-v-a34da882="" data-v-cfc9a7fc="" class="container">

                        <div data-v-a34da882="" data-v-cfc9a7fc="" class="logo" style="padding-top:80px">
                            <div data-v-a34da882="" data-v-cfc9a7fc="" class="s" style="
    text-align: left;
    font-size: 14px;
">@lang('Please enter your email and password to complete')</div>
                            <img src="{{asset('')}}assets/static/img/bg-image.png">
                            <div data-v-a34da882="" data-v-cfc9a7fc="" class="s"></div>
                        </div> --}}
                        <div data-v-a34da882="" data-v-cfc9a7fc="" class="container">

                            <div data-v-a34da882="" data-v-cfc9a7fc="" class="logo" style="padding-top:80px">
                                <div data-v-a34da882="" data-v-cfc9a7fc="" class="s" style="
    text-align: left;
    font-size: 14px;
">@lang('Please enter your phone and password to complete')</div>
                            </div>
                            <form action="{{route('login')}}" method="POST"  id="form-id">
                                {{ csrf_field() }}


                                <div data-v-a34da882="" data-v-cfc9a7fc="" class="item">
                                    <!---->
                                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="it input-container">
                                        <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="it">
                                            <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="flex inp">

                                                <input type="hidden" id="country-name" name="country" value="">
                                                <input type="hidden" id="dial-code" name="dialCode" value="">
                                                <input type="hidden" id="country_iso" name="country_iso" value="1">
                                                <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="flex flex1">
                                                    <div data-v-fa37b51c="" class="inp_content_box">
                                                        <div data-v-fa37b51c="" class="phone_code" id="phone_code"><span
                                                                data-v-fa37b51c="">+1</span><i data-v-fa37b51c=""
                                                                class="arrow van-icon van-icon-arrow-down"><!----></i>
                                                        </div>
                                                        <div data-v-fa37b51c="" class="input"><input data-v-fa37b51c="" name="phone"
                                                                placeholder="Enter phone number"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="it">


                                        <div data-v-a34da882="" data-v-cfc9a7fc="" class="flex inp val">
                                            <div data-v-a34da882="" data-v-cfc9a7fc="" class="ico"></div>
                                            <div data-v-a34da882="" data-v-cfc9a7fc="" class="flex1"><input
                                                    data-v-a34da882="" id="passwordInput" data-v-cfc9a7fc=""
                                                    placeholder="Please enter your password" name="password"
                                                    type="password">
                                            </div>
                                            <div data-v-a34da882="" data-v-cfc9a7fc="" class="yj"><i id="check"
                                                    onclick="togglePasswordVisibility()" class="fa fa-eye-slash" style="    font-size: 20px;
                                        margin-top: -10px;"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="box3">
                                        <div data-v-a34da882="" data-v-cfc9a7fc="" class="cache_account">
                                            <div data-v-a34da882="" role="checkbox" tabindex="0" aria-checked="true"
                                                class="van-checkbox" data-v-cfc9a7fc="">
                                                <div class="van-checkbox" id="checkbox">
        <div class="van-checkbox__icon van-checkbox__icon--square" id="checkbox-icon">
            <i class="van-icon van-icon-success" ></i>
        </div> </div><span data-v-a34da882="" data-v-cfc9a7fc="" style="
    font-size: 10px;
    margin-left: 13px;
">@lang('By logging in, I agree to the VG CUBE') <a href="{{route('service-agreement')}}"
                                                        style="color:#55b2c2 ; margin-top: 1;">@lang('Service Agreement')</a></span>
                                            </div>
                                        </div>
                                        <div data-v-a34da882="" data-v-cfc9a7fc="" class="kfBox">
                                        <a href="{{route('forgot-password')}}"
                                        style="color:#55b2c2 ;">
                                        
                                            @lang('Forgot password')</a> </div>
                                    </div>
                                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="go"><button data-v-a34da882=""
                                            data-v-cfc9a7fc="" type="submit" class="btn2">@lang('Login') </button>
                                        <div data-v-a34da882="" data-v-cfc9a7fc="" class="wrap bet">
                                            <div data-v-a34da882="" data-v-cfc9a7fc="" class="agreement"
                                                style="font-size:10px;"></div>

                                        </div>
                                        <div data-v-a34da882="" data-v-cfc9a7fc="" class="wrap bet">

                                            <div data-v-a34da882="" data-v-cfc9a7fc="" class="wr" style="
    margin-top: -12px;
"> @lang('No account')  <span data-v-a34da882="" data-v-cfc9a7fc=""><a href="{{route('register')}}"
                                                        style="color:#55b2c2 ;">@lang('Register now')</a></span></div>
                                        </div>

                                    </div>
                                    <div class="van-overlay" style="z-index: 2005;  display: none" id="overlay"></div>
                                    <div data-v-a84105cc="" class="van-popup van-popup--round van-popup--bottom"
                                        style="z-index: 2010;margin-left: -21px; display: none" id="popup">
                                        <div data-v-a84105cc="" class="area_pop">
                                            <div data-v-a84105cc="" class="title rel"> Choose the international area
                                                code <div data-v-a84105cc="" class="abs"><i data-v-a84105cc="" id="cancel"
                                                        class="van-icon van-icon-cross"><!----></i></div>
                                            </div>
                                            <div data-v-a84105cc="" class="so db">
                                                <div data-v-a84105cc="" class="ico"></div>
                                                <div data-v-a84105cc="" class="flexs"><input data-v-a84105cc=""
                                                        type="text" placeholder="Area Code Search" id="country-search"autocomplete="off">
                                                </div><!---->

                                            </div>
                                            <ul data-v-a84105cc="">
                                            <div class="country-list" id="country-list"></div>
                                            </ul>
                                           
                                        </div>
                                    </div>
                            </form>



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
                src="{{asset('')}}assets/static/img/start.0aabcda5.gif"></div>
    </div>
    @include('partials.notify')

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {

            $('#check').click(function () {

                if ($(this).hasClass('fa-eye-slash')) {

                    $(this).removeClass('fa-eye-slash');

                    $(this).addClass('fa-eye');

                    $('#test-input').attr('type', 'text');

                } else {

                    $(this).removeClass('fa-eye');

                    $(this).addClass('fa-eye-slash');

                    $('#test-input').attr('type', 'password');
                }
            });

        });
    </script>

    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById('passwordInput');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        }



    </script>

    <!-- Your other scripts -->
    <script src="https://cdn.jsdelivr.net/npm/echarts@4.6.0/dist/echarts.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-vue.2deea45a.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-echarts.eba990db.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-vant.9e1db231.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-vendors.24e8c7cc.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/app.83a7756d.1717187934571.js"></script>

    <!-- Your custom script -->
    <script>
        $(document).ready(function () {
            $('.email-tab').click(function () {
                $('.input-container').html(`
                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="n">Email</div>
                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="val inp flex">
                        <div data-v-a34da882="" data-v-cfc9a7fc="" class="ico"></div>
                        <div data-v-a34da882="" data-v-cfc9a7fc="" class="flex1"><input data-v-a34da882="" data-v-cfc9a7fc="" type="email" placeholder="Enter email" name="username"></div>
                    </div>
                `);
                $('.email-tab').addClass('on');
                $('.username-tab').removeClass('on');
            });

            $('.username-tab').click(function () {
                $('.input-container').html(`
                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="n">Username</div>
                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="val inp flex">
                        <div data-v-a34da882="" data-v-cfc9a7fc="" class="ico"></div>
                        <div data-v-a34da882="" data-v-cfc9a7fc="" class="flex1"><input data-v-a34da882="" data-v-cfc9a7fc="" type="text" placeholder="Enter username" name="username"></div>
                    </div>
                `);
                $('.username-tab').addClass('on');
                $('.email-tab').removeClass('on');
            });
        });
    </script>
    <!-- <script>
        var input = document.querySelector('#phone');
        var info = document.querySelector('#info');
        var status = document.getElementById('status');
        var iti = window.intlTelInput(input, {
            initialCountry: "us",
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" // Load the utilities script
        });

        input.addEventListener('blur', function () {
            if (iti.isValidNumber()) {
                status.textContent = 'Valid number';
                status.className = 'valid-number';
            } else {
                status.textContent = 'Invalid number';
                status.className = 'invalid-number';
            }
        });

        input.addEventListener('countrychange', function () {
            updateCountryInfo(); // Update the information displayed when the country changes
        });

        function updateCountryInfo() {
            var countryData = iti.getSelectedCountryData();
            console.log(countryData)

            $('#country-name').val(countryData.name)
            $('#dial-code').val(countryData.dialCode)
            $('#country_iso').val(countryData.iso2)

        }

        // Initialize with the current selected country's info
        document.addEventListener('DOMContentLoaded', updateCountryInfo);
    </script> -->

<script>
    $(document).ready(function(){
        
        $("#phone_code").click(function(){
            $("#popup").show();
            $("#overlay").show();
  });
  $("#cancel").click(function(){
            $("#popup").hide();
            $("#overlay").hide();
  });
});
</script>
<?php 
$countries = \DB::table('country')
->select('phonecode as code', 'name', 'iso as flag')
->get()->map(function ($country) {
    return [
        'code' => '+' . ltrim($country->code, '+'),
        'name' => $country->name,
        'flag' => strtolower($country->flag),
    ];
})
->toArray();
?>
<script>
    const countries = <?php echo json_encode($countries, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>;
</script>
<script>

    
    (function ($) {
        function populateList(filteredCountries) {
            const $list = $('#country-list');
            $list.empty();
            filteredCountries.forEach(country => {
                $list.append(`
                
                                                <li data-v-a84105cc="" class="db">
                    <div class="db" data-code="${country.code}" data-flag="${country.flag}">
                        <span class="fi fi-${country.flag}"></span>
                        ${country.name} (${country.code})
                    </div>
                    </li>
                    
                `);
            });
        }

        $(document).ready(function () {
            const $popup = $('#popup');
            const $overlay = $('#overlay');
            const $search = $('#country-search');
            const $countryList = $('#country-list');
            const $phone_code = $('#phone_code');
            const $country_iso = $('#country_iso');
            populateList(countries); // Initial population of the list

            // Show popup when input is focused
            $search.on('focus', function () {
                $popup.show();
                $overlay.show();
            });

            // Hide popup when clicking outside
            $overlay.on('click', function () {
                $popup.hide();
                $overlay.hide();
            });

            // Filter the list based on search input
            $search.on('input', function () {
                const searchTerm = $(this).val().toLowerCase();
                const filteredCountries = countries.filter(country =>
                    country.name.toLowerCase().includes(searchTerm) || country.code.includes(searchTerm)
                );
                populateList(filteredCountries);
            });

            // Handle country selection
            $countryList.on('click', 'div', function () {
                const countryCode = $(this).data('code');
                const countryCode1 = $(this).data('code').replace('+', '', 10);
                $phone_code.text(countryCode);
                $country_iso.val(countryCode1); 
                 // Set the selected code in the input
                $popup.hide();
                $overlay.hide();
            });

            // Hide popup when the close icon is clicked
            $('#cancel').on('click', function () {
                $popup.hide();
                $overlay.hide();
            });
        });
    }(jQuery));
</script>
<script>
     document.getElementById('form-id').addEventListener('submit', function (e) {
    const checkboxIcon = document.getElementById('checkbox-icon');
    
    // Check if the checkbox is in the checked state
    if (!checkboxIcon.classList.contains('van-checkbox__icon--checked')) {
        e.preventDefault(); // Prevent form submission
         iziToast.error({
    message: 'Please check the box to continue.',
    position: "topRight"
});
    }
});

// Toggle checkbox state on click
document.getElementById('checkbox').addEventListener('click', function () {
    const checkboxIcon = document.getElementById('checkbox-icon');
    checkboxIcon.classList.toggle('van-checkbox__icon--checked');
    checkboxIcon.classList.toggle('van-checkbox__icon--unchecked');
});

    </script>


</body>



</html>