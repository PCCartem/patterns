<?php
namespace App\Commands;

use App\Core\Command;

class SimpleCommand extends Command {

    public function execute()
    {
        return "Send just email (fake)";
    }

}