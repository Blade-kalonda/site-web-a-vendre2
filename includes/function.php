<?php

function length_validation(string $data, int $min, int $max) {
    if (mb_strlen($data) < $min) return false;
    if (mb_strlen($data) > $max) return false;

    return true;
}

function varDumping(...$args) {
    echo '<div class="py-70">';
    foreach ($args as $arg):
        echo '<div class="bg-dark text-primary px-3 small"><pre>';
        var_dump($arg);
        echo '</pre></div>';
    endforeach;
    echo '</div>';
}

function get_data(array $tableData, string $field, ?string $databaseValue = null) {
    if($databaseValue === null) return '';
    if (!isset($tableData[$field]) && !isset($databaseValue)) return '';
    if (isset($databaseValue) && !isset($table[$field])) return htmlentities($databaseValue);

    return htmlentities($tableData[$field]);
}

function get_selected_value(string $field, string $value) {
    if(isset($_POST[$field]) && $_POST[$field] === $value) return 'selected';

    return null;
}

function not_empty($data) {
    if (is_string($data) && (trim($data) === "" || empty($data))) return false;
    if (is_array($data)) {
        foreach ($data as $datum) {
            if(is_array($datum)) {
                not_empty($datum);
            } else if (empty($datum) || $datum === null || trim($datum) === '') {
                return false;
            }
        }
    }

    return true;
}

function display_errors(array $errorsArray, string $field) {
    if (!isset($errorsArray[$field])) return '';
    $error = $errorsArray[$field];
    return <<<HTML
        <div class="w-100"><small class="text-danger">$error</small></div>
    HTML;

}

function sanitize ($data) {
    if (is_array($data)) {
        foreach ($data as $index => $datum) {
            if (is_array($datum)) {
                sanitize($data[$index]);
            } else {
                $data[$index] = htmlentities($datum);
            }
        }
        return $data;
    }
    return htmlentities($data);
}

function redirect_to(string $path) {
    header('Location: ' . $path);
    exit();
}

function time_format(string $stringTime) {
    return strftime("%d %b %Y à %R", strtotime($stringTime));
}