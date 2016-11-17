<<<<<<< HEAD
# simple_rest_ci


#setting api key :
#masuk direktori application -> config -> rest.php :
config['rest_keys_table'] = 'keys';
/*
|-------------------------------------------------------------------------
| REST Enable Keys
|--------------------------------------------------------------------------
|
| When set to TRUE, the REST API will look for a column name called 'key'.
| If no key is provided, the request will result in an error. To override the
| column name see 'rest_key_column'
|
| Default table schema:
|   CREATE TABLE `keys` (
       `id` INT(11) NOT NULL AUTO_INCREMENT,
|       `key` VARCHAR(40) NOT NULL,
|       `level` INT(2) NOT NULL,
|       `ignore_limits` TINYINT(1) NOT NULL DEFAULT '0',
|       `is_private_key` TINYINT(1)  NOT NULL DEFAULT '0',
|       `ip_addresses` TEXT NULL DEFAULT NULL,
|       `date_created` INT(11) NOT NULL,
       PRIMARY KEY (`id`)
|   ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
|
*/

#buat table key dengan schema sql di atas, lalu isikan key yang di inginkan,



////$config['rest_enable_keys'] = TRUE;

#ubah value rest_enable_key ke TRUE,





ambil semua data, method GET http://localhost/rest_ci/index.php/crud/mahasiswa

ambil data tunggal, method GET http://localhost/rest_ci/index.php/crud/mahasiswa/(params_id)

hapus data, method POST http://localhost/rest_ci/index.php/crud/delete_mahasiswa/(params_id)

edit data, method POST http://localhost/rest_ci/index.php/crud/edit_mahasiswa/(params_id)
=======
simple_rest_ci
>>>>>>> da8f669b4e40084964cddfd2cec7af0339137d52
