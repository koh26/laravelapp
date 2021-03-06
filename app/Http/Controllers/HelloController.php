<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

            class HelloController extends Controller
              {

            public function index(Request $request, Response $Response) {

                $html = <<<EOF

                <html>
                <head>
                <title>Hello/Index</title>
                <style>
                body {font-size:30pt; color:#9999; }
                h1 { font-size:30pt; text-align:rigth; color:#eee; margin:-50px 0px -120px 0px; }
                </style>
                </head>
                <body>
                <h1>Hello</h1>
                <h3>Request</h3>
                <pre>{$request}</pre>
                <h3>Response</h3>
                <pre>{$response}</pre>
                </body>
                </html>
                EOF;

                $response->setContent($html);
                return $response;

            }

            }