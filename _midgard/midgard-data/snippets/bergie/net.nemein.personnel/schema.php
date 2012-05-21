"default" => array (

    "name"        => "default",
    "description" => "Person card",
    "fields"      => array (
        "id" => array (
            "description" => "Database ID",
            "datatype"    => "text",
            "location"    => "id",
            "hidden"      => true
        ),
        "username" => array (
            "description" => "Username",
            "datatype"    => "text",
            "location"    => "username",
            "hidden"      => true
        ),
        "firstname" => array (
            "description" => "Firstname",
            "datatype"    => "text",
            "location"    => "firstname",
        ),
        "lastname" => array (
            "description" => "Lastname",
            "datatype"    => "text",
            "location"    => "lastname"
        ),
        "location" => array (
            "description" => "Location",
            "datatype"    => "text",
            "location"    => "parameter"
        ),
        "handphone" => array (
            "description" => "Mobile phone",
            "datatype"    => "text",
            "location"    => "handphone"
        ),
        "email" => array (
            "description" => "Email",
            "datatype"    => "text",
            "location"    => "email"
        ),
        "skype" => array (
            "description" => "Skype",
            "datatype"    => "text",
            "location"    => "parameter"
        ),
        "jabber" => array (
            "description" => "Jabber ID",
            "datatype"    => "text",
            "location"    => "parameter"
        ),
        "homepage" => array (
            "description" => "Home page",
            "datatype"    => "text",
            "location"    => "homepage"
        ),
        "pgp" => array (
            "description" => "PGP fingerprint",
            "datatype"    => "text",
            "location"    => "pgpkey"
        ),
        "description" => array (
            "description" => "Short bio",
            "datatype"    => "text",
            "location"    => "extra",
            "widget_text_inputstyle"=>"longtext"
        ),
        "image" => array (
            "description" => "Image",
            "datatype"    => "image",
            "location"    => "attachment"
        )
    )

)