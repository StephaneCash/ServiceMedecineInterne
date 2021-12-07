<?php
    function flash($name, $text = ''){
        if(isset($_SESSION[$name])){
            $msg = $_SESSION[$name];
            unset($_SESSION[$name]);
            return $msg;
        }else{
            $_SESSION[$name] = $text;
        }

        return '';
    }

    function delete($name, $text = ''){
        if(isset($_SESSION[$name])){
            $message = $_SESSION[$name];
            unset($_SESSION[$name]);
            return $message;
        }else{
            $_SESSION[$name] = $text;
        }

        return '';
    }

    function editer($name, $text = ''){
        if(isset($_SESSION[$name])){
            $edit = $_SESSION[$name];
            unset($_SESSION[$name]);
            return $edit;
        }else{
            $_SESSION[$name] = $text;
        }

        return '';
    }
