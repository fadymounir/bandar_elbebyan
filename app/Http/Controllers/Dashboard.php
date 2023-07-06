<?php

namespace App\Http\Controllers;


class Dashboard extends Controller
{
    private string $main_path       = "admin.";
    private string $components_path = "components.inputs.";

    protected function getViewPath(string $path): string
    {
        return $this->main_path . $path . ".";
    }

    protected function componentsPath(string $element_path): string
    {
        return $this->main_path . $this->components_path . $element_path;
    }

}
