<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function find_non_unique_elements($array)
    {
        $counts = array_count_values($array);
        $non_unique = array_filter($counts, function ($count) {
            return $count > 1;
        });

        $result = array();
        foreach ($array as $key => $value) {
            if (isset($non_unique[$value])) {
                $result[$key] = $value;
            }
        }

        return $result;
    }

    // Example usage:
    $emails = [
        "test@example.com",
        "user@domain.com",
        "test@example.com",
        "admin@domain.com",
        "user@domain.com"
    ];

    $non_unique_emails = find_non_unique_elements($emails);

    print_r($non_unique_emails);
    ?>
</body>

</html>