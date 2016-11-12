<?php

class Autoload
{
        private static $_instance = null;

        public static function load()
    {
        if(null !== self::$_instance) {
            throw new Exception('Erreur autoload ne peut etre charge qu une fois'. __CLASS__);
        }

        self::$_instance = new self();


        if(!spl_autoload_register(array(self::$_instance, 'autoloadCallback'), false)) {
            throw new Exception('Impossible de lancer l autoLoad'. __CLASS__);
        }
    }

        public static function shutDown()
    {
        if(null !== self::$_instance) {

            if(!spl_autoload_unregister(array(self::$_instance, '_autoload'))) {
                throw new Exception('Could not stop the autoload'.__CLASS__);
            }

            self::$_instance = null;
        }
    }

        private static function autoloadCallback($class)
    {
        global $rep;
        $filename = $class.'.php';
        $dir =array('','modeles/','./','config/','controleur/','css/','metier/','persistance/','vue/classes/');
        foreach ($dir as $d){
        $file=$rep.$d.$filename; 
        //echo $file;
        if (file_exists($file))
        {
            include $file;
        }
        }
    
    }
}


?>