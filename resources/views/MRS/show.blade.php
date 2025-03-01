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
            <h2>ปัญหาที่แจ้ง :</h2>
            <h3>{{ $MRS->title }}</h3>
            <hr />
            <div>
                <h2>วันที่แจ้ง :</h2>
                {{ $MRS->repdate }} 
            </div>

            <hr />
            <div>
                <strong>ที่อยู่: </strong>
                <span class="fs-2 text-warning">{{ $MRS->addr }}</span>
            </div>
            <hr />
            <div>
                <strong>เบอร์โทรติดต่อ: </strong>
                <span>{{ $MRS->phone }}</span>
            </div>
        </div>
    </div>
</x-bootstrap>