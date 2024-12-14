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
    <script charset="utf-8" src="{{asset('')}}assets/static/js/rolldate.min.js"></script>

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
    <link rel="stylesheet" href="drum.css">


</head>
<style>
    .total-income .info[data-v-ac2db8a0] {
    position: relative;
    height: auto;
}
.name1 {
    font-size: 10px; /* Sets the text to 8px */
    text-align: left; /* Change to 'center', 'right', or another value if you want different alignment */
    margin-right: -80px; /* Adjust margin if spacing needs to change */
    padding: 0; /* Adjust padding if necessary */
    color: #00000087;;
}
.amount1{
    /* color: #000;
    font-size: 14px;
    font-weight: 700;
    line-height: 11px;
    letter-spacing: .02rem; */
    /* margin: .1rem 17px; */
}
.balance-item2{
    display: inline-block;
    margin-left: 80px;
}
.balance-item{
    display: inline-block;
    margin-left: 4px;
}
.balance-item3{
    padding-top: 10px;
    
    margin-left: 4px;
}
.val{
    font-size:12px;
    font-weight: 550;
    color: #000;
    padding-top: 4px;


    
}
input[type=text], textarea{
    margin-left: 31px;
}

.container1 {
            background-color: #2b2b2b;
            border-radius: 10px;
            padding: 20px;
            width: 100%;
            margin-bottom: 12px;
            height: 52px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            font-family: PingFang SC;
        }
        .header img {
            width: 50px;
            height: 43px;
        }
        .header .title {
            font-size: 13px;
            /* font-weight: bold; */
            flex-grow: 1;
            text-align: center;
        }
        .header button.status {
            color: #000;
            font-size: 9px;
            border: black;
            
    height: 21px;
    width: 61px;
    border-radius: 15px;
    background: linear-gradient(92deg, #55B2C2 1.36%, #fff 103.37%);
        }
        .content {
            font-size: 14px;
        }
        .content .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .content .label {
            /* color: #aaaaaa; */
            color: #fff;
            /* padding-top: 6px; */
            font-size: 10px;
            font-family: PingFang SC;
            margin-top: -3px;
        }
        .content .label1 {
            color: #aaaaaa;
            padding-top: 6px;
            font-size: 10px;
            text-align: center;
            font-family: PingFang SC;
        }

        .content .highlight {
            color: #55b2c2;
            font-size: 12px;
            font-weight: bold;
            text-align: center;
        
            margin-bottom: -33px;
            margin-top: 2px;
        }
        .data{
            margin-top:-7px;
            font-size: 10px;
            padding-top: 0px;
            color: #aaaaaa;
            font-family: PingFang SC;
        }
        div.date_wrapper {
width: 265px;
}
div.date_wrapper .date_header {
height: 25px;
font-weight: 400;
border-bottom: 1px solid #CCC;
margin-bottom: 10px;
}
div.date_wrapper .date_header span.title {
float: left;
text-align: left;
}
div.date_wrapper .date_header span.selection {
float: right;
text-align: right;
color: #CE0000;
}
div.date_wrapper form {
position: relative;
}
div.date_wrapper .lines {
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
border-top: solid 1px #CCC;
border-bottom: solid 1px #CCC;
position: absolute;
top: 58px;
left: 0px;
width: 100%;
height: 24px;
}
div.date_wrapper .lines div {
margin-left: 220px;
line-height: 21px;
}
div.drum-wrapper {
float: left;
}
div.drum figure {
text-align: left;
}
#drum_hours figure,  #drum_date figure {
text-align: right;
}
#drum_date, #drum_to_date {
margin-left: 10px;
margin-right: 5px;
}
#drum_date,  #drum_hours,  #drum_minutes {
width: 30px;
}
#drum_hours {
margin-left: 10px;
}
#drum_minutes {
margin-left: 4px;
}
#drum_month {
width: 90px;
}
#drum_fullYear {
width: 45px;
}
#drum_hours .dial div {
margin: 0 7px;
}
#drum_minutes .dial div {
margin: 0 2px;
}
.rolldate-container {
    scroll-behavior: smooth; /* Enables smooth scrolling */
    max-height: 300px; /* Set max height to create a scrollable area */
    overflow-y: auto; /* Allows vertical scrolling if the content exceeds the height */
}
.dollar{
    font-weight: 600;
    font-size: 13;
}
/* Black theme for the date picker container */

.invest {
            background-color: #2a2a2a;
            border-radius: 10px;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            width: 100%;
        }
        .invest div {
            text-align: center;
        }
        .invest div span {
            display: block;
            font-size: 12px;
            color: #b0b0b0;
            font-family: PingFang SC;
        }
        .invest div .content {
            font-size: 14px;
            color: #ffff;
            padding-top:8px;
            font-family: PingFang SC;
        }

        .history {
            width: 100%;
            padding: 20px;
            background-color: #2b2b2b;
            border-radius: 5px;
            margin: 15px auto;
            padding-top: 16px;
    padding-bottom: 3px;
        }
        .header {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .status {
            float: right;
            font-size: 12px;
            color: #b3b3b3;
        }
        .item {
            margin-bottom: 5px;
            font-family: PingFang SC;
        }
        .label {
            font-size: 12px;
            color: #f4fafa59;
        }
        .value {
            float: right;
            font-size: 10px;
        }

        .left_title[data-v-397da544] {
    color: #fff;
    font-size: 16px;
    font-weight: 300;
}

.container {
    padding: 8px .4rem;
}
.head_right[data-v-397da544] {
    margin-right: 139px;
}

a {
    text-decoration: none;
    color: #ebf4f2;
    font-size: 22px;
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
            </style>
         

<body class="main_en">
    <div id="app" class="applang">
        <div data-v-cfc9a7fc="" data-v-6df100a6="" class="page">
            <div data-v-cfc9a7fc="" class="headers">
                <div data-v-397da544="" data-v-6df100a6="" class="head" data-v-cfc9a7fc="">
                    <div data-v-397da544="" class="container flex">
                        <!---->
                        <div data-v-397da544="" class="left_title"><a href="{{route('user.recharge')}}" style="color:#fff;"><i data-v-397da544="" class="van-icon van-icon-arrow-left">
                        <!----></i></a></div>
                        <!---->
                        <div data-v-397da544="" class="flex1"></div>
                        <!---->
                        <!---->
                        <!---->
                        <div data-v-397da544="" class="head_right">@lang('Node Power Income') </div>
                    </div>
                </div>
            </div>
            <div data-v-cfc9a7fc="" id="scroll" class="content-container">
                <div data-v-cfc9a7fc="" id="content" class="content-scroll">
                    <div data-v-6df100a6="" data-v-cfc9a7fc="" class="container">
                        <!-- <div data-v-6df100a6="" data-v-cfc9a7fc="" class="com-1">
                           
                            
                            <div data-v-6df100a6="" data-v-cfc9a7fc="" class="col">
                             
                                <div data-v-6df100a6="" data-v-cfc9a7fc="" class="col-right">
                                   <span data-v-6df100a6=""
                                        data-v-cfc9a7fc="">Pending: 0 U</span>
                                    </div>
                            </div>
                            
                            
                                <div data-v-6df100a6="" data-v-cfc9a7fc="" class="balance-item">
                                    <div data-v-6df100a6="" data-v-cfc9a7fc="" class="name1">@lang('Cumulative running total(USDT)')</div>
                                    <div data-v-6df100a6="" data-v-cfc9a7fc="" class="val"><span class="dollar">$</span> 229.8365923</div>
                                </div>
                                <div data-v-6df100a6="" data-v-cfc9a7fc="" class="balance-item2">
                                    <div data-v-6df100a6="" data-v-cfc9a7fc="" class="name1">@lang('Computing power income(USDT)')</div>
                                    <div data-v-6df100a6="" data-v-cfc9a7fc="" class="val"><span class="dollar">$</span> 4.06810768</div>
                                </div>
                                
                          
                            <div data-v-6df100a6="" data-v-cfc9a7fc="" class="balance-item3">
                                    <div data-v-6df100a6="" data-v-cfc9a7fc="" class="name1">@lang('Number of runs (times)')</div>
                                    <div data-v-6df100a6="" data-v-cfc9a7fc="" class="val"> 1 </div>                                </div>
                            
                           
                        </div> -->
                        <!-- <div class="box">
        <div>
            <div class="text">Profit to be collected</div>
            <div class="amount">0</div>
        </div>
        <button class="button">Claim</button>
    </div> -->
    <div class="invest">
        <div>
            <span>Total Investment:</span>
            <span class="content">${{Auth::user()->node_investment()}}</span>
        </div>
        <div>
            <span>Total Earnings:</span>
            <span class="content">${{Auth::user()->node_income()}}</span>
        </div>
    </div>
@foreach($power_record as $precord)
    <div class="history">
        <div class="header">
            Node power income
            <span class="status">{{($precord->credit_type)?"Process":"Success"}}</span>
        </div>
        <div class="item">
            <span class="label">Running Subscription</span>
            <span class="value"><?php if($precord->amt==30){echo "Core Server";}elseif ($precord->amt==120) {echo "Core Prime";}elseif ($precord->amt==300) {echo "Core Plus";}elseif ($precord->amt==1200) {echo "Core Max";}elseif ($precord->amt==3600) {echo "Core Pro";}elseif ($precord->amt==6000) {echo "Core Hub";}elseif ($precord->amt==15000) {echo "Core Turbo";}else {echo "Member";}?></span>
        </div>
        <div class="item">
            <span class="label">Earning Currency</span>
            <span class="value">USD</span>
        </div>
        <div class="item">
            <span class="label">Remaining Days</span>
            <span class="value">60 Days</span>
        </div>
        <div class="item">
            <span class="label">Running Node Power total</span>
            <span class="value">{{$precord->amt}}</span>
        </div>
        <div class="item">
            <span class="label">Node Power Income</span>
            <span class="value">${{$precord->comm}}</span>
        </div>
        <div class="item">
            <span class="label">Running Date</span>
            <span class="value">{{$precord->created_at}}</span>
        </div>
    </div>
 @endforeach
                       
                    </div>
                    <div data-v-ac2db8a0="" data-v-6df100a6="" class="revenue" data-v-cfc9a7fc="">
                        <div data-v-ac2db8a0="" class="container">
                            <div data-v-ac2db8a0="" class="total-income">
                                <div data-v-ac2db8a0="" class="title_box">
                                   
                                    <!-- <div data-v-ac2db8a0="" class="choose_day">
                                        <i data-v-ac2db8a0=""
                                            class="arrow_down van-icon van-icon-arrow-down">
                                            </i>
                                    </div> -->
                                </div>

                                <style>
                                    .list .it .n[data-v-65a522d0], .list .it .str[data-v-65a522d0] {
                                                font-size: .28rem;
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
                                        font-size: .24rem;
                                        line-height: 1em;
                                    }
                                </style>
                                <div data-v-ac2db8a0=""  data-v-cfc9a7fc="" class="info list">
                                    <!---->
                                    
                                        
                                       
<!-- 
                                    <div data-v-65a522d0="" class="it">
                                        <div data-v-65a522d0="" class="jbox_07">
                                            <div data-v-65a522d0="" class="jt"></div>
                                            <div data-v-65a522d0="" class="jc c">
                                                <div data-v-65a522d0="" class="b">
                                                    <div data-v-65a522d0="" class="db">
                                                        <div data-v-65a522d0="" class="flexs">
                                                        <div class="container1">
   <div class="header">
    <img alt="Icon representing GPU 2 Core Computing Package" src="{{asset('')}}assets/static/img/vip1.png" style="
    margin-right: -120px;
"  />
    <div class="title">
     SeverCore Prime
    </div>
    <button class="status">
  Success
</button>
   </div>
   <div class="content">
    <div class="center">
   <div class="label1">
        Yield
     </div>
    <div class="highlight">
     1.77%
    </div>  
    </div>
    <div class="row">
     <div class="label">
      Run currency
     </div>
     <div class="label">
     Running time
     </div>
    </div>
    <div class="row">
     <div class="data">
      USDT
     </div>
     <div class="data">
      1.00 hour
     </div>
    </div>
    <div class="row">
     <div class="label">
      Running amount
     </div>
     <div class="label">
     Profit
      
     </div>
    </div>
    <div class="row">
     <div class="data">
     229.8365923
     </div>
     <div class="data">
      4.06810768
     </div>
    </div>
    <div class="row">
     <div class="label">
      Start time
     </div>
     <div class="label">
     End time
      
     </div>
    </div>
    <div class="row">
     <div class="data">
     2024-10-18 20:33:20
     </div>
     <div class="data">
      2024-10-18 20:33:20
     </div>
    </div>
   </div>
  </div>
                                                
                                                        
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-v-65a522d0="" class="jb"></div>
                                        </div>
                                    </div>

                                    
                                </div> -->

                               

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
            <script>
		window.onload = function() {

			// 格式
			
			new Rolldate({
				el: '#date-group1-2',
				format: 'YYYY-MM-DD',
				beginYear: 2023,
				endYear: 2024,
                lang: {
        title: 'Select Date',     // The title text, translate this if needed
        cancel: 'Cancel',         // Text for the cancel button
        confirm: 'Confirm',       // Text for the confirm button
        year: '',                 // Year label, e.g., '年' in Chinese
        month: '',                // Month label, e.g., '月' in Chinese
        day: ''                   // Day label, e.g., '日' in Chinese
    }
			})
		
            new Rolldate({
				el: '#date-group1-1',
				format: 'YYYY-MM-DD',
				beginYear: 2023,
				endYear: 2024,
                lang: {
        title: 'Select Date',     // The title text, translate this if needed
        cancel: 'Cancel',         // Text for the cancel button
        confirm: 'Confirm',       // Text for the confirm button
        year: '',                 // Year label, e.g., '年' in Chinese
        month: '',                // Month label, e.g., '月' in Chinese
        day: ''                   // Day label, e.g., '日' in Chinese
    }
			})
		
			
			
		
			
		
			
			
		}
	</script>

   @include('layouts.upnl.footer')     
        <!----><!---->

          
