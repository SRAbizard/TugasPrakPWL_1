<?php
include('config.php');
$facebook_output = '';
$facebook_helper = $facebook -> getRedirectLoginHelper();

if(isset($_GET['code'])){
    if(isset($_SESSION['access_token'])){
        $access_token = $_SESSION['access_token'];
    } else {
        $access_token = $facebook_helper->getAccessToken();
        $_SESSION['access_token'] = $access_token;
        $facebook -> setDefaultAccessToken($_SESSION['access_token']);
    }
    $_SESSION['user_name'] = '';
    $_SESSION['user_email_address'] = '';
    
    $graph_response = $facebook->get("/me?fields=name,email", $access_token);
    
    $facebook_user_info = $graph_response->getGraphUser();
    
    if(!empty($facebook_user_info['name'])){
        $_SESSION['user_name'] = $facebook_user_info['name'];
    }
    
    if(!empty($facebook_user_info['email'])){
        $_SESSION['user_email_address'] = $facebook_user_info['email'];
    }
} else {
    $facebook_permissions = ['email'];

    $facebook_login_url = $facebook_helper -> getLoginUrl('https://localhost/prak%20pwl/Prak%201/login_with_php/', $facebook_permissions);
    
    $facebook_login_url = '<div align="center"><button class="btn"><a href="'.$facebook_login_url.'"><img class="ic-facebook" src="https://image.flaticon.com/icons/svg/174/174848.svg">Login with Facebook</button></a></div>';
}
?>