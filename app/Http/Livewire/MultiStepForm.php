<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Student;

class MultiStepForm extends Component
{
    use WithFileUploads;

    public $description;
    public $email;
    public $phone;
    public $country;
    public $cv;

    public $totalSteps = 4;
    public $currentStep = 1;


    public function mount(){
        $this->currentStep = 1;
    }


    public function render()
    {
        return view('livewire.multi-step-form');
    }

    public function increaseStep(){
     
        $this->resetErrorBag();
       
        $this->validateData();
         $this->currentStep++;
        
         if($this->currentStep > $this->totalSteps){
             $this->currentStep = $this->totalSteps;
         }
         
    }

    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function validateData(){

        if($this->currentStep == 1){
            $this->validate([
                'email'=>'required|email|unique:students',
                'phone'=>'required'
            ]);
        }
        elseif($this->currentStep == 2){
              $this->validate([
                 'description'=>'required'
              ]);
        }
       
    }

    public function register(){
       
          $this->resetErrorBag();
          if($this->currentStep == 3){
              $this->validate([
                  'cv'=>'required|mimes:doc,docx,pdf|max:1024'
              ]);
          }
dd($this->country);
          $cv_name = 'CV_'.$this->cv->getClientOriginalName();
          $upload_cv = $this->cv->storeAs('students_cvs', $cv_name);
          if($upload_cv){
              $values = array(
                  "email"=>$this->email,
                  "phone"=>$this->phone,
                  "country"=>$this->country,
                  "description"=>$this->description,
                  "cv"=>$cv_name,
              );

              Student::insert($values);
              $data = ['email'=>$this->email];
              $this->reset();
              $this->currentStep = 1;
            
            // dd($data);
            return redirect()->route('registration.success', $data);
          }
    }
}
