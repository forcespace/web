<?
    $name = getGetParameter('first_name');
    
    $_GET = [
        'first_name' => 'Sergey',
        'last_name' => 'Pavlov'
    ];
    
    function getGetParameter(string $name): ?string
    {
        return isset($_GET[$name]) ? (string)$_GET[$name] : null;
    }
    
    echo $name;