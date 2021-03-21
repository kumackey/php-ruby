<?php

/**
 * @param string $response
 * @return array
 * @throws Exception
 */
function parse_http_response(string $response)
{
    list($headers, $body) = explode("\r\n\r\n", $response, 2);

    if (!preg_match('@HTTP/[0-9\.]+\s+([0-9]+)\s+(.*)\r\n@', $headers, $matches)) {
        throw new Exception('status line not found.');
    }

    $status_code = (int)$matches[1];
    $headers = iconv_mime_decode_headers($headers);

    return [
        'status_code' => $status_code,
        'headers' => $headers,
        'body' => $body,
    ];
}

var_dump(parse_http_response(file_get_contents(__DIR__ . '/sample_http_200.txt')));

echo PHP_EOL;

var_dump(parse_http_response(file_get_contents(__DIR__ . '/sample_http_400.txt')));