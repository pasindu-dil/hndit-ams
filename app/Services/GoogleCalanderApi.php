<?php

namespace App\Services;

class GoogleCalanderApi
{
    /**
     *
     */
    public function __construct()
    {
        $clientID = 'YOUR_CLIENT_ID';
        $clientSecret = 'YOUR_CLIENT_SECRET';
        $redirectUri = 'YOUR_REDIRECT_URI';
        $authorizationCode = 'THE_AUTHORIZATION_CODE';
    }

    /**
     *
     */
    public function getAccessToken()
    {
        $authorizationCode = true;
        if ($authorizationCode) {
            $accessToken = "";

            $params = [
                "code" => config('services.google.redirect_uri'),
                "client_id" => config('services.google.client_id'),
                "client_secret" => config('services.google.client_secret'),
                "redirect_uri" => config('services.google.redirect_uri'),
                "grant_type" => "authorization_code"
            ];

            $tokenURL = config('services.google.auth_uri');
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $tokenURL);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($ch);
            curl_close($ch);

            $tokenData = json_decode($response, true);

            if (isset($tokenData['access_token'])) {
                $accessToken = $tokenData['access_token'];
            };
        }

        return $accessToken;
    }

    public function makeAPIRequest()
    {
        $accessToken = $this->getAccessToken();

        if ($accessToken) {
            // Fetch upcoming events
            $calendarId = 'primary';
            $apiEndpoint = "https://www.googleapis.com/calendar/v3/calendars/{$calendarId}/events";

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $apiEndpoint);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Authorization: Bearer {$accessToken}"
            ));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($ch);
            curl_close($ch);

            $events = json_decode($response, true);

            // Process and display events as needed
            if (isset($events['items'])) {
                foreach ($events['items'] as $event) {
                    echo $event['summary'] . '<br>';
                }
            }
        }
    }

    public function makeevent()
    {
        $accessToken = $this->getAccessToken();

        if ($accessToken) {
            $calendarId = 'primary'; // Use 'primary' for the primary calendar

            $apiEndpoint = "https://www.googleapis.com/calendar/v3/calendars/{$calendarId}/events";

            // Replace these with the details of your event
            $eventData = array(
                'summary' => 'Event Name',
                'description' => 'Event Description',
                'start' => array(
                    'dateTime' => '2023-07-26T10:00:00', // Replace with the start date and time
                    'timeZone' => 'YOUR_TIME_ZONE' // Replace with your timezone, e.g., 'America/New_York'
                ),
                'end' => array(
                    'dateTime' => '2023-07-26T12:00:00', // Replace with the end date and time
                    'timeZone' => 'YOUR_TIME_ZONE' // Replace with your timezone, e.g., 'America/New_York'
                ),
            );

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $apiEndpoint);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Authorization: Bearer {$accessToken}",
                "Content-Type: application/json"
            ));
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($eventData));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($ch);
            curl_close($ch);

            $event = json_decode($response, true);

            if (isset($event['id'])) {
                echo "Event created successfully with ID: " . $event['id'];
            } else {
                echo "Error creating the event.";
            }
        }
    }
}
