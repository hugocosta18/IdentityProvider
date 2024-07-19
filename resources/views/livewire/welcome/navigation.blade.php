<div class="mt-8">
    @auth
        <a href="{{ url('/home') }}" class="text-sm text-gray-200 underline">Home</a>
    @else
        <a href="{{ route('login') }}" class="font-bold text-gray-800 bg-green-400 hover:bg-green-500 px-6 py-3 rounded-md mr-4" style="background-color: #B197FC;">Log in</a>
        
        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="font-bold text-gray-800 bg-yellow-400 hover:bg-yellow-500 px-6 py-3 rounded-md" style="background-color: #FFD43B;">Register</a>
        @endif
    @endauth
</div>