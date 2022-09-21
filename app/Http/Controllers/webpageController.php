<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\candidates;
use App\careerViews;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Mail;
use App\Mail\confirmationToCandidate;
use App\Mail\confirmationToHRD;
use App\Mail\scheduleDemo;
use App\subscription;
use Cloudinary\Cloudinary as CloudinaryCloudinary;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\blog;
use App\comments;
use App\event_participants;
use App\events;

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
        $blog = blog::orderBy('created_at', 'desc')->where('status', 1)->with('user', 'image', 'file')->paginate(9);
        // $blog = blogs::orderBy('created_at', 'desc')->paginate(9);
        // dd($blog);
        return view('home.blog', ['blogs' => $blog]);
        // return response()->json($blog);
    }
    public function readBlog($slug, Request $request)
    {
        // Update job count views
        $blogView = blog::where('slug', $slug)->with('user', 'image', 'file', 'categories', 'subcategories')->first();
        $blogView->views += 1;
        $blogView->save();

        $blogGet = blog::where('userid', $blogView->user->id)->orderBy('views', 'DESC')->with('image')->limit(3)->get();
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
        $job = DB::table('jobvacancies')
            ->join('jobvacancies_views', 'jobvacancies.id', '=', 'jobvacancies_views.job_id')
            ->orderBy('jobvacancies.created_at', 'DESC')
            ->select('jobvacancies.*', 'jobvacancies_views.views')
            ->limit(5)
            ->get();
        return view('home.career', ['job' => $job]);
        // return response()->json($job);
        // dd($job);
    }
    public function getJobs(Request $req, $slug)
    {
        $job = DB::table('jobvacancies')->where('slug', $slug)->first();

        // Update job count views
        $jobGetViews = DB::table('jobvacancies_views')->where('job_id', $slug)->first();
        if ($jobGetViews) {
            $jobViews = careerViews::where('job_id', $slug)->first();
            $jobViews->views += 1;
            $jobViews->save();
        } else {
            $jobViews = new careerViews();
            $job = DB::table('jobvacancies')->where('slug', $slug)->first();
            $jobViews->ip_address = $req->ip();
            $jobViews->views += 1;
            $jobViews->job_id = $job->id;
            $jobViews->save();
        }
        return view('home.jobsDetail', ['job' => $job]);
        // return response()->json($job);
        // dd($job);
    }
    public function getJobsApply($id)
    {
        $job = DB::table('jobvacancies')->where('slug', $slug)->first();
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
        $candidate->posisi = $slug ?? '-';
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
    public function landingpage()
    {
        return view('product.landingpage');
    }
    public function semplice()
    {
        return view('product.semplice');
    }
    public function postComments(Request $request, $slug)
    {
        $blog = blog::where('slug', $slug)->first();
        $comments = new comments();
        $comments->user_id = $request->user_id;
        $comments->name = $request->name;
        $comments->email = $request->email;
        $comments->post_id = $blog->id;
        $comments->parent_id = $request->parent_id;
        $comments->body = $request->body;
        $comments->save();
        return back();
    }
    // events
    public function events()
    {
        $events = events::with('image')->orderBy('created_at', 'DESC')->limit(6)->get();
        return view('home.events', ['events' => $events]);
        // return response()->json($events);
        // dd($job);
    }
    public function getEvents(Request $req, $slug)
    {
        $events = events::where('slug', $slug)->with('user', 'image')->first();
        return view('home.eventsDetail', ['events' => $events]);
        // return response()->json($events);
        // dd($job);
    }
    public function getEventsApply($slug)
    {
        $events =
            events::where('slug', $slug)->with('user', 'image')->first();
        return view('home.eventsRegistration', ['events' => $events]);
        // dd($job);
    }
    public function postEventsApply($slug, Request $request)
    {
        $get =
            events::where('slug', $slug)->first();
        $events = new event_participants();
        $events->event_id = $get->id ?? '-';
        $events->name = $request->name;
        $events->email = $request->email;
        $events->nohp = $request->nohp;
        $events->type = $request->type;
        $events->refrences = $request->refrences;
        $events->sector = $request->sector;
        $events->description = $request->description;

        $events->save();
        return redirect()->back()->with('success', 'Congratulations!');
        // dd($request->all());
    }
}
