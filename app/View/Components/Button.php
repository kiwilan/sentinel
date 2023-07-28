<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Button extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $color = 'primary', // primary, secondary, danger, warning, success, info, light, dark
        public string $size = 'xl', // sm, md, lg, xl, 2xl
        public string $align = 'left', // left, center, right
        public string $type = 'button', // button, submit, reset
        public ?string $href = null,
        public bool $external = false,

        public ?string $icon = null,
        public int $iconSize = 6,

        public bool $full = false,
        public bool $disabled = false,
        public bool $outlined = false,

        public bool $loading = false,
        public string $loadingWire = 'save',
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        $colorClass = match ($this->color) {
            'primary' => 'bg-primary-600 text-white hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600',
            'secondary' => 'bg-secondary-500 hover:bg-secondary-600',
            'danger' => 'bg-danger-500 hover:bg-danger-600',
            // 'warning' => 'bg-warning-500 hover:bg-warning-600',
            // 'success' => 'bg-success-500 hover:bg-success-600',
            // 'info' => 'bg-info-500 hover:bg-info-600',
            // 'light' => 'bg-white hover:bg-white text-black dark:bg-gray-700 dark:text-white',
            // 'dark' => 'bg-dark-500 hover:bg-dark-600',
            default => '',
        };

        if ($this->outlined) {
            $outlineClass = match ($this->color) {
                'primary' => 'border border-primary-500 text-primary-500 hover:bg-primary-500 hover:text-white text-primary-500 dark:text-primary-500 dark:hover:text-white',
                'secondary' => 'text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-300/10 dark:text-gray-100 dark:ring-gray-400 dark:hover:bg-gray-50/10',
                'danger' => 'border border-danger-500 text-danger-500 hover:bg-danger-500 hover:text-white dark:text-danger-500 dark:border-danger-500 dark:hover:bg-danger-500 dark:hover:text-white',
                // 'warning' => 'border border-warning-500 text-warning-500 hover:bg-warning-500 hover:text-white',
                // 'success' => 'border border-success-500 text-success-500 hover:bg-success-500 hover:text-white',
                // 'info' => 'border border-info-500 text-info-500 hover:bg-info-500 hover:text-white',
                'light' => 'border border-white text-white hover:bg-white hover:text-black',
                // 'dark' => 'border border-dark-500 text-dark-500 hover:bg-dark-500 hover:text-white',
                default => 'border border-primary-500 text-primary-500 hover:bg-primary-500 hover:text-white',
            };
            $outlineClass .= ' bg-transparent';
        }

        $sizeClass = match ($this->size) {
            'sm' => 'px-2 py-1 text-xs',
            'md' => 'px-2 py-1 text-sm',
            'lg' => 'px-2.5 py-1.5 text-sm',
            'xl' => 'px-3 py-2 text-sm',
            '2xl' => 'px-3.5 py-2.5 text-sm',
            default => 'px-2.5 py-1.5 text-sm',
        };

        $alignClass = match ($this->align) {
            'left' => 'ml-auto',
            'center' => 'mx-auto',
            'right' => 'mr-auto',
            default => 'mx-auto',
        };
        $this->align = $alignClass;

        $typoClass = 'font-semibold';
        $extraStyle = 'rounded-md shadow-sm';
        $disabledClass = 'opacity-50 cursor-not-allowed';
        $fullClass = 'w-full mx-auto flex justify-center';

        $styleClass = "{$colorClass} {$sizeClass} {$typoClass} {$extraStyle}";

        if ($this->outlined) {
            $styleClass .= " {$outlineClass}";
        }

        if ($this->disabled) {
            $styleClass .= " {$disabledClass}";
        }

        return view('components.button', [
            'style' => $styleClass,
            'isFull' => $this->full,
            'fullStyle' => $fullClass,
        ]);
    }
}
