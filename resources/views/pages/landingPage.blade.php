@extends('../index')
@section('title','Welcome')
@section('content')
    <div class="font-['Poppins'] flex justify-center items-center w-100 h-[100vh] bg-slate-900">
        <div class=" text-slate-200">
            <p class="text-[1.4rem]">Hi, Welcome</p>
            <p  class="text-[1.7rem] mb-[30px]">Upload, Download and View your file</p>
            <div class="text-black">
                <a href="upload" class="bg-green-400 font-semibold py-3 px-6 rounded">Upload File</a>
                <a href="show" class="bg-blue-400 font-semibold py-3 px-6 rounded">Show Files</a>
            </div>
        </div>
    </div>
@endsection
