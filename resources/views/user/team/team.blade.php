<div
                        class="flex-1 overflow-y-auto px-4 md:px-10 lg:px-10 xl:px-20 pt-5 pb-[88px] md:pb-[20px] bg-[#F1F1F1]">
                        <div class="w-full mt-10 flex justify-center text-primary">
                            <div class="w-full max-w-[1440px] rounded-lg">
                            <div class="max-w-[1920px] w-full grid grid-cols-1 md:grid-cols-3 gap-6">
                                    <div class="bg-white p-5 rounded-[16px] flex flex-col items-left">
                                        <div class="flex mb-[14px]">
                                            <div class="bg-green-100 rounded-full p-2"><img alt="Total Rewards Icon"
                                                    loading="lazy" width="32" height="32" decoding="async" data-nimg="1"
                                                    src="{{ asset('') }}upnl/assets/icons/stats_reward.svg" style="color: transparent;"></div>
                                        </div>
                                        <div>
                                            <h3 class="font-medium mb-1">Total Members</h3>
                                            <div class="flex items-baseline">
                                                <p class="text-[32px] font-semibold mr-2"
                                                    style="font-family: ClashDisplay-Semibold;"><span>{{$totalTeam}}</span></p>
                                                <p class="text-secondary">Members</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-white p-5 rounded-[16px] max-h-[226px] h-full flex flex-col">
                                        <div class="flex items-center justify-between w-full mb-[14px]">
                                            <div class="bg-blue-100 rounded-full p-2"><img alt="Today's Rewards Icon"
                                                    loading="lazy" width="32" height="32" decoding="async" data-nimg="1"
                                                    src="{{ asset('') }}upnl/assets/icons/icon_total_rewards.svg" style="color: transparent;">
                                            </div>
                                            <!-- <button disabled=""
                                                class="bg-[#171717] rounded-[30px] px-[20px] py-2 text-white"
                                                style="opacity: 0.5;">Claim</button> -->
                                        </div>
                                        <div>
                                            <h3 class="font-medium mb-1">Total Valid</h3>
                                            <div class="flex items-baseline">
                                                <p class="text-[32px] font-semibold mr-2"
                                                    style="font-family: ClashDisplay-Semibold;"><span>{{$ActivetotalTeam}}</span></p>
                                                <p class="text-secondary">Members</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-white p-5 h-full rounded-[16px] flex flex-col justify-between">
                                        <div>
                                            <div class="flex justify-between items-center mb-[14px]">
                                                <h3 class="text-[20px] font-medium text-primary">Referrals</h3><button
                                                    class="text-sm flex items-center h-[32px] px-4 py-1 rounded-[22px] bg-[#F1F1F1]"><img
                                                        alt="Filter Icon" loading="lazy" width="20" height="20"
                                                        decoding="async" data-nimg="1" src="{{ asset('') }}upnl/assets/icons/users.svg"
                                                        style="color: transparent;">
                                                    <p class="pl-3 font-semibold text-[16px]">0</p>
                                                </button>
                                            </div>
                                        </div><button
                                            class="flex rounded-[24px] justify-center items-center align-center border border-[#F1F1F1] text-[#373737] bg-[#F9F9F9] h-[36px] py-2 px-3"
                                            style="font-family: ClashDisplay-Semibold;">
                                            <p class="mr-3" id="textToCopy">{{ asset('') }}register?ref={{ Auth::user()->username }}</p><img alt="Filter Icon" loading="lazy" width="16" id="copyIcon"
                                                onclick="copyToClipboard()"
                                                height="16" decoding="async" data-nimg="1"
                                                src="{{ asset('') }}upnl/assets/icons/copy_clipboard.svg" style="color: transparent;">
                                        </button><button class="mt-1 text-[#00C076] font-medium">Copy referral link</button>
                                    </div>
                                </div>

                                <div class="flex justify-between mb-4 items-center">
                                    <!-- <div class="relative"><button class="px-3 h-[34px] bg-white rounded-full shadow"
                                            fdprocessedid="pwt0f"><img alt="Filter Icon" loading="lazy" width="16"
                                                height="16" decoding="async" data-nimg="1"
                                                src="{{ asset('') }}upnl/assets/icons/bars-filter.svg"
                                                style="color: transparent;"></button></div> -->
                                </div>
                                <div class="bg-white mb-3 p-4 rounded-[16px] font-semibold text-gray-600 text-center">
                                    <div class="hidden md:grid grid-cols-5 lg:grid-cols-5">
                                        <div class="text-left">Genration Data</div>
                                        <div class="hidden lg:inline-block">Numbers Users</div>
                                        <div>Cumlative Income</div>
                                        <div>Cumlative Withdrawl</div>
                                        <div>Cumlative Yield</div>
                                        
                                    </div>
                                    <div class="grid grid-cols-2 sm:grid-cols-3 md:hidden">
                                        <div class="text-left">Team Genration</div>
                                        <div class="text-right">Total Members</div>
                                        <div class="text-right hidden sm:block">Today Rewards</div>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                <a href="{{route('user.list')}}?selected_level=1" >
                                    <div
                                        class="bg-white p-3 rounded-[16px] shadow transition-transform hover:shadow-md cursor-pointer">
                                        <div class="hidden md:grid grid-cols-4 lg:grid-cols-5 items-center">
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white text-sm font-semibold">
                                                    <i class="fas fa-arrow-right"></i></div>
                                                <div>
                                                    <p class="text-sm font-medium">First generation data</p>
                                                    
                                                </div>
                                            </div>
                                            <p class="hidden lg:block text-sm text-center font-medium">{{$active_gen_team1total}}/{{$gen_team1total}}</p>
                                            <div class="flex justify-center"><span
                                                    class="flex px-[6px] py-1 rounded-full text-xs bg-[#C4FFC8]">{{number_format($gen_team1Recharge,1)}}</span></div>
                                            <div class="flex justify-center">
                                                <p class="text-sm w-fit text-center px-3">{{number_format($gen_team1Withdraw,2)}}</p>
                                            </div>
                                            <div class="flex justify-center">
                                                <p class="text-sm w-fit text-center px-3 bg-[#F1F1F1] rounded-full">{{number_format($gen_team1Earning,2)}}</p>
                                            </div>
                                           
                                        </div>
                                        
                                        
                                        <div class="grid grid-cols-2 sm:grid-cols-3 md:hidden items-center">
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white text-sm font-semibold">
                                                    <i class="fas fa-arrow-right"></i></div>
                                                <div>
                                                    <p class="text-sm font-medium">@lang('First generation data')</p>
                                                    
                                                </div>
                                            </div>
                                            <div class="flex justify-end"><span
                                                    class="flex px-[6px] py-1 rounded-full text-xs  bg-[#C4FFC8]">{{$active_gen_team1total}}/{{$gen_team1total}}</span></div>
                                            <!-- <div class="text-right hidden sm:block">
                                                <p class="text-lg font-semibold"><span>0pt</span></p>
                                                <p class="text-xs">Total: <span>0pt</span></p>
                                            </div> -->
                                        </div>
                                    </div>
                                    </a>
                                    <a href="{{route('user.list')}}?selected_level=2" >
                                    <div
                                        class="bg-white p-3 rounded-[16px] shadow transition-transform hover:shadow-md cursor-pointer">
                                        <div class="hidden md:grid grid-cols-4 lg:grid-cols-5 items-center">
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white text-sm font-semibold">
                                                    <i class="fas fa-arrow-right"></i></div>
                                                <div>
                                                    <p class="text-sm font-medium">@lang('Second generation data')</p>
                                                    
                                                </div>
                                            </div>
                                            <p class="hidden lg:block text-sm text-center font-medium">{{$active_gen_team2total}}/{{$gen_team2total}}</p>
                                            <div class="flex justify-center"><span
                                                    class="flex px-[6px] py-1 rounded-full text-xs bg-[#C4FFC8]">{{number_format($gen_team2Recharge,1)}}</span></div>
                                            <div class="flex justify-center">
                                                <p class="text-sm w-fit text-center px-3">{{number_format($gen_team2Withdraw,2)}}</p>
                                            </div>
                                            <div class="flex justify-center">
                                                <p class="text-sm w-fit text-center px-3 bg-[#F1F1F1] rounded-full">0
                                                {{number_format($gen_team2Earning,2)}}</p>
                                            </div>
                                           
                                        </div>
                                        

                                        <div class="grid grid-cols-2 sm:grid-cols-3 md:hidden items-center">
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white text-sm font-semibold">
                                                    <i class="fas fa-arrow-right"></i></div>
                                                <div>
                                                    <p class="text-sm font-medium">@lang('Second generation data')</p>
                                                   
                                                </div>
                                            </div>
                                            <div class="flex justify-end"><span
                                                    class="flex px-[6px] py-1 rounded-full text-xs  bg-[#C4FFC8]">{{$active_gen_team2total}}/{{$gen_team2total}}</span></div>
                                            <div class="text-right hidden sm:block">
                                                <p class="text-lg font-semibold"><span>0pt</span></p>
                                                <p class="text-xs">Total: <span>0pt</span></p>
                                            </div>
                                        </div>
                                    </div>
</a></a>
<a href="{{route('user.list')}}?selected_level=3" style="margin-top: 16px; margin-bottom: 16px;">
    <div
        class="bg-white p-3 rounded-[16px] shadow transition-transform hover:shadow-md cursor-pointer my-4">
        <div class="hidden md:grid grid-cols-4 lg:grid-cols-5 items-center">
            <div class="flex items-center space-x-3">
                <div
                    class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white text-sm font-semibold">
                    <i class="fas fa-arrow-right"></i>
                </div>
                <div>
                    <p class="text-sm font-medium">@lang('Third generation data')</p>
                </div>
            </div>
            <p class="hidden lg:block text-sm text-center font-medium">{{$active_gen_team3total}}/{{$gen_team3total}}</p>
            <div class="flex justify-center">
                <span class="flex px-[6px] py-1 rounded-full text-xs bg-[#C4FFC8]">
                    {{number_format($gen_team3Recharge,1)}}
                </span>
            </div>
            <div class="flex justify-center">
                <p class="text-sm w-fit text-center px-3">
                    {{number_format($gen_team3Withdraw,2)}}
                </p>
            </div>
            <div class="flex justify-center">
                <p class="text-sm w-fit text-center px-3 bg-[#F1F1F1] rounded-full">
                    {{number_format($gen_team3Earning,2)}}
                </p>
            </div>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:hidden items-center">
            <div class="flex items-center space-x-3">
                <div
                    class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white text-sm font-semibold">
                    <i class="fas fa-arrow-right"></i>
                </div>
                <div>
                    <p class="text-sm font-medium">@lang('Third generation data')</p>
                </div>
            </div>
            <div class="flex justify-end">
                <span class="flex px-[6px] py-1 rounded-full text-xs bg-[#C4FFC8]">
                    {{$active_gen_team3total}}/{{$gen_team3total}}
                </span>
            </div>
            <div class="text-right hidden sm:block">
                <p class="text-lg font-semibold"><span>0pt</span></p>
                <p class="text-xs">Total: <span>0pt</span></p>
            </div>
        </div>
    </div>
</a>
 <a href="{{route('user.list')}}?selected_level=4" >
                                    <div
                                        class="bg-white p-3 rounded-[16px] shadow transition-transform hover:shadow-md cursor-pointer">
                                        <div class="hidden md:grid grid-cols-4 lg:grid-cols-5 items-center">
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white text-sm font-semibold">
                                                    <i class="fas fa-arrow-right"></i></div>
                                                <div>
                                                    <p class="text-sm font-medium">@lang('Fourth generation data')</p>
                                                    
                                                </div>
                                            </div>
                                            <p class="hidden lg:block text-sm text-center font-medium">{{$active_gen_team4total}}/{{$gen_team4total}}</p>
                                            <div class="flex justify-center"><span
                                                    class="flex px-[6px] py-1 rounded-full text-xs bg-[#C4FFC8]">{{number_format($gen_team4Recharge,1)}}</span></div>
                                            <div class="flex justify-center">
                                                <p class="text-sm w-fit text-center px-3">{{number_format($gen_team4Withdraw,2)}} </p>
                                            </div>
                                            <div class="flex justify-center">
                                                <p class="text-sm w-fit text-center px-3 bg-[#F1F1F1] rounded-full">0
                                                {{number_format($gen_team4Earning,2)}}</p>
                                            </div>
                                           
                                        </div>
                                        

                                        <div class="grid grid-cols-2 sm:grid-cols-3 md:hidden items-center">
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white text-sm font-semibold">
                                                    <i class="fas fa-arrow-right"></i></div>
                                                <div>
                                                    <p class="text-sm font-medium">@lang('Fourth generation data')</p>
                                                    <!-- <p class="text-xs  text-[#999999] ">Telegram Node</p> -->
                                                </div>
                                            </div>
                                            <div class="flex justify-end"><span
                                                    class="flex px-[6px] py-1 rounded-full text-xs  bg-[#C4FFC8]">{{$active_gen_team4total}}/{{$gen_team4total}}</span></div>
                                            <div class="text-right hidden sm:block">
                                                <p class="text-lg font-semibold"><span>0pt</span></p>
                                                <p class="text-xs">Total: <span>0pt</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                    <a href="{{route('user.list')}}?selected_level=5" >
                                    <div
                                        class="bg-white p-3 rounded-[16px] shadow transition-transform hover:shadow-md cursor-pointer">
                                        <div class="hidden md:grid grid-cols-4 lg:grid-cols-5 items-center">
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white text-sm font-semibold">
                                                    <i class="fas fa-arrow-right"></i></div>
                                                <div>
                                                    <p class="text-sm font-medium">@lang('Fifth generation data')</p>
                                                   
                                                </div>
                                            </div>
                                            <p class="hidden lg:block text-sm text-center font-medium">{{$active_gen_team5total}}/{{$gen_team5total}}</p>
                                            <div class="flex justify-center"><span
                                                    class="flex px-[6px] py-1 rounded-full text-xs bg-[#C4FFC8]">{{number_format($gen_team5Recharge,1)}}</span></div>
                                            <div class="flex justify-center">
                                                <p class="text-sm w-fit text-center px-3">{{number_format($gen_team5Withdraw,2)}}</p>
                                            </div>
                                            <div class="flex justify-center">
                                                <p class="text-sm w-fit text-center px-3 bg-[#F1F1F1] rounded-full">0
                                                {{number_format($gen_team5Earning,2)}}</p>
                                            </div>
                                           
                                        </div>
                                        

                                        <div class="grid grid-cols-2 sm:grid-cols-3 md:hidden items-center">
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white text-sm font-semibold">
                                                    <i class="fas fa-arrow-right"></i></div>
                                                <div>
                                                    <p class="text-sm font-medium">@lang('Fifth generation data')</p>
                                                    <!-- <p class="text-xs  text-[#999999] ">Telegram Node</p> -->
                                                </div>
                                            </div>
                                            <div class="flex justify-end"><span
                                                    class="flex px-[6px] py-1 rounded-full text-xs  bg-[#C4FFC8]">{{$active_gen_team5total}}/{{$gen_team5total}}</span></div>
                                            <div class="text-right hidden sm:block">
                                                <p class="text-lg font-semibold"><span>0pt</span></p>
                                                <p class="text-xs">Total: <span>0pt</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fixed bottom-0 w-full bg-white flex md:hidden justify-around shadow-lg"><a
        class="flex w-1/5 p-[12px] flex-col items-center" href="{{route('user.dashboard')}}"><img alt="overview Icon" loading="lazy" width="20"
            height="20" decoding="async" data-nimg="1" class=""
            src="{{ asset('') }}upnl/assets/icons/icon-overview.svg" style="color: transparent;"><span
            class="text-xs mt-1 text-gray-400">Overview</span></a><a class="flex w-1/5 p-[12px] flex-col items-center"
        href="{{route('user.Market')}}"><img alt="my_nodes Icon" loading="lazy" width="20" height="20" decoding="async" data-nimg="1"
            class="" src="{{ asset('') }}upnl/assets/icons/icon-nodes.svg"
            style="color: transparent;"><span class="text-xs mt-1 text-gray-400">Nodes</span></a>
            <!-- <a
        class="flex w-1/5 p-[12px] flex-col items-center" href="/rewards"><img alt="rewards Icon" loading="lazy"
            width="20" height="20" decoding="async" data-nimg="1" class=""
            src="{{ asset('') }}upnl/assets/icons/icon-rewards.svg" style="color: transparent;"><span
            class="text-xs mt-1 text-gray-400">Rewards</span></a> -->
            
            
            <a class="flex w-1/5 p-[12px] flex-col items-center"
        href="{{route('user.team')}}"><img alt="referrals Icon" loading="lazy" width="20" height="20" decoding="async" data-nimg="1"
            class="" src="{{ asset('') }}upnl/assets/icons/icon-referrals.svg"
            style="color: transparent;"><span class="text-xs mt-1 text-gray-400">Referrals</span></a>
            
            <a
        class="flex w-1/5 p-[12px] flex-col items-center" href="{{route('user.wallet')}}"><img alt="wallet Icon" loading="lazy"
            width="20" height="20" decoding="async" data-nimg="1" class="green-filter"
            src="{{ asset('') }}upnl/assets/icons/icon-wallet.svg" style="color: transparent;"><span
            class="text-xs mt-1 text-green-500">Wallet</span>
        
        </a>
        
        
        
        <a
        class="flex w-1/5 p-[12px] flex-col items-center" href="{{route('user.profile-setting')}}"><img alt="wallet Icon" loading="lazy"
            width="20" height="20" decoding="async" data-nimg="1" class="green-filter"
            src="{{ asset('') }}upnl/assets/icons/icon-wallet.svg" style="color: transparent;"><span
            class="text-xs mt-1 text-green-500">Profile</span>
        
        </a></div>
</div>

        </div>
    </div>
    <script id="__NEXT_DATA__" type="application/json">
        {
            "props": {
                "pageProps": {
                    "__lang": "en",
                    "__namespaces": {
                        "common": {
                            "logout": "Logout",
                            "menu": "Menu",
                            "overview": "Overview",
                            "my_nodes": "Nodes",
                            "rewards": "Rewards",
                            "wallet": "Wallet",
                            "referrals": "Referrals",
                            "tasks": "Tasks",
                            "profile": "Profile",
                            "follow_us": "Follow Us",
                            "hello": "Hello",
                            "referred": "Referred",
                            "total_rewards": "Total Rewards",
                            "points": "Points",
                            "today_rewards": "Today Rewards",
                            "network_summary_title": "Network",
                            "manage": "Manage",
                            "network_differently": "Network Difficulty",
                            "node_online": "Node online",
                            "reward_stats": "Reward Stats",
                            "mining": "Mining",
                            "daily": "Daily",
                            "monthly": "Monthly",
                            "please_enter_friend_email": "Please enter the email of your friend",
                            "invalid_friend_email": "Invalid the email of your friend"
                        }
                    }
                },
                "__N_SSG": true
            },
            "page": "/connect",
            "query": {},
            "buildId": "nocaBKNJml-nPe7WJbWSK",
            "isFallback": false,
            "gsp": true,
            "locale": "en",
            "locales": ["en", "ru"],
            "defaultLocale": "en",
            "scriptLoader": []
        }
    </script>


    <script>
    function copyToClipboard() {
        // Get the text from the element
        const text = document.getElementById('textToCopy').textContent;

        // Create a temporary input element to hold the text
        const tempInput = document.createElement('input');
        tempInput.value = text;

        // Append the input to the body
        document.body.appendChild(tempInput);

        // Select the text and copy to clipboard
        tempInput.select();
        document.execCommand('copy');

        // Remove the temporary input
        document.body.removeChild(tempInput);

        // Optional: Show a success message (like an alert or tooltip)
        alert('Text copied to clipboard: ' + text);
    }
</script>
    <script id="_next-ga-init" data-nscript="afterInteractive">
        window['dataLayer'] = window['dataLayer'] || [];

        function gtag() {
            window['dataLayer'].push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-5PPR32GMM8');
    </script>
    <script src="https://www.googletagmanager.com/gtag/js?id=G-5PPR32GMM8" id="_next-ga"
        data-nscript="afterInteractive"></script>
    <next-route-announcer>
        <p aria-live="assertive" id="__next-route-announcer__" role="alert"
            style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; top: 0px; width: 1px; white-space: nowrap; overflow-wrap: normal;">
            Nodes - Meshchain</p>
    </next-route-announcer>
    <script src="./_next/static/chunks/pages/index-ee3997ecd6058818.js"></script>
    <script src="./_next/static/chunks/180-23154d61c0670ef4.js"></script>
    <script src="./_next/static/chunks/pages/nodes-dbc2ec71a71e759c.js"></script>
    <script src="./_next/static/chunks/pages/rewards-68123406f92ce1f1.js"></script>
    <script src="./_next/static/chunks/pages/referrals-c3a72b71d4f8ff2f.js"></script>
    <script src="./_next/static/chunks/pages/wallet-65f0dabf677342f6.js"></script>
    <script src="./_next/static/chunks/pages/profile-6284106fb2e47cd9.js"></script>
    <script src="./_next/static/chunks/pages/contact-74f7108b54563e66.js"></script>
    <script src="./_next/static/chunks/568-b59724e58497c3b9.js"></script>
    <script src="./_next/static/chunks/pages/wallet/deposit-1ee2cf425e02648e.js"></script><span
        id="PING_IFRAME_FORM_DETECTION" style="display: none;"></span>
    <script src="./_next/static/chunks/pages/login-be43bc61ed9c8e2b.js"></script>
    <script src="./_next/static/chunks/pages/forgot_password-47e935679b1e2ca0.js"></script>
    <script src="./_next/static/chunks/pages/signup-802f7e1bb51b64f2.js"></script><span id="PING_CONTENT_APS_BALLOON"
        style="display: none;"></span>
</body>

</html>