<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
   
    public function index()
    {
        
        $patients = Patient::all();

        if ($patients) {
            $data = [
                'message' => 'Get All Resource',
                'data' => $patients,
            ];

           
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'Data is Empty',
            ];

           
            return response()->json($data, 200);
        }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'numeric|required',
            'address' => 'required',
            'status' => 'required',
            'in_date_at' => 'date|required',
            'out_date_at' => 'date|required',
        ]);

        $patient = Patient::create($validatedData);

        $data = [
            'message' => 'Resource is Added Successfully',
            'data' => $patient,
        ];

        return response()->json($data, 201);
    }

    public function show($id)
    {
        $patient = Patient::find($id);

        if ($patient) {
            $data = [
                'message' => 'Get Detail Resource',
                'data' => $patient,
            ];
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'Resource Not Found',
            ];
            return response()->json($data, 404);
        }
    }

    public function update(Request $request, $id)
    {
        $patient = Patient::find($id);

        if ($patient) {
            $input = [
                'name' => $request->name ?? $patient->name,
                'phone' => $request->phone ?? $patient->phone,
                'address' => $request->address ?? $patient->address,
                'status' => $request->status ?? $patient->status,
                'in_date_at' => $request->in_date_at ?? $patient->in_date_at,
                'out_date_at' => $request->out_date_at ?? $patient->out_date_at,
            ];
            $patient->update($input);

            $data = [
                'message' => 'Resource is Update Successfully',
                'data' => $patient,
            ];
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'Resource Not Found',
            ];
            return response()->json($data, 404);
        }
    }
  
    public function destroy($id)
    {
        $patient = Patient::find($id);

        if ($patient) {
            $patient->delete();

            $data = [
                'message' => 'Resource is Delete Successfully',
            ];
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'Resource Not Found',
            ];
            return response()->json($data, 404);
        }
    }

    public function search($name)
    {
        $patient = Patient::where("name","like","%".$name."%")->get();

        if (count($patient)) {
            $data = [
                'message' => 'Get Searched Resource',
                'data' => $patient,
            ];

            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'Resource Not Found',
            ];

            return response()->json($data, 404);
        }
    }

    public function status($status)
    {
        $patients = Patient::where("status","like","%".$status."%")->get();

        $data = [
            'message' => 'Get all status resource',
            'data' => $patients,
        ];

        return response()->json($data, 200);
    }

    public function positive()
    {
        $patients = Patient::where("status","positive")->get();

        $data = [
            'message' => 'Get Positive Resource',
            'data' => $patients,
        ];

        return response()->json($data, 200);
    }

    public function recovered()
    {
        $patients = Patient::where("status","recovered")->get();

        $data = [
            'message' => 'Get Recovered Resource',
            'data' => $patients,
        ];

        return response()->json($data, 200);
    }

    public function dead()
    {
        $patients = Patient::where("status","dead")->get();

        $data = [
            'message' => 'Get Dead Resource',
            'data' => $patients,
        ];

        return response()->json($data, 200);
    }
}
