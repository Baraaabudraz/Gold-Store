<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Industry;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create()
    {
        $users=User::all();
        $industries = Industry::all();
        return view('cms.mail.create',compact('industries','users'));
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'file' => 'mimes:docx,doc,pdf,jpeg,jpg,png',
            'body' => 'required'
        ]);
        $image = $request->file('file');
        $details = [
            'body' => $request->body,
            'file' => $image
        ];


        if ($request->industry) {
            $industry = Industry::query()->findOrFail($request->industry);
            $industriesEmail = $industry->email;
            Mail::to($industriesEmail)->send(new SendMail($details));

        } elseif ($request->user) {
            $user = User::query()->findOrFail($request->user);
            $userEmail = $user->email;
            Mail::to($userEmail)->send(new SendMail($details));

        } else{
            $users = User::all();
            foreach ($users as $user) {
                Mail::to($user->email)->queue(new SendMail($details));
            }
        }
        session()->flash('alert-type','alert-success');
        session()->flash('message',trans('dashboard_trans.Email sent successfully'));
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
