<html lang="en" style="font-size: 50px;" class="pc">

<head>
    <meta charset="utf-8">
    <title>@lang('Withdrawal')</title>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-494d233b.50573298.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-494d233b.77bc554e.1717187934571.chunk.js">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body class="main_en">
    <div id="app" class="applang">
        <div data-v-cfc9a7fc="" data-v-7bab1ac4="" class="page">
            <div data-v-cfc9a7fc="" class="headers">
                <div data-v-397da544="" data-v-7bab1ac4="" class="head" data-v-cfc9a7fc="">
                    <div data-v-397da544="" class="container flex">
                        <div data-v-397da544="" class="back"><a href="{{ route('user.dashboard') }}"
                                style="color:#fff;"><i data-v-397da544="" class="van-icon van-icon-arrow-left">
                                    <!----></i></a></div>
                        <!---->
                        <div data-v-397da544="" class="name tac">@lang('Withdraw') </div>
                        <form action="{{ route('user.Withdraw-Request') }}" method="POST">
                            {{ csrf_field() }}

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
                    <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="container">
                        <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="item">
                            <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="cname">@lang('Currency')</div>
                            <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="val flex">
                                
                             <select id="paymentMode" name="paymentMode" style="width:100%;color:#fff">
                                            <option value="USDT_TRX">USDT (TRC20)</option>
                                            <option value="USDT_BSC">USDT (BEP20)</option>
                                            <option value="LTC">Litecoin</option>
                                            <option value="DOGE">Dogecoin</option>
                                            <option value="BCH">Bitcoin Cash</option>
                                            <option value="ETC">Ethereum Classic</option>
                                        </select>
                            </div>
                        </div>


                        <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="item">
                            <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="cname">@lang('Withdraw address')</div>
                            <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="val flex"
                                style="margin-bottom: 13px;>
                                <div data-v-7bab1ac4=""
                                data-v-cfc9a7fc="" class="flex1">
                                <input data-v-cfc9a7fc="" data-v-7bab1ac4="" type="text"
                                    value="{{ Auth::user()->usdtTrc20 }}"
                                    placeholder="Please enter the Withdraw address" name="walletAddress"
                                    id="walletAddress">
                            </div>
                        </div>
                        <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="item">
                            <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="cname">@lang('Withdraw amount')</div>
                            <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="val flex">
                                <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="flex1">
                                    <input data-v-7bab1ac4="" data-v-cfc9a7fc="" type="text"
                                        placeholder="Please enter the Withdraw amount" name="amount"
                                        id="withdrawalAmount">
                                </div>
                                <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="str"></div>
                            </div>
                        </div>
                        <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="item">
                            <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="cname">@lang('Transaction Password')</div>
                            <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="val flex">
                                <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="flex1"><input data-v-7bab1ac4=""
                                        data-v-cfc9a7fc="" type="password"
                                        placeholder="Please enter the transaction password"
                                        name="transaction_password" id="passwordInput"></div>
                                        <i id="check" onclick="togglePasswordVisibility()" class="fa fa-eye-slash" style="    font-size: 20px;"></i>
                                <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="str"> </div>
                            </div>
                        </div>
                        <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="item">
                            <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="tips">
                                <ul data-v-7bab1ac4="" data-v-cfc9a7fc="">
                                    <li data-v-7bab1ac4="" data-v-cfc9a7fc="" class="wrap bet">
                                        <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="n">@lang('Available Balance')
                                        </div>
                                        <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="s blue"><span
                                                data-v-7bab1ac4="" data-v-cfc9a7fc="" >{{ number_format(Auth::user()->available_balance(), 2) }}
                                                USDT</span></div>
                                    </li>
                                    
                                    <li data-v-7bab1ac4="" data-v-cfc9a7fc="" class="wrap bet">
                                        <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="n">@lang('Arrived quantity')
                                        </div>
                                        <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="s blue"><span
                                                data-v-7bab1ac4="" data-v-cfc9a7fc="" id="arrivedQuantity">0
                                                USDT</span></div>
                                    </li> 
                                    
                                    
                                    <li data-v-7bab1ac4="" data-v-cfc9a7fc="" class="wrap bet">
                                        <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="n">@lang('Withdraw fee') <span id="withdrawalFees"></span> 
                                        </div>
                                        <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="s"><span
                                                data-v-7bab1ac4="" data-v-cfc9a7fc="" id="withdrawalFee">0
                                                USDT</span></div>
                                    </li>

                                    <li data-v-7bab1ac4="" data-v-cfc9a7fc="" class="wrap bet">
                                        <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="n">@lang('Minimum Withdraw amount')</div>
                                        <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="s">10 USDT</div>
                                    </li>
                                    <li data-v-7bab1ac4="" data-v-cfc9a7fc="" class="wrap bet">
                                        <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="n">@lang('Maximum Withdraw amount')</div>
                                        <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="s"><span
                                                data-v-7bab1ac4="" data-v-cfc9a7fc="">No Limit</span></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="item"><button data-v-7bab1ac4=""
                                data-v-cfc9a7fc="" class="btn2" type="submit"> @lang('Confirm') </button></div>
                        </form>
                        <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="item">
                            <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="tipss">
                                <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="n">@lang('Note')</div>
                                <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="p">
                                    <p><span style="color:#ffffff">1. @lang('Minimum Withdrawal: $10')
                                        </span></p>

                                    <p><span style="color:#ffffff">2. @lang('Withdrawal Fee (for $10 to $50): 8% + $1') </span></p>

                                    <p><span style="color:#ffffff">3. @lang('Withdrawal Fee (for $50 to $500):  5% + $1')&nbsp;</span></p>

                                    <p><span style="color:#ffffff">4. @lang('Fee for Withdrawals Above $500: $1 flat fee, no percentage fee') </span></p>

                                    <p><span style="color:#ffffff">5. @lang('Withdrawal Address:  Enter or paste the address directly, or select from saved addresses') </span></p>

                                    <p><span style="color:#ffffff">6. @lang('Processing Time: Withdrawals are credited within 72 to 96 hours..')</span></p>

                                </div>
                            
                            </div>
                        </div>
                    </div>
                    <div data-v-4c14e1cc="" data-v-7bab1ac4="" data-v-cfc9a7fc="">
                        <!---->
                    </div>
                    <div data-v-2ca52d3c="" data-v-7bab1ac4="" data-v-cfc9a7fc="">
                        <!---->
                    </div>
                    <!---->
                    <div data-v-4c14e1cc="" data-v-7bab1ac4="" data-v-cfc9a7fc="">
                        <div class="van-overlay" style="z-index: 2001; display: none;"></div>
                        <div data-v-4c14e1cc="" class="van-popup van-popup--round van-popup--bottom"
                            style="background: none; z-index: 2002; display: none;">
                            <div data-v-4c14e1cc="" class="popup_box">
                                <div data-v-4c14e1cc="" class="scroll">
                                    <div data-v-4c14e1cc="" class="ul">
                                        <div data-v-4c14e1cc="">
                                            <div data-v-4c14e1cc="" class="item active"> TRC20 </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-4c14e1cc="" class="esc">@lang('Cancel')</div>
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
    <script src="{{ asset('') }}assets/static/js/chunk-vue.2deea45a.1717187934571.chunk.js"></script>
    <script src="{{ asset('') }}assets/static/js/chunk-echarts.eba990db.1717187934571.chunk.js"></script>
    <script src="{{ asset('') }}assets/static/js/chunk-vant.9e1db231.1717187934571.chunk.js"></script>
    <script src="{{ asset('') }}assets/static/js/chunk-vendors.24e8c7cc.1717187934571.chunk.js"></script>
    <script src="{{ asset('') }}assets/static/js/app.83a7756d.1717187934571.js"></script>
    <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#withdrawalAmount').on('input', function() {
                let amount = parseFloat($(this).val());
                if (isNaN(amount)) {
                    amount = 0;
                }
                let withdrawalFees = 0;
                if(amount>=10 && amount<50)
                {
                  withdrawalFees = 8;
                }
                 if(amount>=50 && amount<500)
                {
                  withdrawalFees = 5;
                }
                
                let withdrawalFee = (amount * withdrawalFees / 100)+1;
                let arrivedQuantity = (amount - withdrawalFee);

                if (arrivedQuantity < 0) {
                    arrivedQuantity = 0;
                }

                $('#withdrawalFees').text(withdrawalFees+ '%');
                $('#arrivedQuantity').text(arrivedQuantity.toFixed(2) + ' USDT');
                $('#withdrawalFee').text(withdrawalFee.toFixed(2) + ' USDT');
            });
        });
    </script>
    <script>
        $(function() {
            $('input[name="amount"]').on('change keyup', function() {
                let str = $(this).val();
                str = str.replace(',', '.');
                $(this).val(str);
                let min = $('#min_withdrawal').val();
                let max = $('#max_withdrawal').val();

                let charge = $('#chargeAmt').val();

                let amount = parseFloat(str);




                if (amount >= min && amount <= max) {

                    $(".submit-btn").prop("disabled", false);
                    $('.submit-btn').removeClass(
                        'van-button van-button--default van-button--disabled van-button--normal com-btn on'
                    );
                    $('.submit-btn').addClass(
                        'van-button van-button--default  van-button--normal com-btn on');
                } else {

                    $(".submit-btn").prop("disabled", true);
                    $('.submit-btn').removeClass(
                        'van-button van-button--default van-button--normal com-btn on');
                    $('.submit-btn').addClass(
                        'van-button van-button--default van-button--disabled van-button--normal com-btn on'
                    );
                }

                if (amount <= 10) {
                    $('#ActualAmount').html(amount - amount * 50 / 100 + " USDT");
                    $('#chargefee').html("5 USDT");
                } else {
                    $('#ActualAmount').html(amount - amount * charge / 100 + " USDT");
                    $('#chargefee').html(charge + " %");
                }



                //console.log(summ_usd);
            });



            $('.code-btn').click(function(e) {
                var ths = $(this);
                var emailId = $('#emailId').val();

                if (!emailId) {
                    iziToast.error({
                        message: 'Invalid Email!',
                        position: "topRight"
                    });
                    return false;
                }
                // alert(sponsor); 
                $.ajax({
                    type: "POST",
                    url: "{{ route('user.send_code') }}",
                    data: {
                        "emailId": emailId,
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(response) {
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
                                message: 'Error!',
                                position: "topRight"
                            });
                        }
                    }
                });
            });


        })
    </script>
    <script>
            $('#paymentMode').on('change', function() {
            let icon = this.value;
            
            // alert(icon);
            if (icon == "USDT_TRX") {
                $('#walletAddress').val('{{ Auth::user()->usdtTrc20 }}');
            } else if(icon == "USDT_BSC") {
                $('#walletAddress').val('{{ Auth::user()->usdtBep20 }}');
            }
            else if(icon == "LTC") {
                $('#walletAddress').val('{{ Auth::user()->LTC }}');
            }
            else if(icon == "DOGE") {
                $('#walletAddress').val('{{ Auth::user()->DOGE }}');
            } else if(icon == "BCH") {
                $('#walletAddress').val('{{ Auth::user()->BCH }}');
            }
            else if(icon == "ETC") {
                $('#walletAddress').val('{{ Auth::user()->ETC }}');
            }
        });
    </script>
        <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        $(document).ready(function() {
    
    $('#check').click(function(){
         
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
      if (passwordInput.type === 'password') {
          passwordInput.type = 'text';
      } else {
          passwordInput.type = 'password';
      }
  }
  
  
  
  </script>
</body>
@include('partials.notify')

</html>
