<x-bootstrap title="ระบบบริหารงานซ่อมบำรุง">
    <div class="row g-4">
        <div class="col-lg-8">
            <a class="btn btn-success" href="{{ route('MRS.create') }}">แจ้งปัญหา</a>
            <img src="https://www.citypng.com/public/uploads/preview/hd-settings-black-line-icon-png-701751694973543ev5sfvai0q.png"
                alt="Cinque Terre" width="10%">
        </div>
        <div class="col-lg-4">
            <form method="GET" action="{{ route('MRS.index') }}" class="form-inline">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="ค้นหาที่นี้..."
                        value="{{ request('search') }}">
                    <span class="input-group-append">
                        <button class="btn btn-secondary" type="submit">
                            {{-- <i class="fa fa-search"></i> --}}
                            <i class="bi bi-search"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif



    <table class="table my-4">
        <div class="col-lg-4">
            <tr>
                <th>#</th>
                <th>รูปภาพ</th>
                <th>ปัญหาที่พบ</th>
                <th>วันเกิดปัญหา</th>
                <th>ที่อยู่</th>
                <th>เบอร์ติดต่อกลับ</th>
                <th width="280px">รายการแก้ไข</th>
            </tr>
        </div>
        @foreach ($MRSs as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>
                    <img src="{{ $item->photo }}" height="100" />
                </td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->repdate }}</td>
                <td>{{ $item->addr }}</td>
                <td>{{ $item->phone }}</td>
                <td>
                    <div class="d-flex justify-birthdate-around px-4">
                        <div class="col-lg-6">
                            <a class="btn btn-info" href="{{ route('MRS.show', $item->id) }}">ดูรายละเอียด</a>

                            <a class="btn btn-primary" href="{{ route('MRS.edit', $item->id) }}">แก้ไขข้อมูล</a>

                            <form action="{{ route('MRS.destroy', $item->id) }}" method="POST"
                                onsubmit="return confirm('ต้องการลบหรือไม่?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">ลบ</button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>

    <div class="mt-4">{{ $MRSs->appends(['search' => request('search')])->links() }}</div>
</x-bootstrap>
