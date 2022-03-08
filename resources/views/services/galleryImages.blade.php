@php
$userGallery = $service->user->imagesAsArray;
// $userGallery = $service->user
// ->imagesAsArray()
// ->get()
// ->toArray();
@endphp
<div class="lightbox lightbox-user-gallery">
    <div class="row">
        @foreach ($userGallery as $galleryImage)
            <div class="col-lg-4 my-1">
                <img src="{{ $galleryImage->file_name }}" data-mdb-img="{{ $galleryImage->file_name }}"
                    alt="{{ $galleryImage->name }}" class="w-100 shadow-1-strong rounded mb-2">
                <div class="likes heart gallery-reaction {{ $galleryImage->userliked() ? 'active-heart' : '' }}"
                    title="Like/Dislike" data-gallery-image-id="{{ $galleryImage->id }}" data-gallery-reaction-id="{{ $galleryImage->likedPost() }}">
                    <i class="fas fa-heart"></i>
                    <span class="liked_gallery_count">{{ $galleryImage->likes->count() }}</span>
                </div>
            </div>
        @endforeach
    </div>
</div>
