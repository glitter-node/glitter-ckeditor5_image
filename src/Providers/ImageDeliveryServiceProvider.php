<?php

namespace Plugins\Glitter\Ckeditor5Image\Providers;

use Illuminate\Support\ServiceProvider;
use Plugins\Glitter\Ckeditor5Image\Console\Commands\BuildVariantsCommand;
use Plugins\Glitter\Ckeditor5Image\Console\Commands\ConvertOriginalsCommand;
use Plugins\Glitter\Ckeditor5Image\Console\Commands\PruneVariantsCommand;
use Plugins\Glitter\Ckeditor5Image\Console\Commands\RevertOriginalsCommand;

/**
 * glitter-ckeditor5_image 서비스 프로바이더.
 *
 * 코어의 `PluginServiceProvider` 가 `plugins/&#42;/src/Providers/&#42;ServiceProvider.php` 를
 * 자동으로 발견해 등록한다 — 별도 선언이 필요 없다.
 */
class ImageDeliveryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                BuildVariantsCommand::class,
                ConvertOriginalsCommand::class,
                RevertOriginalsCommand::class,
                PruneVariantsCommand::class,
            ]);
        }
    }
}
