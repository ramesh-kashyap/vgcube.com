"use strict";(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[180],{4582:function(e,s,t){t.d(s,{Z:function(){return a}});var i=t(4817),n=t(5106),l=t(6505),c=t(8398);function a(e){let{balance:s,token:t,suffix:a,decimalScale:d}=e,r="string"==typeof t?l.no[t]:t,o=(0,l.NV)(r,s),x=r?r.DisplayDecimalScale:c.bt;return d&&d>0&&(x=d),(0,i.jsx)(n.h3,{value:o,displayType:"text",decimalScale:x,thousandSeparator:",",suffix:a})}},8747:function(e,s,t){t.d(s,{O:function(){return f},Z:function(){return p}});var i=t(4817),n=t(1248),l=t(8735),c=t.n(l),a=t(6895),d=t(2786),r=t(8071),o=t(6497),x=t(1147),h=t(6505),m=t(4582);let u={telegram:"Telegram Node",browser:"Browser Node",software:"Software Node",device:"Dedicated Node"},f=e=>{let s=Math.floor(e/3600),t=Math.floor((e%=3600)/60);return"".concat(s," hr, ").concat(t," min")};var p=()=>{let[e,s]=(0,n.useState)("All"),[t,l]=(0,n.useState)(!1),{data:f}=function(){let[e,s]=(0,n.useState)(!0),{data:t}=(0,a.ZP)("/meshmain/nodes?page=1&limit=100",async function(e){try{return s(!0),(await (0,d._i)(e)).data.devices}catch(e){throw(0,r.C)(e)}finally{s(!1)}});return{data:t,loading:e}}(),p=(0,o.useRouter)(),g=null==f?void 0:f.filter(s=>"All"===e||s.status===e),[j,N]=(0,n.useState)(!1),v=e=>{s(e),N(!1)},b=e=>{p.push("/nodes/".concat(e))},y=()=>{l(!t)},w=e=>{let s=Math.floor(e/3600),t=Math.floor((e%=3600)/60);return"".concat(s," hr, ").concat(t," min")};return(0,i.jsx)("div",{className:"w-full mt-10 flex justify-center text-primary",children:(0,i.jsxs)("div",{className:"w-full max-w-[1440px] rounded-lg",children:[(0,i.jsxs)("div",{className:"flex justify-between mb-4 items-center",children:[(0,i.jsxs)("button",{className:"px-3 flex items-center h-[34px] bg-[#171717] rounded-[22px] text-[14px] text-white",onClick:y,children:[(0,i.jsx)(c(),{src:"/assets/icons/add_node.svg",alt:"Add Node Icon",width:16,height:16,className:"mr-1"}),"New Node"]}),(0,i.jsxs)("div",{className:"relative",children:[(0,i.jsx)("button",{onClick:()=>{N(!j)},className:"px-3 h-[34px] bg-white rounded-full shadow",children:(0,i.jsx)(c(),{src:"/assets/icons/bars-filter.svg",alt:"Filter Icon",width:16,height:16})}),j&&(0,i.jsxs)("div",{className:"absolute top-10 right-0 bg-white rounded-[12px] shadow-md text-gray-700 w-32",children:[(0,i.jsx)("div",{className:"px-4 py-2 cursor-pointer hover:bg-gray-100 ".concat("All"===e?"font-semibold":""),onClick:()=>v("All"),children:"All"}),(0,i.jsx)("div",{className:"px-4 py-2 cursor-pointer hover:bg-gray-100 ".concat("Online"===e?"font-semibold":""),onClick:()=>v("online"),children:"Online"}),(0,i.jsx)("div",{className:"px-4 py-2 cursor-pointer hover:bg-gray-100 ".concat("Offline"===e?"font-semibold":""),onClick:()=>v("offline"),children:"Offline"})]})]})]}),(0,i.jsxs)("div",{className:"bg-white mb-3 p-4 rounded-[16px] font-semibold text-gray-600 text-center",children:[(0,i.jsxs)("div",{className:"hidden md:grid grid-cols-5 lg:grid-cols-6",children:[(0,i.jsx)("div",{className:"text-left",children:"Node"}),(0,i.jsx)("div",{className:"hidden lg:inline-block",children:"Unique ID"}),(0,i.jsx)("div",{children:"Status"}),(0,i.jsx)("div",{children:"Hash Rate"}),(0,i.jsx)("div",{children:"Total Uptime"}),(0,i.jsx)("div",{className:"text-right",children:"Today Rewards"})]}),(0,i.jsxs)("div",{className:"grid grid-cols-2 sm:grid-cols-3 md:hidden",children:[(0,i.jsx)("div",{className:"text-left",children:"Node"}),(0,i.jsx)("div",{className:"text-right",children:"Status"}),(0,i.jsx)("div",{className:"text-right hidden sm:block",children:"Today Rewards"})]})]}),(0,i.jsx)("div",{className:"space-y-4",children:(null==g?void 0:g.length)?g.map(e=>(0,i.jsxs)("div",{className:"bg-white p-3 rounded-[16px] shadow transition-transform hover:shadow-md cursor-pointer",onClick:()=>b(e.id),children:[(0,i.jsxs)("div",{className:"hidden md:grid grid-cols-5 lg:grid-cols-6 items-center",children:[(0,i.jsxs)("div",{className:"flex items-center space-x-3",children:[(0,i.jsx)("div",{className:"w-8 h-8 ".concat(e.is_linked?"bg-green-500":"bg-gray-200"," rounded-full flex items-center justify-center text-white text-sm font-semibold"),children:(0,i.jsx)(c(),{src:"/assets/icons/node-icon-".concat(e.type,".svg"),alt:"Node Icon",width:16,height:16})}),(0,i.jsxs)("div",{children:[(0,i.jsx)("p",{className:"text-sm font-medium",children:e.name}),(0,i.jsx)("p",{className:"text-xs text-[#999999]",children:u[e.type]})]})]}),(0,i.jsx)("p",{className:"hidden lg:block text-sm text-center font-medium",children:function(e,s,t){if(e.length<=12)return e;let i=e.slice(0,4),n=e.slice(-8);return"".concat(i,"...").concat(n)}(e.unique_id,0,0)}),(0,i.jsx)("div",{className:"flex justify-center",children:(0,i.jsxs)("span",{className:"flex px-[6px] py-1 rounded-full text-xs ".concat("online"!==e.status?"bg-[#FFC2BF]":"bg-[#C4FFC8]"),children:[(0,i.jsx)(c(),{src:"online"===e.status?"/assets/icons/check-circle.svg":"/assets/icons/cross-circle.svg",alt:"Status Icon",width:16,height:16,className:"mr-1"}),(0,x.f)(e.status)]})}),(0,i.jsx)("div",{className:"flex justify-center",children:(0,i.jsxs)("p",{className:"text-sm w-fit text-center px-3",children:[e?e.hash_rate:0," TH/s"]})}),(0,i.jsx)("div",{className:"flex justify-center",children:(0,i.jsx)("p",{className:"text-sm w-fit text-center px-3 bg-[#F1F1F1] rounded-full",children:e?w(e.total_uptime):0})}),(0,i.jsxs)("div",{className:"text-right",children:[(0,i.jsx)("p",{className:"text-lg font-semibold",children:(0,i.jsx)(m.Z,{token:h.yA,balance:e.today_reward,suffix:"pt"})}),(0,i.jsxs)("p",{className:"text-xs",children:["Total: ",(0,i.jsx)(m.Z,{token:h.yA,balance:e.total_reward,suffix:"pt"})]})]})]}),(0,i.jsxs)("div",{className:"grid grid-cols-2 sm:grid-cols-3 md:hidden items-center",children:[(0,i.jsxs)("div",{className:"flex items-center space-x-3",children:[(0,i.jsx)("div",{className:"w-8 h-8 ".concat(e.is_linked?"bg-green-500":"bg-gray-200"," rounded-full flex items-center justify-center text-white text-sm font-semibold"),children:(0,i.jsx)(c(),{src:"/assets/icons/node-icon-".concat(e.type,".svg"),alt:"Node Icon",width:16,height:16})}),(0,i.jsxs)("div",{children:[(0,i.jsx)("p",{className:"text-sm font-medium",children:e.name}),(0,i.jsx)("p",{className:"text-xs  text-[#999999] ",children:u[e.type]})]})]}),(0,i.jsx)("div",{className:"flex justify-end",children:(0,i.jsxs)("span",{className:"flex px-[6px] py-1 rounded-full text-xs  ".concat("online"!==e.status?"bg-[#FFC2BF]":"bg-[#C4FFC8]"),children:[(0,i.jsx)(c(),{src:"online"===e.status?"/assets/icons/check-circle.svg":"/assets/icons/cross-circle.svg",alt:"Status Icon",width:16,height:16,className:"mr-1"}),(0,x.f)(e.status)]})}),(0,i.jsxs)("div",{className:"text-right hidden sm:block",children:[(0,i.jsx)("p",{className:"text-lg font-semibold",children:(0,i.jsx)(m.Z,{token:h.yA,balance:e.today_reward,suffix:"pt"})}),(0,i.jsxs)("p",{className:"text-xs",children:["Total: ",(0,i.jsx)(m.Z,{token:h.yA,balance:e.total_reward,suffix:"pt"})]})]})]})]},e.id)):(0,i.jsx)("div",{className:"flex items-center justify-center text-secondary text-center min-h-[200px]",children:(0,i.jsxs)("div",{className:"max-w-[300px]",children:[(0,i.jsx)(c(),{className:"mx-auto mb-2",src:"/assets/images/empty_state.svg",alt:"Icon Empty",width:64,height:40}),(0,i.jsx)("span",{children:"No nodes found. Add a node to start contributing and earning rewards!"})]})})}),t&&(0,i.jsx)("div",{className:"fixed inset-0 flex items-center justify-center bg-black bg-opacity-50",children:(0,i.jsxs)("div",{className:"bg-white px-8 py-10 rounded-lg shadow-[32px] max-w-[500px] w-full text-center",children:[(0,i.jsx)("h2",{className:"text-[36px] font-semibold mb-4",children:"Coming Soon"}),(0,i.jsx)("p",{className:"text-secondary",children:"This feature is currently under development. Stay tuned!"}),(0,i.jsx)("button",{className:"mt-4 px-6 py-2 bg-[#171717] text-white rounded-full",onClick:y,children:"Close"})]})})]})})}},1147:function(e,s,t){t.d(s,{f:function(){return i}});let i=e=>e.replace(/\b\w/g,e=>e.toUpperCase())}}]);