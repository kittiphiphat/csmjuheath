@extends('navbarinfo')
@section('title','แก้ไขแบบสอบถาม')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.css" integrity="sha512-dUOcWaHA4sUKJgO7lxAQ0ugZiWjiDraYNeNJeRKGOIpEq4vroj1DpKcS3jP0K4Js4v6bXk31AAxAxaYt3Oi9xw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>


@section('content')

    <div class="max-w-3xl p-4 py-4 mx-auto bg-white rounded-md shadow-md mt-18">
        <h1 class="mb-2 text-xl font-semibold">แบบสอบถาม</h1>

        <form method="POST" action="{{route('update',$blog->id)}}">


            @csrf
            <div class="mb-3">
            <div class="flex">
                <label for="name" class="block mb-2 text-sm font-bold text-gray-700"></label>
                <div class="flex-grow w-1/4 pr-2"><input  type="name" id="name" name="name" placeholder="ชื่อ-นามสกุล" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" value="{{$blog->name}}"></div>
                <label for="email" class="block mb-2 text-sm font-bold text-gray-700"></label>
                    <div class="flex-grow"><input type="email" id="email" name="email" placeholder="อีเมล" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" value="{{$blog->email}}"></div>

                </div>
            </div>
          <div class="mb-3">
                <div class="flex">
                <label for="sex" class="block mb-2 text-sm font-bold text-gray-700"></label>
                <div class="flex-grow w-1/4 pr-2"><input  type="sex" id="sex" name="sex" placeholder="เพศ" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" value="{{$blog->sex}}"></div>
                <label for="age" class="block mb-2 text-sm font-bold text-gray-700"></label>
                    <div class="flex-grow"><input type="age" id="age" name="age" placeholder="อายุ" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" value="{{$blog->age}}"></div>

                </div>
                <div class="py-1 mb-3">
                    <div class="flex py-2">
                        <label for="sex" class="block mb-2 text-sm font-bold text-gray-700"></label>
                        <div class="flex-grow w-1/4 pr-2"><input  type="phone" id="phone" name="phone" placeholder="เบอร์ติดต่อ" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" value="{{$blog->phone}}"></div>
                        <label for="age" class="block mb-2 text-sm font-bold text-gray-700"></label>
                            <div class="flex-grow"><input type="section" id="section" name="section" placeholder="ชื่อเรื่องที่ต้องการปรึกษา" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" value="{{$blog->section}}"></div>

                        </div>
                  </div>
                <div class="py-1 mb-3">


                </div>
            </div>

          <div class="mb-5 ">
            <label for="content" class="block mb-2 text-sm font-bold text-gray-700">รายละเอียดที่ต้องการปรึกษา</label>
            <textarea id="content" name="content" rows="4" placeholder="How can we help you?"
              class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">{{$blog->content}}</textarea>
          </div>
          <div class="mb-6 ">
            <button type="submit"
                class="relative w-full flex justify-center items-center px-5 py-2.5 font-medium tracking-wide text-white capitalize   bg-black rounded-md hover:bg-gray-900  focus:outline-none   transition duration-300 transform active:scale-95 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                    <g>
                       <rect fill="none" height="24" width="24"></rect>
                    </g>
                    <g>
                       <g>
                          <path d="M19,13h-6v6h-2v-6H5v-2h6V5h2v6h6V13z"></path>
                       </g>
                    </g>
                 </svg>
                 <span class="pl-2 mx-2">อัพเดตแบบสอบถาม</span>
            </button><br>
            <div class="mb-6 ">
                <a href="/blog" class="w-full px-6 py-3 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">
                    แบบสอบถามทั้งหมด</a>
                </div>



        </div>
       </form>
      </div>

@endsection






</body>
</html>
