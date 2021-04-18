<?php declare(strict_types=1);

/** Created by VV Db Model Generator */
namespace App\Db\Main\Tables;

use VV\Db\Model\Field;

class UserTable extends \App\Db\Main\Table {

    //region Auto-generated area
    protected const NAME = 'tbl_user';
    protected const PK = 'user_id';
    protected const PK_FIELDS = ['user_id'];
    protected const DFLT_ALIAS = 'u';
    protected const FIELDS = [
        'user_id' => [Field::T_NUM, null, 8, 17, 0, 'nextval(\'tbl_user_user_id_seq\'::regclass)', true, false],
        'name' => [Field::T_CHR, 100, null, 0, null, null, true, false],
        'mobile' => [Field::T_CHR, 15, null, 0, null, null, false, false],
        'email' => [Field::T_CHR, 100, null, 0, null, null, false, false],
        'password' => [Field::T_CHR, 256, null, 0, null, null, false, false],
        'deleted' => [Field::T_NUM, null, 2, 4, 0, '0', true, false],
        'date_created' => [Field::T_DATETIME, null, null, 0, null, 'CURRENT_TIMESTAMP', true, false],
    ];
    protected const FOREING_KEYS = [
    ];
    //endregion
}