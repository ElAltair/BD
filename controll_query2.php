<?php
                 if(!isset($_REQUEST['text_detail']))
                 {
                    include'query_form2.html.php';
                  }
                  else
				  {
                  $detail=$_REQUEST['text_detail'];
                 // echo 'You chose-' . $detail;
                  include 'query_out2.html.php';
				  }
				  ?>