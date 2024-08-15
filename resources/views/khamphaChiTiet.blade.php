
@extends('layout/header')
@section('content')

<div class="contentKhamPhaChiTiet">
    <div class="imgHead">
        @foreach ($images as $image)
            <img src="{{ asset($image->loImgPath) }}" alt="Image">
        @endforeach
        {{-- <img class="" src="{{ asset($images->loImgPath) }}" alt="Description of the image"> --}}
    </div>

    <div class="introduce-location">
        <p class="locationTitle-khamphachititet">{{ $locationDetail -> loName }}</p>
        <div class="linebw"></div>
        <svg class="etitle" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M19.83 8.6998L15.3 4.1698C14.35 3.2198 13.04 2.7098 11.7 2.7798L6.69998 3.0198C4.69998 3.1098 3.10998 4.6998 3.00998 6.6898L2.76998 11.6898C2.70998 13.0298 3.20998 14.3398 4.15998 15.2898L8.68997 19.8198C10.55 21.6798 13.57 21.6798 15.44 19.8198L19.83 15.4298C21.7 13.5798 21.7 10.5598 19.83 8.6998ZM9.49998 12.3798C7.91998 12.3798 6.61998 11.0898 6.61998 9.4998C6.61998 7.9098 7.91998 6.6198 9.49998 6.6198C11.08 6.6198 12.38 7.9098 12.38 9.4998C12.38 11.0898 11.08 12.3798 9.49998 12.3798ZM17.53 13.5298L13.53 17.5298C13.38 17.6798 13.19 17.7498 13 17.7498C12.81 17.7498 12.62 17.6798 12.47 17.5298C12.18 17.2398 12.18 16.7598 12.47 16.4698L16.47 12.4698C16.76 12.1798 17.24 12.1798 17.53 12.4698C17.82 12.7598 17.82 13.2398 17.53 13.5298Z" fill="#EC008C"/>
        </svg>
        <p class="areaTitle-khamphachitiet">{{ $locationDetail -> areaName }}</p>
        <p class="locationDate-khamphachitiet">{{ $locationDetail -> loDate }}</p>
    </div>


    <div class="description-location">
        <p class="MoTa">Mô tả</p>
        <div class="linebw2"></div>
        <p class="desc">{{ $locationDetail -> loDescription }}</p>
    </div>

    <div class="contentLocation-khamphachitiet" >
        <?php echo $locationDetail->loContent ?>
        <style>
           {{ $locationDetail->loContentCss }}
           body {
  margin: 0;
  line-height: normal;
}



        </style>
    </div>

    
    
</div>
    
@endsection 