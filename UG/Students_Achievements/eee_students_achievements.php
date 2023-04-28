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
            <label class="brand-tabs" for="tab2">2014-2015</label>


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
                <h2 class="achievements-heading">ACADEMIC YEAR: 2014-2015</h2>
                <ul class="achievements"> 
                    <li>J.Abishaniraimathi,J.Janani,G.BesiliyaAngel,J.A.MichineRupa,Mariammal, and R. Parameshwari has attended Knowledge Institute of Technology on 5th -6th sep-2014 at University V.O.C College of Engineering on 19th sep-2014</li><br>
                    <li>Joel, M. Mages Kumar, I. Moses and Nagaraj has attended workshop at PSG College of Engineering, coimbatore on 22nd -23rd Aug-2014</li><br>
                    <li>P.Selvakumarand R. Karthick has attended International conference at Maria College of Engineering, Thiruvattar on 5th -6th March-2014</li><br>
                    <li>R.Illayaraman has attended Research Community at Guindy Campus on 2nd Mar-2014</li><br>
                    <li>R.Mariammal, J.Abishaniraimathi has attended workshop at Immanualarasar JJ College of Engineering on 2nd &amp;3rd Apr-2014</li><br>
                    <li>J.Janani@Gayathri, G.Besiliya Angel has attended workshop at Sardar Raja College of Engineering 3rd Apr-2014</li><br> 
                    <li>J.A.MichineRupa has attended conference at Sardar Raja College of Engineering on 3rd Apr-2014</li><br>
                    <li>P.Ponraj,S.Ramesh has attended conference at Jayaraj Annapackiam College of Engineering, Nazareth on July 2014</li><br>
                    <li>P.Selvakumar &amp; J.Thomas Jebastian from final year attended a workshop titled “HANDS ON TRAINING OF ARM PROCESSOR” held at CIT , Coimbatore on 2nd February, 2014</li><br>
                    <li>P.Selvakumar , J. Thomas Jebastian and N. Hariharan presented a paper titled “Analysis and Modeling of 132 KV Grid Using ETAP” in a One day National Level Technical Symposium held at PSG College of Engineering and Technology, Coimbatore on 15th February 2014</li><br>
                    <li>P.Selvakumar , V. Masanam presented a paper on the title “Design and Analysis of Permanent Magnet DC Motor” in a One Day National Level Technical Symposium held at St. Mother Theresa Engineering College , Vagaikulam ,Tuticorin on 22nd February 2014</li><br>
                    <li>P.Selvakumar, M. Jabright, P. SenthilMurugan and J. Daphene participated in an “Interactive Session with Dr. A. SivathanuPillai (Chief Executive Officer &amp; Managing Director , Brahmos Aerospace, NewDelhi)” held on 14th March 2014 at Chandy College of Engineering.</li><br> 
                    <li>P.Selvakumar, J. Thomas Jebastian , J. Aaron Sam Nixon, J. Daphene, R.PravinPaulraj, V. Shenbagaraj, K. Kamaraj, K. Andrew VeniSelvan, V. Masanam and S. Arun Kumar attended Two Days National Workshop on “MATLAB Application on Power Electronics” held on 28th March 2014 at PSG College of Engineering and Technology, Coimbatore</li><br>
                    <li>J.Thomas Jebastian , A. Aaron Sam Nixon , N. Hariharan, S. Syed Mohammed, P.Vignesh, Y. Daniel Thomas and M.Shanmuganandha Raja attended a 5 day Internship Training in “Embedded System” in “Kaashiv InfoTech Pvt. Ltd., Chennai.” between 16th to 20th June, 2014</li><br>
                    <li>J. Daphene , S. Thivakaran , P. SenthilMurugan and K. Andrew VeniSelvan underwent an “IPT in Neyveli Lignite Corporation, Tuticorin” for 5 days from 16th to 20th June, 2014</li><br>
                    <li>P. Esakki Lakshmi , S. Poorna Lakshmi Aarthi , P. SenthilMurugan and M. Shanmuganandha Raja underwent a 3 day Internship program at NEC, Kovilpatti from 23rd to 25thjuly, 2014 on the title of “Science &amp; Technology Capacity Building For Industrial Needs</li><br>
                    <li>D.Sornalatha&amp; G.K. DhanaaLakshme presented a paper titled on “HFC” in Arunachalla College of Engineering for Women ,Nagercoil on 23rd August 2014</li><br>
                    <li>J. Aaron Sam Nixon, K. Andrew VeniSelvan , Q. Aruna Fernando, Y. Daniel Thomas, J. Daphene, P. Esakki Lakshmi, N. Hariharan, M. Jabright, S. Johnson, V. Jothimani, S.B. Kalarani, K. Kamaraj, V. Masanam , K. Mohanraj, S. Poorna Lakshmi Aarthi, M. Rajesh, E. Seetharaman, P.Selvakumar, P. SenthilMurugan , M. Shanmuganandha Raja, S. Sudalaiyandi, S. Syed Mohammed, J. Thomas Jebastian, P. Vigneshwere participated in the “SCILAB online Workshop” Organized at Chandy College Of Engineering, Tuticorin on 3rd September 2014</li><br> 
                    <li>P.Selvakumar , R. Karthick , S. Syed Mohammed, P. Vignesh , Y. Daniel Thomas , M. Shanmuganandha Raja were participated in a “World Record program for creating more number of a Websites in one day”, conducted by “Kaashiv InfoTech Pvt. Ltd., Chennai” held on 14th September , 2014 at Coimbatore</li><br>
                    <li>C. Solai raj, L. Suresh kumar , R. Suresh were participated in a one day national workshop titled on “ORCAD and PLC Designing” held in VOC College of Engineering, Tuticorin on 19th September , 2014</li><br>
                    <li>S.B.Kalarani, S. Poorna Lakshmi Aarthi , R. Karthick, A. Shanmugananthan, M. Jabright from final year &amp; K. Sivathanu, M.Sundar Raj, T. Jeyaraj, S. Vignesh Kumar, N. Vivek, K. Mariprakash, G. Periyamuthuselvan, K. Shanmugapriyan, S. Sugumar, S. Mukesh, V. Elanga Mani Balaji, C. Dhanalakshmi, G.K. DhanaaLakshme underwent a “Hands on Training in QuadCopter’15” conducted by IIT Rookee , held at Chandy College of Engineering on 29th and 30th September 2014</li><br>
                    <li>J. Daphene, N. Hariharan, V. Masanam, K. Mohanraj, S.Johnson, K. Andrew VeniSelvan , S. Arun Kumar ,S. Ramesh and P. Ponraj participated in a Workshop titled “ Android Development” held at CSI Jeyaraj Annapackiyam Engineering College, Nasareth, on 9th October, 2014</li><br>
                    <li>S.DeviKumari, R. Menaka, G.K. DhanaaLakshme, K. Muruga Lakshmi , K. Raja kumara , R. MuthuSaranya, K. Karthika underwent an IPT in TTPS for 5 days from 29th December 2014 to 2nd January 2015</li><br>
                    <li>R. Karthick and N. Vinod were selected by IIT Rookee and they took part in Quad Copter’15 final round of project in Delhi</li><br>
                    <li>C.Seethalakshmi has attended a workshop on the title “Ethical Hacking” conducted by Microsoft Awarded Experts on 14th june, 2015</li><br>
                    <li>M. Ravi Kumar has presented a paper titled ‘A novel single switch resonant power converter’ at Vaigai College of Engineering Madurai on 4th September 2015 and at PSN College of Engineering and Technology, Tirunelveli on 11th September 2015</li><br>
                    <li>S. Ramesh &amp; M. Ravikumar has presented a paper titled “ Widercity WPT” at VV College of Engineering on 29th September 2015</li><br>
                    <li>D.Sornalatha &amp; R. Muthu Saranya has presented a paper titled “Renewable energy Sources” at VV College of Engineering on 29th September 2015</li><br>
                    <li>K.Shanmugapriyan &amp; S. Natarajan has presented a paper titled ‘A novel single switch resonant power converter for renewable energy’ at VV College of Engineering on 29th September 2015</li><br> 
                </ul>
            </div>
        </section>

</body>

</html>