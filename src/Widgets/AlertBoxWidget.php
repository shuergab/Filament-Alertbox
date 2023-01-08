<?php

namespace KoalaFacade\FilamentAlertBox\Widgets;

use Filament\Support\Concerns\EvaluatesClosures;
use Filament\Support\Concerns\HasExtraAttributes;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use KoalaFacade\FilamentAlertBox\Concerns\HasType;
use KoalaFacade\FilamentAlertBox\Concerns\Widget\HasHelperText;
use KoalaFacade\FilamentAlertBox\Concerns\Widget\HasIcon;
use KoalaFacade\FilamentAlertBox\Concerns\Widget\HasLabel;
use Livewire\Component;

class AlertBoxWidget extends Component
{
    use EvaluatesClosures,
        HasExtraAttributes,
        HasType,
        HasIcon,
        HasLabel,
        HasHelperText;

    protected static string $view = 'filament-alertbox::widgets.filament-alertbox';

    /** @var int | string | array<int, string> */
    protected int | string | array $columnSpan = 1;

    /**
     * @return int | string | array<int, string>
     */
    public function getColumnSpan(): int | string | array
    {
        return $this->columnSpan;
    }

    public function render(): Factory | View | Application
    {
        return view(static::$view);
    }
}