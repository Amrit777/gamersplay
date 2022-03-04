@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style-services.css?v=') . time() }}" />
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css?v=') . time() }}" />
@endsection
@section('content')
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
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="gallery-tab" data-bs-toggle="tab"
                                                        data-bs-target="#gallery" type="button" role="tab"
                                                        aria-controls="gallery" aria-selected="false" href="#gallery">
                                                        Photos
                                                    </a>
                                                </li>
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
                            @include('services.serviceDetails', [
                                'service' => $service,
                            ])
                        </div>

                        <!-- START: Timeline Tab Start here -->
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            @include('services.servicesPost', [
                                'service' => $service,
                            ])
                        </div>
                        <!-- END: Timeline Tab END here -->

                        <!-- START: Gallery -->
                        <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
                            <div class="card mt-2 p-3">
                                <div class="card-body ">
                                    <div class="service-main-body-content">
                                        @include('services.galleryImages', [
                                            'service' => $service,
                                        ])
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

        <div class="modal fade modal-body-custom" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
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

    {{-- NEW CONTENT END --}}
@endsection


@push('scripts')
    <script src="{{ asset('js/mdb.min.js') }}"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script> -->

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
                    event.preventDefault();
                    let comment = jQuery(this).val();
                    let post_id = jQuery(this).attr("data-post-id");
                    if (!post_id) {
                        return false;
                    }

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: 'POST',
                        url: "/post/comment",
                        data: $('#' + event.target.form.id).serialize(),
                        success: function(response) {
                            console.log("response", response)
                            if (response.status === true && response.code === 200) {
                                var parent = jQuery("#showmore_" + post_id).parent("li");
                                var comment_HTML =
                                    '<li><div class="comet-avatar"><img alt="" src="{{ Auth::user()->getProfilePicture() }}"></div><div class="we-comment"><h5><a title="" href="time-line.html">{{ Auth::user()->name }}</a></h5><p>' +
                                    comment +
                                    '</p><div class="inline-itms"><span>1 min ago</span></div></div></li>';
                                    // '</p><div class="inline-itms"><span>1 minut ago</span><a title="Reply" href="#" class="we-reply"><i class="fa fa-reply"></i></a><a title="" href="#"><i class="fa fa-heart"></i></a></div></div></li>';                                    
                                $(comment_HTML).insertBefore(parent);
                                $("#commentable_content_"+post_id).val("");
                                $("#comment_post_count_"+post_id).val(response.count);
                            }
                        },
                        error: function() {
                            jQuery(this).val('');
                        }
                    });
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

            // on click of photo upload icon
            $("#publisher-photos").on('change', function(e) {
                deleted_images = [];
                //Get count of selected files
                var countFiles = $(this)[0].files.length;
                $("#postphotos_error").html("");
                if (countFiles > 4) {
                    $("#postphotos_error").html("Only 4 files allowed!!!");
                    e.preventDefault();
                } else {
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
                                    image_holder.append(
                                        '<span class="thumb-image-delete" id="image_to_' +
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
            // $("#publisher-video").change(function() {
            //     var filename = $(this).val().replace(/C:\\fakepath\\/i, '');
            //     $("#video-form").val(filename);
            //     $("#video-holder").addClass("d-block").removeClass("d-none")
            //     $("#videofilename").html(filename)
            //     if (Wo_IsFileAllowedToUpload(filename, allowed) == false) {
            //         $("#file_not_supported").modal('show');
            //         Wo_Delay(function() {
            //             $("#file_not_supported").modal('hide');
            //         }, 3000);
            //         $("#publisher-video").val('');
            //         $("#video-form").val('');
            //         return false;
            //     }
            // });

            // $("#publisher-music").change(function() {
            //     var filename = $(this).val().replace(/C:\\fakepath\\/i, '');
            //     $("#music-form").val(filename);
            //     $("#music-form").val(filename);
            //     $("#music-holder").addClass("d-block").removeClass("d-none")
            //     $("#musicfilename").html(filename)
            //     if (Wo_IsFileAllowedToUpload(filename, allowed) == false) {
            //         $("#file_not_supported").modal('show');
            //         Wo_Delay(function() {
            //             $("#file_not_supported").modal('hide');
            //         }, 3000);
            //         $("#publisher-music").val('');
            //         $("#music-form").val('');
            //         return false;
            //     }
            // });

            $('#add-blog-post-form').submit(function(e) {
                e.preventDefault();
                var buttonSubmit = $("#create-post-btn");
                $("#create-post-btn").disabled = true;
                $("#create-post-btn").innerText = 'Posting…';
                this.submit();
            });

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


        $(document).ready(() => {
            $(document).on("click", ".post-box", function(e) {
                if (e.target.classList.contains("post-reaction")) {
                    registerReaction(e.target)
                }
            })

        });


        function registerReaction(element) {
            let post_id = $(element).attr('data-post-id');
            let liked = $(element).attr('data-reaction-id');
            let userReaction;
            if (liked === '1') {
                userReaction = 0;
            } else {
                userReaction = 1;
            }
            if (!post_id) {
                return false;
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: 'post',
                url: `/post/like`,
                data: {
                    'id': post_id,
                    'liked': userReaction
                },
                success: function(response) {
                    let msg;
                    if (response.status === true && response.code === 200) {
                        if (response.liked === '1') {
                            $(element).addClass('active-heart');
                        } else {
                            $(element).removeClass('active-heart');
                        }
                        $(element).attr('data-reaction-id', response.liked);
                        $(element.lastElementChild).text(response.likes_count)
                        // Swal.fire(response.message);
                    }

                    if (response.status === false && response.code === 400) {
                        Swal.fire(response.message);
                    }
                    if (response.status === false && response.code === 500) {
                        Swal.fire(response.message);
                    }
                    setTimeout(() => {
                        Swal.close();
                    }, 800);
                },
                error: function(XMLHttpRequest) {
                    Swal.fire('An error occured while attempting this action.');
                }
            });

        }


        // delete image preview
        var deleted_images = [];

        function DeleteImageById(name, id) {
            deleted_images.push(name);
            $('#image_to_' + id).remove();
        }
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

    <script>
        $(document).on("ready", function() {
            let lightbox = document.getElementById('lightbox');
            let lightboxInstance = mdb.Lightbox.getInstance(lightbox);
            let lightboxToggler = document.getElementById('lightboxToggler');
            lightboxToggler.addEventListener('click', function() {
                lightboxInstance.open(1);
                lightboxInstance.allowfullscreen(true)
            });

        });
    </script>
@endpush
