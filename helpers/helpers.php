<?php

function private_label($key = null) {
    if (is_null($key)) {
        return app('private-label');
    }

    return app('private-label')->get($key);
}
