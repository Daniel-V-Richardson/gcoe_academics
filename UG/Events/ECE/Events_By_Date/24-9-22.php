<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Open+Sans");
        @import url("https://fonts.googleapis.com/css?family=Open+Sans:400,600,700");
        @import url("https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");

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


        .events_container {
            /* position: relative; */

        }

        .back-btn {
            border-radius: 12px;
            padding: 10px;
            margin-left: 45%;
            background-color: #823d77;
            text-decoration: none;
            font-size: 1.7rem;
            text-align: center;
            /* margin: auto; */
            justify-content: center;
            justify-items: center;
            align-items: center;
            color: white;
        }

        @media screen and (max-width:600px) {
            .events_container {
                height: auto;
                display: flex !important;
                flex-wrap: wrap;
                width: auto;
            }

            .events_container .left {
                width: 100% !important;
            }

            .events_container .right {
                display: none;
            }

            .event_content {
                text-align: justify;
                width: 100%;

                height: 100% !important;
                overflow: scroll;
            }
        }

        .events_container .left {
            position: absolute;
            padding: 20px !important;
            display: flex;
            flex-direction: column;
            text-align: center;
            justify-items: center;
            align-items: center;
            left: 0;
            height: 100vh;
            width: 50%;
        }

        .event_date {
            height: fit-content;
            border-radius: 15px;
            cursor: pointer;
            width: 210px;
            display: flex;
            justify-items: center;
            text-align: center;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            background: #d4bbeb;
        }

        .event_img {
            margin-right: 10px;
            margin-left: -10px;
            width: 20%;
        }

        .event_date img {
            height: 100%;
            width: 100%;
        }

        .event_content {
            height: 100%;
            padding: 10px;
            width: 100%;
            /*margin-left: 30px;  */
            margin: 30px;
            background-color: #f7f5ec;
            overflow: scroll;
            text-align: justify;
            border-radius: 27px;
        }

        .event_content::-webkit-scrollbar {
            display: none;
        }

        .event_content p {
            font-size: 1.2rem;
            margin-top: 20px;
            margin-bottom: -30px;
        }

        .events_container .right {
            position: absolute;
            right: 0;
            height: 100vh;
            width: 50%;
        }

        .events_container .right .image-collage {
            height: 50%;
            width: 100%;
            object-fit: contain;
        }

        .events_container .right .image-collage .img {
            border-radius: 4px;
            position: absolute;
            width: 280px;
            width: 200px;
            left: 50%;
            top: 45%;
            border: 4px solid #d4bbeb;
            border-radius: 27px;
            transform: translate(-50%, -50%);
            box-shadow: 0 16px 28px 0 rgba(8, 56, 103, .5);
        }

        .events_container .right .image-collage .img1 {
            transform: translate(-80%, -110%);

        }

        .events_container .right .image-collage .img2 {
            transform: translate(-130%, 20%);
        }

        .events_container .right .image-collage .img3 {
            transform: translate(-20%, 30%);
        }

        .events_container .right .image-collage .img4 {
            transform: translate(30%, -80%);
        }
    </style>
</head>

<body>
    <div class="events_container">
        <a href="javascript:history.back()" class="back-btn">
            Go Back
        </a>
        <div class="left">
            <h1 class="event_heading">Association Activity</h1>

            <div class="event_date">
                <div class="event_img">
                    <img src="https://res.cloudinary.com/gracecoe/image/upload/v1662258958/Assets/Events/calendar-icon-png-4_eeyasa.png">
                </div>
                <p>24 September 2022</p>
            </div>
            <div class="event_content">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta pariatur eius facere ratione excepturi possimus aperiam similique esse quo? Velit iure dicta aut molestiae repudiandae dolorem quam, aliquam earum perspiciatis provident dolore omnis voluptatem minus consectetur corrupti consequuntur itaque, fugiat ipsum modi ad id reprehenderit? Ducimus consectetur incidunt mollitia unde ipsa rerum quia nobis iusto eveniet voluptate ut cupiditate minus dolor quos, beatae numquam assumenda sed nesciunt temporibus consequatur. Eum, quibusdam aut provident aperiam esse quis quaerat aliquid quod sequi minima laboriosam totam aliquam cumque, quos at doloremque, omnis vel!</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta pariatur eius facere ratione excepturi possimus aperiam similique esse quo? Velit iure dicta aut molestiae repudiandae dolorem quam, aliquam earum perspiciatis provident dolore omnis voluptatem minus consectetur corrupti consequuntur itaque, fugiat ipsum modi ad id reprehenderit? Ducimus consectetur incidunt mollitia unde ipsa rerum quia nobis iusto eveniet voluptate ut cupiditate minus dolor quos, beatae numquam assumenda sed nesciunt temporibus consequatur. Eum, quibusdam aut provident aperiam esse quis quaerat aliquid quod sequi minima laboriosam totam aliquam cumque, quos at doloremque, omnis vel!</p>
            </div>
        </div>

        <div class="right">
            <div class="image-collage">
                <img class="img img1" src="https://res.cloudinary.com/gracecoe/image/upload/v1666361299/Assets/Events/ECE/b380d44a-3c1d-42ab-9843-96a4576e0e38_lntee5.jpg" alt="">
                <img class="img img2" src="https://res.cloudinary.com/gracecoe/image/upload/v1666361299/Assets/Events/ECE/f8a3759d-c4ef-45ce-a63b-ac5d5f340ecd_lehjpr.jpg" alt="">
                <img class="img img3" src="https://res.cloudinary.com/gracecoe/image/upload/v1666361298/Assets/Events/ECE/ad4ba9cb-4cde-4303-bfa3-6fd9297e8417_juduhi.jpg" alt="">
                <img class="img img4" src="https://res.cloudinary.com/gracecoe/image/upload/v1666361298/Assets/Events/ECE/219af1bf-58e8-4c45-9529-eff05522d373_wyqwqv.jpg" alt="">
                <img class="img img5" src="https://res.cloudinary.com/gracecoe/image/upload/v1666361298/Assets/Events/ECE/30b710ae-9db1-4f74-8c97-629a302496d2_qm3fzk.jpg" alt="">
            </div>
        </div>
    </div>
</body>

</html>