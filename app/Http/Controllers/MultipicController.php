<?php

namespace App\Http\Controllers;

use App\Models\Multipic;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Image;
class MultipicController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
    }

    public function MultiPic(){
        $multipics = Multipic::latest()->paginate(3);
        return view('admin.multipic.index',compact('multipics'));
    }

    public function AddMultiPic(Request $request){



        $image = $request->file('image');

        foreach ($image as $multi_image) {
            $name_gen = hexdec(uniqid()).'.'.$multi_image->getClientOriginalExtension();
            Image::make($multi_image)->resize(300,200)->save('image/multi/'.$name_gen);

            $last_img = 'image/multi/'.$name_gen;

            $multipic = new Multipic;
            $multipic->image = $last_img;
            $multipic->created_at = Carbon::now();
            $multipic->save();
        }


        return Redirect::back()->with('success','Multipic Inserted Successful');
        //view('admin.category.index',compact('categories'));
    }
}
