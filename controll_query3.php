<?php
                 if(!isset($_REQUEST['date1']))
                 {
                    include'query_form3.html.php';
                  }
                  else
				  {
                 // echo 'You chose-' . $detail;
                  include 'query_out3_bd.html.php';
				  }
				  ?>