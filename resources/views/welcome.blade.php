<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo Informatika A - By Bayu Setiawan</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.2/dist/full.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div style="display: flex!important" class="hero flex flex-col justify-between min-h-screen bg-base-300 pt-20">
            <div class="text-center hero-content">
                <div class="flex flex-col items-center">
                    <img src="{{asset('images/logo.jpg')}}"  class="mb-5 h-72 rounded-lg shadow-2xl"> 
                    <h1 class="mb-5 text-5xl font-bold">To Do</h1> 
                    <p class="mb-5">Cari Apa? Tidak ada apa-apa di sini. Pergi.</p> 
                    <a href="{{asset('app/do-your-task-member.apk')}}" download class="btn btn-warning">
                        Download
                    </a>
                </div>
                
            </div>
            <footer class="items-center p-4 footer bg-base-300 text-neutral-content">
                <p>Made by Bayu Setiawan</p> 
             </footer>
            
        </div>
        
    </body>
</html>
