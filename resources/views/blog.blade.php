@extends('navbarhome')


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>แบบสอบถามทั้งหมด</title>
        <script src="https://cdn.tailwindcss.com"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        @section('content')
          @if (count($blogs)>0)

            <section class="container max-w-screen-lg p-5 mx-auto font-[Kanit] ">
                <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                <div class="w-full overflow-x-auto">
                    <table class="w-full">
                    <thead>
                            <tr class="text-sm font-semibold tracking-wide text-left text-gray-900 uppercase bg-gray-100 border-b border-gray-600">
                            <th class="px-4 py-4 text-lg font-semibold text-black">ชื่อ-นามสกุล</th>
                            <th class="px-4 py-4 text-lg font-semibold text-black">ชื่อหัวข้อที่ปรึกษา</th>
                            <th class="px-5 py-3 text-lg font-semibold text-black">สถานะ</th>
                            <th class="px-4 py-4 text-lg font-semibold text-black">วันที่เผยแพร่</th>
                            <th class="px-2 py-2 text-lg font-semibold text-black border-gray-100">แถบจัดการเมนู</th>
                            </tr>
                        </thead>
                        @foreach ( $blogs as $item )
                        <tbody class="bg-gray-100">
                            <tr class="text-gray-700">
                            <td class="px-4 py-3 border">
                                <div class="flex items-center text-sm">

                                <div>
                                    <p class="text-sm font-medium text-black">{{$item->name}}</p>

                                </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm font-medium border text-ms">{{$item->section}}</td>
                            <td class="px-4 py-3 text-xs border">
                                <span class="px-2 py-1 font-medium ">
                                    @if ($item->status ==true)
                                    <a href="{{route('change',$item->id)}}" class="px-2 py-1 text-sm font-semibold leading-tight text-green-700 bg-green-100 rounded-sm">เผยแพร่</a>
                                @else
                                    <a href="{{route('change',$item->id)}}" class="px-2 py-1 text-sm font-semibold leading-tight text-orange-700 bg-yellow-100 rounded-sm">ฉบับร่าง</a>
                                @endif


                                </span>
                                <td class="px-4 py-3 text-sm font-medium border">{{ substr($item->created_at, 0, 10) }}

                                </td>


                                <th class="border"> <button class="relative align-middle select-none font-sans font-medium text-center  transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none mx-3 w-20 max-w-[40px] h-20 max-h-[40px] border rounded-lg text-xs text-gray-900 active:bg-gray-900 hover:bg-sky-200 " type="button">
                                    <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 ">
                                        <a  href="{{route('edit',$item->id)}}"class="text-2xl ri-edit-line hover:text-sky-800">

                                        </a>
                                    </span>
                                </button>
                                <button class="relative align-middle select-none font-sans font-medium text-center   transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none  mx-1 w-20 max-w-[40px] h-20 max-h-[40px] border rounded-lg text-xs text-gray-900 active:bg-gray-900 hover:bg-red-200 ">
                                    <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                         <a  href="{{route('delete',$item->id)}}"class="text-xl text-red-700 ri-delete-bin-line hover:text-red-700 "
                                            onclick="return confirm('คุณต้องการลบแบบสอบถาม {{$item->section}} หรือไม่ ? ')">
                                        </a>
                                    </span>
                                </button></th>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                </div>
            </div>
            {{  $blogs->links('pagination::bootstrap-4') }}

            </section>


          @else

            <h2 class="max-w-2xl mx-auto mt-12 text-3xl font-bold text-center text-transparent bg-gradient-to-r from-indigo-600 to-pink-600 bg-clip-text">ไม่มีบทความในระบบ</h2>

          @endif



        @endsection

    </body>



</html>








