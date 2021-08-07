@extends('layouts.app')

@section('content')

<div class="h-screen font-sans login bg-cover">
    <div class="container mx-auto h-full flex flex-1 justify-center items-center">
        <div class="w-full max-w-lg">
            <div class="leading-loose">
                <form class="max-w-sm m-4 p-10 bg-white bg-opacity-25 rounded shadow-xl" method="POST"
                      action="{{ route('register') }}">
                    <p class="text-white font-medium text-center text-lg font-bold">REGISTER</p>
                    <div class="">
                        <label class="block text-sm text-white" for="firstname">Firstname</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="text" id="firstname"  placeholder="firstname" aria-label="Firstname" required>
                    </div>

                    <div class="mt-2">
                        <label class="block text-sm text-white" for="lastname">lastname</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="text" id="Lastname"  placeholder="e-mail" aria-label="Lastname" required>
                    </div>

                    <div class="mt-2">
                        <label class="block text-sm text-white" for="email">e-mail</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="email" id="email"  placeholder="E-mail" aria-label="email" required>
                    </div>

                    <div class="mt-2">
                        <label class="block text-sm text-white" for="confirm e-mail">confirm e-mail</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="email" id="email"  placeholder="Confirm e-mail" aria-label="Confirmemail" required>
                    </div>

                    <div class="mt-2">
                        <label class="block  text-sm text-white" for="password">password</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white"
                               type="password" id="password" placeholder="Password" arial-label="password" required>
                    </div>

                    <div class="mt-4 items-center flex">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 hover:bg-gray-800 rounded"
                                type="submit">Entrer</button>
                    </div>


                </form>

            </div>
        </div>
    </div>
</div>
<style>
    .login{
        /*
          background: url('https://tailwindadmin.netlify.app/dist/images/login-new.jpeg');
        */
        background: url('http://bit.ly/2gPLxZ4');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

@endsection
