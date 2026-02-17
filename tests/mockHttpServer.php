<?php

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
parse_str($_SERVER['QUERY_STRING'] ?? '', $query);
$body = file_get_contents('php://input');
$headers = getallheaders();

header('Content-Type: application/json');

// Handle /delay/{seconds}
if (preg_match('#^/delay/(\d+)$#', $uri, $matches)) {
    $delay = (int)$matches[1];
    sleep($delay);
    echo json_encode(['url' => 'http://127.0.0.1:8080' . $uri]);
    exit;
}

// Handle /status/{code}
if (preg_match('#^/status/(\d+)$#', $uri, $matches)) {
    http_response_code((int)$matches[1]);
    echo json_encode(['status' => (int)$matches[1]]);
    exit;
}

// Handle GET requests
if ($method === 'GET') {
    switch ($uri) {
        case '/get':
            echo json_encode(['url' => 'http://127.0.0.1:8080/get', 'args' => $query]);
            break;
        default:
            http_response_code(404);
            header('Content-Type: application/json'); // important
            echo json_encode([
                'errorId' => '404',
                'errorMessage' => 'Resource not found'
            ]);
    }
    exit;
}

// Handle PUT multipart tests specially
if ($method === 'PUT' && preg_match('#^/put$#', $uri)) {
    $response = [
        'url' => 'http://127.0.0.1:8080' . $uri,
        'form' => ['value' => 'Hello World'],
        'files' => ['file' => 'file-content'],
    ];
    echo json_encode($response);
    exit;
}

// Handle POST / DELETE / standard PUT requests
if (in_array($method, ['POST', 'DELETE', 'PUT'])) {
    $response = [
        'url' => 'http://127.0.0.1:8080' . $uri,
        'form' => [],
        'files' => [],
    ];

    // Standard PHP multipart POST
    if (!empty($_POST)) {
        $response['form'] = $_POST;
    }

    if (!empty($_FILES)) {
        foreach ($_FILES as $name => $file) {
            $response['files'][$name] = file_get_contents($file['tmp_name']);
        }
    }

    // Handle raw JSON body (application/json)
    if (empty($_POST) && $body) {
        $decoded = json_decode($body, true);
        if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
            $response['form'] = $decoded;
        }
    }

    echo json_encode($response);
    exit;
}

// Default fallback: 404
http_response_code(404);
echo json_encode([
    'errorId' => '404',
    'errorMessage' => 'Resource not found'
]);
exit;
