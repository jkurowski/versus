<?php

if (! function_exists('roomStatusBadge')) {
    function roomStatusBadge(int $number)
    {
        switch ($number) {
            case '1':
                return 'bg-success';
            case '4':
            case '2':
                return 'bg-warning';
            case '3':
                return 'bg-danger';
        }
    }
}
