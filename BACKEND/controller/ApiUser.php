<?php


class ApiUser
{

    public function index()
    {
        // header('index:')
        echo ("this an index method");
    }

    public function getUserInfos($id)
    {
        // headers
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');

        // instantiate Database
        $database = new Database();
        $db = $database->connect();

        // instantiate User object
        $user = new Users($db);

        // user informations
        $user_array = array();

        // get user id
        $user->userId = $id;

        // user read query
        $result = $user->read_single();

        if ($result) {
            $row = $result->fetch(PDO::FETCH_ASSOC);
            extract($row);


            $user_array = array(
                'userId' => $userId,
                'userFirstName' => $userFirstName,
                'userLastName' => $userLastName,
                'userCIN' => $userCIN,
                'userEmail' => $userEmail,
                'userPassword' => $userPassword,
            );

            echo json_encode(
                array($user_array)
            );
        } else {
            echo json_encode(
                array('message' => 'user not inserted')
            );
        }
    }


    public function read()
    {

        // headers
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');

        // instantiate Database
        $database = new Database();
        $db = $database->connect();

        // instantiate User object
        $user = new Users($db);

        // user read query
        $result = $user->read();

        // get row count 
        $num = $result->rowCount();

        // check if there is a user 
        if ($num > 0) {
            // user array
            $users_arr = array();
            $users_arr['data'] = array();

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                $user_arr = array(
                    'userId' => $userId,
                    'userFirstName' => $userFirstName,
                    'userLastName' => $userLastName,
                    'userEmail' => $userEmail,
                    'userCIN' => $userCIN,
                    'userPassword' => $userPassword,
                );
                array_push($users_arr['data'], $user_arr);
            }
            // Turn to JSON & output
            echo json_encode($users_arr);
        } else {
            // No Users
            echo json_encode(
                array('message' => 'No Users found')
            );
        }
    }
}
