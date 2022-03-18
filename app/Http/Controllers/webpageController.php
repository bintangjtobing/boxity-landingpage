<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\candidates;
use App\careerViews;
use App\blog;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Mail;
use App\Mail\confirmationToCandidate;
use App\Mail\confirmationToHRD;
use App\Mail\scheduleDemo;
use App\subscription;
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
    public function blog()
    {
        $blog = blog::orderBy('created_at', 'desc')->with('user', 'image')->paginate(9);
        return view('home.blog', ['blogs' => $blog]);
        // return response()->json($blog);
    }
    public function readBlog($id, Request $request)
    {
        // Update job count views
        $blogView = blog::where('id', Crypt::decrypt($id))->with('user', 'image')->first();
        $blogView->views += 1;
        $blogView->save();

        $blog = DB::table('blogs')->find(Crypt::decrypt($id));
        $blogGet = blog::where('id', '!=', Crypt::decrypt($id))->with('user', 'image')->inRandomOrder()->get();
        return view('home.read-blog', ['blogs' => $blogView, 'blogArr' => $blogGet]);
        // return response()->json($blogView);
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
        $job = DB::table('jobvacancies')->where('status', 0)->get();
        return view('home.career', ['job' => $job]);
        // dd($job);
    }
    public function getJobs(Request $req, $id)
    {
        $job = DB::table('jobvacancies')->find(Crypt::decrypt($id));

        // Update job count views
        $jobGetViews = DB::table('jobvacancies_views')->where('job_id', Crypt::decrypt($id))->first();
        if ($jobGetViews) {
            $jobViews = careerViews::where('job_id', Crypt::decrypt($id))->first();
            $jobViews->views += 1;
            $jobViews->save();
        } else {
            $jobViews = new careerViews();
            $jobViews->ip_address = $req->ip();
            $jobViews->views += 1;
            $jobViews->job_id = Crypt::decrypt($id);
            $jobViews->save();
        }
        return view('home.jobsDetail', ['job' => $job]);
        // dd($jobGetViews);
    }
    public function getJobsApply($id)
    {
        $job = DB::table('jobvacancies')->find(Crypt::decrypt($id));
        return view('home.jobsApply', ['job' => $job]);
        // dd($job);
    }
    public function postJobsApply($id, Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => 'required|captcha'
        ]);
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
    public function addSubscription(Request $request)
    {
        $sub = new subscription();
        $sub->email = $request->email;
        $sub->save();
        return redirect()->back()->with('success', 'success');
    }
    // Process the data
    public function postContact(Request $request)
    {
        $datas = $request->all();
        Mail::to('sales@boxity.id')->send(new scheduleDemo($datas));
        return redirect()->back()->with('success', 'Your message has been completed send to us!');
    }

    // Product Route
    public function erp()
    {
        return view('product.erp');
    }
    public function fornax()
    {
        return view('product.fornax');
    }
    public function lyra()
    {
        return view('product.lyra');
    }
    public function lunar()
    {
        return view('product.lunar');
    }
    public function orion()
    {
        return view('product.orion');
    }
    public function stockpile()
    {
        return view('product.stockpile');
    }
    public function octans()
    {
        return view('product.octans');
    }
    public function pyxis()
    {
        return view('product.pyxis');
    }
    public function aquila()
    {
        return view('product.aquila');
    }
    public function chatifine()
    {
        return view('product.chatifine');
    }
}
