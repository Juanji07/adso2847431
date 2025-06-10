<div class="navbar bg-[#fff3] shadow-sm text-white fixed top-0">
  <div class="flex-1">
    <a class="btn btn-ghost text-xl" href="{{ url('/') }}">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
        </svg>
    </a>
  </div>
  <div class="flex-none">
    @guest

    <ul class="menu menu-horizontal px-1">
        <li>
            <a href="{{ route('login') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                </svg>
                Login
            </a>
        </li>
        <li>
            <a href="{{ route('register') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                Register
            </a>
        </li>
    </ul>
    @endguest
    @auth
        <ul class="menu menu-horizontal px-1">
        <li>
            <div class="avatar">
                <div class="mask mask-squircle w-12">
                    <img src="{{ asset('images/'.Auth::user()->photo) }}">
                </div>
            </div>
        </li>
        <li>
           <span class="badge text-white border-cyan-800 bg-cyan-800">Admin: </span> {{ Auth::user()->fullname}}
        </li>
        @if (Auth::user()->role == 'Admin')
        <li>
           <details class="dropdown dropdown-end">
                <summary class="bnt text-white bg-[#fff0] border-[#fff0] shadow-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </summary>
                <ul class="menu dropdown-content bg-cyan-800 rounded-box z-1 w-52 p-2 shadow-sm">
                    <li>
                        <a href="{{ url('users') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                            </svg>
                            Users
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('pets') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                            </svg>
                            Pets
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('adoptions') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                            </svg>
                            Adoptions
                        </a>
                    </li>
                    @else
                    <li>
                        <a href="javascript:;">
                            <svg viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16.4816 14.79C16.4044 14.1496 16.1808 13.5356 15.8281 12.9956C15.4754 12.4556 15.003 12.004 14.4476 11.676C13.7112 11.2339 12.8685 11.0003 12.0096 11.0003C11.1507 11.0003 10.308 11.2339 9.5716 11.676C9.01621 12.004 8.54384 12.4556 8.1911 12.9956C7.83837 13.5356 7.61475 14.1496 7.5376 14.79C7.48943 15.1361 7.35883 15.4655 7.15679 15.7506C6.95475 16.0356 6.68717 16.268 6.3766 16.428C5.65544 16.8014 5.08938 17.4176 4.77833 18.1678C4.46729 18.9179 4.43126 19.7539 4.6766 20.528C4.86627 21.0934 5.19438 21.6022 5.63104 22.0083C6.06769 22.4144 6.59901 22.7048 7.1766 22.853C7.76773 23.0188 8.38931 23.0449 8.99224 22.9291C9.59517 22.8134 10.1629 22.559 10.6506 22.186C11.0413 21.8887 11.5187 21.7277 12.0096 21.7277C12.5005 21.7277 12.9779 21.8887 13.3686 22.186C13.8563 22.559 14.424 22.8134 15.027 22.9291C15.6299 23.0449 16.2515 23.0188 16.8426 22.853C17.4202 22.7048 17.9515 22.4144 18.3882 22.0083C18.8248 21.6022 19.1529 21.0934 19.3426 20.528C19.5879 19.7539 19.5519 18.9179 19.2409 18.1678C18.9298 17.4176 18.3638 16.8014 17.6426 16.428C17.332 16.268 17.0645 16.0356 16.8624 15.7506C16.6604 15.4655 16.5298 15.1361 16.4816 14.79V14.79Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M8.25977 8.75C9.50241 8.75 10.5098 7.40685 10.5098 5.75C10.5098 4.09315 9.50241 2.75 8.25977 2.75C7.01712 2.75 6.00977 4.09315 6.00977 5.75C6.00977 7.40685 7.01712 8.75 8.25977 8.75Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M3.00977 14.75C4.25241 14.75 5.25977 13.4069 5.25977 11.75C5.25977 10.0931 4.25241 8.75 3.00977 8.75C1.76712 8.75 0.759766 10.0931 0.759766 11.75C0.759766 13.4069 1.76712 14.75 3.00977 14.75Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M15.7598 8.75C17.0024 8.75 18.0098 7.40685 18.0098 5.75C18.0098 4.09315 17.0024 2.75 15.7598 2.75C14.5171 2.75 13.5098 4.09315 13.5098 5.75C13.5098 7.40685 14.5171 8.75 15.7598 8.75Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M21.0098 14.75C22.2524 14.75 23.2598 13.4069 23.2598 11.75C23.2598 10.0931 22.2524 8.75 21.0098 8.75C19.7671 8.75 18.7598 10.0931 18.7598 11.75C18.7598 13.4069 19.7671 14.75 21.0098 14.75Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M3.00977 8.75V7.25" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M8.25977 2.75V1.25" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M15.7598 2.75V1.25" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M21.0098 8.75V7.25" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path> </g>
                            </svg>
                            Make adoptions
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <svg viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16.4816 14.79C16.4044 14.1496 16.1808 13.5356 15.8281 12.9956C15.4754 12.4556 15.003 12.004 14.4476 11.676C13.7112 11.2339 12.8685 11.0003 12.0096 11.0003C11.1507 11.0003 10.308 11.2339 9.5716 11.676C9.01621 12.004 8.54384 12.4556 8.1911 12.9956C7.83837 13.5356 7.61475 14.1496 7.5376 14.79C7.48943 15.1361 7.35883 15.4655 7.15679 15.7506C6.95475 16.0356 6.68717 16.268 6.3766 16.428C5.65544 16.8014 5.08938 17.4176 4.77833 18.1678C4.46729 18.9179 4.43126 19.7539 4.6766 20.528C4.86627 21.0934 5.19438 21.6022 5.63104 22.0083C6.06769 22.4144 6.59901 22.7048 7.1766 22.853C7.76773 23.0188 8.38931 23.0449 8.99224 22.9291C9.59517 22.8134 10.1629 22.559 10.6506 22.186C11.0413 21.8887 11.5187 21.7277 12.0096 21.7277C12.5005 21.7277 12.9779 21.8887 13.3686 22.186C13.8563 22.559 14.424 22.8134 15.027 22.9291C15.6299 23.0449 16.2515 23.0188 16.8426 22.853C17.4202 22.7048 17.9515 22.4144 18.3882 22.0083C18.8248 21.6022 19.1529 21.0934 19.3426 20.528C19.5879 19.7539 19.5519 18.9179 19.2409 18.1678C18.9298 17.4176 18.3638 16.8014 17.6426 16.428C17.332 16.268 17.0645 16.0356 16.8624 15.7506C16.6604 15.4655 16.5298 15.1361 16.4816 14.79V14.79Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M8.25977 8.75C9.50241 8.75 10.5098 7.40685 10.5098 5.75C10.5098 4.09315 9.50241 2.75 8.25977 2.75C7.01712 2.75 6.00977 4.09315 6.00977 5.75C6.00977 7.40685 7.01712 8.75 8.25977 8.75Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M3.00977 14.75C4.25241 14.75 5.25977 13.4069 5.25977 11.75C5.25977 10.0931 4.25241 8.75 3.00977 8.75C1.76712 8.75 0.759766 10.0931 0.759766 11.75C0.759766 13.4069 1.76712 14.75 3.00977 14.75Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M15.7598 8.75C17.0024 8.75 18.0098 7.40685 18.0098 5.75C18.0098 4.09315 17.0024 2.75 15.7598 2.75C14.5171 2.75 13.5098 4.09315 13.5098 5.75C13.5098 7.40685 14.5171 8.75 15.7598 8.75Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M21.0098 14.75C22.2524 14.75 23.2598 13.4069 23.2598 11.75C23.2598 10.0931 22.2524 8.75 21.0098 8.75C19.7671 8.75 18.7598 10.0931 18.7598 11.75C18.7598 13.4069 19.7671 14.75 21.0098 14.75Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M3.00977 8.75V7.25" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M8.25977 2.75V1.25" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M15.7598 2.75V1.25" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M21.0098 8.75V7.25" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path> </g>
                            </svg>
                            My adoptions
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <svg viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16.4816 14.79C16.4044 14.1496 16.1808 13.5356 15.8281 12.9956C15.4754 12.4556 15.003 12.004 14.4476 11.676C13.7112 11.2339 12.8685 11.0003 12.0096 11.0003C11.1507 11.0003 10.308 11.2339 9.5716 11.676C9.01621 12.004 8.54384 12.4556 8.1911 12.9956C7.83837 13.5356 7.61475 14.1496 7.5376 14.79C7.48943 15.1361 7.35883 15.4655 7.15679 15.7506C6.95475 16.0356 6.68717 16.268 6.3766 16.428C5.65544 16.8014 5.08938 17.4176 4.77833 18.1678C4.46729 18.9179 4.43126 19.7539 4.6766 20.528C4.86627 21.0934 5.19438 21.6022 5.63104 22.0083C6.06769 22.4144 6.59901 22.7048 7.1766 22.853C7.76773 23.0188 8.38931 23.0449 8.99224 22.9291C9.59517 22.8134 10.1629 22.559 10.6506 22.186C11.0413 21.8887 11.5187 21.7277 12.0096 21.7277C12.5005 21.7277 12.9779 21.8887 13.3686 22.186C13.8563 22.559 14.424 22.8134 15.027 22.9291C15.6299 23.0449 16.2515 23.0188 16.8426 22.853C17.4202 22.7048 17.9515 22.4144 18.3882 22.0083C18.8248 21.6022 19.1529 21.0934 19.3426 20.528C19.5879 19.7539 19.5519 18.9179 19.2409 18.1678C18.9298 17.4176 18.3638 16.8014 17.6426 16.428C17.332 16.268 17.0645 16.0356 16.8624 15.7506C16.6604 15.4655 16.5298 15.1361 16.4816 14.79V14.79Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M8.25977 8.75C9.50241 8.75 10.5098 7.40685 10.5098 5.75C10.5098 4.09315 9.50241 2.75 8.25977 2.75C7.01712 2.75 6.00977 4.09315 6.00977 5.75C6.00977 7.40685 7.01712 8.75 8.25977 8.75Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M3.00977 14.75C4.25241 14.75 5.25977 13.4069 5.25977 11.75C5.25977 10.0931 4.25241 8.75 3.00977 8.75C1.76712 8.75 0.759766 10.0931 0.759766 11.75C0.759766 13.4069 1.76712 14.75 3.00977 14.75Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M15.7598 8.75C17.0024 8.75 18.0098 7.40685 18.0098 5.75C18.0098 4.09315 17.0024 2.75 15.7598 2.75C14.5171 2.75 13.5098 4.09315 13.5098 5.75C13.5098 7.40685 14.5171 8.75 15.7598 8.75Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M21.0098 14.75C22.2524 14.75 23.2598 13.4069 23.2598 11.75C23.2598 10.0931 22.2524 8.75 21.0098 8.75C19.7671 8.75 18.7598 10.0931 18.7598 11.75C18.7598 13.4069 19.7671 14.75 21.0098 14.75Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M3.00977 8.75V7.25" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M8.25977 2.75V1.25" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M15.7598 2.75V1.25" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M21.0098 8.75V7.25" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path> </g>
                            </svg>
                            My account
                        </a>
                    </li>
                    @endif
                    <li>
                        <form method="POST" action="{{ route('logout') }}" class="text-white">
                            @csrf
                            <a href="{{ route('logout') }}" class="flex gap-2"
                                    onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Log Out
                            </a>
                        </form>
                    </li>
                </ul>
           </details>
        </li>
    </ul>
    @endauth
  </div>
</div>
