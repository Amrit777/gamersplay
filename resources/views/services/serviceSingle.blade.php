@extends('layouts.app')


@section('style')
<link rel="stylesheet" href="{{asset('css/slick.css')}}">
<link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">
<style>
.timeline-table th {
    background:var(--color-background);
    color:white;
}
</style>
@endsection



@section('content')






    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="/css/style-services.css" />


{{-- NEW CONTENT START --}}
<div class="gamePlay" id="gamePlay">
      

     

    <!-- START: Service Section -->
    <section class="service mt-4 mx-3" id="servicePage">
      <div class="row">
        <!-- START: Service Profile Side bar -->
        <div class="col-lg-2 col-sm-12 profileBar">
          <!-- START: Service Profile Side bar First Card -->
          <div class="card">
            <div class="card-body p-0 m-0">
              <div class="profile-image-part">
                <div class="profile-background">
                  <img
                    src="/temp-services/images/background.jpg"
                    alt=""
                    class="
                      img-fluid
                      profile-background-image
                      boder-top-left-right-radius
                    "
                  />
                </div>
                
              </div>
              <!-- START: Service Social button -->
              <!-- <div class="profile-mian-image border-radius-img">
                <img
                  src="/temp-services/images/profile.jpg"
                  alt=""
                  class="img-fluid profile-image"
                />
              </div> -->
              <div class="nav-button-side cust-nab-btn mt-2 mx-3">
                <div class="row justify-content-between">
                  <div class="col-3 ps-1">
                    <a class="btn-cust btn-color-primary share-btn-game" type="button">
                      <i class="fas fa-user-plus"></i>
                    </a>
                  </div>
                  <div class="col-6">
                    <div class="profile-mian-image-v2 border-radius-img-v2">
                      <img
                        src="/temp-services/images/profile.jpg"
                        alt=""
                        class="img-fluid profile-image-v2"
                      />
                    </div>
                  </div>
                  <div class="col-3 text-end">
                    <a class="btn-cust btn-color-primary message-btn-game" type="button">
                      <!-- <i class="far fa-comment"></i> -->
                      <i class="fas fa-comment"></i>
                    </a>
                  </div>
                </div>
              </div>
              <!-- END: Service Social button -->
              <div class="profile-info mt-4 px-2 mb-4 profile-name-top">
                <h3 class="profile-name text-center text-style-3 mb-4 profile-name-game">
                  NICK NAME HERE
                </h3>

                <div class="profile-about">
                  <h4
                    class="
                      profile-name
                      text-style-4
                      color-primary
                      head-style-fst
                    "
                  >
                    About Me
                  </h4>
                  <div class="body-fluid row">
                    <div
                      class="
                        text-name
                        col-6
                        text-style-5 text-start
                        info-game-name

                      "
                    >
                      Gender
                    </div>
                    <div
                      class="
                        text-text
                        col-6
                        text-style-5
                        info-game-name

                      "
                    >
                      Male
                    </div>
                  </div>
                  <div class="body-fluid row mt-1">
                    <div
                      class="
                        text-name
                        col-6
                        text-style-5 text-start
                        info-game-name

                      "
                    >
                      Age
                    </div>
                    <div
                      class="
                        text-text
                        col-6
                        text-style-5
                        info-game-name

                      "
                    >
                      25
                    </div>
                  </div>
                  <div class="body-fluid row mt-1">
                    <div
                      class="
                        text-name
                        col-6 
                        text-style-5 text-start
                        info-game-name
                      "
                    >
                      Language
                    </div>
                    <div
                      class="
                        text-text
                        col-6
                        text-style-5
                        info-game-name
                      "
                    >
                      English
                    </div>
                  </div>
                </div>

                <div class="profile-about mt-3">
                  <h4
                    class="
                      profile-name
                      text-style-4
                      color-primary
                      head-style-fst
                    "
                  >
                    Socials
                  </h4>
                  <div class="body-fluid row justify-content-start ps-2">
                    <a href="" class="icon-game col-3 icon-instagram">
                      <i class="fab fa-instagram"></i
                    ></a>
                    <a href="" class="icon-game col-3 icon-twitter">
                      <i class="fab fa-twitter"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END: Service Profile Side bar First Card -->

          <!-- START: Service Profile Side bar SECOND Card -->
          <div class="card mt-4 mb-4">
            <div class="profile-info mt-3 px-2 mb-4">
              <h3 class="profile-name text-center text-style-3 color-primary">
                BADGES
              </h3>
              <ul class="body-fluid row justify-content-start m-auto badge-card-star">
                <li class="icon-game-two col-3 icon-instagram my-2">
                  <a href=""> <i class="fab fa-instagram"></i></a>
                </li>
                <li class="icon-game-two col-3 icon-twitter my-2">
                  <a href=""> <i class="fab fa-twitter"></i></a>
                </li>
                <li class="icon-game-two col-3 icon-twitter my-2">
                  <a href=""> <i class="fab fa-instagram"></i></a>
                </li>
                <li class="icon-game-two col-3 icon-twitter my-2">
                  <a href=""> <i class="fab fa-twitter"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <!-- END: Service Profile Side bar SECOND Card -->
        </div>
        <!-- END: Service Profile Side bar -->

        <!-- START: Service main Body-->

        <div class="col-lg-7 col-sm-12 mainBody">
          <!-- START: First Card mianbody -->
          <div class="card">
            <div class="card-body">
              <div class="service-game-main-body">
                <div class="service-game-nav">
                  <!-- START: Service main Body nav bar-->
                  <div class="row">
                    <!-- START: Service main Menu -->
                    <div class="col-lg-7 col-md-7 col-sm-12 col-tab-nav">
                      <ul
                        class="nav nav-tabs nav-custom-nav"
                        id="myTab"
                        role="tablist"
                      >
                        <li class="nav-item" role="presentation">
                          <a
                            class="nav-link active"
                            id="home-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#home"
                            type="button"
                            role="tab"
                            aria-controls="home"
                            aria-selected="true"
                          >
                            Service Details
                          </a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a
                            class="nav-link"
                            id="profile-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#profile"
                            type="button"
                            role="tab"
                            aria-controls="profile"
                            aria-selected="false"
                          >
                            Timeline
                          </a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a
                            class="nav-link"
                            id="contact-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#contact"
                            type="button"
                            role="tab"
                            aria-controls="contact"
                            aria-selected="false"
                          >
                            Photos
                          </a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a
                            class="nav-link"
                            id="followers-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#followers"
                            type="button"
                            role="tab"
                            aria-controls="followers"
                            aria-selected="false"
                          >
                            Followers
                          </a>
                        </li>
                      </ul>
                  </div>
                    <!-- END: Service main Menu -->

                    <!-- START: Service Notificaiton menu -->
                    <div class="col-lg-5 col-md-5 col-sm-12 m-auto col-tab-nav-snd">
                      <ul
                        class="
                          service-nav-notificaiton
                          d-flex
                          justify-content-around
                        "
                      >
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
                    </div>
                    <!-- END: Service Notificaiton menu -->
                  </div>
                  <!-- END: Service main Body nav bar-->
                </div>
                <div class="service-main-body-content mt-5">
                  <div class="row">
                    <div class="col-12">
                      <div class="tab-content" id="myTabContent">
                        <div
                          class="tab-pane fade show active"
                          id="home"
                          role="tabpanel"
                          aria-labelledby="home-tab"
                        >
                          <div class="row">
                            <div class="col-lg-6">
                              <div
                                class="
                                  p-3
                                  body-content-service
                                  border-gray border-radius-30
                                "
                              >
                                Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Quae voluptatibus, ipsam
                                quam doloremque dolore a illum temporibus
                                aliquam quisquam exercitationem fugit earum
                                sapiente, soluta cumque placeat autem ad?
                                Similique, voluptatibus.
                              </div>
                            </div>
                            <div class="col-12 col-lg-6 ">
                              <img
                                src="/temp-services/images/C911EC08-D70A-4282-A03A-986C3EA434CF.png"
                                alt=""
                                class="img-fluid border-radius-30 service-big-image"
                              />
                            </div>
                          </div>
                        </div>
                        <!-- START: Timeline Tab Start here -->
                        <div
                          class="tab-pane fade"
                          id="profile"
                          role="tabpanel"
                          aria-labelledby="profile-tab"
                        >
                        <!-- START: Create Post -->
                        <div class="central-meta postbox">
                          <span class="create-post">Create post</span>
                          <div class="new-postbox">
                            <figure>
                              <img src="/temp-services/images/admin.jpg" alt="">
                            </figure>
                            <div class="newpst-input">
                              <form method="post">
                                <textarea rows="2" placeholder="Share some what you are thinking?"></textarea>
                              </form>
                            </div>
                            <div class="attachments">
                              <ul>
                                <!-- <li>
                                  <span class="add-loc">
                                    <i class="fa fa-map-marker"></i>
                                  </span>
                                </li> -->
                                <li>
                                  <i class="fa fa-music"></i>
                                  <label class="fileContainer">
                                    <input type="file">
                                  </label>
                                </li>
                                <li>
                                  <i class="fa fa-image"></i>
                                  <label class="fileContainer">
                                    <input type="file">
                                  </label>
                                </li>
                                <li>
                                  <i class="fa fa-video-camera"></i>
                                  <label class="fileContainer">
                                    <input type="file">
                                  </label>
                                </li>
                                <!-- <li>
                                  <i class="fa fa-camera"></i>
                                  <label class="fileContainer">
                                    <input type="file">
                                  </label>
                                </li> -->
                                <li class="preview-btn">
                                  <button class="post-btn-preview" type="submit" data-ripple="">Preview</button>
                                </li>
                              </ul>
                              <button class="post-btn" type="submit" data-ripple="">Post</button>
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
                                <div id="us3" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div style="overflow: hidden;"></div><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div tabindex="0" aria-label="Map" aria-roledescription="map" role="group" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;"><div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 985; transform: matrix(1, 0, 0, 1, -244, -53);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; z-index: 985; transform: matrix(1, 0, 0, 1, -244, -53);"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div></div></div><div style="width: 27px; height: 43px; overflow: hidden; position: absolute; left: -14px; top: -43px; z-index: 0;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2_hdpi.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><div aria-label="Drag Me" role="img" tabindex="-1" style="width: 27px; height: 43px; overflow: hidden; position: absolute; touch-action: none; left: -14px; top: -43px; z-index: 0;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" usemap="#gmimap0" style="width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"><map name="gmimap0" id="gmimap0"><area log="miw" coords="13.5,0,4,3.75,0,13.5,13.5,43,27,13.5,23,3.75" shape="poly" tabindex="-1" title="Drag Me" style="cursor: pointer; touch-action: none;"></map></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div class="gm-style-moc" style="z-index: 4; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"><p class="gm-style-mot"></p></div></div><iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe><div style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);"></div></div></div></div>
                            </div>
                          </div>
                          
                        </div>
                        <!-- END: Create post -->
                        
                        <div class="loadMore">
                         
                          
                          <!-- digital sponsors -->
                          <div class="central-meta item" style="display: inline-block;">
                            <div class="user-post">
                              <div class="friend-info">
                                <figure>
                                  <img src="/temp-services/images/nearly1.jpg" alt="">
                                </figure>
                                <div class="friend-name">
                                  <div class="more">
                                    <div class="more-post-optns"><i class="fas fa-ellipsis-h"></i>
                                      <ul>
                                        <li><i class="fas fa-edit"></i>Edit Post</li>
                                        <li><i class="fas fa-trash"></i>Delete Post</li>
                                        <li class="bad-report"><i class="fa fa-flag"></i>Report Post</li>
                                        <li><i class="fas fa-address-card"></i>Boost This Post</li>
                                        <!-- <li><i class="fas fa-clock"></i>Schedule Post</li>
                                        <li><i class="fab fa-wpexplorer"></i>Select as featured</li>
                                        <li><i class="fas fa-bell-slash"></i>Turn off Notifications</li> -->
                                      </ul>
                                    </div>
                                  </div>
                                  <ins><a href="time-line.html" title="">Jack Carter</a> share <a href="#" title="">link</a></ins>
                                  <span><i class="fa fa-globe"></i> published: january,5 2010 19:PM </span>
                                </div>
                                <div class="post-meta">
                                  <div class="description">
                                    <p>
                                      World's most beautiful car in Curabitur <a href="#" title="">#test drive booking !</a> the most beatuiful car available in america and the saudia arabia, you can book your test drive by our official website
                                    </p>
                                  </div>
                                  
                                  <!-- <ul class="like-dislike">
                                    <li><a href="#" title="Save to Pin Post"><i class="fa fa-thumb-tack"></i></a></li>
                                    <li><a href="#" title="Like Post"><i class="fas fa-thumbs-up"></i></a></li>
                                    <li><a href="#" title="dislike Post"><i class="fas fa-thumbs-down"></i></a></li>
                                  </ul> -->
                                  <div class="we-video-info">
                                    <ul>
                                      <li>
                                        <span class="views" title="views">
                                          <i class="fa fa-eye"></i>
                                          <ins>1.2k</ins>
                                        </span>
                                      </li>
                                      <li>
                                        <div class="likes heart" title="Like/Dislike"><i class="fas fa-heart"></i> <span>2K</span></div>
                                      </li>
                                      <li>
                                        <span class="comment" title="Comments">
                                          <i class="fa fa-commenting"></i>
                                          <ins>52</ins>
                                        </span>
                                      </li>
        
                                      <!-- <li>
                                        <span>
                                          <a class="share-pst" href="#" title="Share">
                                            <i class="fa fa-share-alt"></i>
                                          </a>
                                          <ins>20</ins>
                                        </span>	
                                      </li> -->
                                    </ul>
                                    <div class="users-thumb-list">
                                      <a data-toggle="tooltip" title="Anderw" href="#" data-original-title="Anderw">
                                        <img alt="" src="/temp-services/images/userlist-1.jpg">  
                                      </a>
                                      <a data-toggle="tooltip" title="frank" href="#" data-original-title="frank">
                                        <img alt="" src="/temp-services/images/userlist-2.jpg">  
                                      </a>
                                      <a data-toggle="tooltip" title="Sara" href="#" data-original-title="Sara">
                                        <img alt="" src="/temp-services/images/userlist-3.jpg">  
                                      </a>
                                      <a data-toggle="tooltip" title="Amy" href="#" data-original-title="Amy">
                                        <img alt="" src="/temp-services/images/userlist-1.jpg">  
                                      </a>
                                      <a data-toggle="tooltip" title="Ema" href="#" data-original-title="Ema">
                                        <img alt="" src="/temp-services/images/userlist-2.jpg">  
                                      </a>
                                      <span><strong>You</strong>, <b>Sarah</b> and <a href="#" title="">24+ more</a> liked</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="coment-area" style="" >
                                  <ul class="we-comet">
                                    <li>
                                      <div class="comet-avatar">
                                        <img src="/temp-services/images/userlist-3.jpg" alt="">
                                      </div>
                                      <div class="we-comment">
                                        <h5><a href="time-line.html" title="">Jason borne</a></h5>
                                        <p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel</p>
                                        <div class="inline-itms">
                                          <span>1 year ago</span>
                                          <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                          <a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
                                        </div>
                                      </div>
        
                                    </li>
                                    <li>
                                      <div class="comet-avatar">
                                        <img src="/temp-services/images/userlist-1.jpg" alt="">
                                      </div>
                                      <div class="we-comment">
                                        <h5><a href="time-line.html" title="">Sophia</a></h5>
                                        <p>we are working for the dance and sing songs. this video is very awesome for the youngster.
        
                                          <i class="em em-smiley"></i>
                                        </p>
                                        <div class="inline-itms">
                                          <span>1 year ago</span>
                                          <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                          <a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
                                        </div>
                                      </div>
                                    </li>
                                    <li>
                                      <a href="#" title="" class="showmore underline">more comments+</a>
                                    </li>
                                    <li class="post-comment">
                                      <div class="comet-avatar">
                                        <img src="/temp-services/images/userlist-2.jpg" alt="">
                                      </div>
                                      <div class="post-comt-box">
                                        <form method="post">
                                          <textarea placeholder="Post your comment"></textarea>
                                          <div class="add-smiles">
                                            <div class="uploadimage">
                                              <i class="fa fa-image"></i>
                                              <label class="fileContainer">
                                                <input type="file">
                                              </label>
                                            </div>
                                            <span class="em em-expressionless" title="add icon"></span>
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
                          
                          
                          </div>

                        </div>
                        <!-- END: Timeline Tab END here -->

                        <!-- START: Gallery Tab START here -->

                        <div
                          class="tab-pane fade"
                          id="contact"
                          role="tabpanel"
                          aria-labelledby="contact-tab"
                        >
                          hi there
                        </div>
                        <!-- END: Gallery Tab END here -->


                        <!-- START: Followers Tab START here -->
                        <div
                          class="tab-pane fade"
                          id="followers"
                          role="tabpanel"
                          aria-labelledby="followers-tab"
                        >
                          <div class="central-meta postbox">
                            <span class="create-post">Who's Following</span>
                            <div class="new-postbox">
                              <div class="follow-box">
                                <ul class="folow-image">
                                  <li class="fllow-li">
                                    <div class="d-flex">
                                    <div class="friend-info follower-image col-3 col-lg-3 col-3">
                                      <figure>
                                        <img src="/temp-services/images/nearly1.jpg" alt="">
                                      </figure>
                                    </div>
                                    <div class="follow-text m-auto col-5 col-lg-6">
                                      <span  class="color-primary">Follower since 5 month(s)</sp>
                                    </div>
                                    <div class="follow-button m-auto col-4 col-lg-3 text-end">
                                      <a  class="btn-primary-light follow-heart">Follow <i class="fa fa-heart ms-1"></i></a>
                                    </div>

                                  </div>
                                  </li>
                                  <li class="fllow-li">
                                    <div class="d-flex">
                                    <div class="friend-info follower-image col-3 col-lg-3 col-3">
                                      <figure>
                                        <img src="/temp-services/images/nearly1.jpg" alt="">
                                      </figure>
                                    </div>
                                    <div class="follow-text m-auto col-5 col-lg-6 ">
                                      <span  class="color-primary">Follower since 5 month(s)</sp>
                                    </div>
                                    <div class="follow-button m-auto col-4 col-lg-3 text-end">
                                      <a  class="btn-primary-light follow-heart">Follow <i class="fa fa-heart ms-1"></i></a>
                                    </div>

                                  </div>
                                  </li>
                                  <li class="fllow-li active">
                                    <div class="d-flex">
                                    <div class="friend-info follower-image col-3 col-lg-3 col-3">
                                      <figure>
                                        <img src="/temp-services/images/nearly1.jpg" alt="">
                                      </figure>
                                    </div>
                                    <div class="follow-text m-auto col-5 col-lg-6 ">
                                      <span  class="color-primary">Follower since 5 month(s)</sp>
                                    </div>
                                    <div class="follow-button m-auto col-4 col-lg-3 text-end">
                                      <a  class="btn-primary-light follow-heart">Follow <i class="fa fa-heart ms-1"></i></a>
                                    </div>

                                  </div>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END: Followers Tab END here -->

                      </div>
                      <!-- </div> -->
                    </div>
                    <!-- <div class="col-6">
                      <img
                        src="http://gamersplay.gg/imgs/temp-services/placeholder.jpg"
                        alt=""
                        class="img-fluid border-radius-30"
                      />
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END: First Card mianbody -->

          <!-- START: SECOND Card mianbody -->
          <div class="card mt-4 p-3">
            <span class="d-flex review-header">
              <h5 class="color-primary fw-bold">Service Review(s)</h5>
              <span class="line"></span>
              <!-- <span class="number ms-5 fw-bold">133</span> -->
              <span class="number-row-card ms-2"
                ><i class="fas fa-star"></i> 4.5</span
              >
            </span>
            <ul class="review mt-3 mb-3">
              <li class="review-body mb-3">
                <div
                  class="
                    review-head
                    border-bottom-2
                    d-flex
                    justify-content-between
                  "
                >
                  <span class="review-intro p-3">
                    <img src="/temp-services/images/profile.jpg" alt="" />
                    <span class="review-profile">
                      <p class="fw-bold">Dan Cortese</p>
                      <p class="color-gray-fst">February 24, 2021</p>
                      <span class="review-star mobile-star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </span>
                    </span>
                  </span>
                  <span class="review-star desktop-star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </span>
                </div>
                <div class="review-comment color-gray-fst p-3">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Molestiae aliquid quasi deleniti, nesciunt non perspiciatis
                  magnam distinctio fugit tempora ut?
                </div>
              </li>
            </ul>
          </div>
          <!-- END: First Card mianbody -->
        </div>
        <!-- END: Service main Body -->

        <!-- START: Service main Body-->

        <div class="col-lg-3 col-sm-12 weeklyReport">
          <div class="card table-card">
            <div class="table-responsive">
                <table class="table timeline-table" style="text-align: center">
                    <tr>
                        <th>Monday</th>
                        @if(isset(explode(':',$service->monday_from)[1]) && isset(explode(':',$service->monday_to)[1]))
                        <td>{{explode(':',$service->monday_from)[0].':'.explode(':',$service->monday_from)[1]}}</td>
                        <td>-</td>
                        <td>{{explode(':',$service->monday_to)[0].':'.explode(':',$service->monday_to)[1]}}</td>
                        @else
                        <td colspan="3">Unavailable</td>
                        @endif
                    </tr>
                    <tr>
                        <th>Tuesday</th>
                        @if(isset(explode(':',$service->tuesday_from)[1]) && isset(explode(':',$service->tuesday_to)[1]))
                        <td>{{explode(':',$service->tuesday_from)[0].':'.explode(':',$service->tuesday_from)[1]}}</td>
                        <td>-</td>
                        <td>{{explode(':',$service->tuesday_to)[0].':'.explode(':',$service->tuesday_to)[1]}}</td>
                        @else
                        <td colspan="3">Unavailable</td>
                        @endif
                    </tr>
                    <tr>
                        <th>Wednesday</th>
                        @if(isset(explode(':',$service->wednesday_from)[1]) && isset(explode(':',$service->wednesday_to)[1]))
                        <td>{{explode(':',$service->wednesday_from)[0].':'.explode(':',$service->wednesday_from)[1]}}</td>
                        <td>-</td>
                        <td>{{explode(':',$service->wednesday_to)[0].':'.explode(':',$service->wednesday_to)[1]}}</td>
                        @else
                        <td colspan="3">Unavailable</td>
                        @endif
                    </tr>
                    <tr>
                        <th>Thursday</th>
                        @if(isset(explode(':',$service->thursday_from)[1]) && isset(explode(':',$service->thursday_to)[1]))
    
                        <td>{{explode(':',$service->thursday_from)[0].':'.explode(':',$service->thursday_from)[1]}}</td>
                        <td>-</td>
                        <td>{{explode(':',$service->thursday_to)[0].':'.explode(':',$service->thursday_to)[1]}}</td>
                        @else
                        <td colspan="3">Unavailable</td>
                        @endif
                    </tr>
                    <tr>
                        <th>Friday</th>
                        @if(isset(explode(':',$service->friday_from)[1]) && isset(explode(':',$service->friday_to)[1]))
    
                        <td>{{explode(':',$service->friday_from)[0].':'.explode(':',$service->friday_from)[1]}}</td>
                        <td>-</td>
                        <td>{{explode(':',$service->friday_to)[0].':'.explode(':',$service->friday_to)[1]}}</td>
                        @else
                        <td colspan="3">Unavailable</td>
                        @endif
                    </tr>
                    <tr>
                        <th>Saturday</th>
                        @if(isset(explode(':',$service->saturday_from)[1]) && isset(explode(':',$service->saturday_to)[1]))
    
                        <td>{{explode(':',$service->saturday_from)[0].':'.explode(':',$service->saturday_from)[1]}}</td>
                        <td>-</td>
                        <td>{{explode(':',$service->saturday_to)[0].':'.explode(':',$service->saturday_to)[1]}}</td>
                        @else
                        <td colspan="3">Unavailable</td>
                        @endif
                    </tr>
                    <tr>
                        <th>Sunday</th>
                        @if(isset(explode(':',$service->sunday_from)[1]) && isset(explode(':',$service->sunday_to)[1]))
    
                        <td>{{explode(':',$service->sunday_from)[0].':'.explode(':',$service->sunday_from)[1]}}</td>
                        <td>-</td>
                        <td>{{explode(':',$service->sunday_to)[0].':'.explode(':',$service->sunday_to)[1]}}</td>
                        @else
                        <td colspan="3">Unavailable</td>
                        @endif
                    </tr>
                </table>
            </div>
            <form action="/service/{{$service->id}}/purchase" method="POST">
                @csrf
                <button id="buyBtn" class="btn btn-block btn-primary" style="margin-top:auto;">Order ({{$service->price}} GP)</button>
                </form>
                @if(Auth::user()->user_group == '3')
                <a href="/admin/temp-services/{{$service->id}}" class="btn btn-block btn-danger" style="margin-top:5px;">Edit on Admin Panel</a>
                @endif
          </div>
        </div>
        <!-- END: Service main Body -->
      </div>
    </section>
    <!-- END: Service Section  -->
  </div>
  <!-- JavaScript Bundle with Popper -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
  ></script>
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script> -->
  
  <script>
    jQuery(document).ready(function($) {
     // show comments	
  $('.comment').on('click', function () {
      $(this).parents(".post-meta").siblings(".coment-area").slideToggle("slow");
  });
    /*--- emojies show on text area ---*/	
  $('.add-smiles > span, .smile-it').on("click", function() {
      $(this).siblings(".smiles-bunch").toggleClass("active");
  });
  
$('.follow-heart').on("click", function () {
  if ($(this).parent().parent().parent().hasClass("active")) {
  $(this).parent().parent().parent().removeClass("active");
  $(this).html('Follow <i class="fa fa-heart ms-1"></i>');
    
  }else{
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
var comment_HTML = '<li><div class="comet-avatar"><img alt="" src="/temp-services/images/userlist-1.jpg"></div><div class="we-comment"><h5><a title="" href="time-line.html">Sophia</a></h5><p>'+comment+'</p><div class="inline-itms"><span>1 minut ago</span><a title="Reply" href="#" class="we-reply"><i class="fa fa-reply"></i></a><a title="" href="#"><i class="fa fa-heart"></i></a></div></div></li>';
$(comment_HTML).insertBefore(parent);
jQuery(this).val('');
}
}); 


      });
    
  //  function toggleComment(){
  //     $('.coment-area').toggleClass('d-block');
  //   }
  </script>

{{-- NEW CONTENT END --}}







<script src="{{asset('js/slick.min.js')}}"></script>

@endsection


@section('scripts')
<script>



@if (\Session::has('success'))
    Swal.fire('Success','{{\Session::get('success')}}','success');
    {{\Session::forget('success')}}
    @endif

    @if (\Session::has('error'))
    Swal.fire('Error','{{\Session::get('error')}}','error');
    {{\Session::forget('error')}}
    @endif


    $('#imageCarousel').slick();

    $('#buyBtn').click(function (e) { 
        var userBalance = @json(Auth::user()->points);
        var serviceCost = parseFloat('{{$service->price}}');
        if(parseFloat(userBalance) < serviceCost) {
            Swal.fire('Error','You do not have enough GP to order this service.','error');
            e.preventDefault();
        }
       
        
    });
</script>
@endsection