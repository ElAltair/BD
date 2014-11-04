<?php
                 if(!isset($_REQUEST['button']))
                 {
                    include'query_form1.html.php';
                  }
                  else
				  {
                 // echo 'You chose-' . $detail;
                  $detail=$_GET['text_detail'];
				  include 'query_out1_bd.html.php';
				  }
				  ?>