




                    <div
                        class="flex-1 overflow-y-auto px-4 md:px-10 lg:px-10 xl:px-20 pt-5 pb-[88px] md:pb-[20px] bg-[#F1F1F1]">
                        <div class="grid grid-cols-1 lg:grid-cols-5 xl:grid-cols-3 gap-6">
                            <div class="lg:col-span-3 xl:col-span-2 flex flex-col">
                               
                                <div class="bg-white rounded-[16px] mt-6 p-6 lg:p-8 flex-1">
                                  <center>  <h3 class="font-semibold mb-3">     Internal Transfer
                                    </h3></center>


                                    <h3 class="font-semibold mb-3">                    Activation Wallet :   {{ currency() }}{{ number_format(Auth::user()->FundBalance(), 2) }}

                                    </h3>
</br>

                                    <form action="{{ route('user.SubmitTransferFunds') }}" method="post"  >
                {{ csrf_field() }}          
                
                

                <div class="mb-4">
                                        <label for="amount" class="block text-gray-700 font-medium mb-2">Enter Amount</label>
                                      

                                          <input data-v-7bab1ac4="" data-v-cfc9a7fc="" type="number"
                                        placeholder="Please enter the amount" name="amount"
                                        id="withdrawalAmount" class="w-full px-3 py-2 border border-gray-300 rounded-[12px]">
                                      </div>

                   
                                      <div class="mb-4">
                                        <label for="amount" class="block text-gray-700 font-medium mb-2">    User ID
                                        </label>


                                        <input data-v-7bab1ac4="" data-v-cfc9a7fc="" type="number"
                                        placeholder="User ID" name="username"
                                        id="withdrawalAmount" class="w-full px-3 py-2 border border-gray-300 rounded-[12px]">
                                      </div>
                                     
                                      <div class="mb-4">
                                        <label for="amount" class="block text-gray-700 font-medium mb-2">   Transaction Password
                                        </label>
                                        <input data-v-7bab1ac4="" data-v-cfc9a7fc="" type="number"
                                        placeholder="Transaction Password" name="transaction_password"
                                        id="withdrawalAmount" class="w-full px-3 py-2 border border-gray-300 rounded-[12px]">
                                      </div>



                                     
                                      <div class="text-right">
                                        <button type="submit" style="background-color: rgb(34 197 94);"class="px-6 py-2 bg-blue-500 text-white rounded-[12px] hover:bg-blue-600" styel>
                                          Submit
                                        </button>
                                      </div>
                                    </form>
                                  </div>
                                  
                                
                            </div>
                            <div class="bg-white rounded-[16px] p-6 lg:col-span-2 xl:col-span-1">
                                <h3 class="font-semibold mb-3">History</h3>
                                <div class="space-y-4 h-full">


                                <?php if(is_array($buyfunds) || is_object($buyfunds)){ ?>
                                    <?php
                                        date_default_timezone_set('UTC');
                                        $cnt = 0; ?>
                                        @foreach ($buyfunds as $value)


                                    <div class="flex justify-between items-center text-sm mb-4">
                                        <div class="flex">
                                            <div
                                                class="flex items-center justify-center rounded-[50%] bg-[#F9F9F9] w-[44px] h-[44px]">
                                                <img alt="IN Icon" loading="lazy" width="28" height="28"
                                                    decoding="async" data-nimg="1" src="{{ asset('') }}upnl/assets/icons/icon_down.svg"
                                                    style="color: transparent;"></div>
                                            <div class="ml-3">
                                                <p class="font-medium"> Transfer</p>
                                                <p class="text-secondary font-light text-sm">{{ $value['user_id_from'] }} To {{ $value['user_id_to'] }}   </p>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-green-500">+<span>{{ $value['comm'] }}</span></p>
                                        </div>
                                    </div>
                                  
                                    @endforeach
                                    <?php }?>



                                    <div class="pagination">

{{ $buyfunds->withQueryString()->links() }}
</div>

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
    @include('partials.notify')

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