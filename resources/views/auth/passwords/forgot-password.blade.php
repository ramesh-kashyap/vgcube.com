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
    <meta itemprop="image" content="{{asset('assets/static/image/fav.png')}}">

    <meta property="og:type" content="website">
    <meta property="og:title"
        content="{{siteName()}}">
    <meta property="og:description"
        content="Welcome to {{siteName()}} - Your Path to Smart Crypto Investments!">
    <meta property="og:image" content="{{asset('assets/static/image/fav.png')}}" />
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script>
    <style>
        .doc[data-v-607a0cfb] {
    color: #a6a0bb;
    padding: 0 .2rem 0rem .2rem;
}
    </style>
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
.van-checkbox__icon--checked {
    border-color: rgb(113, 219, 129);
    background-color: rgb(113, 219, 129);
}
.van-checkbox__icon--unchecked {
    border-color: #ddd; /* Set an alternative color for the unchecked state */
    background-color: transparent;
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
            <form action="{{route('forgot_submit')}}" method="POST" name="login_frm" id="form-id" style="overflow: scroll;">
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
                            <div data-v-a34da882="" data-v-cfc9a7fc="" class="s">@lang('Forgot password')</div>
                        </div>
                            <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="item" style="
                                    margin-top: 8px;
                                ">
                             
                               
                                <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="it">
                                   
                                    <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="flex inp">
                                        <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="flex1"><input
                                                data-v-607a0cfb="" data-v-cfc9a7fc="" name="email" id="emailId"
                                                type="text" placeholder="Email"></div>
                                    </div>
                                </div>
                                <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="it">
                                    <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="flex inp">
                                        <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="flex1"><input
                                                data-v-607a0cfb="" data-v-cfc9a7fc="" name="code" id="code"
                                                type="text" placeholder="Please enter the verification code"></div>
                                        <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="code-btn verify-button">
                                           @lang('Get Code')</div>
                                        <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="str"
                                            style="display: none;">
                                            <div data-v-607a0cfb="" class="van-count-down" data-v-cfc9a7fc=""><span
                                                    data-v-607a0cfb="">0 <var data-v-607a0cfb="">s</var></span></div>
                                        </div>
                                    </div>
                                </div>
                            

                                
                                <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="it">
                                    
                                    <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="flex inp">
                                        <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="flex1"><input id="passwordInput"
                                                data-v-607a0cfb="" data-v-cfc9a7fc="" name="password"
                                                placeholder="Password" type="password"></div>
                                        <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="yj"><i  onclick="togglePasswordVisibility()" class="fa fa-eye-slash check" style="    font-size: 20px;
                                            margin-top: -10px;"></i>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="doc">
                                </div>
                                <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="it">
                         
                                    <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="inp flex">
                                        <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="flex1"><input
                                                data-v-607a0cfb="" data-v-cfc9a7fc="" name="password_confirmation" id="passwordInput2"
                                                placeholder="Confirm password" type="password"></div>
                                        <div data-v-607a0cfb="" data-v-cfc9a7fc="" class="yj"><i onclick="togglePasswordVisibility()" class="fa fa-eye-slash check" style="    font-size: 20px;
                                            margin-top: -10px;"></i>
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
                                            style="color:#55b2c2 ; ">@lang('Service Agreement')</a></span></>
                                    </div>
                                </div><button data-v-607a0cfb="" data-v-cfc9a7fc="" type="submit" class="btn2">
                                   @lang('Submit') </button>
                                   
                                

                                            <p data-v-607a0cfb="" data-v-cfc9a7fc="" class="set" > @lang('Already have an account') <span
                                        data-v-607a0cfb="" data-v-cfc9a7fc=""><a href="{{ route('login') }}"
                                            style="color:#55b2c2 ;">@lang('Log in now')</a></span></p>
                                <!---->
            </form>
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
    var ths = $(this);
    var emailId = $('#emailId').val();

  
    // alert(sponsor); 
    $.ajax({
        type: "POST"
        , url: "{{ route('send_forgot') }}"
        , data: {
            "emailId":emailId,
             "_token": "{{ csrf_token() }}"
        , }
        , success: function(response) {
            // alert(response);      
            if (response) {
                // alert("hh");
                iziToast.success({
                message: 'Email send Successfully',
                position: "topRight"
            });
            } else {
                // alert("hi");
                iziToast.error({
                message: 'Invalid Email',
                position: "topRight"
            });
            }
        }
    });
});
    </script>


    <script>
        var input = document.querySelector('#phone');
        var info = document.querySelector('#info');
        var status = document.getElementById('status');
        var iti = window.intlTelInput(input, {
            initialCountry: "us",
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" // Load the utilities script
        });

        input.addEventListener('blur', function() {
            if (iti.isValidNumber()) {
                status.textContent = 'Valid number';
                status.className = 'valid-number';
            } else {
                status.textContent = 'Invalid number';
                status.className = 'invalid-number';
            }
        });

        input.addEventListener('countrychange', function() {
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
