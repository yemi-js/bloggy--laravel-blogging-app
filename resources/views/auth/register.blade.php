
@extends('layouts.app')


@section('content')
    <div class="flex justify-center">
        <div class=" md:w-3/12 p-8 bg-white rounded-lg shadow-md flex-col ">
            <div class="flex mb-8">
                <h2 class="text-xl font-medium ">Sign Up</h2>
            </div>

            <form class="" action="{{ route('register')}}" method="post">
                @csrf

                <div class="mb-4 w-full flex flex-col">
                    <input type="text" name="name" id="name" placeholder="Your Name"
                    class=" bg-gray-100 p-4 w-full border-2 rounded-lg @error('name')
                    border-red-500
                    @enderror" value="{{old('name')}}" />

                    @error('name')
                        <div class="text-sm text-red-500">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-4 w-full flex flex-col">
                    <input type="text" name="username" id="username" placeholder="Username"
                    class=" bg-gray-100 p-4 w-full border-2 rounded-lg @error('username')
                    border-red-500
                    @enderror" value="{{old('username')}}"/>

                    @error('username')
                        <div class="text-sm text-red-500">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-4 w-full flex flex-col ">
                    <input type="email" name="email" id="email" placeholder="Email"
                    class=" bg-gray-100 p-4 w-full border-2 rounded-lg @error('email')
                    border-red-500
                    @enderror" value="{{old('email')}}"/>

                    @error('email')
                        <div class="text-sm text-red-500">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-4 w-full flex flex-col ">
                    <input type="password" name="password" id="password" placeholder="Password"
                    class=" bg-gray-100 p-4 w-full border-2 rounded-lg @error('password')
                    border-red-500
                    @enderror" />

                    @error('password')
                        <div class="text-sm text-red-500">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-4 w-full flex flex-col ">
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password"
                    class=" bg-gray-100 p-4 w-full border-2 rounded-lg @error('password_confirmation')
                    border-red-500
                    @enderror" />

                     @error('password_confirmation')
                        <div class="text-sm text-red-500">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-4 w-full flex ">
                    <button class=" bg-slate-800 hover:bg-slate-700 text-white p-4 w-full rounded-lg"
                    type="submit"
                    >Register</button>
                </div>

            </form>
        </div>
    </div>
@endsection

