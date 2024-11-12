<?php

return [
    'custom_fields'		        => 'Egendefinerte Felt',
    'manage'                    => 'Administrer',
    'field'		                => 'Felt',
    'about_fieldsets_title'		=> 'Om Feltsett',
    'about_fieldsets_text'		=> 'Feltsett lar deg opprette grupper av egendefinerte felt som kan gjenbrukes til bestemte modelltyper.',
    'custom_format'             => 'Tilpasset Regex-format...',
    'encrypt_field'      	        => 'Kryptere verdien av dette feltet i databasen',
    'encrypt_field_help'      => 'ADVARSEL: Ved å kryptere et felt gjør du at det ikke kan søkes på.',
    'encrypted'      	        => 'Kryptert',
    'fieldset'      	        => 'Feltsett',
    'qty_fields'      	      => 'Antall Felt',
    'fieldsets'      	        => 'Feltsett',
    'fieldset_name'           => 'Feltsett Navn',
    'field_name'              => 'Felt Navn',
    'field_values'            => 'Felt verdier',
    'field_values_help'       => 'Legge til alternativer, ett per linje. Tomme linjer utenom den første vil bli ignorerert.',
    'field_element'           => 'Skjema Element',
    'field_element_short'     => 'Element',
    'field_format'            => 'Format',
    'field_custom_format'     => 'Egendefinert Format',
    'field_custom_format_help'     => 'Dette feltet lar deg bruke et regex-uttrykk for validering. Det skal begynne med "regex:" - for eksempel å validere at en egendefinert feltverdi inneholder en gyldig IMEI (15 numeriske siffer), vil du bruke <code>regex:/^[0-9]{15}$/</code>.',
    'required'   		          => 'Obligatorisk',
    'req'   		              => 'Obl.',
    'used_by_models'   		    => 'Brukes av modeller',
    'order'   		            => 'Bestill',
    'create_fieldset'         => 'Nytt Feltsett',
    'update_fieldset'         => 'Update Fieldset',
    'fieldset_does_not_exist'   => 'Fieldset :id does not exist',
    'fieldset_updated'         => 'Fieldset updated',
    'create_fieldset_title' => 'Opprett et nytt feltsett',
    'create_field'            => 'Nytt Egendefinert Felt',
    'create_field_title' => 'Opprett nytt egendefinert felt',
    'value_encrypted'      	        => 'Verdien i dette feltet er kryptert i databasen. Bare administratorer kan se hva som står i dette feltet',
    'show_in_email'     => 'Inkluder verdien i dette feltet i utsjekkseposter sendt til brukeren? Krypterte felter kan ikke inkluderes i eposter.',
    'help_text' => 'Hjelpetekst',
    'help_text_description' => 'Dette er en valgfri tekst som vises under feltet når man redigerer et element, ment for å gi kontekst til feltets innhold.',
    'about_custom_fields_title' => 'Om egendefinerte felt',
    'about_custom_fields_text' => 'Egendefinerte felt lar deg legge til vilkårlige attributter til eiendeler.',
    'add_field_to_fieldset' => 'Legg feltet inn i feltsett',
    'make_optional' => 'Påkrevd - klikk for å gjøre valgfritt',
    'make_required' => 'Valgfritt - klikk for å gjøre påkrevd',
    'reorder' => 'Endre rekkefølge',
    'db_field' => 'DB-felt',
    'db_convert_warning' => 'WARNING. This field is in the custom fields table as <code>:db_column</code> but should be <code>:expected</code>.',
    'is_unique' => 'This value must be unique across all assets',
    'unique' => 'Unique',
    'display_in_user_view' => 'Allow the checked out user to view these values in their View Assigned Assets page',
    'display_in_user_view_table' => 'Visible to User',
    'auto_add_to_fieldsets' => 'Automatically add this to every new fieldset',
    'add_to_preexisting_fieldsets' => 'Add to any existing fieldsets',
];
