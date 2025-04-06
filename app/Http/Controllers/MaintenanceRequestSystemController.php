<?php

namespace App\Http\Controllers;

use App\Models\MRS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MaintenanceRequestSystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
        public function bps()
        {
            return view('MRS.bps');  // ส่งข้อมูลไปยัง view
        }
        public function regissc()
        {
            return view('MRS.regissc');  // ส่งข้อมูลไปยัง view
        }
       

    public function index(Request $request)
    {
        // GET SEARCH KEYWORD
        $keyword = $request->get('search');
        // DEFINE ITEM PER PAGE
        $perPage = 5;

        if (!empty($keyword)) {
            //CASE SEARCH, show some
            $MRSs = MRS::where('title', 'LIKE', "%$keyword%")
                // ->orWhere('repdate', 'LIKE', "%$keyword%")
                // ->orWhere('addr', 'LIKE', "%$keyword%")
                // ->orWhere('cost', 'LIKE', "%$keyword%")
                // ->orWhere('photo', 'LIKE', "%$keyword%")
                // ->orWhere('phone', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            // CASE NOT SEARCH, show all
            $MRSs = MRS::latest()->paginate($perPage);
        }

        return view('MRS.index', compact('MRSs'));
        // return view('MRS.index2', compact('MRS'));
        // return view('MRS.index',compact('MRS'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
        return view('MRS.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $request->validate([
            'title' => 'required',
            'addr' => 'required',
            // 'photo' => 'required',
        ]);

        // GET ALL DATA SUBMIT FROM <form></form>
        $requestData = $request->all();

        // FOR UPLOAD
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('', 'public');
            $requestData['photo'] = url(Storage::url($path));
        }

        //CREATE A RECORD
        MRS::create($requestData);

        return redirect('MRS')->with('success', 'แจ้งปัญหาเรียบร้อย.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //QUERY by id
        $MRS = MRS::findOrFail($id);

        return view('MRS.show', compact('MRS'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //QUERY by id
        $MRS = MRS::findOrFail($id);

        return view('MRS.edit', compact('MRS'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //validation
        $request->validate([
            'title' => 'required',
            'addr' => 'required',
            // 'photo' => 'required',
        ]);

        // GET ALL DATA SUBMIT FROM <form></form>
        $requestData = $request->all();

        // FOR UPLOAD A NEW FILE WITHOUT DELETE THE OLD FILE
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('', 'public');
            $requestData['photo'] = url(Storage::url($path));
        }

        //UPDATE A RECORD
        $MRS = MRS::findOrFail($id);
        $MRS->update($requestData);
        
        return redirect('MRS')->with('success', 'แก้ไขเรียบร้อย.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DELETE by id
        MRS::destroy($id);

        return redirect('MRS')->with('success', 'ลบแล้ว.');
    }
}