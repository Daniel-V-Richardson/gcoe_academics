<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<style>
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
        margin-bottom: 20px;
    }

    .course-main-headng {
        margin-top: 5vh;
        font-size: 3rem;
        font-weight: 800;
    }

    .tb-main {
        margin: 0 auto;
        background: #fff;
        text-align: center;

        padding-left: 40px;
        padding-right: 40px;
    }

    @media screen and (max-width:600px) {
        .tb-main {
            padding-left: 0px;
            padding-right: 0px;
            margin-top: 80px;
            overflow: hidden;
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
        color: #888;
        cursor: pointer;
    }

    input:checked+label.brand-tabs {
        color: black;
        border-radius: 8px;
        background-color: #b34ee6;
    }

    #tab1:checked~#content1,
    #tab2:checked~#content2 {
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
            content: "2016-2017";
        }

        label.brand-tabs[for*="2"]:before {
            content: "2014-2015";
        }



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
            content: "2016-2017";
        }

        label.brand-tabs[for*="2"]:before {
            content: "2014-2015";
        }
    }

    /* Styling for Achivements Section */

    .achievements-container {
        height: 80vh;
        width: 100%;
        overflow-x: hidden;
        overflow-y: scroll;
        scroll-behavior: smooth;
        text-align: justify;
        padding: 10px;
    }

    .achievements-heading {
        font-weight: 600;
        text-align: center;

    }

    .achievements-container::-webkit-scrollbar {
        width: 10px;
    }

    .achievements-container::-webkit-scrollbar-track {

        border-radius: 27px;
    }

    .achievements-container::-webkit-scrollbar-thumb {
        background: #d4bbeb;
        border-radius: 27px;
    }

    .achievements-container::-webkit-scrollbar-thumb:hover {
        background: #d4bbeb;
    }
</style>

<body>
    <div class="tb-main">
        <!-- <input class="brand-tabs" id="tab1" type="radio" name="tabs" checked>
            <label class="brand-tabs" for="tab1">2016-2017</label> -->

        <input class="brand-tabs" id="tab2" type="radio" name="tabs" checked>
        <label class="brand-tabs" for="tab2">2020-2021</label>


        <!-- <section id="content1">
            <div class="achievements-container">
                <h2 class="achievements-heading">ACADEMIC YEAR :2016-2017</h2>
                <ul class="achievements">
                    <li>Mr.S.Sabharinath (IV Year), Mr.B.Sathish Kumar (IV Year) had presented a paper titled “Global Positioning System And Its Application” in National Level Technical Symposium event NECSI`16 held on 25th , 26th February, 2016 at National Engineering College, Kovilpatti..</li><br>
                    <li>Mr.S.Sabharinath (IV year), Mr.B.Sathish Kumar (IV Year) had presented a paper titled “Restructure Search Results For Efficient Web Search” and has won Ist PRIZE in National Level Students Technical Symposium event SACOESIUM`16 held on 05th March, 2016 at Dr Sivanthi Aditanar College of Engineering, Tiruchendur.</li><br>
                    <li>Mr.S.Sabharinath (IV Year), Mr.B.Sathish Kumar (IV Year) had presented a paper titled “Google Project Loon, Ara And Soli” in National Level Technical Symposium event INNOFREAX 2K`16 held on 26th March, 2016 at Sree Sastha College Of Engineering, Chennai.</li><br>
                    <li>Mr.S.Sabharinath (IV Year), Mr.B.Sathish Kumar (IV Year) had presented a paper titled “Design Of An Optical Character Recognition System From Camera Based Android Devices” in National Level Symposium event SOFTWIZZ held on 08th September, 2016 at Infant Jesus College Of Engineering, Keelavallanadu.</li><br>
                    <li>Mr.S.Sabharinath (IV Year), Mr.B.Sathish Kumar (IV Year) had presented a paper titled “ Cloud Computing Security Through Symmetric Cipher Model” and has won IInd prize at National Institute of Information Technology , Tirunelveli, held on 04th September, 2016.</li><br>
                    <li>Ms.G.Sathiya Priya (IV Year), Ms.P.Veera Selvi (IV Year) had presented a paper titled “Web Search” at National Institute of Information Technology , Tirunelveli, held on 04th September, 2016.</li><br>
                    <li>Mr.J.C.Ranjith (II Year) had presented a paper titled “Nano Technology” and has won Ist PRIZE and also won Best Participation Award in Symposium held on 24th February , 2016 at PET Engineering college, Vallioor.</li><br>
                </ul>
            </div>
        </section> -->
        <section id="content2">
            <div class="achievements-container">
                <h2 class="achievements-heading">ACADEMIC YEAR: 2020-2021</h2>
                <ul class="achievements">
                    <li>David A, Madhivanan R, Sam Isravel I, Yoga Prakash M, Saravana Prakash M, Mari Durai E,
                        Santhosh Kumar P, Karthikeyan A, Muthu Krishnan B, Selva Durai K IV Mech has
                        successfully attended CSWIP Visual Welding Inspector Course organized by TWI Ltd. on 14
                        Dec 2020 to 15 Dec 2020 at Grace College of Engineering, Thoothukudi.</li><br>
                    <li>Prithis I III Mech has successfully attended CSWIP Visual Welding Inspector Course and
                        achived certificate of proficiency organized by TWI Ltd. on 14 Dec 2020 to 15 Dec 2020 at
                        Grace College of Engineering, Thoothukudi.</li><br>
                    <li>Prithis I III Mech has successfully achieved for excellent performance of online “FUELS AND
                        COMBUSTION” organized by Department of Mechanical Engineering Sankar Polytechnic
                        College in the month of July 2020.</li><br>
                </ul>
            </div>
        </section>

</body>

</html>