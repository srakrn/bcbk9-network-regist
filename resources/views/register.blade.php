<!doctype html>
<meta charset="utf-8"/>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>BCBK9 Network Registration</title>
    <style type="text/css">
        body{
            margin-top: 30px;
        }
        #logo{
            position: absolute;
            bottom: 10px;
            right: 10px;
            width: 20%;
            z-index: -2;
        }
    </style>
</head>
<body>
    <div class="logo">
        <img src="/bcbk9-logo.svg" id="logo" width="100%"></img>
    </div>
    <div class="container">
        <h1>BarCamp Bangkhen 9 Internet Access</h1>
        <hr/>
        <div id="card-citizen" class="collapse show">
            <div class="row">
                <div class="col-6">
                    <h2>กรอกรหัสบัตรประชาชน</h2>
                    <form id="citizen-form" onsubmit="return false">
                        <div class="form-group">
                            <label for="citizen-id">กรุณากรอกรหัสบัตรประชาชน 13 หลัก</label>
                            <input class="form-control" id="citizen-id">
                        </div>
                        <div class="alert alert-warning collapse" id="citizen-id-alert"></div>
                        <button type="submit" class="btn btn-primary">ยืนยัน</button>
                    </form>
                </div>
                <div class="col-6">
                    <div class="alert alert-light">
                        <h4>ข้อบ่งชี้ความเป็นส่วนตัว</h4>
                        <small>
                            <p>
                                ข้อมูลของท่านจะถูกถือครองโดยฝ่ายเครือข่าย บาร์แคมป์ บางเขน ครั้งที่ 9
                                และจะไม่เปิดเผยให้ทีมงานบาร์แคมป์ บางเขน ครั้งที่ 9 ในฝ่ายอื่น
                            </p>
                            <p>
                                ทีมงานบาร์แคมป์ บางเขน ครั้งที่ 9 จะไม่ส่งมอบข้อมูลใดๆ ที่ท่านกรอกให้กับบุคคลใดบุคคลอื่น
                                ยกเว้นเจ้าพนักงานหรือเจ้าหน้าที่บังคับใช้กฏหมายที่บังคับใช้พระราชบัญญัติคอมพิวเตอร์
                                หรือพนักงานของมหาวิทยาลัยเกษตรศาสตร์ที่ได้รับคำสั่งจากเจ้าพนักงานบังคับใช้กฏหมาย
                                ข้อมูลจะถูกทำลายทิ้งเมื่อล่วงเลยระยะเวลาที่กฏหมายกำหนดให้เก็บ
                                (หรือเวลาที่เจ้าพนักงานออกคำสั่งให้เก็บข้อมูลเพิ่มเติม)
                            </p>
                            <p>
                                ทีมงานจะเปิดเผยสถิติการขอข้อมูลจากเจ้าหน้าที่รัฐ บนเพจเฟซบุ๊คของงาน หากมีการร้องขอดังกล่าวเข้ามา
                            </p>
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div id="card-photo" class="collapse">
            <div class="row">
                <div class="col-12">
                    <h2>ถ่ายรูปคู่กับบัตรประชาชน</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <video id="webcam-preview" width="100%" autoplay></video>
                    <canvas style="display:none;"></canvas>
                </div>
                <div class="col-6">
                    <h2>วิธีการถ่ายรูป</h2>
                    <ul>
                        <li>รูปต้องเห็นรหัสบัตรประชาชนตรงกับที่กรอกก่อนหน้านี้ และต้องเห็นชื่อชัดเจน</li>
                        <li>ต้องเห็นหน้า และหน้าของผู้ที่ถ่ายรูป จะต้องตรงกับหน้าบนบัตรประชาชน</li>
                        <li class="text-info">สามารถปิดที่อยู่บนบัตรประชาชนด้วยนิ้วได้</li>
                    </ul>
                    <form id="photo-form" onsubmit="return false">
                        <button type="submit" class="btn btn-primary">ถ่ายรูป</button>
                        <img src="/loader.svg" height="30px" id="photo-form-loader" style="display: none"></img>
                    </form>
                </div>
            </div>
        </div>
        <div id="card-password" class="collapse">
            <div class="row">
                <div class="col-12">
                    <h2>รับรหัสผ่าน</h2>
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
        <div id="card-error" class="collapse">
            <div class="row">
                <div class="col-12">
                    <h2>ข้อผิดพลาด</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-danger" id="error-message">
                    </div>
                    <form id="error-form" onsubmit="return false">
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
    const video = document.getElementById("webcam-preview")
    const canvas = document.createElement("canvas");

    function cameraPreview(stream) {
        video.srcObject = stream;
    }
    function checkId(id){
        if(id.length != 13) {
            return false;
        }
        for(i=0, sum=0; i < 12; i++) {
            sum += parseFloat(id.charAt(i))*(13-i);
        }
        return (11-sum%11)%10 == parseFloat(id.charAt(12));
    }

    $("#citizen-form").submit(function() {
        citizenId = $("#citizen-id").val();
        if(checkId(citizenId)){
            $("#card-citizen").collapse("hide");
            $("#card-photo").collapse("show");
        }
        else{
            $("#citizen-id-alert").html("คุณใส่เลขประจำตัวประชาชนไม่ถูกต้อง");
            $("#citizen-id-alert").collapse("show");
        }
    });

    $("#photo-form").submit(function() {
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        canvas.getContext('2d').drawImage(video, 0, 0);
        base64Png = canvas.toDataURL('image/png');
        postData = {
            citizenId: citizenId,
            base64Png: base64Png
        }
        $("#photo-form-loader").show();
        $("#photo-form").find(":submit").prop("disabled", true);
        $.post("/api/register", postData)
            .done(function(data){
                $("#wifi-username").html(data.id);
                $("#wifi-password").html(data.password);
                $("#card-photo").collapse("hide");
                $("#card-password").collapse("show");
            })
            .fail(function(data){
                var error = data.responseJSON;
                if("status" in error){
                    $("#error-message").html(error.message);
                }
                else{
                    $("#error-message").html("เกิดข้อผิดพลาด (" + error.message + ")");
                }
                $("#card-photo").collapse("hide");
                $("#card-error").collapse("show");
            });
    });

    $("#password-form").submit(function() {
        window.location.reload(1);
    });

    $("#error-form").submit(function() {
        window.location.reload(1);
    });

    navigator.mediaDevices.getUserMedia(constraints).
        then(cameraPreview);
</script>
</html>
