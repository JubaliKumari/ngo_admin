 <style>
     .sidebar-link {
         display: flex;
         align-items: center;
         gap: 12px;
         padding: 14px 16px;
         border-radius: 14px;
         color: #667085;
         font-weight: 500;
         text-decoration: none;
         transition: all 0.2s;
     }

     .sidebar-link:hover {
         background: #f3f4f6;
     }

     .sidebar-link.active {
         background: #dcfce7;
         color: #22c55e;
         font-weight: 700;
     }

     .sidebar-link svg {
         width: 22px;
         height: 22px;
     }
 </style>
 <aside class="w-56 bg-white flex flex-col shadow-sm border-r border-gray-100">

     {{-- Logo --}}
     <div class="px-5 py-5 flex items-center gap-2">
         <div class="w-9 h-9 bg-green-500 rounded-xl flex items-center justify-center">
             <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
             </svg>
         </div>
         <span class="text-xl font-extrabold text-gray-800">NGO</span>
     </div>

     {{-- Nav --}}
     <nav class="flex-1 px-3 py-2 space-y-1">
         <a href="{{ route('dashboard') }}"
             class="sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
             <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
             </svg>
             Dashboard
         </a>
         <a href="{{ route('donations') }}"
             class="sidebar-link {{ request()->routeIs('donations') ? 'active' : '' }}">
             <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
             </svg>
             Donations
         </a>
         <details class="group">

             <summary class="sidebar-link cursor-pointer list-none">
                 <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                 </svg>

                 <span class="flex-1">Masters</span>

                 <svg class="w-4 h-4 transition-transform group-open:rotate-180"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path stroke-linecap="round"
                         stroke-linejoin="round"
                         stroke-width="2"
                         d="M19 9l-7 7-7-7" />
                 </svg>
             </summary>

             <div class="ml-10 mt-2 space-y-2">

                 <a href="{{ route('food-types.index') }}"
                     class="block text-gray-600 hover:text-green-600">
                     Food Types
                 </a>

                 <a href="{{ route('membership-types.index') }}"
                     class="block text-gray-600 hover:text-green-600">
                     Membership Types
                 </a>

                 <a href="#"
                     class="block text-gray-600 hover:text-green-600">
                     Projects
                 </a>

             </div>

         </details>
         <a href="#" class="sidebar-link">
             <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
             </svg>
             Beneficiaries
         </a>
         <a href="#" class="sidebar-link">
             <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
             </svg>
             Volunteers
         </a>
         <a href="#" class="sidebar-link">
             <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
             </svg>
             Events
         </a>
         <a href="#" class="sidebar-link">
             <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
             </svg>
             Reports
         </a>
         <a href="#" class="sidebar-link">
             <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
             </svg>
             Messages
         </a>
         <a href="#" class="sidebar-link">
             <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                 <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
             </svg>
             Settings
         </a>
     </nav>

     {{-- Bottom card --}}
     <div class="mx-3 mb-4 bg-green-50 rounded-2xl p-4 text-center">
         <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center mx-auto mb-2 shadow-sm">
             <svg class="w-6 h-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
             </svg>
         </div>
         <p class="text-xs font-semibold text-gray-600 leading-snug">Together we can<br>make a difference.</p>
     </div>
 </aside>