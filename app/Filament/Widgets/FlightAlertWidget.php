<?php

namespace App\Filament\Widgets;

use App\Models\Flight;
use Carbon\Carbon;
use Filament\Widgets\Widget;

class FlightAlertWidget extends Widget
{
    protected static string $view = 'filament.widgets.flight-alert-widget';

    public function getFlightsWithUpcomingForecast()
    {
        $today = Carbon::today();
        return Flight::where('forecast', '>=', $today)
            ->where('forecast', '<=', $today->copy()->addDays(30))
            ->get();
    }
}
