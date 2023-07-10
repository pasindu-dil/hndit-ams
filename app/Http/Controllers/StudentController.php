<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentStoreRequest;
use App\Http\Requests\StudentUpdateRequest;
use App\Models\Student;
use Exception;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * @param StudentStoreRequest $studentStoreRequest
     */
    public function store(StudentStoreRequest $studentStoreRequest)
    {
        try {
            $created = Student::create(
                [
                    "reg_id" => $studentStoreRequest->reg_id,
                    "nic" => $studentStoreRequest->nic,
                    "name" => $studentStoreRequest->name,
                    "email" => $studentStoreRequest->email,
                    "address" => $studentStoreRequest->address,
                    "msisdn" => $studentStoreRequest->msisdn,
                    "course_id" => $studentStoreRequest->course_id
                ]
            );

            return response()->json($created, 200, ["success" => true, "message" => "Successfully created student."]);
        } catch (Exception $exception) {
            return response()->json(config('error.server_error'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentUpdateRequest $studentUpdateRequest, Student $student)
    {
        try {
            $student->reg_id = $studentUpdateRequest->reg_id;
            $student->nic = $studentUpdateRequest->nic;
            $student->name = $studentUpdateRequest->name;
            $student->email = $studentUpdateRequest->email;
            $student->address = $studentUpdateRequest->address;
            $student->msisdn = $studentUpdateRequest->msisdn;
            $student->course_id = $studentUpdateRequest->course_id;
            $student->save();

            return response()->json($student, 200, ["success" => true, "message" => "Successfully updated student."]);
        } catch (Exception $exception) {
            //throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $students)
    {
        //
    }
}
