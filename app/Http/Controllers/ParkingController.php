<?php

namespace App\Http\Controllers;

use App\Models\Park;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ParkingController extends Controller
{
    public function entered(Request $request) {
        $request->validate([
            'licenseNumber' => 'required', 'string|max:8', 
        ]);
    
        $exists = Park::where('licenseNumber', $request->licenseNumber)
                         ->whereNull('exit')->first();
    
        if ($exists) {
            return response()->json(['error' => 'Kendaraan Sudah Masuk!'], 400);
        }
    
        $parking = Park::create([
            'uniqueCode' => strtoupper(Str::random(8)),
            'licenseNumber' => $request->licenseNumber,
            'enter' => now(),
        ]);
    
        return response()->json(['uniqueCode' => $parking->uniqueCode], 201);
    }


    public function exited(Request $request) {
        $request->validate([
            'uniqueCode' => 'required','string',
        ]);
    
        $parking = Park::where('licenseNumber', $request->uniqueCode)
                          ->whereNull('exit')->first();
    
        if (!$parking) {
            return response()->json(['error' => 'kode sudah dimasukkan.'], 404);
        }
    
        $entryTime = $parking->enter;
        $exitTime = now();
        $duration = ceil($exitTime->diffInMinutes($entryTime) / 60);
        $cost = $duration * 3000;
    
        $parking->update([
            'exit' => $exitTime,
            'cost' => $cost,
        ]);
    
        return response()->json([
            'message' => 'Kendaraan Keluar.',
            'licenseNumber' => $parking->licenseNumber,
            'duration' => $duration,
            'cost' => $cost,
        ]);
    }

    public function report(Request $request) {
        $request->validate([
            'startDate' => 'required|date',
            'endDate' => 'required|date|after_or_equal:start_date',
        ]);
    
        $parkings = Park::whereBetween('enter', [$request->startDate, $request->endDate])
                           ->get();
    
        return view('admin.report', compact('parkings'));
    }
    
    public function export(Request $request) {
        $parkings = Park::whereBetween('enter', [$request->startDate, $request->endDate])
                           ->get();
    
        $csvData = "Unique Code,License Plate,Entry Time,Exit Time,Total Cost\n";
    
        foreach ($parkings as $parking) {
            $csvData .= "{$parking->uniqueCode},{$parking->licenseNumber},{$parking->enter},{$parking->exit},{$parking->cost}\n";
        }
    
        return response()->streamDownload(function() use ($csvData) {
            echo $csvData;
        }, 'parking_report.csv');
    }
    
}


