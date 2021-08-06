@extends('layouts.app')

@section('content')

    <div class="h-screen font-sans login bg-cover">
        <div class="container mx-auto h-full flex flex-1 justify-center items-center">
            <div class="w-full max-w-lg">
                <div class="leading-loose">
                    <form class="max-w-sm m-4 p-10 bg-white bg-opacity-25 rounded shadow-xl">
                        <p class="text-white font-medium text-center text-lg font-bold">TODO LIST DE FDP</p>
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


