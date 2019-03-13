<?php
if (! function_exists('private_label')) {
    function private_label($key = null) {
        if (is_null($key)) {
            return app('private-label');
        }

        return app('private-label')->$key;
    }
}
