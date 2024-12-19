<div
                        class="flex-1 overflow-y-auto px-4 md:px-10 lg:px-10 xl:px-20 pt-5 pb-[88px] md:pb-[20px] bg-[#F1F1F1]">
                        <div class="w-full mt-10 flex justify-center text-primary">
                            <div class="w-full max-w-[1440px] rounded-lg">
                           
                                <div class="flex justify-between mb-4 items-center">
                                    <div class="relative"><button class="px-3 h-[34px] bg-white rounded-full shadow"
                                            fdprocessedid="pwt0f">
                                           <a href="{{route('user.team')}}"> <img alt="Filter Icon" loading="lazy" width="16"
                                                height="16" decoding="async" data-nimg="1"
                                                src="{{ asset('') }}upnl/assets/icons/icon_left.svg"
                                                style="color: transparent;"></a></button></div>
                                </div>
                                <div class="bg-white mb-3 p-4 rounded-[16px] font-semibold text-gray-600 text-center">
                                    <div class="hidden md:grid grid-cols-5 lg:grid-cols-5">
                                        <div class="text-left">Level</div>
                                        <div class="hidden lg:inline-block">User ID</div>
                                        <div>Status</div>
                                        <div>Amount</div>
                                        <div>Date</div>
                                        
                                    </div>
                                    <div class="grid grid-cols-2 sm:grid-cols-3 md:hidden">
                                        <div class="text-left">Team Genration</div>
                                        <div class="text-right">Total Members</div>
                                        <div class="text-right hidden sm:block">Today Rewards</div>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                <?php if(is_array($direct_team) || is_object($direct_team)){ ?>

<?php $cnt = $direct_team->perPage() * ($direct_team->currentPage() - 1); ?>
@foreach ($direct_team as $value)
                                    <div
                                        class="bg-white p-3 rounded-[16px] shadow transition-transform hover:shadow-md cursor-pointer">
                                        <div class="hidden md:grid grid-cols-4 lg:grid-cols-5 items-center">
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white text-sm font-semibold">
                                                    <i class="fas fa-arrow-right"></i></div>
                                                <div>
                                                    <p class="text-sm font-medium">LV {{$value->level-Auth::user()->level}}</p>
                                                    
                                                </div>
                                            </div>
                                            <p class="hidden lg:block text-sm text-center font-medium">{{$value->username}} </p>
                                            <div class="flex justify-center"><span
                                                    class="flex px-[6px] py-1 rounded-full text-xs bg-[#C4FFC8]">{{ $value->active_status }}</span></div>
                                            <div class="flex justify-center">
                                                <p class="text-sm w-fit text-center px-3">{{ ($value->investment->sum('amount'))?$value->investment->sum('amount'):0 }} USDT</p>
                                            </div>
                                            <div class="flex justify-center">
                                                <p class="text-sm w-fit text-center px-3 bg-[#F1F1F1] rounded-full">Join in: {{ date('D, d M Y H:i:s', strtotime($value->created_at)) }}</p>
                                            </div>
                                           
                                        </div>
                                        

                                        <div class="grid grid-cols-2 sm:grid-cols-3 md:hidden items-center">
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white text-sm font-semibold">
                                                    <i class="fas fa-arrow-right"></i></div>
                                                <div>
                                                    <p class="text-sm font-medium">{{$value->username}}</p>
                                                    
                                                </div>
                                            </div>
                                            <div class="flex justify-end"><span
                                                    class="flex px-[6px] py-1 rounded-full text-xs  bg-[#C4FFC8]">{{ ($value->investment->sum('amount'))?$value->investment->sum('amount'):0 }} USDT </span></div>
                                            <!-- <div class="text-right hidden sm:block">
                                                <p class="text-lg font-semibold"><span>0pt</span></p>
                                                <p class="text-xs">Total: <span>0pt</span></p>
                                            </div> -->
                                        </div>
                                    </div>
                                    @endforeach
                                            <?php }?>
                                            {{ $direct_team->withQueryString()->links() }}
                                      
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
        <script>
    // Event listener for elements with class "n"
    document.querySelectorAll('.n').forEach(function(element) {
        element.addEventListener('click', function() {
            const u1 = document.querySelector('.u1');
            if (u1) {
                if (u1.style.display === 'block') {
                    u1.style.display = 'none';
                } else {
                    u1.style.display = 'block';
                }
            }
        });
    });

    // Event listener for elements with class "close-btn"
    document.querySelectorAll('.close-btn').forEach(function(element) {
        element.addEventListener('click', function() {
            const popup = document.querySelector('.van-popup--bottom');
            if (popup) {
                popup.style.display = 'none';
            }
        });
    });
</script>


</body>

</html>