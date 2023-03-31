@extends('../index')
@section('title','Upload File')
@section('content')
    <div class="font-['Poppins'] flex justify-center items-center w-100 h-[100vh] bg-slate-900">
        <form action="" method="post" class="bg-white rounded p-6 flex flex-col justify-center">
            <h1 class="text-center font-bold text-[20px] ">UPLOAD A FILE</h1>
            @csrf
            <div class="flex flex-col mb-2">
                <label>Name</label>
                <input class="border p-2" type="text" name="nameOfFile" placeholder="Name of the File">
            </div>

            <div class="flex flex-col my-3">
                <label>Description</label>
                <input class="border p-2 type="text" name="descriptionOfFile" placeholder="Add description">
            </div>

            <div class="flex flex-col">
                <label>File</label>
                <input type="file" name="file">
            </div>
            <div class="mt-5">
                <input type="submit" name="submit" class="bg-green-400 font-semibold py-3 px-6 rounded cursor-pointer hover:bg-green-600">
                <a href="/" class="bg-red-400 font-semibold py-3 px-6 rounded cursor-pointer hover:bg-red-600">Back</a>
            </div>

        </form>
    </div>
@endsection
