@extends('../index')
@section('title',$data->name)
@section('content')

    <div class="flex justify-center items-center flex-col w-full h-[100vh] bg-slate-900">
        @if (in_array($extension,['jpg','png','jpeg']))
            <img class="h-auto max-w-lg rounded-lg" src="/assets/{{ $data->file }}" alt="{{ $data->file }}">
        @endif
        @if (in_array($extension,['pdf']))
            <embed type="application/pdf" src="/assets/{{ $data->file }}">
        @endif
        @if (in_array($extension,['mp4','mkv']))

            <video class="w-full" autoplay controls>
                <source src="/assets/{{ $data->file }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        @endif

        <div class="mt-5">
            <a href="/show" class="py-2 float-left px-4 text-[.7rem] bg-emerald-400 hover:bg-emerald-700 hover:text-white rounded" >Back</a>
        </div>
    </div>
@endsection
