<?php

require_once (__DIR__ . '/vendor/autoload.php');

function getClient()
{
    $client = new Google_Client();
    $client->setApplicationName('Google Sheets API PHP Quickstart');
    $client->setScopes(Google_Service_Sheets::SPREADSHEETS_READONLY);
    $client->setAuthConfig('credentials.json');
    $client->setAccessType('offline');
    $client->setPrompt('select_account consent');

    // Load previously authorized token from a file, if it exists.
    // The file token.json stores the user's access and refresh tokens, and is
    // created automatically when the authorization flow completes for the first
    // time.
    $tokenPath = 'token.json';
    if (file_exists($tokenPath)) {
        $accessToken = json_decode(file_get_contents($tokenPath), true);
        $client->setAccessToken($accessToken);
    }

    // If there is no previous token or it's expired.
    if ($client->isAccessTokenExpired()) {
        // Refresh the token if possible, else fetch a new one.
        if ($client->getRefreshToken()) {
            $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
        } else {
            // Request authorization from the user.
            $authUrl = $client->createAuthUrl();
            printf("Open the following link in your browser:\n%s\n", $authUrl);
            print 'Enter verification code: ';
            $authCode = trim(fgets(STDIN));

            // Exchange authorization code for an access token.
            $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
            $client->setAccessToken($accessToken);

            // Check to see if there was an error.
            if (array_key_exists('error', $accessToken)) {
                throw new Exception(join(', ', $accessToken));
            }
        }
        // Save the token to a file.
        if (!file_exists(dirname($tokenPath))) {
            mkdir(dirname($tokenPath), 0700, true);
        }
        file_put_contents($tokenPath, json_encode($client->getAccessToken()));
    }
    return $client;
}

function getTableValues() {
	// Get the API client and construct the service object.
	$client = getClient();
	$service = new Google_Service_Sheets($client);

	// Get spreadsheet values
	$spreadsheetId = '1iPzdfcjEcP8f1ym_Tr9en4OV3lz3IlzpLy33KKiJQBo';
	$range = 'A1:H12';
	$response = $service->spreadsheets_values->get($spreadsheetId, $range);
	$tableValues = $response->getValues();

	return $tableValues;
}

function getTableJsonValues() {
	$tableValues = getTableValues();
	$tableJsonValues = json_encode($tableValues);

	return $tableJsonValues;
}

function isNow($begin, $end) {
    if (date("H:i:s") > $begin && date("H:i:s") < $end) {
        return true;
    } else {
        return false;
    }
}

function getNow() {
    $tableValues = getTableValues();
    $periodos = array("MANHÃ", "TARDE", "NOITE", "EAD");
    $dias = array("", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

    $i = 0;
    //linhas
    foreach ($tableValues as $row) {
        if ($row[0] === 'HORÁRIOS') {
            $color = "#0e85ad";
        } else if (in_array($row[0], $periodos)) {
            $color = "#3e9dbd";
            $i = 1;
        } else if ($i%2 === 0) {
            $color = "#6eb5cd";
            $time = explode(" - ", $row[0]);
        } else {
            $color = "#9ecede";
            $time = explode(" - ", $row[0]);
        }

        //colunas
        for ($j = 0; $j < 8; $j++) {
            if (isset($row[$j])) {
                $value = $row[$j];
            } else {
                $value = "";    
            }

            if ($row[0] === 'HORÁRIOS' && $value === "") {

            } else { 
                if (date("l") === $dias[$j] && isset($time) && $time[0] != "-" && isNow($time[0], $time[1])) {
                    return $value;
                }
            }
        }
        $i++;
    } //fim da tabela

    return false;
}

?>