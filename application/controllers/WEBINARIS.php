<?php

/* 
 * Author: tungns, blog: www.tungns.top
 * Project Name: webinaris.v3
 * File Name: WEBINARIS.php
 * Date: 2016.08.04
 * Time: 12.00.00
 * Copyright (C) BanhBao.
 */



if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class WEBINARIS extends CI_Controller {
    public function __construct() {

        parent::__construct();
    }
    
    public function testen(){
        return 'Tho';
    }
}
