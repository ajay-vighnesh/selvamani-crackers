<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {

        $this->migrator->add('general.global_discount', 50);
        $this->migrator->add('general.min_order_value', 2000);
        $this->migrator->add('general.starting_year', 2023);
        $this->migrator->add('general.company_name', 'MC');
        $this->migrator->add('general.company_address', 'D.No:2/363,Kananjampatti village, Sivakasi, Tamilnadu -626131');
        $this->migrator->add('general.mobile_number_1', 8122703101);
        $this->migrator->add('general.mobile_number_2', 8072583471);
        $this->migrator->add('general.mobile_number_3', 0000000000);
        $this->migrator->add('general.mobile_number_4', 0000000000);
        $this->migrator->add('general.mobile_number_5', 0000000000);
      
    }
};
