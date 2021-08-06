<div class="md:flex md:items-center md:justify-between bg-gray-900 py-5 px-12">
    <div class="flex-1 min-w-0">
        <a class="text-2xl font-bold leading-7 text-white sm:text-3xl sm:truncate ">
            Home
        </a>


    </div>
    <div class="mt-4 flex md:mt-0 md:ml-4">
        @if(! auth()->check())
            <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-indigo-500">
                Login
            </a>
            <a href="{{ route('register') }}" class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-indigo-500">
                Register
            </a>

        @else
            <a href="" class="text-white">
                {{ auth()->user()->name }}
            </a>
            <a href="{{ route('logout') }}" class="text-gray-50 ml-4"
               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        @endif
    </div>
</div>
