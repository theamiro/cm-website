<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CM - Website</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inder&family=Judson:wght@400;700&family=Work+Sans&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./assets/js/tailwind.config.js"></script>
    <link rel="stylesheet" href="./styles.css" type="text/tailwindcss" />
    <style type="text/tailwindcss">
        @layer utilities {
            * {
                box-sizing: border-box;
            }
            .background-gradient {
                background: linear-gradient(90deg, #edc474 0%, #cb9d52 60.94%, #b6853c 100%);
            }
            h1, h3 {
                font-family: "Judson", serif !important;
            }

            p {
                font-family: "Inder", sans-serif;
                line-height: 1.61rem;
            }
            .container {
                @apply max-w-6xl mx-auto;
            }
            header:before {
                content: "";
                position: absolute;
                height: 100%;
                width: 100%;
                top:0;
                left: 0;
                background: linear-gradient(90deg, #101611 24.69%, rgba(16, 22, 17, 0) 64.55%);
            }
            .project-item:before {
                position: absolute;
                content: "";
                height: 100%;
                width: 100%;
                top:0;
                left: 0;
                background: linear-gradient(0deg, #101E23 -2.62%, rgba(16, 30, 35, 0) 87.97%);
            }
            .carousel-item {
                margin-left: 10px;
            }
                .carousel-item:first-child {
                margin-left: 0;
            }
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./assets/js/scripts.js"></script>
</head>

<body class="relative">
    <div class="absolute top-[48px] left-0 z-10 w-full">
        <div class="container">
            <div class="flex items-center justify-between">
                <img class="h-[72px]" src="./assets/images/logo.svg" alt="Caroline Mweberi Website Logo">
                <a href="#" class="bg-charcoal-900 h-[64px] w-[64px] rounded-full flex items-center justify-center">
                    <img src="./assets/images/hamburger.svg" height="16.67" />
                </a>
            </div>
        </div>
    </div>