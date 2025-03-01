<div class="flex flex-col h-screen">
    <div class="w-full px-4 mt-2 border-b-2 border-gray-100">
        <img class="w-12" src="{{ asset('img/jvdlogo.png') }}" alt="">
    </div>
    <ul class="w-full flex-grow text-sm">
        <!-- Dashboard -->
        <li class="p-4 hover:bg-gray-100">
            <a href="/dashboard" class="flex items-center space-x-2">
                <i class="fa-solid fa-gauge px-2"></i>
                <span>Dashboard</span>
                <span id="notificationBadge" class="bg-red-600 text-white rounded-full px-2 hidden">1</span>
            </a>
        </li>

        <!-- Employee -->
        <li class="p-4 hover:bg-gray-100">
            <a href="/information" class="flex items-center space-x-2">
                <i class="fa-solid fa-users px-2"></i>
                <span>Information</span>
                <span id="notificationBadge" class="bg-red-600 text-white rounded-full px-2 hidden">1</span>
            </a>
        </li>

        <!-- Attendance (With Submenu) -->
        <li class="p-4 hover:bg-gray-100">
            <a id="toggleAttendanceSubmenu" class="flex items-center space-x-2 cursor-pointer">
                <i class="fa-solid fa-user-clock px-2"></i>
                <span>HR4</span>
                <i class="fa-solid fa-chevron-down ml-auto"></i>
                <span id="notificationBadge" class="bg-red-600 text-white rounded-full px-2 hidden">1</span>
            </a>
            <ul id="attendanceSubmenu" class="ml-8 mt-2 hidden">
                <li class="p-2 hover:bg-gray-200"><a href="/salary">Compensation Planning and Administration</a></li>
                <li class="p-2 hover:bg-gray-200"><a href="/metrics">HR Analytics</a></li>
                <li class="p-2 hover:bg-gray-200"><a href="/training">Core Human Capital Management</a></li>
            </ul>
        </li>
    </ul>
    

    {{-- <div class="px-4 py-2 border-t border-gray-100">
        <p class="text-gray-500 text-[12px]">Logged in as:</p>
        <h1 class="text-gray-500 text-sm font-semibold">
            {{ Auth::user()->employees->firstname }} {{ Auth::user()->employees->lastname }}
        </h1>
    </div> --}}
</div>