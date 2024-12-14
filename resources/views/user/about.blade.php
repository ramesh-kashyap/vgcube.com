<html lang="en" class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>Platform Introduction</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-f8870696.ba836efa.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-f8870696.d3c72f4a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-65aadf8b.a4cef8a6.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-65aadf8b.59fb6a2e.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-43a21247.c7b442a8.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-43a21247.bd486532.1717187934571.chunk.js"></script>
</head>

<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-cfc9a7fc="" data-v-1d560bae="" class="page">
            <div data-v-cfc9a7fc="" class="headers">
                <div data-v-397da544="" data-v-1d560bae="" class="head" data-v-cfc9a7fc="">
                    <div data-v-397da544="" class="container flex">
                        <div data-v-397da544="" class="back"><a href="{{route('user.dashboard')}}" style="color:#fff;"><i data-v-397da544="" class="van-icon van-icon-arrow-left">
                                <!----></i></a></div>
                        <!---->
                        <div data-v-397da544="" class="name tac"> @lang('About us') </div>
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
                    <div data-v-1d560bae="" data-v-cfc9a7fc="" class="about">
                        <div data-v-1d560bae="" data-v-cfc9a7fc="" class="box">
                            <div data-v-1d560bae="" data-v-cfc9a7fc="" class="img-con">
                              

                                <p> </p>

                                <p style="text-align:center"><span style="color:#ffffff"><strong><span
                                                style="font-size:11pt"><span
                                                    style="font-family:Arial,sans -serif">@lang('VG CUBE is a pioneering decentralized AI platform, transforming traditional data centers through a blend of artificial intelligence and distributed computing. Here’s a closer look at what makes VG CUBE a unique and powerful player in the AI and data management sector:') </span></span></strong></span></p>

                                <p> </p>

                                <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif">@lang('Key Features of VG CUBE'). </span></span></span></p>

                                <p> </p>

                                <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif">@lang('1. Decentralized AI-Powered Infrastructure')
                                            </span></span></span></p>

                                <p> </p>

                                <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif">@lang('- Decentralized Network: VG CUBE uses a distributed computing model, tapping into global resources to enhance AI processing, model training, and data management. This decentralized approach reduces reliance on centralized infrastructure, providing better stability, security, and cost-efficiency.')
                                            </span></span></span></p>

                                            <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif">@lang('- AI Integration: The platform is built on advanced AI algorithms that optimize resource allocation, enhance processing speeds, and improve scalability. AI powers everything from task distribution to user interactions, delivering a seamless experience.')
                                            </span></span></span></p>



                                            <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif">@lang('2. Innovative Earning Model')
                                            </span></span></span></p>


                                <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif">@lang('- Daily Earnings: Users earn daily rewards by participating in AI tasks like data processing, model training, or completing other assigned tasks. This makes AI-powered income generation accessible to everyone, not just large enterprises.')
                                            </span></span></span></p>

                                            <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif">@lang('- Task-Based Rewards: VG CUBE offers various subscription packages like ServerCore, ServerCore Prime, and more, each with specific tasks that users must complete to earn rewards. The tasks typically involve 1-hour operations, creating a simple, effective way to earn daily income.')
                                            </span></span></span></p>

                                            <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif">@lang('- Node Power Activation:To ensure consistent earning, users must activate their computing power package daily. This activation ensures that resources are fully utilized while distributing computing loads efficiently.')
                                            </span></span></span></p>

                                            <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif">@lang('3. Security and Compliance')
                                            </span></span></span></p>


                                <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif">@lang('- Secure Platform: Security is a top priority, with advanced encryption protocols, regular security audits, and adherence to global standards. VG CUBE ensures that user data, transactions, and AI operations are protected.')
                                            </span></span></span></p>

                                            <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif">@lang('- Regulatory Compliance: The platform holds industry certifications and complies with international regulations, providing a secure and transparent environment for AI computing and earning.')
                                            </span></span></span></p>

                                            <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif">@lang('4. Scalable and Flexible')
                                            </span></span></span></p>


                                            <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif">@lang('- Scalable Architecture: VG CUBE’s infrastructure is designed to handle increased demand effortlessly. Whether you are an individual user or a large enterprise, the platform scales dynamically to meet your requirements.')
                                            </span></span></span></p>

                                            <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif">@lang('- Flexibility: Users can start with minimal investments and scale up as needed. VG CUBE offers a range of subscription packages, from entry-level to high-tier, catering to various earning potentials and AI engagement levels.')
                                            </span></span></span></p>


                                            <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif">@lang('5. Advanced Traffic Distribution')
                                            </span></span></span></p>


                                            <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif">@lang('- VG CUBE distributes computational loads across its decentralized network, efficiently managing AI tasks. This model ensures optimal performance, reduced latency, and smooth operations even during peak loads.')
                                            </span></span></span></p>

                                            <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif">@lang('- It also reduces the risk of network congestion, ensuring AI models and data centers operate at their best capacity.')
                                            </span></span></span></p>

                                            <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif">@lang('How VG CUBE Works')
                                            </span></span></span></p>


                                            <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif">@lang('1. Choose a Subscription Package: Select from various subscription options like ServerCore, ServerCore Prime, etc., each with distinct earning potential and AI tasks.')
                                            </span></span></span></p>

                                            <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif">@lang('2. Complete Daily Tasks:Activate and complete AI tasks for 1 hour daily. These tasks can range from data runs to node processing, depending on your subscription level.')
                                            </span></span></span></p>

                                            <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif">@lang('3. Earn Rewards: Earnings are distributed directly to your VG CUBE wallet. Consistent engagement ensures daily rewards and increased earnings over time.')
                                            </span></span></span></p>

                                            <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif">@lang('4. Staking and Referral Bonuses:Users can also earn additional rewards through staking VG CUBE tokens or referring new members to the platform.')
                                            </span></span></span></p>

                                            <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif">@lang('Mission & Vision')
                                            </span></span></span></p>


                                            <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif">@lang('- Mission: To democratize AI-powered income, enabling users to benefit from decentralized computing resources while contributing to AI innovation.')
                                            </span></span></span></p>

                                            <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif">@lang('- *Vision:* To become the global leader in decentralized AI platforms, driving a new era of data management, scalability, and earning opportunities.')
                                            </span></span></span></p>



                                <p> </p>
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
                src="{{asset('')}}assets/static/img/start.0aabcda5.gif"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/echarts@4.6.0/dist/echarts.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-vue.2deea45a.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-echarts.eba990db.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-vant.9e1db231.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-vendors.24e8c7cc.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/app.83a7756d.1717187934571.js"></script>
</body>

</html>
