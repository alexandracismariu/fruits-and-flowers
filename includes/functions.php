
<?php 


    function dd($data) 
    {
        dump($data);
        die();
    }

    function dump($data) 
    {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
    }

    function redirectTo($location) 
    {
        header('Location: ' . $location);
        exit();
    }

    function allowOnlyAuthenticatedUsers() 
    {
        if (!isset($_SESSION['user_id'])) {
            redirectTo('/index.php');
        }
    }

    function allowOnlyUnauthenticatedUsers()
    {
        if (isset($_SESSION['user_id'])) {
            redirectTo('/index.php');
        }
    }

    function tryToLogin($username, $password)
    {
        global $mysql;

        $sql = "select * from users where username = '" . $username . "' and password = '" . $password . "'";

        $result = $mysql->query($sql);

        // wrong user or password
        if ($result->num_rows != 1) {
            redirectTo('register.php');
        }

        $row = $result->fetch_assoc();

        $_SESSION['user_id'] = $row['id'];

        $_SESSION['is_admin_logged'] = $row['user_privilege'];

        $_SESSION['current_user_logged'] = $row['name'];

        redirectTo('welcome.php');
    }

    function userIsAdmin() 
    {
        if ($_SESSION['is_admin_logged'] == 1) {
            return true;
        } else {
            return false;
        }
    }

    function allowOnlyAdminUsers() 
    {
        // global $mysql;

        // $result = $mysql->query("select * from users");

        // $privilege = false;

        // while ($row = $result->fetch_assoc()) {
        //     if (($row['id'] == $_SESSION['user_id']) && ($row['user_privilege'] == 1)) {
        //         $privilege = true;
        //     }
        // }

        if (!userIsAdmin()) {
            redirectTo('/index.php');
        }
    }

    function deleteElementFromTable($table, $id)
    {
        global $mysql;

        $sql = "delete from " . $table . " where id = " . $id;
        $mysql->query($sql);
    }

    function getElementFromTable($table, $id)
    {
        global $mysql;

        $sql = "select * from " . $table . " where id = " . $id;
        $result = $mysql->query($sql);

        return $result->fetch_assoc();
    }

    function hideColumnFromTable() 
    {
        if (!($_SESSION['is_admin_logged'] == 1)) {
            return 'style="display: none"';
        }
    }

    // function showCurrentUsernameLogged() 
    // {
    //     if (isset($_SESSION['current_user_logged'])) {
    //         return $_SESSION['current_user_logged'];
    //     } else {
    //         return "Unauthenticated user";
    //     } 
    // }


