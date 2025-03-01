<p class="py-2 px-3 rounded-full hover:bg-gray-100" id="toggleSidebar">
    <i class="fa-solid fa-bars"></i>
</p>
<div class="flex flex-row w-auto gap-5 items-center">
    <div class="relative w-10 h-10 hover:cursor-pointer hover:bg-gray-200 rounded-full">
        <img class="dropdownOption border-4 rounded-full border-blue-400 cursor-pointer" src="{{ asset('img/jvdlogo.png') }}" alt="">

        <!-- Dropdown Menu -->
        <div class="dropdownAction absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg hidden z-50">
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Profile</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Settings</a>

            <!-- Logout Button as Form -->
            <form action="" method="POST" class="block">
                <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-200">
                    Logout
                </button>
            </form>
        </div>
    </div>
    <div id="notificationToggle" class="relative p-1 rounded-full hover:cursor-pointer hover:bg-gray-200 px-2 group">
        <span id="notificationBadge" class="absolute top-0 -right-1 bg-red-600 text-white rounded-full px-[5px] text-xs hidden">2</span>
        <i class="fa-solid fa-bell text-2xl text-gray-600"></i>

        <!-- Notification Menu -->
        <div id="notificationMenu" class="absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-lg opacity-0 group-hover:opacity-100 group-hover:block hidden transition-opacity duration-300 border-[1.5px]">
            <div class="px-4 py-3 font-bold text-gray-700 border-b">
                <h2>Notifications</h2>
            </div>
            <div>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 border-b">
                    <div class="flex justify-between">
                        <h6 class="font-bold text-sm">lorem ipsum</h6>
                        <p class="text-xs">04:28pm 12/09/2024</p>
                    </div>
                    <span class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit .Lorem ipsum dolor sit amet consectetur adipisicing elit</span>
                </a>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 border-b">
                    <div class="flex justify-between">
                        <h6 class="font-bold text-sm">lorem ipsum</h6>
                        <p class="text-xs">04:28pm 12/09/2024</p>
                    </div>
                    <span class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit .Lorem ipsum dolor sit amet consectetur adipisicing elit</span>
                </a>
                <a href="#" class="block px-4 py-2 text-blue-600 hover:bg-gray-200 text-center text-sm hover:underline">View All</a>
            </div>
        </div>
    </div>

</div>
