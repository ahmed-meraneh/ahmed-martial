<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Table Columns
    |--------------------------------------------------------------------------
    */

    'column.name' => 'Nom',
    'column.guard_name' => 'Nom du Guard',
    'column.roles' => 'Roles',
    'column.permissions' => 'Permissions',
    'column.updated_at' => 'Mis à jour à',

    /*
    |--------------------------------------------------------------------------
    | Form Fields
    |--------------------------------------------------------------------------
    */

    'field.name' => 'Nom',
    'field.guard_name' => 'Nom du Guard',
    'field.permissions' => 'Permissions',
    'field.select_all.name' => 'Tout sélectionner',
    'field.select_all.message' => 'Activer toutes les autorisations pour ce rôle',

    /*
    |--------------------------------------------------------------------------
    | Navigation & Resource
    |--------------------------------------------------------------------------
    */

    'nav.group' => 'Filament Shield',
    'nav.role.label' => 'Rôles',
    'nav.role.icon' => 'heroicon-o-shield-check',
    'resource.label.role' => 'Rôle',
    'resource.label.roles' => 'Rôles',

    /*
    |--------------------------------------------------------------------------
    | Section & Tabs
    |--------------------------------------------------------------------------
    */
    'section' => 'Entités',
    'resources' => 'Ressources',
    'widgets' => 'Widgets',
    'pages' => 'Pages',
    'custom' => 'Permissions personnalisées',

    /**
     * Role Setting Page
     */
    'page' => [
        'name' => 'Setting',
        'icon' => 'heroicon-o-adjustments',
        'save' => 'Save',
        'generate' => 'Save & Generate',
    ],
    'labels.super_admin.toggle_input' => 'Super Admin Rôle',
    'labels.super_admin.text_input' => 'Nom du rôle',
    'labels.filament_user.toggle_input' => 'Filament User Rôle',
    'labels.filament_user.text_input' => 'Nom du rôle',
    'labels.role_policy.toggle_input' => 'Role Policy enregistrée?',
    'labels.role_policy.message' => 'Assurez-vous que la politique est enregistrée et que les permissions sont appliquées',
    'labels.prefixes.placeholder' => 'Préfixes d\'autorisation par défaut',
    'labels.prefixes.resource' => 'Resource',
    'labels.prefixes.resource.placeholder' => 'Ajouter ou supprimer des autorisations de ressources...',
    'labels.prefixes.page' => 'Page',
    'labels.prefixes.widget' => 'Widget',
    'labels.entities.placeholder' => 'Générateurs de permissions',
    'labels.entities.message' => 'Les générateurs et les onglets sont ',
    'labels.entities.resources' => 'Resources',
    'labels.entities.pages' => 'Pages',
    'labels.entities.widgets' => 'Widgets',
    'labels.entities.custom_permissions' => 'Permissions personnalisées',
    'labels.entities.custom_permissions.message' => 'Tab est ',
    'labels.status.enabled' => 'Activé',
    'labels.status.disabled' => 'Désactivé',
    'labels.status.yes' => 'Oui',
    'labels.status.no' => 'Non',
    'labels.exclude.placeholder' => 'Exclusion Mode',
    'labels.exclude.message' => 'By Enabling the Exclusion Mode you can instruct permission generator to skip creating permissions for the entities you select.',
    'labels.exclude.resources' => 'Resources',
    'labels.exclude.resources.placeholder' => 'Select resources ...',
    'labels.exclude.pages' => 'Pages',
    'labels.exclude.pages.placeholder' => 'Select pages ...',
    'labels.exclude.widgets' => 'Widgets',
    'labels.exclude.widgets.placeholder' => 'Select widgets ...',

    /**
     * HasPageShield Trait Forbidden Message
     */
    'forbidden' => 'Vous n\'avez pas la permission d\'accéder',
];
