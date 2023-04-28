<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../../assets/js/gallery.js"></script>
    <style>
        .link {
            text-decoration: none;
        }


        * {
            font-family: "Open Sans", sans-serif;
        }



        body {
            width: 100%;
            height: 100%;
            font-family: "Open Sans", sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 1.5;
            -ms-overflow-style: none;
            scrollbar-width: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .link {
            text-decoration: none;
            color: black;
        }

        body::-webkit-scrollbar {
            display: none;
        }

        .tab-heading {
            text-align: center;
            font-size: 3rem;
            font-weight: 200;

        }

        .tb-main {
            margin: 0 auto;
            background: #fff;
            text-align: center;

        }

        @media screen and (max-width:600px) {
            .tb-main {
                padding: 0px;
                margin-top: 80px;
            }
        }

        section {
            display: none;
            padding: 20px 0 0;

        }

        input.brand-tabs {
            display: none;
        }

        label.brand-tabs {
            display: inline-block;
            margin: 0 0 -1px;
            padding: 10px 25px;
            font-weight: 600;
            text-align: center;
            color: black;
            background-color: #d4bbeb;
            border-radius: 8px;
        }


        label.brand-tabs:hover {
            color: black;
            cursor: pointer;

        }

        input:checked+label.brand-tabs {
            color: black;
            border-radius: 8px;
            background-color: #b34ee6;
        }

        #tab1:checked~#content1,
        #tab2:checked~#content2,
        #tab3:checked~#content3,
        #tab4:checked~#content4,
        #tab5:checked~#content5,
        #tab6:checked~#content6,
        #tab7:checked~#content7 {
            display: block;

        }

        @media screen and (max-width: 650px) {
            label.brand-tabs {
                font-size: 0;
            }

            label.brand-tabs:before {
                font-family: fontawesome;
                font-weight: normal;
                margin-right: 10px;
            }

            label.brand-tabs[for*="1"]:before {
                content: "Labs";
            }

            label.brand-tabs[for*="2"]:before {
                content: "Association";
            }

            /* label.brand-tabs[for*="3"]:before {
                content: "Independence Day";
            } */

            /* label.brand-tabs[for*="4"]:before {
                content: "Events";
            }

            label.brand-tabs[for*="5"]:before {
                content: "Gallery";
            }

            label.brand-tabs[for*="6"]:before {
                content: "Students Achievements";
            }

            label.brand-tabs[for*="7"]:before {
                content: "Course Material";
            } */


            label.brand-tabs:before {
                margin: 0;
                font-size: 18px;
            }
        }

        @media screen and (max-width: 400px) {
            label.brand-tabs {
                padding: 15px;
            }

            label.brand-tabs:before {
                font-family: fontawesome;
                font-weight: normal;
                margin-right: 10px;
            }

            label.brand-tabs[for*="1"]:before {
                content: "Labs";
            }

            label.brand-tabs[for*="2"]:before {
                content: "Association";
            }

            /* label.brand-tabs[for*="3"]:before {
                content: "Independence Day";
            } */

            /* label.brand-tabs[for*="4"]:before {
                content: "Events";
            }

            label.brand-tabs[for*="5"]:before {
                content: "Gallery";
            }

            label.brand-tabs[for*="6"]:before {
                content: "Students Achievements";
            }

            label.brand-tabs[for*="7"]:before {
                content: "Course Material";
            } */

        }


        /* Gallery Section Starts */
        .gallery-container {
            position: relative;
            min-height: 100%;
            width: 100%;
            background: #fff;
        }

        .image-container {
            height: 68vh;
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
            overflow-y: scroll;
            padding: 10px;
        }

        .image-container::-webkit-scrollbar {
            width: 10px;
        }

        .image-container::-webkit-scrollbar-track {

            border-radius: 27px;
        }

        .image-container::-webkit-scrollbar-thumb {
            background: #d4bbeb;
            border-radius: 27px;
        }

        .image-container::-webkit-scrollbar-thumb:hover {
            background: #d4bbeb;
        }

        .image {

            height: 250px;
            width: 350px;
            border-radius: 27px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .1);
            overflow: hidden;
            cursor: pointer;
        }

        .image img {
            width: 100%;
            height: 100%;
            object-fit: fill;
            transform: scale(1.1);
            transition: .2s linear;
        }

        .image:hover img {
            transform: scale(1.4);
            text-decoration: none;
        }

        .image .text-block {
            position: relative;
            bottom: 20vh;
            text-decoration: none;
            text-align: center;
            left: 0vh;
            background-color: rgba(0, 0, 0, .7);
            color: white;
            padding-left: 20px;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-right: 20px;
        }

        .ekko-lightbox {
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: center;
            justify-content: center;
            padding-right: 0 !important
        }

        .ekko-lightbox-container {
            position: relative
        }

        .ekko-lightbox-container>div.ekko-lightbox-item {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%
        }

        .ekko-lightbox iframe {
            width: 100%;
            height: 100%
        }

        .ekko-lightbox-nav-overlay {
            z-index: 1;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: -ms-flexbox;
            display: flex
        }

        .ekko-lightbox-nav-overlay a {
            -ms-flex: 1;
            flex: 1;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            background-color: rgba(0, 0, 0, .2);
            font-size: 4rem;
            opacity: 1;
            color: #fff;
            z-index: 1
        }

        .ekko-lightbox-nav-overlay a>* {
            -ms-flex-positive: 1;
            flex-grow: 1
        }

        .ekko-lightbox-nav-overlay a>:focus {
            outline: none;
        }

        .ekko-lightbox-nav-overlay a span {
            padding: 0 30px;
        }

        .ekko-lightbox-nav-overlay a:last-child span {
            text-align: right;
        }

        .ekko-lightbox-nav-overlay a:hover {
            text-decoration: none
        }

        .ekko-lightbox-nav-overlay a:focus {
            outline: none;
        }

        .ekko-lightbox-nav-overlay a.disabled {
            cursor: default;
            visibility: hidden
        }

        .ekko-lightbox a:hover {
            opacity: 1;
            text-decoration: none
        }

        .ekko-lightbox .modal-dialog {
            display: none
        }

        .ekko-lightbox .modal-footer {
            text-align: left
        }

        .ekko-lightbox-loader {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-align: center;
            align-items: center
        }

        .ekko-lightbox-loader>div {
            width: 40px;
            height: 40px;
            position: relative;
            text-align: center
        }

        .ekko-lightbox-loader>div>div {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background-color: #fff;
            opacity: .6;
            position: absolute;
            top: 0;
            left: 0;
            animation: a 2s infinite ease-in-out
        }

        .ekko-lightbox-loader>div>div:last-child {
            animation-delay: -1s
        }

        .modal-dialog .ekko-lightbox-loader>div>div {
            background-color: #333
        }

        @keyframes a {

            0%,
            to {
                transform: scale(0);
                -webkit-transform: scale(0)
            }

            50% {
                transform: scale(1);
                -webkit-transform: scale(1)
            }
        }
    </style>
</head>

<body>
    <div class="tb-main">


        <input class="brand-tabs" id="tab1" type="radio" name="tabs" checked>
        <label class="brand-tabs" for="tab1">Laboratories</label>

        <input class="brand-tabs" id="tab2" type="radio" name="tabs">
        <label class="brand-tabs" for="tab2">Events</label>


        <section id="content1">
            <div class="gallery-container">
                <div class="image-container">
                    <div class="image">
                        <a href="https://res.cloudinary.com/gracecoe/image/upload/v1664854537/Assets/Labs/EEE/POWER_SYSTEM_SIMULATION_LAB_tq0ujz.jpg" data-toggle="lightbox" data-gallery="gallery" class="link">
                            <img src="https://res.cloudinary.com/gracecoe/image/upload/v1664854537/Assets/Labs/EEE/POWER_SYSTEM_SIMULATION_LAB_tq0ujz.jpg" class="gallery_img">
                            <div class="text-block">
                                <h4></h4>
                            </div>
                        </a>
                    </div>
                    <div class="image">
                        <a href="https://res.cloudinary.com/gracecoe/image/upload/v1664854537/Assets/Labs/EEE/POWER_ELECTRONICS_LAB_k8gnax.jpg" data-toggle="lightbox" data-gallery="gallery" class="link">
                            <img src="https://res.cloudinary.com/gracecoe/image/upload/v1664854537/Assets/Labs/EEE/POWER_ELECTRONICS_LAB_k8gnax.jpg" class=" gallery_img">
                            <div class="text-block">
                                <h4></h4>
                            </div>
                        </a>
                    </div>
                    <div class="image">
                        <a href="https://res.cloudinary.com/gracecoe/image/upload/v1664854536/Assets/Labs/EEE/ELECTRICAL_MACHINES_-_II_LAB_-_2_r7ybll.jpg" data-toggle="lightbox" data-gallery="gallery" class="link">
                            <img src="https://res.cloudinary.com/gracecoe/image/upload/v1664854536/Assets/Labs/EEE/ELECTRICAL_MACHINES_-_II_LAB_-_2_r7ybll.jpg" class="gallery_img">
                            <div class="text-block">
                                <h4></h4>
                            </div>
                        </a>
                    </div>
                    <div class="image">
                        <a href="https://res.cloudinary.com/gracecoe/image/upload/v1664854534/Assets/Labs/EEE/ELECTRICAL_MACHINES_-_I_LAB_-_2_mkx5cj.jpg" data-toggle="lightbox" data-gallery="gallery" class="link">
                            <img src="https://res.cloudinary.com/gracecoe/image/upload/v1664854534/Assets/Labs/EEE/ELECTRICAL_MACHINES_-_I_LAB_-_2_mkx5cj.jpg" class="gallery_img">
                            <div class="text-block">
                                <h4></h4>
                            </div>
                        </a>
                    </div>
                    <div class="image">
                        <a href="https://res.cloudinary.com/gracecoe/image/upload/v1664854534/Assets/Labs/EEE/ELECTRICAL_MACHINES_-_I_LAB_-4_fhwm4j.jpg" data-toggle="lightbox" data-gallery="gallery" class="link">
                            <img src="https://res.cloudinary.com/gracecoe/image/upload/v1664854534/Assets/Labs/EEE/ELECTRICAL_MACHINES_-_I_LAB_-4_fhwm4j.jpg" class="gallery_img">
                            <div class="text-block">
                                <h4></h4>
                            </div>
                        </a>
                    </div>
                    <div class="image">
                        <a href="https://res.cloudinary.com/gracecoe/image/upload/v1664854534/Assets/Labs/EEE/ELECTRICAL_MACHINES_-_I_LAB_-_1_sb6mnb.jpg" data-toggle="lightbox" data-gallery="gallery" class="link">
                            <img src="https://res.cloudinary.com/gracecoe/image/upload/v1664854534/Assets/Labs/EEE/ELECTRICAL_MACHINES_-_I_LAB_-_1_sb6mnb.jpg" class="gallery_img">
                            <div class="text-block">
                                <h4></h4>
                            </div>
                        </a>
                    </div>
                    <div class="image">
                        <a href="https://res.cloudinary.com/gracecoe/image/upload/v1664854536/Assets/Labs/EEE/ELECTRICAL_MACHINES_-_II_LAB_-_2_r7ybll.jpg" data-toggle="lightbox" data-gallery="gallery" class="link">
                            <img src="https://res.cloudinary.com/gracecoe/image/upload/v1664854536/Assets/Labs/EEE/ELECTRICAL_MACHINES_-_II_LAB_-_2_r7ybll.jpg" class="gallery_img">
                            <div class="text-block">
                                <h4></h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="content2">
            <div class="gallery-container">
                <!-- <div class="image-container">
                    <div class="image">
                        <a href="https://res.cloudinary.com/gracecoe/image/upload/v1664024822/Assets/Events/17September2022/4_jolkad.jpg" data-toggle="lightbox" data-gallery="gallery" class="link">
                            <img src="https://res.cloudinary.com/gracecoe/image/upload/v1664024822/Assets/Events/17September2022/4_jolkad.jpg" class="gallery_img">
                            <div class="text-block">
                                <h4></h4>
                            </div>
                        </a>
                    </div>
                    <div class="image">
                        <a href="https://res.cloudinary.com/gracecoe/image/upload/v1664024685/Assets/Events/17September2022/3_nvkknh.jpg" data-toggle="lightbox" data-gallery="gallery" class="link">
                            <img src="https://res.cloudinary.com/gracecoe/image/upload/v1664024685/Assets/Events/17September2022/3_nvkknh.jpg" class=" gallery_img">
                            <div class="text-block">
                                <h4></h4>
                            </div>
                        </a>
                    </div>
                    <div class="image">
                        <a href="https://res.cloudinary.com/gracecoe/image/upload/v1664024658/Assets/Events/17September2022/2_jftd5c.jpg" data-toggle="lightbox" data-gallery="gallery" class="link">
                            <img src="https://res.cloudinary.com/gracecoe/image/upload/v1664024658/Assets/Events/17September2022/2_jftd5c.jpg" class="gallery_img">
                            <div class="text-block">
                                <h4></h4>
                            </div>
                        </a>
                    </div>
                    <div class="image">
                        <a href="https://res.cloudinary.com/gracecoe/image/upload/v1664012662/Assets/Events/17September2022/20220917_34159pmByGPSMapCamera_klkvsu.jpg" data-toggle="lightbox" data-gallery="gallery" class="link">
                            <img src="https://res.cloudinary.com/gracecoe/image/upload/v1664012662/Assets/Events/17September2022/20220917_34159pmByGPSMapCamera_klkvsu.jpg" class="gallery_img">
                            <div class="text-block">
                                <h4></h4>
                            </div>
                        </a>
                    </div>
                    <div class="image">
                        <a href="https://res.cloudinary.com/gracecoe/image/upload/v1664012665/Assets/Events/17September2022/20220917_24744pmByGPSMapCamera_lykahp.jpg" data-toggle="lightbox" data-gallery="gallery" class="link">
                            <img src="https://res.cloudinary.com/gracecoe/image/upload/v1664012665/Assets/Events/17September2022/20220917_24744pmByGPSMapCamera_lykahp.jpg" class="gallery_img">
                            <div class="text-block">
                                <h4></h4>
                            </div>
                        </a>
                    </div>
                </div> -->
            </div>
        </section>

    </div>
    <script>
        $(document).on("click", '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
</body>

</html>