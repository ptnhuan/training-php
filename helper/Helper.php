<?php
// Start the session
session_start();

class Helper {
    public function isAuth() {
        $isAuth = false;
        if (!empty($_SESSION['id'])) {
            $isAuth = true;
        }

        return $isAuth;
    }
}