
                    <div
                        class="flex-1 overflow-y-auto px-4 md:px-10 lg:px-10 xl:px-20 pt-5 pb-[88px] md:pb-[20px] bg-[#F1F1F1]">
                        <div>
                            <div class="flex justify-between"><a
                                    class="text-white text-sm rounded-[22px] h-[33px] px-3 bg-black mb-4 mt-10 flex items-center space-x-2"
                                    href="/wallet"><img alt="Back Icons" loading="lazy" width="17" height="12"
                                        decoding="async" data-nimg="1" src="{{ asset('') }}upnl/assets/icons/icon-back.svg"
                                        style="color: transparent;"><span>Back</span></a></div>
                            <div class="grid grid-cols-1 lg:grid-cols-5 xl:grid-cols-3 gap-6">
                                <div class="lg:col-span-3 xl:col-span-2 bg-white rounded-[16px] p-6">
                                    <h2 class="text-xl font-bold mb-8">Deposit</h2>
                                    <div class="flex flex-col items-center">
                                        <p
                                            class="w-[335px] max-w-[335px] text-secondary text-center font-normal text-sm">
                                            Please only send BNB to this address. Depositing any other tokens will
                                            result in a loss of funds.</p>
                                            <div data-v-b3422e30="" data-v-cfc9a7fc="" id="qrcode" title="{{$walletAddress}}">
        <canvas width="185" height="185" style="display: none;"></canvas>
        <img alt="Scan me!" src="{{$qr_code}}" style="display: block; width: 178px">
    </div>
                                    </div>
                                    <div class="flex items-center justify-center w-full">
                                        <div
                                            class="bg-[#F9F9F9] mt-5 p-3 w-[335px] max-w-[335px] rounded-[20px] flex items-center justify-between">
                                            <div class="break-all text-secondary text-[14px] font-medium flex flex-col gap-1"
                                                style="width: calc(100% - 100px);">
                                                <p>Wallet Address</p>
<p class="text-primary" id="{{$walletAddress}}">
    {{$walletAddress}}
</p>                                            </div><button
                                                class="bg-green-500 min-w-[90px] h-[46px] rounded-[30px] text-white px-4 py-2" onclick="copyAddress()">Copy</button>
                                        </div>
                                    </div>
                                    <div class="bg-white rounded-[16px] mt-6 p-6 lg:p-8 flex-1">
                                        
                                    <form method="post" action="{{ route('user.fundActivation') }}" name="balance/oper_frm" data-v-56930b78="" class="container" style="padding:0">
                                    {{ csrf_field() }}    
                                    
                                    
                                    <input name="paymentMode" value="{{$paymentMode}}" type="hidden">
                        <input name="amount" value="{{$amount}}" type="hidden">
                        <input name="orderId" value="{{$orderId}}" id="orderId" type="hidden">
                        <input name="transaction_id" value="{{$transaction_id}}" type="hidden">
                                    
                                    
                                    <!-- Replace /submit-wallet with your form submission URL -->
                                          <div class="mb-4">
                                            <label for="amount" class="block text-gray-700 font-medium mb-2">Order Id</label>
                                            <input type="text"   value="{{$transaction_id}}" placeholder=""
                                              class="w-full px-3 py-2 border border-gray-300 rounded-[12px]" required>
                                          </div>
                                         
                                          <div class="mb-4">
                                            <label for="amount" class="block text-gray-700 font-medium mb-2">Amount</label>
                                            <input  value="{{$invoice_total_sum}}" placeholder="Amount"
                                              class="w-full px-3 py-2 border border-gray-300 rounded-[12px]" required>
                                          </div>
                                          <div class="mb-4">
                                            <label for="amount" class="block text-gray-700 font-medium mb-2">Payment Mode</label>
                                            <input type="text"  value=" <?php if($paymentMode=="USDT_TRX"){echo "USDT (TRC20)";}elseif($paymentMode=="USDT_BSC"){echo "USDT (BEP20)";}elseif($paymentMode=="LTC"){echo "Litecoin";}elseif($paymentMode=="DOGE"){echo "Dogecoin";}
                                            elseif($paymentMode=="BCH"){echo "Bitcoin Cash";}elseif($paymentMode=="ETC"){echo 
                                            "Ethereum Classic	";}?>" placeholder="Enter Transaction Id"
                                              class="w-full px-3 py-2 border border-gray-300 rounded-[12px]" required>
                                          </div>

                                          
                                          <!-- <div class="mb-4">
                                            <label for="amount" class="block text-gray-700 font-medium mb-2">Wallet Address</label>
                                            <input type="number" value="{{$walletAddress}}" placeholder="Enter Wallet Address"
                                              class="w-full px-3 py-2 border border-gray-300 rounded-[12px]" required>
                                          </div> -->
                                         
                                          <div class="text-right">
                                            <!-- <button type="submit" style="background-color: rgb(34 197 94);"class="px-6 py-2 bg-blue-500 text-white rounded-[12px] hover:bg-blue-600" styel>
                                              Submit
                                            </button> -->
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
                                                    decoding="async" data-nimg="1" src="./assets/icons/icon_down.svg"
                                                    style="color: transparent;"></div>
                                            <div class="ml-3">
                                                <p class="font-medium"> {{$value['remarks']}} 
                                                        </p>
                                                <p class="text-secondary font-light text-sm">{{ date('D, d M Y H:i:s', strtotime($value['created_at'])) }}</p>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                        
                                            <p class="text-green-500"><span> +{{ $value['comm'] }}</span></p>
                                           
                                        </div>
                                    </div>
                                    @endforeach

<?php }?>

                                        <div class="flex h-full justify-center hidden items-center w-full text-secondary">
                                            <div class="w-full text-center"><img alt="Icon Empty" loading="lazy"
                                                    width="64" height="40" decoding="async" data-nimg="1"
                                                    class="mx-auto mb-2" src="{{ asset('') }}upnl/assets/images/empty_state.svg"
                                                    style="color: transparent;"><span>No transactions found</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fixed bottom-0 w-full bg-white flex md:hidden justify-around shadow-lg"><a
                    class="flex w-1/5 p-[12px] flex-col items-center" href="/"><img alt="overview Icon" loading="lazy"
                        width="20" height="20" decoding="async" data-nimg="1" class=""
                        src="{{ asset('') }}upnl/assets/icons/icon-overview.svg" style="color: transparent;"><span
                        class="text-xs mt-1 text-gray-400">Overview</span></a><a
                    class="flex w-1/5 p-[12px] flex-col items-center" href="/nodes"><img alt="my_nodes Icon"
                        loading="lazy" width="20" height="20" decoding="async" data-nimg="1" class=""
                        src="{{ asset('') }}upnl/assets/icons/icon-nodes.svg" style="color: transparent;"><span
                        class="text-xs mt-1 text-gray-400">Nodes</span></a><a
                    class="flex w-1/5 p-[12px] flex-col items-center" href="/rewards"><img alt="rewards Icon"
                        loading="lazy" width="20" height="20" decoding="async" data-nimg="1" class=""
                        src="{{ asset('') }}upnl/assets/icons/icon-rewards.svg" style="color: transparent;"><span
                        class="text-xs mt-1 text-gray-400">Rewards</span></a><a
                    class="flex w-1/5 p-[12px] flex-col items-center" href="/referrals"><img alt="referrals Icon"
                        loading="lazy" width="20" height="20" decoding="async" data-nimg="1" class=""
                        src="{{ asset('') }}upnl/assets/icons/icon-referrals.svg" style="color: transparent;"><span
                        class="text-xs mt-1 text-gray-400">Referrals</span></a><a
                    class="flex w-1/5 p-[12px] flex-col items-center" href="/wallet"><img alt="wallet Icon"
                        loading="lazy" width="20" height="20" decoding="async" data-nimg="1" class=""
                        src="{{ asset('') }}upnl/assets/icons/icon-wallet.svg" style="color: transparent;"><span
                        class="text-xs mt-1 text-gray-400">Wallet</span></a><button
                    class="flex w-1/5 p-[12px] flex-col items-center"><img alt="More Options" loading="lazy" width="20"
                        height="20" decoding="async" data-nimg="1"
                        srcset="{{ asset('') }}upnl/_next/image?url=%2Fassets%2Ficons%2Fmore.png&amp;w=32&amp;q=75 1x, ./_next/image?url=%2Fassets%2Ficons%2Fmore.png&amp;w=48&amp;q=75 2x"
                        src="{{ asset('') }}upnl/_next/image?url=%2Fassets%2Ficons%2Fmore.png&amp;w=48&amp;q=75"
                        style="color: transparent;"><span class="text-xs mt-1 text-gray-400">More</span></button></div>
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
            "page": "/contact",
            "query": {},
            "buildId": "9q695Wa81y4c7L4dZTd7p",
            "isFallback": false,
            "gsp": true,
            "locale": "en",
            "locales": ["en", "ru"],
            "defaultLocale": "en",
            "scriptLoader": []
        }
    </script>
    <script>
        (function () {
            function c() {
                var b = a.contentDocument || a.contentWindow.document;
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML =
                        "window.__CF$cv$params={r:'8f13b731f84ee224',t:'MTczNDA2OTQzNS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                    b.getElementsByTagName('head')[0].appendChild(d)
                }
            }
            if (document.body) {
                var a = document.createElement('iframe');
                a.height = 1;
                a.width = 1;
                a.style.position = 'absolute';
                a.style.top = 0;
                a.style.left = 0;
                a.style.border = 'none';
                a.style.visibility = 'hidden';
                document.body.appendChild(a);
                if ('loading' !== document.readyState) c();
                else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                else {
                    var e = document.onreadystatechange || function () {};
                    document.onreadystatechange = function (b) {
                        e(b);
                        'loading' !== document.readyState && (document.onreadystatechange = e, c())
                    }
                }
            }
        })();
    </script><iframe height="1" width="1"
        style="position: absolute; top: 0px; left: 0px; border: none; visibility: hidden;"></iframe>
    <script id="_next-ga-init" data-nscript="afterInteractive">
        window['dataLayer'] = window['dataLayer'] || [];

        function gtag() {
            window['dataLayer'].push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-5PPR32GMM8');
    </script>
      <script>
        // Original address
        let address = "0x4721c2DD5DCF7c49194180198f7fa8a507d35078";

        // Get the first 3 characters, middle part hidden, and last 3 characters
        let displayAddress = address.substring(0, 5) + "..." + address.substring(address.length - 3);

        // Display the formatted address
        document.getElementById("address").innerText = displayAddress;
        function copyAddress() {
            // Get the address from the element with id "address"
           

            // Copy the address to the clipboard
            navigator.clipboard.writeText(address)
                .then(function() {
                    alert("Address copied to clipboard!");
                })
                .catch(function(err) {
                    alert("Failed to copy the address: " + err);
                });
        }
    </script>

@include('partials.notify')

    <script src="https://www.googletagmanager.com/gtag/js?id=G-5PPR32GMM8" id="_next-ga"
        data-nscript="afterInteractive"></script>
    <next-route-announcer>
        <p aria-live="assertive" id="__next-route-announcer__" role="alert"
            style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; top: 0px; width: 1px; white-space: nowrap; overflow-wrap: normal;">
            Deposit - Meshchain</p>
    </next-route-announcer>
    <script src="{{ asset('') }}upnl/_next/static/chunks/106-bc4204a49eec54a7.js"></script>
    <script src="{{ asset('') }}upnl/_next/static/chunks/600-43bf72feb6de8eef.js"></script>
    <script src="{{ asset('') }}upnl/_next/static/chunks/746-ff5632740c85318b.js"></script>
    <script src="{{ asset('') }}upnl/_next/static/chunks/pages/index-174bb38c92c00b39.js"></script>
    <script src="{{ asset('') }}upnl/_next/static/chunks/180-b06e0882882db22c.js"></script>
    <script src="{{ asset('') }}upnl/_next/static/chunks/pages/nodes-d69713f33cb2c593.js"></script>
    <script src="{{ asset('') }}upnl/_next/static/chunks/pages/rewards-0997abb8623a05bd.js"></script>
    <script src="{{ asset('') }}upnl/_next/static/chunks/pages/referrals-2f5c02a6680fbf92.js"></script>
    <script src="{{ asset('') }}upnl/_next/static/chunks/pages/wallet-a0e3cf563f272268.js"></script>
    <script src="{{ asset('') }}upnl/_next/static/chunks/pages/profile-c82dfed4416de448.js"></script>
    <script src="{{ asset('') }}upnl/_next/static/chunks/568-b59724e58497c3b9.js"></script>
    <script src="{{ asset('') }}upnl/_next/static/chunks/pages/wallet/deposit-7c221302a9404035.js"></script>
</body>

</html>