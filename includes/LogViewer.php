<?php
namespace WPLogViewer;
defined('ABSPATH') || die;


class LogViewer
{
    private static ?LogViewer $instance = null;
    private string $logFile;

    public function init(): void
    {
        error_log("initialisation du plugin");
    }
    public static function getInstance(): LogViewer
    {
        if(is_null(self::$instance))
        {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public static function activate(): void
    {

    }
    public static function desactivate(): void
    {

    }
    public static function desinstall(): void
    {

    }
    public function addAdminMenu(): void
    {

    }
    public function handlerLogClear():void
    {

    }
    public function handlerLogPage():void
    {

    }

}