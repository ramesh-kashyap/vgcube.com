<html lang="en" class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>@lang('Change password')</title>
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
        .item {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
        }

        .cname {
            margin-bottom: 5px;
        }

        .val {
            position: relative;
        }

        .input-container {
            display: flex;
            width: 100%;
        }

        input[type="password"] {
            width: 100%;
            padding-right: 70px;
            /* Adjust the padding to fit the button */
            box-sizing: border-box;
        }

        .verify-button {
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            border: none;
            background-color: #4CAF50;
            /* Adjust color as needed */
            color: white;
            padding: 0 15px;
            cursor: pointer;
        }
    </style>

    <style>
        .item {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
        }

        .cname {
            margin-bottom: 5px;
        }

        .input-container {
            display: flex;
            align-items: center;
            position: relative;
        }

        input[type="password"] {
            flex: 1;
            padding-right: 100px;
            /* Adjust the padding to fit the button */
        }

        .verify-button {
            position: absolute;
            right: 0;
            height: 100%;
            padding: 0 10px;
        }
    </style>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-aef56f2a.f587d975.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-aef56f2a.b3c068cc.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-2a0b1332.9f52f39a.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-2a0b1332.0436ba68.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-f8e2ce82.4965c1ba.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-f8e2ce82.8a913baf.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-21a2b91c.0ed7b871.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-21a2b91c.12695023.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-4d56d011.d2239d8d.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-4d56d011.55574f9a.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-273ce16e.debfb5de.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-273ce16e.6f3f099a.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-a46085d6.d2823003.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-a46085d6.6a4896cb.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-97c0768a.2ab4315e.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-97c0768a.b8196644.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-f31ad6d4.2882463c.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-f31ad6d4.836d485b.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-0830ec22.59462d6e.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-0830ec22.94ec9a30.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-73ab94aa.2e0ec155.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-73ab94aa.70e0e268.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-65aadf8b.a4cef8a6.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-65aadf8b.59fb6a2e.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-67098c77.8b942857.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-67098c77.b8c94109.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-529a9802.d4a866bb.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-529a9802.18a0309a.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-2a326f81.d6e1e630.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-2a326f81.29676938.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-04a90ad1.aa2f317d.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-04a90ad1.28c21b1a.1717187934571.chunk.js">
    </script>
</head>

<body class="main_en">
    <div id="app" class="applang">
        <div data-v-cfc9a7fc="" data-v-9d2ee7be="" class="page">
            <div data-v-cfc9a7fc="" class="headers">
                <div data-v-397da544="" data-v-9d2ee7be="" class="head" data-v-cfc9a7fc="">
                    <div data-v-397da544="" class="container flex">
                        <div data-v-397da544="" class="back"><a href="{{ route('user.profile') }}"
                                style="color:#fff;"><i data-v-397da544="" class="van-icon van-icon-arrow-left">
                                    <!----></i></a></div>
                        <!---->
                        <div data-v-397da544="" class="name tac">@lang('Change password') </div>
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
                    <div data-v-9d2ee7be="" data-v-cfc9a7fc="" class="container">
                        <!-- <div data-v-9d2ee7be="" data-v-cfc9a7fc="" class="item">
                            <div data-v-9d2ee7be="" data-v-cfc9a7fc="" class="cname">Email</div>
                            <div data-v-9d2ee7be="" data-v-cfc9a7fc="" class="val"><input data-v-9d2ee7be=""
                                    data-v-cfc9a7fc="" type="text" placeholder="Email" ></div>
                        </div> -->
                        <!-- <div data-v-9d2ee7be="" data-v-cfc9a7fc="" class="item">
                            <div data-v-9d2ee7be="" data-v-cfc9a7fc="" class="cname">Verification code</div>
                            <div data-v-9d2ee7be="" data-v-cfc9a7fc="" class="val flex"><input data-v-9d2ee7be=""
                                    data-v-cfc9a7fc="" type="text" placeholder="Please enter the verification code"
                                    class="flex1">
                                <div data-v-9d2ee7be="" data-v-cfc9a7fc="" class="str"> Send </div>
                                <div data-v-9d2ee7be="" data-v-cfc9a7fc="" class="str" style="display: none;">
                                    <div data-v-9d2ee7be="" class="van-count-down" data-v-cfc9a7fc=""><span
                                            data-v-9d2ee7be="" class="c-fff">0 <var data-v-9d2ee7be="">s</var></span>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <form method="post" action="{{ route('user.edit-password') }}">
                            {{ csrf_field() }}
                            <div data-v-9d2ee7be="" data-v-cfc9a7fc="" class="item">
                                <div data-v-9d2ee7be="" data-v-cfc9a7fc="" class="cname">@lang('Email')</div>
                                <div data-v-9d2ee7be="" data-v-cfc9a7fc="" class="val"><input data-v-9d2ee7be=""
                                        data-v-cfc9a7fc="" type="" placeholder="Please enter the new password"
                                        value="{{ Auth::user()->email }}" id="emailId" name="emailId"></div>
                            </div>
                            <div data-v-9d2ee7be="" data-v-cfc9a7fc="" class="item">
                                <div data-v-9d2ee7be="" data-v-cfc9a7fc="" class="cname">@lang('Verification Code')</div>
                                <div data-v-9d2ee7be="" data-v-cfc9a7fc="" class="val">
                                    <div class="input-container">
                                        <input data-v-9d2ee7be="" data-v-cfc9a7fc="" type="text" style="width: 81%;" name="code"
                                            id="code" placeholder="Enter verification code" maxlength="">
                                      
                                            <span class="code-btn">@lang('Get Code')</span>
                                    </div>
                                </div>
                            </div>

                            <div data-v-9d2ee7be="" data-v-cfc9a7fc="" class="item">
                                <div data-v-9d2ee7be="" data-v-cfc9a7fc="" class="cname">@lang('New password')</div>
                                <div data-v-9d2ee7be="" data-v-cfc9a7fc="" class="val"><input data-v-9d2ee7be=""
                                        data-v-cfc9a7fc="" type="password"
                                        placeholder="Please enter the new password" name="password"></div>
                            </div>
                            <div data-v-9d2ee7be="" data-v-cfc9a7fc="" class="item">
                                <div data-v-9d2ee7be="" data-v-cfc9a7fc="" class="cname">@lang('Confirm password')</div>
                                <div data-v-9d2ee7be="" data-v-cfc9a7fc="" class="val inp"><input data-v-9d2ee7be=""
                                        data-v-cfc9a7fc="" type="password"
                                        placeholder="Enter the password again to confirm"
                                        name="password_confirmation"></div>
                            </div>
                            <div data-v-9d2ee7be="" data-v-cfc9a7fc="" class="err" style="color:red;">
                            </div>
                    </div>
                </div>
            </div>
            <div data-v-cfc9a7fc="" class="footer">
                <div data-v-9d2ee7be="" data-v-cfc9a7fc="" class="container">
                    <div data-v-9d2ee7be="" data-v-cfc9a7fc="" class="go"><button data-v-9d2ee7be=""
                            type="submit" data-v-cfc9a7fc="" class="btn2">@lang('Confirm')</button></div>
                </div>
            </div>
        </div>
        </form>
        <div data-v-a7d12cfc="" class="global-loading default" style="display: none;">
            <div data-v-a7d12cfc="" class="global-spinner"><img data-v-a7d12cfc=""
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAArCAMAAAA0X5qLAAAAh1BMVEUAAAAAv44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av46sPT54AAAALHRSTlMA+wXZ+J87JB7ux4lDNRQPCvLq39PNp5BpWRmxgnAvvrnlw5RhT0sqwHRxeP/zXbkAAAGcSURBVDjLjZTXcqtAEAVnyUGIJBAKKFqS7dv//30XsHFJxrD0C0XRxc45TCEDvFsdrvfhxnGWMk1S7c70nI+bZFxdXFC8YG5GVNemxTdte7+3yxUdq4MMMaocsMza6CeSqLRo2A3dffvguPh1WEiDcuWFeN24mSNDdjS85Exs4OLJX7wpyOWJT8A25G+iFMyn2za1jOIAV+kxIU9knDUQ9d8C/EimyH9OXgawNiblrepfXSn8WKax+4wnCEWDC6ptNk5RC9GxgqqNZ1EstXL1tSP/oBQtS1DN5Qp7vbz1sdwu30b0pNAkPIOrd4131E2kAEf0rDqtaJvTY3YDvM+aOS5IH91KrWdUl2LGIhsI9PIDLm2DFmmslT++FyiDu7a5ANV1FoKpkw/gfwUFddDIO7Cl4wqBMf1iRRZJxxb86d5OYCf9fyS/TaYrFcqVeYQK6nmqEQLFPNc7AuZ2lrtYAcEs936kdZdjE97rSAxDEvG8j8wC/E8Zo1Yo/CAv0oyOYKKzN55QWTm9B9WpyGiwyMvFnLbih+M5xjDWf6S2MlzIf04ZAAAAAElFTkSuQmCC"
                    alt=""></div>
        </div>
        <div data-v-e73e51fc="" class="start-page" style="display: none;"><img data-v-e73e51fc=""
                src="{{ asset('') }}assets/static/img/start.0aabcda5.gif"></div>
    </div>

    <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
    @include('partials.notify')

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
    </script>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/echarts@4.6.0/dist/echarts.js"></script>
    <script src="{{ asset('') }}assets/static/js/chunk-vue.2deea45a.1717187934571.chunk.js"></script>
    <script src="{{ asset('') }}assets/static/js/chunk-echarts.eba990db.1717187934571.chunk.js"></script>
    <script src="{{ asset('') }}assets/static/js/chunk-vant.9e1db231.1717187934571.chunk.js"></script>
    <script src="{{ asset('') }}assets/static/js/chunk-vendors.24e8c7cc.1717187934571.chunk.js"></script>
    <script src="{{ asset('') }}assets/static/js/app.83a7756d.1717187934571.js"></script>
    <div class="van-toast van-toast--middle van-toast--success" style="z-index: 2004; display: none;"><i
            class="van-icon van-icon-success van-toast__icon">
            <!----></i>
        <div class="van-toast__text">@lang('Login successful')</div>
    </div>
</body>

</html>
