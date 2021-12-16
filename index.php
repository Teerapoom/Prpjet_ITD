<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>ITD</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@300&display=swap');

    * {
        font-family: 'Bai Jamjuree', sans-serif;
    }

    body {
        background-color: #ECEFF1;
    }

    .txtvdo {
        margin-top: 10px
    }

    .colorcontainer1 {
        background-color: #E1F5FE;
        width: 100%;
        display: flex;
        align-items: center;
        flex-direction: column;
        margin-top: 5px;
        padding-bottom: 5.5px;
    }

    .imgcontent1 {
        border-radius: 50%;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .txtcontent1 {
        font-size: 40px;
        margin-top: 15px;
        font-weight: 700;
        line-height: 120%
    }

    .txtincontent1 {
        margin-top: 15px;
    }
    .txtcontent1_B0X1{
        margin-top: 80px;
    }
    .txtcontent1_B0X3{
        margin-top: 60px;
        font-size: 40px;
        font-weight: 700;
        line-height: 120%
    }
    .txtcontent1_B0X2{
        margin-top: 50px;
    }

    .colorcontainer2 {
        background-color: #81D4FA;
        width: 100%;
        display: flex;
        align-items: center;
        flex-direction: column;
        margin-top: 0px;
    }

    .colorcontainer3 {
        background-color: #E1F5FE;
        width: 100%;
        display: flex;
        align-items: center;
        flex-direction: column;
        margin-top: 0px;
    }

    .title {
        width: 100%;
        padding: 0.05em;
        color: #010101;
        background: #4FC3F7;
        border-bottom: solid 5px #000000;
    }

    .containerCardtwo {
        margin-top: 20px;
        margin-bottom: 20px;
    }
</style>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img
                    src="https://scontent.furt1-1.fna.fbcdn.net/v/t39.30808-6/266268798_5341426419207171_4826837247509475808_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=cpBktfYOd-cAX-9afPD&tn=m3y87K6IBu3hMcwv&_nc_ht=scontent.furt1-1.fna&oh=00_AT84aHsDO9PydIl2R7WhGd23JuZQsIoTezw2LP3XCBE3mg&oe=61C03399"
                    alt="wu" width="50" height="50" style="border-radius: 50%;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">หน้าเเรก</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="color:white;">
                            รายละเอียด
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#scrollspyHeading1">ห้องเรียนของนักเรียน ITD</a></li>
                            <li><a class="dropdown-item" href="#scrollspyHeading2">IT Coworking</a></li>
                            <li><a class="dropdown-item" href="#scrollspyHeading3">อุปกรณ์ของนักเรียน IT</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#scrollspyHeading4">อาชีพในฝัน</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar -->
    <!-- slide img -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://i1.wp.com/hospital.wu.ac.th/wp-content/uploads/2020/02/20-1-scaled.jpg?fit=2560%2C1440&ssl=1"
                    class="d-block w-100" alt="wu" width="100%" height="440px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>มหาวิทยาลัยวลัยลักษณ์</h5>
                    <p>มหาวิทยาลัยวลัยลักษณ์มุ่งสร้างบัณฑิตที่มีขีดความสามารถในการแข่งขันสูงเป็นทั้ง“คนดีและคนเก่ง”</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://scontent.furt1-1.fna.fbcdn.net/v/t39.30808-6/265206935_5341526839197129_4896153949655991794_n.png?_nc_cat=100&ccb=1-5&_nc_sid=730e14&_nc_ohc=j_2SBg6ustcAX9l_tfK&_nc_ht=scontent.furt1-1.fna&oh=00_AT-SVg34AeoYmcSXvgFClF5nF9cEAtgd-Ecv9-hSTw5raQ&oe=61BFB365"
                    class="d-block w-100" alt="wu" width="100%" height="440px">
                <div class="carousel-caption d-none d-md-block">
                    <h5> Co-working(IT)</h5>
                    <p>มีเฉพาะสาขา IT เท่านั้น ไว้ใช้นั่งพักผ่อนหรือทำงาน</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://i0.wp.com/cdt.wu.ac.th/wp-content/uploads/2018/08/136009.jpg" class="d-block w-100"
                    alt="wu" width="100%" height="440px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>ห้องเรียนของนักเรียน IT</h5>
                    <p>ห้องเรียนกว้างใหญ่เเละเน็ตที่เร็วเเรง</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- slide img -->
    <!-- วิดีโอ -->
    <div class="container-fluid">
        <p class="h2 txtvdo" style= "color:black; text-align:center"><strong>ITD ม.วลัยลักษณ์ มีอะไรดี</strong></p>
        <div class="container">
            <div class="row">
                <div class="col">
                </div>
                <div class="col order-2">
                </div>
                <div class="col order-12">
                    <iframe width="850" height="400" src="https://www.youtube.com/embed/6F2zODXLhMM"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen class="txtvdo"></iframe>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- วิดีโอ -->
    <!-- เนื้อหา 1 -->
    <div class="container-fluid  colorcontainer1" data-bs-spy="scroll" data-bs-target="#navbar-example2"
        data-bs-offset="0" class="container-fluid scrollspy-example colorcontainer1 " tabindex="0">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-4">
                <img src="https://ocd.wu.ac.th/photo/components/com_eventgallery/helpers/image.php?&mode=full&folder=11026203&file=IMG_9871.JPG"
                    class="imgcontent1" alt="comte" width="300" height="300">
            </div>
            <div class="col-4">
                <h2 class="txtcontent1_B0X1" id="scrollspyHeading1" style= "color:black;"><strong>ห้องเรียนของนักเรียน ITD</strong></h2>
                <blockquote class="txtincontent1" style= "color:black; font-size: 18px; ">
                    ห้องเรียน it มีห้องคอมพิวเตอร์ที่มีอุปกรณ์ครบครัน
                    ตั้งอยู่ที่ตึกศูนย์เทคโนโลยีดิจิทัลนักศึกษาสามารถใช้ห้องคอมพิวเตอร์ในการเรียนรู้
                    นอกจากนี้นักศึกษายังใช้คอมพิวเตอร์ในการศึกษา ค้นคว้าหาความรู้เพิ่มเติมจากในห้องเรียน
                </blockquote>
            </div>
        </div>
    </div>
    <!-- เนื้อหา 1 -->
    <!-- เนื้อหา 2 -->
    <div class="container-fluid  colorcontainer2" data-bs-spy="scroll" data-bs-target="#navbar-example2"
        data-bs-offset="0" class="container-fluid scrollspy-example colorcontainer1 " tabindex="0">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-4">
                <h2 class="txtcontent1_B0X2" id="scrollspyHeading2" style= "color:black;"><strong>IT Co-working</strong></h2>
                <blockquote class="txtincontent1" style= "color:black; font-size: 18px; ">
                    Co-working Space เป็นห้องสำหรับนักศึกษา IT ที่สามารถเข้ามาใช้บริการหรือทำงานต่างๆ
                    อีกทั้งยังสามารถใช้ในการพบปะ พูดคุย
                    และแลกเปลี่ยนความคิดกันแลกเปลี่ยนวิธีการแก้ปัญหาต่าง ๆ ระหว่างอาจารย์กับนักศึกษา รุ่นพี่กับรุ่นน้อง
                    และเพื่อนๆ
                    Co-working Space มีดีไซน์ที่สวยงามทันสมัย ดูสบายตา และบรรยากาศที่จะช่วยให้มีความคิดสร้างสรรค์
                    เหมาะแก่การคิดหาไอเดียอะไรใหม่ ๆ
                </blockquote>
            </div>
            <div class="col-4">
                <img src="https://scontent.furt1-1.fna.fbcdn.net/v/t39.30808-6/265206935_5341526839197129_4896153949655991794_n.png?_nc_cat=100&ccb=1-5&_nc_sid=730e14&_nc_ohc=-C5lDYc2390AX9_svpU&_nc_ht=scontent.furt1-1.fna&oh=12c2181882d874ebcca06465d2cc8d19&oe=61B9C4A5"
                    class="imgcontent1" alt="comte" width="300" height="300">
            </div>
        </div>
    </div>
    <!-- เนื้อหา 2 -->
    <!-- เนื้อหา 3 -->
    <div class="container-fluid  colorcontainer3" data-bs-spy="scroll" data-bs-target="#navbar-example2"
        data-bs-offset="0" class="container-fluid scrollspy-example colorcontainer1 " tabindex="0">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-4">
                <img src="https://ocd.wu.ac.th/photo/components/com_eventgallery/helpers/image.php?&mode=full&folder=10076301&file=a1.jpg"
                    class="imgcontent1" alt="comte" width="300" height="300">
            </div>
            <div class="col-4">
                <h2 class="txtcontent1_B0X3" id="scrollspyHeading3" style= "color:black;" ><strong>อุปกรณ์ของนักเรียน IT</strong></h2>
                <blockquote class="txtincontent1" style= "color:black; font-size: 18px; ">
                    ศูนย์เทคโนโลยีดิจิทัล สนับสนุนการใช้เทคโนโลยีสารสนเทศเพื่อการศึกษา
                    โดยให้บริการคอมพิวเตอร์และอุปกรณ์อิเล็กทรอนิกส์ที่ทันสมัย เพื่อสนับสนุนและเพิ่มศักยภาพให้แก่นักศึกษา
                    อาจารย์ รวมทั้งบุคลากรของมหาวิทยาลัยเพื่อใช้ในการพัฒนาระบบการเรียนการสอน งานวิจัย
                    รวมทั้งงานบริหารของมหาวิทยาลัย
                </blockquote>
            </div>
        </div>
    </div>
    <!-- เนื้อหา 3 -->
    <!-- หัวข้อ 1-->
    <div class="container-fluid">
        <p class="title" id="scrollspyHeading4" style="text-align: center;font-size: 45px;"><strong>อาชีพในฝัน</strong></p>
    </div>
    <!-- หัวข้อ 1 -->
    <!-- อาชีพในฝัน การ์1 -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://cdn-icons.flaticon.com/png/512/2979/premium/2979941.png?token=exp=1639629871~hmac=ba4af69763f0a08fc3bab9ab44cc1587"
                        class="card-img-top" alt="business analysis" width="195" height="250">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Business Analysis</strong></h5>
                        <p class="card-text">วิเคราะห์หา Insight ที่น่าสนใจจากข้อมูล โดยเฉพาะข้อมูลแบบ Structured Data
                            ทำ Business Report หรือสร้าง  Data Dashboard</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            อ่านข้อมูลเพิ่มเติม
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><strong>Business Analysis</strong></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>หน้าที่ของ Business Analysis</p>
                                        <blockquote>วิเคราะห์หา Insight ที่น่าสนใจจากข้อมูล โดยเฉพาะข้อมูลแบบ Structured Data
                                            ทำ Business Report หรือสร้าง Automated Data Dashboard
                                            ประสานงานร่วมกับทีม Data Science หากข้อการวิเคราะห์ข้อมูลในแบบที่ลึกขึ้น</blockquote>
                                            <p>ภาษาที่ใช้งาน</p>
                                            <blockquote>SQL, R, Python, Power BI, Tableau และ Data Management Systems เป็นต้น</blockquote>
                                            <p>รายวิชาที่สอดคล้องกับการเป็น Business Analysis</p>
                                            <ol>
                                                <li>ITD62-272 Systems Analysis</li>
                                                <li>ITD62-273 Web User Interface and User Experience Design</li>
                                                <li>ITD62-123 Computer Programming</li>
                                                <li>ITD62-124 Data Structure</li>
                                                <li>ITD62-151 Business Information System</li>
                                            </ol>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col order-5">
                <div class="card" style="width: 18rem;">
                    <img src="https://cdn-icons-png.flaticon.com/512/2328/2328966.png" class="card-img-top"
                        alt="system analysis" width="195" height="250">
                    <div class="card-body">
                        <h5 class="card-title"><strong>System Analysis</strong></h5>
                        <p class="card-text">ทำหน้าที่เหมือนเป็นนักแก้ปัญหาให้องค์กร โดยผ่านการวิเคราะห์ของข้อมูล
                            เพื่อแก้ไขหรือปรับปรุงธุรกิจให้ผ่านพ้นวิกฤติ</p>
                        <a class="btn btn-primary">กำลังดำเนินการ...</a>
                    </div>
                </div>
            </div>
            <div class="col order-1">
                <div class="card" style="width: 18rem;">
                    <img src="https://cdn-icons-png.flaticon.com/512/1688/1688400.png" class="card-img-top"
                        alt="Frontend Developer" width="195" height="250">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Frontend Developer</strong></h5>
                        <p class="card-text">การพัฒนาโปรแกรมในส่วนของหน้าบ้าน (ส่วนที่ทุกคนสามารถมองเห็นได้ของเว็บไซต์
                            หรือแอปพลิเคชัน)</p>
                        <a class="btn btn-primary">กำลังดำเนินการ....</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- อาชีพในฝัน การ์1 -->
    <!-- อาชีพในฝัน การ์2 -->
    <div class="container containerCardtwo">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://cdn-icons-png.flaticon.com/512/2166/2166823.png" class="card-img-top"
                        alt="Backend developer" width="195" height="250">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Backend Developer</strong></h5>
                        <p class="card-text">การพัฒนาโปรแกรมในส่วนของหลังบ้าน (ส่วนของการทำงานเบื้องหลังจำพวก ฐานข้อมูล
                            และโครงสร้างพื้นฐาน)</p>
                        <a class="btn btn-primary">กำลังดำเนินการ...</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://cdn-icons-png.flaticon.com/512/1918/1918557.png" class="card-img-top"
                        alt="Software Tester" width="195" height="250">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Software Tester</strong></h5>
                        <p class="card-text"> ทำหน้าที่ตรวจสอบคุณภาพของ software ที่ถูกผลิตขึ้นมาโดย programmer
                            โดยทำการเทสต์ระบบต่างๆ และตรวจสอบหาข้อบกพร่องข้อผิดพลาดของซอฟต์แวร์
                            เพื่อเช็กดูให้ดีว่าซอฟต์แวร์ที่เราส่งออกไปให้ลูกค้า</p>
                        <a class="btn btn-primary">กำลังดำเนินการ...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- อาชีพในฝัน การ์2 -->
    <!-- footer -->
    <footer class="text-center text-white" style="background-color: #E0E0E0;">
        <!-- Grid container -->
        <div class="container pt-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.facebook.com/it.walailak"
                    role="button" data-mdb-ripple-color="dark" target="_blank"><i class="fab fa-facebook-f"></i>

                    <!-- Google -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.wu.ac.th/th"
                        role="button" data-mdb-ripple-color="dark" target="_blank"><i class="fab fa-google"></i></a>

                    <!-- Instagram -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.instagram.com/itd.wu/"
                        role="button" data-mdb-ripple-color="dark" target="_blank"><i class="fab fa-instagram"></i></a>

                    <!-- Linkedin -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://informatics.wu.ac.th/"
                        role="button" data-mdb-ripple-color="dark" target="_blank"><i class="fab fa-linkedin"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            สนใจสมัครได้ที่:
            <a class="text-dark" href="https://entry.wu.ac.th/index.html" target="_blank"> มหาวิทยาลัยวลัยลักษณ์</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- footer -->
</body>

</html>



