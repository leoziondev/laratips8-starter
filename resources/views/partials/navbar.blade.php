<header class="bg-purple-700">
    <div class="container mx-auto flex items-center">
        <div class="text-2xl text-purple-200 mr-8">MyLogo</div>
        <nav class="flex text-white">
            <a href="{{ route('home') }}" class="font-semibold hover:bg-purple-600 py-4 px-4 border-b-2 hover:border-purple-200 transition-all {{ session('activeNav') === 'home' ? 'bg-purple-600 border-purple-200' : 'border-purple-700' }}">Home</a>
            <a href="{{ route('about-us') }}" class="font-semibold hover:bg-purple-600 py-4 px-4 border-b-2 hover:border-purple-200 transition-all {{ session('activeNav') === 'about' ? 'bg-purple-600 border-purple-200' : 'border-purple-700' }}">About Us</a>
            <a href="{{ route('contact-us') }}" class="font-semibold hover:bg-purple-600 py-4 px-4 border-b-2 hover:border-purple-200 transition-all {{ session('activeNav') === 'contact' ? 'bg-purple-600 border-purple-200' : 'border-purple-700' }}">Contact Us</a>
        </nav>
    </div>
</header>
