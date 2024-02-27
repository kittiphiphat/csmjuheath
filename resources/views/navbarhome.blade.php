<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | hospitel</title>
    <script src="https://cdn.tailwindcss.com"></script>


    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.css" integrity="sha512-dUOcWaHA4sUKJgO7lxAQ0ugZiWjiDraYNeNJeRKGOIpEq4vroj1DpKcS3jP0K4Js4v6bXk31AAxAxaYt3Oi9xw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="font-[Kanit] bg-gradient-to-t from-[#fbc2eb] to-[#a6c1ee] h-screen">
    <header class="bg-white ">
        <nav class="flex justify-between items-center w-[90%]  mx-auto">
            <div>
                <img class="w-16 cursor-pointer" src="https://cdn-icons-png.flaticon.com/512/5968/5968204.png" alt="...">
            </div>
            <div
                class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[30vh] left-0 top-[-100%] md:w-auto  w-full flex items-center font-[Kanit]">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[5vw] gap-8 p-2 font-[Kanit]">
                    <li>
                        <a class="hover:text-gray-500 " href="blog">แบบสอบถาม</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="create">กรอกแบบสอบถาม</a>
                    </li>

                    <li>
                        <a class="hover:text-gray-500" href="about">เกี่ยวกับเรา</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6">

                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <button class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec] font-[Kanit]">ออกจากระบบ</button></a>
                </form>

                <a href="/user/profile"><button class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec] font-[Kanit]">ตั้งต่าโปรไฟล์</button></a>
                {{-- <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon> --}}
                <i onclick="onToggleMenu(this)" name="menu" class="text-3xl ri-menu-line md:hidden"></i>
            </div>
    </header>

    <div class="px-4 py-4 mx-auto bg-gradient-to-t from-[#fbc2eb] to-[#a6c1ee] h-screen">
                @yield('content')
        </div>


</body>
 <script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e){
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[5.2%]')
        }
    </script>



</html>
