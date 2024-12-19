






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
                               <center>     <h3 class="font-semibold mb-3">@lang('Change Email')</h3></center>
                                   
                               <form method="post" action="{{ route('user.changeEmailAction') }}   ">
                               {{ csrf_field() }}                                  <!-- Replace /submit-wallet with your form submission URL -->
                                      <div class="mb-4">
                                        <label for="amount" class="block text-gray-700 font-medium mb-2">@lang('Email')</label>
                                      
                                        <input data-v-f8e71db0=""  type="email" name="email" readonly="" 
                                        style="width: 100%;"  value="{{Auth::user()->email}}" class="w-full px-3 py-2 border border-gray-300 rounded-[12px]">
                                      </div>
                                      


                                                   <div class="mb-4">
                                        <label for="amount" class="block text-gray-700 font-medium mb-2">@lang('Verification Code')</label>
                                      
                                        <div class="input-container" style="position: relative; width: 100%;">
  <input 
    data-v-9d2ee7be="" 
    data-v-cfc9a7fc="" 
    type="text"  
    name="first_code"
    placeholder="Enter verification code" 
    maxlength="" 
    class="w-full px-3 py-2 border border-gray-300 rounded-[12px] pr-20"
    style="width: 100%;"
  >
  <span 
    class="code-btn" 
    style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer; color: gray;">
    @lang('Get Code')
  </span>
</div>



                                      <div class="mb-4">
                                        <label for="amount" class="block text-gray-700 font-medium mb-2">@lang('New Email')</label>
                                      
                                        <input data-v-9d2ee7be=""
                                        data-v-cfc9a7fc="" type="email" id="passwordInput" placeholder="Please enter the new email"
                                        name="newEmail" class="w-full px-3 py-2 border border-gray-300 rounded-[12px]">
                              


                                      </div>
                                      <div class="mb-4">
                                        <label for="amount" class="block text-gray-700 font-medium mb-2">@lang('Verification Code')</label>
                                        <div class="input-container" style="position: relative; width: 100%;">
  <input 
    data-v-9d2ee7be="" 
    data-v-cfc9a7fc="" 
    type="text"  
    name="second_code"
    placeholder="Enter verification code" 
    maxlength="" 
    class="w-full px-3 py-2 border border-gray-300 rounded-[12px] pr-20"
    style="width: 100%;"
  >
  <span 
    class="code-btn" 
    style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer; color: gray;">
    @lang('Get Code')
  </span>
</div>



                                      <!-- <div class="mb-4">
                                        <label for="amount" class="block text-gray-700 font-medium mb-2">Wallet Address</label>
                                        <input type="number" id="amount" name="amount" placeholder="Enter Wallet Address"
                                          class="w-full px-3 py-2 border border-gray-300 rounded-[12px]" required>
                                      </div> -->
</br></br>
                                      <div class="text-right">
                                        <button type="submit" style="background-color: rgb(34 197 94);" 
                                        class="w-full h-[46px] px-4 py-2 rounded-[30px] bg-gray-300"
                                        styel>
                                        Confirm
                                        </button>


                                        </br>
</br>
<a href="{{ route('user.profile-setting') }}" 
   class="w-full h-[46px] px-4 py-2 rounded-[30px] bg-gray-300 inline-block text-center">
   Cancel
</a>
                                        
                                      </div>
                                    </form>
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


    <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>


<script>

        $('.first-code-send').click(function(e) {
            var ths = $(this);
            $(ths).text('waiting');
 
            $.ajax({
                type: "POST"
                , url: "{{ route('user.send_code') }}"
                , data: {
                    "emailId": ""
                    , "_token": "{{ csrf_token() }}"
                , }
                , success: function(response) {
                    // alert(response);      
                    if (response) {
                        $(ths).text('Get Code');
                        iziToast.success({
                        message: 'Email send Successfully',
                        position: "center"
                    });
                    } else {
                        // alert("hi");
                        iziToast.error({
                        message: 'Error!',
                        position: "center"
                    });
                    }
                }
            });
        });

        $('.sencond-code-send').click(function(e) {
            var ths = $(this);
            $(ths).text('waiting');
            var emailId = $('#emailId').val();
       
            if (!emailId) 
            {
                $(ths).text('Get Code');
                iziToast.error({
                        message: 'Invalid Email!',
                        position: "center"
                    });
                    return false;
            }
            // alert(sponsor); 
            $.ajax({
                type: "POST"
                , url: "{{ route('user.send_code') }}"
                , data: {
                    "emailId": emailId
                    , "_token": "{{ csrf_token() }}"
                , }
                , success: function(response) {
                    // alert(response);      

                    $(ths).text('Get Code');
                    if (response) {
                     
                        iziToast.success({
                        message: 'Email send Successfully',
                        position: "center"
                    });
                    } else {
                        // alert("hi");
                        iziToast.error({
                        message: 'Error!',
                        position: "center"
                    });
                    }
                }
            });
        });

            </script>

@include('partials.notify')










    <script>
        $(document).ready(function () {

            $('#check').click(function () {

                if ($(this).hasClass('fa-eye-slash')) {

                    $(this).removeClass('fa-eye-slash');

                    $(this).addClass('fa-eye');

                    $('#test-input').attr('type', 'text');

                } else {

                    $(this).removeClass('fa-eye');

                    $(this).addClass('fa-eye-slash');

                    $('#test-input').attr('type', 'password');
                }
            });

        });
    </script>

    <script>
        function togglePasswordVisibility() {
            // alert(0);
            var passwordInput = document.getElementById('passwordInput');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        }
 function togglePasswordVisibility2() {
            // alert(0);
            var passwordInput = document.getElementById('passwordInput2');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        }



    </script>

    <script>
    
        $('.code-btn').click(function(e) {
            var ths = $(this);
            var emailId = $('#emailId').val();
            $(ths).text("waiting");
          
            // alert(sponsor); 
            $.ajax({
                type: "POST"
                , url: "{{ route('user.send_code') }}"
                , data: {
                    "emailId": ""
                    , "_token": "{{ csrf_token() }}"
                , }
                , success: function(response) {
                    $(ths).text("Get Code");    
                    if (response) {
                        // alert("hh");
                        iziToast.success({
                        message: 'Email send Successfully',
                        position: "center"
                    });
                    } else {
                        // alert("hi");
                        iziToast.error({
                        message: 'Error!',
                        position: "center"
                    });
                    }
                }
            });
        });
            </script>

</body>



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
    <script src="{{ asset('') }}upnl/_next/static/chunks/pages/index-ee3997ecd6058818.js"></script>
    <script src="{{ asset('') }}upnl/_next/static/chunks/180-23154d61c0670ef4.js"></script>
    <script src="{{ asset('') }}upnl/_next/static/chunks/pages/nodes-dbc2ec71a71e759c.js"></script>
    <script src="{{ asset('') }}upnl/_next/static/chunks/pages/rewards-68123406f92ce1f1.js"></script>
    <script src="{{ asset('') }}upnl/_next/static/chunks/pages/referrals-c3a72b71d4f8ff2f.js"></script>
    <script src="{{ asset('') }}upnl/_next/static/chunks/pages/wallet-65f0dabf677342f6.js"></script>
    <script src="{{ asset('') }}upnl/_next/static/chunks/pages/profile-6284106fb2e47cd9.js"></script>
    <script src="{{ asset('') }}upnl/_next/static/chunks/pages/contact-74f7108b54563e66.js"></script>
    <script src="{{ asset('') }}upnl/_next/static/chunks/568-b59724e58497c3b9.js"></script>
    <script src="{{ asset('') }}upnl/_next/static/chunks/pages/wallet/deposit-1ee2cf425e02648e.js"></script><span
        id="PING_IFRAME_FORM_DETECTION" style="display: none;"></span>
    <script src="{{ asset('') }}upnl/_next/static/chunks/pages/login-be43bc61ed9c8e2b.js"></script>
    <script src="{{ asset('') }}upnl/_next/static/chunks/pages/forgot_password-47e935679b1e2ca0.js"></script>
    <script src="{{ asset('') }}upnl/_next/static/chunks/pages/signup-802f7e1bb51b64f2.js"></script><span id="PING_CONTENT_APS_BALLOON"
        style="display: none;"></span>
</body>

</html>