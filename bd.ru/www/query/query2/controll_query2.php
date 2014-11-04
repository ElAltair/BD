<?php
                 if(!isset($_REQUEST['button']))
                 {
                    include'query_form2.html.php';
                  }
                  else
				  {
                 // echo 'You chose-' . $detail;
                  include 'query_out2_bd.html.php';
				  }
				  ?>