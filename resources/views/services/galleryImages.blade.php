@php
$userGallery = $service->user->imagesAsArray;
// $userGallery = $service->user
// ->imagesAsArray()
// ->get()
// ->toArray();
@endphp
<link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet">

@section('style')
    <style>
        .lightbox-gallery {
            background-image: linear-gradient(#4A148C, #E53935);
            background-repeat: no-repeat;
            color: #000;
            overflow-x: hidden
        }

        .lightbox-gallery p {
            color: #fff
        }

        .lightbox-gallery h2 {
            font-weight: bold;
            margin-bottom: 40px;
            padding-top: 40px;
            color: #fff
        }

        @media (max-width:767px) {
            .lightbox-gallery h2 {
                margin-bottom: 25px;
                padding-top: 25px;
                font-size: 24px
            }
        }

        .lightbox-gallery .intro {
            font-size: 16px;
            max-width: 500px;
            margin: 0 auto 40px
        }

        .lightbox-gallery .intro p {
            margin-bottom: 0
        }

        .lightbox-gallery .photos {
            padding-bottom: 20px
        }

        .lightbox-gallery .item {
            padding-bottom: 30px
        }

    </style>
@endsection
<div class="row photos">
    @foreach ($userGallery as $galleryImage)
        <div class="col-sm-6 col-md-4 col-lg-3 item">
            <a href="{{ $galleryImage->file_name }}" data-lightbox="photos">
                <img class="img-fluid" src="{{ $galleryImage->file_name }}">
            </a>
        </div>
    @endforeach
</div>
@section('scripts')
<script src="{{ asset('js/lightbox.min.js') }}"></script>
@endsection
