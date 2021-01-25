<?php
require_once './vendor/autoload.php';

$table = '19xAYUqx5pvkBD26TgBXh-FlajHP8twwwg_ym-LNX6f4';
putenv("GOOGLE_APPLICATION_CREDENTIALS=credentials.json");

$client = new Google_Client();
$client->useApplicationDefaultCredentials();
$client->addScope(Google_Service_Sheets::SPREADSHEETS);

$service = new Google_Service_Sheets($client);
$body = new Google_Service_Sheets_ValueRange([
    'values' => [['lalala']]
]);
$service->spreadsheets_values->append($table, 'A1', $body, ['valueInputOption' => 'RAW']);
