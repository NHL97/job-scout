<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Scout</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite(["resources/js/app.js", "resources/css/app.css"])
</head>

<body class="bg-background text-white font-hanken-grotesk pb-10">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/" class="flex items-center">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Job Scout Logo">
                    <span class="font-bold text-base">JOB SCOUT</span>
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="/">Home</a>
                <a href="/career">Career</a>
                <a href="/salaries">Salaries</a>
                <a href="/companies">Companies</a>
            </div>

            @auth
                <div class="space-x-6 font-bold flex">
                    <a href="/works/create" class="btn btn-primary">Post A Job</a>

                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')
                        <button>Log Out</button>
                </div>
            @endauth

            @guest
            <div class="space-x-6 font-bold">
                <a href="/register">Register</a>
                <a href="/login">Log In</a>
            </div>
            @endguest
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">{{ $slot }}</main>
        <footer></footer>
    </div>
</body>


</html>
