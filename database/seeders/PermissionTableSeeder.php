<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'System Settings', 'Users', 'Invoices', 'Employees Salary', 'Rates', 'Bullk','DATA CENTER',
            'Sales & Reservations', 'operations', 'EVGM & PL', 'Sales & Operations',
            'Accounting', 'Dashboard-Sales', 'Dashboard-Opretions', 'Dashboard-Accounting',
            'My Account' , 'portLines' , 'airLines' ,'Email' , 'Chat'
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
