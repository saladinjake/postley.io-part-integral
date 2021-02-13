<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;



class FbpostController extends Controller
{
  private $apiLink;
  public function __construct(Facebook $fb)
  {
      $this->middleware(function ($request, $next) use ($fb) {
          $fb->setDefaultAccessToken(Auth::user()->token);
          $this->$apiLink = $fb;
          return $next($request);
      });
  }

  public function getUserProfile(){
      try {
          $params = "first_name,last_name";
          $user = $this->api->get('/me?fields='.$params)->getGraphUser();
          dd($user);
      } catch (FacebookSDKException $e) {

      }

  }

  public function postToProfile(Request $request){
      try {
          $response = $this->api->post('/me/feed', [
              'message' => $request->message
          ]);
          dd($response);
      } catch (FacebookSDKException $e) {

      }
  }

  public function postToPage(){
      $page_id = '257545431025617';
      try {
          $post = $this->api->post('/' . $page_id . '/feed', array('message' => 'New post...'), $this->fetchAccessToken($page_id));
          $post = $post->getGraphNode()->asArray();
      } catch (FacebookSDKException $e) {
          dd($e); // handle exception
      }
  }

  public function fetchAccessToken($page_id){
      try {
          $response = $this->api->get('/me/accounts', Auth::user()->token);
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
                  return $key['access_token'];
              }
          }
      } catch (FacebookSDKException $e) {
          dd($e); // handle exception
      }
  }
}
