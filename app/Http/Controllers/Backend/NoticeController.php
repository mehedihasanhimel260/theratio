<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;
use Carbon\Carbon;

class NoticeController extends Controller
{
    public function tech_web_all_notice()
    {
        $notices = Notice::latest('id', 'DESC')->get();
        return view('backend.notice.all_notice', compact('notices'));
    } //end method -------------------------------

    public function tech_web_add_notice()
    {
        return view('backend.notice.add_notice');
    } //end method---------------------------------------

    public function tech_web_notice_store(Request $request)
    {
        if ($request->hasFile('pdf_file')) {
            $file = $request->file('pdf_file');
            $fileName = date('YmdHi') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('backend/notice/'), $fileName);
            $save_url = 'backend/notice/' . $fileName; //insert photo into database
        }

        Notice::insert([
            'short_des_eng' => $request->short_des_eng,
            'short_des_bng' => $request->short_des_bng,
            'long_des_eng' => $request->long_des_eng,
            'long_des_bng' => $request->long_des_bng,
            'pdf_file' =>  $save_url ?? null,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Notice inserted Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('all.notice')->with($notification);
    } //end method------------------------------

    public function tech_web_notice_edit($id)
    {
        $edit_notice = Notice::findOrFail($id);
        return view('backend.notice.edit_notice', compact('edit_notice'));
    } //end method------------------------------------------

    public function tech_web_notice_update(Request $request)
    {
        $id = $request->id;
        $pdf_file = Notice::find($id);
        $del_pdf_file = $pdf_file->pdf_file;

        if ($request->hasFile('pdf_file')) {
            @unlink($del_pdf_file);
            $file = $request->file('pdf_file');
            $fileName = date('YmdHi') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('backend/notice/'), $fileName);
            $save_url = 'backend/notice/' . $fileName; //insert photo into database
        }

        Notice::findOrFail($id)->update([
            'short_des_eng' => $request->short_des_eng,
            'short_des_bng' => $request->short_des_bng,
            'long_des_eng' => $request->long_des_eng,
            'long_des_bng' => $request->long_des_bng,
            'pdf_file' =>  $save_url ?? null,
            'updated_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Notice Updated Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('all.notice')->with($notification);
    } //end method------------------------------

    public function tech_web_notice_delete($id)
    {
        $pdf_file = Notice::findOrFail($id);
        @unlink($pdf_file->pdf_file);
        Notice::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Notice Deleted Successfully!',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    } //end method---------------------------------

    // Notice status active inactive method start ------------
    public function tec_web_notice_inactive($id)
    {
        Notice::findOrFail($id)->update(['status' => '0']);
        return redirect()->back();
    }
    public function tec_web_notice_active($id)
    {
        Notice::findOrFail($id)->update(['status' => '1']);
        return redirect()->back();
    }
}
