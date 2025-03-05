<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index()
    {
        return view('yourgainz.menuejercicios');
    }

    public function getExercises($muscle)
    {
        $muscleMapping = [
            'Pecho' => 'chest',
            'Espalda' => 'back',
            'Hombros' => 'shoulder',
            'Brazos' => 'biceps',
            'Piernas' => 'quads',
            'Abdominales' => 'abdominals'
        ];

        if (!isset($muscleMapping[$muscle])) {
            return response()->json(['error' => 'Músculo no reconocido'], 400);
        }

        $muscleEnglish = $muscleMapping[$muscle];
        $apiUrl = env('API_URL');

        try {
            $response = Http::get($apiUrl);

            if ($response->failed()) {
                return response()->json(['error' => 'Error al consumir la API'], 500);
            }

            $exercises = collect($response->json()['exercises'])
                ->where('muscle', $muscleEnglish)
                ->values();

            return response()->json($exercises);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error en la petición'], 500);
        }
    }
}

