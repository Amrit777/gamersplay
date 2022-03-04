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
                            <input type="hidden" name="service_id" value="{{ $service->id }}">
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
                                                    accept="image/x-png, image/gif, image/jpeg" name="postPhotos[]"
                                                    multiple="multiple" {{-- onchange="checkFiles(this.files)" --}}>
                                            </label>
                                            <span id="postphotos_error"></span>
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
                                    <button id="create-post-btn" class="post-btn" type="submit"
                                        data-ripple="">Post</button>
                                </div>
                                <div class="add-location-post">
                                    <span>Drag map point to selected area</span>
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <label class="control-label">Lat :</label>
                                            <input type="text" class="" id="us3-lat">
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Long :</label>
                                            <input type="text" class="" id="us3-lon">
                                        </div>
                                    </div>
                                    <!-- map -->
                                    <div id="us3" style="position: relative; overflow: hidden;">
                                        <div
                                            style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                            <div style="overflow: hidden;"></div>
                                            <div class="gm-style"
                                                style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                                <div tabindex="0" aria-label="Map" aria-roledescription="map"
                                                    role="group"
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
                                                                        <div style="width: 256px; height: 256px;">
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
                                                                <div aria-label="Drag Me" role="img" tabindex="-1"
                                                                    style="width: 27px; height: 43px; overflow: hidden; position: absolute; touch-action: none; left: -14px; top: -43px; z-index: 0;">
                                                                    <img alt=""
                                                                        src="https://maps.gstatic.com/mapfiles/transparent.png"
                                                                        draggable="false" usemap="#gmimap0"
                                                                        style="width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"><map
                                                                        name="gmimap0" id="gmimap0"><area log="miw"
                                                                            coords="13.5,0,4,3.75,0,13.5,13.5,43,27,13.5,23,3.75"
                                                                            shape="poly" tabindex="-1" title="Drag Me"
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
                                                </div><iframe aria-hidden="true" frameborder="0" tabindex="-1"
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

                    <div class="loadMore post-box">
                        <!-- digital sponsors -->
                        @foreach ($service->posts as $post)
                            <div class="central-meta item" style="display: inline-block;">
                                <div class="user-post">
                                    <div class="friend-info">
                                        <figure>
                                            <img src="{{ $post->postAuthor->getProfilePicture() }}" alt="">
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

                                                <div id="fullsizeimg" style="position: relative;">
                                                    <div class="row wo_adaptive_media">
                                                        @foreach ($post->images as $postImage)
                                                            {{-- @if ($postImage->type_id == 1) --}}
                                                            <div class="album-image {{ $post->selectClassImage() }}">
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
                                                    <li>
                                                        <span class="views" title="views">
                                                            <i class="fa fa-eye"></i>
                                                            <ins>0</ins>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <div class="likes heart post-reaction {{$post->userliked() ? 'active-heart' : ""}}" title="Like/Dislike"
                                                            data-post-id="{{ $post->id }}"
                                                            data-reaction-id="{{$post->likedPost()}}">
                                                            <i class="fas fa-heart"></i>
                                                            <span class="liked_post_count">{{$post->likes->count()}}</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="comment"
                                                            title="Comments">
                                                            <i class="fa fa-commenting"></i>
                                                            <ins class="comment_post_count_{{$post->id}}">{{$post->comments->count()}}</ins>
                                                        </span>
                                                    </li>

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
                                                @if(!empty($post->comments))
                                                    @foreach($post->comments as $comment)
                                                    <li>
                                                        <div class="comet-avatar">
                                                            <img src="{{$comment->user->getProfilePicture()}}" alt="">
                                                        </div>
                                                        <div class="we-comment">
                                                            <h5><a href="time-line.html" title="">{{$comment->user->name}}</a></h5>
                                                            <p>{{$comment->body}}</p>
                                                            <div class="inline-itms">
                                                                <span>{{ Carbon\Carbon::parse($comment->created_at)->format('F d, Y') }}</span>
                                                                {{-- <a class="we-reply" href="#" title="Reply"><i
                                                                        class="fa fa-reply"></i></a> --}}
                                                                {{-- <a href="#" title=""><i
                                                                        class="fa fa-heart"></i><span>20</span></a> --}}
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                @endif
{{--                                                 
                                                <li>
                                                    <div class="comet-avatar">
                                                        <img src="/temp-services/images/userlist-1.jpg" alt="">
                                                    </div>
                                                    <div class="we-comment">
                                                        <h5><a href="time-line.html" title="">Sophia</a></h5>
                                                        <p>we are working for the dance and sing
                                                            songs. this video is
                                                            very awesome for the youngster.

                                                            <i class="em em-smiley"></i>
                                                        </p>
                                                        <div class="inline-itms">
                                                            <span>1 year ago</span>
                                                            <a class="we-reply" href="#" title="Reply"><i
                                                                    class="fa fa-reply"></i></a>
                                                            <a href="#" title=""><i
                                                                    class="fa fa-heart"></i><span>20</span></a>
                                                        </div>
                                                    </div>
                                                </li> --}}
                                                <li>
                                                    <a href="#" title="" class="showmore underline" data-comment-load="load_more_{{$post->id}}" id="showmore_{{$post->id}}">more
                                                        comments+</a>
                                                </li>
                                                <li class="post-comment">
                                                    <div class="comet-avatar">
                                                        <img src="/temp-services/images/userlist-2.jpg" alt="">
                                                    </div>
                                                    <div class="post-comt-box">
                                                        <form method="POST" action="#" id="comment_{{$post->id}}" data-post-id="{{$post->id}}">
                                                            <input name="commentable_id" type="hidden" value="{{$post->id}}" id="commentable_id_{{$post->id}}">
                                                            <textarea placeholder="Post your comment" name="body" id="commentable_content_{{$post->id}}" data-post-id="{{$post->id}}"></textarea>
                                                            {{-- <div class="add-smiles">
                                                                <div class="uploadimage">
                                                                    <i class="fa fa-image"></i>
                                                                    <label class="fileContainer">
                                                                        <input type="file">
                                                                    </label>
                                                                </div>
                                                                <span class="em em-expressionless"
                                                                    title="add icon"></span>
                                                                <div class="smiles-bunch">
                                                                    <i class="em em---1"></i>
                                                                    <i class="em em-smiley"></i>
                                                                    <i class="em em-anguished"></i>
                                                                    <i class="em em-laughing"></i>
                                                                    <i class="em em-angry"></i>
                                                                    <i class="em em-astonished"></i>
                                                                    <i class="em em-blush"></i>
                                                                    <i class="em em-disappointed"></i>
                                                                    <i class="em em-worried"></i>
                                                                    <i class="em em-kissing_heart"></i>
                                                                    <i class="em em-rage"></i>
                                                                    <i class="em em-stuck_out_tongue"></i>
                                                                </div>
                                                            </div> --}}

                                                            {{-- <button type="submit"></button> --}}
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
