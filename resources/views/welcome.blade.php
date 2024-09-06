<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans antialiased">
        <div class="h-4 bg-gradient-to-b from-blue-50 to-transparent"></div>
            <div class="min-h-screen max-w-[98rem] m-auto bg-slat-100">



                <nav class="bg-whit flex justify-between h-24">
                    <!-- left side -->
                    <div class="flex items-center">
                        <!-- logo -->
                        <div class="mr-10">
                            <a href="/">
                                <svg preserveAspectRatio="xMidYMid meet" data-bbox="9.326 77 180.602 46.37" viewBox="9.326 77 180.602 46.37" width="100" height="auto" xmlns="http://www.w3.org/2000/svg" data-type="color" role="img" aria-label="Homepage">
                                    <g>
                                        <path d="M54.548 100c0 12.488-10.123 22.611-22.611 22.611-12.488 0-22.611-10.123-22.611-22.611 0-12.488 10.123-22.611 22.611-22.611 12.488 0 22.611 10.123 22.611 22.611z" fill="#272EC6"></path>
                                        <path d="M122.262 78.431H73.868c-.771 0-1.396.625-1.396 1.396v13.712c0 .771.625 1.396 1.396 1.396h48.394c.771 0 1.396-.625 1.396-1.396V79.827c0-.771-.625-1.396-1.396-1.396z" fill="#272EC6"></path>
                                        <path d="M122.262 105.065H73.868c-.771 0-1.396.625-1.396 1.396v13.712c0 .771.625 1.396 1.396 1.396h48.394c.771 0 1.396-.625 1.396-1.396v-13.712c0-.771-.625-1.396-1.396-1.396z" fill="#8751BD"></path>
                                        <path d="M189.532 112.336l-34.941-34.941a1.349 1.349 0 0 0-1.908 0l-8.731 8.731a1.349 1.349 0 0 0 0 1.908l34.941 34.941a1.349 1.349 0 0 0 1.908 0l8.731-8.731a1.349 1.349 0 0 0 0-1.908z" fill="#8751BD"></path>
                                        <path d="M178.894 77.395l-34.941 34.941a1.349 1.349 0 0 0 0 1.908l8.731 8.731a1.349 1.349 0 0 0 1.908 0l34.941-34.941a1.349 1.349 0 0 0 0-1.908l-8.731-8.731a1.349 1.349 0 0 0-1.908 0z" fill="#272EC6"></path>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <!-- text next to logo -->
                        <div class="bg-re-800 flex flex-col items-center text-blue-600">
                            <div class="bg-gree-500 text-xl font-sans font-black scale-y-125 mb-2">Blessed Citron</div>
                            <div class="text-sm">Education for All</div>
                        </div>
                    </div>
                    <!-- right side -->
                    <div class="bg-slat-800 flex items-center">
                        <!-- nav links -->
                        <div class="flex text-sm text-blue-600 space-x-8 mr-16">
                            <a href="#" class="hover:text-blue-900">About</a>
                            <a href="#" class="hover:text-blue-900">Project</a>
                            <a href="#" class="hover:text-blue-900">Events</a>
                            <a href="#" class="hover:text-blue-900">Team</a>
                            <a href="#" class="hover:text-blue-900">News</a>
                            <a href="#" class="hover:text-blue-900">Contact</a>
                        </div>
                        <!-- login button -->
                        <div class=" bg-re-700">
                            <a href="#" class="flex text-md text-blue-600 hover:text-blue-900 items-center">
                                <svg data-bbox="0 0 50 50" data-type="shape" xmlns="http://www.w3.org/2000/svg" class="w-8 h-auto mr-3" viewBox="0 0 50 50">
                                    <g><path fill="#2563EB" d="M25 48.077c-5.924 0-11.31-2.252-15.396-5.921 2.254-5.362 7.492-8.267 15.373-8.267 7.889 0 13.139 3.044 15.408 8.418-4.084 3.659-9.471 5.77-15.385 5.77m.278-35.3c4.927 0 8.611 3.812 8.611 8.878 0 5.21-3.875 9.456-8.611 9.456s-8.611-4.246-8.611-9.456c0-5.066 3.684-8.878 8.611-8.878M25 0C11.193 0 0 11.193 0 25c0 .915.056 1.816.152 2.705.032.295.091.581.133.873.085.589.173 1.176.298 1.751.073.338.169.665.256.997.135.515.273 1.027.439 1.529.114.342.243.675.37 1.01.18.476.369.945.577 1.406.149.331.308.657.472.98.225.446.463.883.714 1.313.182.312.365.619.56.922.272.423.56.832.856 1.237.207.284.41.568.629.841.325.408.671.796 1.02 1.182.22.244.432.494.662.728.405.415.833.801 1.265 1.186.173.154.329.325.507.475l.004-.011A24.886 24.886 0 0 0 25 50a24.881 24.881 0 0 0 16.069-5.861.126.126 0 0 1 .003.01c.172-.144.324-.309.49-.458.442-.392.88-.787 1.293-1.209.228-.232.437-.479.655-.72.352-.389.701-.78 1.028-1.191.218-.272.421-.556.627-.838.297-.405.587-.816.859-1.24a26.104 26.104 0 0 0 1.748-3.216c.208-.461.398-.93.579-1.406.127-.336.256-.669.369-1.012.167-.502.305-1.014.44-1.53.087-.332.183-.659.256-.996.126-.576.214-1.164.299-1.754.042-.292.101-.577.133-.872.095-.89.152-1.791.152-2.707C50 11.193 38.807 0 25 0"></path></g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </nav>

                <div class="relative borde border-re-800 pb-14">
                    <img class="w-full h-auto" src="obrazek.webp" />
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
                        <div class="text-5xl font-sans font-black text-white scale-y-125 mb-5">FREE & ACCESSIBLE</div>
                        <div class="text-8xl font-sans font-black text-white scale-y-125 whitespace-nowrap">EDUCATION FOR ALL</div>
                    </div>
                    <div class="absolute bottom-0 left-[20%] bg-white font-black scale-y-125 pl-10 w-[60%] flex justify-between">

                        <h2 class="font-sans  text-blue-600 text-3xl py-5">Take action to help us grow</h2>
                        <a href="#" class="inline-block bg-blue-600 text-xl text-white py-6 px-10">Donate</a>
                    </div>
                </div>




            </div>





































    </body>
</html>
