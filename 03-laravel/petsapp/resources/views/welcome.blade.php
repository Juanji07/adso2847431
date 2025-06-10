@extends('layouts.app')
@section('title', 'Welcome Pets App')

@section('content')
    <div class="card bg-base-100 w-96 shadow-sm">
        <figure>
            <img src="{{ asset('storage/avatars/welcome.png')}}" alt="Shoes" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">Welcome PetsApp</h2>
            <p>A pet adoption app connecting you with shelters, allowing easy browsing, fostering, and adopting pets in need
                of homes.</p>
            <div class="card-actions justify-center">
                @auth
                    <a href="{{ route('dashboard')}}" class="btn bg-cyan-600 text-white"><svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor" class="size-5">
                            <path fill-rule="evenodd"
                                d="M13.887 3.182c.396.037.79.08 1.183.128C16.194 3.45 17 4.414 17 5.517V16.75A2.25 2.25 0 0 1 14.75 19h-9.5A2.25 2.25 0 0 1 3 16.75V5.517c0-1.103.806-2.068 1.93-2.207.393-.048.787-.09 1.183-.128A3.001 3.001 0 0 1 9 1h2c1.373 0 2.531.923 2.887 2.182ZM7.5 4A1.5 1.5 0 0 1 9 2.5h2A1.5 1.5 0 0 1 12.5 4v.5h-5V4Z"
                                clip-rule="evenodd" />
                        </svg>
                        Dashboard</a>
                @endauth
                @guest
                    <a href="{{ route('login')}}" class="btn bg-cyan-600 text-white"><svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor" class="size-5">
                            <path fill-rule="evenodd"
                                d="M10 1a4.5 4.5 0 0 0-4.5 4.5V9H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-.5V5.5A4.5 4.5 0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z"
                                clip-rule="evenodd" />
                        </svg>
                        Login</a>
                    <a href="{{ route('register')}}" class="btn bg-cyan-600 text-white"><svg xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                        </svg>
                        Register</a>
                @endguest
            </div>
        </div>
    </div>
@endsection
