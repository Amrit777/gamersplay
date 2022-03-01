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