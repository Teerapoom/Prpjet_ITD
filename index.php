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
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@300&display=swap');
    *{
        font-family: 'Bai Jamjuree', sans-serif;
    }
    body{
        background-color: #deeaf0;
    }
    .txtvdo {
        margin-top: 10px
    }
    .colorcontainer1{
        background-color: #90CAF9;
        margin-top: 5px;
    }
    .imgcontent1{
        border-radius: 50%;
        margin: 10px;
    }
    .txtcontent1{
        margin-top: 10px;
    }
</style>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img
                    src="https://scontent.furt1-1.fna.fbcdn.net/v/t39.30808-6/266268798_5341426419207171_4826837247509475808_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeE190JIkIZWs_8-4vz_86CNdVT_xS2Oakl1VP_FLY5qSWJ279KGhIpi8_355FmjcGM6E6a_NpUJvmtk82-8udmY&_nc_ohc=izLT0pcYELkAX_BxsQc&_nc_ht=scontent.furt1-1.fna&oh=bb7ce96862861c0f995f53d2e2794bc3&oe=61B84A99"
                    alt="wu" width="50" height="50"></a>
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
                            data-bs-toggle="dropdown" aria-expanded="false">
                            รายละเอียด
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">รายละเอียดหลักสูตร ITD </a></li>
                            <li><a class="dropdown-item" href="#">อาชีพในฝัน</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
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
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://scontent.furt1-1.fna.fbcdn.net/v/t39.30808-6/266129706_5341526972530449_3211462295337844812_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeE5vdfjqPClk-nEt6kXgZK4bJSj7Diq3ytslKPsOKrfK-V-NDOvlNWPNOMvwUf4M0WoCQdk18kTecj3ddYbjoUH&_nc_ohc=zcIfHTT_bJMAX974qNg&_nc_ht=scontent.furt1-1.fna&oh=a88876581ef8877aecacb83dafdb172b&oe=61B84E37"
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
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
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
        <p class="h2 txtvdo" style="text-align:center"><strong>ITD ม.วลัยลักษณ์ มีอะไรดี</strong></p>
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
        <div class="container-fluid  colorcontainer1">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">
                    <img src="https://ocd.wu.ac.th/photo/components/com_eventgallery/helpers/image.php?&mode=full&folder=11026203&file=IMG_9871.JPG"  class="imgcontent1"  alt="comte" width="300" height="300"  >
                </div>
                <div class="col-4">
                    <h2 class="txtcontent1"><strong>ห้องเรียนของนักเรียน ITD</strong></h2>
                    <blockquote>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium aliquid illum sed aperiam odio, voluptatibus ad in quos architecto doloribus recusandae optio asperiores ut itaque natus consectetur enim inventore tempore.
                    </blockquote>
                </div>
            </div>
        </div>
        <!-- เนื้อหา 1 -->
    
</body>

</html>
