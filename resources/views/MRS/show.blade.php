<x-bootstrap title="รายละเอียดงานซ่อมบำรุง">
    <div class="row g-4">
        <div class="col-lg-12">
            <a class="btn btn-primary" href="{{ route('MRS.index') }}"> กลับ</a>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-lg-4">
            <img src="{{ $MRS->photo }}" class="img-fluid img-thumbnail" />
        </div>
        <div class="col-lg-8">
            <div class="row">
                <span class="fs-2 text-warning">สถานะ : รับเรื่องแล้ว</span>
            </div>
            <h4>ปัญหาที่แจ้ง :</h4>
            <span>{{ $MRS->title }}</span>
            <hr />
            <div>
                <h4>วันที่แจ้ง :</h4>
                <span> {{ $MRS->repdate }} </span>
                
            </div>

            <hr />
            <div>
                <h4>ที่อยู่:</h4>
                <span>{{ $MRS->addr }}</span>
            </div>
            <hr />
            <div>
                <h4>เบอร์โทรติดต่อ: </h4>
                <span>{{ $MRS->phone }}</span>
            </div>
        </div>
    </div>
</x-bootstrap>