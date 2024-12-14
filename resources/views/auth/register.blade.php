<html lang="en" class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>{{ siteName() }}</title>
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
    <meta itemprop="description"
        content="Welcome to {{siteName()}} - Your Path to Smart Crypto Investments!">
    <meta itemprop="image" content="{{asset('logo1.ico')}}">

    <meta property="og:type" content="website">
    <meta property="og:title"
        content="{{siteName()}}">
    <meta property="og:description"
        content="Welcome to {{siteName()}} - Your Path to Smart Crypto Investments!">
    <meta property="og:image" content="{{asset('logo1.ico')}}" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:url" content="{{asset('')}}">
    
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-4db5803f.b52e0b88.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-4db5803f.7cdcd357.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-2a0b1332.9f52f39a.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-2a0b1332.0436ba68.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-f8e2ce82.4965c1ba.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-f8e2ce82.8a913baf.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-273ce16e.debfb5de.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-273ce16e.6f3f099a.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-73ab94aa.2e0ec155.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-73ab94aa.70e0e268.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-443d6c51.69a31eff.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-443d6c51.4a84b438.1717187934571.chunk.js">
    </script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icons/6.6.6/css/flag-icons.min.css">

</head>

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
    font-family: Poppins,PingFang SC,Microsoft Yahei,sans-serif
}
.agreement{

}
.set{

}
.go p[data-v-607a0cfb] {
    margin-top: .4rem;
    color: var(--COcolor3);
    font-size: .26rem;
    text-align: left;
    margin-bottom: .4em;
}

</style>
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
    overflow: inherit;
    cursor: pointer;
    -webkit-user-select: none;
    user-select: none;
}
    </style>

<body class="main_en">
    <div id="app" class="applang">
        <div data-v-cfc9a7fc="" data-v-607a0cfb="" class="page">
            <!-- <div data-v-cfc9a7fc="" class="headers">
                <div data-v-397da544="" data-v-607a0cfb="" class="head head_isModule" is-left="true" data-v-cfc9a7fc="">
                    <div data-v-397da544="" class="container flex">
                      
                        <div data-v-397da544="" class="left_title"> @lang('Registration') </div>
                      
                        <div data-v-397da544="" class="flex1"></div>
                        <div data-v-397da544="" class="lang"> <a href="{{route('user.lang')}}"> <img data-v-397da544=""
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAMAAABiM0N1AAAAZlBMVEUAAAAVFRUWFhYQEBAVFRUWFhYVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUYGBgQEBAWFhbOzs5ycnK3t7ctLS1bW1tmZmYhISHDw8N+fn6goKBERESsrKyJiYmUlJQ4ODhQUFA5OTlkLOJfAAAAEHRSTlMA7+AQz7CggHBAkI/AYCAgGfxI1gAAAitJREFUWMPll9miqiAUhhE1tREC1Jyq93/JI4tD6LZdTHf7u8jVhV+sXxlCa6oyxwn5SpLlRYV+JS0S4gDeXd5rDsSZd6oyIR7g00/PgXhyWLd1JN5kKTJkJIDjpq/g7k4kkBIBFxwqSlRMOwIEN3chEUhhQBEoZhGOIUoQqkgUKlTEEZUojyPKURZHhFESR5Qg8gFxl5/PlsG1F+QDH0Q9Y/LCGaUtl1XLhIeouVF6lcVIZ26yus7XxlXEh/l2LgsqaRvpngvGnUTQD+0gJwrUsu7A5CJq2OvmSYkmWdeyGhoH0Q1u7iFhJWohfihvliLTjizv9D/cWHtrETSmInpokVAhSZitCAZkHrniCi1rqZ1oWDyoUYtGlTbQ2Yk4VTx0M8C0bJRbiWqq6PXoALaMvrYSTcufZSsR131aicRV0UDYGhhEY75sRV78dVG9DLt+G7awEo3fH//k9ELeV6IB1hGnF5Jv5rukc58ipPs2aQe3ZWQMW0ZMMIOWAg/Xhc1k2urATPStGlDw4n93XfxJM+hYttsRa/w2yFrn675BGhPs07I3s3sP3PsQcXu9CsL9EAEIpp5bq/thrPdcRgTc+GTtE66CfCDe0Q/HEWXxjsdlHFER7y9EnLQxQnH+jOxmURpDdEYz+xgDkqTBKeEzAspQ0Qk04c3t0Ytj2OwwpJm/55iiJfvAvgwn7KNJSrThvPMYjmprq8JOoymMZkNV5Fli4cB5WaEV/wDnFTWJG/z43wAAAABJRU5ErkJggg==">
                            </a>
                        </div>
                        
                        <div data-v-397da544="" class="head_right"></div>
                    </div>
                </div>
            </div> -->
            <form action="{{ route('registers') }}" method="POST" name="login_frm" id="form-id" style="overflow: scroll;">
                {{ csrf_field() }}

                @php
                    $sponsor = @$_GET['ref'];
                    $name = \App\Models\User::where('username', $sponsor)->first();
                @endphp

                <div data-v-cfc9a7fc="" id="scroll" class="content-container">
                    <div data-v-cfc9a7fc="" id="content" class="content-scroll">
                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="logo"><img data-v-a34da882=""
                                data-v-cfc9a7fc=""
                                src="{{asset('')}}assets/static/image/loginbg.png">
                            <div data-v-a34da882="" data-v-cfc9a7fc="" class="s"></div>
                        </div>
                        <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="container">
                        <div data-v-a34da882="" data-v-cfc9a7fc="" class="logo" style="padding-top:80px">
                            <div data-v-a34da882="" data-v-cfc9a7fc="" class="s">@lang('Registration')</div>
                        </div>
                            <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="item" style="margin-top: 8px;">
                             
                                <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="it">
                                    <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="flex inp">

                               
                                        <input type="hidden" id="country_iso" name="country_iso" value="1">
                                       <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="flex flex1">
                                                    <div data-v-fa37b51c="" class="inp_content_box">
                                                        <div data-v-fa37b51c="" class="phone_code" id="phone_code"><span
                                                                data-v-fa37b51c="">+1</span><i data-v-fa37b51c=""
                                                                class="arrow van-icon van-icon-arrow-down"><!----></i>
                                                        </div>
                                                        <div data-v-fa37b51c="" class="input"><input data-v-fa37b51c="" value="{{old('phone')}}" name="phone"
                                                                placeholder="Enter phone number"></div>
                                                    </div>
                                                </div>
                                    </div>
                                </div>
                                
                                   <?php $user_detail = session()->get('messages') ?>
                                <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="it">
                                   
                                    <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="flex inp">
                                        <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="flex1"><input
                                                data-v-607a0cfb="" data-v-cfc9a7fc="" value="{{$user_detail?$user_detail['email']:old('email')}}" name="email" id="emailId"
                                                type="text" placeholder="Email"></div>
                                    </div>
                                </div>
                              
                                @php
                                      $sponsor = @$_GET['ref'];
                                      $name = \App\Models\User::where('username', $sponsor)->first();
                                      @endphp
                                      
                                      
                                     
                                        
                                        

                                <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="it">
                                    <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="inp flex">
                                        <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="flex1"><input
                                                data-v-607a0cfb="" data-v-cfc9a7fc="" name="sponsor" value="{{$sponsor?$sponsor:old('sponsor')}}" id="sponsor"
                                                type="text" placeholder="Invitation code cannot be empty"></div>
                                    </div>
                                </div>
                                <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="it">
                                    
                                    <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="flex inp">
                                        <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="flex1"><input id="passwordInput"
                                                data-v-607a0cfb="" data-v-cfc9a7fc="" value="{{old('password')}}" name="password"
                                                placeholder="Password" type="password"></div>
                                        <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="yj"><i  onclick="togglePasswordVisibility()" class="fa fa-eye-slash check" style="    font-size: 20px;
                                            margin-top: -10px;"></i>
                                        </div>
                                    </div>
                                </div>
                              
                                <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="it">
                         
                                    <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="inp flex">
                                        <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="flex1"><input
                                                data-v-607a0cfb="" data-v-cfc9a7fc="" value="{{old('password_confirmation')}}" name="password_confirmation" id="passwordInput2"
                                                placeholder="Confirm password" type="password"></div>
                                        <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="yj"><i onclick="togglePasswordVisibility()" class="fa fa-eye-slash check" style="    font-size: 20px;
                                            margin-top: -10px;"></i>
                                        </div>
                                    </div>
                                </div>
                                
                                 <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="it" style="    padding: .11rem;background: transparent;">
                                     @php
                                        $captcha = getCustomCaptcha($height = 46, $width = '100%', $bgcolor = 'transparent');
                                    @endphp

                                   
                                            @php echo  $captcha @endphp
                                                @if(reCaptcha())
                                                <div class="form-group has-feedback">
                                                    @php echo reCaptcha(); @endphp
                                                </div>
                                             @endif 

                                                
                                     
                                </div> 
                                
                                <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="it">
                                    
                                    
                                    <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="inp flex">
                                        <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="flex1"><input
                                                data-v-607a0cfb="" data-v-cfc9a7fc="" value="{{old('captcha')}}" name="captcha" 
                                                placeholder="Captcha Code" type="text"></div>
                                        <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="yj"></i>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="go">
                                <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="box3">
                                    <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="cache_account"
                                        style="display: flex; align-items: center;">
                                         <div data-v-607a0cfb="" role="checkbox" tabindex="0" aria-checked="true"
                                            class="van-checkbox" data-v-cfc9a7fc="">
                                            <div class="van-checkbox" id="checkbox">
                                                <div class="van-checkbox__icon van-checkbox__icon--square" id="checkbox-icon">
                                                    <i class="van-icon van-icon-success"></i>
                                                </div>
                                            </div>
                                        </div><span data-v-607a0cfb="" data-v-cfc9a7fc="" class="agreement" style="font-size:10px; margin-left: 9px;"> @lang('By registering in, I agree to the VG CUBE') <span
                                        data-v-607a0cfb="" data-v-cfc9a7fc=""><a href="{{ route('service-agreement') }}"
                                            style="color:#55b2c2 ; ">@lang('Service Agreement')</a></span>
                                    </div>
                                </div>
                                
                                
                                <button data-v-607a0cfb="" data-v-cfc9a7fc="" type="submit" class="btn2">
                                   @lang('Registration') </button>
                                   
                                

                                            <p data-v-607a0cfb="" data-v-cfc9a7fc="" class="set" > @lang('Already have an account') <span
                                        data-v-607a0cfb="" data-v-cfc9a7fc=""><a href="{{ route('login') }}"
                                            style="color:#55b2c2 ;">@lang('Log in now')</a></span></p>
                                            
                                            
                                <!---->
                                 </form>
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
                                    <style>
                                        .area_pop .title[data-v-a84105cc] {
                                            font-size: 0.32rem;
                                            text-align: center;
                                            padding: 0.3rem;
                                            margin: 11px;
                                        }
                                    </style>
                                     <div data-v-a84105cc="" class="van-popup van-popup--round van-popup--bottom"
                                        style="z-index: 2010;margin-left: -21px; display: none" id="registerModel">
                                        <div data-v-a84105cc="" class="area_pop">
                                            <div data-v-a84105cc="" class="title rel"> Confirmation Email ID <div data-v-a84105cc="" class="abs"><i data-v-a84105cc="" id="cancel2"
                                                        class="van-icon van-icon-cross"><!----></i></div>
                                            </div>
                                            
                                             <form action="{{ route('confirm') }}" method="POST" >
                                                  {{ csrf_field() }}
                                              <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="it" style="    margin: 15px;background: transparent;">
                                                <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="flex inp" style="    background: #2f3135;padding: 10px;border-radius: 10px;">
                                                    <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="flex1"><input
                                                            data-v-607a0cfb="" data-v-cfc9a7fc="" name="code" id="code"  value="{{old('code')}}"
                                                            type="text" placeholder="Please enter the verification code"></div>
                                                    <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="code-btn verify-button">
                                                       @lang('Get Code')</div>
            
                                                       <div data-v-607a0cfb="" style="display:none" data-v-cfc9a7fc="" class="resend-btn verify-button">
                                                        @lang('Get Code')</div>
            
                                                    <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="str"
                                                        style="display: none;">
                                                        <div data-v-607a0cfb="" class="van-count-down" data-v-cfc9a7fc=""><span
                                                                data-v-607a0cfb="">0 <var data-v-607a0cfb="">s</var></span></div>
                                                    </div>
                                                </div>
                                                
                                                   <button data-v-607a0cfb="" style="margin-top: 0.62rem;" data-v-cfc9a7fc="" type="submit" class="btn2">
                                                   @lang('Registration') </button>
                                            </div>
                                            
                                           </form>
                                                   
                                
                                            <ul data-v-a84105cc="">
                                           
                                            </ul>
                                           
                                        </div>
                                    </div>
                                    
                                    
           
        </div>
        <div data-v-a7d12cfc="" class="global-loading default" style="display: none;">
            <div data-v-a7d12cfc="" class="global-spinner"><img data-v-a7d12cfc=""
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAArCAMAAAA0X5qLAAAAh1BMVEUAAAAAv44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av46sPT54AAAALHRSTlMA+wXZ+J87JB7ux4lDNRQPCvLq39PNp5BpWRmxgnAvvrnlw5RhT0sqwHRxeP/zXbkAAAGcSURBVDjLjZTXcqtAEAVnyUGIJBAKKFqS7dv//30XsHFJxrD0C0XRxc45TCEDvFsdrvfhxnGWMk1S7c70nI+bZFxdXFC8YG5GVNemxTdte7+3yxUdq4MMMaocsMza6CeSqLRo2A3dffvguPh1WEiDcuWFeN24mSNDdjS85Exs4OLJX7wpyOWJT8A25G+iFMyn2za1jOIAV+kxIU9knDUQ9d8C/EimyH9OXgawNiblrepfXSn8WKax+4wnCEWDC6ptNk5RC9GxgqqNZ1EstXL1tSP/oBQtS1DN5Qp7vbz1sdwu30b0pNAkPIOrd4131E2kAEf0rDqtaJvTY3YDvM+aOS5IH91KrWdUl2LGIhsI9PIDLm2DFmmslT++FyiDu7a5ANV1FoKpkw/gfwUFddDIO7Cl4wqBMf1iRRZJxxb86d5OYCf9fyS/TaYrFcqVeYQK6nmqEQLFPNc7AuZ2lrtYAcEs936kdZdjE97rSAxDEvG8j8wC/E8Zo1Yo/CAv0oyOYKKzN55QWTm9B9WpyGiwyMvFnLbih+M5xjDWf6S2MlzIf04ZAAAAAElFTkSuQmCC"
                    alt=""></div>
        </div>
        <div data-v-e73e51fc="" class="start-page" style="display: none;"><img data-v-e73e51fc=""
                src="{{asset('')}}assets/static/img/start.0aabcda5.gif"></div>
    </div>
    <!---->
    </div>
    </div>
    <!---->
    </div>
    @include('partials.notify')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

@if(session()->has('messages'))
<script>
     $(document).ready(function() {
          $("#registerModel").show();
         $("#overlay").show();
         
         startTimer(); // Start the timer after sending the code
        $('.code-btn').hide();
        $('.resend-btn').show();
                    
     });
</script>

 
@endif
      
    <script>
        $(document).ready(function() {
    
    $('.check').click(function(){
         
          if($(this).hasClass('fa-eye-slash')){
             
            $(this).removeClass('fa-eye-slash');
            
            $(this).addClass('fa-eye');
            
            $('#test-input').attr('type','text');
              
          }else{
           
            $(this).removeClass('fa-eye');
            
            $(this).addClass('fa-eye-slash');  
            
            $('#test-input').attr('type','password');
          }
      });
      
  });
      </script>
      
      <script>
  function togglePasswordVisibility() {
      var passwordInput = document.getElementById('passwordInput');
      var passwordInput2 = document.getElementById('passwordInput2');
      if (passwordInput.type === 'password') {
          passwordInput.type = 'text';
      } else {
          passwordInput.type = 'password';
      }

      if (passwordInput2.type === 'password') {
        passwordInput2.type = 'text';
      } else {
          passwordInput2.type = 'password';
      }
  }
  
  
  
  </script>

    <script>
        $('.code-btn').click(function(e) {
            e.preventDefault(); // Prevent the default form submission
            var emailId = $('#emailId').val();

            if (emailId == "") {
                iziToast.error({
                    message: 'Enter Email ID!',
                    position: "topRight"
                });
                return false;

            }
            startTimer(); // Start the timer after sending the code
                    $('.code-btn').hide();
                    $('.resend-btn').show();

            $.ajax({
                type: "POST",
                url: "{{ route('sendCodeEmail') }}",
                data: {
                    emailId: emailId,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    if (response) {
                        iziToast.success({
                            message: 'Email sent successfully',
                            position: "topRight"
                        });
                    } else {
                        iziToast.error({
                            message: 'Error!',
                            position: "topRight"
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', error);
                    iziToast.error({
                        message: 'Error: ' + xhr.responseText,
                        position: "topRight"
                    });
                }
            });
        });

function startTimer() {
        var resendButton = $('.resend-btn');
        countdown = 60; // 60 seconds
        resendButton.prop('disabled', true); // Disable the resend button
        resendButton.text('Wait ' + countdown + 's');

        timer = setInterval(function() {
            countdown--;
            resendButton.text('Wait ' + countdown + 's');

            if (countdown <= 0) {
                clearInterval(timer);
                resendButton.prop('disabled', false); // Enable the resend button after the timer ends
                resendButton.text('Resend Code'); // Reset button text
            }
        }, 1000);
    }

    // Optional: Handle Resend Button Click
    $('.resend-btn').click(function(e) {
        $('.code-btn').trigger('click'); // Simulate a click on the original send button
    });

    </script>


  <script>
    $(document).ready(function(){
        
        $("#phone_code").click(function(){
            $("#popup").show();
            $("#overlay").show();
      });
  
    // $("#registerModel").show();
    // $("#overlay").show();
  
  
  
  $("#cancel").click(function(){
            $("#popup").hide();
            $("#overlay").hide();
  }); 
  
  $("#cancel2").click(function(){
            $("#registerModel").hide();
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

    <div data-v-a7d12cfc="" class="global-loading default" style="display: none;">
        <div data-v-a7d12cfc="" class="global-spinner"><img data-v-a7d12cfc=""
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAArCAMAAAA0X5qLAAAAh1BMVEUAAAAAv44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av46sPT54AAAALHRSTlMA+wXZ+J87JB7ux4lDNRQPCvLq39PNp5BpWRmxgnAvvrnlw5RhT0sqwHRxeP/zXbkAAAGcSURBVDjLjZTXcqtAEAVnyUGIJBAKKFqS7dv//30XsHFJxrD0C0XRxc45TCEDvFsdrvfhxnGWMk1S7c70nI+bZFxdXFC8YG5GVNemxTdte7+3yxUdq4MMMaocsMza6CeSqLRo2A3dffvguPh1WEiDcuWFeN24mSNDdjS85Exs4OLJX7wpyOWJT8A25G+iFMyn2za1jOIAV+kxIU9knDUQ9d8C/EimyH9OXgawNiblrepfXSn8WKax+4wnCEWDC6ptNk5RC9GxgqqNZ1EstXL1tSP/oBQtS1DN5Qp7vbz1sdwu30b0pNAkPIOrd4131E2kAEf0rDqtaJvTY3YDvM+aOS5IH91KrWdUl2LGIhsI9PIDLm2DFmmslT++FyiDu7a5ANV1FoKpkw/gfwUFddDIO7Cl4wqBMf1iRRZJxxb86d5OYCf9fyS/TaYrFcqVeYQK6nmqEQLFPNc7AuZ2lrtYAcEs936kdZdjE97rSAxDEvG8j8wC/E8Zo1Yo/CAv0oyOYKKzN55QWTm9B9WpyGiwyMvFnLbih+M5xjDWf6S2MlzIf04ZAAAAAElFTkSuQmCC"
                alt=""></div>
    </div>
    <div data-v-e73e51fc="" class="start-page" style="display: none;"><img data-v-e73e51fc=""
            src="{{ asset('') }}assets/static/img/start.0aabcda5.gif"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/echarts@4.6.0/dist/echarts.js"></script>
    <script src="{{ asset('') }}assets/static/js/chunk-vue.2deea45a.1717187934571.chunk.js"></script>
    <script src="{{ asset('') }}assets/static/js/chunk-echarts.eba990db.1717187934571.chunk.js"></script>
    <script src="{{ asset('') }}assets/static/js/chunk-vant.9e1db231.1717187934571.chunk.js"></script>
    <script src="{{ asset('') }}assets/static/js/chunk-vendors.24e8c7cc.1717187934571.chunk.js"></script>
    <script src="{{ asset('') }}assets/static/js/app.83a7756d.1717187934571.js"></script>
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
