<?php
$visitCounter = 0;
if (isset($_COOKIE["visitCounter"]) && is_numeric($_COOKIE["visitCounter"])) { $visitCounter = $_COOKIE["visitCounter"]; }
$visitCounter++;
$lastVisit = "";
if (isset($_COOKIE["lastVisit"])) { $lastVisit=htmlspecialchars($_COOKIE["lastVisit"], ENT_QUOTES); $lastVisit=stripslashes(trim($lastVisit)); }
setcookie ("visitCounter", $visitCounter, time()+3600);
date_default_timezone_set('Etc/GMT+6');
setcookie ("lastVisit", date ("d.m.Y_h.i"), time()+3600);
?>