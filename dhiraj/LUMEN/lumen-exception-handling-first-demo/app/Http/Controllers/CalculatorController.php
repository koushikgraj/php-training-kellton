<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class CalculatorController extends Controller
{
    
    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function divisionWithTryCatch(Request $request): JsonResponse
    {
        $this->validate($request, [
            'a' => ['required', 'numeric'],
            'b' => ['required', 'numeric'],
        ]);
        // dd($request);
        try {
    
            $a = (int) $request->input('a');
    
            $b = (int) $request->input('b');
    if($b== 0)
{
    return response()->json(['message' => 'Bad request. Can not divide by zero'], 400);
    

}
            return response()->json([
                'a' => $a,
                'b' => $b,
                'result' => $a / $b
            ]);
                   
        } catch (\Throwable $e) {
            
            return response()->json([
                'error' => [
                    'description' => $e->getMessage()
                ]
            ], 500);
            
        }
    }
    
}