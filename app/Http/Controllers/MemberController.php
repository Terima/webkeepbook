<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function backend_index()
    {
        $members = Member::all();
        return view('backend.members.index', ['members' => $members]);
    }

    public function insert()
    {
        return view('backend.members.insert');
    }

    public function store(Request $request)
    {
        $members = Member::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'email'=> $request->input('email'),
            'password'=> $request->input('password'),
            'phone_number'=> $request->input('phone_number'),
            'created_at'=> now()
        ]);
        return redirect()->route('backend_members');
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
        $member = Member::where('id', '=', $id)->first();
        return view('backend.members.edit', ['member' => $member]);
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
        $member = Member::where('id', '=', $id)->first();
        $update = [
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'email'=> $request->input('email'),
            'password'=> $request->input('password'),
            'phone_number'=> $request->input('phone_number'),
            'updated_at'=> now()
        ];
        $member->update($update);
        return redirect()->route('backend_members');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $member = Member::where('id', '=', $id)->first();
        $member->delete();
        return redirect()->route('backend_members');
    }
}
