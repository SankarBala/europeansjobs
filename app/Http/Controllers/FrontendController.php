<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Country;
use App\Models\Query;
use App\Models\Subscription;
use Illuminate\Support\Facades\Session;
use App\Models\ContactForm;
use App\Models\Client;
use App\Models\UserStatus;
use App\Models\ClientStatus;

class FrontendController extends Controller
{

    public function __construct()
    {
        View::share('countries', Country::where('status', 'published')->get());
    }

    public function clientStatus()
    {

        return view('frontend.status');
    }

    public function clientStatusCheck(Request $request)
    {

        $client = Client::where('client_id', $request->cid)->where('passport', $request->psn)->get();

        if ($client->count() == 0) {
            Session::flash('message', 'Client id and passport no does not match');
            return back();
        }


        View::share('client', $client[0]);
        View::share('userStatus', UserStatus::where('client_id', $client[0]->id)->get());
        View::share('clientStatus', ClientStatus::all());

        // dd($client[0]->id);
        // dd(UserStatus::where('client_id', $client[0]->id)->get()[0]->status());

        return view('frontend.statusShow');
    }




    public function index()
    {
        return view('frontend.index');
    }
    public function aboutUs()
    {
        return view('frontend.about');
    }
    public function contactUs()
    {
        return view('frontend.contact');
    }

    public function country(Country $country)
    {
        View::share('sCountry', $country);
        return view('frontend.country');
    }

    public function postQuery(Request $request)
    {

        $query = new Query();
        $query->name = $request->name;
        $query->email = $request->email;
        $query->phone = $request->phone;
        $query->message = $request->message;
        $query->country = $request->country;
        $query->save();

        Session::flash('message', 'Your query has been saved successfully');

        return redirect()->back();
    }

    public function subscription(Request $request)
    {
        $subscription = new Subscription();
        $subscription->email = $request->email;
        $subscription->save();

        Session::flash('message', 'Subscription successfull');

        return back();
    }

    public function contactForm(Request $request)
    {

        $contactForm = new ContactForm();
        $contactForm->name = $request->name;
        $contactForm->email = $request->email;
        $contactForm->phone = $request->phone;
        $contactForm->web = $request->web;
        $contactForm->message = $request->message;
        $contactForm->save();

        Session::flash('message', 'Request submited');
        return back();
    }
}
