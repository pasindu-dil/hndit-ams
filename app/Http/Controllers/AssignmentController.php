<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Services\GoogleCalanderApi;
use Exception;
use Google\Service\ServiceUsage\GoogleApiService;
use Google_Client;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('assignment');
    }

    public function getCalanderData()
    {
        try {
            $data = (new GoogleCalanderApi)->makeAPIRequest();
            dd($data);
        } catch (Exception $exception) {
            dd($exception);
        }
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
     */
    public function store(Request $request)
    {
        try {
            $created = Assignment::create([
                "subject_code" => $request->subject_code,
                "name" => $request->name,
                "description" => $request->description,
                "file" => $request->file,
                "start_date" => $request->start_date,
                "end_date" => $request->end_date
            ]);

            $syncGoogle = $this->syncGoogleApi($request);

            return json_encode($created);
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }

    private function syncGoogleApi(object $request)
    {
        $client = new Google_Client();
        $client->setClientId(config('services.google.calendar.client_id'));
        $client->setClientSecret(config('services.google.calendar.client_secret'));
        $client->setRedirectUri(config('services.google.calendar.redirect'));
        $client->setAccessType(config('services.google.calendar.access_type'));
        $client->setScopes(config('services.google.calendar.scopes'));


        // Authenticate the client
        // You may need to implement your own authentication flow
        // and obtain the access token for the user.
        $accessToken = session('access_token'); // Get the access token for the user

        $client->setAccessToken($accessToken);
        if ($client->isAccessTokenExpired()) {
            // Refresh the access token if it's expired
            $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
            // Save the updated access token for future use
            $updatedAccessToken = $client->getAccessToken();
            // Update the access token in your database
            // ...
        }
        $calendarService = new Google_Service_Calendar($client);
        $calendarEvent = new Google_Service_Calendar_Event([
            'summary' => $request->name,
            'start' => [
                'dateTime' => $request->start_date,
                'timeZone' => 'Your_Time_Zone',
            ],
            'end' => [
                'dateTime' => $request->end_date,
                'timeZone' => 'Your_Time_Zone',
            ],
            // You can customize the event fields as needed
        ]);

        // Insert the event in Google Calendar
        $calendarService->events->insert('primary', $calendarEvent);
    }

    /**
     * Display the specified resource.
     */
    public function show(Assignment $assignment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assignment $assignment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Assignment $assignment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assignment $assignment)
    {
        //
    }
}
