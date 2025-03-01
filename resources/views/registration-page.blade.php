@extends('layouts.index')

@section('title')
    Register
@endsection

@section('content')
<div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 flex-1 flex items-center justify-around p-8">
    <div class="flex items-center justify-center hidden md:flex">
        <img class="w-3/4" src="{{ asset('img/background.png') }}" alt="">
    </div>
    <div class="flex items-center justify-center">
        <div class="w-[400px] rounded-lg bg-white p-8 shadow-lg flex flex-col gap-2">
            <div>
                <h1 class="text-3xl font-semibold">Sign Up</h1>
                <p>Create your account and start your journey with us today.</p>
            </div>

            <!-- Registration Form -->
            <form action="" method="POST">
                <div class="py-2">
                    <x-input 
                        right-icon="user" 
                        label="Email" 
                        placeholder="Enter your email" 
                        required 
                        type="email" 
                        wire:model.defer="email" 
                        value="{{ old('email') }}"
                        class="@error('email') border-red-500 @enderror"
                    />
                 <!-- old input field -->
                    {{-- <label for="email" class="py-2">Email</label>
                    <input type="email" name="email" id="email" placeholder="example@ex.com" value="{{ old('email') }}"
                        class="border border-gray-300 p-2 rounded-lg w-full focus:outline-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror"
                    required> --}}

                    <!-- Display email error message -->
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="relative py-2">
                    <x-input 
                        label="Password" 
                        type="password" 
                        placeholder="Enter your password"
                        required
                        wire:model.defer="password"
                        class="@error('password') border-red-500 @enderror"
                    />

                    <!-- Old Input Field -->
                    {{-- <label for="password" class="py-2">Password</label>
                    <input type="password" name="password" id="password" placeholder="********"
                        class="border border-gray-300 p-2 rounded-lg w-full focus:outline-blue-500 focus:border-blue-500 @error('password') border-red-500 @enderror"
                        required> --}}

                    <!-- Display password error message -->
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="relative py-2">
                    <x-input 
                        label="Confirm Password" 
                        type="password" 
                        placeholder="Re-enter your password"
                        required
                        wire:model.defer="confirm_password"
                        class="@error('password_confirmation') border-red-500 @enderror"
                    />

                    <!-- Old Input Field -->
                    {{-- <label for="password_confirmation" class="py-2">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="********"
                        class="border border-gray-300 p-2 rounded-lg w-full focus:outline-blue-500 focus:border-blue-500 @error('password_confirmation') border-red-500 @enderror"
                        required> --}}

                    <!-- Display confirm password error message -->
                    @error('password_confirmation')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="py-2">
                    <x-button 
                        blue 
                        label="Register" 
                        class="w-full"
                        type="submit" 
                    />
                    {{-- <button type="submit" class="bg-blue-500 text-white p-2 rounded-lg w-full hover:bg-blue-600">
                        Register
                    </button> --}}
                </div>
            </form>

            <!-- Divider -->
            <div class="flex gap-2 flex-row items-center">
                <div class="w-1/2 h-[1px] bg-gray-300"></div>
                <p>or</p>
                <div class="w-1/2 h-[1px] bg-gray-300"></div>
            </div>

            <!-- Google Login Button -->
            <div>
                <a href="{{ route('login.google') }}" class="border border-gray-300 text-gray-600 p-2 rounded-lg w-full flex items-center justify-center gap-3">
                    <img class="w-5" src="https://banner2.cleanpng.com/20180326/gte/avj4aturu.webp" alt="Google Logo">
                    Continue with Google
                </a>
            </div>

            <!-- Already have an account -->
            <div>
                <p>Already have an account? <a href="/login" class="text-blue-500">Login</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
