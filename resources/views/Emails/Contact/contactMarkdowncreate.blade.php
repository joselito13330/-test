<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Message de Contact</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <style>
            body {
            font-family: 'Nunito', sans-serif;
            }
        </style>
        <!-- css tailwind -->
        <link media="all" href="{{secure_asset('css/app.css')}}" type="text/css" rel="stylesheet">

    </head>
    <body>
          <div style="margin: 2rem; color:black; height: auto; background-color:#EAECEE">
            <!-- Page Heading -->
            <header  style="">
                <div style="padding-left: 20px;">
                    <p style="text-align: center; font-size: 24px; font-weight: bold;">
                    Message de contact</p>
                    <div style="display: flex;align-items:center; justify-content: start; margin-left: 0.3rem;" >
                        <p style="font-size: 14px; font-style: italic;">
                            De : {{$nom}} {{$prenom}} / {{$email}}
                        </p>
                    </div>
                    
                </div>
                <div>
                    <hr style="height: 3px; background-color: black;">
                </div>
            </header>
            <main  style="margin-left:1rem; margin-right: 1rem; padding: 10px; font-family: comic sans ms;">
               {{$msg}}

            </main>
            <footer style="">
                <hr style="height: 2px; background-color: black;">
                <div style="display: flex; align-items: center; justify-content: center; ">
                    <p style="font-size: 0.75rem; text-align: center; font-weight:bold">Copyright jpv 2022</p>
                </div>
            </footer>
        </div>
 
    </body>
</html>



