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
            <input class="brand-tabs" id="tab1" type="radio" name="tabs" checked>
            <label class="brand-tabs" for="tab1">2016-2017</label>

            <input class="brand-tabs" id="tab2" type="radio" name="tabs">
            <label class="brand-tabs" for="tab2">2014-2015</label>


        <section id="content1">
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
        </section>
        <section id="content2">
            <div class="achievements-container">
                <h2 class="achievements-heading">ACADEMIC YEAR: 2014-2015</h2>
                <ul class="achievements">
                    <li>Arnold Bibin Biju on campus placed in Magus Private Limited</li><br>
                    <li>S.Ganesh attended the workshops for 1.Android workshop in MIT,2.Android workshop in Anna university,3.Science and technology workshop in NEC. And on campus placed on 1.Tech Support Trainee in Hindhuja Global solutions.2.Trainee in Magus Private Limited.</li><br>
                    <li>M.Hemapriya received the 2nd prize in Quiz competition in JACSI.And attend the workshops on Network Security Workshop in Samuel Polytecnic college and she placed On-Campus at 1.Tech Support Trainee in Hindhuja Global solutions.2.Trainee in Magus Private Limited.</li><br>
                    <li>S.Honest murugan attended the Workshop on Android and HTML5 workshop in MIT and On-Campus placed on Magus private Limited.</li><br>
                    <li>M.S.Joshva attended the workshops on 1.International Robotics workshop in SRM university,2.Hacking workshop in Kaashiv Infotech,3.Innovspark workshop for Big data,4. Workshop on Data mining by Kaashiv Infotech.</li><br>
                    <li>M.Karthick Rajaa attended the Workshops on 1.International Robotics workshop in SRM university.2.Hacking Workshop in Kaashiv Infotech.3.Innovspark workshop for Big data.4.Workshop on Data mining by Kaashiv Infotech5.Embedded Web Technology in Kaashiv Infotech6.Certification exam on Programming and Data Structures Conducted by TCS and IIT Chennai 7. Innovspark workshop for Big data. And ON Campus , he placed on 1.Tech Support Trainee in Hinduja Global solutions who Off Campus placed on1.Junior Security Officer in Infysec.2.Trainee in Uniq Technologies.</li><br>
                    <li>R.Karthika placed on ON Campus at Magus Private Limited.</li><br>
                    <li>J.Karthika Sorna Illakia Off Campus placed on Trainee in Port Trust, tuticorin.</li><br>
                    <li>R.Manjula Devi Attended the Workshops for 1.Android workshop in MIT. 2.Hacking Workshop in Kaashiv Infotech.3.Innovspark workshop for Big data.</li><br>
                    <li>S.Nivedika attended the Workshops on 1.Hacking Workshop in Kaashiv Infotech. 2.Innovspark workshop for Big data.And ON-Campus placed on Tech Support Trainee in Hinduja Global solutions.</li><br>
                    <li>S.Padmanaban attended the Workshops on 1.Hacking Workshop in Kaashiv Infotech. 2.Innovspark workshop for Big data.</li><br>
                    <li>P.Pravitha Devi attended the Workshops on Hacking Workshop in Kaashiv Infotech.</li><br>
                    <li>Roshni Regupalan attended the Workshops on Innovspark workshop for Big data.</li><br>
                    <li>M.Santhana sathis attended the Workshops on 1.Ethical Hacking Workshop on Kaashiv Infotech.2.Embeded systems &amp; Web Technology on Kaashiv Infotech.3 .Innovspark workshop for Bigdata on Kaashiv Infotech-Chennai.</li><br>
                    <li>P.Siva murugan attended the Workshops on 1.Android and HTML5 and CSS workshop in MIT.2.Hacking Workshop in Kaashiv Infotech.3.Innovspark workshop for Big data.</li><br>
                    <li>I.Sugumar attended the Workshops on Embedded Web Technology in Kaashiv Infotech.</li><br>
                    <li>K.Thanga Serma Kumar attended the Workshops on 1..Android workshop in Anna university. 2.Innovspark workshop for Big data.</li><br>
                    <li>A.Vanisri Won the 2nd prize in Quiz competition in JACSI. and attended the Workshops on Network Security Workshop in Samuel Polytecnic college, she ON-Campus placed on 1.Tech Support Trainee in Hinduja Global solutions,2.Trainee in Magus Private Limited .</li><br>
                    <li>S.Pavalamani attended the Workshop on Android workshop in MIT.</li><br>
                    <li>J.Shunmugapriya attended the Workshop on Network Security Workshop in Samuel Polytechnic college</li><br>
                    <li>S.Joseph Manoj attended the On-Campus Placed on Tech Support Trainee in Hinduja Global solutions</li><br>
                </ul>
            </div>
        </section>

</body>

</html>