<?php

namespace AdzChappers\IconicappForLaravel;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    private const ICONS = [
        'announcement',
        'archive',
        'arrow-down-left',
        'arrow-down-right',
        'arrow-down',
        'arrow-left',
        'arrow-right',
        'arrow-up-left',
        'arrow-up-right',
        'arrow-up',
        'at-sign',
        'badge',
        'battery-charging',
        'battery-full',
        'battery-low',
        'battery-medium',
        'battery',
        'bell-off',
        'bell',
        'book',
        'box',
        'briefcase',
        'building-store',
        'building',
        'calendar',
        'chart',
        'check-circle',
        'check',
        'chevron-down',
        'chevron-left',
        'chevron-right',
        'chevron-up',
        'clipboard',
        'clock',
        'close-circle',
        'close',
        'cloud',
        'code',
        'columns',
        'copy',
        'cursor',
        'dashboard',
        'dollar',
        'dots-horizontal',
        'dots-vertical',
        'download',
        'edit',
        'emoji-happy',
        'emoji-sad',
        'eye-off',
        'eye',
        'fast-forward',
        'file-minus',
        'file-plus',
        'file-text',
        'file',
        'film',
        'filter',
        'flag',
        'folder-minus',
        'folder-plus',
        'folder',
        'globe',
        'grid-masonry',
        'grid',
        'hashtag',
        'headphones',
        'heart',
        'help',
        'home',
        'inbox',
        'information',
        'key',
        'link',
        'lock-unlocked',
        'lock',
        'log-in',
        'log-out',
        'mail',
        'map',
        'maximize',
        'menu',
        'message',
        'microphone-mute',
        'microphone',
        'minimize',
        'minus-circle',
        'minus',
        'monitor',
        'moon',
        'music',
        'pause',
        'percentage',
        'phone-call-cross',
        'phone-call-forward',
        'phone-call-hang-up',
        'phone-call-incoming',
        'phone-call-outgoing',
        'phone-call',
        'phone',
        'pie-chart',
        'pin',
        'play',
        'plug',
        'plus-circle',
        'plus',
        'print',
        'redo',
        'refresh',
        'rewind',
        'rows',
        'search',
        'send',
        'server',
        'settings-sliders',
        'settings',
        'share',
        'shield',
        'shopping-bag',
        'shopping-basket',
        'shopping-cart',
        'skip-back',
        'skip-forward',
        'smartphone',
        'speaker',
        'star',
        'stop',
        'sun',
        'table-columns',
        'table-rows',
        'tablet',
        'tag',
        'target',
        'trash',
        'trending-down',
        'trending-up',
        'undo',
        'upload',
        'user-check',
        'user-cross',
        'user-minus',
        'user-plus',
        'user',
        'users',
        'video',
        'warning-triangle',
        'wifi-no-connection',
        'wifi',
        'zoom-in',
        'zoom-out',
    ];

    public function boot(): void
    {
        $this->loadViewsFrom(
            __DIR__ . '/../resources/views',
            'iconic'
        );

        foreach (self::ICONS as $icon) {
            Blade::component(
                'iconic::components.' . $icon,
                'iconic-' . $icon
            );
        }

        if ($this->app->runningInConsole()) {
            // --tag=iconic-svg --force
            // Only publish Iconic SVG to public/vendor/iconic/svg
            $this->publishes([
                __DIR__ . '/../resources/images/svg' => public_path('vendor/iconic/svg'),
            ], 'iconic-svg');

            // --tag=iconic-png --force
            // Only publish all Iconic PNG to public/vendor/iconic/png
            $this->publishes([
                __DIR__ . '/../resources/images/png' => public_path('vendor/iconic/png'),
            ], 'iconic-png');

            // --tag=iconic-png-black --force
            // Only publish BLACK Iconic PNG to public/vendor/iconic/png/black
            $this->publishes([
                __DIR__ . '/../resources/images/png/black' => public_path('vendor/iconic/png/black'),
            ], 'iconic-png-black');

            // --tag=iconic-png-white --force
            // Only publish WHITE Iconic PNG to public/vendor/iconic/png/white
            $this->publishes([
                __DIR__ . '/../resources/images/png/white' => public_path('vendor/iconic/png/white'),
            ], 'iconic-png-white');
        }
    }
}
