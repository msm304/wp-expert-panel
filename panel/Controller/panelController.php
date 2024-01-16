<?php

class panelController extends Handler
{
    public function __construct()
    {
    }

    public function index()
    {
        $current_user = wp_get_current_user();
        View::LoadView('panel.PanelView', [
            'post' => 'دوره متخصص وردپرس'
        ]);
    }
}
