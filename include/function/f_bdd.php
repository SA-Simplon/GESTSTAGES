<?php

function connexionBDD()
{
	try
	{
            $bdd = new PDO('mysql:host=servbd;port=3306;sofiane-bdd-geststages;charset=utf8', 'sofiane', 'Simplon2024', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $bdd;
	}
	catch(Exception $e)
	{
		$pdo_error = $e->getMessage();
                return false;
	}
    
}

?>
