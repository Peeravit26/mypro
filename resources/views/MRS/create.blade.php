<x-bootstrap title="รายละเอียดการแจ้งปัญหา">
    <div class="row">
        <div class="col-lg-12">
            <div class="py-4">
                <a class="btn btn-primary" href="{{ route('MRS.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>โปรดระวัง</strong> ปัญหาการกรอกข้อมูล<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('MRS.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-4">
            <div class="col-md-12">
                <strong>ปัญหาที่พบ: <span class="text-danger">*</span> </strong>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="col-md-12">
                <strong>ชื่อพร้อมที่อยู่ : <span class="text-danger">*</span> </strong>
                <textarea class="form-control" style="height:150px"  name="addr" placeholder="ชื่อพร้อมที่อยู่"></textarea>
            </div>
            <div class="col-md-12">
                <strong>รูปประกอบ: <span class="text-danger">*</span> </strong>
                <input type="file" name="photo" class="form-control" required>
            </div>
            <div class="col-md-12">
                <strong>วันที่แจ้ง:<span class="text-danger">*</span></strong>
                <input type="date" name="repdate" class="form-control" required >
            </div>
            <div class="col-md-12">
                <strong>เบอร์โทรติดต่อ: <span class="text-danger">*</span></strong>
                <input type="number" name="phone" class="form-control" value="0">
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
</x-bootstrap>