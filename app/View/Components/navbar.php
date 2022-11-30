<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $nav;
    public $css;
    public $desc;
    public $key;
    public function __construct($nav,$css,$desc,$key)
    { 
        //
        $this->nav=$nav;
        $this->css=$css;
        $this->desc=$desc;
        $this->key=$key;
    }

    /**  
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        if(session()->has('usnm','loginstat','usiden')){
           $ssn=  session()->get('usiden');
            // dd(session());
            
            $img=$this->getUsrImg($ssn);
            foreach ($img as $key) {
                foreach ($key as $value) {
                    $img=$value;
                }
            }

            return view('components.navbar')->with(['data'=>$img]);
        }else{

            return view('components.navbar')->with(['data'=>""]);
        }
    }
     function getUsrImg($iden){
        
        $data= DB::table('usersignupinfo')->select('images')->where('uidenkk',$iden)->get();
        // dd($data);
        return $data;
    }
}
