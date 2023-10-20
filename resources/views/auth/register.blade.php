@extends('layouts.app')

@section('title')
    Sign up for DevStagram
@endsection

@section('content')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{asset('img/registrar.jpg')}}" alt="register image">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="/register" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label 
                        for="name" 
                        class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input 
                        id="name"
                        name="name" 
                        placeholder="Your name" 
                        type="text"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                        value="{{old('name')}}"
                    >
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label 
                        for="username" 
                        class="mb-2 block uppercase text-gray-500 font-bold">
                        UserName
                    </label>
                    <input 
                        id="username"
                        name="username" 
                        placeholder="Your user name" 
                        type="text"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                        value="{{old('username')}}"
                    >
                    @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
                </div>
                <div class="mb-5">
                    <label 
                        for="email" 
                        class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input 
                        id="email"
                        name="email" 
                        placeholder="Your email" 
                        type="email"
                        class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                        value="{{old('email')}}"
                    >
                    @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
                </div>
                <div class="mb-5">
                    <label 
                        for="password" 
                        class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input 
                        id="password"
                        name="password" 
                        placeholder="Your password" 
                        type="password"
                        class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                    >
                    @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
                </div>
                <div class="mb-5">
                    <label 
                        for="password_confirmation" 
                        class="mb-2 block uppercase text-gray-500 font-bold">
                        confirm your password
                    </label>
                    <input 
                        id="password_confirmation"
                        name="password_confirmation" 
                        placeholder="Confirm your password" 
                        type="password"
                        class="border p-3 w-full rounded"
                    >
                </div>
                <input 
                    type="submit"
                    value="Create account"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer 
                    uppercase font-bold w-full p-3 text-white rounded-lg"
                >
            </form>
        </div>
    </div>
@endsection
