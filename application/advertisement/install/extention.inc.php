<?php
defined('IN_HKINGPHP') or exit('Access Denied');
defined('INSTALL') or exit('Access Denied');

$parentid = $menu->insert(array('name'=>'广告管理', 'parentid'=>3, 'm'=>'advertisement', 'c'=>'adver', 'a'=>'init', 'data'=>'', 'listorder'=>0, 'display'=>'1'));
$menu->insert(array('name'=>'添加广告', 'parentid'=>$parentid, 'm'=>'advertisement', 'c'=>'adver', 'a'=>'add', 'data'=>'', 'listorder'=>0, 'display'=>'0'));
$menu->insert(array('name'=>'修改广告', 'parentid'=>$parentid, 'm'=>'advertisement', 'c'=>'adver', 'a'=>'edit', 'data'=>'', 'listorder'=>0, 'display'=>'0'));
$menu->insert(array('name'=>'删除广告', 'parentid'=>$parentid, 'm'=>'advertisement', 'c'=>'adver', 'a'=>'del', 'data'=>'', 'listorder'=>0, 'display'=>'0'));
