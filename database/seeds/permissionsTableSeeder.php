<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class permissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['guard_name' => 'web', 'name' => 'readAreas']);
        Permission::create(['guard_name' => 'web', 'name' => 'createAreas']);
        Permission::create(['guard_name' => 'web', 'name' => 'updateAreas']);
        Permission::create(['guard_name' => 'web', 'name' => 'deleteAreas']);


        Permission::create(['guard_name' => 'web', 'name' => 'readComites']);
        Permission::create(['guard_name' => 'web', 'name' => 'createComites']);
        Permission::create(['guard_name' => 'web', 'name' => 'updateComites']);
        Permission::create(['guard_name' => 'web', 'name' => 'deleteComites']);


        Permission::create(['guard_name' => 'web', 'name' => 'readDocuments']);
        Permission::create(['guard_name' => 'web', 'name' => 'createDocuments']);
        Permission::create(['guard_name' => 'web', 'name' => 'updateDocuments']);
        Permission::create(['guard_name' => 'web', 'name' => 'deleteDocuments']);


        Permission::create(['guard_name' => 'web', 'name' => 'readIndicators']);
        Permission::create(['guard_name' => 'web', 'name' => 'createIndicators']);
        Permission::create(['guard_name' => 'web', 'name' => 'updateIndicators']);
        Permission::create(['guard_name' => 'web', 'name' => 'deleteIndicators']);

        Permission::create(['guard_name' => 'web', 'name' => 'readInformes']);
        Permission::create(['guard_name' => 'web', 'name' => 'createInformes']);
        Permission::create(['guard_name' => 'web', 'name' => 'updateInformes']);
        Permission::create(['guard_name' => 'web', 'name' => 'deleteInformes']);


        Permission::create(['guard_name' => 'web', 'name' => 'readReleases']);
        Permission::create(['guard_name' => 'web', 'name' => 'createReleases']);
        Permission::create(['guard_name' => 'web', 'name' => 'updateReleases']);
        Permission::create(['guard_name' => 'web', 'name' => 'deleteReleases']);


        Permission::create(['guard_name' => 'web', 'name' => 'readUser']);
        Permission::create(['guard_name' => 'web', 'name' => 'createUser']);
        Permission::create(['guard_name' => 'web', 'name' => 'updateUser']);
        Permission::create(['guard_name' => 'web', 'name' => 'deleteUser']);


        Permission::create(['guard_name' => 'web', 'name' => 'readProcess']);
        Permission::create(['guard_name' => 'web', 'name' => 'createProcess']);
        Permission::create(['guard_name' => 'web', 'name' => 'updateProcess']);
        Permission::create(['guard_name' => 'web', 'name' => 'deleteProcess']);


        Permission::create(['guard_name' => 'web', 'name' => 'readPermissions']);
        Permission::create(['guard_name' => 'web', 'name' => 'createPermissions']);
        Permission::create(['guard_name' => 'web', 'name' => 'updatePermissions']);
        Permission::create(['guard_name' => 'web', 'name' => 'deletePermissions']);


        Permission::create(['guard_name' => 'web', 'name' => 'readRole']);
        Permission::create(['guard_name' => 'web', 'name' => 'createRole']);
        Permission::create(['guard_name' => 'web', 'name' => 'updateRole']);
        Permission::create(['guard_name' => 'web', 'name' => 'deleteRole']);

        Permission::create(['guard_name' => 'web', 'name' => 'readRequisito']);
        Permission::create(['guard_name' => 'web', 'name' => 'createRequisito']);
        Permission::create(['guard_name' => 'web', 'name' => 'updateRequisito']);
        Permission::create(['guard_name' => 'web', 'name' => 'deleteRequisito']);

        Permission::create(['guard_name' => 'web', 'name' => 'readAlerts']);
        Permission::create(['guard_name' => 'web', 'name' => 'createAlerts']);
        Permission::create(['guard_name' => 'web', 'name' => 'updateAlerts']);
        Permission::create(['guard_name' => 'web', 'name' => 'deleteAlerts']);

        Permission::create(['guard_name' => 'web', 'name' => 'indexDocuments']);

        // 'readAreas',
        // 'createAreas',
        // 'updateAreas',
        // 'deleteAreas',
        // 'readComites',
        // 'createComites',
        // 'updateComites',
        // 'deleteComites',
        // 'readDocuments',
        // 'createDocuments',
        // 'updateDocuments',
        // 'deleteDocuments',
        // 'readIndicators',
        // 'createIndicators',
        // 'updateIndicators',
        // 'deleteIndicators',
        // 'readInformes',
        // 'createInformes',
        // 'updateInformes',
        // 'deleteInformes',
        // 'readReleases',
        // 'createReleases',
        // 'updateReleases',
        // 'deleteReleases',
        // 'readUser',
        // 'createUser',
        // 'updateUser',
        // 'deleteUser',
        // 'readProcess',
        // 'createProcess',
        // 'updateProcess',
        // 'deleteProcess',
        // 'readPermissions',
        // 'createPermissions',
        // 'updatePermissions',
        // 'deletePermissions',
        // 'readRole',
        // 'createRole',
        // 'updateRole',
        // 'deleteRole',
        // 'readRequisito',
        // 'createRequisito',
        // 'updateRequisito',
        // 'deleteRequisito',
        // 'readAlerts',
        // 'createAlerts',
        // 'updateAlerts',
        // 'deleteAlerts',
        // 'indexDocuments'

        $allpermisos = Permission::pluck('name');

        $role = Role::findByName('Gerente');
        $role->syncPermissions($allpermisos);


        $role = Role::findByName('Director');
        $role->syncPermissions($allpermisos);


        $role = Role::findByName('JefeArea');
        $role->syncPermissions($allpermisos);



        $role = Role::findByName('User');
        $role->syncPermissions(['readComites',
            'readDocuments',
            'readInformes',
            'readIndicators',
            'readReleases',
            'readUser',
            'readProcess',
            'readAlerts']);
    }
}
