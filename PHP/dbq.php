<?php

    include_once('db.php');
    
    function getDataFromUserId($id,$field)
    {
          $row=mysql_fetch_array(mysql_query("select * from users where member_id=".$id));
          if (count($row)>0){

           switch($field) {
                               case 1:
                return $row['uname'];
                break;
                               case 2:
                return $row['pass'];
                break;
                               case 3:
                return $row['fname'];
                break;
                               case 4:
                return $row['lname'];
                break;
                               case 5:
                return $row['add1'];
                break;
                               case 6:
                return $row['add2'];
                break;
                               case 7:
                return $row['city'];
                break;
                               case 8:
                return $row['state'];
                break;
                               case 9:
                return $row['zip'];
                break;
                               case 10:
                return $row['country'];
                break;
                               case 11:
                return $row['contact'];
                break;
                               case 12:
                return $row['verification'];
                break;
                               case 13:
                return $row['status'];
                break;
                               case 14:
                return $row['member_id'];
                break;
                               case 15:
                return $row['last_login_info'];
                break;
                             
          }
               
           }
                     else
          {
              return "false";
          } 
          
    }
    
        function getDataFromUserName($UserName,$field)
    {
          $row=mysql_fetch_array(mysql_query("select * from users where uname='".$UserName."'"));
                    if (count($row)>0){  
           switch($field) {
                               case 1:
                return $row['uname'];
                break;
                               case 2:
                return $row['pass'];
                break;
                               case 3:
                return $row['fname'];
                break;
                               case 4:
                return $row['lname'];
                break;
                               case 5:
                return $row['add1'];
                break;
                               case 6:
                return $row['add2'];
                break;
                               case 7:
                return $row['city'];
                break;
                               case 8:
                return $row['state'];
                break;
                               case 9:
                return $row['zip'];
                break;
                               case 10:
                return $row['country'];
                break;
                               case 11:
                return $row['contact'];
                break;
                               case 12:
                return $row['verification'];
                break;
                               case 13:
                return $row['status'];
                break;
                               case 14:
                return $row['member_id'];
                break;
                               case 15:
                return $row['last_login_info'];
                break;
                   case 16:
                return $row['email'];
                break;
             
           }
                      }
                     else
          {
              return "false";
          }
          
    }
  
  function getMaxId()
  {
      $row=mysql_fetch_array(mysql_query("select max(member_id)as max from users"));
      return $row['max'];
  }
  
  
    
?>