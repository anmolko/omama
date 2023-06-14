@extends('frontend.layouts.master')
@section('title') Clients @endsection
@section('css')
    <style>
        .btn-custom {
            background: #e42032;
            color: #fff;
            border: none;
            color: #0f0f11;
            padding: 12px 24px;
            border: none;
            font-weight: 600;
            margin-right: 10px;
            background: transparent;
            position: relative;
            cursor: pointer;
            border: none;
        }
        .btn:hover,.btn-active {
            background: #f44336;
            color: #fff;
            -webkit-transform: translateY(3px);
            -ms-transform: translateY(3px);
            transform: translateY(3px);
        }
        .gallery {
            display: flex;
            justify-content: center;
            width: fit-content;
            max-width: 1320px;
            flex-wrap: wrap;
            margin: 25px auto;
            /* gap: 14px; */
        }

        .sets .hide,
        .sets .pophide {
            width: 0%;
            opacity: 0;
        }

        .closeBtn {
            position: absolute;
            font-size: 22px;
            font-weight: 500;
            right: 25px;
            top: 25px;
            color: white;
            transition: 0.5s linear;
            padding: 8px 40px;
            border-radius: 25px;
            background: red;
            outline-offset: -6px;
            outline: 2px solid #fff;
        }
        .closeBtn:hover {
            cursor: pointer;
            background: white;
            color: black;
            outline: 2px solid #000;
        }

        .openDiv {
            width: 100%;
            height: 100vh;
            background: #000000e7;
            position: fixed;
            top: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            left: 0;
            z-index: 9999;
        }
        .imgPreview {
            width: 70%;
            object-fit: scale-down;
            max-height: 40vw;
            height: auto;
        }
        .prevButton,
        .nextButton {
            transition: 1s linear;
            padding: 10px 35px;
            font-size: 18px;
            border: none;
            color: white;
            background: #0005;
            border-radius: 10px;
            border: 1px solid white;
            margin: 10px;
        }
        .prevButton:hover,
        .nextButton:hover {
            background: #fff;
            color: black;
        }

        /* resposive CSS Code */

        @media max-width: 1199px {
            .section-padding {
                padding-top: 70px;
            }
        }
        @media (max-width: 991px) {
            .section-padding {
                padding-top: 50px;
            }
        }
        @media (max-width: 767px) {
            .title {
                font-size: 36px;
            }
            .gallery img {
                margin: 8px 8px;
                width: 175px;
            }
            .closeBtn {
                padding: 6px 25px;
            }
            .prevButton,
            .nextButton {
                font-size: 18px;
                padding: 8px 25px;
            }
        }

        @media (max-width: 540px) {
            .section-padding {
                padding-top: 30px;
            }

            .gallery img {
                margin: 8px 6px;
                width: 155px;
            }

            .closeBtn {
                font-size: 18px;
                border-radius: 15px;
            }
            .prevButton,
            .nextButton {
                font-size: 18px;
                padding: 6px 20px;
                border-radius: 10px;
                margin: 5px;
            }

            .imgPreview {
                width: 90%;
                max-height: 50vh;
                height: auto;
            }

        }



    </style>
@endsection
@section('content')
    <div class="sc-breadcrumb-style sc-pt-135 sc-pb-110">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sc-slider-content p-z-idex">
                        <div class="sc-slider-subtitle">Home - Clients</div>
                        <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">Clients</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="sc-popular-courses" class="sc-project-filter-section sc-pt-100 sc-md-pt-80 sc-pb-85 sc-md-pb-65">
        <div class="container">
            <div class="row">
                <div class="text-center mb-70 md-mb-50">
                    <div id="btncontainer" class="filter">
                        <a class="btn btn-custom  btn-active" href="#all">ALL</a>
                        @foreach($country as $index=>$cn)
                        <a class="btn btn-custom " href="#{{$index}}">{{$cn}}</a>
                        @endforeach
                    </div>
                </div>

                <!-- Gallery Section Start -->

                <div class="gallery sets">
                    @foreach(@$clients as $client)
                        <div class="col-lg-4 col-md-6 mb-4 image-box all {{@$client->country}}" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="sc-team-pages-content-box text-center sc-mb-40">
                                <div class="sc-page-item" style="height: 170px;padding: 20px 45px 65px;     margin-right: 15px;">
                                    <a href="{{ $client->link ?? '#' }}" target="{{ ($client->link !== null) ? '_blank':'' }}"
                                    ><img src="{{asset('/images/clients/'.@$client->image)}}" alt="Teem"
                                        /></a>
                                    <div class="sc-slider-text">
                                        <h4>
                                            <a class="title" href="{{ $client->link ?? '#' }}" target="{{ ($client->link !== null) ? '_blank':'' }}">
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>

@endsection
@section('js')
    <script>
        $(".filter a").click(function (e) {
            e.preventDefault();
            var a = $(this).attr("href");
            a = a.substr(1);
            $(".sets .image-box").each(function () {
                if (!$(this).hasClass(a) && a != "") $(this).addClass("hide");
                else $(this).removeClass("hide");
            });



// Add active class to the current button (highlight it)
            var btnContainer = document.getElementById("btncontainer");
            var btns = btnContainer.getElementsByClassName("btn-custom");
            for (var i = 0; i < btns.length; i++) {
                var current = document.getElementsByClassName("btn-active");
                current[0].className = current[0].className.replace(" btn-active", "");
                this.className += " btn-active";

            }
        });


        let imgs = document.querySelectorAll("img");
        let count;
        imgs.forEach((img, index) => {
            img.addEventListener("click", function (e) {
                if (e.target == this) {
                    count = index;
                    let openDiv = document.createElement("div");
                    let imgPreview = document.createElement("img");
                    let butonsSection = document.createElement("div");
                    butonsSection.classList.add("butonsSection");
                    let closeBtn = document.createElement("button");
                    let nextBtn = document.createElement("button");
                    let prevButton = document.createElement("button");
                    prevButton.innerText = "Previous";
                    nextBtn.innerText = "Next";

                    nextBtn.classList.add("nextButton");
                    prevButton.classList.add("prevButton");
                    nextBtn.addEventListener("click", function () {
                        if (count >= imgs.length - 1) {
                            count = 0;
                        } else {
                            count++;
                        }

                        imgPreview.src = imgs[count].src;
                    });

                    prevButton.addEventListener("click", function () {
                        if (count === 0) {
                            count = imgs.length - 1;
                        } else {
                            count--;
                        }

                        imgPreview.src = imgs[count].src;
                    });

                    closeBtn.classList.add("closeBtn");
                    closeBtn.innerText = "Close";
                    closeBtn.addEventListener("click", function () {
                        openDiv.remove();
                    });

                    imgPreview.classList.add("imgPreview");
                    imgPreview.src = this.src;

                    butonsSection.append(prevButton, nextBtn);
                    openDiv.append(imgPreview, butonsSection, closeBtn);

                    openDiv.classList.add("openDiv");

                    document.querySelector("body").append(openDiv);
                }
            });
        });




    </script>
@endsection
