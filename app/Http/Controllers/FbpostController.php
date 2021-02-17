<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;


use Laravel\Socialite\Facades\Socialite;



class FbpostController extends Controller
{
  private $apiLink;
  public function __construct(Facebook $fb)
  {

      $this->middleware(function ($request, $next) use ($fb) {
          $config = config('services.facebook');
          $facebook = new Facebook([
              'http_client_handler' => 'stream',
               'app_id' => $config['client_id'],
               'app_secret' => $config['client_secret'],
               'default_graph_version' => 'v2.6'
        ]);
        $facebook->setDefaultAccessToken(Auth::user()->token);
        $this->apiLink = $facebook;
        return $next($request);

      });
  }

  public function getUserProfile(){
      try {
          $params = "first_name,last_name";
          $user = $this->apiLink->get('/me?fields='.$params)->getGraphUser();
          dd($user);
      } catch (FacebookSDKException $e) {

      }

  }

  public function postToProfile(Request $request){
      try {
          $response = $this->apiLink->post('/me/feed', [
              'message' => $request->message
          ]);
          dd($response);
      } catch (FacebookSDKException $e) {

      }
  }

  public function postToPage(){
      $page_id = "2901913466785547";

      try {
          $post = $this->apiLink->post('/' . $page_id . '/feed', array('message' => 'New post...'), $this->fetchAccessToken($page_id));
          $post = $post->getGraphNode()->asArray();
      } catch (FacebookSDKException $e) {
          dd($e); // handle exception
      }
  }

  public function fetchPageMetaData(){
    // $token = Auth::user()->token;
    //
    $pageId =  "1077271382339414";
    $pageAccessToken = $this->fetchAccessToken($pageId);
    //make the get request for the initWithPageAnalytics
    try {
        // Returns a `FacebookFacebookResponse` object
        $response = $this->apiLink->get(
          '/'. $pageId .'/insights?metric=page_impressions_unique,page_engaged_users,page_fans',
            $pageAccessToken
        );
      } catch(FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        // exit;
      } catch(FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        // exit;
      }
      $graphNode = $response->getGraphEdge()->asArray();
       // return  dd($graphNode);
      return view('analytics',["analytics" => $graphNode ]);

  }

  public function fetchAccessToken($page_id){
      try {
          $response = $this->apiLink->get('/me/accounts', Auth::user()->token);
      } catch(FacebookResponseException $e) {
          echo 'Graph returned an error: ' . $e->getMessage();
          exit;
      } catch(FacebookSDKException $e) {
          echo 'Error from facebook api due to validation : ' . $e->getMessage();
          exit;
      }
      try {
          $pages = $response->getGraphEdge()->asArray();
          foreach ($pages as $key) {
              if ($key['id'] == $page_id) {
                  // dd($key);

                  return $key['access_token'];
              }
          }
      } catch (FacebookSDKException $e) {
          dd($e); // handle exception
      }
  }


  function batchRequest(){

          // $requestPageImpression = $this->apiLink->get('/'. $pageId ."/insights/page_impressions");
          // $requestPageImpressionOrganic = $this->apiLink->get('/'. $pageId .'/insights/page_impressions_organic');
          // $response = $this->apiLink->get(
          //   '/'. $pageId .'/insights?metric=page_impressions_unique,page_engaged_users',
          //     $pageAccessToken
          // );
       //    $batch = [
       //       'page-impression' => $requestPageImpression,
       //      'page-impression-organic' => $requestPageImpressionOrganic,
       //      'page_impressions_unique' =>
       // // add more for your list
       // ];

    //    echo '<h1>Make a batch request</h1>' . "\n\n";
    //
    // try {
    //   $responses = $fb->sendBatchRequest($batch);
    // } catch(Facebook\Exceptions\FacebookResponseException $e) {
    //   // When Graph returns an error
    //   echo 'Graph returned an error: ' . $e->getMessage();
    //   exit;
    // } catch(Facebook\Exceptions\FacebookSDKException $e) {
    //   // When validation fails or other local issues
    //   echo 'Facebook SDK returned an error: ' . $e->getMessage();
    //   exit;
    // }
    //
    // foreach ($responses as $key => $response) {
    //   if ($response->isError()) {
    //     $e = $response->getThrownException();
    //     echo '<p>Error! Facebook SDK Said: ' . $e->getMessage() . "\n\n";
    //     echo '<p>Graph Said: ' . "\n\n";
    //     var_dump($e->getResponse());
    //   } else {
    //     echo "<p>(" . $key . ") HTTP status code: " . $response->getHttpStatusCode() . "<br />\n";
    //     echo "Response: " . $response->getBody() . "</p>\n\n";
    //     echo "<hr />\n\n";
    //   }
  }
}
