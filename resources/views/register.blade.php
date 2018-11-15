<!doctype html>
<meta charset="utf-8"/>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Test</title>
</head>
<body>
    <div class="container">
        <div id="card-citizen" class="collapse show">
            <div class="row">
                <div class="col-12">
                    <h1>กรอกรหัสบัตรประชาชน</h1>
                    <hr/>
                    <form id="citizen-form" onsubmit="return false">
                        <div class="form-group">
                            <label for="citizen-id">กรุณากรอกรหัสบัตรประชาชน 13 หลัก</label>
                            <input class="form-control" id="citizen-id">
                        </div>
                        <button type="submit" class="btn btn-primary">ยืนยัน</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="card-photo" class="collapse">
            <div class="row">
                <div class="col-12">
                    <h1>ถ่ายรูปคู่กับบัตรประชาชน</h1>
                    <hr/>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <video id="webcam-preview" width="100%" autoplay></video>
                </div>
                <div class="col-6">
                    <h2>วิธีการถ่ายรูป</h2>
                    <ul>
                        <li>ถ่ายรูปคู่กับบัตรประชาชน ให้ข้อความบนบัตรเห็นชัด ไม่พร่าเลือน</li>
                        <li>หน้าของผู้ที่ถ่ายรูป จะต้องตรงกับหน้าบนบัตรประชาชน</li>
                    </ul>
                    <p>
                        <small>
                            ทีมงานบาร์แคมป์บางเขน ครั้งที่ 9 จะไม่ส่งมอบข้อมูลใดๆ ที่ท่านกรอกให้กับบุคคลใดบุคคลอื่น
                            ยกเว้นเจ้าพนักงานหรือเจ้าหน้าที่บังคับใช้กฏหมายที่บังคับใช้พระราชบัญญัติคอมพิวเตอร์
                            และจะทำลายข้อมูลทิ้งภายในระยะเวลากฏหมายกำหนด
                        </small>
                    </p>
                    <form id="photo-form" onsubmit="return false">
                        <button type="submit" class="btn btn-primary">ถ่ายรูป</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="card-password" class="collapse">
            <div class="row">
                <div class="col-12">
                    <h1>รับรหัสผ่าน</h1>
                    <hr/>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="alert alert-success" role="alert">
                        ชื่อผู้ใช้: <span id="wifi-username">abcdef</span><br/>
                        รหัสผ่าน: <span id="wifi-password">abcdef</span>
                    </div>
                </div>
                <div class="col-6">
                    <h2>วิธีเข้าใช้งาน</h2>
                    <p>(กรุณาถ่ายรหัสและวิธีการเข้าใช้งานไว้ก่อน เพื่อให้ผู้อื่นด้านหลังท่านได้ลงทะเบียนรับรหัสผ่าน)</p>
                    <p>เชื่อมต่อกับไวไฟ <b>BCBK9</b> แล้วกรอกชื่อผู้ใช้-รหัสผ่านดังกล่าว</p>
                    <form id="password-form" onsubmit="return false">
                        <button type="submit" class="btn btn-primary">ปิดหน้านี้</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    const constraints = {
        video: true
    };

    function cameraPreview(stream) {
        document.getElementById('webcam-preview').srcObject = stream;
    }

    $("#citizen-form").submit(function(){
        console.log($("#citizen-id").val());
        $("#card-citizen").collapse("hide");
        $("#card-photo").collapse("show");
    });

    $("#photo-form").submit(function(){
        $("#card-photo").collapse("hide");
        $("#card-password").collapse("show");
    });

    $("#password-form").submit(function(){
        console.log("wtf");
        window.location.href = window.location.href; //This is a possibility
        window.location.reload(1); //Another possiblity
        history.go(0); //And another
    });

    navigator.mediaDevices.getUserMedia(constraints).
        then(cameraPreview);
</script>
</html>
