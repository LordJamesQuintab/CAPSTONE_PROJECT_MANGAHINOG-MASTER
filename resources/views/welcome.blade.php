@vite(['resources/css/app.css','resources/js/app.js'])

<x-navbar>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @include('partials._hero')
    
          
            <main class="text-center py-20 px-6 bg-white font-sans">
                <h1 class="text-5xl font-bold text-gray-800 mb-4">Join the Talk.</h1>
                <p class="text-gray-600 mb-10 max-w-lg mx-auto">Explore the forum below and find answers to all of your questions. Engage with others and share your insights in a friendly community.</p>
            
                @auth
                <a href="/login"
                class="bg-gray-800 text-white py-2 px-6 rounded-md inline-flex items-center justify-center space-x-2 shadow hover:bg-gray-900 transition duration-300 ease-in-out">
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                 </svg>
                 <span>Create New Post</span>
                </a>
                @else
                <a href="/threads/create"
                class="bg-gray-800 text-white py-2 px-6 rounded-md inline-flex items-center justify-center space-x-2 shadow hover:bg-gray-900 transition duration-300 ease-in-out">
                 
                 <span>Log In To Create A Post</span>
                </a>
                @endauth
            </main>
    
            <section class="flex flex-col items-center justify-center pt-8 px-36 bg-white">
                @if (count($threads)==0)
                <p>No Available Thread</p>
                @endif
                @foreach ($threads as $thread)
                    <x-cardThread :thread="$thread" />
                @endforeach
            </section>
    
    
    
        </x-navbar>
