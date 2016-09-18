<?php 
    session_start();

    require_once('./models/config.php');
    require_once('./models/dbconnect.php');

    $conn = new DBconnect(SERVERNAME,DBUSER,DBPASS,DBNAME);

    if( $conn->conectado() ){
        if( isset($_GET['p']) ){
            switch ($_GET['p']) {
                case 'all':
                    get_all_post($conn);
                    break;
                case 'programming':
                    programming($conn);
                    break;
                case 'hacking':
                    security($conn);
                    break;
                case 'tools':
                    tools($conn);
                    break;
                case 'news':
                    news($conn);
                    break;
                case 'other':
                    other($conn);
                    break;    
                default:
                    get_all_post($conn);
                    break;
            }

        }
        else{
            get_all_post($conn);    
        }
    }

    function get_all_post($conn){
        $data = $conn->sql_all_post();
        $show = 'views/centerpubl_view.php';
        include_once('./views/include/menupubl_view.php');
    }

    function programming($conn){
        $data = $conn->sql_cat_post('programming');
        $show = 'views/centerpubl_view.php';
        include_once('./views/include/menupubl_view.php');
    }


    function hacking($conn){
        $data = $conn->sql_cat_post('hacking');
        $show = 'views/centerpubl_view.php';
        include_once('./views/include/menupubl_view.php');
    }

    function tools($conn){
        $data = $conn->sql_cat_post('tools');
        $show = 'views/centerpubl_view.php';
        include_once('./views/include/menupubl_view.php');
    }

    function news($conn){
        $data = $conn->sql_cat_post('news');
        $show = 'views/centerpubl_view.php';
        include_once('./views/include/menupubl_view.php');
    }

    function other($conn){
        $data = $conn->sql_cat_post('other');
        $show = 'views/centerpubl_view.php';
        include_once('./views/include/menupubl_view.php');
    }

?>  