<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use validator;
class CustomerController extends Controller
{
    public function all()
    {
        return Customer::all();
        //return respose()->json($custom);

    }

    public function getById($id)
    {
        return Customer::find($id);
    }

    public function deleteCustomer($id)
    {
        try {
            $resp = Customer::find($id)->delete();
            return response(['status' => $resp, "message" =>'Record has been deleted Successfully'], 200);
        } catch(ModelNotFoundException $e) {
            return response(['status' => 'error', "message" => $e->getMessage()], 200);
        }
        
    }

    public function createCustomer(Request $request)
    {
        //$response = array();
        $parameters = $request->all();
 
        $rules =  array(
            'name'    => 'required'
        );
        $messages = array(
            'name.required' => 'name is required.'
        );
        $validator =Validator::make(array('name' => $parameters['name']), $rules, $messages);
        if(!$validator->fails()) {
            $response = Customer::create($parameters);
            
            return response()->json($response, 201);
        } else {
         $errors = $validator->errors();
            return response()->json(["error" => 'Validation error(s) occurred', "message" =>$errors->all()], 400);
      }


    // $input = $request->all();
    // //dd($input);
    // $custom = Customer::make($input, [
    //     'name' => 'required',
    //     'address' => 'required',
    //     'phone' => 'required'
    // ]);

    // if($custom->fails()){
    //     return $this->sendError('Validation Error.', $custom->errors());       
    // }

    // $custom = Customer::create($input);

    // return $this->sendResponse(new ProductResource($custom), 'Product created successfully.');
    }

    public function updateCustomer($id, Request $request)
    {
        $response = array();
        $parameters = $request->all();
 
        $rules =  array(
            'name'    => 'required'
        );
        $customer_name = $parameters['name'];
        $messages = array(
            'name.required' => 'name is required.'
        );
        $cust = Customer::findOrFail($id);
        if(empty($cust)) {
            return response()->json(["error" => 'Record not found!'], 400);
        }
 
        $validator = \Validator::make(array('name' => $customer_name), $rules, $messages);
        if(!$validator->fails()) {
            $response = $cust->update($parameters);
            
            return response()->json(['status' => $response, "message" => "Record has been updated successfully."], 200);
        } else {
         $errors = $validator->errors();
            return response()->json(["error" => 'Validation error(s) occurred', "message" =>$errors->all()], 400);
      }
      
    }
}