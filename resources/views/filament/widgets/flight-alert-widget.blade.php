{{-- resources/views/filament/widgets/flight-alert-widget.blade.php --}}

<x-filament-widgets::widget>
    <x-filament::section>
        @php
            $flightsWithUpcomingForecast = $this->getFlightsWithUpcomingForecast();
           
        @endphp

        @if ($flightsWithUpcomingForecast->isNotEmpty())
            <div style="background-color: #f8d7da; color: #721c24; padding: 10px; border: 1px solid #f5c6cb; border-radius: 5px; margin-bottom: 15px;">
                <strong>⚠️ Alert!</strong> Ada {{ $flightsWithUpcomingForecast->count() }} flight yang forecast-nya mendekati hari ini.
            </div>
            <ul>
                @foreach ($flightsWithUpcomingForecast as $flight)
                    <li>
                        Flight Reference: {{ $flight['MFG_task_card_reference'] }}
                    </li>
                @endforeach
            </ul>
        @else
            <div style="padding: 10px; color: #155724;">
                <strong>✔️ Semua baik-baik saja!</strong> Tidak ada flight yang forecast-nya mendekati hari ini.
            </div>
        @endif
    </x-filament::section>
</x-filament-widgets::widget>
