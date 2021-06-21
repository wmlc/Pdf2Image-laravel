<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace wmlc\Pdf2Image;

/**
 * Description of Pdf2ImageFacade
 *
 * @author jianhua.wang
 */
use Illuminate\Support\Facades\Facade;

class Pdf2ImageFacade extends Facade
{

    /**
     * 
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Pdf2Image';
    }

}
