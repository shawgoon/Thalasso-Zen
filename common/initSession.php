<?php

//  start session
session_start();

function is_log() {
  return (isset($_SESSION['user']) && $_SESSION['user']['userName'] !== null);
}

function get_current_user_id() {
  if (is_log()) {
    return $_SESSION['user']['userId'];
  } else {
    return false;
  }
}

function is_admin() {
  if (is_log()) {
    return ($_SESSION['user']['grad'] === "3, 4");
  } else {
    return false;
  }
}
?>