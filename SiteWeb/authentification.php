<?php

class authentification {
    
    public static function checkAndInitiateSession($login, $password, $ataError){
        if (!empty($dataError)){
            return new Model($dataError);
        }
        $userModel = ModelUser::getModelUser($login, hash("sha512", $password));
        if ($userModel->getError() !==false){
            return $userModel;
        }
        $mySid = AuthUtils::generateSessionIdAndCookie($_SERVER['REMOTE_ADDR'],$mySid_part1);
        session_id($mySid);
        setcookie("session-id-part1", $mySid_part1, time()+60*2);
        session-start();
        session_destroy();
        session_cache_expire(2);
        session_id($mySid);
        session_start();
        $userModel->fillSessionData();
        session_write_close();
        return $userModel;
    }
    
    public static function restoreSession(){
        $dataError = array();
        if (!isset($_COOKIE['session-id-part1']) || !preg_match("/^[0-9a-fA-F]{10}$/",$_COOKIE['session-id-part1'])){
            $dataError['no-cookie'] = "Votre cookie a peut-être expirée, "."Merci de vous connecter à nouveau...";
            $userModel = new Model($dataError);
        } else {
            $mySid_part1 = $_COOKIE['session-id-part1'];
            $mySid_part2 = hash("md5", $_SERVER['REMOTE_ADDR']);
            $mySid = $mySid_part1.$mySid_part2;
            session_id($mySid);
            session_start();
            setcookie("session-id-part1", $mySid_part1, time()+60*2);
            $userModel = ModelUser::getModelUserFromSession();
            session_write_close();
        }
        return $userModel;
    }
}
?>
