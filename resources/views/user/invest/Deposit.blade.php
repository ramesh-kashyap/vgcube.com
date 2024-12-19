@include('layouts.upnl.header')
<div
                        class="flex-1 overflow-y-auto px-4 md:px-10 lg:px-10 xl:px-20 pt-5 pb-[88px] md:pb-[20px] bg-[#F1F1F1]">
                        <div class="grid grid-cols-1 lg:grid-cols-5 xl:grid-cols-3 gap-6">
                            <div class="lg:col-span-3 xl:col-span-2 flex flex-col">
                                
                                <div class="bg-white rounded-[16px] mt-6 p-6 lg:p-8 flex-1">
                                    <h3 class="font-semibold mb-3">LV {{$id}}</h3>
                                    <table class="w-full">
                                        <!-- <thead>
                                            <tr class="text-secondary">
                                                <th class="text-left py-1 font-medium text-[12px]">Asset</th>
                                                <th class="text-right py-1 font-medium text-[12px]">Holdings</th>
                                                <th
                                                    class="text-right py-1 font-medium text-[12px] hidden md:table-cell">
                                                    Price</th>
                                                <th class="text-right py-1 font-medium text-[12px]"><span
                                                        class="hidden md:inline-block">Total USD</span><span
                                                        class="md:hidden">USD</span></th>
                                            </tr>
                                        </thead> -->
                                        <tbody>
                                            <tr class="border-t h-[60px]">
                                                <td class="py-4 flex items-center space-x-2 lg:space-x-3 text-sm"><span>Subscription Server</span></td>
                                                <!-- <td class="py-4 text-right text-sm"><span>0</span></td>
                                                <td class="py-4 text-primary text-right text-sm hidden md:table-cell">
                                                    <span class="text-secondary">Coming Soon</span></td> -->
                                                    <td class="py-4 text-primary text-right text-sm"><span
                                                        >   @if($id=="1")
                                           $30
                                        @elseif($id=="2")
                                        $120
                                        @elseif($id=="3")
                                        $300
                                        @elseif($id=="4")
                                        $1200
                                        @elseif($id=="5")
                                        $3600
                                        @elseif($id=="6")
                                        $6000
                                        @elseif($id=="7")
                                        $15000
                                        @endif</span></td>
                                            </tr>
                                            <tr class="border-t h-[60px]">
                                                <td class="py-4 flex items-center space-x-2 lg:space-x-3 text-sm"><span>Daily Node Power Reward</span></td>
                                                <!-- <td class="py-4 text-right text-sm"><span>0</span></td>
                                                <td class="py-4 text-primary text-right text-sm hidden md:table-cell">
                                                    <span class="text-secondary">Coming Soon</span></td> -->
                                                <td class="py-4 text-primary text-right text-sm"><span
                                                        > <?php
                                        $plans = [
                                            "1" => 1,
                                            "2" => 4,
                                            "3" => 10,
                                            "4" => 40,
                                            "5" => 120,
                                            "6" => 200,
                                            "7" => 500
                                        ];
                                        
                                        $plan = isset($plans[$id]) ? $plans[$id] : 0; // Default to 0 if $id is not found
                                        ?>
                                        ${{ $plan }}</span></td>
                                            </tr>
                                            <tr class="border-t h-[60px]">
                                                <td class="py-4 flex items-center space-x-2 lg:space-x-3 text-sm"><span>Subscription Duration</span></td>
                                                <!-- <td class="py-4 text-right text-sm"><span>0</span></td>
                                                <td class="py-4 text-primary text-right text-sm hidden md:table-cell">
                                                    <span>$98,482.30</span></td> -->
                                                <td class="py-4 text-primary text-right text-sm">
                                                    <div class="flex flex-col md:flex-row justify-end gap-1">
                                                        <p><span>60 Days</span></p>
                                                        <!-- <p class="block md:hidden text-secondary text-sm"><span>Price:
                                                                $98,482.30</span></p> -->
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-t h-[60px]">
                                                <td class="py-4 flex items-center space-x-2 lg:space-x-3 text-sm"><span>Node Power Run Time</span></td>
                                                <td class="py-4 text-right text-sm"><span>1 Hour</span></td>
                                                <!-- <td class="py-4 text-primary text-right text-sm hidden md:table-cell">
                                                    <span>$1.00</span></td>
                                                <td class="py-4 text-primary text-right text-sm">
                                                    <div class="flex flex-col md:flex-row justify-end gap-1">
                                                        <p><span>$0</span></p> -->
                                                        <!-- <p class="block md:hidden text-secondary text-sm"><span>Price:
                                                                $1.00</span></p> -->
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-t h-[60px]">
                                                <td class="py-4 flex items-center space-x-2 lg:space-x-3 text-sm"><span>Total Reward</span></td>
                                                <td class="py-4 text-right text-sm"><span><?php
                                        $amounts = [
                                            "1" => 60,
                                            "2" => 240,
                                            "3" => 600,
                                            "4" => 2400,
                                            "5" => 7200,
                                            "6" => 12000,
                                            "7" => 30000
                                        ];
                                        
                                        // Check if the id exists in the amounts array, otherwise default to 0 or another value
                                        $amount = isset($amounts[$id]) ? $amounts[$id] : 0;
                                        ?>
                                        ${{ $amount }}</span></td>
                                                <!-- <td class="py-4 text-primary text-right text-sm hidden md:table-cell">
                                                    <span>$729.03</span></td>
                                                <td class="py-4 text-primary text-right text-sm">
                                                    <div class="flex flex-col md:flex-row justify-end gap-1">
                                                        <p><span>$0</span></p> -->
                                                        <!-- <p class="block md:hidden text-secondary text-sm"><span>Price:
                                                                $729.03</span></p> -->
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-t h-[60px]">
                                                <td class="py-4 flex items-center space-x-2 lg:space-x-3 text-sm"><span>Maximum Quantity</span></td>
                                                <td class="py-4 text-right text-sm"><span>1 </span></td>
                                                <!-- <td class="py-4 text-primary text-right text-sm hidden md:table-cell">
                                                    <span>$729.03</span></td>
                                                <td class="py-4 text-primary text-right text-sm">
                                                    <div class="flex flex-col md:flex-row justify-end gap-1">
                                                        <p><span>$0</span></p> -->
                                                        <!-- <p class="block md:hidden text-secondary text-sm"><span>Price:
                                                                $729.03</span></p> -->
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        
                                    </table>
                                    <form method="post" name="add" action="{{ route('user.confirmDeposit') }}" onsubmit="return validateForm()">
                                {{ csrf_field() }}
                                
                                <input type="hidden" name="Sum" value={{ $amount }}>
                                <input type="hidden" name="plan" value={{ $plan }}>

                                <p style="font-weight:300; font-size:10px;color:gray"><b>@lang('Note:')</b> @lang('Rewards from completed tasks are credited to the VG CUBE wallet, allowing users to track and withdraw their funds')</p>

                                <div class="mt-4 flex justify-center">
                                        <button class="px-6 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">
                                            Confirm
                                        </button>
                                    </div>
                            </form>
                                    
                                </div>
                            </div>
                            <!-- <div class="bg-white rounded-[16px] p-6 lg:col-span-2 xl:col-span-1">
                                <h3 class="font-semibold mb-3">History</h3>
                                <div class="space-y-4 h-full">
                                    <div class="flex justify-between items-center text-sm mb-4">
                                        <div class="flex">
                                            <div
                                                class="flex items-center justify-center rounded-[50%] bg-[#F9F9F9] w-[44px] h-[44px]">
                                                <img alt="IN Icon" loading="lazy" width="28" height="28"
                                                    decoding="async" data-nimg="1" src="./assets/icons/icon_down.svg"
                                                    style="color: transparent;"></div>
                                            <div class="ml-3">
                                                <p class="font-medium">Connect Accounts</p>
                                                <p class="text-secondary font-light text-sm">10 minutes ago</p>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-green-500">+<span>0 MCC</span></p>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center text-sm mb-4">
                                        <div class="flex">
                                            <div
                                                class="flex items-center justify-center rounded-[50%] bg-[#F9F9F9] w-[44px] h-[44px]">
                                                <img alt="IN Icon" loading="lazy" width="28" height="28"
                                                    decoding="async" data-nimg="1" src="./assets/icons/icon_down.svg"
                                                    style="color: transparent;"></div>
                                            <div class="ml-3">
                                                <p class="font-medium">Connect Accounts</p>
                                                <p class="text-secondary font-light text-sm">10 minutes ago</p>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-green-500">+<span>0 POINT</span></p>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center text-sm mb-4">
                                        <div class="flex">
                                            <div
                                                class="flex items-center justify-center rounded-[50%] bg-[#F9F9F9] w-[44px] h-[44px]">
                                                <img alt="IN Icon" loading="lazy" width="28" height="28"
                                                    decoding="async" data-nimg="1" src="./assets/icons/icon_down.svg"
                                                    style="color: transparent;"></div>
                                            <div class="ml-3">
                                                <p class="font-medium">Connect Accounts</p>
                                                <p class="text-secondary font-light text-sm">10 minutes ago</p>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-green-500">+<span>0 BNB</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
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
            Wallet - Meshchain</p>
    </next-route-announcer>
    @include('partials.notify')
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