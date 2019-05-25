<html lang="en">
    <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">        
                        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <meta charset="utf-8">
      <link rel="stylesheet" href="fangstyle.css">
        <title>JustFang Hotel (Member)</title>
    </head>
    <body>
      <?php session_start(); ?>
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #339999;" id="mynav">
                <a class="navbar-brand" href="#" style="color: white">
                    <img src="pic/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    JustFang
                </a>
                    
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                </button>
                  
                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <ul class="navbar-nav mr-auto">
                              
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" style="color: #eceaea">HOME</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link " href="#" style="color:white">Check in</a>
                      </li>

                        <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#"style="color: white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Room
                             </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="#">Find Room</a>
                                  <a class="dropdown-item" href="#">Add New Room</a>
                                </div>
                        </li>

                        <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#"style="color: white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Report
                             </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="analysis1.php">จำนวนคนที่เข้าพักในโรงแรมสาขาต่างๆแต่ละเดือน</a>
                                  <a class="dropdown-item" href="analysis2.php">จำนวนพนักงานในตำแหน่งต่างๆในโรงแรมแต่ละสาขา</a>
                                  <a class="dropdown-item" href="analysis3.php">จำนวนการจองห้องประเภทต่างๆของโรงแรมโดยการเลือกสาขาและเดือน</a>
                                  <a class="dropdown-item" href="analysis4.php">อายุของพนักงาน</a>
                                  <a class="dropdown-item" href="analysis5.php">รายได้รวมของแต่ละสาขา</a>
                                  <a class="dropdown-item" href="analysis6.php">สมาชิกที่มีคะแนนสะสมตามที่กำหนด</a>
                                  <a class="dropdown-item" href="analysis7.php">จำนวนพนักงานส่วนต่างๆแบ่งตามสัญชาติ</a>
                                  <a class="dropdown-item" href="analysis8.php">จำนวนพนักงานในโรงแรมตามสาขาที่เลือกจำแนกตามกรุ๊ปเลือด</a>
                                  <a class="dropdown-item" href="analysis9.php">จำนวนวันของคนที่เข้ามาใช้บริการของโรงแรมนานที่สุด 10 อันดับแรก</a>
                                  <a class="dropdown-item" href="analysis10.php">ลักษณะการจ่ายเงินพร้อมยอมรวมในแต่ละสาขา</a>
                                  <a class="dropdown-item" href="analysis11.php">จำนวนคนที่สมัครสมาชิกในโรงแรมแต่ละเดือน 5 เดือนล่าสุด</a>
                                  <a class="dropdown-item" href="analysis12.php">ห้องพักที่ลูกค้าพึงพอใจมากที่สุด 5 อันดับแรกของสาขาที่เลือก</a>
                                </div>
                        </li>


                              
                    </ul>

                           
                </div>
            </nav>

            <img class="card-img-top" src="pic/hotel5.jpeg" alt="Card image cap" style="margin: -21.5% 0;">
    </body>
</html>