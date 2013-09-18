    <?php
	echo 'test';
    /**
     * Some very basic php that demonstrates how to make an access token request
     * on behalf of a LearningStudio user via the OAuth 2.0 Password grant type
     */
 
    // Setup the variables necessary to make the Request 
    $grantType = "password";
    $clientID = "5d290fc1-cb0e-4684-bb73-2ec9a3a72f30";
    $clientString = "gbtestc";
    $username = "purvisteacher";
    $password = "letmein";
    $url = "https://m-api.ecollege.com/token";
 
    // Setup the Request
	try{	
		$request = new HttpRequest($url, HttpRequest::METH_POST);    
		$request->setContentType("application/x-www-form-urlencoded");
	} catch (Exception $e) {
		echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
 
    // Add the data to send
    $request->addPostFields(array("grant_type" => $grantType,
                    "client_id" => $clientID,
                    "username" => $clientString."\\".$username,
                    "password" => $password));    
 
    try{
 
      // Send Request & Get Response
      $request->send();
 
      if ($request->getResponseCode() == 200) {
 
        // Get the Json reponse containing the Access Token
        $json = $request->getResponseBody();
 
        // Parse the Json response and retrieve the Access Token
        $ser = json_decode($json);
        $accessToken = $ser->access_token;
        echo ("Access Token = ".$accessToken);
      }
      else {
        // The server didn't return 200 - OK; display the error message
        echo ("The server returned '".$request->getResponseBody()."'".
            " with the status code '".$request->getResponseCode()."'");
      }
    } catch (HttpException $e) {
      echo $e->getMessage();
    }
 
    ?>