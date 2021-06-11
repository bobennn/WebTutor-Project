<?php 
session_start();
        if(isset($_POST['m_username'])){
        
        //connection
                  include("condb.php");
        
        //รับค่า user & m_password
                  $m_username = $_POST['m_username'];
                  $m_password = md5($_POST['m_password']);
        
        //query 
                  $sql="SELECT * FROM member 
                  WHERE  m_username='".$m_username."' 
                  AND  m_password='".$m_password."' ";

                  // echo $sql;

                  // exit;

                  $result = mysqli_query($condb,$sql);

                  // // echo mysqli_num_rows($result);

                  // exit;
        
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["m_id"] = $row["m_id"];
 
                      $_SESSION["m_level"] = $row["m_level"];

                      if($_SESSION["m_level"]=="ADMIN"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        Header("Location: admin/");

                      }

                      if($_SESSION["m_level"]=="MEMBER"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                 //insert login log
                 $ref_m_id = $_SESSION["m_id"];  
                 
                 // echo 'ref_m_id = '.$ref_m_id;
                 // exit;     

                  $sql2 = "INSERT INTO login_log
                  (
                  ref_m_id
                  )
                  VALUES
                  (
                  $ref_m_id
                  )
                  ";

                $result2 = mysqli_query($condb, $sql2) or die ("Error in query: $sql " . mysqli_error());

              // echo $sql2;

              // exit; 
                
                       Header("Location: member/");

                      }

                  }else{
                    echo "<script>";
                        echo "alert(\" ชื่อผู้ใช้ หรือ รหัสผ่าน ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: login.php"); //user & m_password incorrect back to login again

        }
?>