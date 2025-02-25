
<div
                        class="flex-1 overflow-y-auto px-4 md:px-10 lg:px-10 xl:px-20 pt-5 pb-[88px] md:pb-[20px] bg-[#F1F1F1]">
                        <div class="grid grid-cols-1 lg:grid-cols-5 xl:grid-cols-3 gap-6">
                            <div class="lg:col-span-3 xl:col-span-2 flex flex-col">
                                <!-- <div class="bg-white rounded-[16px] p-6 lg:p-8">
                                    <h2 class="text-[24px] font-semibold text-primary mb-8">Wallet</h2>
                                    <div class="flex flex-col md:flex-row gap-3 justify-between">
                                        <div>
                                            <p class="text-primary font-medium mb-2">Total Assets</p>
                                            <p class="text-[30px] font-bold"><span>0 BNB</span></p>
                                            <p class="text-secondary"><span>$0</span></p>
                                        </div>
                                        <div class="flex flex-row gap-2 items-end"><a
                                                class="bg-black text-white h-[46px] px-6 py-2 rounded-[30px] flex flex-1 items-center justify-center"
                                                href="./deposit.html">Deposit</a><button
                                                class="border border-black h-[46px] text-black px-6 py-2 rounded-[30px] flex flex-1 items-center justify-center"
                                                fdprocessedid="scd5lj">Withdraw</button></div>
                                    </div>
                                </div> -->
                                <div class="bg-white rounded-[16px] mt-6 p-6 lg:p-8 flex-1">
                               <center>     <h3 class="font-semibold mb-3" style="
    background: #ffffff;
">Withdrawal</h3></center>
</br>
                                    <form action="{{ route('user.Withdraw-Request') }}" method="POST">
                                    {{ csrf_field() }}
                                      <!-- Replace /submit-wallet with your form submission URL -->
                                      <div class="mb-4">
                                        <label for="amount" class="block text-gray-700 font-medium mb-2">Enter Amount</label>
                                        <input type="number"  id="withdrawalAmount" name="amount" placeholder="Enter amount"
                                          class="w-full px-3 py-2 border border-gray-300 rounded-[12px]" required>
                                      </div>
                                      <div class="mb-4">
                                        <label for="wallet_type" class="block text-gray-700 font-medium mb-2">Select Wallet</label>
                                        <select id="paymentMode"  name="paymentMode" class="w-full px-3 py-2 border border-gray-300 rounded-[12px]">
                                          
                                          <option value="USDT_TRX">USDT (TRC20)</option>
                                          <option value="USDT_BSC">USDT (BEP20)</option>
                                          <option value="LTC">Litecoin</option>
                                          <option value="DOGE">Dogecoin</option>
                                          <option value="BCH">Bitcoin Cash</option>
                                          <option value="ETC">Ethereum Classic</option>
                                        </select>
                                      </div>
                                      <div class="mb-4">
                                        <label for="amount" class="block text-gray-700 font-medium mb-2">Withdraw Address</label>
                                        <input type="text"   name="walletAddress" value="{{ Auth::user()->usdtTrc20 }}" id="walletAddress" placeholder="Please enter the Withdraw Address"
                                          class="w-full px-3 py-2 border border-gray-300 rounded-[12px]" required>
                                      </div>
                                      <div class="mb-4 relative">
                                        <label for="transaction-password" class="block text-gray-700 font-medium mb-2">Transaction Password</label>
                                        <input 
                                          type="password" 
                                          id="transaction-password" 
                                          type="password" 
                                          name="transaction_password"
                                          placeholder="Please enter the transaction password"
                                          class="w-full px-3 py-2 border border-gray-300 rounded-[12px]" 
                                          required
                                        >
                                        <!-- Eye Icon -->
                                        <button 
                                          type="button" 
                                          id="toggle-password" 
                                          class="absolute inset-y-0 right-3 flex items-center text-gray-600" style="
                                          padding-top: 32px;
                                      "
                                        >
                                          👁️
                                        </button>
                                      </div>
                                      <!-- <div class="mb-4">
                                        <label for="amount" class="block text-gray-700 font-medium mb-2">Wallet Address</label>
                                        <input type="number" id="amount" name="amount" placeholder="Enter Wallet Address"
                                          class="w-full px-3 py-2 border border-gray-300 rounded-[12px]" required>
                                      </div> -->
                                     
                                      <div class="text-center">
                                        <button type="submit" style="background-color: rgb(34 197 94);"class="px-6 py-2 bg-blue-500 text-white rounded-[12px] hover:bg-blue-600" styel>
                                        Withdrawal
                                        </button>
                                      </div>
                                   
                                    <div class="flex flex-col mt-6 space-y-4">
    <!-- Each Row -->
    <div class="flex justify-between items-center">
        <!-- Question -->
        <p class="text-sm text-gray-700">Available Balance</p>
        <!-- Answer -->
        <p class="text-sm text-gray-700">
            {{ number_format(Auth::user()->available_balance(), 2) }} USDT
        </p>
    </div>

    <div class="flex justify-between items-center">
        <p class="text-sm text-gray-700">Arrived Quantity</p>
        <p class="text-sm text-gray-700" id="arrivedQuantity">0 USDT</p>
    </div>

    <div class="flex justify-between items-center">
        <p class="text-sm text-gray-700">Withdraw Fee</p>
        <p class="text-sm text-gray-700" id="withdrawalFee">0 USDT</p>
    </div>

    <div class="flex justify-between items-center">
        <p class="text-sm text-gray-700">Minimum Withdraw Amount</p>
        <p class="text-sm text-gray-700">10 USDT</p>
    </div>

    <div class="flex justify-between items-center">
        <p class="text-sm text-gray-700">Maximum Withdraw Amount</p>
        <p class="text-sm text-gray-700">No Limit</p>
    </div>
</div> </form>

                                  </div>
                                  
                                
                            </div>
                            <div class="bg-white rounded-[16px] p-6 lg:col-span-2 xl:col-span-1">
                                <h3 class="font-semibold mb-3">History</h3>
                                <div class="space-y-4 h-full">
                                <?php if(is_array($withdraws) || is_object($withdraws)){ ?>
                                    <?php
                                        date_default_timezone_set('UTC');
                                        $cnt = 0; ?>
                                        @foreach ($withdraws as $value)
                                    <div class="flex justify-between items-center text-sm mb-4">
                                        <div class="flex">
                                            <div
                                                class="flex items-center justify-center rounded-[50%] bg-[#F9F9F9] w-[44px] h-[44px]">
                                                <img alt="IN Icon" loading="lazy" width="28" height="28"
                                                    decoding="async" data-nimg="1" src="{{ asset('') }}upnl/assets/icons/icon_down.svg"
                                                    style="color: transparent;"></div>
                                            <div class="ml-3">
                                                <p class="font-medium">{{$value['remarks']}}</p>
                                                <p class="text-secondary font-light text-sm">{{ date('D, d M Y H:i:s', strtotime($value['created_at'])) }}</p>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-green-500"><span>+{{ $value['comm'] }}</span></p>
                                        </div>
                                    </div>
                                    @endforeach

<?php }?>


<div class="pagination">

{{ $withdraws->withQueryString()->links() }}
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
    <!-- jQuery via CDN -->


    <script>
       document.getElementById('paymentMode').addEventListener('change', function() {
    let icon = this.value;

    let walletAddress = document.getElementById('walletAddress');
    if (icon === "USDT_TRX") {
        walletAddress.value = '{{ Auth::user()->usdtTrc20 }}';
    } else if (icon === "USDT_BSC") {
        walletAddress.value = '{{ Auth::user()->usdtBep20 }}';
    } else if (icon === "LTC") {
        walletAddress.value = '{{ Auth::user()->LTC }}';
    } else if (icon === "DOGE") {
        walletAddress.value = '{{ Auth::user()->DOGE }}';
    } else if (icon === "BCH") {
        walletAddress.value = '{{ Auth::user()->BCH }}';
    } else if (icon === "ETC") {
        walletAddress.value = '{{ Auth::user()->ETC }}';
    }
});

</script>
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
    const passwordField = document.getElementById('transaction-password');
    const togglePasswordButton = document.getElementById('toggle-password');
  
    togglePasswordButton.addEventListener('click', () => {
      // Toggle the type attribute
      const type = passwordField.type === 'password' ? 'text' : 'password';
      passwordField.type = type;
  
      // Change the button text/icon
      togglePasswordButton.textContent = type === 'password' ? '👁️' : '🙈';
    });
  </script>
    <script src="./_next/static/chunks/pages/signup-802f7e1bb51b64f2.js"></script><span id="PING_CONTENT_APS_BALLOON"
        style="display: none;"></span>
</body>
@include('partials.notify')
</html>