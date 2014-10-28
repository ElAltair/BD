<?php
                 if(!isset($_REQUEST['date1']))
                 {
                    include'query_form2.html.php';
                  }
                  else
				  {
                 // echo 'You chose-' . $detail;
                  include 'query_out2_bd.html.php';
				  }
				  ?>