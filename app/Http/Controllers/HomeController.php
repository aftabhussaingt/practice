<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Validator;
use App\Notification;
use App\Sale;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['notifications'] =Notification::all();
        return view('home',$data);
    }
    public function notify(Request $request){
        $rule = [
          'message'=>'min:2|required|max:10'
        ];
        $message = [
          'message.required'=>'There must be something in here buddy',
          'message.min'=>'Input must be at least 2 characters long',
          'message.max'=>'Input must be maximum of 10 characters long'
        ];
        $validator = Validator::make($request->all(),$rule,$message);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $notification = new Notification;
        $notification->user_id = Auth::user()->id;
        $notification->message = $request->message;
        $notification->save();

        $data['notifications'] =Notification::all();
//        return $data['notifications'];
        session()->flash('success', 'Task was successful!');
        return view('/home',$data);

    }
    public function showSales(){
        $data['sales'] = Sale::paginate(5);
        return view('sales-get',$data);
    }
    public function showSalesInput(){
        $data['sales'] = Sale::paginate(5);
        return view('sales-input',$data);
    }
    public function insertSales(Request $request){
        $rule = [
            'name2'=>'min:2|required|max:10'
        ];
        $message = [
            'name2.required'=>'Please select "Amount"',
        ];
        $validator = Validator::make($request->all(),$rule,$message);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        return $request->all();
    }

    public function getDate(){

        $data['sale'] = Sale::find(1);
        return view('/date',$data);
    }
    public function setDate(Request $request){
        $rule = [
            'date'=>'required'
        ];
        $message = [
            'date.required'=>'Please select "Date"',
        ];
        $validator = Validator::make($request->all(),$rule,$message);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $sale = Sale::find($request->id);
        $sale->date = $request->date;
        $sale->save();

        return Sale::find($request->id);

    }
}
