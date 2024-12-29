<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;

class ChatGPTService
{
    protected $client;

    public function __construct()
    {
        // Initialize the Guzzle client
        $this->client = new Client();
    }

    public function sendMessage(string $message)
    {
        Log::info('ChatGPTService:sendmsg');
        try {
            // Send the request using Guzzle
            $response = $this->client->post(env('OPENAI_API_URL'), [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'gpt-3.5-turbo', // Update model if necessary
                    'messages' => [['role' => 'user', 'content' => $message]],
                    'stream' => true,
                ],
            ]);

            // Return the body of the response
            return $response->getBody()->getContents();
        } catch (RequestException $e) {
            // Handle errors, can log or return message
            return $e->getMessage();
        }
    }
}
