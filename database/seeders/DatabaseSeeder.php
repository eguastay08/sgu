<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /*
     INSERT INTO `user_live_parroquias` (`start_date`, `end_date`, `references_place`, `main_street`, `secondary_street`, `house_number`, `created_at`, `updated_at`, `id_user`, `cod_parroquia`) VALUES ('2021-04-06', NULL, 's/r', 'SOFIA PESANTEZ', 'CAMINO REAL', 's/n', NULL, NULL, '1', '20150');
    INSERT INTO `categories` (`cod_category`, `name`, `detail`, `order`, `delete`, `created_at`, `updated_at`,`cod_menu`) VALUES
(1, 'Entornos Virtuales de Enseñanza y Aprendizaje', NULL, 1, 0, NULL, NULL,3),
(2, 'Sistema Académico en Red', NULL, 2, 0, NULL, NULL,3),
(3, 'Bibliotecas Virtuales', NULL, 3, 0, NULL, NULL,3),
(4, 'Servicios Institucionales', NULL, 4, 0, NULL, NULL,3),
(5, 'Bibliotecas Virtuales Libres', NULL, 5, 0, NULL, NULL,3),
(6, 'Repositorios', NULL, 6, 0, NULL, NULL,3);

    INSERT INTO `platforms` (`cod_platform`, `name`, `image`, `url`, `session_required`, `detail`, `order`, `deleted`, `created_at`, `updated_at`, `cod_category`) VALUES
(1, 'EVEA | Pregrado 2020-2021', 'https://www.ueb.edu.ec/images/logo_externos/EVEA_P.png', 'https://elearning.ueb.edu.ec/', 1, NULL, 1, 0, NULL, NULL, 1),
(2, 'EVEA | Nivelación 2020-2021', 'https://www.ueb.edu.ec/images/logo_externos/EVEA_N.png', 'https://nivelacion.ueb.edu.ec/', 1, NULL, 2, 0, NULL, NULL, 1),
(3, 'EVEA | Posgrado 2020-2021', 'https://www.ueb.edu.ec/images/logo_externos/EVEA_G.png', 'https://postgrado.ueb.edu.ec/', 1, NULL, 3, 0, NULL, NULL, 1),
(4, 'Examen Complexivo de Fin de Carrera', 'https://www.ueb.edu.ec/images/logo_externos/EVEA_C.png', 'https://examencomplexivo.ueb.edu.ec/', 1, NULL, 4, 0, NULL, NULL, 1),
(5, 'Sistema de Matriculación Estudiantil', 'https://www.ueb.edu.ec/images/logo_externos/sme1.png', 'https://www.sianet.ueb.edu.ec/sme/', 1, NULL, 1, 0, NULL, NULL, 2),
(6, 'Control de Asistencia Estudiantil y Docente', 'https://www.ueb.edu.ec/images/logo_externos/CAED1.png', 'https://www.sianet.ueb.edu.ec/aade', 1, NULL, 2, 0, NULL, NULL, 2),
(7, 'Prácticas Pre-Profesionales', 'https://www.ueb.edu.ec/images/logo_externos/ppp1.png', 'https://www.sianet.ueb.edu.ec/sme/principal.php', 1, NULL, 3, 0, NULL, NULL, 2),
(8, 'Sistemas de Distributivo Académico', 'https://www.ueb.edu.ec/images/logo_externos/sdd11.png', 'https://www.sianet.ueb.edu.ec/sdd', 1, NULL, 4, 0, NULL, NULL, 2),
(9, 'Email UEB', 'https://www.ueb.edu.ec/images/logo_externos/correo.png', 'https://mail.google.com/a/ueb.edu.ec', 0, NULL, 1, 0, NULL, NULL, 4),
(10, 'Email Estudiantes', 'https://www.ueb.edu.ec/images/logo_externos/correo2.png', 'https://mail.google.com/a/mailes.ueb.edu.ec', 0, NULL, 2, 0, NULL, NULL, 4),
(11, 'Catálogo de Libros', 'https://www.ueb.edu.ec/images/logo_externos/logolibro.png', 'http://biblioteca.ueb.edu.ec/', 0, NULL, 3, 0, NULL, NULL, 4),
(12, 'Repositorio Digital', 'https://www.ueb.edu.ec/images/logo_externos/Repositorio.png', 'https://rdigital.ueb.edu.ec/', 0, NULL, 4, 0, NULL, NULL, 4),
(13, 'Repositorio Tesis', 'https://www.ueb.edu.ec/images/logo_externos/tesis.jpeg', 'http://dspace.ueb.edu.ec/', 0, NULL, 5, 0, NULL, NULL, 4),
(14, 'Evaluación Docente', 'https://www.ueb.edu.ec/images/logo_externos/EvaluacionD.png', 'https://evdocente.ueb.edu.ec/', 0, NULL, 6, 0, NULL, NULL, 4),
(15, 'Pearson - UEB', 'https://www.ueb.edu.ec/images/logo_externos/pearson_UEB.png', 'https://www.biblionline.pearson.com/AuthURLEzProxyNew.aspx?i=LdA3JLbHf00OGRP%2bqWjeSA%3d%3d', 1, NULL, 1, 0, NULL, NULL, 3),
(16, 'eLibro', 'https://www.ueb.edu.ec/images/logo_externos/elibro.png', 'https://elibro.net/es/lc/bibliotecaueb/inicio', 1, NULL, 2, 0, NULL, NULL, 3),
(17, 'Documentaved', 'https://www.ueb.edu.ec/images/logo_externos/documenta.png', 'https://www.documentavet.com/', 1, NULL, 3, 0, NULL, NULL, 3),
(18, 'Ebooks7-24', 'https://www.ueb.edu.ec/images/logo_externos/ebooks.png', 'https://www.ebooks7-24.com/?ed=256', 1, NULL, 4, 0, NULL, NULL, 3),
(19, 'Pearson', 'https://www.ueb.edu.ec/images/logo_externos/pearson.png', 'https://www.ebooks7-24.com/?ed=273', 1, NULL, 5, 0, NULL, NULL, 3),
(20, 'Lexis Finder', 'https://www.ueb.edu.ec/images/logo_externos/lexis.png', 'https://lexis.ueb.edu.ec/', 1, NULL, 6, 0, NULL, NULL, 3),
(21, 'OvidEspañol', 'https://www.ueb.edu.ec/images/logo_externos/ovit.png', 'https://access.ovid.com/custom/unesbo/', 1, NULL, 7, 0, NULL, NULL, 3),
(22, 'Global Knowledge', 'https://www.ueb.edu.ec/images/logo_externos/global.png', 'https://gkacademics.com/es/revistas/', 1, NULL, 8, 0, NULL, NULL, 3),
(23, 'Dialnet', 'https://www.ueb.edu.ec/images/logo_externos/dialnet.png', 'https://dialnet.unirioja.es/', 1, NULL, 9, 0, NULL, NULL, 3),
(24, 'ALFAOMEGA', 'https://www.ueb.edu.ec/images/logo_externos/alfaomega.png', 'https://demourl.bibliotecasdigitales.com/home?category=3', 1, NULL, 10, 0, NULL, NULL, 3),
(38, 'Association for Computing Machinery', 'https://www.ueb.edu.ec/images/logo_externos/afcm.png', 'https://www.acm.org/', 1, NULL, 1, 0, NULL, NULL, 5),
(39, 'Academic Resource ResearchBib', 'https://www.ueb.edu.ec/images/logo_externos/ari.png', 'http://paper.researchbib.com/', 1, NULL, 2, 0, NULL, NULL, 5),
(40, 'Directory of Open Access Journals', 'https://www.ueb.edu.ec/images/logo_externos/doaj.png', 'https://doaj.org/', 1, NULL, 3, 0, NULL, NULL, 5),
(41, 'Open Libra', 'https://www.ueb.edu.ec/images/logo_externos/openlibra.png', 'https://openlibra.com/', 1, NULL, 4, 0, NULL, NULL, 5),
(42, 'Aprendiendo EC', 'https://www.ueb.edu.ec/images/logo_externos/aprendiendo.png', 'https://aprendiendo.ec/', 1, NULL, 5, 0, NULL, NULL, 5),
(43, 'Gale', 'https://www.ueb.edu.ec/images/logo_externos/logogale.png', 'https://sac.ueb.edu.ec/latinoamerica.cengage.com', 1, NULL, 6, 0, NULL, NULL, 5),
(44, 'scielo', 'https://www.ueb.edu.ec/images/logo_externos/scielo.png', 'https://scielo.org/', 1, NULL, 7, 0, NULL, NULL, 5),
(45, 'Medlineplus', 'https://www.ueb.edu.ec/images/logo_externos/medline.png', 'https://medlineplus.gov/spanish/', 1, NULL, 8, 0, NULL, NULL, 5),
(46, 'Oxford Journal', 'https://www.ueb.edu.ec/images/logo_externos/oxford.png', 'https://academic.oup.com/journals/', 1, NULL, 9, 0, NULL, NULL, 5),
(47, 'Springer Open', 'https://www.ueb.edu.ec/images/logo_externos/springer.png', 'https://www.springeropen.com/', 1, NULL, 10, 0, NULL, NULL, 5),
(48, 'EVEA | Extraordinario 2020-2020', 'https://www.ueb.edu.ec/images/logo_externos/EVEA_E.png', 'https://extraordinario.ueb.edu.ec/', 1, NULL, 1, 0, NULL, NULL, 6),
(49, 'EVEA | Pregrado 2020-2020', 'https://www.ueb.edu.ec/images/logo_externos/EVEA_P.png', 'https://evea2020.ueb.edu.ec/', 1, NULL, 2, 0, NULL, NULL, 6),
(50, 'EVEA | Nivelación 2020-2020', 'https://nivelacion2020.ueb.edu.ec/', 'https://www.ueb.edu.ec/images/logo_externos/EVEA_N.png', 1, NULL, 3, 0, NULL, NULL, 6);




INSERT INTO `roles` (`cod_rol`, `name`, `detail`,`domain`, `created_at`, `updated_at`) VALUES (NULL, 'Administrador', NULL,'ueb.edu.ec', NULL, NULL);


INSERT INTO `access` (`cod_access`, `name`, `endpoint`, `method`, `detail`, `cod_menu`, `created_at`, `updated_at`) VALUES (NULL, 'Ver Perfil', '/users/userinfo', 'GET', NULL, '2', NULL, NULL);
INSERT INTO `role_access` (`created_at`, `updated_at`, `cod_rol`, `cod_access`,`active`) VALUES (NULL, NULL, '1', '1','1');

INSERT INTO `access` (`cod_access`, `name`, `endpoint`, `method`, `detail`, `cod_menu`, `created_at`, `updated_at`) VALUES (NULL, 'Modificar Datos del Perfil', '/users/userinfo', 'PUT', NULL, '2', NULL, NULL);
INSERT INTO `role_access` (`created_at`, `updated_at`, `cod_rol`, `cod_access`, `active`) VALUES (NULL, NULL, '1', '2', '1');

INSERT INTO `access` (`cod_access`, `name`, `endpoint`, `method`, `detail`, `cod_menu`, `created_at`, `updated_at`) VALUES (NULL, 'Modificar Foto del Perfil', '/users/avatar', 'POST', NULL, '2', NULL, NULL);
INSERT INTO `role_access` (`created_at`, `updated_at`, `cod_rol`, `cod_access`, `active`) VALUES (NULL, NULL, '1', '3', '1');


INSERT INTO `user_roles` (`created_at`, `updated_at`, `cod_rol`, `id_user`) VALUES (NULL, NULL, '1', '1');

    INSERT INTO `role_platforms` (`cod_rol`, `cod_platform`, `created_at`, `updated_at`) VALUES ('1', '1', NULL, NULL), ('1', '2', NULL, NULL), ('1', '3', NULL, NULL), ('1', '4', NULL, NULL), ('1', '5', NULL, NULL), ('1', '6', NULL, NULL), ('1', '7', NULL, NULL), ('1', '8', NULL, NULL), ('1', '9', NULL, NULL), ('1', '10', NULL, NULL), ('1', '11', NULL, NULL), ('1', '12', NULL, NULL), ('1', '13', NULL, NULL), ('1', '14', NULL, NULL), ('1', '15', NULL, NULL), ('1', '16', NULL, NULL), ('1', '17', NULL, NULL), ('1', '18', NULL, NULL), ('1', '19', NULL, NULL), ('1', '20', NULL, NULL), ('1', '21', NULL, NULL), ('1', '22', NULL, NULL), ('1', '23', NULL, NULL), ('1', '24', NULL, NULL), ('1', '38', NULL, NULL), ('1', '39', NULL, NULL), ('1', '40', NULL, NULL), ('1', '41', NULL, NULL), ('1', '42', NULL, NULL), ('1', '43', NULL, NULL), ('1', '44', NULL, NULL), ('1', '45', NULL, NULL), ('1', '46', NULL, NULL), ('1', '47', NULL, NULL), ('1', '48', NULL, NULL), ('1', '49', NULL, NULL), ('1', '50', NULL, NULL);




    INSERT INTO `access` (`cod_access`, `name`, `endpoint`, `method`, `detail`, `cod_menu`, `created_at`, `updated_at`) VALUES (NULL, 'Access home temporal', '/home', 'GET', NULL, '1', NULL, NULL);
    INSERT INTO `role_access` (`created_at`, `updated_at`, `cod_rol`, `cod_access`, `active`) VALUES (NULL, NULL, '1', '4', '0');



    INSERT INTO `access` (`cod_access`, `name`, `endpoint`, `method`, `detail`, `cod_menu`, `created_at`, `updated_at`) VALUES (NULL, 'Acceder a los Sistemas Informaticos', '/systems', 'GET', NULL, '3', NULL, NULL);
    INSERT INTO `role_access` (`created_at`, `updated_at`, `cod_rol`, `cod_access`, `active`) VALUES (NULL, NULL, '1', '5', '1');








        INSERT INTO `menu` (`cod_menu`, `name`, `order`, `icon`, `path`, `cod_menu_father`, `created_at`, `updated_at`) VALUES (NULL, 'Usuarios', '1', '/admin/users', NULL, NULL, NULL, NULL);
        INSERT INTO `access` (`cod_access`, `name`, `endpoint`, `method`, `detail`, `cod_menu`, `created_at`, `updated_at`) VALUES (NULL, 'Ingreso de Usuarios al Sistema', '/users', 'POST', NULL, '5', NULL, NULL);
        INSERT INTO `role_access` (`created_at`, `updated_at`, `cod_rol`, `cod_access`, `active`) VALUES (NULL, NULL, '1', '6', '1');
        INSERT INTO `menu` (`cod_menu`, `name`, `order`, `icon`, `path`, `cod_menu_father`, `created_at`, `updated_at`) VALUES (NULL, 'Usuarios', '1', NULL, '/administrator/users', '4', NULL, NULL);
        INSERT INTO `access` (`cod_access`, `name`, `endpoint`, `method`, `detail`, `cod_menu`, `created_at`, `updated_at`) VALUES (NULL, 'Obtener todos los usuarios', '/users', 'GET', NULL, '5', NULL, NULL);
        INSERT INTO `role_access` (`created_at`, `updated_at`, `cod_rol`, `cod_access`, `active`) VALUES (NULL, NULL, '1', '7', '1');
    INSERT INTO `access` (`cod_access`, `name`, `endpoint`, `method`, `detail`, `cod_menu`, `created_at`, `updated_at`) VALUES (NULL, 'Ingresar un Nuevo Usuario', '/users', 'POST', NULL, '5', NULL, NULL);
    INSERT INTO `role_access` (`created_at`, `updated_at`, `cod_rol`, `cod_access`, `active`) VALUES (NULL, NULL, '1', '8', '1');
    INSERT INTO `access` (`cod_access`, `name`, `endpoint`, `method`, `detail`, `cod_menu`, `created_at`, `updated_at`) VALUES (NULL, 'Importar Usuarios', '/users/import', 'POST', NULL, '5', NULL, NULL);
    INSERT INTO `role_access` (`created_at`, `updated_at`, `cod_rol`, `cod_access`, `active`) VALUES (NULL, NULL, '1', '9', '1');



    INSERT INTO `roles` (`cod_rol`, `name`, `detail`, `domain`, `group_email`, `path_unit`, `created_at`, `updated_at`) VALUES (NULL, 'Estudiantes Nivelación', NULL, 'mailes.ueb.edu.ec', 'estudiantes@ueb.edu.ec', '/EstudiatesNivelacion', NULL, NULL);
    INSERT INTO `roles` (`cod_rol`, `name`, `detail`, `domain`, `group_email`, `path_unit`, `created_at`, `updated_at`) VALUES (NULL, 'Estudiantes', NULL, 'mailes.ueb.edu.ec', 'estudiantes@mailes.ueb.edu.ec', '/Estudiantes', NULL, NULL);

    INSERT INTO `roles` (`cod_rol`, `name`, `detail`, `domain`, `group_email`, `path_unit`, `created_at`, `updated_at`) VALUES (NULL, 'DocentesTitulares', NULL, 'ueb.edu.ec', 'docentes@ueb.edu.ec', '/DocentesTitulares', NULL, NULL);
   INSERT INTO `roles` (`cod_rol`, `name`, `detail`, `domain`, `group_email`, `path_unit`, `created_at`, `updated_at`) VALUES (NULL, 'Docentes Contratados', NULL, 'ueb.edu.ec', 'docentescontratados@ueb.edu.ec', '/DocentesContratados', NULL, NULL);

    INSERT INTO `role_access` (`created_at`, `updated_at`, `cod_rol`, `cod_access`, `active`) VALUES (NULL, NULL, '5', '1', '1'), (NULL, NULL, '5', '2', '1'), (NULL, NULL, '5', '3', '1'), (NULL, NULL, '5', '5', '1');
    INSERT INTO `role_access` (`created_at`, `updated_at`, `cod_rol`, `cod_access`, `active`) VALUES (NULL, NULL, '4', '1', '1'), (NULL, NULL, '4', '2', '1'), (NULL, NULL, '4', '3', '1'), (NULL, NULL, '4', '5', '1');
    INSERT INTO `role_access` (`created_at`, `updated_at`, `cod_rol`, `cod_access`, `active`) VALUES (NULL, NULL, '3', '1', '1'), (NULL, NULL, '3', '2', '1'), (NULL, NULL, '3', '3', '1'), (NULL, NULL, '3', '5', '1');
    INSERT INTO `role_access` (`created_at`, `updated_at`, `cod_rol`, `cod_access`, `active`) VALUES (NULL, NULL, '2', '1', '1'), (NULL, NULL, '2', '2', '1'), (NULL, NULL, '2', '3', '1'), (NULL, NULL, '2', '5', '1');
    INSERT INTO `role_platforms` (`cod_rol`, `cod_platform`, `created_at`, `updated_at`) VALUES ('2', '1', NULL, NULL), ('2', '2', NULL, NULL), ('2', '3', NULL, NULL), ('2', '4', NULL, NULL), ('2', '5', NULL, NULL), ('2', '6', NULL, NULL), ('2', '7', NULL, NULL), ('2', '8', NULL, NULL), ('2', '9', NULL, NULL), ('2', '10', NULL, NULL), ('2', '11', NULL, NULL), ('2', '12', NULL, NULL), ('2', '13', NULL, NULL), ('2', '14', NULL, NULL), ('2', '15', NULL, NULL), ('2', '16', NULL, NULL), ('2', '17', NULL, NULL), ('2', '18', NULL, NULL), ('2', '19', NULL, NULL), ('2', '20', NULL, NULL), ('2', '21', NULL, NULL), ('2', '22', NULL, NULL), ('2', '23', NULL, NULL), ('2', '24', NULL, NULL), ('2', '38', NULL, NULL), ('2', '39', NULL, NULL), ('2', '40', NULL, NULL), ('2', '41', NULL, NULL), ('2', '42', NULL, NULL), ('2', '43', NULL, NULL), ('2', '44', NULL, NULL), ('2', '45', NULL, NULL), ('2', '46', NULL, NULL);
    INSERT INTO `role_platforms` (`cod_rol`, `cod_platform`, `created_at`, `updated_at`) VALUES ('3', '1', NULL, NULL), ('3', '2', NULL, NULL), ('3', '3', NULL, NULL), ('3', '4', NULL, NULL), ('3', '5', NULL, NULL), ('3', '6', NULL, NULL), ('3', '7', NULL, NULL), ('3', '8', NULL, NULL), ('3', '9', NULL, NULL), ('3', '10', NULL, NULL), ('3', '11', NULL, NULL), ('3', '12', NULL, NULL), ('3', '13', NULL, NULL), ('3', '14', NULL, NULL), ('3', '15', NULL, NULL), ('3', '16', NULL, NULL), ('3', '17', NULL, NULL), ('3', '18', NULL, NULL), ('3', '19', NULL, NULL), ('3', '20', NULL, NULL), ('3', '21', NULL, NULL), ('3', '22', NULL, NULL), ('3', '23', NULL, NULL), ('3', '24', NULL, NULL), ('3', '38', NULL, NULL), ('3', '39', NULL, NULL), ('3', '40', NULL, NULL), ('3', '41', NULL, NULL), ('3', '42', NULL, NULL), ('3', '43', NULL, NULL), ('3', '44', NULL, NULL), ('3', '45', NULL, NULL), ('3', '46', NULL, NULL);
    INSERT INTO `role_platforms` (`cod_rol`, `cod_platform`, `created_at`, `updated_at`) VALUES ('4', '1', NULL, NULL), ('4', '2', NULL, NULL), ('4', '3', NULL, NULL), ('4', '4', NULL, NULL), ('4', '5', NULL, NULL), ('4', '6', NULL, NULL), ('4', '7', NULL, NULL), ('4', '8', NULL, NULL), ('4', '9', NULL, NULL), ('4', '10', NULL, NULL), ('4', '11', NULL, NULL), ('4', '12', NULL, NULL), ('4', '13', NULL, NULL), ('4', '14', NULL, NULL), ('4', '15', NULL, NULL), ('4', '16', NULL, NULL), ('4', '17', NULL, NULL), ('4', '18', NULL, NULL), ('4', '19', NULL, NULL), ('4', '20', NULL, NULL), ('4', '21', NULL, NULL), ('4', '22', NULL, NULL), ('4', '23', NULL, NULL), ('4', '24', NULL, NULL), ('4', '38', NULL, NULL), ('4', '39', NULL, NULL), ('4', '40', NULL, NULL), ('4', '41', NULL, NULL), ('4', '42', NULL, NULL), ('4', '43', NULL, NULL), ('4', '44', NULL, NULL), ('4', '45', NULL, NULL), ('4', '46', NULL, NULL);
    INSERT INTO `role_platforms` (`cod_rol`, `cod_platform`, `created_at`, `updated_at`) VALUES ('5', '1', NULL, NULL), ('5', '2', NULL, NULL), ('5', '3', NULL, NULL), ('5', '4', NULL, NULL), ('5', '5', NULL, NULL), ('5', '6', NULL, NULL), ('5', '7', NULL, NULL), ('5', '8', NULL, NULL), ('5', '9', NULL, NULL), ('5', '10', NULL, NULL), ('5', '11', NULL, NULL), ('5', '12', NULL, NULL), ('5', '13', NULL, NULL), ('5', '14', NULL, NULL), ('5', '15', NULL, NULL), ('5', '16', NULL, NULL), ('5', '17', NULL, NULL), ('5', '18', NULL, NULL), ('5', '19', NULL, NULL), ('5', '20', NULL, NULL), ('5', '21', NULL, NULL), ('5', '22', NULL, NULL), ('5', '23', NULL, NULL), ('5', '24', NULL, NULL), ('5', '38', NULL, NULL), ('5', '39', NULL, NULL), ('5', '40', NULL, NULL), ('5', '41', NULL, NULL), ('5', '42', NULL, NULL), ('5', '43', NULL, NULL), ('5', '44', NULL, NULL), ('5', '45', NULL, NULL), ('5', '46', NULL, NULL);

    --====================================================================
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

       /* DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);*/
        DB::table('countries')->insert([
            'name'=>'Afganistán',
            'ISO2'=>'AF'
        ]);
        DB::table('countries')->insert([
            'name'=>'Albania',
            'ISO2'=>'AL'
        ]);
        DB::table('countries')->insert([
            'name'=>'Alemania',
            'ISO2'=>'DE'
        ]);
        DB::table('countries')->insert([
            'name'=>'Andorra',
            'ISO2'=>'AD'
        ]);
        DB::table('countries')->insert([
            'name'=>'Angola',
            'ISO2'=>'AO'
        ]);
        DB::table('countries')->insert([
            'name'=>'Anguila',
            'ISO2'=>'AI'
        ]);
        DB::table('countries')->insert([
            'name'=>'Antártida',
            'ISO2'=>'AQ'
        ]);
        DB::table('countries')->insert([
            'name'=>'Antigua y Barbuda',
            'ISO2'=>'AG'
        ]);
        DB::table('countries')->insert([
            'name'=>'Arabia Saudita',
            'ISO2'=>'SA'
        ]);
        DB::table('countries')->insert([
            'name'=>'Argelia',
            'ISO2'=>'DZ'
        ]);
        DB::table('countries')->insert([
            'name'=>'Argentina',
            'ISO2'=>'AR'
        ]);
        DB::table('countries')->insert([
            'name'=>'Armenia',
            'ISO2'=>'AM'
        ]);
        DB::table('countries')->insert([
            'name'=>'Aruba',
            'ISO2'=>'AW'
        ]);
        DB::table('countries')->insert([
            'name'=>'Australia',
            'ISO2'=>'AU'
        ]);
        DB::table('countries')->insert([
            'name'=>'Austria',
            'ISO2'=>'AT'
        ]);
        DB::table('countries')->insert([
            'name'=>'Azerbaiyán',
            'ISO2'=>'AZ'
        ]);
        DB::table('countries')->insert([
            'name'=>'Bélgica',
            'ISO2'=>'BE'
        ]);
        DB::table('countries')->insert([
            'name'=>'Bahamas',
            'ISO2'=>'BS'
        ]);
        DB::table('countries')->insert([
            'name'=>'Bahrein',
            'ISO2'=>'BH'
        ]);
        DB::table('countries')->insert([
            'name'=>'Bangladesh',
            'ISO2'=>'BD'
        ]);
        DB::table('countries')->insert([
            'name'=>'Barbados',
            'ISO2'=>'BB'
        ]);
        DB::table('countries')->insert([
            'name'=>'Belice',
            'ISO2'=>'BZ'
        ]);
        DB::table('countries')->insert([
            'name'=>'Benín',
            'ISO2'=>'BJ'
        ]);
        DB::table('countries')->insert([
            'name'=>'Bhután',
            'ISO2'=>'BT'
        ]);
        DB::table('countries')->insert([
            'name'=>'Bielorrusia',
            'ISO2'=>'BY'
        ]);
        DB::table('countries')->insert([
            'name'=>'Birmania',
            'ISO2'=>'MM'
        ]);
        DB::table('countries')->insert([
            'name'=>'Bolivia',
            'ISO2'=>'BO'
        ]);
        DB::table('countries')->insert([
            'name'=>'Bosnia y Herzegovina',
            'ISO2'=>'BA'
        ]);
        DB::table('countries')->insert([
            'name'=>'Botsuana',
            'ISO2'=>'BW'
        ]);
        DB::table('countries')->insert([
            'name'=>'Brasil',
            'ISO2'=>'BR'
        ]);
        DB::table('countries')->insert([
            'name'=>'Brunéi',
            'ISO2'=>'BN'
        ]);
        DB::table('countries')->insert([
            'name'=>'Bulgaria',
            'ISO2'=>'BG'
        ]);
        DB::table('countries')->insert([
            'name'=>'Burkina Faso',
            'ISO2'=>'BF'
        ]);
        DB::table('countries')->insert([
            'name'=>'Burundi',
            'ISO2'=>'BI'
        ]);
        DB::table('countries')->insert([
            'name'=>'Cabo Verde',
            'ISO2'=>'CV'
        ]);
        DB::table('countries')->insert([
            'name'=>'Camboya',
            'ISO2'=>'KH'
        ]);
        DB::table('countries')->insert([
            'name'=>'Camerún',
            'ISO2'=>'CM'
        ]);
        DB::table('countries')->insert([
            'name'=>'Canadá',
            'ISO2'=>'CA'
        ]);
        DB::table('countries')->insert([
            'name'=>'Chad',
            'ISO2'=>'TD'
        ]);
        DB::table('countries')->insert([
            'name'=>'Chile',
            'ISO2'=>'CL'
        ]);
        DB::table('countries')->insert([
            'name'=>'China',
            'ISO2'=>'CN'
        ]);
        DB::table('countries')->insert([
            'name'=>'Chipre',
            'ISO2'=>'CY'
        ]);
        DB::table('countries')->insert([
            'name'=>'Ciudad del Vaticano',
            'ISO2'=>'VA'
        ]);
        DB::table('countries')->insert([
            'name'=>'Colombia',
            'ISO2'=>'CO'
        ]);
        DB::table('countries')->insert([
            'name'=>'Comoras',
            'ISO2'=>'KM'
        ]);
        DB::table('countries')->insert([
            'name'=>'República del Congo',
            'ISO2'=>'CG'
        ]);
        DB::table('countries')->insert([
            'name'=>'República Democrática del Congo',
            'ISO2'=>'CD'
        ]);
        DB::table('countries')->insert([
            'name'=>'Corea del Norte',
            'ISO2'=>'KP'
        ]);
        DB::table('countries')->insert([
            'name'=>'Corea del Sur',
            'ISO2'=>'KR'
        ]);
        DB::table('countries')->insert([
            'name'=>'Costa de Marfil',
            'ISO2'=>'CI'
        ]);
        DB::table('countries')->insert([
            'name'=>'Costa Rica',
            'ISO2'=>'CR'
        ]);
        DB::table('countries')->insert([
            'name'=>'Croacia',
            'ISO2'=>'HR'
        ]);
        DB::table('countries')->insert([
            'name'=>'Cuba',
            'ISO2'=>'CU'
        ]);
        DB::table('countries')->insert([
            'name'=>'Curazao',
            'ISO2'=>'CW'
        ]);
        DB::table('countries')->insert([
            'name'=>'Dinamarca',
            'ISO2'=>'DK'
        ]);
        DB::table('countries')->insert([
            'name'=>'Dominica',
            'ISO2'=>'DM'
        ]);
        DB::table('countries')->insert([
            'name'=>'Ecuador',
            'ISO2'=>'EC'
        ]);
        DB::table('countries')->insert([
            'name'=>'Egipto',
            'ISO2'=>'EG'
        ]);
        DB::table('countries')->insert([
            'name'=>'El Salvador',
            'ISO2'=>'SV'
        ]);
        DB::table('countries')->insert([
            'name'=>'Emiratos Árabes Unidos',
            'ISO2'=>'AE'
        ]);
        DB::table('countries')->insert([
            'name'=>'Eritrea',
            'ISO2'=>'ER'
        ]);
        DB::table('countries')->insert([
            'name'=>'Eslovaquia',
            'ISO2'=>'SK'
        ]);
        DB::table('countries')->insert([
            'name'=>'Eslovenia',
            'ISO2'=>'SI'
        ]);
        DB::table('countries')->insert([
            'name'=>'España',
            'ISO2'=>'ES'
        ]);
        DB::table('countries')->insert([
            'name'=>'Estados Unidos de América',
            'ISO2'=>'US'
        ]);
        DB::table('countries')->insert([
            'name'=>'Estonia',
            'ISO2'=>'EE'
        ]);
        DB::table('countries')->insert([
            'name'=>'Etiopía',
            'ISO2'=>'ET'
        ]);
        DB::table('countries')->insert([
            'name'=>'Filipinas',
            'ISO2'=>'PH'
        ]);
        DB::table('countries')->insert([
            'name'=>'Finlandia',
            'ISO2'=>'FI'
        ]);
        DB::table('countries')->insert([
            'name'=>'Fiyi',
            'ISO2'=>'FJ'
        ]);
        DB::table('countries')->insert([
            'name'=>'Francia',
            'ISO2'=>'FR'
        ]);
        DB::table('countries')->insert([
            'name'=>'Gabón',
            'ISO2'=>'GA'
        ]);
        DB::table('countries')->insert([
            'name'=>'Gambia',
            'ISO2'=>'GM'
        ]);
        DB::table('countries')->insert([
            'name'=>'Georgia',
            'ISO2'=>'GE'
        ]);
        DB::table('countries')->insert([
            'name'=>'Ghana',
            'ISO2'=>'GH'
        ]);
        DB::table('countries')->insert([
            'name'=>'Gibraltar',
            'ISO2'=>'GI'
        ]);
        DB::table('countries')->insert([
            'name'=>'Granada',
            'ISO2'=>'GD'
        ]);
        DB::table('countries')->insert([
            'name'=>'Grecia',
            'ISO2'=>'GR'
        ]);
        DB::table('countries')->insert([
            'name'=>'Groenlandia',
            'ISO2'=>'GL'
        ]);
        DB::table('countries')->insert([
            'name'=>'Guadalupe',
            'ISO2'=>'GP'
        ]);
        DB::table('countries')->insert([
            'name'=>'Guam',
            'ISO2'=>'GU'
        ]);
        DB::table('countries')->insert([
            'name'=>'Guatemala',
            'ISO2'=>'GT'
        ]);
        DB::table('countries')->insert([
            'name'=>'Guayana Francesa',
            'ISO2'=>'GF'
        ]);
        DB::table('countries')->insert([
            'name'=>'Guernsey',
            'ISO2'=>'GG'
        ]);
        DB::table('countries')->insert([
            'name'=>'Guinea',
            'ISO2'=>'GN'
        ]);
        DB::table('countries')->insert([
            'name'=>'Guinea Ecuatorial',
            'ISO2'=>'GQ'
        ]);
        DB::table('countries')->insert([
            'name'=>'Guinea-Bissau',
            'ISO2'=>'GW'
        ]);
        DB::table('countries')->insert([
            'name'=>'Guyana',
            'ISO2'=>'GY'
        ]);
        DB::table('countries')->insert([
            'name'=>'Haití',
            'ISO2'=>'HT'
        ]);
        DB::table('countries')->insert([
            'name'=>'Honduras',
            'ISO2'=>'HN'
        ]);
        DB::table('countries')->insert([
            'name'=>'Hong kong',
            'ISO2'=>'HK'
        ]);
        DB::table('countries')->insert([
            'name'=>'Hungría',
            'ISO2'=>'HU'
        ]);
        DB::table('countries')->insert([
            'name'=>'India',
            'ISO2'=>'IN'
        ]);
        DB::table('countries')->insert([
            'name'=>'Indonesia',
            'ISO2'=>'ID'
        ]);
        DB::table('countries')->insert([
            'name'=>'Irán',
            'ISO2'=>'IR'
        ]);
        DB::table('countries')->insert([
            'name'=>'Irak',
            'ISO2'=>'IQ'
        ]);
        DB::table('countries')->insert([
            'name'=>'Irlanda',
            'ISO2'=>'IE'
        ]);
        DB::table('countries')->insert([
            'name'=>'Isla Bouvet',
            'ISO2'=>'BV'
        ]);
        DB::table('countries')->insert([
            'name'=>'Isla de Man',
            'ISO2'=>'IM'
        ]);
        DB::table('countries')->insert([
            'name'=>'Isla de Navidad',
            'ISO2'=>'CX'
        ]);
        DB::table('countries')->insert([
            'name'=>'Isla Norfolk',
            'ISO2'=>'NF'
        ]);
        DB::table('countries')->insert([
            'name'=>'Islandia',
            'ISO2'=>'IS'
        ]);
        DB::table('countries')->insert([
            'name'=>'Islas Bermudas',
            'ISO2'=>'BM'
        ]);
        DB::table('countries')->insert([
            'name'=>'Islas Caimán',
            'ISO2'=>'KY'
        ]);
        DB::table('countries')->insert([
            'name'=>'Islas Cocos (Keeling)',
            'ISO2'=>'CC'
        ]);
        DB::table('countries')->insert([
            'name'=>'Islas Cook',
            'ISO2'=>'CK'
        ]);
        DB::table('countries')->insert([
            'name'=>'Islas de Åland',
            'ISO2'=>'AX'
        ]);
        DB::table('countries')->insert([
            'name'=>'Islas Feroe',
            'ISO2'=>'FO'
        ]);
        DB::table('countries')->insert([
            'name'=>'Islas Georgias del Sur y Sandwich del Sur',
            'ISO2'=>'GS'
        ]);
        DB::table('countries')->insert([
            'name'=>'Islas Heard y McDonald',
            'ISO2'=>'HM'
        ]);
        DB::table('countries')->insert([
            'name'=>'Islas Maldivas',
            'ISO2'=>'MV'
        ]);
        DB::table('countries')->insert([
            'name'=>'Islas Malvinas',
            'ISO2'=>'FK'
        ]);
        DB::table('countries')->insert([
            'name'=>'Islas Marianas del Norte',
            'ISO2'=>'MP'
        ]);
        DB::table('countries')->insert([
            'name'=>'Islas Marshall',
            'ISO2'=>'MH'
        ]);
        DB::table('countries')->insert([
            'name'=>'Islas Pitcairn',
            'ISO2'=>'PN'
        ]);
        DB::table('countries')->insert([
            'name'=>'Islas Salomón',
            'ISO2'=>'SB'
        ]);
        DB::table('countries')->insert([
            'name'=>'Islas Turcas y Caicos',
            'ISO2'=>'TC'
        ]);
        DB::table('countries')->insert([
            'name'=>'Islas Ultramarinas Menores de Estados Unidos',
            'ISO2'=>'UM'
        ]);
        DB::table('countries')->insert([
            'name'=>'Islas Vírgenes Británicas',
            'ISO2'=>'VG'
        ]);
        DB::table('countries')->insert([
            'name'=>'Islas Vírgenes de los Estados Unidos',
            'ISO2'=>'VI'
        ]);
        DB::table('countries')->insert([
            'name'=>'Israel',
            'ISO2'=>'IL'
        ]);
        DB::table('countries')->insert([
            'name'=>'Italia',
            'ISO2'=>'IT'
        ]);
        DB::table('countries')->insert([
            'name'=>'Jamaica',
            'ISO2'=>'JM'
        ]);
        DB::table('countries')->insert([
            'name'=>'Japón',
            'ISO2'=>'JP'
        ]);
        DB::table('countries')->insert([
            'name'=>'Jersey',
            'ISO2'=>'JE'
        ]);
        DB::table('countries')->insert([
            'name'=>'Jordania',
            'ISO2'=>'JO'
        ]);
        DB::table('countries')->insert([
            'name'=>'Kazajistán',
            'ISO2'=>'KZ'
        ]);
        DB::table('countries')->insert([
            'name'=>'Kenia',
            'ISO2'=>'KE'
        ]);
        DB::table('countries')->insert([
            'name'=>'Kirguistán',
            'ISO2'=>'KG'
        ]);
        DB::table('countries')->insert([
            'name'=>'Kiribati',
            'ISO2'=>'KI'
        ]);
        DB::table('countries')->insert([
            'name'=>'Kuwait',
            'ISO2'=>'KW'
        ]);
        DB::table('countries')->insert([
            'name'=>'Líbano',
            'ISO2'=>'LB'
        ]);
        DB::table('countries')->insert([
            'name'=>'Laos',
            'ISO2'=>'LA'
        ]);
        DB::table('countries')->insert([
            'name'=>'Lesoto',
            'ISO2'=>'LS'
        ]);
        DB::table('countries')->insert([
            'name'=>'Letonia',
            'ISO2'=>'LV'
        ]);
        DB::table('countries')->insert([
            'name'=>'Liberia',
            'ISO2'=>'LR'
        ]);
        DB::table('countries')->insert([
            'name'=>'Libia',
            'ISO2'=>'LY'
        ]);
        DB::table('countries')->insert([
            'name'=>'Liechtenstein',
            'ISO2'=>'LI'
        ]);
        DB::table('countries')->insert([
            'name'=>'Lituania',
            'ISO2'=>'LT'
        ]);
        DB::table('countries')->insert([
            'name'=>'Luxemburgo',
            'ISO2'=>'LU'
        ]);
        DB::table('countries')->insert([
            'name'=>'México',
            'ISO2'=>'MX'
        ]);
        DB::table('countries')->insert([
            'name'=>'Mónaco',
            'ISO2'=>'MC'
        ]);
        DB::table('countries')->insert([
            'name'=>'Macao',
            'ISO2'=>'MO'
        ]);
        DB::table('countries')->insert([
            'name'=>'Macedônia',
            'ISO2'=>'MK'
        ]);
        DB::table('countries')->insert([
            'name'=>'Madagascar',
            'ISO2'=>'MG'
        ]);
        DB::table('countries')->insert([
            'name'=>'Malasia',
            'ISO2'=>'MY'
        ]);
        DB::table('countries')->insert([
            'name'=>'Malawi',
            'ISO2'=>'MW'
        ]);
        DB::table('countries')->insert([
            'name'=>'Mali',
            'ISO2'=>'ML'
        ]);
        DB::table('countries')->insert([
            'name'=>'Malta',
            'ISO2'=>'MT'
        ]);
        DB::table('countries')->insert([
            'name'=>'Marruecos',
            'ISO2'=>'MA'
        ]);
        DB::table('countries')->insert([
            'name'=>'Martinica',
            'ISO2'=>'MQ'
        ]);
        DB::table('countries')->insert([
            'name'=>'Mauricio',
            'ISO2'=>'MU'
        ]);
        DB::table('countries')->insert([
            'name'=>'Mauritania',
            'ISO2'=>'MR'
        ]);
        DB::table('countries')->insert([
            'name'=>'Mayotte',
            'ISO2'=>'YT'
        ]);
        DB::table('countries')->insert([
            'name'=>'Micronesia',
            'ISO2'=>'FM'
        ]);
        DB::table('countries')->insert([
            'name'=>'Moldavia',
            'ISO2'=>'MD'
        ]);
        DB::table('countries')->insert([
            'name'=>'Mongolia',
            'ISO2'=>'MN'
        ]);
        DB::table('countries')->insert([
            'name'=>'Montenegro',
            'ISO2'=>'ME'
        ]);
        DB::table('countries')->insert([
            'name'=>'Montserrat',
            'ISO2'=>'MS'
        ]);
        DB::table('countries')->insert([
            'name'=>'Mozambique',
            'ISO2'=>'MZ'
        ]);
        DB::table('countries')->insert([
            'name'=>'Namibia',
            'ISO2'=>'NA'
        ]);
        DB::table('countries')->insert([
            'name'=>'Nauru',
            'ISO2'=>'NR'
        ]);
        DB::table('countries')->insert([
            'name'=>'Nepal',
            'ISO2'=>'NP'
        ]);
        DB::table('countries')->insert([
            'name'=>'Nicaragua',
            'ISO2'=>'NI'
        ]);
        DB::table('countries')->insert([
            'name'=>'Niger',
            'ISO2'=>'NE'
        ]);
        DB::table('countries')->insert([
            'name'=>'Nigeria',
            'ISO2'=>'NG'
        ]);
        DB::table('countries')->insert([
            'name'=>'Niue',
            'ISO2'=>'NU'
        ]);
        DB::table('countries')->insert([
            'name'=>'Noruega',
            'ISO2'=>'NO'
        ]);
        DB::table('countries')->insert([
            'name'=>'Nueva Caledonia',
            'ISO2'=>'NC'
        ]);
        DB::table('countries')->insert([
            'name'=>'Nueva Zelanda',
            'ISO2'=>'NZ'
        ]);
        DB::table('countries')->insert([
            'name'=>'Omán',
            'ISO2'=>'OM'
        ]);
        DB::table('countries')->insert([
            'name'=>'Países Bajos',
            'ISO2'=>'NL'
        ]);
        DB::table('countries')->insert([
            'name'=>'Pakistán',
            'ISO2'=>'PK'
        ]);
        DB::table('countries')->insert([
            'name'=>'Palau',
            'ISO2'=>'PW'
        ]);
        DB::table('countries')->insert([
            'name'=>'Palestina',
            'ISO2'=>'PS'
        ]);
        DB::table('countries')->insert([
            'name'=>'Panamá',
            'ISO2'=>'PA'
        ]);
        DB::table('countries')->insert([
            'name'=>'Papúa Nueva Guinea',
            'ISO2'=>'PG'
        ]);
        DB::table('countries')->insert([
            'name'=>'Paraguay',
            'ISO2'=>'PY'
        ]);
        DB::table('countries')->insert([
            'name'=>'Perú',
            'ISO2'=>'PE'
        ]);
        DB::table('countries')->insert([
            'name'=>'Polinesia Francesa',
            'ISO2'=>'PF'
        ]);
        DB::table('countries')->insert([
            'name'=>'Polonia',
            'ISO2'=>'PL'
        ]);
        DB::table('countries')->insert([
            'name'=>'Portugal',
            'ISO2'=>'PT'
        ]);
        DB::table('countries')->insert([
            'name'=>'Puerto Rico',
            'ISO2'=>'PR'
        ]);
        DB::table('countries')->insert([
            'name'=>'Qatar',
            'ISO2'=>'QA'
        ]);
        DB::table('countries')->insert([
            'name'=>'Reino Unido',
            'ISO2'=>'GB'
        ]);
        DB::table('countries')->insert([
            'name'=>'República Centroafricana',
            'ISO2'=>'CF'
        ]);
        DB::table('countries')->insert([
            'name'=>'República Checa',
            'ISO2'=>'CZ'
        ]);
        DB::table('countries')->insert([
            'name'=>'República Dominicana',
            'ISO2'=>'DO'
        ]);
        DB::table('countries')->insert([
            'name'=>'República de Sudán del Sur',
            'ISO2'=>'SS'
        ]);
        DB::table('countries')->insert([
            'name'=>'Reunión',
            'ISO2'=>'RE'
        ]);
        DB::table('countries')->insert([
            'name'=>'Ruanda',
            'ISO2'=>'RW'
        ]);
        DB::table('countries')->insert([
            'name'=>'Rumanía',
            'ISO2'=>'RO'
        ]);
        DB::table('countries')->insert([
            'name'=>'Rusia',
            'ISO2'=>'RU'
        ]);
        DB::table('countries')->insert([
            'name'=>'Sahara Occidental',
            'ISO2'=>'EH'
        ]);
        DB::table('countries')->insert([
            'name'=>'Samoa',
            'ISO2'=>'WS'
        ]);
        DB::table('countries')->insert([
            'name'=>'Samoa Americana',
            'ISO2'=>'AS'
        ]);
        DB::table('countries')->insert([
            'name'=>'San Bartolomé',
            'ISO2'=>'BL'
        ]);
        DB::table('countries')->insert([
            'name'=>'San Cristóbal y Nieves',
            'ISO2'=>'KN'
        ]);
        DB::table('countries')->insert([
            'name'=>'San Marino',
            'ISO2'=>'SM'
        ]);
        DB::table('countries')->insert([
            'name'=>'San Martín (Francia)',
            'ISO2'=>'MF'
        ]);
        DB::table('countries')->insert([
            'name'=>'San Pedro y Miquelón',
            'ISO2'=>'PM'
        ]);
        DB::table('countries')->insert([
            'name'=>'San Vicente y las Granadinas',
            'ISO2'=>'VC'
        ]);
        DB::table('countries')->insert([
            'name'=>'Santa Elena',
            'ISO2'=>'SH'
        ]);
        DB::table('countries')->insert([
            'name'=>'Santa Lucía',
            'ISO2'=>'LC'
        ]);
        DB::table('countries')->insert([
            'name'=>'Santo Tomé y Príncipe',
            'ISO2'=>'ST'
        ]);
        DB::table('countries')->insert([
            'name'=>'Senegal',
            'ISO2'=>'SN'
        ]);
        DB::table('countries')->insert([
            'name'=>'Serbia',
            'ISO2'=>'RS'
        ]);
        DB::table('countries')->insert([
            'name'=>'Seychelles',
            'ISO2'=>'SC'
        ]);
        DB::table('countries')->insert([
            'name'=>'Sierra Leona',
            'ISO2'=>'SL'
        ]);
        DB::table('countries')->insert([
            'name'=>'Singapur',
            'ISO2'=>'SG'
        ]);
        DB::table('countries')->insert([
            'name'=>'Sint Maarten',
            'ISO2'=>'SX'
        ]);
        DB::table('countries')->insert([
            'name'=>'Siria',
            'ISO2'=>'SY'
        ]);
        DB::table('countries')->insert([
            'name'=>'Somalia',
            'ISO2'=>'SO'
        ]);
        DB::table('countries')->insert([
            'name'=>'Sri lanka',
            'ISO2'=>'LK'
        ]);
        DB::table('countries')->insert([
            'name'=>'Sudáfrica',
            'ISO2'=>'ZA'
        ]);
        DB::table('countries')->insert([
            'name'=>'Sudán',
            'ISO2'=>'SD'
        ]);
        DB::table('countries')->insert([
            'name'=>'Suecia',
            'ISO2'=>'SE'
        ]);
        DB::table('countries')->insert([
            'name'=>'Suiza',
            'ISO2'=>'CH'
        ]);
        DB::table('countries')->insert([
            'name'=>'Surinám',
            'ISO2'=>'SR'
        ]);
        DB::table('countries')->insert([
            'name'=>'Svalbard y Jan Mayen',
            'ISO2'=>'SJ'
        ]);
        DB::table('countries')->insert([
            'name'=>'Swazilandia',
            'ISO2'=>'SZ'
        ]);
        DB::table('countries')->insert([
            'name'=>'Tayikistán',
            'ISO2'=>'TJ'
        ]);
        DB::table('countries')->insert([
            'name'=>'Tailandia',
            'ISO2'=>'TH'
        ]);
        DB::table('countries')->insert([
            'name'=>'Taiwán',
            'ISO2'=>'TW'
        ]);
        DB::table('countries')->insert([
            'name'=>'Tanzania',
            'ISO2'=>'TZ'
        ]);
        DB::table('countries')->insert([
            'name'=>'Territorio Británico del Océano Índico',
            'ISO2'=>'IO'
        ]);
        DB::table('countries')->insert([
            'name'=>'Territorios Australes y Antárticas Franceses',
            'ISO2'=>'TF'
        ]);
        DB::table('countries')->insert([
            'name'=>'Timor Oriental',
            'ISO2'=>'TL'
        ]);
        DB::table('countries')->insert([
            'name'=>'Togo',
            'ISO2'=>'TG'
        ]);
        DB::table('countries')->insert([
            'name'=>'Tokelau',
            'ISO2'=>'TK'
        ]);
        DB::table('countries')->insert([
            'name'=>'Tonga',
            'ISO2'=>'TO'
        ]);
        DB::table('countries')->insert([
            'name'=>'Trinidad y Tobago',
            'ISO2'=>'TT'
        ]);
        DB::table('countries')->insert([
            'name'=>'Tunez',
            'ISO2'=>'TN'
        ]);
        DB::table('countries')->insert([
            'name'=>'Turkmenistán',
            'ISO2'=>'TM'
        ]);
        DB::table('countries')->insert([
            'name'=>'Turquía',
            'ISO2'=>'TR'
        ]);
        DB::table('countries')->insert([
            'name'=>'Tuvalu',
            'ISO2'=>'TV'
        ]);
        DB::table('countries')->insert([
            'name'=>'Ucrania',
            'ISO2'=>'UA'
        ]);
        DB::table('countries')->insert([
            'name'=>'Uganda',
            'ISO2'=>'UG'
        ]);
        DB::table('countries')->insert([
            'name'=>'Uruguay',
            'ISO2'=>'UY'
        ]);
        DB::table('countries')->insert([
            'name'=>'Uzbekistán',
            'ISO2'=>'UZ'
        ]);
        DB::table('countries')->insert([
            'name'=>'Vanuatu',
            'ISO2'=>'VU'
        ]);
        DB::table('countries')->insert([
            'name'=>'Venezuela',
            'ISO2'=>'VE'
        ]);
        DB::table('countries')->insert([
            'name'=>'Vietnam',
            'ISO2'=>'VN'
        ]);
        DB::table('countries')->insert([
            'name'=>'Wallis y Futuna',
            'ISO2'=>'WF'
        ]);
        DB::table('countries')->insert([
            'name'=>'Yemen',
            'ISO2'=>'YE'
        ]);
        DB::table('countries')->insert([
            'name'=>'Yibuti',
            'ISO2'=>'DJ'
        ]);
        DB::table('countries')->insert([
            'name'=>'Zambia',
            'ISO2'=>'ZM'
        ]);
        DB::table('countries')->insert([
            'name'=>'Zimbabue',
            'ISO2'=>'ZW'
        ]);

    /*Insert provinces*/
        DB::table('provinces')->insert([
            'cod_province'=>'01',
            'name'=>'AZUAY',
            'cod_country'=>'EC'
        ]);
        DB::table('provinces')->insert([
            'cod_province'=>'02',
            'name'=>'BOLIVAR',
            'cod_country'=>'EC'
        ]);
        DB::table('provinces')->insert([
            'cod_province'=>'03',
            'name'=>'CAÑAR',
            'cod_country'=>'EC'
        ]);
        DB::table('provinces')->insert([
            'cod_province'=>'04',
            'name'=>'CARCHI',
            'cod_country'=>'EC'
        ]);
        DB::table('provinces')->insert([
            'cod_province'=>'05',
            'name'=>'COTOPAXI',
            'cod_country'=>'EC'
        ]);
        DB::table('provinces')->insert([
            'cod_province'=>'06',
            'name'=>'CHIMBORAZO',
            'cod_country'=>'EC'
        ]);
        DB::table('provinces')->insert([
            'cod_province'=>'07',
            'name'=>'EL ORO',
            'cod_country'=>'EC'
        ]);
        DB::table('provinces')->insert([
            'cod_province'=>'08',
            'name'=>'ESMERALDAS',
            'cod_country'=>'EC'
        ]);
        DB::table('provinces')->insert([
            'cod_province'=>'09',
            'name'=>'GUAYAS',
            'cod_country'=>'EC'
        ]);
        DB::table('provinces')->insert([
            'cod_province'=>'10',
            'name'=>'IMBABURA',
            'cod_country'=>'EC'
        ]);
        DB::table('provinces')->insert([
            'cod_province'=>'11',
            'name'=>'LOJA',
            'cod_country'=>'EC'
        ]);
        DB::table('provinces')->insert([
            'cod_province'=>'12',
            'name'=>'LOS RIOS',
            'cod_country'=>'EC'
        ]);
        DB::table('provinces')->insert([
            'cod_province'=>'13',
            'name'=>'MANABI',
            'cod_country'=>'EC'
        ]);
        DB::table('provinces')->insert([
            'cod_province'=>'14',
            'name'=>'MORONA SANTIAGO',
            'cod_country'=>'EC'
        ]);
        DB::table('provinces')->insert([
            'cod_province'=>'15',
            'name'=>'NAPO',
            'cod_country'=>'EC'
        ]);
        DB::table('provinces')->insert([
            'cod_province'=>'16',
            'name'=>'PASTAZA',
            'cod_country'=>'EC'
        ]);
        DB::table('provinces')->insert([
            'cod_province'=>'17',
            'name'=>'PICHINCHA',
            'cod_country'=>'EC'
        ]);
        DB::table('provinces')->insert([
            'cod_province'=>'18',
            'name'=>'TUNGURAHUA',
            'cod_country'=>'EC'
        ]);
        DB::table('provinces')->insert([
            'cod_province'=>'19',
            'name'=>'ZAMORA CHINCHIPE',
            'cod_country'=>'EC'
        ]);
        DB::table('provinces')->insert([
            'cod_province'=>'20',
            'name'=>'GALAPAGOS',
            'cod_country'=>'EC'
        ]);
        DB::table('provinces')->insert([
            'cod_province'=>'21',
            'name'=>'SUCUMBIOS',
            'cod_country'=>'EC'
        ]);
        DB::table('provinces')->insert([
            'cod_province'=>'22',
            'name'=>'ORELLANA',
            'cod_country'=>'EC'
        ]);
        DB::table('provinces')->insert([
            'cod_province'=>'23',
            'name'=>'SANTO DOMINGO DE LOS TSACHILAS',
            'cod_country'=>'EC'
        ]);
        DB::table('provinces')->insert([
            'cod_province'=>'24',
            'name'=>'SANTA ELENA',
            'cod_country'=>'EC'
        ]);
        DB::table('provinces')->insert([
            'cod_province'=>'90',
            'name'=>'ZONAS NO DELIMITADAS',
            'cod_country'=>'EC'
        ]);
        /*Insert cantones*/
        DB::table('cantones')->insert([
            'cod_canton'=>'0101',
            'name'=>'CUENCA',
            'cod_province'=>'01'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0102',
            'name'=>'GIRÓN',
            'cod_province'=>'01'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0103',
            'name'=>'GUALACEO',
            'cod_province'=>'01'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0104',
            'name'=>'NABÓN',
            'cod_province'=>'01'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0105',
            'name'=>'PAUTE',
            'cod_province'=>'01'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0106',
            'name'=>'PUCARA',
            'cod_province'=>'01'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0107',
            'name'=>'SAN FERNANDO',
            'cod_province'=>'01'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0108',
            'name'=>'SANTA ISABEL',
            'cod_province'=>'01'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0109',
            'name'=>'SIGSIG',
            'cod_province'=>'01'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0110',
            'name'=>'OÑA',
            'cod_province'=>'01'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0111',
            'name'=>'CHORDELEG',
            'cod_province'=>'01'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0112',
            'name'=>'EL PAN',
            'cod_province'=>'01'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0113',
            'name'=>'SEVILLA DE ORO',
            'cod_province'=>'01'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0114',
            'name'=>'GUACHAPALA',
            'cod_province'=>'01'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0115',
            'name'=>'CAMILO PONCE ENRÍQUEZ',
            'cod_province'=>'01'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0201',
            'name'=>'GUARANDA',
            'cod_province'=>'02'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0202',
            'name'=>'CHILLANES',
            'cod_province'=>'02'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0203',
            'name'=>'CHIMBO',
            'cod_province'=>'02'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0204',
            'name'=>'ECHEANDÍA',
            'cod_province'=>'02'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0205',
            'name'=>'SAN MIGUEL',
            'cod_province'=>'02'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0206',
            'name'=>'CALUMA',
            'cod_province'=>'02'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0207',
            'name'=>'LAS NAVES',
            'cod_province'=>'02'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0301',
            'name'=>'AZOGUES',
            'cod_province'=>'03'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0302',
            'name'=>'BIBLIÁN',
            'cod_province'=>'03'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0303',
            'name'=>'CAÑAR',
            'cod_province'=>'03'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0304',
            'name'=>'LA TRONCAL',
            'cod_province'=>'03'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0305',
            'name'=>'EL TAMBO',
            'cod_province'=>'03'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0306',
            'name'=>'DÉLEG',
            'cod_province'=>'03'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0307',
            'name'=>'SUSCAL',
            'cod_province'=>'03'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0401',
            'name'=>'TULCÁN',
            'cod_province'=>'04'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0402',
            'name'=>'BOLÍVAR',
            'cod_province'=>'04'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0403',
            'name'=>'ESPEJO',
            'cod_province'=>'04'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0404',
            'name'=>'MIRA',
            'cod_province'=>'04'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0405',
            'name'=>'MONTÚFAR',
            'cod_province'=>'04'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0406',
            'name'=>'SAN PEDRO DE HUACA',
            'cod_province'=>'04'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0501',
            'name'=>'LATACUNGA',
            'cod_province'=>'05'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0502',
            'name'=>'LA MANÁ',
            'cod_province'=>'05'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0503',
            'name'=>'PANGUA',
            'cod_province'=>'05'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0504',
            'name'=>'PUJILI',
            'cod_province'=>'05'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0505',
            'name'=>'SALCEDO',
            'cod_province'=>'05'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0506',
            'name'=>'SAQUISILÍ',
            'cod_province'=>'05'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0507',
            'name'=>'SIGCHOS',
            'cod_province'=>'05'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0601',
            'name'=>'RIOBAMBA',
            'cod_province'=>'06'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0602',
            'name'=>'ALAUSI',
            'cod_province'=>'06'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0603',
            'name'=>'COLTA',
            'cod_province'=>'06'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0604',
            'name'=>'CHAMBO',
            'cod_province'=>'06'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0605',
            'name'=>'CHUNCHI',
            'cod_province'=>'06'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0606',
            'name'=>'GUAMOTE',
            'cod_province'=>'06'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0607',
            'name'=>'GUANO',
            'cod_province'=>'06'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0608',
            'name'=>'PALLATANGA',
            'cod_province'=>'06'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0609',
            'name'=>'PENIPE',
            'cod_province'=>'06'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0610',
            'name'=>'CUMANDÁ',
            'cod_province'=>'06'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0701',
            'name'=>'MACHALA',
            'cod_province'=>'07'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0702',
            'name'=>'ARENILLAS',
            'cod_province'=>'07'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0703',
            'name'=>'ATAHUALPA',
            'cod_province'=>'07'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0704',
            'name'=>'BALSAS',
            'cod_province'=>'07'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0705',
            'name'=>'CHILLA',
            'cod_province'=>'07'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0706',
            'name'=>'EL GUABO',
            'cod_province'=>'07'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0707',
            'name'=>'HUAQUILLAS',
            'cod_province'=>'07'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0708',
            'name'=>'MARCABELÍ',
            'cod_province'=>'07'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0709',
            'name'=>'PASAJE',
            'cod_province'=>'07'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0710',
            'name'=>'PIÑAS',
            'cod_province'=>'07'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0711',
            'name'=>'PORTOVELO',
            'cod_province'=>'07'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0712',
            'name'=>'SANTA ROSA',
            'cod_province'=>'07'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0713',
            'name'=>'ZARUMA',
            'cod_province'=>'07'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0714',
            'name'=>'LAS LAJAS',
            'cod_province'=>'07'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0801',
            'name'=>'ESMERALDAS',
            'cod_province'=>'08'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0802',
            'name'=>'ELOY ALFARO',
            'cod_province'=>'08'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0803',
            'name'=>'MUISNE',
            'cod_province'=>'08'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0804',
            'name'=>'QUININDÉ',
            'cod_province'=>'08'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0805',
            'name'=>'SAN LORENZO',
            'cod_province'=>'08'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0806',
            'name'=>'ATACAMES',
            'cod_province'=>'08'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0807',
            'name'=>'RIOVERDE',
            'cod_province'=>'08'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0808',
            'name'=>'LA CONCORDIA',
            'cod_province'=>'08'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0901',
            'name'=>'GUAYAQUIL',
            'cod_province'=>'09'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0902',
            'name'=>'ALFREDO BAQUERIZO MORENO (JUJÁN)',
            'cod_province'=>'09'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0903',
            'name'=>'BALAO',
            'cod_province'=>'09'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0904',
            'name'=>'BALZAR',
            'cod_province'=>'09'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0905',
            'name'=>'COLIMES',
            'cod_province'=>'09'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0906',
            'name'=>'DAULE',
            'cod_province'=>'09'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0907',
            'name'=>'DURÁN',
            'cod_province'=>'09'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0908',
            'name'=>'EL EMPALME',
            'cod_province'=>'09'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0909',
            'name'=>'EL TRIUNFO',
            'cod_province'=>'09'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0910',
            'name'=>'MILAGRO',
            'cod_province'=>'09'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0911',
            'name'=>'NARANJAL',
            'cod_province'=>'09'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0912',
            'name'=>'NARANJITO',
            'cod_province'=>'09'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0913',
            'name'=>'PALESTINA',
            'cod_province'=>'09'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0914',
            'name'=>'PEDRO CARBO',
            'cod_province'=>'09'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0916',
            'name'=>'SAMBORONDÓN',
            'cod_province'=>'09'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0918',
            'name'=>'SANTA LUCÍA',
            'cod_province'=>'09'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0919',
            'name'=>'SALITRE (URBINA JADO)',
            'cod_province'=>'09'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0920',
            'name'=>'SAN JACINTO DE YAGUACHI',
            'cod_province'=>'09'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0921',
            'name'=>'PLAYAS',
            'cod_province'=>'09'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0922',
            'name'=>'SIMÓN BOLÍVAR',
            'cod_province'=>'09'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0923',
            'name'=>'CORONEL MARCELINO MARIDUEÑA',
            'cod_province'=>'09'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0924',
            'name'=>'LOMAS DE SARGENTILLO',
            'cod_province'=>'09'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0925',
            'name'=>'NOBOL',
            'cod_province'=>'09'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0927',
            'name'=>'GENERAL ANTONIO ELIZALDE',
            'cod_province'=>'09'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'0928',
            'name'=>'ISIDRO AYORA',
            'cod_province'=>'09'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1001',
            'name'=>'IBARRA',
            'cod_province'=>'10'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1002',
            'name'=>'ANTONIO ANTE',
            'cod_province'=>'10'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1003',
            'name'=>'COTACACHI',
            'cod_province'=>'10'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1004',
            'name'=>'OTAVALO',
            'cod_province'=>'10'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1005',
            'name'=>'PIMAMPIRO',
            'cod_province'=>'10'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1006',
            'name'=>'SAN MIGUEL DE URCUQUÍ',
            'cod_province'=>'10'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1101',
            'name'=>'LOJA',
            'cod_province'=>'11'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1102',
            'name'=>'CALVAS',
            'cod_province'=>'11'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1103',
            'name'=>'CATAMAYO',
            'cod_province'=>'11'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1104',
            'name'=>'CELICA',
            'cod_province'=>'11'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1105',
            'name'=>'CHAGUARPAMBA',
            'cod_province'=>'11'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1106',
            'name'=>'ESPÍNDOLA',
            'cod_province'=>'11'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1107',
            'name'=>'GONZANAMÁ',
            'cod_province'=>'11'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1108',
            'name'=>'MACARÁ',
            'cod_province'=>'11'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1109',
            'name'=>'PALTAS',
            'cod_province'=>'11'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1110',
            'name'=>'PUYANGO',
            'cod_province'=>'11'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1111',
            'name'=>'SARAGURO',
            'cod_province'=>'11'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1112',
            'name'=>'SOZORANGA',
            'cod_province'=>'11'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1113',
            'name'=>'ZAPOTILLO',
            'cod_province'=>'11'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1114',
            'name'=>'PINDAL',
            'cod_province'=>'11'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1115',
            'name'=>'QUILANGA',
            'cod_province'=>'11'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1116',
            'name'=>'OLMEDO',
            'cod_province'=>'11'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1201',
            'name'=>'BABAHOYO',
            'cod_province'=>'12'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1202',
            'name'=>'BABA',
            'cod_province'=>'12'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1203',
            'name'=>'MONTALVO',
            'cod_province'=>'12'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1204',
            'name'=>'PUEBLOVIEJO',
            'cod_province'=>'12'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1205',
            'name'=>'QUEVEDO',
            'cod_province'=>'12'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1206',
            'name'=>'URDANETA',
            'cod_province'=>'12'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1207',
            'name'=>'VENTANAS',
            'cod_province'=>'12'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1208',
            'name'=>'VÍNCES',
            'cod_province'=>'12'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1209',
            'name'=>'PALENQUE',
            'cod_province'=>'12'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1210',
            'name'=>'BUENA FÉ',
            'cod_province'=>'12'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1211',
            'name'=>'VALENCIA',
            'cod_province'=>'12'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1212',
            'name'=>'MOCACHE',
            'cod_province'=>'12'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1213',
            'name'=>'QUINSALOMA',
            'cod_province'=>'12'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1301',
            'name'=>'PORTOVIEJO',
            'cod_province'=>'13'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1302',
            'name'=>'BOLÍVAR',
            'cod_province'=>'13'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1303',
            'name'=>'CHONE',
            'cod_province'=>'13'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1304',
            'name'=>'EL CARMEN',
            'cod_province'=>'13'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1305',
            'name'=>'FLAVIO ALFARO',
            'cod_province'=>'13'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1306',
            'name'=>'JIPIJAPA',
            'cod_province'=>'13'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1307',
            'name'=>'JUNÍN',
            'cod_province'=>'13'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1308',
            'name'=>'MANTA',
            'cod_province'=>'13'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1309',
            'name'=>'MONTECRISTI',
            'cod_province'=>'13'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1310',
            'name'=>'PAJÁN',
            'cod_province'=>'13'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1311',
            'name'=>'PICHINCHA',
            'cod_province'=>'13'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1312',
            'name'=>'ROCAFUERTE',
            'cod_province'=>'13'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1313',
            'name'=>'SANTA ANA',
            'cod_province'=>'13'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1314',
            'name'=>'SUCRE',
            'cod_province'=>'13'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1315',
            'name'=>'TOSAGUA',
            'cod_province'=>'13'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1316',
            'name'=>'24 DE MAYO',
            'cod_province'=>'13'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1317',
            'name'=>'PEDERNALES',
            'cod_province'=>'13'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1318',
            'name'=>'OLMEDO',
            'cod_province'=>'13'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1319',
            'name'=>'PUERTO LÓPEZ',
            'cod_province'=>'13'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1320',
            'name'=>'JAMA',
            'cod_province'=>'13'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1321',
            'name'=>'JARAMIJÓ',
            'cod_province'=>'13'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1322',
            'name'=>'SAN VICENTE',
            'cod_province'=>'13'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1401',
            'name'=>'MORONA',
            'cod_province'=>'14'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1402',
            'name'=>'GUALAQUIZA',
            'cod_province'=>'14'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1403',
            'name'=>'LIMÓN INDANZA',
            'cod_province'=>'14'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1404',
            'name'=>'PALORA',
            'cod_province'=>'14'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1405',
            'name'=>'SANTIAGO',
            'cod_province'=>'14'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1406',
            'name'=>'SUCÚA',
            'cod_province'=>'14'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1407',
            'name'=>'HUAMBOYA',
            'cod_province'=>'14'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1408',
            'name'=>'SAN JUAN BOSCO',
            'cod_province'=>'14'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1409',
            'name'=>'TAISHA',
            'cod_province'=>'14'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1410',
            'name'=>'LOGROÑO',
            'cod_province'=>'14'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1411',
            'name'=>'PABLO SEXTO',
            'cod_province'=>'14'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1412',
            'name'=>'TIWINTZA',
            'cod_province'=>'14'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1501',
            'name'=>'TENA',
            'cod_province'=>'15'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1503',
            'name'=>'ARCHIDONA',
            'cod_province'=>'15'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1504',
            'name'=>'EL CHACO',
            'cod_province'=>'15'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1507',
            'name'=>'QUIJOS',
            'cod_province'=>'15'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1509',
            'name'=>'CARLOS JULIO AROSEMENA TOLA',
            'cod_province'=>'15'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1601',
            'name'=>'PASTAZA',
            'cod_province'=>'16'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1602',
            'name'=>'MERA',
            'cod_province'=>'16'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1603',
            'name'=>'SANTA CLARA',
            'cod_province'=>'16'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1604',
            'name'=>'ARAJUNO',
            'cod_province'=>'16'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1701',
            'name'=>'QUITO',
            'cod_province'=>'17'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1702',
            'name'=>'CAYAMBE',
            'cod_province'=>'17'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1703',
            'name'=>'MEJIA',
            'cod_province'=>'17'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1704',
            'name'=>'PEDRO MONCAYO',
            'cod_province'=>'17'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1705',
            'name'=>'RUMIÑAHUI',
            'cod_province'=>'17'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1707',
            'name'=>'SAN MIGUEL DE LOS BANCOS',
            'cod_province'=>'17'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1708',
            'name'=>'PEDRO VICENTE MALDONADO',
            'cod_province'=>'17'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1709',
            'name'=>'PUERTO QUITO',
            'cod_province'=>'17'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1801',
            'name'=>'AMBATO',
            'cod_province'=>'18'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1802',
            'name'=>'BAÑOS DE AGUA SANTA',
            'cod_province'=>'18'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1803',
            'name'=>'CEVALLOS',
            'cod_province'=>'18'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1804',
            'name'=>'MOCHA',
            'cod_province'=>'18'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1805',
            'name'=>'PATATE',
            'cod_province'=>'18'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1806',
            'name'=>'QUERO',
            'cod_province'=>'18'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1807',
            'name'=>'SAN PEDRO DE PELILEO',
            'cod_province'=>'18'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1808',
            'name'=>'SANTIAGO DE PÍLLARO',
            'cod_province'=>'18'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1809',
            'name'=>'TISALEO',
            'cod_province'=>'18'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1901',
            'name'=>'ZAMORA',
            'cod_province'=>'19'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1902',
            'name'=>'CHINCHIPE',
            'cod_province'=>'19'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1903',
            'name'=>'NANGARITZA',
            'cod_province'=>'19'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1904',
            'name'=>'YACUAMBI',
            'cod_province'=>'19'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1905',
            'name'=>'YANTZAZA (YANZATZA)',
            'cod_province'=>'19'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1906',
            'name'=>'EL PANGUI',
            'cod_province'=>'19'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1907',
            'name'=>'CENTINELA DEL CÓNDOR',
            'cod_province'=>'19'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1908',
            'name'=>'PALANDA',
            'cod_province'=>'19'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'1909',
            'name'=>'PAQUISHA',
            'cod_province'=>'19'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'2001',
            'name'=>'SAN CRISTÓBAL',
            'cod_province'=>'20'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'2002',
            'name'=>'ISABELA',
            'cod_province'=>'20'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'2003',
            'name'=>'SANTA CRUZ',
            'cod_province'=>'20'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'2101',
            'name'=>'LAGO AGRIO',
            'cod_province'=>'21'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'2102',
            'name'=>'GONZALO PIZARRO',
            'cod_province'=>'21'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'2103',
            'name'=>'PUTUMAYO',
            'cod_province'=>'21'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'2104',
            'name'=>'SHUSHUFINDI',
            'cod_province'=>'21'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'2105',
            'name'=>'SUCUMBÍOS',
            'cod_province'=>'21'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'2106',
            'name'=>'CASCALES',
            'cod_province'=>'21'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'2107',
            'name'=>'CUYABENO',
            'cod_province'=>'21'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'2201',
            'name'=>'ORELLANA',
            'cod_province'=>'22'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'2202',
            'name'=>'AGUARICO',
            'cod_province'=>'22'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'2203',
            'name'=>'LA JOYA DE LOS SACHAS',
            'cod_province'=>'22'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'2204',
            'name'=>'LORETO',
            'cod_province'=>'22'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'2301',
            'name'=>'SANTO DOMINGO',
            'cod_province'=>'23'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'2401',
            'name'=>'SANTA ELENA',
            'cod_province'=>'24'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'2402',
            'name'=>'LA LIBERTAD',
            'cod_province'=>'24'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'2403',
            'name'=>'SALINAS',
            'cod_province'=>'24'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'9001',
            'name'=>'LAS GOLONDRINAS',
            'cod_province'=>'90'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'9003',
            'name'=>'MANGA DEL CURA',
            'cod_province'=>'90'
        ]);
        DB::table('cantones')->insert([
            'cod_canton'=>'9004',
            'name'=>'EL PIEDRERO',
            'cod_province'=>'90'
        ]);
        /*Insert Parroquias*/
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010101',
            'name'=>'BELLAVISTA',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010102',
            'name'=>'CAÑARIBAMBA',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010103',
            'name'=>'EL BATÁN',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010104',
            'name'=>'EL SAGRARIO',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010105',
            'name'=>'EL VECINO',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010106',
            'name'=>'GIL RAMÍREZ DÁVALOS',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010107',
            'name'=>'HUAYNACÁPAC',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010108',
            'name'=>'MACHÁNGARA',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010109',
            'name'=>'MONAY',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010110',
            'name'=>'SAN BLAS',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010111',
            'name'=>'SAN SEBASTIÁN',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010112',
            'name'=>'SUCRE',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010113',
            'name'=>'TOTORACOCHA',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010114',
            'name'=>'YANUNCAY',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010115',
            'name'=>'HERMANO MIGUEL',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010150',
            'name'=>'CUENCA',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010151',
            'name'=>'BAÑOS',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010152',
            'name'=>'CUMBE',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010153',
            'name'=>'CHAUCHA',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010154',
            'name'=>'CHECA (JIDCAY)',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010155',
            'name'=>'CHIQUINTAD',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010156',
            'name'=>'LLACAO',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010157',
            'name'=>'MOLLETURO',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010158',
            'name'=>'NULTI',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010159',
            'name'=>'OCTAVIO CORDERO PALACIOS (SANTA ROSA)',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010160',
            'name'=>'PACCHA',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010161',
            'name'=>'QUINGEO',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010162',
            'name'=>'RICAURTE',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010163',
            'name'=>'SAN JOAQUÍN',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010164',
            'name'=>'SANTA ANA',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010165',
            'name'=>'SAYAUSÍ',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010166',
            'name'=>'SIDCAY',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010167',
            'name'=>'SININCAY',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010168',
            'name'=>'TARQUI',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010169',
            'name'=>'TURI',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010170',
            'name'=>'VALLE',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010171',
            'name'=>'VICTORIA DEL PORTETE (IRQUIS)',
            'cod_canton'=>'0101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010250',
            'name'=>'GIRÓN',
            'cod_canton'=>'0102'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010251',
            'name'=>'ASUNCIÓN',
            'cod_canton'=>'0102'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010252',
            'name'=>'SAN GERARDO',
            'cod_canton'=>'0102'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010350',
            'name'=>'GUALACEO',
            'cod_canton'=>'0103'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010351',
            'name'=>'CHORDELEG',
            'cod_canton'=>'0103'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010352',
            'name'=>'DANIEL CÓRDOVA TORAL (EL ORIENTE)',
            'cod_canton'=>'0103'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010353',
            'name'=>'JADÁN',
            'cod_canton'=>'0103'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010354',
            'name'=>'MARIANO MORENO',
            'cod_canton'=>'0103'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010355',
            'name'=>'PRINCIPAL',
            'cod_canton'=>'0103'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010356',
            'name'=>'REMIGIO CRESPO TORAL (GÚLAG)',
            'cod_canton'=>'0103'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010357',
            'name'=>'SAN JUAN',
            'cod_canton'=>'0103'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010358',
            'name'=>'ZHIDMAD',
            'cod_canton'=>'0103'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010359',
            'name'=>'LUIS CORDERO VEGA',
            'cod_canton'=>'0103'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010360',
            'name'=>'SIMÓN BOLÍVAR (CAB. EN GAÑANZOL)',
            'cod_canton'=>'0103'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010450',
            'name'=>'NABÓN',
            'cod_canton'=>'0104'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010451',
            'name'=>'COCHAPATA',
            'cod_canton'=>'0104'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010452',
            'name'=>'EL PROGRESO (CAB.EN ZHOTA)',
            'cod_canton'=>'0104'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010453',
            'name'=>'LAS NIEVES (CHAYA)',
            'cod_canton'=>'0104'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010454',
            'name'=>'OÑA',
            'cod_canton'=>'0104'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010550',
            'name'=>'PAUTE',
            'cod_canton'=>'0105'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010551',
            'name'=>'AMALUZA',
            'cod_canton'=>'0105'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010552',
            'name'=>'BULÁN (JOSÉ VÍCTOR IZQUIERDO)',
            'cod_canton'=>'0105'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010553',
            'name'=>'CHICÁN (GUILLERMO ORTEGA)',
            'cod_canton'=>'0105'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010554',
            'name'=>'EL CABO',
            'cod_canton'=>'0105'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010555',
            'name'=>'GUACHAPALA',
            'cod_canton'=>'0105'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010556',
            'name'=>'GUARAINAG',
            'cod_canton'=>'0105'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010557',
            'name'=>'PALMAS',
            'cod_canton'=>'0105'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010558',
            'name'=>'PAN',
            'cod_canton'=>'0105'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010559',
            'name'=>'SAN CRISTÓBAL (CARLOS ORDÓÑEZ LAZO)',
            'cod_canton'=>'0105'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010560',
            'name'=>'SEVILLA DE ORO',
            'cod_canton'=>'0105'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010561',
            'name'=>'TOMEBAMBA',
            'cod_canton'=>'0105'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010562',
            'name'=>'DUG DUG',
            'cod_canton'=>'0105'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010650',
            'name'=>'PUCARÁ',
            'cod_canton'=>'0106'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010651',
            'name'=>'CAMILO PONCE ENRÍQUEZ (CAB. EN RÍO 7 DE MOLLEPONGO)',
            'cod_canton'=>'0106'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010652',
            'name'=>'SAN RAFAEL DE SHARUG',
            'cod_canton'=>'0106'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010750',
            'name'=>'SAN FERNANDO',
            'cod_canton'=>'0107'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010751',
            'name'=>'CHUMBLÍN',
            'cod_canton'=>'0107'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010850',
            'name'=>'SANTA ISABEL (CHAGUARURCO)',
            'cod_canton'=>'0108'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010851',
            'name'=>'ABDÓN CALDERÓN (LA UNIÓN)',
            'cod_canton'=>'0108'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010852',
            'name'=>'EL CARMEN DE PIJILÍ',
            'cod_canton'=>'0108'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010853',
            'name'=>'ZHAGLLI (SHAGLLI)',
            'cod_canton'=>'0108'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010854',
            'name'=>'SAN SALVADOR DE CAÑARIBAMBA',
            'cod_canton'=>'0108'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010950',
            'name'=>'SIGSIG',
            'cod_canton'=>'0109'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010951',
            'name'=>'CUCHIL (CUTCHIL)',
            'cod_canton'=>'0109'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010952',
            'name'=>'GIMA',
            'cod_canton'=>'0109'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010953',
            'name'=>'GUEL',
            'cod_canton'=>'0109'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010954',
            'name'=>'LUDO',
            'cod_canton'=>'0109'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010955',
            'name'=>'SAN BARTOLOMÉ',
            'cod_canton'=>'0109'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'010956',
            'name'=>'SAN JOSÉ DE RARANGA',
            'cod_canton'=>'0109'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'011050',
            'name'=>'SAN FELIPE DE OÑA CABECERA CANTONAL',
            'cod_canton'=>'0110'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'011051',
            'name'=>'SUSUDEL',
            'cod_canton'=>'0110'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'011150',
            'name'=>'CHORDELEG',
            'cod_canton'=>'0111'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'011151',
            'name'=>'PRINCIPAL',
            'cod_canton'=>'0111'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'011152',
            'name'=>'LA UNIÓN',
            'cod_canton'=>'0111'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'011153',
            'name'=>'LUIS GALARZA ORELLANA (CAB.EN DELEGSOL)',
            'cod_canton'=>'0111'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'011154',
            'name'=>'SAN MARTÍN DE PUZHIO',
            'cod_canton'=>'0111'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'011250',
            'name'=>'EL PAN',
            'cod_canton'=>'0112'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'011251',
            'name'=>'AMALUZA',
            'cod_canton'=>'0112'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'011252',
            'name'=>'PALMAS',
            'cod_canton'=>'0112'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'011253',
            'name'=>'SAN VICENTE',
            'cod_canton'=>'0112'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'011350',
            'name'=>'SEVILLA DE ORO',
            'cod_canton'=>'0113'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'011351',
            'name'=>'AMALUZA',
            'cod_canton'=>'0113'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'011352',
            'name'=>'PALMAS',
            'cod_canton'=>'0113'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'011450',
            'name'=>'GUACHAPALA',
            'cod_canton'=>'0114'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'011550',
            'name'=>'CAMILO PONCE ENRÍQUEZ',
            'cod_canton'=>'0115'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'011551',
            'name'=>'EL CARMEN DE PIJILÍ',
            'cod_canton'=>'0115'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020101',
            'name'=>'ÁNGEL POLIBIO CHÁVES',
            'cod_canton'=>'0201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020102',
            'name'=>'GABRIEL IGNACIO VEINTIMILLA',
            'cod_canton'=>'0201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020103',
            'name'=>'GUANUJO',
            'cod_canton'=>'0201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020150',
            'name'=>'GUARANDA',
            'cod_canton'=>'0201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020151',
            'name'=>'FACUNDO VELA',
            'cod_canton'=>'0201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020152',
            'name'=>'GUANUJO',
            'cod_canton'=>'0201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020153',
            'name'=>'JULIO E. MORENO (CATANAHUÁN GRANDE)',
            'cod_canton'=>'0201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020154',
            'name'=>'LAS NAVES',
            'cod_canton'=>'0201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020155',
            'name'=>'SALINAS',
            'cod_canton'=>'0201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020156',
            'name'=>'SAN LORENZO',
            'cod_canton'=>'0201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020157',
            'name'=>'SAN SIMÓN (YACOTO)',
            'cod_canton'=>'0201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020158',
            'name'=>'SANTA FÉ (SANTA FÉ)',
            'cod_canton'=>'0201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020159',
            'name'=>'SIMIÁTUG',
            'cod_canton'=>'0201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020160',
            'name'=>'SAN LUIS DE PAMBIL',
            'cod_canton'=>'0201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020250',
            'name'=>'CHILLANES',
            'cod_canton'=>'0202'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020251',
            'name'=>'SAN JOSÉ DEL TAMBO (TAMBOPAMBA)',
            'cod_canton'=>'0202'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020350',
            'name'=>'SAN JOSÉ DE CHIMBO',
            'cod_canton'=>'0203'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020351',
            'name'=>'ASUNCIÓN (ASANCOTO)',
            'cod_canton'=>'0203'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020352',
            'name'=>'CALUMA',
            'cod_canton'=>'0203'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020353',
            'name'=>'MAGDALENA (CHAPACOTO)',
            'cod_canton'=>'0203'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020354',
            'name'=>'SAN SEBASTIÁN',
            'cod_canton'=>'0203'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020355',
            'name'=>'TELIMBELA',
            'cod_canton'=>'0203'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020450',
            'name'=>'ECHEANDÍA',
            'cod_canton'=>'0204'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020550',
            'name'=>'SAN MIGUEL',
            'cod_canton'=>'0205'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020551',
            'name'=>'BALSAPAMBA',
            'cod_canton'=>'0205'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020552',
            'name'=>'BILOVÁN',
            'cod_canton'=>'0205'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020553',
            'name'=>'RÉGULO DE MORA',
            'cod_canton'=>'0205'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020554',
            'name'=>'SAN PABLO (SAN PABLO DE ATENAS)',
            'cod_canton'=>'0205'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020555',
            'name'=>'SANTIAGO',
            'cod_canton'=>'0205'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020556',
            'name'=>'SAN VICENTE',
            'cod_canton'=>'0205'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020650',
            'name'=>'CALUMA',
            'cod_canton'=>'0206'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020701',
            'name'=>'LAS MERCEDES',
            'cod_canton'=>'0207'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020702',
            'name'=>'LAS NAVES',
            'cod_canton'=>'0207'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'020750',
            'name'=>'LAS NAVES',
            'cod_canton'=>'0207'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030101',
            'name'=>'AURELIO BAYAS MARTÍNEZ',
            'cod_canton'=>'0301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030102',
            'name'=>'AZOGUES',
            'cod_canton'=>'0301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030103',
            'name'=>'BORRERO',
            'cod_canton'=>'0301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030104',
            'name'=>'SAN FRANCISCO',
            'cod_canton'=>'0301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030150',
            'name'=>'AZOGUES',
            'cod_canton'=>'0301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030151',
            'name'=>'COJITAMBO',
            'cod_canton'=>'0301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030152',
            'name'=>'DÉLEG',
            'cod_canton'=>'0301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030153',
            'name'=>'GUAPÁN',
            'cod_canton'=>'0301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030154',
            'name'=>'JAVIER LOYOLA (CHUQUIPATA)',
            'cod_canton'=>'0301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030155',
            'name'=>'LUIS CORDERO',
            'cod_canton'=>'0301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030156',
            'name'=>'PINDILIG',
            'cod_canton'=>'0301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030157',
            'name'=>'RIVERA',
            'cod_canton'=>'0301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030158',
            'name'=>'SAN MIGUEL',
            'cod_canton'=>'0301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030159',
            'name'=>'SOLANO',
            'cod_canton'=>'0301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030160',
            'name'=>'TADAY',
            'cod_canton'=>'0301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030250',
            'name'=>'BIBLIÁN',
            'cod_canton'=>'0302'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030251',
            'name'=>'NAZÓN (CAB. EN PAMPA DE DOMÍNGUEZ)',
            'cod_canton'=>'0302'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030252',
            'name'=>'SAN FRANCISCO DE SAGEO',
            'cod_canton'=>'0302'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030253',
            'name'=>'TURUPAMBA',
            'cod_canton'=>'0302'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030254',
            'name'=>'JERUSALÉN',
            'cod_canton'=>'0302'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030350',
            'name'=>'CAÑAR',
            'cod_canton'=>'0303'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030351',
            'name'=>'CHONTAMARCA',
            'cod_canton'=>'0303'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030352',
            'name'=>'CHOROCOPTE',
            'cod_canton'=>'0303'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030353',
            'name'=>'GENERAL MORALES (SOCARTE)',
            'cod_canton'=>'0303'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030354',
            'name'=>'GUALLETURO',
            'cod_canton'=>'0303'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030355',
            'name'=>'HONORATO VÁSQUEZ (TAMBO VIEJO)',
            'cod_canton'=>'0303'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030356',
            'name'=>'INGAPIRCA',
            'cod_canton'=>'0303'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030357',
            'name'=>'JUNCAL',
            'cod_canton'=>'0303'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030358',
            'name'=>'SAN ANTONIO',
            'cod_canton'=>'0303'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030359',
            'name'=>'SUSCAL',
            'cod_canton'=>'0303'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030360',
            'name'=>'TAMBO',
            'cod_canton'=>'0303'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030361',
            'name'=>'ZHUD',
            'cod_canton'=>'0303'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030362',
            'name'=>'VENTURA',
            'cod_canton'=>'0303'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030363',
            'name'=>'DUCUR',
            'cod_canton'=>'0303'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030450',
            'name'=>'LA TRONCAL',
            'cod_canton'=>'0304'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030451',
            'name'=>'MANUEL J. CALLE',
            'cod_canton'=>'0304'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030452',
            'name'=>'PANCHO NEGRO',
            'cod_canton'=>'0304'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030550',
            'name'=>'EL TAMBO',
            'cod_canton'=>'0305'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030650',
            'name'=>'DÉLEG',
            'cod_canton'=>'0306'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030651',
            'name'=>'SOLANO',
            'cod_canton'=>'0306'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'030750',
            'name'=>'SUSCAL',
            'cod_canton'=>'0307'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040101',
            'name'=>'GONZÁLEZ SUÁREZ',
            'cod_canton'=>'0401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040102',
            'name'=>'TULCÁN',
            'cod_canton'=>'0401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040150',
            'name'=>'TULCÁN',
            'cod_canton'=>'0401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040151',
            'name'=>'EL CARMELO (EL PUN)',
            'cod_canton'=>'0401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040152',
            'name'=>'HUACA',
            'cod_canton'=>'0401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040153',
            'name'=>'JULIO ANDRADE (OREJUELA)',
            'cod_canton'=>'0401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040154',
            'name'=>'MALDONADO',
            'cod_canton'=>'0401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040155',
            'name'=>'PIOTER',
            'cod_canton'=>'0401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040156',
            'name'=>'TOBAR DONOSO (LA BOCANA DE CAMUMBÍ)',
            'cod_canton'=>'0401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040157',
            'name'=>'TUFIÑO',
            'cod_canton'=>'0401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040158',
            'name'=>'URBINA (TAYA)',
            'cod_canton'=>'0401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040159',
            'name'=>'EL CHICAL',
            'cod_canton'=>'0401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040160',
            'name'=>'MARISCAL SUCRE',
            'cod_canton'=>'0401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040161',
            'name'=>'SANTA MARTHA DE CUBA',
            'cod_canton'=>'0401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040250',
            'name'=>'BOLÍVAR',
            'cod_canton'=>'0402'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040251',
            'name'=>'GARCÍA MORENO',
            'cod_canton'=>'0402'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040252',
            'name'=>'LOS ANDES',
            'cod_canton'=>'0402'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040253',
            'name'=>'MONTE OLIVO',
            'cod_canton'=>'0402'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040254',
            'name'=>'SAN VICENTE DE PUSIR',
            'cod_canton'=>'0402'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040255',
            'name'=>'SAN RAFAEL',
            'cod_canton'=>'0402'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040301',
            'name'=>'EL ÁNGEL',
            'cod_canton'=>'0403'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040302',
            'name'=>'27 DE SEPTIEMBRE',
            'cod_canton'=>'0403'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040350',
            'name'=>'EL ANGEL',
            'cod_canton'=>'0403'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040351',
            'name'=>'EL GOALTAL',
            'cod_canton'=>'0403'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040352',
            'name'=>'LA LIBERTAD (ALIZO)',
            'cod_canton'=>'0403'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040353',
            'name'=>'SAN ISIDRO',
            'cod_canton'=>'0403'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040450',
            'name'=>'MIRA (CHONTAHUASI)',
            'cod_canton'=>'0404'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040451',
            'name'=>'CONCEPCIÓN',
            'cod_canton'=>'0404'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040452',
            'name'=>'JIJÓN Y CAAMAÑO (CAB. EN RÍO BLANCO)',
            'cod_canton'=>'0404'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040453',
            'name'=>'JUAN MONTALVO (SAN IGNACIO DE QUIL)',
            'cod_canton'=>'0404'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040501',
            'name'=>'GONZÁLEZ SUÁREZ',
            'cod_canton'=>'0405'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040502',
            'name'=>'SAN JOSÉ',
            'cod_canton'=>'0405'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040550',
            'name'=>'SAN GABRIEL',
            'cod_canton'=>'0405'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040551',
            'name'=>'CRISTÓBAL COLÓN',
            'cod_canton'=>'0405'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040552',
            'name'=>'CHITÁN DE NAVARRETE',
            'cod_canton'=>'0405'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040553',
            'name'=>'FERNÁNDEZ SALVADOR',
            'cod_canton'=>'0405'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040554',
            'name'=>'LA PAZ',
            'cod_canton'=>'0405'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040555',
            'name'=>'PIARTAL',
            'cod_canton'=>'0405'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040650',
            'name'=>'HUACA',
            'cod_canton'=>'0406'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'040651',
            'name'=>'MARISCAL SUCRE',
            'cod_canton'=>'0406'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050101',
            'name'=>'ELOY ALFARO (SAN FELIPE)',
            'cod_canton'=>'0501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050102',
            'name'=>'IGNACIO FLORES (PARQUE FLORES)',
            'cod_canton'=>'0501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050103',
            'name'=>'JUAN MONTALVO (SAN SEBASTIÁN)',
            'cod_canton'=>'0501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050104',
            'name'=>'LA MATRIZ',
            'cod_canton'=>'0501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050105',
            'name'=>'SAN BUENAVENTURA',
            'cod_canton'=>'0501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050150',
            'name'=>'LATACUNGA',
            'cod_canton'=>'0501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050151',
            'name'=>'ALAQUES (ALÁQUEZ)',
            'cod_canton'=>'0501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050152',
            'name'=>'BELISARIO QUEVEDO (GUANAILÍN)',
            'cod_canton'=>'0501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050153',
            'name'=>'GUAITACAMA (GUAYTACAMA)',
            'cod_canton'=>'0501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050154',
            'name'=>'JOSEGUANGO BAJO',
            'cod_canton'=>'0501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050155',
            'name'=>'LAS PAMPAS',
            'cod_canton'=>'0501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050156',
            'name'=>'MULALÓ',
            'cod_canton'=>'0501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050157',
            'name'=>'11 DE NOVIEMBRE (ILINCHISI)',
            'cod_canton'=>'0501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050158',
            'name'=>'POALÓ',
            'cod_canton'=>'0501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050159',
            'name'=>'SAN JUAN DE PASTOCALLE',
            'cod_canton'=>'0501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050160',
            'name'=>'SIGCHOS',
            'cod_canton'=>'0501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050161',
            'name'=>'TANICUCHÍ',
            'cod_canton'=>'0501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050162',
            'name'=>'TOACASO',
            'cod_canton'=>'0501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050163',
            'name'=>'PALO QUEMADO',
            'cod_canton'=>'0501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050201',
            'name'=>'EL CARMEN',
            'cod_canton'=>'0502'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050202',
            'name'=>'LA MANÁ',
            'cod_canton'=>'0502'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050203',
            'name'=>'EL TRIUNFO',
            'cod_canton'=>'0502'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050250',
            'name'=>'LA MANÁ',
            'cod_canton'=>'0502'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050251',
            'name'=>'GUASAGANDA (CAB.EN GUASAGANDA',
            'cod_canton'=>'0502'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050252',
            'name'=>'PUCAYACU',
            'cod_canton'=>'0502'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050350',
            'name'=>'EL CORAZÓN',
            'cod_canton'=>'0503'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050351',
            'name'=>'MORASPUNGO',
            'cod_canton'=>'0503'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050352',
            'name'=>'PINLLOPATA',
            'cod_canton'=>'0503'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050353',
            'name'=>'RAMÓN CAMPAÑA',
            'cod_canton'=>'0503'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050450',
            'name'=>'PUJILÍ',
            'cod_canton'=>'0504'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050451',
            'name'=>'ANGAMARCA',
            'cod_canton'=>'0504'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050452',
            'name'=>'CHUCCHILÁN (CHUGCHILÁN)',
            'cod_canton'=>'0504'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050453',
            'name'=>'GUANGAJE',
            'cod_canton'=>'0504'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050454',
            'name'=>'ISINLIBÍ (ISINLIVÍ)',
            'cod_canton'=>'0504'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050455',
            'name'=>'LA VICTORIA',
            'cod_canton'=>'0504'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050456',
            'name'=>'PILALÓ',
            'cod_canton'=>'0504'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050457',
            'name'=>'TINGO',
            'cod_canton'=>'0504'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050458',
            'name'=>'ZUMBAHUA',
            'cod_canton'=>'0504'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050550',
            'name'=>'SAN MIGUEL',
            'cod_canton'=>'0505'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050551',
            'name'=>'ANTONIO JOSÉ HOLGUÍN (SANTA LUCÍA)',
            'cod_canton'=>'0505'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050552',
            'name'=>'CUSUBAMBA',
            'cod_canton'=>'0505'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050553',
            'name'=>'MULALILLO',
            'cod_canton'=>'0505'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050554',
            'name'=>'MULLIQUINDIL (SANTA ANA)',
            'cod_canton'=>'0505'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050555',
            'name'=>'PANSALEO',
            'cod_canton'=>'0505'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050650',
            'name'=>'SAQUISILÍ',
            'cod_canton'=>'0506'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050651',
            'name'=>'CANCHAGUA',
            'cod_canton'=>'0506'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050652',
            'name'=>'CHANTILÍN',
            'cod_canton'=>'0506'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050653',
            'name'=>'COCHAPAMBA',
            'cod_canton'=>'0506'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050750',
            'name'=>'SIGCHOS',
            'cod_canton'=>'0507'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050751',
            'name'=>'CHUGCHILLÁN',
            'cod_canton'=>'0507'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050752',
            'name'=>'ISINLIVÍ',
            'cod_canton'=>'0507'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050753',
            'name'=>'LAS PAMPAS',
            'cod_canton'=>'0507'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'050754',
            'name'=>'PALO QUEMADO',
            'cod_canton'=>'0507'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060101',
            'name'=>'LIZARZABURU',
            'cod_canton'=>'0601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060102',
            'name'=>'MALDONADO',
            'cod_canton'=>'0601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060103',
            'name'=>'VELASCO',
            'cod_canton'=>'0601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060104',
            'name'=>'VELOZ',
            'cod_canton'=>'0601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060105',
            'name'=>'YARUQUÍES',
            'cod_canton'=>'0601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060150',
            'name'=>'RIOBAMBA',
            'cod_canton'=>'0601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060151',
            'name'=>'CACHA (CAB. EN MACHÁNGARA)',
            'cod_canton'=>'0601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060152',
            'name'=>'CALPI',
            'cod_canton'=>'0601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060153',
            'name'=>'CUBIJÍES',
            'cod_canton'=>'0601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060154',
            'name'=>'FLORES',
            'cod_canton'=>'0601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060155',
            'name'=>'LICÁN',
            'cod_canton'=>'0601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060156',
            'name'=>'LICTO',
            'cod_canton'=>'0601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060157',
            'name'=>'PUNGALÁ',
            'cod_canton'=>'0601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060158',
            'name'=>'PUNÍN',
            'cod_canton'=>'0601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060159',
            'name'=>'QUIMIAG',
            'cod_canton'=>'0601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060160',
            'name'=>'SAN JUAN',
            'cod_canton'=>'0601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060161',
            'name'=>'SAN LUIS',
            'cod_canton'=>'0601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060250',
            'name'=>'ALAUSÍ',
            'cod_canton'=>'0602'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060251',
            'name'=>'ACHUPALLAS',
            'cod_canton'=>'0602'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060252',
            'name'=>'CUMANDÁ',
            'cod_canton'=>'0602'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060253',
            'name'=>'GUASUNTOS',
            'cod_canton'=>'0602'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060254',
            'name'=>'HUIGRA',
            'cod_canton'=>'0602'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060255',
            'name'=>'MULTITUD',
            'cod_canton'=>'0602'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060256',
            'name'=>'PISTISHÍ (NARIZ DEL DIABLO)',
            'cod_canton'=>'0602'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060257',
            'name'=>'PUMALLACTA',
            'cod_canton'=>'0602'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060258',
            'name'=>'SEVILLA',
            'cod_canton'=>'0602'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060259',
            'name'=>'SIBAMBE',
            'cod_canton'=>'0602'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060260',
            'name'=>'TIXÁN',
            'cod_canton'=>'0602'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060301',
            'name'=>'CAJABAMBA',
            'cod_canton'=>'0603'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060302',
            'name'=>'SICALPA',
            'cod_canton'=>'0603'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060350',
            'name'=>'VILLA LA UNIÓN (CAJABAMBA)',
            'cod_canton'=>'0603'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060351',
            'name'=>'CAÑI',
            'cod_canton'=>'0603'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060352',
            'name'=>'COLUMBE',
            'cod_canton'=>'0603'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060353',
            'name'=>'JUAN DE VELASCO (PANGOR)',
            'cod_canton'=>'0603'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060354',
            'name'=>'SANTIAGO DE QUITO (CAB. EN SAN ANTONIO DE QUITO)',
            'cod_canton'=>'0603'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060450',
            'name'=>'CHAMBO',
            'cod_canton'=>'0604'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060550',
            'name'=>'CHUNCHI',
            'cod_canton'=>'0605'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060551',
            'name'=>'CAPZOL',
            'cod_canton'=>'0605'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060552',
            'name'=>'COMPUD',
            'cod_canton'=>'0605'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060553',
            'name'=>'GONZOL',
            'cod_canton'=>'0605'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060554',
            'name'=>'LLAGOS',
            'cod_canton'=>'0605'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060650',
            'name'=>'GUAMOTE',
            'cod_canton'=>'0606'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060651',
            'name'=>'CEBADAS',
            'cod_canton'=>'0606'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060652',
            'name'=>'PALMIRA',
            'cod_canton'=>'0606'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060701',
            'name'=>'EL ROSARIO',
            'cod_canton'=>'0607'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060702',
            'name'=>'LA MATRIZ',
            'cod_canton'=>'0607'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060750',
            'name'=>'GUANO',
            'cod_canton'=>'0607'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060751',
            'name'=>'GUANANDO',
            'cod_canton'=>'0607'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060752',
            'name'=>'ILAPO',
            'cod_canton'=>'0607'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060753',
            'name'=>'LA PROVIDENCIA',
            'cod_canton'=>'0607'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060754',
            'name'=>'SAN ANDRÉS',
            'cod_canton'=>'0607'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060755',
            'name'=>'SAN GERARDO DE PACAICAGUÁN',
            'cod_canton'=>'0607'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060756',
            'name'=>'SAN ISIDRO DE PATULÚ',
            'cod_canton'=>'0607'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060757',
            'name'=>'SAN JOSÉ DEL CHAZO',
            'cod_canton'=>'0607'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060758',
            'name'=>'SANTA FÉ DE GALÁN',
            'cod_canton'=>'0607'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060759',
            'name'=>'VALPARAÍSO',
            'cod_canton'=>'0607'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060850',
            'name'=>'PALLATANGA',
            'cod_canton'=>'0608'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060950',
            'name'=>'PENIPE',
            'cod_canton'=>'0609'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060951',
            'name'=>'EL ALTAR',
            'cod_canton'=>'0609'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060952',
            'name'=>'MATUS',
            'cod_canton'=>'0609'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060953',
            'name'=>'PUELA',
            'cod_canton'=>'0609'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060954',
            'name'=>'SAN ANTONIO DE BAYUSHIG',
            'cod_canton'=>'0609'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060955',
            'name'=>'LA CANDELARIA',
            'cod_canton'=>'0609'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'060956',
            'name'=>'BILBAO (CAB.EN QUILLUYACU)',
            'cod_canton'=>'0609'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'061050',
            'name'=>'CUMANDÁ',
            'cod_canton'=>'0610'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070101',
            'name'=>'LA PROVIDENCIA',
            'cod_canton'=>'0701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070102',
            'name'=>'MACHALA',
            'cod_canton'=>'0701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070103',
            'name'=>'PUERTO BOLÍVAR',
            'cod_canton'=>'0701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070104',
            'name'=>'NUEVE DE MAYO',
            'cod_canton'=>'0701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070105',
            'name'=>'EL CAMBIO',
            'cod_canton'=>'0701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070150',
            'name'=>'MACHALA',
            'cod_canton'=>'0701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070151',
            'name'=>'EL CAMBIO',
            'cod_canton'=>'0701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070152',
            'name'=>'EL RETIRO',
            'cod_canton'=>'0701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070250',
            'name'=>'ARENILLAS',
            'cod_canton'=>'0702'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070251',
            'name'=>'CHACRAS',
            'cod_canton'=>'0702'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070252',
            'name'=>'LA LIBERTAD',
            'cod_canton'=>'0702'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070253',
            'name'=>'LAS LAJAS (CAB. EN LA VICTORIA)',
            'cod_canton'=>'0702'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070254',
            'name'=>'PALMALES',
            'cod_canton'=>'0702'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070255',
            'name'=>'CARCABÓN',
            'cod_canton'=>'0702'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070350',
            'name'=>'PACCHA',
            'cod_canton'=>'0703'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070351',
            'name'=>'AYAPAMBA',
            'cod_canton'=>'0703'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070352',
            'name'=>'CORDONCILLO',
            'cod_canton'=>'0703'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070353',
            'name'=>'MILAGRO',
            'cod_canton'=>'0703'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070354',
            'name'=>'SAN JOSÉ',
            'cod_canton'=>'0703'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070355',
            'name'=>'SAN JUAN DE CERRO AZUL',
            'cod_canton'=>'0703'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070450',
            'name'=>'BALSAS',
            'cod_canton'=>'0704'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070451',
            'name'=>'BELLAMARÍA',
            'cod_canton'=>'0704'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070550',
            'name'=>'CHILLA',
            'cod_canton'=>'0705'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070650',
            'name'=>'EL GUABO',
            'cod_canton'=>'0706'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070651',
            'name'=>'BARBONES (SUCRE)',
            'cod_canton'=>'0706'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070652',
            'name'=>'LA IBERIA',
            'cod_canton'=>'0706'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070653',
            'name'=>'TENDALES (CAB.EN PUERTO TENDALES)',
            'cod_canton'=>'0706'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070654',
            'name'=>'RÍO BONITO',
            'cod_canton'=>'0706'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070701',
            'name'=>'ECUADOR',
            'cod_canton'=>'0707'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070702',
            'name'=>'EL PARAÍSO',
            'cod_canton'=>'0707'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070703',
            'name'=>'HUALTACO',
            'cod_canton'=>'0707'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070704',
            'name'=>'MILTON REYES',
            'cod_canton'=>'0707'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070705',
            'name'=>'UNIÓN LOJANA',
            'cod_canton'=>'0707'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070750',
            'name'=>'HUAQUILLAS',
            'cod_canton'=>'0707'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070850',
            'name'=>'MARCABELÍ',
            'cod_canton'=>'0708'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070851',
            'name'=>'EL INGENIO',
            'cod_canton'=>'0708'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070901',
            'name'=>'BOLÍVAR',
            'cod_canton'=>'0709'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070902',
            'name'=>'LOMA DE FRANCO',
            'cod_canton'=>'0709'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070903',
            'name'=>'OCHOA LEÓN (MATRIZ)',
            'cod_canton'=>'0709'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070904',
            'name'=>'TRES CERRITOS',
            'cod_canton'=>'0709'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070950',
            'name'=>'PASAJE',
            'cod_canton'=>'0709'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070951',
            'name'=>'BUENAVISTA',
            'cod_canton'=>'0709'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070952',
            'name'=>'CASACAY',
            'cod_canton'=>'0709'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070953',
            'name'=>'LA PEAÑA',
            'cod_canton'=>'0709'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070954',
            'name'=>'PROGRESO',
            'cod_canton'=>'0709'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070955',
            'name'=>'UZHCURRUMI',
            'cod_canton'=>'0709'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'070956',
            'name'=>'CAÑAQUEMADA',
            'cod_canton'=>'0709'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071001',
            'name'=>'LA MATRIZ',
            'cod_canton'=>'0710'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071002',
            'name'=>'LA SUSAYA',
            'cod_canton'=>'0710'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071003',
            'name'=>'PIÑAS GRANDE',
            'cod_canton'=>'0710'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071050',
            'name'=>'PIÑAS',
            'cod_canton'=>'0710'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071051',
            'name'=>'CAPIRO (CAB. EN LA CAPILLA DE CAPIRO)',
            'cod_canton'=>'0710'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071052',
            'name'=>'LA BOCANA',
            'cod_canton'=>'0710'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071053',
            'name'=>'MOROMORO (CAB. EN EL VADO)',
            'cod_canton'=>'0710'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071054',
            'name'=>'PIEDRAS',
            'cod_canton'=>'0710'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071055',
            'name'=>'SAN ROQUE (AMBROSIO MALDONADO)',
            'cod_canton'=>'0710'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071056',
            'name'=>'SARACAY',
            'cod_canton'=>'0710'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071150',
            'name'=>'PORTOVELO',
            'cod_canton'=>'0711'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071151',
            'name'=>'CURTINCAPA',
            'cod_canton'=>'0711'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071152',
            'name'=>'MORALES',
            'cod_canton'=>'0711'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071153',
            'name'=>'SALATÍ',
            'cod_canton'=>'0711'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071201',
            'name'=>'SANTA ROSA',
            'cod_canton'=>'0712'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071202',
            'name'=>'PUERTO JELÍ',
            'cod_canton'=>'0712'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071203',
            'name'=>'BALNEARIO JAMBELÍ (SATÉLITE)',
            'cod_canton'=>'0712'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071204',
            'name'=>'JUMÓN (SATÉLITE)',
            'cod_canton'=>'0712'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071205',
            'name'=>'NUEVO SANTA ROSA',
            'cod_canton'=>'0712'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071250',
            'name'=>'SANTA ROSA',
            'cod_canton'=>'0712'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071251',
            'name'=>'BELLAVISTA',
            'cod_canton'=>'0712'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071252',
            'name'=>'JAMBELÍ',
            'cod_canton'=>'0712'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071253',
            'name'=>'LA AVANZADA',
            'cod_canton'=>'0712'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071254',
            'name'=>'SAN ANTONIO',
            'cod_canton'=>'0712'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071255',
            'name'=>'TORATA',
            'cod_canton'=>'0712'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071256',
            'name'=>'VICTORIA',
            'cod_canton'=>'0712'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071257',
            'name'=>'BELLAMARÍA',
            'cod_canton'=>'0712'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071350',
            'name'=>'ZARUMA',
            'cod_canton'=>'0713'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071351',
            'name'=>'ABAÑÍN',
            'cod_canton'=>'0713'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071352',
            'name'=>'ARCAPAMBA',
            'cod_canton'=>'0713'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071353',
            'name'=>'GUANAZÁN',
            'cod_canton'=>'0713'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071354',
            'name'=>'GUIZHAGUIÑA',
            'cod_canton'=>'0713'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071355',
            'name'=>'HUERTAS',
            'cod_canton'=>'0713'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071356',
            'name'=>'MALVAS',
            'cod_canton'=>'0713'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071357',
            'name'=>'MULUNCAY GRANDE',
            'cod_canton'=>'0713'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071358',
            'name'=>'SINSAO',
            'cod_canton'=>'0713'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071359',
            'name'=>'SALVIAS',
            'cod_canton'=>'0713'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071401',
            'name'=>'LA VICTORIA',
            'cod_canton'=>'0714'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071402',
            'name'=>'PLATANILLOS',
            'cod_canton'=>'0714'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071403',
            'name'=>'VALLE HERMOSO',
            'cod_canton'=>'0714'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071450',
            'name'=>'LA VICTORIA',
            'cod_canton'=>'0714'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071451',
            'name'=>'LA LIBERTAD',
            'cod_canton'=>'0714'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071452',
            'name'=>'EL PARAÍSO',
            'cod_canton'=>'0714'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'071453',
            'name'=>'SAN ISIDRO',
            'cod_canton'=>'0714'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080101',
            'name'=>'BARTOLOMÉ RUIZ (CÉSAR FRANCO CARRIÓN)',
            'cod_canton'=>'0801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080102',
            'name'=>'5 DE AGOSTO',
            'cod_canton'=>'0801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080103',
            'name'=>'ESMERALDAS',
            'cod_canton'=>'0801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080104',
            'name'=>'LUIS TELLO (LAS PALMAS)',
            'cod_canton'=>'0801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080105',
            'name'=>'SIMÓN PLATA TORRES',
            'cod_canton'=>'0801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080150',
            'name'=>'ESMERALDAS',
            'cod_canton'=>'0801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080151',
            'name'=>'ATACAMES',
            'cod_canton'=>'0801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080152',
            'name'=>'CAMARONES (CAB. EN SAN VICENTE)',
            'cod_canton'=>'0801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080153',
            'name'=>'CRNEL. CARLOS CONCHA TORRES (CAB.EN HUELE)',
            'cod_canton'=>'0801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080154',
            'name'=>'CHINCA',
            'cod_canton'=>'0801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080155',
            'name'=>'CHONTADURO',
            'cod_canton'=>'0801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080156',
            'name'=>'CHUMUNDÉ',
            'cod_canton'=>'0801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080157',
            'name'=>'LAGARTO',
            'cod_canton'=>'0801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080158',
            'name'=>'LA UNIÓN',
            'cod_canton'=>'0801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080159',
            'name'=>'MAJUA',
            'cod_canton'=>'0801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080160',
            'name'=>'MONTALVO (CAB. EN HORQUETA)',
            'cod_canton'=>'0801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080161',
            'name'=>'RÍO VERDE',
            'cod_canton'=>'0801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080162',
            'name'=>'ROCAFUERTE',
            'cod_canton'=>'0801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080163',
            'name'=>'SAN MATEO',
            'cod_canton'=>'0801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080164',
            'name'=>'SÚA (CAB. EN LA BOCANA)',
            'cod_canton'=>'0801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080165',
            'name'=>'TABIAZO',
            'cod_canton'=>'0801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080166',
            'name'=>'TACHINA',
            'cod_canton'=>'0801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080167',
            'name'=>'TONCHIGÜE',
            'cod_canton'=>'0801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080168',
            'name'=>'VUELTA LARGA',
            'cod_canton'=>'0801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080250',
            'name'=>'VALDEZ (LIMONES)',
            'cod_canton'=>'0802'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080251',
            'name'=>'ANCHAYACU',
            'cod_canton'=>'0802'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080252',
            'name'=>'ATAHUALPA (CAB. EN CAMARONES)',
            'cod_canton'=>'0802'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080253',
            'name'=>'BORBÓN',
            'cod_canton'=>'0802'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080254',
            'name'=>'LA TOLA',
            'cod_canton'=>'0802'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080255',
            'name'=>'LUIS VARGAS TORRES (CAB. EN PLAYA DE ORO)',
            'cod_canton'=>'0802'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080256',
            'name'=>'MALDONADO',
            'cod_canton'=>'0802'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080257',
            'name'=>'PAMPANAL DE BOLÍVAR',
            'cod_canton'=>'0802'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080258',
            'name'=>'SAN FRANCISCO DE ONZOLE',
            'cod_canton'=>'0802'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080259',
            'name'=>'SANTO DOMINGO DE ONZOLE',
            'cod_canton'=>'0802'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080260',
            'name'=>'SELVA ALEGRE',
            'cod_canton'=>'0802'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080261',
            'name'=>'TELEMBÍ',
            'cod_canton'=>'0802'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080262',
            'name'=>'COLÓN ELOY DEL MARÍA',
            'cod_canton'=>'0802'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080263',
            'name'=>'SAN JOSÉ DE CAYAPAS',
            'cod_canton'=>'0802'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080264',
            'name'=>'TIMBIRÉ',
            'cod_canton'=>'0802'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080350',
            'name'=>'MUISNE',
            'cod_canton'=>'0803'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080351',
            'name'=>'BOLÍVAR',
            'cod_canton'=>'0803'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080352',
            'name'=>'DAULE',
            'cod_canton'=>'0803'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080353',
            'name'=>'GALERA',
            'cod_canton'=>'0803'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080354',
            'name'=>'QUINGUE (OLMEDO PERDOMO FRANCO)',
            'cod_canton'=>'0803'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080355',
            'name'=>'SALIMA',
            'cod_canton'=>'0803'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080356',
            'name'=>'SAN FRANCISCO',
            'cod_canton'=>'0803'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080357',
            'name'=>'SAN GREGORIO',
            'cod_canton'=>'0803'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080358',
            'name'=>'SAN JOSÉ DE CHAMANGA (CAB.EN CHAMANGA)',
            'cod_canton'=>'0803'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080450',
            'name'=>'ROSA ZÁRATE (QUININDÉ)',
            'cod_canton'=>'0804'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080451',
            'name'=>'CUBE',
            'cod_canton'=>'0804'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080452',
            'name'=>'CHURA (CHANCAMA) (CAB. EN EL YERBERO)',
            'cod_canton'=>'0804'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080453',
            'name'=>'MALIMPIA',
            'cod_canton'=>'0804'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080454',
            'name'=>'VICHE',
            'cod_canton'=>'0804'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080455',
            'name'=>'LA UNIÓN',
            'cod_canton'=>'0804'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080550',
            'name'=>'SAN LORENZO',
            'cod_canton'=>'0805'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080551',
            'name'=>'ALTO TAMBO (CAB. EN GUADUAL)',
            'cod_canton'=>'0805'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080552',
            'name'=>'ANCÓN (PICHANGAL) (CAB. EN PALMA REAL)',
            'cod_canton'=>'0805'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080553',
            'name'=>'CALDERÓN',
            'cod_canton'=>'0805'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080554',
            'name'=>'CARONDELET',
            'cod_canton'=>'0805'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080555',
            'name'=>'5 DE JUNIO (CAB. EN UIMBI)',
            'cod_canton'=>'0805'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080556',
            'name'=>'CONCEPCIÓN',
            'cod_canton'=>'0805'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080557',
            'name'=>'MATAJE (CAB. EN SANTANDER)',
            'cod_canton'=>'0805'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080558',
            'name'=>'SAN JAVIER DE CACHAVÍ (CAB. EN SAN JAVIER)',
            'cod_canton'=>'0805'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080559',
            'name'=>'SANTA RITA',
            'cod_canton'=>'0805'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080560',
            'name'=>'TAMBILLO',
            'cod_canton'=>'0805'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080561',
            'name'=>'TULULBÍ (CAB. EN RICAURTE)',
            'cod_canton'=>'0805'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080562',
            'name'=>'URBINA',
            'cod_canton'=>'0805'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080650',
            'name'=>'ATACAMES',
            'cod_canton'=>'0806'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080651',
            'name'=>'LA UNIÓN',
            'cod_canton'=>'0806'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080652',
            'name'=>'SÚA (CAB. EN LA BOCANA)',
            'cod_canton'=>'0806'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080653',
            'name'=>'TONCHIGÜE',
            'cod_canton'=>'0806'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080654',
            'name'=>'TONSUPA',
            'cod_canton'=>'0806'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080750',
            'name'=>'RIOVERDE',
            'cod_canton'=>'0807'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080751',
            'name'=>'CHONTADURO',
            'cod_canton'=>'0807'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080752',
            'name'=>'CHUMUNDÉ',
            'cod_canton'=>'0807'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080753',
            'name'=>'LAGARTO',
            'cod_canton'=>'0807'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080754',
            'name'=>'MONTALVO (CAB. EN HORQUETA)',
            'cod_canton'=>'0807'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080755',
            'name'=>'ROCAFUERTE',
            'cod_canton'=>'0807'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080850',
            'name'=>'LA CONCORDIA',
            'cod_canton'=>'0808'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080851',
            'name'=>'MONTERREY',
            'cod_canton'=>'0808'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080852',
            'name'=>'LA VILLEGAS',
            'cod_canton'=>'0808'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'080853',
            'name'=>'PLAN PILOTO',
            'cod_canton'=>'0808'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090101',
            'name'=>'AYACUCHO',
            'cod_canton'=>'0901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090102',
            'name'=>'BOLÍVAR (SAGRARIO)',
            'cod_canton'=>'0901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090103',
            'name'=>'CARBO (CONCEPCIÓN)',
            'cod_canton'=>'0901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090104',
            'name'=>'FEBRES CORDERO',
            'cod_canton'=>'0901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090105',
            'name'=>'GARCÍA MORENO',
            'cod_canton'=>'0901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090106',
            'name'=>'LETAMENDI',
            'cod_canton'=>'0901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090107',
            'name'=>'NUEVE DE OCTUBRE',
            'cod_canton'=>'0901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090108',
            'name'=>'OLMEDO (SAN ALEJO)',
            'cod_canton'=>'0901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090109',
            'name'=>'ROCA',
            'cod_canton'=>'0901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090110',
            'name'=>'ROCAFUERTE',
            'cod_canton'=>'0901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090111',
            'name'=>'SUCRE',
            'cod_canton'=>'0901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090112',
            'name'=>'TARQUI',
            'cod_canton'=>'0901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090113',
            'name'=>'URDANETA',
            'cod_canton'=>'0901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090114',
            'name'=>'XIMENA',
            'cod_canton'=>'0901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090115',
            'name'=>'PASCUALES',
            'cod_canton'=>'0901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090150',
            'name'=>'GUAYAQUIL',
            'cod_canton'=>'0901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090151',
            'name'=>'CHONGÓN',
            'cod_canton'=>'0901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090152',
            'name'=>'JUAN GÓMEZ RENDÓN (PROGRESO)',
            'cod_canton'=>'0901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090153',
            'name'=>'MORRO',
            'cod_canton'=>'0901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090154',
            'name'=>'PASCUALES',
            'cod_canton'=>'0901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090155',
            'name'=>'PLAYAS (GRAL. VILLAMIL)',
            'cod_canton'=>'0901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090156',
            'name'=>'POSORJA',
            'cod_canton'=>'0901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090157',
            'name'=>'PUNÁ',
            'cod_canton'=>'0901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090158',
            'name'=>'TENGUEL',
            'cod_canton'=>'0901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090250',
            'name'=>'ALFREDO BAQUERIZO MORENO (JUJÁN)',
            'cod_canton'=>'0902'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090350',
            'name'=>'BALAO',
            'cod_canton'=>'0903'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090450',
            'name'=>'BALZAR',
            'cod_canton'=>'0904'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090550',
            'name'=>'COLIMES',
            'cod_canton'=>'0905'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090551',
            'name'=>'SAN JACINTO',
            'cod_canton'=>'0905'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090601',
            'name'=>'DAULE',
            'cod_canton'=>'0906'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090602',
            'name'=>'LA AURORA (SATÉLITE)',
            'cod_canton'=>'0906'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090603',
            'name'=>'BANIFE',
            'cod_canton'=>'0906'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090604',
            'name'=>'EMILIANO CAICEDO MARCOS',
            'cod_canton'=>'0906'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090605',
            'name'=>'MAGRO',
            'cod_canton'=>'0906'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090606',
            'name'=>'PADRE JUAN BAUTISTA AGUIRRE',
            'cod_canton'=>'0906'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090607',
            'name'=>'SANTA CLARA',
            'cod_canton'=>'0906'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090608',
            'name'=>'VICENTE PIEDRAHITA',
            'cod_canton'=>'0906'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090650',
            'name'=>'DAULE',
            'cod_canton'=>'0906'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090651',
            'name'=>'ISIDRO AYORA (SOLEDAD)',
            'cod_canton'=>'0906'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090652',
            'name'=>'JUAN BAUTISTA AGUIRRE (LOS TINTOS)',
            'cod_canton'=>'0906'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090653',
            'name'=>'LAUREL',
            'cod_canton'=>'0906'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090654',
            'name'=>'LIMONAL',
            'cod_canton'=>'0906'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090655',
            'name'=>'LOMAS DE SARGENTILLO',
            'cod_canton'=>'0906'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090656',
            'name'=>'LOS LOJAS (ENRIQUE BAQUERIZO MORENO)',
            'cod_canton'=>'0906'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090657',
            'name'=>'PIEDRAHITA (NOBOL)',
            'cod_canton'=>'0906'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090701',
            'name'=>'ELOY ALFARO (DURÁN)',
            'cod_canton'=>'0907'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090702',
            'name'=>'EL RECREO',
            'cod_canton'=>'0907'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090750',
            'name'=>'ELOY ALFARO (DURÁN)',
            'cod_canton'=>'0907'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090850',
            'name'=>'VELASCO IBARRA (EL EMPALME)',
            'cod_canton'=>'0908'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090851',
            'name'=>'GUAYAS (PUEBLO NUEVO)',
            'cod_canton'=>'0908'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090852',
            'name'=>'EL ROSARIO',
            'cod_canton'=>'0908'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'090950',
            'name'=>'EL TRIUNFO',
            'cod_canton'=>'0909'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091050',
            'name'=>'MILAGRO',
            'cod_canton'=>'0910'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091051',
            'name'=>'CHOBO',
            'cod_canton'=>'0910'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091052',
            'name'=>'GENERAL ELIZALDE (BUCAY)',
            'cod_canton'=>'0910'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091053',
            'name'=>'MARISCAL SUCRE (HUAQUES)',
            'cod_canton'=>'0910'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091054',
            'name'=>'ROBERTO ASTUDILLO (CAB. EN CRUCE DE VENECIA)',
            'cod_canton'=>'0910'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091150',
            'name'=>'NARANJAL',
            'cod_canton'=>'0911'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091151',
            'name'=>'JESÚS MARÍA',
            'cod_canton'=>'0911'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091152',
            'name'=>'SAN CARLOS',
            'cod_canton'=>'0911'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091153',
            'name'=>'SANTA ROSA DE FLANDES',
            'cod_canton'=>'0911'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091154',
            'name'=>'TAURA',
            'cod_canton'=>'0911'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091250',
            'name'=>'NARANJITO',
            'cod_canton'=>'0912'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091350',
            'name'=>'PALESTINA',
            'cod_canton'=>'0913'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091450',
            'name'=>'PEDRO CARBO',
            'cod_canton'=>'0914'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091451',
            'name'=>'VALLE DE LA VIRGEN',
            'cod_canton'=>'0914'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091452',
            'name'=>'SABANILLA',
            'cod_canton'=>'0914'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091601',
            'name'=>'SAMBORONDÓN',
            'cod_canton'=>'0916'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091602',
            'name'=>'LA PUNTILLA (SATÉLITE)',
            'cod_canton'=>'0916'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091650',
            'name'=>'SAMBORONDÓN',
            'cod_canton'=>'0916'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091651',
            'name'=>'TARIFA',
            'cod_canton'=>'0916'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091850',
            'name'=>'SANTA LUCÍA',
            'cod_canton'=>'0918'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091901',
            'name'=>'BOCANA',
            'cod_canton'=>'0919'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091902',
            'name'=>'CANDILEJOS',
            'cod_canton'=>'0919'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091903',
            'name'=>'CENTRAL',
            'cod_canton'=>'0919'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091904',
            'name'=>'PARAÍSO',
            'cod_canton'=>'0919'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091905',
            'name'=>'SAN MATEO',
            'cod_canton'=>'0919'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091950',
            'name'=>'EL SALITRE (LAS RAMAS)',
            'cod_canton'=>'0919'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091951',
            'name'=>'GRAL. VERNAZA (DOS ESTEROS)',
            'cod_canton'=>'0919'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091952',
            'name'=>'LA VICTORIA (ÑAUZA)',
            'cod_canton'=>'0919'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'091953',
            'name'=>'JUNQUILLAL',
            'cod_canton'=>'0919'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'092050',
            'name'=>'SAN JACINTO DE YAGUACHI',
            'cod_canton'=>'0920'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'092051',
            'name'=>'CRNEL. LORENZO DE GARAICOA (PEDREGAL)',
            'cod_canton'=>'0920'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'092052',
            'name'=>'CRNEL. MARCELINO MARIDUEÑA (SAN CARLOS)',
            'cod_canton'=>'0920'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'092053',
            'name'=>'GRAL. PEDRO J. MONTERO (BOLICHE)',
            'cod_canton'=>'0920'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'092054',
            'name'=>'SIMÓN BOLÍVAR',
            'cod_canton'=>'0920'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'092055',
            'name'=>'YAGUACHI VIEJO (CONE)',
            'cod_canton'=>'0920'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'092056',
            'name'=>'VIRGEN DE FÁTIMA',
            'cod_canton'=>'0920'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'092150',
            'name'=>'GENERAL VILLAMIL (PLAYAS)',
            'cod_canton'=>'0921'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'092250',
            'name'=>'SIMÓN BOLÍVAR',
            'cod_canton'=>'0922'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'092251',
            'name'=>'CRNEL.LORENZO DE GARAICOA (PEDREGAL)',
            'cod_canton'=>'0922'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'092350',
            'name'=>'CORONEL MARCELINO MARIDUEÑA (SAN CARLOS)',
            'cod_canton'=>'0923'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'092450',
            'name'=>'LOMAS DE SARGENTILLO',
            'cod_canton'=>'0924'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'092451',
            'name'=>'ISIDRO AYORA (SOLEDAD)',
            'cod_canton'=>'0924'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'092550',
            'name'=>'NARCISA DE JESÚS',
            'cod_canton'=>'0925'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'092750',
            'name'=>'GENERAL ANTONIO ELIZALDE (BUCAY)',
            'cod_canton'=>'0927'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'092850',
            'name'=>'ISIDRO AYORA',
            'cod_canton'=>'0928'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100101',
            'name'=>'CARANQUI',
            'cod_canton'=>'1001'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100102',
            'name'=>'GUAYAQUIL DE ALPACHACA',
            'cod_canton'=>'1001'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100103',
            'name'=>'SAGRARIO',
            'cod_canton'=>'1001'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100104',
            'name'=>'SAN FRANCISCO',
            'cod_canton'=>'1001'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100105',
            'name'=>'LA DOLOROSA DEL PRIORATO',
            'cod_canton'=>'1001'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100150',
            'name'=>'SAN MIGUEL DE IBARRA',
            'cod_canton'=>'1001'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100151',
            'name'=>'AMBUQUÍ',
            'cod_canton'=>'1001'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100152',
            'name'=>'ANGOCHAGUA',
            'cod_canton'=>'1001'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100153',
            'name'=>'CAROLINA',
            'cod_canton'=>'1001'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100154',
            'name'=>'LA ESPERANZA',
            'cod_canton'=>'1001'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100155',
            'name'=>'LITA',
            'cod_canton'=>'1001'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100156',
            'name'=>'SALINAS',
            'cod_canton'=>'1001'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100157',
            'name'=>'SAN ANTONIO',
            'cod_canton'=>'1001'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100201',
            'name'=>'ANDRADE MARÍN (LOURDES)',
            'cod_canton'=>'1002'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100202',
            'name'=>'ATUNTAQUI',
            'cod_canton'=>'1002'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100250',
            'name'=>'ATUNTAQUI',
            'cod_canton'=>'1002'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100251',
            'name'=>'IMBAYA (SAN LUIS DE COBUENDO)',
            'cod_canton'=>'1002'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100252',
            'name'=>'SAN FRANCISCO DE NATABUELA',
            'cod_canton'=>'1002'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100253',
            'name'=>'SAN JOSÉ DE CHALTURA',
            'cod_canton'=>'1002'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100254',
            'name'=>'SAN ROQUE',
            'cod_canton'=>'1002'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100301',
            'name'=>'SAGRARIO',
            'cod_canton'=>'1003'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100302',
            'name'=>'SAN FRANCISCO',
            'cod_canton'=>'1003'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100350',
            'name'=>'COTACACHI',
            'cod_canton'=>'1003'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100351',
            'name'=>'APUELA',
            'cod_canton'=>'1003'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100352',
            'name'=>'GARCÍA MORENO (LLURIMAGUA)',
            'cod_canton'=>'1003'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100353',
            'name'=>'IMANTAG',
            'cod_canton'=>'1003'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100354',
            'name'=>'PEÑAHERRERA',
            'cod_canton'=>'1003'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100355',
            'name'=>'PLAZA GUTIÉRREZ (CALVARIO)',
            'cod_canton'=>'1003'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100356',
            'name'=>'QUIROGA',
            'cod_canton'=>'1003'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100357',
            'name'=>'6 DE JULIO DE CUELLAJE (CAB. EN CUELLAJE)',
            'cod_canton'=>'1003'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100358',
            'name'=>'VACAS GALINDO (EL CHURO) (CAB.EN SAN MIGUEL ALTO',
            'cod_canton'=>'1003'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100401',
            'name'=>'JORDÁN',
            'cod_canton'=>'1004'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100402',
            'name'=>'SAN LUIS',
            'cod_canton'=>'1004'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100450',
            'name'=>'OTAVALO',
            'cod_canton'=>'1004'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100451',
            'name'=>'DR. MIGUEL EGAS CABEZAS (PEGUCHE)',
            'cod_canton'=>'1004'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100452',
            'name'=>'EUGENIO ESPEJO (CALPAQUÍ)',
            'cod_canton'=>'1004'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100453',
            'name'=>'GONZÁLEZ SUÁREZ',
            'cod_canton'=>'1004'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100454',
            'name'=>'PATAQUÍ',
            'cod_canton'=>'1004'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100455',
            'name'=>'SAN JOSÉ DE QUICHINCHE',
            'cod_canton'=>'1004'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100456',
            'name'=>'SAN JUAN DE ILUMÁN',
            'cod_canton'=>'1004'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100457',
            'name'=>'SAN PABLO',
            'cod_canton'=>'1004'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100458',
            'name'=>'SAN RAFAEL',
            'cod_canton'=>'1004'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100459',
            'name'=>'SELVA ALEGRE (CAB.EN SAN MIGUEL DE PAMPLONA)',
            'cod_canton'=>'1004'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100550',
            'name'=>'PIMAMPIRO',
            'cod_canton'=>'1005'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100551',
            'name'=>'CHUGÁ',
            'cod_canton'=>'1005'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100552',
            'name'=>'MARIANO ACOSTA',
            'cod_canton'=>'1005'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100553',
            'name'=>'SAN FRANCISCO DE SIGSIPAMBA',
            'cod_canton'=>'1005'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100650',
            'name'=>'URCUQUÍ CABECERA CANTONAL',
            'cod_canton'=>'1006'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100651',
            'name'=>'CAHUASQUÍ',
            'cod_canton'=>'1006'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100652',
            'name'=>'LA MERCED DE BUENOS AIRES',
            'cod_canton'=>'1006'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100653',
            'name'=>'PABLO ARENAS',
            'cod_canton'=>'1006'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100654',
            'name'=>'SAN BLAS',
            'cod_canton'=>'1006'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'100655',
            'name'=>'TUMBABIRO',
            'cod_canton'=>'1006'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110101',
            'name'=>'EL SAGRARIO',
            'cod_canton'=>'1101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110102',
            'name'=>'SAN SEBASTIÁN',
            'cod_canton'=>'1101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110103',
            'name'=>'SUCRE',
            'cod_canton'=>'1101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110104',
            'name'=>'VALLE',
            'cod_canton'=>'1101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110150',
            'name'=>'LOJA',
            'cod_canton'=>'1101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110151',
            'name'=>'CHANTACO',
            'cod_canton'=>'1101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110152',
            'name'=>'CHUQUIRIBAMBA',
            'cod_canton'=>'1101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110153',
            'name'=>'EL CISNE',
            'cod_canton'=>'1101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110154',
            'name'=>'GUALEL',
            'cod_canton'=>'1101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110155',
            'name'=>'JIMBILLA',
            'cod_canton'=>'1101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110156',
            'name'=>'MALACATOS (VALLADOLID)',
            'cod_canton'=>'1101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110157',
            'name'=>'SAN LUCAS',
            'cod_canton'=>'1101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110158',
            'name'=>'SAN PEDRO DE VILCABAMBA',
            'cod_canton'=>'1101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110159',
            'name'=>'SANTIAGO',
            'cod_canton'=>'1101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110160',
            'name'=>'TAQUIL (MIGUEL RIOFRÍO)',
            'cod_canton'=>'1101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110161',
            'name'=>'VILCABAMBA (VICTORIA)',
            'cod_canton'=>'1101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110162',
            'name'=>'YANGANA (ARSENIO CASTILLO)',
            'cod_canton'=>'1101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110163',
            'name'=>'QUINARA',
            'cod_canton'=>'1101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110201',
            'name'=>'CARIAMANGA',
            'cod_canton'=>'1102'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110202',
            'name'=>'CHILE',
            'cod_canton'=>'1102'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110203',
            'name'=>'SAN VICENTE',
            'cod_canton'=>'1102'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110250',
            'name'=>'CARIAMANGA',
            'cod_canton'=>'1102'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110251',
            'name'=>'COLAISACA',
            'cod_canton'=>'1102'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110252',
            'name'=>'EL LUCERO',
            'cod_canton'=>'1102'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110253',
            'name'=>'UTUANA',
            'cod_canton'=>'1102'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110254',
            'name'=>'SANGUILLÍN',
            'cod_canton'=>'1102'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110301',
            'name'=>'CATAMAYO',
            'cod_canton'=>'1103'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110302',
            'name'=>'SAN JOSÉ',
            'cod_canton'=>'1103'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110350',
            'name'=>'CATAMAYO (LA TOMA)',
            'cod_canton'=>'1103'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110351',
            'name'=>'EL TAMBO',
            'cod_canton'=>'1103'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110352',
            'name'=>'GUAYQUICHUMA',
            'cod_canton'=>'1103'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110353',
            'name'=>'SAN PEDRO DE LA BENDITA',
            'cod_canton'=>'1103'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110354',
            'name'=>'ZAMBI',
            'cod_canton'=>'1103'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110450',
            'name'=>'CELICA',
            'cod_canton'=>'1104'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110451',
            'name'=>'CRUZPAMBA (CAB. EN CARLOS BUSTAMANTE)',
            'cod_canton'=>'1104'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110452',
            'name'=>'CHAQUINAL',
            'cod_canton'=>'1104'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110453',
            'name'=>'12 DE DICIEMBRE (CAB. EN ACHIOTES)',
            'cod_canton'=>'1104'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110454',
            'name'=>'PINDAL (FEDERICO PÁEZ)',
            'cod_canton'=>'1104'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110455',
            'name'=>'POZUL (SAN JUAN DE POZUL)',
            'cod_canton'=>'1104'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110456',
            'name'=>'SABANILLA',
            'cod_canton'=>'1104'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110457',
            'name'=>'TNTE. MAXIMILIANO RODRÍGUEZ LOAIZA',
            'cod_canton'=>'1104'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110550',
            'name'=>'CHAGUARPAMBA',
            'cod_canton'=>'1105'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110551',
            'name'=>'BUENAVISTA',
            'cod_canton'=>'1105'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110552',
            'name'=>'EL ROSARIO',
            'cod_canton'=>'1105'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110553',
            'name'=>'SANTA RUFINA',
            'cod_canton'=>'1105'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110554',
            'name'=>'AMARILLOS',
            'cod_canton'=>'1105'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110650',
            'name'=>'AMALUZA',
            'cod_canton'=>'1106'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110651',
            'name'=>'BELLAVISTA',
            'cod_canton'=>'1106'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110652',
            'name'=>'JIMBURA',
            'cod_canton'=>'1106'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110653',
            'name'=>'SANTA TERESITA',
            'cod_canton'=>'1106'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110654',
            'name'=>'27 DE ABRIL (CAB. EN LA NARANJA)',
            'cod_canton'=>'1106'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110655',
            'name'=>'EL INGENIO',
            'cod_canton'=>'1106'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110656',
            'name'=>'EL AIRO',
            'cod_canton'=>'1106'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110750',
            'name'=>'GONZANAMÁ',
            'cod_canton'=>'1107'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110751',
            'name'=>'CHANGAIMINA (LA LIBERTAD)',
            'cod_canton'=>'1107'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110752',
            'name'=>'FUNDOCHAMBA',
            'cod_canton'=>'1107'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110753',
            'name'=>'NAMBACOLA',
            'cod_canton'=>'1107'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110754',
            'name'=>'PURUNUMA (EGUIGUREN)',
            'cod_canton'=>'1107'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110755',
            'name'=>'QUILANGA (LA PAZ)',
            'cod_canton'=>'1107'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110756',
            'name'=>'SACAPALCA',
            'cod_canton'=>'1107'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110757',
            'name'=>'SAN ANTONIO DE LAS ARADAS (CAB. EN LAS ARADAS)',
            'cod_canton'=>'1107'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110801',
            'name'=>'GENERAL ELOY ALFARO (SAN SEBASTIÁN)',
            'cod_canton'=>'1108'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110802',
            'name'=>'MACARÁ (MANUEL ENRIQUE RENGEL SUQUILANDA)',
            'cod_canton'=>'1108'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110850',
            'name'=>'MACARÁ',
            'cod_canton'=>'1108'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110851',
            'name'=>'LARAMA',
            'cod_canton'=>'1108'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110852',
            'name'=>'LA VICTORIA',
            'cod_canton'=>'1108'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110853',
            'name'=>'SABIANGO (LA CAPILLA)',
            'cod_canton'=>'1108'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110901',
            'name'=>'CATACOCHA',
            'cod_canton'=>'1109'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110902',
            'name'=>'LOURDES',
            'cod_canton'=>'1109'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110950',
            'name'=>'CATACOCHA',
            'cod_canton'=>'1109'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110951',
            'name'=>'CANGONAMÁ',
            'cod_canton'=>'1109'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110952',
            'name'=>'GUACHANAMÁ',
            'cod_canton'=>'1109'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110953',
            'name'=>'LA TINGUE',
            'cod_canton'=>'1109'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110954',
            'name'=>'LAURO GUERRERO',
            'cod_canton'=>'1109'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110955',
            'name'=>'OLMEDO (SANTA BÁRBARA)',
            'cod_canton'=>'1109'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110956',
            'name'=>'ORIANGA',
            'cod_canton'=>'1109'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110957',
            'name'=>'SAN ANTONIO',
            'cod_canton'=>'1109'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110958',
            'name'=>'CASANGA',
            'cod_canton'=>'1109'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'110959',
            'name'=>'YAMANA',
            'cod_canton'=>'1109'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111050',
            'name'=>'ALAMOR',
            'cod_canton'=>'1110'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111051',
            'name'=>'CIANO',
            'cod_canton'=>'1110'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111052',
            'name'=>'EL ARENAL',
            'cod_canton'=>'1110'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111053',
            'name'=>'EL LIMO (MARIANA DE JESÚS)',
            'cod_canton'=>'1110'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111054',
            'name'=>'MERCADILLO',
            'cod_canton'=>'1110'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111055',
            'name'=>'VICENTINO',
            'cod_canton'=>'1110'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111150',
            'name'=>'SARAGURO',
            'cod_canton'=>'1111'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111151',
            'name'=>'EL PARAÍSO DE CELÉN',
            'cod_canton'=>'1111'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111152',
            'name'=>'EL TABLÓN',
            'cod_canton'=>'1111'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111153',
            'name'=>'LLUZHAPA',
            'cod_canton'=>'1111'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111154',
            'name'=>'MANÚ',
            'cod_canton'=>'1111'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111155',
            'name'=>'SAN ANTONIO DE QUMBE (CUMBE)',
            'cod_canton'=>'1111'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111156',
            'name'=>'SAN PABLO DE TENTA',
            'cod_canton'=>'1111'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111157',
            'name'=>'SAN SEBASTIÁN DE YÚLUC',
            'cod_canton'=>'1111'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111158',
            'name'=>'SELVA ALEGRE',
            'cod_canton'=>'1111'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111159',
            'name'=>'URDANETA (PAQUISHAPA)',
            'cod_canton'=>'1111'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111160',
            'name'=>'SUMAYPAMBA',
            'cod_canton'=>'1111'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111250',
            'name'=>'SOZORANGA',
            'cod_canton'=>'1112'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111251',
            'name'=>'NUEVA FÁTIMA',
            'cod_canton'=>'1112'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111252',
            'name'=>'TACAMOROS',
            'cod_canton'=>'1112'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111350',
            'name'=>'ZAPOTILLO',
            'cod_canton'=>'1113'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111351',
            'name'=>'MANGAHURCO (CAZADEROS)',
            'cod_canton'=>'1113'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111352',
            'name'=>'GARZAREAL',
            'cod_canton'=>'1113'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111353',
            'name'=>'LIMONES',
            'cod_canton'=>'1113'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111354',
            'name'=>'PALETILLAS',
            'cod_canton'=>'1113'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111355',
            'name'=>'BOLASPAMBA',
            'cod_canton'=>'1113'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111450',
            'name'=>'PINDAL',
            'cod_canton'=>'1114'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111451',
            'name'=>'CHAQUINAL',
            'cod_canton'=>'1114'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111452',
            'name'=>'12 DE DICIEMBRE (CAB.EN ACHIOTES)',
            'cod_canton'=>'1114'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111453',
            'name'=>'MILAGROS',
            'cod_canton'=>'1114'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111550',
            'name'=>'QUILANGA',
            'cod_canton'=>'1115'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111551',
            'name'=>'FUNDOCHAMBA',
            'cod_canton'=>'1115'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111552',
            'name'=>'SAN ANTONIO DE LAS ARADAS (CAB. EN LAS ARADAS)',
            'cod_canton'=>'1115'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111650',
            'name'=>'OLMEDO',
            'cod_canton'=>'1116'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'111651',
            'name'=>'LA TINGUE',
            'cod_canton'=>'1116'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120101',
            'name'=>'CLEMENTE BAQUERIZO',
            'cod_canton'=>'1201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120102',
            'name'=>'DR. CAMILO PONCE',
            'cod_canton'=>'1201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120103',
            'name'=>'BARREIRO',
            'cod_canton'=>'1201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120104',
            'name'=>'EL SALTO',
            'cod_canton'=>'1201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120150',
            'name'=>'BABAHOYO',
            'cod_canton'=>'1201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120151',
            'name'=>'BARREIRO (SANTA RITA)',
            'cod_canton'=>'1201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120152',
            'name'=>'CARACOL',
            'cod_canton'=>'1201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120153',
            'name'=>'FEBRES CORDERO (LAS JUNTAS)',
            'cod_canton'=>'1201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120154',
            'name'=>'PIMOCHA',
            'cod_canton'=>'1201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120155',
            'name'=>'LA UNIÓN',
            'cod_canton'=>'1201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120250',
            'name'=>'BABA',
            'cod_canton'=>'1202'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120251',
            'name'=>'GUARE',
            'cod_canton'=>'1202'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120252',
            'name'=>'ISLA DE BEJUCAL',
            'cod_canton'=>'1202'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120350',
            'name'=>'MONTALVO',
            'cod_canton'=>'1203'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120450',
            'name'=>'PUEBLOVIEJO',
            'cod_canton'=>'1204'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120451',
            'name'=>'PUERTO PECHICHE',
            'cod_canton'=>'1204'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120452',
            'name'=>'SAN JUAN',
            'cod_canton'=>'1204'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120501',
            'name'=>'QUEVEDO',
            'cod_canton'=>'1205'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120502',
            'name'=>'SAN CAMILO',
            'cod_canton'=>'1205'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120503',
            'name'=>'SAN JOSÉ',
            'cod_canton'=>'1205'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120504',
            'name'=>'GUAYACÁN',
            'cod_canton'=>'1205'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120505',
            'name'=>'NICOLÁS INFANTE DÍAZ',
            'cod_canton'=>'1205'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120506',
            'name'=>'SAN CRISTÓBAL',
            'cod_canton'=>'1205'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120507',
            'name'=>'SIETE DE OCTUBRE',
            'cod_canton'=>'1205'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120508',
            'name'=>'24 DE MAYO',
            'cod_canton'=>'1205'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120509',
            'name'=>'VENUS DEL RÍO QUEVEDO',
            'cod_canton'=>'1205'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120510',
            'name'=>'VIVA ALFARO',
            'cod_canton'=>'1205'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120550',
            'name'=>'QUEVEDO',
            'cod_canton'=>'1205'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120551',
            'name'=>'BUENA FÉ',
            'cod_canton'=>'1205'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120552',
            'name'=>'MOCACHE',
            'cod_canton'=>'1205'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120553',
            'name'=>'SAN CARLOS',
            'cod_canton'=>'1205'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120554',
            'name'=>'VALENCIA',
            'cod_canton'=>'1205'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120555',
            'name'=>'LA ESPERANZA',
            'cod_canton'=>'1205'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120650',
            'name'=>'CATARAMA',
            'cod_canton'=>'1206'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120651',
            'name'=>'RICAURTE',
            'cod_canton'=>'1206'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120701',
            'name'=>'10 DE NOVIEMBRE',
            'cod_canton'=>'1207'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120750',
            'name'=>'VENTANAS',
            'cod_canton'=>'1207'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120751',
            'name'=>'QUINSALOMA',
            'cod_canton'=>'1207'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120752',
            'name'=>'ZAPOTAL',
            'cod_canton'=>'1207'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120753',
            'name'=>'CHACARITA',
            'cod_canton'=>'1207'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120754',
            'name'=>'LOS ÁNGELES',
            'cod_canton'=>'1207'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120850',
            'name'=>'VINCES',
            'cod_canton'=>'1208'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120851',
            'name'=>'ANTONIO SOTOMAYOR (CAB. EN PLAYAS DE VINCES)',
            'cod_canton'=>'1208'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120852',
            'name'=>'PALENQUE',
            'cod_canton'=>'1208'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'120950',
            'name'=>'PALENQUE',
            'cod_canton'=>'1209'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'121001',
            'name'=>'SAN JACINTO DE BUENA FÉ',
            'cod_canton'=>'1210'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'121002',
            'name'=>'7 DE AGOSTO',
            'cod_canton'=>'1210'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'121003',
            'name'=>'11 DE OCTUBRE',
            'cod_canton'=>'1210'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'121050',
            'name'=>'SAN JACINTO DE BUENA FÉ',
            'cod_canton'=>'1210'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'121051',
            'name'=>'PATRICIA PILAR',
            'cod_canton'=>'1210'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'121150',
            'name'=>'VALENCIA',
            'cod_canton'=>'1211'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'121250',
            'name'=>'MOCACHE',
            'cod_canton'=>'1212'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'121350',
            'name'=>'QUINSALOMA',
            'cod_canton'=>'1213'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130101',
            'name'=>'PORTOVIEJO',
            'cod_canton'=>'1301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130102',
            'name'=>'12 DE MARZO',
            'cod_canton'=>'1301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130103',
            'name'=>'COLÓN',
            'cod_canton'=>'1301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130104',
            'name'=>'PICOAZÁ',
            'cod_canton'=>'1301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130105',
            'name'=>'SAN PABLO',
            'cod_canton'=>'1301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130106',
            'name'=>'ANDRÉS DE VERA',
            'cod_canton'=>'1301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130107',
            'name'=>'FRANCISCO PACHECO',
            'cod_canton'=>'1301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130108',
            'name'=>'18 DE OCTUBRE',
            'cod_canton'=>'1301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130109',
            'name'=>'SIMÓN BOLÍVAR',
            'cod_canton'=>'1301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130150',
            'name'=>'PORTOVIEJO',
            'cod_canton'=>'1301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130151',
            'name'=>'ABDÓN CALDERÓN (SAN FRANCISCO)',
            'cod_canton'=>'1301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130152',
            'name'=>'ALHAJUELA (BAJO GRANDE)',
            'cod_canton'=>'1301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130153',
            'name'=>'CRUCITA',
            'cod_canton'=>'1301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130154',
            'name'=>'PUEBLO NUEVO',
            'cod_canton'=>'1301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130155',
            'name'=>'RIOCHICO (RÍO CHICO)',
            'cod_canton'=>'1301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130156',
            'name'=>'SAN PLÁCIDO',
            'cod_canton'=>'1301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130157',
            'name'=>'CHIRIJOS',
            'cod_canton'=>'1301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130250',
            'name'=>'CALCETA',
            'cod_canton'=>'1302'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130251',
            'name'=>'MEMBRILLO',
            'cod_canton'=>'1302'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130252',
            'name'=>'QUIROGA',
            'cod_canton'=>'1302'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130301',
            'name'=>'CHONE',
            'cod_canton'=>'1303'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130302',
            'name'=>'SANTA RITA',
            'cod_canton'=>'1303'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130350',
            'name'=>'CHONE',
            'cod_canton'=>'1303'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130351',
            'name'=>'BOYACÁ',
            'cod_canton'=>'1303'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130352',
            'name'=>'CANUTO',
            'cod_canton'=>'1303'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130353',
            'name'=>'CONVENTO',
            'cod_canton'=>'1303'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130354',
            'name'=>'CHIBUNGA',
            'cod_canton'=>'1303'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130355',
            'name'=>'ELOY ALFARO',
            'cod_canton'=>'1303'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130356',
            'name'=>'RICAURTE',
            'cod_canton'=>'1303'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130357',
            'name'=>'SAN ANTONIO',
            'cod_canton'=>'1303'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130401',
            'name'=>'EL CARMEN',
            'cod_canton'=>'1304'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130402',
            'name'=>'4 DE DICIEMBRE',
            'cod_canton'=>'1304'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130450',
            'name'=>'EL CARMEN',
            'cod_canton'=>'1304'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130451',
            'name'=>'WILFRIDO LOOR MOREIRA (MAICITO)',
            'cod_canton'=>'1304'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130452',
            'name'=>'SAN PEDRO DE SUMA',
            'cod_canton'=>'1304'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130550',
            'name'=>'FLAVIO ALFARO',
            'cod_canton'=>'1305'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130551',
            'name'=>'SAN FRANCISCO DE NOVILLO (CAB. EN',
            'cod_canton'=>'1305'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130552',
            'name'=>'ZAPALLO',
            'cod_canton'=>'1305'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130601',
            'name'=>'DR. MIGUEL MORÁN LUCIO',
            'cod_canton'=>'1306'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130602',
            'name'=>'MANUEL INOCENCIO PARRALES Y GUALE',
            'cod_canton'=>'1306'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130603',
            'name'=>'SAN LORENZO DE JIPIJAPA',
            'cod_canton'=>'1306'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130650',
            'name'=>'JIPIJAPA',
            'cod_canton'=>'1306'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130651',
            'name'=>'AMÉRICA',
            'cod_canton'=>'1306'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130652',
            'name'=>'EL ANEGADO (CAB. EN ELOY ALFARO)',
            'cod_canton'=>'1306'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130653',
            'name'=>'JULCUY',
            'cod_canton'=>'1306'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130654',
            'name'=>'LA UNIÓN',
            'cod_canton'=>'1306'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130655',
            'name'=>'MACHALILLA',
            'cod_canton'=>'1306'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130656',
            'name'=>'MEMBRILLAL',
            'cod_canton'=>'1306'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130657',
            'name'=>'PEDRO PABLO GÓMEZ',
            'cod_canton'=>'1306'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130658',
            'name'=>'PUERTO DE CAYO',
            'cod_canton'=>'1306'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130659',
            'name'=>'PUERTO LÓPEZ',
            'cod_canton'=>'1306'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130750',
            'name'=>'JUNÍN',
            'cod_canton'=>'1307'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130801',
            'name'=>'LOS ESTEROS',
            'cod_canton'=>'1308'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130802',
            'name'=>'MANTA',
            'cod_canton'=>'1308'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130803',
            'name'=>'SAN MATEO',
            'cod_canton'=>'1308'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130804',
            'name'=>'TARQUI',
            'cod_canton'=>'1308'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130805',
            'name'=>'ELOY ALFARO',
            'cod_canton'=>'1308'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130850',
            'name'=>'MANTA',
            'cod_canton'=>'1308'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130851',
            'name'=>'SAN LORENZO',
            'cod_canton'=>'1308'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130852',
            'name'=>'SANTA MARIANITA (BOCA DE PACOCHE)',
            'cod_canton'=>'1308'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130901',
            'name'=>'ANIBAL SAN ANDRÉS',
            'cod_canton'=>'1309'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130902',
            'name'=>'MONTECRISTI',
            'cod_canton'=>'1309'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130903',
            'name'=>'EL COLORADO',
            'cod_canton'=>'1309'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130904',
            'name'=>'GENERAL ELOY ALFARO',
            'cod_canton'=>'1309'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130905',
            'name'=>'LEONIDAS PROAÑO',
            'cod_canton'=>'1309'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130950',
            'name'=>'MONTECRISTI',
            'cod_canton'=>'1309'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130951',
            'name'=>'JARAMIJÓ',
            'cod_canton'=>'1309'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'130952',
            'name'=>'LA PILA',
            'cod_canton'=>'1309'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131050',
            'name'=>'PAJÁN',
            'cod_canton'=>'1310'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131051',
            'name'=>'CAMPOZANO (LA PALMA DE PAJÁN)',
            'cod_canton'=>'1310'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131052',
            'name'=>'CASCOL',
            'cod_canton'=>'1310'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131053',
            'name'=>'GUALE',
            'cod_canton'=>'1310'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131054',
            'name'=>'LASCANO',
            'cod_canton'=>'1310'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131150',
            'name'=>'PICHINCHA',
            'cod_canton'=>'1311'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131151',
            'name'=>'BARRAGANETE',
            'cod_canton'=>'1311'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131152',
            'name'=>'SAN SEBASTIÁN',
            'cod_canton'=>'1311'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131250',
            'name'=>'ROCAFUERTE',
            'cod_canton'=>'1312'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131301',
            'name'=>'SANTA ANA',
            'cod_canton'=>'1313'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131302',
            'name'=>'LODANA',
            'cod_canton'=>'1313'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131350',
            'name'=>'SANTA ANA DE VUELTA LARGA',
            'cod_canton'=>'1313'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131351',
            'name'=>'AYACUCHO',
            'cod_canton'=>'1313'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131352',
            'name'=>'HONORATO VÁSQUEZ (CAB. EN VÁSQUEZ)',
            'cod_canton'=>'1313'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131353',
            'name'=>'LA UNIÓN',
            'cod_canton'=>'1313'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131354',
            'name'=>'OLMEDO',
            'cod_canton'=>'1313'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131355',
            'name'=>'SAN PABLO (CAB. EN PUEBLO NUEVO)',
            'cod_canton'=>'1313'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131401',
            'name'=>'BAHÍA DE CARÁQUEZ',
            'cod_canton'=>'1314'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131402',
            'name'=>'LEONIDAS PLAZA GUTIÉRREZ',
            'cod_canton'=>'1314'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131450',
            'name'=>'BAHÍA DE CARÁQUEZ',
            'cod_canton'=>'1314'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131451',
            'name'=>'CANOA',
            'cod_canton'=>'1314'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131452',
            'name'=>'COJIMÍES',
            'cod_canton'=>'1314'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131453',
            'name'=>'CHARAPOTÓ',
            'cod_canton'=>'1314'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131454',
            'name'=>'10 DE AGOSTO',
            'cod_canton'=>'1314'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131455',
            'name'=>'JAMA',
            'cod_canton'=>'1314'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131456',
            'name'=>'PEDERNALES',
            'cod_canton'=>'1314'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131457',
            'name'=>'SAN ISIDRO',
            'cod_canton'=>'1314'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131458',
            'name'=>'SAN VICENTE',
            'cod_canton'=>'1314'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131550',
            'name'=>'TOSAGUA',
            'cod_canton'=>'1315'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131551',
            'name'=>'BACHILLERO',
            'cod_canton'=>'1315'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131552',
            'name'=>'ANGEL PEDRO GILER (LA ESTANCILLA)',
            'cod_canton'=>'1315'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131650',
            'name'=>'SUCRE',
            'cod_canton'=>'1316'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131651',
            'name'=>'BELLAVISTA',
            'cod_canton'=>'1316'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131652',
            'name'=>'NOBOA',
            'cod_canton'=>'1316'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131653',
            'name'=>'ARQ. SIXTO DURÁN BALLÉN',
            'cod_canton'=>'1316'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131750',
            'name'=>'PEDERNALES',
            'cod_canton'=>'1317'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131751',
            'name'=>'COJIMÍES',
            'cod_canton'=>'1317'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131752',
            'name'=>'10 DE AGOSTO',
            'cod_canton'=>'1317'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131753',
            'name'=>'ATAHUALPA',
            'cod_canton'=>'1317'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131850',
            'name'=>'OLMEDO',
            'cod_canton'=>'1318'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131950',
            'name'=>'PUERTO LÓPEZ',
            'cod_canton'=>'1319'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131951',
            'name'=>'MACHALILLA',
            'cod_canton'=>'1319'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'131952',
            'name'=>'SALANGO',
            'cod_canton'=>'1319'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'132050',
            'name'=>'JAMA',
            'cod_canton'=>'1320'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'132150',
            'name'=>'JARAMIJÓ',
            'cod_canton'=>'1321'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'132250',
            'name'=>'SAN VICENTE',
            'cod_canton'=>'1322'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'132251',
            'name'=>'CANOA',
            'cod_canton'=>'1322'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140150',
            'name'=>'MACAS',
            'cod_canton'=>'1401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140151',
            'name'=>'ALSHI (CAB. EN 9 DE OCTUBRE)',
            'cod_canton'=>'1401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140152',
            'name'=>'CHIGUAZA',
            'cod_canton'=>'1401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140153',
            'name'=>'GENERAL PROAÑO',
            'cod_canton'=>'1401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140154',
            'name'=>'HUASAGA (CAB.EN WAMPUIK)',
            'cod_canton'=>'1401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140155',
            'name'=>'MACUMA',
            'cod_canton'=>'1401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140156',
            'name'=>'SAN ISIDRO',
            'cod_canton'=>'1401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140157',
            'name'=>'SEVILLA DON BOSCO',
            'cod_canton'=>'1401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140158',
            'name'=>'SINAÍ',
            'cod_canton'=>'1401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140159',
            'name'=>'TAISHA',
            'cod_canton'=>'1401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140160',
            'name'=>'ZUÑA (ZÚÑAC)',
            'cod_canton'=>'1401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140161',
            'name'=>'TUUTINENTZA',
            'cod_canton'=>'1401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140162',
            'name'=>'CUCHAENTZA',
            'cod_canton'=>'1401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140163',
            'name'=>'SAN JOSÉ DE MORONA',
            'cod_canton'=>'1401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140164',
            'name'=>'RÍO BLANCO',
            'cod_canton'=>'1401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140201',
            'name'=>'GUALAQUIZA',
            'cod_canton'=>'1402'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140202',
            'name'=>'MERCEDES MOLINA',
            'cod_canton'=>'1402'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140250',
            'name'=>'GUALAQUIZA',
            'cod_canton'=>'1402'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140251',
            'name'=>'AMAZONAS (ROSARIO DE CUYES)',
            'cod_canton'=>'1402'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140252',
            'name'=>'BERMEJOS',
            'cod_canton'=>'1402'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140253',
            'name'=>'BOMBOIZA',
            'cod_canton'=>'1402'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140254',
            'name'=>'CHIGÜINDA',
            'cod_canton'=>'1402'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140255',
            'name'=>'EL ROSARIO',
            'cod_canton'=>'1402'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140256',
            'name'=>'NUEVA TARQUI',
            'cod_canton'=>'1402'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140257',
            'name'=>'SAN MIGUEL DE CUYES',
            'cod_canton'=>'1402'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140258',
            'name'=>'EL IDEAL',
            'cod_canton'=>'1402'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140350',
            'name'=>'GENERAL LEONIDAS PLAZA GUTIÉRREZ (LIMÓN)',
            'cod_canton'=>'1403'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140351',
            'name'=>'INDANZA',
            'cod_canton'=>'1403'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140352',
            'name'=>'PAN DE AZÚCAR',
            'cod_canton'=>'1403'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140353',
            'name'=>'SAN ANTONIO (CAB. EN SAN ANTONIO CENTRO',
            'cod_canton'=>'1403'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140354',
            'name'=>'SAN CARLOS DE LIMÓN (SAN CARLOS DEL',
            'cod_canton'=>'1403'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140355',
            'name'=>'SAN JUAN BOSCO',
            'cod_canton'=>'1403'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140356',
            'name'=>'SAN MIGUEL DE CONCHAY',
            'cod_canton'=>'1403'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140357',
            'name'=>'SANTA SUSANA DE CHIVIAZA (CAB. EN CHIVIAZA)',
            'cod_canton'=>'1403'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140358',
            'name'=>'YUNGANZA (CAB. EN EL ROSARIO)',
            'cod_canton'=>'1403'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140450',
            'name'=>'PALORA (METZERA)',
            'cod_canton'=>'1404'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140451',
            'name'=>'ARAPICOS',
            'cod_canton'=>'1404'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140452',
            'name'=>'CUMANDÁ (CAB. EN COLONIA AGRÍCOLA SEVILLA DEL ORO)',
            'cod_canton'=>'1404'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140453',
            'name'=>'HUAMBOYA',
            'cod_canton'=>'1404'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140454',
            'name'=>'SANGAY (CAB. EN NAYAMANACA)',
            'cod_canton'=>'1404'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140550',
            'name'=>'SANTIAGO DE MÉNDEZ',
            'cod_canton'=>'1405'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140551',
            'name'=>'COPAL',
            'cod_canton'=>'1405'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140552',
            'name'=>'CHUPIANZA',
            'cod_canton'=>'1405'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140553',
            'name'=>'PATUCA',
            'cod_canton'=>'1405'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140554',
            'name'=>'SAN LUIS DE EL ACHO (CAB. EN EL ACHO)',
            'cod_canton'=>'1405'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140555',
            'name'=>'SANTIAGO',
            'cod_canton'=>'1405'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140556',
            'name'=>'TAYUZA',
            'cod_canton'=>'1405'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140557',
            'name'=>'SAN FRANCISCO DE CHINIMBIMI',
            'cod_canton'=>'1405'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140650',
            'name'=>'SUCÚA',
            'cod_canton'=>'1406'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140651',
            'name'=>'ASUNCIÓN',
            'cod_canton'=>'1406'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140652',
            'name'=>'HUAMBI',
            'cod_canton'=>'1406'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140653',
            'name'=>'LOGROÑO',
            'cod_canton'=>'1406'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140654',
            'name'=>'YAUPI',
            'cod_canton'=>'1406'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140655',
            'name'=>'SANTA MARIANITA DE JESÚS',
            'cod_canton'=>'1406'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140750',
            'name'=>'HUAMBOYA',
            'cod_canton'=>'1407'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140751',
            'name'=>'CHIGUAZA',
            'cod_canton'=>'1407'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140752',
            'name'=>'PABLO SEXTO',
            'cod_canton'=>'1407'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140850',
            'name'=>'SAN JUAN BOSCO',
            'cod_canton'=>'1408'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140851',
            'name'=>'PAN DE AZÚCAR',
            'cod_canton'=>'1408'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140852',
            'name'=>'SAN CARLOS DE LIMÓN',
            'cod_canton'=>'1408'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140853',
            'name'=>'SAN JACINTO DE WAKAMBEIS',
            'cod_canton'=>'1408'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140854',
            'name'=>'SANTIAGO DE PANANZA',
            'cod_canton'=>'1408'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140950',
            'name'=>'TAISHA',
            'cod_canton'=>'1409'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140951',
            'name'=>'HUASAGA (CAB. EN WAMPUIK)',
            'cod_canton'=>'1409'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140952',
            'name'=>'MACUMA',
            'cod_canton'=>'1409'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140953',
            'name'=>'TUUTINENTZA',
            'cod_canton'=>'1409'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'140954',
            'name'=>'PUMPUENTSA',
            'cod_canton'=>'1409'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'141050',
            'name'=>'LOGROÑO',
            'cod_canton'=>'1410'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'141051',
            'name'=>'YAUPI',
            'cod_canton'=>'1410'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'141052',
            'name'=>'SHIMPIS',
            'cod_canton'=>'1410'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'141150',
            'name'=>'PABLO SEXTO',
            'cod_canton'=>'1411'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'141250',
            'name'=>'SANTIAGO',
            'cod_canton'=>'1412'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'141251',
            'name'=>'SAN JOSÉ DE MORONA',
            'cod_canton'=>'1412'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150150',
            'name'=>'TENA',
            'cod_canton'=>'1501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150151',
            'name'=>'AHUANO',
            'cod_canton'=>'1501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150152',
            'name'=>'CARLOS JULIO AROSEMENA TOLA (ZATZA-YACU)',
            'cod_canton'=>'1501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150153',
            'name'=>'CHONTAPUNTA',
            'cod_canton'=>'1501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150154',
            'name'=>'PANO',
            'cod_canton'=>'1501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150155',
            'name'=>'PUERTO MISAHUALLI',
            'cod_canton'=>'1501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150156',
            'name'=>'PUERTO NAPO',
            'cod_canton'=>'1501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150157',
            'name'=>'TÁLAG',
            'cod_canton'=>'1501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150158',
            'name'=>'SAN JUAN DE MUYUNA',
            'cod_canton'=>'1501'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150350',
            'name'=>'ARCHIDONA',
            'cod_canton'=>'1503'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150351',
            'name'=>'AVILA',
            'cod_canton'=>'1503'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150352',
            'name'=>'COTUNDO',
            'cod_canton'=>'1503'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150353',
            'name'=>'LORETO',
            'cod_canton'=>'1503'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150354',
            'name'=>'SAN PABLO DE USHPAYACU',
            'cod_canton'=>'1503'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150355',
            'name'=>'PUERTO MURIALDO',
            'cod_canton'=>'1503'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150450',
            'name'=>'EL CHACO',
            'cod_canton'=>'1504'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150451',
            'name'=>'GONZALO DíAZ DE PINEDA (EL BOMBÓN)',
            'cod_canton'=>'1504'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150452',
            'name'=>'LINARES',
            'cod_canton'=>'1504'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150453',
            'name'=>'OYACACHI',
            'cod_canton'=>'1504'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150454',
            'name'=>'SANTA ROSA',
            'cod_canton'=>'1504'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150455',
            'name'=>'SARDINAS',
            'cod_canton'=>'1504'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150750',
            'name'=>'BAEZA',
            'cod_canton'=>'1507'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150751',
            'name'=>'COSANGA',
            'cod_canton'=>'1507'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150752',
            'name'=>'CUYUJA',
            'cod_canton'=>'1507'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150753',
            'name'=>'PAPALLACTA',
            'cod_canton'=>'1507'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150754',
            'name'=>'SAN FRANCISCO DE BORJA (VIRGILIO DÁVILA)',
            'cod_canton'=>'1507'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150755',
            'name'=>'SAN JOSÉ DEL PAYAMINO',
            'cod_canton'=>'1507'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150756',
            'name'=>'SUMACO',
            'cod_canton'=>'1507'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'150950',
            'name'=>'CARLOS JULIO AROSEMENA TOLA',
            'cod_canton'=>'1509'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'160150',
            'name'=>'PUYO',
            'cod_canton'=>'1601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'160151',
            'name'=>'ARAJUNO',
            'cod_canton'=>'1601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'160152',
            'name'=>'CANELOS',
            'cod_canton'=>'1601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'160153',
            'name'=>'CURARAY',
            'cod_canton'=>'1601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'160154',
            'name'=>'DIEZ DE AGOSTO',
            'cod_canton'=>'1601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'160155',
            'name'=>'FÁTIMA',
            'cod_canton'=>'1601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'160156',
            'name'=>'MONTALVO (ANDOAS)',
            'cod_canton'=>'1601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'160157',
            'name'=>'POMONA',
            'cod_canton'=>'1601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'160158',
            'name'=>'RÍO CORRIENTES',
            'cod_canton'=>'1601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'160159',
            'name'=>'RÍO TIGRE',
            'cod_canton'=>'1601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'160160',
            'name'=>'SANTA CLARA',
            'cod_canton'=>'1601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'160161',
            'name'=>'SARAYACU',
            'cod_canton'=>'1601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'160162',
            'name'=>'SIMÓN BOLÍVAR (CAB. EN MUSHULLACTA)',
            'cod_canton'=>'1601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'160163',
            'name'=>'TARQUI',
            'cod_canton'=>'1601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'160164',
            'name'=>'TENIENTE HUGO ORTIZ',
            'cod_canton'=>'1601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'160165',
            'name'=>'VERACRUZ (INDILLAMA) (CAB. EN INDILLAMA)',
            'cod_canton'=>'1601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'160166',
            'name'=>'EL TRIUNFO',
            'cod_canton'=>'1601'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'160250',
            'name'=>'MERA',
            'cod_canton'=>'1602'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'160251',
            'name'=>'MADRE TIERRA',
            'cod_canton'=>'1602'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'160252',
            'name'=>'SHELL',
            'cod_canton'=>'1602'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'160350',
            'name'=>'SANTA CLARA',
            'cod_canton'=>'1603'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'160351',
            'name'=>'SAN JOSÉ',
            'cod_canton'=>'1603'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'160450',
            'name'=>'ARAJUNO',
            'cod_canton'=>'1604'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'160451',
            'name'=>'CURARAY',
            'cod_canton'=>'1604'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170101',
            'name'=>'BELISARIO QUEVEDO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170102',
            'name'=>'CARCELÉN',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170103',
            'name'=>'CENTRO HISTÓRICO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170104',
            'name'=>'COCHAPAMBA',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170105',
            'name'=>'COMITÉ DEL PUEBLO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170106',
            'name'=>'COTOCOLLAO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170107',
            'name'=>'CHILIBULO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170108',
            'name'=>'CHILLOGALLO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170109',
            'name'=>'CHIMBACALLE',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170110',
            'name'=>'EL CONDADO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170111',
            'name'=>'GUAMANÍ',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170112',
            'name'=>'IÑAQUITO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170113',
            'name'=>'ITCHIMBÍA',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170114',
            'name'=>'JIPIJAPA',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170115',
            'name'=>'KENNEDY',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170116',
            'name'=>'LA ARGELIA',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170117',
            'name'=>'LA CONCEPCIÓN',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170118',
            'name'=>'LA ECUATORIANA',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170119',
            'name'=>'LA FERROVIARIA',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170120',
            'name'=>'LA LIBERTAD',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170121',
            'name'=>'LA MAGDALENA',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170122',
            'name'=>'LA MENA',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170123',
            'name'=>'MARISCAL SUCRE',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170124',
            'name'=>'PONCEANO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170125',
            'name'=>'PUENGASÍ',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170126',
            'name'=>'QUITUMBE',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170127',
            'name'=>'RUMIPAMBA',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170128',
            'name'=>'SAN BARTOLO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170129',
            'name'=>'SAN ISIDRO DEL INCA',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170130',
            'name'=>'SAN JUAN',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170131',
            'name'=>'SOLANDA',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170132',
            'name'=>'TURUBAMBA',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170150',
            'name'=>'QUITO DISTRITO METROPOLITANO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170151',
            'name'=>'ALANGASÍ',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170152',
            'name'=>'AMAGUAÑA',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170153',
            'name'=>'ATAHUALPA',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170154',
            'name'=>'CALACALÍ',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170155',
            'name'=>'CALDERÓN',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170156',
            'name'=>'CONOCOTO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170157',
            'name'=>'CUMBAYÁ',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170158',
            'name'=>'CHAVEZPAMBA',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170159',
            'name'=>'CHECA',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170160',
            'name'=>'EL QUINCHE',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170161',
            'name'=>'GUALEA',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170162',
            'name'=>'GUANGOPOLO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170163',
            'name'=>'GUAYLLABAMBA',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170164',
            'name'=>'LA MERCED',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170165',
            'name'=>'LLANO CHICO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170166',
            'name'=>'LLOA',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170167',
            'name'=>'MINDO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170168',
            'name'=>'NANEGAL',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170169',
            'name'=>'NANEGALITO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170170',
            'name'=>'NAYÓN',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170171',
            'name'=>'NONO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170172',
            'name'=>'PACTO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170173',
            'name'=>'PEDRO VICENTE MALDONADO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170174',
            'name'=>'PERUCHO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170175',
            'name'=>'PIFO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170176',
            'name'=>'PÍNTAG',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170177',
            'name'=>'POMASQUI',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170178',
            'name'=>'PUÉLLARO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170179',
            'name'=>'PUEMBO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170180',
            'name'=>'SAN ANTONIO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170181',
            'name'=>'SAN JOSÉ DE MINAS',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170182',
            'name'=>'SAN MIGUEL DE LOS BANCOS',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170183',
            'name'=>'TABABELA',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170184',
            'name'=>'TUMBACO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170185',
            'name'=>'YARUQUÍ',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170186',
            'name'=>'ZAMBIZA',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170187',
            'name'=>'PUERTO QUITO',
            'cod_canton'=>'1701'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170201',
            'name'=>'AYORA',
            'cod_canton'=>'1702'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170202',
            'name'=>'CAYAMBE',
            'cod_canton'=>'1702'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170203',
            'name'=>'JUAN MONTALVO',
            'cod_canton'=>'1702'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170250',
            'name'=>'CAYAMBE',
            'cod_canton'=>'1702'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170251',
            'name'=>'ASCÁZUBI',
            'cod_canton'=>'1702'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170252',
            'name'=>'CANGAHUA',
            'cod_canton'=>'1702'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170253',
            'name'=>'OLMEDO (PESILLO)',
            'cod_canton'=>'1702'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170254',
            'name'=>'OTÓN',
            'cod_canton'=>'1702'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170255',
            'name'=>'SANTA ROSA DE CUZUBAMBA',
            'cod_canton'=>'1702'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170350',
            'name'=>'MACHACHI',
            'cod_canton'=>'1703'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170351',
            'name'=>'ALÓAG',
            'cod_canton'=>'1703'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170352',
            'name'=>'ALOASÍ',
            'cod_canton'=>'1703'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170353',
            'name'=>'CUTUGLAHUA',
            'cod_canton'=>'1703'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170354',
            'name'=>'EL CHAUPI',
            'cod_canton'=>'1703'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170355',
            'name'=>'MANUEL CORNEJO ASTORGA (TANDAPI)',
            'cod_canton'=>'1703'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170356',
            'name'=>'TAMBILLO',
            'cod_canton'=>'1703'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170357',
            'name'=>'UYUMBICHO',
            'cod_canton'=>'1703'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170450',
            'name'=>'TABACUNDO',
            'cod_canton'=>'1704'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170451',
            'name'=>'LA ESPERANZA',
            'cod_canton'=>'1704'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170452',
            'name'=>'MALCHINGUÍ',
            'cod_canton'=>'1704'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170453',
            'name'=>'TOCACHI',
            'cod_canton'=>'1704'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170454',
            'name'=>'TUPIGACHI',
            'cod_canton'=>'1704'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170501',
            'name'=>'SANGOLQUÍ',
            'cod_canton'=>'1705'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170502',
            'name'=>'SAN PEDRO DE TABOADA',
            'cod_canton'=>'1705'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170503',
            'name'=>'SAN RAFAEL',
            'cod_canton'=>'1705'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170550',
            'name'=>'SANGOLQUI',
            'cod_canton'=>'1705'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170551',
            'name'=>'COTOGCHOA',
            'cod_canton'=>'1705'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170552',
            'name'=>'RUMIPAMBA',
            'cod_canton'=>'1705'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170750',
            'name'=>'SAN MIGUEL DE LOS BANCOS',
            'cod_canton'=>'1707'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170751',
            'name'=>'MINDO',
            'cod_canton'=>'1707'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170752',
            'name'=>'PEDRO VICENTE MALDONADO',
            'cod_canton'=>'1707'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170753',
            'name'=>'PUERTO QUITO',
            'cod_canton'=>'1707'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170850',
            'name'=>'PEDRO VICENTE MALDONADO',
            'cod_canton'=>'1708'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'170950',
            'name'=>'PUERTO QUITO',
            'cod_canton'=>'1709'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180101',
            'name'=>'ATOCHA – FICOA',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180102',
            'name'=>'CELIANO MONGE',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180103',
            'name'=>'HUACHI CHICO',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180104',
            'name'=>'HUACHI LORETO',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180105',
            'name'=>'LA MERCED',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180106',
            'name'=>'LA PENÍNSULA',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180107',
            'name'=>'MATRIZ',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180108',
            'name'=>'PISHILATA',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180109',
            'name'=>'SAN FRANCISCO',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180150',
            'name'=>'AMBATO',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180151',
            'name'=>'AMBATILLO',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180152',
            'name'=>'ATAHUALPA (CHISALATA)',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180153',
            'name'=>'AUGUSTO N. MARTÍNEZ (MUNDUGLEO)',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180154',
            'name'=>'CONSTANTINO FERNÁNDEZ (CAB. EN CULLITAHUA)',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180155',
            'name'=>'HUACHI GRANDE',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180156',
            'name'=>'IZAMBA',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180157',
            'name'=>'JUAN BENIGNO VELA',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180158',
            'name'=>'MONTALVO',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180159',
            'name'=>'PASA',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180160',
            'name'=>'PICAIGUA',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180161',
            'name'=>'PILAGÜÍN (PILAHÜÍN)',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180162',
            'name'=>'QUISAPINCHA (QUIZAPINCHA)',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180163',
            'name'=>'SAN BARTOLOMÉ DE PINLLOG',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180164',
            'name'=>'SAN FERNANDO (PASA SAN FERNANDO)',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180165',
            'name'=>'SANTA ROSA',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180166',
            'name'=>'TOTORAS',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180167',
            'name'=>'CUNCHIBAMBA',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180168',
            'name'=>'UNAMUNCHO',
            'cod_canton'=>'1801'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180250',
            'name'=>'BAÑOS DE AGUA SANTA',
            'cod_canton'=>'1802'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180251',
            'name'=>'LLIGUA',
            'cod_canton'=>'1802'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180252',
            'name'=>'RÍO NEGRO',
            'cod_canton'=>'1802'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180253',
            'name'=>'RÍO VERDE',
            'cod_canton'=>'1802'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180254',
            'name'=>'ULBA',
            'cod_canton'=>'1802'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180350',
            'name'=>'CEVALLOS',
            'cod_canton'=>'1803'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180450',
            'name'=>'MOCHA',
            'cod_canton'=>'1804'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180451',
            'name'=>'PINGUILÍ',
            'cod_canton'=>'1804'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180550',
            'name'=>'PATATE',
            'cod_canton'=>'1805'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180551',
            'name'=>'EL TRIUNFO',
            'cod_canton'=>'1805'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180552',
            'name'=>'LOS ANDES (CAB. EN POATUG)',
            'cod_canton'=>'1805'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180553',
            'name'=>'SUCRE (CAB. EN SUCRE-PATATE URCU)',
            'cod_canton'=>'1805'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180650',
            'name'=>'QUERO',
            'cod_canton'=>'1806'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180651',
            'name'=>'RUMIPAMBA',
            'cod_canton'=>'1806'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180652',
            'name'=>'YANAYACU - MOCHAPATA (CAB. EN YANAYACU)',
            'cod_canton'=>'1806'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180701',
            'name'=>'PELILEO',
            'cod_canton'=>'1807'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180702',
            'name'=>'PELILEO GRANDE',
            'cod_canton'=>'1807'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180750',
            'name'=>'PELILEO',
            'cod_canton'=>'1807'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180751',
            'name'=>'BENÍTEZ (PACHANLICA)',
            'cod_canton'=>'1807'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180752',
            'name'=>'BOLÍVAR',
            'cod_canton'=>'1807'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180753',
            'name'=>'COTALÓ',
            'cod_canton'=>'1807'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180754',
            'name'=>'CHIQUICHA (CAB. EN CHIQUICHA GRANDE)',
            'cod_canton'=>'1807'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180755',
            'name'=>'EL ROSARIO (RUMICHACA)',
            'cod_canton'=>'1807'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180756',
            'name'=>'GARCÍA MORENO (CHUMAQUI)',
            'cod_canton'=>'1807'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180757',
            'name'=>'GUAMBALÓ (HUAMBALÓ)',
            'cod_canton'=>'1807'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180758',
            'name'=>'SALASACA',
            'cod_canton'=>'1807'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180801',
            'name'=>'CIUDAD NUEVA',
            'cod_canton'=>'1808'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180802',
            'name'=>'PÍLLARO',
            'cod_canton'=>'1808'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180850',
            'name'=>'PÍLLARO',
            'cod_canton'=>'1808'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180851',
            'name'=>'BAQUERIZO MORENO',
            'cod_canton'=>'1808'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180852',
            'name'=>'EMILIO MARÍA TERÁN (RUMIPAMBA)',
            'cod_canton'=>'1808'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180853',
            'name'=>'MARCOS ESPINEL (CHACATA)',
            'cod_canton'=>'1808'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180854',
            'name'=>'PRESIDENTE URBINA (CHAGRAPAMBA -PATZUCUL)',
            'cod_canton'=>'1808'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180855',
            'name'=>'SAN ANDRÉS',
            'cod_canton'=>'1808'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180856',
            'name'=>'SAN JOSÉ DE POALÓ',
            'cod_canton'=>'1808'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180857',
            'name'=>'SAN MIGUELITO',
            'cod_canton'=>'1808'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180950',
            'name'=>'TISALEO',
            'cod_canton'=>'1809'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'180951',
            'name'=>'QUINCHICOTO',
            'cod_canton'=>'1809'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190101',
            'name'=>'EL LIMÓN',
            'cod_canton'=>'1901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190102',
            'name'=>'ZAMORA',
            'cod_canton'=>'1901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190150',
            'name'=>'ZAMORA',
            'cod_canton'=>'1901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190151',
            'name'=>'CUMBARATZA',
            'cod_canton'=>'1901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190152',
            'name'=>'GUADALUPE',
            'cod_canton'=>'1901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190153',
            'name'=>'IMBANA (LA VICTORIA DE IMBANA)',
            'cod_canton'=>'1901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190154',
            'name'=>'PAQUISHA',
            'cod_canton'=>'1901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190155',
            'name'=>'SABANILLA',
            'cod_canton'=>'1901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190156',
            'name'=>'TIMBARA',
            'cod_canton'=>'1901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190157',
            'name'=>'ZUMBI',
            'cod_canton'=>'1901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190158',
            'name'=>'SAN CARLOS DE LAS MINAS',
            'cod_canton'=>'1901'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190250',
            'name'=>'ZUMBA',
            'cod_canton'=>'1902'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190251',
            'name'=>'CHITO',
            'cod_canton'=>'1902'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190252',
            'name'=>'EL CHORRO',
            'cod_canton'=>'1902'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190253',
            'name'=>'EL PORVENIR DEL CARMEN',
            'cod_canton'=>'1902'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190254',
            'name'=>'LA CHONTA',
            'cod_canton'=>'1902'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190255',
            'name'=>'PALANDA',
            'cod_canton'=>'1902'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190256',
            'name'=>'PUCAPAMBA',
            'cod_canton'=>'1902'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190257',
            'name'=>'SAN FRANCISCO DEL VERGEL',
            'cod_canton'=>'1902'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190258',
            'name'=>'VALLADOLID',
            'cod_canton'=>'1902'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190259',
            'name'=>'SAN ANDRÉS',
            'cod_canton'=>'1902'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190350',
            'name'=>'GUAYZIMI',
            'cod_canton'=>'1903'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190351',
            'name'=>'ZURMI',
            'cod_canton'=>'1903'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190352',
            'name'=>'NUEVO PARAÍSO',
            'cod_canton'=>'1903'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190450',
            'name'=>'28 DE MAYO (SAN JOSÉ DE YACUAMBI)',
            'cod_canton'=>'1904'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190451',
            'name'=>'LA PAZ',
            'cod_canton'=>'1904'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190452',
            'name'=>'TUTUPALI',
            'cod_canton'=>'1904'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190550',
            'name'=>'YANTZAZA (YANZATZA)',
            'cod_canton'=>'1905'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190551',
            'name'=>'CHICAÑA',
            'cod_canton'=>'1905'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190552',
            'name'=>'EL PANGUI',
            'cod_canton'=>'1905'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190553',
            'name'=>'LOS ENCUENTROS',
            'cod_canton'=>'1905'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190650',
            'name'=>'EL PANGUI',
            'cod_canton'=>'1906'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190651',
            'name'=>'EL GUISME',
            'cod_canton'=>'1906'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190652',
            'name'=>'PACHICUTZA',
            'cod_canton'=>'1906'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190653',
            'name'=>'TUNDAYME',
            'cod_canton'=>'1906'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190750',
            'name'=>'ZUMBI',
            'cod_canton'=>'1907'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190751',
            'name'=>'PAQUISHA',
            'cod_canton'=>'1907'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190752',
            'name'=>'TRIUNFO-DORADO',
            'cod_canton'=>'1907'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190753',
            'name'=>'PANGUINTZA',
            'cod_canton'=>'1907'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190850',
            'name'=>'PALANDA',
            'cod_canton'=>'1908'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190851',
            'name'=>'EL PORVENIR DEL CARMEN',
            'cod_canton'=>'1908'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190852',
            'name'=>'SAN FRANCISCO DEL VERGEL',
            'cod_canton'=>'1908'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190853',
            'name'=>'VALLADOLID',
            'cod_canton'=>'1908'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190854',
            'name'=>'LA CANELA',
            'cod_canton'=>'1908'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190950',
            'name'=>'PAQUISHA',
            'cod_canton'=>'1909'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190951',
            'name'=>'BELLAVISTA',
            'cod_canton'=>'1909'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'190952',
            'name'=>'NUEVO QUITO',
            'cod_canton'=>'1909'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'200150',
            'name'=>'PUERTO BAQUERIZO MORENO',
            'cod_canton'=>'2001'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'200151',
            'name'=>'EL PROGRESO',
            'cod_canton'=>'2001'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'200152',
            'name'=>'ISLA SANTA MARÍA (FLOREANA) (CAB. EN PTO. VELASCO IBARRA)',
            'cod_canton'=>'2001'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'200250',
            'name'=>'PUERTO VILLAMIL',
            'cod_canton'=>'2002'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'200251',
            'name'=>'TOMÁS DE BERLANGA (SANTO TOMÁS)',
            'cod_canton'=>'2002'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'200350',
            'name'=>'PUERTO AYORA',
            'cod_canton'=>'2003'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'200351',
            'name'=>'BELLAVISTA',
            'cod_canton'=>'2003'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'200352',
            'name'=>'SANTA ROSA (INCLUYE LA ISLA BALTRA)',
            'cod_canton'=>'2003'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210150',
            'name'=>'NUEVA LOJA',
            'cod_canton'=>'2101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210151',
            'name'=>'CUYABENO',
            'cod_canton'=>'2101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210152',
            'name'=>'DURENO',
            'cod_canton'=>'2101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210153',
            'name'=>'GENERAL FARFÁN',
            'cod_canton'=>'2101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210154',
            'name'=>'TARAPOA',
            'cod_canton'=>'2101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210155',
            'name'=>'EL ENO',
            'cod_canton'=>'2101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210156',
            'name'=>'PACAYACU',
            'cod_canton'=>'2101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210157',
            'name'=>'JAMBELÍ',
            'cod_canton'=>'2101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210158',
            'name'=>'SANTA CECILIA',
            'cod_canton'=>'2101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210159',
            'name'=>'AGUAS NEGRAS',
            'cod_canton'=>'2101'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210250',
            'name'=>'EL DORADO DE CASCALES',
            'cod_canton'=>'2102'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210251',
            'name'=>'EL REVENTADOR',
            'cod_canton'=>'2102'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210252',
            'name'=>'GONZALO PIZARRO',
            'cod_canton'=>'2102'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210253',
            'name'=>'LUMBAQUÍ',
            'cod_canton'=>'2102'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210254',
            'name'=>'PUERTO LIBRE',
            'cod_canton'=>'2102'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210255',
            'name'=>'SANTA ROSA DE SUCUMBÍOS',
            'cod_canton'=>'2102'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210350',
            'name'=>'PUERTO EL CARMEN DEL PUTUMAYO',
            'cod_canton'=>'2103'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210351',
            'name'=>'PALMA ROJA',
            'cod_canton'=>'2103'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210352',
            'name'=>'PUERTO BOLÍVAR (PUERTO MONTÚFAR)',
            'cod_canton'=>'2103'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210353',
            'name'=>'PUERTO RODRÍGUEZ',
            'cod_canton'=>'2103'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210354',
            'name'=>'SANTA ELENA',
            'cod_canton'=>'2103'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210450',
            'name'=>'SHUSHUFINDI',
            'cod_canton'=>'2104'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210451',
            'name'=>'LIMONCOCHA',
            'cod_canton'=>'2104'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210452',
            'name'=>'PAÑACOCHA',
            'cod_canton'=>'2104'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210453',
            'name'=>'SAN ROQUE (CAB. EN SAN VICENTE)',
            'cod_canton'=>'2104'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210454',
            'name'=>'SAN PEDRO DE LOS COFANES',
            'cod_canton'=>'2104'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210455',
            'name'=>'SIETE DE JULIO',
            'cod_canton'=>'2104'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210550',
            'name'=>'LA BONITA',
            'cod_canton'=>'2105'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210551',
            'name'=>'EL PLAYÓN DE SAN FRANCISCO',
            'cod_canton'=>'2105'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210552',
            'name'=>'LA SOFÍA',
            'cod_canton'=>'2105'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210553',
            'name'=>'ROSA FLORIDA',
            'cod_canton'=>'2105'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210554',
            'name'=>'SANTA BÁRBARA',
            'cod_canton'=>'2105'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210650',
            'name'=>'EL DORADO DE CASCALES',
            'cod_canton'=>'2106'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210651',
            'name'=>'SANTA ROSA DE SUCUMBÍOS',
            'cod_canton'=>'2106'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210652',
            'name'=>'SEVILLA',
            'cod_canton'=>'2106'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210750',
            'name'=>'TARAPOA',
            'cod_canton'=>'2107'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210751',
            'name'=>'CUYABENO',
            'cod_canton'=>'2107'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'210752',
            'name'=>'AGUAS NEGRAS',
            'cod_canton'=>'2107'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220150',
            'name'=>'PUERTO FRANCISCO DE ORELLANA (EL COCA)',
            'cod_canton'=>'2201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220151',
            'name'=>'DAYUMA',
            'cod_canton'=>'2201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220152',
            'name'=>'TARACOA (NUEVA ESPERANZA: YUCA)',
            'cod_canton'=>'2201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220153',
            'name'=>'ALEJANDRO LABAKA',
            'cod_canton'=>'2201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220154',
            'name'=>'EL DORADO',
            'cod_canton'=>'2201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220155',
            'name'=>'EL EDÉN',
            'cod_canton'=>'2201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220156',
            'name'=>'GARCÍA MORENO',
            'cod_canton'=>'2201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220157',
            'name'=>'INÉS ARANGO (CAB. EN WESTERN)',
            'cod_canton'=>'2201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220158',
            'name'=>'LA BELLEZA',
            'cod_canton'=>'2201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220159',
            'name'=>'NUEVO PARAÍSO (CAB. EN UNIÓN',
            'cod_canton'=>'2201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220160',
            'name'=>'SAN JOSÉ DE GUAYUSA',
            'cod_canton'=>'2201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220161',
            'name'=>'SAN LUIS DE ARMENIA',
            'cod_canton'=>'2201'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220201',
            'name'=>'TIPITINI',
            'cod_canton'=>'2202'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220250',
            'name'=>'NUEVO ROCAFUERTE',
            'cod_canton'=>'2202'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220251',
            'name'=>'CAPITÁN AUGUSTO RIVADENEYRA',
            'cod_canton'=>'2202'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220252',
            'name'=>'CONONACO',
            'cod_canton'=>'2202'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220253',
            'name'=>'SANTA MARÍA DE HUIRIRIMA',
            'cod_canton'=>'2202'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220254',
            'name'=>'TIPUTINI',
            'cod_canton'=>'2202'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220255',
            'name'=>'YASUNÍ',
            'cod_canton'=>'2202'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220350',
            'name'=>'LA JOYA DE LOS SACHAS',
            'cod_canton'=>'2203'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220351',
            'name'=>'ENOKANQUI',
            'cod_canton'=>'2203'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220352',
            'name'=>'POMPEYA',
            'cod_canton'=>'2203'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220353',
            'name'=>'SAN CARLOS',
            'cod_canton'=>'2203'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220354',
            'name'=>'SAN SEBASTIÁN DEL COCA',
            'cod_canton'=>'2203'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220355',
            'name'=>'LAGO SAN PEDRO',
            'cod_canton'=>'2203'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220356',
            'name'=>'RUMIPAMBA',
            'cod_canton'=>'2203'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220357',
            'name'=>'TRES DE NOVIEMBRE',
            'cod_canton'=>'2203'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220358',
            'name'=>'UNIÓN MILAGREÑA',
            'cod_canton'=>'2203'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220450',
            'name'=>'LORETO',
            'cod_canton'=>'2204'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220451',
            'name'=>'AVILA (CAB. EN HUIRUNO)',
            'cod_canton'=>'2204'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220452',
            'name'=>'PUERTO MURIALDO',
            'cod_canton'=>'2204'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220453',
            'name'=>'SAN JOSÉ DE PAYAMINO',
            'cod_canton'=>'2204'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220454',
            'name'=>'SAN JOSÉ DE DAHUANO',
            'cod_canton'=>'2204'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'220455',
            'name'=>'SAN VICENTE DE HUATICOCHA',
            'cod_canton'=>'2204'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'230101',
            'name'=>'ABRAHAM CALAZACÓN',
            'cod_canton'=>'2301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'230102',
            'name'=>'BOMBOLÍ',
            'cod_canton'=>'2301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'230103',
            'name'=>'CHIGUILPE',
            'cod_canton'=>'2301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'230104',
            'name'=>'RÍO TOACHI',
            'cod_canton'=>'2301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'230105',
            'name'=>'RÍO VERDE',
            'cod_canton'=>'2301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'230106',
            'name'=>'SANTO DOMINGO DE LOS COLORADOS',
            'cod_canton'=>'2301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'230107',
            'name'=>'ZARACAY',
            'cod_canton'=>'2301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'230150',
            'name'=>'SANTO DOMINGO DE LOS COLORADOS',
            'cod_canton'=>'2301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'230151',
            'name'=>'ALLURIQUÍN',
            'cod_canton'=>'2301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'230152',
            'name'=>'PUERTO LIMÓN',
            'cod_canton'=>'2301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'230153',
            'name'=>'LUZ DE AMÉRICA',
            'cod_canton'=>'2301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'230154',
            'name'=>'SAN JACINTO DEL BÚA',
            'cod_canton'=>'2301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'230155',
            'name'=>'VALLE HERMOSO',
            'cod_canton'=>'2301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'230156',
            'name'=>'EL ESFUERZO',
            'cod_canton'=>'2301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'230157',
            'name'=>'SANTA MARÍA DEL TOACHI',
            'cod_canton'=>'2301'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'240101',
            'name'=>'BALLENITA',
            'cod_canton'=>'2401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'240102',
            'name'=>'SANTA ELENA',
            'cod_canton'=>'2401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'240150',
            'name'=>'SANTA ELENA',
            'cod_canton'=>'2401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'240151',
            'name'=>'ATAHUALPA',
            'cod_canton'=>'2401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'240152',
            'name'=>'COLONCHE',
            'cod_canton'=>'2401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'240153',
            'name'=>'CHANDUY',
            'cod_canton'=>'2401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'240154',
            'name'=>'MANGLARALTO',
            'cod_canton'=>'2401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'240155',
            'name'=>'SIMÓN BOLÍVAR (JULIO MORENO)',
            'cod_canton'=>'2401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'240156',
            'name'=>'SAN JOSÉ DE ANCÓN',
            'cod_canton'=>'2401'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'240250',
            'name'=>'LA LIBERTAD',
            'cod_canton'=>'2402'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'240301',
            'name'=>'CARLOS ESPINOZA LARREA',
            'cod_canton'=>'2403'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'240302',
            'name'=>'GRAL. ALBERTO ENRÍQUEZ GALLO',
            'cod_canton'=>'2403'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'240303',
            'name'=>'VICENTE ROCAFUERTE',
            'cod_canton'=>'2403'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'240304',
            'name'=>'SANTA ROSA',
            'cod_canton'=>'2403'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'240350',
            'name'=>'SALINAS',
            'cod_canton'=>'2403'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'240351',
            'name'=>'ANCONCITO',
            'cod_canton'=>'2403'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'240352',
            'name'=>'JOSÉ LUIS TAMAYO (MUEY)',
            'cod_canton'=>'2403'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'900151',
            'name'=>'LAS GOLONDRINAS',
            'cod_canton'=>'9001'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'900351',
            'name'=>'MANGA DEL CURA',
            'cod_canton'=>'9003'
        ]);
        DB::table('parroquias')->insert([
            'cod_parroquia'=>'900451',
            'name'=>'EL PIEDRERO',
            'cod_canton'=>'9004'
        ]);

        /**DATOS DEL MENU DE NAVEGACIÓN**/
        DB::table('menu')->insert([
            'cod_menu'=>1,
            'name'=>'Inicio',
            'order'=>1,
            'icon'=>'home',
            'path'=>'/home'
        ]);

        DB::table('menu')->insert([
            'cod_menu'=>2,
            'name'=>'Mi Perfil',
            'order'=>2,
            'icon'=>'user',
            'path'=>'/profile'
        ]);
        DB::table('menu')->insert([
            'cod_menu'=>3,
            'name'=>'Sistemas Informaticos',
            'order'=>3,
            'icon'=>'server',
            'path'=>null
        ]);
        DB::table('menu')->insert([
            'cod_menu'=>4,
            'name'=>'Administración',
            'order'=>4,
            'icon'=>'cog',
            'path'=>null
        ]);






        DB::table('users')->insert([
            'cedula'=>'0250366515',
            'f_name'=>'Mesias',
            's_name'=>'Eduardo',
            'f_surname'=>'Bonilla',
            's_surname'=>'Guastay',
            'gender'=>'masculino',
            'mobile'=>'0980150689',
            'phone'=>'022777658',
            'photography'=>null,
            'date_of_birth'=>'1999-04-08',
            'ethnicity'=>'Mestizo/a',
            'civil_status'=>'Soltero/a',
            'type_auth'=>'manual',
            'password'=>password_hash('12345',PASSWORD_DEFAULT),
            'email'=>'eduardoguastay1999@gmail.com',
            'email_inst'=>'eguastay@ueb.edu.ec',
            'email_verified_at'=>'2021-03-29 07:03:20',
            'created_at'=>'2021-03-29 07:03:20',
            'updated_at'=>'2021-03-29 07:03:20'
        ]);
    }
}
