<?php
/*
 * (�) 2018 Stepanov Yuri
 * 
 * �������� ���������������� �� ��������� ��������� (�� ������ �������):
 * - GPL 3.0
 * - GFDL 1.3
 * 
 */


session_start();
define('MYSITE', 1);

require_once('config.php');

header('Location: ProfilePage.html');