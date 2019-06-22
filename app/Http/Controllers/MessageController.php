<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
     
    public function add(Request $request)
    {
        $this->validate($request, [
            'message' => 'required',
             
            
        ]);
        $question=Message::create($request->all());
        // $message=$question->message;
        //   $when = \Carbon\Carbon::now()->addSeconds(15);
    //   Mail::to('info@yasidea.ir')->cc(['mreyhanian@yasidea.ir'])
    //   ->bcc('mrhn2005@gmail.com')->later($when, new QuestionSubmitted($question)) ;
        
    //   Mail::to('mrhn2005@gmail.com')->send( new QuestionSubmitted($question)) ; 
    //   Telegram::sendMessage([
    //         'chat_id' =>"-221592990",
    //         'text' => "نام:".$request->name."\nتلفن:".$request->phone."\nایمیل:".$request->email."\nدرخواست:".$message."\n"
    //     ]);
        return $message="
        با تشکر. درخواست شما با موفقیت ثبت شد.
        ";
    }
     
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
