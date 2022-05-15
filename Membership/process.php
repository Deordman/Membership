<?php
    session_start();

    include 'connection/connection.php';

    if (isset($_POST['userlogin']))
    {
        $un = trim ($_POST["un"]);

        $pw = trim ($_POST["pw"]);

        $query  = $connect -> query("SELECT * FROM members WHERE un='$un' && pw='$pw'",PDO::FETCH_ASSOC);

        if ($count = $query -> rowCount())
        {
            if( $count > 0 )
            {
                $_SESSION['un']=$_POST['un'];
			    
                $_SESSION['pw']=$_POST['pw'];

                header("Location:login.php?status=true");

                exit;
            }
        }

        else
        {
            header("Location:login.php?status=false");
		    
            exit;
        }
    }

    if (isset($_POST['userregister']))
    {
        $un = trim ($_POST['un']);

        $pw = trim ($_POST['pw']);

        $em = trim ($_POST['em']);

        if(!$un || !$pw || !$em)
        {
            header("Location:register.php?status=registerno3");
			
            exit;
        }
        
        else
        {
            if(filter_var($em,FILTER_VALIDATE_EMAIL) == false)
            {
                header("Location:register.php?status=registerno2");
				
                exit;
            }

            else
            {
                $unsir = $connect -> prepare("SELECT * FROM members WHERE un=:un");
			    
                $unsir -> execute(array('un' => $un));
			    
                $count = $unsir -> rowCount();
            }

            if ($unsir = $count > 0)
            {
                header("Location:register.php?status=registerno1");
				
                exit;
            }

                $emsir = $connect -> prepare("SELECT * FROM members WHERE em=:em");
			    
                $emsir -> execute(array('em' => $em));
			
                $count = $emsir -> rowCount();

            if ($emsir = $say > 0)
            {
                header("Location:register.php?status=registerno4");
				
                exit;
            }

            if (strlen($pw)<1)
            {
                header("Location:register.php?status=registerno5");
				
                exit;
            }

            else
            {
                $insert = $connect -> prepare("INSERT INTO members SET un=?, pw=?, em=?");
                
                $insert -> execute([$un,$pw,$em]);

                if($insert)
                {
                    header("Location:register.php?status=registerok");
                    
                    exit;
                }

                else
                {
                    header("Location:register.php?status=registerno");
                    
                    exit;
                }
            }
        }
    }
?>