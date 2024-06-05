<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeView extends Command
{
    protected $signature = 'make:view {name}';

    protected $description = 'Create a new view file';

    public function handle()
    {
        $name = $this->argument('name');

        // Extract folder and file name from the input
        $segments = explode('.', $name);
        $fileName = array_pop($segments);
        $folderPath = resource_path('views/' . implode('/', $segments));

        // Create folder if it doesn't exist
        if (!File::exists($folderPath)) {
            File::makeDirectory($folderPath, 0755, true);
        }

        // Create the view file
        $filePath = $folderPath . '/' . $fileName . '.blade.php';

        if (File::exists($filePath)) {
            $this->error('View already exists!');
            return;
        }

        File::put($filePath, '');

        $this->info('View created successfully: ' . $filePath);
    }
}
