<?php

require '../php/session.php';
sec_session_start();
require '../autoloader.php';

// checking if user already logged in 
if( isset( $_SESSION['client_logged_in'] ) ) {
    
    echo'client';
    exit();
    
} else if(  isset( $_SESSION['member_logged_in'] ) ) {
    
      echo 'member';
     exit();
     
} else if( isset( $_SESSION['admin_logged_in'] ) ) {
    
     echo "admin";
     exit();
   
} else {

  
 if ( isset( $_POST['user-id'])){
     
         
    // geting user values
    $user_id = $_POST['user-id'];
    $password = $_POST['user-pass'];
    
    // prevent sql injections
    $filter = new SecureData();
    $user_id = $filter->data_filters( $user_id );
    $password = $filter->data_filters( $password );
    
    //decryption the password
     $password = md5( $password );
    
    //check user exist or not 
    $client = new ClientsInfo(); //client class
    $admin = new ADminInfo(); // admin class
    $member = new TeamMembers(); // Member class
    
    // check is user client and exits
    $clinent_data = $client->client_login( $user_id, $password );
    $member_data = $member->member_login( $user_id, $password ); 
    $admin_data = $admin->admin_login( $user_id, $password );
    
        if( $clinent_data ) {
            
            echo 'client';
            $_SESSION['client_email'] = $clinent_data['client_key_email'];           
            $_SESSION['client_db_id'] = $clinent_data['client_id'];
            $_SESSION['client_admn_id'] = $clinent_data['admin_user_id'];
            $_SESSION['client_compny_id'] = $clinent_data['company_id'];
            $_SESSION['client_fname'] = $clinent_data['client_key_fname'];
            $_SESSION['client_lname'] = $clinent_data['client_key_lname'];
            $_SESSION['client_phone'] = $clinent_data['client_key_phone'];
             $_SESSION['client_title'] = $clinent_data['title'];
            
            //set login token
            $_SESSION['client_logged_in'] = 'client';
                       
        }else if( $member_data ){
            echo 'member';
            $_SESSION['member_email'] = $member_data['member_email'];             
            $_SESSION['team_db_id'] = $member_data['member_user_id'];
            $_SESSION['admin_db_id'] = $member_data['admin_user_id'];
            $_SESSION['member_fname'] = $member_data['member_fname'];
            $_SESSION['member_lname'] = $member_data['member_lname'];
            $_SESSION['member_phone'] = $member_data['member_phone'];
            $_SESSION['mem_deg_id'] = $member_data['member_deg_id'];
            
            //set login token
            $_SESSION['member_logged_in'] = 'member';
            
        }else if( $admin_data ){
            echo "admin";
            $_SESSION['admin_email'] = $admin_data['admin_email'];           
            $_SESSION['admin_fname'] = $admin_data['admin_fname'];
            $_SESSION['admin_lname'] = $admin_data['admin_lname'];
            $_SESSION['admin_db_id'] = $admin_data['admin_user_id'];
            $_SESSION['admin_phone'] = $admin_data['admin_phone'];
            
            //set login token
            $_SESSION['admin_logged_in'] = 'admin';
        }else {
            echo 'not-authorized';
        }
 }
 
}
 