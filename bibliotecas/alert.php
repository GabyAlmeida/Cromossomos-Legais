<?php
function alertInit() {
    if (!isset($_SESSION["alert"])) {
        $_SESSION["alert"] = array();
    }
}
function alertGetMessages() {
    if (!empty($_SESSION["alert"])) {
        return $_SERVER["alert"];
    }
}
function alert($msg, $level = "danger") {
    $_SESSION["alertLevel"] = $level;
    $_SESSION["alert"][] = $msg;
}
function alertClear() {
    $_SESSION["alert"] = array();
    $_SESSION["alertLevel"] = "danger";
}
function alertComponentRender() {
    if (!empty($_SESSION["alert"])) {
        $msgs = implode(',', $_SESSION["alert"]);
        $alertLevel = $_SESSION["alertLevel"];
        $html = '<div class="alert alert-' . $alertLevel . ' alert-dismissible  " role="alert" id="alert">';
        $html .= '<strong>' . $msgs . '</strong>';
        $html .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
        $html .=  '<span aria-hidden="true">&times;</span>';
        $html .= '</button>';
        $html .= '</div>';
        alertClear();
        echo $html;
    }
}
alertInit();