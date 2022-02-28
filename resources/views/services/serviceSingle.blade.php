@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/styleservices.css') }}"> --}}
@endsection
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style-services.css?v=') . time() }}" />



    {{-- NEW CONTENT START --}}
    <div class="gamePlay" id="gamePlay">
        <!-- START: Service Section -->
        <section class="service mt-4 mx-3" id="servicePage">
            <div class="row">
                <!-- START: Service Profile Side bar -->
                <div class="col-lg-3 col-sm-12 profileBar">
                    <!-- START: Service Profile Side bar First Card -->
                    <div class="card card-box-shadow">
                        <div class="card-body p-0 m-0">
                            <div class="profile-image-part">
                                <div class="profile-background">
                                    <a href="#" class="pop">
                                        <img id="img01" src="/temp-services/images/2728343.jpg" alt=""
                                            class="img-fluid profile-background-image boder-top-left-right-radius zoom-clicked-img" />
                                    </a>
                                </div>
                            </div>
                            <!-- START: Service Social button -->

                            <div class="nav-button-side mt-2">
                                <div class="row img-two-btns-row">
                                    <div class="col-3 fa-round-border cust-nab-left">
                                        <a class="btn-cust" type="button">Follow</a>
                                    </div>
                                    <div class="col-6 cust-nab-center">
                                        <div class="">
                                            <a href="#" class="pop">
                                                <img id="circle-profile-pic"
                                                    src='{{ $service->user->getProfilePicture() }}' alt=""
                                                    class="img-fluid profile-image-v2 zoom-clicked-img" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-3 fa-round-border cust-nab-right">
                                        <a class="btn-cust" type="button">Chat</a>
                                    </div>
                                </div>
                            </div>

                            <!-- END: Service Social button -->
                            <div class="profile-info mt-2 px-3 mb-2 profile-name-top">
                                <h3 class="profile-name text-center text-style-3 mb-2 profile-name-game">
                                    {{ $service->user->name ?: 'NA' }}
                                </h3>
                                <div class="profile-about">
                                    <div class="row mt-1 mb-1 mx-1">
                                        <div class=" profile-section-two col-12">
                                            <div class="review-body text-center">
                                                {{ $service->user->primary_language ?: 'NA' }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1 mx-1 mb-5">
                                        <div class=" profile-section-two col-3 offset-2">
                                            <div class="review-body text-center">
                                                {{ $service->user->gender ?: 'NA' }}
                                            </div>
                                        </div>
                                        <div class="col-2"></div>
                                        <div class=" profile-section-two col-3">
                                            <div class="review-body text-center">
                                                {{ $service->user->getAge() ?: '0' }}
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="profile-name text-style-4 color-primary head-style-fst">
                                        About Me
                                    </h4>
                                    <p class="more-description text-justify"> {{ $service->user->description }} </p>
                                    {{-- <hr class="hr-dotted-2px mt-5"> --}}
                                    <div class="mb-3"></div>
                                    {{-- <div class="review-body">
                                        <div class="profile-section-two">
                                            <div class="body-fluid row mt-1">
                                                <div class="text-name col-6 text-style-5 text-start info-game-name">
                                                    Gender
                                                </div>
                                                <div class="text-text col-6 text-style-5 info-game-name">
                                                    {{ $service->user->gender }}
                                                </div>
                                            </div>
                                            <div class="body-fluid row mt-1">
                                                <div class="text-name col-6 text-style-5 text-start info-game-name ">
                                                    Age
                                                </div>
                                                <div class="text-text col-6 text-style-5 info-game-name">
                                                    {{ $service->user->getAge() }}
                                                </div>
                                            </div>
                                            <div class="body-fluid row mt-1">
                                                <div class="text-name col-6 text-style-5 text-start info-game-name">
                                                    Language
                                                </div>
                                                <div class="text-text col-6 text-style-5 info-game-name">
                                                    {{ $service->user->primary_language }}
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                {{-- <hr class="hr-dotted-2px mb-5"> --}}
                                <div class="mb-5"></div>
                                <div class="profile-about mt-3">
                                    <h4 class="profile-name text-style-4 color-primary head-style-fst">
                                        Socials
                                    </h4>
                                    <div class="body-fluid row justify-content-start ml-0">
                                        @if (!empty($service->user->instagram_profile))
                                            <a href="https://www.instagram.com/{{ $service->user->instagram_profile }}"
                                                class="icon-game col-3 icon-instagram" target="_blank">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        @endif

                                        @if (!empty($service->user->twitch_profile))
                                            <a href="https://www.{{ $service->user->twitch_profile }}"
                                                class="icon-game col-3 icon-twitch" target="_blank">
                                                <i class="fab fa-twitch"></i>
                                            </a>
                                        @endif

                                        @if (!empty($service->user->facebook_profile))
                                            <a href="https://www.{{ $service->user->facebook_profile }}"
                                                class="icon-game col-3 icon-fb" target="_blank">
                                                <i class="fab fa-facebook-square"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-4 mb-4 card-box-shadow">
                        <div class="card">
                            <div class="profile-info-counters">
                                <div class="social">
                                    <div class="item">
                                        <div class="count">16</div>
                                        <div class="socialName">Posts</div>
                                    </div>
                                    <div class="item">
                                        <div class="count">610</div>
                                        <div class="socialName">Followers</div>
                                    </div>
                                    <div class="item">
                                        <div class="count">29</div>
                                        <div class="socialName">Following</div>
                                    </div>
                                    <div class="item">
                                        <div class="count">1</div>
                                        <div class="socialName">Badge</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Service Profile Side bar First Card -->
                    <div class="card mt-4 mb-4 card-box-shadow">
                        <div class="card table-card">
                            <h4 class="profile-name text-style-4 color-primary head-style-fst">
                                Available Time
                            </h4>
                            <div class="table-responsive">
                                <table class="table timeline-table" style="text-align: center">
                                    <tr>
                                        <th>Monday</th>
                                        @if (isset(explode(':', $service->monday_from)[1]) && isset(explode(':', $service->monday_to)[1]))
                                            <td>{{ explode(':', $service->monday_from)[0] . ':' . explode(':', $service->monday_from)[1] }}
                                            </td>
                                            <td>-</td>
                                            <td>{{ explode(':', $service->monday_to)[0] . ':' . explode(':', $service->monday_to)[1] }}
                                            </td>
                                        @else
                                            <td colspan="3">Unavailable</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <th>Tuesday</th>
                                        @if (isset(explode(':', $service->tuesday_from)[1]) && isset(explode(':', $service->tuesday_to)[1]))
                                            <td>{{ explode(':', $service->tuesday_from)[0] . ':' . explode(':', $service->tuesday_from)[1] }}
                                            </td>
                                            <td>-</td>
                                            <td>{{ explode(':', $service->tuesday_to)[0] . ':' . explode(':', $service->tuesday_to)[1] }}
                                            </td>
                                        @else
                                            <td colspan="3">Unavailable</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <th>Wednesday</th>
                                        @if (isset(explode(':', $service->wednesday_from)[1]) && isset(explode(':', $service->wednesday_to)[1]))
                                            <td>{{ explode(':', $service->wednesday_from)[0] . ':' . explode(':', $service->wednesday_from)[1] }}
                                            </td>
                                            <td>-</td>
                                            <td>{{ explode(':', $service->wednesday_to)[0] . ':' . explode(':', $service->wednesday_to)[1] }}
                                            </td>
                                        @else
                                            <td colspan="3">Unavailable</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <th>Thursday</th>
                                        @if (isset(explode(':', $service->thursday_from)[1]) && isset(explode(':', $service->thursday_to)[1]))
                                            <td>{{ explode(':', $service->thursday_from)[0] . ':' . explode(':', $service->thursday_from)[1] }}
                                            </td>
                                            <td>-</td>
                                            <td>{{ explode(':', $service->thursday_to)[0] . ':' . explode(':', $service->thursday_to)[1] }}
                                            </td>
                                        @else
                                            <td colspan="3">Unavailable</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <th>Friday</th>
                                        @if (isset(explode(':', $service->friday_from)[1]) && isset(explode(':', $service->friday_to)[1]))
                                            <td>{{ explode(':', $service->friday_from)[0] . ':' . explode(':', $service->friday_from)[1] }}
                                            </td>
                                            <td>-</td>
                                            <td>{{ explode(':', $service->friday_to)[0] . ':' . explode(':', $service->friday_to)[1] }}
                                            </td>
                                        @else
                                            <td colspan="3">Unavailable</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <th>Saturday</th>
                                        @if (isset(explode(':', $service->saturday_from)[1]) && isset(explode(':', $service->saturday_to)[1]))
                                            <td>{{ explode(':', $service->saturday_from)[0] . ':' . explode(':', $service->saturday_from)[1] }}
                                            </td>
                                            <td>-</td>
                                            <td>{{ explode(':', $service->saturday_to)[0] . ':' . explode(':', $service->saturday_to)[1] }}
                                            </td>
                                        @else
                                            <td colspan="3">Unavailable</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <th>Sunday</th>
                                        @if (isset(explode(':', $service->sunday_from)[1]) && isset(explode(':', $service->sunday_to)[1]))
                                            <td>{{ explode(':', $service->sunday_from)[0] . ':' . explode(':', $service->sunday_from)[1] }}
                                            </td>
                                            <td>-</td>
                                            <td>{{ explode(':', $service->sunday_to)[0] . ':' . explode(':', $service->sunday_to)[1] }}
                                            </td>
                                        @else
                                            <td colspan="3">Unavailable</td>
                                        @endif
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END: Service Profile Side bar SECOND Card -->
                </div>
                <!-- END: Service Profile Side bar -->

                <!-- START: Service main Body-->

                <div class="col-lg-8 col-sm-12 mainBody">
                    <!-- START: First Card mianbody -->
                    <div class="card review-body">
                        <div class="card-body ">
                            <div class="service-game-main-body">
                                <div class="service-game-nav">
                                    <!-- START: Service main Body nav bar-->
                                    <div class="row">
                                        <!-- START: Service main Menu -->
                                        <div class="col-lg-7 col-md-7 col-sm-12 col-tab-nav">
                                            <ul class="nav nav-tabs nav-custom-nav" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                                        href="#home" aria-selected="true">
                                                        Service Details
                                                    </a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                        data-bs-target="#profile" type="button" role="tab"
                                                        aria-controls="profile" aria-selected="false" href="#profile">
                                                        Timeline
                                                    </a>
                                                </li>
                                                {{-- <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="gallery-tab" data-bs-toggle="tab"
                                                        data-bs-target="#gallery" type="button" role="tab"
                                                        aria-controls="gallery" aria-selected="false" href="#gallery">
                                                        Photos
                                                    </a>
                                                </li> --}}
                                                {{-- <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="followers-tab" data-bs-toggle="tab"
                                                        data-bs-target="#followers" type="button" role="tab"
                                                        aria-controls="followers" aria-selected="false">
                                                        Followers
                                                    </a>
                                                </li> --}}
                                            </ul>
                                        </div>
                                        <!-- END: Service main Menu -->

                                        <!-- START: Service Notificaiton menu -->
                                        {{-- <div class="col-lg-5 col-md-5 col-sm-12 m-auto col-tab-nav-snd">
                                            <ul class="service-nav-notificaiton d-flex justify-content-around">
                                                <li class="service-notificaiton-tab col-3 col-sm-3 d-flex">
                                                    <div class="notificaiton-name">Posts</div>
                                                    <div class="notificaiton-count">1.7k</div>
                                                </li>
                                                <li class="service-notificaiton-tab col-4 col-sm-3 d-flex">
                                                    <div class="notificaiton-name">Followers</div>
                                                    <div class="notificaiton-count">1.3M</div>
                                                </li>
                                                <li class="service-notificaiton-tab col-4 col-sm-3 d-flex">
                                                    <div class="notificaiton-name">Following</div>
                                                    <div class="notificaiton-count">1200</div>
                                                </li>
                                            </ul>
                                        </div> --}}
                                        <!-- END: Service Notificaiton menu -->
                                    </div>
                                    <!-- END: Service main Body nav bar-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="card mt-2 p-3">
                                <div class="card-body ">
                                    <div class="service-main-body-content">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 font-weight-600 margin-bottom-1rem">
                                                <h1>{{ $service->category->name ?: 'NA' }}</h1>
                                            </div>
                                            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-6 margin-bottom-1rem ">
                                                <button id="buyBtn" class="btn btn-block btn-primary btn-right-50">Order
                                                    ({{ $service->price ?: '0' }} GP)
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-sm-12 col-md-7 mt-1 text-justify margin-bottom-1rem">
                                                <p>{{ $service->instructions ?: 'NA' }}</p>
                                            </div>
                                            @if (!empty($service->images) && isset($service->images[0]) && !empty($service->images[0]))
                                                <div class="col-12 col-md-5 text-right ">
                                                    <a href="#" class="pop">
                                                        <img id="img03" src='/{{ $service->images[0]->file_name }}'
                                                            alt=""
                                                            class="img-fluid border-radius-30 service-big-image zoom-clicked-img" />
                                                    </a>
                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-2 p-3">
                                <div class="card-body">
                                    <div class="service-main-body-content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <span class="d-flex review-header">
                                                    <h5 class="color-primary fw-bold">Service Review(s)</h5>
                                                    <span class="line"></span>
                                                    <span class="number-row-card ms-2">
                                                        <i class="fas fa-star"></i>
                                                        {{ $service->average_rate }}</span>
                                                </span>
                                                <ul class="review mt-3 mb-3">
                                                    @if (!empty($service->ratings))
                                                        @foreach ($service->ratings as $rating)
                                                            <li class="review-body mb-3">
                                                                <div
                                                                    class="review-head border-bottom-2 d-flex justify-content-between">
                                                                    <span class="review-intro p-3">
                                                                        <img src='{{ $rating->user->getProfilePicture() }}'
                                                                            alt="" />
                                                                        <span class="review-profile">
                                                                            <p class="fw-bold">
                                                                                {{ $rating->user->name }}</p>
                                                                            <p class="color-gray-fst">
                                                                                {{ Carbon\Carbon::parse($rating->created_at)->format('F d, Y') }}
                                                                            </p>
                                                                            <span class="review-star mobile-star">
                                                                                {!! str_repeat('<i class="fa fa-star"></i>', $rating->rating) !!}
                                                                                {!! str_repeat('<i class="fa fa-star-o"></i>', 5 - $rating->rating) !!}
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                    <span class="review-star desktop-star">
                                                                        {!! str_repeat('<i class="fa fa-star"></i>', $rating->rating) !!}
                                                                        {!! str_repeat('<i class="fa fa-star-o"></i>', 5 - $rating->rating) !!}
                                                                    </span>
                                                                </div>
                                                                <div class="review-comment color-gray-fst p-3">
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit.
                                                                    Molestiae aliquid quasi deleniti, nesciunt non
                                                                    perspiciatis
                                                                    magnam distinctio fugit tempora ut?
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- START: Timeline Tab Start here -->
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                            <div class="card mt-2 p-0">
                                <div class="card-body">
                                    <div class="service-main-body-content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- START: Create Post -->
                                                <div class="central-meta postbox">
                                                    <span class="create-post">Create post</span>
                                                    <form name="add-blog-post-form" id="add-blog-post-form" method="post"
                                                        enctype="multipart/form-data" action="{{ route('createPost') }}">
                                                        @csrf
                                                        <input type="hidden" name="service_id"
                                                            value="{{ $service->id }}">
                                                        <div class="new-postbox">
                                                            <figure>
                                                                <img src="/temp-services/images/admin.jpg" alt="">
                                                            </figure>
                                                            <div class="newpst-input">
                                                                <textarea rows="5" name="content"
                                                                    placeholder="Share some what you are thinking?"></textarea>
                                                            </div>
                                                            {{-- <div class="row">
                                                                <div id="video-holder" class="d-none">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-video">
                                                                        <polygon points="23 7 16 12 23 17 23 7">
                                                                        </polygon>
                                                                        <rect x="1" y="5" width="15" height="14" rx="2"
                                                                            ry="2"></rect>
                                                                    </svg>
                                                                    <input name="video_input" type="hidden" id="video-form"
                                                                        readonly>
                                                                    <span id="videofilename"></span>
                                                                </div>
                                                            </div> --}}
                                                            {{-- <div class="row">
                                                                <div id="music-holder" class="d-none">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-music">
                                                                        <path
                                                                            d="M9 17H5a2 2 0 0 0-2 2 2 2 0 0 0 2 2h2a2 2 0 0 0 2-2zm12-2h-4a2 2 0 0 0-2 2 2 2 0 0 0 2 2h2a2 2 0 0 0 2-2z">
                                                                        </path>
                                                                        <polyline points="9 17 9 5 21 3 21 15">
                                                                        </polyline>
                                                                    </svg>
                                                                    <input name="music_input" type="hidden" id="music-form"
                                                                        readonly>
                                                                    <span id="musicfilename"></span>
                                                                </div>
                                                            </div> --}}
                                                            <div class="row">
                                                                <div id="image-holder"></div>
                                                            </div>
                                                            <div class="attachments">
                                                                <ul>
                                                                    {{-- <li>
                                                                    <span class="add-loc">
                                                                        <i class="fa fa-map-marker"></i>
                                                                    </span>
                                                                </li> --}}
                                                                    {{-- <li>
                                                                        <i class="fa fa-music"></i>
                                                                        <label class="fileContainer">
                                                                            <input type="file" id="publisher-music"
                                                                                name="postMusic" accept="audio/*">
                                                                        </label>
                                                                    </li> --}}
                                                                    <li>
                                                                        <i class="fa fa-image"></i>
                                                                        <label class="fileContainer">
                                                                            <input type="file" id="publisher-photos"
                                                                                accept="image/x-png, image/gif, image/jpeg"
                                                                                name="postPhotos[]" multiple="multiple">
                                                                        </label>
                                                                    </li>
                                                                    {{-- <li>
                                                                        <i class="fa fa-video-camera"></i>
                                                                        <label class="fileContainer">
                                                                            <input type="file" id="publisher-video"
                                                                                name="postVideo" accept="video/*">
                                                                        </label>
                                                                    </li> --}}
                                                                    {{-- <li>
                                                                    <i class="fa fa-camera"></i>
                                                                    <label class="fileContainer">
                                                                        <input type="file">
                                                                    </label>
                                                                </li> --}}
                                                                    {{-- <li class="preview-btn">
                                                                        <button class="post-btn-preview" type="submit"
                                                                            data-ripple="">Preview</button>
                                                                    </li> --}}
                                                                </ul>
                                                                <button id="create-post-btn" class="post-btn"
                                                                    type="submit" data-ripple="">Post</button>
                                                            </div>
                                                            <div class="add-location-post">
                                                                <span>Drag map point to selected area</span>
                                                                <div class="row">

                                                                    <div class="col-lg-6">
                                                                        <label class="control-label">Lat :</label>
                                                                        <input type="text" class=""
                                                                            id="us3-lat">
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <label>Long :</label>
                                                                        <input type="text" class=""
                                                                            id="us3-lon">
                                                                    </div>
                                                                </div>
                                                                <!-- map -->
                                                                <div id="us3" style="position: relative; overflow: hidden;">
                                                                    <div
                                                                        style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                                                        <div style="overflow: hidden;"></div>
                                                                        <div class="gm-style"
                                                                            style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                                                            <div tabindex="0" aria-label="Map"
                                                                                aria-roledescription="map" role="group"
                                                                                style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;">
                                                                                <div
                                                                                    style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                                                                    <div
                                                                                        style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                                                        <div
                                                                                            style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                                            <div
                                                                                                style="position: absolute; z-index: 985; transform: matrix(1, 0, 0, 1, -244, -53);">
                                                                                                <div
                                                                                                    style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                                                                                    <div
                                                                                                        style="width: 256px; height: 256px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;">
                                                                                    </div>
                                                                                    <div
                                                                                        style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;">
                                                                                    </div>
                                                                                    <div
                                                                                        style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                                                        <div
                                                                                            style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                                                            <div
                                                                                                style="position: absolute; z-index: 985; transform: matrix(1, 0, 0, 1, -244, -53);">
                                                                                                <div
                                                                                                    style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            style="width: 27px; height: 43px; overflow: hidden; position: absolute; left: -14px; top: -43px; z-index: 0;">
                                                                                            <img alt=""
                                                                                                src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2_hdpi.png"
                                                                                                draggable="false"
                                                                                                style="position: absolute; left: 0px; top: 0px; width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                                                                    <div
                                                                                        style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                                                                        <div
                                                                                            style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;">
                                                                                        </div>
                                                                                        <div
                                                                                            style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;">
                                                                                        </div>
                                                                                        <div
                                                                                            style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                                                                            <div aria-label="Drag Me"
                                                                                                role="img" tabindex="-1"
                                                                                                style="width: 27px; height: 43px; overflow: hidden; position: absolute; touch-action: none; left: -14px; top: -43px; z-index: 0;">
                                                                                                <img alt=""
                                                                                                    src="https://maps.gstatic.com/mapfiles/transparent.png"
                                                                                                    draggable="false"
                                                                                                    usemap="#gmimap0"
                                                                                                    style="width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"><map
                                                                                                    name="gmimap0"
                                                                                                    id="gmimap0"><area
                                                                                                        log="miw"
                                                                                                        coords="13.5,0,4,3.75,0,13.5,13.5,43,27,13.5,23,3.75"
                                                                                                        shape="poly"
                                                                                                        tabindex="-1"
                                                                                                        title="Drag Me"
                                                                                                        style="cursor: pointer; touch-action: none;"></map>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="gm-style-moc"
                                                                                    style="z-index: 4; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
                                                                                    <p class="gm-style-mot"></p>
                                                                                </div>
                                                                            </div><iframe aria-hidden="true" frameborder="0"
                                                                                tabindex="-1"
                                                                                style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe>
                                                                            <div
                                                                                style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- END: Create post -->

                                                <div class="loadMore">
                                                    <!-- digital sponsors -->
                                                    @foreach ($service->posts as $post)
                                                        <div class="central-meta item" style="display: inline-block;">
                                                            <div class="user-post">
                                                                <div class="friend-info">
                                                                    <figure>
                                                                        <img src="{{ $post->postAuthor->getProfilePicture() }}"
                                                                            alt="">
                                                                    </figure>
                                                                    <div class="friend-name">
                                                                        {{-- <div class="more">
                                                                        <div class="more-post-optns"><i
                                                                                class="fas fa-ellipsis-h"></i>
                                                                            <ul>
                                                                                <li><i class="fas fa-edit"></i>Edit
                                                                                    Post
                                                                                </li>
                                                                                <li><i class="fas fa-trash"></i>Delete
                                                                                    Post</li>
                                                                                <li class="bad-report"><i
                                                                                        class="fa fa-flag"></i>Report
                                                                                    Post</li>
                                                                                <li><i
                                                                                        class="fas fa-address-card"></i>Boost
                                                                                    This Post</li>
                                                                                  <li><i class="fas fa-clock"></i>Schedule Post</li>
                                                                                  <li><i class="fab fa-wpexplorer"></i>Select as featured</li>
                                                                                  <li><i class="fas fa-bell-slash"></i>Turn off Notifications</li> 
                                                                            </ul>
                                                                        </div> 
                                                                    </div> --}}
                                                                        <ins><a href="time-line.html"
                                                                                title="">{{ $post->postAuthor->name ?: 'NA' }}</a>
                                                                            {{-- share <a href="#" title="">link</a> --}}
                                                                        </ins>
                                                                        <span><i class="fa fa-globe"></i> published:
                                                                            {{-- january,5 2010 19:PM --}}
                                                                            {{ Carbon\Carbon::parse($post->created_at)->format('F d, Y') }}
                                                                        </span>
                                                                    </div>
                                                                    <div class="post-meta">
                                                                        <div class="description">
                                                                            <p>{{ $post->content ?: '' }}
                                                                            </p>
                                                                        </div>

                                                                        @if (!empty($post->images))
                                                                            {{-- @foreach ($post->images as $postImage)
                                                                                @if ($postImage->type_id == 2)
                                                                                    <div class="row">
                                                                                        <div class="video-holder-show"
                                                                                            class="d-none">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                width="24" height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none"
                                                                                                stroke="currentColor"
                                                                                                stroke-width="2"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                class="feather feather-video">
                                                                                                <polygon
                                                                                                    points="23 7 16 12 23 17 23 7">
                                                                                                </polygon>
                                                                                                <rect x="1" y="5" width="15"
                                                                                                    height="14" rx="2"
                                                                                                    ry="2"></rect>
                                                                                            </svg>
                                                                                            <span
                                                                                                class="videofilenamedisplay">{{ $postImage->name }}</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="clear"></div>
                                                                                @endif
                                                                                @if ($postImage->type_id == 3)
                                                                                    <div class="row">
                                                                                        <div class="music-holder-show"
                                                                                            class="d-none">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                width="24" height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none"
                                                                                                stroke="currentColor"
                                                                                                stroke-width="2"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                class="feather feather-music">
                                                                                                <path
                                                                                                    d="M9 17H5a2 2 0 0 0-2 2 2 2 0 0 0 2 2h2a2 2 0 0 0 2-2zm12-2h-4a2 2 0 0 0-2 2 2 2 0 0 0 2 2h2a2 2 0 0 0 2-2z">
                                                                                                </path>
                                                                                                <polyline
                                                                                                    points="9 17 9 5 21 3 21 15">
                                                                                                </polyline>
                                                                                            </svg>
                                                                                            <span
                                                                                                class="musicfilenamedisplay">{{ $postImage->name }}</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="clear"></div>
                                                                                @endif
                                                                            @endforeach
                                                                            <div class="clear"></div> --}}

                                                                            <div id="fullsizeimg"
                                                                                style="position: relative;">
                                                                                <div class="row wo_adaptive_media">
                                                                                    @foreach ($post->images as $postImage)
                                                                                        {{-- @if ($postImage->type_id == 1) --}}
                                                                                            <div class="album-image {{$post->selectClassImage()}}">
                                                                                                <img src='{{ $postImage->file_name }}'
                                                                                                    alt="{{ $postImage->name }}"
                                                                                                    class="image-file pointer">
                                                                                            </div>
                                                                                            <div class="clear">
                                                                                            </div>
                                                                                        {{-- @endif --}}
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        {{-- <ul class="like-dislike">
                                                                        <li><a href="#" title="Save to Pin Post"><i class="fa fa-thumb-tack"></i></a></li>
                                                                        <li><a href="#" title="Like Post"><i class="fas fa-thumbs-up"></i></a></li>
                                                                        <li><a href="#" title="dislike Post"><i class="fas fa-thumbs-down"></i></a></li>
                                                                            </ul> --}}
                                                                        <div class="we-video-info">
                                                                            <ul>
                                                                                {{-- <li>
                                                                                    <span class="views"
                                                                                        title="views">
                                                                                        <i class="fa fa-eye"></i>
                                                                                        <ins>0</ins>
                                                                                    </span>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="likes heart"
                                                                                        title="Like/Dislike"><i
                                                                                            class="fas fa-heart"></i>
                                                                                        <span>0</span>
                                                                                    </div>
                                                                                </li> --}}
                                                                                {{-- <li>
                                                                                    <span class="comment"
                                                                                        title="Comments">
                                                                                        <i class="fa fa-commenting"></i>
                                                                                        <ins>0</ins>
                                                                                    </span>
                                                                                </li> --}}

                                                                                {{-- <li><span><a class="share-pst"
                                                                                            href="#" title="Share"><i
                                                                                                class="fa fa-share-alt"></i></a><ins>20</ins></span>
                                                                                </li> --}}
                                                                            </ul>
                                                                            {{-- <div class="users-thumb-list">
                                                                                <a data-toggle="tooltip" title="Anderw"
                                                                                    href="#" data-original-title="Anderw">
                                                                                    <img alt=""
                                                                                        src="/temp-services/images/userlist-1.jpg">
                                                                                </a>
                                                                                <a data-toggle="tooltip" title="frank"
                                                                                    href="#" data-original-title="frank">
                                                                                    <img alt=""
                                                                                        src="/temp-services/images/userlist-2.jpg">
                                                                                </a>
                                                                                <a data-toggle="tooltip" title="Sara"
                                                                                    href="#" data-original-title="Sara">
                                                                                    <img alt=""
                                                                                        src="/temp-services/images/userlist-3.jpg">
                                                                                </a>
                                                                                <a data-toggle="tooltip" title="Amy"
                                                                                    href="#" data-original-title="Amy">
                                                                                    <img alt=""
                                                                                        src="/temp-services/images/userlist-1.jpg">
                                                                                </a>
                                                                                <a data-toggle="tooltip" title="Ema"
                                                                                    href="#" data-original-title="Ema">
                                                                                    <img alt=""
                                                                                        src="/temp-services/images/userlist-2.jpg">
                                                                                </a>
                                                                                <span><strong>You</strong>, <b>Sarah</b> and
                                                                                    <a href="#" title="">24+ more</a>
                                                                                    liked</span>
                                                                            </div> --}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="coment-area" style="">
                                                                        <ul class="we-comet">
                                                                            <li>
                                                                                <div class="comet-avatar">
                                                                                    <img src="/temp-services/images/userlist-3.jpg"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="we-comment">
                                                                                    <h5><a href="time-line.html"
                                                                                            title="">Jason
                                                                                            borne</a></h5>
                                                                                    <p>we are working for the dance and sing
                                                                                        songs. this video is
                                                                                        very awesome for the youngster.
                                                                                        please
                                                                                        vote this video and
                                                                                        like our channel</p>
                                                                                    <div class="inline-itms">
                                                                                        <span>1 year ago</span>
                                                                                        <a class="we-reply" href="#"
                                                                                            title="Reply"><i
                                                                                                class="fa fa-reply"></i></a>
                                                                                        <a href="#" title=""><i
                                                                                                class="fa fa-heart"></i><span>20</span></a>
                                                                                    </div>
                                                                                </div>

                                                                            </li>
                                                                            <li>
                                                                                <div class="comet-avatar">
                                                                                    <img src="/temp-services/images/userlist-1.jpg"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="we-comment">
                                                                                    <h5><a href="time-line.html"
                                                                                            title="">Sophia</a></h5>
                                                                                    <p>we are working for the dance and sing
                                                                                        songs. this video is
                                                                                        very awesome for the youngster.

                                                                                        <i class="em em-smiley"></i>
                                                                                    </p>
                                                                                    <div class="inline-itms">
                                                                                        <span>1 year ago</span>
                                                                                        <a class="we-reply" href="#"
                                                                                            title="Reply"><i
                                                                                                class="fa fa-reply"></i></a>
                                                                                        <a href="#" title=""><i
                                                                                                class="fa fa-heart"></i><span>20</span></a>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title=""
                                                                                    class="showmore underline">more
                                                                                    comments+</a>
                                                                            </li>
                                                                            <li class="post-comment">
                                                                                <div class="comet-avatar">
                                                                                    <img src="/temp-services/images/userlist-2.jpg"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="post-comt-box">
                                                                                    <form method="post">
                                                                                        <textarea
                                                                                            placeholder="Post your comment"></textarea>
                                                                                        <div class="add-smiles">
                                                                                            <div class="uploadimage">
                                                                                                <i
                                                                                                    class="fa fa-image"></i>
                                                                                                <label
                                                                                                    class="fileContainer">
                                                                                                    <input type="file">
                                                                                                </label>
                                                                                            </div>
                                                                                            <span
                                                                                                class="em em-expressionless"
                                                                                                title="add icon"></span>
                                                                                            <div class="smiles-bunch">
                                                                                                <i
                                                                                                    class="em em---1"></i>
                                                                                                <i
                                                                                                    class="em em-smiley"></i>
                                                                                                <i
                                                                                                    class="em em-anguished"></i>
                                                                                                <i
                                                                                                    class="em em-laughing"></i>
                                                                                                <i
                                                                                                    class="em em-angry"></i>
                                                                                                <i
                                                                                                    class="em em-astonished"></i>
                                                                                                <i
                                                                                                    class="em em-blush"></i>
                                                                                                <i
                                                                                                    class="em em-disappointed"></i>
                                                                                                <i
                                                                                                    class="em em-worried"></i>
                                                                                                <i
                                                                                                    class="em em-kissing_heart"></i>
                                                                                                <i
                                                                                                    class="em em-rage"></i>
                                                                                                <i
                                                                                                    class="em em-stuck_out_tongue"></i>
                                                                                            </div>
                                                                                        </div>

                                                                                        <button type="submit"></button>
                                                                                    </form>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- END: Timeline Tab END here -->

                        <!-- START: Gallery -->
                        <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
                            <div class="card mt-2 p-3">
                                <div class="card-body ">
                                    <div class="service-main-body-content">
                                        <!-- Gallery -->
                                        <div class="row">
                                            @php
                                                $userGallery = $service->user
                                                    ->imagesAsArray()
                                                    ->get()
                                                    ->toArray();
                                            @endphp
                                            @if (!empty($userGallery))
                                                @foreach (array_chunk($userGallery, 2) as $galleryImage)
                                                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                                        @if (isset($galleryImage[0]) && !empty($galleryImage[0]))
                                                            <img src="{{ $galleryImage[0]['file_name'] }}"
                                                                class="w-100 shadow-1-strong rounded mb-4"
                                                                alt="{{ $galleryImage[0]['name'] }}" />
                                                        @endif
                                                        @if (isset($galleryImage[1]) && !empty($galleryImage[1]))
                                                            <img src="{{ $galleryImage[1]['file_name'] }}"
                                                                class="w-100 shadow-1-strong rounded mb-4"
                                                                alt="{{ $galleryImage[1]['name'] }}" />
                                                        @endif
                                                    </div>
                                                @endforeach
                                            @endif
                                            {{-- <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                                                    class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
                                                    class="w-100 shadow-1-strong rounded mb-4"
                                                    alt="Wintry Mountain Landscape" /> 
                                            </div> --}}

                                            {{-- <div class="col-lg-4 mb-4 mb-lg-0">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                                                    class="w-100 shadow-1-strong rounded mb-4"
                                                    alt="Mountains in the Clouds" />

                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                                                    class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                                            </div>

                                            <div class="col-lg-4 mb-4 mb-lg-0">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                                                    class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
                                                    class="w-100 shadow-1-strong rounded mb-4"
                                                    alt="Yosemite National Park" />
                                            </div> --}}
                                        </div>
                                        <!-- Gallery -->
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- END: Gallery -->
                    </div>
                    <!-- END: First Card mianbody -->

                    <!-- START: SECOND Card mianbody -->

                    <!-- END: First Card mianbody -->
                </div>
                <!-- END: Service main Body -->
            </div>
        </section>
        <!-- END: Service Section  -->

        <div class="modal fade modal-body-custom" id="imagemodal" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" data-dismiss="modal">
                <div class="modal-content modal-content-custom">
                    <div class="modal-body">
                        <button type="button" class="close" data-bs-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <img src="" class="imagepreview">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade in" id="file_not_supported" role="dialog">
            <div class="modal-dialog">

                <div class="modal-content">
                    <p style="text-align: center;padding: 30px 20px;font-family: Hind,Arial;font-size: 14px;">
                        <i class="fa fa-info-circle main" aria-hidden="true" style="color:#f2dede;"></i>
                        <?php echo 'This file format is not supported'; ?>
                    </p>
                </div>

            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script> -->
    <script src="{{ asset('js/slick.min.js') }}"></script>

    <script>
        jQuery(document).ready(function($) {
            // show comments	
            $('.comment').on('click', function() {
                $(this).parents(".post-meta").siblings(".coment-area").slideToggle("slow");
            });
            /*--- emojies show on text area ---*/
            $('.add-smiles > span, .smile-it').on("click", function() {
                $(this).siblings(".smiles-bunch").toggleClass("active");
            });

            $('.follow-heart').on("click", function() {
                if ($(this).parent().parent().parent().hasClass("active")) {
                    $(this).parent().parent().parent().removeClass("active");
                    $(this).html('Follow <i class="fa fa-heart ms-1"></i>');

                } else {
                    $(this).parent().parent().parent().toggleClass("active");
                    $(this).html('Following <i class="fa fa-heart ms-1"></i>');

                }
                // $(this).parent().find('').text('Following <i class="fa fa-heart ms-1"></i>');
            })
            $('.smile-it').on("click", function() {
                $(this).children(".smiles-bunch").toggleClass("active");
            });


            /** Post a Comment **/
            jQuery(".post-comt-box textarea").on("keydown", function(event) {
                if (event.keyCode == 13) {
                    var comment = jQuery(this).val();
                    var parent = jQuery(".showmore").parent("li");
                    var comment_HTML =
                        '<li><div class="comet-avatar"><img alt="" src="/temp-services/images/userlist-1.jpg"></div><div class="we-comment"><h5><a title="" href="time-line.html">Sophia</a></h5><p>' +
                        comment +
                        '</p><div class="inline-itms"><span>1 minut ago</span><a title="Reply" href="#" class="we-reply"><i class="fa fa-reply"></i></a><a title="" href="#"><i class="fa fa-heart"></i></a></div></div></li>';
                    $(comment_HTML).insertBefore(parent);
                    jQuery(this).val('');
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var showChar = 100;
            var ellipsestext = "...";
            var moretext = "more";
            var lesstext = "less";
            $('.more-description').each(function() {
                var content = $(this).html();
                if (content.length > showChar) {
                    var c = content.substr(0, showChar);
                    var h = content.substr(showChar - 0, content.length - showChar);

                    var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span>';
                    html += '<span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;';
                    html += '<a href="javascript:void(0)" class="morelink">' + moretext + '</a></span>';

                    $(this).html(html);
                }

            });

            $(".morelink").click(function() {
                if ($(this).hasClass("less")) {
                    $(this).removeClass("less");
                    $(this).html(moretext);
                } else {
                    $(this).addClass("less");
                    $(this).html(lesstext);
                }
                $(this).parent().prev().toggle();
                $(this).prev().toggle();
                return false;
            });

            $(function() {
                $('.pop').on('click', function() {
                    $('.imagepreview').attr('src', $(this).find('img').attr('src'));
                    $('#imagemodal').modal('show');
                });
            });
            var deleted_images = [];

            function DeleteImageById(name, id) {
                deleted_images.push(name);
                $('#image_to_' + id).remove();
            }
            // on click of photo upload icon
            $("#publisher-photos").on('change', function() {
                deleted_images = [];
                //Get count of selected files
                var countFiles = $(this)[0].files.length;
                var imgPath = $(this)[0].value;
                var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
                var image_holder = $("#image-holder");
                image_holder.empty();
                if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
                    if (typeof(FileReader) != "undefined") {
                        //loop for each file selected for uploaded.
                        for (var i = 0; i < countFiles; i++) {
                            var reader = new FileReader();
                            var ii = 0;
                            reader.onload = function(e) {
                                name = "'" + $("#publisher-photos")[0].files[ii].name + "'";
                                image_holder.append('<span class="thumb-image-delete" id="image_to_' +
                                    ii + '"><span onclick="DeleteImageById(' + name + ',' + ii +
                                    ')" class="pointer thumb-image-delete-btn"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path fill="currentColor" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg></span><img src="' +
                                    e.target.result + '" class="thumb-image"></span>')
                                ii = ii + 1;
                                // $("<img />", {
                                //                 "src": e.target.result,
                                //                 "class": "thumb-image"
                                //               }).appendTo(image_holder);
                            }
                            image_holder.show();
                            reader.readAsDataURL($(this)[0].files[i]);
                        }
                    } else {
                        image_holder.html("<p>This browser does not support FileReader.</p>");
                    }
                }
            });
            var allowed = "jpg,png,jpeg,gif,mkv,docx,zip,rar,pdf,doc,mp3,mp4,flv,wav,txt,mov,avi,webm,wav,mpeg";

            function isInArray(value, array) {
                return array.indexOf(value) > -1;
            }

            function Wo_IsFileAllowedToUpload(filename, allowed) {
                var extension = filename.replace(/^.*\./, '').toLowerCase();
                var allowed_array = allowed.split(',');
                if (isInArray(extension, allowed_array)) {
                    return true;
                }
                return false;
            }
            var Wo_Delay = (function() {
                var timer = 0;
                return function(callback, ms) {
                    clearTimeout(timer);
                    timer = setTimeout(callback, ms);
                };
            })();
            // on click of video upload icon
            $("#publisher-video").change(function() {
                var filename = $(this).val().replace(/C:\\fakepath\\/i, '');
                $("#video-form").val(filename);
                $("#video-holder").addClass("d-block").removeClass("d-none")
                $("#videofilename").html(filename)
                if (Wo_IsFileAllowedToUpload(filename, allowed) == false) {
                    $("#file_not_supported").modal('show');
                    Wo_Delay(function() {
                        $("#file_not_supported").modal('hide');
                    }, 3000);
                    $("#publisher-video").val('');
                    $("#video-form").val('');
                    return false;
                }
            });

            $("#publisher-music").change(function() {
                var filename = $(this).val().replace(/C:\\fakepath\\/i, '');
                $("#music-form").val(filename);
                $("#music-form").val(filename);
                $("#music-holder").addClass("d-block").removeClass("d-none")
                $("#musicfilename").html(filename)
                if (Wo_IsFileAllowedToUpload(filename, allowed) == false) {
                    $("#file_not_supported").modal('show');
                    Wo_Delay(function() {
                        $("#file_not_supported").modal('hide');
                    }, 3000);
                    $("#publisher-music").val('');
                    $("#music-form").val('');
                    return false;
                }
            });

            $('#add-blog-post-form').submit(function(e) {
                e.preventDefault();
                var buttonSubmit = $("#create-post-btn");
                $("#create-post-btn").disabled =  true;
                $("#create-post-btn").innerText = 'Posting…';
                this.submit();
            });
            // $(document).on("click", "#create-post-btn", function(e) {
            //     e.preventDefault();
                
            // });

        });

        $(document).ready(() => {
            let url = location.href.replace(/\/$/, "");

            if (location.hash) {
                const hash = url.split("#");
                $('#myTab a[href="#' + hash[1] + '"]').tab("show");
                url = location.href.replace(/\/#/, "#");
                history.replaceState(null, null, url);
                setTimeout(() => {
                    $(window).scrollTop(0);
                }, 400);
            }

            $('a[data-bs-toggle="tab"]').on("click", function() {
                let newUrl;
                const hash = $(this).attr("href");
                if (hash == "#home") {
                    newUrl = url.split("#")[0];
                } else {
                    newUrl = url.split("#")[0] + hash;
                }
                newUrl += "/";
                history.replaceState(null, null, newUrl);
            });
        });










        $('#imageCarousel').slick();

        $('#buyBtn').click(function(e) {
            var userBalance = @json(Auth::user()->points);
            var serviceCost = parseFloat('{{ $service->price }}');
            if (parseFloat(userBalance) < serviceCost) {
                Swal.fire('Error', 'You do not have enough GP to order this service.', 'error');
                e.preventDefault();
            }
        });
        @if (\Session::has('success'))
            Swal.fire('Success','{{ \Session::get('success') }}','success');
            {{ \Session::forget('success') }}
        @endif

        @if (\Session::has('error'))
            Swal.fire('Error','{{ \Session::get('error') }}','error');
            {{ \Session::forget('error') }}
        @endif
    </script>

    {{-- NEW CONTENT END --}}
@endsection


@section('scripts')
@endsection
