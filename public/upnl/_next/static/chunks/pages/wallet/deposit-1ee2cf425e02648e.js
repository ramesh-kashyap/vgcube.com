(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[786],{9254:function(e,t,s){(window.__NEXT_P=window.__NEXT_P||[]).push(["/wallet/deposit",function(){return s(2224)}])},4582:function(e,t,s){"use strict";s.d(t,{Z:function(){return c}});var a=s(4817),n=s(5106),r=s(6505),l=s(8398);function c(e){let{balance:t,token:s,suffix:c,decimalScale:i}=e,o="string"==typeof s?r.no[s]:s,d=(0,r.NV)(o,t),u=o?o.DisplayDecimalScale:l.bt;return i&&i>0&&(u=i),(0,a.jsx)(n.h3,{value:d,displayType:"text",decimalScale:u,thousandSeparator:",",suffix:c})}},719:function(e,t,s){"use strict";s.d(t,{D_:function(){return a},lK:function(){return n}});let a="DEPOSIT",n={AIRDROP:"Airdrop",REFERRAL:"Referral",WITHDRAW:"Withdraw",WITHDRAW_FEE:"Withdraw Fee",[a]:"Deposit",MINING:"Mining",FEE_CLAIM:"Mining Fee",MISSION:"Finish Task",TRANSFER:"Transfer",MIGRATE:"Connect Accounts"}},3970:function(e,t,s){"use strict";s.d(t,{Z:function(){return j}});var a=s(4817),n=s(2786),r=s(6895),l=s(8071);let c=function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:1,t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:100,s=arguments.length>2?arguments[2]:void 0,{data:a,error:c,isLoading:i,mutate:o}=(0,r.ZP)("/meshmain/transactions?page=".concat(e,"&page_size=").concat(t,"&source_ref=").concat(null!=s?s:""),async e=>{try{return(await (0,n._i)(e)).data}catch(e){throw(0,l.C)(e)}});return{transactions:(null==a?void 0:a.items)||[],total:(null==a?void 0:a.total)||0,loading:i,mutate:o,error:c}};var i=s(8735),o=s.n(i),d=s(1248),u=s(5019),x=s.n(u),m=s(2640),h=s.n(m),p=s(4582),f=s(5106),g=s(719),y=s(2801);let w=(0,d.forwardRef)((e,t)=>{let{sourceRef:s,className:n}=e,{transactions:r,mutate:l}=c(1,10,s);x().extend(h());let i=e=>x().unix(e).fromNow();return(0,d.useImperativeHandle)(t,()=>({mutate:()=>l()})),(0,a.jsxs)("div",{className:(0,y.Z)("bg-white rounded-[16px] p-6",n),children:[(0,a.jsx)("h3",{className:"font-semibold mb-3",children:"History"}),(0,a.jsx)("div",{className:"space-y-4 h-full",children:r&&r.length>0?r.map(e=>{var t;return(0,a.jsxs)("div",{className:"flex justify-between items-center text-sm mb-4",children:[(0,a.jsxs)("div",{className:"flex",children:[(0,a.jsx)("div",{className:"flex items-center justify-center rounded-[50%] bg-[#F9F9F9] w-[44px] h-[44px]",children:(0,a.jsx)(o(),{width:28,height:28,src:"OUT"===e.type?"/assets/icons/icon_up.svg":"/assets/icons/icon_down.svg",alt:"".concat(e.type," Icon")})}),(0,a.jsxs)("div",{className:"ml-3",children:[(0,a.jsx)("p",{className:"font-medium",children:null!==(t=g.lK[e.source_ref])&&void 0!==t?t:e.source_ref}),(0,a.jsx)("p",{className:"text-secondary font-light text-sm",children:i(e.created_at)})]})]}),(0,a.jsxs)("div",{className:"text-right",children:[(0,a.jsxs)("p",{className:"text-".concat("IN"===e.type?"green-500":"red-500"),children:["IN"===e.type?"+":"-",(0,a.jsx)(p.Z,{token:e.token.address,balance:e.amount,suffix:" "+e.token.symbol})]}),e.amount_usd&&e.amount_usd>0?(0,a.jsx)("p",{className:"text-secondary font-normal",children:(0,a.jsx)(f.h3,{value:e.amount_usd,displayType:"text",decimalScale:3,thousandSeparator:",",prefix:"$"})}):null]})]},e.id)}):(0,a.jsx)("div",{className:"flex h-full justify-center items-center w-full text-secondary",children:(0,a.jsxs)("div",{className:"w-full text-center",children:[(0,a.jsx)(o(),{className:"mx-auto mb-2",src:"/assets/images/empty_state.svg",alt:"Icon Empty",width:64,height:40}),(0,a.jsx)("span",{children:"No transactions found"})]})})})]})});w.displayName="TransactionHistory";var j=w},2224:function(e,t,s){"use strict";s.r(t),s.d(t,{__N_SSG:function(){return F},default:function(){return D}});var a,n=s(4817),r=s(1248),l=s(3590),c=s(2672),i=s(4953),o=s(7250),d=s(4419),u=s(3259),x=s(8735),m=s.n(x),h=s(6505);(a||(a={})).BSC="BSC";let p=h.ZD;var f=s(8071),g=s(2786),y=s(4878);let w=new(s(5844)).r6("https://bsc-dataseed.binance.org/");async function j(e,t){if(e===a.BSC)return BigInt((await w.getBalance(t)).toString());throw Error("Network not supported")}var v=s(7518),b=s.n(v),N=s(719),S=s(3970),_=s(6895),k=s(990),C=e=>{let{isOpen:t,onClose:s}=e,[l,c]=(0,r.useState)(a.BSC),[i,o]=(0,r.useState)(h.ZD.Address),[d,x]=(0,r.useState)(""),{submit:m,loading:p}=function(){let[e,t]=(0,r.useState)(!1),{trigger:s,error:a}=(0,y.Z)("/meshmain/deposit/submit_transaction",async function(e,s){let{arg:a}=s;t(!0);try{let t=await (0,g.CL)(e,{network:a.network,token:a.token,tx_hash:a.tx_hash});return t.data?t.data.data.length:0}catch(e){throw(0,f.C)(e)}finally{t(!1)}});return{submit:s,loading:e,error:a}}(),w=async()=>{if(!l){u.Am.error("Please select a network.");return}if(!i){u.Am.error("Please select a token.");return}if(!d){u.Am.error("Please enter a valid transaction hash.");return}try{let e=await m({network:l,token:i,tx_hash:d});u.Am.success("".concat(e," transactions submitted successfully!")),e&&s(),x(""),s()}catch(e){u.Am.error((null==e?void 0:e.message)||"Failed to submit the transaction. Please try again.")}};return t?(0,n.jsx)("div",{className:"fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50",children:(0,n.jsxs)("div",{className:"bg-white relative rounded-[20px] w-[585px] px-10 pt-12 pb-6 max-w-[90%]",children:[(0,n.jsx)("button",{onClick:()=>{x(""),s()},className:"text-gray-500 absolute text-[32px] right-5 top-5 hover:text-primary focus:outline-none",children:"\xd7"}),(0,n.jsx)("div",{className:"flex justify-between text-center items-center mb-4",children:(0,n.jsx)("h2",{className:"text-xl w-full font-bold",children:"Submit Transaction"})}),(0,n.jsx)("p",{className:"text-sm text-secondary text-center mb-4",children:"Select the your transaction info to submit the unrecorded transactions."}),(0,n.jsxs)("div",{className:"mb-4",children:[(0,n.jsx)("label",{className:"block text-sm font-medium text-gray-700 mb-2",children:"Select network"}),(0,n.jsx)("select",{value:l,onChange:e=>c(e.target.value),className:"w-full px-4 py-2 border rounded-lg",children:(0,n.jsx)("option",{value:a.BSC,children:"BNB Smart Chain (Bep20)"})})]}),(0,n.jsxs)("div",{className:"mb-4",children:[(0,n.jsx)("label",{className:"block text-sm font-medium text-gray-700 mb-2",children:"Select Token"}),(0,n.jsx)("select",{value:i,onChange:e=>o(e.target.value),className:"w-full px-4 py-2 border rounded-lg",children:(0,n.jsx)("option",{value:h.ZD.Address,children:h.ZD.Symbol})})]}),(0,n.jsxs)("div",{className:"mb-10",children:[(0,n.jsx)("label",{className:"block text-sm font-medium text-gray-700 mb-2",children:"Your Transaction Hash"}),(0,n.jsx)("input",{type:"text",placeholder:"Eg: 0xe7769c3...",value:d,onChange:e=>x(e.target.value),className:"w-full p-2 border rounded-lg"})]}),(0,n.jsx)("div",{className:"flex justify-end",children:(0,n.jsx)("button",{onClick:w,disabled:p,className:"w-full px-4 py-2 rounded-[30px] h-[46px] bg-[#171717] text-white hover:bg-gray-800",children:p?"Submitting...":"Submit"})})]})}):null};function A(e){return"/meshmain/wallet/account/".concat(e)}var E=s(1592),I=()=>{let{mutate:e}=(0,_.kY)(),t=a.BSC,{address:s}=function(e){let{data:t,mutate:s}=(0,_.ZP)(A(e),async function(e){var t,s;try{let s=await (0,g._i)(e);return null===(t=s.data)||void 0===t?void 0:t.address}catch(e){if((null===(s=e.response)||void 0===s?void 0:s.status)===409)return null;throw(0,f.C)(e)}});return{address:t,mutate:s}}(t),{create:l}=function(e){let[t,s]=(0,r.useState)(!1),{trigger:a,error:n}=(0,y.Z)(A(e),async function(e){try{var t;s(!0);let a=await (0,g.CL)(e,null);return null===(t=a.data)||void 0===t?void 0:t.address}catch(e){throw(0,f.C)(e)}finally{s(!1)}},{populateCache:!0,optimisticData:!0});return{create:a,error:n,loading:t}}(t),{pull:c}=function(e,t){let[s,a]=(0,r.useState)(!1),{trigger:n,error:l}=(0,y.Z)("/meshmain/deposit/pull_transaction/".concat(e,"/").concat(t),async function(e){a(!0);try{let t=await (0,g.CL)(e,null);return t.data?t.data.data.length:0}catch(e){throw(0,f.C)(e)}finally{a(!1)}});return{pull:n,loading:s,error:l}}(t,p.Address),{getBalance:i}=function(e){let{trigger:t,error:s}=(0,y.Z)("".concat(e,"/account/balance"),async function(t,s){let{arg:a}=s;try{return j(e,a)}catch(e){throw(0,f.C)(e)}});return{getBalance:t,error:s}}(t),o=(0,r.useRef)(null),[x,h]=(0,r.useState)(!1),w=()=>{o.current&&o.current.mutate()};(0,r.useEffect)(()=>{void 0===s||s||l().then().catch(e=>{console.error("Cannot create wallet account",e),u.Am.error("Your wallet is not available at this time, please try again later")})},[s,l]),(0,r.useEffect)(()=>{if(!s)return;let t=setInterval(async()=>{try{if(await i(s)>0){let t=await c();t>0&&(u.Am.success("Great, ".concat(t," transactions have been recorded!")),w(),await e((0,k.t)()))}}catch(e){console.error("Error when pull transaction:",e),await new Promise(e=>setTimeout(e,5e3))}},5e3);return()=>clearInterval(t)},[s,i,e,c]);let v=async()=>{w(),await e((0,k.t)()),h(!1)};return(0,n.jsxs)("div",{children:[(0,n.jsx)("div",{className:"flex justify-between",children:(0,n.jsxs)(b(),{href:"/wallet",className:"text-white text-sm rounded-[22px] h-[33px] px-3 bg-black mb-4 mt-10 flex items-center space-x-2",children:[(0,n.jsx)(m(),{width:17,height:12,src:"/assets/icons/icon-back.svg",alt:"Back Icons"}),(0,n.jsx)("span",{children:"Back"})]})}),(0,n.jsxs)("div",{className:"grid grid-cols-1 lg:grid-cols-5 xl:grid-cols-3 gap-6",children:[(0,n.jsxs)("div",{className:"lg:col-span-3 xl:col-span-2 bg-white rounded-[16px] p-6",children:[(0,n.jsx)("h2",{className:"text-xl font-bold mb-8",children:"Deposit"}),(0,n.jsxs)("div",{className:"flex flex-col items-center",children:[(0,n.jsx)("p",{className:"w-[335px] max-w-[335px] text-secondary text-center font-normal text-sm",children:"Please only send BNB to this address. Depositing any other tokens will result in a loss of funds."}),(0,n.jsxs)("div",{className:"w-fit mt-5 p-10 bg-[#F9F9F9] rounded-[20px]",children:[s?(0,n.jsx)(d.QRCode,{logoImage:"/assets/icons/logo_bnb_square.svg",size:240,value:String(s),qrStyle:"dots"}):(0,n.jsx)(E.Z,{width:240,height:240}),(0,n.jsx)("p",{className:"text-[#373737] mt-5 text-center",children:"Binance Smart Chain"})]})]}),(0,n.jsx)("div",{className:"flex items-center justify-center w-full",children:(0,n.jsx)("div",{className:"bg-[#F9F9F9] mt-5 p-3 w-[335px] max-w-[335px] rounded-[20px] flex items-center justify-between",children:s?(0,n.jsxs)(n.Fragment,{children:[(0,n.jsxs)("div",{className:"break-all text-secondary text-[14px] font-medium flex flex-col gap-1",style:{width:"calc(100% - 100px)"},children:[(0,n.jsx)("p",{children:"Deposit Address"}),(0,n.jsx)("p",{className:"text-primary",children:s})]}),(0,n.jsx)("button",{onClick:()=>{s&&navigator.clipboard.writeText(String(s)).then(()=>{u.Am.success("Address copied to clipboard!")}).catch(()=>{u.Am.error("Failed to copy address!")})},disabled:!s,className:"bg-green-500 min-w-[90px] h-[46px] rounded-[30px] text-white px-4 py-2",children:"Copy"})]}):(0,n.jsx)(E.Z,{})})}),(0,n.jsxs)("p",{className:"text-sm text-center text-secondary mt-4",children:["Transaction not recorded?"," ",(0,n.jsx)("a",{href:"#",onClick:()=>h(!0),className:"text-primary underline",children:"Submit it here"})]})]}),(0,n.jsx)(S.Z,{className:"lg:col-span-2 xl:col-span-1",ref:o,sourceRef:N.D_}),(0,n.jsx)(C,{isOpen:x,onClose:v})]})]})};let T=()=>{let e=new l.S({defaultOptions:{queries:{staleTime:1/0}}});return(0,n.jsxs)(c.aH,{client:e,children:[(0,n.jsx)(o.h,{title:"Deposit - Meshchain",description:""}),(0,n.jsx)(I,{})]})};T.getLayout=e=>(0,n.jsx)(i.Z,{children:e});var F=!0,D=T}},function(e){e.O(0,[454,962,730,106,878,568,953,888,774,179],function(){return e(e.s=9254)}),_N_E=e.O()}]);