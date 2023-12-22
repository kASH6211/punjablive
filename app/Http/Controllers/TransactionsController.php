<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OfficeLock;

class TransactionsController extends Controller
{
     public function employeedata()
    {
        return view('transactions.employeedata');
    }

    public function employeedataadd()
    {
        return view('transactions.employeedataadd');

    }

    public function employeedataedit($id)
    {
        if (!ctype_alnum(strval($id))) {
            // The variable is alphanumeric
            return view('transactions.employeedataedit');
        }
        return view('transactions.employeedataedit',[
            'id' => $id]);
    }


    public function submittedOffices()
    {
        return view('transactions.submittedoffices');
    }
    public function exemption()
    {
        return view('transactions.exemption');
    }
    
    public function submittedData($id)
    {
        if (!ctype_alnum(strval($id))) {
            // The variable is alphanumeric
            return view('transactions.submittedoffices');
        }
        $record = OfficeLock::find($id);
        if($record)
            return view('transactions.submitteddata',["id"=>$id]);
        return view('transactions.submittedoffices');
       
    }
    public function finalizedOffices()
    {
        return view('transactions.finalizedoffices');
    }

}
