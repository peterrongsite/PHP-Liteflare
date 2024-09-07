<?php

namespace App\Exceptions;

use Exception;
use ErrorException;

class Handler
{
    public function handle($exception)
    {
        // Log the error (this could be sent to a log file or external service)
        $this->logException($exception);

        // Display a friendly error message depending on the environment (development/production)
        $this->renderException($exception);
    }

    protected function logException($exception)
    {
        // Log the error details (you can send this to a file or a logging system)
        error_log($exception->getMessage() . ' in ' . $exception->getFile() . ' on line ' . $exception->getLine());
    }

    protected function renderException($exception)
    {
        // Check if the environment is development or production
        $isDevelopment = true; // Change based on your environment settings

        if ($isDevelopment) {
            // Display detailed error message for developers
            echo "<h1>An Error Occurred</h1>";
            echo "<p><strong>Message:</strong> " . $exception->getMessage() . "</p>";
            echo "<p><strong>File:</strong> " . $exception->getFile() . "</p>";
            echo "<p><strong>Line:</strong> " . $exception->getLine() . "</p>";
            echo "<pre>" . $exception->getTraceAsString() . "</pre>";
        } else {
            // Render a user-friendly error page in production
            header('HTTP/1.1 500 Internal Server Error');
            echo "<h1>Something went wrong</h1>";
            echo "<p>We're working on it. Please try again later.</p>";
        }
    }
}
