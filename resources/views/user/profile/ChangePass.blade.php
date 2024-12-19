<style>
  .input-container {
    display: flex; /* Arrange input and span horizontally */
    align-items: center; /* Align items vertically */
    gap: 10px; /* Space between input and span */
  }

  .input-field {
    flex: 1; /* Input takes up remaining space */
    padding: 10px;
    border: 1px solid #d1d5db; /* Light gray border */
    border-radius: 12px; /* Rounded corners */
    font-size: 14px; /* Adjust font size */
  }

  .code-btn {
    padding: 8px 16px;
    color: white; /* Text color */
    border-radius: 8px; /* Rounded corners */
    font-size: 14px; /* Match input font size */
    cursor: pointer; /* Pointer on hover */
    text-align: center;
  }

 

  /* Optional: Responsive adjustments */
  @media (max-width: 768px) {
    .input-container {
      flex-direction: column; /* Stack input and button vertically */
      align-items: stretch; /* Stretch to container width */
    }

    .code-btn {
      width: 100%; /* Full-width button */
      text-align: center;
    }
  }
</style>    







                    <div
                        class="flex-1 overflow-y-auto px-4 md:px-10 lg:px-10 xl:px-20 pt-5 pb-[88px] md:pb-[20px] bg-[#F1F1F1]">
                        <div class="w-full mt-10 flex justify-center text-primary">
                            <div class="max-w-[1920px] w-full">
                                <div
                                    class="w-full relative max-w-[669px] pb-[46px] text-center pt-[36px] bg-[#FFF]
                                     rounded-[16px] mx-auto mt-[100px]">
                                    <div class="w-[100px] h-[100px] rounded-full mx-auto text-[72px] font-semibold"
                                        style="background: rgb(51, 255, 87); font-family: ClashDisplay-Semibold;">{{substr(Auth::user()->name, 0, 1)}}
                                    </div>
                                    
                                    
                                    <a href="{{route('user.ChangeMail')}}" class="absolute right-10 top-10" fdprocessedid="3cbwdh"
   id="profileShow"><img alt="Edit Icon" loading="lazy" width="28" height="28"
   decoding="async" data-nimg="1" src="{{ asset('') }}upnl/assets/icons/icon-referrals.svg"
   style="color: transparent;"></a>


                                            
                                    <div class="mx-auto w-full text-primary text-[28px] font-semibold "
                                        style="font-family: ClashDisplay-Semibold;">{{Auth::user()->name}}!</div>
                                    <div class="mx-auto w-full text-secondary text-sm mb-[60px]">
                                    {{Auth::user()->email}}!</div>
                                        <div class="flex flex-wrap md:flex-nowrap mx-auto w-full justify-center">
    <button
        class="rounded-[30px] h-[48px] py-3 px-6 bg-[#F1F1F1] md:mr-2 mb-2"
        id="show">Login Password</button>
        <a
    class="rounded-[30px] h-[48px] py-3 px-6 bg-[#F1F1F1] md:mr-2 flex items-center justify-center"
    href="{{route('user.tpassword')}}"> Change  Trx Password</a>
</div>
                                </div>
                                

                          




                            </div>
                            <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50"
                                style="display: none;" id="popup">

                                <form method="post" action="{{ route('user.edit-password') }}">
                                {{ csrf_field() }}
                                <div class="bg-white rounded-[20px] w-[400px] px-8 pt-10 pb-6 text-center relative">
                                    <h2 class="text-lg font-semibold">Change Password</h2>
                                    <div class="mb-4 mt-8 text-left">
                                        <label class="block text-gray-600 mb-1">Email
                                            </label>
                                            <input data-v-9d2ee7be=""
                                        data-v-cfc9a7fc="" type="" placeholder="Please enter the new password"
                                        value="{{ Auth::user()->email }}" id="emailId" name="emailId" class="w-full px-3 py-2 border border-gray-300 rounded-[12px]">
                                        </div>
                                    <div class="mb-4 mt-8 text-left">
                                        <label class="block text-gray-600 mb-1">Verification Code
                                            </label>
                                            <div class="input-container" style="position: relative; width: 100%;">
  <input 
    data-v-9d2ee7be="" 
    data-v-cfc9a7fc="" 
    type="text"  
    name="code"
    placeholder="Enter verification code" 
    maxlength="" 
    class="w-full px-3 py-2 border border-gray-300 rounded-[12px] pr-20 "
    style="width: 100%;"
  >
  <span 
    class="code-btn" 
    style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer; color: gray;">
    @lang('Get Code')
  </span>
</div>

                                    <div class="mb-4 mt-4 text-left"><label class="block text-gray-600 mb-1">New 
                                            Password</label><input data-v-9d2ee7be=""
                                        data-v-cfc9a7fc="" type="password"
                                        placeholder="Please enter the new password" name="password"  class="w-full px-3 py-2 border border-gray-300 rounded-[12px]"></div>

                                    <div class="mb-4 mt-4 text-left"><label class="block text-gray-600 mb-1">Confirm 
                                            Password</label><input data-v-9d2ee7be=""
                                        data-v-cfc9a7fc="" type="password"
                                        placeholder="Enter the password again to confirm"
                                        name="password_confirmation" class="w-full px-3 py-2 border border-gray-300 rounded-[12px]"></div>


                                    <div class="mt-10"><button
                                            class="w-full h-[46px] mb-2 px-4 py-2 rounded-[30px] bg-black text-white">Confirm</button>
                                            <a href="{{ route('user.profile-setting') }}" 
   class="w-full h-[46px] px-4 py-2 rounded-[30px] bg-gray-300 inline-block text-center">
   Cancel
</a>
                                    </div>


                                </div>
    </form>
                            </div>
                            <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50"
                                id="popup2" style="display: none;">
                                <div class="bg-white rounded-[20px] w-[400px] px-8 pt-10 pb-6 text-center relative">
                                    <h2 class="text-lg font-semibold">Edit Profile</h2>
                                    <div class="w-[100px] my-10 h-[100px] mx-auto cursor-pointer">
                                        <div class="w-full h-full rounded-full mx-auto text-[72px] font-semibold"
                                            style="background: rgb(51, 87, 255); font-family: ClashDisplay-Semibold;">R
                                        </div>
                                    </div>
                                    <div class="mb-4 text-left"><label
                                            class="block text-gray-600 mb-1">Name</label><input type="text"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-[12px]"
                                            placeholder="Enter Full Name" value="Rajnesh Kumar"></div>
                                    <div class="mt-10"><button
                                            class="w-full h-[46px] mb-2 px-4 py-2 rounded-[30px] bg-black text-white">Save</button><button
                                            class="w-full h-[46px] px-4 py-2 rounded-[30px] bg-gray-300"
                                            id="profileHide">Cancel</button>
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

    <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>

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

    <script id="_next-ga-init" data-nscript="afterInteractive">
        window['dataLayer'] = window['dataLayer'] || [];

        function gtag() {
            window['dataLayer'].push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-5PPR32GMM8');
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $("#hide").click(function () {
            $("#popup").hide();
        });

        $("#show").click(function () {
            $("#popup").show();
        });
        $("#profileHide").click(function () {
            $("#popup2").hide();
        });

        $("#profileShow").click(function () {
            $("#popup2").show();
        });
    </script>
       @include('partials.notify')

    <script src="https://www.googletagmanager.com/gtag/js?id=G-5PPR32GMM8" id="_next-ga"
        data-nscript="afterInteractive"></script>
    <next-route-announcer>
        <p aria-live="assertive" id="__next-route-announcer__" role="alert"
            style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; top: 0px; width: 1px; white-space: nowrap; overflow-wrap: normal;">
            Profile - MeshChain</p>
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