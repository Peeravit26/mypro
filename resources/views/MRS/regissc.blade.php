<x-bootstrap title="">
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>

    <body>
        <div class="text-center">
            <h1>ฟอร์มสมัครทุนการศึกษา</h1>
        </div>


        <form action="{{ route('MRS.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-4">

                <div class="col-lg-6">
                    <label class="form-label">คณะจ้า</label>
                    <span class="text-danger">*</span>
                    <select name="GR" class="form-select" >
                        <option>เลือก</option>
                        <option> คณะวิทยาศาสตร์และเทคโนโลยี | สาขาเทคโนโลยีสารสนเทศ </option>
                        <option> คณะวิทยาศาสตร์และเทคโนโลยี | สาขาโภชนาการและการกำหนดอาหาร </option>
                        <option> คณะเทคโนโลยีการเกษตร | สาขาเกษตรศาสตร์ กลุ่มวิชาเทคโนโลยีการผลิตพืช </option>
                    </select>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-2">
                    <label class="form-label">สัญชาติ </label>
                    <span class="text-danger">*</span>
                    <select name="TH" class="form-select">
                        <option>เลือก</option>
                        <option> ไทย </option>
                        <option> เทศ </option>
                    </select>
                </div>
                <div class="col-lg-2">
                    <label class="form-label">เพศ</label>
                    <span class="text-danger">*</span>
                    <select name="SE" class="form-select">
                        <option>เลือก</option>
                        <option> ชาย </option>
                        <option> หญิง </option>
                    </select>
                </div>
            </div>

            <div class="row mb-4">

                <div class="col-lg-2">
                    <label class="form-label">คำนำหน้าชื่อ</label>
                    <span class="text-danger">*</span>
                    <input type="tname" class="form-control" placeholder="ใส่ชื่อนำหน้า" required>
                </div>

                <div class="col-lg-2">
                    <label class="form-label">ชื่อ</label>
                    <span class="text-danger">*</span>
                    <input type="aname" class="form-control" placeholder="ใส่ชื่อ" required>
                </div>
                <div class="col-lg-2">
                    <label class="form-label">นามสกุล</label>
                    <span class="text-danger">*</span>
                    <input type="sname" class="form-control" placeholder="ใส่ นามสกุล" required>
                </div>
                <div class="col-lg-2">
                    <label class="form-label">เลขบัตร</label>
                    <span class="text-danger">*</span>
                    <input type="nump" class="form-control" placeholder="ใส่ เลขบัตร" required>
                </div>
                <div class="col-lg-2">
                    <label class="form-label">เบอร์</label>
                    <span class="text-danger">*</span>
                    <input type="numb" class="form-control" placeholder="ใส่เบอร์" required>
                </div>
            </div>


            <div class="row mb-4">

                <div class="col-lg-3">
                    <label class="form-label">ID line</label>
                    <span class="text-danger">*</span>
                    <input type="iline" class="form-control" placeholder="ใส่ ID line" required>
                </div>

                <div class="col-lg-3">
                    <label class="form-label">facebook</label>
                    <span class="text-danger">*</span>
                    <input type="namef" class="form-control" placeholder="ใส่ facebook" required>
                </div>

                <div class="col-lg-3">
                    <label class="form-label">E mail</label>
                    <span class="text-danger">*</span>
                    <input type="email" class="form-control" placeholder="ใส่ อีเมล" required>
                </div>
            </div>

            <div class="row mb-4">

                <div class="col-lg-2">
                    <label class="form-label">วุฒิที่ใช้ในการสมัคร</label>
                    <span class="text-danger">*</span>
                    <select name="qua" class="form-select">
                        <option>เลือก</option>
                        <option> ปวช. </option>
                        <option> ปวส. </option>
                        <option> ม6. </option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <label class="form-label">ชื่อสถานศึกษา </label>
                    <span class="text-danger">*</span>
                    <input type="namesc" class="form-control" placeholder="ชื่อสถานศึกษา" required>
                </div>
                <div class="col-lg-2">
                    <label class="form-label">จังหวัด</label>
                    <span class="text-danger">*</span>
                    <select name="cty" class="form-select">
                        <option>เลือก</option>
                        <option> กรุงเทพ </option>
                        <option> ปทุม </option>
                        <option> น่าน </option>
                    </select>
                </div>
            </div>

            <div class="row mb-4">

                <div class="col-lg-2">
                    <label class="form-label">สาขา / สายวิชาที่เรียน</label>
                    <span class="text-danger">*</span>
                    <input type="fos" class="form-control" placeholder="ใส่สาขา" required>
                </div>

                <div class="col-lg-2">
                    <label class="form-label">คะแนนเฉลี่ย (GPAX)</label>
                    <span class="text-danger">*</span>
                    <input type="gade" class="form-control" placeholder="ใส่เกรดเฉลี่ย" required>
                </div>
            </div>

            <div class="row mb-4">

                <div class="col-lg-2">
                    <label class="form-label">มีความกู้ยืมทุนการศึกษา</label>
                    <span class="text-danger">*</span>
                    <select name="wont" class="form-select">
                        <option>เลือก</option>
                        <option> กู้ </option>
                        <option> ไม่กู้ </option>
                    </select>
                </div>
            </div>

            <div class="row mb-4">
                <div class="mb-3">
                    <label for="formFileSm" class="form-label">แนบเอกสาร</label>
                    <span class="text-danger">*</span>
                    <input type="file" name="photoage" class="form-control" required>
                </div>

            </div>
            </div>




            <div class="text-center">
                <button type="submit" class="btn btn-primary">ยืนยัน</button>
                <a class="btn btn-primary" href="{{ route('MRS.index') }}"> ยกเลิก </a>
            </div>


        </form>



        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (() => {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                const forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.from(forms).forEach(form => {
                    form.addEventListener('submit', event => {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
            })()
        </script>




        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
    </body>

    </html>

</x-bootstrap>
