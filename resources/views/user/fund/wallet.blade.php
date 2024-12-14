<html lang="en" class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>@lang('Assets')</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-65aadf8b.a4cef8a6.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-65aadf8b.59fb6a2e.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-2a0b1332.9f52f39a.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-2a0b1332.0436ba68.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-f8e2ce82.4965c1ba.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-f8e2ce82.8a913baf.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-21a2b91c.0ed7b871.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-21a2b91c.12695023.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-73ab94aa.2e0ec155.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-73ab94aa.70e0e268.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-67098c77.8b942857.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-67098c77.b8c94109.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-f8870696.ba836efa.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-f8870696.d3c72f4a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-273ce16e.debfb5de.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-273ce16e.6f3f099a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-198acc81.38a789e9.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-198acc81.12c44c37.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-8c0c3ac6.27e1c228.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-8c0c3ac6.576dd3c7.1717187934571.chunk.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .total-income .info[data-v-ac2db8a0] {
    position: relative;
    height: auto;
}
.head[data-v-397da544] {
    background: linear-gradient(92deg, #55B2AC -155.64%, #090909 103.37%);
}
</style>
<body class="main_en">
    <div id="app" class="applang">
        <div data-v-cfc9a7fc="" data-v-6df100a6="" class="page">
            <div data-v-cfc9a7fc="" class="headers">
                <div data-v-397da544="" data-v-6df100a6="" class="head" data-v-cfc9a7fc="">
                    <div data-v-397da544="" class="container flex">
                        <!---->
                        <div data-v-397da544="" class="left_title">@lang('Asset') </div>
                        <!---->
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
                    <div data-v-6df100a6="" data-v-cfc9a7fc="" class="container">
                        <div data-v-6df100a6="" data-v-cfc9a7fc="" class="com-1">
                            <div data-v-6df100a6="" data-v-cfc9a7fc="" class="name">
                                <div data-v-6df100a6="" data-v-cfc9a7fc="" class="n">@lang('My Assets')</div>
                                <div data-v-6df100a6="" data-v-cfc9a7fc="" class="s"> <a href="{{ route('user.recharge') }}">@lang('Detail')
                                    <img data-v-6df100a6=""
                                        data-v-cfc9a7fc=""
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAAOVBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAABra2v4+PgAAAAAAAAAAADk5OQAAADd3d2goKAAAADy8vL///+hq0BzAAAAEnRSTlMzACwYLwYdTOUoIRKzDKZmD9OK32BQAAABUklEQVRYw7WX0XKEIAxFLwlJC9TW+v8f2yk7O26tGE12z3uOERBzkQZI01oIAKhUniUN2BdMSthAOp0WcMYu1MQW9PIhWcUSrOWjLg4FUmBCMhZwxgkyjwSKk/C+QHGauicouED5L1Bcom4FjIvoXwHjMvwokIzLZHkQEByUVdDggu8CIbjId4HCCd8EkuEk3wQNbrgLCG7yr2BCgCnBXMLP5fvt4EDDeoOvZVnehwZKEFiCQ4NghsHHoaGBETIoKkKGioKQoYAQMtBo77dsDObW7fP5CkH4FcKLGN7G+EHSUD0YLVSPOfw5Ry+U6JVWn3Gppgw31P8LDDetC/wtZOkCfwuausDdAkkX+Fto64hT4IDCQ9bTxryOOuu7oFMjo2582O7UwLh/cSX1RZHn5Mxa5DD2NbIebwVP0WyUm9FXGlnldviuofDdkZnX+K9N0oAfKgMTw/lKDHwAAAAASUVORK5CYII=">
                                    </a>
                                </div>
                            </div>
                            <div data-v-6df100a6="" data-v-cfc9a7fc="" class="amount"> {{number_format(Auth::user()->available_balance(),2)}} <span data-v-6df100a6=""
                                    data-v-cfc9a7fc="">USDT</span></div>
                            <!-- <div data-v-6df100a6="" data-v-cfc9a7fc="" class="col">
                                <div data-v-6df100a6="" data-v-cfc9a7fc="" class="col-left"><span data-v-6df100a6=""
                                        data-v-cfc9a7fc=""><img data-v-6df100a6="" data-v-cfc9a7fc=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkBAMAAAATLoWrAAAAD1BMVEUAAAAE3AAD3AAE2wAE3ABuQteJAAAABHRSTlMAgFBAnsFh3gAAADNJREFUKM9jGAXogEkBQ0jEEV2E0cVFAF2Ri4sjhiJ0ZSogIWcUIRNMISZBIDBgGAUoAABJbwaD+etRRAAAAABJRU5ErkJggg==">
                                        {{$percentage}}% </span><span data-v-6df100a6="" data-v-cfc9a7fc="">(+${{number_format($todaysRoi,2)}})</span></div>
                                <div data-v-6df100a6="" data-v-cfc9a7fc="" class="col-right">
                                    <span data-v-6df100a6=""
                                        data-v-cfc9a7fc="">Pending: 0 U</span>
                                    </div>
                            </div> -->
                            <div data-v-6df100a6="" data-v-cfc9a7fc="" class="balance-con">
                                <div data-v-6df100a6="" data-v-cfc9a7fc="" class="balance-item">
                                    <div data-v-6df100a6="" data-v-cfc9a7fc="" class="name">@lang('Subscribe Amount')</div>
                                    <div data-v-6df100a6="" data-v-cfc9a7fc="" class="val"> {{currency()}}  {{number_format(Auth::user()->investment()->sum('amount'),2)}}</div>
                                </div>
                                <div data-v-6df100a6="" data-v-cfc9a7fc="" class="balance-item">
                                    <div data-v-6df100a6="" data-v-cfc9a7fc="" class="name">@lang('Withdraw Fund')</div>
                                    <div data-v-6df100a6="" data-v-cfc9a7fc="" class="val">{{currency()}}  {{number_format(Auth::user()->withdrawal()->sum('amount'),2)}}</div>
                                </div>
                            </div>
                        </div>
                        
                        <ul data-v-6df100a6="" data-v-cfc9a7fc="" class="tab flex">
                            <li data-v-6df100a6="" data-v-cfc9a7fc="">
                                <a href="{{route('user.fund')}}" style="color: #fff">
                                <img data-v-6df100a6="" data-v-cfc9a7fc=""
                                src="{{asset('')}}assets/static/img/deposit_i.png"> 
                                <div data-v-6df100a6="" data-v-cfc9a7fc="" class="s">@lang('Deposit')    </a></div>
                        

                            </li>
                            <li data-v-6df100a6="" data-v-cfc9a7fc="">
                                <a href="{{route('user.Withdraw')}}" style="color: #fff">
                                <img data-v-6df100a6="" data-v-cfc9a7fc=""
                                src="{{asset('')}}assets/static/img/withdraw_i.png">
                                <div data-v-6df100a6="" data-v-cfc9a7fc="" class="s">@lang('Withdraw')  </a> </div>
                            </li>
                        </ul>
                    </div>
                    <div data-v-ac2db8a0="" data-v-6df100a6="" class="revenue" data-v-cfc9a7fc="">
                        <div data-v-ac2db8a0="" class="container">
                            <div data-v-ac2db8a0="" class="total-income">
                                <div data-v-ac2db8a0="" class="title_box">
                                    <div data-v-ac2db8a0="" class="title">@lang('Recent Asset')</div>
                                    <!-- <div data-v-ac2db8a0="" class="choose_day">
                                        <i data-v-ac2db8a0=""
                                            class="arrow_down van-icon van-icon-arrow-down">
                                            </i>
                                    </div> -->
                                </div>

                                <style>
                                    .list .it .n[data-v-65a522d0], .list .it .str[data-v-65a522d0] {
                                                font-size: 12px;
                                                line-height: 1em;
                                                font-weight: 500;
                                            }

                                        .db {
                                            display: flex;
                                            display: -webkit-box;
                                            box-align: center;
                                            -webkit-box-align: center;
                                        }
                                            .list .it .b[data-v-65a522d0] {
                                            padding: .32rem 0;
                                        }
                                        .list .it[data-v-65a522d0] {
                                        border-bottom: .02rem solid hsla(0, 0%, 100%, .2);
                                    }
                                .list .it .time[data-v-65a522d0] {
                                        margin-top: .16rem;
                                        color: #929292;
                                        font-size: 10px;
                                        line-height: 1em;
                                    }
                                </style>
                                <div data-v-ac2db8a0=""  data-v-cfc9a7fc="" class="info list">
                                    <!---->
                                    <?php if(is_array($level_income) || is_object($level_income)){ ?>

                                        <?php
                                        date_default_timezone_set('UTC');
                                        $cnt = 0; ?>
                                        @foreach ($level_income as $value)
                                        
                                       

                                    <div data-v-65a522d0="" class="it">
                                        <div data-v-65a522d0="" class="jbox_07">
                                            <div data-v-65a522d0="" class="jt"></div>
                                            <div data-v-65a522d0="" class="jc c">
                                                <div data-v-65a522d0="" class="b">
                                                    <div data-v-65a522d0="" class="db">
                                                        <div data-v-65a522d0="" class="flexs">
                                                            <div data-v-65a522d0="" class="n"> 
                                                           @if($value['remarks'] == "Buy Package")
                                                                {{
                                                                    $value['comm'] == 30 ? "Subscription Core" : 
                                                                    ($value['comm'] == 120 ? "Subscription Prime" : 
                                                                    ($value['comm'] == 300 ? "Subscription Plus" :
                                                                    ($value['comm'] == 1200 ? "Subscription Max" :
                                                                    ($value['comm'] == 3600 ? "Subscription Pro" :
                                                                    ($value['comm'] == 6000 ? "Subscription Edge" :
                                                                    ($value['comm'] == 15000 ? "Subscription Hub" : ""))))))
                                                                }}
                                                            @elseif($value['remarks'] == "Deposits")
                                                                @lang('Deposit')    <a target="_blank" href="{{route('user.viewdetail',['txnId'=>$value['txn_no']])}}" style="margin-left:10px;color: #ffffff;    text-transform: lowercase;"> <i class="fa fa-share-alt" aria-hidden="true"></i> </a>
                                                            @else
                                                                {{ $value['remarks'] }}
                                                            @endif

                                                            </div>
                                                            <div data-v-65a522d0="" class="time"> {{ date('D, d M Y H:i:s', strtotime($value['created_at'])) }}</div>
                                                        </div>
                                                        <div data-v-65a522d0="" class="str"
                                                            style="display: flex;">
                                                            @if($value['remarks']=="Deposits")
                                                            
                                                            <div data-v-65a522d0="" class="green">
                                                                +{{ $value['comm'] }}
                                                            </div>
                                                               @if($value['status']=="Failed")
                                                             <div data-v-65a522d0="" class="green"
                                                                style="margin-left: 0.04rem;height: 20px;margin-right: -30px;">
                                                                USDT </div>
                                                                
                                                                 @else
                                                                <div data-v-65a522d0="" class="green"
                                                                style="margin-left: 0.04rem;height: 20px;margin-right: -40px;">
                                                                USDT </div>
                                                                @endif
                                                                
                                                            @else
                                                             
                                                            <div data-v-65a522d0="" class="red">
                                                               
                                                                
                                                                -{{ $value['comm'] }}
                                                            </div>
                                                            
                                                            @if($value['status']=="Failed")
                                                            
                                                             <div data-v-65a522d0="" class="red"
                                                                style="margin-left: 0.04rem;height: 20px;margin-right: -28px;">
                                                                USDT </div>
                                                                @else
                                                                <div data-v-65a522d0="" class="red"
                                                                style="margin-left: 0.04rem;height: 20px;margin-right: -40px;">
                                                                USDT </div>
                                                                @endif
                                                                
                                                            @endif
                                                           
                                                            <div data-v-65a522d0="" class="time" style="margin-top: 22px;">
                                                                <?php
                                                                
                                                                if($value['status']=="Received" || $value['status']=="Active" || $value['status']=="Approved")
                                                                {
                                                                    echo "Success"; 
                                                                }
                                                                else
                                                                {
                                                                   echo $value['status'];
                                                                }
                                                                
                                                                ?>
                                                             
                                                            </div>
                                                        </div>
                                                        <!---->
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-v-65a522d0="" class="jb"></div>
                                        </div>
                                    </div>

                                    @endforeach

                                    <?php }?>

                                
                                </div>
                            </div>
                        </div>
                        <div data-v-4c14e1cc="" data-v-ac2db8a0="">
                            <!---->
                        </div>
                    </div>
                    <div data-v-372e76f5="" data-v-6df100a6="" class="revenue" data-v-cfc9a7fc="">
                        <!-- <div data-v-372e76f5="" class="container">
                            <div data-v-372e76f5="" class="total-income">
                                <div data-v-372e76f5="" class="title_box">
                                    <div data-v-372e76f5="" class="title">Asset composition</div>
                                </div>
                                <div data-v-372e76f5="" class="info">
                                    <div data-v-372e76f5="" id="myChart" _echarts_instance_="ec_1718779942243"
                                        style="width: 100%;  height: 6rem; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                        <div
                                            style="position: relative; width: 385px; height: 300px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;">
                                            <canvas data-zr-dom-id="zr_0" width="770" height="600"
                                                style="position: absolute; left: 0px; top: 0px; width: 385px; height: 300px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            @include('layouts.upnl.footer')