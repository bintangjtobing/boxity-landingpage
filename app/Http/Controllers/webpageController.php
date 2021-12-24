<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\candidates;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Mail;
use App\Mail\confirmationToCandidate;
use App\Mail\confirmationToHRD;
use App\Mail\scheduleDemo;
use Cloudinary\Cloudinary as CloudinaryCloudinary;
use Illuminate\Support\Facades\DB;

class webpageController extends Controller
{
    public function company()
    {
        return DB::table('company_details')->first();
    }
    public function index()
    {
        return view('home.index');
    }
    public function about()
    {
        return view('home.about');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function career()
    {
        $job = DB::table('jobvacancies')->get();
        return view('home.career', ['job' => $job]);
        // dd($job);
    }
    public function getJobs($id)
    {
        $job = DB::table('jobvacancies')->find(Crypt::decrypt($id));
        return view('home.jobsDetail', ['job' => $job]);
        // dd($job);
    }
    public function getJobsApply($id)
    {
        $job = DB::table('jobvacancies')->find(Crypt::decrypt($id));
        return view('home.jobsApply', ['job' => $job]);
        // dd($job);
    }
    public function postJobsApply($id, Request $request)
    {
        $company = DB::table('company_details')->first();
        $candidate = new candidates();
        $candidate->posisi = Crypt::decrypt($id) ?? '-';
        $candidate->nama_lengkap = $request->nama_lengkap;
        $candidate->email = $request->email;
        $candidate->nohp = $request->nohp;
        $candidate->about = $request->about;

        $uploadFile = Cloudinary::upload($request->file('supported_file')->getRealPath(), [
            'folder' => 'assets/candidate'
        ])->getSecurePath();

        // $file = $request->file('supported_file');
        // $filename = time() . '.' . $request->file('supported_file')->extension();
        // $file->move('webpage/career/file/', $filename);
        $candidate->supported_file = $uploadFile;
        $candidate->save();
        Mail::to($candidate->email)->send(new confirmationToCandidate($candidate));
        Mail::to('hr@boxity.id')->send(new confirmationToHRD($candidate));
        return redirect()->back()->with('success', 'Congratulations! We have received your application. Please wait for us to review it, and send you feedback via the email you provided.');
        // dd($request->all());
    }
    public function teams()
    {
        return view('home.teams');
    }
    public function scheduleDemo()
    {
        return view('home.schedule');
    }
    // Process the data
    public function postContact(Request $request)
    {
        $datas = $request->all();
        Mail::to('sales@boxity.id')->send(new scheduleDemo($datas));
        return redirect()->back()->with('success', 'Your message has been completed send to us!');
    }
}
