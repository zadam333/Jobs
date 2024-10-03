<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-black text-white">
    <div class="px-10 ">

    

    
    <nav class="flex justify-between items-center py-4 border-b border-white/10">
        <div>
            <a href="/">
                <img class="w-20" src="{{ Vite::asset('/resources/images/logo.jpg')}}" alt="">
            </a>
        </div>
        <div class="space-x-6 font-bold">
            <a href="">
                Jobs
            </a>
            <a href="">
                Crareers
            </a>
            <a href="">
                Salaries
            </a>
            <a href="">
                Companies
            </a>
        </div>
        <div>post a job</div>
    </nav>
    </div>
    
    <main class="mt-10 max-w-[986px] mx-auto">
        
    {{ $slot }}
    </main>
    

</body>

</html>