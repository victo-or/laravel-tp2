<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    "accepted" => "Le champ doit être accepté.",
    "accepted_if" => "Le champ doit être accepté lorsque :other est :value.",
    "active_url" => "Le champ n'est pas une URL valide.",
    "after" => "Le champ doit être une date postérieure à :date.",
    "after_or_equal" => "Le champ doit être une date postérieure ou égale à :date.",
    "alpha" => "Le champ doit contenir uniquement des lettres.",
    "alpha_dash" => "Le champ ne doit contenir que des lettres, des chiffres, des tirets et des underscores.",
    "alpha_num" => "Le champ doit contenir uniquement des lettres et des chiffres.",
    "array" => "Le champ doit être un tableau.",
    // "before" => "Le champ doit être une date antérieure à :date.",
    "before" => "Le champ doit être une date antérieure à il y a 16 ans.",
    "before_or_equal" => "Le champ doit être une date antérieure ou égale à :date.",
    "between" => [
        "numeric" => "Le champ doit être compris entre :min et :max.",
        "file" => "Le champ doit avoir une taille entre :min et :max kilo-octets.",
        "string" => "Le champ doit contenir entre :min et :max caractères.",
        "array" => "Le champ doit contenir entre :min et :max éléments.",
    ],
    "boolean" => "Le champ doit être vrai ou faux.",
    "confirmed" => "La confirmation du champ ne correspond pas.",
    "current_password" => "Le mot de passe est incorrect.",
    "date" => "Le champ n'est pas une date valide.",
    "date_equals" => "Le champ doit être une date égale à :date.",
    "date_format" => "Le champ ne correspond pas au format :format.",
    "different" => "Les champs et :other doivent être différents.",
    "digits" => "Le champ doit contenir :digits chiffres.",
    "digits_between" => "Le champ doit contenir entre :min et :max chiffres.",
    "dimensions" => "Le champ a des dimensions d'image invalides.",
    "distinct" => "Le champ a une valeur en double.",
    "email" => "Le champ doit être une adresse e-mail valide.",
    "ends_with" => "Le champ doit se terminer par l'une des valeurs suivantes : :values.",
    "exists" => "Le champ sélectionné est invalide.",
    "file" => "Le champ doit être un fichier.",
    "filled" => "Le champ doit avoir une valeur.",
    "gt" => [
        "numeric" => "Le champ doit être supérieur à :value.",
        "file" => "Le champ doit avoir une taille supérieure à :value kilo-octets.",
        "string" => "Le champ doit contenir plus de :value caractères.",
        "array" => "Le champ doit contenir plus de :value éléments.",
    ],
    "gte" => [
        "numeric" => "Le champ doit être supérieur ou égal à :value.",
        "file" => "Le champ doit avoir une taille supérieure ou égale à :value kilo-octets.",
        "string" => "Le champ doit contenir :value caractères ou plus.",
        "array" => "Le champ doit contenir :value éléments ou plus.",
    ],
    "image" => "Le champ doit être une image.",
    "in" => "Le champ sélectionné est invalide.",
    "in_array" => "Le champ n'existe pas dans :other.",
    "integer" => "Le champ doit être un nombre entier.",
    "ip" => "Le champ doit être une adresse IP valide.",
    "ipv4" => "Le champ doit être une adresse IPv4 valide.",
    "ipv6" => "Le champ doit être une adresse IPv6 valide.",
    "json" => "Le champ doit être une chaîne JSON valide.",
    "lt" => [
        "numeric" => "Le champ doit être inférieur à :value.",
        "file" => "Le champ doit avoir une taille inférieure à :value kilo-octets.",
        "string" => "Le champ doit contenir moins de :value caractères.",
        "array" => "Le champ doit contenir moins de :value éléments.",
    ],
    "lte" => [
        "numeric" => "Le champ doit être inférieur ou égal à :value.",
        "file" => "Le champ doit avoir une taille inférieure ou égale à :value kilo-octets.",
        "string" => "Le champ doit contenir :value caractères ou moins.",
        "array" => "Le champ ne doit pas contenir plus de :value éléments.",
    ],
    "max" => [
        "numeric" => "Le champ ne doit pas dépasser :max.",
        "file" => "Le champ ne doit pas dépasser :max kilo-octets.",
        "string" => "Le champ ne doit pas dépasser :max caractères.",
        "array" => "Le champ ne doit pas contenir plus de :max éléments.",
    ],
    "mimes" => "Le champ doit être un fichier de type :values.",
    "mimetypes" => "Le champ doit être un fichier de type :values.",
    "min" => [
        "numeric" => "Le champ doit être d'au moins :min.",
        "file" => "Le champ doit avoir une taille d'au moins :min kilo-octets.",
        "string" => "Le champ doit contenir au moins :min caractères.",
        "array" => "Le champ doit contenir au moins :min éléments.",
    ],
    "multiple_of" => "Le champ doit être un multiple de :value.",
    "not_in" => "Le champ sélectionné est invalide.",
    "not_regex" => "Le format du champ est invalide.",
    "numeric" => "Le champ doit être un nombre.",
    "password" => "Le mot de passe est incorrect.",
    "present" => "Le champ doit être présent.",
    "regex" => "Le format du champ est invalide.",
    "required" => "Le champ est requis.",
    "required_if" => "Le champ est requis lorsque :other est :value.",
    "required_unless" => "Le champ est requis sauf si :other est dans :values.",
    "required_with" => "Le champ est requis lorsque :values est présent.",
    "required_with_all" => "Le champ est requis lorsque :values sont présents.",
    "required_without" => "Le champ est requis lorsque :values n'est pas présent.",
    "required_without_all" => "Le champ est requis lorsque aucun de :values n'est présent.",
    "prohibited" => "Le champ est interdit.",
    "prohibited_if" => "Le champ est interdit lorsque :other est :value.",
    "prohibited_unless" => "Le champ est interdit sauf si :other est dans :values.",
    "same" => "Le champ et :other doivent correspondre.",
    "size" => [
        "numeric" => "Le champ doit être de :size.",
        "file" => "Le champ doit être de :size kilo-octets.",
        "string" => "Le champ doit contenir :size caractères.",
        "array" => "Le champ doit contenir :size éléments.",
    ],
    "starts_with" => "Le champ doit commencer par l'une des valeurs suivantes : :values.",
    "string" => "Le champ doit être une chaîne de caractères.",
    "timezone" => "Le champ doit être un fuseau horaire valide.",
    "unique" => "Le champ a déjà été pris.",
    "uploaded" => "Le champ n'a pas pu être téléchargé.",
    "url" => "Le champ doit être une URL valide.",
    "uuid" => "Le champ doit être un UUID valide.",
    

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    "custom" => [
        "attribute-name" => [
            "rule-name" => "message-personnalisé",
        ],
    ],
    

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
