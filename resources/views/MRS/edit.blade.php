<x-bootstrap title="แก้ไขข้อมูล">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="py-4">
                <a class="btn btn-primary" href="{{ route('MRS.index') }}"> กลับ</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('MRS.update', $MRS->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="row g-4">
            <div class="col-md-12">
                <strong>ปัญหาที่พบ: <span class="text-danger">*</span> </strong>
                <input type="text" name="title" class="form-control" value="{{ $MRS->title }}" required>
            </div>
            <div class="col-md-12">
                <strong>ที่อยู่: <span class="text-danger">*</span> </strong>
                <input type="textarea" name="addr" class="form-control" style="height:150px" value="{{ $MRS->addr }}" required>
            </div>
            <div class="col-md-12">
                <strong>รูปประกอบ: </strong>
                <input type="file" name="photo" class="form-control" value="{{ $MRS->photo }}" >
                <img src="{{ $MRS->photo }}" height="150" />
            </div>
            <div class="col-md-12">
                <strong>วันที่แจ้ง:</strong>
                <input type="date" class="form-control" name="redate" > {{ $MRS->repdate }}</textarea>
            </div>
            <div class="col-md-12">
                <strong>เบอร์ติดต่อกลับ	: </strong>
                <input type="number" name="phone" class="form-control" value="{{ $MRS->phone }}">
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">แจ้งปัญหา</button>
            </div>
        </div>


    </form>
</x-bootstrap>