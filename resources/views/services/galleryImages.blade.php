@php
$userGallery = $service->user->imagesAsArray;
// $userGallery = $service->user
// ->imagesAsArray()
// ->get()
// ->toArray();
@endphp
<div class="lightbox">
    <div class="row">
        @foreach ($userGallery as $galleryImage)
            <div class="col-lg-4 my-1">
                <img src="{{ $galleryImage->file_name }}" data-mdb-img="{{ $galleryImage->file_name }}"
                    alt="{{ $galleryImage->name }}" class="w-100 shadow-1-strong rounded mb-2">
            </div>
        @endforeach
    </div>
</div>
